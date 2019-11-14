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
            <h1 class="mt-4 mb-3">Firstname Lastname
                <small>Guild Rank</small>
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
				<!-- Card column -->
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
						                <img class="d-block w-100" src="http://placehold.it/400x400" alt="Profile Image One">
						                <div class="carousel-caption d-none d-md-block">
						                    <p>Profile Image One Description</p>
						                </div>
						            </div>
						            <div class="carousel-item">
						                <img class="d-block w-100" src="http://placehold.it/400x400" alt="Profile Image Two">
						                <div class="carousel-caption d-none d-md-block">
						                    <p>Profile Image Two Description</p>
						                </div>
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
												<p>Overflow Example Text: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sollicitudin nulla eu feugiat scelerisque. Curabitur vitae nulla ac risus viverra viverra a ut magna. Maecenas viverra elit erat, nec molestie quam posuere vitae.</p>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-3" align="left">
												<p class="mk-2">Nickname:</p>
											</div>
											<div class="col-lg-9" align="left">
												<p>Placeholder Text</p>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-3" align="left">
												<p class="mk-2">Age:</p>
											</div>
											<div class="col-lg-9" align="left">
												<p>Placeholder Text</p>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-3" align="left">
												<p class="mk-2">Race:</p>
											</div>
											<div class="col-lg-9" align="left">
												<p>Placeholder Text</p>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-3" align="left">
												<p class="mk-2">Eyes:</p>
											</div>
											<div class="col-lg-9" align="left">
												<p>Placeholder Text</p>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-3" align="left">
												<p class="mk-2">Height:</p>
											</div>
											<div class="col-lg-9" align="left">
												<p>Placeholder Text</p>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-3" align="left">
												<p class="mk-2">Weight:</p>
											</div>
											<div class="col-lg-9" align="left">
												<p>Placeholder Text</p>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-3" align="left">
												<p class="mk-2">Home:</p>
											</div>
											<div class="col-lg-9" align="left">
												<p>Placeholder Text</p>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-3" align="left">
												<p class="mk-2">Birthplace:</p>
											</div>
											<div class="col-lg-9" align="left">
												<p>Overflow Example Text: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sollicitudin nulla eu feugiat scelerisque. Curabitur vitae nulla ac risus viverra viverra a ut magna. Maecenas viverra elit erat, nec molestie quam posuere vitae.</p>
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
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sollicitudin nulla eu feugiat scelerisque. Curabitur vitae nulla ac risus viverra viverra a ut magna. Maecenas viverra elit erat, nec molestie quam posuere vitae. Vivamus faucibus efficitur pulvinar. Duis laoreet varius risus, eget semper ligula venenatis ac. Nunc vitae laoreet mauris. Maecenas vel efficitur lectus. Duis libero leo, laoreet sed ligula nec, venenatis elementum elit. Sed semper dolor sit amet eros dapibus scelerisque. Pellentesque dignissim aliquam massa sit amet fermentum. Suspendisse auctor nulla dui, quis vulputate magna maximus quis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nunc hendrerit augue nec nunc tempor, vestibulum malesuada felis scelerisque.</p>
                    </div>
                    <div>
                        <h2 class="mk-4">Character History</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sollicitudin nulla eu feugiat scelerisque. Curabitur vitae nulla ac risus viverra viverra a ut magna. Maecenas viverra elit erat, nec molestie quam posuere vitae. Vivamus faucibus efficitur pulvinar. Duis laoreet varius risus, eget semper ligula venenatis ac. Nunc vitae laoreet mauris. Maecenas vel efficitur lectus. Duis libero leo, laoreet sed ligula nec, venenatis elementum elit. Sed semper dolor sit amet eros dapibus scelerisque. Pellentesque dignissim aliquam massa sit amet fermentum. Suspendisse auctor nulla dui, quis vulputate magna maximus quis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nunc hendrerit augue nec nunc tempor, vestibulum malesuada felis scelerisque.</p>
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
