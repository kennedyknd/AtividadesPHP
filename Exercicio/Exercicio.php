<html>
    <head>
        <meta charset="utf-8"/>
        <title>Avaliação 1</title>
        <link rel="stylesheet" href="js/bootstrap/css/bootstrap.css" />
        <link rel="stylesheet" href="js/bootstrap/css/bootstrap.css">
        <script type="text/javascript" src="js/jquery-3.3.1.js"></script>
        <script type="text/javascript" src="js/jquery.maskedinput.js"></script>
        <script type="text/javascript" src="js/sweetalert2.all.js"></script>

        <script>

            $(function () {
                $('#telefone').mask('(99) 99999-9999');
                $('#cep').mask('99.999-999');
                $('#cpf').mask('999.999.999-99');
                $('#cnpj').mask('99.999.999/9999-99');


            })
        </script>

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
            <div class="panel-heading">Cadastro de Funcionário</div>
            <div class="panel-body">
                <form action="ExercicioCalc.php" method="post">
                    <div class="div1">
                        <div>
                            <label>Tipo de Pessoa:</label>
                            <input type="radio" name="pessoa" value="pessoaFisica" id="pessoaFisica"checked> <label for="pessoaFisica">Pessoa Física</label>
                            <input type="radio" name="pessoa" value="pessoaJuridica" id="pessoaJuridica"> <label for="pessoaJuridica">Pessoa Jurídica</label><BR>
                        </div><br/>
                        <div class="form-group">
                            <label for="cpf">CPF</label>
                            <input type="text" class="form-control" id="cpf" name="cpf" placeholder="CPF">
                        </div>
                        <div class="form-group">
                            <label for="cnpj">CNPJ</label>
                            <input type="text" class="form-control" id="cnpj" name="cnpj" placeholder="CNPJ">
                        </div>
                        <div class="form-group">
                            <label for="nome">Nome</label>
                            <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome">
                        </div>
                        <div>
                            <label>Sexo:</label>
                            <input type="radio" name="gender" value="male" id="masculino" checked> <label for="masculino"> Masculino</label>
                            <input type="radio" name="gender" value="female" id="feminino"> <label for="feminino"> Feminino</label><BR>
                        </div><br/>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="telefone">Telefone</label>
                            <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Telefone">
                        </div>
                        <div>
                            <label>Cargo: </label>
                            <select name="cargo" class="form-control" >
                                <option selected="" value="">Selecione</option>
                                <option value="Estagiario">Estagiário</option>
                                <option value="Gerente">Gerente</option>
                                <option value="Diretor">Diretor</option>
                                <option value="Presidente">Presidente</option>
                            </select>
                        </div><br/>
                        <div class="form-group">
                            <label for="salario">Salario</label>
                            <input type="text" class="form-control" id="salario" name="salario" placeholder="Salario">
                        </div>
                        <fieldset>

                            <legend>Endereço:</legend>

                            <div class="form-group">
                                <label for="cep">CEP</label>
                                <input type="text" class="form-control" id="cep" name="cep" placeholder="CEP">
                            </div>
                            <div class="form-group">
                                <label for="endereco">Endereço</label>
                                <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Endereço">
                            </div>
                            <div>
                                <label>UF: </label>
                                <select name="estado" class="form-control" >
                                    <option selected="" value="">Selecione</option>
                                    <option value="AC">AC</option>
                                    <option value="AL">AL</option>
                                    <option value="AP">AP</option>
                                    <option value="AM">AM</option>
                                    <option value="BA">BA</option>
                                    <option value="CE">CE</option>
                                    <option value="DF">DF</option>
                                    <option value="ES">ES</option>
                                    <option value="GO">GO</option>
                                    <option value="MA">MA</option>
                                    <option value="MS">MS</option>
                                    <option value="MT">MT</option>
                                    <option value="MG">MG</option>
                                    <option value="PA">PA</option>
                                    <option value="PB">PB</option>
                                    <option value="PR">PR</option>
                                    <option value="PE">PE</option>
                                    <option value="PI">PI</option>
                                    <option value="RJ">RJ</option>
                                    <option value="RN">RN</option>
                                    <option value="RS">RS</option>
                                    <option value="RO">RO</option>
                                    <option value="RR">RR</option>
                                    <option value="SC">SC</option>
                                    <option value="SP">SP</option>
                                    <option value="SE">SR</option>
                                    <option value="TO">TO</option>
                                </select>
                            </div><br/>
                            <div>
                                <label>Município: </label>
                                <select name="estado" class="form-control" >
                                    <option value="">Selecione</option>
                                    <option value="AC">Acre</option>
                                    <option value="AL">Alagoas</option>
                                    <option value="AP">Amapá</option>
                                    <option value="AM">Amazonas</option>
                                    <option value="BA">Bahia</option>
                                    <option value="CE">Ceará</option>
                                    <option value="DF">Distrito Federal</option>
                                    <option value="ES">Espirito Santo</option>
                                    <option value="GO">Goiás</option>
                                    <option value="MA">Maranhão</option>
                                    <option value="MS">Mato Grosso do Sul</option>
                                    <option value="MT">Mato Grosso</option>
                                    <option value="MG">Minas Gerais</option>
                                    <option value="PA">Pará</option>
                                    <option value="PB">Paraíba</option>
                                    <option value="PR">Paraná</option>
                                    <option value="PE">Pernambuco</option>
                                    <option value="PI">Piauí</option>
                                    <option value="RJ">Rio de Janeiro</option>
                                    <option value="RN">Rio Grande do Norte</option>
                                    <option value="RS">Rio Grande do Sul</option>
                                    <option value="RO">Rondônia</option>
                                    <option value="RR">Roraima</option>
                                    <option value="SC">Santa Catarina</option>
                                    <option value="SP">São Paulo</option>
                                    <option value="SE">Sergipe</option>
                                    <option value="TO">Tocantins</option>
                                </select>
                            </div><br/>

                            <button type="submit" class="btn btn-success"><b>Enviar</b></button>
                            <button type="reset" class="btn btn-warning" onClick="alert('Limpo com sucesso'); return true"><b>Limpar</b></button>

                        </fieldset>

                    </div>

                    <div class="div2">
                        <fieldset>
                            <legend>Perfil</legend>

                            <input type="checkbox" name="financeiro" id="financeiro"/><label for="financeiro">Financeiro</label><br>
                            <input type="checkbox" name="faturamento" id="faturamento"/><label for="faturamento">Faturamento</label><br>
                            <input type="checkbox" name="contabilidade" id="contabilidade"/><label for="contabilidade">Contabilidade</label><br>
                            <input type="checkbox" name="recursosHumanos" id="recursosHumanos"><label for="recursosHumanos">Recursos Humanos</label>
                            <div><br/>
                                <label>Status</label>
                                <input type="radio" name="status" value="Ativo" id="ativo"checked> <label for="ativo">Ativo</label>
                                <input type="radio" name="status" value="Inativo" id="inativo"> <label for="inativo">Inativo</label>
                                <input type="radio" name="status" value="Pendente" id="pendente"> <label for="pendente">Pendente</label><BR>
                            </div><br/>
                            <div class="form-group">
                                <label for="senha">Senha</label>
                                <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha">
                            </div>
                            <div class="form-group">
                                <label for="senha1">Confirmação de senha</label>
                                <input type="password" class="form-control" id="senha1" name="senha1" placeholder="Senha">
                            </div>
                            <div>
                                <label for="observacao">Observação: </label><br/>
                                <textarea rows="7" cols="40" name="observacao" id="observacao"></textarea><br>
                            </div>

                        </fieldset>
                    </div>

                </form>

            </div>
        </div>
    </div>

    </body>
</html>