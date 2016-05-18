<?php

if(!defined('DS'))define('DS', DIRECTORY_SEPARATOR);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"
	xml:lang="<?php echo $this->language; ?>"
	lang="<?php echo $this->language; ?>">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=100" />
<link rel="stylesheet" href="templates/system/css/system.css" type="text/css" />
<link rel="stylesheet" href="templates/<?php echo $this->template ?>/css/template.css" type="text/css" />
<link rel="stylesheet" href="templates/<?php echo $this->template ?>/css/article.css" type="text/css" />
<link rel="stylesheet" href="templates/<?php echo $this->template ?>/css/forms.css" type="text/css" />
<link rel="stylesheet" href="templates/<?php echo $this->template ?>/css/tooltips.css" type="text/css" />
<link rel="stylesheet" href="/marker-info-tabs/css/marker-info.css" type="text/css" />
<jdoc:include type="head" />
<style type="text/css">
</style>
</head>
<body>
<div id="page_container">
	<?php include 'html'.DS.'header.php';?>
	<div id="top">
		<div class="top_container" >
		<?php include 'html'.DS.'top.php';?>
		</div>
	</div>
		<div class="main_c" class=""> <div id="u_title"><?php echo JFactory::getApplication()->getCfg( 'sitename' );?><p>Yak’éi yee <u>x</u>wsateení! Welcome!</p></div></div>
	
	<div id="background_images">
		<div class="main_e"></div><div></div>
		<div class="main_f"></div>
	</div>
	
	
	<jdoc:include type="message" />
	<jdoc:include type="modules" name="special" />
	
	<div id="main">
	<?php if(JRequest::getVar("option","")=="com_mediamapserver"):?> 
	<div class="apps">
		<div class="istore hasTip" title="Apple App :: Get this map for your iphone, ipad, or ipod touch"></div>
		<div class="android hasTip" title="Android App :: Get this map on your android phone"></div>
	</div>
	<?php endif;?>
		<div class="main_container">
			
			
			<div class="main_content">
				<jdoc:include type="component" />
			</div>
			
			
		</div>
		<?php include 'html'.DS.'share.php';?>
		<?php include 'html'.DS.'user.php';?>
	</div><div></div>
	<div id="foot">
		<div class="foot_container" >
		<!-- <?php echo dirname(__FILE__).DS.'html'.DS.'footer.php'; ?> -->
		<?php 
		
		include dirname(__FILE__).DS.'html'.DS.'footer.php';?>
		</div>
	</div>
	<div class="main_a"></div>
	<div class="main_b"></div>
	

	
	
</div>
	<?php include 'html'.DS.'pageTwo.php';?>
</body>
</html>
