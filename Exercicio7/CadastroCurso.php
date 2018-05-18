<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lista 6</title>
    <link rel="stylesheet" href="js/bootstrap/css/bootstrap.css" />
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Lista 6</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="CadastroCurso.php">Ex01</a></li>
                        <li><a href="Ex2.php">Ex02</a></li>
                        <li><a href="Ex3.php">Ex03</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div>
            <h2>Cadastro de curso</h2>
            <form action="CadastroCursoBanco.php" method="post">
                <label for="curso">Digite o curso a ser cadastrado: </label>
                <input size="50" type="text" name="curso" id="curso">
                <br/>
                <button type="submit" class="btn btn-success"><b>Cadastrar</b></button>
            </form>
        </div>
    </div>
</body>
</html>