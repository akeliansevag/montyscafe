<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>MontysCafe</title>

	<link rel="apple-touch-icon" href="<?= get_template_directory_uri() ?>/assets/images/apple-touch-icon.png" sizes="180x180" type="image/png" />
	<link rel="icon" href="<?= get_template_directory_uri() ?>/assets/images/favicon-32x32.svg" sizes="32x32" type="image/svg" />
	<link rel="icon" href="<?= get_template_directory_uri() ?>/assets/images/favicon-16x16.svg" sizes="16x16" type="image/svg" />

	<meta name="author" content="MontysCafe">
	<meta name="keywords" content="">
	<meta name="description" content="">

	<meta property="og:locale" content="en" />
	<meta property="og:title" content="MontysCafe" />
	<meta property="og:description" content="" />
	<meta property="og:url" content="https://montyscafe.com" />
	<meta property="og:site_name" content="MontysCafe" />
	<meta property="og:image" content="<?= get_template_directory_uri() ?>/assets/images/montyscafe.png" />
	<meta property="og:image:alt" content="MontysCafe" />
	<meta property="og:image:width" content="1200" /> <!-- 1200 -->
	<meta property="og:image:height" content="630" /> <!-- 630 -->
	<meta property="og:type" content="website" />

	<meta name="twitter:title" content="MontysCafe" />
	<meta name="twitter:description" content="" />
	<meta name="twitter:creator" content="MontysCafe" />
	<meta name="twitter:url" content="https://montyscafe.com">
	<meta name="twitter:image" content="<?= get_template_directory_uri() ?>/assets/images/montyscafe.png" />
	<meta name="twitter:image:alt" content="MontysCafe" />
	<meta name="twitter:site" content="MontysCafe" />
	<meta name="twitter:card" content="summary_large_image" />

	<meta name="theme-color" content="#344647" />

	<link rel="stylesheet" href="<?= get_template_directory_uri() ?>/assets/css/app.css?v=7">
	<?php wp_head(); ?>
</head>

<body>
	<?= get_template_part("includes/header"); ?>