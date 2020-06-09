<?php
class User {
    public string $username;
    public string $email;
    public string $password;
    public string $reTypePassword;
    public string $signUp;

    public function Register() {
        if (isset($this->signUp)) {
            if (strlen($this->password) > 3) {
                if ($this->password === $this->reTypePassword) {
                    $myData = fopen("clients.txt", "a");
                    fwrite($myData , " \n username: $this->username \n email: $this->email \n Password: $this->password \n");
                    fclose($myData);
                    header('location: home.php');
                } else {
                    return "<p class=\"alert alert-danger text-center w-50 container  \">Password mismatch</p>";
                }
            } else {
                return "<p class=\"alert alert-danger text-center w-50 container  \">Password too short</p>";
            }
        } else {
            return "<p class=\"alert alert-danger text-center w-50 container  \">An error occured</p>";
        }
    }
}