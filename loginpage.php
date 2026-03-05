<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        <?php include "style.css" ?>
        
    </style>
    <script>
    function pass() {
    var eyes = document.getElementById("password");
    if (eyes.getAttribute("type") == "text") {
    eyes.setAttribute("type","password");
}
    else {
    eyes.setAttribute("type","text")
    }
}
    </script>
</head>
<body>
<div class="wrap">
<div class="header"><button class="logsign"><a href="signup.php" class="log">Sign Up</a></button></div>
<form action="log-in.php" method="post" class="signup">
<label for="user">Username</label>
<br>
<input type="text" name="user" id="user">
<br>
<label for="password">Password</label>
<br>
<input type="password" name="password" id="password" ><span onclick='pass()' class="show">:)</span>
<br>
<br>
<button type="submit" class="login">Login</button>
</form>
</div>
</body>
</html>