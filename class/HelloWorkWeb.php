<?php
class HelloWorkWeb extends RssXml{
    //rss1形式なのだ
    private $pref=array(
        'hyogo'=>'http://pw.skr.jp/hrs/rdf/hw-28-22.rdf',
        'osaka'=>'http://pw.skr.jp/hrs/rdf/hw-27-22.rdf',
        'kyoto'=>'http://pw.skr.jp/hrs/rdf/hw-26-22.rdf'
    
    );
        
    private $res = array();
   
    public function __construct($pref){
        
        $this->seturl($this->pref[$pref]);
    }
    private function setres($v){
        $this->res[]=$v;
    }
    //取得結果を２次元配列にする
    public function getdata(){
        $this->getxml();
        foreach($this->xml_ress->item as $item){            
           if(mb_stripos($item->title,'Ｗｅｂ') !== false){
            //dateを取得    
            $dc = $item->children('http://purl.org/dc/elements/1.1/');
            //contentデータ取得
            $content = $item->children('http://purl.org/rss/1.0/modules/content/');    
            $this->setres(array('title'=>$item -> title,'url' => $item -> link, 'date' => date('Y年m月d日',strtotime($dc->date)),'content'=> $content -> encoded)); 
           }
        
        }
        return $this->res;
        
    }
}