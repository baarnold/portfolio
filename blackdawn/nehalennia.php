<!DOCTYPE html>
<html lang="en">

    <head>

		<?php include('includes/head.html'); ?>
    
	</head>

    <body>

        <?php include('includes/navbar-top.html'); ?>

        <!-- Page Content -->
        <div class="container">

            <!-- Page Heading/Breadcrumbs -->
            <h1 class="mt-4 mb-3">Nehalennia Thistlemoon
                <small>Member</small>
            </h1>
			
			<ol class="breadcrumb">
				<li class="breadcrumb-item">
			    	<a href="index.php">Home</a>
				</li>
				<li class="breadcrumb-item">
			    	<a href="information.php">Information</a>
				</li>
				<li class="breadcrumb-item active">Profile</li>
			</ol>

            <div class="row">   
				<!-- Card Column -->
				<div class="col-md-5 mb-4">
					<!-- Card: Removes vertical stretching of card column to match desc/history column -->
					<div>
						<div class="card h-100">
						    <div id="profileCarousel" class="carousel slide h-100" data-ride="carousel">
						        <ol class="carousel-indicators">
						            <li data-targer="#profileCarousel" data-slide-to="0" class="active"></li>
						            <li data-target="#profileCarousel" data-slide-to="1"></li>
						        </ol>
						        <div class="carousel-inner">
						            <div class="carousel-item active">
						                <img class="d-block w-100" src="img/Nehalennia.jpg" alt="Priestess Nehalennia Thistlemoon">
						                <!--<div class="carousel-caption d-none d-md-block">
						                    <p>Priestess Thistlemoon, blessed by elune.</p>
						                </div>-->
						            </div>
						            <div class="carousel-item">
						                <img class="d-block w-100" src="img/Nehacorn.png" alt="Nehacorn">
						                <!--<div class="carousel-caption d-none d-md-block">
						                    <p>Nehalennia, the princess of coursers.</p>
						                </div>-->
						            </div>
						        </div>
						        <a class="carousel-control-prev" href="#profileCarousel" role="button" data-slide="prev">
						            <span class="carousel-control-prev-icon" area-hidden="true"></span>
						            <span class="sr-only">Previous</span>
						        </a>
						        <a class="carousel-control-next" href="#profileCarousel" role="button" data-slide="next">
						            <span class="carousel-control-next-icon" area-hiden="true"></span>
						            <span class="sr-only">Next</span>
						        </a>
						    </div>
							<div class="card-body" id="profileCard">
								<div class="col">
									<div id="cardPadding">
										<div class="row">
											<div class="col-lg-3" align="left">
												<p class="mk-2">Title:</p>
											</div>
											<div class="col-lg-9" align="left">
												<p>Moon Priestess</p>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-3" align="left">
												<p class="mk-2">Nickname:</p>
											</div>
											<div class="col-lg-9" align="left">
												<p>Neha</p>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-3" align="left">
												<p class="mk-2">Age:</p>
											</div>
											<div class="col-lg-9" align="left">
												<p>10,334</p>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-3" align="left">
												<p class="mk-2">Race:</p>
											</div>
											<div class="col-lg-9" align="left">
												<p>Kaldorei</p>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-3" align="left">
												<p class="mk-2">Eyes:</p>
											</div>
											<div class="col-lg-9" align="left">
												<p>Starry White</p>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-3" align="left">
												<p class="mk-2">Height:</p>
											</div>
											<div class="col-lg-9" align="left">
												<p>7'0 (213.36 cm)</p>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-3" align="left">
												<p class="mk-2">Weight:</p>
											</div>
											<div class="col-lg-9" align="left">
												<p>Slender</p>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-3" align="left">
												<p class="mk-2">Family:</p>
											</div>
											<div class="col-lg-9" align="left">
												<p>Nyarai Thistlemoon (wife)</p>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-3" align="left">
												<p class="mk-2">Home:</p>
											</div>
											<div class="col-lg-9" align="left">
												<p>Wanderer</p>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-3" align="left">
												<p class="mk-2">Birthplace:</p>
											</div>
											<div class="col-lg-9" align="left">
												<p>Isildien, Feralas</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
                
				<!-- Content Column -->
				<div class="col-md-7 mb-4">

					<div>
						<h2 class="mk-4">Physical Appearance</h2>
						<p>Said to have been kissed by Elune at birth, Nehalennia as pale as the freshly fallen snow. Her eyes
						shimmer like bright stars and her hair falls back over her shoulders in gossamer moonbeams that stretch
						out a modest nine feet; though these locks tend to be tamed in public with twin braids that collect into a
						romantic tuck in the back and held in place with small crystal flower pins and one large crystal moon
						comb.</p>
						<p>She is usually dressed in a relatively casual manner for a Kaldorei priestess. She has a silver crescent
						moon pendant around her neck resting against her upper chest with a second pendant resting just under
						that on a leather cord: looking like some kind of horn with the larger end having been dipped in silver
						with a stylized moon carved into it.</p>
						<p>She also does carry a small satchel on her person. It loops over her shoulder, crossing over her heart,
						and rests against her left hip. It is a pale doe-skin bag with a silver moon emblem upon it. Inside are
						various items, the most important being a blue journal.</p>
					</div>
					<div>
						<h2 class="mk-4">Character History</h2>
						<p>As with many kaldorei women, Nehalennia was once an opponent to be feared in battle; priestess all
						the same, but quick with bow and light on her feet until she was struck down during the first war with
						the legion 10,000 years ago. Since that time, her memory has been fleeting and without constant
						reminders persons she has just met or events she has just lived through, they will fade into nothingness
						quickly.</p>
						<p>She suffered other losses as well during that war; becoming the last known member of her family to be
						alive. With nothing to tie her down to one place, she wandered once she had recovered and sought to
						help others that war had torn apart. Though still a firm follower of Elune, she has distanced herself
						from the Temple mildly as she tends to disagree with some of their teachings on how they treat
						'unfavorable' people. To Nehalennia, they are still people in need of help and she is there ready to
						assist.</p>
					</div>
                </div>
            </div>
        </div>
		
		<?php include('includes/footer.html');?>
		
        <!-- Bootstrap core JavaScript -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script>
            $('.carousel').carousel({
              interval: 7000
            })
        </script>

    </body>

</html>
