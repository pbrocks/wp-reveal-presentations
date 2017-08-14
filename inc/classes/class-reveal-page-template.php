<?php

defined( 'ABSPATH' ) || die( 'File cannot be accessed directly' );

new Reveal_Page_Template();

class Reveal_Page_Template {

	public static function __construct() {
		// add_filter( 'theme_page_templates', array( __CLASS__, 'add_page_template_to_dropdown' ) );
		// add_filter( 'template_include', array( __CLASS__, 'change_page_template' ), 99 );
		// add_action( 'admin_head', array( __CLASS__, 'print_in_head' ), 99 );
		// add_action( 'wp_head', array( __CLASS__, 'print_in_head' ), 99 );
		add_action( 'wp_enqueue_scripts', array( __CLASS__, 'enqueue_scripts' ) );
		add_shortcode( 'present-with-reveal', array( __CLASS__, 'present_with_reveal_js' ) );
	}

	public static function enqueue_scripts() {
		wp_register_script( 'reveal-jbase', plugin_dir_url( __FILE__ ) . '/reveal-js/js/reveal.js', array( 'jquery' ), 'version', true );
		wp_enqueue_script( 'reveal-min', plugins_url( '../reveal-js/lib/js/head.min.js', __FILE__ ), array( 'jquery' ), 'version', true );
		wp_register_style( 'reveal-base', plugin_dir_url( __FILE__ ) . '../reveal-js/css/reveal.css' );
		// wp_register_style( 'reveal-black', plugins_url( '../reveal-js/css/theme/black.css', __FILE__ ) );
		wp_register_style( 'reveal-league', plugins_url( '../reveal-js/css/theme/league.css', __FILE__ ) );
		wp_enqueue_style( 'reveal-base' );
		wp_enqueue_script( 'reveal-jbase' );
		// wp_enqueue_style( 'reveal-black' );
		wp_enqueue_style( 'reveal-league' );
	}

	/**
	 * Add page templates.
	 *
	 * @param array $templates The list of page templates
	 *
	 * @return array  $templates  The modified list of page templates
	 */
	public static function present_with_reveal_folder() {
		echo '<h2 style="text-align:center;">' . __FILE__ . '</h2>';
		include( plugin_dir_url( __FILE__ ) . '../templates/reveal-page-template.php' );
	}

		public static function present_with_reveal_js1() {
	/**
	 * Reveal Page template
	 */
	// get_header();
	?>
	<!doctype html>
	<html lang="en">

	  <head>
		<meta charset="utf-8">

		<title>reveal.js – The HTML Presentation Framework</title>

		<meta name="description" content="A framework for easily creating beautiful presentations using HTML">
		<meta name="author" content="Hakim El Hattab">

		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, minimal-ui">

		<link rel="stylesheet" href="<?php echo REVEAL_JS_PATH; ?>/reveal-js/css/reveal.css">
		<link rel="stylesheet" href="<?php echo REVEAL_JS_PATH; ?>/reveal-js/css/theme/solarized.css" id="theme">

		<!-- Code syntax highlighting -->
		<link rel="stylesheet" href="<?php echo REVEAL_JS_PATH; ?>/reveal-js/lib/css/zenburn.css">

		<!-- Printing and PDF exports -->
		<script>
		  var link = document.createElement( 'link' );
		  link.rel = 'stylesheet';
		  link.type = 'text/css';
		  link.href = window.location.search.match( /print-pdf/gi ) ? 'css/print/pdf.css' : 'css/print/paper.css';
		  document.getElementsByTagName( 'head' )[0].appendChild( link );
		</script>

		<!--[if lt IE 9]>
		<script src="lib/js/html5shiv.js"></script>
		<![endif]-->
	  </head>

	  <body>

		<div class="reveal">

		  <div class="slides">

			<section data-markdown>
	# GPL
	### The Good Parts of WordPress
	by [@anttiviljami](http://twitter.com/anttiviljami)
			</section>

			<section>
			  <section data-markdown>

			  http://www.colorhexa.com/93e9da

	## <a href="http://www.colorhexa.com/93e9af" target="_blank">http://www.colorhexa.com/93e9af</a>

#a2e993 don't use
#93e9af
#93e9da aqua
Analogous Color
 
#e993a2 pinkish-red
#93e9af
#da93e9
Split Complementary Color
 
#e9af93 burnt orage
#93e9af
#af93e9
Triadic Color

#cde993 olive don't use
#93e9af
#af93e9 purple
#e993cd pinkish-red
Tetradic Color

			  </section>
			  <section data-markdown>
	GNU General Public License
	(version 2 or later)
			  </section>
			  <section data-markdown>
	## It's Open Source !
	[![Make WordPress Core](http://anttiviljami.github.io/gpl-good-parts-of-wordpress/assets/screenshot0.png)](https://core.trac.wordpress.org/browser/)
			  </section>
			  <section data-markdown>
	[![license.txt](http://anttiviljami.github.io/gpl-good-parts-of-wordpress/assets/screenshot1.png)](https://github.com/WordPress/WordPress)
			  </section>
			  <section data-markdown>
	[![license.txt](http://anttiviljami.github.io/gpl-good-parts-of-wordpress/assets/screenshot2.png)](https://github.com/WordPress/WordPress)
			  </section>
			</section>

			<section>
			  <section data-markdown>
	## TL;DR;
	[![gpl license](http://anttiviljami.github.io/gpl-good-parts-of-wordpress/assets/screenshot3.png)](http://www.gnu.org/licenses/old-licenses/gpl-2.0.txt)
			  </section>
			  <section data-markdown>
	## What else does it say?
			  </section>
			</section>

			<section data-markdown data-background="http://anttiviljami.github.io/gpl-good-parts-of-wordpress/assets/rms.jpg">
	## Let's ask this guy
	Image Source: [https://stallman.org](stallman.org)
			</section>

			<section>
			  <section data-markdown>
	## The 4 Freedoms of Free Software
			  </section>
			  <section>
	<ol start="0">
	  <li>The freedom to run the program as you wish, for any purpose</li>
	</ol>
			  </section>
			  <section>
	<ol start="1">
	  <li>The freedom to study how the program works, and change it so it does your computing as you wish</li>
	</ol>
			  </section>
			  <section>
	<ol start="2">
	  <li>The freedom to redistribute copies so you can help your neighbor</li>
	</ol>
			  </section>
			  <section>
	<ol start="3">
	  <li>The freedom to distribute copies of your modified versions to others</li>
	</ol>
			  </section>
			</section>

			<section data-markdown data-background="http://i.giphy.com/OjBocHTklyQda.gif">
	## OK, cool
			</section>

			<section data-markdown>
	### But seriously,
	why should I care?
			</section>


			<section>
			  <section data-markdown>
	Did you know that all your WordPress code is GPL too?
			  </section>
			  <section data-markdown data-background="http://i.giphy.com/l41lUZGnCzLErXevK.gif">
	### Yeah, it is.
			  </section>
			  <section data-markdown>
	That's a good thing! Right?
			  </section>
			  <section data-markdown data-background="http://anttiviljami.github.io/gpl-good-parts-of-wordpress/assets/ballmer.jpg">
	> “(GPL) is a cancer that attaches itself in an intellectual property sense to everything it touches.”

	*- Steve Ballmer*
			  </section>
			</section>

			<section data-markdown data-background="http://i.giphy.com/UxJjs7Kah20OA.gif">
	Open Source is awesome!
			</section>

			<section data-markdown>
	### You own it
	WordPress is freely available to anyone to use for any purpose, and *without permission*.
			</section>

			<section>
			  <section data-markdown>
	### Quality
	Lots of people, even huge companies rely on WordPress. Everyone benefits.
			  </section>
			</section>

			<section>
			  <section data-markdown>
	### Extendable
	You can create your own plugins and themes to do anything you want.
			  </section>

			  <section data-markdown>
	Yes,

	You are allowed to sell GPL themes and plugins.
			  </section>
			</section>
			<section>

			  <section data-markdown>
	## Misconception #1
	You can't make money with GPL code.
			  </section>

			  <section data-markdown>
	These guys seem to be doing pretty well
			  </section>

			  <section data-background="#fff">
				<table>
				  <tr>
					<td style="vertical-align:middle" width="33%">
				<img style="border:none;backround:transparent;box-shadow:none" alt="Envato" src="http://anttiviljami.github.io/gpl-good-parts-of-wordpress/assets/envato.png">
					</td>
					<td style="vertical-align:middle" width="33%">
				<img style="border:none;backround:transparent;box-shadow:none" alt="WooThemes" src="http://anttiviljami.github.io/gpl-good-parts-of-wordpress/assets/woothemes.png">
					</td>
					<td style="vertical-align:middle" width="33%">
				<img style="border:none;backround:transparent;box-shadow:none" alt="Yoast" src="http://anttiviljami.github.io/gpl-good-parts-of-wordpress/assets/yoast.png">
					</td>
				  </tr>
				</table>
			  </section>
			</section>

			<section>
			  <section data-markdown>
	## Misconception #2
	You don't have to pay money for GPL plugins or themes
			  </section>
			  <section data-markdown>
	The Premium Plugin / Theme model:

	0. Updates
	0. Support
	0. Bug Fixes
			  </section>
			  <section>
				<p>GPL means Free as in <span class="fragment highlight-blue">Freedom</span></p>
			  </section>
			  <section data-background="http://i.giphy.com/zrj0yPfw3kGTS.gif">
				<p>Not as in <span class="fragment highlight-red">Free Beer</span></p>
			  </section>
			</section>

			<section>
			  <section data-markdown>
	## Misconception #3
	Premium Plugins and Themes aren't GPL
			  </section>
			  <section data-markdown>
	Yes, They are.
			  </section>
			  <section data-markdown data-background="http://anttiviljami.github.io/gpl-good-parts-of-wordpress/assets/matt.jpg">
	> "PHP in WordPress themes must be GPL, artwork and CSS may be but are not required."

	*- Matt Mullenweg*
			  </section>
			  <section>
				<p>Plugins, by definition, use WordPress GPL codebase.</p>
				<p>They are considered <i>derivatives</i>.</p>
				<p class="fragment">So are themes.</p>
			  </section>
			</section>

			<section>
			  <section data-markdown>
	## Misconception #4
	Open Source software like WordPress is developed by Hobbyists for free
			  </section>

			  <section>
			  <h4>Venture investments in Open Source</h4>
			  <table>
				<thead>
				  <tr>
					<th></th>
					<th>2011</th>
					<th>2012</th>
					<th>2013</th>
					<th>2014</th>
				  </tr>
				</thead>
				<tbody>
				  <tr>
					<th>Investments</th>
					<td>$398M</td>
					<td>$669M</td>
					<td>$920M</td>
					<td>$1.3B</td>
				  </tr>
				  <tr>
					<th>Average Deal</th>
					<td>$8M</td>
					<td>$14M</td>
					<td>$18M</td>
					<td>$33.9M</td>
				  </tr>
				  <tr>
					<th>Num. deals</th>
					<td>49</td>
					<td>49</td>
					<td>51</td>
					<td>39</td>
				  </tr>
				  <tr></tr>
				</tbody>
			  </table>
			  <p><small>Source: 2015 Future of Open Source Survey</small></p>
			  </section>

			  <section data-markdown>
	Would you do it for free?
			  </section>

			  <!--
			  <section data-background="http://i.giphy.com/l41lIkTqv4NTHPktO.gif">
				<h3>Open Source is <span class="fragment highlight-green">big business</span></h3>
			  </section>
			  -->

			</section>

			<section>
			  <p><span class="fragment highlight-blue">Open Source</span> and <span class="fragment highlight-blue">GPL</span> are what make WordPress so great!</p>
			</section>

			<section data-background="http://i.giphy.com/6nuiJjOOQBBn2.gif">
			  <h3>Support and celebrate it!</h3>
			</section>

			<section data-markdown>
	### Image credits:

	[giphy.com](https://giphy.com),
	[wikipedia.org](https://wikipedia.org),
	[wired.com](https://wired.com),
	[stallman.org](https://stallman.org)
			</section>

		  </div>

		</div>

		<script src="<?php echo REVEAL_JS_PATH; ?>/reveal-js/lib/js/head.min.js"></script>
		<script src="<?php echo REVEAL_JS_PATH; ?>/reveal-js/js/reveal.js"></script>

		<script>

		  // Full list of configuration options available at:
		  // https://github.com/hakimel/reveal.js#configuration
		  Reveal.initialize({
			controls: true,
			progress: true,
			history: true,
			center: true,

			transition: 'slide', // none/fade/slide/convex/concave/zoom

			// Optional reveal.js plugins
			dependencies: [
			  { src: '<?php echo REVEAL_JS_PATH; ?>/reveal-js/lib/js/classList.js', condition: function() { return !document.body.classList; } },
			  { src: '<?php echo REVEAL_JS_PATH; ?>/reveal-js/plugin/markdown/marked.js', condition: function() { return !!document.querySelector( '[data-markdown]' ); } },
			  { src: '<?php echo REVEAL_JS_PATH; ?>/reveal-js/plugin/markdown/markdown.js', condition: function() { return !!document.querySelector( '[data-markdown]' ); } },
			  { src: '<?php echo REVEAL_JS_PATH; ?>/reveal-js/plugin/highlight/highlight.js', async: true, callback: function() { hljs.initHighlightingOnLoad(); } },
			  { src: '<?php echo REVEAL_JS_PATH; ?>/reveal-js/plugin/zoom-js/zoom.js', async: true },
			  { src: '<?php echo REVEAL_JS_PATH; ?>/reveal-js/plugin/notes/notes.js', async: true }
			]
		  });

		</script>

	  </body>
	</html>
	<?php
	}

		public static function present_with_reveal_js() {
			?>
	<!doctype html>
	<html lang="en">

	<head>
		<meta charset="utf-8">

		<title>Fullscreen slides with Reveal.js</title>

		<meta name="description" content="A plugin for reveal.js">
		<meta name="author" content="Asvin Goel">

		<meta name="apple-mobile-web-app-capable" content="yes" />
		<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />

		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, minimal-ui">

		<!-- <link rel="stylesheet" href="../reveal.js/css/reveal.css"> -->
		<link rel="stylesheet" href="<?php echo REVEAL_JS_PATH; ?>/reveal-js/css/reveal.css" id="theme">
		<link rel="stylesheet" href="<?php echo REVEAL_JS_PATH; ?>/reveal-js/css/theme/simple.css" id="theme">
		<!-- <link rel="stylesheet" href="../reveal.js/css/theme/simple.css" id="theme"> -->

		<!-- Code syntax highlighting -->
		<!-- <link rel="stylesheet" href="../reveal.js/lib/css/zenburn.css"> -->

		<link rel="stylesheet" href="<?php echo REVEAL_JS_PATH; ?>/reveal-js/lib/css/zenburn.css" id="theme">

		<!-- Font awesome -->
		<!--
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		-->	
		<link rel="stylesheet" href="../reveal.js-plugins/menu/font-awesome-4.3.0/css/font-awesome.min.css">


		<!-- Printing and PDF exports -->
		<script>
				var link = document.createElement( 'link' );
				link.rel = 'stylesheet';
				link.type = 'text/css';
				link.href = window.location.search.match( /print-pdf/gi ) ? '../reveal.js/css/print/pdf.css' : '../reveal.js/css/print/paper.css';
				document.getElementsByTagName( 'head' )[0].appendChild( link );
		</script>

		<!--[if lt IE 9]>
		<script src="../reveal.js/lib/js/html5shiv.js"></script>
		<![endif]-->

	</head>

	<body>

		<div class="reveal">
			<!-- Any section element inside of this container is displayed as a slide -->
			<div class="slides" >
				<section>
					<h1>Fullscreen slides with Reveal.js</h1>
					<p>
						<small>Created by <a href="http://www.telematique.eu" >Asvin Goel</a></small>
					</p>
				</section>
				<section>
					<section>
						<p>Reveal.js is great in showing slides in the same way on different screens with different sizes and aspect ratios.</p>
					</section>
					<section>
						<p>However, by default not all of the screen can be used for presentation.</p>
					</section>
					<section>
						<p>Sometimes you want to use all of the screen and this plugin allows you to.</p>
					</section>
					<section>
						<p>Just include the <code>data-fullscreen</code> attribute to the section tag and the slide will use the entire screen.</p>
					</section>
				</section>
				<section>
					<section>
						<p>How about showing your next holiday location?</p>
					</section>
					<section data-fullscreen>
						<iframe class="stretch" data-src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d61206.89156051744!2d-151.77366863890407!3d-16.50433878928727!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sde!4v1467468929561"></iframe>
					</section>
				</section>
				<section>
					<section>
						<p>Or presenting some Google Spreadsheet?</p>
					</section>
					<section data-fullscreen>
						<iframe class="stretch" data-src="https://docs.google.com/spreadsheets/d/1HH4c7Wdcd6RBIbaw7WsTI4iYjgJAhCAul2td93I-coA/edit?usp=sharing"></iframe>
					</section>
				</section>
	<!--
				<section>
					<section>
						<p>Or creating a BPMN model?</p>
					</section>
					<section data-fullscreen>
						<iframe class="stretch" data-src="http://demo.bpmn.io/s/start"></iframe>
					</section>
				</section>
	-->
				<section>
					<section>
						<p>Note that the fullscreen slides may look different on different screens.</p>
					</section>
					<section>
						<p>It is advisable to only use the fullscreen mode for responsive content.</p>
					</section>
				</section>
				<section>
				<h2>The end</h2>

					<p>Check out other plugins by clicking on &nbsp;<a href="#" onclick="RevealMenu.toggle(); return false;"><i class="fa fa-bars"></i></a>&nbsp; and then on "Plugins <i class="fa fa-external-link"></i>".</p>
					<p>Have a look at the source code & documentation on <a href="https://github.com/rajgoel/reveal.js-plugins">Github</a>.</p>
						
				</section>

			</div>
			<div style="position: fixed; right: 60px; bottom: 30px; z-index: 30; font-size: 24px; "><a href="#" onclick="Reveal.prev(); return false;"><i class="fa fa-caret-left"></i></a></div>
			<div style="position: fixed; right: 30px; bottom: 30px; z-index: 30; font-size: 24px; "><a href="#" onclick="Reveal.next(); return false;"><i class="fa fa-caret-right"></i></a></div>
		</div>



		<!-- <script src="../reveal.js/lib/js/head.min.js"></script> -->
		<!-- <script src="../reveal.js/js/reveal.js"></script> -->
	<script src="<?php echo REVEAL_JS_PATH; ?>/reveal-js/lib/js/head.min.js"></script>
		<script src="<?php echo REVEAL_JS_PATH; ?>/reveal-js/js/reveal.js"></script>

		<script>

				// Full list of configuration options available here:
				// https://github.com/hakimel/reveal.js#configuration
				Reveal.initialize({
					controls: false,
					progress: true,
					history: true,
					center: true,
					width: 1200,
					height: 800,
					mouseWheel: true,
					previewLinks: true,
					menu: { // Menu works best with font-awesome installed: sudo apt-get install fonts-font-awesome
						themes: false,
						transitions: false,
						markers: true,
						hideMissingTitles: true,
						keyboard: true,
						custom: [
					            { title: 'Plugins', icon: '<i class="fa fa-external-link"></i>', src: 'toc.html' },
					            { title: 'About', icon: '<i class="fa fa-info"></i>', src: 'about.html' }
					        ]
					},
					theme: Reveal.getQueryHash().theme, // available themes are in /css/theme
					transition: Reveal.getQueryHash().transition || 'default', // none/fade/slide/convex/concave/zoom

					// Optional libraries used to extend on reveal.js
					dependencies: [
						{ src: '../reveal.js/lib/js/classList.js', condition: function() { return !document.body.classList; } },
						{ src: '../reveal.js/plugin/highlight/highlight.js', async: true, callback: function() { hljs.initHighlightingOnLoad(); } },
						{ src: '../reveal.js-plugins/fullscreen/fullscreen.js' },
						{ src: '../reveal.js-plugins/menu/menu.js' },
					]
				});
		</script>

<!-- 	<a href="https://github.com/rajgoel/reveal.js-plugins"><img style="position: absolute; top: 0; left: 0; border: 0;" src="https://camo.githubusercontent.com/82b228a3648bf44fc1163ef44c62fcc60081495e/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f6c6566745f7265645f6161303030302e706e67" alt="Fork me on GitHub" data-canonical-src="https://s3.amazonaws.com/github/ribbons/forkme_left_red_aa0000.png"></a> -->

	</body>
	</html>
	<?php
	}

	/**
	 * Add page templates.
	 *
	 * @param array $templates The list of page templates
	 *
	 * @return array  $templates  The modified list of page templates
	 */
	public static function print_in_head() {
		$templates['plugin'] = plugin_dir_path( __FILE__ ) . '../templates/reveal-page-template.php';
		$templates['script'] = plugins_url( '/../js/drag-drop.js', __FILE__ );

		$templates['file'] = __FILE__;
		 // ] = __( 'Reveal Page Template', 'reveal-with-gutenberg' );
		echo '<pre><h3 style="text-align: center; color: salmon;">';
		// var_dump( $var );
		print_r( $templates );
		echo '</h3></pre>';
		return $templates;
	}

	/**
	 * Add page templates.
	 *
	 * @param array $templates The list of page templates
	 *
	 * @return array  $templates  The modified list of page templates
	 */
	public static function add_page_template_to_dropdown( $templates ) {
		// $templates[ plugin_dir_path( __FILE__ ) . '../templates/reveal-page-template.php' ] = __( 'Reveal Page Template', 'reveal-with-gutenberg' );
		return $templates;
	}

	/**
	 * Change the page template to the selected template on the dropdown
	 * Change the single template to the fixed template in the plugin
	 *
	 * @param $template
	 *
	 * @return mixed
	 */
	public static function change_page_template( $template ) {
		if ( is_page() ) {
			$meta = get_post_meta( get_the_ID() );

			if ( ! empty( $meta['_wp_page_template'][0] ) && $meta['_wp_page_template'][0] != $template ) {
				$template = $meta['_wp_page_template'][0];
			}
		} elseif ( is_single() ) {

			$fileTemplate = plugin_dir_path( __FILE__ ) . 'templates/reveal-page-template.php';
			if ( file_exists( $fileTemplate ) ) {
				$template = $fileTemplate;
			}
		}

		return $template;
	}
}

