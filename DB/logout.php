<?php
session_start(); // session being started
session_destroy();
header("location:index.php");
?>
