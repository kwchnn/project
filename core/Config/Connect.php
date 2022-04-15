<?php 
namespace plsr\Config;

use mysqli;

interface Requires
{
    public function getConnect();
}

class Connect implements Requires
{
    private $adr = '127.0.0.1';
    private $login = 'root';
    private $password = '';
    private $db = 'project';

    public function  getConnect()
    {
        return mysqli_connect($this->adr, $this->login, $this->password, $this->db);
    }
}