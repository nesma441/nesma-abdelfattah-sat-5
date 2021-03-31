<?php
include("fetch_order.php");
header("Content-Type:application/json");
echo json_encode($orderData);