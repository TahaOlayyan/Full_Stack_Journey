<?php

/**
 * ====================================================================
 * PROCESS CONTACT FORM
 * Handles form submissions via PHPMailer and redirects back with status.
 * ====================================================================
 */
require_once 'init.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// 1. Security Check: Prevent direct URL access
if ($_SERVER['REQUEST_METHOD'] !== 'POST' || !isset($_POST['submit_contact'])) {
    header("Location: index.php");
    exit();
}

// 2. Sanitize and Validate Inputs (XSS Prevention)
$name    = htmlspecialchars(trim($_POST['sender_name']));
$email   = filter_var(trim($_POST['sender_email']), FILTER_SANITIZE_EMAIL);
$message = htmlspecialchars(trim($_POST['message']));

// Validate email format strictly
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $_SESSION['form_msg'] = "Invalid email format. Please try again.";
    $_SESSION['msg_type'] = "danger";
    header("Location: index.php#contact");
    exit();
}

$mail = new PHPMailer(true);

try {
    // 3. SMTP Server Configuration
    $mail->isSMTP();
    $mail->Host       = $_ENV['SMTP_HOST'] ?? 'smtp.veeplex.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = $_ENV['SMTP_USER'] ?? '';
    $mail->Password   = $_ENV['SMTP_PASS'] ?? '';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port       = $_ENV['SMTP_PORT'] ?? 465;

    // 4. Email Headers & Routing
    $mail->setFrom($_ENV['SMTP_USER'] ?? 'no-reply@veeplex.com', 'Veeplex Website');
    $mail->addAddress('tahaolayan213@gmail.com');
    $mail->addReplyTo($email, $name);

    // 5. Email Content
    $mail->isHTML(true);
    $mail->Subject = "New Lead from Veeplex Website: $name";
    $mail->Body    = "<b>Name:</b> $name <br><b>Email:</b> $email <br><br><b>Message:</b><br>" . nl2br($message);

    // 6. Execute 
    $mail->send();

    // 7. Success Feedback
    $_SESSION['form_msg'] = "Thank you! Your message has been sent successfully.";
    $_SESSION['msg_type'] = "success";
} catch (Exception $e) {
    // 8. Error Handling
    error_log("Mailer Error: {$mail->ErrorInfo}");
    $_SESSION['form_msg'] = "Message could not be sent. Please try again later.";
    $_SESSION['msg_type'] = "danger";
}

// Redirect back to the home page smoothly
header("Location: index.php");
exit();
