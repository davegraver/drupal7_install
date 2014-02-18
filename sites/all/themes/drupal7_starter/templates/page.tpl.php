<div class="container">
	<div class="row-fluid">
		<div class="span12">
			<?php if (!empty($site_name)): ?>
				<h1><a href="<?php print $front_page ?>"><?php print $site_name; ?></a></h1>
			<?php endif; ?>

			<?php if (!empty($site_slogan)): ?>
				<h2><?php print $site_slogan; ?></h2>
			<?php endif; ?>

			<?php
				// Region: Header
				print render($page['header']);
			?>
		</div>
	</div>
	
	<div class="row-fluid">
		<div class="span12">
			<a id="skip-menu"></a>
			<?php print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('class' => array('menu')))); ?>

			<?php
				// Region: Main Menu
				print render($page['main_menu']);
			?>
		</div>
	</div>

	<div class="row-fluid">
		<div class="span12">
			<a id="skip-content"></a>

			<?php print $messages; ?>

			<?php print render($title_prefix); ?>
			<?php if (!empty($title)): ?>
				<h2><?php print $title; ?></h2>
			<?php endif; ?>
			<?php print render($title_suffix); ?>

			<?php if (!empty($tabs)): ?>
				<?php print render($tabs); ?>
			<?php endif; ?>

			<?php
				// Region: Content Top
				print render($page['content_top']);

				// Region: Content
				print render($page['content']);

				// Region: Content Bottom
				print render($page['content_bottom']);
			?>

			<a class="back-to-top" href="#"><i class="fa fa-angle-up"><span class="sr-only">Back to Top</span></i></a>
		</div>
	</div>

	<div class="row-fluid">
		<div class="footer">
			<?php
				// Region: Footer
				print render($page['footer']);
			?>
		</div>
	</div>
</div>

<?php
	$theme_path = drupal_get_path('theme', 'drupal7_starter');
	drupal_add_js($theme_path . '/js/enquire.min.js', array('type' => 'file', 'scope' => 'footer'));
	drupal_add_js($theme_path . '/js/scripts.js', array('type' => 'file', 'scope' => 'footer'));
?>