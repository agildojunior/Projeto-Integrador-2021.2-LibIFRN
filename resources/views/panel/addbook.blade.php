@extends('layout.index')

@section('custom_top_script')
@stop

@section('content')
<div class="content">
    <div class="module">
        <div class="module-head">
            <h3>Adicionar livros</h3>
        </div>
        <div class="module-body">
            <form class="form-horizontal row-fluid" action="{{ route('addbookings')}}" method="post">
                @csrf
                <div class="control-group">
                    <label class="control-label">Título do livro</label>
                    <div class="controls">
                        <input class="span8" type="text" placeholder="Digite o título" name="titulo"> 
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label">Nome do autor</label>
                    <div class="controls">
                    <input class="span8" type="text" placeholder="Digite o título" name="autor"> 
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="basicinput">Descrição do livro</label>
                    <div class="controls">
                        <textarea class="span8" type="text" rows="5" placeholder="Digite aqui a descrição do livro..." name="descricao"></textarea>
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label">Categoria</label>
                    <div class="controls">
                        
                    <select class="span8" name="categoria">
                        @foreach($bookCategories as $books)            
                        <option value="{{$books->id}}">{{$books->categoria}}</option>
                        @endforeach
                    </select>

                    <!-- <input class="span8" type="text" placeholder="Digite a categoria do livro" name="categoria" value="1">  -->
                    </div>
                </div> 

                <div class="control-group">
                    <div class="controls">
                        <button type="submit" action="{{ route('all-books')}}" class="btn btn-inverse">Adicionar livros</button>
                    </div>
                </div>
            </form>
        </div>
    </div>    
</div>
@stop

@section('custom_bottom_script')

    <script type="text/javascript" src="{{ asset('static/custom/js/script.addbook.js') }}"></script>

@stop