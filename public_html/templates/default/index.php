<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width">
		<title>This is the default template of my CmS</title>
		<link rel="stylesheet" href= "<?php echo $this->getCurrentTemplatePath(); ?>css/style.css" type="text/css" media="all" />
		<meta name="viewport" content="width=device-width">
	</head>
	<body>
		<div class="wrapper">
			<div class="header">
			 <?php $this->widgetOutPut('logoPosition'); ?>
			</div>
			<div class="sidebar">
			 <?php $this->widgetOutPut('sidebarPosition'); ?>
			</div>
			<div class="content">
      <?php echo $this->appOutput(); ?>
			</div>
      <div class="clear"></div>
			<footer>
				aqui eh apenas o footer
			</footer>
		</div>
	</body>
</html>
