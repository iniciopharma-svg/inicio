<?php
// Set active page variable if not set
if (!isset($page)) $page = '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="<?php echo isset($meta_desc) ? htmlspecialchars($meta_desc) : 'Iniciopharma - Providing premium quality healthcare solutions at affordable prices. Based in Vadodara, Gujarat, India.'; ?>" />
  <meta name="keywords" content="pharmaceutical, medicine, healthcare, Vadodara, Gujarat, Iniciopharma, Remose, Mubrin, Fevedol" />
  <meta name="author" content="Iniciopharma" />
  <meta property="og:title" content="<?php echo isset($page_title) ? htmlspecialchars($page_title) : 'Iniciopharma'; ?>" />
  <meta property="og:description" content="To provide the best health care services to every life." />
  <meta property="og:type" content="website" />
  <title><?php echo isset($page_title) ? htmlspecialchars($page_title) . ' | Iniciopharma' : 'Iniciopharma — Healthcare for Every Life'; ?></title>

  <!-- Favicon -->
  <link rel="icon" type="image/svg+xml" href="assets/images/favicon.svg" />

  <!-- Styles -->
  <link rel="stylesheet" href="<?php echo isset($base) ? $base : ''; ?>assets/css/style.css" />

  <!-- Google Fonts preconnect -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar" id="navbar">
  <div class="navbar-inner">

    <!-- Logo -->
    <a href="<?php echo isset($base) ? $base : ''; ?>index.php" class="navbar-logo">
      <img src="<?php echo isset($base) ? $base : ''; ?>assets/images/logo.jpeg" alt="Iniciopharma" class="navbar-logo-img" />
      <div class="navbar-logo-text">
        <span class="navbar-brand-name">Inicio<span>Pharma</span></span>
        <span class="navbar-brand-tagline">Healthcare for Every Life</span>
      </div>
    </a>

    <!-- Links -->
    <ul class="navbar-links">
      <li><a href="<?php echo isset($base) ? $base : ''; ?>index.php"    class="<?php echo $page === 'home'     ? 'active' : ''; ?>">Home</a></li>
      <li><a href="<?php echo isset($base) ? $base : ''; ?>about.php"    class="<?php echo $page === 'about'    ? 'active' : ''; ?>">About Us</a></li>
      <li><a href="<?php echo isset($base) ? $base : ''; ?>products.php" class="<?php echo $page === 'products' ? 'active' : ''; ?>">Products</a></li>
      <li><a href="<?php echo isset($base) ? $base : ''; ?>careers.php"  class="<?php echo $page === 'careers'  ? 'active' : ''; ?>">Careers</a></li>
      <li><a href="<?php echo isset($base) ? $base : ''; ?>assets/docs/visual.pdf" target="_blank">Visual Aid</a></li>
      <li><a href="<?php echo isset($base) ? $base : ''; ?>contact.php"  class="<?php echo $page === 'contact'  ? 'active' : ''; ?>">Contact</a></li>
    </ul>

    <!-- CTA -->
    <div class="navbar-cta">
      <a href="tel:+917523076895" class="btn btn-outline" style="padding: 10px 20px; font-size: 13px;">
        <i class="fa fa-phone"></i> Call Us
      </a>
      <a href="<?php echo isset($base) ? $base : ''; ?>contact.php" class="btn btn-primary" style="padding: 10px 20px; font-size: 13px;">
        Get In Touch
      </a>
    </div>

    <!-- Hamburger -->
    <div class="hamburger" id="hamburger">
      <span></span><span></span><span></span>
    </div>

  </div>
</nav>

<!-- MOBILE MENU -->
<div class="mobile-menu" id="mobileMenu">
  <a href="<?php echo isset($base) ? $base : ''; ?>index.php">Home</a>
  <a href="<?php echo isset($base) ? $base : ''; ?>about.php">About Us</a>
  <a href="<?php echo isset($base) ? $base : ''; ?>products.php">Products</a>
  <a href="<?php echo isset($base) ? $base : ''; ?>careers.php">Careers</a>
  <a href="<?php echo isset($base) ? $base : ''; ?>assets/docs/visual.pdf" target="_blank">Visual Aid</a>
  <a href="<?php echo isset($base) ? $base : ''; ?>contact.php">Contact</a>
  <a href="tel:+917523076895" class="btn btn-primary">
    <i class="fa fa-phone"></i> +91 75230 76895
  </a>
</div>
