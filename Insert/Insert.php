<?php
include '../validate.php';
include '../script.php';
include 'InsertFunction.php';

$FName = $_POST["Fname"];
$LName = $_POST["Lname"];
$RoomID = $_POST["RoomID"];
$checkIn = $_POST["CheckIn"];
$checkOut = $_POST["CheckOut"];
$extraBed = $_POST["ExtraBed"];
$connect = mysqli_connect("localhost","root","","Holidayvillage");
console_log("sdfsdf");
///////////////////////ตรวจสอบ check in out ก่อนสตรวจสอบอย่างอื่น ป้องกัน $ADate เน่า///////////////////////
if(checkinoutValidation($checkIn,$checkOut,$connect)){
    console_log("Valid checkin checkout Value ");
    $ADate = getADate($checkIn,$checkOut);
    if(validateCustomer($FName,$LName)&&DateRoomValidation($RoomID,$ADate,$connect)){
        console_log("Valid FName LName RoomID");
            insertCustomer($FName,$LName,$connect);
            $CustomerID = getCustomerID($FName,$LName,$connect);
            insertStaydetail($ADate,$RoomID,$extraBed,$CustomerID,$connect);
            mysqli_close($connect);
            include 'input.php';
        }else{
            mysqli_close($connect);
            include 'input.php';
        }///else
}else{
    mysqli_close($connect);
    include 'input.php';
}///else

///////////////////////////////////////////////////////////////////////////////////////////////////

function getCustomerID($thisFName,$thisLName,$thisconnect){
    $connect = $thisconnect;
    console_log("getting CustomerID");
    $sql ='select COUNT(CustomerID),CustomerID
           from customer
           where Fname="'.$thisFName.'" AND Lname="'.$thisLName.'"';
    $result = mysqli_query($connect,$sql);
    if(!$result){
        echo mysqli_error($connect);
    }else{
        while ($row = mysqli_fetch_array($result)){
            if($row[0]>1){
                alert("There are 2 Customer with the same name. Use Customer ID to insert Directly by IDinsert.");
                mysqli_close($connect); 
                include 'index2.php';
                 return Null;
            }else{
             console_log("CustomerID is ".$row[1]);
                 return $row[1];
            }
         }
}
}

///////////////////////////////////////////////////////////////////////////////////////////////////

function insertCustomer($thisFName,$thisLName,$thisconnect){
    $connect = $thisconnect;
    $sql = 'INSERT INTO customer
    VALUES(Null,"'.$thisFName.'","'.$thisLName.'")';
    $result = mysqli_query($connect,$sql);
   
    if(!$result){
       echo mysqli_error($connect);
   }else{
    alert("insert customer success");
   }///else
}///function
///////////////////////////////////////////////////////////////////////////////////////////////////
?>