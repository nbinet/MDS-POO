<?php

class User {
    public string $firstName;
    public string $lastName;
    public string $email;

    public function __construct($firstName, $lastName, $email) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
    }

    public function test() {
        echo ("test du user $this->firstName $this->lastName qui a comme email $this->email.<br>");
    }
}