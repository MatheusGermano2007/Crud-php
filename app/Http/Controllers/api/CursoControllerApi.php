<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Curso; // Importação da Model Curso

class CursoControllerApi extends Controller
{
    
    public function index() 
    {
        return response()->json(Curso::all(), 200);
    }

    public function store(Request $req) 
    {
        $novoCurso = Curso::create($req->all());
        return response()->json($novoCurso, 201);
    }

    public function show(Curso $curso) 
    {
        return response()->json($curso, 200);
    }

    public function update(Request $req, Curso $curso) 
    {
        $curso->update($req->all());
        return response()->json($curso, 200);
    }

    public function destroy(Curso $curso) 
    {
        $curso->delete();
        return response()->json(['message' => 'Curso removido com sucesso'], 200);
    }
}