<?php
$connect = mysqli_connect("localhost","root","","holidayvillage");
$sql = 'DELETE FROM customer WHERE CustomerID = 10004';
$result = mysqli_query($connect, $sql);
if($result){
    echo 'complete';
}else{
    echo 'no complete';
}
mysqli_close($connect);

?>