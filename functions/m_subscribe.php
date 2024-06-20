<?php 
require_once("database.php");

function create_subcribe($contact_info){
   
    $email = $contact_info["email"];
   
    
    if($contact_info!=[]){

    
    $sql = "INSERT into email_subcribes(email) values('$email')";
    query($sql);
    return true;    } else return false;
}

function email_subcribe(){
    $sql = "SELECT * from email_subcribes order by email desc";
    $result = query($sql);
    $list = [];
    while($row = $result->fetch_assoc()){
        $list[] = $row;
    }
    return $list;
}
