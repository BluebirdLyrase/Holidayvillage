<?php
include 'DeleteCustomer.php';

$connect = mysqli_connect("localhost","root","","holidayvillage");
$sql = 'DELETE FROM customer WHERE CustomerID ='.$_POST['id'].';';
$result = mysqli_query($connect, $sql);
if($result){
    echo 'COMPLETE';
}else{
    echo 'SOMETHING WRONG';
}
mysqli_close($connect);
?>