```
UNIVERSIDADE FEDERAL DO TOCANTINS (UFT) _ CÂMPUS PALMAS
CURSO DE BACHARELADO EM CIÊNCIAS DA COMPUTAÇÃO
DISCIPLINA: ENGENHARIA DE SOFTWARE _ PROJETO: RUcoin
DOCENTE: EDEILSON MILHOMEM DA SILVA
DISCENTES:
> Cássio Coutinho Lima
> Douglas Ribeiro Santos de Sá
> Gabryel Soares Marques
> Luís Felipe Krause de Castro
> Luiz Filipe de Souza Alves
> Patryck Henryck Moreira Silva
> Rafael de Oliveira Ribeiro
```

# RUcoins
Desenvolvimento de um projeto que fará o gerenciamento do restaurante universitário, especificamente no que se concerne ao sistema de créditos. O projeto irá abranger desde o registro do usuário até as atribuições da catraca (que será a responsável por liberar a passagem do usuário ao ambiente de alimentação pertencente ao restaurante).
# Objetivos:
Aprimoramento de funções necessárias para o gerenciamento do Restaurante Universitário.

# Requisitos Funcionais(Iterações):
>## Iteração 1: De 30/08/23 à 25/10/23
>- *RF01*: - *Efetuar Login* _ Douglas
>- *RF02*: - *Cadastrar Usuário* _ Luiz Filipe
>- *RF03*: - *Alterar de dados do usuário* _ Patryck
>- *RF04*: - *Deletar o usuário* _ Cássio
>- *RF05*: - *Adicionar saldo* _ Rafael
>- *RF06*: - *Exibir saldo* _ Luís Felipe
>- *RF07*: - *Filtragem de dados dos usuários* _ Gabryel
>- *RF08*: - *Diminuir saldo* _ Rafael

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

## RF02: - Cadastrar Usuário

### Autor: @LuFi-1227 _ Luiz Filipe de Souza Alves

## Revisor: @Coutinhopmw _ Cássio Coutinho Lima

### Atores:

Gerente de T.I - insere e edita qualquer registro do banco de dados.

Administrador - insere e edita qualquer registro do banco de dados, exceto aqueles cuja função esteja acima dele.

### Descrição Sucinta:

Cadastra novos usuários no sistema usando seus dados e determinando o nível de acesso que eles possuem.

### Casos de Uso:
- Cadastro de Usuários;
- Remoção de Usuários;
- Edição de dados de usuários.
  
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

### Fluxo Alternativo:

## User Stories

Agora iremos contar uma estória de uma persona que é usuário:

<strong>Persona um, Gerente de TI:<strong>
| Epic | User Story | Critério de aceitação |
| --- | --- | --- |
| Meu nome é César e como Gerente de TI eu quero poder cadastrar, editar e excluir qualquer dado de qualquer usuário, seja ele comum ou administrativo dentro da plataforma para que haja melhor controle e administração dos dados e do sistema, fornecendo maior segurança e responsabilidade para os usuários comuns | Enquanto Gerente de TI, necessito de um acesso com tal permissão para o cumprimento de minhas responsabilidades e consequentemente, um acesso ao banco de dados | Certifique-se que o Gerente de TI pode fazer login em sua conta e tenha acesso direto ao banco de dados com uma interface suficientemente limpa e visual para melhor conforto para as vistas |

<strong>Persona dois, Administrador:<strong>
| Epic | User Story | Critério de aceitação |
| --- | --- | --- |
| Meu nome é Leon e como administrador eu quero poder cadastrar, editar e excluir os dados de qualquer usuário com permissão menor que a minha, seja ele comum ou administrativo, assim como a atendente, também quero ter acesso à leitura de dados de usuários para que a administração seja mais estável | Enquanto Administrador, necessito de um login registrado pelo Gerente de TI com permissão suficiente para trabalhar | Certifique-se que o Gerente de TI tenha cadastrado o administrador e que este tenha acesso ao sistema com suas credenciais com permissão mínima para evitar problemas e para cumprir o básico |

### Tela de edição, exclusão e busca de cadastros
![image](https://github.com/LuFi-1227/Eng-Soft-2023-2/assets/129668645/99d4dd89-5e93-45f0-9885-052c3c1331b5)

### Tela de cadastro de usuários
![image](https://github.com/LuFi-1227/Eng-Soft-2023-2/assets/129668645/6797e6de-7c80-40e5-95c8-1a715c1f55eb)

## RF03: - Alterar dados do usuário _ By Patryck Henryck Moreira Silva (@PHmore)
### Autor: @PHmore _ Patryck Henryck Moreira Silva
## Revisor: @LuFi-1227_Luis Filipe de Souza Alves

## Atores:

Gerente de T.I - insere e edita qualquer registro do banco de dados.

Administrador - insere e edita qualquer registro do banco de dados, exceto aqueles cuja função esteja acima dele.

Usuário - vê e edita registros especificos ao seu nível de permissão, possui o nível de permissão baixa e acesso a dados limitados.

### Descrição Sucinta:

Usuários podem editar seus próprios dados cadastrair até certa limitação dependendo do nível de permissão. Enquanto o atores com nível de permissão necessária podem editar os dados de somente leitura para os usuário abaixo a seu nível.

### Pré-Condição:

Os atores devem estar logados no sistema com dados registrados. Os atores que desejam alterar dados de somente leitura para o usuário padrão deve estar logado e possuir as permissões necessárias

### Fluxo Principal:

#### Para o Administrador:
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
5. O ator preenche os campos de formulário e clica no botão ‘Confirmar’ ou o atalho 'Enter', confirmando a alteração dos dados
6. O sistema  verifica se os outros campos de formulário obrigatórios estão preenchidos:
    1. Se sim, o sistema verifica e modifica os dados existentes no conjunto referente ao nível de acesso do usuário cadastrado e exibe a mensagem: ‘Usuário modificado com sucesso’;
    2. Senão o sistema exibe a mensagem: ‘Campo ‘x’ não está devidamente preenchido, verifique se este foi preenchido corretamente e tente novamente’;

#### Para o Usuário:

1. Caso o ator não tenha o nível de permissão necessário o sistema direciona o ator para sua página pricipal;
2. O ator aperta em “Alterar informações”, em seguida o sistema exibe na tela do ator uma tabela com os seus dados e os seguintes campos de formulário a serem modificados:
    1. E-mail;
    2. Senha;
3. O ator aperta em 'Confirmar' ou o atalho 'Enter', confirmando a alteração dos dados
4. O sistema  verifica se os outros campos de formulário obrigatórios estão preenchidos:
    1. Se sim, o sistema verifica e modifica os dados existentes no conjunto referente ao nível de acesso do usuário cadastrado e exibe a mensagem: ‘Usuário modificado com sucesso’;
    2. Senão o sistema exibe a mensagem: ‘Campo ‘x’ não está devidamente preenchido, verifique se este foi preenchido corretamente e tente novamente’;

### Campos do Formulário:

| Campo | Obrigatório? | Editável? | Formato |
| --- | --- | --- | --- |
| E-mail | Sim | Sim | Texto |
| Senha | Sim | Sim | Texto |

### Opções dos Usuários:

| Opção | Descrição | Atalho |
| --- | --- | --- |
| Confirmar | Confirmar alterações | Enter ou Botão ‘Alterar’ |
| Cancelar | Cancela a operação  | Esc |

### Relatório do Usuário:

| Campo | Descrição | Formato |
| --- | --- | --- |
|  |  |  |

### Fluxo Alternativo:

Obs: O ator aperta a opção cancelar

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
5. O ator aperta o botão 'Cancelar' ou usa o atalho 'Esc', a operação de edição é cancelada, os dados são mantidos os mesmos;
6. O ator retorna para a tela de busca caso seja um usuário com permissões caso contrário retorna para a página inicial;

## User Stories

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

# Prótotipos Tela
## Tela User
![image](https://github.com/LuFi-1227/Eng-Soft-2023-2/assets/107047839/af328c71-a519-4182-8741-17152345b5af)

## Tela Adm
![image](https://github.com/LuFi-1227/Eng-Soft-2023-2/assets/107047839/b928e1c2-f636-4c88-8cd5-4a0e91ed5de8)
 
## RF04: - *Deletar o usuário* _ By Cássio Coutinho (@Coutinhopmw)

### Autor: @Coutinhopmw _ Cássio Coutinho Lima
## Revisor: @PHmore _ Patryck Henryck Moreira Silva
### Atores:

Administrador - insere e edita qualquer registro do banco de dados, exceto aqueles cuja função esteja acima dele.

### Descrição Sucinta:

O ator pode realizar a deleção de um perfil de usuário.

### Casos de Uso:

### Pré-Condição:

O ator deve ter efetuado o login no sistema, buscado por um usuário específico.

### Fluxo Principal:

1. Ter efetuado o login no sistema.
2. Buscar um usuário específico.
3. Clicar no botão deletar.

### Campos do Formulário:

| Campo | Obrigatório? | Editável? | Formato |
| --- | --- | --- | --- |
| CPF/CNPJ | Sim | Sim | Texto |

### Opções dos Usuários:

| Opção | Descrição | Atalho |
| --- | --- | --- |
| Deletar usuário| Essa opção deleta o usuário  | Botão “Deletar” |

### Relatório do Usuário:

| Campo | Descrição | Formato |
| --- | --- | --- |
|  |  |  |

### Fluxo Alternativo:

## User Stories

Agora iremos contar uma estória de uma persona administrador:

<strong>Persona um, Atendente:<strong>
| Epic | User Story | Critério de aceitação |
| --- | --- | --- |
| Meu nome é Igor, e como administrador eu preciso deletar um usuário.| Enquanto administrador, posso realizar a deleção.| Possuindo um permissão para realizar esta ação. |

![image](https://github.com/LuFi-1227/Eng-Soft-2023-2/assets/86412433/67afa587-e27a-41ee-8a38-cf9c57626141)

## RF05: - Adicionar Saldo _ Rafael

### Autor: @rafaeld74 _ Rafael de Oliveira Ribeiro

## Revisor: @GabryelMarques _ Gabryel Soares Marques

## Atores:

Gerente de T.I - insere e edita qualquer registro do banco de dados.

Administrador - insere e edita qualquer registro do banco de dados, exceto aqueles cuja função esteja acima dele.

Atendente - visualiza e recarrega o saldo de qualquer usuário, cobra e libera a passagem do usuário.

Catraca - visualiza o saldo do usuário, cobra e libera a passagem do usuário.

### Descrição Sucinta:

Adicionar saldo aos usuarios no sistema aumentando o saldo na carteira.

### Pré-Condição:

Os atores devem estar logados no sistema com dados registrados e nível de acesso permitido para alterar os saldos.

### Fluxo Principal:

1. O autor acessa a função de manipulação de saldos no sistema.
2. O sistema exibe uma lista de clientes com suas carteirinhas e saldos atuais.
3. O autor seleciona um cliente da lista.
4. O autor escolhe a operação Recarregar:
5. O autor insere a quatidade de refeições.
6. O sistema verifica se o valor é válido (positivo).
    1. Se válido, o sistema aumenta o saldo da carteirinha do cliente.
    2. Se inválido, o sistema exibe uma mensagem de erro.
7. O sistema registra a transação no histórico do cliente.
8. O sistema exibe uma mensagem de confirmação da operação.
9. O autor pode escolher realizar outra operação ou sair da função.

### Opções dos Usuários:

| Opção | Descrição | Atalho |
| --- | --- | --- |
| Selecionar Cliente | Escolhe o cliente cuja carteirinha será manipulada | Clique |
| Adicionar Crédito | Adiciona crédito à carteirinha do cliente selecionado | Clique |
| Confirmar Operação | Confirma a operação de adição ou dedução de crédito | Enter |
| Sair | Sai da função de manipulação de saldos | Esc |

## User Stories

Agora iremos contar uma estória de uma persona que é usuário:

Persona um, Gerente de TI:
Epic 	| User Story 	| Critério de aceitação
| --- | --- | --- |
Meu nome é César e como Gerente de TI eu quero poder editar qualquer dado de qualquer usuário, seja ele comum ou administrativo dentro da plataforma para que haja melhor controle e administração dos dados e do sistema, fornecendo maior segurança e responsabilidade para os usuários comuns 		| Enquanto Gerente de TI, necessito de um acesso com tal permissão para o cumprimento de minhas responsabilidades e consequentemente, um acesso ao banco de dados 	 	| Certifique-se que o Gerente de TI pode fazer login em sua conta e tenha acesso direto ao banco de dados com uma interface suficientemente limpa e visual para melhor conforto para as vistas|

Persona dois, Administrador:
Epic 	| User Story 	| Critério de aceitação
| --- | --- | --- |
Meu nome é Leon e como administrador eu quero poder editar os dados de qualquer usuário com permissão menor que a minha, seja ele comum ou administrativo, assim como a atendente |Enquanto Administrador, necessito de um login registrado pelo Gerente de TI com permissão suficiente para trabalhar 	|Certifique-se que o Gerente de TI tenha cadastrado o administrador e que este tenha acesso ao sistema com suas credenciais e com permissão mínima para editar-las e para editar os dados de usuários comuns|

Persona três, Atendente/Catraca:

| Epic | User Story | Critério de aceitação |
| --- | --- | --- |
| Meu nome é Júlio, e como atendente eu preciso verificar e recarregar o saldo dos usuários. Além disso, preciso ter a autonomia de cobrar e liberar a entrada do usuário caso algum erro ocorra no sistema de catracas do restaurante | Enquanto Atendente, necessito de permissão para consultar e alterar o valor do saldo dos usuários quando necessário | Preciso que o Atendente possa fazer o processo de recarregar, cobrar e liberar a passagem de usuários rapidamente, a fim de evitar filas no restaurante |

### Tela de adicionar saldo:

![image](https://github.com/LuFi-1227/Eng-Soft-2023-2/assets/129432560/72a3b91e-1df6-4952-8328-6798d6829e67)
  
## RF06: - *Exibir saldo* _ By Luís Felipe (@LuisFelipeKrause)

### Autor: @LuisFelipeKrause _ Luís Felipe Krause de Castro

## Revisor: @XDougSa _ Douglas Ribeiro Santos de Sá

### Atores:

Atendente - visualiza e recarrega o saldo de qualquer usuário, cobra e libera a passagem do usuário.

Catraca - visualiza o saldo do usuário, cobra e libera a passagem do usuário.

Usuário - visualiza o próprio saldo.

### Descrição Sucinta:

Exibe o saldo de um usuário específico aos atores.

### Casos de Uso:

### Pré-Condição:

Os atores devem possuir registro no sistema e estar logados para que possam visualizar o saldo de um usuário.

### Fluxo Principal:

Obs.: O processo de exibição de saldo é diferente para cada ator.
1.  Para o Atendente:
    1. Acessa a tela de pesquisa e insere o CPF do usuário. 
    2. Caso o CPF esteja cadastrado, o saldo do usuário será retornado. Caso contrário, uma mensagem “Usuário não encontrado” será exibida.
2.  Para a Catraca:
    1. O usuário aproxima seu cartão do leitor integrado à catraca.
    2. A catraca consulta e exibe o saldo do usuário em seu display.
3.  Para o Usuário:
    1. A consulta ao saldo está sempre disponível ao usuário por meio da página de seu perfil no sistema do restaurante universitário.
    2. O usuário deve pressionar o campo referente ao saldo.
    3. O saldo é exibido ao usuário.

### Campos do Formulário:

| Campo | Obrigatório? | Editável? | Formato |
| --- | --- | --- | --- |
| CPF/CNPJ | Sim | Sim | Texto |

### Opções dos Usuários:

| Opção | Descrição | Atalho |
| --- | --- | --- |
| Consultar saldo | Essa opção exibe ao usuário seu saldo | Botão “Consultar saldo” |

### Relatório do Usuário:

| Campo | Descrição | Formato |
| --- | --- | --- |
|  |  |  |
|  |  |  |

### Fluxo Alternativo:

## User Stories

<strong>Persona um, Atendente:<strong>
| Epic | User Story | Critério de aceitação |
| --- | --- | --- |
| Meu nome é Júlio, e como atendente eu preciso verificar e recarregar o saldo dos usuários. Além disso, preciso ter a autonomia de cobrar e liberar a entrada do usuário caso algum erro ocorra no sistema de catracas do restaurante | Enquanto Atendente, necessito de permissão para consultar e alterar o valor do saldo dos usuários quando necessário | Preciso que o Atendente possa fazer o processo de recarregar, cobrar e liberar a passagem de usuários rapidamente, a fim de evitar filas no restaurante |

<strong>Persona dois, Usuário:<strong>
| Epic | User Story | Critério de aceitação |
| --- | --- | --- |
| Meu nome é Gabriel, e como Usuário eu preciso ter acesso ao saldo da minha própria conta para controlar meus gastos e saber quando devo recarregar meu cartão | Como Usuário, preciso ter acesso ao saldo da minha conta sempre que eu quiser | Permita que a consulta ao saldo seja feita quando o usuário quiser |

### Tela do Saldo sendo exibido ao usuário
![image](https://github.com/LuFi-1227/Eng-Soft-2023-2/assets/127569016/9a34b5df-c092-435a-be47-6eec5d499165)


## RF07: - Busca de Dados dos Usuários  _ By Gabryel Marques (@GabryelMarques)

## Autor: @GabryelMarques _ Gabryel Soares Marques

## Revisor: @LuisFelipeKrause _ Luis Felipe Krause

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

### Fluxo Alternativo:

## User Stories

Agora iremos contar uma estória de uma persona que é usuário:

<strong>Persona um, Gerente de TI:<strong>
| Epic | User Story | Critério de aceitação |
| --- | --- | --- |
| Meu nome é Gustavo e como um Gerente de T.I, eu quero consultar os dados dos usuários no sistema para visualizar e, se necessário, editar todas as informações dos usuários no sistema, independentemente de suas permissões.| Como um Gerente de T.I, desejo consultar os dados dos usuários no sistema para visualizar.| Eu devo ser capaz de fazer login no sistema com minhas credenciais (login e senha). O sistema deve verificar se o meu usuário está cadastrado no banco de dados e se tenho permissão para acessar a página de consulta de dados dos usuários. Na página de consulta, devo ser capaz de inserir o CPF/CNPJ do usuário que desejo consultar. Devo ter a opção de sair da página de consulta, clicando no botão "Sair".|

<strong>Persona dois, Administrador:<strong>
| Epic | User Story | Critério de aceitação |
| --- | --- | --- |
| Meu nome é João e como um Administrador, eu quero consultar os dados dos usuários no sistema para visualizar e, se necessário, editar as informações dos usuários com níveis de permissão abaixo do meu.| Como um Administrador, desejo consultar os dados dos usuários no sistema para visualizar.| Eu devo ser capaz de fazer login no sistema com minhas credenciais (login e senha). O sistema deve verificar se o meu usuário está cadastrado no banco de dados e se tenho permissão para acessar a página de consulta de dados dos usuários. Na página de consulta, devo ser capaz de inserir o CPF/CNPJ do usuário que desejo consultar. Devo ter a opção de sair da página de consulta, clicando no botão "Sair".|

### Tela de edição, exclusão e busca de cadastros

![image](https://github.com/LuFi-1227/Eng-Soft-2023-2/assets/129668645/0f7df900-7bae-46d6-8503-48cdb9cfe814)

## RF08: - Diminuir Saldo _ Rafael

### Autor: @rafaeld74 _ Rafael de Oliveira Ribeiro

## Atores:

Gerente de T.I - insere e edita qualquer registro do banco de dados.

Administrador - insere e edita qualquer registro do banco de dados, exceto aqueles cuja função esteja acima dele.

Atendente - visualiza e recarrega o saldo de qualquer usuário, cobra e libera a passagem do usuário.

Catraca - visualiza o saldo do usuário, cobra e libera a passagem do usuário.

### Descrição Sucinta:

Diminuir o saldo dos usuarios no sistema diminuindo o saldo na carteira.

### Pré-Condição:

Os atores devem estar logados no sistema com dados registrados e nível de acesso permitido para alterar os saldos.

### Fluxo Principal:

1. O autor acessa a função de manipulação de saldos no sistema.
2. O sistema exibe uma lista de clientes com suas carteirinhas e saldos atuais.
3. O autor seleciona um cliente da lista.
4. O autor escolhe a operação cobrança:
6. O sistema verifica se o valor é válido (sé ha saldo na carteirinha).
    1. Se válido, o sistema atualiza o saldo da carteirinha do cliente.
    2. Se inválido, o sistema exibe uma mensagem de erro.
7. O sistema registra a transação no histórico do cliente.
8. O sistema exibe uma mensagem de confirmação da operação.
9. O autor pode escolher realizar outra operação ou sair da função.

### Opções dos Usuários:

| Opção | Descrição | Atalho |
| --- | --- | --- |
| Selecionar Cliente | Escolhe o cliente cuja carteirinha será manipulada | Clique |
| Reduzir Crédito | Reduz crédito da carteirinha do cliente selecionado | Clique |
| Confirmar Operação | Confirma a operação de adição ou dedução de crédito | Enter |
| Sair | Sai da função de diminuir o saldo | Esc |

## User Stories

Agora iremos contar uma estória de uma persona que é usuário:

Persona um, Gerente de TI:
Epic 	| User Story 	| Critério de aceitação
| --- | --- | --- |
Meu nome é César e como Gerente de TI eu quero poder editar qualquer dado de qualquer usuário, seja ele comum ou administrativo dentro da plataforma para que haja melhor controle e administração dos dados e do sistema, fornecendo maior segurança e responsabilidade para os usuários comuns 		| Enquanto Gerente de TI, necessito de um acesso com tal permissão para o cumprimento de minhas responsabilidades e consequentemente, um acesso ao banco de dados 	 	| Certifique-se que o Gerente de TI pode fazer login em sua conta e tenha acesso direto ao banco de dados com uma interface suficientemente limpa e visual para melhor conforto para as vistas|

Persona dois, Administrador:
Epic 	| User Story 	| Critério de aceitação
| --- | --- | --- |
Meu nome é Leon e como administrador eu quero poder editar os dados de qualquer usuário com permissão menor que a minha, seja ele comum ou administrativo, assim como a atendente |Enquanto Administrador, necessito de um login registrado pelo Gerente de TI com permissão suficiente para trabalhar 	|Certifique-se que o Gerente de TI tenha cadastrado o administrador e que este tenha acesso ao sistema com suas credenciais e com permissão mínima para editar-las e para editar os dados de usuários comuns|

Persona três, Atendente/Catraca:

| Epic | User Story | Critério de aceitação |
| --- | --- | --- |
| Meu nome é Júlio, e como atendente eu preciso verificar e recarregar o saldo dos usuários. Além disso, preciso ter a autonomia de cobrar e liberar a entrada do usuário caso algum erro ocorra no sistema de catracas do restaurante | Enquanto Atendente, necessito de permissão para consultar e alterar o valor do saldo dos usuários quando necessário | Preciso que o Atendente possa fazer o processo de recarregar, cobrar e liberar a passagem de usuários rapidamente, a fim de evitar filas no restaurante |

### Tela de diminuir saldo (extorsão):

![image](https://github.com/LuFi-1227/Eng-Soft-2023-2/assets/129432560/72a3b91e-1df6-4952-8328-6798d6829e67)
