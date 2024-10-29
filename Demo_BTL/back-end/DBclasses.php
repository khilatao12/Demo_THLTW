<?php

class DBclasses
{
    public $conn;

    public function connect()
    {
        if (!$this->conn) {
            $this->conn = mysqli_connect("localhost", "root", "", "webbanhoa");
            mysqli_query($this->conn, "SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'");
            mysqli_query($this->conn, "set names 'utf8'");
            mysqli_set_charset($this->conn, "utf8");
        }
    }
    public function disconnect()
    {
        if ($this->conn) {
            mysqli_close($this->conn);
        }
    }
    public function query($sql)
    {
        $this->connect();
        $result = mysqli_query($this->conn, $sql);
        $this->disconnect();
        return $result;
    }

}