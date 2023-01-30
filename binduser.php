<?php
$user = $_POST['user'];
setcookie("usr", $user);
Header("Location: chat.php");
die();
?>