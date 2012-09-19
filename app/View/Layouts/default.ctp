<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('bootstrap');
		echo $this->Html->css('bootstrap-responsive');
		echo $this->Html->css('default.css');
		echo $this->Html->css('wsc.css');
		echo $this->Html->css('http://fonts.googleapis.com/css?family=Droid+Sans:400,700');
		
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');

		echo $this->Html->script('jquery-1.7.1.min.js');
		echo $this->Html->script('bootstrap.min.js');
	?>
	
    <script type="text/javascript">
        max_width = 170;
        max_height = 80;
        $(document).ready(function(){
            $("img.logo").each(function(){
                if($(this).height()>=$(this).width()){
                    if($(this).height()>max_height){
                        $(this).height(max_height);
                    }
                }else{
                    if($(this).width()>max_width){
                        $(this).width(max_width);
                    }
                    if($(this).height()>max_height){
                        $(this).height(max_height);
                    } else {
                        blank = max_height - $(this).height();
                        if (blank > 0) $(this).css("margin-top", blank/2);
                    }
                }
            });
        });
    </script>
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
	<div id="container">
        <header class="header hero-unit">
            <h1>Web Service Catalog</h1>
            <h4><em>世界で一番Webサービスを集めるサイト!(になる予定)</em></h4>
            <ul class="nav nav-pills">
                <li class="active"><a href="/">Home</a></li>
                <li><?php echo $this->Html->link('tags', array('controller' => 'tags'))?></li>
                <li><?php echo $this->Html->link('users', array('controller' => 'users'))?></li>
            </ul>
        </header>
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
