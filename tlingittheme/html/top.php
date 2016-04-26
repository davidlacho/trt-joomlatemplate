<jdoc:include type="modules" name="top" />
<?php if(false&&$this->countModules('header')){?><div id="top_more" class="top_more hasTip" title="More Information :: Click here to view "><span>info</span></div>

<script type="text/javascript">
	(function(button, target){

		button.addEvent('click',function(){
			if(button.hasClass('active')){
					button.removeClass('active');
					target.removeClass('active');
				}else{
					button.addClass('active');
					target.addClass('active');
				}
			});

		})($('top_more'), $('header'));
</script><?php } ?>