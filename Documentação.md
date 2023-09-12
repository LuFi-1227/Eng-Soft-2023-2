# Banco Universitário
Desenvolvimento de um projeto que fará o gerenciamento do restaurante universitário, especificamente no que se concerne ao sistema de créditos. O projeto irá abranger desde o registro do usuário até as atribuições da catraca (que será a responsável por liberar a passagem do usuário ao ambiente alimentar do restaurante).
# Objetivos:
Aprimoramento de funções necessárias para o gerenciamento do Restaurante Universitário.

# Requisitos Funcionais(Iterações):
>## Iteração 1: De 30/08/23 à 13/09/23
>- *RF01*: - *Efetuar Login* _ Douglas
>- *RF02*: - *Cadastrar Usuário* _ Luiz Filipe
>- *RF03*: - *Alteração de dados do usuário* _ Patryck
>- *RF04*: - *Deleção do usuário* _ Cássio
>- *RF05*: - *Manipular saldo* _ Rafael
>- *RF06*: - *Exibir saldo* _ Luís Felipe
>- *RF07*: - *Filtragem de dados dos usuários* _ Gabryel

# Casos de Uso e User Stories

## RF07: - Busca de Dados dos Usuários  _ By Gabryel Marques (@GabryelMarques)

## Autor: @GabryelMarques _ Gabryel Soares Marques

### Atores:

Gerente de T.I - insere e edita qualquer registro do banco de dados.

Administrador - insere e edita qualquer registro do banco de dados, exceto aqueles cuja função esteja acima dele.

### Descrição Sucinta:

Consulta no banco de dados as informações dos usuários as exibir.

### Pré-Condição:

Os autores devem ter autorização adequada para acessar o banco de dados e

o usuário que está sendo buscado deve estar previamente cadastrado no sistema.

### Fluxo Principal:

1. O ator deve entrar no banco de dados com login e senha 
2. O sistema verifica se o ator preencheu corretamente o formulário e:
    1. Se sim, o sistema vai para o passo 3.
    2. Senão, o sistema exibe a mensagem ‘Erro ao preencher formulário ‘x’, verifique se preencheu corretamente e tente novamente’.
3. O sistema verifica se o ator possui cadastro no banco de dados e o seu nível de permissões e:
    1. Se sim, o sistema exibe a mensagem ‘Logado com sucesso’ e vai para o passo 4.
    2. Senão, o sistema exibe a mensagem ‘Usuário ou senha não encontrados, tente novamente’.
4. O sistema redireciona o ator para a página de consulta onde ele insere os dados do usuario buscado, ou caso ele queira sair ele pode clicar no botão ‘sair’.
    
    a .  Se for encontrado registro no banco de dados, o sistema exibe as informações .
    
    b .  Senão, o sistema exibe a mensagem ‘Não á registro no banco de dados’.
    

### Campos do Formulário:

| Campo | Obrigatório? | Editável? | Formato |
| --- | --- | --- | --- |
|  |  |  |  |
|  |  |  |  |

### Opções dos Usuários:

| Opção | Descrição | Atalho |
| --- | --- | --- |
| Consultar | Faz a pesquisa no banco de dados | Botão ‘Consultar’ |
| Sair | Sair da pagina de consulta | Botão ‘Sair’ |

### Relatório do Usuário:

| Campo | Descrição | Formato |
| --- | --- | --- |
|  |  |  |
|  |  |  |

### Fluxo Alternativo:

## User Stories

Agora iremos contar uma estória de uma persona que é usuário:

<strong>Persona um, Gerente de TI:<strong>
| Epic | User Story | Critério de aceitação |
| --- | --- | --- |
| Meu nome é Gustavo e como um Gerente de T.I, eu quero consultar os dados dos usuários no sistema para visualizar e, se necessário, editar todas as informações dos usuários no sistema, independentemente de suas permissões.| Como um Gerente de T.I, desejo consultar os dados dos usuários no sistema para visualizar.| Eu devo ser capaz de fazer login no sistema com minhas credenciais (login e senha).
O sistema deve verificar se o meu usuário está cadastrado no banco de dados e se tenho permissão para acessar a página de consulta de dados dos usuários.
Na página de consulta, devo ser capaz de inserir o CPF/CNPJ do usuário que desejo consultar.
Devo ter a opção de sair da página de consulta, clicando no botão "Sair".|

<strong>Persona dois, Administrador:<strong>
| Epic | User Story | Critério de aceitação |
| --- | --- | --- |
| Meu nome é João e como um Administrador, eu quero consultar os dados dos usuários no sistema para visualizar e, se necessário, editar as informações dos usuários com níveis de permissão abaixo do meu.| Como um Administrador, desejo consultar os dados dos usuários no sistema para visualizar.| Eu devo ser capaz de fazer login no sistema com minhas credenciais (login e senha).
O sistema deve verificar se o meu usuário está cadastrado no banco de dados e se tenho permissão para acessar a página de consulta de dados dos usuários.
Na página de consulta, devo ser capaz de inserir o CPF/CNPJ do usuário que desejo consultar.
Devo ter a opção de sair da página de consulta, clicando no botão "Sair".|

### Tela de edição, exclusão e busca de cadastros
![image](https://github.com/LuFi-1227/Eng-Soft-2023-2/assets/129668645/0f7df900-7bae-46d6-8503-48cdb9cfe814)
