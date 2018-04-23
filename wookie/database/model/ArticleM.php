<?php

class ArticleM extends BusinessModel {

    // public variables
    public $idx                     = null;
    public $member_idx              = null;
    public $title                   = null;
    public $content                 = null;
    public $release_date_time       = null;
    public $created_date_time       = null;

    // help to create quick objects
    public static function new( $data = array() ) {
        // create new object
        $new = new ArticleM();
        $new->extend($data);
        return $new;
    }

    //// ------------------------------ create setter & getters

    public function setIdx( $idx ) { $this->idx = $idx; return $this; }
    public function getIdx() { return $this->idx; }

    public function setMemberIdx( $member_idx ) { $this->member_idx = $member_idx; return $this; }
    public function getMemberIdx() { return $this->member_idx; }

    public function setTitle( $title ) { $this->title = $title; return $this; }
    public function getTitle($check = false) { if ($check && !isset($this->title)) { return ''; } return $this->title; }

    public function setContent( $content ) { $this->content = $content; return $this; }
    public function getContent($check = false) { if ($check && !isset($this->content)) { return ''; } return $this->content; }

    public function setReleaseDateTime( $release_date_time ) { $this->release_date_time = $release_date_time; return $this; }
    public function getReleaseDateTime($format = 'Y-m-d H:i:s') { $d = new DateTime($this->release_date_time); return $d->format($format); }

    public function setUpdatedDateTime( $updated_date_time ) { $this->updated_date_time = $updated_date_time; return $this; }
    public function getUpdatedDateTime($format = 'Y-m-d H:i:s') { $d = new DateTime($this->updated_date_time); return $d->format($format); }

    public function setCreatedDateTime( $created_date_time ) { $this->created_date_time = $created_date_time; return $this; }
    public function getCreatedDateTime($format = 'Y-m-d H:i:s') { $d = new DateTime($this->created_date_time); return $d->format($format); }

    //// ------------------------------ action function

    public function create() {

        $data   = array( 1, $this->title, $this->content, 0, $this->release_date_time, date('Y-m-d H:i:s'), date('Y-m-d H:i:s'), 1);
        $field  = array('member_idx', 'title', 'content', 'views', 'release_date_time', 'updated_date_time', 'created_date_time', 'status');
        $fmt    = 'ississsi';

        return $this->create_omr('article', $field, $data, $fmt);
    }

    public function getList() {

        $query	= "SELECT ";
        $query .=   " `a`.`idx`, ";
        $query .=   " `m`.`nickname`, ";
        $query .=   " `a`.`title`, ";
        $query .=   " `a`.`views`, ";
        $query .=   " `a`.`release_date_time`, ";
        $query .=   " `a`.`updated_date_time` ";
		$query .= "FROM ";
        $query .=   "`article` as `a`, ";
        $query .=   "`member` as `m` ";
		$query .= "WHERE ";
        $query .=	"`a`.`member_idx`=`m`.`idx` AND ";
        if ($this->member_idx!=null) { $query .= "`a`.`member_idx`=? AND "; }
		$query .=	"`a`.`status`=? ";
		$query .=	"ORDER BY `a`.`idx` desc ";

        $status = 1;

		$fmt = "";
        if ($this->member_idx!=null) {
            $fmt .= "i";
        }

		$params = array($fmt."i");
        if ($this->member_idx!=null) {
            $params[] = &$this->member_idx;
        }
		$params[] = &$status;

        return $this->postman->returnDataList( $query, $params );
    }

    public function get() {

        $query	= "SELECT ";
        $query .=   " `a`.`idx`, ";
        $query .=   " `a`.`title`, ";
        $query .=   " `a`.`content`, ";
        $query .=   " `a`.`release_date_time` ";
		$query .= "FROM ";
        $query .=   "`article` as `a` ";
		$query .= "WHERE ";
        if ($this->idx!=null) { $query .= "`a`.`idx`=? AND "; }
        if ($this->member_idx!=null) { $query .= "`a`.`member_idx`=? AND "; }
		$query .=	"`a`.`status`=? ";

        $status = 1;

		$fmt = "";
        if ($this->idx!=null) { $fmt .= "i"; }
        if ($this->member_idx!=null) { $fmt .= "i"; }

		$params = array($fmt."i");
        if ($this->idx!=null) { $params[] = &$this->idx; }
        if ($this->member_idx!=null) { $params[] = &$this->member_idx; }
		$params[] = &$status;

        return ArticleM::new($this->postman->returnDataObject( $query, $params ));
    }

    public function update() {

        $query	= "UPDATE ";
        $query .=   "`article` ";
        $query .= "SET ";
        $query .=	"`title`=?, ";
        $query .=	"`content`=?, ";
        $query .=	"`release_date_time`=?, ";
        $query .=	"`updated_date_time`=? ";
        $query .= "WHERE ";
        $query .=	"`idx`=? ";

        $updated_date_time = date('Y-m-d H:i:s');

        $this->postman->execute($query, array(
            'ssssi', &$this->title, &$this->content, &$this->release_date_time, &$this->updated_date_time, &$this->idx
        ));
    }
}
