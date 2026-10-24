<?php
require_once __DIR__ . '/../config.php';
$currentPage = basename($_SERVER['PHP_SELF'], '.php');
if (!isset($pageTitle)) {
    $pageTitle = SCHOOL_NAME . ' | CBSE Affiliated School, Isuapur, Saran (Bihar)';
}
if (!isset($metaDescription)) {
    $metaDescription = 'Sanskar Deep International School, Isuapur, Saran (Chapra), Bihar. CBSE Affiliation No: 331081. Quality English Medium CBSE education from Playgroup to Senior Secondary (+2).';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo htmlspecialchars($pageTitle); ?></title>
  <meta name="description" content="<?php echo htmlspecialchars($metaDescription); ?>">
  <meta name="keywords" content="Sanskar Deep International School, sanskardeep, CBSE school Isuapur, CBSE Saran Chapra, schools in Isuapur, CBSE Affiliation 331081, Mandatory Public Disclosure CBSE">
  
  <!-- Open Graph -->
  <meta property="og:title" content="<?php echo htmlspecialchars($pageTitle); ?>">
  <meta property="og:description" content="<?php echo htmlspecialchars($metaDescription); ?>">
  <meta property="og:image" content="<?php echo SCHOOL_WEBSITE; ?>/assets/img/campus.jpg">
  <meta property="og:url" content="<?php echo SCHOOL_WEBSITE; ?>">
  <meta property="og:type" content="website">

  <!-- Favicon -->
  <link rel="icon" type="image/webp" href="assets/img/logo.webp">
  
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Outfit:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
  
  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

  <!-- Top Announcement Ticker -->
  <div class="top-notice-ticker">
    <div class="container">
      <div class="ticker-wrapper">
        <span class="ticker-badge">
          <svg width="14" height="14" fill="currentColor" viewBox="0 0 20 20"><path d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z"></path></svg>
          Admissions <?php echo ACADEMIC_SESSION; ?>
        </span>
        <div class="ticker-content">
          Registration open from Nursery to Class XII (Science, Commerce & Arts Streams) &bull; 
          <a href="admissions.php">Apply Online Now</a> &bull; CBSE Affiliation No: <strong><?php echo CBSE_AFFILIATION_NO; ?></strong> &bull; School Code: <strong><?php echo CBSE_SCHOOL_CODE; ?></strong> &bull; Call Helpline: <strong><?php echo SCHOOL_PHONE_PRIMARY; ?></strong>
        </div>
      </div>
    </div>
  </div>

  <!-- Top Utility Bar -->
  <div class="top-bar">
    <div class="container">
      <div class="top-bar-inner">
        <div class="top-contact-list">
          <div class="top-contact-item">
            <svg width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
            <a href="tel:<?php echo SCHOOL_PHONE_PRIMARY; ?>"><?php echo SCHOOL_PHONE_PRIMARY; ?></a>
          </div>
          <div class="top-contact-item">
            <svg width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
            <a href="mailto:<?php echo SCHOOL_EMAIL; ?>"><?php echo SCHOOL_EMAIL; ?></a>
          </div>
          <div class="top-contact-item">
            <svg width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
            <span>Isuapur, Saran (Chapra), Bihar</span>
          </div>
        </div>

        <div class="top-links">
          <a href="<?php echo FACEBOOK_URL; ?>" target="_blank" rel="noopener noreferrer" title="Follow us on Facebook">
            <svg width="14" height="14" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
            Facebook
          </a>
          <a href="mpd.php" class="mpd-top-pill" title="CBSE Mandatory Public Disclosure (Appendix IX)">
            <svg width="12" height="12" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4z" clip-rule="evenodd"></path></svg>
            CBSE MPD (Appendix IX)
          </a>
        </div>
      </div>
    </div>
  </div>

  <!-- Main School Branding Bar -->
  <header class="main-header">
    <div class="container">
      <div class="header-brand-wrap">
        <a href="index.php" class="brand-link">
          <img src="assets/img/logo.webp" alt="Sanskar Deep International School Logo" class="brand-logo-img">
          <div class="brand-text">
            <h1><?php echo SCHOOL_NAME; ?></h1>
            <div class="brand-subtext">
              <span>Managed by <strong><?php echo TRUST_NAME; ?></strong></span>
              <span class="affiliation-pill">Affiliated to CBSE, New Delhi &bull; Affiliation No: <?php echo CBSE_AFFILIATION_NO; ?> &bull; School Code: <?php echo CBSE_SCHOOL_CODE; ?></span>
            </div>
          </div>
        </a>

        <div class="brand-motto-box">
          <div class="motto-emblem">
            <div class="motto-hindi"><?php echo SCHOOL_MOTTO; ?></div>
            <div class="motto-english"><?php echo SCHOOL_MOTTO_TRANS; ?></div>
          </div>
          <div class="header-actions">
            <button class="btn btn-secondary open-enquiry-modal" id="headerEnquireBtn">
              <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
              Apply / Enquire
            </button>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Main Navigation Bar -->
  <nav class="navbar" id="mainNavbar">
    <div class="container">
      <div class="nav-container">
        <ul class="nav-menu">
          <li class="nav-item <?php echo ($currentPage == 'index' || $currentPage == '') ? 'active' : ''; ?>">
            <a href="index.php" class="nav-link">Home</a>
          </li>
          <li class="nav-item <?php echo ($currentPage == 'about') ? 'active' : ''; ?>">
            <a href="about.php" class="nav-link">About Us</a>
            <div class="dropdown-menu">
              <a href="about.php#overview" class="dropdown-item">About SDIS</a>
              <a href="about.php#vision" class="dropdown-item">Vision & Mission</a>
              <a href="about.php#leadership" class="dropdown-item">Principal's Desk</a>
              <a href="about.php#trust" class="dropdown-item">Sangam Educational Trust</a>
              <a href="about.php#core-values" class="dropdown-item">Our 5 Core Values</a>
            </div>
          </li>
          <li class="nav-item <?php echo ($currentPage == 'academics') ? 'active' : ''; ?>">
            <a href="academics.php" class="nav-link">Academics</a>
            <div class="dropdown-menu">
              <a href="academics.php#curriculum" class="dropdown-item">CBSE Curriculum</a>
              <a href="academics.php#streams" class="dropdown-item">Senior Secondary Streams (+2)</a>
              <a href="academics.php#methodology" class="dropdown-item">Pedagogy & NEP 2020</a>
              <a href="academics.php#calendar" class="dropdown-item">Academic Calendar</a>
            </div>
          </li>
          <li class="nav-item <?php echo ($currentPage == 'mpd') ? 'active' : ''; ?>">
            <a href="mpd.php" class="nav-link mpd-link">
              <svg width="15" height="15" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4z" clip-rule="evenodd"></path></svg>
              Mandatory Public Disclosure (MPD)
              <span class="nav-badge-new">CBSE</span>
            </a>
          </li>
          <li class="nav-item <?php echo ($currentPage == 'admissions') ? 'active' : ''; ?>">
            <a href="admissions.php" class="nav-link">Admissions</a>
            <div class="dropdown-menu">
              <a href="admissions.php#procedure" class="dropdown-item">Admission Procedure</a>
              <a href="admissions.php#fees" class="dropdown-item">Fee Structure 2026-27</a>
              <a href="admissions.php#eligibility" class="dropdown-item">Age & Eligibility</a>
              <a href="admissions.php#enquiry" class="dropdown-item">Online Enquiry Form</a>
            </div>
          </li>
          <li class="nav-item <?php echo ($currentPage == 'facilities') ? 'active' : ''; ?>">
            <a href="facilities.php" class="nav-link">Facilities</a>
            <div class="dropdown-menu">
              <a href="facilities.php#classrooms" class="dropdown-item">Smart Classrooms</a>
              <a href="facilities.php#labs" class="dropdown-item">Science & Computer Labs</a>
              <a href="facilities.php#library" class="dropdown-item">Library & Reading Hub</a>
              <a href="facilities.php#sports" class="dropdown-item">Sports & Athletic Ground</a>
              <a href="facilities.php#transport" class="dropdown-item">School Bus Transport</a>
            </div>
          </li>
          <li class="nav-item <?php echo ($currentPage == 'gallery') ? 'active' : ''; ?>">
            <a href="gallery.php" class="nav-link">Gallery</a>
          </li>
          <li class="nav-item <?php echo ($currentPage == 'contact') ? 'active' : ''; ?>">
            <a href="contact.php" class="nav-link">Contact Us</a>
          </li>
        </ul>

        <button class="nav-mobile-toggle" id="mobileNavToggle" aria-label="Open Mobile Menu">
          <svg width="24" height="24" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
        </button>
      </div>
    </div>
  </nav>

  <!-- Mobile Drawer Overlay & Menu -->
  <div class="mobile-nav-overlay" id="mobileNavOverlay"></div>
  <div class="mobile-nav-drawer" id="mobileNavDrawer">
    <div class="mobile-nav-header">
      <div style="font-weight: 700; font-size: 1.1rem;"><?php echo SCHOOL_NAME; ?></div>
      <button class="mobile-nav-close" id="mobileNavClose" aria-label="Close menu">&times;</button>
    </div>
    <div class="mobile-nav-body">
      <ul class="mobile-nav-list">
        <li class="mobile-nav-item"><a href="index.php">Home</a></li>
        <li class="mobile-nav-item"><a href="about.php">About Us</a></li>
        <li class="mobile-nav-item"><a href="academics.php">Academics & Streams</a></li>
        <li class="mobile-nav-item"><a href="mpd.php" style="color: var(--secondary); font-weight: 700;">Mandatory Public Disclosure (MPD)</a></li>
        <li class="mobile-nav-item"><a href="admissions.php">Admissions 2026-27</a></li>
        <li class="mobile-nav-item"><a href="facilities.php">Campus & Facilities</a></li>
        <li class="mobile-nav-item"><a href="gallery.php">Photo Gallery</a></li>
        <li class="mobile-nav-item"><a href="contact.php">Contact & Map</a></li>
        <li class="mobile-nav-item"><a href="<?php echo FACEBOOK_URL; ?>" target="_blank" rel="noopener noreferrer">Facebook Official Page</a></li>
      </ul>
      <div style="padding: 20px;">
        <button class="btn btn-secondary btn-block open-enquiry-modal" style="width: 100%;">Admission Enquiry</button>
      </div>
    </div>
  </div>
