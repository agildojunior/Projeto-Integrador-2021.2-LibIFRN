@extends('layout.index')

@section('custom_top_script')
@stop

@section('content')
<div class="content">
    <div class="module">
        <div class="module-head">
            <h3>Adicionar categoria de livros</h3>
        </div>
        <div class="module-body">
            <form class="form-horizontal row-fluid" action="{{route('add-book-category') }}" method="POST">
                @csrf
                <div class="control-group">
                    <label class="control-label">Categoria</label>
                    <div class="controls">
                        <input type="text" placeholder="Digite a categoria do livro aqui..." class="span8" name="categoria">
                    </div>
                </div>

                <div class="control-group">
                    <div class="controls">
                        <button type="submit" class="btn btn-inverse">Adicionar categoria</button>
                    </div>
                </div>
            </form>
        </div>
    </div>    
</div>
@stop