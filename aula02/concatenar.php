<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <style>
        body
        {
            font-family: Arial, Helvetica, sans-serif;
        }
        .text1, .text2, .text3
        {
            font-size: 2rem;
        }
    </style>
</head>
<body>
    <?php
        ECHO "<p class='text1'>Hello wolrd!</p>";
        echo "<p class='text2'>Hello wolrd!</p>";
        EcHo "<p class='text3'>Hello wolrd!</p>";

        $nome = "Alê";
        $sobrenome = "Australopithecus";
        $numero = 69;

        echo "${nome} <h1> ${sobrenome} </h1>" . $numero . "<br>";
        echo $numero . "<p> " . $nome . " " . $sobrenome . "</p>";
    ?>
</body>
</html>