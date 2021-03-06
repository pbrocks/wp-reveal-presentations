<?php
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
	<link rel="stylesheet" href="<?php echo REVEAL_JS_PATH; ?>/reveal-js/css/theme/black.css" id="theme">

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
## WordPress is GPL.
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
