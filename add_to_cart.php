<?php
session_start();

$books = [
    ['id' => 1, 'title' => 'Book One', 'price' => 10.99],
    ['id' => 2, 'title' => 'Book Two', 'price' => 12.99],
    ['id' => 3, 'title' => 'Book Three', 'price' => 9.99]
];

if (isset($_GET['id'])) {
    $bookId = $_GET['id'];
    $book = array_filter($books, fn($b) => $b['id'] == $bookId);

    if (!empty($book)) {
        $book = array_shift($book);
        if (isset($_SESSION['cart'][$bookId])) {
            $_SESSION['cart'][$bookId]['quantity'] += 1;
        } else {
            $book['quantity'] = 1;
            $_SESSION['cart'][$bookId] = $book;
        }
    }
}

header("Location: index.php");
exit();
?>