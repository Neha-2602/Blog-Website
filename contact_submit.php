<?php

require 'Database.php';
$config = require 'config.php';
$db = new Database($config['database']);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $email = $_POST['email'] ?? '';
    $query = $_POST['query'] ?? '';

    if (!empty($name) && !empty($phone) && !empty($email) && !empty($query)) {
        $insertQuery = "INSERT INTO contact_us (name, phone, email, query) VALUES (:name, :phone, :email, :query)";

        $db->query($insertQuery, [
            ':name' => $name,
            ':phone' => $phone,
            ':email' => $email,
            ':query' => $query,
        ]);

        // Use JavaScript for both alert and redirect
        echo '<script>
                alert("Your form has been submitted.");
                window.location.href = "/PRACTICE/contact";
              </script>';
        exit;
    } else {
        echo '<script>alert("Please fill in all the fields.");</script>';
    }
}
