<?php
	defined('CMSPATH') or die; // prevent unauthorized access
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="initial-scale=1, maximum-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="https://fonts.googleapis.com/css?family=Lato:400,400i,700&display=swap" rel="stylesheet">
	<!--CMSHEAD-->
	<style>
		:root {
			--red:#dc4444;
			--green:#37b142;
			--sans:Lato,Arial,Helvetica Neue,Helvetica,sans-serif;
			--serif:Palatino,Palatino Linotype,Palatino LT STD,Book Antiqua,Georgia,serif;
			--headingsize:1.4rem;
		}

		html {
			box-sizing: border-box;
			font-size: 17px;
		}
		*, *:before, *:after {
		box-sizing: inherit;
		}

		body {
			font-family: var(--sans); 
			/* font-size:15px; */
			margin:0;
			
		}
		h1,h2,h3,h4,h5,h6 {
			font-family: Palatino,Palatino Linotype,Palatino LT STD,Book Antiqua,Georgia,serif; 
			font-style:italic;
			color:var(--red);
			line-height:0.9em;
		}

		.contain {
			max-width:1300px;
			padding:0 20px;
			margin:0 auto;
		}

		h1 {
			font-size:3rem;
			text-align:center;
			margin-bottom: 0;
			margin-top:0.5em;
			margin:0;
		}

		hr {
			border:none;
			height:6px;
			background:var(--green);
			margin:1em auto;
		}

		main p {
			line-height: 1.5em;
			margin-left: auto;
			margin-right: auto;
			max-width: 41em;
		}

		.menu_items_by_tag_wrap {
			display: flex;
			flex-wrap: wrap;
			
			justify-content:center;
			justify-content: space-between;
			justify-content: space-evenly;
			align-items: flex-start;
		}
		.menu_item_wrap {
			    /* width: 15em; */
				margin: 0.5em;
				/* margin: 1em 3em; */
				/* background: rgba(0,0,0,0.2); */
				padding: 0.3em;
				width: 46%;
				
				min-width:18em; 
				width: 100%;
		}
		.menu_item_wrap.wider {
			/* width:30em; */
			/* width:100%; */
			/* min-width:40em; */
		}
		.menu_item_wrap h1 {
			margin:0;
			margin-top:0;
			line-height:0.9;
			font-family:var(--sans);
			font-size:var(--headingsize);
			color:black;
			text-align:left;
			font-style:normal;
			/* flex-shrink: 0; */
			/* max-width: 10em; */
		}
		.menu_item_wrap .price {
			margin-top:0;
			line-height:0.9;
			font-family:var(--sans);
			font-size:var(--headingsize);
			color:black;
			padding-left:1em;
		}
		.title_and_price {
			display:flex;
			justify-content: space-between;
			align-items: flex-end;
		}
		.price_spacer {
			border-bottom: 2px dashed rgba(0,0,0,0.2);
			width: 100%;
			margin-left: 1em;
			flex: 1;
		}
		.menu_item_wrap p {
			margin-bottom:0;
			margin-top:0.5em;
		}

		.description_wrap, .pizza_item_description {
			padding-left:3em;
			font-style:italic;
			opacity: 0.5;
		}
		.pizza_item_description {
			margin:0.6rem 0 !important;
		}

		#main {
			display:flex;
			min-height: 77vh;
		}
		.menu #main {
			min-height:0vh;
		}

		#sidebar ul {
			margin:0em;
			padding:0;
			list-style:none;
		}
		#sidebar ul li {
			padding:0;
			margin:0;
		}
		#sidebar ul li a {
			display:inline-block;
			padding:0.4em 0.8em;
		}
		#sidebar .tree_wrap > ul {
			margin:2em;
			padding:0;
			/* max-height: 100vh;
   			overflow: auto; */
		}
		.top_description_wrap,.menu_tag_description_wrap {
			text-align:center;
			max-width:30em;
			color:var(--green);
			font-style:italic;
			margin:0 auto;
		}
		aside#sidebar {
			min-width: 16em;
		}

		aside#sidebar li a {
			text-decoration:none;
			font-family:var(--serif);
			color:var(--red);
			font-size:1.2rem;
			font-style:italic;
			transition:all 0.3s ease;
			border-bottom:2px solid transparent;
		}
		aside#sidebar li.current a {
			border-bottom:2px solid var(--green);
		}
		aside#sidebar li a:hover {
			transform:translatex(0.5em);
			border-bottom:2px solid var(--red);
		}

		aside#after_content {
			margin-top:2rem;
		}
		aside#after_content ul {
			margin:2rem 0;
			padding:0;
			list-style:none;
		}
		aside#after_content li {
			text-align:center;
		}
		aside#after_content li a {
			text-decoration:none;
			font-family:var(--serif);
			color:var(--red);
			font-size:1.2rem;
			font-style:italic;
			transition:all 0.3s ease;
			border-bottom:2px solid transparent;
			padding:0.4em 0.8em;
			display:inline-block;
		}
		aside#after_content li.current a {
			border-bottom:2px solid var(--green);
		}
		aside#after_content li a:hover {
			transform:scale(1.1);
			border-bottom:2px solid var(--red);
		}
		aside#after_content li.current a {
			border-bottom:2px solid var(--green);
		}

		img {
			max-width:100%;
		}

		.menu_header_image {
			min-height:33vmin;
			max-height:50vh;
			background-size:cover;
			background-position:center center;
			margin-bottom: 1rem;
			/* animation: bg-slide 20s ease-in-out infinite alternate forwards; */
			/* background-attachment: fixed; */
		}
		@keyframes bg-slide {
			from { background-position: 50% 50%; }
			to { background-position: 100% 100%;  }
		}

		footer {
			background:rgba(0,0,0,0.8);
			color:white;
			padding:2rem;
			margin-top:2rem;
		}
		footer .copyright {
			opacity:0.5;
		}
		footer .contain {
			display:flex;
			justify-content:space-evenly;
			flex-wrap:wrap;
			align-items:center;
		}
		footer p {
			text-align:center;
			
			min-width:15em;
		}
		footer p a {
			text-decoration:none;
			color:var(--red);
			transition:all 0.3s ease;
		}
		footer p a:hover {
			color:white;
		}

		#desktop_nav {
			padding:0;
			background:rgba(0,0,0,0.9);
			position:sticky;
			top:0;
			z-index:1;
		}
		#desktop_nav ul {
			list-style:none;
			margin:0;
			padding:0;
			display:flex;
			justify-content:space-around;
		}
		#desktop_nav ul li a {
			color:white;
			text-decoration:none;
			padding:1rem 1rem;
			display:inline-block;
		}
		#desktop_nav ul > ul {
			display:none;
		}
		#desktop_nav ul li.current a {
			color:var(--green);
			
		}
		main {
			margin-top:2rem;
			width:100%;
		}

		#sidebar {
			display:none;
		}

		table#hours_table {
			width: 100%;
			max-width: 50em;
			margin: 0 auto;
			border-collapse: collapse; 
			margin-top:2rem;
		}
		thead tr th {
			border-bottom:2px solid rgba(0,0,0,0.5);
			margin-bottom:1em;
			padding-bottom:1em;
		}
		tbody td {
			padding:0.5rem;
			margin:0.5rem;
			border-bottom:2px solid rgba(0,0,0,0.1);
		}
		tbody tr td:nth-child(2) {
			text-align:center;
		}

		main a {
			color:var(--green);
		}
		
		.hours-directions main {
			text-align:center;
		}

		.pizza_prices {
			display: flex;
			justify-content: space-evenly;
		}

		.pizza_price {
			text-align: center;
		}

		span.na {
			font-size:60%;
			opacity:0.6;
		}

		.pizza_price_label {
			font-family: var(--serif);
			font-style: italic;
			color: var(--green);
		}

		a.page_id_1:after {
			content:url(/newcms/home.svg);
			height: 1em;
			/* width: 1em; */
			filter: invert(0.7);
			position: absolute;
			display: inline-block;
			transform: scale(0.5);
		}
		.home main h2 {
			color:var(--green);
			text-align:center;
		}

		@media (prefers-color-scheme: darkk) {
			body {
				background:#111;
				color:white;
			}
		}

		@media only screen and (min-width: 600px) {
			#sidebar {
				display:block;
			}
			.menu_item_wrap {
				min-width: 20em;
				width:47%;
			}
		}
		
	</style>
</head>
<body class='<?php echo CMS::Instance()->page->alias;?>'>
	<nav id='desktop_nav'>
		<div class='contain'>
			<?php CMS::Instance()->render_widgets('Top Nav');?>
		</div>
	</nav>

	<?php CMS::Instance()->render_widgets('Above Content');?>
	
	
	<section id='main' class='contain'>
		<aside id="sidebar">
			<?php CMS::Instance()->render_widgets('Sidebar');?>
		</aside>
		<?php if (CMS::Instance()->page->content_type>0): ?>
			<main> 
				<?php CMS::Instance()->render_controller(); ?>
				<?php CMS::Instance()->render_widgets('Under Content');?>
			</main>
		<?php endif; ?>
	</section>
	<aside id='after_content'>
		<div class='contain'>
			<?php CMS::Instance()->render_widgets('After Content');?>
		</div>
	</aside>

	<footer>
		<div class='contain'>
			<?php CMS::Instance()->render_widgets('Footer');?>
		</div> 
	</footer>
	<?php if (Config::$debug) { CMS::Instance()->showinfo();} ?>
</body>
</html>