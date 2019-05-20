<?php
/**
 * The header for our theme
 *<img src="<?php echo $upload_dir['baseurl'] . '/HX_logo_RW.png'; ?>"  style="width:124px;height:44px;" />
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
  <nav id="nav" class="navbar navbar-default navbar-fixed-top" role="navigation" style="position:fixed;top: auto;left:0;width: 100%;">



                    <a id=logo class="navbar-brand" href="<?php echo home_url(); ?>">
<svg version="1.1" id="Calque_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
  	 viewBox="0 0 1849.2 658.7" style="enable-background:new 0 0 1849.2 658.7;" xml:space="preserve">
  <style type="text/css">
  	.st0{fill:#BC1636;}
  	.st1{fill:#FFFFFF;}
  </style>
  <polygon class="st0" points="304.4,0 304.4,322.5 376.8,362.9 376.8,40.4 304.4,0 "/>
  <polygon class="st0" points="0,319.6 295.8,484.6 376.8,439.2 0,229 "/>
  <polygon class="st0" points="418.8,378.5 418.8,465 566.5,382.7 566.5,296.2 "/>
  <polygon class="st0" points="204.6,616 281.1,658.7 418.8,581.9 418.8,496.5 "/>
  <g id="_x3C_HX_x3E_">
  	<g>
  		<path class="st1" d="M1400.8,325.9c-14.5,3.2-26.4,4.8-35.7,4.8c-16.6,0-29.8-5-39.5-15s-14.6-23.5-14.6-40.5
  			c0-17.5,4.8-31.1,14.4-40.7c9.6-9.6,23.2-14.5,40.7-14.5c6.2,0,12.3,0.4,18.2,1.1c5.9,0.7,11.7,1.9,17.4,3.4V247h-11.9l-0.9-10.5
  			c-3.9-2-7.7-3.4-11.5-4.3s-7.5-1.4-11.2-1.4c-10,0-17.8,4-23.4,12c-5.7,8-8.5,19-8.5,33.1c0,13.8,3.2,24.6,9.4,32.5
  			c6.3,7.9,14.9,11.8,25.9,11.8c3,0,6.1-0.5,9.1-1.6V291h-10.5v-10.5h40.4V291h-7.9L1400.8,325.9L1400.8,325.9z"/>
  		<path class="st1" d="M1513.5,320.2c8.9,0,16.1-4.1,21.5-12.3c5.4-8.2,8.1-19,8.1-32.5c0-13.5-2.7-24.4-8.1-32.5
  			c-5.4-8.2-12.6-12.2-21.5-12.2c-8.9,0-16.1,4.1-21.4,12.2c-5.4,8.2-8.1,19-8.1,32.5c0,13.5,2.7,24.4,8.1,32.5
  			C1497.5,316.1,1504.6,320.2,1513.5,320.2 M1513.5,330.8c-16.4,0-29.3-4.9-38.7-14.8c-9.4-9.9-14.2-23.4-14.2-40.5
  			s4.7-30.6,14.2-40.5c9.4-9.9,22.4-14.8,38.7-14.8s29.3,4.9,38.8,14.8s14.2,23.4,14.2,40.5c0,17.1-4.7,30.6-14.2,40.5
  			C1542.8,325.8,1529.9,330.8,1513.5,330.8"/>
  	</g>
  	<polygon class="st1" points="1684.5,222.8 1684.5,233.3 1695,233.3 1695,298 1642.6,222.8 1617,222.8 1617,233.3 1627.6,233.3
  		1627.6,233.4 1646.5,260.7 1646.4,260.7 1694.4,329.2 1709.4,329.2 1709.4,233.3 1720,233.3 1720,222.8 	"/>
  	<polygon class="st1" points="1257.3,317.6 1219.3,221.4 1202.9,221.4 1164.9,317.6 1158.7,317.6 1158.7,328.1 1187.2,328.1
  		1187.2,317.6 1176.6,317.6 1184.5,297.6 1220.9,297.6 1216.6,286.6 1188.9,286.6 1205.6,244.3 1219.5,279.3 1219.5,279.3
  		1221.4,284 1222.4,286.6 1222.4,286.6 1226.7,297.6 1226.8,297.6 1234.7,317.6 1224.1,317.6 1224.1,328.1 1263.5,328.1
  		1263.5,317.6 	"/>
  	<g>
  		<path class="st1" d="M820.6,483.2c-10.7,4.6-22.3,6.8-34.7,6.8c-17.6,0-31.3-4.9-41.2-14.6s-14.8-23.4-14.8-40.8
  			c0-17.6,4.8-31.1,14.4-40.8c9.6-9.6,23.2-14.4,40.8-14.4c5.4,0,11,0.4,16.7,1.1c5.7,0.8,11.7,1.9,17.8,3.4v22.1h-11.4l-1.1-10.5
  			c-3.6-1.8-7.2-3.2-10.8-4.2c-3.6-0.9-7.3-1.4-10.9-1.4c-10,0-17.8,4-23.6,11.9c-5.7,7.9-8.6,18.8-8.6,32.7c0,13.5,3.3,24.2,9.9,32
  			c6.6,7.9,15.5,11.8,26.7,11.8c10.5,0,20.8-2.6,30.7-7.8L820.6,483.2L820.6,483.2z"/>
  		<path class="st1" d="M1052.8,433.6h3.5c8.2,0,14.4-2,18.5-5.9c4.1-3.9,6.2-9.8,6.2-17.6c0-5.8-1.8-10.2-5.3-13.1
  			s-8.8-4.4-15.9-4.4h-7V433.6z M1052.8,444.1v32.8h11.5v10.5h-43.1v-10.5h10.5v-84.3h-10.5v-10.5h45.8c11.2,0,20,2.4,26.2,7.3
  			c6.2,4.9,9.3,11.7,9.3,20.6c0,11.2-3.8,19.7-11.2,25.5s-18.5,8.7-33,8.7L1052.8,444.1L1052.8,444.1z"/>
  	</g>
  	<polygon class="st1" points="1183.6,392.6 1183.6,476.9 1194.1,476.9 1194.1,487.4 1151,487.4 1151,476.9 1161.6,476.9
  		1161.6,392.6 1151,392.6 1151,382.1 1194.1,382.1 1194.1,392.6 	"/>
  	<polygon class="st1" points="1280,393.5 1253.3,393.5 1253.3,404.8 1241.9,404.8 1241.9,382.1 1340.2,382.1 1340.2,404.8
  		1328.8,404.8 1328.8,393.5 1302,393.5 1302,476.9 1312.6,476.9 1312.6,487.4 1269.5,487.4 1269.5,476.9 1280,476.9 	"/>
  	<polygon class="st1" points="1617,487.4 1536.9,487.4 1536.9,476.9 1547.4,476.9 1547.4,392.6 1536.9,392.6 1536.9,382.1
  		1580,382.1 1580,392.6 1569.4,392.6 1569.4,476 1605.7,476 1605.7,464.6 1617,464.6 	"/>
  	<polygon class="st1" points="968.9,476.9 930.9,380.7 914.4,380.7 876.4,476.9 870.2,476.9 870.2,487.4 898.8,487.4 898.8,476.9
  		888.2,476.9 896.1,456.9 932.5,456.9 928.1,445.9 900.4,445.9 917.2,403.6 931.1,438.6 931.1,438.6 932.9,443.3 934,445.9
  		934,445.9 938.3,456.9 938.3,456.9 946.3,476.9 935.7,476.9 935.7,487.4 975.1,487.4 975.1,476.9 	"/>
  	<polygon class="st1" points="1484.6,476.9 1446.7,380.7 1430.2,380.7 1392.2,476.9 1386,476.9 1386,487.4 1414.5,487.4
  		1414.5,476.9 1404,476.9 1411.9,456.9 1448.2,456.9 1443.9,445.9 1416.2,445.9 1432.9,403.6 1446.8,438.6 1446.8,438.6
  		1448.7,443.3 1449.8,445.9 1449.8,445.9 1454.1,456.9 1454.1,456.9 1462,476.9 1451.5,476.9 1451.5,487.4 1490.8,487.4
  		1490.8,476.9 	"/>
  	<polygon class="st1" points="960.9,286 960.9,261.4 950.4,261.4 950.4,268.4 916.1,268.4 916.1,278.9 950.4,278.9 950.4,286 	"/>
  	<polygon class="st1" points="964.2,305.3 964.2,316.7 928.4,316.7 928.4,278.9 928.4,278.9 928.4,268.4 928.4,268.4 928.4,233.3
  		960.9,233.3 960.9,243.8 972.3,243.8 972.3,222.8 895.8,222.8 895.8,233.3 906.4,233.3 906.4,317.6 895.8,317.6 895.8,328.1
  		975.6,328.1 975.6,305.3 	"/>
  	<polygon class="st1" points="1834.4,286 1834.4,261.4 1823.9,261.4 1823.9,268.4 1790.9,268.4 1790.9,278.9 1823.9,278.9
  		1823.9,286 	"/>
  	<polygon class="st1" points="1769.3,222.8 1769.3,233.3 1779.9,233.3 1779.9,317.6 1769.3,317.6 1769.3,328.1 1849.2,328.1
  		1849.2,305.3 1837.8,305.3 1837.8,316.7 1801.9,316.7 1801.9,278.9 1801.9,278.9 1801.9,268.4 1801.9,268.4 1801.9,233.3
  		1834.4,233.3 1834.4,243.8 1845.8,243.8 1845.8,222.8 	"/>
  	<polygon class="st1" points="1082.5,267 1105.8,233.3 1111.9,233.3 1111.9,222.8 1083.6,222.8 1083.6,233.3 1092.3,233.3
  		1075.9,257.2 	"/>
  	<polygon class="st1" points="1106.8,317.6 1084.9,280.8 1072.6,262.8 1068.4,256.1 1054.7,233.3 1063.4,233.3 1063.4,222.8
  		1023.9,222.8 1023.9,233.3 1030.1,233.3 1055.4,275.9 1028.4,317.6 1022.2,317.6 1022.2,328.1 1050.2,328.1 1050.2,317.6
  		1041.5,317.6 1062.7,285 1082.2,317.6 1073.5,317.6 1073.5,328.1 1113,328.1 1113,317.6 	"/>
  	<polygon class="st1" points="1642,317.6 1642,262.8 1636.1,254.1 1627.6,241.8 1627.6,317.6 1617,317.6 1617,328.1 1652.6,328.1
  		1652.6,317.6 	"/>
  	<polygon class="st1" points="846.5,233.3 846.5,222.8 813.9,222.8 813.9,233.3 813.9,255.9 813.9,268 820.1,268 820.1,278.5
  		813.9,278.5 813.9,307.1 813.9,317.6 813.9,328.1 846.5,328.1 846.5,317.6 835.9,317.6 835.9,233.3 	"/>
  	<polygon class="st1" points="771.4,307.1 771.4,278.5 813.9,278.5 813.9,268 771.4,268 771.4,255.9 771.4,233.3 771.4,222.8
  		738.9,222.8 738.9,233.3 749.4,233.3 749.4,317.6 738.9,317.6 738.9,328.1 771.4,328.1 771.4,317.6 	"/>
  	<polygon class="st1" points="813.9,278.5 813.9,278.5 820.1,278.5 820.1,268 813.9,268 813.9,268 	"/>
  </g>
  </svg>


                    </a>
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

    <!-- style pour display inline block and logo float left -->
    <div class="close" style="white-space: nowrap; overflow-x: auto;">×
      <img src="https://www.hexagone-capital.com/wp-content/uploads/logomodal.png" style="display: inline-block;float:left;">
    </div>
  <div class="modal-text">
    <p style="font-family: LFD !important;font-size:29px !important;">A PROPOS</p>
    <img style="margin-bottom:1.5em;"src="https://www.hexagone-capital.com/wp-content/uploads/barprop.png">
    <div class="mc">
  	<div class="mc-left">
      <p style="font-family: PNR !important;font-size: 13.2px !important;text-transform: uppercase !important;width: 78%;text-align: left;margin-top: 0;">Hexagone Capital accompagne ses clients privés, dans la mise en place de solutions sur-mesure et innovantes afin de répondre à vos attentes en matière de gestion de fortune et de patrimoine.</p>
    </div>
  	<div class="mc-center">
<div id="wrapper">
<div id="mleft"><a href="https://www.hexagone-capital.com/action/ingenierie-patrimoniale" ><img src="https://www.hexagone-capital.com/wp-content/uploads/2019/04/Menu-Bar-White.png" ></a></div>
<div id="mright"><a href="https://www.hexagone-capital.com/action/ingenierie-patrimoniale">Ingenerie patrimoniale</a></div>
</div>
<div id="wrapper">
<div id="mleft"><a href="https://www.hexagone-capital.com/action/gestion-de-portefeuille"><img src="https://www.hexagone-capital.com/wp-content/uploads/2019/04/Menu-Bar-White.png" ></a></div>
<div id="mright"><a href="https://www.hexagone-capital.com/action/gestion-de-portefeuille">Gestion de portefeuille</a></div>
</div>
<div id="wrapper">
<div id="mleft"><a href="https://www.hexagone-capital.com/action/investissement-immobilier"><img src="https://www.hexagone-capital.com/wp-content/uploads/2019/04/Menu-Bar-White.png" ></a></div>
<div id="mright"><a href="https://www.hexagone-capital.com/action/investissement-immobilier">Investissement immobilier</a></div>
</div>

    </div>
  	<div class="mc-right">
<div id="wrapper">
<div id="mleft"><a href="https://www.hexagone-capital.com/action/outils-de-placement-alternatifs"><img src="https://www.hexagone-capital.com/wp-content/uploads/2019/04/Menu-Bar-White.png" ></a></div>
<div id="mright"><a href="https://www.hexagone-capital.com/action/outils-de-placement-alternatifs">Outil de placement alternatif</a></div>
</div>
<div id="wrapper">
<div id="mleft"><a href="https://www.hexagone-capital.com/action/conseil-juridique-et-fiscale"><img src="https://www.hexagone-capital.com/wp-content/uploads/2019/04/Menu-Bar-White.png" ></a></div>
<div id="mright"><a href="https://www.hexagone-capital.com/action/conseil-juridique-et-fiscale">Conseil juridique et fiscale</a></div>
</div>
<div id="wrapper">
<div id="mleft"><a href="https://www.hexagone-capital.com/carriere/"><img src="https://www.hexagone-capital.com/wp-content/uploads/2019/04/Menu-Bar-White.png" ></a></div>
<div id="mright"><a href="https://www.hexagone-capital.com/carriere/">Carrieres</a></div>
</div>
<div id="wrapper">
<div id="mleft"><a href="https://www.hexagone-capital.com/contact/"><img src="https://www.hexagone-capital.com/wp-content/uploads/2019/04/Menu-Bar-White.png" ></a></div>
<div id="mright"><a href="https://www.hexagone-capital.com/contact/">Contact</a></div>
    </div>
  </div>

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
<script>
  window.onscroll = () => {
  const nav = document.querySelector('#nav');
  if(this.scrollY >720) nav.className = 'scroll';
  else nav.className = 'navbar-default';
};
</script>

        </nav>


</head>
