<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit;
}

include 'config.php';
$result = $conn->query("SELECT * FROM product_quality_form ORDER BY id ASC");
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="style.css">
<title>Data Audit</title>

<style>
.logout-btn {
    background-color: red;
    color: white;
    padding: 8px 14px;
    border-radius: 5px;
    border: none;
    cursor: pointer;
    font-weight: bold;
}
.logout-container {
    text-align: right;
    margin-bottom: 10px;
}
.title {
    text-align: center;
    font-size: 26px;
    font-weight: bold;
    margin-bottom: 18px;
}
table {
    width: 100%;
    border-collapse: collapse;
}
table th, table td {
    border: 1px solid #444;
    padding: 8px;
    text-align: center;
}
table th {
    background-color: #003366;
    color: white;
}
</style>

</head>
<body>

<div class="container data-view">

    <!-- 🔥 Logout Atas Judul -->
    <div class="logout-container">
        <form action="logout.php" method="POST">
            <button class="logout-btn">Logout</button>
        </form>
    </div>

    <!-- Judul -->
    <div class="title">Data Audit</div>

    <!-- TABEL LANGSUNG TANPA GESEKAN -->
    <table>
        <tr>
            <th>No</th>
            <th>Tanggal</th>
            <th>Auditor</th>
            <th>Produk</th>
            <th>Model</th>
            <th>Tampilan</th>
            <th>Fungsi</th>
            <th>Material</th>
            <th>Dimensi</th>
            <th>Keseluruhan</th>
            <th>Rekomendasi</th>
        </tr>

        <?php $no = 1; while($row = $result->fetch_assoc()) { ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $row['audit_date']; ?></td>
            <td><?= $row['auditor']; ?></td>
            <td><?= $row['product_name']; ?></td>
            <td><?= $row['model_version']; ?></td>
            <td><?= $row['appearance_quality']; ?></td>
            <td><?= $row['function_quality']; ?></td>
            <td><?= $row['material_quality']; ?></td>
            <td><?= $row['dimension_quality']; ?></td>
            <td><?= $row['overall_quality']; ?></td>
            <td><?= $row['recommendation']; ?></td>
        </tr>
        <?php } ?>
    </table>

</div>

</body>
</html>
