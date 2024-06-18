<?php

require_once("functions/m_orderprocess.php");
$order_id = $_GET["id"];
$order_process = $_GET["orderprocess"];
updateOrder($order_id,$order_process);
//echo $order_id ;
//echo $order_process;
header("Location: /Admin_dash_board.php");
