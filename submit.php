<?php
session_start();

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    if ( !isset($_POST['secure_token']) || !isset($_SESSION['secure_token']) || $_POST['secure_token'] !== $_SESSION['secure_token'] ) {
        header('Location: index.php');
        exit;
    }
    
    $full_name = trim($_POST['full_name']);
    $email     = trim($_POST['email']);
    $phone     = trim($_POST['phone']);
    $message   = trim($_POST['message']);
    
    $full_name = strip_tags(htmlspecialchars($full_name, ENT_QUOTES, 'UTF-8'));
    $email     = strip_tags(htmlspecialchars($email, ENT_QUOTES, 'UTF-8'));
    $phone     = strip_tags(htmlspecialchars($phone, ENT_QUOTES, 'UTF-8'));
    $message   = strip_tags(htmlspecialchars($message, ENT_QUOTES, 'UTF-8'));

    if(empty($full_name) || empty($email) || empty($phone) || empty($message)){
        $_SESSION['error'] = "Please fill all inputs.";
        header("Location: index.php");
        exit;
    }

    try{
        $to = "mohammedhayraleminalvaki@gmail.com";
        $subject = "New Contact Form Message";
        $headers = "From: no-reply@alvaki.com\r\n";
        $headers .= "Reply-To: $email\r\n";
        $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
        $mail_message = "Name: $full_name\nEmail: $email\nPhone: $phone\nMessage: $message";
    
      if(mail($to, $subject, $mail_message, $headers)){
        unset($_SESSION['secure_token']);
        header("Location: thank-you.php");
        exit;
    }
    else {
            $_SESSION['error'] = "Failed to send message.";
            header("Location: index.php");
            exit;
        }
    } catch (Exception $e) {
        $_SESSION['error'] = "An error occurred: " . $e->getMessage();
        header("Location: index.php");
        exit;
    }
    
} else {
    $_SESSION['error'] = "Invalid request method.";
    header("Location: index.php");
    exit;
}
?>
