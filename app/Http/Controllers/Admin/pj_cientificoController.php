<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Perfil;
use App\Models\PJCientificoLink;
use App\Models\ProjetoCientifico;
use Illuminate\Support\Facades\Storage;

class pj_cientificoController extends Controller
{
    public function index()
    {
        $projetosCientificos = ProjetoCientifico::with('projetoCientificoLink')->get();
        return view('pages.cientifico.index', compact('projetosCientificos'));
    }

    public function create()
    {
        $perfis = Perfil::all();
        return view('pages.cientifico.create', compact('perfis'));
    }
    
    public function store(Request $request)
    {
        $validated = $request->validate([
            'pj_cientifico_titulo' => 'required|string|max:255',
            'pj_cientifico_descricao' => 'nullable|string|max:255',
            'pj_cientifico_img' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        if ($request->hasFile('pj_cientifico_img')) {
            $validated['pj_cientifico_img'] = $request->file('pj_cientifico_img')->store('pj_cientifico_photo', 'public');
        }
    
        $pj_cientifico = ProjetoCientifico::create($validated);
    
        // Criar o link do projeto científico, se existir
        if ($request->filled('pj_cientificos_url')) {
            PJCientificoLink::create([
                'link_projeto_cientifico_id' => $pj_cientifico->pj_cientifico_id, // Corrigido para usar a chave estrangeira correta
                'pj_cientificos_url' => $request->pj_cientificos_url,
                'pj_cientificos_link_nome' => $request->pj_cientificos_link_nome, // Se este campo existir
                'pj_cientificos_link_class' => $request->pj_cientificos_link_class ?? 'btn-outline-primary', // Classe padrão
            ]);
        }
    
        return redirect()->route('admin.cientifico.index')->with('success', 'Projeto Científico criado com sucesso!');
    }
    


    public function edit($id)
    {
        $perfis = Perfil::all();
        $projetosCientificos = ProjetoCientifico::with('projetoCientificoLink')->findOrFail($id);
        return view('pages.cientifico.edit', compact('projetosCientificos', 'perfis'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'pj_cientifico_titulo' => 'required|string|max:255',
            'pj_cientifico_descricao' => 'nullable|string|max:255',
            'pj_cientifico_img' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'pj_cientificos_url' => 'nullable|url',
            'pj_cientificos_link_nome' => 'nullable|string|max:255',
            'perfil_id' => 'required|exists:perfil,perfil_id',
        ]);
    
        $pj_cientifico = ProjetoCientifico::findOrFail($id);
        $pj_cientifico->update($validated);
    
        // Atualiza a imagem, se houver uma nova
        if ($request->hasFile('pj_cientifico_img')) {
            // Remove a imagem antiga, se existir
            if ($pj_cientifico->pj_cientifico_img && Storage::exists('public/' . $pj_cientifico->pj_cientifico_img)) {
                Storage::delete('public/' . $pj_cientifico->pj_cientifico_img);
            }
    
            // Armazena a nova imagem
            $path = $request->file('pj_cientifico_img')->store('pj_cientifico_images', 'public');
            $pj_cientifico->update(['pj_cientifico_img' => $path]);
        }
    
        // Atualiza ou cria o link científico
        if ($request->filled('pj_cientificos_url')) {
            $link = $pj_cientifico->projetoCientificoLink()->first();
            if ($link) {
                // Atualiza o link existente
                $link->update([
                    'pj_cientificos_url' => $request->pj_cientificos_url,
                    'pj_cientificos_link_nome' => $request->pj_cientificos_link_nome,
                ]);
            } else {
                // Cria um novo link, se não houver um existente
                PJCientificoLink::create([
                    'projeto_cientifico_id' => $pj_cientifico->id,
                    'pj_cientificos_url' => $request->pj_cientificos_url,
                    'pj_cientificos_link_nome' => $request->pj_cientificos_link_nome,
                ]);
            }
        } else {
            // Se o URL não for fornecido, apaga todos os links existentes, se houver
            $links = $pj_cientifico->projetoCientificoLink;
            if ($links) {
                foreach ($links as $link) {
                    $link->delete();
                }
            }
        }
    
        return redirect()->route('admin.cientifico.index')->with('success', 'Projeto Científico atualizado com sucesso!');
    }
    

    

    public function destroy($id)
    {
        $pj_cientifico = ProjetoCientifico::findOrFail($id);

        if ($pj_cientifico->pj_cientifico_img && Storage::exists('public/' . $pj_cientifico->pj_cientifico_img)) {
            Storage::delete('public/' . $pj_cientifico->pj_cientifico_img);
        }

        $pj_cientifico->projetoCientificoLink()->delete();
        $pj_cientifico->delete();

        return redirect()->route('admin.cientifico.index')->with('success', 'Projeto Científico excluído com sucesso!');
    }
}
