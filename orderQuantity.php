<?php

$orderName=$_GET['orderName'];
$conn=mysqli_connect("localhost","root","","route34_wed");
$quary="SELECT  productCode ,sum(quantityOrdered) FROM `orderdetails` WHERE `productCode`=
(SELECT  `productCode` FROM `products` WHERE `productName`='$orderName') ";
$result= mysqli_query($conn , $quary) ;
$data=mysqli_fetch_all($result ,MYSQLI_ASSOC);
echo "<pre>";
print_r($data);

?>
<form action="" method="GET">
<input type="text" name="orderName" placeholder=" name of product">
<input type="submit" name="submit" >

</form>