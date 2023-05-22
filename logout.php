<?php
session_start();
session_destroy();
echo "<script language='javascript'>alert('Are you want to Logout?');</script>";
echo "<script> document.location='home.php';</script>";
?>