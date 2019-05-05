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


<form action="insertByID.php" method="post">
    <h4 class="text-center"><b>Insert</b></h4>
    <br><br>
    <div class="container">
        <div class="card-group">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">
                        <label for="CustomerID">Customer:</h4></label><select name="CustomerID" class="form-control">
                        <?php
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
                    <h4 class="card-title">
                        <label for="ExtraBed">Extra Bed:</label>
                        <input type="Radio" name="ExtraBed" value="0" checked> No
                        <input type="Radio" name="ExtraBed" value="1"> Yes
                    </h4>

                    <h4 class="card-title">
                        <div class="form-group">
                            <label for="RoomID">Room ID:</label>
                            <select class="form-control" name="RoomID">
                                <?php
$connect = mysqli_connect("localhost","root","","holidayvillage");
$sql ='SELECT RoomID FROM room';
$result = mysqli_query($connect,$sql);
if(!$result){
    echo mysqli_error($connect);
}else{
  while ($row = mysqli_fetch_array($result,MYSQLI_NUM)){
    echo '<option value='.$row[0].'>'.$row[0].'</option>';
}
}
mysqli_close($connect);
?>
                            </select>
                    </h4>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">
                        <div class="form-group">

                            <h4 class="card-title"><label for="CheckIn">Check-In Date :</label></h4>
                            <input type="date" class="form-control" name="CheckIn"><br>

                            <h4 class="card-title"><label for="CheckOut">Check-Out Date : </label></h4>
                            <input type="date" class="form-control" name="CheckOut">

                        </div>
                </div>
            </div>
        </div>
        <br><br>
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <input type="button" name="back" class="btn btn-primary" onclick="location.href='../index.php'"
                        value="Back"> </button>
                </div>
                <div class="col-sm-text-left">
                    <button type="submit" class="btn btn-primary" name="someAction">Submit</button>
</form>
</div>
</div>
</div>
</div>
</div>