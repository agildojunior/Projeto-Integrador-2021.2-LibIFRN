
@extends('layout.index')
@section('custom_top_script')
@stop

@section('content')
<div class="content">

<div class="">
	<div class="container">
		<div class="d-flex justify-content-center span4">
			<div class="module module span4 ">
				<form class="form-vertical" action="{{ URL::route('update',['id'=>$users->id]) }}" method="POST">
					@csrf
                    @method('PUT')
					<div class="module-head">
						<h3>Editar Usuario</h3>
					</div>
					<div class="module-body">   
						<div class="control-group">
							<div class="controls row-fluid">
								<input class="span12" type="text" placeholder="Matrícula" name="username" value="{{$users->username}}"> 
								@if($errors->has('login'))
									{{ $errors->first('login')}}
								@endif								
							</div>
						</div>

                        <div class="control-group">
							<div class="controls row-fluid">
								<input class="span12" type="email" placeholder="E-mail" name="email" value="{{$users->email}}"> 
                                @if($errors->has('email'))
									{{ $errors->first('email')}}
								@endif	
							</div>
						</div>

						<div class="control-group">
							<div class="controls row-fluid">
								<input class="span12" type="password" name="password" placeholder="Senha">
								@if($errors->has('password'))
									{{ $errors->first('password')}}
								@endif
							</div>
						</div>
						<div class="control-group">
							<div class="controls row-fluid">
								<input class="span12" type="password" placeholder="Repita sua senha">
								@if($errors->has('password'))
									{{ $errors->first('password')}}
								@endif
							</div>
						</div>


                        <div class="control-group">
							<div class="controls row-fluid">
								<input class="span12" type="text" placeholder="Nome completo" name="name" value="{{$users->name}}"> 
                                @if($errors->has('name'))
									{{ $errors->first('name')}}
								@endif	
							</div>
						</div>

                        @if(Auth::user()->profile=='admin')
                    
                        <div class="control-group">
                            <div class="controls row-fluid">
                                <select class="span12" name="profile" id="profile">
									<option readonly value="admin" {{ $users->profile == 'admin' ? "selected='selected'" : "" }}>administrador</option>
                                    <option value="user" {{ $users->profile == 'user' ? "selected='selected'" : "" }}>usuário</option>
                                    <option value="bibliotecario" {{ $users->profile == 'bibliotecario' ? "selected='selected'" : "" }}>bibliotecario</option>
                                </select>
                            </div>
                        </div>
                        @else
                        <div class="control-group">
                            <div class="controls row-fluid">
                                <input name="profile" id="profile" class="span12" type="text" readonly value="{{$users-> profile}}">
                            </div>
                        </div>
                        @endif

					</div>
                    
					<div class="module-foot">
						<div class="control-group">
							<div class="controls clearfix">
								<button type="submit" class="btn btn-info pull-right">Atualizar</button>
							</div>
						</div>
					</div>
				</form>
			</div>
			
		</div>
	</div>
</div>

</div>
@stop

@section('css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
@stop
