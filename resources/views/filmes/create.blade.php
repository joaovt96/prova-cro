<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
	<head>
		<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    	<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link rel="stylesheet"  type="text/css" href="{{ URL::asset('css/bootstrap.min.css') }}">
		<title>Cadastrar Filme Favorito</title>
	</head>
	<body>
		<h1>Cadastrar Filme Favorito</h1>
		<form action="{{ route('filmes.store') }}" method="post">
			@csrf
			<div class="form-group">
				<label for="usuario_id">Usuário</label>
				<input type="text" readonly="readonly" class="form-control" name="usuario_id" id="usuario_id" value="{{ $usuario_id }}">
			</div>
			<div class="form-group">
				<label for="titulo">Título</label>
				<input type="text" class="form-control" name="titulo" id="titulo" placeholder="Título">
			</div>
			<div class="form-group">
				<label for="ano">Ano</label>
				<input type="number" class="form-control" name="ano" id="ano" placeholder="Ano (somente 4 numeros)">
			</div>
			<div class="form-group">
				<label for="genero">Gênero</label>
				<select class="form-control" name="genero" id="genero">
					<option value="0">Selecione</option>
					<option value="acao">Ação</option>
					<option value="animacao">Animação</option>
					<option value="aventura">Aventura</option>
					<option value="comedia">Comédia</option>
					<option value="documentario">Documentario</option>
					<option value="drama">Drama</option>
					<option value="faroeste">Faroeste</option>
					<option value="ficcao">Ficcao</option>
					<option value="infantil">Infantil</option>
					<option value="musical">Musical</option>
					<option value="romance">Romance</option>
					<option value="suspense">Suspense</option>
					<option value="terror">Terror</option>
				</select>
			</div>
			<div class="form-group">
				<label for="diretor">Diretor</label>
				<input type="text" class="form-control" name="diretor" id="diretor" placeholder="Diretor">
			</div>
			<button type="submit" class="btn btn-primary">Cadastrar</button>
		</form>
	<script type="text/javascript" src="{{ URL::asset('js/jquery-3.3.1.min.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/popper.min.js') }}"></script>	
	<script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
	</body>
</html>