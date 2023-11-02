<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post" action="form1.php">
        Ваше прізвище: <input type="text" name="surname"><br><br>
        Іноземні мови: <br>
        <input type="checkbox" name="languages[]" value="Англійська">Англійська<br>
        <input type="checkbox" name="languages[]" value="Німецька">Німецька<br>
        <input type="checkbox" name="languages[]" value="Французька">Французька<br>
        <input type="checkbox" name="languages[]" value="Іспанська">Іспанська<br>
        <input type="checkbox" name="languages[]" value="Італійська">Італійська<br><br>
        Місце проведення занять: <br>
        <input type="checkbox" name="places[]" value="ПНУ">ПНУ<br>
        <input type="checkbox" name="places[]" value="ІФНМУ">ІФНМУ<br>
        <input type="checkbox" name="places[]" value="ВПУ СОТ">ВПУ СОТ<br>
        <input type="checkbox" name="places[]" value="ЦНТІ">ЦНТІ<br><br>
        Час занять: <br>
        <input type="radio" name="time" value="12.00">12.00<br>
        <input type="radio" name="time" value="13.00">13.00<br>
        <input type="radio" name="time" value="16.00">16.00<br>
        <input type="radio" name="time" value="18.00">18.00<br><br>
        <input type="submit" value="Надіслати">
    </form>
</body>

</html>