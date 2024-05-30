<?php
require_once "../../config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["email"]) && isset($_POST["password"])) {
        $email = $_POST["email"];
        $password = $_POST["password"];

        $query = "SELECT * FROM donors WHERE email = ? AND password = ?";
        $stmt = $pdo->prepare($query);
        $stmt->execute([$email, $password]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user) {
            $user_id = base64_encode($user['id']);
            
            $encoded_link = "../cpanel-donor/index.php?user_id=" . $user_id;
            
            header("Location: " . $encoded_link);
            exit();
        } else {
            echo "Invalid email or password. Please try again.";
        }
    } else {
        echo "Email and password are required.";
    }
}
?>
