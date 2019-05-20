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
	 viewBox="0 0 2211 1870.9" style="enable-background:new 0 0 2211 1870.9;" xml:space="preserve">

<polygon class="st0" points="485.8,606.1 485.8,928.6 558.2,969 558.2,646.5 485.8,606.1 "/>
<polygon class="st0" points="181.4,925.6 477.2,1090.6 558.2,1045.3 181.4,835.1 "/>
<polygon class="st0" points="600.2,984.6 600.2,1071.1 747.9,988.7 747.9,902.2 "/>
<polygon class="st0" points="386,1222.1 462.5,1264.7 600.2,1187.9 600.2,1102.6 "/>
<g id="_x3C_HX_x3E_">
	<g>
		<path class="st1" d="M1582.2,932c-14.5,3.2-26.4,4.8-35.7,4.8c-16.6,0-29.8-5-39.5-15s-14.6-23.5-14.6-40.5
			c0-17.5,4.8-31.1,14.4-40.7c9.6-9.6,23.2-14.5,40.7-14.5c6.2,0,12.3,0.4,18.2,1.1c5.9,0.7,11.7,1.9,17.4,3.4V853h-11.9l-0.9-10.5
			c-3.9-2-7.7-3.4-11.5-4.3s-7.5-1.4-11.2-1.4c-10,0-17.8,4-23.4,12c-5.7,8-8.5,19-8.5,33.1c0,13.8,3.2,24.6,9.4,32.5
			c6.3,7.9,14.9,11.8,25.9,11.8c3,0,6.1-0.5,9.1-1.6v-27.4h-10.5v-10.5h40.4v10.5h-7.9L1582.2,932L1582.2,932z"/>
		<path class="st1" d="M1694.9,926.3c8.9,0,16.1-4.1,21.5-12.3c5.4-8.2,8.1-19,8.1-32.5c0-13.5-2.7-24.4-8.1-32.5
			c-5.4-8.2-12.6-12.2-21.5-12.2c-8.9,0-16.1,4.1-21.4,12.2c-5.4,8.2-8.1,19-8.1,32.5c0,13.5,2.7,24.4,8.1,32.5
			C1678.9,922.2,1686,926.3,1694.9,926.3 M1694.9,936.8c-16.4,0-29.3-4.9-38.7-14.8c-9.4-9.9-14.2-23.4-14.2-40.5
			s4.7-30.6,14.2-40.5c9.4-9.9,22.4-14.8,38.7-14.8s29.3,4.9,38.8,14.8s14.2,23.4,14.2,40.5c0,17.1-4.7,30.6-14.2,40.5
			C1724.2,931.9,1711.3,936.8,1694.9,936.8"/>
	</g>
	<polygon class="st1" points="1865.9,828.8 1865.9,839.4 1876.4,839.4 1876.4,904.1 1824,828.8 1798.5,828.8 1798.5,839.4
		1809,839.4 1809,839.4 1827.9,866.8 1827.9,866.8 1875.8,935.3 1890.8,935.3 1890.8,839.4 1901.4,839.4 1901.4,828.8 	"/>
	<polygon class="st1" points="1438.7,923.7 1400.8,827.5 1384.3,827.5 1346.3,923.7 1340.1,923.7 1340.1,934.2 1368.6,934.2
		1368.6,923.7 1358,923.7 1365.9,903.7 1402.3,903.7 1398,892.7 1370.3,892.7 1387,850.3 1400.9,885.3 1400.9,885.3 1402.8,890
		1403.8,892.7 1403.8,892.7 1408.2,903.7 1408.2,903.7 1416.1,923.7 1405.6,923.7 1405.6,934.2 1444.9,934.2 1444.9,923.7 	"/>
	<g>
		<path class="st1" d="M1002,1089.3c-10.7,4.6-22.3,6.8-34.7,6.8c-17.6,0-31.3-4.9-41.2-14.6s-14.8-23.4-14.8-40.8
			c0-17.6,4.8-31.1,14.4-40.8c9.6-9.6,23.2-14.4,40.8-14.4c5.4,0,11,0.4,16.7,1.1c5.7,0.8,11.7,1.9,17.8,3.4v22.1h-11.4l-1.1-10.5
			c-3.6-1.8-7.2-3.2-10.8-4.2c-3.6-0.9-7.3-1.4-10.9-1.4c-10,0-17.8,4-23.6,11.9c-5.7,7.9-8.6,18.8-8.6,32.7c0,13.5,3.3,24.2,9.9,32
			s15.5,11.8,26.7,11.8c10.5,0,20.8-2.6,30.7-7.8L1002,1089.3L1002,1089.3z"/>
		<path class="st1" d="M1234.2,1039.7h3.5c8.2,0,14.4-2,18.5-5.9c4.1-3.9,6.2-9.8,6.2-17.6c0-5.8-1.8-10.2-5.3-13.1
			s-8.8-4.4-15.9-4.4h-7V1039.7z M1234.2,1050.2v32.8h11.5v10.5h-43.1v-10.5h10.5v-84.3h-10.5v-10.5h45.8c11.2,0,20,2.4,26.2,7.3
			c6.2,4.9,9.3,11.7,9.3,20.6c0,11.2-3.8,19.7-11.2,25.5s-18.5,8.7-33,8.7L1234.2,1050.2L1234.2,1050.2z"/>
	</g>
	<polygon class="st1" points="1365,998.7 1365,1082.9 1375.5,1082.9 1375.5,1093.5 1332.4,1093.5 1332.4,1082.9 1343,1082.9
		1343,998.7 1332.4,998.7 1332.4,988.1 1375.5,988.1 1375.5,998.7 	"/>
	<polygon class="st1" points="1461.5,999.5 1434.7,999.5 1434.7,1010.9 1423.3,1010.9 1423.3,988.1 1521.6,988.1 1521.6,1010.9
		1510.2,1010.9 1510.2,999.5 1483.5,999.5 1483.5,1082.9 1494,1082.9 1494,1093.5 1450.9,1093.5 1450.9,1082.9 1461.5,1082.9 	"/>
	<polygon class="st1" points="1798.5,1093.5 1718.3,1093.5 1718.3,1082.9 1728.8,1082.9 1728.8,998.7 1718.3,998.7 1718.3,988.1
		1761.4,988.1 1761.4,998.7 1750.8,998.7 1750.8,1082.1 1787.1,1082.1 1787.1,1070.6 1798.5,1070.6 	"/>
	<polygon class="st1" points="1150.3,1082.9 1112.3,986.8 1095.8,986.8 1057.8,1082.9 1051.6,1082.9 1051.6,1093.5 1080.2,1093.5
		1080.2,1082.9 1069.6,1082.9 1077.5,1062.9 1113.9,1062.9 1109.6,1052 1081.8,1052 1098.6,1009.6 1112.5,1044.7 1112.5,1044.7
		1114.3,1049.3 1115.4,1052 1115.4,1052 1119.7,1062.9 1119.7,1062.9 1127.7,1082.9 1117.1,1082.9 1117.1,1093.5 1156.5,1093.5
		1156.5,1082.9 	"/>
	<polygon class="st1" points="1666,1082.9 1628.1,986.8 1611.6,986.8 1573.6,1082.9 1567.4,1082.9 1567.4,1093.5 1595.9,1093.5
		1595.9,1082.9 1585.4,1082.9 1593.3,1062.9 1629.7,1062.9 1625.3,1052 1597.6,1052 1614.3,1009.6 1628.2,1044.7 1628.3,1044.7
		1630.1,1049.3 1631.2,1052 1631.2,1052 1635.5,1062.9 1635.5,1062.9 1643.4,1082.9 1632.9,1082.9 1632.9,1093.5 1672.2,1093.5
		1672.2,1082.9 	"/>
	<polygon class="st1" points="1142.3,892 1142.3,867.4 1131.8,867.4 1131.8,874.5 1097.5,874.5 1097.5,885 1131.8,885 1131.8,892
		"/>
	<polygon class="st1" points="1145.7,911.3 1145.7,922.8 1109.8,922.8 1109.8,885 1109.8,885 1109.8,874.5 1109.8,874.5
		1109.8,839.4 1142.3,839.4 1142.3,849.9 1153.7,849.9 1153.7,828.8 1077.2,828.8 1077.2,839.4 1087.8,839.4 1087.8,923.7
		1077.2,923.7 1077.2,934.2 1157.1,934.2 1157.1,911.3 	"/>
	<polygon class="st1" points="2015.8,892 2015.8,867.4 2005.3,867.4 2005.3,874.5 1972.3,874.5 1972.3,885 2005.3,885 2005.3,892
		"/>
	<polygon class="st1" points="1950.8,828.8 1950.8,839.4 1961.3,839.4 1961.3,923.7 1950.8,923.7 1950.8,934.2 2030.6,934.2
		2030.6,911.3 2019.2,911.3 2019.2,922.8 1983.3,922.8 1983.3,885 1983.3,885 1983.3,874.5 1983.3,874.5 1983.3,839.4 2015.8,839.4
		2015.8,849.9 2027.2,849.9 2027.2,828.8 	"/>
	<polygon class="st1" points="1263.9,873 1287.2,839.4 1293.3,839.4 1293.3,828.8 1265,828.8 1265,839.4 1273.7,839.4 1257.3,863.3
			"/>
	<polygon class="st1" points="1288.2,923.7 1266.3,886.9 1254,868.8 1249.8,862.2 1236.1,839.4 1244.8,839.4 1244.8,828.8
		1205.3,828.8 1205.3,839.4 1211.5,839.4 1236.8,882 1209.8,923.7 1203.6,923.7 1203.6,934.2 1231.6,934.2 1231.6,923.7
		1222.9,923.7 1244.1,891.1 1263.6,923.7 1254.9,923.7 1254.9,934.2 1294.4,934.2 1294.4,923.7 	"/>
	<polygon class="st1" points="1823.4,923.7 1823.4,868.8 1817.5,860.2 1809,847.9 1809,923.7 1798.5,923.7 1798.5,934.2 1834,934.2
		1834,923.7 	"/>
	<polygon class="st1" points="1027.9,839.4 1027.9,828.8 995.3,828.8 995.3,839.4 995.3,862 995.3,874 1001.5,874 1001.5,884.6
		995.3,884.6 995.3,913.1 995.3,923.7 995.3,934.2 1027.9,934.2 1027.9,923.7 1017.3,923.7 1017.3,839.4 	"/>
	<polygon class="st1" points="952.8,913.1 952.8,884.6 995.3,884.6 995.3,874 952.8,874 952.8,862 952.8,839.4 952.8,828.8
		920.3,828.8 920.3,839.4 930.8,839.4 930.8,923.7 920.3,923.7 920.3,934.2 952.8,934.2 952.8,923.7 	"/>
	<polygon class="st1" points="995.3,884.6 995.3,884.6 1001.5,884.6 1001.5,874 995.3,874 995.3,874 	"/>
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
  if(this.scrollY >= 684) nav.className = 'scroll'; else nav.className = 'navbar-default';
};
</script>

        </nav>


</head>
