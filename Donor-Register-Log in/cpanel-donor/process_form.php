<?php
require_once "../../config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $donation_type = $_POST['donation_type'];
    $occupation = $_POST['occupation'];
    $address = $_POST['address'];
    $notes = $_POST['notes'];

    try {
        $sql = "INSERT INTO donors_form (first_name, last_name, phone, email, donation_type, occupation, address, notes) 
                VALUES (:first_name, :last_name, :phone, :email, :donation_type, :occupation, :address, :notes)";
        
        $stmt = $pdo->prepare($sql);

        $stmt->bindParam(':first_name', $first_name);
        $stmt->bindParam(':last_name', $last_name);
        $stmt->bindParam(':phone', $phone);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':donation_type', $donation_type);
        $stmt->bindParam(':occupation', $occupation);
        $stmt->bindParam(':address', $address);
        $stmt->bindParam(':notes', $notes);

        $stmt->execute();

        echo "The request has been added successfully.";
    } catch (PDOException $e) {
        echo "An error occurred: " . $e->getMessage();
    }
}
?>
