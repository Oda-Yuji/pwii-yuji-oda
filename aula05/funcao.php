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
        function oiSoma($y, $x)
        {
            echo "Oi <br>";

            echo $x + $y, "<br>";
        }

        oiSoma(3, 7);

        function fibonacci($vp, $vc, $vn)
        {
            for ($i = 0; $i < 10; $i++)
            {
                $vn = $vp + $vc;

                echo $vc, " ";

                $vp = $vc;

                $vc = $vn;
            }
        }

        fibonacci(0, 1, 1);
    ?>
</body>
</html>