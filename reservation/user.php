<?php
session_start();

// Check if the form is submitted
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
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Get user input
            $username = $_POST["username"];
            $password = $_POST["password"];

            // Query to fetch the user's role along with the hashed password
            $sql = "SELECT username, password, role FROM users WHERE username = :username";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':username', $username);
            $stmt->execute();

            $row = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($row && password_verify($password, $row['password'])) {
                // Authentication successful
                $user_role = $row['role'];

                // Store the user's role in a session variable
                $_SESSION['user_role'] = $user_role;

                // Redirect based on user's role
                if ($user_role === 'admin') {
                    header("Location: admin_dashboard.php");
                    exit();
                } elseif ($user_role === 'participant') {
                    header("Location: participant_dashboard.php");
                    exit();
                } elseif ($user_role === 'organizer') {
                    header("Location: organizer_dashboard.php");
                    exit();
                } else {
                    // Handle unrecognized role
                }
            } else {
                // Authentication failed, display an error message
                echo "Invalid username or password. Please try again.";
            }
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>
