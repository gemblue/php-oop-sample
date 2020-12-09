<?php

/**
 * Menangani koneksi database dengan class.
 */

class Connection {

    public $pdo;
    private $host =  'localhost';
    private $name =  '_contoh';
    private $username =  'app';
    private $password =  '12345678';

    public function run() {
        try {
            $this->pdo = new PDO("mysql:host=$this->host;dbname=$this->name", $this->username, $this->password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $exception) {
            echo "Connection failed: " . $exception->getMessage();
            exit;
        }
    }

}