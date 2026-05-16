@extends('layout.site')

@section('titulo','Editar Curso')

@section('conteudo')
<div class='container'>
    <h3 class='center'>Editar Curso</h3>
    <div class='row'>
        <form action="{{ route('admin.cursos.atualizar', $linha->id) }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="put">

            <div class="input-field">
                <input type="text" name="titulo" id="titulo" value="{{ $linha->titulo }}">
                <label for="titulo">Título</label>
            </div>

            <div class="input-field">
                <input type="text" name="descricao" id="descricao" value="{{ $linha->descricao }}">
                <label for="descricao">Descrição</label>
            </div>

            <div class="input-field">
                <input type="text" name="valor" id="valor" value="{{ $linha->valor }}">
                <label for="valor">Valor</label>
            </div>

            <div class="file-field input-field">
                <div class="btn blue">
                    <span>Imagem</span>
                    <input type="file" name="imagem">
                </div>
                <div class="file-path-wrapper">
                    <input class="file-path validate" type="text">
                </div>
            </div>
            
            <div class="input-field">
                <img width="150" src="{{ asset($linha->imagem) }}" alt="{{ $linha->titulo }}">
            </div>

            <p>
                <label>
                    <input type="checkbox" name="publicado" value="true" {{ $linha->publicado == 'sim' ? 'checked' : '' }} />
                    <span>Publicar?</span>
                </label>
            </p>
            <br><br>

            <button class="btn deep-orange">Atualizar</button>
        </form>
    </div>
</div>
@endsection