<?php
  //1 � Definimos Para quem vai ser enviado o email
  $para = "raphaelmgois@gmail.com";
  $assunto = "Newsletter";
  //2 - resgatar o nome digitado no formul�rio e  grava na variavel $nome
  $name = $_POST['name'];
  // 3 - resgatar o assunto digitado no formul�rio e  grava na variavel //$assunto
  $email = $_POST['email'];  
  
   //4 � Agora definimos a  mensagem que vai ser enviado no e-mail
  
  $mensagem .= "<strong>E-mail:  </strong><br>".$email;
   $mensagem .= "<br>";  
  //$mensagem .= "<strong>Mensagem: </strong><br>".$_POST['message'];

//5 � agora inserimos as codifica��es corretas e  tudo mais.
  $headers =  "Content-Type:text/html; charset=UTF-8\n";
  $headers .= "From:  Newsletter Site <raphaelmgois@gmail.com>\n"; //Vai ser //mostrado que  o email partiu deste email e seguido do nome
  $headers .= "X-Sender:  <raphaelmgois@gmail.com>\n"; //email do servidor //que enviou
  $headers .= "X-Mailer: PHP  v".phpversion()."\n";
  $headers .= "X-IP:  ".$_SERVER['REMOTE_ADDR']."\n";
  $headers .= "Return-Path:  <raphaelmgois@gmail.com>\n"; //caso a msg //seja respondida vai para  este email.
  $headers .= "MIME-Version: 1.0\n";

mail($para, $assunto, $mensagem, $headers);  //fun��o que faz o envio do email.


echo "<p align=center>Dados recebidos</p>";
echo "<meta http-equiv=refresh content=2;URL=index.html>";


?>