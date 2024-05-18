<php session_start() if(!isset($_SESSION['user_id'])){ header("Location:../reg/signin.php"); exit(); } ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Kemet Chronicles</title>
        <link rel="stylesheet" href="statAssets/all.min.css">
        <link rel="stylesheet" href="statAssets/bootstrap.min.css">
        <link rel="stylesheet" href="statAssets/normalize.css">
        <link rel="stylesheet" href="css/style.css">
        <!-- <link rel="stylesheet" href="css/note.css"> -->
        <link href="https://fonts.googleapis.com/css?family=Cairo&display=swap" rel="stylesheet">
        </link>
        <script src="js/gsap.js" defer></script>
        <script src="js/animation.js" defer></script>

    </head>

    <body>
        <?php include "parts/header.php" ?>

        <section class="hero" id="hero">
            <div class="container">
                <div class="left ">
                    <h2 class="Nobel">Kemet Chronicles</h2>
                    <h4 class="Nobel">Unveiling the Jewels of Egyptian Literature and Laureates.</h4>
                    <p id="animated-paragraph">Welcome to Egyptian Eye, Egyptian Eye: Peer into the heart of Egyptian
                        literature and meet the minds that shone on the world stage. Explore timeless tales, celebrate
                        Nobel
                        laureates, and uncover the brilliance that lives on.</p>
                </div>
            </div>
            <a href="#articles"><i class="tail fas fa-angle-double-down fa-2x"></i></a>
        </section>

        <!-- Start Articles -->
        <div class="articles" id="articles">
            <h2 class="main-title">Nobel Prize</h2>
            <div class="container">
                <div class="box">
                    <img src="images/zewail/zewail.jpg" alt="ahmedzewail" />
                    <div class="content">
                        <h3>Ahmedzewail <span class="date">(1946-2016)</span></h3>

                        <p>Nobel Prize in Chemistry 1999</p>
                    </div>
                    <div class="info">
                        <a href="parts/Zewail.php">Read More</a>
                        <i class="fas fa-long-arrow-alt-right"></i>
                    </div>
                </div>
                <div class="box">
                    <img src="images/mahfouz/mahfouz.jpg" alt="mahfouz" />
                    <div class="content">
                        <h3>Naguib Mahfouz <span class="date">(1911-2006)</span></h3>

                        <p>Nobel Prize in Literature </p>
                    </div>
                    <div class="info">
                        <a href="parts/mahfouz.php">Read More</a>
                        <i class="fas fa-long-arrow-alt-right"></i>
                    </div>
                </div>
                <div class="box">
                    <img class="sadat" src="images/sadat/sadat.jpg" alt="sadat" />
                    <div class="content">
                        <h3>Anwer Al sadat <span class="date">(1918-1981)</span></h3>

                        <p>Nobel Prize in peace 1978</p>
                    </div>
                    <div class="info">
                        <a href="parts/sadat.php">Read More</a>
                        <i class="fas fa-long-arrow-alt-right"></i>
                    </div>
                </div>
                <div class="box">
                    <img src="images/Elbaradei/ElBaradei.jpg" alt="baradei" />
                    <div class="content">
                        <h3>ElBaradei <span class="date">(1942)</span></h3>

                        <p>Nobel Prize in peace 2005</p>
                    </div>
                    <div class="info">
                        <a href="parts/Elbaradei.php">Read More</a>
                        <i class="fas fa-long-arrow-alt-right"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="spikes"></div>
        <!-- End Articles -->

        <!-- Start Skills -->
        <!-- End Skills -->


        <!-- Contact us -->
        <div class="contact_us" id="contact_us">
            <h2 class="title">Quick registeration</h2>
            <div class="container one plus">
                <input type="text" placeholder="Enter your email" class="email">
                <input type="submit" value="Subscribe" class="sub">
            </div>
        </div>
        <!-- End Contact us -->



        <!-- carousel -->
        <div id="carouselExampleDark" class="carousel carousel-light slide" data-bs-ride="carousel">
            <h1 class="main-title">Golden Pictures</h1>
            <div class="container">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>

                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3"
                        aria-label="Slide 4"></button>

                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="4"
                        aria-label="Slide 5"></button>

                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="5"
                        aria-label="Slide 6"></button>

                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="6"
                        aria-label="Slide 7"></button>

                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="7"
                        aria-label="Slide 8"></button>

                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="8"
                        aria-label="Slide 9">
                    </button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="9"
                        aria-label="Slide 10">
                    </button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="10"
                        aria-label="Slide 11">
                    </button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="11"
                        aria-label="Slide 12">
                    </button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="10000">
                        <img src="images\gold\IMG-20240518-WA0004.jpg" class="d-block w-100" height="700px" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>First slide label</h5>
                            <p>Some representative placeholder content for the first slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="images\gold\IMG-20240518-WA0005.jpg" class="d-block w-100" height="700px" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Second slide label</h5>
                            <p>Some representative placeholder content for the second slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="images\gold\IMG-20240518-WA0006.jpg" class="d-block w-100" height="700px" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Third slide label</h5>
                            <p>Some representative placeholder content for the third slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="images\gold\IMG-20240518-WA0007.jpg" class="d-block w-100" height="700px" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Third slide label</h5>
                            <p>Some representative placeholder content for the third slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="images\gold\IMG-20240518-WA0008.jpg" class="d-block w-100" height="700px" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Third slide label</h5>
                            <p>Some representative placeholder content for the third slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="images\gold\IMG-20240518-WA0009.jpg" class="d-block w-100" height="700px" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Third slide label</h5>
                            <p>Some representative placeholder content for the third slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="images\gold\IMG-20240518-WA0010.jpg" class="d-block w-100" height="700px" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Third slide label</h5>
                            <p>Some representative placeholder content for the third slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="images\gold\IMG-20240518-WA0011.jpg" class="d-block w-100" height="700px" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Third slide label</h5>
                            <p>Some representative placeholder content for the third slide.</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <!-- End carousel -->

        <!-- Abut&members -->
        <div class="aboutus" id="about_us">
            <h2 class="main-title">About Us</h2>
            <div class="container one">
                <p class="words">Working on real-time projects has been an incredible learning experience, allowing us
                    to
                    develop our web design skills in a practical setting. We dove headfirst into real-world challenges,
                    transforming our understanding of design from theory to reality
                    WE Are a computer science students at Benha university , The website structure will feature
                    dedicated
                    sections for Nobel laureates and literary figures. Each section will utilize captivating visuals and
                    well-organized content to present biographies, accomplishments, and the lasting impact of these
                    Egyptians on their respective fields.
                </p>
                <a href="#team_members" class="team_member">Team Members</a>
            </div>
        </div>
        <div class="team_members " id="team_members">
            <div class="container one slider-container">
                <div class="cards slider ">
                    <div class="card swiper-slide">
                        <img src="" alt="">
                        <h1>MOHAMED </h1>
                        <p>FULL-STACK</p>
                    </div>
                    <div class="card swiper-slide">
                        <img src="" alt="">
                        <h1>AMR WAEL</h1>
                        <p>FRONT-END</p>
                    </div>
                    <div class="card swiper-slide">
                        <img src="" alt="">
                        <h1>ABDELNAAEM</h1>
                        <p>BACK-END</p>
                    </div>
                    <div class="card swiper-slide">
                        <img src="" alt="">
                        <h1>MOFTA7</h1>
                        <p>BACK-END</p>
                    </div>
                    <div class="card swiper-slide">
                        <img src="" alt="">
                        <h1>AYA ZAKRIA</h1>
                        <p>FRONT-END</p>
                    </div>
                    <div class="card swiper-slide">
                        <img src="" alt="">
                        <h1>NADA</h1>
                        <p>FRONT-END</p>
                    </div>
                    <div class="card swiper-slide">
                        <img src="" alt="">
                        <h1>SALMA</h1>
                        <p>Frontend</p>
                    </div>
                    <div class="card swiper-slide">
                        <img src="" alt="">
                        <h1>HASNAA</h1>
                        <p>UI/UX</p>
                    </div>
                    <div class="card swiper-slide">
                        <img src="" alt="">
                        <h1>MAYAR</h1>
                        <p>UI/UX</p>
                    </div>
                    <i class="fa-solid fa-arrow-left prev"></i>
                    <i class="fa-solid fa-arrow-right next"></i>
                </div>
            </div>

        </div>
        <!-- End about us -->

        <!--Footer  -->

        <footer class="text-center text-lg-start text-white" style="background-color: #45526e">
            <!-- Grid container -->
            <div class=" p-4 ">
                <!-- Section: Links -->
                <section class="">
                    <!--Grid row-->
                    <div class="row">
                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-3 col-xl-3 mx-auto ">
                            <h6 class="text-uppercase mb-4 font-weight-bold">
                                Kemet Chronicles
                            </h6>
                            <p>
                                Welcome to Egyptian Eye, Egyptian Eye: Peer into the heart of Egyptian literature and
                                meet
                                the minds that shone on the world stage. Explore timeless tales, celebrate Nobel
                                laureates,
                                and uncover the brilliance that lives on.
                            </p>
                        </div>
                        <!-- Grid column -->

                        <hr class="w-100 clearfix d-md-none" />

                        <!-- Grid column -->
                        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto ">
                            <h6 class="text-uppercase mb-4 font-weight-bold">Technologies</h6>
                            <p>
                                <a class="text-white">Html</a>
                            </p>
                            <p>
                                <a class="text-white">Css</a>
                            </p>
                            <p>
                                <a class="text-white">javaScript</a>
                            </p>
                            <p>
                                <a class="text-white">Bootstrap</a>
                            </p>
                        </div>
                        <!-- Grid column -->

                        <hr class="w-100 clearfix d-md-none" />

                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto ">
                            <h6 class="text-uppercase mb-4 font-weight-bold">
                                Useful links
                            </h6>
                            <p>
                                <a class="text-white">Mohamed</a>
                            </p>
                            <p>
                                <a class="text-white">Become an Affiliate</a>
                            </p>
                            <p>
                                <a class="text-white">Shipping Rates</a>
                            </p>
                            <p>
                                <a class="text-white">Help</a>
                            </p>
                        </div>

                        <!-- Grid column -->
                        <hr class="w-100 clearfix d-md-none" />

                        <!-- Grid column -->
                        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto ">
                            <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
                            <p><i class="fas fa-home mr-3"></i> Cairo, QU 10012, EG</p>
                            <p><i class="fas fa-envelope mr-3"></i> mohamed.ibrahimfe@gmail.com</p>
                            <p><i class="fas fa-phone mr-3"></i> + 01 032 484 997</p>
                        </div>
                        <!-- Grid column -->
                    </div>
                    <!--Grid row-->
                </section>
                <!-- Section: Links -->

                <hr class="my-3">

                <!-- Section: Copyright -->
                <section class="p-3 pt-0">
                    <div class="row d-flex align-items-center">
                        <!-- Grid column -->
                        <div class="col-md-7 col-lg-8 text-center text-md-start">
                            <!-- Copyright -->
                            <div class="p-3">
                                © 2020 Copyright:
                                <a class="text-white"
                                    href="https://github.com/Mohamedibrahimfe/WEB_PHP">OurTeamMembers</a>
                            </div>
                            <!-- Copyright -->
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-5 col-lg-4 ml-lg-0 text-center text-md-end">
                            <!-- Facebook -->
                            <a class="btn btn-outline-light btn-floating m-1"
                                href="https://www.facebook.com/profile.php?id=100078061937722" class="text-white"
                                role="button"><i class="fab fa-facebook-f"></i></a>

                            <!-- Twitter -->
                            <a class="btn btn-outline-light btn-floating m-1" href="https://twitter.com/MohamedIbr84711"
                                class="text-white" role="button"><i class="fab fa-twitter"></i></a>

                            <!-- Google -->
                            <a class="btn btn-outline-light btn-floating m-1" class="text-white" role="button"><i
                                    class="fab fa-google"></i></a>

                            <!-- Instagram -->
                            <a class="btn btn-outline-light btn-floating m-1" class="text-white" role="button"><i
                                    class="fab fa-instagram"></i></a>
                        </div>
                        <!-- Grid column -->
                    </div>
                </section>
                <!-- Section: Copyright -->
            </div>
            <!-- Grid container -->
        </footer>
        <!-- Footer -->



        <!-- Linking -->
        <script src="statAssets/bootstrap.js"></script>
        <script src="statAssets/jquery.min.js"></script>
        <script src="js/toggle.js"></script>
    </body>

    </html>