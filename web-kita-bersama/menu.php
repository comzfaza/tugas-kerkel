<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="style.css" />

<link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100&display=swap" rel="stylesheet">

</head>

<body>
    <header>
        <ul class="navbar">
            <li><a href="https://www.instagram.com/exaand_/">seller centre</a></li>
            <li><a href="#bantuan">bantuan</a></li>
            <li><a href="#notifikasi">notifikasi</a></li>
        </ul>

        <a href="#" class="logo">Snack</a>
        <div class="bx bx-menu" id="menu-icon"></div>

        <ul class="navbar">


            <li><a href="home.php">Home</a></li>
            <li><a href="menu.php">Menu</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="pesanan.php">pesanan</a></li>

        </ul>
    </header>
    <div class="card mb-3">
        <img src="" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
    </div>

    <section class="menu" id="menu">
        <div class="heading">
            <span>Menu</span>
            <h2>yummy</h2>
        </div>
        
        <div class="menu-container">
            <a href="keranjang.php">
            <div class="box">
                <div class="box-png">
                    <center><img src="chiken.png"></center>
                </div>
                <h2>chicken burger</h2>
                <span>15.000</span>
                <i class='bx bx-cart-alt'></i>
            </div>
            </a>
        </div>

        <div class="menu-container">
            <div class="box">
                <div class="box-png">
                    <center><img src="special.png"></center>
                </div>
                <h2>special beef burger</h2>
                <span>17.000</span>
                <i class='bx bx-cart-alt'></i>
            </div>
        </div>

        <div class="menu-container">
            <div class="box">
                <div class="box-png">
                    <center><img src="fre.png"></center>
                </div>
                <h2>french fries</h2>
                <span>10.000</span>
                <i class='bx bx-cart-alt'></i>
            </div>
        </div>

        <div class="menu-container">
            <div class="box">
                <div class="box-png">
                    <center><img src="cc.png  "></center>
                </div>
                <h2>coca-cola</h2>
                <span>8.000</span>
                <i class='bx bx-cart-alt'></i>
            </div>
        </div>

    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>