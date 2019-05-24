<?php
  /*
    Template Name: Landing
  */
  global $wpdb;
  $ids = [ 81, 83, 113, 97, 99, 101 ];
  $str_order = '';
  $str_in = $ids[0];
  for ($i = 1; $i<count($ids); $i++) {
	$str_in .= ",$ids[$i]";
  }
  $m_pages = $wpdb->get_results( "SELECT * FROM wordpress_posts where post_type='page' and ID IN($str_in) order by field(id,$str_in)", OBJECT );

?>
<?php foreach ($ids as $id) :?>
<style type="text/css">
/*Color When scroll*/

.navbar-default a {
    color: white !important;
}

.scroll {
            background: none; !important;
            background-image: none;
            text-transform: uppercase;
            font-family:PNR !important;
            font-size: 12px !important;
            font-weight: 400;
            letter-spacing: 2px;
            line-height: 1em;
           color:black !important;
            transition: 0.3s;
          }
.scroll a{
  color:black !important;
  text-decoration: none !important;
  }

.scroll .modal-text a{
    color:White !important;
    text-decoration: none !important;
    }

  .scroll .st0{fill:#BC1636;}
  .scroll	.st1{fill:black !important;}

  .scroll .myBtn a::before {
      content: '';
      position: absolute;
      top: 0;
      left:12.3em;
      width: 2px;
      height: 52px!important;
      background-color: black !important;
      -webkit-transition: background-color .2s linear;
      -o-transition: background-color .2s linear;
      transition: background-color .2s linear;
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

/*Default Section BG style*/
    <?php echo ".landing .section.p$id {" ?>
    background:url("/wp-content/uploads/bg/<?php echo $id; ?>.png");
    /* Full height  width: 100% !important;*/
   	height: 100VH !important;
    /* Center and scale the image nicely   */
    background-position: center center !important;
    background-size: cover !important;
    background-repeat: no-repeat !important;
    background-attachment: fixed !important;
padding-top:3em;
}

/* Auto for certain page */
.landing .section.p83{
width: 100% !important;
height: auto !important;}
.landing .section.p101{
width: 100% !important;
height: auto !important;}


.landing .section.p81 {
padding:10% 0% 0% 15%!important;}
.landing .section.p113 {
padding:10% 0% 0% 15%!important;}
.landing .section.p97 {
padding:10% 0% 0% 15% !important;}

.section.p81 .lcontainer {
  display: inline-block;
  width: 100%;
  text-align: left;
}
.section.p97 .lcontainer {
  display: inline-block;
  width: 100%;
  text-align: left;
}
.section.p113 .lcontainer {
  display: inline-block;
  width: 100%;
  text-align: left;
}
#topBtn {
 display: none;
  position: fixed;
  bottom: 35%;
  right: 4.5%;
  z-index: 99;
  border: none;
  outline: none;
  cursor: pointer;

  border-radius: 10px;
     }

/*--------------------------------------------------------------
# Media Qeries  Mobile CSSS adapation
--------------------------------------------------------------*/
@media only screen and (max-width: 500px) {

.columns { left: -30% !important;}

#n2-ss-2-align { margin-top: 3em !important;}
.entry-content {

   margin:0 !important;

}

}

</style>
<?php get_header(2); ?>
<?php endforeach; ?>
<div class="landing">

  <?php foreach ($m_pages as $key => $page) :?>
      <?php if(!(empty($page))) :?>
        <?php  $class = 'scrollect section p' . $page->ID; $id = 'post-' . $page->ID; ?>
        <?php  $content = apply_filters('the_content', $page->post_content); ?>
          <div id="<?php print $id; ?>" class="<?php print $class; ?>">

              <div class="lcontainer">
              <?php echo $content;  ?>
          </div>
          </div>
      <?php endif; ?>
  <?php endforeach; ?>
</div>

<!--go to the top bottom -->
<div class="row text-right hidden-xs hidden-md hidden-sm">
<button onclick="topFunction()" id="topBtn" title="Go to top" type="image" style="border: 0; background: transparent"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="18"><path d="M6.862 18h1.276V3.761c0-.5 0-.898-.049-1.682.503.58 1.13 1.17 1.633 1.637l4.37 4.056.908-.84L7.5 0 0 6.931l.908.841 4.37-4.056c.504-.466 1.13-1.057 1.633-1.637-.05.784-.05 1.182-.05 1.682V18z" fill="#e5e5e4"></path></svg>
</button>
</div>
<?php get_footer(); ?>
