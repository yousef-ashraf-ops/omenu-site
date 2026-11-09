<?php
/*
  HEADER — shared top of EVERY page.
  Each page sets $page (e.g. $page='home';) BEFORE including this,
  so the matching nav link can be highlighted as "active".
*/
include 'includes/lang.php';

// Keep the chosen language in every internal link (so it doesn't reset).
$qs   = ($lang === 'ar') ? '?lang=ar' : '';
// Avoid a warning if a page forgot to set $page.
$page = isset($page) ? $page : '';

// Helper: prints "active" when $key is the current page.
function nav_active($key, $page) { return ($key === $page) ? 'active' : ''; }
?>
<!DOCTYPE html>
<html lang="<?php echo $lang; ?>" dir="<?php echo $dir; ?>">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $t['page_title']; ?></title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
  <!-- adds a marker class so scroll-reveal can hide blocks before paint (no flicker) -->
  <script>document.documentElement.className += " reveal-on";</script>
</head>
<body>

  <!-- ============ NAV BAR ============ -->
  <header>
    <div class="container nav">

      <a href="index.php<?php echo $qs; ?>" class="logo">
        <img src="assets/img/logo.png" alt="<?php echo $t['brand']; ?>" class="logo-img">
      </a>

      <ul class="nav-links">
        <li><a href="index.php<?php echo $qs; ?>"    class="<?php echo nav_active('home',$page); ?>"><?php echo $t['nav_home']; ?></a></li>
        <li><a href="about.php<?php echo $qs; ?>" class="<?php echo nav_active('about',$page); ?>"><?php echo $lang==="ar"?"من نحن":"About"; ?></a></li>
        <li><a href="why-us.php<?php echo $qs; ?>"    class="<?php echo nav_active('why',$page); ?>"><?php echo $t['nav_why']; ?></a></li>
        <li><a href="services.php<?php echo $qs; ?>"  class="<?php echo nav_active('services',$page); ?>"><?php echo $t['nav_services']; ?></a></li>
        <li><a href="packages.php<?php echo $qs; ?>"  class="<?php echo nav_active('packages',$page); ?>"><?php echo $t['nav_packages']; ?></a></li>
        <li><a href="faq.php<?php echo $qs; ?>"       class="<?php echo nav_active('faq',$page); ?>"><?php echo $t['nav_faq']; ?></a></li>
        <li><a href="contact.php<?php echo $qs; ?>"   class="<?php echo nav_active('contact',$page); ?>"><?php echo $t['contact_eyebrow']; ?></a></li>
      </ul>

      <div class="nav-actions">
        <a href="?lang=<?php echo $other_lang; ?>" class="lang-switch"><?php echo $other_label; ?></a>

        <button class="icon-btn" aria-label="wishlist">
          <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M20.8 4.6a5.5 5.5 0 0 0-7.8 0L12 5.6l-1-1a5.5 5.5 0 0 0-7.8 7.8l1 1L12 21l7.8-7.6 1-1a5.5 5.5 0 0 0 0-7.8z"/>
          </svg>
        </button>

        <button class="icon-btn" aria-label="account">
          <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2">
            <circle cx="12" cy="8" r="4"/><path d="M4 21v-1a7 7 0 0 1 14 0v1"/>
          </svg>
        </button>

        <button class="icon-btn cart-btn" id="cartBtn" aria-label="cart">
          <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2">
            <circle cx="9" cy="21" r="1"/><circle cx="18" cy="21" r="1"/>
            <path d="M1 1h4l2.7 13.4a2 2 0 0 0 2 1.6h8.5a2 2 0 0 0 2-1.6L23 6H6"/>
          </svg>
          <span class="cart-count" id="cartCount">0</span>
        </button>
      </div>

      <button class="menu-toggle" aria-label="menu">&#9776;</button>
    </div>
  </header>
