<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Carrossel;
use App\Models\CarrosselLink;
use App\Models\Perfil;
use Illuminate\Support\Facades\Storage;

class carrosselController extends Controller
{
    public function index()
    {
        $carrosseis = Carrossel::with('carrosselLink')->get();
        return view('pages.carrossel.index', compact('carrosseis'));
    }

    public function create()
    {
        $perfis = Perfil::all();
        return view('pages.carrossel.create', compact('perfis'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'carrossel_titulo' => 'required|string|max:255',
            'carrossel_descricao' => 'nullable|string|max:255',
            'carrossel_img' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'links.*.carrossel_link_url' => 'nullable|url',
        ]);

        // Processamento da imagem
        if ($request->hasFile('carrossel_img')) {
            // Gerar um nome único para a imagem
            $imageName = time() . '.' . $request->file('carrossel_img')->extension();
            // Salvar a imagem na pasta 'public/images/carrossel_photo' sem precisar do storage link
            $request->file('carrossel_img')->move(public_path('images/carrossel_photo'), $imageName);
            $validated['carrossel_img'] = 'carrossel_photo/' . $imageName;
        }

        $carrossel = Carrossel::create($validated);

        // Criar o link do carrossel se ele existir
        if ($request->filled('carrossel_link_url')) {
            CarrosselLink::create([
                'Links_carrossel_id' => $carrossel->carrossel_id,
                'carrossel_link_url' => $request->carrossel_link_url,
            ]);
        }

        return redirect()->route('admin.carrossel.index')->with('success', 'Carrossel criado com sucesso!');
    }

    public function show($id)
    {
        $carrossel = Carrossel::with('carrosselLink')->findOrFail($id);
        return view('pages.carrossel.show', compact('carrossel'));
    }

    public function edit($id)
    {
        $perfis = Perfil::all();
        $carrossel = Carrossel::with('carrosselLink')->findOrFail($id);
        return view('pages.carrossel.edit', compact('carrossel','perfis'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'carrossel_titulo' => 'required|string|max:255',
            'carrossel_descricao' => 'nullable|string',
            'carrossel_img' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'perfil_id' => 'required|exists:perfil,perfil_id',
            'carrossel_link_url' => 'nullable|url', // Adiciona validação para o link
        ]);
    
        $carrossel = Carrossel::findOrFail($id);
        $carrossel->carrossel_titulo = $request->carrossel_titulo;
        $carrossel->carrossel_descricao = $request->carrossel_descricao;
        $carrossel->carrossel_perfil_id = $request->perfil_id;
    
        // Verificar se foi enviada uma nova imagem
        if ($request->hasFile('carrossel_img')) {
            // Excluir a imagem antiga se existir
            if ($carrossel->carrossel_img && file_exists(public_path('images/' . $carrossel->carrossel_img))) {
                unlink(public_path('images/' . $carrossel->carrossel_img));
            }

            // Armazenar a nova imagem na pasta 'public/images/carrossel_photo'
            $imageName = time() . '.' . $request->file('carrossel_img')->extension();
            $request->file('carrossel_img')->move(public_path('images/carrossel_photo'), $imageName);
            $carrossel->carrossel_img = 'carrossel_photo/' . $imageName;
        }
            
        // Atualizar ou criar o link
        $carrossel->carrosselLink()->updateOrCreate(
            ['Links_carrossel_id' => $carrossel->carrossel_id],
            ['carrossel_link_url' => $request->carrossel_link_url]
        );
    
        $carrossel->save();
    
        return redirect()->route('admin.carrossel.index')->with('success', 'Carrossel atualizado com sucesso!');
    }
    

    public function destroy($id)
    {
        $carrossel = Carrossel::findOrFail($id);

        if ($carrossel->carrossel_img && file_exists(public_path('images/' . $carrossel->carrossel_img))) {
            // Excluir a imagem do sistema de arquivos
            unlink(public_path('images/' . $carrossel->carrossel_img));
        }

        $carrossel->carrosselLink()->delete();

        $carrossel->delete();

        return redirect()->route('admin.carrossel.index')->with('success', 'Carrossel excluído com sucesso!');
    }
}