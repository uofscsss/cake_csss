<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		CSSS:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');

		echo $this->fetch('meta');
		//echo $this->fetch('css');

		echo $this->Html->css('bootstrap.css');
		echo $this->Html->css('bootstrap-responsive.css');     
		
		echo $this->Html->css('csss.css');

		echo $this->fetch('script');
	?>
</head>
<body>
	<div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href=".">CSSS</a>
          <div class="nav-collapse collapse">
        	<?php echo $nav; //from AppController?>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
    <div class="hero-unit">
      <img class="logo" src="img/csss_logo_color.png">
    </div>
	<div class="container">
			<?php echo $this->Session->flash(); ?>
			<?php echo $this->fetch('content'); ?>
	</div>
	<?php //echo $this->element('sql_dump'); ?>
</body>
</html>
