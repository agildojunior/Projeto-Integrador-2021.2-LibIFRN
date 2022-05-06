@extends('account.index')

@section('content')

<div class="wrapper">
	<div class="container">
		<div class="row">
			<div class="module module-login span8 offset2">
				<form class="form-vertical" action="{{ URL::route('student-registration-post') }}" method="POST">
					<div class="module-head">
						<h3>Formulário de Cadastro de Estudantes</h3>
					</div>
					<div class="module-body">
						<div class="control-group">
							<div class="controls row-fluid">
								<input class="span6" type="text" placeholder="Nome" name="first" value="{{ Request::old('first') }}" /> 
								<input class="span6" type="text" placeholder="Sobrenome" name="last" value="{{ Request::old('last') }}" /> 
								
								@if($errors->has('first'))
									{{ $errors->first('first')}}
								@endif
								@if($errors->has('last'))
									{{ $errors->first('last')}}
								@endif
							</div>
						</div>
						<div class="control-group">
							<div class="controls row-fluid">
								<input class="span4" type="number" placeholder="Numero" name="rollnumber" value="{{ Request::old('rollnumber') }}" /> 								
								<select class="span4" style="margin-bottom: 0;" name="branch">
									<option value="0">selecione o ramo</option>
									@foreach($branch_list as $branch)
				                        <option value="{{ $branch->id }}">{{ $branch->branch }}</option>
				                    @endforeach
								</select>
								<input class="span4" type="number" placeholder="Ano" name="year" value="{{ Request::old('year') }}" /> 

								@if($errors->has('rollnumber'))
									{{ $errors->first('rollnumber')}}
								@endif
								@if($errors->has('branch'))
									{{ $errors->first('branch')}}
								@endif
								@if($errors->has('year'))
									{{ $errors->first('year')}}
								@endif
								
							</div>
						</div>
						<div class="control-group">
							<div class="controls row-fluid">
								<input class="span8" type="email" placeholder="E-mail" name="email" autocomplete="false" value="{{ Request::old('email') }}" /> 
								<select class="span4" style="margin-bottom: 0;" name="category">
									<option value="0">Selecione a Categoria</option>
									@foreach($student_categories_list as $student_category)
				                        <option value="{{ $student_category->cat_id }}">{{ $student_category->category }}</option>
				                    @endforeach
								</select>

								@if($errors->has('email'))
									{{ $errors->first('email')}}
								@endif
								@if($errors->has('category'))
									{{ $errors->first('category')}}
								@endif
							</div>
						</div>
					</div>
					<div class="module-foot">
						<div class="control-group">
							<div class="controls clearfix">
								<button type="submit" class="btn btn-info pull-right">Inscreva-se na Biblioteca</button>
								@csrf
							</div>
						</div>
						<a href="{{ URL::route('account-sign-in') }}">Volte!</a>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

@include('account.style')

@stop
