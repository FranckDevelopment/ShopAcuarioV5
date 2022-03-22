<?php
    require('classes/class_login.php');
    if(isset($_POST['submit'])){
            $email = $_POST['email'];
            $password = $_POST['password'];

            if(empty($email) || empty($password))
            {
                echo '<div class="alert alert-danger">Nombre de usuario o contraseña vacio </div> ';
            }
            else
            {
                $user = new class_login();

                if($user->Val_Usu($email,$password)){
                    session_start();
                    $_SESSION['usuario'] = $email;
                    header("Location: welcome.php?id=$RFC");
                }else{
                echo '<div class="alert alert-danger">Usuario no existe</div>';
                }
            }

        }
?>