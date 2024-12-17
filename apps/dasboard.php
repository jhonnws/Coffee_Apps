<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../styling/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    <!-- midtrans -->
    <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js"
        data-client-key="Mid-client-UgOwhu-JjirWF2rj"></script>
</head>

<body>
    <!-- header -->
    <div class="container">
        <nav>
            <h2 class="logo">Coffee <span>Andalan.</span></h2>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#menu">Menu</a></li>
            </ul>
            <div class="container-button">
                <a href="register.php" class="button">Daftar</a>
                <a href="login.php" class="button">Login</a>
            </div>
        </nav>
    </div>

    <!-- about section -->
    <section class="about" id="about">
        <div class="about-image">
            <img src="../assets/fix.jpg" alt="">
        </div>
        <div class="about-content">
            <h2 class="heading">Coffe <span>Andalan</span></h2>
            <h3>Deskr<span>ipsi</span></h3>
            <p>Minuman populer yang dibuat dari biji kopi yang disangrai dan diseduh. Dikenal karena aroma khas dan rasa
                yang kaya, kopi sering dinikmati untuk meningkatkan energi berkat kandungan kafeinnya. Minuman ini
                tersedia dalam berbagai varian, seperti espresso, latte, dan cappuccino, dengan beragam metode
                penyeduhan, mulai dari manual hingga menggunakan mesin modern..</p>
            <a href="../about/index.php" class="button">More</a>
        </div>
    </section>

    <!--Section Menu-->
    <section class="menu" id="menu">
        <div class="menu-container">
            <header class="menu-header">
                <h1>☕ Coffee Andalan</h1>
                <p>Your daily dose of coffee perfection</p>
            </header>
            <div class="menu">
                <div class="menu-item">
                    <img src="../assets/espresso.jpg" alt="Espresso">
                    <div class="menu-info">
                        <h2>Espresso</h2>
                        <p>Espresso is a delicious concentrated form of coffee, served in shots..</p>
                        <span>Rp.37.000</span>
                    </div>
                </div>
                <div class="menu-item">
                    <img src="../assets/latte.jpg" alt="Latte">
                    <div class="menu-info">
                        <h2>Latte</h2>
                        <p>A latte or cafè latte is a milk coffee that boasts a silky layer of foam as a real highlight
                            of the drink.</p>
                        <span>Rp.27.000</span>
                    </div>
                </div>
                <div class="menu-item">
                    <img src="../assets/cappuccino.png" alt="Cappuccino">
                    <div class="menu-info">
                        <h2>Cappuccino</h2>
                        <p>A cappuccino is a beloved espresso-based hot coffee drink made with layering of espresso,
                            steamed milk, and milk foam on top.</p>
                        <span>Rp.25.0000</span>
                    </div>
                </div>
                <div class="menu-item">
                    <img src="../assets/americano.jpg" alt="Americano">
                    <div class="menu-info">
                        <h2>Americano</h2>
                        <p>An Americano is made by pouring hot water over one or two espresso shots.</p>
                        <span>Rp.35.000</span>
                    </div>
                </div>
                <div class="menu-item">
                    <img src="../assets/mocha.jpg" alt="Mocha">
                    <div class="menu-info">
                        <h2>Mocha</h2>
                        <p>A shot of espresso is combined with chocolate powder or syrup, followed by milk or cream.</p>
                        <span>Rp.30.000</span>
                    </div>
                </div>
                <div class="menu-item">
                    <img src="../assets/ButterscotchLatte.jpg" alt="Butterscotch Sea Salt Latte">
                    <div class="menu-info">
                        <h2>Butterscotch Sea Salt Latte</h2>
                        <p>Heavy cream with a little sugar and a pinch of fine sea salt.</p>
                        <span>Rp.40.000</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- include <?php ('../apps/fotter.php'); ?> -->
</body>

</html>