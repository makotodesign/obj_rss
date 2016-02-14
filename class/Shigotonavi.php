<?php
class Shigotonavi extends RssJson {

    public function __construct($url){
        $this->seturl($url);
    }
    
    public function get_result(){
        return $this->getjson();
    }

}