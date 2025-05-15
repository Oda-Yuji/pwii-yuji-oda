<html>
    <body>
        A distância total percorrida foi 
        <?php echo $_POST["distancia"]; ?> km <br><br>
        A quantidade de litros de combústivel gasta 
        <?php echo $_POST["litros"]; ?> L <br><br>
        O consumo médio de combustível foi 
        <?php echo $_POST["distancia"] / $_POST["litros"]; ?>
    </body>
</html>