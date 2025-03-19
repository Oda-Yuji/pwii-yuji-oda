<!DOCTYPE html>
<head>
    <title>Repetição</title>
    <style>
        body
        {
            background-color: rgb(42, 42, 42);
            font-family: Arial;
            font-size: 5rem;
            color: aliceblue;
        }
    </style>
</head>
<body>
    <?php
        echo "<br>";

        $i = 0;

        while ($i < 6)
        {
            echo $i;

            $i++;
        }

        for ($i = 0; $i < 6; $i++)
        {
            echo $i;
        }

        echo "<br><br>";

        $i = 0;

        do
        {
            echo "oi";
            $i++;
        } while ($i < 2);
    ?>
</body>
</html>