<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="row mt-5">
        <div class="card col-2 border-primary">
            <h4 class="card-title"> <h3 class="text-center"><br>Get report <br><br>

                <form action="reportdate.php" method="post">
                    <input type="submit" class="btn btn-primary" name="button" value="reportdate" />
                </form>

                <form action="reportweek.php" method="post"><br>
                    <input type="submit" class="btn btn-primary" name="button" value="reportweek" />
                </form>

                <form action="reportmonth.php" method="post"><br>
                    <input type="submit" class="btn btn-primary" name="button" value="reportmonth" />
                </form><br><br><br>
                <input type="button" name="back" class="btn btn-primary" onclick="location.href='../index.php'"
                    value="Back">
                </button>
    </div>
    </h4>
    <div class="card border-primary col-5">
        <div class="card-body">
            <h4 class="card-title">
                <h3 class="text-center">Search<i class="fa fa-history" aria-hidden="true"></i></h3>
            </h4>
            <form action="Showall.php" method="post">
                <b> Show all Data: </b> <input type="submit" class="btn btn-primary" name="button" value="Click!" />

            </form><br>
            <form action="searchcustomer.php" method="post">
                <?php
$connect = mysqli_connect("localhost","root","","holidayvillage");
$sql ='SELECT *
FROM customer';
$result = mysqli_query($connect,$sql);
echo "<b>CustomerName&nbsp:<select class='btn btn-success' name='CustomerName'></b>";
while ($row = mysqli_fetch_array($result,MYSQLI_NUM)){
    echo '<option value='.$row[1].'>'.$row[1].'</option>';
      }
?>
                </select>
                <input type="submit" class="btn btn-primary" name="button" value="Click!" /><br>
            </form><br>

            <form action="searchroom.php" method="post">
                <?php
$connect = mysqli_connect("localhost","root","","holidayvillage");
$sql ='SELECT *
FROM room';
$result = mysqli_query($connect,$sql);
echo "<b>RoomNumber&nbsp:<select class='btn btn-success' name='RoomNumber'></b>";
while ($row = mysqli_fetch_array($result,MYSQLI_NUM)){
    echo '<option value='.$row[0].'>'.$row[0].'</option>';
      }
      
?>
                </select>
                <input type="submit" class="btn btn-primary" name="button" value="Click!">
            </form><br><br>
            <form action="searchDate.php" method="post">
                <?php
$connect = mysqli_connect("localhost","root","","holidayvillage");
$sql ='SELECT *
FROM room';
$result = mysqli_query($connect,$sql);
echo "Select From date</b> <br>";
echo "Start Date &nbsp: <input type='date' class='btn btn-info' name='CheckIn'><br><br>";
echo "End Date &nbsp : <input type='date' class='btn btn-info'  name='CheckOut'><br><br>";
?>
                <input type="submit" class="btn btn-primary" name="button" value="Click!" />
            </form>
            </h4>
        </div>
    </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>