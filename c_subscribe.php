<?php
require_once("functions/m_subscribe.php");

$email = $_POST["email"];

$info= [
    "email"=>$email,
  
];

if($email!=""){
    create_subcribe($info);
  
    header("Location:/");
}else{
    echo $email;
    echo "Your Form is no acceptable, Please try again";
}
