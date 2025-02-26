<?php
session_start(); // Start session to use $_SESSION variables
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <title>My Website</title>
    
    <!-- Link CSS file -->
   
    <link rel="stylesheet" href="/Public/css/sidebar.css"> <!-- Adjust the path if needed -->
</head>
<body>

   <div class="header-container">

<!-- Top Bar -->
<div class="top-bar">
    <button id="menu-btn">☰</button> <!-- Menu Icon -->
    <img src="/Public/img/BTC SwipersLOGO.jpg" alt="Logo" class="top-logo"> <!-- Logo -->

    <div class="funds-container">
        <button id="add-funds-btn"><a href="/Public/Payment Gateway/Paymentpage.html"> Add Funds  </button></a>
        <button id="balance-btn">
            <?php echo isset($_SESSION['balance']) ? $_SESSION['balance'] : '$000.00'; ?>
        </button>
    </div>
</div>

<!-- Sidebar Navigation -->
<nav id="new-sidebar" class="new-sidebar">
  <button id="close-btn">✖</button> <!-- Close Button -->

  <h1 class="logo">Swipers<span>Web</span></h1>


  <ul>
      <li><a href="/Public/index.html"><i class="fa fa-home" aria-hidden="true"></i> Dashboard</a></li>

      <!-- Cards Dropdown -->
      <li class="dropdown">
      <a href="#" class="drop-btn"><i class="fa fa-credit-card"></i> Cards ▼</a>
          <ul class="sub-dropdown-menu">
            <li><a href="Cards/Mastercard.php">Master Cards</a></li>
            <li><a href="Cards/visa.php"> Visa Cards</a></li>
            <li><a href="Cards/Amex.php">Amex Cards</a></li>
            <li><a href="Cards/Discover.php">Discover Cards</a></li>
          </ul>
      </li>

      <!-- Bank Logs Dropdown -->
      <li class="dropdown">
          <a href="#" class="drop-btn"> <i class="fa fa-university" aria-hidden="true"></i> Bank Logs ▼</a>
          <ul class="sub-dropdown-menu">
            <li><a href="/Public/Bank LOGs/chase.php">Chase Banks</a></li>
            <li><a href="/Public/Bank LOGs/Boa.php">BOA Banks</a></li>
            <li><a href="Bank LOGs/Citi.php">Citi Banks</a></li>
            <li><a href="Bank LOGs/wellsfargo.php">Wells Fargo Banks</a></li>
            <li><a href="Bank LOGs/TD.php">TD Banks</a></li>
            <li><a href="Bank LOGs/Huntington.php">Huntington Banks</a></li>
            <li><a href="Bank LOGs/Chime.php">Chime Banks</a></li>
            <li><a href="Bank LOGs/Suntrust.php">Suntrust Banks</a></li>

              <!-- Canada Banks Submenu -->
              <li class="dropdown">
                  <a href="#" class="drop-btn">Canadian Banks ▼</a>
                  <ul class="sub-dropdown-menu">
                    <li><a href="Bank LOGs/Scotia.php">Scotia Banks</a></li>
                    <li><a href="Bank LOGs/RBC.php">RBC Banks</a></li>
                    <li><a href="Bank LOGs/TDCanada.php">TD Banks</a></li>
                    <li><a href="Bank LOGs/BMO.php">BMO Banks</a></li>
                  </ul>
              </li>
             <!-- UK Banks Submenu -->
             <li class="dropdown">
              <a href="#" class="drop-btn">UK Banks ▼</a>
              <ul class="sub-dropdown-menu">
                <li><a href="Bank LOGs/Lollyds.php">Lollyds Banks</a></li>
                <li><a href="Bank LOGs/Hsbc.php">Hsbc UK Banks</a></li>
                <li><a href="Bank LOGs/Halifax.php">Halifax Banks</a></li>
                <li><a href="Bank LOGs/Barclays.php">Barclays Banks</a></li>
              </ul>
          </li>

          </ul>
      </li>
         <!-- ScamPages Dropdown -->
      <li class="dropdown">
        <a href="#" class="drop-btn"><i class="fa fa-file" aria-hidden="true"></i> SCAM PAGES ▼</a>
            <ul class="sub-dropdown-menu">
              <li><a href="/Public/Scam Page/Bank ScamPage.php">Bank Scampages</a></li>
              <li><a href="/Public/Scam Page/Emailscampage.php">Email Scampages</a></li>
            </ul>
        </li>

         <!-- MobileLOGs Dropdown -->
      <li class="dropdown">
        <a href="#" class="drop-btn"><i class="fa fa-address-book" aria-hidden="true"></i> Mobile LOGs ▼</a>
            <ul class="sub-dropdown-menu">
              <li><a href="/Public/Mobile Logs/MobileLogs.php">Verified Mobile LOGs </a></li>
        
            </ul>
        </li>

         <!--Fullz Dropdown -->
      <li class="dropdown">
        <a href="#" class="drop-btn"><i class="fa fa-briefcase" aria-hidden="true"></i> FULLZ ▼</a>
            <ul class="sub-dropdown-menu">
              <li><a href="/Public/Fullz/USAFullz.php">USA Fullz</a></li>
              <li><a href="Fullz/UKfullz.php">UK Fullz</a></li>
              <li><a href="Fullz/CanadaFullz.php">Canda Fullz</a></li>
              <li><a href="Fullz/EuropeFullz.php"> Europe Fullz</a></li>
            </ul>
        </li>

      <!--Dumps Dropdown -->
      <li class="dropdown">
        <a href="#" class="drop-btn"><i class="fa fa-address-card" aria-hidden="true"></i> DUMPS ▼</a>
            <ul class="sub-dropdown-menu">
              <li><a href="Dumps/USADumps.php">USA Dumps</a></li>
              <li><a href="Dumps/UKDumps.php">UK Dumps</a></li>
              <li><a href="Dumps/CanadaDumps.php"> Canada Dumps</a></li>
              <li><a href="Dumps/EuropeDumps.php"> Europe Dumps </a></li>
            </ul>
        </li>

  </ul>
  <!-- ✅ Mobile Logout Button (Inside Sidebar) -->
  
<button id="logout-btn" class="mobile-logout">Logout</button>
   
</nav>
   </div>
 
<script src="/Public/script.js"></script>
</body>