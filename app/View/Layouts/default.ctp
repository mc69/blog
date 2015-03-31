<?php
$cakeDescription = __d('cake_dev', 'CakePHP: Blog.');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->meta('icon');
                echo $this->Html->css('bootstrap');
                echo $this->Html->css('menu');
                echo $this->Html->css('sh/shCoreDefault');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
    <header style="max-height:100px;">
        <!--div class="header-image" style="float: left;">       
             <?= $this->Html->image('http://localhost/cakeblog/img/java-icon.png', array('style' => 'height:40px; margin: 15px 0px 15px 20px;')) ?>
        </div-->
    </header>
    <div id="container">
        <?php 
            include('default_menu.ctp');
        ?>    
        <div class="content-wrap">
            <div class="content">
                <header class="codrops-header">
                    <div class="breadcrumb" style="padding:0px;">
                        <?php  
                            if(isset($info['current_categorie'])){
                                echo $this->Html->link('Accueil',array('controller' => 'posts', 'action' => 'index'));
                                echo $this->Html->link($info['current_categorie'],array('controller' => 'posts', 'action' => 'display2',$info['current_categorie_id']),array('id'=>'current_categ'));
                                //echo '<a href="#" id="current_categ">'.$info['current_categorie'].'</a>';
                          
                                if(isset($info['current_scategorie'])){
                                    echo '<a href="#" id="current_scateg">'.$info['current_scategorie'].'</a>';
                                }
                            }
                        ?>
                    </div>
                    <!--
                    <div class="codrops-links">
                            <a class="codrops-icon codrops-icon-prev" href="http://tympanus.net/Development/TabStylesInspiration/"><span>Previous Post</span></a>
                            <a class="codrops-icon codrops-icon-drop" href="http://tympanus.net/codrops/?p=20100">
                                    <span>Back to List</span>
                            </a>
                    </div>
                    -->
                </header>
                <section class="related" style="margin: 50px 5% 20px 15%; min-height: 800px; padding: 0; ">
            
                    <?php echo $this->Session->flash(); ?>
                    <?php echo $this->fetch('content'); ?>
                    <!--a style="display: block;" href="#" id="dynamic-to-top"><span>&nbsp;</span></a-->
                </section>
            </div>
	</div><!-- /content-wrap -->

    </div><!-- /container -->
    <!--div id="footer">           
            <?php //echo $this->element('sql_dump'); ?>
    </div-->
    <div id="tags">
            <ul>
                    <li class="tag<?=rand(2, 5) ?>"><a href="#">Java</a></li> 
                    <li class="tag<?=rand(2, 5) ?>"><a href="#">Spring Framework</a></li>
                    <li class="tag<?=rand(2, 5) ?>"><a href="#">JSon - XML</a></li>
                    <li class="tag<?=rand(2, 5) ?>"><a href="#">PHP</a></li>
                    <li class="tag<?=rand(2, 5) ?>"><a href="#">MySQL</a></li>
                    <li class="tag<?=rand(2, 5) ?>"><a href="#">Hibernate</a></li>
                    <li class="tag<?=rand(2, 5) ?>"><a href="#">Design Patterns</a></li>
                    <li class="tag<?=rand(2, 5) ?>"><a href="#">JEE</a></li>
            </ul>
    </div>
    <?php
        echo $this->Html->script('jquery');
        echo $this->Html->script('classie');
        echo $this->Html->script('main');
        
        echo $this->Html->script('search');
    ?>
    
    
<script type='text/javascript' src='http://howtodoinjava.com/wp-content/plugins/syntaxhighlighter/syntaxhighlighter3/scripts/shCore.js?ver=3.0.9b'></script>
<script type='text/javascript' src='http://howtodoinjava.com/wp-content/plugins/syntaxhighlighter/syntaxhighlighter3/scripts/shBrushJava.js?ver=3.0.9b'></script>

    <script type="text/javascript">
        $(function(){
                  
            SyntaxHighlighter.all();
                        
            $('.title-image').click(function(){
                var ww = $( window ).width();
                var wd = $( document ).width();
                alert(ww+" "+wd);
            });
        });
    </script>
</body>
</html>
