<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../styling/login.css">
</head>

<body>
    <!-- <div class="hexagon"> -->
        <div class="form-container">
            <h2>Login</h2>
            <form action="../database/configdatalogin.php" method="POST"> <!-- Adjust the action to your target page -->
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Password">
                </div>
                <button type="submit" class="btn-submit">Login</button>

            </form>
        </div>
    <!-- </div> -->
</body>

</html>