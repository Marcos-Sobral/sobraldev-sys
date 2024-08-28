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

        if ($request->hasFile('carrossel_img')) {
            $validated['carrossel_img'] = $request->file('carrossel_img')->store('carrossel_photo', 'public');
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
    
        // Atualizar a imagem se for enviada
        if ($request->hasFile('carrossel_img')) {
            $path = $request->file('carrossel_img')->store('carrossel_images', 'public');
            $carrossel->carrossel_img = $path;
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

        if ($carrossel->carrossel_img && Storage::exists('public/' . $carrossel->carrossel_img)) {
            Storage::delete('public/' . $carrossel->carrossel_img);
        }

        $carrossel->carrosselLink()->delete();

        $carrossel->delete();

        return redirect()->route('admin.carrossel.index')->with('success', 'Carrossel excluído com sucesso!');
    }
}
