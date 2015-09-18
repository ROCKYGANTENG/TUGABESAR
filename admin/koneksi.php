<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "db_si12c";

$koneksi =mysql_connect ($server,$username,$password) ;
$data =mysql_select_db ($database);

?>
