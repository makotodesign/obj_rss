<?php

class RssXml {
    protected $url;
    protected $xml_ress;    

    protected function seturl($v){
        $this->url=$v;
    }

    protected function getxml(){   
        $this->xml_ress=simplexml_load_file($this->url);
    }

}