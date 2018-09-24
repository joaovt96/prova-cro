<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
	<head>
		<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    	<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link rel="stylesheet"  type="text/css" href="{{ URL::asset('css/bootstrap.min.css') }}">
		<title>Cadastrar Usuário</title>
	</head>
	<body>
		<h1>Cadastrar Usuário</h1>
		<form action="{{ route('usuarios.store') }}" method="post">
			@csrf
			<div class="form-group">
				<label for="nome">Nome</label>
				<input type="text" class="form-control" name="nome" id="nome" placeholder="Nome">
			</div>
			<div class="form-group">
				<label for="sexo">Sexo</label>
				<select class="form-control" name="sexo" id="sexo">
					<option value="0">Selecione</option>
					<option value="masculino">Masculino</option>
					<option value="Feminino">Feminino</option>
		      </select>
			</div>
			<div class="form-group">
				<label for="data_nasc">Data de Nascimento</label>
				<input type="text" class="form-control" name="data_nasc" id="data_nasc" placeholder="DD/MM/AAAA">
			</div>
			<div class="form-group">
				<label for="titulacao">Titulação</label>
				<input type="text" class="form-control" name="titulacao" id="titulacao" placeholder="Titulação">
			</div>
			<div class="form-group">
				<label for="cpf">CPF</label>
				<input type="text" class="form-control" name="cpf" id="cpf" placeholder="12345678910 (somente 11 digitos)">
			</div>
			<div class="RG">
				<label for="rg">RG</label>
				<input type="text" class="form-control" name="rg" id="rg" placeholder="RG">
			</div>
<button type="submit" class="btn btn-primary">Cadastrar</button>
		</form>
	<script type="text/javascript" src="{{ URL::asset('js/jquery-3.3.1.min.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/popper.min.js') }}"></script>	
	<script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
	</body>
</html>