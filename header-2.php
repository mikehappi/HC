<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Hexagone-Capital
 */
?>
<?php $upload_dir = wp_upload_dir(); ?>
<!doctype html>
<html <?php language_attributes(); ?>>
<meta name="viewport" content="width=device-width,initial-scale=1">
<head>

        <?php wp_head(); ?>
  <nav id="nav" class="navbar navbar-default navbar-fixed-top" role="navigation" style="
    position: fixed !important;
    top: auto;
    left:0;
    width: 100%;">



                    <a id=logo class="navbar-brand" href="<?php echo home_url(); ?>">
                    <img src="<?php echo $upload_dir['baseurl'] . '/HX_logo_RW.png'; ?>"  style="width:124px;height:44px;" /></a>
                        <ul id="imenu">
                            <?php
                                                wp_nav_menu( array(
                                                    'theme_location' => 'menu-1',
                                                    'menu_id'        => '17',
                                                ) );
                             ?>

                        </ul>

  <!-- The Modal -->
<div id="myModal" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <div class="close" style="float:right !important;">×</div>
    <div class="mc">
  	<div class="mc-left"><p>A PROPOS D’HEXAGONE CAPITAL</p>
      <p style="font-family:PNR !important;font-size:!important;text-transform:uppercase !important;width:70%;">Hexagone Capital accompagne ses clients privés, dans la mise en place de solutions sur-mesure et innovantes afin de répondre à vos attentes en matière de gestion de fortune et de patrimoine.</p>

      </div>
  		<div class="mc-center">
  		  <p><a href="https://www.hexagone-capital.com/action/ingenierie-patrimoniale">Ingenerie patrimoniale</a></p>
       	<p><a href="https://www.hexagone-capital.com/action/gestion-de-portefeuille">Gestion de portefeuille</a></p>
      <p><a href="https://www.hexagone-capital.com/action/investissement-immobilier">Investissement immobilier</a></p>

      </div>
  		<div class="mc-right">
  		   <p><a href="https://www.hexagone-capital.com/action/outils-de-placement-alternatifs">Outil de placment altermnatif</a></p>
        <p><a href="https://www.hexagone-capital.com/action/conseil-juridique-et-fiscale">Conseil juridique et fiscale</a></p>
       	<p><a href<p><a href="https://www.hexagone-capital.com/carriere/">Carrieres</a></p>
      <p><a href="https://www.hexagone-capital.com/contact/">Contact</a></p>
        </div>
  </div>

</div>
  <!-- hide dropdown list -->
        <script>
        jQuery(document).ready(function($){
        $('li').find('ul').addClass('hidden-xs hidden-md hidden-sm')
        });
        </script>

        <script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("menu-item-385");
;
// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
        </nav>


</head>
