<?php 
session_start();
require_once("functions/m_contact.php");
$name = $_POST["name"];
$email = $_POST["email"];
$tel = $_POST["tel"];
$subject = $_POST["subject"];
$mes = $_POST["mes"];


$contact_info= [
    "name"=>$name,
    "email"=>$email,
    
    "tel"=>$tel,
    
    "subject"=>$subject,
    "mes"=>$mes,
    
];

if($_SESSION["mes"]<4&&$name!=""&&$email!=""&&$tel!=""&&$mes!=""){
    create_contact($contact_info);
    $_SESSION["mes"] += 1;
    header("Location: /contact.php");
}else{
    echo "Your Form is no acceptable, Please try again";
}
