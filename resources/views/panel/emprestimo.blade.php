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
            <h3>Alunos aguardando aprovação do empréstimo</h3>
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
                        <th>Aprovar</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($emprestimo as $emprestimos)
                    
                    <tr>
                        @if( $emprestimos->status =='aguardando')
                        <td>{{ $emprestimos->id }}</td>
                        <td>{{ $emprestimos->book_id }}</td>
                        <td>{{ $emprestimos->titulo }}</td>
                        <td>{{ $emprestimos->user->name }}</td>
                        <td>{{ $emprestimos->user_id }}</td>
                        <td class="buttonstd">
                            <a href="{{ route('aprovaremprestimo', ['id'=> $emprestimos->id]) }}" class="btn btn-success btn-sm"><i class="bi bi-eye">Aprovar</i></a>
                            <a href="{{ route('reprovaremprestimo', ['id'=> $emprestimos->id]) }}" class="btn btn-danger btn-sm"><i class="bi bi-eye">Reprovar</i></a>
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