<?php

namespace App;

class Dynamic extends Base
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function getProducts()
    {
        $stmt = $this->pdo->query('SELECT * FROM products LIMIT 3');

        return $stmt->fetchAll();
    }


}