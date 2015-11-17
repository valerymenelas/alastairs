<?php
session_start();
unset($_SESSION['login']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Admin Logout</title>
<script>window.location.href = "admin_login.php";</script>
</head>
</html>