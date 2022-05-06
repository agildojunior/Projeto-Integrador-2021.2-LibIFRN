
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
            <h3>Todos os emprestimos Atuais</h3>
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
                    </tr>
                </thead>

                <tbody>
                    @foreach($emprestimo as $emprestimos)

                    
                    <tr>
                    @if(($emprestimos->status != 'finalizado') && ($emprestimos->status != 'aguardando') && ($emprestimos->status != 'negado'))
                        <td>{{ $emprestimos->id }}</td>
                        <td>{{ $emprestimos->book_id }}</td>
                        <td>{{ $emprestimos->titulo }}</td>
                        <td>{{ Auth::user()->name}}</td>
                        <td>{{ $emprestimos->user_id }}</td>
                        <td>{{ $emprestimos->status }}</td>
                        <td>{{ $emprestimos->data_emprestimo }}</td>
                        <td>{{ $emprestimos->data_devolucao }}</td>
                    @endif
                        
                    </tr>
                   
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@stop