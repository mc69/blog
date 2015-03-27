<?php
$this->layout = false;

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>
    </title>
    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('cake.css') ?>
</head>
<body class="home">
    <header style="max-height:100px;">
        <div class="header-image">
            <?= $this->Html->image('http://cakephp.org/img/cake-logo.png', array('style' => 'height:80px')) ?>
            <h3>Get the Ovens Ready</h3>
        </div>
    </header>
    <div id="content">

    </div>
    <footer>
    </footer>
</body>
</html>