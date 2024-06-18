<?php
require_once("database.php");

function updateOrder($order_id,$order_process){
    $sql = "UPDATE orders SET order_status = '$order_process' where id = '$order_id'";
   // $sql = "UPDATE orders SET order_status = $order_process where id = $order_id";
    query($sql);
}

