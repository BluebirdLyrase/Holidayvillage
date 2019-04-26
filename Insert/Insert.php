<?php
include 'validate.php';
$FName = $LName = "";
$FName = $_POST["Fname"];
$LName = $_POST["Lname"];
$RoomID = $_POST["RoomID"];
$checkIn = $_POST["CheckIn"];
$checkOut = $_POST["CheckOut"];
$extraBed = $_POST["ExtraBed"];
$customerType = $_POST["Customertype"];

console_log("sdfsdf");
///////////////////////ตรวจสอบ check in out ก่อนสตรวจสอบอย่างอื่น ป้องกัน $ADate เน่า///////////////////////
if(checkinoutValidation($checkIn,$checkOut)){
    console_log("Valid checkin checkout Value ");
    $ADate = getADate($checkIn,$checkOut);
    if(validateCustomer($FName,$LName)&&DateRoomValidation($RoomID,$ADate)){
        console_log("Valid FName LName RoomID");
        if($customerType=="new"){
            insertCustomer($FName,$LName);
            }///if
            $CustomerID = getCustomerID($FName,$LName);
            if($CustomerID!=Null){
            insertStaydetail($ADate,$RoomID,$extraBed,$CustomerID);
            }else{
            echo "Firstname and Lastname don't match the existing ID";
            }
            include 'input.php';
        }else{
            include 'input.php';
        }///else
}else{
    include 'input.php';
}///else
///////////////////////////////////////////////////////////////////////////////////////////////////
function getCustomerID($thisFName,$thisLName){
    console_log("getting CustomerID");
    $connect = mysqli_connect("localhost","root","","Holidayvillage");
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
function insertStaydetail($thisADate,$thisRoomID,$thisExtraBed,$thisCustomerID){
    console_log("Inserting to Staydetail");
    $connect = mysqli_connect("localhost","root","","Holidayvillage");
    foreach($thisADate as $currentDate) {
        console_log("Inserting to Staydetail ".$currentDate);
    $sql ='INSERT INTO staydetail
    VALUES(Null,"'.$thisCustomerID.'","'.$currentDate.'","'.$thisExtraBed.'","'.$thisRoomID.'")';
    $result = mysqli_query($connect,$sql);
}
alert("insert Staydetail Successfully");
}

///////////console_log();////////////////////////////////////////////////////////////////////////////////////////


///////////////////////////////////////////////////////////////////////////////////////////////////
function getADate($thischeckIn,$thischeckOut){
    console_log("creating ADate");
    $ADate = array();
    $checkIn = $thischeckIn;
    $checkOut = $thischeckOut;
    $refDate = date_create($checkIn);
    $i = 0;
///////////////////////Add Date in Array////////////////////////
    do{
        $toArrayDate =  $refDate->format('Y-m-d');
        $ADate[$i] = $toArrayDate;
        console_log("add to array :".$toArrayDate."<br>");
        $refDate->modify('+1 day');
        $i++;
        }while($toArrayDate!=$checkOut);
    
    return $ADate;    
}///function
///////////////////////////////////////////////////////////////////////////////////////////////////


///////////////////////////////////////////////////////////////////////////////////////////////////
function validateCustomer($thisFName,$thisLName){
    $testFName = test_input($thisFName);
    if (!preg_match("/^[A-Za-z]+(\s[A-Za-z]+)*$/",$testFName)){
        alert("Only letters allowed in Firstname"); 
        echo "<br>";
        return false;
    }////if

    $testLName = test_input($thisLName);
    if (!preg_match("/^[A-Za-z]+(\s[A-Za-z]+)*$/",$testLName)){
        alert("Only letters allowed in Lastname"); 
        echo "<br>";
        return false;
    }///if
    return true;
   }///function
///////////////////////////////////////////////////////////////////////////////////////////////////

///////////////////////////////////////////////////////////////////////////////////////////////////
function insertCustomer($thisFName,$thisLName){
    $connect = mysqli_connect("localhost","root","","holidayvillage");
    $sql = 'INSERT INTO customer
    VALUES(Null,"'.$thisFName.'","'.$thisLName.'")';
    $result = mysqli_query($connect,$sql);
   
    if(!$result){
       echo mysqli_error($connect);
   }else{
    alert("insert customer success");
   }///else
    mysqli_close($connect);
}///function
///////////////////////////////////////////////////////////////////////////////////////////////////


?>