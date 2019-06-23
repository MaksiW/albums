<?php

class ArtistsModel {

    private $base;

    function __construct() {
        $this->base=$this->getConnection();
    }

    private function getConnection() {
        $username = 'root';
        $password = '';
        $connection = new PDO("mysql:dbname=cards;host=localhost:3309", $username, $password);
        return $connection;
    }
}