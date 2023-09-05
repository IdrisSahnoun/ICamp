<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get user input
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $role = $_POST["role"];

    // Hash the password before storing it
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Replace with your database connection code
    $db_host = 'localhost'; // Change to your database host if it's not on the same server
    $db_user = 'root';
    $db_password = '';
    $db_name = 'icamp';

    try {
        $conn = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Check if the username or email already exists in the database
        $stmt = $conn->prepare("SELECT username, email FROM users WHERE username = :username OR email = :email");
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            echo "Username or email already exists. Please choose a different one.";
        } else {
            // Insert the new user into the database
            $insert_stmt = $conn->prepare("INSERT INTO users (username, email, password, role) VALUES (:username, :email, :password, :role)");
            $insert_stmt->bindParam(':username', $username);
            $insert_stmt->bindParam(':email', $email);
            $insert_stmt->bindParam(':password', $hashed_password);
            $insert_stmt->bindParam(':role', $role);

            if ($insert_stmt->execute()) {
                // Registration successful, redirect to login page
                header("Location: ../index.html");
                exit();
            } else {
                echo "Error: Registration failed. Please try again.";
            }
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>
