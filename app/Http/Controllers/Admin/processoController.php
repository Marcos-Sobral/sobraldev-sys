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
            'pr_projeto_id' => 'required|exists:projetos,projeto_id'
        ]);

        // Processamento da imagem
        if ($request->hasFile('processo_img')) {
            // Armazenando a imagem na pasta 'processo_photo'
            $validated['processo_img'] = $request->file('processo_img')->store('processo_photo', 'public');
        }

        $processo = Processo::create($validated);

        return redirect()->route('admin.projeto.show')->with('success', 'Processo criado com sucesso.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $processo = Processo::with('processoLink')->findOrFail($id);
        return view('pages.processos.show', compact('processo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $processo = Processo::findOrFail($id);
        $projetos = Projeto::all();
        return view('pages.processos.edit', compact('processo', 'projetos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'processo_titulo' => 'required|string|max:255',
            'processo_descricao' => 'nullable|string|max:255',
            'processo_img' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'pr_projeto_id' => 'required|exists:projetos,projeto_id'
        ]);

        $processo = Processo::findOrFail($id);

        // Atualizar o título, descrição e projeto_id
        $processo->processo_titulo = $validated['processo_titulo'];
        $processo->processo_descricao = $validated['processo_descricao'];
        $processo->pr_projeto_id = $validated['pr_projeto_id'];

        // Verificar se foi enviada uma nova imagem
        if ($request->hasFile('processo_img')) {
            // Excluir a imagem antiga se existir
            if ($processo->processo_img && Storage::exists('public/' . $processo->processo_img)) {
                Storage::delete('public/' . $processo->processo_img);
            }

            // Armazenar a nova imagem na pasta 'processo_photo'
            $processo->processo_img = $request->file('processo_img')->store('processo_photo', 'public');
        }

        $processo->save();

        return redirect()->route('admin.projeto.show')->with('success', 'Processo atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $processo = Processo::findOrFail($id);

        // Excluir a imagem associada se existir
        if ($processo->processo_img && Storage::exists('public/' . $processo->processo_img)) {
            Storage::delete('public/' . $processo->processo_img);
        }

        // Remover os links associados
        $processo->processoLink()->delete();

        $processo->delete();
        return redirect()->route('admin.processo.index')->with('success', 'Processo excluído com sucesso!');
    }
}
