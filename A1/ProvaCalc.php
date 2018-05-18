<?php
$tipoConta = $_POST['tipoConta'];
$tipoPagamento = $_POST['tipoPagamento'];
$qtdParcelas = $_POST['qtdParcelas'];
$formaPagamento = $_POST['formaPagamento'];
$valor = $_POST['valor'];

if ( $tipoPagamento == "parcelado" && $qtdParcelas == 1 ){
    $tipoPagamento = "avista";
}

echo "<h2>Questão 2</h2>";

if ( $tipoPagamento == "avista"){
    if ( $qtdParcelas != 1 ){
        echo "Só é permitida 1 parcela para pagamentos a vista";
    }
}

echo "<h2>Questão 3</h2>";

if ( $tipoPagamento == "parcelado"){
    if ( $formaPagamento == "Dinheiro" || $formaPagamento == "CartaoDebito"){
        echo "Para pagamentos Parcelados só serão aceitos Cheques ou Cartão de Crédito";
    }
}

echo "<h2>Questão 4</h2>";

if ( $formaPagamento == "Dinheiro" || $formaPagamento == "Cheque"){
    echo "O valor da conta foi R$ $valor sem juros";
} else if ( $formaPagamento == "CartaoDebito"){
    $novoValor = $valor * 1.01;
    echo "O valor da conta foi R$ $valor com 1% de juros ficou com o total de R$ $novoValor";
} else {
    if ($tipoPagamento == "avista") {
        if ($formaPagamento == "CartaoCredito") {
            $novoValor = $valor * 1.03;
            echo "O valor da conta foi R$ $valor com 3% de juros ficou com o total de R$ $novoValor";
        }
    }
    if ($tipoPagamento == "parcelado") {
        if ($qtdParcelas == 2 || $qtdParcelas == 3) {
            $novoValor = $valor * 1.05;
            echo "O valor da conta foi R$ $valor com 5% de juros ficou com o total de R$ $novoValor";
        } else if ($qtdParcelas >= 4 && $qtdParcelas <= 6) {
            $novoValor = $valor * 1.08;
            echo "O valor da conta foi R$ $valor com 8% de juros ficou com o total de R$ $novoValor";
        } else if ($qtdParcelas >= 7 && $qtdParcelas <= 10) {
            $novoValor = $valor * 1.15;
            echo "O valor da conta foi R$ $valor com 15% de juros ficou com o total de R$ $novoValor";
        } else if ($qtdParcelas > 10) {
            $novoValor = $valor * 1.20;
            echo "O valor da conta foi R$ $valor com 20% de juros ficou com o total de R$ $novoValor";
        }
    }
}

echo "<h2>Questão 5</h2>";

if ( $tipoConta == "receitas" ){
    echo "Você acaba de ficar R$ $novoValor mais rico";
} else {
    echo "Você acaba de ficar R$ $novoValor mais pobre";
}

?>