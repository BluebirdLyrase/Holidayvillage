

<form action="insertByID.php" method="post">
<b>Insert</b><br><br>
CustomerID:<select name="CustomerID">

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
<br>Extra Bed:<br>
<input type="Radio" name="ExtraBed" value="0" checked>  No  <br>
<input type="Radio" name="ExtraBed" value="1"> Yes  <br>
<br><br>
Room ID:<select name="RoomID">
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
mysqli_close($connect)
?>
</select><br><br>
Check-In Date : <input type="date" class="form-control" name="CheckIn"><br><br>
CheckOut Date : <input type="date" class="form-control" name="CheckOut"><br><br>
<input type="submit" name="someAction" value="submit">
</form>

<form action="../index.php" method="post">
<input type="button" name="back" class="btn btn-primary" onclick="location.href='../index.php'" value="Back"> </button>
</form>