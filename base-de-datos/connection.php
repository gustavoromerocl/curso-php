<?php
class Connection
{
    private $driver='mysql';
    private $host='localhost'; //ip servidor
    private $user='root'; //usuario por defecto
    private $pass='';
    private $dbName='sunny_side';
    private $charset='utf8';

    protected function conexion()
    {
        try
        {
            $pdo=new PDO("{$this->driver}:host={$this->host};dbName={$this->dbName};charset={$this->charset};", $this->user, $this->pass);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            ##https://www.php.net/manual/es/pdo.setattribute.php

            return $pdo;
        }catch(PDOException $e)
        {
            echo $e->getMessage();
        }

    }
}
?>