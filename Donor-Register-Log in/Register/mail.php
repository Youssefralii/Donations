<?php
require_once "../../config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $phone = $_POST["phone"];
    $phone_number = $_POST["phone_number"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    $city = $_POST["city"];
    $comment = $_POST["comment"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];

    $query = "SELECT * FROM donors WHERE email = ?";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$email]);
    $existing_user = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($existing_user) {
        echo "This email is already registered";
        exit(); 
    }

    if ($password !== $confirm_password) {
        echo "Passwords do not match";
        exit(); 
    }

    if (!preg_match("/^(?=.*[a-zA-Z])(?=.*\d)(?=.*[$@$!%*?&])[A-Za-z\d$@$!%*?&]{8,}$/", $password)) {
        echo "Password must contain letters, numbers, and special characters and be at least 8 characters long";
        exit(); 
    }

    $query = "INSERT INTO donors (first_name, last_name, phone, phone_number, email, address, city, comment, password) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$first_name, $last_name, $phone, $phone_number, $email, $address, $city, $comment, $password]);

    if ($stmt) {
        echo "Donor account registered successfully!";
    } else {
        echo "An error occurred while registering Donor account. Please try again.";
    }
}