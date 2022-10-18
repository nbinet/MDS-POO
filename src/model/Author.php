<?php

class Author extends User {
    private string $telNumber;
    private array $works;

    public function __construct($firstName, $lastName, $email, $telNumber, $works) {
        parent::__construct($firstName, $lastName, $email);
        $this->telNumber = $telNumber;
        $this->setWorks($works);
    }

    public function setWorks(array $works) {
        $memo = array();
        foreach($works as $work) {
            array_push($memo, $work);
        }
        $works = $memo;
    }

    public function getWorks() : array {
        return $this->works;
    }

    public function echoArray() {
        foreach($works as $work) {
            echo $work;
        }
    }

    public function test() {
        echo ("Je suis un auteur avec un tel : $this->telNumber.<br>");
    }

    public function test2() {
        echo ("Je m'appelle $this->firstName $this->lastName et j'ai réalisé des oeuvres.<br>");
    }
}

// public function setWorks(array $works) {
//     $memo = array();
//     foreach($works as $key=>$work) {
//         array_push($memo, $key = new Work($work["code"], $work["ownwer"], $work["domain"], $work["description"], $work["isAvailable"], $work["weight"]));
//     }
//     $works = $memo;
// }