<?php
/**
 * Template Name:I Immobilier  Page
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
font-size:12px !important;
text-transform:uppercase !important;
}

.ficontent {
  width: 100%;
  float: none;
  padding-top: 5em;
}
.fired{
  width: 690px;
    float: left;
    position: relative;
left: 12em; /* or left 30% */
  text-align: left;
}
.fired img{
  width:420px !important;
  height:3px !important;
  float: left;
}
.fitext {
  width:30%;
  float: right;
  position: relative;
 right:15em ; /* or right 0% */
  text-align: left;
padding: 10em 0 0em 5em;
}

/*--------------------------------------------------------------
# Investissement immobilier
--------------------------------------------------------------*/
.iih1{font-family:LFR !important;
color: #383838!important;
font-size:18.34 px !important;
font-weight:600;
text-transform:uppercase !important;
text-align: center;
marin-top:2em;}


.iicontent1{
font-family:PNR!important;
color: #383838 !important;
font-size:10px !important;
text-transform:uppercase !important;
text-align:left !important;
margin-top: 10em;
display:flex;
flex-wrap: wrap;
width:999px;
}
.iicontent1 img{
  height: 0.5em;
    width: 0.05em;
    margin-right: 0.2em;
    margin-left: 0.2em;
    vertical-align:top;
        }

.iiflex {
width: 320px;
margin: 0px 0 7em 2em;
}


.iiflex {
  display: flex;
}

#iileft {
  font-family:LFD!important;
  color: #b91338 !important;
  font-size:42px !important;
  /*flex: 0 0 0%;*/
}

#iiright {
  flex: 1;
}


/* unvisited link */
.iicontent1 a:link {
color: #383838 !important;
font-size:11px !important;
text-decoration: none;
}

/* visited link */
.iicontent1 a:visited {
  color: #383838 !important;
font-size:11px !important;
text-decoration: none;
}

/* mouse over link */
.iicontent1 a:hover {
color: #383838 !important;
font-size:11px !important;
text-decoration: none;
}

/* selected link */
.iicontent1 a:active {
 color: #383838 !important;
font-size:11px !important;
text-decoration: none;
}
.iinumber{
font-family:LFD!important;
color: #b91338 !important;
font-size:42px !important;

}

/*--------------------------------------------------------------
# Media Qeries  Mobile CSSS adapation
--------------------------------------------------------------*/
@media only screen and (max-width: 500px) {

}

</style>
</head>
<body>
<!--display  banner x Menu RED WHITE -->
<div class="bg">
<div class="hd"><?php get_header(2); ?></div>
			<header class="entry-header">
				<h1 class="page-title"><?php the_title(); ?></h1>
			</header>
</div>

<?php
if (have_posts()):
  while (have_posts()) : the_post();
    the_content();
  endwhile;
else:
  echo '<p>Sorry, no posts matched your criteria.</p>';
endif;
?>
<?php get_footer(); ?>
