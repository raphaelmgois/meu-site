<?php
  //1 � Definimos Para quem vai ser enviado o email
  $para = "contato@agenciaego.com.br";
  $assunto = "Contato Site Global";
  //2 - resgatar o nome digitado no formul�rio e  grava na variavel $nome
  $name = $_POST['name'];
  // 3 - resgatar o assunto digitado no formul�rio e  grava na variavel //$assunto
  $email = $_POST['email'];
  $telefone = $_POST['telefone'];
  $textozin = $_POST['textozin'];
  
   //4 � Agora definimos a  mensagem que vai ser enviado no e-mail
  $mensagem .= "<strong>Nome:  </strong><br>".$name; 
  $mensagem .= "<br>" ;
  $mensagem .= "<strong>E-mail:  </strong><br>".$email;
   $mensagem .= "<br>";
  $mensagem .= "<strong>Telefone:  </strong><br>".$telefone;
   $mensagem .= "<br>";
  $mensagem .= "<strong>Mensagem: </strong><br>".$textozin;
  //$mensagem .= "<strong>Mensagem: </strong><br>".$_POST['message'];

//5 � agora inserimos as codifica��es corretas e  tudo mais.
  $headers =  "Content-Type:text/html; charset=UTF-8\n";
  $headers .= "From:  Contato Site <contato@agenciaego.com.br>\n"; //Vai ser //mostrado que  o email partiu deste email e seguido do nome
  $headers .= "X-Sender:  <contato@agenciaego.com.br>\n"; //email do servidor //que enviou
  $headers .= "X-Mailer: PHP  v".phpversion()."\n";
  $headers .= "X-IP:  ".$_SERVER['REMOTE_ADDR']."\n";
  $headers .= "Return-Path:  <contato@agenciaego.com.br>\n"; //caso a msg //seja respondida vai para  este email.
  $headers .= "MIME-Version: 1.0\n";

mail($para, $assunto, $mensagem, $headers);  //fun��o que faz o envio do email.


echo "<p align=center>$name, Dados recebidos</p>";
echo "<meta http-equiv=refresh content=2;URL=index.html>";


?>