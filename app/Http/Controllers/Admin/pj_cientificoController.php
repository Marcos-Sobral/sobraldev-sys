<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class pj_cientificoController extends Controller
{
    public function index()
    {
        return view("pages.cientifico.index");
    }

    public function create()
    {
        // Código para criar
    }

    public function store(Request $request)
    {
        // Código para armazenar
    }

    public function show(string $id)
    {
        // Código para mostrar
    }

    public function edit(string $id)
    {
        // Código para editar
    }

    public function update(Request $request, string $id)
    {
        // Código para atualizar
    }

    public function destroy(string $id)
    {
        // Código para deletar
    }
}
