<!doctype html>
<html lang="en">
  <head>
    <title>Document</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>

  <body>
    <?php
    $connect = mysqli_connect("localhost","root","","holidayvillage");
    if(!isset($smtDelete)){
        $sql = 'SELECT * FROM customer';
        $result = mysqli_query($connect, $sql);
        $numrows = mysqli_num_rows($result);
        $numfields = mysqli_num_fields($result);
        if(!$result){
            echo '<b>Error </b>'.mysqli_error().': '.mysqli_error().'<br>';
        }elseif($numrows == 0){
            echo '<b>There is no customer to delete!</b>';
        }else{
            echo '<table border = "1" cellspacing = "0" cellpadding = "3"';
            while ($row = mysqli_fetch_array($result)){
                echo '<form name = "frmDelete'.$row['CustomerID'].'"method = "post" action = "DeleteCustomer2.php">'."\n";
                echo '<tr>';
                for($i = 0; $i < $numfields; $i++){
                    echo '<td>'.$row[$i].'&nbsp;</td>'."\n";
                }
                echo '<input type = "hidden" name = "id" value = "'.$row['CustomerID'].'">'."\n";
                echo '<td><input name = "smtDelete" type = "submit" value = "Delete" onClick = "return confirmDelete();"></td>'."\n";
                echo '</tr>'."\n";
                echo '</form>'."\n";
            }
            echo '</table>';
        }
    }
    mysqli_close($connect);
    ?>
    <!-- Optional JavaScript -->
    <script language = "JavaScript">
    function confirmDelete(){
      return confirm('Are you sure you want to delete this customer ?');
    }
    </script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>