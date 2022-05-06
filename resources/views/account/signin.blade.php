@extends('account.index')

@section('content')

<div class="wrapper">
	<div class="container">
		<div class="row">
			<div class="card card-container">
				<h3 class="login-tittle">LOGIN LIBIFRN</h3>
				<form class="form-signin" action="{{ URL::route('account-sign-in-post') }}" method="POST">
					@csrf
					<span id="reauth-email" class="reauth-email"></span>
					<input type="text" name="username" id="inputEmail" class="form-control" placeholder="Login" value="{{ Request::old('login') }}" autofocus>
								@if($errors->has('user_login'))
									{{ $errors->first('login')}}
								@endif	
					<input type="password" name="password" id="inputPassword" class="form-control" placeholder="Senha" required>
								@if($errors->has('password'))
									{{ $errors->first('password')}}
								@endif
					<button type="submit" class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Entrar</button>
				</form>
				<a href="{{ URL::route('account-create') }}" class="forgot-password">
					Cadastrar novo Usuario
				</a>
			</div>
			<!--
			-------------------- CADASTRAR ESTUDANTE E PESQUISAR LIVRO --------------------
			<div class="module module-login span4 offset2">
				<div class="module-head">
					<h3>Seção do Aluno</h3>
				</div>
				
			</div>-->
        </div>
	</div>
</div>
@include('account.style')
@stop

<style> 
.login-tittle{
	text-align: center;
}

.container{
    background-color: transparent;
}
.card-container.card {
    max-width: 300px;
    padding: 40px 40px;
	border-radius: 10px;
}

.btn {
    font-weight: 700;
    height: 36px;
    -moz-user-select: none;
    -webkit-user-select: none;
    user-select: none;
    cursor: default;
}

/*
 * Card component
 */
.card {
    background-color: white;
    /* just in case there no content*/
    padding: 20px 25px 30px;
    margin: 0 auto 25px;
    margin-top: 50px;
    /* shadows and rounded borders */
    -moz-border-radius: 2px;
    -webkit-border-radius: 2px;
    border-radius: 2px;
    -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
}

.reauth-email {
    display: block;
    color: #404040;
    line-height: 2;
    margin-bottom: 10px;
    font-size: 14px;
    text-align: center;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
}

.form-signin #inputEmail,
.form-signin #inputPassword {
    direction: ltr;
    height: 44px;
    font-size: 16px;
}

.form-signin input[type=email],
.form-signin input[type=password],
.form-signin input[type=text],
.form-signin button {
    width: 100%;
    display: block;
    margin-bottom: 10px;
    z-index: 1;
    position: relative;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
}

.form-signin .form-control:focus {
    border-color: #369831;
    outline: 0;
    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgb(104, 145, 162);
    box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgb(104, 145, 162);
}

.btn.btn-signin {
    /*background-color: #4d90fe; */
    background-color: #369831;
    /* background-color: linear-gradient(rgb(104, 145, 162), rgb(12, 97, 33));*/
    padding: 0px;
    font-weight: 700;
    font-size: 14px;
    height: 36px;
    -moz-border-radius: 3px;
    -webkit-border-radius: 3px;
    border-radius: 3px;
    border: none;
    -o-transition: all 0.218s;
    -moz-transition: all 0.218s;
    -webkit-transition: all 0.218s;
    transition: all 0.218s;
}

.btn.btn-signin:hover,
.btn.btn-signin:active,
.btn.btn-signin:focus {
    background-color: rgb(12, 97, 33);
}

.forgot-password {
    color: rgb(104, 145, 162);
}

.forgot-password:hover,
.forgot-password:active,
.forgot-password:focus{
    color: rgb(12, 97, 33);
}
</style>


			