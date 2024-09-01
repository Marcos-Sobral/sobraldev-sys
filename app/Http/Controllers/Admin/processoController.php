<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Processo;
use App\Models\Projeto;
use App\Models\ProcessoLink;
use Illuminate\Support\Facades\Storage;

class ProcessoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $processos = Processo::with('projeto')->get();
        return view('pages.processos.index', compact('processos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $projetos = Projeto::all();
        return view('pages.processos.create', compact('projetos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'processo_titulo' => 'required|string|max:255',
            'processo_descricao' => 'nullable|string|max:255',
            'processo_img' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'pr_projeto_id' => 'required|exists:projetos,projeto_id',
            'links.*.processo_link_nome' => 'nullable|string|max:255',
            'links.*.processo_link_url' => 'nullable|url',
            'links.*.processo_link_class' => 'nullable|string',
        ]);
    
        // Processamento da imagem
        if ($request->hasFile('processo_img')) {
            $validated['processo_img'] = $request->file('processo_img')->store('processo_photo', 'public');
        }
    
        $processo = Processo::create($validated);
    
        // Adicionar links, se existirem
        if ($request->has('links')) {
            foreach ($request->input('links') as $link) {
                if (!empty($link['processo_link_nome']) && !empty($link['processo_link_url'])) {
                    ProcessoLink::create([
                        'link_processo_id' => $processo->processo_id,  // Use a chave estrangeira correta
                        'processo_link_nome' => $link['processo_link_nome'],
                        'processo_link_url' => $link['processo_link_url'],
                        'processo_link_class' => $link['processo_link_class'],
                    ]);
                }
            }
        }
    
        return redirect()->route('admin.projeto.show', ['id' => $processo->pr_projeto_id])
            ->with('success', 'Processo adicionado com sucesso!');
    }
    
    

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $processo = Processo::with('processoLinks')->findOrFail($id); // Correção para 'processoLinks'
        return view('pages.processos.show', compact('processo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $processo = Processo::with('processoLinks')->findOrFail($id); // Correção para 'processoLinks'
        $projetos = Projeto::all();

        return view('pages.processos.edit', compact('processo', 'projetos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $processoId)
    {
        $processo = Processo::findOrFail($processoId);
        $validated = $request->validate([
            'processo_titulo' => 'required|string|max:255',
            'processo_descricao' => 'nullable|string|max:255',
            'processo_img' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'pr_projeto_id' => 'required|exists:projetos,projeto_id',
            'links.*.processo_link_nome' => 'nullable|string|max:255',
            'links.*.processo_link_url' => 'nullable|url',
            'links.*.processo_link_class' => 'nullable|string',
        ]);
    
        // Processamento da imagem
        if ($request->hasFile('processo_img')) {
            if ($processo->processo_img && Storage::exists('public/' . $processo->processo_img)) {
                Storage::delete('public/' . $processo->processo_img);
            }
            $validated['processo_img'] = $request->file('processo_img')->store('processo_photo', 'public');
        }
    
        // Atualizar o processo
        $processo->update($validated);
    
        // Excluir todos os links antigos
        $processo->processoLinks()->delete();
    
        // Criar os novos links
        if ($request->has('links')) {
            foreach ($request->input('links') as $linkData) {
                if (!empty($linkData['processo_link_nome']) && !empty($linkData['processo_link_url'])) {
                    ProcessoLink::create([
                        'link_processo_id' => $processo->processo_id,
                        'processo_link_nome' => $linkData['processo_link_nome'],
                        'processo_link_url' => $linkData['processo_link_url'],
                        'processo_link_class' => $linkData['processo_link_class'],
                    ]);
                }
            }
        }
    
        return redirect()->route('admin.projeto.show', ['id' => $processo->pr_projeto_id])
            ->with('success', 'Processo atualizado com sucesso!');
    }
    
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $processo = Processo::findOrFail($id);

        if ($processo->processo_img && Storage::exists('public/' . $processo->processo_img)) {
            Storage::delete('public/' . $processo->processo_img);
        }

        $processo->processoLinks()->delete(); // Correção para 'processoLinks'

        $processo->delete();
        return redirect()->route('admin.projeto.index')->with('success', 'Processo excluído com sucesso!');
    }
}
