<?php



use PAW\core\Router;

//todo: MOCK
$_SESSION['UserLoggedIn']="1";
$_SESSION['user']=$_POST["user"];

header("Location: /");
exit();

?>