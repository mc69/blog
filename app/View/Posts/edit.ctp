<div class="container">
  <form role="form">
    <div class="form-group">     
      <select class="form-control" id="sel1" style="width:200px;float:left;">
          <?php foreach ($categories as $item): 
            $select=($item['Categorie']['id']==$info['current_categorie_id'])?"selected='selected'":"";
          ?>
            <option value="<?=$item['Categorie']['id']?>" <?= $select ?>><?=$item['Categorie']['libelle']?></option>
          <?php endforeach; ?>
      </select>
      <select class="form-control" id="sel1" style="width:200px;float:left;">
          <?php foreach ($scategories as $item): 
            $select=($item['SCategorie']['libelle']==$info['current_scategorie'])?"selected='selected'":"";
          ?>
            <option value="<?=$item['SCategorie']['id']?>" <?= $select ?>><?=$item['SCategorie']['libelle']?></option>
          <?php endforeach; ?>
      </select>   
      <textarea class="form-control" rows="35" id="comment"><?php echo $post['Post']['content']; ?></textarea>
    </div>
  </form>
</div>
<?php
/*
echo $this->Form->create('Post');
echo $this->Form->input('libelle');
echo $this->Form->input('content', array('rows' => '3'));
echo $this->Form->input('id', array('type' => 'hidden'));
echo $this->Form->end('Save Post');
 */
?>