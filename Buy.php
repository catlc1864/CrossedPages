<?php
/* BUY - PHP */
/* Here we open the current session so we can check if the user is logged in and show their username in the navigation bar. */
session_start();
?>
<!-- BUY -->
<!DOCTYPE html>

<!-- PAGE LANGUAGE -->
<html>

<!-- HEAD BEGINNING -->
<head>
  <link rel="stylesheet" type="text/css" href="./Main.css">
  <meta name="viewport" content="width=device-width, initial-scale=1" charset="UTF-8">
   <title>Buy</title>
</head>

<!-- BODY of the page, has all the visible content-->
<body style="background-color: #cdac7d;">

<!-- LANGUAGE BUTTON -->
<!-- onclick is an event handler that executes a JavaScript function when the button is clicked. -->
<button id="lang-btn" onclick="toggleLanguage()">Español</button>

<!-- HEADER BEGINNING -->
<div class="linea">
  <header>
    <!-- Invisible checkbox that controls our mobile menu -->
    <input type="checkbox" id="nav-toggle" class="nav-toggle">
        
    <!-- Clickable three-line "hamburger" icon using unicode -->
    <label for="nav-toggle" class="hamburger" id="hamburger">&#9776;</label>
        
    <nav class="navbar">

     <div class="logo">
        <a id="logo-link" href="./Introduction.php"><img src="./logo.png" alt="Crossed pages logo" class="logo-img"></a>

        <!--Here we check with isset() if $_SESSION['name'] (taken from RegisterDB.php) exists. If the user is logged in,
         we show their name using echo and htmlspecialchars() (so the text is safe to display in HTML) and the Logout button. If not, we show the Access button.-->
        <?php if (isset($_SESSION['name'])): ?>

      <span class="welcome-msg"><span data-i18n-block="welcome">Welcome</span> <?php echo htmlspecialchars($_SESSION['name']); ?></span>
      <a class="logout-btn" href="Logout.php" data-i18n-block="logout">Logout</a>
        <?php else: ?>
        <!-- If the user is not logged in, we show the Access button. -->
        <section data-i18n-block="navbar-access">
        <a id="access-link" href="RegisterU.php">Access</a>
        </section>
        
        <?php endif; ?>
      </div>

      <!-- NAVIGATION MENU -->
      <section data-i18n-block="navbar-buy">
        <div class="menu">
          <a href="./Main.php">Home</a>
          <a href="./Buy.php" class="active-link">Buy</a>
          <a href="./Sell.php">Sell</a>
          <a href="./Swap.php">Swap</a>
          <a href="./Donate.php">Donate</a>
        </div>
      </section>
      
    </nav>
  </header>
</div>

<!-- PAGE CONTENT BEGINNING -->

<!-- BOOK CARDS GRID BEGINNING -->
<div class="book">
  <!-- BOOK 1-->
  <div class="book-item">
    <p>Harry Potter y el prisionero de Azkaban</p>
    <p>$320</p>
    <a class="buy-btn" data-i18n-block="buy-btn">Buy</a>
  </div>

  <!-- BOOK 2-->
  <div class="book-item">
    <p>Romeo and Juliet</p>
    <p>$380</p>
    <a class="buy-btn" data-i18n-block="buy-btn">Buy</a>
  </div>

  <!-- BOOK 3-->
  <div class="book-item">
    <p>Tom Sawyer</p>
    <p>$340</p>
    <a class="buy-btn" data-i18n-block="buy-btn">Buy</a>
  </div>

  <!-- BOOK 4-->
  <div class="book-item">
    <p>Mujercitas</p>
    <p>$450</p>
    <a class="buy-btn" data-i18n-block="buy-btn">Buy</a>
  </div>

  <!-- BOOK 5-->
  <div class="book-item">
    <p>Ciudades de Papel</p>
    <p>$360</p>
    <a class="buy-btn" data-i18n-block="buy-btn">Buy</a>
  </div>

  <!-- BOOK 6-->
  <div class="book-item">
    <p>Crepúsculo: Amanecer</p>
    <p>$350</p>
    <a class="buy-btn" data-i18n-block="buy-btn">Buy</a>
  </div>

  <!-- BOOK 7-->
   <div class="book-item">
    <p>Percy Jackson</p>
    <p>$410</p>
    <a class="buy-btn" data-i18n-block="buy-btn">Buy</a>
  </div>

  <!-- BOOK 8-->
  <div class="book-item">
    <p>Fleur</p>
    <p>$270</p>
    <a class="buy-btn" data-i18n-block="buy-btn">Buy</a>
  </div>

  <!-- BOOK 9-->
  <div class="book-item">
    <p>Dime que escondes</p>
    <p>$400</p>
    <a class="buy-btn" data-i18n-block="buy-btn">Buy</a>
  </div>
</div>
</section>
<!-- BOOK CARDS GRID ENDING -->

<!-- FOOTER, -->
<footer>
    <div class="footer">
        <section data-i18n-block="footer-credit">
            <p class="credit">Website created and designed by Catalina Ligüera and Tomás Correa.</p>
        </section>
        <div class="footer-emails">
          <p>catalinaliguera@gmail.com</p>
          <p>tomascorreadurante@gmail.com</p>
        </div>
        <section data-i18n-block="footer-copyright">
            <p class="credit"> ©2026 - Crossed pages, Paysandú, Uruguay.</p>
        </section>
    </div>
</footer>

<!-- Link to translation script -->
<script src="translations.js"></script>
</body>
</html>
