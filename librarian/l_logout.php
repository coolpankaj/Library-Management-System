<?php
session_start();
unset($_SESSION["llms_ssid"]);
// session_unset();
// session_destroy();

echo "<script>alert('Logout Successfull.');</script>";
echo "<script>window.location.href='login.php'</script>";



?>