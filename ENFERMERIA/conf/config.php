	<?php
$dbhost='localhost';
$dbusername='root';
$dbuserpass='';
$dbname = 'enfermeria';



$mysqli =@new mysqli($dbhost, $dbusername, $dbuserpass, $dbname);

// verificar la conexión 
if ($mysqli->connect_errno) {
    die('Connect Error: ' . $mysqli->connect_errno);
}



?>
