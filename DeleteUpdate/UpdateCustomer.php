<?php
include '../validate.php';
include '../script.php';
$id = $_POST['id'];
$FName = $_POST['Fname'];
$LName = $_POST['Lname'];

if(validateCustomer($FName,$LName)){
    $connect = mysqli_connect("localhost","root","","Holidayvillage");
    $sql ='update customer
    set 
    Fname ="'.$FName.'",
    Lname ="'.$LName.'"
    where CustomerID="'.$id.'"';
    $result = mysqli_query($connect,$sql);
    if(!$result){
        echo mysqli_error($connect);
        alert('Can not access database!');
    }else{
        alert("Update Complete"); 
        include 'SelectCustomer.php';
    }
}else{
    include 'InputUpdateCustomer.php';
}

?>