<?php

class CardsModel
{
    private $base;

    function __construct()
    {
        $this->base = $this->getConnection();
    }

    private function getConnection()
    {
        $username = 'root';
        $password = '';
        $connection = new PDO("mysql:dbname=cards;host=localhost:3309", $username, $password);
        return $connection;
    }

    function add($args)
    {
        $sql = "INSERT INTO `Cards`(Cover, AlbumName, IssueYear, Duration, BuyDate, BuyPrice, StorageCode) 
        VALUES (" . $args['Cover'] . ', ' . $args['Album'] . ', ' . $args['Year'] . ', ' . $args['Duration'] . ', ' . date('"y.m.d"') . ', ' . $args['BuyPrice'] . ', ' . $args['StorageCode'] . "); ";
        $this->base->query($sql);
    }

    function getOne($id)
    {
        $sql = "SELECT * FROM `Cards` WHERE id = ?";
        $data = $this->base->prepare($sql);
        $data->execute([$id]);
        return $data->fetchAll();
    }

    function getAll()
    {
        $sql = "SELECT * FROM `Cards`";
        $data = $this->base->prepare($sql);
        $data->execute();
        return $data->fetchAll();
    }
}