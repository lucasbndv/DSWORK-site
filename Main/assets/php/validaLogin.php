<?php 
include_once "connectDB.php";

$sql_login = "SELECT * FROM usuarios";
$result_login = mysqli_query($con, $sql_login);

$password = $_REQUEST['password'];
$user = $_REQUEST['user'];

echo "user: ".$user;


$status = 0;
$token = sha1($password);
echo "password: ".$token;

$resultCheck = mysqli_num_rows($result_login);

if($resultCheck){
    while ($row = mysqli_fetch_assoc($result_login)){
        if($user == $row["nome"] && $token == $row['senha']){
            echo "logado";
            $status = 1;
            break;
        }
    }

    mysqli_close($con);

    session_start();
    if($status){
        $_SESSION['user'] = $user;
        header("location: ../../admin.php");
    }

    else{
        header("location: ../../login.php");
    }

}
?>
