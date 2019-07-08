<?php
/**
 * Template Name:Outils Page
 */

?>
<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
<?php $upload_dir = wp_upload_dir(); ?>
<!doctype html>
<html <?php language_attributes(); ?>
<meta name="viewport" content="width=device-width,initial-scale=1">
<?php
/**
 * Move the styles below into your stylesheet
 */
?>
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
/*padding-top: 5em;*/
color:#383838!important;
font-size:15px !important;
position: relative;
top: 10%
}
.navbar-default .myBtn a::before {
    content: '';
    position: absolute;
    top: 0;
    left:12.3em;
    width: 2px;
    height: 52px!important;
    background-color: white!important;
    -webkit-transition: background-color .2s linear;
    -o-transition: background-color .2s linear;
    transition: background-color .2s linear;
}
.navbar-default a {
    color: white !important;
}

/* Padding Header */
.hd .navbar-default {
position: sticky !important;
}


 /* All link will be red HX  a {
 color: #b91338 !important;
 }*/


body, html {
height: 100%;
margin: 0;
color: black !IMPORTANT;

}

.bg {
    /* The image used  */

    background: url('<?php echo $backgroundImg[0]; ?>') no-repeat;
    /* Full height */
    width: 100% !important;
    height: 40%!important;

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: 100% 100%;
}
.hd .scroll {
    position: sticky !important;
  display: none !important;}

/*--------------------------------------------------------------
# Content
--------------------------------------------------------------*/
.fired {
font-family:LFD !important;
color: #b91338!important;
font-size:20px !important;
text-transform:uppercase !important;
}
.fired p {

  margin-top: 0px!important;
  /*margin-bottom: 0px !important;*/

}

.fitext {
font-family:PNR !important;
color: #383838!important;
font-size:14px !important;
text-transform:uppercase !important;
}

.ficontent {
  width: 100%;
  text-align: center;
  padding: 3em 0 3em 0;
  position: relative;
z-index: -1;
}
.fired{
  width: 565px;
  display: inline-block;
  text-align: left;
  padding: 30px;
  margin: 15px;
  vertical-align: top;
}
.fired img{
  width:380px !important;
  height:3px !important;
  float: left;
}
.fitext {
width:630px;
text-align: justify;
display: inline-block;
padding: 30px;
margin: 15px;
}
/*--------------------------------------------------------------
# Content carriere
--------------------------------------------------------------*/
 /* carriere page apply font and other*/
.ficontent .carriere{
width:45%;
text-transform:uppercase !important;
font-size:18px !important;
font-family:LFR !important;
font-weight: 600;
display:inline-block;
color:#383838 !important;
line-height: 2em;
}

/*--------------------------------------------------------------
# Media Qeries  Mobile CSSS adapation
--------------------------------------------------------------*/
@media only screen and (max-width: 500px) {

}

</style>
<!--display  banner x Menu RED WHITE -->
<div class="bg">
<div class="hd"><?php get_header(2); ?></div>
<header class="entry-header">
		<h1 class="page-title"><?php the_title(); ?></h1>
</header>
</div>
<div class="ficontent">
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
