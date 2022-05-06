
@extends('layout.index')

@section('custom_top_script')
@stop

@section('content')

<style>
    .buttonstd{
        width: 150px;
    }
</style>
<div class="content">
    <div class="module">
        <div class="module-head">
            <h3>Meus emprestimos</h3>
        </div>
        <div class="module-body">
            
            <table class="table table-striped table-bordered table-condensed">
                <thead>
                    <tr>
                        <th>ID Empréstimo</th>
                        <th>ID Livro</th>
                        <th>Livro</th>
                        <th>Usuário</th>
                        <th>Matrícula</th>
                        <th>status</th>
                        <th>data de emprestimo</th>
                        <th>data para devolução</th>
                        <th>...</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($emprestimo as $emprestimos)

                    
                    <tr>
                        @if( $emprestimos->user_id == Auth::user()->id ) 
                        
                        <td>{{ $emprestimos->id }}</td>
                        <td>{{ $emprestimos->book_id }}</td>
                        <td>{{ $emprestimos->titulo }}</td>
                        <td>{{ Auth::user()->name}}</td>
                        <td>{{ $emprestimos->user_id }}</td>
                        <td>{{ $emprestimos->status }}</td>
                        <td>{{ $emprestimos->data_emprestimo }}</td>
                        <td>{{ $emprestimos->data_devolucao }}</td>
                        <td class="buttonstd">
                            @if($emprestimos->status == 'aprovado')
                            <a href="{{ route('renovacao-book', ['id'=> $emprestimos->id]) }}" class="btn btn-success btn-sm"><i class="bi bi-eye">Renovar</i></a>
                            <a href="{{ route('devolver-book', ['id'=> $emprestimos->id]) }}" class="btn btn-danger btn-sm"><i class="bi bi-eye">Devolver</i></a>
                            @elseif($emprestimos->status == 'rejeitado')
                            <a href="{{ route('devolver-book', ['id'=> $emprestimos->id]) }}" class="btn btn-danger btn-sm"><i class="bi bi-eye">Devolver</i></a>
                            @endif
                        </td>

                        @endif
                    </tr>
                   
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@stop