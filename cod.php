<?php
// Получаем данные из формы
$name = $_POST['name'];
$phone = $_POST['phone'];

$email_address = "Kseniaamf@icloud.com";
// Указываем адрес электронной почты, на который будем отправлять письмо
$to = "Kseniaamf@icloud.com";

// Указываем заголовки письма
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=utf-8\r\n";
$headers .= "From: <admin@test.com>\r\n";

// Указываем тему письма
$subject = "Заявка на постановку автомобиля на учет";

// Указываем тело письма
$message = "<b>Имя:</b> $name<br>";
$message .= "<b>Телефон:</b> $phone<br>";

// Отправляем письмо
if (mail($to, $subject, $message, $headers)) {
    // Если письмо отправлено успешно, выводим сообщение
    echo "Спасибо за вашу заявку. Мы свяжемся с вами в ближайшее время.";
} else {
    // Если письмо не отправлено, выводим ошибку
    echo "Произошла ошибка при отправке заявки. Пожалуйста, попробуйте еще раз.";
}
?>
