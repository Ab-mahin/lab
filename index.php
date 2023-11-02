<?php
    session_start();
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
    
<section class="section1">
    <nav class="navbar navbar-expand-lg pt-3">
       <div class="container-fluid">
        <a href="#" class="navbar-band"><img class="logo" src="images/Black Yellow Minimalist Fast Food House Logo.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa-solid fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#Welcome">Welcome</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#About-us">About us</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#Explor-Foods">Explor Foods</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#Restaurant">Restaurant</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#Offers">Offers</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#Contact-us">Contact us</a>
                </li>
            </ul>
            <a href="login.php"><button class="main-btn" type="button">Reservation</button></a>
        </div>
       </div>
    </nav>

    <div class="container">
        <h1 class="text"><span class = "clrb">Welcome to </span><br>Taste Trail Zone....</h1>
        <h3 style="color: white;">Seeking for Hygiene & Availability</h3>
    </div>

</section>


<section class="section2">
    <div class="container">
        <div class="row">
            <div class="cl-1 col-5">
                <h2 class="clrd">Discover</h2>
                <h3 class="discu">OUR STORY</h3>

                <p class="smalltext">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi. </p>
                <span class="jon">John Phillipe</span>
            </div>
            <div class="col-7">
                <div class="row lside1">
                        <div class="img1 col-5">
                        </div>
                    <div class="img2 col-5">
                    </div>
               </div>
            </div>
        </div>
    </div>
</section>


<script src="./js/bootstrap.min.js"></script>
<script src="./js/main.js"></script>
<script src="./fontawesome-free-6.4.2-web/js/all.js"></script>
</body>
</html>