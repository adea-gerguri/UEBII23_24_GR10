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

   

}class Admin extends User {
    const adminId = null;
    const adminName = 'admin';
    const adminLastName = 'admin';
    const adminEmail = 'admin@mail.com';
    const adminPassword = 'admin1234';

    public function __construct() {
        parent::__construct(
            self::adminId,
            self::adminName,
            self::adminLastName,
            null, // Gender
            self::adminLastName,
            null, // Card number
            self::adminLastName,
            null, // Expiration date
            null // CVV
            // i lajm null  se skane nevoje me u perdor
        );
    }

    public static function createPredefinedAdmin() {
        return new Admin();
    }
}

$admin = Admin::createPredefinedAdmin();


?>