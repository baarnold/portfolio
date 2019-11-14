<?php
$errors = [];
$missing = [];
if (isset($_POST['formSubmit'])) {
  $expected = ['formName', 'formEmail', 'formMess'];
  $required = ['formName', 'formMess'];
  $to = 'Benjamin Arnold <benji.arnold@gmail.com>';
  $subject = 'New Comment on BARNOLD';
  $headers = [];
  $headers[] = 'From: barnold';
  $headers[] = 'Bcc: kurastwolf@gmail.com';
  $headers[] = 'Content-type: text/plain; charset=utf-8';
  $authorized = '-admin@blackdawn-rp.com';
  require './dependencies/php/process_email.php';
  if ($mailSent) {
    header('Location: index.php');
    exit;
  }
}

//if ($_POST['formSubmit'] == "Submit") {
//  $errorMessage = "";
//
//  if (empty($_POST['formName'])) {
//    $errorMessage .= "<li>Name Required</li>";
//  }
//  if (empty($_POST['formEmail'])) {
//    $errorMessage .= "<li>Email Required</li>";
//  }

//  $varName = $_POST['formName'];
//  $varEmail = $_POST['formEmail'];
//  $varMess = $_POST['formMess'];

//  if (empty($errorMessage)) {
//    require '../barnolddb.php';

//    $cnxn = @mysqli_connect($hostname, $username, $password, $database)
//    or die ("Error connectiong to database: " . mysqli_connect_error());

//    $sql = "INSERT INTO contactform (name, email, message) VALUES ('" .
//      mysqli_real_escape_string($cnxn, $varName) . "', '" .
//      mysqli_real_escape_string($cnxn, $varEmail) . "', '" .
//      mysqli_real_escape_string($cnxn, $varMess) . "')";
//    mysqli_query($cnxn, $sql);

//    header("Location: index.php");
//    exit();
//  }
//}

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
  <link href="dependencies/css/bootstrap.min.css" rel="stylesheet">
  <link href="dependencies/css/bootstrap-responsive.min.css" rel="stylesheet">
  <link href="dependencies/css/style.css" rel="stylesheet">
  <link href="dependencies/css/slider1.css" rel="stylesheet">
  <link href="dependencies/css/slider2.css" rel="stylesheet">
  <link href="dependencies/css/slider3.css" rel="stylesheet">
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
                <li><a href="https://www.linkedin.com/in/bnarnold" target="_blank">LinkedIn</a>
                </li>
                <li><a href="https://github.com/baarnold?tab=repositories" target="_blank">GitHub</a>
                </li>
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

    <div id="slider" data-ride="carousel" data-interval="true" class="carousel sl-slider-wrapper">

      <div class="sl-slider">

        <div class="sl-slide bg-1" data-orientation="horizontal" data-slice1-rotation="-13"
             data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
          <div class="sl-slide-inner">
            <div class="deco" data-icon="OOP"></div>
            <h2>Object-Oriented Programming</h2>
            <blockquote><p>Including but not limited to Java, Python, C++, C#, PHP. Versed in programming strategies,
                algorithm complexity, and patterns</p></blockquote>
          </div>
        </div>

        <div class="sl-slide bg-2" data-orientation="vertical" data-slice1-rotation="10"
             data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
          <div class="sl-slide-inner">
            <div class="deco" data-icon="WEB"></div>
            <h2>Responsive and Reactive</h2>
            <blockquote><p>HTML5 Web Development for desktop, mobile, and tablet devices with a focus on user
                experience, accessibility, design responsiveness, and data reactivity.</p></blockquote>
          </div>
        </div>

        <div class="sl-slide bg-3" data-orientation="horizontal" data-slice1-rotation="3"
             data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
          <div class="sl-slide-inner">
            <div class="deco" data-icon="SQL"></div>
            <h2>Database Structures</h2>
            <blockquote><p>Database administration and analysis, as well as translations to other programs and
                languages, including PHP and Java.</p></blockquote>
          </div>
        </div>

        <div class="sl-slide bg-4" data-orientation="vertical" data-slice1-rotation="-5"
             data-slice2-rotation="25" data-slice1-scale="2" data-slice2-scale="1">
          <div class="sl-slide-inner">
            <div class="deco" data-icon="CSM"></div>
            <h2>Agile Software Development</h2>
            <blockquote><p>Certified by the Scrum Alliance as a Scrum Master, with a working knowledge of Test-Driven
                Development, Agile Development Methodologies, and client interactions.</p></blockquote>
          </div>
        </div>

        <!--<div class="sl-slide bg-5" data-orientation="horizontal" data-slice1-rotation="-5"
             data-slice2-rotation="10" data-slice1-scale="2" data-slice2-scale="1">
          <div class="sl-slide-inner">
            <div class="deco" data-icon="M"></div>
            <h2>Microsoft Office</h2>
            <blockquote><p>A strong working knowledge of storing and presenting information in Microsoft
                Office services, including (but not limited to) - Word, Excel, Powerpoint</p>
            </blockquote>
          </div>
        </div>-->
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
        <!--<span></span>-->
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
            <div class="avatar span12">
              <img class="img-circle" src="dependencies/img/ben-2.png" alt="Picture of the Developer, Benjamin Arnold">
            </div>
            <div class="team-name">Benjamin N. Arnold</div>
            <div class="position">Database, Web, and Software Developer</div>
            <div class="social_profiles">
              <ul class="social-bookmarks">
                <li class="github"><a href="https://github.com/baarnold?tab=repositories"
                    target="_blank">github</a></li>
                <li class="linkedin"><a href="https://www.linkedin.com/in/benjamin-arnold-a25270117"
                    target="_blank">linkedin</a></li>
              </ul>
            </div>
            <hr class="clean">
            <hr class="clean">
            <hr class="clean">
            <p>Intuitive, curious, and dedicated, I've been pursuing Software Development since the turn
              of the millenium.
              I'm a graduate of Green River College with a Bachelor of Applied Sciences Degree in
              Software Development, with a focus on Mobile and Web Development.</p>
            <hr class="clean">
            <hr class="clean">
            <h3><strong>My Skills</strong></h3>
            <ul>
              <li>
                <strong>OOP -</strong> Java, C++, C#, Python</br></br>
              </li>
              <li>
                <strong>Web Development -</strong> HTML5, CSS, PHP, JavaScript</br></br>
              </li>
              <li>
                <strong>SQL Databases -</strong> Administration, Analysis, Development</br></br>
              </li>
              <li>
                <strong>Technical Writing - </strong>Documentation, Manuals, Reports</br></br>
              </li>
              <li>
                <strong>Customer Interactions -</strong> UX, UI, Customer Service, Accessibility</br></br>
              </li>
            </ul>
            
            <div class="span12">
              <div class="span6">
                <img src="dependencies/img/seal-csm.png" alt="Seal of the Certified ScrumMaster for Benjamin N. Arnold">
              </div>
              <div class="span6">
                <img src="dependencies/img/seal-cpu-3.png" alt="Seal of the Certified cPanel Administrator for Benjamin N. Arnold">
              </div>
            </div>
            
          </div>
          <!-- end: About Member -->

          <div class="span8">

            <!-- start: About Us -->
            <div id="story">
              <h3>Objective</h3>
              <hr class="clean">
              <p>I am Benjamin Arnold, a web developer and software engineer. I design products focusing on user 
              experience and client requirements in a variety of languages, both front-end and back-end. As a
              bachelors student I have created sites for local charities and school districts that have received praise and 
              acclaim from news outlets and educational organizations. I am seeking to bring my skills and knowledge in 
              user-focused design to help usher forth success for both myself and my colleagues.</p>
              <hr class="clean">
              <p>How successful is that success, you may ask?  Successful enough that I was both a member of the Phi Theta 
              Kappa Honors Society, and a National Science Foundation Scholar.  I'm also a current member of the ScrumAlliance, 
              certified as a ScrumMaster of Agile development, and able to bring the strength of Scrum and Agile to your 
              projects!</p>
              <hr class="clean">
              <p>With experience earned working behind the scenes at a website hosting company, I have the necessary skills 
              to manage both websites and the servers they run on, and to make full use of the tools provided by hosting 
              companies to maximize online presence, traffic and resource tracking, and content management.  If you've ever 
              been frustrated with trying to host your own websites, look no further - I'll handle all the technical and 
              content work, to ensure your service is online, accessible, and making your business grow.</p>
              <hr class="clean">
              <p>I've learned how the system works, and I've learned how to plan around it.  I've worked with domain registrars, 
              web hosting providers, server admins, front- and back-end developers, billing departments, analysts, 
              UI/UX, graphic designers, and even business bigwigs up to and including the CEO.  I know what they expect, 
              how they want things done, and what information they expect to have to work.  Every employer is different, 
              but I've learned ways to ensure I get all the information I need quickly to help quicken the business 
              or workforce integration process.</p>
              <p></p>
              <p></p>
              <div class="clearfix"></div>
              <hr class="clean">

              <!-- end: About Me -->

              <!-- start: History -->
              <div id="history">
                <h3>Why I'm a <em>K.E.E.P.E.R.</em></h3>
                <hr class="clean">
                <p>
                  <span class="dropcap color">K</span>Knowledgeable in multiple languages and able to learn
                  new ones relatively quickly. A strong understanding of data-driven content, combined with an
                  understanding of both responsive and reactive web design, I can design or maintain websites with
                  exceptional ease, as well as translate data and information into more presentable formats for ease of
                  analysis or demonstration.  If I don't know it now, I'll know it soon enough; and if you need it 
                  explained, I'll explain it in a way where you'll be a master, too!
                </p>
                <hr class="clean">
                <p>
                  <span class="dropcap color">E</span>Experienced in working not only alone but in small and large group
                  environments, ranging from small team tasks to interdepartmental projects across an entire array
                  of the workforce. Two years of experience in mid-management positions, six years experience in
                  customer interactions and experience, and extensive experience in debugging, evolving, and
                  maintaining websites, databases, and applications.  I also have one year's experience working on the 
                  server-side of web hosting, primarily in cPanel & WHM interfaces, with intermediate skill in both 
                  Linux and Windows server environments.
                </p>
                <hr class="clean">
                <p>
                  <span class="dropcap color">E</span>Eager, ambitious, and willing to put in the extra hours to get promised
                  results completed and presentable. When I tell a coworker, project leader, or client that I intend to
                  have certain pieces of work complete for their projects, they will be completed on time and without
                  complaints, ready for critique and feedback all to ensure you get what you order within the time you
                  desire it.  I strive to ensure the success of the business I work for, whether it's a Fortune 500 company, 
                  an Inc 5000 company, or just a local charity or school.  Perfection may not be obtainable, but with the 
                  right attitude, work ethic, drive and determination, I'll get you there closer, faster, sooner.
                </p>
                <hr class="clean">
                <p>
                  <span class="dropcap color">P</span>Personable, friendly, and professional are the three best interpersonal 
                  skills you can bring onto any job, and I fill those requirements with ease!  I always treat my work as with 
                  utmost respect and pride, ensuring that whatever I present is professional, formal, and above all marketable.  
                  But one must be too careful to not be too professional lest they seem distant, cool, and unlikeable!  It's a 
                  delicate balance between being the professional that you can trust to get the job done, and the personable 
                  worker that you'll always get along with.
                </p>
                <hr class="clean">
                <p>
                  <span class="dropcap color">E</span>Excited for new challenged, I never look at a problem and despair!  The 
                  world is full of obstacles both great and small, and all of them can be overcome.  Grit and determination, 
                  experience and knowledge, a desire to learn and a desire to grow - all of these traits will help ensure that 
                  whatever hardships your project or business throws at me, I'll always buckle down and face them head long!  
                  Whether it requires long hours into the night, extra days in the week, or reaching out to those more experienced, 
                  knowledgeable, or practiced, I'll exhaust every option to ensure your project gets through the storm without 
                  any worry!
                </p>
                <hr class="clean">
                <p>
                  <span class="dropcap color">R</span>Reliablility is important, not just in the work place but in the code as well!  
                  If you can't rely on the project to work as desired, what's the point in spending time, money, and energy on it?  
                  In the same vein, why wait on unreliable developers to work on that project?  I'm not only reliable, but I make 
                  reliable products.  You can depend on me and everything I touch to be in working order, ready to go when needed.  
                  A bug in the system?  No worries, I'll get that squashed ASAP!  Site went down at 2 in the morning?  You give me 
                  a call and I'll fix it all!  With a dependable developer making your dependable developments, your chances of 
                  success are all but guaranteed!
                </p>
              </div>
              <!-- end: History -->

            </div>

          </div>
          <!--end: Row -->

          <!-- start: Row
          <div class="row-fluid">

            <div class="span12">

              <!-- start: Skills
              <h3>My Skills</h3>
              <ul class="progress-bar">
                <li>
                  <h5>OOP - Java, C++, C#, Python</h5>
                </li>
                <li>
                  <div class="meter"><span style="width: 98%"></span></div><!-- Edite width here
                </li>
                <li>
                  <h5>Web Development - HTML5, CSS, PHP, JavaScript</h5>
                </li>
                <li>
                  <div class="meter"><span style="width: 95%"></span></div><!-- Edite width here
                </li>
                <li>
                  <h5>SQL Databases - Administration, Analysis, Development</h5>
                </li>
                <li>
                  <div class="meter"><span style="width: 97%"></span></div><!-- Edite width here
                </li>
                <li>
                  <h5>Technical Writing - Documentation, Manuals, Reports</h5>
                </li>
                <li>
                  <div class="meter"><span style="width: 95%"></span></div><!-- Edite width here
                </li>
                <li>
                  <h5>Customer Interactions - UX, UI, Customer Service, Tech Support</h5>
                </li>
                <li>
                  <div class="meter"><span style="width: 100%"></span></div><!-- Edite width here
                </li>
              </ul>
              <!-- end: Skills

            </div>

          </div>
          <!-- end: Row -->

          <div class="clearfix"></div>
          <hr class="clean">
        </div>
        <!-- end: Wrapper -->
      </div>
    </div>

  </div>
  <!--end: Container -->

</div>
<!-- end: 2nd Page - About -->

<!-- start: 3rd Page - Portfolio -->
<div id="portfolio" class="color white">

  <!--start: Container -->
  <div class="container">

    <!--start: Wrapper -->
    <div class="wrapper span12">

      <!-- start: Page Title -->
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
      <!-- end: Flexslider -->

      <div id="filters">
        <ul class="option-set" data-option-key="filter">
          <li><a href="#filter" class="selected" data-option-value="*">All</a></li>
          <li>/</li>
          <li><a href="#filter" data-option-value=".live">Live Product</a></li>
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
          <li>/</li>
          <li><a href="#filter" data-option-value=".reactive">Reactive</a></li>
        </ul>
      </div>

      <!-- start: Portfolio -->
      <div id="portfolio-wrapper" class="row-fluid">

        <div class="span4 portfolio-item website html5 css3 responsive">

          <div class="picture">
            <a href="#" title="Kent Food Bank">
              <img src="dependencies/img/kfbthumb.png" alt="Kent Food Bank Page Image Sample"/>
              <div class="image-overlay-link"></div>
            </a>
            <div class="item-description alt">
              <h5><a href="#">Kent Food Bank</a></h5>
              <p>Kent Food Bank had no website for their own, instead relying upon a single page worth of information
                on the City of Kent website, of which was text-only and they could not easily update information as
                needed. A competition was held between four groups of four developers, creating alternate website
                designs
                to meet the client's demands. After 8 weeks, the boardmembers of the Kent Food Bank chose the design
                that they preferred the most of the four nearly-finished products.</p>
            </div>
          </div>
        </div>

        <div class="span4 portfolio-item website html5 css3 responsive live">
          <div class="picture">
            <a href="http://emotions-count.greenrivertech.net/">
              <img src="dependencies/img/ECCover.png" alt="Emotions Count Page Sample Image"/>
              <div class="image-overlay-link"></div>
            </a>
            <div class="item-description alt">
              <h5><a href="http://emotions-count.greenrivertech.net/">Emotions Count</a></h5>
              <p>Emotions Count is an easy to use website that allows the grading of the emotional well-being of
                students based on the standardized testing method implemented for academic well-being.
                This project was featured by King5 News, the Kent Reporter, the Auburn Reporter, is
                currently undergoing trial implementation in the Auburn School District, and was a featured presentation
                at the Washington State Applied Baccalaureate Conference for the Washington State Board for Community
                and Technical Colleges (SBCTC) (Nov 2, 2016).
              </p>
            </div>
          </div>
        </div>

        <div class="span4 portfolio-item website html5 css3 responsive reactive live">
          <div class="picture">
            <a href="http://mtx.greenrivertech.net/" target="_blank">
              <img src="dependencies/img/MTXExample2.png" alt="Mechatronics Page Sample Image"/>
              <div class="image-overlay-link"></div>
            </a>
            <div class="item-description alt">
              <h5><a href="http://emotions-count.greenrivertech.net/">FAST IQ</a></h5>
              <p>Formative Assessment using Structured Technology for Intelligent Questions. This web-based application
                was requested by the head of the Mechatronics program at Green River College as part of a National Science 
                Foundation project. The application is to allow adaptive, responsive, and reactive web design for
                instructors to be able to see questions at-a-glance for lab projects, with the ability to add their own
                chapters, sections, questions, answers, and notes instantaneously.
              </p>
            </div>
          </div>
        </div>
        
        <div class="span4 portfolio-item website html5 css3 responsive live">
          <div class="picture">
            <a href="http://blackdawn-rp.com/" target="_blank">
              <img src="dependencies/img/BlackdawnRPexample.png" alt="Blackdawn Roleplay Guild Website Sample Image"/>
              <div class="image-overlay-link"></div>
            </a>
            <div class="item-description alt">
              <h5><a href="http://blackdawn-rp.com/">Blackdawn RP Guild Website</a></h5>
              <p>A website jointly developed with Kerrie Low, this website is designed to help organize the World of 
              Warcraft guild Blackdawn from the Wyrmrest Accord (US) Server.  The site includes various images taken by, 
              or created by, the guild members, and includes an ever-growing back-end that will support user-profiles, 
              blogs, forums, and user-specific customization.  Using only PHP, HTML, CSS, and JS, the site's data-driven 
              functionality is all hand-coded to make a custom solution.
              </p>
            </div>
          </div>
        </div>
      </div>
        <!-- end: Portfolio -->
      </div>
      <!-- end: Wrapper -->

    </div>
    <!--end: Container -->

  </div>
  <!-- end: 3rd Page - Portfolio -->


  <!-- start: 4th Page - Contact -->
  <div id="mapBg"></div>
  <div id="contact" class="color purple transparent">

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
              if (!empty($errorMessage)) {
                echo "<p>There was an error with your form:</p>";
                echo "<ul>" . $errorMessage . "</ul>";
              }
              ?>

              <form method="post" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>">

                <fieldset>
                  <input tabindex="4" id="name" name="formName" type="text"
                         value="<?= $varName; ?>" class="span12" placeholder="Name: Required"
                         required>
                  <input tabindex="2" id="email" name="formEmail" type="text"
                         value="<?= $varEmail; ?>" class="span12" placeholder="Email: Required"
                         required>
                  <textarea tabindex="3" class="input-xlarge span12" id="message" name="formMess"
                            rows="7"
                            placeholder="Message: Not Required, but Encouraged"></textarea>

                  <div class="actions">
                    <button tabindex="3" type="submit" name="formSubmit"
                            class="btn btn-succes btn-large" value="Submit">Send message
                    </button>
                  </div>

                </fieldset>

              </form>

            </div>


            <!-- end: Contact Form -->


          </div>
          <!-- end: Map

          <div class="span6">

            <!-- starts: Google Maps
            <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
            <div id="googlemaps">
              <div id="map" class="google-map google-map-full"></div>
            </div>
            <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
            <script src="dependencies/js/jquery.gmap.min.js"></script>
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
  <script type="text/javascript" src="dependencies/js/isotope.js"></script>
  <script type="text/javascript" src="dependencies/js/jquery.imagesloaded.js"></script>
  <script type="text/javascript" src="dependencies/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="dependencies/js/flexslider.js"></script>
  <script type="text/javascript" src="dependencies/js/carousel.js"></script>
  <script type="text/javascript" src="dependencies/js/fancybox.js"></script>
  <script type="text/javascript" src="dependencies/js/twitter.js"></script>
  <script type="text/javascript" src="dependencies/js/modernizr.custom.79639.js"></script>
  <script type="text/javascript" src="dependencies/js/jquery.ba-cond.min.js"></script>
  <script type="text/javascript" src="dependencies/js/jquery.slitslider.js"></script>

  <script type="text/javascript" src="dependencies/js/excanvas.js"></script>
  <script type="text/javascript" src="dependencies/js/jquery.flot.min.js"></script>
  <script type="text/javascript" src="dependencies/js/jquery.flot.pie.min.js"></script>
  <script type="text/javascript" src="dependencies/js/jquery.flot.stack.js"></script>
  <script type="text/javascript" src="dependencies/js/jquery.flot.resize.min.js"></script>

  <script defer="defer" src="dependencies/js/custom.js"></script>
  <script type="text/javascript">

  
    $(function () {
        $('#slider').carousel({
    interval: 300
});
        
      var Page = (function () {

        var $navArrows = $('#nav-arrows'),
          $nav = $('#nav-dots > span'),
          slitslider = $('#slider').slitslider({
            onBeforeChange: function (slide, pos) {

              $nav.removeClass('nav-dot-current');
              $nav.eq(pos).addClass('nav-dot-current');

            }
          }),

          init = function () {

            initEvents();

          },
          initEvents = function () {

            // add navigation events
            $navArrows.children(':last').on('click', function () {

              slitslider.next();
              return false;

            });

            $navArrows.children(':first').on('click', function () {

              slitslider.previous();
              return false;

            });

            $nav.each(function (i) {

              $(this).on('click', function (event) {

                var $dot = $(this);

                if (!slitslider.isActive()) {

                  $nav.removeClass('nav-dot-current');
                  $dot.addClass('nav-dot-current');

                }

                slitslider.jump(i + 1);
                return false;

              });

            });

          };

        return {init: init};

      })();

      Page.init();

    });
  </script>
  <!-- end: Java Script -->
</body>
</html>