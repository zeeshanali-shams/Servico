<?php
    session_start();
    $uname=$_POST['uname'];
    $password=$_POST['passwd'];
    include("connection.php");
    $sqlQ="select * from logininfo where userid='$uname' union select * from logininfo where email='$uname'";
    
    $result = mysqli_query($conn, $sqlQ) or die ("Failed Query");
    
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        if($password == $row['password'])   {
           $_SESSION['uname'] = $row['uname'];
        
        }
        else {
            echo "wrong credentials";
        }

        header("Location:index.html");
    
?>
