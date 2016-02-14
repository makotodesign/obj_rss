<?php
class RssJson {
    protected $url;
    protected $json_res; 
    protected function seturl($v){
        $this->url=$v;
    }
    protected function getjson(){
        $source=file_get_contents($this->url);
        $source=mb_convert_encoding($source, 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');
        $this->json_res=json_decode($source, true);
        return $this->json_res;
    }

}
