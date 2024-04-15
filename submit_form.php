<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    $to = "andryskhatop@gmail.com"; // Замініть на свою електронну адресу
    $subject = "Нове повідомлення з форми консультації";
    $body = "Ім'я: $name\nEmail: $email\n\nПовідомлення:\n$message";
    
    if (mail($to, $subject, $body)) {
        echo "Повідомлення успішно відправлено.";
    } else {
        echo "При відправці повідомлення виникла помилка.";
    }
}
?>
