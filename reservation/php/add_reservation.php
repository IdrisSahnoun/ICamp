<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'connection.php';
require 'C:\Users\dell\Desktop\Site1\phpmailer\src\Exception.php';
require 'C:\Users\dell\Desktop\Site1\phpmailer\src\PHPMailer.php';
require 'C:\Users\dell\Desktop\Site1\phpmailer\src\SMTP.php';

$phone_number = $_POST['phone_number'];
$email = $_POST['email'];
$person_count = $_POST['person_count'];
$start_date = $_POST['start_date'];
$end_date = $_POST['end_date'];
$destination = $_POST['destination'];

// Prepare the SQL statement using parameterized queries
$requete = "INSERT INTO reservation (id, phone_number, email, person_count, start_date, end_date, destination)
            VALUES (NULL, ?, ?, ?, ?, ?, ?)";
$stmt = $pdo->prepare($requete);
if ($stmt->execute([$phone_number, $email, $person_count, $start_date, $end_date, $destination])) {
    echo "<h1>INSERTION AVEC SUCCESS</h1>";

// Send confirmation email
    try {
        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'idrissahnountest@gmail.com';//sender gmail
        $mail->Password = 'inhipkjnmunhraof';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;
        $mail->setFrom('idrissahnountest@gmail.com');//sender gmail
        $mail->addAddress($email);
        $mail->isHTML(true);
        $mail->Subject = "icamp";
        $mail->Body = "Reservation added";
        $mail->send();
        echo "Email sent";
    } catch (Exception $e) {
        echo "Error sending email: " . $mail->ErrorInfo;
    }
}
// Redirect to Reservation.php
header("Location: ../Reservation.php");
exit();
?>
