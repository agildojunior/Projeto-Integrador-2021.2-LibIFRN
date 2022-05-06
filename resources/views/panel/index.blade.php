@extends('layout.index')

@section('content')
<style>
    .icon-list:before{         
        color: #369831;     
    }     
    .icon-user:before{         
        color: #369831;     
    }
    .control-label{
        margin-bottom: 20px;
    }
</style>

<div class="content">
    <div class="btn-controls">
        <div class="content">
            <div class="module">
                <div class="module-body">
                    <form class="form-horizontal row-fluid" action="{{ route('home')}}" method='get'>
                        <div class="control-group">
                            <label class="control-label">Nome do Livro</label>
                            <div class="controls">
                                <div class="span9">
                                    <input type="text" name="search" class="form-control" placeholder="Insira o nome do livro">
                                </div>
                                <div class="span3">
                                    <button type="submite" class="btn btn-info pull-right">Atualizar</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    @if($search)
                        @if((count($books) == 0 && $search))
                        <h3>Não foi encontrado nenhum livro com " {{$search}} " </h3>
                        @else
                        <table class="table table-striped table-bordered table-condensed">
                            <thead>
                                <tr>
                                    <th>Book ID</th>
                                    <th>Título do livro</th>
                                    <th>Autor</th>
                                    <th>Descrição</th>
                                    <th>Categoria</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($books as $book)
                                <tr>   
                                    <td>{{ $book->id }}</td>
                                    <td>{{ $book->titulo }}</td>
                                    <td>{{ $book->autor }}</td>
                                    <td>{{ $book->descricao }}</td>
                                    <td>{{ $book->categoria }}</td>
                                    <td>{{ $book->status_book }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        @endif
                    @endif
                </div>
            </div>
        </div>
    </div>
    <input type="hidden" id="_token"  data-form-field="token"  value="{{ csrf_token() }}">

</div>
@stop
