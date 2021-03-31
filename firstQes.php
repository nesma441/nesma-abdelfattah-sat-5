<?php
$num_order=$_GET['num_order'];
$conn=mysqli_connect("localhost","root","","route34_wed");
$quary="SELECT * FROM `orders` ORDER by `orderDate` DESC limit $num_order ";
$result= mysqli_query($conn , $quary) ;
$data=mysqli_fetch_all($result ,MYSQLI_ASSOC);
echo "<pre>";
print_r($data);

?>
<form action="" method="GET">
<input type="number" name="num_order" placeholder="Enter Number of orders">
<input type="submit" name="submit" >

</form>