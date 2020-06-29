<?php

    session_start();

        if($_SESSION['user_login']==1){
            echo "Seja Bem Vindo ao Sistema!";
            $_SESSION['user_login'] = 0;
            setcookie('control', 0, time()+60*60*24);
        }

        else{
            $_SESSION['user_login'] = 0;
            setcookie('control', 1, time()+60*60*24);
            header("Location: index.php");
        }