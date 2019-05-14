
<link rel="stylesheet" type="text/css" href="/wp-content/themes/HX-V1/css/Landing_page.css" media="screen" />
<?php
  /*
    Template Name: Single Page Theme Page
  */

  $ids = [81, 83, 113, 97, 99, 101];
  $id_lists = [
      'numberposts' => 1,
      'post_type' => 'page',
      'include' => $ids
  ];
  $m_pages = array_reverse(load_landing_page($id_lists));
?>
<?php foreach ($ids as $id) :?>
<style type="text/css">
    <?php echo ".landing .section.p$id {" ?>
    background:url("/wp-content/uploads/bg/<?php echo $id; ?>.png");
    /* Full height */
    width: 100% !important;
    height: auto !important;
    /* Center and scale the image nicely */
    background-position: center center !important; 
    background-size: cover !important;
    background-repeat: no-repeat !important;
    background-attachment: fixed !important;
    padding-top:3em !important;
}
.landing .section.p81 {
padding-top:0 !important;}

.landing .section.p81{
width: 100% !important;
height: 100VH !important;}
   
.landing .section.p99{
width: 100% !important;
height: 100VH !important;}
    
.landing .section.p97{
width: 100% !important;
height: 100VH !important;}
    
.section.p81 .lcontainer {
	padding-top: 5em;
    width: 75%;
    float: left;
    position: relative;
    right: -8em;
    text-align: left;
}

.section.p97 .lcontainer {
	padding-top: 5em;
    width: 75%;
    float: left;
    position: relative;
    right: -8em;
    text-align: left;
}

.landing .section.p113{
width: 100% !important;
height: 100VH !important;}
</style>

<?php endforeach; ?>
 
<div class="landing">
  <?php foreach ($m_pages as $key => $page) :?>
      <?php if(!(empty($page))) :?>
        <?php $class = 'section p' . $page->ID; ?>
        <?php  $content = apply_filters('the_content', $page->post_content); ?>
          <div class="<?php print $class; ?>">
             <?php get_header(2); ?>
              <div class="lcontainer">
              <?php echo $content;  ?>
          </div>
          </div>
      <?php endif; ?>
  <?php endforeach; ?>
</div> 

<script>
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});
</script>
<?php get_footer(); ?>