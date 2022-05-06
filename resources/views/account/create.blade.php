@extends('account.index')

@section('content')



<div class="wrapper">
	<div class="container">
		<div class="row">
			<div class="module module-login span4 offset4">
				<form class="form-vertical" action="{{ URL::route('account-create-post') }}" method="POST">
					@csrf
					<div class="module-head">
						<h3>Cadastrar</h3>
					</div>
					<div class="module-body">
						<div class="control-group">
							<div class="controls row-fluid">
								<input class="span12" type="text" placeholder="Usuario" name="username" value="{{ Request::old('login') }}"> 
								@if($errors->has('login'))
									{{ $errors->first('login')}}
								@endif								
							</div>
						</div>

                        <div class="control-group">
							<div class="controls row-fluid">
								<input class="span12" type="email" placeholder="email" name="email"> 
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
								<input class="span12" type="password" name="password_again" placeholder="Confirme sua Senha">
								@if($errors->has('password_again'))
									{{ $errors->first('password_again')}}
								@endif
							</div>
						</div>
                        
                        <div class="control-group">
							<div class="controls row-fluid">
								<input class="span12" type="text" placeholder="Nome completo" name="name"> 
                                @if($errors->has('name'))
									{{ $errors->first('name')}}
								@endif	
							</div>
						</div>

					</div>
					<div class="module-foot">
						<div class="control-group">
							<div class="controls clearfix">
								<button type="submit" class="btn btn-info pull-right">Criar conta</button>
							</div>
						</div>
						<a href="{{ URL::route('account-sign-in') }}">Já sou um usuário?</a>
					</div>
				</form>
			</div>
			
		</div>
	</div>
</div>
@include('account.style')
@stop
<style>
	/* --------- LOGIN ---------- */
.Login {
    height: 85vh;
    background-image: url("../assets/fundologin.png");
    display: flex;
    justify-content: center;
    align-items: center;
}

.logincontainer {
    box-shadow: 2px 2px 8px 1px rgb(86, 110, 73);
    width: 300px;
    background-color: white;
    box-sizing: border-box;
    padding: 32px;
    border-radius: 8px;
    display: flex;
    flex-direction: column;
    align-items: center;
}

.Login h2{
    color: #369831;
    font-family: sans-serif , Arial, Helvetica;
    font-size: 30px;
    margin-top: 20px;
    margin-bottom: 20px;
}

.loginform {
    width: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}

.loginimput {
    height: 48px;
    width: 100%;
    box-sizing: border-box;
    padding-left: 8px;
    border: unset;
    outline: none;
}

.loginimputborder{
    height: 1px;
    width: 100%;
    margin-bottom: 16px;
    background-color: #cfcfcf;
    transition: .3s ease-in-out ;
}

.loginimputborder::after{
    content: '';
    display: block;
    height: 1px;
    width: 0;
    margin-bottom: 16px;
    background: linear-gradient(120deg, rgb(186, 241, 156), rgb(204, 226, 192));
    transition: .3s ease-in-out;
}

.loginbotao{
    height: 48px;
    width: 100%;
    outline: none;
    background: #369831;
    background-size: 200%;
    margin-bottom: 32px;
    color: white;
    font-size: 16px;
    font-weight: bold;
    border: unset;
    border-radius: 4px;
    cursor: pointer;
}

.loginadm{
    font-size: 12px;
    color: #369831;
    text-decoration: none;
    font-family: sans-serif, Arial, Helvetica;
}

.container-principal-login{
    background-image: url("/assets/fundologin.png");
    height: 100%;
}
</style>
