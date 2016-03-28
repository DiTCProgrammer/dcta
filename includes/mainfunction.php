<?php

class DctaMain {

    protected $host;
    protected $user;
    protected $password;
    protected $database;
    protected $port;
    protected $conn;

    protected function connectDB() {
        $this->host = 'localhost';
        $this->user = 'root';
        $this->password = '';
        $this->database = 'dcta_trc';
        $this->conn = new mysqli($this->host, $this->user, $this->password, $this->database);
        $this->conn->set_charset("utf8");
        // Check connection
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }

        return $this->conn;
    }

}
