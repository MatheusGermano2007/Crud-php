<div class="input-field">
    <input type="text" name="nome" id="nome" value="{{ isset($linha->nome) ? $linha->nome : '' }}">
    <label for="nome">Nome do Aluno</label>
</div>

<div class="input-field">
    <input type="text" name="celular" id="celular" value="{{ isset($linha->celular) ? $linha->celular : '' }}">
    <label for="celular">Celular</label>
</div>

<div class="input-field">
    <select name="id_curso" class="browser-default">
        <option value="" disabled selected>Escolha um curso</option>
        @foreach($cursos as $curso)
            <option value="{{ $curso->id }}" {{ (isset($linha->id_curso) && $linha->id_curso == $curso->id) ? 'selected' : '' }}>
                {{ $curso->titulo }}
            </option>
        @endforeach
    </select>
</div>
<br>

<div class="file-field input-field">
    <div class="btn blue">
        <span>Imagem</span>
        <input type="file" name="imagem">
    </div>
    <div class="file-path-wrapper">
        <input class="file-path validate" type="text">
    </div>
</div>
@if(isset($linha->imagem))
<div class="input-field">
    <img width="100" src="{{ asset($linha->imagem) }}">
</div>
@endif