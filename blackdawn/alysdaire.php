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
            <h1 class="mt-4 mb-3">Alysdaire C. D. Blackdawn
                <small>Guild Master</small>
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
				<div class="col-md-5 mb-4">
					<!-- Card: Removes vertical stretching of card column to match desc/history column -->
					<div>
						<div class="card h-100">
						    <div id="profileCarousel" class="carousel slide h-100" data-ride="carousel">
						        <ol class="carousel-indicators">
						            <li data-targer="#profileCarousel" data-slide-to="0" class="active"></li>
						            <li data-target="#profileCarousel" data-slide-to="1"></li>
						            <li data-target="#profileCarousel" data-slide-to="2"></li>
						            <li data-target="#profileCarousel" data-slide-to="3"></li>
						        </ol>
						        <div class="carousel-inner">
						            <div class="carousel-item active">
						                <img class="d-block w-100" src="img/Alysdaire.png" alt="Commander Blackdawn in his preferred human form.">
						                <div class="carousel-caption d-none d-md-block">
						                    <p>Commander Blackdawn in his light armor uniform.</p>
						                </div>
						            </div>
						            <div class="carousel-item">
						                <img class="d-block w-100" src="img/Alysdaire2.png" alt="Commander Blackdawn in his preferred human form.">
						                <div class="carousel-caption d-none d-md-block">
						                    <p>Commander Blackdawn in his worgen form.</p>
						                </div>
						            </div>
						            <div class="carousel-item">
						                <img class="d-block w-100" src="img/Alyswoof.png" alt="Art by TallmanCreations AKA Lilyia.">
						                <div class="carousel-caption d-none d-md-block">
						                    <p>Art by <a href="https://www.deviantart.com/tallmancreations">TallmanCreations AKA Lilyia</a></p>
						                </div>
						            </div>
						            <div class="carousel-item">
						                <img class="d-block w-100" src="img/Alysshia.png" alt="Art by Shia.">
						                <div class="carousel-caption d-none d-md-block">
						                    <p>Art by <a href="https://www.deviantart.com/drunkfu">DrunkFu</a></p>
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
								<div id="cardPadding">
									<div class="row">
										<div class="col-lg-3" align="left">
											<h6 class="mk-2">Title:</h6>
										</div>
										<div class="col-lg-9" align="left">
											<p>Commander, Lord, Shadowdancer, Fury of Elune</p>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-3" align="left">
											<p class="mk-2">Nickname:</p>
										</div>
										<div class="col-lg-9" align="left">
											<p>Alys, Al, Alice</p>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-3" align="left">
											<p class="mk-2">Age:</p>
										</div>
										<div class="col-lg-9" align="left">
											<p>34</p>
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
											<p>Moon-touched Blue (Glowing)</p>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-3" align="left">
											<p class="mk-2">Height:</p>
										</div>
										<div class="col-lg-9" align="left">
											<p>6'0 (182.88 cm) / 7'9 (236.22 cm)</p>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-3" align="left">
											<p class="mk-2">Weight:</p>
										</div>
										<div class="col-lg-9" align="left">
											<p>165 lbs (74.8kg)</p>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-3" align="left">
											<p class="mk-2">Family:</p>
										</div>
										<div class="col-lg-9" align="left">
											<p>Tiberius Dunraven (father, deceased), Victoria Dunraven (mother, deceased), Reigan Ashford Blackdawn (wife, 
											deceased), Catriona Blackdawn (daughter), Adeline Blackdawn (daughter), Annalise Blackdawn (daughter), Aisling 
											Blackdawn (daughter), Konstantin (son), Alyssa (daughter)</p>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-3" align="left">
											<p class="mk-2">Home:</p>
										</div>
										<div class="col-lg-9" align="left">
											<p>Elwynn Forest, Kingdom of Stormwind</p>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-3" align="left">
											<p class="mk-2">Birthplace:</p>
										</div>
										<div class="col-lg-9" align="left">
											<p>Stormglen, Kingdom of Gilneas</p>
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
					<p>Alysdaire Blackdawn is a man anyone will recognize after meeting him once.  His vibrant red-orange hair contrasts 
					strongly against his softly glowing blue eyes, and the occasional shimmer of silver catches the light as he moves.  His 
					face, otherwise angular and normal for a man of his age and physique, is crossed by a set-of-three scar diagonally, the 
					middle mark crossing at the bridge of his nose, and the outer marks across both eyes.  He almost always wears his full-body 
					uniform, padded with leather armor as needed for light combat duties, with anything metal or shiny either padded or tarnished 
					to prevent rattling or reflecting.  Often these armors are in the colors of Gilneas, with the dark blues, golds, and oranges 
					as he still performs his duties as a Gilnean officer and operative from time to time.  He wears a cloak over one shoulder 
					often, concealing a two-shot revolver holstered on his left side, with a larger revolver strapped to his outer left thigh.  
					Often he carries a pair of long blades made of blessed Moonsteel, though noticeably these blades have thin grooves running 
					their lengths on either side.  When out of his armor he prefers formal attire or a heavy coat, often wearing a glove over his 
					right hand and a high collar to conceal his neck.  When exposed, matching scars to those on his face can be seen across his 
					torso and right arm - a constant reminder of the attack that transformed him.  He also bears two tattoos -- on his right arm 
					is a tattoo of a wolf, head back in a howl; on his left arm is a tattoo of the Greymane Family Crest from his time in the 
					Gilnean Intelligence Services.</p>
					<p>Alysdaire's worgen form matches the poise and pride he wears in his human form, with well-groomed dark fur that is starting 
					to grey, and the same vibrant blue eyes he has become known for.  He usually tries to stand straight-backed and erect when in 
					formal situations, often causing him to towers over fellow worgen by head and shoulders, but more often than not he remains 
					relaxed in his worgen form with the stereotypical hunch.  In both forms his eyes will glow stronger or more vibrantly under the 
					moonlight or in deep darkness.</p>
					<h2 class="mk-4">Character History</h2>
					<p>Alysdaire's history has not been one without loss and tragedy, which helps him relate to and care deeply for his fellow 
					Gilneans who have suffered similar fates.  Born Alysdaire Dunraven to a career military man and a courtesan, his future was decided for him 
					long before he could even walk.  He was offered to be raised and trained in a military schooling in Gilneas City, essentially 
					surrendered before his teenage years to become a ward of the state.  He showed aptitude at critical thinking and was almost 
					devoutly loyal to the Crown, which caught the attention of one Mistress Irene Foxheart, a trainer for the Gilnean Royal and 
					Intelligence Services.  She enlisted Alysdaire shortly after his 13th Birthday where he was extensively trained and drilled in 
					the arts of espionage, subterfuge, sabotage, etiquette, logistics, and command.  Shortly after his initial training was complete, 
					the Northgate Rebellion occurred in Gilneas, and Alysdaire was commissioned as a Lieutenant in the Gilnean Royal Army.  During 
					the Rebellion, Alysdaire was often tasked with helping to eliminate Rebel leaders or assassinating Rebel sympathizers.  This 
					work left a profound mark upon him, one which after the Rebellion caused him to retire from the Service to take over his ailing 
					father's estate in Duskhaven.  After the Rebellion he adopted a war-orphaned girl, named Leina, and put his efforts into providing 
					for her well-being, learning how to cook extravagant meals, needle-work to patch clothing or toys, and dabbling in merchant 
					business opportunities to make an income without the need to be gone for long periods of time.</p>
					<p>As the Moonlight Slasher's murders began to grip the land in terror, Alysdaire called upon childhood friend Ander Carmyne 
					and army comrade Jaricho Bloodpaw to form a small cadre of mercenaries to provide protection services for not only the wealthy 
					but also the poor thanks to Alysdaire's exorbitant pricing against wealthier clients.  Also enlisted in this organization was 
					Nyx Forsythe, a Rebellion sniper he had come across and spared due to the circumstances of the position he found her in, 
					Sershia Wolfthorn, an alchemist and physician for Alysdaire's since-deceased father, and Nicholas Vaelans, a haggard sergeant 
					and veteran of the Second War who had often served alongside Alysdaire in the field.  As such Blackdawn was formed, and shortly 
					after its inception, Alysdaire adopted the name "Blackdawn" as his new surname, replacing his original last name of "Dunraven."  
					He wanted to feel more connected to this extended family of his, and wanted to ensure that his name was related to more good deeds 
					done by his organization, than those acts he or his father had performed during the Rebellion.</p>
                </div>
            </div>
        </div>
		
		<?php include('includes/footer.html');?>
		
        <!-- Bootstrap core JavaScript -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    </body>

</html>
