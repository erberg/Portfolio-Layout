<!doctype html>

<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Eric Berg // Web Developer</title>
	<meta name="description" content="This is the professional site of Eric Berg, where you can find out what he's been workin on lately.">
	<meta name="author" content="Eric Berg">

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
  ================================================== -->
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/skeleton.css">
	<link rel="stylesheet" href="css/layout.css">

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Web Fonts
  ================================================== -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,800,400italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet' type='text/css'>
	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="images/favicon.ico">
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">

</head>
<body>



	<!-- Primary Page Layout
	================================================== -->

	<!-- Delete everything in this .container and get started on your own site! -->

	<div class="header">
		<div class="sixteen columns">
		<div class="container">
		<div id="logo"><img src='images/logo.png' width='72px' height='86px'/></div>
		<div class="leftfloat"><h1 id="myname"> ERIC BERG </h1></div>
		<div class="leftfloat"><h2 id="tagline"><span style="margin:0px 10px;">//</span>web developer</h2></div>
		</div>
		</div>
	</div>

	<div class="navbar">
		<div class="container">
			<div class="sixteen columns">
				<div class= "navbar-link">
					<h3>Home</h3>
					<h4 class="navbar-sub">sweet home</h4>
					<div id="nav-selection-image"></div>
				</div>
				<div class="navbar-separator" style="margin-left:24px;margin-right:34px;"></div>
				<div class= "navbar-link" style="width:100px;">
					<h3>Technology</h3>
					<h4 class="navbar-sub">to-do list</h4>
				</div>
				<div class="navbar-separator" style="margin-left:34px;margin-right:18px;"></div>
				<div class= "navbar-link">
					<h3>About</h3>
					<h4 class="navbar-sub">me</h4>
				</div>
				<div class="navbar-separator" style="margin-left:18px;margin-right:26px;"></div>
				<div class= "navbar-link">
					<h3>Contact</h3>
					<h4 class="navbar-sub">by email</h4>
				</div>
			</div>
		</div>
	</div>


	<div class="container">
		<div class="sixteen columns">
			<h5 id="greeting-header">Hello! </br> 
				<span id="greeting-sub">I’m a software developer living in Seattle, Washington. I love to code, and I’m always excited to improve my skills and work with new technology. These are some of my most recent projects.</span>
			</h5>
		</div>
	</div>


	<div class="container article-container">
		<div class="three columns">
			<h1 class="article-title">Artist Portfolio</h1>
			<h4 class="article-sub">big-picture website</h4>
		</div>
		<div class="six columns">
			<p>It's good to be bold. Yes, it takes some confidence to put your images up in large format for all of the internet to see... but I definitely think the payoff is worth it. This is a website I created for just that purpose: to display images as large as possible.</p>
		    <p>On the more technical side of things, I used this project as an opportunity get a better understanding of the model-view-controller (MVC) pattern. There's no better way to understand something than by building it from scratch, and after having completed this project I'm feeling much more knowledgable about the inner workings of MVC's.</p>
		</div>
		<div class="seven columns"><div class="article-image"><img src="/images/folio.jpg" width="100%"/></div></div>

		<div class="two columns"><ul class="square"><li>PHP</li><li>Javascript</li><li>jQuery</li><li>MVC</li><li>MySQL</li></ul></div>
	</div><!-- container -->

	
	<div class="container article-container">
		<div class="three columns">
			<h1 class="article-title">Blackjack</h1>
			<h4 class="article-sub">game using HTML5</h4>
		</div>
		<div class="five columns">
			<p>I thought blackjack would be fun to make because it’s a classic that just about everyone knows how to play. It turned out to be very rewarding project, as well as a great way to learn some new and interesting technologies.</p>
		    <p>The game has positions for up to six players, and there is a card counting button as a bonus feature. You can turn the odds in your favor by modifying your play based upon the count. The live site and source code are also available, if you’re into that sort of thing.</p>
		</div>
		<div class="six columns"><div class="article-image"><img src="/images/blackjack.jpg" width="100%"/></div></div>
		<div class="two columns"><ul class="square"><li>jQuery</li><li>Node.js</li><li>Socket.io</li><li>Twitter Bootstrap</li></ul></div>
		</div><!-- container -->

		<div class="container article-container">
		<div class="three columns">
			<h1 class="article-title">Conway's Game of Life</h1>
			<h4 class="article-sub">classic brought to the browser</h4>
		</div>
		<div class="six columns">
			<p>I've always been a fascinated by how this simple set of procedures can create so much complexity. The rules create a delicate balance between life and death, and the result is an eco-system simulation in which complex patterns interact, grow, and die. Besides, who's going to pass up such a great opportunity to play god? </p>
			<p>Alas, my simulated world is a cruel one. After about 6000 generations it's a pretty desolate universe; populated by just a few spasming pixels. Sorry little guys.</p>
		</div>
		<div class="seven columns"><div class="article-image"><img src="/images/gameoflife.jpg" width="100%"/></div></div>
		<div class="two columns"><ul class="square"><li>PHP</li><li>Javascript</li><li>jQuery</li><li>Twitter Bootstrap</li></ul></div>
	</div><!-- container -->



	<div class="container article-container">
		<div class="three columns">
			<h1 class="article-title">Art E-commerce Site</h1>
			<h4 class="article-sub">art website</h4>
		</div>
		<div class="five columns">
			<p>Sometimes I paint in my spare time. For a time, I was contemplating the idea of starting a business producing and selling abstract paintings. Though I eventually realized that production-style art might actually be the least appealing avenue for my creativity, the experience drove me to create a full Joomla! website.</p>
			<p>My time on this project was split evenly between front-end template design, modifying the Joomla! content management system to suit my needs, and writing articles about art.</p>
		</div>
		<div class="six columns"><div class="article-image"><img src="/images/aura.jpg" width="100%"/></div></div>
		<div class="two columns"><ul class="square"><li>PHP</li><li>Joomla! CMS</li><li>MVC</li></ul></div>
	</div><!-- container -->
	
	<script type="text/javascript" src="js/underscore.js"></script>
	<script type="text/javascript" src="js/backbone.js"></script>
<!-- End Document ================================================== -->
</body>
</html>