<!DOCTYPE html>
<!--[if IE 6]>
	<html class="no-js ie8 ie7 ie6" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">
<![endif]-->

<!--[if IE 7]>
	<html class="no-js ie8 ie7" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">
<![endif]-->

<!--[if IE 8]>
	<html class="no-js ie8" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">
<![endif]-->

<!--[if IE 9]>
	<html class="no-js ie9" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">
<![endif]-->

<!--[if (gt IE 9)|!(IE)]>
	<html class="no-js" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">
<![endif]-->
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<?php print $head; ?>

<title><?php print $head_title; ?></title>

<!-- FontAwesome -->
<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

<?php print $styles; ?>
<?php print $scripts; ?>

<link rel="apple-touch-icon-precomposed" sizes="144x144" href="apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="apple-touch-icon-57-precomposed.png">
<link rel="shortcut icon" href="favicon.png">

<!-- HTML5 element support for IE6-8 -->
<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>

<body class="<?php print $classes; ?>" <?php print $attributes;?>>
	<div id="skip-link" class="element-invisible">
		<p><a href="#skip-menu" class="element-invisible element-focusable"><?php print t('Skip to Main Menu'); ?></a><br />
		<a href="#skip-content" class="element-invisible element-focusable"><?php print t('Skip to Main Content'); ?></a></p>
	</div>
	
	<?php print $page_top; ?>
	<?php print $page; ?>
	<?php print $page_bottom; ?>
</body>
</html>