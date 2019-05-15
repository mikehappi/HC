<link rel="stylesheet" type="text/css" href="/wp-content/themes/HX-V1/css/Landing_page.css" media="screen" />
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
    <?php echo ".landing .section.p$id {" ?>
    background:url("/wp-content/uploads/bg/<?php echo $id; ?>.png");
    /* Full height  width: 100% !important;*/
   	height: 100VH !important;
    /* Center and scale the image nicely */
    background-position: center center !important;
    background-size: cover !important;
    background-repeat: no-repeat !important;
    background-attachment: fixed !important;
    padding-top:4%;
}

/* Auto for certain page */
.landing .section.p83{
width: 100% !important;
height: auto !important;}
.landing .section.p101{
width: 100% !important;
height: auto !important;}


.landing .section.p81 {
padding-top:0 !important;}
.landing .section.p113 {
padding-top:0 !important;}
.landing .section.p97 {
padding-top:0 !important;}


.section.p81 .lcontainer {
  display: inline-block;
  margin: 10%;
  width: 100%;
  text-align: left;
}
.section.p97 .lcontainer {
  display: inline-block;
  margin: 10%;
  width: 100%;
  text-align: left;
}
.section.p113 .lcontainer {
  display: inline-block;
  margin: 10%;
  width: 100%;
  text-align: left;
}

</style>

<?php endforeach; ?>

<div class="landing">

  <?php foreach ($m_pages as $key => $page) :?>
      <?php if(!(empty($page))) :?>
        <?php $class = 'section p' . $page->ID; $id = 'post-' . $page->ID; ?>
        <?php  $content = apply_filters('the_content', $page->post_content); ?>
          <div id="<?php print $id; ?>" class="<?php print $class; ?>">
             <?php get_header(2); ?>
              <div class="lcontainer">
              <?php echo $content;  ?>
          </div>
          </div>
      <?php endif; ?>
  <?php endforeach; ?>
</div>

<script>



// Select all links with hashes
$('a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    // On-page links
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
      &&
      location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000, function() {
          // Callback after animation
          // Must change focus!
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) { // Checking if the target was focused
            return false;
          } else {
            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
            $target.focus(); // Set focus again
          };
        });
      }
    }
  });

</script>



<?php get_footer(); ?>
