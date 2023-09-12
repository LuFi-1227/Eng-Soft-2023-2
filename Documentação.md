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

Casos de Uso e User Stories
RF03: - Cadastrar Usuário _ By Patryck Henryck Moreira Silva (@PHmore)
Autor: @PHmore _ Patryck Henryck Moreira Silva

## Atores:

Gerente de T.I - insere e edita qualquer registro do banco de dados.

Administrador - insere e edita qualquer registro do banco de dados, exceto aqueles cuja função esteja acima dele.

### Descrição Sucinta:

Usuários podem editar seus próprios dados cadastrair até certa limitação dependendo do nível de permissão. Enquanto usuários com nível de permissão necessária podem editar os dados de somente leitura para os usuário abaixo a seu nível.

### Pré-Condição:

Os atores devem estar logados no sistema com dados registrados. Os atores que desejam alterar dados de somente leitura para o usuário padrão deve estar logado e possuir as permissões necessárias

### Fluxo Principal:

1. O ator acessa a Tela de Login e efetua o login com CPF e senha;
2. O Sistema verifica se os dados existem no banco de dados e o nível de permissão do ator;
3. O Sistema redireciona o ator para sua tela após verificação de credenciais;
4. Caso o ator tenha o nível de permissão necessário o sistema exibe na tela do ator uma tabela com os usuários e seus dados e os seguintes campos de formulário a serem modificados:
    1. E-mail;
    2. Senha;
    3. Nível de Acesso;
    4. CPF/CNPJ;
    5. Nome;
    6. Número de Matrícula;
5. O ator preenche os campos de formulário e clica no botão ‘Alterar’, confirmando a alteração dos dados
6. O sistema  verifica se os outros campos de formulário obrigatórios estão preenchidos:
    1. Se sim, o sistema verifica e insere os dados existentes no conjunto referente ao nível de acesso do usuário cadastrado e exibe a mensagem: ‘Usuário modificado com sucesso’;
    2. Senão o sistema exibe a mensagem: ‘Campo ‘x’ não está devidamente preenchido, verifique se este foi preenchido corretamente e tente novamente’;
7. Caso o ator não tenha o nível de permissão necessário o sistema direciona o ator para sua página pricipal;
8. O ator aperta em “Alterar informações”, em seguida o sistema exibe na tela do ator uma tabela com os seus dados e os seguintes campos de formulário a serem modificados:
    1. E-mail;
    2. Senha;

### Campos do Formulário:

| Campo | Obrigatório? | Editável? | Formato |
| --- | --- | --- | --- |
| E-mail | Sim | Sim | Texto |
| Senha | Sim | Sim | Texto |

### Opções dos Usuários:

| Opção | Descrição | Atalho |
| --- | --- | --- |
| Cancelar | Confirmar alterações | Enter ou Botão ‘Alterar’ |

### Relatório do Usuário:

| --- | --- | --- |

### Fluxo Alternativo:

1. O ator acessa a Tela de Login e efetua o login com CPF e senha;
2. O Sistema verifica se os dados existem no banco de dados e o nível de permissão do ator;
3. O Sistema redireciona o ator para sua tela após verificação de credenciais;
4. Caso o ator tenha o nível de permissão necessário o sistema exibe na tela do ator uma tabela com os usuários e seus dados e os seguintes campos de formulário a serem modificados:
    1. E-mail;
    2. Senha;
    3. Nível de Acesso;
    4. CPF/CNPJ;
    5. Nome;
    6. Número de Matrícula;
5. O ator clica o botão “Cancelar”, a operação de edição é cancelada, os dados são mantidos os mesmos e o ator retorna para a tela de busca;
		
Agora iremos contar uma estória de uma persona que é usuário:

Persona um, Gerente de TI:
Epic 	| User Story 	| Critério de aceitação
| --- | --- | --- |
Meu nome é César e como Gerente de TI eu quero poder editar qualquer dado de qualquer usuário, seja ele comum ou administrativo dentro da plataforma para que haja melhor controle e administração dos dados e do sistema, fornecendo maior segurança e responsabilidade para os usuários comuns 		| Enquanto Gerente de TI, necessito de um acesso com tal permissão para o cumprimento de minhas responsabilidades e consequentemente, um acesso ao banco de dados 	 	| Certifique-se que o Gerente de TI pode fazer login em sua conta e tenha acesso direto ao banco de dados com uma interface suficientemente limpa e visual para melhor conforto para as vistas|

Persona dois, Administrador:
Epic 	| User Story 	| Critério de aceitação
| --- | --- | --- |
Meu nome é Leon e como administrador eu quero poder editar os dados de qualquer usuário com permissão menor que a minha, seja ele comum ou administrativo, assim como a atendente |Enquanto Administrador, necessito de um login registrado pelo Gerente de TI com permissão suficiente para trabalhar 	|Certifique-se que o Gerente de TI tenha cadastrado o administrador e que este tenha acesso ao sistema com suas credenciais e com permissão mínima para editar-las e para editar os dados de usuários comuns|

Persona três, Usuário:
Epic 	| User Story 	| Critério de aceitação
| --- | --- | --- |
Meu nome é Chris e como usuário eu quero poder editar os meus dados cadastrais e alterar minha senha sempre que julgar necessário 	|Enquanto Usuário, necessito de um login registrado pelo administrador |Certifique-se que o administrador tenha cadastrado o usuário e que este tenha acesso ao sistema com suas credenciais e com permissão mínima para editar-las|

## Prótotipos Tela
https://www.figma.com/file/Xs8d7jgiJpVNu6AKkIhKga/Site-RU_UFT_ENG_SOFT?type=design&node-id=75-14&mode=design&t=phL3zE6fPoPKcoSw-4
