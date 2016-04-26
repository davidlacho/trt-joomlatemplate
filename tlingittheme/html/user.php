<div id="user"><div>
	<?php if(JFactory::getUser()->guest):?><a class="login hasTip" title="Login :: click here to log in"  href="index.php?option=com_comprofiler&task=login"></a>
	<?php else:?>
	<a class="logout hasTip" title="Logout :: click here to log out"  href="index.php?option=com_comprofiler&task=login"></a>
	<?php endif;?>
</div></div>
