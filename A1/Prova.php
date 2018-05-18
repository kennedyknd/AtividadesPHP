<html>
    <head>
        <meta charset="utf-8"/>
        <title>Avaliação 1</title>
        <link rel="stylesheet" href="js/bootstrap/css/bootstrap.css" />
        <link rel="stylesheet" href="js/bootstrap/css/bootstrap.css">
        <script type="text/javascript" src="js/jquery-3.3.1.js"></script>
        <script type="text/javascript" src="js/jquery.maskedinput.js"></script>
        <script type="text/javascript" src="js/sweetalert2.all.js"></script>

        <style>

            .div1 {
                float:left;
                width:48%;
            }
            .div2 {
                float:right;
                width:48%;
            }
        </style>

    </head>
    <body>

    <div class="container">
        <div class="panel panel-info">
            <div class="panel-heading">Cadastro de Conta</div>
            <div class="panel-body">
                <form action="ProvaCalc.php" method="post">
                    <div class="div1">
                        <div>
                            <label>Tipo de Conta:</label>
                            <input type="radio" name="tipoConta" value="despesas" id="despesas"checked> <label for="despesas">Despesas</label>
                            <input type="radio" name="tipoConta" value="receitas" id="receitas"> <label for="receitas">Receitas</label><BR>
                        </div><br/>
                        <div class="form-group">
                            <label for="valor">Valor</label>
                            <input type="number" class="form-control" step=".01" id="valor" name="valor" placeholder="Valor" required>
                        </div>
                        <div>
                            <label>Categoria: </label>
                            <select name="categoria" class="form-control" >
                                <option value="Alimentacao">Alimentação</option>
                                <option value="Transporte">Transporte</option>
                                <option value="Saude">Saude</option>
                                <option value="Habitacao">Habitação</option>
                                <option value="Mercado">Mercado</option>
                            </select>
                        </div><br/>

                        <div>
                            <label>Tipo de Pagamento:</label>
                            <input type="radio" name="tipoPagamento" value="avista" id="avista"checked> <label for="avista">A vista</label>
                            <input type="radio" name="tipoPagamento" value="parcelado" id="parcelado"> <label for="parcelado">Parcelado</label><BR>
                        </div><br/>

                        <div class="form-group">
                            <label for="qtdParcelas">Qtd. Parcelas</label>
                            <input type="number" class="form-control" id="qtdParcelas" name="qtdParcelas" placeholder="Quantidade de Parcelas" required>
                        </div>

                        <div>
                            <label>Forma de Pagamento: </label>
                            <select name="formaPagamento" class="form-control" >
                                <option value="Dinheiro">Dinheiro</option>
                                <option value="CartaoCredito">Cartão de Crédito</option>
                                <option value="CartaoDebito">Cartão de Débito</option>
                                <option value="Cheque">Cheque</option>
                            </select>
                        </div><br/>

                        <button type="submit" class="btn btn-success"><b>Enviar</b></button>
                        <button type="reset" class="btn btn-warning" onClick="alert('Limpo com sucesso'); return true"><b>Limpar</b></button>

                    </div>

                </form>

            </div>
        </div>
    </div>

    </body>
</html>