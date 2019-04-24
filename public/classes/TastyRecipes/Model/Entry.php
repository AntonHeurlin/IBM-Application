<?php

namespace TastyRecipes\Model;



class Entry implements \JsonSerializable{

    public $nick_name;
    public $msg;
    public $timestamp;
    public $deleted;


    public function __construct($nick_name, $msg) {
        $this->nick_name = $nick_name;
        $this->msg = $msg;
        $this->timestamp = date('Y-m-d H:i:s');
        $this->deleted = false;
    }


    public function getNickName() {
        return $this->nick_name;
    }


    public function getMsg() {
        return $this->msg;
    }


    public function getTimestamp() {
        return $this->timestamp;
    }

    public function isDeleted() {
        return $this->deleted;
    }


    public function setDeleted($deleted) {
        $this->deleted = $deleted;
    }

    public function jsonSerialize(){
      $json_obj = new \stdClass;
      $json_obj->nick_name = $this->nick_name;
      $json_obj->msg = $this->msg;
      $json_obj->timestamp = $this->timestamp;
      $json_obj->deleted = $this->deleted;
      return $json_obj;
    }

}
