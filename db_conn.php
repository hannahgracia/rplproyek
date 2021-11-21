<?php

$sname= "localhost";
$unmae= "root";
$password = "";

$db_name = "proyekdbrpl";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}
// $dir = "C:\xampp\htdocs\rplproyek";
// exec("mysqldump --user={$unmae} --password={$password} --host={$sname} {$db_name} --result-file={$dir} 2>&1", $output);
// var_dump($output);