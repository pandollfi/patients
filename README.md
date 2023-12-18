# Sistema de Cadastro de Pacientes

Um sistema web para cadastro de pacientes com autenticação via login, validação de CEP com ViaCEP, verificação de CPF e CNS, utilizando Laravel na última versão.

## Estrutura

O sistema oferece uma estrutura MVC, além de trabalhar também com interface (service e repository).
- Interface: Define os contratos para as classes Service e Repository, estabelecendo os métodos que devem ser implementados pelas classes. Garantindo consistência e permitindo a troca de implementações sem afetar outras partes do sistema.
- Controller: Recebe requisições do usuário, interage com as classes de Service (interfaces) para processar essas requisições, recebendo dados preparados para serem enviados às views.
- Service: Contém a lógica de negócios e processamento de dados. Interage com os Repositories e executa operações complexas.
- Repository: Manipula operações de persistência de dados, interagindo com bancos de dados. Implementa os contratos definidos pelas interfaces de Repository.

## Funcionalidades

- Autenticação via login para acesso ao sistema.
- Validação de CEP utilizando ViaCEP no cadastro e edição de pacientes.
- Verificação de CPF e CNS por algoritmos internos.
- Implementação do padrão Service Repository para tratamento dos códigos.

## Tecnologias Utilizadas

- Laravel 10
- PHP 8.1
- Postgresql

## Instalação

1. Clone o repositório.
2. Execute `composer install` para instalar as dependências do projeto.
3. Execute o script de banco de dados localizado na raiz do projeto.
4. Configure o ambiente de acordo com as diretrizes do Laravel.
5. Utilize o usuário criado para acesso:
    - Usuário: teste@om30.com.br
    - Senha: 123456789

## Como Usar

Após a instalação, inicie o servidor (Execute `php artisan serve`).
Acesse o sistema através do login com as credenciais fornecidas. 
Explore as funcionalidades de cadastro de pacientes, utilizando as validações implementadas.

## Contribuição

Contribuições são bem-vindas! Se deseja contribuir, siga os padrões de contribuição e abra uma solicitação de pull request.

## Versão

1.0

## Autor

Jean Carlo dos Santos Pandolfi Júnior

