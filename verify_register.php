<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require 'connect.php';

    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    try {
        $stmt = $conn->prepare("SELECT id FROM users WHERE username = :username");
        $stmt->bindParam(':username', $username);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            echo "Esta matrícula já está em uso. Por favor, escolha outra.";
        } else {
            $stmt = $conn->prepare("INSERT INTO users (name, username, password) VALUES (:name, :username, :password)");
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':username', $username);
            $stmt->bindParam(':password', $password);
            $stmt->execute();
            header("Location: login.php");
            exit();
        }
    } catch (PDOException $e) {
        echo "Erro ao cadastrar: " . $e->getMessage();
    }
}
?>
