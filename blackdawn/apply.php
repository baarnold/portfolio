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
      <h3 class="mt-4 mb-3">Apply
        <small></small>
      </h3>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item active">Apply</li>
      </ol>

      <!-- Intro Content -->
      <div class="row">
          <!-- Contact Form -->
      <div class="row">
        <div class="col-xs-1 col-lg-1"></div>
        <div class="col-lg-10 mb-4">
          
          <form name="sentApp" method="POST" id="appForm" action="apply_email.php" novalidate>
            <h3 class="my-4">General Information</h3>
            <p>This information is so that we can establish ways to contact and identify you both in and out of game.  We respect your 
            privacy, and will not reveal any information provided in this form to any third parties, and only will be reviewed by 
            Blackdawn's Officer Council.</p>
            <div class="row">
              <div class="control-group form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="controls">
                  <label>Warcraft Game Name:</label>
                  <input type="text" class="form-control" id="oocName" name="oocName" required data-validation-required-message="Please enter OOC name.">
                  <p class="help-block"></p>
                </div>
              </div>
              <div class="control-group form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
			    <div class="controls">
                  <label>Roleplay Character Name:</label>
                  <input type="text" class="form-control" id="icName" name="icName" required data-validation-required-message="Please enter IC name.">
                  <p class="help-block"></p>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="control-group form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="controls">
                  <label>Discord Name (Optional):</label>
                  <input type="text" class="form-control" id="discordName" name="discordName">
                  <p class="help-block"></p>
                </div>
              </div>
              <div class="control-group form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
			    <div class="controls">
                  <label>Email Address (Optional):</label>
                  <input type="email" class="form-control" id="email" name="email">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="control-group form-group col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <div class="controls">
                  <label>Character Level (Optional):</label>
                  <input type="text" class="form-control" id="charLevel" name="charLevel">
                  <p class="help-block"></p>
                </div>
              </div>
              <div class="control-group form-group col-xs-12 col-sm-12 col-md-4 col-lg-4">
			    <div class="form-group">
                  <label for="race">Select Race:</label>
                  <select class="form-control" id="race" name="race" required data-validation-required-message="Please select a race.">
                    <option></option>
                    <option>Human</option>
                    <option>Dwarf</option>
                    <option>Night Elf</option>
                    <option>Gnome</option>
                    <option>Draenei</option>
                    <option>Worgen</option>
                    <option>Pandaren</option>
                    <option>Void Elf</option>
                    <option>Lightforged</option>
                    <option>Dark Iron Dwarf</option>
                  </select>
                </div>
              </div>
              <div class="control-group form-group col-xs-12 col-sm-12 col-md-4 col-lg-4">
			    <div class="form-group">
                  <label for="race">Select Class:</label>
                  <select class="form-control" id="class" name="class" required data-validation-required-message="Please select a class.">
                    <option></option>
                    <option>Death Knight</option>
                    <option>Demon Hunter</option>
                    <option>Druid</option>
                    <option>Hunter</option>
                    <option>Mage</option>
                    <option>Monk</option>
                    <option>Paladin</option>
                    <option>Priest</option>
                    <option>Rogue</option>
                    <option>Shaman</option>
                    <option>Warlock</option>
                    <option>Warrior</option>
                  </select>
                </div>
              </div>
            </div>
            <h3 class="my-4">Guild Interests</h3>
            <p>The below sections lets us gauge the various activities you might be interested in partaking with our guild.  We have a number of 
            members who have interests outside of simply roleplay, and this will help us determine what sort of events you would most be 
            interested in.</p>
            <div class="row">
              <div class="control-group form-group col-xs-6 col-sm-6 col-md-3 col-lg-3">
                <p>Roleplay</p>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="Casual/Random" name="roleplay[]" id="casualRoleplay">
                  <label class="form-check-label" for="casualRoleplay">
                    Casual/Random
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="Event/Story" name="roleplay[]" id="eventRoleplay">
                  <label class="form-check-label" for="eventRoleplay">
                    Event/Story
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="Cross-Faction" name="roleplay[]" id="crossRoleplay">
                  <label class="form-check-label" for="crossRoleplay">
                    Cross-Faction
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="Forum/Chat" name="roleplay[]" id="forumRoleplay">
                  <label class="form-check-label" for="forumRoleplay">
                    Forum/Chat
                  </label>
                </div>
              </div>
              <div class="control-group form-group col-xs-6 col-sm-6 col-md-3 col-lg-3">
                <p>Player vs. Player</p>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="Warfronts" name="pvp[]" id="warfronts">
                  <label class="form-check-label" for="warfronts">
                    Warfronts
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="Casual BGs" name="pvp[]" id="casualPvp">
                  <label class="form-check-label" for="casualPvp">
                    Casual BGs
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="Arenas" name="pvp[]" id="arenaPvp">
                  <label class="form-check-label" for="arenaPvp">
                    Arenas
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="Rated BGs" name="pvp[]" id="ratedPvp">
                  <label class="form-check-label" for="ratedPvp">
                    Rated BGs
                  </label>
                </div>
              </div>
              <div class="control-group form-group col-xs-6 col-sm-6 col-md-3 col-lg-3">
                <p>Group Content</p>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="LFG/LFR" name="pve[]" id="casualPve">
                  <label class="form-check-label" for="casualPve">
                    Casual LFG/LFR
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="Normals/Heroics" name="pve[]" id="endPve">
                  <label class="form-check-label" for="endPve">
                    Normal/Heroics
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="Transmog" name="pve[]" id="transPve">
                  <label class="form-check-label" for="transPve">
                    Transmog Runs
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="Mythics" name="pve[]" id="mythicPve">
                  <label class="form-check-label" for="mythicPve">
                    Mythics
                  </label>
                </div>
              </div>
              <div class="control-group form-group col-xs-6 col-sm-4 col-md-3 col-lg-3">
                <p>Interpersonal</p>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="Blizzard Games" name ="other[]" id="blizzardGames">
                  <label class="form-check-label" for="blizzardGames">
                    Other Blizzard Games
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="Other Hobbies" name ="other[]" id="hobbies">
                  <label class="form-check-label" for="hobbies">
                    Hobbies
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="Socializing" name ="other[]" id="social">
                  <label class="form-check-label" for="social">
                    Socializing
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="Non-Blizzard Games" name ="other[]" id="otherGames">
                  <label class="form-check-label" for="otherGames">
                    Non-Blizzard Games
                  </label>
                </div>
              </div>
            </div>
            <h3 class="my-4">History Information</h3>
            <p></p>
            <div class="row">
              <div class="control-group form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="controls">
                  <label>What is your previous roleplay and guild experience, both in and outside of World of Warcraft?</label>
                  <textarea class="form-control" id="experience" name="experience" required data-validation-required-message="Please enter previous RP experience."></textarea>
                  <p class="help-block"></p>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="control-group form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="controls">
                  <label>In a few sentences, explain what your character is, what they do, and how they would fit in with Blackdawn in your opinion.</label>
                  <textarea class="form-control" id="overview" name="overview" required data-validation-required-message="Please enter some info about your character."></textarea>
                  <p class="help-block"></p>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="control-group form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="controls">
                  <label>Where did you hear of Blackdawn, and what got you interested in applying with us?</label>
                  <textarea class="form-control" id="interest" name="interest" required data-validation-required-message="Required so we can improve our visibility, sorry!."></textarea>
                  <p class="help-block"></p>
                </div>
              </div>
            </div>
            
            <div id="success"></div>
            <!-- For success/fail messages -->
            <button type="submit" class="btn btn-blackdawn btn-lg btn-block" id="sendApplyButton" name="submitApp">Send Message</button>
          </form>
        </div>
      </div>
      </div>
      <div class="col-xs-1 col-lg-2"></div>
      <!-- /.row -->
    </div>
    <!-- /.container -->

    <?php include('includes/footer.html');?>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>