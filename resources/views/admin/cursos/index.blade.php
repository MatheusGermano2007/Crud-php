@extends('layout.site')
@section('titulo','Cursos')
@section('conteudo')
<div class='container'>
    <h3 class='center'>Lista de Cursos</h3>
    <div class='row'>
        <table>
            <thead>
                <tr> <th>Id</th>
                    <th>Título</th>
                    <th>Descrição</th>
                    <th>Publicado</th>
                    <th>Valor</th>
                    <th>Imagem</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cursos as $curso) <tr>
                    <td>{{ $curso->id }}</td>
                    <td>{{ $curso->titulo }}</td>
                    <td>{{ $curso->descricao }}</td>
                    <td>{{ $curso->publicado }}</td>
                    <td>{{ $curso->valor }}</td>
                    <td><img src="{{ asset($curso->imagem) }}" alt="{{ $curso->titulo }}" width="40"></td>
                    <td> <a class='btn deep-orange' href="{{ route('admin.cursos.editar', $curso->id) }}">Editar</a>
                        <a class='btn red' href="{{ route('admin.cursos.excluir', $curso->id) }}">Excluir</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class='row'> <a class='btn blue' href="{{ route('admin.cursos.adicionar')}}">Adicionar Novo Curso</a>
    </div>
</div>
@endsection