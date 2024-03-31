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
    <link href="https://fonts.googleapis.com/css?family=Cairo&display=swap" rel="stylesheet">
    </link>



    <script src="js/gsap.js" defer></script>
    <script src="js/animation.js" defer></script>
    <!-- <script>
    if (document.documentElement.innerHTML.indexOf("Registration Successful!") !== -1) {
        alert("Registration successful!.");
    }
    </script> -->
</head>

<body>
    <?php include "parts/header.php" ?>

    <section class="hero">
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
                    <h3>ahmedzewail <span class="date">(1946-2016)</span></h3>

                    <p>Nobel Prize in Chemistry 1999</p>
                </div>
                <div class="info">
                    <a href="">Read More</a>
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
                    <a href="">Read More</a>
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
                    <a href="">Read More</a>
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
                    <a href="">Read More</a>
                    <i class="fas fa-long-arrow-alt-right"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="spikes"></div>
    <!-- End Articles -->


    <!-- <script src="js/bootstrap.js"></script> -->
    <!-- <script src="stat assets/bootstrap.js" ></script> -->


    <script src="js/toggle.js"></script>
</body>

</html>