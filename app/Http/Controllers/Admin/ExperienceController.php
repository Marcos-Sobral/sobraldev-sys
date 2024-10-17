<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    public function index()
    {
        $experiences = Experience::all();
        return view("pages.experience.index", compact('experiences'));
    }
    
    public function create()
    {
        return view('pages.experience.create');
    }

    public function store(Request $request)
    {
        // Validação dos dados
        $validated = $request->validate([
            'experience_enterprise' => 'required|string|max:255',
            'experience_position' => 'required|string|max:255',
            'experience_photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'experience_description' => 'nullable|string',
            'experience_address' => 'nullable|string|max:255',
            'experience_start' => 'nullable|date|after_or_equal:1900-01-01',
            'experience_end' => 'nullable|date|after_or_equal:experience_start',
        ]);

        // Processamento da imagem
        if ($request->hasFile('experience_photo')) {
            $imageName = time() . '.' . $request->file('experience_photo')->extension();
            $request->file('experience_photo')->move(public_path('images/experience_img'), $imageName);
            $validated['experience_photo'] = 'experience_img/' . $imageName;
        }

        // Criação do registro na tabela
        Experience::create($validated);

        return redirect()->route('admin.experience.index')->with('success', 'Experiência criada com sucesso.');
    }
    
    public function edit($id)
    {
        $experience = Experience::findOrFail($id);
        return view('pages.experience.edit', compact('experience'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'experience_enterprise' => 'required|string|max:255',
            'experience_position' => 'required|string|max:255',
            'experience_photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'experience_description' => 'nullable|string',
            'experience_address' => 'nullable|string|max:255',
            'experience_start' => 'nullable|date|after_or_equal:1900-01-01',
            'experience_end' => 'nullable|date|after_or_equal:experience_start',
        ]);

        $experience = Experience::findOrFail($id);

        // Verificar se foi enviada uma nova imagem
        if ($request->hasFile('experience_photo')) {
            if ($experience->experience_photo && file_exists(public_path('images/' . $experience->experience_photo))) {
                unlink(public_path('images/' . $experience->experience_photo));
            }

            $imageName = time() . '.' . $request->file('experience_photo')->extension();
            $request->file('experience_photo')->move(public_path('images/experience_img'), $imageName);
            $validated['experience_photo'] = 'experience_img/' . $imageName;
        } else {
            $validated['experience_photo'] = $experience->experience_photo;
        }

        // Atualizar os campos do modelo
        $experience->update($validated);

        return redirect()->route('admin.experience.index')->with('success', 'Experiência atualizada com sucesso!');
    }

    public function destroy($id)
    {
        $experience = Experience::findOrFail($id);

        if ($experience->experience_photo && file_exists(public_path('images/' . $experience->experience_photo))) {
            unlink(public_path('images/' . $experience->experience_photo));
        }

        $experience->delete();

        return redirect()->route('admin.experience.index')->with('success', 'Experiência excluída com sucesso!');
    }
}
