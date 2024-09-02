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
    
        // Processamento da imagem
        if ($request->hasFile('pj_cientifico_img')) {
            // Gerar um nome único para a imagem
            $imageName = time() . '.' . $request->file('pj_cientifico_img')->extension();
            // Salvar a imagem na pasta 'public/images/pj_cientifico_photo' sem precisar do storage link
            $request->file('pj_cientifico_img')->move(public_path('images/pj_cientifico_photo'), $imageName);
            $validated['pj_cientifico_img'] = 'pj_cientifico_photo/' . $imageName;
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
        ]);
    
        $pj_cientifico = ProjetoCientifico::findOrFail($id);
    
        // Processamento da imagem
        if ($request->hasFile('pj_cientifico_img')) {
            // Deletar a imagem antiga, se existir
            if ($pj_cientifico->pj_cientifico_img && file_exists(public_path($pj_cientifico->pj_cientifico_img))) {
                unlink(public_path($pj_cientifico->pj_cientifico_img));
            }
    
            // Gerar um nome único para a nova imagem
            $imageName = time() . '.' . $request->file('pj_cientifico_img')->extension();
            // Salvar a nova imagem na pasta 'public/images/pj_cientifico_photo'
            $request->file('pj_cientifico_img')->move(public_path('images/pj_cientifico_photo'), $imageName);
            $validated['pj_cientifico_img'] = 'pj_cientifico_photo/' . $imageName;
        }
    
        $pj_cientifico->update($validated);
    
        // Atualizar o link do projeto científico, se existir
        if ($request->filled('pj_cientificos_url')) {
            $pj_cientifico_link = PJCientificoLink::where('link_projeto_cientifico_id', $pj_cientifico->pj_cientifico_id)->first();
            if ($pj_cientifico_link) {
                $pj_cientifico_link->update([
                    'pj_cientificos_url' => $request->pj_cientificos_url,
                    'pj_cientificos_link_nome' => $request->pj_cientificos_link_nome,
                    'pj_cientificos_link_class' => $request->pj_cientificos_link_class ?? 'btn-outline-primary',
                ]);
            } else {
                PJCientificoLink::create([
                    'link_projeto_cientifico_id' => $pj_cientifico->pj_cientifico_id,
                    'pj_cientificos_url' => $request->pj_cientificos_url,
                    'pj_cientificos_link_nome' => $request->pj_cientificos_link_nome,
                    'pj_cientificos_link_class' => $request->pj_cientificos_link_class ?? 'btn-outline-primary',
                ]);
            }
        }
    
        return redirect()->route('admin.cientifico.index')->with('success', 'Projeto Científico atualizado com sucesso!');
    }
    
    
    
    

    

    public function destroy($id)
    {
        $pj_cientifico = ProjetoCientifico::findOrFail($id);
    
        // Deletar a imagem associada, se existir
        if ($pj_cientifico->pj_cientifico_img && file_exists(public_path($pj_cientifico->pj_cientifico_img))) {
            unlink(public_path($pj_cientifico->pj_cientifico_img));
        }
    
        // Deletar o link associado, se existir
        PJCientificoLink::where('link_projeto_cientifico_id', $pj_cientifico->pj_cientifico_id)->delete();
    
        $pj_cientifico->delete();
    
        return redirect()->route('admin.cientifico.index')->with('success', 'Projeto Científico excluído com sucesso!');
    }
    
}
