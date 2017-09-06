<?php

namespace Project2\Models;

use PDO;

abstract class Model
{
    protected $dbh;
    public function __construct()
    {
        require_once __DIR__ . '/config.php';
        $this->dbh = new PDO(DSN, USERNAME, PASSWORD);
    }
}
