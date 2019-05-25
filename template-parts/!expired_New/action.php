<?php
/**
 * Template Name:Action Page
 */

?>
<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
<?php $upload_dir = wp_upload_dir(); ?>
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

.bg {
    /* The image used  background-image: url("<?php echo $upload_dir['baseurl'] . '/blog-banner.jpg'; ?>"); */

    background: url('<?php echo $backgroundImg[0]; ?>') no-repeat;
    /* Full height */
   width: 100% !important;
    height: 100vh !important;

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
.atitle{
font-family:LFD !important;
color: white !important;
font-size:30px !important;
text-transform:uppercase !important;
}
.acontainer{
padding-top: 5em;
width: 75%;
float: left;
position: relative;
right: -8em; /* or left 30% */
text-align: left;

}
.acontent{
font-family:PNR !important;
color: white !important;
font-size:10.94px !important;
text-transform:uppercase !important;
text-align:justify !important;
}
.atitle{
 width: 615px;;
}
.abody {
display: flex;
}

/* align white bar with dc */
.acontent img{
  margin-right: 1em;
  vertical-align: super;
}

.acontent {
align-self: flex-start;
}



.acontent1{
font-family:LFD!important;
color: white !important;
font-size:11px !important;
text-transform:uppercase !important;
text-align:left !important;
margin-top: 20em;
display:flex;
flex-wrap: wrap;
width: 1100px;
flex-direction:row;
}
.acontent1 img{
height:20px;
width: 2px;
margin-right: 0.5em;}

.aflex {
width: 230px;
display:flex;
}
#left {
  flex: 0 0 6% !important;
}

#right {
  flex: 1 !important;
}
/* flex last two element*/
.aflexx {
width: 230px;
display:flex;
flex-direction: column;
float: left;
}
/* flex last to column*/
.aflexB {
display:flex;
margin-top: 1em;
}

.aflexT {
display:flex;
}


.acontent1 p{
  font-family:PNR!important;
  color: white !important;
  font-size:9.49px !important;
}



/* unvisited link */
.acontent a:link {
color: white !important;
text-decoration: none;
}

/* visited link */
.acontent a:visited {
color: white !important;

text-decoration: none;
}

/* mouse over link */
.acontent a:hover {
color: white !important;
text-decoration: none;
}

/* selected link */
.acontent a:active {
color: white !important;
text-decoration: none;
}

/* unvisited link */
.acontent1 a:link {
color: white !important;

text-decoration: none;
}

/* visited link */
.acontent1 a:visited {
  color: white !important;
text-decoration: none;
}

/* mouse over link */
.acontent1 a:hover {
color: white !important;
text-decoration: none;
}

/* selected link */
.acontent1 a:active {
 color: white !important;
text-decoration: none;
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
<body>
<!--display blog banner -->
<div class="bg">
<div class="hd"><?php get_header(2); ?></div>
<div class="acontainer">


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
