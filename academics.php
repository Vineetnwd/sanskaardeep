<?php
$pageTitle = 'Academics & CBSE Streams | Sanskar Deep International School, Isuapur';
$metaDescription = 'Explore CBSE curriculum, Science, Commerce, and Arts streams at +2 level, academic calendar, and pedagogical practices at Sanskar Deep International School.';
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/includes/header.php';
?>

<!-- Page Header -->
<div class="page-header">
  <div class="container">
    <div class="page-header-content">
      <h1>Academic Excellence & Curriculum</h1>
      <div class="breadcrumbs">
        <a href="index.php">Home</a> &bull; <span>Academics</span>
      </div>
    </div>
  </div>
</div>

<!-- Curriculum Overview -->
<section class="section" id="curriculum">
  <div class="container">
    <div class="welcome-grid">
      <div>
        <span class="section-tag">CBSE National Curriculum</span>
        <h2 style="font-size: 2.2rem; color: var(--primary); margin-bottom: 16px;">Holistic Education Aligned with NEP 2020</h2>
        <p class="welcome-lead">
          Sanskar Deep International School follows the Central Board of Secondary Education (CBSE) syllabus, designed and structured by the National Council of Educational Research and Training (NCERT).
        </p>
        <p class="welcome-text">
          Our pedagogy shifts the focus from rote memorization to concept comprehension, experiential inquiry, critical questioning, and problem-solving. Every classroom integrates digital smart board resources, science experiments, computational thinking, and linguistic proficiency in both English and Hindi.
        </p>
        <div style="display: flex; gap: 12px; margin-top: 20px; flex-wrap: wrap;">
          <span class="mpd-meta-chip" style="background: #eff6ff; color: #1e40af; border: 1px solid #bfdbfe;">
            CBSE Affiliation: <?php echo CBSE_AFFILIATION_NO; ?>
          </span>
          <span class="mpd-meta-chip" style="background: #ecfdf5; color: #065f46; border: 1px solid #a7f3d0;">
            Classes: Nursery to XII
          </span>
          <span class="mpd-meta-chip" style="background: #fef3c7; color: #92400e; border: 1px solid #fde68a;">
            Medium: English
          </span>
        </div>
      </div>

      <div class="welcome-image-wrap">
        <img src="assets/img/classroom.jpg" alt="Smart Classrooms at Sanskardeep" class="welcome-img-main">
      </div>
    </div>
  </div>
</section>

<!-- Senior Secondary (+2) Streams -->
<section class="section section-bg-light" id="streams">
  <div class="container">
    <div class="section-header">
      <span class="section-tag">Classes XI & XII (+2)</span>
      <h2 class="section-title">Senior Secondary Stream Offerings</h2>
      <p class="section-subtitle">
        Providing specialized coaching, board exam mastery, and foundation training for competitive examinations like JEE, NEET, CUET, and CLAT.
      </p>
    </div>

    <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 25px;">
      <!-- Stream 1: Science -->
      <div style="background: var(--white); border-radius: var(--radius-lg); border: 1px solid var(--border); overflow: hidden; box-shadow: var(--shadow-md);">
        <div style="background: #1e3a8a; color: #fff; padding: 20px 24px;">
          <span style="font-size: 0.75rem; text-transform: uppercase; background: rgba(255,255,255,0.2); padding: 2px 8px; border-radius: 4px; font-weight: 700;">Stream A</span>
          <h3 style="color: #fff; font-size: 1.35rem; margin-top: 6px;">Science Stream</h3>
          <p style="font-size: 0.85rem; color: #cbd5e1;">Medical & Engineering Specializations</p>
        </div>
        <div style="padding: 24px;">
          <h4 style="font-size: 0.95rem; color: var(--primary); margin-bottom: 8px;">Compulsory Subjects:</h4>
          <ul style="font-size: 0.885rem; color: var(--dark-soft); margin-bottom: 16px;">
            <li style="padding: 4px 0;">&bull; English Core (301)</li>
            <li style="padding: 4px 0;">&bull; Physics (042)</li>
            <li style="padding: 4px 0;">&bull; Chemistry (043)</li>
          </ul>

          <h4 style="font-size: 0.95rem; color: var(--primary); margin-bottom: 8px;">Major Electives:</h4>
          <ul style="font-size: 0.885rem; color: var(--dark-soft); margin-bottom: 20px;">
            <li style="padding: 4px 0;">&bull; Biology (044) - Medical</li>
            <li style="padding: 4px 0;">&bull; Mathematics (041) - Engineering</li>
            <li style="padding: 4px 0;">&bull; Computer Science (083) / Physical Education</li>
          </ul>

          <a href="admissions.php" class="btn btn-outline btn-sm" style="width: 100%;">Apply for Science</a>
        </div>
      </div>

      <!-- Stream 2: Commerce -->
      <div style="background: var(--white); border-radius: var(--radius-lg); border: 1px solid var(--border); overflow: hidden; box-shadow: var(--shadow-md);">
        <div style="background: #b45309; color: #fff; padding: 20px 24px;">
          <span style="font-size: 0.75rem; text-transform: uppercase; background: rgba(255,255,255,0.2); padding: 2px 8px; border-radius: 4px; font-weight: 700;">Stream B</span>
          <h3 style="color: #fff; font-size: 1.35rem; margin-top: 6px;">Commerce Stream</h3>
          <p style="font-size: 0.85rem; color: #fef3c7;">Finance, Management & Entrepreneurship</p>
        </div>
        <div style="padding: 24px;">
          <h4 style="font-size: 0.95rem; color: var(--primary); margin-bottom: 8px;">Core Subjects:</h4>
          <ul style="font-size: 0.885rem; color: var(--dark-soft); margin-bottom: 16px;">
            <li style="padding: 4px 0;">&bull; English Core (301)</li>
            <li style="padding: 4px 0;">&bull; Accountancy (055)</li>
            <li style="padding: 4px 0;">&bull; Business Studies (054)</li>
            <li style="padding: 4px 0;">&bull; Economics (030)</li>
          </ul>

          <h4 style="font-size: 0.95rem; color: var(--primary); margin-bottom: 8px;">Electives:</h4>
          <ul style="font-size: 0.885rem; color: var(--dark-soft); margin-bottom: 20px;">
            <li style="padding: 4px 0;">&bull; Applied Mathematics (241)</li>
            <li style="padding: 4px 0;">&bull; Informatics Practices (065)</li>
            <li style="padding: 4px 0;">&bull; Physical Education (048)</li>
          </ul>

          <a href="admissions.php" class="btn btn-outline btn-sm" style="width: 100%;">Apply for Commerce</a>
        </div>
      </div>

      <!-- Stream 3: Humanities / Arts -->
      <div style="background: var(--white); border-radius: var(--radius-lg); border: 1px solid var(--border); overflow: hidden; box-shadow: var(--shadow-md);">
        <div style="background: #047857; color: #fff; padding: 20px 24px;">
          <span style="font-size: 0.75rem; text-transform: uppercase; background: rgba(255,255,255,0.2); padding: 2px 8px; border-radius: 4px; font-weight: 700;">Stream C</span>
          <h3 style="color: #fff; font-size: 1.35rem; margin-top: 6px;">Humanities / Arts</h3>
          <p style="font-size: 0.85rem; color: #d1fae5;">Civil Services, Law & Social Sciences</p>
        </div>
        <div style="padding: 24px;">
          <h4 style="font-size: 0.95rem; color: var(--primary); margin-bottom: 8px;">Core Subjects:</h4>
          <ul style="font-size: 0.885rem; color: var(--dark-soft); margin-bottom: 16px;">
            <li style="padding: 4px 0;">&bull; English Core (301)</li>
            <li style="padding: 4px 0;">&bull; History (027)</li>
            <li style="padding: 4px 0;">&bull; Political Science (028)</li>
            <li style="padding: 4px 0;">&bull; Geography (029)</li>
          </ul>

          <h4 style="font-size: 0.95rem; color: var(--primary); margin-bottom: 8px;">Electives:</h4>
          <ul style="font-size: 0.885rem; color: var(--dark-soft); margin-bottom: 20px;">
            <li style="padding: 4px 0;">&bull; Economics (030)</li>
            <li style="padding: 4px 0;">&bull; Hindi Core (302)</li>
            <li style="padding: 4px 0;">&bull; Physical Education (048)</li>
          </ul>

          <a href="admissions.php" class="btn btn-outline btn-sm" style="width: 100%;">Apply for Arts</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Assessment & Evaluation Scheme -->
<section class="section" id="assessment">
  <div class="container">
    <div class="section-header">
      <span class="section-tag">Continuous & Comprehensive</span>
      <h2 class="section-title">Assessment & Grading Scheme</h2>
      <p class="section-subtitle">
        Following CBSE continuous evaluation standards to assess scholastic understanding and co-scholastic growth.
      </p>
    </div>

    <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px;">
      <div style="background: var(--light); padding: 24px; border-radius: var(--radius-md); border-left: 4px solid var(--primary);">
        <h4 style="font-size: 1.1rem; color: var(--primary); margin-bottom: 6px;">Periodic Assessment I</h4>
        <p style="font-size: 0.85rem; color: var(--muted); margin-bottom: 10px;">Held in July/August to assess unit 1 concepts, note maintenance, and subject enrichment activities.</p>
        <span style="font-size: 0.75rem; font-weight: 700; color: var(--dark);">Weightage: 10%</span>
      </div>

      <div style="background: var(--light); padding: 24px; border-radius: var(--radius-md); border-left: 4px solid var(--secondary);">
        <h4 style="font-size: 1.1rem; color: var(--primary); margin-bottom: 6px;">Half Yearly Exam</h4>
        <p style="font-size: 0.85rem; color: var(--muted); margin-bottom: 10px;">Held in September/October assessing complete Term-1 syllabus along with lab practical demonstrations.</p>
        <span style="font-size: 0.75rem; font-weight: 700; color: var(--dark);">Weightage: 30%</span>
      </div>

      <div style="background: var(--light); padding: 24px; border-radius: var(--radius-md); border-left: 4px solid var(--accent-green);">
        <h4 style="font-size: 1.1rem; color: var(--primary); margin-bottom: 6px;">Periodic Assessment II</h4>
        <p style="font-size: 0.85rem; color: var(--muted); margin-bottom: 10px;">Held in December/January as Pre-Board preparation for board classes and syllabus revision for lower wings.</p>
        <span style="font-size: 0.75rem; font-weight: 700; color: var(--dark);">Weightage: 10%</span>
      </div>

      <div style="background: var(--light); padding: 24px; border-radius: var(--radius-md); border-left: 4px solid #8b5cf6;">
        <h4 style="font-size: 1.1rem; color: var(--primary); margin-bottom: 6px;">Annual Examination</h4>
        <p style="font-size: 0.85rem; color: var(--muted); margin-bottom: 10px;">Comprehensive year-end evaluation for promotion to next standard, plus CBSE AISSE/AISSCE board exams.</p>
        <span style="font-size: 0.75rem; font-weight: 700; color: var(--dark);">Weightage: 50%</span>
      </div>
    </div>
  </div>
</section>

<!-- Academic Calendar Highlights -->
<section class="section section-bg-light" id="calendar">
  <div class="container">
    <div style="background: var(--white); border-radius: var(--radius-xl); padding: 35px; border: 1px solid var(--border); box-shadow: var(--shadow-md);">
      <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 25px; flex-wrap: wrap; gap: 15px;">
        <div>
          <span class="section-tag">Session <?php echo ACADEMIC_SESSION; ?></span>
          <h3 style="font-size: 1.7rem; color: var(--primary);">Academic Calendar Overview</h3>
          <p style="font-size: 0.9rem; color: var(--muted);">Minimum 220 instructional days guaranteed as per CBSE affiliation norms.</p>
        </div>
        <button class="doc-view-btn" data-doc="academic_calendar">
          View Complete Official Calendar
        </button>
      </div>

      <div class="table-responsive">
        <table class="mpd-table">
          <thead>
            <tr>
              <th>Month / Period</th>
              <th>Key Academic Focus & Assessments</th>
              <th>Major Events & Observances</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><strong>April</strong></td>
              <td>Commencement of Academic Session <?php echo ACADEMIC_SESSION; ?>, orientation week</td>
              <td>Earth Day celebrations, House formation</td>
            </tr>
            <tr>
              <td><strong>May - June</strong></td>
              <td>Completion of Unit-1 chapters & Summer break home projects</td>
              <td>World Environment Day & International Yoga Day</td>
            </tr>
            <tr>
              <td><strong>July - August</strong></td>
              <td>Periodic Assessment - 1 (PA-1) examinations & Parent-Teacher Meeting</td>
              <td>Independence Day grand celebrations, Science Fair</td>
            </tr>
            <tr>
              <td><strong>September - October</strong></td>
              <td>Term-1 Revision & Half-Yearly Examinations</td>
              <td>Teachers Day, Hindi Diwas, Gandhi Jayanti</td>
            </tr>
            <tr>
              <td><strong>November - December</strong></td>
              <td>Term-2 Curriculum & Periodic Assessment - 2 (PA-2)</td>
              <td>Annual Sports Meet, Children's Day</td>
            </tr>
            <tr>
              <td><strong>January - February</strong></td>
              <td>Pre-Board Examinations for Classes X & XII, Revision Tests</td>
              <td>Republic Day, Annual Cultural Day, Saraswati Puja</td>
            </tr>
            <tr>
              <td><strong>March</strong></td>
              <td>Annual Examinations & CBSE Board Examinations</td>
              <td>Declaration of Annual Results & Book Distribution</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
