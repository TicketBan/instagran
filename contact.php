<?php
  //Если форма отправлена
  if(isset($_POST['submit'])) {
  	 if(!isset($hasError)) {
  $emailTo = 'maks.zakota@gmail.com'; //Сюда введите Ваш email
  $body = "Name: $name \n\nEmail: $email \n\nSubject: $subject \n\nComments:\n $comments";
  $headers = 'From: My Site <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;
 mail($emailTo, $subject, $body, $headers);
  $emailSent = true;
  }
  }
  ?>