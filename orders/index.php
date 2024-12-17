<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Form</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="form-container">
        <h1>🛒 Order Your Product</h1>
        <!-- <p class="subtitle">Fill in the details below to place your order</p> -->
        <form action="/submit-order" method="POST">
            <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" id="name" name="name" placeholder="Enter your full name" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Enter your email address" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" required>
            </div>
            <div class="form-group">
                <label for="product">Product</label>
                <select id="product" name="product" required>
                    <option value="">-- Select a Product --</option>
                    <option value="product1">Americano</option>
                    <option value="product2">Butterscotch Sea Salt</option>
                    <option value="product3">Cappuccino</option>
                    <option value="product1">Espresso</option>
                    <option value="product2">Latte</option>
                    <option value="product3">Mocha</option>
                    <option value="product1">Dimsum</option>
                    <option value="product2">Kentang</option>
                    <option value="product3">Nasi Goreng</option>
                    <option value="product1">Nasi Lemak</option>
                    <option value="product2">Nasi Selimut Telur</option>
                    <option value="product3">Roti Bakar</option>
                </select>
            </div>
            <div class="form-group">
                <label for="quantity">Quantity</label>
                <input type="number" id="quantity" name="quantity" min="1" max="100" value="1" required>
            </div>
            <div class="form-group">
                <label for="message">Additional Notes</label>
                <textarea id="message" name="message" placeholder="Enter any additional details or requests"></textarea>
            </div>
            <button type="submit" class="submit-btn">Bayar</button>
            
        </form>
    </div>
    
</body>

</html>