<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gadget Store</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
    <link rel="stylesheet" href="./styles/navStyle.css">
</head>

<body>
    <section class="nav">
        <nav>
            <div class="logo">ABCd</div>
            <div class="searchbar">
                <input type="text" placeholder="Search">
                <i class="fa-solid fa-magnifying-glass"></i>
            </div>
            <div class="cart" onclick="toggleCart()">
                <i class="fa-solid fa-cart-shopping"></i>
                <div class="number">1</div>
            </div>
        </nav>
        <div class="cart-container">
            <div class="close-btn" onclick = "toggleCart()">X</div>
            <h1>Cart</h1>
            <table border="2">
                <tr>
                    <th>ABcd</th>
                    <th>ABcd</th>
                    <th>ABcd</th>
                </tr>
                <tr>
                    <td>ABCd</td>
                    <td>ABCd</td>
                    <td>ABCd</td>
                </tr>
            </table>
        </div>
    </section>
    <section class="bottom-nav">
        
    </section>
    <script>
        function toggleCart() {
            const cartContainer = document.querySelector('.cart-container');
            cartContainer.classList.toggle('active');
        }
    </script>
</body>

</html>