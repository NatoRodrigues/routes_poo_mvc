<?php

namespace app\models;

abstract class Conn
{
    private string $db_host = 'localhost';
    private string $db_name = 'curso_mvc';
    private string $db_user = 'root';
    private string $db_password = '';
    
    protected function connect()
    {
        try 
        {
            $conn = new \PDO("mysql:
                                   host={$this->db_host};
                                   dbname={$this->db_name}", 
                                          $this->db_user,
                                          $this->db_password);
            $conn->exec('set names utf8');
            return $conn;

        } 
            catch (\PDOException $error) 
            {
                echo $error->getMessage();
            }
            
    }

}

