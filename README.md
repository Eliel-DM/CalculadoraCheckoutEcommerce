# 🛒 Desafio PHP: Calculadora de Checkout (E-commerce)

Um sistema simples de checkout para e-commerce desenvolvido em **PHP**, com foco em manipulação de arrays, regras de desconto e formatação monetária. Este projeto foi criado com fins educacionais, priorizando organização, legibilidade e boas práticas de desenvolvimento.

---

## 📋 Sobre o Projeto

Este projeto simula o processamento de um carrinho de compras em um ambiente de linha de comando. A aplicação recebe uma lista de produtos, aplica regras de negócio específicas para descontos e gera um extrato final detalhado, formatado no padrão monetário brasileiro (**BRL**).

O objetivo principal é exercitar lógica de programação e escrita de código limpo, mantendo separação clara entre processamento e exibição dos dados.

---

## 🚀 Funcionalidades e Regras de Negócio

O sistema implementa as seguintes regras:

✅ **Desconto por Categoria**  
Produtos da categoria **"Eletrônicos"** recebem automaticamente **10% de desconto**.

✅ **Desconto Progressivo**  
Se o valor total bruto da compra exceder **R$ 500,00**, um desconto adicional fixo de **R$ 50,00** é aplicado ao final.

✅ **Formatação Monetária**  
Os valores são exibidos utilizando uma função dedicada para garantir o padrão brasileiro:

```
R$ 1.234,56
```

✅ **Extrato Detalhado**  
O sistema apresenta:

- Lista de itens  
- Indicação de descontos aplicados  
- Total bruto  
- Total de descontos  
- Valor final da compra  

---

## 🛠️ Tecnologias Utilizadas

- **Linguagem:** PHP (7.4 ou superior)  
- **Paradigmas:** Programação Estruturada  
- **Conceitos aplicados:**
  - Arrays associativos  
  - Estruturas de repetição (`foreach`)  
  - Condicionais (`if/else`)  
  - Acumuladores  
  - Separação de responsabilidades  
  - Clean Code  

---

## 💻 Como Executar

Certifique-se de ter o **PHP instalado** em sua máquina.

### 1️⃣ Clone o repositório

```bash
git clone https://github.com/seu-usuario/seu-repositorio.git
```

Ou apenas baixe os arquivos do projeto.

---

### 2️⃣ Acesse a pasta

```bash
cd nome-do-projeto
```

---

### 3️⃣ Execute o script

```bash
php index.php
```

---

## 📊 Exemplo de Dados (Input)

O sistema processa um array de produtos com a seguinte estrutura:

```php
$carrinho = [
    [
        "nome" => "Teclado Mecânico",
        "preco" => 250.00,
        "categoria" => "Periféricos"
    ],
    [
        "nome" => "Monitor 24'",
        "preco" => 800.00,
        "categoria" => "Eletrônicos"
    ],
    [
        "nome" => "Mouse Pad XL",
        "preco" => 50.00,
        "categoria" => "Acessórios"
    ],
];
```

---

## 📝 Saída Esperada (Output)

Ao executar o script, o terminal exibirá algo semelhante a:

```
--- Itens no Carrinho ---
Teclado Mecânico: R$ 250,00
Monitor 24': R$ 800,00 (Desconto Eletrônico aplicado!)
Mouse Pad XL: R$ 50,00

-------------------------
Total Bruto: R$ 1.100,00
Descontos: R$ 130,00
Valor Final: R$ 970,00
```

---

## 🧠 Objetivos de Aprendizado

Este desafio foi desenvolvido para fortalecer habilidades essenciais em PHP:

- Manipulação de estruturas de dados  
- Implementação de regras de negócio  
- Organização e clareza do código  
- Boas práticas de formatação  
- Separação entre lógica e apresentação  

Além disso, o projeto incentiva uma mentalidade de engenharia ao estruturar soluções simples de forma escalável e legível.

---

## 📁 Estrutura Recomendada

```
/projeto
 ├── index.php
 └── functions.php
```

Essa divisão ajuda a manter o código modular e facilita futuras melhorias.

---

## 🔮 Possíveis Melhorias Futuras

Algumas evoluções naturais para este projeto incluem:

- Implementação de cupons de desconto  
- Cálculo de frete  
- Suporte a múltiplas moedas  
- Versão orientada a objetos  
- Testes automatizados com PHPUnit  
- Padronização PSR-12  
- Containerização com Docker  

Essas melhorias transformariam o exercício em um mini projeto de nível profissional.

---

## 🎯 Finalidade

Projeto desenvolvido para fins de estudo e prática em PHP, com foco na construção de código limpo e na implementação de regras de negócio comuns em sistemas de e-commerce.

---

## 👨‍💻 Autor

Desenvolvido como parte de estudos em PHP e boas práticas de engenharia de software.
