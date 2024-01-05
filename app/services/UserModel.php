<?php
include_once(__DIR__ . '/../db.inc.php');

class UserModel
{
    public function getUserByEmail($email)
    {
        global $conn;

        $sql = "SELECT * FROM user WHERE user_email = ? AND soft_delete IS NULL";
        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql)) {
            echo "there is an error 1 " . mysqli_error($stmt);
            exit;
        }

        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);
        $res = mysqli_stmt_get_result($stmt);
        $row = mysqli_fetch_assoc($res);

        mysqli_stmt_close($stmt);

        return $row;
    }
}
