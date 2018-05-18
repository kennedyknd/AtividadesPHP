<html>
<head>
    <title>Exercicio PHP</title>
    <link rel="stylesheet" href="js/bootstrap/css/bootstrap.css" />
</head>
<body>
    <div class="container">
        <h1>Lista 5</h1>
        <h2>Exercicio 1</h2>
        <h3>Letra a)</h3>
        <?php
            $a = 10;
            $b = 20;
            echo "Escrever B: " . $b;
            $b = 5;
            echo "<br>";
            echo "Escrever A e B: " . $a . " , ". $b;
        ?>
        <h3>Letra b)</h3>
        <?php
            $a = 30;
            $b = 20;
            $c = $a + $b;
            echo "Escrever C: " . $c;
            echo "<br>";
            $b = 10;
            echo "Escrever B, C: " . $b . " , " . $c;
            $c = $a + $b;
            echo "<br>";
            echo "Escrever A, B, C: " . $a . " , " . $b . " , " . $c;
        ?>
        <h3>Letra c)</h3>
        <?php
            $a = 10;
            $b = 20;
            $c = $a;
            $b = $c;
            $a = $b;
            echo "Escrever A, B, C: " . $a . " , " . $b . " , " . $c;
        ?>
        <h3>Letra d)</h3>
        <?php
            $a = 10;
            $b = $a + 1;
            $a = $b + 1;
            $b = $a + 1;
            echo "Escrever A: " . $a;
            $a = $b + 1;
            echo "<br>";
            echo "Escrever A, B: " . $a . " , " . $b;
        ?>
        <h3>Letra e)</h3>
        <?php
            $a = 10;
            $b = 5;
            $c = $a + $b;
            $b = 20;
            $a = 10;
            echo "Escrever A, B, C: " . $a . " , " . $b . " , " . $c;
        ?>
        <h3>Letra f)</h3>
        <?php
            $x = 1;
            $y = 2;
            $z = $y + $x;
            echo "Escrever Z: " . $z;
            echo "<br>";
            $x = 5;
            $y = $x + $z;
            echo "Escrever X, Y, Z: " . $x . " , " . $y . " , " . $z;
        ?>
        <h2>Exercicio 2</h2>
        <h3>Letra a)</h3>
        <?php
            $opcao1 = ( 2 > 3 );
            if ( $opcao1 ){
                echo "( 2 > 3 ) é Verdade";
            }
            else{
                echo "( 2 > 3 ) é Falso";
            }
        ?>
        <h3>Letra b)</h3>
        <?php
            $opcao1 = (( 6 < 8 ) || ( 3 > 7 ));
            if ( $opcao1 ){
                echo "( 6 < 8 ) ou ( 3 > 7 ) é Verdade";
            }
            else{
                echo "( 6 < 8 ) ou ( 3 > 7 ) é Falso";
            }
        ?>
        <h3>Letra c)</h3>
        <?php
            $opcao1 = !( 2 < 3 );
            if ( $opcao1 ){
                echo "Negação de ( 2 < 3 ) é Verdade";
            }
            else{
                echo "Negação de ( 2 < 3 ) é Falso";
            }
        ?>
        <h3>Letra d)</h3>
        <?php
            $a = 5;
            $opcao1 = (( 5 >= 6 ) || ( 6 < 7 ) || ( $a + 5 - 6 == 8 ));
            if ( $opcao1 ){
                echo "(5 >= 6 ) ou (6 < 7 ) ou (a + 5 - 6 == 8) é Verdade";
            }
            else{
                echo "(5 >= 6 ) ou (6 < 7 ) ou (a + 5 - 6 == 8) é Falso";
            }
        ?>
        <h3>Letra e)</h3>
        <?php
            $u = 29;
            $opcao1 = (((( 34 > 9 ) && ( 5 + $u == 34 )) || (( 5 == 15/3 ) && ( 8 > 12 ))) == (( $u == 29 ) && ( 8 > 12)));
            if ( $opcao1 ){
                echo "(( 34 > 9 ) && ( 5 + $u == 34 )) || (( 5 == 15/3 ) && ( 8 > 12 )) == (( $u == 29 ) && ( 8 > 12)) é Verdade";
            }
            else{
                echo "(( 34 > 9 ) && ( 5 + $u == 34 )) || (( 5 == 15/3 ) && ( 8 > 12 )) == (( $u == 29 ) && ( 8 > 12)) é Falso";
            }
        ?>
        <h2>Exercicio 3</h2>
        <h3>Letra a)</h3>
        <?php
            $a = ((4/2) + (2/4) == (4/2+2/4));
            if ( $a ){
                echo "((4/2) + (2/4) == (4/2+2/4)) é Verdade";
            }
            else {
                echo "((4/2) + (2/4) == (4/2+2/4)) é Falso";
            }
        ?>
        <h3>Letra b)</h3>
        <?php
            $a = ((4/(2+2)/4) == (4/2+2/4));
            if ( $a ){
                echo "((4/(2+2)/4) == (4/2+2/4)) é Verdade";
            }
            else {
                echo "((4/(2+2)/4) == (4/2+2/4)) é Falso";
            }
        ?>
        <h3>Letra c)</h3>
        <?php
            $a = (((4+2)*2-4) == (4+2*2-4));
            if ( $a ){
                echo "(((4+2)*2-4) == (4+2*2-4)) é Verdade";
            }
            else {
                echo "(((4+2)*2-4) == (4+2*2-4)) é Falso";
            }
        ?>
        <br/>
        <br/>
        <h2>Exercicio 4</h2>
        <br/>
        <table class="table table-bordered">
            <tr>
                <td>SALARIO</td>
                <td>IR</td>
                <td>SALLIQ</td>
                <td>EXPRESSÃO</td>
                <td>V OU F</td>
            </tr>
            <tr>
                <td>100,00</td>
                <td>0,00</td>
                <td>100</td>
                <td>(SALLIQ >= 100,00)</td>
                <td>
                    <?php
                        $SALLIQ = 100;
                        $op1 = ( $SALLIQ >= 100 );
                        if ( $op1 ) {
                            echo "V";
                        }
                        else {
                            echo "F";
                        }
                    ?>
                </td>
            </tr>
            <tr>
                <td>200,00</td>
                <td>10,00</td>
                <td>190</td>
                <td>(SALLIQ < 190,00)</td>
                <td>
                    <?php
                        $SALLIQ = 190;
                        $op1 = ( $SALLIQ < 190 );
                        if ( $op1 ) {
                            echo "V";
                        }
                        else {
                            echo "F";
                        }
                    ?>
                </td>
            </tr>
            <tr>
                <td>300,00</td>
                <td>15,00</td>
                <td>285</td>
                <td>(SALLIQ = SALARIO - IR)</td>
                <td>
                    <?php
                        $SALLIQ = 285;
                        $SALARIO = 300;
                        $IR = 15;
                        $op1 = ( $SALLIQ == $SALARIO - $IR );
                        if ( $op1 ) {
                            echo "V";
                        }
                        else {
                            echo "F";
                        }
                    ?>
                </td>
            </tr>
        </table>
        <h2>Exercicio 5</h2>
        <?php
            echo "<h4>Considerando: A = 3; B = 7; C = 4.2;</h4>";
            $a = 3;
            $b = 7;
            $c = 4.2;
            echo "<h3>Letra a)</h3>";
            $opt1 = (($a + $c ) > $b);
            if ( $opt1 ) {
                echo "(A + C) > B é Verdadeiro";
            }
            else {
                echo "(A + C) > B é Falso";
            }
            echo "<h3>Letra b)</h3>";
            $opt1 = ($b >= ($a + 2));
            if ( $opt1 ) {
                echo "B >= (A + 2)  é Verdadeiro";
            }
            else {
                echo "B >= (A + 2) é Falso";
            }
            echo "<h3>Letra c)</h3>";
            $opt1 = ($c == ($b - $a));
            if ( $opt1 ) {
                echo "C = (B – A)  é Verdadeiro";
            }
            else {
                echo "C = (B – A) é Falso";
            }
            echo "<h3>Letra d)</h3>";
            $opt1 = (($b + $a) <= $c);
            if ( $opt1 ) {
                echo "(B + A) <= C é Verdadeiro";
            }
            else {
                echo "(B + A) <= C é Falso";
            }
            echo "<h3>Letra e)</h3>";
            $opt1 = (($c + $a) > $b);
            if ( $opt1 ) {
                echo "(C + A) > B é Verdadeiro";
            }
            else {
                echo "(C + A) > B é Falso";
            }
        ?>
        <h2>Exercicio 6</h2>
        <?php
            echo "<h4>Considerando: A = 5; B = 4; C = 3; D = 6;</h4>";
            $a = 5;
            $b = 4;
            $c = 3;
            $d = 6;
            echo "<h3>Letra a)</h3>";
            $opt2 = (($a > $c) && ($c <= $d));
            if ( $opt2 ) {
                echo "(A > C) AND (C <= D) é Verdadeiro";
            }
            else {
                echo "(A > C) AND (C <= D) é Falso";
            }
            echo "<h3>Letra b)</h3>";
            $opt2 = ((($a + $b) > 10) || (($a + $b) == ($c + $d)));
            if ( $opt2 ) {
                echo "(A+B) > 10 OR (A+B) = (C+D) é Verdadeiro";
            }
            else {
                echo "(A+B) > 10 OR (A+B) = (C+D) é Falso";
            }
            echo "<h3>Letra c)</h3>";
            $opt2 = (($a >= $c) && ($d >= $c));
            if ( $opt2 ) {
                echo "(A>=C) AND (D >= C) é Verdadeiro";
            }
            else {
                echo "(A>=C) AND (D >= C) é Falso";
            }
        ?>
    </div>
</body>
</html>
