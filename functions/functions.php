<?php

$con = mysqli_connect("localhost","root","","pastime") or die ("Connection was not established");

function InsertUser(){

    if(isset($_POST['sign_up'])){
        
        $name = $_POST['u_name'];
        $pass = $_POST['u_pass'];
        $email = $_POST['u_email'];
        $country = $_POST['u_country'];
        $gender = $_POST['u_gender'];
        $birthday = $_POST['u_birthday'];
        $name = $_POST['u_name'];
        $date = date("d-m-y");
        $status = "unverified";
        $posts = "No";
        
        $get_email = "select * from users where user_email='$email''";
        $run_email = mysqli_query($con,$get_email);
        $check = mysqli_num_rows($run_email);
        
        if($check==1){
            
        echo "<h2>This email is already registered!</h2>";
        exit();
            
        }
        
    }
    
    
    
}


?>