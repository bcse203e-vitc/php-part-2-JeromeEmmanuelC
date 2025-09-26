<?php
class PasswordException extends Exception{}
function validate_password($pwd){
    if(strlen($pwd)<8) throw new PasswordException("Password must be at least 8 characters long");
    if(!preg_match('/[A-Z]/',$pwd)) throw new PasswordException("Password must contain at least one uppercase letter");
    if(!preg_match('/\d/',$pwd)) throw new PasswordException("Password must contain at least one digit");
    if(!preg_match('/[@#$%]/',$pwd)) throw new PasswordException("Password must contain at least one special character");
    return "Password is valid";
}
$password = "Abc@1234";
try{
    echo validate_password($password)."\n";
}catch(PasswordException $e){
    echo $e->getMessage()."\n";
}
?>

