
@extends('layout.index')
@section('custom_top_script')
@stop

@section('content')
<div class="content">

<div class="">
	<div class="container">
		<div class="d-flex justify-content-center span4">
			<div class="module module span4 ">
				<form class="form-vertical" action="{{ URL::route('updatebook',['id'=>$books->id]) }}" method="POST">
					@csrf
                    @method('PUT')
					<div class="module-head">
						<h3>Editar Livro</h3>
					</div>
					<div class="module-body"> 
						<div class="control-group">
							<div class="controls row-fluid">
								<input class="span12" type="text" placeholder="titulo" name="titulo" value="{{$books->titulo}}">							
								@if($errors->has('login'))
									{{ $errors->first('login')}}
								@endif		
							</div>
						</div>

                        <div class="control-group">
							<div class="controls row-fluid">
								<input class="span12" type="text" placeholder="autor" name="autor" value="{{$books->autor}}"> 	
							</div>
						</div>

						<div class="control-group">
							<div class="controls row-fluid">
								<input class="span12" type="text" placeholder="descrição" name="descricao" value="{{$books->descricao}}"> 
                            </div>
						</div>

                    <div class="control-group">
                    	
                    	<div class="controls">
                        
                    	<select class="span3" name="categoria">
                        @foreach($categoria as $books)            
                        <option value="{{$books->id}}">{{$books->categoria}}</option>
                        @endforeach
                    	</select>

                    <!-- <input class="span8" type="text" placeholder="Digite a categoria do livro" name="categoria" value="1">  -->
                    	</div>
                	</div> 
  
					</div>
                    
					<div class="module-foot">
						<div class="control-group">
							<div class="controls clearfix">
								<button type="submite" class="btn btn-info pull-right">Atualizar</button>
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
