<?php

$destinatario = 'info@lpcbs.com';
$oggetto = $_POST['subject'];
$nome = $_POST['name'];
$email = $_POST['email'];
$messaggio = $_POST['message'];

mail($destinatario, $oggetto, $messaggio, $email);

?>