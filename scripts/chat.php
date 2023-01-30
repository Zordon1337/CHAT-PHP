<?php
function LoadChat()
{
    include("db.php");
    $sql = "SELECT * FROM Messages";
    $result = $db->query($sql);

    while($row = mysqli_fetch_array($result)) {
        $user = $row['User'];
        $message = $row['Text'];
        echo "<p style='color:red;'>$user: $message</p>";
    }
}
?>