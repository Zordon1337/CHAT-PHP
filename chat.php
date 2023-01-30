
<?php
if(isset($_COOKIE['usr']))
{
    echo "
    <!DOCTYPE html>
    <html lang=\"en\">
    <head>
        <meta charset=\"UTF-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <title>Chat</title>
        
        <style>
            @import url(\"/style/index.css\");
        </style>
    </head>
    
    <body>
        <h1 style=\"text-align:center;color:white;top:25%\">Chat made with PHP and MySQL </h1>
        <br />
        <br />
        <div class=\"chatdiv\" id=\"chat\"> 
        ";
        include 'scripts/chat.php';
        LoadChat();
        echo "
        </div>
        
        <footer>
        <form style=\"color:white;text-align:center\" method=\"POST\" action=\"sendmessage.php\">
                <h3 style=\"color:white;text-align:center\">Message</h3>
                <textarea name='msg' cols=\"32\" rows=\"5\" ></textarea><br />
    
                <input type=\"submit\" value=\"Send Message!\" />
        </form>
        </footer>
    </body>
    </html>
    ";
} else {
    Header("Location: setup.php");
    Die();
}
if(isset($_GET['error']))
{
    echo"<script>alert(\"Failed to sent Message. Something went wrong... \")</script>";
}
?>
