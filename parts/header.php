<head>
    <link rel="stylesheet" href="parts/header.css">
    <script src="icon.js"></script>
</head>
<nav class="navbar">
    <a class="nav-logo" href="home.php">Kemet Chronicles
    </a>
    <div class="nav-toggle" id="mobile-menu">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
    </div>
    <div class="navbar-menu">
        <li><a class="nav-link" href="#hero">Home</a></li>
        <li class="nav-item "><a href="#articles" class="nav-link">Articles</a></li>
        <li><a class="nav-link" href="#about_us">About</a></li>
        <li><a class="nav-link" href="#team_members">Our Team</a></li>
        <li><a class="nav-link" href="#contact_us">Contact</a></li>
        <!-- <li><a class="nav-link" href="reg/signin.php">Log Out</a></li> -->
        <i class="menu-toggle user fa-solid fa-user">
            <div class="menu">
                <span class="menu-item"><button onclick="document.location='reg/signin.php'">login</button></span>
                <span class="menu-item"><button onclick="document.location='reg/signup.php'">sign up</button></span>
            </div>
        </i>
    </div>
</nav>