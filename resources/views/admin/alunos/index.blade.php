@extends('layout.site')
@section('titulo', 'Alunos')
@section('conteudo')
<div class="container">
    <h3 class="center">Lista de Alunos</h3>
    <div class="row">
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Celular</th>
                    <th>Curso</th>
                    <th>Imagem</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody>
                @foreach($linhas as $linha)
                <tr>
                    <td>{{ $linha->id }}</td>
                    <td>{{ $linha->nome }}</td>
                    <td>{{ $linha->celular }}</td>
                    <td>{{ $linha->curso->titulo ?? 'Nenhum' }}</td>
                    <td><img src="{{ asset($linha->imagem) }}" width="50" alt="{{ $linha->nome }}"></td>
                    <td>
                        <a class="btn deep-orange" href="{{ route('admin.alunos.editar', $linha->id) }}">Editar</a>
                        <a class="btn red" href="{{ route('admin.alunos.excluir', $linha->id) }}">Excluir</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="row">
        <a class="btn blue" href="{{ route('admin.alunos.adicionar') }}">Adicionar Novo Aluno</a>
    </div>
</div>
@endsection