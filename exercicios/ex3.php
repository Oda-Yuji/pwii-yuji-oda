<html>
    <body>
        A altura do trapézio é:
        <?php echo $_POST["altura"]; ?> cm<br><br>
        A base maior do trapézio é:
        <?php echo $_POST["bzao"]; ?> cm<br><br>
        A base menor do trapézio é:
        <?php echo $_POST["bzinho"]; ?> cm<br><br>
        A área do trapézio é:
        <?php echo ($_POST["bzao"] + $_POST["bzinho"]) * $_POST["altura"] / 2; ?> cm
    </body>
</html>