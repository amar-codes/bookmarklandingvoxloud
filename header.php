<?php
/**
 * Header file for the Voxloud Bookmark Test WordPress default theme.
 *
 */

?><!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >
		<link rel="profile" href="https://gmpg.org/xfn/11">
		<?php wp_head(); ?>
		<link rel='preconnect' href='https://fonts.googleapis.com'>
		<link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
		<link href='https://fonts.googleapis.com/css2?family=Rubik:wght@400;500&display=swap' rel='stylesheet'>
		<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css' />
	</head>

	<body <?php body_class(); ?>>

		<?php
		wp_body_open();
		?>

        <?php
        get_template_part( 'parts/menu' );
        ?>