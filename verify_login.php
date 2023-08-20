<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include('connect.php');

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            $_SESSION['user_id'] = $row['id'];
            header("Location: index.php");
        } else {
            $_SESSION['senha_incorreta'] = true;
            header('Location: login.php');
            exit();
        }
    } else {
        $_SESSION['user_incorreto'] = true;
        header('Location: login.php');
        exit();
    }

    $conn->close();
}
?>