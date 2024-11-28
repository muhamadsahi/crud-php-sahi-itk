<?php
include 'koneksi.php';

$id = intval($_GET['id']);
$sql = "SELECT * FROM mahasiswa WHERE id=$id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $data = $result->fetch_assoc();
} else {
    echo "Data tidak ditemukan!";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Edit Data Mahasiswa</title>
</head>

<body>
    <h2>Edit Data Mahasiswa</h2>
    <form action="proses_edit.php" method="POST">
        <input type="hidden" name="id" value="<?php echo htmlspecialchars($data['id']); ?>">
        Nama: <input type="text" name="nama" value="<?php echo htmlspecialchars($data['nama']); ?>"><br>
        NIM: <input type="text" name="nim" value="<?php echo htmlspecialchars($data['nim']); ?>"><br>
        Email: <input type="text" name="email" value="<?php echo htmlspecialchars($data['email']); ?>"><br>
        Nom
