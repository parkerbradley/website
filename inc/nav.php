<header>
  <div class="header">
    <a class="logo-container" href="../">
      <img class="logo" src="../assets/logo.png" alt="symplicity media logo">
    </a>
    <div class="nav-wrapper">
      <nav class="main-nav">
        <a class ="nav-item<?php if($active == "web-dev") {echo " on";} else {echo " off";}?>" href="../website-development.php">Website Development</a>
        <a class ="nav-item<?php if($active == "app-dev") {echo " on";} else {echo " off";}?>" href="../app-development.php">App Development</a>
        <a class ="nav-item<?php if($active == "about") {echo " on";} else {echo " off";}?>" href="../about-us.php">About Us</a>
        <a class ="nav-item<?php if($active == "contact") {echo " on";} else {echo " off";}?>" href="../contact-us.php">Contact Us</a>
      </nav>
      <div class="nav-control">
        <i class="fas fa-bars" onclick="openMenu()"></i>
        <i class="fas fa-times" onclick="closeMenu()"></i>
      </div>
    </div>
  </div>
</header>
