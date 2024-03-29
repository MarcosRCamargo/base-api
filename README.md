# API de Exemplo com Lumen

Esta é uma API de exemplo construída utilizando o framework Lumen, uma versão "lightweight" do Laravel. A API possui funcionalidades básicas, incluindo autenticação JWT (JSON Web Token) e um nível inicial de controle de acesso (ACL). Abaixo estão detalhadas as características e tecnologias envolvidas nesta API.

## Características

- **Autenticação JWT**: Implementação de autenticação baseada em JWT para proteger os endpoints da API.
- **Controle de Acesso (ACL)**: Implementação básica de controle de acesso para restringir o acesso a certos endpoints com base em funções de usuário.
- **Docker**: Utilização de contêineres Docker para simplificar o ambiente de desenvolvimento e implantação da API.
- **MySQL**: Banco de dados relacional MySQL para armazenamento de dados.
- **Redis**: Utilização do Redis para armazenamento em cache e gerenciamento de sessões.
- **Nginx**: Servidor web Nginx utilizado como proxy reverso para roteamento de solicitações HTTP para a API.
- **OAuth 2.0 e Login do Google**: Implementação de autenticação OAuth 2.0 com suporte ao login do Google para consumir a API.
- **Testes de Unidade**: Implementação de testes de unidade para garantir a robustez e qualidade do código.

## Tecnologias Utilizadas

- **Lumen**: Micro-framework PHP para o desenvolvimento de APIs e microserviços.
- **PHP 8.1**: Linguagem de programação backend utilizada para desenvolver a lógica da aplicação.
- **Composer**: Gerenciador de dependências PHP utilizado para instalar e gerenciar as dependências do projeto.
- **GitLab CI/CD**: Configuração de pipelines de integração e entrega contínua para automação do processo de implantação.
- **Markdown**: Utilização do formato Markdown para escrever documentação legível e formatada.

## Autor

Esta API foi desenvolvida por Marcos R. Camargo como parte de um projeto de demonstração. Se você tiver alguma dúvida ou sugestão, sinta-se à vontade para entrar em contato pelo seguinte e-mail: marcosrcamargo@example.com.

---

Este README foi criado com o intuito de fornecer uma visão geral da API e das tecnologias envolvidas. Para obter instruções detalhadas sobre como configurar e executar a API, consulte a documentação fornecida no projeto.
