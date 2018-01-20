<?php
session_start();
unset($_SESSION["slms_ssid"]);

echo "<script>alert('Logout Successfull.');</script>";
echo "<script>window.location.href='login.php'</script>";



?>