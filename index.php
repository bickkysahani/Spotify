<?php
include("includes/config.php");

//session_destroy(); LOGOUT

if(isset($_SESSION['userLoggedIn'])) {
	$userLoggedIn = $_SESSION['userLoggedIn'];
}
else {
	header("Location: register.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="includes/images/logo2.jpg" type="image/icon type">
    <title>Spotify</title>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
    
    <div id="nowPlayingBarContainer">
          <div id="nowPlayingBar">

              <div id="nowPlayingLeft">
                <div class="content">
                    <span class="albumLink">
                    <img src="https://rey810.github.io/google_results_page/media-2/radiohead-5.jpg" class="albumArtwork">
                    </span>
                    <div class="trackInfo">

						<span class="trackName">
							<span>No Alarms No Surprises</span>
						</span>

						<span class="artistName">
							<span>Radiohead</span>
						</span>

					</div>
                </div>
              </div>

              <div id="nowPlayingCenter">
                <div class="content playerControls">
                    <div class="buttons">
                        <button class="controlButton shuffle">
                            <img src="assets/images/icons/shuffle.png" alt="">
                        </button>
                        <button class="controlButton previous">
                            <img src="assets/images/icons/previous.png" alt="">
                        </button>
                        <button class="controlButton play">
                            <img src="assets/images/icons/play.png" alt="">
                        </button>
                        <button class="controlButton pause" style="display:none">
                            <img src="assets/images/icons/pause.png" alt="">
                        </button>
                        <button class="controlButton next" >
                            <img src="assets/images/icons/next.png" alt="">
                        </button>
                        <button class="controlButton repeat">
                            <img src="assets/images/icons/repeat.png" alt="">
                        </button>
                    </div>

                    <div class="playbackBar">
                        <span class="progressTime current">0.00</span>
                        <div class="progressBar">
                            <div class="progressBarBg">
                                <div class="progress">

                                </div>
                            </div>

                        </div>
                        <span class="progressTime remaining">0.00</span>
                    </div>
                </div>                  


              </div>
              <div id="nowPlayingRight">
              <div class="volumeBar">

<button class="controlButton volume" title="Volume button">
    <img src="assets/images/icons/volume.png" alt="Volume">
</button>

<div class="progressBar">
    <div class="progressBarBg">
        <div class="progress"></div>
    </div>
</div>

</div>
              </div>
          </div> 
    </div>
</body>
</html>