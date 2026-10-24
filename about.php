<?php
$pageTitle = 'About Us | Sanskar Deep International School, Isuapur, Saran';
$metaDescription = 'Learn about Sanskar Deep International School, Isuapur, Saran (Bihar), managed by Sangam Educational and Welfare Trust. CBSE Affiliation No: 331081.';
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/includes/header.php';
?>

<!-- Page Header -->
<div class="page-header">
  <div class="container">
    <div class="page-header-content">
      <h1>About Our School</h1>
      <div class="breadcrumbs">
        <a href="index.php">Home</a> &bull; <span>About Us</span>
      </div>
    </div>
  </div>
</div>

<!-- Section: Overview -->
<section class="section" id="overview">
  <div class="container">
    <div class="welcome-grid">
      <div>
        <span class="section-tag">A Heritage of Excellence</span>
        <h2 style="font-size: 2.3rem; margin-bottom: 18px; color: var(--primary);">Illuminating Minds in Saran District</h2>
        <p class="welcome-lead">
          Sanskar Deep International School was founded with a transformative vision: to deliver world-standard, values-based English-medium CBSE education to the youth of Isuapur and the wider Saran region.
        </p>
        <p class="welcome-text">
          Managed with utmost dedication by the <strong><?php echo TRUST_NAME; ?></strong>, the school is affiliated with the Central Board of Secondary Education (CBSE), New Delhi up to Senior Secondary Level (+2) with Affiliation No: <strong><?php echo CBSE_AFFILIATION_NO; ?></strong> and School Code: <strong><?php echo CBSE_SCHOOL_CODE; ?></strong>.
        </p>
        <p class="welcome-text">
          Our sprawling 4-acre green campus creates an oasis of academic rigor, athletic vigor, and cultural enlightenment. We believe that true education develops the head, heart, and hands together—equipping students not only to excel in board examinations and competitive fields like NEET, JEE, CUET, and NDA, but also to live as responsible, ethical leaders of tomorrow.
        </p>
        <div style="margin-top: 20px;">
          <a href="mpd.php" class="btn btn-secondary">
            View CBSE Public Disclosure (MPD)
          </a>
        </div>
      </div>

      <div class="welcome-image-wrap">
        <img src="assets/img/campus.jpg" alt="Sanskar Deep International School Campus" class="welcome-img-main">
      </div>
    </div>
  </div>
</section>

<!-- Vision & Mission Section -->
<section class="section section-bg-light" id="vision">
  <div class="container">
    <div class="section-header">
      <span class="section-tag">Our Guiding Compass</span>
      <h2 class="section-title">Vision, Mission & Motto</h2>
      <p class="section-subtitle">
        Anchored in our sacred emblem motto <strong>"<?php echo SCHOOL_MOTTO; ?>"</strong> (Be Your Own Light).
      </p>
    </div>

    <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 30px;">
      <div style="background: var(--white); padding: 35px 28px; border-radius: var(--radius-lg); border-top: 4px solid var(--secondary); box-shadow: var(--shadow-md);">
        <div style="width: 52px; height: 52px; background: #fef3c7; color: var(--secondary); border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.5rem; margin-bottom: 20px;">
          👁️
        </div>
        <h3 style="font-size: 1.35rem; margin-bottom: 12px; color: var(--primary);">Our Vision</h3>
        <p style="color: var(--muted); font-size: 0.925rem; line-height: 1.6;">
          To be an institution of academic distinction that nurtures globally aware, critically enlightened, and morally grounded individuals capable of shaping a progressive and harmonious world.
        </p>
      </div>

      <div style="background: var(--white); padding: 35px 28px; border-radius: var(--radius-lg); border-top: 4px solid var(--accent-green); box-shadow: var(--shadow-md);">
        <div style="width: 52px; height: 52px; background: #ecfdf5; color: var(--accent-green); border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.5rem; margin-bottom: 20px;">
          🎯
        </div>
        <h3 style="font-size: 1.35rem; margin-bottom: 12px; color: var(--primary);">Our Mission</h3>
        <p style="color: var(--muted); font-size: 0.925rem; line-height: 1.6;">
          To provide experiential, inclusive, and technologically enriched learning rooted in Indian sanskars; to ignite creative thinking, foster scientific temper, and empower students to realize their highest potential.
        </p>
      </div>

      <div style="background: var(--white); padding: 35px 28px; border-radius: var(--radius-lg); border-top: 4px solid var(--primary); box-shadow: var(--shadow-md);">
        <div style="width: 52px; height: 52px; background: #eff6ff; color: var(--primary); border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.5rem; margin-bottom: 20px;">
          🪔
        </div>
        <h3 style="font-size: 1.35rem; margin-bottom: 12px; color: var(--primary);">The Motto</h3>
        <p style="color: var(--muted); font-size: 0.925rem; line-height: 1.6;">
          <strong>"आत्मदीपः भव" (Aatma Deepo Bhava)</strong> — Lord Buddha's timeless reminder to "Be Your Own Light." We train students to discover their inner light of discernment, truth, self-reliance, and courageous leadership.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- Section: Principal's Desk -->
<section class="section" id="leadership">
  <div class="container">
    <div class="welcome-grid">
      <div>
        <img src="assets/img/principal.jpg" alt="Principal Dr. Rajesh Sharma" style="border-radius: var(--radius-xl); box-shadow: var(--shadow-xl); width: 100%;">
        <div style="background: #f8fafc; padding: 20px; border-radius: var(--radius-md); border: 1px solid var(--border); margin-top: 15px; text-align: center;">
          <h4 style="font-size: 1.15rem; color: var(--primary); margin-bottom: 2px;"><?php echo PRINCIPAL_NAME; ?></h4>
          <p style="font-size: 0.85rem; color: var(--secondary); font-weight: 600;"><?php echo PRINCIPAL_QUALIFICATION; ?></p>
          <p style="font-size: 0.8rem; color: var(--muted);">Principal, Sanskar Deep International School</p>
        </div>
      </div>

      <div>
        <span class="section-tag">From the Principal's Desk</span>
        <h2 style="font-size: 2.2rem; color: var(--primary); margin-bottom: 16px;">Dear Parents, Students & Well-Wishers</h2>
        <p style="font-size: 1rem; color: var(--dark-soft); line-height: 1.65; margin-bottom: 16px;">
          It is an honor to welcome you to <strong>Sanskar Deep International School</strong>. When we look at our children, we see not just the learners of today, but the scientists, thinkers, entrepreneurs, doctors, officers, and changemakers of tomorrow.
        </p>
        <p style="font-size: 0.95rem; color: var(--muted); line-height: 1.65; margin-bottom: 16px;">
          At SDIS, education transcends textbooks. In an era dominated by rapid technological change, we ensure our students master digital competence and scientific reasoning while maintaining strong cultural ethics, respect for elders, empathy for the underprivileged, and civic accountability.
        </p>
        <p style="font-size: 0.95rem; color: var(--muted); line-height: 1.65; margin-bottom: 16px;">
          Our teachers are continuous mentors who identify every child’s individual learning style. With smart audio-visual classrooms, modern physics, chemistry, and biology laboratories, expansive library resources, and dedicated sports coaching, our students receive the ideal environment to excel.
        </p>
        <p style="font-size: 0.95rem; color: var(--muted); line-height: 1.65; margin-bottom: 20px;">
          I invite all prospective parents to visit our campus in Isuapur, interact with our faculty, and experience firsthand how we nurture curious minds into enlightened leaders.
        </p>
        <div style="font-weight: 700; color: var(--primary);">
          With warm regards and blessings,<br>
          <span style="font-size: 1.1rem; color: var(--secondary);"><?php echo PRINCIPAL_NAME; ?></span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Section: Trust Details -->
<section class="section section-bg-light" id="trust">
  <div class="container">
    <div style="background: var(--white); border-radius: var(--radius-xl); padding: 40px; border: 1px solid var(--border); box-shadow: var(--shadow-lg);">
      <div style="display: grid; grid-template-columns: 2fr 1fr; gap: 40px; align-items: center;">
        <div>
          <span class="section-tag">Institutional Governance</span>
          <h2 style="font-size: 2rem; color: var(--primary); margin-bottom: 14px;"><?php echo TRUST_NAME; ?></h2>
          <p style="color: var(--muted); font-size: 0.95rem; line-height: 1.65; margin-bottom: 14px;">
            The school is conceived and run under the registered auspices of the <strong>Sangam Educational and Welfare Trust</strong>, a non-proprietary philanthropic organization formed by eminent educationists, social leaders, and administrators dedicated to uplifting rural and semi-urban education standards in Bihar.
          </p>
          <p style="color: var(--muted); font-size: 0.95rem; line-height: 1.65;">
            The Trust ensures that the school strictly adheres to CBSE bye-laws, maintains fair fee structures, recruits certified educators with UGC/NCTE compliant qualifications, and continually invests in campus infrastructure, clean energy, and scholarship funds for deserving students.
          </p>
        </div>
        <div style="background: #f8fafc; border-radius: var(--radius-lg); padding: 25px; border: 1px solid var(--border); text-align: center;">
          <img src="assets/img/logo.webp" alt="School Trust Crest" style="width: 80px; margin: 0 auto 12px;">
          <h4 style="font-size: 1.1rem; color: var(--primary); margin-bottom: 4px;">Registered Welfare Trust</h4>
          <p style="font-size: 0.8rem; color: var(--muted); margin-bottom: 12px;">Dedicated to non-profit educational service</p>
          <button class="doc-view-btn" data-doc="trust" style="width: 100%; justify-content: center;">
            View Trust Deed & Registration
          </button>
        </div>
      </div>
    </div>
  </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
