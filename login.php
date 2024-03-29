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
    <br>
    <div id="login-form">
        <h2>Login</h2>
        <form id="loginForm" action="" method="post" onsubmit="return validateForm()">
            <input type="email" placeholder="Email" id="email" required>
            <br>
            <input type="password" placeholder="Password" id="password" required>
            <br>
            <button type="submit">Login</button>
        </form>
    </div>
    <script>
        function validateForm() {
            var email = document.getElementById('email').value;
            var password = document.getElementById('password').value;

            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

            if (!emailRegex.test(email)) {
                alert('Please enter a valid email address.');
                return false;
            }

            if (password.length < 8) {
                alert('Password must be at least 8 characters long.');
                return false;
            }

            var users = authenticateUser(email, password);

            if (users === 'admin') {
             alert('Welcome our Admin');
            } else if (users === 'user') {
             alert('Login successful as user. Welcome!');
            } else {
             alert('Please try again.');
            }

            return false; 
        }
        function authenticateUser(email, password) {
            
            if (email === 'blendi@gmail.com' && password === 'blendi123') {
                return 'admin';
            } else if (email === 'user@example.com' && password === 'user1234') {
                return 'user';
            } else {
                return null;
            }
        }
        
    </script>
   <?php
   if ($_SERVER['REQUEST_METHOD'] === 'POST') {
       $email = $_POST['email'];
       $password = $_POST['password'];
   
       $authenticatedUser = authenticateUser($email, $password);
   
       if ($authenticatedUser === 'admin') {
           echo 'Welcome our Admin';
       } else if ($authenticatedUser === 'user') {
           echo 'Login successful as user. Welcome!';
       } else {
           echo 'Please try again.';
       }
   }
   
   function authenticateUser($email, $password) {
       if ($email === 'blendi@gmail.com' && $password === 'blendi123') {
           return 'admin';
       } else if ($email === 'user@example.com' && $password === 'user1234') {
           return 'user';
       } else {
           return null;
       }
   }
   ?>
   



        </body>
</html>