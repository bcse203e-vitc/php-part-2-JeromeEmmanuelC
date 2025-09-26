<?php
$filename = "access.log";
$username = "admin";
$action = "Logged In";
$entry = $username." - ".date("Y-m-d H:i:s")." - ".$action."\n";
file_put_contents($filename, $entry, FILE_APPEND);
$lines = file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
$last5 = array_slice($lines, -5);
foreach($last5 as $line){
    echo $line."\n";
}
?>

