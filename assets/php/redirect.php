<?php


session_start();



    if ($_POST['username']) {

        if ($_POST['password']) {

            if ($_POST['user_type'] == 'Admin') {
                    if (strtolower($_POST['username']) == 'admin' && strtolower($_POST['password'] )== 'admin'  && $_POST['user_type'] == 'Admin' ) {
                        $_SESSION['username'] = $_POST['username'];
                        $_SESSION['password'] = $_POST['password'];
                        $_SESSION['user_type'] = $_POST['user_type'];
                        $_SESSION['user'] = "ADMIN";
                        $_SESSION['verify'] = 1;
                        header("Location: admin.php");
                 
                  
                       } 
                       else {
                        echo "Username va Password to'g'ru kelmadi !!!";
                       }
               
               
            }
              else {
                $_SESSION['username'] = $_POST['username'];
                $_SESSION['user'] = "USER";
                $_SESSION['verify'] = 2;
               header("Location: user.php");
            }
        } else {

            echo "Password Kiritilmagan !!!";

        }
    } else {

        echo "Username Kiritilmagan !!!";

    }


?>
