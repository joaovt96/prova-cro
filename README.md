# prova-cro

Sistema (CRUD) para cadastro de pessoas, endereços e filmes favoritos.

Possui 5 Entidades:
Usuario (com informações básicas de identificação);
Endereço: (logradouro, numero, complemento...)
Cidade: (id e nome das cidades)
Estado (id, nome e sigla)
Filmes (titulo, ano, genero e diretor)

Ocorre separação da cidade e endereço visando seguir normalização de dados. SQL com as cidades está no pŕojeto e foi retirado de http://samus.com.br/web/site/artigo-todas_as_cidades_do_brasil_atualizado_e_com_acentos.
Poderia ser implementado algum serviço de auto-completar via webservice.

Relacionamentos Principais:
Usuario - Endereco -> N:N;
Usuário - Filme -> N:N.

Utilização:

Acessar a url /usuarios para visualização dos usuários cadastrados. A partir daí, tem-se links para formulário de cadastro de usuários. Após cadastrado um usuário, é possível adicionar endereços e filmes favoritos.

Em /usuarios, ao clicar em cima de algum registro, abre-se os detalhes com todos os endereços e filmes favoritos do usuário clicado.

Enfrentei dificuldade com a questão de autenticação no Laravel. Assim, não consegui implementar à tempo a autenticação solicitada.

Pontos de Correção / Melhoria:
- Views (adotar reutilização, melhorar design, melhorar apresentação das informações);
- Validação dos dados e adicionar máscara nos formulários;
- Documentação e comentários do código;
- Relização de testes;
- Refatoração (seguir estritamente MVC, SOLID, PSR's e utilizar mais os helpers do framework);






