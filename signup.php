<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TasteTrail</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./fontawesome-free-6.4.2-web/css/all.css">
</head>
<body>

    <section id = "signpg">
        <div class="container-fluid" id = "signing">
            <div class="row" id = "logrow">
                <?php 
                    if($_SESSION['usedMail']){ ?>
                    <p> <?php echo "The given email is already used!"; ?> </p>
                <?php }
                ?>
                <div id = "logsee">
                    <form action="includes/signup.include.php" method="post">
                    <div class="one"> <input class="two" type="text" id="uname" name="uname" placeholder = "Name*"> </div> <br>
                    <div class="one"> <input class="two" type="text" id="uemail" name="uemail" placeholder="Email*"> </div> <br>
                    <div class="one"><input class="two" type="text" id="uphon" name="uphon" placeholder = "Phone*"> </div> <br>
                    <div class="one"><input class="two" type="password" id="upass" name="upass" placeholder = "Password*"> </div>
                    <br>
                    <button class="main-btn" type = "submit">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>
</html>