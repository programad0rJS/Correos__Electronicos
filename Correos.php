<?php 


    $destinatario = 'Coque@examples.com';
    $name = $_POST['name'];
    $email = $_POST['email']
    $asunto = $_POST['asunto'];

    $header = 'Enviar';

    mail($destinatario,$name,$email,$asunto, $header);

?>