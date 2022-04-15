<?php

namespace plsr\Classes;

use plsr\Config\Connect;

class Query 
{
    private $first;
    private $last;
    private $room;

    public function __construct($first, $last, $room)
    {
        $this->first = $first;
        $this->last = $last;
        $this->room = $room;
    }
    // Полиморфный метод использования 
    public function getDatabase($method)
    {
        $query = new Connect();
        return mysqli_query($query->getConnect(), $method);
    }

    public function getQuery()
    {
        return "INSERT INTO users (first, last, room) VALUES ('$this->first', '$this->last', '$this->room')";
    }

    public function getData()
    {
        return "SELECT * FROM users";
    }
}