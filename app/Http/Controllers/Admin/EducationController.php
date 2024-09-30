<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Education;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EducationController extends Controller
{
    public function index()
    {
        $educations = Education::all(); // ou a forma como você busca suas educações
        return view("pages.education.index", compact('educations'));
    }
    
    public function create()
    {
        $education = Education::all();
        return view('pages.education.create', compact('education'));
    }

    public function store(Request $request)
    {
        // Validação dos dados
        $validated = $request->validate([
            'education_institution' => 'required|string|max:255',
            'education_course' => 'required|string|max:255',
            'education_photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'education_modality' => 'nullable|string|max:255',
            'education_address' => 'nullable|string|max:255',
            'education_start' => 'nullable|date|after_or_equal:1900-01-01',
            'education_end' => 'nullable|date|after_or_equal:education_start',
        ]);
    
        // Processamento da imagem
        if ($request->hasFile('education_photo')) {
            // Gerar um nome único para a imagem
            $imageName = time() . '.' . $request->file('education_photo')->extension();
            // Salvar a imagem na pasta 'public/images/education_img'
            $request->file('education_photo')->move(public_path('images/education_img'), $imageName);
            // Salvar o caminho correto no banco de dados
            $validated['education_photo'] = 'education_img/' . $imageName; // Corrigir o caminho
        }
    
        // Criação do registro na tabela
        Education::create($validated);
    
        // Redirecionamento com mensagem de sucesso
        return redirect()->route('admin.education.index')->with('success', 'Formação criada com sucesso.');
    }
    
    public function edit($id)
    {
        $education = Education::findOrFail($id);
        return view('pages.education.edit', compact('education'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'education_institution' => 'required|string|max:255',
            'education_course' => 'required|string|max:255',
            'education_photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'education_modality' => 'nullable|string|max:255',
            'education_address' => 'nullable|string|max:255',
            'education_start' => 'nullable|date|after_or_equal:1900-01-01',
            'education_end' => 'nullable|date|after_or_equal:education_start',
        ]);

        $education = Education::findOrFail($id);

        // Verificar se foi enviada uma nova imagem
        if ($request->hasFile('education_photo')) {
            // Excluir a imagem antiga se existir
            if ($education->education_photo && file_exists(public_path('images/' . $education->education_photo))) {
                unlink(public_path('images/' . $education->education_photo));
            }

            // Armazenar a nova imagem na pasta 'public/images/education_img'
            $imageName = time() . '.' . $request->file('education_photo')->extension();
            $request->file('education_photo')->move(public_path('images/education_img'), $imageName);
            $validated['education_photo'] = 'education_img/' . $imageName; // Corrigir o caminho
        } else {
            // Se não houver nova imagem, manter a foto existente
            $validated['education_photo'] = $education->education_photo;
        }

        // Atualizar os campos do modelo
        $education->update($validated);

        return redirect()->route('admin.education.index')->with('success', 'Educação atualizada com sucesso!');
    }




    public function destroy($id)
    {
        $education = Education::findOrFail($id);
        $education->delete();

        return redirect()->route('admin.education.index')->with('success', 'Educação excluída com sucesso!');
    }

}
