@extends('layout.index')

@section('custom_top_script')
@stop

@section('content')
<div class="content">
    <div class="module">
        <div class="module-head">
            <h3>Pedidos de devolução</h3>
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
                        <th>data de emprestimo</th>
                        <th>data para devolução</th>
                        <th>...</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($emprestimo as $emprestimos)
                    
                    <tr>
                        @if( $emprestimos->status =='devolvendo')
                        
                        <td>{{ $emprestimos->id }}</td>
                        <td>{{ $emprestimos->book_id }}</td>
                        <td>{{ $emprestimos->titulo }}</td>
                        <td>{{ $emprestimos->user->name }}</td>
                        <td>{{ $emprestimos->user_id }}</td>
                        <td>{{ $emprestimos->data_emprestimo }}</td>
                        <td>{{ $emprestimos->data_devolucao }}</td>
                        <td>
                            <a href="{{ route('aprovardevolucao', ['id'=> $emprestimos->id]) }}" class="btn btn-success btn-sm"><i class="bi bi-eye">Confirmar</i></a>
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