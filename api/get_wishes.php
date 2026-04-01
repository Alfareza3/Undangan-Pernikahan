<?php
header('Content-Type: application/json');

require_once '../koneksi.php';

// Ambil semua data rsvp dan urutkan dari yang terbaru (waktu_submit DESC)
$sql = "SELECT * FROM rsvp ORDER BY waktu_submit DESC";
$result = $conn->query($sql);

$wishes = array();

if ($result && $result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $wishes[] = $row;
    }
}

// Return data dalam format JSON
echo json_encode([
    "status" => "success",
    "data" => $wishes
]);

$conn->close();
?>
