<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Confirmation - KhadiFoody</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="icon" type="image/png" href="assets/images/favicon.png">
</head>
<body>
    <header>
        <h1>Order Confirmation</h1>
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="order-confirmation">
            <h2>Thank you for your order!</h2>
            <p>Your order details:</p>
            <ul>
                <li><strong>Food Item:</strong> <?php echo htmlspecialchars($_POST['foodName']); ?></li>
                <li><strong>Quantity:</strong> <?php echo htmlspecialchars($_POST['quantity']); ?></li>
                <li><strong>Name:</strong> <?php echo htmlspecialchars($_POST['name']); ?></li>
                <li><strong>Email:</strong> <?php echo htmlspecialchars($_POST['email']); ?></li>
               
            </ul>
            <p>We will process your order shortly.</p>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 KhadiFoody. All rights reserved.</p>
    </footer>
</body>
</html>
