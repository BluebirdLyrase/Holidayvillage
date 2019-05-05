<?php
session_start();
include('script.php');

$userName=$_POST['userName'];
$password=$_POST['password'];
$_SESSION['logedIn']=false;


    ////////////////////////Database Prepare////////////////////////
    $connect = mysqli_connect("localhost","root","","holidayvillage");
    $sql_Username ='select*
           from login';
    $result_Username = mysqli_query($connect,$sql_Username);
    if(!$result_Username){
        alert("Can not connect to database");
    }else{
        $numrows = mysqli_num_rows($result_Username);
        $numfields = mysqli_num_fields($result_Username);
            /////////////////////////Validation///////////////////////////////
                while ($row = mysqli_fetch_array($result_Username)){
                
                if ($userName==$row['username'] && $password==$row['password']) {
                    $_SESSION['logedIn']=true;
                    header('Location:index.php');
                    exit();
                }else
                
                alert('Invalid Username or Password');
                include('Login.php');
                $_SESSION['logedIn']=false;
                exit();

            }
            }
            ///function
    ?>