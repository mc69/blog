<?php if(isset($post['Post']))
     $file=dirname(__FILE__).'/details/post_'.$post['Post']['id'].'.ctp';
     if(file_exists($file))
         include($file);
     else 
         include('details/post_0.ctp')
?>
