<?php 
    if($_POST["username"] == "U111210044" && $_POST["password"]=="123")
    { 
        echo "Merhaba";
        session_start(); 
        $_SESSION['username'] = $_POST["username"];
        $_SESSION['logged']   = true;
        header("Location: admin.php");
        exit; 
    }

    else
    { 
        header("Location: login.php"); 
        exit; 
    } 

?>