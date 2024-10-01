<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        dd($users);
        return view('pages.user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::all();
        return view('pages.user.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::findOrFail($id);
        return view('pages.user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validação dos dados
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'summary' => 'nullable|string|max:5000'
        ]);

        $user = User::findOrFail($id);

        // Verificar se foi enviada uma nova imagem
        if ($request->hasFile('photo')) {
            // Excluir a imagem antiga se existir
            if ($user->photo && file_exists(public_path('images/' . $user->photo))) {
                unlink(public_path('images/' . $user->photo));
            }

            // Armazenar a nova imagem na pasta 'public/images/education_img'
            $imageName = time() . '.' . $request->file('photo')->extension();
            $request->file('photo')->move(public_path('images/user_img'), $imageName);
            $validated['photo'] = 'user_img/' . $imageName; // Corrigir o caminho
        } else {
            // Se não houver nova imagem, manter a foto existente
            $validated['photo'] = $user->photo;
        }

        // Atualizar os campos do modelo
        $user->update($validated);
        
        return redirect()->route('dashboard')->with('success', 'Usuário atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $users = User::findOrFail($id);

        if ($users->photo && file_exists(public_path('images/' . $users->photo))) {
            // Excluir a imagem do sistema de arquivos
            unlink(public_path('images/' . $users->photo));
        }

        $users->delete();

        return redirect()->route('dashboard')->with('success', 'Carrossel excluído com sucesso!');
    }
}
