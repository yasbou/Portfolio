<?php

print_r($_POST);
echo '<br>';




if (isset($_POST["button"])){

  /**
  *verifier la validiter des champs
  *-envoyer le formulaire par mail
  *
  *if(
    *empty($_POST['name'])||
    *empty($_POST['lastname']) ||
    *empty($_POST['e-mail'])) ||
    *empty($_POST['message']))
    *{
    *$errors['empty'] = "Ce champs doit être renseigné";
    *}
*
    *if(!filter_var($_POST['e-mail'], FILTER_VALIDATE_EMAIL)){
      *$errors['valide'] = " n'est pas une adresse e_mail valide";
**/
$message= "vous avez recu un mail";
$headers = 'From: yacine.bouhsen@gmail.com';
$mailsent= mail('yacine.bouhsen@gmail.com', 'test', $message);

if ($mailsent){
  echo 'ok';
}
else{
  echo 'ko';
}
};
