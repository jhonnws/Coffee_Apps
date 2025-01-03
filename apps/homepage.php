<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffee Shop Dashboard</title>
    <link rel="stylesheet" href="../styling/homepage.css">
</head>
<body>
    <div class="dashboard-container">
        <!-- Sidebar -->
        <aside class="sidebar">
            <h2>CoffeeShop</h2>
            <nav>
                <ul>
                    <li class="active"><a href="#">Dashboard</a></li>
                    <li><a href="#">Orders</a></li>
                    <li><a href="#">Menu</a></li>
                    <li><a href="#">Inventory</a></li>
                    <li><a href="#">Reports</a></li>
                </ul>
            </nav>
        </aside>

        <!-- Main Dashboard -->
        <main class="main-content">
            <header>
                <h1>Welcome, Barista!</h1>
                <div class="header-actions">
                    <input type="text" placeholder="Search..." />
                    <div class="notifications">
                        <span>🔔</span>
                    </div>
                    <div class="profile">
                        <img src="profile.jpg" alt="Profile Picture" />
                    </div>
                </div>
            </header>

            <section class="stats">
                <div class="stat-card">
                    <h3>Daily Sales</h3>
                    <p>$350</p>
                </div>
                <div class="stat-card">
                    <h3>Orders Today</h3>
                    <p>45</p>
                </div>
                <div class="stat-card">
                    <h3>Top Product</h3>
                    <p>Caramel Latte</p>
                </div>
                <div class="stat-card">
                    <h3>Low Stock</h3>
                    <p>Coffee Beans</p>
                </div>
            </section>

            <section class="orders">
                <h2>Recent Orders</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Order ID</th>
                            <th>Customer</th>
                            <th>Items</th>
                            <th>Total</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>#101</td>
                            <td>John Doe</td>
                            <td>2x Espresso</td>
                            <td>$10</td>
                            <td><span class="status completed">Completed</span></td>
                        </tr>
                        <tr>
                            <td>#102</td>
                            <td>Jane Smith</td>
                            <td>1x Cappuccino</td>
                            <td>$5</td>
                            <td><span class="status pending">Pending</span></td>
                        </tr>
                        <tr>
                            <td>#103</td>
                            <td>Mike Wilson</td>
                            <td>1x Latte, 1x Croissant</td>
                            <td>$12</td>
                            <td><span class="status in-progress">In Progress</span></td>
                        </tr>
                    </tbody>
                </table>
            </section>
        </main>
    </div>
</body>
</html>
