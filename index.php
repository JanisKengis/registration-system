<?php

session_start();

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<header>
    <nav>
        <div style="display: inline-flex">
            <h3> REGISTRATION SYSTEM </h3>
        <ul style="list-style-type: none">
            <?php
            if(isset($_SESSION['userid'])) { ?>
                <li style="font-weight: bold"> Logged in as: <?php echo strtoupper($_SESSION['useruid']) ?></li>
                <li><a class="signOut_btn" href="includes/logout.inc.php">LOG OUT</a></li>
            <?php }
            ?>
        </ul>
        </div>
    </nav>
</header>
<body>


    <div class="div1">
        <h4>LOG IN</h4>
        <form action="includes/login.inc.php" method= "post">
            <input type="text" name="uid" placeholder="Username">
            <input type="password" name="pwd" placeholder="Password">
            <button class='button button1' type="submit" name="submit"> LOG IN </button>
        </form>
    </div>

<div class="div2">
    <h4>DON'T HAVE AN ACCOUNT YET? SIGN UP BELOW!</h4>
    <p>Please provide username, password and e-mail</p>
    <form action="includes/signup.inc.php" method= "post">
        <input type="text" name="uid" placeholder="Username">
        <input type="password" name="pwd" placeholder="Password">
        <input type="password" name="pwdrepeat" placeholder="Repeat Password">
        <input type="text" name="email" placeholder="E-mail">
        <button class='button button1' type="submit" name="submit"> SIGN UP </button>
    </form>
</div>


</body>
</html>
