<?php 
 $items=array();
 $item_name="";
 
 if($display==1 && isset($categories)){ 
    $items=$categories;
    $item_name="Categorie";
    $item_action='display2';
 }
 else if($display==2 && isset($posts)){
    $items=$posts; 
    $item_name="Post";
    $item_action='view';
 } 
 else if($display==3 && isset($scategories)){
    $items=$scategories; 
    $item_name="SCategorie";
    $item_action='display';
 } 

?>

<?php
$item_class="well";
if($display!=2){
    $item_class .=" col-lg-3 col-lg-offset-1"; 
}
    
?>
<?php foreach ($items as $item): ?>
<div id="" class="<?= $item_class?>" style="padding: 20px;">
        <header>
            <div class="entry-meta00">
                <h3>
                    <?php
                        echo $this->Html->link(
                            $item[$item_name]['libelle'],
                            array('action' => $item_action, $item[$item_name]['id'])
                        );
                    ?>
                </h3>
                <span class="cat-links00">
                    <!--a href="http://howtodoinjava.com/category/design-patterns/creational/" rel="category tag">Creational</a>, <a href="http://howtodoinjava.com/category/design-patterns/" rel="category tag">Design Patterns</a-->
                </span>
            </div>
            <div class="entry-title">
                <!--a href="http://howtodoinjava.com/2014/05/09/builder-pattern-in-java/" rel="bookmark">Builder Pattern in java</a-->
            </div>
        </header>
        <div style="color:black;">
            <?php
                if(isset($item[$item_name]['photo'])){
                    echo $this->Html->image('http://localhost/blog/img/'.$item[$item_name]['photo'].'.png', array('style' => 'height:80px;float:left;margin-right:10px;'));
                }else if(isset($info['current_photo'])){
                    echo $this->Html->image('http://localhost/blog/img/'.$info['current_photo'].'.png', array('style' => 'height:60px;float:left;margin-right:10px;'));
                }
            ?>
            <p>The builder pattern, as name implies, is an alternative way to construct complex objects. This should be used only when you want to build different immutable objects using same object building process. </p>
            <!--a class="btn btn-primary" href="#">&gt;</a-->
        </div>
        <footer class="entry-meta">
            <span class="tag-links">
                <!--a href="http://howtodoinjava.com/tag/builder-pattern/" rel="tag">Builder Pattern</a><a href="http://howtodoinjava.com/tag/design-pattern/" rel="tag">Design pattern</a-->
            </span>
        </footer>
    </div>
<?php endforeach; ?>

