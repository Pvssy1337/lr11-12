<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $comment = $_POST['comment'];

    if (empty($email) || empty($comment)) {
        echo "Будь ласка, заповніть усі поля";
    } else {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Перевірка адреси не пройдена";
        } else {
            echo "Дані успішно надіслані";
        }
    }
}
?>
