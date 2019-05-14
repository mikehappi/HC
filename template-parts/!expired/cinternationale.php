<?php
/**
 * Template Name:Cinternationale page
 */

?>
<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
<?php $upload_dir = wp_upload_dir(); ?>
 <!doctype html>
    <html <?php language_attributes(); ?>>
   <meta name="viewport" content="width=device-width,initial-scale=1">
<?php
/**
 * Move the styles below into your stylesheet
 */
?>
<html>
<head>
<style type="text/css">


@font-face{
    font-family:PNR;
     src:url("<?php echo get_template_directory_uri(); ?>/fonts/ProximaNova-Regular.otf");
}
  @font-face{ 
    font-family:LFR;
     src:url("<?php echo get_template_directory_uri(); ?>/fonts/LucidaFax-Regular.ttf");
}
 @font-face{ 
    font-family:SAVOYELFD;
    src:url("<?php echo get_template_directory_uri(); ?>/fonts/LucidaFax-Demibold.ttf");
}
  body {
    height: 100%;
    margin: 0;

}

 .post-list {
        padding-bottom: 20px;
    }

#myBtn {
 display: none;
  position: fixed;
  bottom: 8%;
  right: 10%;
  z-index: 99;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 15px;
  border-radius: 10px;
     }
body, html {
    height: 100%;
    margin: 0;
 color: black !IMPORTANT;

}

.bg {
    /* The image used  background-image: url("<?php echo $upload_dir['baseurl'] . '/blog-banner.jpg'; ?>"); */
    
    background: url('<?php echo $backgroundImg[0]; ?>') no-repeat;
    /* Full height */
  width: 100% !important;

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

/* Padding Header */
.hd {padding-top:2%;}

 /* blog pic fix size */


/*--------------------------------------------------------------
# Media Qeries  Mobile CSSS adapation
--------------------------------------------------------------*/
@media only screen and (max-width: 500px) {
   .bpic {
    width: 100% !important;
    height: auto !important;
}
.post-list{
    margin: 0 auto;
     width : auto !important;
}
}

</style>
</head>
<body>
<!--display blog banner -->
<div class="bg">
<div class="hd"><?php get_header(); ?></div>


<?php
if (have_posts()):
  while (have_posts()) : the_post();
    the_content();
  endwhile;
else:
  echo '<p>Sorry, no posts matched your criteria.</p>';
endif;
?>
</div>
