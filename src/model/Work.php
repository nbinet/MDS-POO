<?php

class Work {
    public $code;
    public string $owner;
    public string $description;
    public string $domain;
    public $isAvailable;
    public $weight;

    public function __construct($code, $owner, $domain, $description, $isAvailable, $weight) {
        $this->code = $code;
        $this->$owner = $owner;
        $this->$domain = $domain;
        $this->$description = $description;
        $this->$isAvailable = $isAvailable;
        $this->$weight = $weight;
    }

    public function getWork() {
        return $this->code . $this->owner . $this->domain;
    }

    public function getName() {
        return $this->description;
    }
}