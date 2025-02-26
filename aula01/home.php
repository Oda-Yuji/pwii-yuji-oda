<!DOCTYPE html>
<html>
    <style>
        .texto 
        {
            font-size: 5rem;
            color: red;
            font-family: Arial, Helvetica, sans-serif;
        }
        .cu
        {
            font-size: 6rem;
            color: black;
        }
        a
        {
            text-decoration: none;
        }
    </style>

    <body>
        <p class="texto">
            <?php
                echo "Oi";
            ?>
        </p>
        <a class="cu" href="https://www.ecycle.com.br/abacate/#:~:text=Abacate%20%C3%A9%20um%20pseudofruto%20comest%C3%ADvel,saud%C3%A1vel%20e%20do%20bem%2Destar.">
            <?php
                echo "cu";
            ?>
        </a>
    </body>
</html>