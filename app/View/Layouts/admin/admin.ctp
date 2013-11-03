<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title><?php echo $title_for_layout?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <!-- Bootstrap -->
		<?php 
			echo $this->Html->css('vendor/bootstrap');;
			echo $this->Html->css('admin');;
		?>
    </head>
    <body>
       <?php echo $this->element('admin/header'); ?>
		
		<?php
			echo $this->fetch('content');
		?>
		
        <?php
			echo $this->Html->script('vendor/jquery-2.0.2.min');
			echo $this->Html->script('vendor/bootstrap.min');
		?>
    </body>
</html>
