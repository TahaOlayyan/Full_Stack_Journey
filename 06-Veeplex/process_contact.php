<?php
// process_contact.php - ملف معالجة إرسال الإيميلات
require 'init.php'; // استدعاء الإعدادات اللي عملناها بالخطوة 1

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if (isset($_POST['submit_contact'])) {
    $name = htmlspecialchars(trim($_POST['sender_name']));
    $email = filter_var(trim($_POST['sender_email']), FILTER_SANITIZE_EMAIL);
    $message = htmlspecialchars(trim($_POST['message']));

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host       = $_ENV['SMTP_HOST'] ?? 'smtp.veeplex.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = $_ENV['SMTP_USER'] ?? '';
        $mail->Password   = $_ENV['SMTP_PASS'] ?? '';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = $_ENV['SMTP_PORT'] ?? 465;

        $mail->setFrom($_ENV['SMTP_USER'] ?? 'no-reply@veeplex.com', 'Veeplex Website');
        $mail->addAddress('sales@veeplex.com');
        $mail->addReplyTo($email, $name);

        $mail->isHTML(true);
        $mail->Subject = "New Lead from Veeplex Website: $name";
        $mail->Body    = "<b>Name:</b> $name <br><b>Email:</b> $email <br><br><b>Message:</b><br>" . nl2br($message);

        $mail->send();

        $_SESSION['form_msg'] = "Thank you! Your message has been sent successfully.";
        $_SESSION['msg_type'] = "success";
    } catch (Exception $e) {
        $_SESSION['form_msg'] = "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        $_SESSION['msg_type'] = "danger";
    }

    // نرجع الزبون للصفحة الرئيسية بعد ما نخلص
    header("Location: index.php");
    exit();
} else {
    // لو حد حاول يفتح الرابط هاد مباشرة بدون ما يعبي الفورم، اطرده لـ index.php
    header("Location: index.php");
    exit();
}
