<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $audit_date = $_POST['audit_date'];
    $auditor = $_POST['auditor'];
    $product_name = $_POST['product_name'];
    $model_version = $_POST['model_version'];
    $appearance_quality = $_POST['appearance_quality'];
    $function_quality = $_POST['function_quality'];
    $material_quality = $_POST['material_quality'];
    $dimension_quality = $_POST['dimension_quality'];
    $overall_quality = $_POST['overall_quality'];
    $recommendation = $_POST['recommendation'];

    $sql = "INSERT INTO product_quality_form (
        audit_date, auditor, product_name, model_version,
        appearance_quality, function_quality, material_quality,
        dimension_quality, overall_quality, recommendation
    ) VALUES (
        '$audit_date', '$auditor', '$product_name', '$model_version',
        '$appearance_quality', '$function_quality', '$material_quality',
        '$dimension_quality', '$overall_quality', '$recommendation'
    )";

    if ($conn->query($sql) === TRUE) {
        // Arahkan ke halaman sukses
        header("Location: success.html");
        exit;
    } else {
        echo "<script>alert('Terjadi kesalahan saat menyimpan data: " . $conn->error . "'); window.history.back();</script>";
    }

    $conn->close();
}
?>
