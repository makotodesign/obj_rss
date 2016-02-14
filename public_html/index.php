<?php
require_once(__DIR__.'/header.php');

$result=new Shigotonavi('http://www.shigotonavi.co.jp/api/search/?key=6190e8a5bd7ebae2696b678763f88370&sjt1=0101000&swt1=002&spc1=013');
$result=$result->get_result();
//echo '<pre>';
//print_r($result);
//echo '</pre>';

?>
<body>
<h1>テスト出力</h1>
   <?php
    foreach($result['result'] as $row){
        
        echo '<h2>'.urldecode($row['companyname']).'</h2>';
    
    
    }
   

    ?>

</body>
</html>