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

## RF01: - Login_ By Douglas (@XDougSa)

### Autor: @XDougSa _ Douglas Ribeiro Santos de Sá

## Revisor: @rafaeld74 _ Rafael de Oliveira Ribeiro

### Atores:

Gerente de T.I - insere e edita qualquer registro do banco de dados.

Administrador - insere e edita qualquer registro do banco de dados, exceto aqueles cuja função esteja acima dele.

Atendente - visualiza e recarrega o saldo de qualquer usuário, cobra e libera a passagem do usuário.

Catraca - visualiza o saldo do usuário, cobra e libera a passagem do usuário.

Usuário - visualiza saldo, altera os próprios dados cadastrais, exceto aqueles registrados em documentos oficiais.

### Descrição Sucinta:

Verifica os dados de login e senha fornecidos pelo usuário e dá acesso ou não ao sistema.
  
### Pré-Condição:

Os atores deverão estar registrados no sistema.

### Fluxo Principal:

1. O ator digita seu CPF e senha nos campos correspondentes.
2. Clica em ‘Entrar’ ou aperta a tecla ‘Enter’.
3. O sistema verifica se o ator consta no banco de dados.
4. O ator é redirecionado à sua página.

### Campos do Formulário:

| Campo | Obrigatório? | Editável? | Formato |
| --- | --- | --- | --- |
| CPF | Sim | Não | Texto |
| Senha | Sim | Não | Texto |

### Opções dos Usuários:

| Opção | Descrição | Atalho |
| --- | --- | --- |
| Entrar | efetuar login no sistema | Enter |
| Esqueci a senha | efetuar a recuperação de senha. | Sem atalho |

### Relatório do Usuário:

| Campo | Descrição | Formato |
| --- | --- | --- |
|  |  |  |
|  |  |  |

### Fluxo Alternativo:

1. O ator clica em ‘Esqueci a senha'.
2. O sistema redireciona o ator para a tela de redefinição de senha.

## User Stories

<strong>Persona um, Gerente de TI:<strong>
| Epic | User Story | Critério de aceitação |
| --- | --- | --- |
| Meu nome é Pedro e como Gerente de TI eu quero poder fazer login no sistema | Enquanto Gerente de TI, necessito de acesso via login para o cumprimento de minhas responsabilidades e, consequentemente, acesso ao sistema | Certifique-se que o Gerente de TI possa fazer login em sua conta|

<strong>Persona dois, Administrador:<strong>
| Epic | User Story | Critério de aceitação |
| --- | --- | --- |
| Meu nome é Pedro e como Administrador eu quero poder fazer login no sistema | Enquanto Administrador, necessito de acesso via login para o cumprimento de minhas responsabilidades e, consequentemente, acesso ao sistema | Certifique-se que o Administrador possa fazer login em sua conta|

<strong>Persona três, Atendente:<strong>
| Epic | User Story | Critério de aceitação |
| --- | --- | --- |
| Meu nome é Pedro e como Atendente eu quero poder fazer login no sistema | Enquanto Atendente, necessito de acesso via login para o cumprimento de minhas responsabilidades e, consequentemente, acesso ao sistema | Certifique-se que o Atendente possa fazer login em sua conta|

<strong>Persona quatro, Usuário:<strong>
| Epic | User Story | Critério de aceitação |
| --- | --- | --- |
| Meu nome é Pedro e como Usuário eu quero poder fazer login no sistema | Enquanto Usuário, necessito de acesso via login para vizualizar meu saldo, alterar dados, etc. | Certifique-se que o Administrador possa fazer login em sua conta|

### Tela de login
![image](https://github.com/LuFi-1227/Eng-Soft-2023-2/assets/81888493/a4c10034-489a-437e-b719-a45bff7b37b5)


