<?php
/**
 * Template Name:VC d'entreprise page
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
    height: auto !important;

    /* Center and scale the image nicely */
 background-position: center center !important;
background-size: cover !important;
background-repeat: no-repeat !important;
background-attachment: fixed !important;
}

/* Padding Header */
.hd {padding-top:2%;}


/*--------------------------------------------------------------
#Action
--------------------------------------------------------------*/
.vctitle{
font-family:LFR !important;
color: #b91338 !important;
font-size:29.01px !important;
font-weight: 600;
text-transform:uppercase !important;
}
/* .vccontainer{
padding-top: 5em;
width: 75%;
float: left;
position: relative;
right: -8em; or left 30%
text-align: left;*/

}
.vccontent{
font-family:PNR !important;
color: #383838 !important;
font-size:12.81px !important;
text-transform:uppercase !important;
text-align:justify !important;
}
}
.vctitle{
 width: 615px;;
}
.vcbody {
display: flex;
}
.vcbar{
width: 70px;
margin-right: 1em;
}

.vccontent {
align-self: flex-start;
}
/* br title size and position */
.vccontent img {
    margin-right: 0.5em;
    vertical-align: super;
}





.vccontent1{
font-family:PNR!important;
color: #383838 !important;
font-size:10px !important;
text-transform:uppercase !important;
text-align:left !important;
margin-top: 10em;
display:flex;
flex-wrap: wrap;
width:1100px;
}
.vccontent1 img{
  height: 0.5em;
    width: 0.05em;
    margin-right: 0.2em;
    margin-left: 0.2em;
    vertical-align: text-top;
        }

.vcflex {
width: 320px;
margin: 0px 0 2em 2em;
}


.vcflex {
  display: flex;
}

#vccleft {
  font-family:LFD!important;
  color: #b91338 !important;
  font-size:42px !important;
  flex: 0 0 0%;
}

#vccright {
  flex: 1;
}


/* unvisited link */
.vccontent1 a:link {
color: #383838 !important;
font-size:11px !important;
text-decoration: none;
}

/* visited link */
.vccontent1 a:visited {
  color: #383838 !important;
font-size:11px !important;
text-decoration: none;
}

/* mouse over link */
.vccontent1 a:hover {
color: #383838 !important;
font-size:11px !important;
text-decoration: none;
}

/* selected link */
.vccontent1 a:active {
 color: #383838 !important;
font-size:11px !important;
text-decoration: none;
}
.vcnumber{
font-family:LFD!important;
color: #b91338 !important;
font-size:42px !important;

}


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
<div class="vccontainer">


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
<?php get_footer(); ?>
