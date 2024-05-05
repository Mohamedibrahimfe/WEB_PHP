<head>
    <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        list-style: none;
    }

    .navbar {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 80px;
        position: relative;
        padding: 0.5rem calc((100vw - 1200px) / 2);
        box-shadow: 0 0 10px #000000;
        -moz-box-shadow: 0 0 10px #ddd;
        box-shadow: 0 0 10px #bfbfbf;
        z-index: 1;

    }

    .nav-logo {
        color: #284e4d;
        text-decoration: none;
        font-size: 35px;
        padding: 0 2rem;
        font-weight: 900;
    }

    .nav-logo:hover {
        color: #32b138;
    }
    </style>
</head>
<nav class="navbar">
    <a class="nav-logo" href="../home.php">Kemet Chronicles
    </a>
</nav>