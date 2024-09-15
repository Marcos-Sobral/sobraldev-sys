<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Processo;
use App\Models\Projeto;
use App\Models\ProcessoLink;
use App\Models\Tecnologia;
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
        $tecnologias = Tecnologia::all();
        return view('pages.processos.create', compact('projetos', 'tecnologias'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'processo_titulo' => 'required|string|max:255',
            'processo_descricao' => 'nullable|string',
            'processo_img' => 'nullable|image',
            'pr_projeto_id' => 'required|exists:projetos,projeto_id',
            'tecnologias' => 'nullable|array',
            'tecnologias.*' => 'exists:tecnologias,tech_id'
        ]);

        // Processamento da imagem
        if ($request->hasFile('processo_img')) {
            // Gerar um nome único para a imagem
            $imageName = time() . '.' . $request->file('processo_img')->extension();
            // Salvar a imagem na pasta 'public/images/processo_photo' sem precisar do storage link
            $request->file('processo_img')->move(public_path('images/processo_photo'), $imageName);
            $validated['processo_img'] = 'processo_photo/' . $imageName;
        }

        $processo = Processo::create($validated);
    
        // Associar as tecnologias ao processo
        if ($request->has('tecnologias')) {
            $processo->tecnologias()->sync($request->tecnologias);
        }
    
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
        $processo = Processo::with('tecnologias','processoLinks')->findOrFail($id); // Correção para 'processoLinks'
        return view('pages.processos.show', compact('processo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $processo = Processo::with('processoLinks', 'tecnologias')->findOrFail($id); // Carrega o processo com tecnologias
        $tecnologias = Tecnologia::all(); // Carrega todas as tecnologias
        $projetos = Projeto::all(); // Carrega todos os projetos
    
        return view('pages.processos.edit', compact('processo', 'projetos', 'tecnologias'));
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
            'tecnologias' => 'nullable|array', // Validação para tecnologias
            'tecnologias.*' => 'exists:tecnologias,tech_id',
        ]);
    
        // Processamento da imagem
        if ($request->hasFile('processo_img')) {
            // Excluir a imagem antiga se existir
            if ($processo->processo_img && file_exists(public_path('images/' . $processo->processo_img))) {
                unlink(public_path('images/' . $processo->processo_img));
            }
    
            // Armazenar a nova imagem na pasta 'public/images/processo_photo'
            $imageName = time() . '.' . $request->file('processo_img')->extension();
            $request->file('processo_img')->move(public_path('images/processo_photo'), $imageName);
            $validated['processo_img'] = 'processo_photo/' . $imageName;
        }
    
        // Atualizar o processo
        $processo->update($validated);
    
        // Atualizar tecnologias associadas ao processo
        if ($request->has('tecnologias')) {
            $processo->tecnologias()->sync($request->input('tecnologias'));
        }

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
