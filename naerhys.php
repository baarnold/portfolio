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
            <h1 class="mt-4 mb-3">Naerhys Heulen
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
							<img class="card-img-top" src="img/PlaceholderProfile.png" alt="Naerhys Heulen Profile Picture">
							<div class="card-body" id="profileCard">
								<div class="col">
									<div id="cardPadding">
										<div class="row">
											<div class="col-lg-3" align="left">
												<p class="mk-2">Title:</p>
											</div>
											<div class="col-lg-9" align="left">
												<p>Lady Heulen of Silverpine</p>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-3" align="left">
												<p class="mk-2">Nickname:</p>
											</div>
											<div class="col-lg-9" align="left">
												<p>Nae, Rhys</p>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-3" align="left">
												<p class="mk-2">Age:</p>
											</div>
											<div class="col-lg-9" align="left">
												<p>27</p>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-3" align="left">
												<p class="mk-2">Race:</p>
											</div>
											<div class="col-lg-9" align="left">
												<p>Gilnean Worgen</p>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-3" align="left">
												<p class="mk-2">Eyes:</p>
											</div>
											<div class="col-lg-9" align="left">
												<p>Amber</p>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-3" align="left">
												<p class="mk-2">Height:</p>
											</div>
											<div class="col-lg-9" align="left">
												<p>5'5 (165.10 cm) / 6'6 (198.12 cm)</p>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-3" align="left">
												<p class="mk-2">Weight:</p>
											</div>
											<div class="col-lg-9" align="left">
												<p>Lean</p>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-3" align="left">
												<p class="mk-2">Family:</p>
											</div>
											<div class="col-lg-9" align="left">
												<p><a href="saenrys.php">Saenrys Nightclaw (Sister)</a>, Sir Heulen (Father, deceased), Lady Heulen (Mother)</p>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-3" align="left">
												<p class="mk-2">Home:</p>
											</div>
											<div class="col-lg-9" align="left">
												<p>Stormwind City, Kingdom of Stormwind</p>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-3" align="left">
												<p class="mk-2">Birthplace:</p>
											</div>
											<div class="col-lg-9" align="left">
												<p>Pyrewood, Kingdom of Gilneas</p>
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
					<h2 class="mk-4">Physical Appearance</h2>
					<p>Naerhys the human tends to blend into the background; auburn-brown hair, amber eyes, tanned skin, and lean. Her expression is usually a mask 
					of pleasant interest in her surroundings. She masks her lean muscles under the pleasant trinkets and robes of an innocuous harvest witch, and 
					keeps her human self looking nice: kohl lined eyes, delicately arched brows, and rouged lips.</p>
					<p>Naerhys the worgen looks more like a fox: fawn colored fur with a cream colored mask, toes, and belly, while her mane is pushed carelessly out 
					of her face and minimally braided. The rest of her forms follow suit, mostly browns and fawns. She wears form-fitting matte leathers, carefully 
					buckled down for stealth. Though, on occasion she does enjoy a flashier outfit. </p>
					<p>Naerhys smells like the outdoors, especially after she's come back from finding herbs, and on occasion, like bitter alchemical tinctures.</p>
					<h2 class="mk-4">Character History</h2>
					<p>The first daughter of Sir Heulen of Silverpine, a landed Knight of Gilneas who earned his title from his father, and veteran of the Second War.</p>
					<p>During the Scourging of Lordaeron, the Heulen family relocated to Pyrewood where his daughters became proficient hunters, with Naerhys learning 
					she had the makings of a Harvest Witch, and a good sense for business.</p>
					<p>During the Forsaken Invasion of Gilneas, their father, Sir Heulen, was slain and Naerhys became the de-facto caretaker of what remained of their 
					estate as they took their mother to safety on Fenris Isle, under the protection of a Gilnean expatriat and his mercinary force.</p>
					<p>Learning of the Worgen Curse, both Naerhys and her younger sister partook and served under the Gilnean Liberation Front for some time. Once the 
					truce between Sylvanas and Crowley was signed, her younger sister took interest in the Night Elves and set off to Darnassus, while Naerhys set off 
					to Stormwind to forge new trade ties, and establish the Heulen Family.</p>
                </div>
            </div>
        </div>
		
		<?php include('includes/footer.html');?>
		
        <!-- Bootstrap core JavaScript -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    </body>

</html>
