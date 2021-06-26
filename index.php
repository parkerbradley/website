<?php
$pageTitle = "Home";
$nav = null;
$active = null;
include("inc/header.php");

?>

      <div class="home-container">
        <div class="title">
          <h1 class="hp-headline">Symplicity<br />Media</h1>
          <p class="tagline">Building websites can be complicated...<br />We make it <span id="green">Simple</span>.</p>
        </div>
        <div class="buckets">
          <div class="bucket" data-link="website-development.php">
            <div class="bucket-cover"></div>
            <h2 class="bucket-title">Website<br />Development</h2>
            <img class="bucket-shape" src="assets/triangle.png" alt="green triangle">
          </div>
          <div class="bucket" data-link="app-development.php">
            <div class="bucket-cover"></div>
            <h2 class="bucket-title">App<br />Development</h2>
            <img class="bucket-shape" src="assets/square.png" alt="blue square">
          </div>
          <div class="bucket" data-link="about-us.php">
            <div class="bucket-cover"></div>
            <h2 class="bucket-title">About<br />Us</h2>
            <img class="bucket-shape" src="assets/circle.png" alt="red circle">
          </div>
          <div class="bucket" data-link="contact-us.php">
            <div class="bucket-cover"></div>
            <h2 class="bucket-title">Contact<br />Us</h2>
            <img class="bucket-shape" src="assets/hexagon.png" alt="yellow hexagon">
          </div>
        </div>
      </div>
<?php include("inc/footer.php"); ?>
