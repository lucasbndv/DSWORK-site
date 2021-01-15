<html>
<head><title>PHP Mail Sender</title></head>
<body>
<?php

/* All form fields are automatically passed to the PHP script through the array $HTTP_POST_VARS. */
$email ="lucasbndv@gmail.com";
$subject = $_REQUEST['subject'];
$message = $_REQUEST['message'];

/* PHP form validation: the script checks that the Email field contains a valid email address and the Subject field isn't empty. preg_match performs a regular expression match. It's a very powerful PHP function to validate form fields and other strings - see PHP manual for details. */
if (!preg_match("/\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*/", $email)) {
  header("location:../../contact.php?ans=Formato de Email invalido&style=red;");
  
} elseif ($subject == "") {
  header("location:../../contact.php?ans=Preencha o assunto&style=red;");
}

/* Sends the mail and outputs the "Thank you" string if the mail is successfully sent, or the error string otherwise. */
elseif (mail($email,$subject,$message)) {
  header("location:../../contact.php?ans=Email enviado com sucesso&style=green;");
} else {
  header("location:../../contact.php?ans=Erro ao enviar email&style=red;");
}
?>
</body>
</html>