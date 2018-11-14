<?php

class Model {

    public function __construct() {
	$this->db = new mysqli($this->HOST, $this->LOGIN, $this->PASS, $this->NAME);
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
