<?php

function conexion(){

$host = "host=dpg-cvmpjju3jp1c73auf7og-a.oregon-postgres.render.com";
$port = "port=5432";
$dbname = "dbname=test_8h8l";
$user = "user=karolay";
$password = "password=Tj5E65FlvCOLy3igkih3AgQ5Rs2NLpfH";

$db = pg_connect("$host $port $dbname $user $password");

return $db;
}
?>