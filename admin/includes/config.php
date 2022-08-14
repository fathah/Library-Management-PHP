<?php 
// DB credentials.
define('DB_HOST','localhost');
define('DB_USER','u685433548_lib');
define('DB_PASS','mnc@markaz');
define('DB_NAME','u685433548_lib');
// Establish database connection.
try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
mysqli_set_charset($dbh,"utf8");

?>