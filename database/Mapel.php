<?php

/**
 * Menangani mapel table
 */

require '../database/Connection.php';

class Mapel {

    protected $connection;

    /**
     * Konstruktor
     */
    public function __construct() {

        $this->connection = new Connection();
        $this->connection->run();

    }

    /**
     * Get all mapel.
     */
    public function getAll() {

        $statement = $this->connection->pdo->query("SELECT * FROM mapel");
        $result = $statement->fetchAll();
        
        return $result;
    }

    /**
     * Insert mapel
     */
    public function insert($nama) {

        $sql = "INSERT INTO mapel (nama) VALUES (?)";

        $statement = $this->connection->pdo->prepare($sql)->execute([$nama]);

        return $statement;
    }

}