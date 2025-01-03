<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <header>
        <h1>☕ Coffee <span>Andalan</span></h1>
        <p class="top">Enjoy the perfection of <span>coffee every day</span>.</p>

        <div class="cart-icon" onclick="toggleCart()">
            <i class="fas fa-shopping-cart"></i>
            <!-- <span id="cart-count"></span> -->
        </div>
    </header>

    <button class="back-btn" onclick="history.back()" style="margin: 10px; padding: 10px; font-size: 16px; cursor: pointer;">
        &larr; Back
    </button>

    <section class="cart" id="cart">
        <h2>Keranjang Anda</h2>
        <ul id="cart-items">
        </ul>
        <div class="cart-total">
            <strong>Total: </strong><span id="total-price">Rp.0</span>
        </div>
        <button id="checkout-btn">Checkout</button>
        <p class="cart-empty" id="empty-message">Keranjang masih kosong.</p>
    </section>

    <section class="menu">
        <div class="card">
            <img alt="Americano coffee with beans and croissants" height="200" src="../assets/americano.jpg"
                width="200" />
            <div class="card-content">
                <h3>Americano</h3>
                <p class="description">A drink of similar volume and strength to regular coffee.</p>
                <div class="price">Rp.35.000</div>
                <button class="order-btn" aria-label="Order Americano"><a href="#">Pesan</a></button>
            </div>
        </div>

        <div class="card">
            <img alt="Butterscotch coffee with beans and croissants" height="200" src="../assets/ButterscotchLatte.jpg"
                width="200" />
            <div class="card-content">
                <h3>Butterscotch Sea Salt</h3>
                <p class="description">Heavy cream with a little sugar and a pinch of fine sea salt</p>
                <div class="price">Rp.40.000</div>
                <button class="order-btn" aria-label="Order Butterscotch Sea Salt Latte"><a href="#">Pesan</a></button>
            </div>
        </div>

        <div class="card">
            <img alt="Espresso coffee with beans and croissants" height="200" src="../assets/cappuccino.png"
                width="200" />
            <div class="card-content">
                <h3>Cappuccino</h3>
                <p class="description">A cappuccino is a coffee drink that today is typically composed of a single.</p>
                <div class="price">Rp.25.000</div>
                <button class="order-btn" aria-label="Order Cappuccino"><a href="#">Pesan</a></button>
            </div>
        </div>
        <div class="card">
            <img alt="Espresso coffee with beans and croissants" height="200" src="../assets/espresso.jpg"
                width="200" />
            <div class="card-content">
                <h3>Espresso</h3>
                <p class="description">A bold and invigorating shot of coffee, perfect for a quick boost of energy.</p>
                <div class="price">Rp.37.000</div>
                <button class="order-btn" aria-label="Order Espresso"><a href="#">Pesan</a></button>
            </div>
        </div>

        <div class="card">
            <img alt="Latte coffee with beans and croissants" height="200" src="../assets/latte.jpg" width="200" />
            <div class="card-content">
                <h3>Latte</h3>
                <p class="description">a milk coffee that boasts a silky layer of foam as a real highlight of the drink.
                </p>
                <div class="price">Rp.27.000</div>
                <button class="order-btn" aria-label="Order Latte"><a href="#">Pesan</a></button>
            </div>
        </div>

        <div class="card">
            <img alt="Mocha coffee with beans and croissants" height="200" src="../assets/mocha.jpg" width="200" />
            <div class="card-content">
                <h3>Mocha</h3>
                <p class="description">A bold and invigorating shot of coffee, perfect for a quick boost of energy.</p>
                <div class="price">Rp.30.000</div>
                <button class="order-btn" aria-label="Order Mocha"><a href="#">Pesan</a></button>
            </div>
        </div>
        <!-- Makanan -->
        <div class="card">
            <img alt="" height="200" src="../assets/dimsum.jpg" width="200" />
            <div class="card-content">
                <h3>Dimsum</h3>
                <p class="description">Dimsum is a traditional Chinese meal made up of small plates of dumplings and
                    other snack dishes.</p>
                <div class="price">Rp.16.000</div>
                <button class="order-btn" aria-label="Order Dimsum"><a href="#">Pesan</a></button>
            </div>
        </div>

        <div class="card">
            <img alt="" height="200" src="../assets/kentang.jpg" width="200" />
            <div class="card-content">
                <h3>Kentang</h3>
                <p class="description">A starchy tuberous vegetable native to the Americas that is consumed as a staple
                    food.</p>
                <div class="price">Rp.16.000</div>
                <button class="order-btn" aria-label="Order Kentang"><a href="#">Pesan</a></button>
            </div>
        </div>

        <div class="card">
            <img alt="" height="200" src="../assets/nasigoreng.jpg" width="200" />
            <div class="card-content">
                <h3>Nasi Goreng</h3>
                <p class="description">Food consisting of rice that is fried and mixed with cooking oil, margarine, or
                    butter.</p>
                <div class="price">Rp.24.000</div>
                <button class="order-btn" aria-label="Order Nasigoreng"><a href="#">Pesan</a></button>
            </div>
        </div>

        <div class="card">
            <img alt="" height="200" src="../assets/nasilemak.jpg" width="200" />
            <div class="card-content">
                <h3>Nasi Lemak</h3>
                <p class="description">Nasi lemak is a rice dish usually served with roasted peanuts, egg, ikan bilis
                    (anchovies).</p>
                <div class="price">Rp.28.000</div>
                <button class="order-btn" aria-label="Order Nasilemak"><a href="#">Pesan</a></button>
            </div>
        </div>

        <div class="card">
            <img alt="" height="200" src="../assets/nasiselimuttelur.jpg" width="200" />
            <div class="card-content">
                <h3>Nasi Selimut Telur</h3>
                <p class="description">The combination of fluffy rice and the soft, savory omelette creates a satisfying
                    contrast.</p>
                <div class="price">Rp.26.000</div>
                <button class="order-btn" aria-label="Order Nasiselimuttelur"><a href="#">Pesan</a></button>
            </div>
        </div>

        <div class="card">
            <img alt="" height="200" src="../assets/rotibakar.jpg" width="200" />
            <div class="card-content">
                <h3>Roti Bakar</h3>
                <p class="description">Roti Bakar is beloved for its combination of crispy exterior and soft, flavorful
                    filling.</p>
                <div class="price">Rp.16.000</div>
                <button class="order-btn" aria-label="Order Rotibakar"><a href="#">Pesan</a></button>
            </div>
        </div>

        <section class="cart">
            <h2>Keranjang Anda</h2>
            <ul id="cart-items">
                <!-- Contoh item -->
                <!--
        <li>
            <span>Americano</span>
            <span>Rp.35.000</span>
        </li>
        -->
            </ul>
            <div class="cart-total">
                <strong>Total: </strong><span id="total-price">Rp.0</span>
            </div>
            <button id="checkout-btn">Checkout</button>
            <p class="cart-empty" id="empty-message">Keranjang masih kosong.</p>
        </section>



    </section>
</body>
<script src="script.js"></script>

</html>