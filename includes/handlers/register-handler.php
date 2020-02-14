<?php 

function sanitizeFormPassword ($inpuText){
    $inpuText = strip_tags( $inpuText);
    return $inpuText;
}
function sanitizeFormUsername ($inpuText){
    $inpuText = strip_tags( $inpuText);
    $inpuText = str_replace(" ", "",  $inpuText);
    return $inpuText;
}

function sanitizeFormString ($inpuText){
    $inpuText = strip_tags( $inpuText);
    $inpuText = str_replace(" ", "",  $inpuText);
    $inpuText = ucfirst(strtolower($inpuText));
    return $inpuText;
}

if(isset($_POST["login-button"])){
    // "login  button was pressed";
    echo "login  button was pressed";
}
if(isset($_POST["login-register"])){

    echo "Register  button was pressed ";
    $userName = sanitizeFormUsername($_POST["username"]);
    $firstName = sanitizeFormString($_POST["firstname"]);
    $lastname = sanitizeFormString($_POST["lastname"]);
    $email = sanitizeFormString($_POST["email"]);
    $email2 = sanitizeFormString($_POST["email2"]);
    $password = sanitizeFormPassword($_POST["password"]);
    $password2 = sanitizeFormPassword($_POST["password2"]);
    
    $account->register($userName, $firstName, $lastname, $email,$email2, $password, $password2);
}
?>