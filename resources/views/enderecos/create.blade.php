<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
	<head>
		<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    	<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link rel="stylesheet"  type="text/css" href="{{ URL::asset('css/bootstrap.min.css') }}">
		<title>Cadastrar Endereço</title>
	</head>
	<body>
		<h1>Cadastrar Endereço</h1>
		<form action="{{ route('enderecos.store') }}" method="post">
			@csrf
			<div class="form-group">
				<label for="usuario_id">Usuário</label>
				<input type="text" readonly="readonly" class="form-control" name="usuario_id" id="usuario_id" value="{{ $usuario_id }}">
			</div>
			<div class="form-group">
				<label for="logradouro">Logradouro</label>
				<input type="text" class="form-control" name="logradouro" id="logradouro" placeholder="Logradouro">
			</div>
			<div class="form-group">
				<label for="numero">Número</label>
				<input type="text" class="form-control" name="numero" id="numero" placeholder="Número">
			</div>
			<div class="form-group">
				<label for="complemento">Complemento</label>
				<input type="text" class="form-control" name="complemento" id="complemento" placeholder="Complemento">
			</div>
			<div class="form-group">
				<label for="bairro">Bairro</label>
				<input type="text" class="form-control" name="bairro" id="bairro" placeholder="Bairro">
			</div>
			<div class="form-group">
				<label for="cep">CEP</label>
				<input type="text" class="form-control" name="cep" id="cep" placeholder="CEP (somente 9 digitos)">
			</div>
			<div class="form-group">
				<label for="estado">Estado</label>
				<select class="form-control" name="estado" id="estado">
					<option value="0">Selecione</option>
					@foreach($estados as $estado)
						<option value="{{ $estado->id }}">{{ $estado->nome }}</option>
					@endforeach
		      </select>
			</div>
			<div class="form-group">
				<label for="cidade">Cidade</label>
				<select class="form-control" name="cidade_id" id="cidade">
					<option value="0">Selecione Antes um Estado</option>
		      </select>
			</div>
<button type="submit" class="btn btn-primary">Cadastrar</button>
		</form>
	<script type="text/javascript" src="{{ URL::asset('js/jquery-3.3.1.min.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/popper.min.js') }}"></script>	
	<script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
	<script>	
		$(document).ready(function () {$("#estado").bind("change", function (event) {$.ajax({async:true, data: {estado_id: $("#estado").val()}, success:function (data, textStatus) {$("#cidade").html(data);}, type:"get", url:"{{ url('cidades/listaPorEstado') }}"});
return false;});});
	</script>
	</body>
</html>