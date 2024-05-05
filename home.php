<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kemet Chronicles</title>
    <link rel="stylesheet" href="stat assets/all.min.css">
    <link rel="stylesheet" href="stat assets/bootstrap.min.css">
    <link rel="stylesheet" href="stat assets/normalize.css">
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
                    literature and meet the minds that shone on the world stage. Explore timeless tales, celebrate Nobel
                    laureates, and uncover the brilliance that lives on.</p>
            </div>
            <!-- <div class="right">
                <img class="main-pic" src="images/fun-3d-cartoon-illustration-indian-businessman.jpg" alt="">
            </div> -->
        </div>
        <a href="#articles"><i class="tail fas fa-angle-double-down fa-2x"></i></a>
    </section>

    <!-- Start Articles -->
    <div class="articles" id="articles">
        <h2 class="main-title">Nobel Prize</h2>
        <div class="container">
            <div class="box">
                <img src="images/zewail.jpg" alt="ahmedzewail" />
                <div class="content">
                    <h3>Ahmedzewail <span class="date">(1946-2016)</span></h3>

                    <p>Nobel Prize in Chemistry 1999</p>
                </div>
                <div class="info">
                    <a href="parts/Aya.php">Read More</a>
                    <i class="fas fa-long-arrow-alt-right"></i>
                </div>
            </div>
            <div class="box">
                <img src="images/mahfouz.jpg" alt="mahfouz" />
                <div class="content">
                    <h3>Naguib Mahfouz <span class="date">(1911-2006)</span></h3>

                    <p>Nobel Prize in Literature </p>
                </div>
                <div class="info">
                    <a href="parts/Aya.php">Read More</a>
                    <i class="fas fa-long-arrow-alt-right"></i>
                </div>
            </div>
            <div class="box">
                <img class="sadat" src="images/sadat.jpg" alt="sadat" />
                <div class="content">
                    <h3>Anwer Al sadat <span class="date">(1918-1981)</span></h3>

                    <p>Nobel Prize in peace 1978</p>
                </div>
                <div class="info">
                    <a href="parts/Aya.php">Read More</a>
                    <i class="fas fa-long-arrow-alt-right"></i>
                </div>
            </div>
            <div class="box">
                <img src="images/ElBaradei.jpg" alt="baradei" />
                <div class="content">
                    <h3>ElBaradei <span class="date">(1942)</span></h3>

                    <p>Nobel Prize in peace 2005</p>
                </div>
                <div class="info">
                    <a href="parts/Aya.php">Read More</a>
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
            <input type="submit" value="Subscibe" class="sub">
        </div>
    </div>
    <!-- End Contact us -->

    <!-- Start about us -->
    <div class="aboutus" id="about_us">
        <h2 class="main-title">About Us</h2>
        <div class="container one">
            <p class="words">Working on real-time projects has been an incredible learning experience, allowing us to
                develop our web design skills in a practical setting. We dove headfirst into real-world challenges,
                transforming our understanding of design from theory to reality
                WE Are a computer science students at Benha university , The website structure will feature dedicated
                sections for Nobel laureates and literary figures. Each section will utilize captivating visuals and
                well-organized content to present biographies, accomplishments, and the lasting impact of these
                Egyptians on their respective fields.
            </p>
            <a href="#team_members" class="team_member">Team Members</a>
        </div>
    </div>
    <!-- Team Members -->
    <div class="team_members " id="team_members">
        <div class="container one slider-container">
            <div class="cards slider ">
                <div class="card swiper-slide">
                    <img src="" alt="">
                    <h1>MOHAMED Ibrahim</h1>
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
                    <p>UI/UX</p>
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

    <!-- <script src="js/bootstrap.js"></script> -->
    <!-- <script src="stat assets/bootstrap.js" ></script> -->
    <!-- note -->



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/toggle.js"></script>
    <script src="js/note.js"></script>

</body>

</html>