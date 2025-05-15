<html>
    <body>
        O valor do produto é de:
        <?php echo $_POST["produto"]; ?> R$<br><br>
        O valor do acréscimo de 16% é de:
        <?php $acrescimo = $_POST["produto"] * 0.16; echo $acrescimo; ?> R$<br><br>
        O valor de cada parcela é de:
        <?php echo $_POST["produto"] / 10; ?> R$<br><br>
        O valor total da compra é de:
        <?php echo $_POST["produto"] + $acrescimo; ?> R$<br><br>
    </body>
</html>