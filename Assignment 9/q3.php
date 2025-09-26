<?php
$emails = array("john@example.com","wrong-email@","me@site","user123@gmail.com","alice.smith@company.co.in");
$regex = '/^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$/';
foreach($emails as $e){
    if(preg_match($regex,$e)){
        echo $e."\n";
    }
}
?>

