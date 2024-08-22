<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Perfil;
use App\Models\Tecnologia;
use Illuminate\Http\Request;

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
        $request->validate([
            'tech_titulo' => 'required|string|max:255',
            'tech_img' => 'nullable|image',
            'perfil_id' => 'required|exists:perfis,perfil_id' // Corrigido de 'perfil' para 'perfis'
        ]);

        $data = $request->all(); // Salvando

        if ($request->hasFile('tech_img')) {
            $data['tech_img'] = $request->file('tech_img')->store('images', 'public');
        }

        Tecnologia::create($data);

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
    public function edit(Tecnologia $tecnologia)
    {
        $perfis = Perfil::all();
        return view('pages.tecnologias.edit', compact('tecnologia', 'perfis'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tecnologia $tecnologia)
    {
        $request->validate([
            'tech_titulo' => 'required|string|max:255',
            'tech_img' => 'nullable|image',
            'perfil_id' => 'required|exists:perfis,perfil_id', // Corrigido de 'perfil' para 'perfis'
        ]);

        $data = $request->all();

        if ($request->hasFile('tech_img')) {
            $data['tech_img'] = $request->file('tech_img')->store('images', 'public');
        }

        $tecnologia->update($data);

        return redirect()->route('admin.tech.index')->with('success', 'Tecnologia atualizada com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tecnologia $tecnologia)
    {
        $tecnologia->delete();
        return view('pages.tecnologias.index');
    }
}
