<?php
/**
 * Template Name:Carriere Page
 */

?>
<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
<?php $upload_dir = wp_upload_dir(); ?>
  <meta name="viewport" content="width=device-width,initial-scale=1">
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
    font-family:LFD;
    src:url("<?php echo get_template_directory_uri(); ?>/fonts/LucidaFax-Demibold.ttf");
}
  body {
    height: 100%;
    margin: 0;

}

.entry-header{
text-transform:uppercase !important;
text-align: center;
font-family:LFR !important;
padding-top: 5em;
color:black !important;
font-size:15px !important;

}
 /* Put down hearder Nicely */
.hd {
  padding-top:4em;
}
body, html {
    height: 100%;
    margin: 0;
 color: black !IMPORTANT;

}
.bg {
    /* The image used  for Background */
  
    background: url('<?php echo $backgroundImg[0]; ?>') no-repeat;
    /* Full height */
    width: 100% !important;
    height: 40%!important;
    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: 100% 100%;
}
 /* carriere page apply font and other*/
.carriere{
width:38%;
text-transform:uppercase !important;
font-size:18px !important;
font-family:LFR !important;
font-weight: 600;
display:inline-block;
}

 
 /* space top page content header 
.pcontent{
  text-align: center;
  padding-top:4em;
}*/

/*--------------------------------------------------------------
# Media Qeries  Mobile CSSS adapation
--------------------------------------------------------------*/
@media only screen and (max-width: 500px) {

}

</style>
<body>
<!--display  banner x Menu -->
<div class="bg">
<div class="hd"><?php get_header(2); ?></div>
			<header class="entry-header">
				<h1 class="page-title"><?php the_title(); ?></h1>
			</header>
</div>
<div class="pcontent">
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
<?php get_footer(); ?>