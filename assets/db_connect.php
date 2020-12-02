<?php
$_servername = "localhost";
$_username = "root";
$_password = "";
$db_name = "professionalFinder";

$connect = mysqli_connect($_servername, $_username, $_password, $db_name);
if(mysqli_connect_error()){
echo "falha na conexao: ".mysqli_connect_error();
}