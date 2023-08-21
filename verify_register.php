<?php
    if($_SERVER["REQUEST_METHOD"] == "POST")  {
        include('connect.php');
        
        $name = $_POST['name'];
        $username = $_POST['username'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);


        $check_username = "SELECT id FROM users WHERE username = '$username' ";
        $result = $conn->query($check_username);

        if ($result->num_rows > 0){
            echo "Esta matrícula já está em uso. Por favor, escolha outra.";
        } else {
            $insert_query = "INSERT INTO users (name, username, password) VALUES ('$name', '$username', '$password')";
            
            if($conn->query($insert_query) === true) {
                $conn->close();
                header("location: login.php");
                exit();
            } else {
                echo "Erro ao cadastrar:: " . $conn->error;
            }
        }
        $conn->close();
    }


?>