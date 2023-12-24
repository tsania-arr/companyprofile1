<?php
// File: delete_motor.php

// Include the database connection file
include 'koneksi.php';

// Check if the 'id' parameter is set in the POST request
if (isset($_POST['id'])) {
    $selectedId = $_POST['id'];

    // SQL query to delete the selected motorbike from the database
    $deleteQuery = "DELETE FROM data WHERE id = $selectedId";

    // Execute the query
    if (mysqli_query($koneksi, $deleteQuery)) {
        // If the query is successful, send a JSON response indicating success
        echo json_encode(['success' => true]);
    } else {
        // If the query fails, send a JSON response indicating failure
        echo json_encode(['success' => false]);
    }
} else {
    // If 'id' parameter is not set, send a JSON response indicating an invalid request
    //echo json_encode(['success' => false, 'message' => 'Invalid request']);
}
?>
