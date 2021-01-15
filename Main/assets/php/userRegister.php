<?php include_once "connectDB.php";

$user = $_REQUEST['user'];
$pass = $_REQUEST['password'];

$token = sha1($pass);

$sql_insert = "INSERT INTO `usuarios` (`nome`, `senha`) VALUES ('".$user."','".$token."')";
echo $sql_insert;
$result_insert = mysqli_query($con, $sql_insert);
$resultcheck = mysqli_affected_rows($con);


if($resultcheck == 1){
   $db_ans = "Usuário cadastrado com sucesso";
   header('location:../../acount_register.php?ans='.$db_ans.'&style=green;');
}
else{
    $db_ans = "Erro ao cadastrar usuário";
    header('location:../../acount_register.php?ans='.$db_ans.'&style=red;');
}

?>