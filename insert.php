<?php

include('config.php');
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    header('Content-Type: application/json');
    $name = htmlspecialchars(trim($_POST['name']));
    $phone = htmlspecialchars(trim($_POST['phone']));

    // Check if fields are empty
    if (empty($name) || empty($phone)) {
        echo json_encode(['success' => false, 'message' => 'All fields are required.']);
        exit;
    }

    try {
        
        // Check if phone already exists
        $checkStmt = $pdo->prepare("SELECT * FROM users WHERE phone = :phone");
        $checkStmt->bindParam(':phone', $phone);
        $checkStmt->execute();
        $exists = $checkStmt->fetchColumn();

        if ($exists > 0) {
            echo json_encode(['success' => false, 'message' => 'Phone number already exists.']);
            exit;
        }

        // Insert query
        $stmt = $pdo->prepare("INSERT INTO users (name, phone) VALUES (:name, :phone)");
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':phone', $phone);
        $stmt->execute();

        echo json_encode(['success' => true, 'message' => 'thank you for using our service, now you will receive a text message with the needed info']);
    } catch (PDOException $e) {
        echo json_encode(['success' => false, 'message' => 'Database error: ' . $e->getMessage()]);
    }
}

?>