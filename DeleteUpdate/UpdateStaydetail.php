<?php
include '../validate.php';
include '../script.php';
$id = $_POST['id'];
$ExtraBed = $_POST['ExtraBed'];
$CustomerID = $_POST['CustomerID'];
$RoomID = $_POST['RoomID'];
$Date = $_POST['Date'];
$connect = mysqli_connect("localhost","root","","holidayvillage");
$ADate = array();
$ADate[0] = $Date;
if(DateRoomValidation($RoomID,$ADate,$connect)){
    $connect = mysqli_connect("localhost","root","","Holidayvillage");
    $sql ='update staydetail
    set 
    CustomerID ="'.$CustomerID.'",
    ExtraBed ="'.$ExtraBed.'",
    Date ="'.$Date.'",
    RoomID  ="'.$RoomID .'"
    where OrderID="'.$id.'"';
    $result = mysqli_query($connect,$sql);
    if(!$result){
        echo mysqli_error($connect);
        alert('Can not access database!');
    }else{
        alert("Update Complete"); 
        include 'SelectStaydetail.php';
    }
}else{
    include 'InputUpdateStaydetail.php';
}