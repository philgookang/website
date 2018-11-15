<?php

class MemberM extends BusinessModel {

    // public variables
    public $idx                     = null;
    public $name                    = null;
    public $nickname                = null;
    public $email                   = null;
    public $password                = null;
    public $created_date_time       = null;
    public $status                  = 1;

    // help to create quick objects
    public static function new( $data = array() ) {
        return (new MemberM())->extend($data);
    }

    //// ------------------------------ create setter & getters

    public function setIdx( $idx ) { $this->idx = $idx; return $this; }
    public function getIdx() { return $this->idx; }

    public function setName($name) { $this->name = $name; return $this; }
    public function getName() { return $this->name; }

    public function setNickname($nickname) { $this->nickname = $nickname; return $this; }
    public function getNickname() { return $this->nickname; }

    public function setEmail($email) { $this->email = $email; return $this; }
    public function getEmail() { return $this->email; }

    public function setPassword($password) { $this->password = $password; return $this; }
    public function getPassword() { return $this->password; }

    public function setCreatedDateTime( $created_date_time ) { $this->created_date_time = $created_date_time; return $this; }
    public function getCreatedDateTime($format = 'Y-m-d H:i:s') { $d = new DateTime($this->created_date_time); return $d->format($format); }

    //// ------------------------------ action function

    public function get($select = ' idx,name ') {

        $query	= "SELECT ";
        $query .=   " $select ";
		$query .= "FROM ";
        $query .=   "`member` ";
		$query .= "WHERE ";
        if ($this->email!=null){ $query .= "`email`=? AND "; }
        if ($this->password!=null){ $query .= "`password`=? AND "; }
		$query .=	"`status`=? ";

        $fmt = "";
        if ($this->email!=null){ $fmt .= "s"; }
        if ($this->password!=null){ $fmt .= "s"; }

		$params = array($fmt."i");
        if ($this->email!=null){ $params[] = &$this->email; }
        if ($this->password!=null){ $params[] = &$this->password; }
		$params[] = &$this->status;

        return MemberM::new( $this->postman->returnDataObject($query,$params) );
    }
}
