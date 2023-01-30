<?php
include("scripts/db.php");

$msg = $_POST['msg'];
$user = $_COOKIE['usr'];
$sql = "INSERT INTO `messages`(`User`, `Text`) VALUES ('$user','$msg') ";
$result = $db->query($sql);
header("Location: index.php");
die();
if(empty($msg))
{
    header("Location: index.php?error=1");
    die();
} else {
    if(empty($user))
    {
        header("Location: index.php?error=1");
        die();
    } else {
        
    }  
}

?>