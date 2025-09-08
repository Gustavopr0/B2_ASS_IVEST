<?php

    $email = addslashes($_POST['email']);

    $para = "gustavoty6@gmail.com";
    $assunto = "Coleta de dados - Inteliogia";

    $corpo = "E-mail: ".$email;

    $cabeca "From: gustokrut@gmail.com"."\n". "Reply-to: ".$email."\n"."X-Mailer: PHP/".phpversion();

    if(mail($para,$assunto,$corpo,$cabeca)){ 
        echo("E-mail enviado com sucesso!");
    }else{
        echo("Houve um erro ao enviar o email!");
}


?>