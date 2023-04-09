<?php
session_start();

$con= mysqli_connect('localhost','root');
if($con){
    echo "Success";
}
else{
    echo "Failed";
}

$db= mysqli_select_db($con,'mp2');

if(isset($_POST['submit'])){
    $username= $_POST['userName'];
    $password= $_POST['password'];


    $sql= "select * from admintable where username= '$username' and password= '$password' ";

    $query = mysqli_query($con, $sql);
    $row= mysqli_num_rows($query);
        if($row==1){
            $_SESSION['loggedin'] = true;
            echo "Login Successful";
            //$_SESSION['user']=$username;
            header('location:home.php');
            exit();
        }
        else{
            echo "Login Failed";
            header('location: adminlogin.php');
            exit();
        }
    

}

?>