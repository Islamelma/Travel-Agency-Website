<?php
    session_start();

    $username = $_POST['usname'];
    $password = $_POST['password'];

    if($usname == "" || $password == ""){

        header('location: Login.php?err=null&&msg=none');
    }else if($usname == $_SESSION['user']['usname'] && $password == $_SESSION['user']['password']){

       
        header('location: Member Dashboard.php');
    }else{
        echo "invalid user";
    }


?>