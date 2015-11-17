<?php
session_start();
unset($_SESSION['email']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Admin Logout</title>
<script>window.location.href = "home.php";</script>
</head>
</html>