<?php

$nome = addslashes($_POST['nome']);
$email = addslashes($_POST['email']);
$telefone = addslashes($_POST['telefone']);
$mensagem = addslashes($_POST['mensagem']);

$to = "marcoscorreanunes@hotmail.com";
$assunto = "Contato - Meu Site";

$body = "Nome : ".$nome."\n". "Email : ".$email. "\n". "Telefone : ".$telefone."\n". "Mensagem : ".$mensagem;

$head = "From: marcoscorreanunes@hotmail.com"."\n"."Reply-to: ".$email."\n"."X=Mailer:PHP/".phpversion();

if(mail($to, $body, $head)){
    echo ("E-mail enviado com sucesso!");
}else{
    echo ("Houve um erro ao enviar o email");
}

?>