<?php

class Expo {
    public $room;
    
    
    public function setRoom(array $room) {
        $this->room = $room;
    }

    public function getRoom() : array {
        return $this->room;
    }
}