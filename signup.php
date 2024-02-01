<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $address = $_POST['address'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm-password'];
    $role = $_POST['role'];


    if (empty($name) || empty($surname) || empty($address) || empty($username) || empty($email) || empty($password) || empty($confirmPassword)) {
        echo 'All fields are required.';
        exit;
    }

    if ($password !== $confirmPassword) {
        echo 'Passwords do not match.';
        exit;
    }

  
    echo "Name: $name<br>";
    echo "Surname: $surname<br>";
    echo "Address: $address<br>";
    echo "Username: $username<br>";
    echo "Email: $email<br>";
    echo "Password: $password<br>";
    echo "Role: $role<br>";
}
?>
