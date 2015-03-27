<div class="menu-wrap">
    <nav class="menu">
        <div class="icon-list">
            
            <?php foreach ($categories as $categ): ?>
                <a href="#" data-ajax="ajax(<?php echo $categ['Categorie']['id'];?>, '<?php echo Router::url(array('controller'=>'posts','action'=>'async',$categ['Categorie']['id']));?>')">
                    <i class="fa fa-fw fa-star-o"></i>
                    <span><?php echo $categ['Categorie']['libelle']; ?></span>                
                </a>
            
                <div class="icon-list-2" id="slist_<?php echo $categ['Categorie']['id'];?>"  data-list="<?php echo $categ['Categorie']['libelle']; ?>">
                </div>
            <?php endforeach; ?>
                
        </div>
    </nav>
    <button class="close-button" id="close-button">Close Menu</button>
</div>
<button class="menu-button" id="open-button">Open Menu</button>
<?= $this->Html->image('http://localhost/blog/img/title.png', array('class' => 'title-image')) ?>
<div id="searchContainer">
    <div id="searchMain">
        <form id="searchForm">
            <fieldset>
                <div class="input">
                    <input type="text" name="s" id="s" value="rechercher.." />
                </div>
                <input type="submit" id="searchSubmit" value="" />
            </fieldset>
        </form>
    </div>
</div>
