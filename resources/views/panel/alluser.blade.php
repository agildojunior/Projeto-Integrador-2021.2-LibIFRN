@extends('layout.index')
@section('custom_top_script')
@stop

@section('content')
<style>
    .buttonstd{
        width: 130px;
    }
    .testandoform {
        display: inline-block;
    }
</style>
<div class="content">
    <div class="module">
        <div class="module-head">
            <h3>Lista de usuarios</h3>
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
                                <th>nome</th>
                                <th>username</th>
                                <th>email</th>
                                <th>tipo</th>
                                <th>...</th>

                            </tr>
                        </thead>
                        <tbody id="all-books">
                        @foreach($users as $user)
                        
                        @if(Auth::user()->profile=='bibliotecario')
                        @if($user->profile=='user')
                        
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->username }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->profile }}</td>
                            
                            <td>
                            <a href="{{ route('edit', ['id'=>$user->id]) }}" class="btn btn-info btn-sm"><i class="bi bi-eye">Editar</i></a>
                                <form action="{{ route('destroy', ['id'=>$user->id]) }}"method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <input type='submit' class="btn btn-danger btn-sm" value="Excluir">
                                </form>
                            </td>
                        </tr>
                        @endif
                        @endif

                        @if(Auth::user()->profile=='admin')
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->username }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->profile }}</td>
                            
                            <td class="buttonstd">
                                <a href="{{ route('edit', ['id'=>$user->id]) }}" class="btn btn-info btn-sm"><i class="bi bi-eye">Editar</i></a>
                                <form class="testandoform" action="{{ route('destroy', ['id'=>$user->id]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <input type='submit' class="btn btn-danger btn-sm" value="Excluir">
                                </form>
                            </td>
                        </tr>
                        @endif

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
