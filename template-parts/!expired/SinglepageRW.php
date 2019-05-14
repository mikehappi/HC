
<?php /* Template Name: Single Page  RW logo*/ ?>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="wp-content/themes/hx-v1/template-parts/js/modernizr.js"></script> <!-- Modernizr -->
</head>
<style>

.article-has-backgroundThumb {
  z-index: 0;
  position: relative;
}

.backgroundThumb {
  background-position:center;
  background-repeat:no-repeat;
  background-size:cover;
  position:absolute;
  top:0;right:0;bottom:0;left:0;
  filter:blur(42px);
  opacity:.75;
  z-index:-1;
}

</Style>

<article class="article article-has-backgroundThumb article-<?php the_ID(); ?>">

<?php if(has_post_thumbnail()) {
 $feat_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), "full", true);
} ?>
<div class="backgroundThumb" style="background-image:url(<?php echo (($feat_image[0]))?>);" data-width="<?php echo (($feat_image[1]))?>" date-height="<?php echo (($feat_image[2]))?>"></div> 
