<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Perfil;
use App\Models\Projeto;
use Illuminate\Support\Facades\Storage;

class ProjetoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projetos = Projeto::all();
        return view('pages.projetos.index', compact('projetos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $perfis = Perfil::all();
        return view('pages.projetos.create', compact('perfis'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'projeto_titulo' => 'required|string|max:255',
            'projeto_descricao' => 'nullable|string|max:255',
            'projeto_img' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'pj_perfil_id' => 'required|exists:perfil,perfil_id'
        ]);
    
        // Processamento da imagem
        if ($request->hasFile('projeto_img')) {
            // Gerar um nome único para a imagem
            $imageName = time() . '.' . $request->file('projeto_img')->extension();
            // Salvar a imagem na pasta 'public/images/projeto_photo' sem precisar do storage link
            $request->file('projeto_img')->move(public_path('images/projeto_photo'), $imageName);
            $validated['projeto_img'] = 'projeto_photo/' . $imageName;
        }
    
        Projeto::create($validated);
        return redirect()->route('admin.projeto.index')->with('success', 'Projeto criado com sucesso.');
    }
    
    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $projeto = Projeto::findOrFail($id);
        return view('pages.projetos.show', compact('projeto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $projeto = Projeto::findOrFail($id);
        $perfis = Perfil::all();
        return view('pages.projetos.edit', compact('projeto', 'perfis'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'projeto_titulo' => 'required|string|max:255',
            'projeto_descricao' => 'nullable|string|max:255',
            'projeto_img' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'pj_perfil_id' => 'required|exists:perfil,perfil_id'
        ]);

        $projeto = Projeto::findOrFail($id);

        // Atualizar os campos do projeto
        $projeto->projeto_titulo = $validated['projeto_titulo'];
        $projeto->projeto_descricao = $validated['projeto_descricao'];
        $projeto->pj_perfil_id = $validated['pj_perfil_id'];

        // Verificar se foi enviada uma nova imagem
        if ($request->hasFile('projeto_img')) {
            // Excluir a imagem antiga se existir
            if ($projeto->projeto_img && file_exists(public_path('images/' . $projeto->projeto_img))) {
                unlink(public_path('images/' . $projeto->projeto_img));
            }

            // Armazenar a nova imagem na pasta 'public/images/projeto_photo'
            $imageName = time() . '.' . $request->file('projeto_img')->extension();
            $request->file('projeto_img')->move(public_path('images/projeto_photo'), $imageName);
            $projeto->projeto_img = 'projeto_photo/' . $imageName;
        }

        $projeto->save();

        return redirect()->route('admin.projeto.index')->with('success', 'Projeto atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $projeto = Projeto::findOrFail($id);

        if ($projeto->projeto_img && file_exists(public_path('images/' . $projeto->projeto_img))) {
            // Excluir a imagem do sistema de arquivos
            unlink(public_path('images/' . $projeto->projeto_img));
        }

        $projeto->delete();
        return redirect()->route('admin.projeto.index')->with('success', 'Projeto excluído com sucesso!');
    }
}
