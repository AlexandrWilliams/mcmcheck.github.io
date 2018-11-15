<?php
// несколько получателей
$to  = 'canablak@gmail.com' . ', ';  // обратите внимание на запятую
$to .= 'badboylawnmower@gmail.com';

// тема письма
$subject = 'Mail from MCM Mini Storage';

// текст письма
$message = 'User' . $_POST['name'] . ' send email:<br />' . $_POST['message'] . '<br />
his email <a href="mailto:' . $_POST['email'] . '">' . $_POST['email'] . '</a>'
;

// Для отправки HTML-письма должен быть установлен заголовок Content-type
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 

// Дополнительные заголовки
$headers .= 'To: Alex <canablak@gmail.com>' . "\r\n"; // Свое имя и email
$headers .= 'From: '  . $_POST['name'] . '<' . $_POST['email'] . '>' . "\r\n";


// Отправляем
mail($to, $subject, $message, $headers);
?>