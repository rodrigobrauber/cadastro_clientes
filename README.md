 

## 💻  Cadastro de clientes
CRUD de Clientes, desenvolvido em PHP 8.1 sem o uso de frameworks com persistência em banco de dados MySQL, permitindo que os dados existentes sejam listados, editados, removidos e criado novos registros de clientes. Possui um banco de dados simples de nome "cadastro_clientes", com uma única tabela, chamada "clientes". Esta tabela possui as seguintes coluas: id, nome, email, telefone, nome_imagem, path.



>  - id: é a chave primária, auto increment, utilizada para facilitar a identificação e manipulação de dados.
>  - nome: utilizada para salvar o nome do cliente.
>  - email: utilizada para salvar o e-mail do cliente.
>  - telefone: utilizada para salvar o telefone do cliente.
>  - nome_imagem: campo utilizado para guardar o nome da imagem, esse nome é referente ao nome real do arquivo enviado pelo usuario.
>  - path: campo utilizado para guardar o nome gerado aleatoriamente para a imagem, evitando assim conflito e duplicidade na hora de mostrar os dados, visto que poderiam existir imagens com o mesmo nome.

 ## 🚀 Rodando o Projeto

Para rodar o projeto, basta clonar o repositório em questão, criar um banco de dados preferencialmente chamado "cadastro_clientes", e importar o arquivo bd_clientes.sql que encontra-se na raiz do projeto. Na pasta controller, acessar o arquivo Dao ajustar as variáveis host, banco de dados, usuario e senha conforme suas configurações.
