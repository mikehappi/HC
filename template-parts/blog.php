<?php
/**
 * Template Name:Blog
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
color:black !important;
font-size:15px !important;

}

/* logo color */
.navbar-default .st0{fill:#BC1636;}
.navbar-default	.st1{fill:black !important;}


.navbar-default a {
    color: black !important;
    text-decoration: none !important;
}

.navbar-default .modal-text a{
    color:White !important;
    text-decoration: none !important;
    }
.navbar-default .myBtn a::before {
    content: '';
    position: absolute;
    top: 0;
    left:12.3em;
    width: 2px;
    height: 52px!important;
    background-color: black!important;
    -webkit-transition: background-color .2s linear;
    -o-transition: background-color .2s linear;
    transition: background-color .2s linear;
}
/* Padding Header */
.hd .navbar-default {
position: sticky !important;
}

body, html {
height: 100%;
margin: 0;
olor: black !IMPORTANT;

}


/*--------------------------------------------------------------
# Content
--------------------------------------------------------------*/
.bcontainer
{
  text-align: center;
  padding: 3em;
}

.bsection592
{
  display: inline-block;
  max-width: 365px;
  height: 781px;
  text-align: left;
  padding: 30px;
  background-color:#f3efe4;
  border-radius: 3px;
  margin: 15px;
  vertical-align: top;
}

.bsection596
{
  display: inline-block;
  max-width: 581px;
  height: 281px;
  text-align: left;
  padding: 30px;
  background-color:#f3efe4;
  border-radius: 3px;
  margin: 15px;
}

.bsection587
{
  display: inline-block;
  max-width: 270px;
  height:473px ;
  text-align: left;
  padding: 30px;
  background-color:#f3efe4;
  border-radius: 3px;
  margin: 15px;
  vertical-align: top;
}

.bsection589
{
  display: inline-block;
  max-width: 270px;
  height:473px ;
  text-align: left;
  padding: 30px;
  background-color:#f3efe4;
  border-radius: 3px;
  margin: 15px;
}

/*--------------------------------------------------------------
# Media Qeries  Mobile CSSS adapation
--------------------------------------------------------------*/
@media only screen and (max-width: 500px) {

}

</style>

<div class="hd"><?php get_header(2); ?></div>
<div class="bcontainer">
<?php
$args = array( 'numberposts' => 4 );
$lastposts = get_posts( $args );
foreach($lastposts as $post) : setup_postdata($post); ?>
 <?php  $class = 'bsection' . $post->ID; $id = 'bs' . $post->ID; ?>
 <div id="<?php print $id; ?>" class="<?php print $class; ?>">
<div class="btitle"><h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2></div>
<div class="bexcerpt"><a href="<?php the_permalink(); ?>"><?php the_excerpt(); ?></a></div>
</div>
<?php endforeach; ?>
</div>
<?php get_footer(); ?>
