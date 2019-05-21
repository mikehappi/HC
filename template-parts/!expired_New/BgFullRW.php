<?php
/**
 * Template Name:BG Full Page with Logo RW
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
    font-family:LFD;
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
    height: auto!important;

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
      background-attachment: fixed;
      background-color:black;
}

/* Padding Header */
.hd {padding-top:2%;}

.bpic {width:100%; height:100%;object-fit: cover !important;}
 /* blog pic fix size .bpic {width:850px; height:600px;}*/


/*--------------------------------------------------------------
 A philantropique
--------------------------------------------------------------*/

.aptitle{
font-family:LFD !important;
color: white !important;
font-size:23px !important;
font-weight:light;
text-transform:uppercase !important;
text-align:center !important;
}
.apcontent{
font-family:LFD !important;
color: white !important;
font-size:18px !important;
font-weight:light;
text-transform:uppercase !important;
text-align:center !important;
line-height: 2em;
}
    .apimg{
      margin-top: 2em;
    margin-bottom: 2em;
    text-align: center;}
/*--------------------------------------------------------------
# Couverture internationale
--------------------------------------------------------------*/
.cititle{
font-family:LFD !important;
color: white !important;
font-size:20px !important;
font-weight:light;
text-transform:uppercase !important;
text-align:center !important;
}
.cimg{
text-align:center !important;
padding-top:4%;
padding-bottom:4%;}

.cicontent{
font-family:PNR !important;
color: white !important;
font-size:12px !important;
font-weight:light;
text-transform:uppercase !important;
text-align:center !important;
padding-bottom: 5em;
}
.cih1{font-family:LFD !important;
color: white !important;
font-size:12px !important;}



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
<div class="hd"><?php get_header(2); ?></div>
<div class="pagecontent">
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
</div>
</div>
<?php get_footer(); ?>