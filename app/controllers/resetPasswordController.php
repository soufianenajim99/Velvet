<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

include_once(__DIR__ . '/../models/UserModel.php');
include_once(__DIR__ . '/../services/EmailService.php');
include_once(__DIR__ . '/../db.inc.php');

class ResetPasswordController
{
    public function handlePasswordResetRequest()
    {
        global $conn;

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

            if ($email) {
                $this->processPasswordReset($email, $conn);
            } else {
                echo "Invalid email address";
            }
        }
    }

    private function processPasswordReset($email, $conn)
    {
        $selector = bin2hex(random_bytes(8));
        $token = bin2hex(random_bytes(32));

        $userModel = new UserModel();
        $user = $userModel->getUserByEmail($conn, $email);

        if ($user) {
            $expiresDate = date('U') + 3600;
            $url = "http://localhost/Velvet/auth/restartPassword?selector=" . $selector . "&validator=" . bin2hex($token);

            $sql = "INSERT INTO passwordrecovery (pwd_reset_email, pwd_reset_selector, pwd_reset_token, pwd_reset_expires) VALUES (?, ?, ?, ?)";
            $stmt = mysqli_stmt_init($conn);

            if (mysqli_stmt_prepare($stmt, $sql)) {
                $hashedToken = password_hash($token, PASSWORD_DEFAULT);
                mysqli_stmt_bind_param($stmt, "ssss", $email, $selector, $hashedToken, $expiresDate);
                mysqli_stmt_execute($stmt);
                mysqli_stmt_close($stmt);

                $emailService = new EmailService();
                $emailService->sendResetPasswordEmail($user['user_name'], $email, $url);

                header("Location: " . Config::get('app.url') . "/auth/login.php?reset=success");
                exit;
            } else {
                echo "Error preparing SQL statement";
            }
        } else {
            header("Location: " . Config::get('app.url') . "/pages/Reset_password.php?user=notFound");
            exit;
        }
    }
}
