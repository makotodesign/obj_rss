<?php
require_once(__DIR__.'/header.php');

$hw=new HelloWorkWeb('osaka');
$hw=$hw->getdata();


?>
<body>
<h1>test</h1>
   <?php
   
    foreach($hw as $data){
       
        echo 'タイトル:'.$data['title'].'<br>';
        echo 'url:'.$data['url'].'<br>';
        echo 'date:'.$data['date'].'<br>';
        echo '内容:'.$data['content'].'<hr>';
     
    }
    ?>

</body>
</html>