<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KhadiFoody</title>
    <link rel="stylesheet" href="home.css">
    <link rel="icon" type="image/jpg" href="images/favicon.jpg">
</head>
<body>
    <header>
        <img src="images/favicon.jpg" alt="logo"    class="header-logo">
        <h1>Welcome to KhadiFoody</h1>
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>      
                <li><a href="about.html">About</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="gallery">
            <div class="food-item">
                <img src="images/food10.jpg" alt="Delicious Food 1">
                <h2>Salmon Fish</h2>
                <button onclick="orderFood('Salmon Fish')">Order</button>
            </div>
            <div class="food-item">
                <img src="images/food2.jpg" alt="Delicious Food 2">
                <h2>Pastry</h2>
                <button onclick="orderFood('Pastry')">Order</button>
            </div>
            <div class="food-item">
                <img src="images/food3.jpg" alt="Delicious Food 3">
                <h2>amala</h2>
                <button onclick="orderFood('Fufu')">Order</button>
            </div>
            <div class="food-item">
                <img src="images/food4.jpg" alt="Delicious Food 4">
                <h2>Afang Soup</h2>
                <button onclick="orderFood('Pasta')">Order</button>
            </div>
            <div class="food-item">
                <img src="images/food5.jpg" alt="Delicious Food 5">
                <h2>Jollof Rice</h2>
                <button onclick="orderFood('Salad')">Order</button>
            </div>
            <div class="food-item">
                <img src="images/food6.jpg" alt="Delicious Food 6">
                <h2>Pepper Soup</h2>
                <button onclick="orderFood('Ice Cream')">Order</button>
            </div>
            <div class="food-item">
                <img src="images/food7.jpg" alt="Delicious Food 7">
                <h2>Ofada Stew</h2>
                <button onclick="orderFood('Tacos')">Order</button>
            </div>
            <div class="food-item">
                <img src="images/food8.jpg" alt="Delicious Food 8">
                <h2>Moin Moin</h2>
                <button onclick="orderFood('Sandwich')">Order</button>
            </div>
            <div class="food-item">
                <img src="images/food9.jpg" alt="Delicious Food 9">
                <h2>Suya</h2>
                <button onclick="orderFood('Steak')">Order</button>
            </div>
            <div class="food-item">
                <img src="images/food10.jpg" alt="Delicious Food 10">
                <h2>Ewa Agoyin
                </h2>
                <button onclick="orderFood('Smoothie')">Order</button>
            </div>
        </section>
    </main>

    <script>
        function orderFood(foodName) {
            alert("Order placed for " + foodName + " successfully!");
        }
    </script>
        <footer>
            <p>&copy     2024 KhadiFoody. All rights reserved.</p>
        </footer>
</body>
</html>