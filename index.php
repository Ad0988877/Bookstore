<?php
session_start();

$books = [
    ['id' => 1, 'title' => 'Book One', 'price' => 10.99],
    ['id' => 2, 'title' => 'Book Two', 'price' => 12.99],
    ['id' => 3, 'title' => 'Book Three', 'price' => 9.99]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Bookstore</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Online Bookstore</h1>
        <h2>Book List</h2>
        <?php foreach ($books as $book): ?>
            <p><?php echo "{$book['title']} - \${$book['price']}"; ?> 
            <a href="add_to_cart.php?id=<?php echo $book['id']; ?>">Add to Cart</a></p>
        <?php endforeach; ?>
        <p><a href="view_cart.php">View Cart</a></p>
    </div>
</body>
</html>