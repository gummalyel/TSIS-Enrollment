<?php
include 'database_con.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $lrn = $_POST['lrn'];
    $status = $_POST['status'];

    // Update the status in the database
    $query = "UPDATE enrollee_info SET status = ? WHERE lrn = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ss", $status, $lrn);

    if ($stmt->execute()) {
        echo "Status updated successfully!";
    } else {
        echo "Error updating status: " . $conn->error;
    }

    $stmt->close();
    $conn->close();
}
?>
