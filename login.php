<?php
session_start();

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == "admin" && $password == "12345") {
        $_SESSION['admin'] = true;
        header("Location: view_data.php");
        exit;
    } else {
        $error = "Username atau password salah!";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="style.css">
<title>Login Admin</title>
</head>
<body>
<div class="container">
<h2>Login Admin</h2>

<?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>

<form method="POST">
    <label>Username</label>
    <input type="text" name="username" required>
    
    <label>Password</label>
    <input type="password" name="password" required>
    
    <button type="submit" name="login">Masuk</button>
</form>

</div>
</body>
</html>