<?php
    session_start();
    if($_SESSION['uid']) header('location: restaurant.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TasteTrail</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./fontawesome-free-6.4.2-web/css/all.css">
</head>
<body>
    

<section id = "logpg">
    <div class="container-fluid" id = "login">
        <div class="row" id = "logrow">
           
        <div id = "logsee">
            <form  action="includes/login.include.php" method="post">
                <div class="one">
                    <input class="two" type="text" id="uemail" name="uemail" placeholder="Email*"><br>
                </div>
                <br>
                <div class="one">
                    <input class="two" type="password" id="upass" name="upass" placeholder = "Password*"><br>
                </div>
                <br>
                <button class="main-btn"  type = "submit">Submit</button>
            </form>
        </div>
        <br>
        <p class="logtext">Don't have an account? &nbsp; <a href="signup.php" class="">Register Now</a></p>
        </div>
    </div>

</section>

</body>
</html>