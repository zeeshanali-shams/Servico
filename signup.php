<?php
    $uname=$_POST['uname'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['passwd'];
    $confirmpassword = $_POST['confirm-passwd'];
    $contact = $_POST['contactid'];
    $altcontact = $_POST['altcontactid'];
    include("connection.php");

    if($password != $confirmpassword)   {
        //Code to exit this process and redirect to signup.html
    }

    $sqlQ = "insert into logininfo (username,email,password) "."values('$uname','$email','$password')";
    $result = mysqli_query($conn, $sqlQ);

    $sqlQ = "insert into userDetails(username,contactid,gender,seccontactid,city)"."values('$uname','$contact','$gender','$altcontact')";
    $result = mysqli_query($conn, $sqlQ);
?>