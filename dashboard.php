<?php
require("header.php")
?>
<div class="sidebar">
  <div class="logo-details">
    <img id="logo_name" src="images\logo1.png">
    <img id="solixy">
  </div>
<ul class="nav-links">
    <li class = "<?php if($pageName == 'Home') {echo 'act';}?>">
      <a href="home.php">
        <i class='bx bx-home-alt' ></i>
        <span class="links_name">Accueil</span>
      </a>
    </li>
    <li class = "<?php if($pageName == 'Clients') {echo 'act';}?>" >
      <a href="clients.php">
        <i class='bx bx-user' ></i>
        <span class ="links_name"> Clients</span>
      </a>
    </li>
    <li class = "<?php if($pageName == 'Prospects') {echo 'act';}?>">
      <a href="prospects.php">
        <i class='bx bx-loader-circle' ></i>
        <span class="links_name">Prospects</span>
      </a> 
    </li>
    <li class = "<?php if($pageName == 'Facture') {echo 'act';}?>">
      <a href="Facture.php">
        <i class='bx bx-dollar' ></i>
        <span class="links_name">Factures</span>
      </a>
    </li>
    <li class = "<?php if($pageName == 'Devis') {echo 'act';}?>">
      <a href="devis.php">
        <i class='bx bx-dollar-circle' ></i>
        <span class="links_name">Devis</span>
      </a>
    </li>
    <li class = "<?php if($pageName == 'Paiments') {echo 'act';}?>">
      <a href="paiments.php">
        <i class='bx bx-copy-alt' ></i>
        <span class="links_name">Paiments</span>
      </a>
    </li>
    <li class="log_out">
      <a href="logout.php">
        <i class='bx bx-log-out'></i>
        <span class="links_name">Log out</span>
      </a>
    </li>
  </ul>
</div>
<section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Dashboard</span>
      </div>
      <div class="search-box">
        <input type="text" placeholder="Search...">
        <i class='bx bx-search' ></i>
      </div>
      <div class="profile-details">
        <img src="images/profil.jpg" alt="">
        <span class="admin_name"><?php echo $_SESSION['name']; ?></span>
        <div class="dropdown">
          <button class="bx bx-chevron-down" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a href="logout.php"><i class='bx bx-log-out'></i><span class="log">Log out</span> </a>
          </div>
        </div>
      </div>
    </nav>

