<?php

class InternetProtocol
{
    private $ip;

    public function get(){
      if(!empty($_SERVER['HTTP_CLIENT_IP'])){
        $this->ip = $_SERVER['HTTP_CLIENT_IP'];
      }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
        $this->ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
      }else{
        $this->ip = $_SERVER['REMOTE_ADDR'];
      }
      return $this->ip;
    }
}
?>
