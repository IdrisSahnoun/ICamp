<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get user input
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Replace with your database connection code
    $db_host = 'localhost'; // Change to your database host if it's not on the same server
    $db_user = 'root';
    $db_password = '';
    $db_name = 'icamp';

    try {
        $conn = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Query to fetch the user's data based on the username
        $sql = "SELECT id, username, password, role FROM users WHERE username = :username";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':username', $username);
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($row && password_verify($password, $row['password'])) {
            // Authentication successful
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['user_role'] = $row['role'];

            // Redirect based on user's role
            if ($row['role'] === 'admin') {
                header("Location: admin_dashboard.php");
                exit();
            } elseif ($row['role'] === 'participant') {
                header("Location: participant_dashboard.php");
                exit();
            } elseif ($row['role'] === 'organizer') {
                header("Location: organizer_dashboard.php");
                exit();
            }
        } else {
            // Authentication failed, display an error message
            echo "Invalid username or password. Please try again.";
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>
