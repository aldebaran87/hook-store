<?php
//Приймаєм постові дані
$name=$_POST['name'];
$phone=$_POST['phone'];
$what=$_POST['what'];
$question=$_POST['question'];
//тут  вказуэм на який ящик посилаэться письмо
$to = "artur.novak.87@mail.ru";
// Дальше йде текст самого повідомлення
$subject = "Заявка з сайту гачки";
$message = "
Письмо відправлене з моєї форми.<br />
Клієнт хоче: ".htmlspecialchars($what). "<br />
Ім’я: ".htmlspecialchars($name). "<br />
Телефон: " .htmlspecialchars($phone)."<br />
Питання: " .htmlspecialchars($question);
$headers = "From: mysite.ru <site-email@mysite.ru>\r\nContent-type: text/html; charset=UTF-8 \r\n";
mail ($to, $subject, $message, $headers);
header('Location: thanks.html');
exit();
?>
