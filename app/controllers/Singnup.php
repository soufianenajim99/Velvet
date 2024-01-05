<?php
class SignupController
{
    private $UserModel;

    public function __construct()
    {
        $this->UserModel = new Users();
    }

    public function signupUser($firstName, $lastName, $email, $password, $passwordConfirm, $userType)
    {
        $this->UserModel->__set("firstName", $firstName);
        $this->UserModel->__set("lastName", $lastName);
        $this->UserModel->__set("email", $email);
        $this->UserModel->__set("password", $password);
        $this->UserModel->__set("passwordConfirm", $passwordConfirm);
        $this->UserModel->__set("userType", $userType);

        if (!$this->emptyInput()) {
            $this->view("auth/signup?error=empty Input");
            exit();
        }

        if (!$this->invalidName()) {
            $this->view("auth/signup?error=invalid Name");
            exit();
        }

        if (!$this->invalidEmail()) {
            $this->view("auth/signup?error=invalid Email");
            exit();
        }

        if (!$this->pwdMatch()) {
            $this->view("auth/signup?error=password Mismatch");
            exit();
        }

        $hashedPassword = password_hash($this->UserModel->__get("password"), PASSWORD_DEFAULT);
        $this->UserModel->signup(
            $this->UserModel->__get("firstName"),
            $this->UserModel->__get("lastName"),
            $this->UserModel->__get("email"),
            $hashedPassword,
            $this->UserModel->__get("userType")
        );
    }

    public function view($url)
    {
        // For simplicity, let's just redirect to the specified URL
        header("Location: $url");
    }

    public function emptyInput()
    {
        return !empty($this->UserModel->__get("firstName"))
            && !empty($this->UserModel->__get("lastName"))
            && !empty($this->UserModel->__get("email"))
            && !empty($this->UserModel->__get("passwordConfirm"));
    }

    public function invalidName()
    {
        return preg_match('/^[a-zA-Z0-9]*$/', $this->UserModel->__get("firstName"))
            && preg_match('/^[a-zA-Z0-9]*$/', $this->UserModel->__get("lastName"));
    }

    public function invalidEmail()
    {
        return filter_var($this->UserModel->__get("email"), FILTER_VALIDATE_EMAIL);
    }

    public function pwdMatch()
    {
        return $this->UserModel->__get("password") === $this->UserModel->__get("passwordConfirm");
    }
}

// Example usage
$signupController = new SignupController();
$signupController->signupUser('John', 'Doe', 'john.doe@example.com', 'password123', 'password123', 'customer');