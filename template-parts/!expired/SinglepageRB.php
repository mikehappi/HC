
<?php /* Template Name: Single Page  RB logo*/ ?>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="wp-content/themes/hx-v1/template-parts/js/modernizr.js"></script> <!-- Modernizr -->
</head>

<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>

              <div class="header-wrap" style="background: url('<?php echo $backgroundImg[0]; ?>') no-repeat;">
                 <header class="entry-header"> <?php get_header(); ?>
                <h1 class="entry-title"><?php the_title(); ?></h1>
                 </header>
              </div>  