<?php

$dataBase = [
    ["nome" => "Teclado Mecânico", "preco" => 250.00, "categoria" => "Periféricos"],
    ["nome" => "Monitor 24'", "preco" => 800.00, "categoria" => "Eletrônicos"],
    ["nome" => "Mouse Pad XL", "preco" => 50.00, "categoria" => "Acessórios"],
];

/*
    Rules
    Categoria é "Eletrônicos"	10% de desconto no item | Essa será a primeira regra aplicada de forma que após esse desconto será validada a lógica se é > 500 ;
    Total bruto da compra > R$ 500,00	Desconto fixo adicional de R$ 50,00
*/

function isEletronicProducts (array $dataBase){
    $valorTotal = 0;
    for ($i = 0; $i < count($dataBase);$i++){
        $categoria = $dataBase[$i]['categoria'];

        if($categoria == 'Eletrônicos'){
            $precoInteiro = $dataBase[$i]['preco'];
            $precoInteiroComDesconto = $precoInteiro - $precoInteiro * 0.1;
            $valorTotal += $precoInteiroComDesconto; // Caso seja eletrônico aplicará o desconto de 10%;
        } else {
            $precoInteiro = $dataBase[$i]['preco'];
            $valorTotal += $precoInteiro; // Caso não seja eletrônico somente atribuirá o valor a variável;
        }
    }
    echo "Valor total após o desconto em eletrônicos $valorTotal R$!<br> ";
    return $valorTotal;
}

function isBigThan500 ($valorTotal){
    $descontoFixo = 50;
    if($valorTotal > 500){
        $valorTotal -= $descontoFixo;
        echo "Desconto aplicado no valor de 50 R$ !<br>";
        echo "O valor total da compra é de : $valorTotal R$! <br>";
    } else{
        echo "Nenhum desconto aplicado em relação ao preço total";
    }
}

$valorTotal = isEletronicProducts($dataBase);
isBigThan500($valorTotal);