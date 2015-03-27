<?php
//echo '<span id="cc">'.$info['current_categorie'].'</span>';
foreach ($posts as $post):
    ?>
      <a href="#"><i class="fa fa-fw fa-star-o"></i>
          <span class="post-title" >
                <?php echo $post['Post']['libelle']; ?>
          </span>
      </a>
    <?php
endforeach;
?>
<script>
    /*
    $('#current_categ').html($('#cc'));
    $('#menu_home').removeClass('no-show');
    $('#current_categ').removeClass('no-show');
    */
</script>

