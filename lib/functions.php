<?php
/*サニタイジング用関数*/
function h($v){
    return htmlspecialchars($v,ENT_QUOTES,'UTF-8');
}

//class auto loader
spl_autoload_register(function($val){
    require_once(__DIR__.'/../class/'.$val.'.php');
}); 