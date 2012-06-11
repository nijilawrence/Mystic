<?php

	/**
	* @file
	* Mystic Theme
	* Created by Zyxware Technologies
	*/

?>
<div id="wrapper">
	<div id="header">
		<div class="logo">
			<?php if ($logo): ?>
				<a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
				<img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
			</a>
			<?php endif; ?>
		</div>
		<?php if($page['mainmenu']) { ?>
				<div id="main-menu">
					<?php print render($page['mainmenu']); ?>
				</div>
		<?php }	?>
	</div>
	<?php if ($messages): ?>
    <div id="messages">
      <?php print $messages; ?>
    </div>
  <?php endif; ?>
	<div id="content">
		<?php if($page['slider']) { ?>
			<div class="slider">
				<?php print render($page['slider']); ?>
			</div>
		<?php }	
		else { ?>
			<div class="slider">
				<img id="sliderpic" src="sites/all/themes/mystic/images/slider_pic1.jpg" />
			</div>
		<?php } ?>
	</div>
	<?php if ($page['footer_first'] || $page['footer_second'] || $page['footer_third']) { ?>
		<div id="footercontainer">
			<?php if ($page['footer_first']): ?>
				<div class="footerfirst">
					<?php print render($page['footer_first']); ?>
				</div>
			<?php endif; ?>
			<?php if ($page['footer_second']): ?>
			<div class="footersecond">
				<?php print render($page['footer_second']); ?>
			</div>
			<?php endif; ?>
			<?php if ($page['footer_third']): ?>
			<div class="footerthird">
				<?php print render($page['footer_third']); ?>
			</div>
			<?php endif; ?>
		</div>
	<?php }	?>
	<?php if ($page['footer']) { ?>
		<div id="footer">
			<?php print render($page['footer']); ?>
		</div>
	<?php } ?>
</div> <!-- /#wrapper -->
