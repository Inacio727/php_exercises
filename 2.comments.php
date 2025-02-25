<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    // Essa é uma linha única de comentário

    # Essa é outra linha única de comentário

    /*
    Esse é um bloco de comentário
    que pode ter várias linhas
*/
    ?>


    <?php
    // Executa um comentário de uma linha
    echo "Welcome Home!";

    echo "welcome Home!"; // Executa um comentário de uma linha
    ?>

    <?php
    #também é possível usar comentários para deixar de executar uma linha de código

    // echo "Hello World!";
    ?>

    <?php
    /*
    The next statement will
    print a welcome message
    */
    echo "Welcome to PHP!";

    /*
    echo "Welcome to my home!";
    echo "Mi casa su casa!";
    */


    $x = 5 /* + 15 */ + 5;
    echo $x;
    ?>

</body>

</html>