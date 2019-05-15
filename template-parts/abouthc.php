<?php
/**
 * Template Name:About HC Page
 */
$backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
$upload_dir = wp_upload_dir();
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
    font-family:SAVOYELFD;
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
color:White !important;
font-size:15px !important;

}

/* Padding Header */
.hd {padding-top:2%;}


 /* All link will be red HX */
 a {
color: #b91338 !important;
}

body, html {
height: 100%;
margin: 0;
olor: black !IMPORTANT;

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
  float: none;
  padding-top: 5em;
}
.fired{
  width: 50%;
    float: left;
    position: relative;
  right: -5em; /* or left 30% */
  text-align: left;
}
.fired img{
  width:380px !important;
  height:3px !important;
  float: left;
}
.fitext {
  width:630px;
  float: left;
  position: relative;
  left: 0%; /* or right 0% */
text-align: justify;
  padding-left:5em;
}

/*--------------------------------------------------------------
# Media Qeries  Mobile CSSS adapation
--------------------------------------------------------------*/
@media only screen and (max-width: 500px) {

}
</style>
<!-- <body class="single single-post postid-321 single-format-standard" style="color:#000 !important;margin:12em 0 0 0;"> -->
<div id="primary" class="site-content page-container">

    <?php
    /**
     * Show page title and content
     */
    ?>
    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
          <div class="bg">
          <div class="hd"><?php get_header(2); ?></div>
          <header class="entry-header">
          		<h1 class="page-title"><?php the_title(); ?></h1>
          </header>
            <div class="ficontent" id="menucontent">
                <?php the_content(); ?>
            </div>
        <?php endwhile; ?>

    <?php endif; ?>
</div><!-- .site-content -->
<!-- </body> -->

<?php

get_footer();
