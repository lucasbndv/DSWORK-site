<?php include_once "connectDB.php";

$title = $_REQUEST['title'];
$body = $_REQUEST['body'];
$img = $_FILES['image']['name'];
$target = "../../images/".basename($img);
echo $target;

$sql_insert = "INSERT INTO `noticias` (`titulo`, `corpo`, `imagem`) VALUES ('".$title."','".$body."','".$img."')";
echo $sql_insert;
$result_insert = mysqli_query($con, $sql_insert);

$resultcheck = mysqli_affected_rows($con);

if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
    $msg = "Image uploaded successfully";
}else{
    $msg = "Failed to upload image";
}

if($resultcheck == 1){
   $db_ans = "Notícia adicionada com sucesso";
   header('location:../../news_register.php?ans='.$db_ans.'&style=green;');
}
else{
    $db_ans = "Erro ao adicionar notícia";
    header('location:../../news_register.php?ans='.$db_ans.'&style=red;');
}

?>

