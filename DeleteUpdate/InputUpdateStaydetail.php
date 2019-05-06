<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!doctype html>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<div class="container">
    <h4 class="text-center"><b>Update Staydetail</b></h4>
    <br><br>
    <div class="container">
        <div class="card-group">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title ">
<form action="UpdateStaydetail.php" method="post">
<?php
echo '<input type = "hidden" name = "id" value = "'.$_POST['id'].'"  >'."\n";
echo "OrderID:<input disabled class='form-control '  type='text' name='Fname' placeholder=".$_POST['id']."><br>";
echo 'CustomerID:<select name="CustomerID" class="form-control " >';
$connect = mysqli_connect("localhost","root","","holidayvillage");
$sql ='SELECT *
FROM Customer';
$result = mysqli_query($connect,$sql);
if(!$result){
  echo mysqli_error($connect);
}else{

while ($row = mysqli_fetch_array($result,MYSQLI_NUM)){
  echo '<option value='.$row[0].'>'.$row[0].'-'.$row[1].'-'.$row[2].'</option>';
}
}
?>

</select><br>
<div class="form-group">
                            Extra Bed:
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="ExtraBed" value="0" checked> No 
                                <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="ExtraBed" value="1" > Yes
                            </label>
                            </label>
                        </div>
                            </div>
</div></div>

            <div class="card">
                <div class="card-body">
                    <h4 class="card-title ">
                   Room ID:<select name="RoomID" class='form-control col-6'>
<?php
$sql2 ='SELECT RoomID
FROM room';
$result = mysqli_query($connect,$sql2);
if(!$result){
  echo mysqli_error($connect);
}else{

while ($row = mysqli_fetch_array($result,MYSQLI_NUM)){
  echo '<option value='.$row[0].'>'.$row[0].'</option>';
}
}
mysqli_close($connect);
echo "</select><br>";
echo "Date: <input type='date' class='form-control col-6' name='Date' value =".$_POST['Date']."><br>";
echo '<input type = "hidden" name = "OldDate" value = "'.$_POST['Date'].'"  >'."\n";
?>

 </div>
</div>

<div class="container"><br><br>
                <div class="row">
                    <div class="col-sm">
                    <input type="button" name="back" class="btn btn-primary"
                            onclick="location.href='SelectStaydetail.php'" value="Back" class="text-right"> </button>
                    </div>
                    
                    <div class="col-sm-text-left">
                    <input type="submit" name="someAction" value="Update" class="btn btn-primary" class="text-left">
               
                    </div>
</form>
