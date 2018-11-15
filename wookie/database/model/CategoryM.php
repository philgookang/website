<?php

class CategoryM extends BusinessModel {

    // public variables
    public $idx                     = null;
    public $sort_idx                = null;
    public $name                    = null;
    public $type                    = null;
    public $data                    = null;
    public $created_date_time       = null;

    // help to create quick objects
    public static function new( $data = array() ) {
        return (new CategoryM())->extend($data);
    }

    //// ------------------------------ create setter & getters

    public function setIdx( $idx ) { $this->idx = $idx; return $this; }
    public function getIdx() { return $this->idx; }

    public function setSortIdx( $sort_idx ) { $this->sort_idx = $sort_idx; return $this; }
    public function getSortIdx() { return $this->sort_idx; }

    public function setName($name) { $this->name = $name; return $this; }
    public function getName() { return $this->name; }

    public function setType($type) { $this->type = $type; return $this; }
    public function getType() { return $this->type; }

    public function setData($data) { $this->data = $data; return $this; }
    public function getData() { return $this->data; }

    public function setCreatedDateTime( $created_date_time ) { $this->created_date_time = $created_date_time; return $this; }
    public function getCreatedDateTime($format = 'Y-m-d H:i:s') { $d = new DateTime($this->created_date_time); return $d->format($format); }

    //// ------------------------------ action function

    public function getList() {

        $query	= "SELECT ";
        $query .=   " idx,name ";
		$query .= "FROM ";
        $query .=   "`category` ";
		$query .= "WHERE ";
		$query .=	"`status`=? ";
		$query .=	"ORDER BY `sort_idx` asc ";

        $status = 1;

		$params = array("i");
		$params[] = &$status;

        return array_map(function($item) {
            return CategoryM::new($item);
        }, $this->postman->returnDataList( $query, $params ));
    }

    public function get($select = ' idx,name ') {

        $query	= "SELECT ";
        $query .=   " $select ";
		$query .= "FROM ";
        $query .=   "`category` ";
		$query .= "WHERE ";
        if ($this->name!=null){ $query .= "`name`=? AND "; }
		$query .=	"`status`=? ";

        $status = 1;

        $fmt = "";
        if ($this->name!=null){ $fmt .= "s"; }

		$params = array($fmt."i");
        if ($this->name!=null){ $params[] = &$this->name; }
		$params[] = &$status;

        return CategoryM::new( $this->postman->returnDataObject($query,$params) );
    }
}
