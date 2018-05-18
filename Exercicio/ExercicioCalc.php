<?php
$senha = $_POST['senha'];
$senha1 = $_POST['senha1'];
$pessoa = $_POST['pessoa'];
$cpf = $_POST['cpf'];
$cnpj = $_POST['cpf'];
$nome = $_POST['nome'];
$cargo = $_POST['cargo'];
$status = $_POST['status'];
$gender = $_POST['gender'];
$salario = $_POST['salario'];

echo "<h2>Número 3</h2>";

if( $senha == $senha1 ){
    echo "As senhas são iguais";
}
else{
    echo "As senhas não são iguais, favor verificar";
}

echo "<h2>Número 4</h2>";

if( $pessoa == "pessoaFisica" ){
    if($cpf == ""){
        echo "CPF não informado";
    }
}
if( $pessoa == "pessoaJuridica" ){
    if($cnpj == ""){
        echo "CNPJ não informado";
    }
}

echo "<h2>Número 5</h2>";

if($gender == "male"){
    echo "<p>Prezado Sr. $nome</p>
    <p>Você acaba de ser contratado como: $cargo</p>
    <p>Sua situação está $status</p>";
}
else{
    echo "<p>Prezada Sra. $nome</p>
    <p>Você acaba de ser contratado como: $cargo</p>
    <p>Sua situação está $status</p>";
}

echo "<h2>Número 6</h2>";
if($cargo == "Estagiario"){
    $salario = $salario * 2;
    echo "<p>Parabéns! Você foi contratado</p>";
}
if($cargo == "Gerente"){
    $salario = $salario * 1.5;
}
if($cargo == "Diretor"){
    $salario = $salario * 1.3;
}
else{
    $salario = $salario * 1.1;
}

echo "<p>Seu novo salário é $salario</p>";

?>