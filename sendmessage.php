<?php
include("scripts/db.php");

$msg = $_POST['msg'];
$user = $_COOKIE['usr'];
$stmt = $db->prepare("INSERT INTO `messages`(`User`, `Text`) VALUES ('?','?') ");
$stmt->bind_param('ss',$user,$msg);
$stmt->execute();
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