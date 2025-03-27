<?php

include ('../config/database.php');
$fname    =$_POST['f_name'];
$lname    =$_POST['l_name'];
$email    =$_POST['e_mail'];
$password =$_POST['passw'];

$sql = "INSERT INTO users (firstname, lastname,email, password)
            VALUES ('$fname','$lname','$email','$password') 

            ";

            $res = pg_query ($conn, $sql);

            if ($res){
                echo "user has been created succesfully";
            }else{
                echo "error";
            }
?>