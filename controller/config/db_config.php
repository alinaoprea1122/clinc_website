<?php 

$db_host    = "localhost";
$db_name    = "VetCare";
$db_user    = "root";
$db_pass    = "root";


$db_con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if($db_con == false){
    echo "Database Connection Error";

}


?>