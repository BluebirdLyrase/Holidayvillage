

<form action="UpdateCustomer.php" method="post">
<?php
echo "CustomerID:<input disabled type='text' name='id' placeholder=".$_POST['id']."><br><br>";
echo '<input type = "hidden" name = "id" value = "'.$_POST['id'].'"  >'."\n";
echo "Firstname: <input type='text' name='Fname' placeholder=".$_POST['Fname']."><br><br>";
echo "Lastname: <input type='text' name='Lname' placeholder=".$_POST['Lname']."><br><br>";
?>

<input type="submit" name="someAction" value="Update"><br>
<br><input type="button" name="back" class="btn btn-primary" onclick="location.href='SelectCustomer.php'" value="Back"> </button>