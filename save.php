<?php
$myfile = fopen("1.txt", "w+") or die("Unable to open file!");
$txt = $_POST['T1'];
fwrite($myfile, $txt);
fclose($myfile);
?>
