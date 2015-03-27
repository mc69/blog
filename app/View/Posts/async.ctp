<?php
foreach ($scategories as $scategorie):
    ?>
      <a href="<?php echo $this->Html->url(array('controller' => 'posts', 'action' => 'display',$scategorie['SCategorie']['id']));?>">
          <i class="fa fa-fw fa-star-o"></i>
          <span class="scategorie-title" data-url="<?php //echo Router::url(array('controller'=>'posts','action'=>'async2',$scategorie['SCategorie']['id']));?>">
                <?php echo $scategorie['SCategorie']['libelle']; ?>
          </span>
      </a>
    <?php
endforeach;
?>


