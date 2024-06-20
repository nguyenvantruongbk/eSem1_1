<?php 
require_once("database.php");

function create_contact($contact_info){
    $name = $contact_info["name"];
    $email = $contact_info["email"];
    $tel = $contact_info["tel"];
    $subject = $contact_info["subject"];
    $mes = $contact_info["mes"];
    
    if($contact_info!=[]){

    
    $sql = "INSERT into contacts(name,email,tel,subject,mes) values('$name','$email','$tel','$subject','$mes')";
    query($sql);
    return true;    } else return false;
}

function recent_message(){
    $sql = "SELECT * from contacts order by name desc";
    $result = query($sql);
    $list = [];
    while($row = $result->fetch_assoc()){
        $list[] = $row;
    }
    return $list;
}
