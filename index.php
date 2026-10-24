<?php
$pageTitle = 'Sanskar Deep International School | Isuapur, Saran (Bihar) | CBSE Affiliated';
$metaDescription = 'Sanskar Deep International School, Isuapur, Saran (Chapra), Bihar. CBSE Affiliation No: 331081. Quality English-Medium Co-ed CBSE education from Playgroup to Senior Secondary (+2).';
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/includes/header.php';
?>

<!-- Hero Section -->
<section class="hero">
  <div class="container">
    <div class="hero-content">
      <div class="hero-badge">
        <svg width="16" height="16" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
        CBSE Affiliated Senior Secondary School &bull; Affiliation No: <?php echo CBSE_AFFILIATION_NO; ?>
      </div>
      <h1 class="hero-title">
        Nurturing Minds, Inspiring Character, <span>Shaping Leaders</span>
      </h1>
      <p class="hero-desc">
        Welcome to <strong>Sanskar Deep International School</strong>, Isuapur (Saran). Grounded in the eternal wisdom of <em>"<?php echo SCHOOL_MOTTO; ?>" (Be Your Own Light)</em>, we combine modern international pedagogies with deep-rooted moral values to empower every child.
      </p>
      <div class="hero-buttons">
        <a href="admissions.php" class="btn btn-secondary btn-lg">
          <svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
          Admissions <?php echo ACADEMIC_SESSION; ?>
        </a>
        <a href="mpd.php" class="btn btn-outline-white btn-lg">
          <svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
          CBSE Public Disclosure (MPD)
        </a>
      </div>
    </div>
  </div>
</section>

<!-- 4 Highlights Strip -->
<div class="hero-highlights-strip">
  <div class="container">
    <div class="highlights-grid">
      <div class="highlight-card">
        <div class="highlight-icon">
          <svg width="24" height="24" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
        </div>
        <div class="highlight-text">
          <h3>CBSE Curriculum</h3>
          <p>Holistic NCERT & NEP 2020 syllabus from Nursery to 10+2 (Science, Commerce & Arts).</p>
        </div>
      </div>

      <div class="highlight-card">
        <div class="highlight-icon">
          <svg width="24" height="24" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
        </div>
        <div class="highlight-text">
          <h3>Smart Classrooms</h3>
          <p>Digitally enabled audio-visual panels promoting interactive visual understanding.</p>
        </div>
      </div>

      <div class="highlight-card">
        <div class="highlight-icon">
          <svg width="24" height="24" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path></svg>
        </div>
        <div class="highlight-text">
          <h3>Modern Laboratories</h3>
          <p>Physics, Chemistry, Biology, Math, and 45-terminal high-tech Computer Lab.</p>
        </div>
      </div>

      <div class="highlight-card">
        <div class="highlight-icon">
          <svg width="24" height="24" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        </div>
        <div class="highlight-text">
          <h3>Safe Campus & Bus Fleet</h3>
          <p>24x7 CCTV coverage, guarded gates, and GPS-monitored bus routes across Saran.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Welcome & Leadership Desk Section -->
<section class="section" id="welcome">
  <div class="container">
    <div class="welcome-grid">
      <div class="welcome-image-wrap">
        <img src="assets/img/principal.jpg" alt="Principal Dr. Rajesh Sharma" class="welcome-img-main">
        <div class="welcome-badge-float">
          <div class="welcome-badge-number">100%</div>
          <div class="welcome-badge-label">
            CBSE Board Exam<br>Pass Record
          </div>
        </div>
      </div>

      <div class="welcome-content">
        <span class="section-tag">Welcome to Sanskardeep</span>
        <h2>Fostering Academic Excellence with Cultural Sanskar</h2>
        <p class="welcome-lead">
          "Education is not merely the filling of a vessel, but the kindling of a flame that illuminates life's journey."
        </p>
        <p class="welcome-text">
          Established in Isuapur under the visionary guidance of the <strong><?php echo TRUST_NAME; ?></strong>, Sanskar Deep International School stands as a beacon of progressive quality schooling in Saran, Bihar. We are proudly affiliated with the Central Board of Secondary Education (CBSE Affiliation No. <?php echo CBSE_AFFILIATION_NO; ?>), offering complete academic courses up to Senior Secondary (+2) level.
        </p>
        <p class="welcome-text">
          Our child-centric pedagogy focuses on critical thinking, collaborative inquiry, athletic stamina, and deep moral integrity. Our students learn in cutting-edge smart classrooms, explore scientific concepts in state-of-the-art laboratories, and discover their inner talents in co-curricular arenas.
        </p>
        <div style="display: flex; align-items: center; gap: 16px; margin-top: 25px;">
          <a href="about.php" class="btn btn-primary">Read Principal's Message</a>
          <a href="facilities.php" class="btn btn-outline">Explore Campus</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- The 5 Core Pillars (Emblem Leaves) -->
<section class="section section-bg-light" id="values">
  <div class="container">
    <div class="section-header">
      <span class="section-tag">The Philosophy of Sanskardeep</span>
      <h2 class="section-title">Our Five Core Pillars & Emblem Values</h2>
      <p class="section-subtitle">
        Inspired by our motto <strong>"<?php echo SCHOOL_MOTTO; ?>"</strong> (Be Your Own Light), our school emblem features 5 leaves representing essential virtues for life.
      </p>
    </div>

    <div class="pillars-grid">
      <div class="pillar-box">
        <div class="pillar-icon">⚡</div>
        <h4>Arduous</h4>
        <p>Instilling the spirit of diligent effort, hard work, resilience, and perseverance to overcome every life obstacle.</p>
      </div>

      <div class="pillar-box">
        <div class="pillar-icon">🤝</div>
        <h4>Etiquette</h4>
        <p>Inculcating grace, politeness, humility, cultural respect, and empathetic communication towards teachers, parents, and peers.</p>
      </div>

      <div class="pillar-box">
        <div class="pillar-icon">📖</div>
        <h4>Education</h4>
        <p>Cultivating deep conceptual clarity, intellectual curiosity, scientific temper, and lifelong thirst for knowledge.</p>
      </div>

      <div class="pillar-box">
        <div class="pillar-icon">⚖️</div>
        <h4>Discipline</h4>
        <p>Nurturing punctuality, self-regulation, moral conscience, and uncompromising ethical conduct at all times.</p>
      </div>

      <div class="pillar-box">
        <div class="pillar-icon">🌟</div>
        <h4>Perfection</h4>
        <p>Inspiring striving for excellence in academics, sports, artistic expression, and responsible global citizenship.</p>
      </div>
    </div>
  </div>
</section>

<!-- CBSE Mandatory Public Disclosure Callout Ribbon -->
<section style="padding: 30px 0;">
  <div class="container">
    <div class="mpd-banner-block">
      <div class="mpd-banner-info">
        <span class="ticker-badge" style="background: rgba(245, 158, 11, 0.3); color: #fbbf24; margin-bottom: 10px;">
          Official CBSE Compliance
        </span>
        <h3>CBSE Mandatory Public Disclosure (Appendix - IX)</h3>
        <p>
          Sanskar Deep International School complies with CBSE circulars and SARAS standards. Review our complete statutory documents, State NOC, building & fire safety approvals, fee schedules, SMC, and board examinations records.
        </p>
        <div class="mpd-pill-row">
          <span class="mpd-pill">✓ Affiliation No: <?php echo CBSE_AFFILIATION_NO; ?></span>
          <span class="mpd-pill">✓ School Code: <?php echo CBSE_SCHOOL_CODE; ?></span>
          <span class="mpd-pill">✓ Trust Deed & State NOC</span>
          <span class="mpd-pill">✓ Fire & Building Safety</span>
          <span class="mpd-pill">✓ Complete Staff Registry</span>
        </div>
      </div>
      <div>
        <a href="mpd.php" class="btn btn-secondary btn-lg" style="white-space: nowrap; box-shadow: 0 0 25px rgba(245, 158, 11, 0.35);">
          Open Appendix IX (MPD)
          <svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- Notices & Announcements + Quick Inquiry -->
<section class="section" id="notices">
  <div class="container">
    <div class="notices-layout">
      <!-- Notice Board -->
      <div class="notice-board-card">
        <div class="notice-header">
          <h3>
            <svg width="20" height="20" fill="currentColor" viewBox="0 0 20 20"><path d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z"></path></svg>
            Notice Board & Announcements
          </h3>
          <span style="font-size: 0.8rem; background: rgba(255,255,255,0.15); padding: 2px 10px; border-radius: 9999px;">
            Academic Session <?php echo ACADEMIC_SESSION; ?>
          </span>
        </div>
        <div class="notice-list">
          <div class="notice-item">
            <div class="notice-date-badge">
              <div class="notice-date-day">15</div>
              <div class="notice-date-month">OCT</div>
            </div>
            <div class="notice-details">
              <h4>Admissions Open for Session <?php echo ACADEMIC_SESSION; ?></h4>
              <p>Applications are invited for admissions from Playgroup, Nursery to Class XII. Collect registration form from the school counter or apply online.</p>
              <a href="admissions.php" class="notice-download-btn">
                <span>View Guidelines & Details &rarr;</span>
              </a>
            </div>
          </div>

          <div class="notice-item">
            <div class="notice-date-badge">
              <div class="notice-date-day">08</div>
              <div class="notice-date-month">OCT</div>
            </div>
            <div class="notice-details">
              <h4>Senior Secondary (+2) Stream Options Announced</h4>
              <p>Specialized coaching and laboratory practical sessions for Class XI & XII in Science (PCM/PCB), Commerce, and Humanities streams.</p>
              <a href="academics.php#streams" class="notice-download-btn">
                <span>Subject Combinations &rarr;</span>
              </a>
            </div>
          </div>

          <div class="notice-item">
            <div class="notice-date-badge">
              <div class="notice-date-day">28</div>
              <div class="notice-date-month">SEP</div>
            </div>
            <div class="notice-details">
              <h4>Mandatory Public Disclosure Registry Update</h4>
              <p>Annual disclosure update as per CBSE circular Appendix-IX with verified safety certificates and infrastructure dimensions.</p>
              <a href="mpd.php" class="notice-download-btn">
                <span>View CBSE Records &rarr;</span>
              </a>
            </div>
          </div>

          <div class="notice-item">
            <div class="notice-date-badge">
              <div class="notice-date-day">14</div>
              <div class="notice-date-month">SEP</div>
            </div>
            <div class="notice-details">
              <h4>Hindi Diwas & Cultural Exhibition Celebrations</h4>
              <p>Inter-house debate, poetry recitation, and art competition held across foundational and secondary wings.</p>
              <a href="gallery.php" class="notice-download-btn">
                <span>View Photo Highlights &rarr;</span>
              </a>
            </div>
          </div>
        </div>
      </div>

      <!-- Quick Inquiry Card -->
      <div class="quick-enquiry-box">
        <h3>Quick Admission Enquiry</h3>
        <p>Submit your details to receive prospectus, syllabus, and fee details.</p>
        <form class="ajax-inquiry-form" method="POST">
          <div class="form-group">
            <label>Parent's Name *</label>
            <input type="text" name="parent_name" class="form-control" placeholder="e.g. Anand Kumar" required>
          </div>
          <div class="form-group">
            <label>Mobile Contact Number *</label>
            <input type="tel" name="phone" class="form-control" placeholder="10-digit mobile number" pattern="[0-9]{10}" required>
          </div>
          <div class="form-group">
            <label>Admission Seeking In *</label>
            <select name="grade" class="form-control" required>
              <option value="">Select Grade</option>
              <option value="Pre-Primary (Nursery/KG)">Pre-Primary (Nursery/KG)</option>
              <option value="Primary (Class 1-5)">Primary (Class 1-5)</option>
              <option value="Middle (Class 6-8)">Middle (Class 6-8)</option>
              <option value="Secondary (Class 9-10)">Secondary (Class 9-10)</option>
              <option value="Senior Secondary (+2)">Senior Secondary (+2)</option>
            </select>
          </div>
          <div class="form-group">
            <label>Email Address (Optional)</label>
            <input type="email" name="email" class="form-control" placeholder="parent@gmail.com">
          </div>
          <button type="submit" class="btn btn-secondary" style="width: 100%; margin-top: 8px;">
            Send Enquiry
          </button>
        </form>
      </div>
    </div>
  </div>
</section>

<!-- Academic Stages -->
<section class="section section-bg-light" id="academics">
  <div class="container">
    <div class="section-header">
      <span class="section-tag">Learning Pathways</span>
      <h2 class="section-title">Academic Wings & Developmental Stages</h2>
      <p class="section-subtitle">
        Structured in alignment with the National Education Policy (NEP 2020) and CBSE guidelines to provide seamless educational continuum.
      </p>
    </div>

    <div class="stages-grid">
      <div class="stage-card">
        <span class="stage-card-class">Ages 3 - 6</span>
        <h3>Foundational Stage</h3>
        <p>Activity-based, playway learning nurturing vocabulary, numeracy, motor skills, and creative imagination.</p>
        <ul class="stage-card-features">
          <li>Playgroup, Nursery, LKG & UKG</li>
          <li>Montessori toy lab & rhymes</li>
          <li>Loving, trained NTT teachers</li>
        </ul>
      </div>

      <div class="stage-card">
        <span class="stage-card-class">Classes 1 - 5</span>
        <h3>Preparatory Stage</h3>
        <p>Developing foundational literacy, mathematical reasoning, social sciences, and expressive arts.</p>
        <ul class="stage-card-features">
          <li>Language skills in English & Hindi</li>
          <li>Experiential science exploration</li>
          <li>Regular physical education</li>
        </ul>
      </div>

      <div class="stage-card">
        <span class="stage-card-class">Classes 6 - 8</span>
        <h3>Middle Stage</h3>
        <p>Transitioning into subject-specialized conceptual depth, critical inquiry, lab experiments, and projects.</p>
        <ul class="stage-card-features">
          <li>Hands-on physics, chem & bio</li>
          <li>Coding, computer & AI basics</li>
          <li>Inter-school debate & sports</li>
        </ul>
      </div>

      <div class="stage-card">
        <span class="stage-card-class">Classes 9 - 12</span>
        <h3>Secondary & +2 Wing</h3>
        <p>Rigorous preparation for CBSE Board examinations, Olympiads, and competitive entrance examinations.</p>
        <ul class="stage-card-features">
          <li>Science: PCM & PCB stream</li>
          <li>Commerce with Accountancy & Eco</li>
          <li>Humanities / Arts streams</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- Campus Facilities Showcase -->
<section class="section" id="facilities">
  <div class="container">
    <div class="section-header">
      <span class="section-tag">World-Class Infrastructure</span>
      <h2 class="section-title">Designed for Holistic Growth & Safety</h2>
      <p class="section-subtitle">
        Spread over a spacious 4-acre campus in Isuapur with modern academic amenities and athletic spaces.
      </p>
    </div>

    <div class="facilities-grid">
      <div class="facility-card">
        <div class="facility-card-img">
          <img src="assets/img/classroom.jpg" alt="Smart Classrooms at Sanskardeep">
          <span class="facility-card-badge">Interactive Learning</span>
        </div>
        <div class="facility-card-body">
          <h3>Digital Smart Classrooms</h3>
          <p>Every classroom is equipped with interactive digital panels, high-speed connectivity, and ergonomic modular furniture.</p>
          <a href="facilities.php#classrooms" class="facility-card-link">Learn More &rarr;</a>
        </div>
      </div>

      <div class="facility-card">
        <div class="facility-card-img">
          <img src="assets/img/lab.jpg" alt="Science Laboratory">
          <span class="facility-card-badge">Practical Exploration</span>
        </div>
        <div class="facility-card-body">
          <h3>Science & Computer Labs</h3>
          <p>Fully equipped Physics, Chemistry, Biology, and high-performance Computer labs with specialized safety apparatus.</p>
          <a href="facilities.php#labs" class="facility-card-link">Learn More &rarr;</a>
        </div>
      </div>

      <div class="facility-card">
        <div class="facility-card-img">
          <img src="assets/img/library.jpg" alt="Modern Library">
          <span class="facility-card-badge">Resource Hub</span>
        </div>
        <div class="facility-card-body">
          <h3>Comprehensive Library</h3>
          <p>Over 6,500 titles spanning encyclopedias, reference literature, scientific periodicals, fiction, and e-learning terminals.</p>
          <a href="facilities.php#library" class="facility-card-link">Learn More &rarr;</a>
        </div>
      </div>

      <div class="facility-card">
        <div class="facility-card-img">
          <img src="assets/img/sports.jpg" alt="Sports Ground">
          <span class="facility-card-badge">Athletics & Fitness</span>
        </div>
        <div class="facility-card-body">
          <h3>Spacious Sports Grounds</h3>
          <p>Expansive playfields for football, cricket, volleyball, running track, yoga, and martial arts under certified coaches.</p>
          <a href="facilities.php#sports" class="facility-card-link">Learn More &rarr;</a>
        </div>
      </div>

      <div class="facility-card">
        <div class="facility-card-img">
          <img src="assets/img/campus.jpg" alt="School Fleet & Transport">
          <span class="facility-card-badge">Safe Commute</span>
        </div>
        <div class="facility-card-body">
          <h3>Safe Bus Transport Fleet</h3>
          <p>Dedicated school buses equipped with GPS trackers, speed governors, first aid, and trained lady attendants covering Saran routes.</p>
          <a href="facilities.php#transport" class="facility-card-link">Learn More &rarr;</a>
        </div>
      </div>

      <div class="facility-card">
        <div class="facility-card-img">
          <img src="assets/img/campus.jpg" alt="CCTV & Campus Security">
          <span class="facility-card-badge">Security</span>
        </div>
        <div class="facility-card-body">
          <h3>24x7 Security & Surveillance</h3>
          <p>Campus secured by comprehensive CCTV coverage, secure perimeter boundary, verified security guards, and RO drinking water.</p>
          <a href="facilities.php#security" class="facility-card-link">Learn More &rarr;</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Stats Banner -->
<section class="stats-banner">
  <div class="container">
    <div class="stats-grid">
      <div class="stat-item">
        <h3>1200+</h3>
        <p>Happy Students</p>
      </div>
      <div class="stat-item">
        <h3>100%</h3>
        <p>CBSE Pass Record</p>
      </div>
      <div class="stat-item">
        <h3>42</h3>
        <p>Qualified Educators</p>
      </div>
      <div class="stat-item">
        <h3>4.0</h3>
        <p>Acres Green Campus</p>
      </div>
      <div class="stat-item">
        <h3>1:1.5</h3>
        <p>Teacher-Section Ratio</p>
      </div>
    </div>
  </div>
</section>

<!-- Official Facebook Page Integration Banner -->
<section class="section" style="padding: 40px 0;">
  <div class="container">
    <div class="fb-community-card">
      <div class="fb-card-content">
        <span class="ticker-badge" style="background: rgba(255,255,255,0.25); color: #fff; margin-bottom: 8px;">
          Social Community
        </span>
        <h3>Connect With Us on Facebook</h3>
        <p>
          Catch our latest student achievements, festival celebrations, sports tournaments, campus reels, and real-time school announcements on our official Facebook page.
        </p>
        <span class="fb-badge-handle">facebook.com/sanskardeepinternational</span>
      </div>
      <div>
        <a href="<?php echo FACEBOOK_URL; ?>" target="_blank" rel="noopener noreferrer" class="btn btn-primary" style="background: #ffffff; color: #1877f2; font-weight: 700; white-space: nowrap; padding: 14px 28px;">
          <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
          Visit Official Page
        </a>
      </div>
    </div>
  </div>
</section>

<!-- Testimonials Section -->
<section class="section section-bg-light">
  <div class="container">
    <div class="section-header">
      <span class="section-tag">Parent Voices</span>
      <h2 class="section-title">What Parents Say About Sanskardeep</h2>
      <p class="section-subtitle">
        Trusted by families across Isuapur, Mashrakh, Taraiya, and Saran for academic rigor and caring mentoring.
      </p>
    </div>

    <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 24px;">
      <div style="background: var(--white); padding: 30px; border-radius: var(--radius-lg); border: 1px solid var(--border); box-shadow: var(--shadow-sm);">
        <div style="color: var(--secondary); font-size: 1.2rem; margin-bottom: 12px;">★★★★★</div>
        <p style="color: var(--dark-soft); font-size: 0.925rem; line-height: 1.6; margin-bottom: 16px;">
          "The discipline and moral values taught here alongside CBSE curriculum are unmatched. My daughter has blossomed in confidence and spoken English."
        </p>
        <div style="font-weight: 700; font-size: 0.9rem; color: var(--primary);">Shri Sanjay Kumar Singh</div>
        <div style="font-size: 0.785rem; color: var(--muted);">Parent of Class X Student &bull; Isuapur</div>
      </div>

      <div style="background: var(--white); padding: 30px; border-radius: var(--radius-lg); border: 1px solid var(--border); box-shadow: var(--shadow-sm);">
        <div style="color: var(--secondary); font-size: 1.2rem; margin-bottom: 12px;">★★★★★</div>
        <p style="color: var(--dark-soft); font-size: 0.925rem; line-height: 1.6; margin-bottom: 16px;">
          "The smart classrooms and well-equipped science laboratories make concepts so easy for kids to understand. Teachers give personal attention to every doubt."
        </p>
        <div style="font-weight: 700; font-size: 0.9rem; color: var(--primary);">Dr. R. P. Verma</div>
        <div style="font-size: 0.785rem; color: var(--muted);">Parent of Class VIII Student &bull; Mashrakh</div>
      </div>

      <div style="background: var(--white); padding: 30px; border-radius: var(--radius-lg); border: 1px solid var(--border); box-shadow: var(--shadow-sm);">
        <div style="color: var(--secondary); font-size: 1.2rem; margin-bottom: 12px;">★★★★★</div>
        <p style="color: var(--dark-soft); font-size: 0.925rem; line-height: 1.6; margin-bottom: 16px;">
          "The school bus service is punctual and safe. For Senior Secondary (+2), having dedicated Science & Commerce faculties locally in Saran is a blessing."
        </p>
        <div style="font-weight: 700; font-size: 0.9rem; color: var(--primary);">Smt. Anita Devi</div>
        <div style="font-size: 0.785rem; color: var(--muted);">Parent of Class XI Student &bull; Taraiya</div>
      </div>
    </div>
  </div>
</section>

<!-- Admission CTA Section -->
<section style="background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%); color: var(--white); padding: 70px 0; text-align: center;">
  <div class="container">
    <div style="max-width: 750px; margin: 0 auto;">
      <span class="ticker-badge" style="background: rgba(245, 158, 11, 0.2); color: #fbbf24; margin-bottom: 15px;">
        Enrolling Now for Session <?php echo ACADEMIC_SESSION; ?>
      </span>
      <h2 style="color: var(--white); font-size: 2.4rem; margin-bottom: 14px;">Give Your Child the Foundation for a Lifetime of Success</h2>
      <p style="color: #cbd5e1; font-size: 1.05rem; margin-bottom: 30px; line-height: 1.6;">
        Limited seats available across Pre-Primary, Primary, Middle, Secondary, and Senior Secondary streams. Visit the school campus or submit an online application today.
      </p>
      <div style="display: flex; justify-content: center; gap: 16px; flex-wrap: wrap;">
        <a href="admissions.php" class="btn btn-secondary btn-lg">Begin Online Application</a>
        <a href="tel:<?php echo SCHOOL_PHONE_PRIMARY; ?>" class="btn btn-outline-white btn-lg">
          <svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
          Call Admissions: <?php echo SCHOOL_PHONE_PRIMARY; ?>
        </a>
      </div>
    </div>
  </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
