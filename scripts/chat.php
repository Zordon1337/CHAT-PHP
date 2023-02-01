<?php
function LoadChat()
{
    include("db.php");
    $sql = "SELECT * FROM Messages";
    $result = $db->query($sql);

    while($row = mysqli_fetch_array($result)) {
        $user = htmlspecialchars($row['User']);
        $message = htmlspecialchars ($row['Text']);
        echo "<p style='color:red;'>$user: $message</p>";
    }
}
?>