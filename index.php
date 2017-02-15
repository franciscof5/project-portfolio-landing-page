<!DOCTYPE html>
<html>
<head <?php language_attributes(); ?> >
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<title><?php wp_title(); ?></title>
	<?php wp_head(); ?>
</head>
<body>
<h1>Welcome <?php echo $_SERVER["HTTP_HOST"]; ?> | F5 Sites</h1>
<p><?php if(function_exists(qtranxf_generateLanguageSelectCode))qtranxf_generateLanguageSelectCode(); ?></p>
<p><?php echo bloginfo('description'); ?></p>

<h2>Future Projects</h2>
<?php generate_content("future"); ?>

<h2>Active Projects</h2>
<?php generate_content("publish"); ?>

<h2>Projects Archivied</h2>
<?php generate_content("trash"); ?>

<?php wp_footer(); ?>
</body>
</html>

<?php
/* Developed by Francisco Matelli Matulovic - franciscomat.com - f5sites.com */
?>
