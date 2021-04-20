<?php

// $servername="localhost";
// $database="proveedores"; //solo se quitó para conexión remota
// $username="root";
// $password="";

// $conn= new mysqli ($servername,$username,$password,$database); //solo se quitó para conexión remota

?>

<?php
define('DB_SERVER', 'localhost');
define('DB_SERVER_USERNAME', 'jesusrlv_pej');
define('DB_SERVER_PASSWORD', '');
define('DB_DATABASE', 'PEJ21');

$conn = new mysqli(DB_SERVER, DB_SERVER_USERNAME, DB_SERVER_PASSWORD, DB_DATABASE);
?>