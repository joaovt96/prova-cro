<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
	<head>
		<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    	<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link rel="stylesheet"  type="text/css" href="{{ URL::asset('css/bootstrap.min.css') }}">
		<title>Usuários</title>
	</head>
	<body>
		<h1>Usuários Cadastrados</h1>
		<h3><a href="{{ route('usuarios.create') }}"> Cadastrar Novo Usuário</a><h3>
		<table class="table table-hover">
		    <thead>
		        <th>ID</th><th>NOME</th><th>SEXO</th><th>DATA NASC.</th><th>TITULAÇÃO</th><th>CPF</th><th>RG</th><th>ADICIONAR</th>
		    </thead>		    
		    <tbody>
		    	@foreach($usuarios as $usuario)
			        <tr data-toggle="collapse" data-target="#accordion{{ $usuario->id }}" class="clickable">
			            <td>{{ $usuario->id }}</td>
			            <td>{{ $usuario->nome }}</td>
			            <td>{{ $usuario->sexo }}</td>
			            <td>{{ $usuario->data_nasc }}</td>
			            <td>{{ $usuario->titulacao }}</td>
			            <td>{{ $usuario->cpf }}</td>
			            <td>{{ $usuario->rg }}</td>
			            <td><a href="{{ route('enderecos.create', ['usuario_id' => $usuario->id]) }}"> + Endereço</a> | <a href="{{ route('filmes.create', ['usuario_id' => $usuario->id]) }}"> + Filme Fav.</a></td>
			        </tr>
			        @foreach($usuario->enderecos as $endereco)
			        <tr>
			            <td colspan="8">
			                <div id="accordion{{ $usuario->id }}" class="collapse">
			                	{{ 'Endereço '.$usuario->enderecos->count() .': '.$endereco->logradouro.', '.$endereco->numero.', '.$endereco->complemento.'. '.$endereco->bairro}}
		                	
	                		</div>
			            </td>
			        </tr>
			        @endforeach
			        @foreach($usuario->filmes as $filme)
			        <tr>
			            <td colspan="8">
			                <div id="accordion{{ $usuario->id }}" class="collapse">
			                	{{ 'Filme '.$usuario->filmes->count() .': '.$filme->titulo.', '.$filme->ano.', '.$filme->genero.'. '.$filme->diretor}}
		                	
	                		</div>
			            </td>
			        </tr>
			        @endforeach
		        @endforeach
		    </tbody>
		</table>
	<script type="text/javascript" src="{{ URL::asset('js/jquery-3.3.1.min.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/popper.min.js') }}"></script>	
	<script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
	</body>
</html>