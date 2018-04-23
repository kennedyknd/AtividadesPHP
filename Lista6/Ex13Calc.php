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
                        <li><a href="Ex1.php">Ex01</a></li>
                        <li><a href="Ex2.php">Ex02</a></li>
                        <li><a href="Ex3.php">Ex03</a></li>
                        <li><a href="Ex4.php">Ex04</a></li>
                        <li><a href="Ex5.php">Ex05</a></li>
                        <li><a href="Ex6.php">Ex06</a></li>
                        <li><a href="Ex7.php">Ex07</a></li>
                        <li><a href="Ex8.php">Ex08</a></li>
                        <li><a href="Ex9.php">Ex09</a></li>
                        <li><a href="Ex10.php">Ex10</a></li>
                        <li><a href="Ex11.php">Ex11</a></li>
                        <li><a href="Ex12.php">Ex12</a></li>
                        <li><a href="Ex13.php">Ex13</a></li>
                        <li><a href="Ex14.php">Ex14</a></li>
                        <li><a href="Ex15.php">Ex15</a></li>
                        <li><a href="Ex16.php">Ex16</a></li>                    </ul>
                </div>
            </div>
        </nav>
        <h2>Exercicio 13</h2>
        <?php

            $idade = $_POST['idade'];

            if ( $idade >= 5 && $idade <= 7 ) {
                echo "Categoria: infantil A";
            }
            elseif ( $idade >= 8 && $idade <= 10 ) {
                echo "Categoria: infantil B";
            }
            elseif ( $idade >= 11 && $idade <= 13 ) {
                echo "Categoria: juvenil A";
            }
            elseif ( $idade >= 14 && $idade <= 17 ) {
                echo "Categoria: juvenil B";
            }
            elseif ( $idade >= 18 ) {
                echo "Categoria: adulto";
            }
            else {
                echo "Não existe";
            }

        ?>
    </div>
</body>
</html>
