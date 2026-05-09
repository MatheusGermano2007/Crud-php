@extends('layout.site')

@section('titulo', 'Cursos')

@section('conteudo')
<div class="container">
    <h3 class="center-align" style="margin-bottom: 40px; color: #424242;">Lista de Cursos</h3>
    
    <div class="row">
        <div class="col s12">
            <div class="card">
                <div class="card-content">
                    <table class="striped highlight responsive-table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Título</th>
                                <th>Descrição</th>
                                <th>Publicado</th>
                                <th>Valor</th>
                                <th>Imagem</th>
                                <th class="center-align">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($cursos as $curso)
                            <tr>
                                <td>{{ $curso->id }}</td>
                                <td><strong>{{ $curso->titulo }}</strong></td>
                                <td>{{ Str::limit($curso->descricao, 50) }}</td>
                                <td>
                                    @if(strtolower($curso->publicado) == 'sim')
                                        <span class="new badge green" data-badge-caption="Sim"></span>
                                    @else
                                        <span class="new badge red" data-badge-caption="Não"></span>
                                    @endif
                                </td>
                                <td>R$ {{ number_format($curso->valor, 2, ',', '.') }}</td>
                                <td>
                                    <img src="{{ asset($curso->imagem) }}" alt="{{ $curso->titulo }}" class="responsive-img" style="max-width: 90px; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.1);">
                                </td>
                                <td class="center-align">
                                    <a class="btn-small waves-effect waves-light deep-orange" href="{{ route('admin.cursos.editar', $curso->id) }}">
                                        Editar
                                    </a>
                                    <a class="btn-small waves-effect waves-light red darken-1" href="{{ route('admin.cursos.excluir', $curso->id) }}">
                                        Excluir
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col s12" style="margin-top: 20px;">
            <a class="btn-large waves-effect waves-light blue" href="{{ route('admin.cursos.adicionar') }}">
                Adicionar Novo Curso
            </a>
        </div>
    </div>
</div>
@endsection