# Cálculo de IMC em PHP

Este projeto é um simples programa em **PHP** que classifica o Índice de Massa Corporal (**IMC**) de um valor informado.

## 📌 Funcionalidades

- Recebe um valor de IMC e retorna a classificação correspondente.
- Utiliza um **array associativo** para armazenar as faixas de IMC.
- Percorre o array e encontra a classificação correta de forma eficiente.
- Formata o número para exibição com duas casas decimais.

## 📜 Como Funciona

O programa contém:

- Uma **função** chamada `classificarIMC()` que recebe um valor de IMC.
- Um **array associativo** com as faixas de classificação do IMC.
- Um loop `foreach` que percorre o array e identifica a categoria correta.
- Um comando `echo` que exibe o resultado formatado na tela.


## 📝 Exemplo de Saída

Se a função for chamada com um IMC de **25.30**, o programa exibirá:

```bash
Atenção, seu IMC é 25.30, e você está classificado como Sobrepeso.
```

## 🛠️ Tecnologias Usadas

- PHP
