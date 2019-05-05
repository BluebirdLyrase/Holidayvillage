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
    <h4 class="text-center"><b>Insert New Customer</b></h4>
    <br><br>
    <div class="container">
        <div class="card-group">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">
                        <form action="insert.php" method="post">
                            <label for="Fname">Firstname:</label>
                            <input type="text" class="form-control" name="Fname" aria-describedby="helpFname"
                                placeholder="Somjai">
                            <small id="helpFname" class="form-text text-muted">Your firstname</small>
                            <label for="Lname">Lastname:</label>
                            <input type="text" class="form-control" name="Lname" aria-describedby="helpLname"
                                placeholder="Jaidee">
                            <small id="helpFname" class="form-text text-muted">Your lastname</small>
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
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">
                        <div class="form-group">
                            <label for="CheckIn">Check-In Date</label>
                            <input type="date" class="form-control" name="CheckIn">
                        </div>
                        <div class="form-group">
                            <label for="CheckOut">Check-Out Date</label>
                            <input type="date" class="form-control" name="CheckOut">
                        </div>

                        <div class="form-group">
                            <label for="">Room ID:</label>
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
                        </div>
                </div>
            </div>
        </div>
        </select><br><br>
        <div class="container">
            <div class="row">
                <div class="col-sm">
               <input type="button" name="back" class="btn btn-primary" onclick="location.href='../index.php'" value="Back"> </button>
                </div>
                <div class="col-sm-text-left">
                <button type="submit" class="btn btn-primary" name="someAction">Submit</button></form>
               </div>
            </div>
        </div>
    </div>
</div>
</html>