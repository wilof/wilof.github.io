<?php 
if (!empty($_POST['name']) AND !empty($_POST['email']) AND !empty($_POST['message'])) 
{
    $headers = 'From: Зайцев Никита\r\n' .
                'Reply-To: air.pods2017@yandex.ru\r\n' .
                'X-Mailer: PHP/' . phpversion();
         
    $theme = "Новое сообщение с сайта";             
             
    $letter = "Данные сообщения:";
    $letter .="\n\n";
    $letter .="Имя: ".$_POST['name'];
    $letter .="\nEmail: ".$_POST['email'];
    $letter .="\nТелефон: ".$_POST['phone'];
    $letter .="\nСообщение: ".$_POST['message'];
    
    if (mail("air.pods2017@yandex.ru", $theme, $letter, $headers)){
      header("Location: thankyou.php");
    } else {
      header("Location: submit.php");
    }  
              
} else {
  header("Location: submit.php");
}