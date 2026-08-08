<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\CursoControllerApi; // 1. Importação do Controller

// 2. Método 'apiResource' corrigido com letra minúscula
Route::apiResource('cursos', CursoControllerApi::class);