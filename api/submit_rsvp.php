<?php
header('Content-Type: application/json');

// Memasukkan koneksi dari folder di luar api (root folder)
require_once '../koneksi.php';

// Mendapatkan data JSON yang dikirimkan via fetch di JS
// Karena di JS kita akan menggunakan JSON.stringify(), kita tangkap menggunakan php://input
$inputJSON = file_get_contents('php://input');
$input = json_decode($inputJSON, TRUE); // Convert JSON ke PHP array

// Cek apakah data tersedia
if (isset($input['nama'])) {
    
    // Ambil data
    $nama = $conn->real_escape_string($input['nama']);
    $jumlah_tamu = (int) $input['jumlah_tamu'];
    $status_kehadiran = $conn->real_escape_string($input['status_kehadiran']);
    $pesan = $conn->real_escape_string($input['pesan'] ?? '');

    // Query insert
    $sql = "INSERT INTO rsvp (nama, jumlah_tamu, status_kehadiran, pesan) VALUES (?, ?, ?, ?)";
    
    // Menggunakan prepared statement untuk keamanan dari SQL Injection
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("siss", $nama, $jumlah_tamu, $status_kehadiran, $pesan);
        
        if ($stmt->execute()) {
            http_response_code(201); // Created
            echo json_encode([
                "status" => "success", 
                "message" => "Data berhasil disimpan"
            ]);
        } else {
            http_response_code(500); // Server error
            echo json_encode([
                "status" => "error", 
                "message" => "Gagal mengeksekusi query: " . $stmt->error
            ]);
        }
        $stmt->close();
    } else {
        http_response_code(500);
        echo json_encode([
            "status" => "error", 
            "message" => "Gagal menyiapkan statement database"
        ]);
    }
} else {
    http_response_code(400); // Bad Request
    echo json_encode([
        "status" => "error", 
        "message" => "Data tidak lengkap"
    ]);
}

$conn->close();
?>
