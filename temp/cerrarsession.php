<?php
session_start();
unset($_SESSION['usuario']);
session_destroy();
 echo "<a href='../index.php'></a>";
 header("location:../index.php")
?>