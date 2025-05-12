<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "haiyansiddique70@gmail.com";  // Aapka email
    $from_email = $_POST["email"];
    $doctor = $_POST["doctor"];
    $date = $_POST["date"];
    $time = $_POST["time"];

    $subject = "New Appointment Booking";
    $message = "
        <h2>New Appointment Details</h2>
        <p><strong>Developer:</strong> $doctor</p>
        <p><strong>Date:</strong> $date</p>
        <p><strong>Time:</strong> $time</p>
        <p><strong>Client Email:</strong> $from_email</p>
    ";

    $headers = "From: $from_email\r\n";
    $headers .= "Reply-To: $from_email\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    if (mail($to, $subject, $message, $headers)) {
        echo "Appointment booked successfully! A confirmation email has been sent.";
    } else {
        echo "Error: Could not send email. Please try again later.";
    }
}
?>
