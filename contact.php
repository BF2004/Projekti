<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Adi Boutique</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
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
                        <li><a href="contact.html"> Contact</a></li>
                    </ul>
                </div>
                <div class="actions">
                    <a href="signup.html"><i class="fas fa-user"></i> Login</a>
                    <a href="#"><i class="fas fa-shopping-cart"></i> Cart</a>
                </div>
            </nav>      
    <section id="contact-header">
        <div class="cont">
            <h2>About Us</h2>
            <br>
            <p>Before you contact us we will tell you more about our workers</p>

        </div>
    </section>

    <section id="people-profiles" class="section">
        <div class="person-profile">
            <img src="images/person 1.jpg" alt="Person 1">
            <h3>Blendi Fazliu</h3>
            <p>Contact: 044-123-456</p>
            <p>Email: bf@gmail.com</p>
        </div>

        <div class="person-profile">
            <img src="images/person 2.jpg" alt="Person 2">
            <h3>Arbiot Haliti</h3>
            <p>Contact: 045-987-654</p>
            <p>Email: ah@gmail.com.com</p>
        </div>
    </section>

    <section id="contact-form">
        <div class="form-container">
            <h2>Contact Us</h2>
            <form action="contact.html" method="post" onsubmit="return validateForm()">
                <input type="hidden" name="submitted" value="1">
                
                <label for="name">Your Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Your Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="message">Your Message:</label>
                <textarea id="message" name="message" rows="4" required></textarea>

                <button type="submit">Submit</button>
            </form>
        </div>
    </section>

    
  
   <section id="newsletter"class="selection-p1 section-m1">
        <div class="newstext">
    <h4>Sign up for more</h4>
    <p>Get email updates about ur special offers</p>

    </div>
    <div class="form">
        <input type="text" placeholder="Your Email Address">
        <a href="signup.html" class="normal">Sign Up</a>
    </div>
   </section>

   <footer class="section footer">
    <div class="col">
        <a href="#"><i class="fas fa-shopping-cart"></i> Adi Boutique</a>
        <h4>Contact</h4>
        <p><strong>Address:  </strong> Lipjan Rr.Lidhja Prizerenit Nr:161</p>
        <p><strong>Phone:  </strong> 044-111-222   /   045-111-222</p>
        <p><strong>Schedule:  </strong> Mon-Fri :  09-19 ; Sat : 10-18 </p>
       </div>
        <div class="follow">
            <h4>Follow Us</h4>
            <div class="icon">
                <i class="fab fa-facebook-f"></i>
                <i class="fab fa-instagram"></i>
                <i class="fab fa-twitter"></i>
                <i class="fab fa-youtube"></i>
            </div>
        
    </div>
   </footer>
   <script>
    function validateForm() {
        var nameInput = document.getElementById('name').value.trim();
        var emailInput = document.getElementById('email').value.trim();
        var messageInput = document.getElementById('message').value.trim();

        if (nameInput === '') {
            alert('Please enter your name.');
            return false;
        }

        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(emailInput)) {
            alert('Please enter a valid email address.');
            return false;
        }

        if (messageInput === '') {
            alert('Please enter your message.');
            return false;
        }

        return true;
    }
</script>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $errors = [];

    if (empty($name)) {
        $errors[] = 'Name is required.';
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Invalid email address.';
    }

    if (empty($message)) {
        $errors[] = 'Message is required.';
    }

    if (empty($errors)) {
        
        echo 'Form submitted successfully!';
    } else {
        
        echo implode('<br>', $errors);
    }
}
?>


</body>
</html>