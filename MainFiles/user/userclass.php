<?php

class User {
    protected $id;
    protected $firstName;
    protected $lastName;
    protected $gender;
    protected $email;
    private $cardNumber;
    protected $password; 
    private $expirationDate;
    private $cvv;

    public function __construct($id, $firstName, $lastName, $gender, $email, $cardNumber, $password, $expirationDate, $cvv) {
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->gender = $gender;
        $this->email = $email;
        $this->cardNumber = $cardNumber;
        $this->password = $password;
        $this->expirationDate = $expirationDate;
        $this->cvv = $cvv;
    }

    public function getId() {
        return $this->id;
    }

    public function getFirstName() {
        return $this->firstName;
    }

    public function getLastName() {
        return $this->lastName;
    }

    public function getGender() {
        return $this->gender;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getCardNumber() {
        return $this->cardNumber;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getExpirationDate() {
        return $this->expirationDate;
    }

    public function getCvv() {
        return $this->cvv;
    }

   
}
class Admin extends User {
    public function __construct($id, $firstName, $lastName, $email, $password) {
        parent::__construct($id, $firstName, $lastName, null, $email, null, $password, null, null);
    }

    public static function createPredefinedAdmin() {
        return new Admin(null, 'admin', 'admin', 'admin@mail.com', '0000');
    }
}


$admin = Admin::createPredefinedAdmin();


?>