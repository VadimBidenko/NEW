<?php

class Model {

    private $host = 'localhost';
    private $username = 'root';
    private $passwd = '';
    private $dbname = 'r2d2_nov';
    private $db;

    public function __construct() {
	$this->db = new mysqli($this->host, $this->username, $this->passwd, $this->dbname);
    }

    public function getTasks() {
	if ($this->db->connect_errno === 0) {
	    $query = 'select * from tasks';
	    $res = $this->db->query($query);
	    if ($res) {
		return $res->fetch_all(MYSQLI_ASSOC);
	    } else {
		return false;
	    }
	}
    }

}
