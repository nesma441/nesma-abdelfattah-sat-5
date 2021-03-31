<?php
$orderNum=$_GET['orderNumber'];
$conn=mysqli_connect("localhost","root","","route34_wed");
$quary="SELECT * FROM `orders` where `orderNumber`='$orderNum'";
$result= mysqli_query($conn , $quary) ;
$orderData=mysqli_fetch_row($result );
echo '<pre>';
print_r($orderData);
$x=mysqli_affected_rows($conn);
if ($x!=1){
    echo "there an error ";
}