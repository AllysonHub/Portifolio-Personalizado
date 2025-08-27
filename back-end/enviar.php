<?php
    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $telefone = addslashes($_POST['telefone']);
    $areatexto = addslashes($_POST['areatexto']);

    $destino = "allysonnrocha02@gmail.com";
    $assunto = "Contato - Site Portifólio";

    $corpo = "Nome: ".$nome."\n"."Email: ".$email."\n"."Telefone: ".$telefone."\n"."Assunto: ".$areatexto;

    $cabeca = "From allysonrochinha@gmail.com"."\n"."Reply-to: ".$email."\n"."X=Mailer:PHP/".phpversion();

    if(mail($destino,$assunto,$corpo,$cabeca)){
        echo("E-mail enviado com Sucesso!");
    }else{
        echo("Houve um erro ao enviar um email");
    }


?>