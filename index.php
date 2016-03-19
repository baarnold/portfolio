<?php
	if($_POST['formSubmit'] == "Submit") 
    {
		$errorMessage = "";
		
		if(empty($_POST['formName'])) 
        {
			$errorMessage .= "<li>Name Required</li>";
		}
		if(empty($_POST['formEmail'])) 
        {
			$errorMessage .= "<li>Email Required</li>";
		}

        $varName = $_POST['formName'];
		$varEmail = $_POST['formEmail'];
		$varMess = $_POST['formMess'];

		if(empty($errorMessage)) 
        {
		    $username= 'barnold_grccuser';
		    $password = 'raptor16';
			$hostname = 'localhost';
			$database = 'barnold_grcc';
			$cnxn = @mysqli_connect($hostname, $username, $password, $database)
			  or die ("Error connectiong to database: " . mysqli_connect_error());

			$sql = "INSERT INTO contactform (name, email, message) VALUES ('".
							mysqli_real_escape_string($cnxn, $varName) . "', '" .
							mysqli_real_escape_string($cnxn, $varEmail) . "', '" .
							mysqli_real_escape_string($cnxn, $varMess) . "')";
			mysqli_query($cnxn, $sql);
			
			header("Location: index.php");
			exit();
		}
	}

?>
<!DOCTYPE html>
<html lang="en">
<head>

	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>Benjamin Arnold</title> 

	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- end: Mobile Specific -->
	
	<!-- start: Facebook Open Graph -->
	<meta property="og:title" content=""/>
	<meta property="og:description" content=""/>
	<meta property="og:type" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:image" content=""/>
	<!-- end: Facebook Open Graph -->

    <!-- start: CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="css/slider1.css" rel="stylesheet">
	<link href="css/slider2.css" rel="stylesheet">
	<link href="css/slider3.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Sans:400,700">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Serif">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Boogaloo">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Economica:700,400italic">
	<!-- end: CSS -->

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
	
	


</head>
<body>
	
	<!--start: Header -->
	<header>
		
		<!--start: Container -->
		<div class="container">
						
			<!--start: Row -->
			<div class="row-fluid">
					
				<!--start: Navigation -->
				<div class="navigation"> 
				
					<div class="navbar navbar-fixed-top">
			    		<div class="navbar-inner">
			          		<a class="btn btn-navbar btnOverlay" data-toggle="collapse" data-target=".nav-collapse">
			            		menu
			          		</a>
			          		<div class="nav-collapse collapse">
			            		<ul class="nav">
									<li><a href="#" class="home">Home</a></li>
			              			<li><a href="#" class="about">About</a></li>
									<li><a href="#" class="portfolio">Portfolio</a></li>
									<li><a href="https://www.linkedin.com/in/benjamin-arnold-a25270117">LinkedIn</a></li>
									<li><a href="#" class="contact">Contact</a></li>
			            		</ul>
			          		</div>
			        	</div>
			      	</div>
				
				
				</div>	
				<!--end: Navigation -->	
					
			</div>
			<!--end: Row -->
			
		</div>
		<!--end: Container-->			
			
	</header>
	<!--end: Header-->
	<!-- start: 1st Page - Home -->
	<div id="home">

		<div class="demo-1">

	        <div id="slider" class="sl-slider-wrapper">

				<div class="sl-slider">

					<div class="sl-slide bg-1" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
						<div class="sl-slide-inner">
							<div class="deco" data-icon="JAVA"></div>
							<h2>Object-Oriented Programming</h2>
							<blockquote><p>Having taken Java classes in both 2007 and 2015, I have a great deal of experience in not only programming in Java, but also maintaining programming conventions and formatting of code.</p></blockquote>
						</div>
					</div>

					<div class="sl-slide bg-2" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
						<div class="sl-slide-inner">
							<div class="deco" data-icon="WEB"></div>
							<h2>HTML, CSS, PHP, Javascript</h2>
							<blockquote><p>Experienced in HTML5 Web Development, implementing Cascading Style Sheets, PHP, and Javascript (jQuery and Ajax)</p></blockquote>
						</div>
					</div>

					<div class="sl-slide bg-3" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
						<div class="sl-slide-inner">
							<div class="deco" data-icon="SQL"></div>
							<h2>Database Structures</h2>
							<blockquote><p>I have experience in not only MySql DBMS work but also connecting and manipulating databases with PHP and Java.</p></blockquote>
						</div>
					</div>

					<div class="sl-slide bg-4" data-orientation="vertical" data-slice1-rotation="-5" data-slice2-rotation="25" data-slice1-scale="2" data-slice2-scale="1">
						<div class="sl-slide-inner">
							<div class="deco" data-icon="L"></div>
							<h2>Linux Server Administration</h2>
							<blockquote><p>Experience in installation, manipulation, and administration of a Linux Server system, including permissions, bash, and directory control.</p></blockquote>
						</div>
					</div>

					<div class="sl-slide bg-5" data-orientation="horizontal" data-slice1-rotation="-5" data-slice2-rotation="10" data-slice1-scale="2" data-slice2-scale="1">
						<div class="sl-slide-inner">
							<div class="deco" data-icon="M"></div>
							<h2>Microsoft Office</h2>
							<blockquote><p>A strong working knowledge of storing and presenting information in Microsoft Office services, including (but not limited to) - Word, Excel, Powerpoint</p></blockquote>
						</div>
					</div>
				</div><!-- /sl-slider -->

				<nav id="nav-arrows" class="nav-arrows">
					<span class="nav-arrow-prev">Previous</span>
					<span class="nav-arrow-next">Next</span>
				</nav>

				<nav id="nav-dots" class="nav-dots">
					<span class="nav-dot-current"></span>
					<span></span>
					<span></span>
					<span></span>
					<span></span>
				</nav>

			</div><!-- /slider-wrapper -->

	    </div>

	</div>
	<!-- end: 1st Page - Home -->
	
	<!-- start: 2nd Page - Services -->
	<div id="about" class="color black">
		
		<!--start: Container -->
		<div class="container">

			<!--start: Wrapper -->
			<div class="wrapper span12">
			  
			  <!-- start: Page Title -->
			<div id="page-title">

				<div id="page-title-inner">

						<h2><span>About Me</span></h2>

				</div>	

			</div>
			<!-- end: Page Title -->
			  
			  <!--start: Row -->
	    	<div class="row-fluid">
		
				<div class="span12">
						
						<!-- start: About Member -->
				<div class="span3">
					<div class="avatar">
						<img class="img-circle" src="img/BenPic.png" alt="designer">
					</div>	
					<div class="team-name">Benjamin Arnold</div>
					<div class="position">Software Developer</div>
					<p>Hard working and dedicated, Benjamin Arnold has been pursuing Software Development since taking classes from Highline Community College in 2007. 
					He currently pursues a Bachelor of Applied Sciences degree at Green River College in Software Development, with a focus on Mobile and Web Development.</p>
					<div class="social_profiles">
						<ul class="social-bookmarks">
							<li class="github"><a href="https://github.com/baarnold?tab=repositories">github</a></li>
							<li class="linkedin"><a href="https://www.linkedin.com/in/benjamin-arnold-a25270117">linkedin</a></li>
						</ul>
					</div>	
				</div>
				<!-- end: About Member -->
				
					<div class="span8">
					  					
					<!-- start: About Us -->
					<div id="story">
						<h3>Objective</h3>
						<p>With the world of technology
						advancing into the era of "The Internet of Things", I eagerly look forward to seeing the wonderous and amazing programs
						that I will be able to work on in the future.  As a consequence, I seek work in any field that requires people knowledgeable
						in Software Development and Maintenance, whether on web sites, databases, apps, or computerized programs.</p>
						<p></p>
						<p></p>
						<p><br><br></p>
					
					<!-- end: About Us -->

					<!-- start: History -->
					<div id="history">
						<h3>History</h3>
						<p>
							<span class="dropcap">K</span>Knowledgeable in multiple languages and more importantly able to learn new languages relatively quickly.
							A strong understanding of SQL Databases, as well as connecting to databases with HTML/PHP code and with Java.  Combined with an understanding
							of responsive web design, Linux server administration, and Python, you give me a task and I'll learn what I need in order to complete it!
						</p>
						<p>
							<span class="dropcap color">E</span>Experienced in working not only alone but in small and large group environments, ranging from small group projects
							to interdepartmental projects across an entire array of the workforce.  Two Years of Experience in mid-management positions, Four Years experience
							in customer interactions and experience, and extensive experience modifying or maintaining HTML websites and webpages.
						</p>
						<p>
							<span class="dropcap dark">A</span>Ambitious and willing to put in the extra hours to get promised results completed and presentable.  When I tell
							a coworker, project leader, or client that I intend to have certain pieces of work complete for their projects, they will be completed on time and
							without complaints, ready for critique and feedback all to ensure you get what you order!
						</p>
					</div>	
					<!-- end: History -->

				</div>
				
			</div>
			<!--end: Row -->
			
			<!-- start: Row -->
			<div class="row-fluid">		
				
				<div class="span12">
					
					<!-- start: Skills -->
			       	<h3>My Skills</h3>
			       	<ul class="progress-bar">
						<li>
			            	<h5>Java</h5>
			          	</li>
			        	<li>
			            	<div class="meter"><span style="width: 40%"></span></div><!-- Edite width here -->
			          	</li>
						<li>
			            	<h5>HTML5 / CSS</h5>
			          	</li>
			          	<li>
			            	<div class="meter"><span style="width: 50%"></span></div><!-- Edite width here -->
			          	</li>
						<li>
			            	<h5>SQL</h5>
			          	</li>
			          	<li>
			            	<div class="meter"><span style="width: 40%"></span></div><!-- Edite width here -->
			          	</li>
			          	<li>
			            	<h5>PHP</h5>
			          	</li>
						<li>
			            	<div class="meter"><span style="width: 20%"></span></div><!-- Edite width here -->
			          	</li>
						<li>
			            	<h5>Javascript</h5>
			          	</li>
						<li>
			            	<div class="meter"><span style="width: 15%"></span></div><!-- Edite width here -->
			          	</li>
						<li>
			            	<h5>Microsoft Office</h5>
			          	</li>
						<li>
			            	<div class="meter"><span style="width: 55%"></span></div><!-- Edite width here -->
			          	</li>
						<li>
			            	<h5>Linux</h5>
			          	</li>
						<li>
			            	<div class="meter"><span style="width: 35%"></span></div><!-- Edite width here -->
			          	</li>
			      	</ul>
			      	<!-- end: Skills -->
						
				</div>
				
			</div>
			<!-- end: Row -->
			
			<div class="clearfix"></div>
			<hr class="clean">					
			</div>
			<!-- end: Wrapper -->
			</div></div>
		
		</div>
		<!--end: Container -->
		
	</div>
	<!-- end: 2nd Page - About -->
	
	<!-- start: 3rd Page - Portfolio
	<div id="portfolio" class="color white">
		
		<!--start: Container
		<div class="container">

			<!--start: Wrapper
			<div class="wrapper span12">
	
							<!-- start: Page Title
			<div id="page-title">

				<div id="page-title-inner">

					<h2><span>Portfolio</span></h2>

				</div>	

			</div>
			<!-- end: Page Title -->
			
			<!-- start: Flexslider
			<div class="slider">
				<div id="flex1" class="flexslider">
					<ul class="slides">

						<li><div class="picture"><img src="img/slider/slider1.jpg" alt="" /></div></li>

						<li><div class="picture"><img src="img/slider/slider2.jpg" alt="" /></div></li>

						<li><div class="picture"><img src="img/slider/slider3.jpg" alt="" /></div></li>

					</ul>
				</div>
			</div>
			<!-- end: Flexslider

			<div id="filters">
				<ul class="option-set" data-option-key="filter">
					<li><a href="#filter" class="selected" data-option-value="*">All</a></li>
					<li>/</li>
					<li><a href="#filter" data-option-value=".admin">Admin</a></li>
					<li>/</li>
					<li><a href="#filter" data-option-value=".dashboard">Dashboard</a></li>
					<li>/</li>
					<li><a href="#filter" data-option-value=".website">Website</a></li>
					<li>/</li>
					<li><a href="#filter" data-option-value=".html5">HTML5</a></li>
					<li>/</li>
					<li><a href="#filter" data-option-value=".css3">CSS3</a></li>
					<li>/</li>
					<li><a href="#filter" data-option-value=".responsive">Responsive</a></li>
				</ul>
			</div>

			<!-- start: Portfolio
			<div id="portfolio-wrapper" class="row-fluid">
								
				<div class="span4 portfolio-item website html5 css3 responsive">
					
					<div class="picture"><a href="http://thunderbirds.greenrivertech.net" title="Kent Food Bank"><img src="img/portfolio/smart.png" alt=""/><div class="image-overlay-link"></div></a>
					
						<div class="item-description alt">
							<h5><a href="http://smart.bootstrapmaster.com">Smart Responsive Bootstrap Template</a></h5>
							<p>
								Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
							</p>
						</div>
					</div>	
				</div>

				<div class="span4 portfolio-item website html5 css3 responsive">
					<div class="picture">
						<a href="http://acme.bootstrapmaster.com" title="Title"><img src="img/portfolio/great.png" alt=""/><div class="image-overlay-link"></div></a>
							<div class="item-description alt">
								<h5><a href="http://acme.bootstrapmaster.com">Great Responsive Bootstrap Template</a></h5>
								<p>
									Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. 
							</p>
						</div>
					</div>
				</div>

				<div class="span4 portfolio-item website html5 css3 responsive">
					<div class="picture"><a href="http://magnus.bootstrapmaster.com" title="Title"><img src="img/portfolio/magnus.png" alt=""/><div class="image-overlay-link"></div></a>
						<div class="item-description alt">
							<h5><a href="http://magnus.bootstrapmaster.com">Magnus Responsive Bootstrap Template</a></h5>
							<p>
							Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. 
							</p>
						</div>	
					</div>
				</div>

				<div class="span4 portfolio-item admin dashboard html5 css3 responsive">
					<div class="picture"><a href="http://optimus.bootstrapmaster.com" title="Title"><img src="img/portfolio/optimus.png" alt=""/><div class="image-overlay-link"></div></a>
						<div class="item-description alt">
							<h5><a href="http://optimus.bootstrapmaster.com">Optimus Dashboard Bootstrap Template</a></h5>
							<p>
								Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. 
							</p>
						</div>
					</div>
				</div>

				<div class="span4 portfolio-item admin dashboard html5 css3 responsive">
					<div class="picture"><a href="http://perfectum.bootstrapmaster.com" title="Title"><img src="img/portfolio/perfectum.png" alt=""/><div class="image-overlay-link"></div></a>
						<div class="item-description alt">
							<h5><a href="http://perfectum.bootstrapmaster.com">Perfectum Dashboard Bootstrap Template</a></h5>
							<p>
								Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. 
							</p>
						</div>
					</div>
				</div>

				<div class="span4 portfolio-item website html5 css3 responsive">
					<div class="picture"><a href="http://redbox.bootstrapmaster.com"><img src="img/portfolio/redbox.png" alt=""/><div class="image-overlay-link"></div></a>
						<div class="item-description alt">
							<h5><a href="http://redbox.bootstrapmaster.com">Red Box Responsive Bootstrap Template</a></h5>
							<p>
								Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. 
							</p>
						</div>
					</div>
				</div>

			</div>
			<!-- end: Portfolio
			</div>
			<!-- end: Wrapper
		
		</div>
		<!--end: Container
		
	</div>
	<!-- end: 3rd Page - Portfolio -->

	
	<!-- start: 4th Page - Contact -->
	<div id="mapBg"></div>
	<div id="contact" class="color blue transparent">
		
		<!--start: Container -->
		<div class="container">

			<!--start: Wrapper -->
			<div class="wrapper span12">

				
	
			<!-- start: Page Title -->
			<div id="page-title">

				<div id="page-title-inner">

						<h2><span>Contact</span></h2>

				</div>	

			</div>
			<!-- end: Page Title -->
			
			<!-- start: Row -->
			<div class="row-fluid">		
				
				<div class="span12">
					
					<!-- start: Contact Info -->
					<b>Benjamin Arnold</b> •
					Auburn, WA 98092, USA •
					Phone: (253) 740-1846 •
					Email: benji.arnold@gmail.com
					<!-- end: Contact Info -->
				
				</div>	
			
			</div>
			<!-- end: Row -->
			
			<hr class="clean">
			
			<!-- start: Row -->
			<div class="row-fluid">		
			
				<!-- start: Map -->
				<div class="span6">
					
					<!-- start: Contact Form -->
					<div id="contact-form">
					  
					  <?php
						if(!empty($errorMessage)) {
						  echo "<p>There was an error with your form:</p>";
						  echo "<ul>" . $errorMessage . "</ul>";
						}
					  ?>

						<form method="post" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>">
							
							<fieldset>
								<input tabindex="4" id="name" name="formName" type="text" value="<?=$varName;?>" class="span12" placeholder="Name: Required" required>
								<input tabindex="2" id="email" name="formEmail" type="text" value="<?=$varEmail;?>" class="span12" placeholder="Email: Required" required>
								<textarea tabindex="3" class="input-xlarge span12" id="message" name="formMess" rows="7" placeholder="Message: Not Required, but Encouraged"></textarea>

								<div class="actions">
									<button tabindex="3" type="submit" name="formSubmit" class="btn btn-succes btn-large" value="Submit">Send message</button>
								</div>
								
							</fieldset>

						</form>

					</div>
					

					<!-- end: Contact Form -->
					

				</div>
				<!-- end: Map -->
				
				<div class="span6">
					
					<!-- starts: Google Maps -->
					<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
					<div id="googlemaps">
						<div id="map" class="google-map google-map-full"></div>
					</div>
					<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
					<script src="js/jquery.gmap.min.js"></script>
					<script type="text/javascript">
						$('#map').gMap({
							controls: {
								panControl: false,
								zoomControl: false,
								mapTypeControl: false,
								scaleControl: false,
								streetViewControl: false,
								overviewMapControl: false
							},
							maptype: 'ROADMAP',
							scrollwheel: true,
							zoom: 13,
							markers: [
								{
									address: 'Auburn, Washington, United States', // Your Adress Here
									html: '',
									popup: false,
								}

							],

						});
						
						$('#mapBg').gMap({
							controls: {
								panControl: false,
								zoomControl: false,
								mapTypeControl: false,
								scaleControl: false,
								streetViewControl: false,
								overviewMapControl: false
							},
							maptype: 'ROADMAP',
							scrollwheel: true,
							zoom: 13,
							markers: [
								{
									address: 'Seattle, United States', // Your Adress Here
									html: '',
									popup: false,
								}

							],

						});
						
					</script>
					<!-- end: Google Maps -->
				
				</div>	
			
			</div>
			<!-- end: Row -->

			</div>
			<!-- end: Wrapper -->
		
		</div>
		<!--end: Container -->
		
	</div>
	<!-- end: 4th Page - Contact -->

	
<!--
	<footer>
		
		<div id="copyright">
			essentia &copy; 2013 creativeLabs. <a href="http://bootstrapmaster.com" alt="Bootstrap Themes">Bootstrap Themes</a> Designed by BootstrapMaster in Poland <img src="img/poland.png" alt="Poland" style="margin-top:-4px">
		</div>
		<div id="social">
			<a href="http://facebook.com/BootstrapMaster" rel="tooltip" title="Facebook" class="facebook">Facebook</a>
			<a href="http://facebook.com/BootstrapMaster" rel="tooltip" title="Twitter" class="twitter">Twitter</a>
			<a href="http://BootstrapMaster.com/feed/" rel="tooltip" title="RSS" class="rss">RSS</a>
			<a href="#" rel="tooltip" title="Github" class="github">Github</a>
			<a href="#" rel="tooltip" title="LinkedIn" class="linkedin">LinkedIn</a>
			<a href="#" rel="tooltip" title="Pintrest" class="pintrest">Pintrest</a>
			<a href="#" rel="tooltip" title="Vimeo" class="vimeo">Vimeo</a>
			<a href="#" rel="tooltip" title="YouTube" class="youtube">YouTube</a>
		</div>	
		
	</footer>
-->

<!-- start: Java Script -->
<!-- Placed at the end of the document so the pages load faster -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script type="text/javascript" src="js/isotope.js"></script>
<script type="text/javascript" src="js/jquery.imagesloaded.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/flexslider.js"></script>
<script type="text/javascript" src="js/carousel.js"></script>
<script type="text/javascript" src="js/fancybox.js"></script>
<script type="text/javascript" src="js/twitter.js"></script>
<script type="text/javascript" src="js/modernizr.custom.79639.js"></script>
<script type="text/javascript" src="js/jquery.ba-cond.min.js"></script>
<script type="text/javascript" src="js/jquery.slitslider.js"></script>

<script type="text/javascript" src="js/excanvas.js"></script>
<script type="text/javascript" src="js/jquery.flot.min.js"></script>
<script type="text/javascript" src="js/jquery.flot.pie.min.js"></script>
<script type="text/javascript" src="js/jquery.flot.stack.js"></script>
<script type="text/javascript" src="js/jquery.flot.resize.min.js"></script>

<script defer="defer" src="js/custom.js"></script>
<script type="text/javascript">	
	$(function() {
	
		var Page = (function() {

			var $navArrows = $( '#nav-arrows' ),
				$nav = $( '#nav-dots > span' ),
				slitslider = $( '#slider' ).slitslider( {
					onBeforeChange : function( slide, pos ) {

						$nav.removeClass( 'nav-dot-current' );
						$nav.eq( pos ).addClass( 'nav-dot-current' );

					}
				} ),

				init = function() {

					initEvents();
					
				},
				initEvents = function() {

					// add navigation events
					$navArrows.children( ':last' ).on( 'click', function() {

						slitslider.next();
						return false;

					} );

					$navArrows.children( ':first' ).on( 'click', function() {
						
						slitslider.previous();
						return false;

					} );

					$nav.each( function( i ) {
					
						$( this ).on( 'click', function( event ) {
							
							var $dot = $( this );
							
							if( !slitslider.isActive() ) {

								$nav.removeClass( 'nav-dot-current' );
								$dot.addClass( 'nav-dot-current' );
							
							}
							
							slitslider.jump( i + 1 );
							return false;
						
						} );
						
					} );

				};

				return { init : init };

		})();

		Page.init();
	
	});
</script>
<!-- end: Java Script -->

<?php
$errors = [];
$missing = [];
if (isset($_POST['send'])) {
    $expected = ['name', 'email', 'comments'];
    $required = ['name', 'comments'];
    $to = 'David Powers <david@example.com>';
    $subject = 'Feedback from online form';
    $headers = [];
    $headers[] = 'From: webmaster@example.com';
    $headers[] = 'Cc: another@example.com';
    $headers[] = 'Content-type: text/plain; charset=utf-8';
    $authorized = '-fdavid@example.com';
    require './includes/process_mail.php';
    if ($mailSent) {
        header('Location: thanks.php');
        exit;
    }
}
?>

</body>
</html>