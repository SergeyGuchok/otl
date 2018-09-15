<?php
if (!empty($_POST['name']) AND !empty($_POST['email']) AND !empty($_POST['task'])){

  $headers = 'From: Кротов Роман\r\n'.
             'Reply-To: exdi\r\n'.
              'X-Mailer: PHP/'. phpversion();

  $theme = 'Новое сообщение';

  $letter = "Данные сообщения:\r\n";
  $letter .="Имя: ".$_POST['name']."\r\n";
  $letter .="Email: ".$_POST['email']."\r\n";
  $letter .="Телефон: ".$_POST['phone']."\r\n";
  $letter .="Сообщение: ".$_POST['task']."\r\n";
  $letter .="Сайт: ".$_POST['site']."\r\n";
  $letter .="Сервис: ".$_POST['services']."\r\n";
  $letter .="Бюджет: ".$_POST['budget']."\r\n";
  $letter .="Компания: ".$_POST['company']."\r\n";
  $letter .="Файл: ".$_POST['file']."\r\n";

  if (mail('gck.sergey@gmail.com', $theme, $letter, $headers)){
    echo "Сообщение отправлено!";
  } else {
    echo "Ошибка при отправке!";
  }
} else {
  echo "Ошибка: Заполните все поля!";
}
