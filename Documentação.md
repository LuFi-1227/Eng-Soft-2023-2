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

=================================================================================================================
# RF02: - Cadastrar Usuário _ By Luiz Filipe (@LuFi-1227)

## Atores:

Gerente de T.I - insere e edita qualquer registro do banco de dados.

Administrador - insere e edita qualquer registro do banco de dados, exceto aqueles cuja função esteja acima dele.

### Descrição Sucinta:

Cadastra novos usuários no sistema usando seus dados e determinando o nível de acesso que eles possuem.

### Pré-Condição:

Os atores devem estar logados no sistema com dados registrados e nível de acesso permitido para o cadastro de novos usuários.

### Fluxo Principal:

1. O ator acessa a Tela de Login e efetua o login com CPF e senha;
2. O Sistema verifica se os dados existem no banco de dados e se a permissão para o cadastro de novos usuários existe para o ator;
3. O Sistema redireciona o ator para sua tela após verificação de credenciais;
4.  O sistema exibe na tela do ator uma tabela com os usuários e seus dados e os seguintes campos de formulário a serem preenchidos:
    1. User Name;
    2. E-mail;
    3. Nível de Acesso;
    4. CPF/CNPJ;
    5. Nome;
    6. Número de Matrícula;
    7. Id.
5. O ator preenche os campos de formulário e clica no botão ‘Cadastrar’, confirmando o cadastro;
6. O sistema ignora o campo ‘ID’ e verifica se os outros campos de formulário obrigatórios estão preenchidos:
    1. Se sim, o sistema verifica se o campo opcional ‘Número de Matrícula’ foi preenchido para inserção e insere os dados existentes no conjunto referente ao nível de acesso do usuário cadastrado e exibe a mensagem: ‘Usuário cadastrado com sucesso’;
    2. Senão o sistema exibe a mensagem: ‘Campo ‘x’ não está devidamente preenchido, verifique se este foi preenchido corretamente e tente novamente’;
7. O sistema redireciona o ator para sua página principal;  

### Campos do Formulário:

| Campo | Obrigatório? | Editável? | Formato |
| --- | --- | --- | --- |
| User name | Sim | Sim | Texto |
| E-mail | Sim | Sim | Texto |
| Tag | Sim | Sim | Texto |
| CPF/CNPJ | Sim | Sim | Texto |
| Nome | Sim | Sim | Texto |
| Número de matrícula | Não | Sim | Texto |

### Opções dos Usuários:

| Opção | Descrição | Atalho |
| --- | --- | --- |
| Cadastrar | Efetua novos registros no Banco de Dados | Enter |

### Relatório do Usuário:

| Campo | Descrição | Formato |
| --- | --- | --- |
|  |  |  |
|  |  |  |

### Fluxo Alternativo:
