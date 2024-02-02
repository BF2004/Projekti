<?php
session_start();

if (!isset($_SESSION['user_role']) || $_SESSION['user_role'] !== 'admin') {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adi Boutique</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
<nav class="start">
        <div class="logo">
            <a href="#"><i class="fas fa-shopping-cart"></i> Adi Boutique</a>
        </div>
        <div class="menu">
            <ul>
                <li><a href="Projekti.html"> Home</a></li>
                <li><a href="shop.html"> Shop</a></li>
                <li><a href="bestsellers.html"> BestSellers</a></li>
                <li><a href="todaysdeals.html"> Today's Deals</a></li>
                <li><a href="contact.html"> Contact</a></li>
            </ul>
        </div>
        <div class="actions">
            <a href="signup.html"><i class="fas fa-user"></i> Login</a>
            <a href="#"><i class="fas fa-shopping-cart"></i> Cart</a>
        </div>
    </nav>
    <h2>Welcome to the Admin Dashboard, <?php echo $_SESSION['user_role']; ?>!</h2>

   

    <a href="logout.php">Logout</a>
</body>
</html>
