<html>
    <body>
        O comprimento da caixa é de:
        <?php echo $_POST["comprimento"]; ?> cm<br><br>
        A largura da caixa é de:
        <?php echo $_POST["largura"]; ?> cm<br><br>
        A altura da caixa é de:
        <?php echo $_POST["altura"]; ?> cm<br><br>

        <?php echo $_POST["comprimento"] * $_POST["largura"] * $_POST["altura"]; ?> cm
    </body>
</html>