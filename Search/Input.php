
<form action="Showall.php" method="post">
<input type="submit" name="button" value="ShowAll" />
</form>

<form action="searchcustomer.php" method="post">
<?php
$connect = mysqli_connect("localhost","root","","holidayvillage");
$sql ='SELECT *
FROM customer';
$result = mysqli_query($connect,$sql);
echo "CustomerName:<select name='CustomerName'>";
while ($row = mysqli_fetch_array($result,MYSQLI_NUM)){
    echo '<option value='.$row[1].'>'.$row[1].'</option>';
      }
?>
<input type="submit" name="button" value="SearchCustomer" />
</form>

<form action="searchroom.php" method="post">
<?php
$connect = mysqli_connect("localhost","root","","holidayvillage");
$sql ='SELECT *
FROM room';
$result = mysqli_query($connect,$sql);
echo "RoomNumber:<select name='RoomNumber'>";
while ($row = mysqli_fetch_array($result,MYSQLI_NUM)){
    echo '<option value='.$row[0].'>'.$row[0].'</option>';
      }
?>
<input type="submit" name="button" value="SearchRoom" />
</form>

<form action="searchDate.php" method="post">
<?php
$connect = mysqli_connect("localhost","root","","holidayvillage");
$sql ='SELECT *
FROM room';
$result = mysqli_query($connect,$sql);
echo "Start Date : <input type='date' name='CheckIn'><br><br>";
echo "End Date : <input type='date' name='CheckOut'><br><br>";

?>
<input type="submit" name="button" value="SearchDate" />
</form>

<br><br> Report <br><br>

<form action="reportdate.php" method="post">
<input type="submit" name="button" value="reportdate" />
</form>

<form action="reportweek.php" method="post">
<input type="submit" name="button" value="reportweek" />
</form>

<form action="reportmonth.php" method="post">
<input type="submit" name="button" value="reportmonth" />
</form>

<input type="button" name="back" class="btn btn-primary" onclick="location.href='../index.php'" value="Back"> </button>
