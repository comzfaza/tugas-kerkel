<?php
$koneksi= new PDO("mysql:host=localhost;dbname=manumakanan","root","");
if ($koneksi){
        
} 
?>
<!DOCTYPE html>
<html>
    

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Snack Web</title>
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
            
            
            <li><a href="web kami bersama.php">Home</a></li>
            <li><a href="menu.php">Menu</a></li>
            <li><a href="login.php">Login</a></li>    
            
        </ul>
    </header>



    <!-------home start------->
    <section class="home" id="home">
        <div class="home-text">
            <h1>Full Website</h1>
            <h2>Food The <br>Most Precious Things</br>
            </h2>
            <a href="menu.php" class="btn">Today's Menu</a>
        </div>

        <div class="home-jpg">
            <img src="zemua2.png">
        </div>
    </section>

    <!-------about start------->
    <section class="about" id="about">
        <div class="about-png">
            <img src="zemua2.png">
        </div>

        <div class="about-text">
            <span>Junk food</span>
            <h2>Sejarah singkat <br>Junk food</h2>
            <p>Awalnya mereka menyajikan sandwich dengan isi sosis. Namun, suatu saat mereka kehabisan sosis, akhirnya mereka mengganti dengan daging sapi cincang sebagai isian untuk rotinya.</p>
        </div>
        
    </section>

    <!-------menu start------->
</body>

</html>