<?php

include_once(__DIR__ . '/../db.inc.php');

class UserModel
{
    public function getUserByEmail($conn, $email)
    {
        $sql = "SELECT * FROM user WHERE user_email = ? AND soft_delete IS NULL";
        $stmt = mysqli_stmt_init($conn);

        if (mysqli_stmt_prepare($stmt, $sql)) {
            mysqli_stmt_bind_param($stmt, "s", $email);
            mysqli_stmt_execute($stmt);
            $res = mysqli_stmt_get_result($stmt);
            $row = mysqli_fetch_assoc($res);
            mysqli_stmt_close($stmt);

            return $row;
        } else {
            echo "Error preparing SQL statement";
            exit;
        }
    }

    public function impriment($produit){

    }
}
