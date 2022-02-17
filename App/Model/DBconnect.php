<?php
namespace App\Model;
class DBconnect
{
    public $dns;
    public $username;
    public $password;

    public function __construct()
    {
        $this->dns="mysql:host=localhost;dbname=inosts;charset=utf8";
        $this->username="root";
        $this->password="";
    }

    public function connect()
    {
        try {
            return new \PDO($this->dns,$this->username,$this->password);
        }catch (\PDOException $exception){
            die($exception->getMessage());
        }

    }

}