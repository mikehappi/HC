<?php /* Template Name: test Page */ ?>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="wp-content/themes/hx-v1/template-parts/js/modernizr.js"></script> <!-- Modernizr -->
</head>
<style type="text/css">
/* -------------------------------- 

Primary style

-------------------------------- */
*, *::after, *::before {
  box-sizing: border-box;
}

html {
  font-size: 62.5%;
}

body {
  font-size: 1.6rem;
  font-family: "Open Sans", sans-serif;
  color: #ffffff;
  background-color: #22283f;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
body::before {
  /* never visible - this is used in jQuery to check the current MQ */
  content: 'mobile';
  display: none;
}
@media only screen and (min-width: 1050px) {
  body::before {
    /* never visible - this is used in jQuery to check the current MQ */
    content: 'desktop';
  }
}

a {
  color: #267481;
  text-decoration: none;
}

/* -------------------------------- 

Main Components 

-------------------------------- */
@media only screen and (min-width: 1050px) {
  body[data-hijacking="on"] {
    overflow: hidden;
  }
}

.cd-section {
  height: 100vh;
}
.cd-section h2 {
  line-height: 100vh;
  text-align: center;
  font-size: 2.4rem;
}
.cd-section:first-of-type > div {
  background-color: #2b334f;
}
.cd-section:first-of-type > div::before {
  /* alert -> all scrolling effects are not visible on small devices */
  content: 'Effects not visible on mobile!';
  position: absolute;
  width: 100%;
  text-align: center;
  top: 20px;
  z-index: 2;
  font-weight: bold;
  font-size: 1.3rem;
  text-transform: uppercase;
  color: #6a7083;
}
.cd-section:nth-of-type(2) > div {
  background-color: #2e5367;
}
.cd-section:nth-of-type(3) > div {
  background-color: #267481;
}
.cd-section:nth-of-type(4) > div {
  background-color: #fcb052;
}
.cd-section:nth-of-type(5) > div {
  background-color: #f06a59;
}
[data-animation="parallax"] .cd-section > div, [data-animation="fixed"] .cd-section > div, [data-animation="opacity"] .cd-section > div {
  background-position: center center;
  background-repeat: no-repeat;
  background-size: cover;
}
[data-animation="parallax"] .cd-section:first-of-type > div, [data-animation="fixed"] .cd-section:first-of-type > div, [data-animation="opacity"] .cd-section:first-of-type > div {
  background-image: url(wp-content/themes/hx-v1/template-parts/img/img-1.jpg);
}
[data-animation="parallax"] .cd-section:nth-of-type(2) > div, [data-animation="fixed"] .cd-section:nth-of-type(2) > div, [data-animation="opacity"] .cd-section:nth-of-type(2) > div {
  background-image: url("wp-content/themes/hx-v1/template-parts/img/img-2.jpg");
}
[data-animation="parallax"] .cd-section:nth-of-type(3) > div, [data-animation="fixed"] .cd-section:nth-of-type(3) > div, [data-animation="opacity"] .cd-section:nth-of-type(3) > div {
  background-image: url("wp-content/themes/hx-v1/template-parts/img/img-3.jpg");
}
[data-animation="parallax"] .cd-section:nth-of-type(4) > div, [data-animation="fixed"] .cd-section:nth-of-type(4) > div, [data-animation="opacity"] .cd-section:nth-of-type(4) > div {
  background-image: url("wp-content/themes/hx-v1/template-parts/img/img-4.jpg");
}
[data-animation="parallax"] .cd-section:nth-of-type(5) > div, [data-animation="fixed"] .cd-section:nth-of-type(5) > div, [data-animation="opacity"] .cd-section:nth-of-type(5) > div {
  background-image: url("wp-content/themes/hx-v1/template-parts/img/img-5.jpg");
}
data-animation="parallax"] .cd-section:nth-of-type(6) > div, [data-animation="fixed"] .cd-section:nth-of-type(6) > div, [data-animation="opacity"] .cd-section:nth-of-type(6) > div {
  background-image: url(wp-content/themes/hx-v1/template-parts/img/img-1.jpg);
}
@media only screen and (min-width: 1050px) {
  .cd-section h2 {
    font-size: 4rem;
    font-weight: 300;
  }
  [data-hijacking="on"] .cd-section {
    opacity: 0;
    visibility: hidden;
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
  }
  [data-hijacking="on"] .cd-section > div {
    visibility: visible;
  }
  [data-hijacking="off"] .cd-section > div {
    opacity: 0;
  }
  [data-animation="rotate"] .cd-section {
    /* enable a 3D-space for children elements */
    -webkit-perspective: 1800px;
    -moz-perspective: 1800px;
    perspective: 1800px;
  }
  [data-hijacking="on"][data-animation="rotate"] .cd-section:not(:first-of-type) {
    -webkit-perspective-origin: center 0;
    -moz-perspective-origin: center 0;
    perspective-origin: center 0;
  }
  [data-animation="scaleDown"] .cd-section > div, [data-animation="gallery"] .cd-section > div, [data-animation="catch"] .cd-section > div {
    box-shadow: 0 0 0 rgba(25, 30, 46, 0.4);
  }
  [data-animation="opacity"] .cd-section.visible > div {
    z-index: 1;
  }
}

@media only screen and (min-width: 1050px) {
  .cd-section:first-of-type > div::before {
    display: none;
  }
}
@media only screen and (min-width: 1050px) {
  .cd-section > div {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    /* Force Hardware Acceleration */
    -webkit-transform: translateZ(0);
    -moz-transform: translateZ(0);
    -ms-transform: translateZ(0);
    -o-transform: translateZ(0);
    transform: translateZ(0);
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
  }
  [data-hijacking="on"] .cd-section > div {
    position: absolute;
  }
  [data-animation="rotate"] .cd-section > div {
    -webkit-transform-origin: center bottom;
    -moz-transform-origin: center bottom;
    -ms-transform-origin: center bottom;
    -o-transform-origin: center bottom;
    transform-origin: center bottom;
  }
}

.cd-vertical-nav {
  /* lateral navigation */
  position: fixed;
  z-index: 1;
  right: 3%;
  top: 50%;
  bottom: auto;
  -webkit-transform: translateY(-50%);
  -moz-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  -o-transform: translateY(-50%);
  transform: translateY(-50%);
  display: none;
}
.cd-vertical-nav a {
  display: block;
  height: 40px;
  width: 40px;
  /* image replace */
  overflow: hidden;
  text-indent: 100%;
  white-space: nowrap;
  background: url(wp-content/themes/hx-v1/template-parts/img/cd-icon-arrow.svg) no-repeat center center;
}
.cd-vertical-nav a.cd-prev {
  -webkit-transform: rotate(180deg);
  -moz-transform: rotate(180deg);
  -ms-transform: rotate(180deg);
  -o-transform: rotate(180deg);
  transform: rotate(180deg);
  margin-bottom: 10px;
}
.cd-vertical-nav a.inactive {
  visibility: hidden;
  opacity: 0;
  -webkit-transition: opacity 0.2s 0s, visibility 0s 0.2s;
  -moz-transition: opacity 0.2s 0s, visibility 0s 0.2s;
  transition: opacity 0.2s 0s, visibility 0s 0.2s;
}
@media only screen and (min-width: 1050px) {
  .cd-vertical-nav {
    display: block;
  }
}


/* http://meyerweb.com/eric/tools/css/reset/ 
   v2.0 | 20110126
   License: none (public domain)
*/

html, body, div, span, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, img, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
b, u, i, center,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td,
article, aside, canvas, details, embed, 
figure, figcaption, footer, header, hgroup, 
menu, nav, output, ruby, section, summary,
time, mark, audio, video {
	margin: 0;
	padding: 0;
	border: 0;
	font-size: 100%;
	font: inherit;
	vertical-align: baseline;
}
/* HTML5 display-role reset for older browsers */
article, aside, details, figcaption, figure, 
footer, header, hgroup, menu, nav, section, main {
	display: block;
}
body {
	line-height: 1;
}
ol, ul {
	list-style: none;
}
blockquote, q {
	quotes: none;
}
blockquote:before, blockquote:after,
q:before, q:after {
	content: '';
	content: none;
}
table {
	border-collapse: collapse;
	border-spacing: 0;
}

</style>
    <!-- hijacking: on/off - animation: none/scaleDown/rotate/gallery/catch/opacity/fixed/parallax -->
<body data-hijacking="on" data-animation="paralax">

                    <section class="cd-section visible">
                        <div>
                        <?php get_header(2); ?>
                            <h2>Page Scroll Effects</h2>
                        </div>
                    </section>

                    <section class="cd-section">
                        <div>
                        <?php get_header(); ?>
                            <h2>Section 2</h2>
                        </div>
                    </section>

                    <section class="cd-section">
                        <div>
                        <?php get_header(3); ?>
                            <h2>Section 3</h2>
                        </div>
                    </section>

                    <section class="cd-section">
                        <div>
                        <?php get_header(4); ?>
                            <h2>Section 4</h2>
                        </div>
                    </section>

                    <section class="cd-section">
                        <div>
                        <?php get_header(5); ?>
                            <h2>Section 5</h2>
                        </div>
                    </section>
                    <section class="cd-section">
                        <div>
                        <?php get_header(6); ?>
                            <h2>Section 6</h2>
                        </div>
                    </section>

                    <nav>
                        <ul class="cd-vertical-nav">
                            <li><a href="#0" class="cd-prev inactive">Next</a></li>
                            <li><a href="#0" class="cd-next">Prev</a></li>
                        </ul>
                    </nav> <!-- .cd-vertical-nav -->
 <script src="wp-content/themes/hx-v1/template-parts/js/jquery-2.1.4.js"></script>
<script src="wp-content/themes/hx-v1/template-parts/js/velocity.min.js"></script>
<script src="wp-content/themes/hx-v1/template-parts/js/velocity.ui.min.js"></script>
<script src="wp-content/themes/hx-v1/template-parts/js/main.js"></script> <!-- Resource jQuery -->            
</body>









