<?php 
 $items=array();
 $item_name="";
 

 if($display==1 && isset($categories)){ 
    $items=$categories;
    $item_name="Categorie";
 }
 else if($display==2 && isset($posts)){
    $items=$posts; 
    $item_name="Post";
 } 
?>


    <?php foreach ($items as $item): ?>
        <div id="" class="well col-lg-5 col-lg-offset-1">
            <header>
                <div class="entry-meta00">
                    <h4 style="font-size: 13pt;">
                        <?php
                            echo $this->Html->link(
                                $item[$item_name]['libelle'],
                                array('action' => 'view', $item[$item_name]['id'])
                            );
                        ?>
                    </h4>
                    <span class="cat-links00">
                        <!--a href="http://howtodoinjava.com/category/design-patterns/creational/" rel="category tag">Creational</a>, <a href="http://howtodoinjava.com/category/design-patterns/" rel="category tag">Design Patterns</a-->
                    </span>
                </div>
                <div class="entry-title">
                    <!--a href="http://howtodoinjava.com/2014/05/09/builder-pattern-in-java/" rel="bookmark">Builder Pattern in java</a-->
                </div>
            </header>
            <div style="color:black;">
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

<!--div id="main_content">
    <?php 
    /*
    if(isset($categories)){
        foreach ($categories as $categorie): ?>
            <div id="" class="well col-lg-5 col-lg-offset-1">
                <header>
                    <div class="entry-meta00">
                        <h3>
                            <?php
                                echo $this->Html->link(
                                    $categorie['Categorie']['libelle'],
                                    array('controller'=>'categories','action' => 'view', $categorie['Categorie']['id'])
                                );
                            ?>
                            
                            <?php

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
                    <p>
                        <?= $this->Html->image('img/java.png', array('style' => 'float:left;')) ?>
                        <?php
                            echo $categorie['Categorie']['desc'];
                        ?>
                    </p>
                    <!--a class="btn btn-primary" href="#">&gt;</a-->
                </div>
                <footer class="entry-meta">
                    <span class="tag-links">
                        <!--a href="http://howtodoinjava.com/tag/builder-pattern/" rel="tag">Builder Pattern</a><a href="http://howtodoinjava.com/tag/design-pattern/" rel="tag">Design pattern</a-->
                    </span>
                </footer>
            </div>

        <?php endforeach; 
    }*/
    ?>
</div-->