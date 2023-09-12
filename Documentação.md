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

## RF06: - *Exibir saldo* _ By Luís Felipe (@LuisFelipeKrause)

## Autor: @LuisFelipeKrause _ Luís Felipe Krause de Castro

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

