<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Shopping Cart</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Your Shopping Cart</h1>
        <?php if (empty($_SESSION['cart'])): ?>
            <p>Your cart is empty.</p>
        <?php else: ?>
            <ul>
                <?php 
                $total = 0;
                foreach ($_SESSION['cart'] as $book):
                    echo "<li>{$book['title']} - \${$book['price']} x {$book['quantity']}</li>";
                    $total += $book['price'] * $book['quantity'];
                endforeach;
                ?>
            </ul>
            <p>Total: $<?php echo $total; ?></p>
            <p><a href="clear_cart.php">Clear Cart</a></p>
        <?php endif; ?>
        <p><a href="index.php">Continue Shopping</a></p>
    </div>
</body>
</html>