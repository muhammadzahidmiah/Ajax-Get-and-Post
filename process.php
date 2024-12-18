<?php
include('dbconnection.php');
if(isset($_GET['uname']) && isset($_GET['surname'])){
    $uname =$_GET['uname'];
    $surname = $_GET['surname'];
    // echo "Your name is: $uname and your Surname is $surname";

    $query = "insert into my_tbl (uname,surname) values('$uname','$surname')";
    
    $run = mysqli_query($con,$query);
    if($run){
        echo "Data has been inserted Successfully";
    }
    else{
        echo "Data Inertion Failed";
    }
}
?>