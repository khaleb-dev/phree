<?php

    if (isset($_POST['login-submit'])) {
        require 'connect.inc.php';

        $mailusername = $_POST['mailusername'];
        $password = $_POST['pwd'];

            if (empty(mailusername) || empty(mailusername)) {
                # code...
            }
            $sql = "SELECT * FROM signup WHERE username =? OR email =?;";
            $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)) {
                header ("location: ../index.html?error=sqlerror");
                exit();
            }
            else {
                mysqli_stmt_bind_param($stmt, "ss", $mailusername, $mailusername);
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);

                if ($row = mysqli_fetch_assoc($result)) {
                    $pwdCheck = password_verify($password, $row['password']);
                    if ($pwdCheck == false) {
                        header ("location: ../index.html?error=wrongpwd");
                        exit();
                    }
                    else if ($pwdCheck == true) {
                        session_start();
                        $_SESSION['userid'] =$row['id'];
                        $_SESSION['username'] =$row['username'];

                        header ("location: ../index.html?login=success");
                        exit();
                    }
                    else {
                        header ("location: ../index.html?error=wrongpwd");
                        exit();
                    }
                }
            }
        }
        
        else {
            header ("location: ../index.html");
            exit();

    }

