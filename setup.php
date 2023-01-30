<?php
echo "
<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Chat</title>
    <?php
    include 'scripts/chat.php';
    ?>
    
    <style>
        @import url(\"/style/index.css\");
    </style>
</head>

<body>
    <h1 style=\"text-align:center;color:white;top:25%\"> Please enter your username </h1>
    <br />
    <br />
    <form style=\"text-align:center;color:white;top:25%\" method='POST' action='binduser.php'> 
    <input name='user' />
    <br />
    <br />
    <input type='submit' value='Continue' />
    </form>
    
</body>
</html>
";
?>