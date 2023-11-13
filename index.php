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
                <a class="nav-link" href="#About-us">About us</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#Explor-Foods">Explor Foods</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#Offers">Offers</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#loca">Contact us</a>
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


<section class="section2" id = "About-us">
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



<section id = "Explor-Foods">
    <div class="container-fluid">
        <div class="row">
            <div class="col-6" id = "m-read">
                <div class="row justify-content-evenly align-items-center">
                    <div class="col-6 pt-3">
                        <label for="" class = "m-text">Restaurant</label><br>
                        <label for="" class = "m-clr">MENU</label><br>
                        <div class="row">
                        <div class="col-6"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p></div>
                        <div class="col-6"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat </p></div>
                        </div>
                        <a href=""><button class="main-btn mt-4" type="button">WHAT'S ON THE MENU</button></a>
                    </div>
                </div>
            </div>
            <div class="col-6" id = "m-img">
            </div>
        </div>
    </div>
</section>

<section id = "Offers">
    <div class="container-fluid">
        <div class="row">
        <div class="col-6" id = "Offer">
        </div>
        <div class="col-6">
            <div class="row of-d">
                <div class="col ">
                <label class = "m-text">La creme de la creme</label>
                 <label for="" class = "of-clr">TODAY'S SPECIALITY</label><br>
                <label for="">Oven Roasted duck with special sousage</label><br>
                 <label for="">$25.00</label><br>
                </div>
            </div>
        </div>
    </div>
</section>

<section id = "clint">
    <div class="testimonial">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-header">
                        <label for="" class = "m-text">Clients</label><br>
                        <label for="" class="of-clr">THAUGHTS</label>
                    </div>
                </div>
                <div class="col-sm-12 mt-3">
                      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="content">
                                    <p class = "">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus a nunc imperdiet, bibendum lectus accumsan, aliquet nisl. Fusce a venenatis diam.</p>
                                    <div class="per-name">
                                        <i class="fa-solid fa-quote-left"></i>
                                        <p>JULIO DEFOIR</p>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                    <div class="content">
                                        <p class = "">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus a nunc imperdiet, bibendum lectus accumsan, aliquet nisl. Fusce a venenatis diam.</p>
                                        <div class="per-name">
                                            <i class="fa-solid fa-quote-left"></i>
                                            <p>JULIO DEFOIR</p>
                                        </div>
                                    </div>
                            </div>
                            <div class="carousel-item">
                                    <div class="content">
                                        <p class = "">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus a nunc imperdiet, bibendum lectus accumsan, aliquet nisl. Fusce a venenatis diam.</p>
                                        <div class="per-name">
                                            <i class="fa-solid fa-quote-left"></i>
                                            <p>JULIO DEFOIR</p>
                                        </div>
                                    </div>
                            </div>
                            <div class="carousel-item">
                                    <div class="content">
                                        <p class = "">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus a nunc imperdiet, bibendum lectus accumsan, aliquet nisl. Fusce a venenatis diam.</p>
                                        <div class="per-name">
                                            <i class="fa-solid fa-quote-left"></i>
                                            <p>JULIO DEFOIR</p>
                                        </div>
                                    </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <span class="" aria-hidden="true"><i id = "btn-i" class="fa-solid fa-less-than"></i></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <span class="" aria-hidden="true"><i id = "btn-i" class="fa-solid fa-greater-than"></i></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section id = "loca">
    <div class="container-fluid">
        <div class="row">
        <div class="col-6" id = "loca-img">
            <div class="row of-d">
                <div class="col">
                    <label for="" class="loca-text">RESERVATIONS</label><br>
                    <label for="" >49 FEATHERSTONE STREET LONDON EC1Y 8SY UNITED KINGDOM</label><br>
                    <label for="" class="">+08801756689357</label><br>
                    <label for="" class = "">BOOKATABLE@RESTAURANT.COM</label><br>
                </div>
            </div>
        </div>
        <div class="col-6" >
            <div class="row">
                <div class="col">
                <iframe id = "loca-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3681.8369788275363!2d90.35953117427162!3d22.659865979429707!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755348ec0558363%3A0x71825eb40c8459a6!2sUniversity%20of%20Barishal!5e0!3m2!1sen!2sbd!4v1699810865745!5m2!1sen!2sbd" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>


<footer id = "foot">
        <div class="container text-center pt-4 pb-4">
            <div class="row">
                <div class="col-md-3 text-end">
                    <label for="" class = "res-name">RESTAURANT</label><br>
                    <label for="">Chef Taylor Bonnyman, working in collaboration with Head Chef Marguerite Keogh, offer elegant & playful modern British cooking.</label>
                </div>
                <div class="col-md-3">
                    <a class="foot-link" href="#About-us">About us</a>
                    <a class="foot-link" href="#Explor-Foods">Explor Foods</a>
                    <a class="foot-link" href="#Offers">Offers</a>
                    <a class="foot-link" href="#loca">Contact us</a>
                </div>
                <div class="col-md-3">
                    <a href="login.php"><button class="main-btn" type="button">Reservation</button></a><br>
                    <label for="">FOLLOW</label>
                    <ul class="list-unstyled list-inline">
                        <li class="list-inline-item">
                            <a href="" class = ""><i class="fa-brands fa-facebook"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="" class = ""><i class="fa-brands fa-square-twitter"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="" class = ""><i class="fa-brands fa-square-instagram"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="" class = ""><i class="fa-brands fa-square-snapchat"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3 text-start">
                    <label for="" >Barisal Sadar, Barisal</label><br>
                    <label for="" class="">+08801756689357</label><br>
                    <label for="" class = "">BOOKATABLE@RESTAURANT.COM</label><br>
                </div>
            </div>
        </div>
</footer>






<script src="./js/bootstrap.min.js"></script>
<script src="./js/main.js"></script>
<script src="./fontawesome-free-6.4.2-web/js/all.js"></script>
</body>
</html>