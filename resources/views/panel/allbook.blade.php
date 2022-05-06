@extends('layout.index')
@section('custom_top_script')
@stop

@section('content')
<style>
    .buttonstd{
        width: 190px;
    }
    .testandoform {
        display: inline-block;
    }
</style>
<div class="content">
    <div class="module">
        <div class="module-head">
            <h3>Livros da biblioteca</h3>
        </div>
        <div class="module-body">
<!--             <p>
                <strong>Combined</strong>
                -
                <small>table class="table table-striped table-bordered table-condensed"</small>
            </p> -->
            <div class="controls">
                
                    
                    <table class="table table-striped table-bordered table-condensed">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Título</th>
                                <th>Autor</th>
                                <th>Descrição</th>
                                <th>Categoria</th>
                                <th>Status</th>
                                @if(Auth::user()->profile=='admin' || 'bibliotecario')
                                <th>Ações</th>
                                @endif
                            </tr>
                        </thead>
                        <tbody id="all-books">
                        @foreach($books as $book)
                        @foreach($categoria as $categorias)
                        @if($book->categoria == $categorias->id)
                        <tr>

                            <td>{{ $book->id }}</td>
                            <td>{{ $book->titulo }}</td>
                            <td>{{ $book->autor }}</td>
                            <td>{{ $book->descricao }}</td>
                            <td>{{ $categorias->categoria }}</td>
                            <td>{{ $book->status_book }}</td>
                            
                            @if(Auth::user()->profile=='admin')
                            <td class="buttonstd">
                                <a href="{{ route('editbook', ['id' => $book->id]) }}" class="btn btn-info btn-sm"><i class="bi bi-eye">Editar</i></a>
                                <form class="testandoform" action="{{ route('delete_book', ['id' => $book->id]) }}"method="POST">
                                    @csrf 
                                    @method('DELETE')
                                
                                    <input type='submit' class="btn btn-danger btn-sm" value="Excluir">
                                </form>
                                @if($book-> status_book == 'disponivel')
                                <form class="testandoform" action="{{ route('emprestimo-new', ['id' => $book->id]) }}" method="POST">
                                    @csrf
                                    <input type='submit' class="btn btn-success btn-sm" value="Solicitar">
                                </form>
                                @endif
                            </td>
                            @endif   
                            @if(Auth::user()->profile=='bibliotecario')
                            <td class="buttonstd">
                                <a href="{{ route('editbook', ['id' => $book->id]) }}" class="btn btn-info btn-sm"><i class="bi bi-eye">Editar</i></a>
                                <form class="testandoform" action="{{ route('delete_book', ['id' => $book->id]) }}"method="POST">
                                    @csrf
                                    @method('DELETE')
                                
                                    <input type='submit' class="btn btn-danger btn-sm" value="Excluir">
                                </form>
                                <form class="testandoform" action="{{ route('emprestimo-new', ['id' => $book->id]) }}" method="POST">
                                    @csrf
                                    <input type='submit' class="btn btn-success btn-sm" value="Solicitar">
                                </form>
                            </td>
                            @endif   
                            @if(Auth::user()->profile=='user')
                            <td>
                            @if($book-> status_book == 'disponivel')
                                <form action="{{ route('emprestimo-new', ['id' => $book->id]) }}" method="POST">
                                    @csrf
                                    <input type='submit' class="btn btn-success btn-sm" value="Solicitar">
                                </form>
                                @endif
                            </td>
                            @endif   
                        </tr>
                        @endif
                        @endforeach
                        @endforeach
                        </tbody>
                    </table>
                    
            </div>
            
        </div>
    </div>
</div>
@stop

@section('css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
@stop