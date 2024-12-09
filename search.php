<?php
include('config.php');

// Get the search term
$search = isset($_GET['search']) ? $_GET['search'] : '';

if (!empty($search)) {
    try {
       
        // $sql = "SELECT id, name, phone FROM users 
        //         WHERE name LIKE :search OR phone LIKE :search 
        //         LIMIT 10";
                $sql = "SELECT id, name, phone FROM users 
                WHERE name = :search OR phone = :search
                LIMIT 10";

        $stmt = $pdo->prepare($sql);
        $stmt->execute(['search' => "$search"]);
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        echo json_encode($results);
    } catch (PDOException $e) {
    
        echo json_encode(['error' => 'Database error: ' . $e->getMessage()]);
    }
} else {

    echo json_encode([]);
}
