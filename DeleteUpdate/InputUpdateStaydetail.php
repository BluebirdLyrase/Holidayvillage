

<form action="UpdateStaydetail.php" method="post">
<?php
echo '<input type = "hidden" name = "id" value = "'.$_POST['id'].'"  >'."\n";
echo "OrderID:<input disabled type='text' name='Fname' placeholder=".$_POST['id']."><br><br>";
echo 'CustomerID:<select name="CustomerID">';
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
mysqli_close($connect);
echo "</select><br><br>";
echo "<input type='date' name='Date' value =".$_POST['Date']."><br><br>";
?>





<input type="submit" name="someAction" value="Update"><br>
<br><input type="button" name="back" class="btn btn-primary" onclick="location.href='SelectStaydetail.php'" value="Back"> </button>
