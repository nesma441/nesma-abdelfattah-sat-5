
<?php
$searchKey = $_GET['searchKey'];
$conn=mysqli_connect("localhost","root","","route34_wed");
$quary="SELECT `customerName`FROM `customers` WHERE  `customerNumber`= '$searchKey'";
$res=mysqli_query($conn, $quary);
$customer=mysqli_fetch_row($res);
echo '<pre>';
print_r($customer);
$x=mysqli_affected_rows($conn);
if ($x!=1){
    echo "there an error ";
}
?>
<!DOCTYPE html>
<form action="" method="GET" >
<input type="number" placeholder="customer number" name="searchKey"><br>
<input type="submit">
</form>

