<?php
if(!isset($_COOKIE['usr']))
{
    Header("Location: setup.php");
    die();
} else {
    Header("Location: chat.php");
    die();
}
?>