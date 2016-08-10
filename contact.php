<?php

$errors = [];
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

if ( !isset($name) || $name == '' ) {
    $errors['name'] = "Vous n'avez pas entré votre nom.";
}
if ( !isset($email) || $email == '' || !filter_var( $email, FILTER_VALIDATE_EMAIL ) ) {
    $errors['email'] = "Vous n'avez pas entré une adresse email valide.";
}
if ( !isset($message) || $message == '' ) {
    $errors['message'] = "Vous n'avez pas entré votre message.";
}

session_start();

if ( !empty($errors) ) {
    $_SESSION['errors'] = $errors;
    $_SESSION['data'] = $_POST;
    header( 'Location: index.php#contact-form' );
} else {
    $_SESSION['success'] = 'Votre message à bien été envoyé.';
    $headers = 'FROM: ' . $name . '<' . $email . '>';
    mail( 'sophie_minet@yahoo.be', 'formulaire de contact', $message, $headers );
    header( 'Location: index.php#contact-form' );
}
