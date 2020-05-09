<?php 
    if($_POST["username"] == "sakaci" && $_POST["password"]=="123")
    { 
        echo "Merhaba";
        session_start(); 
        $_SESSION['username'] = $_POST["username"];
        $_SESSION['logged']   = true;
        header("Location: admin.php"); // Modify to go to the page you would like 
        exit; 
    }

    else
    { 
        header("Location: login.php"); 
        exit; 
    } 

?>