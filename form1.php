<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $surname = $_POST['surname'];
        $languages = isset($_POST['languages']) ? $_POST['languages'] : array();
        $places = isset($_POST['places']) ? $_POST['places'] : array();
        $time = isset($_POST['time']) ? $_POST['time'] : '';

        if (empty($surname) || empty($languages) || empty($places) || empty($time)) {
            echo "Введені дані не коректні, заповніть всі поля";
        } else {
            echo "Слухач \"$surname\" обрав для вивчення курси з мов: <ul>";
            foreach ($languages as $language) {
                echo "<li>$language</li>";
            }
            echo "</ul>";
            echo "Можливе місце проведення занять: <ul>";
            foreach ($places as $place) {
                echo "<li>$place</li>";
            }
            echo "</ul>";
            echo "Час занять що вам підходить: $time";
        }
    }
    ?>
</body>

</html>