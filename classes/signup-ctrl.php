<?php
class signupContr
{
    private $nom;
    private $prenom;
    private $email;
    private $tel;
    private $pass;
    private $password;

    public function __construct($nom, $prenom, $email, $tel, $pass, $password)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->tel = $tel;
        $this->pass = $pass;
        $this->password = $password;
    }

    private function emptyInput()
    {
        $result = null;

        if (empty($this->nom) || empty($this->prenom) || empty($this->email) || empty($this->pass) || empty($this->password)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    private function isValidEmail()
    {
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            return false; 
        }

        return true;
    }

    private function arePasswordsMatching()
    {
        return $this->pass === $this->password;
    }

    private function performValidation()
    {
        if (!$this->emptyInput()) {
            return 'Please fill in all fields.';
        } elseif (!$this->isValidEmail()) {
            return 'Invalid email format.';
        }elseif (!$this->arePasswordsMatching()) {
            return 'Passwords do not match.';
        }

        return 'Validation successful!'; // Or perform further actions.
    }
}
