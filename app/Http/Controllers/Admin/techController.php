<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Perfil;
use App\Models\Tecnologia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class techController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $techs = Tecnologia::all();
        return view("pages.tecnologias.index", compact('techs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $perfis = Perfil::all(); // Chamando todos os perfis para fazer a relação
        return view('pages.tecnologias.create', compact('perfis'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validação dos dados
        $validatedData = $request->validate([
            'tech_titulo' => 'required|string|max:255',
            'tech_img' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Adicionando tipos de arquivos permitidos e limite de tamanho
            'perfil_id' => 'required|exists:perfil,perfil_id' // Garantindo que perfil_id existe na tabela perfis
        ]);

        // Processamento da imagem
        if ($request->hasFile('tech_img')) {
            // Armazenando a imagem na pasta 'tech_icon'
            $validatedData['tech_img'] = $request->file('tech_img')->store('tech_icon', 'public');
        }

        // Criação do registro na tabela
        Tecnologia::create($validatedData);

        // Redirecionamento com mensagem de sucesso
        return redirect()->route('admin.tech.index')->with('success', 'Tecnologia criada com sucesso.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Tecnologia $tecnologia)
    {
        return view('pages.tecnologias.show', compact('tecnologia'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $tecnologia = Tecnologia::findOrFail($id);
        $perfis = Perfil::all(); // Se precisar de perfis para o dropdown
        return view('pages.tecnologias.edit', compact('tecnologia', 'perfis'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validação dos dados
        $request->validate([
            'tech_titulo' => 'required|string|max:255',
            'tech_img' => 'nullable|image',
            'perfil_id' => 'required|exists:perfil,perfil_id'
        ]);

        // Encontrar a tecnologia pelo ID
        $tecnologia = Tecnologia::findOrFail($id);

        // Atualizar o título e perfil_id
        $tecnologia->tech_titulo = $request->input('tech_titulo');
        $tecnologia->perfil_id = $request->input('perfil_id');

        // Verificar se foi enviada uma nova imagem
        if ($request->hasFile('tech_img')) {
            // Excluir a imagem antiga se existir
            if ($tecnologia->tech_img && Storage::exists('public/' . $tecnologia->tech_img)) {
                Storage::delete('public/' . $tecnologia->tech_img);
            }

            // Armazenar a nova imagem na pasta 'tech_icon'
            $tecnologia->tech_img = $request->file('tech_img')->store('tech_icon', 'public');
        }

        // Salvar as alterações
        $tecnologia->save();

        // Redirecionar com uma mensagem de sucesso
        return redirect()->route('admin.tech.index')->with('success', 'Tecnologia atualizada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $tecnologia = Tecnologia::findOrFail($id);

        // Verificar se a tecnologia tem uma imagem associada e se ela existe no storage
        if ($tecnologia->tech_img && Storage::exists('public/' . $tecnologia->tech_img)) {
            // Excluir a imagem do storage
            Storage::delete('public/' . $tecnologia->tech_img);
        }

        // Deletar a tecnologia do banco de dados
        $tecnologia->delete();

        // Redirecionar de volta com uma mensagem de sucesso
        return redirect()->route('admin.tech.index')->with('success', 'Tecnologia excluída com sucesso!');
    }
}
