<?php
if($_POST){
    $to_email       = "auresjojo@gmail.com"; //remplacez par votre adresse e-mail
    $subject        = "Nouveau message depuis le formulaire de contact du portofolio"; //sujet de l'e-mail
    $name           = $_POST['c_name']; //récupération du nom de l'utilisateur
    $email          = $_POST['c_email']; //récupération de l'adresse e-mail de l'utilisateur
    $message        = $_POST['c_message']; //récupération du message de l'utilisateur
    $headers        = "From: ".$name." <".$email.">\r\n"; //ajout de l'adresse e-mail de l'utilisateur dans l'en-tête de l'e-mail
    
    if(mail($to_email, $subject, $message, $headers)){ //envoi de l'e-mail
        echo "Votre message a bien été envoyé. Nous vous contacterons bientôt."; //message de confirmation d'envoi
    }else{
        echo "Une erreur s'est produite lors de l'envoi de votre message. Veuillez réessayer."; //message d'erreur d'envoi
    }
}
?>
