<?php

$para = "juscssoares@gmail.com";
$assunto = "Teste simples de envio de Email PHP";
$corpo = "Olá, você está sendo multado";
$headers = "From:juscssoares@gmail.com";

if (mail($para, $assunto, $corpo, $headers)){
    echo "Email enviado para $para com sucesso";
} else{
    echo "falha no envio!";
}

?>