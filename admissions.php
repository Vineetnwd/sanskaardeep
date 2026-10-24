<?php
$pageTitle = 'Admissions 2026-27 | Sanskar Deep International School, Isuapur';
$metaDescription = 'Admissions open for Academic Session 2026-27 at Sanskar Deep International School, Isuapur, Saran. Review admission guidelines, fee structure, and apply online.';
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/includes/header.php';
?>

<!-- Page Header -->
<div class="page-header">
  <div class="container">
    <div class="page-header-content">
      <h1>Admissions Open (<?php echo ACADEMIC_SESSION; ?>)</h1>
      <div class="breadcrumbs">
        <a href="index.php">Home</a> &bull; <span>Admissions</span>
      </div>
    </div>
  </div>
</div>

<!-- Admission Intro Banner -->
<section class="section" style="padding: 40px 0 20px;">
  <div class="container">
    <div style="background: #eff6ff; border: 1px solid #bfdbfe; border-radius: var(--radius-lg); padding: 25px 30px; display: flex; align-items: center; justify-content: space-between; gap: 20px; flex-wrap: wrap;">
      <div>
        <h3 style="color: var(--primary); font-size: 1.35rem; margin-bottom: 4px;">Join the Sanskardeep Family for <?php echo ACADEMIC_SESSION; ?></h3>
        <p style="color: #475569; font-size: 0.925rem;">
          Applications invited from Playgroup to Class XII. Limited seats per section to maintain our optimal 1:1.5 teacher-section ratio.
        </p>
      </div>
      <div style="display: flex; gap: 12px;">
        <a href="#enquiry" class="btn btn-secondary">Fill Online Form</a>
        <a href="tel:<?php echo SCHOOL_PHONE_PRIMARY; ?>" class="btn btn-primary">Call Helpline</a>
      </div>
    </div>
  </div>
</section>

<!-- Admission Procedure -->
<section class="section" id="procedure">
  <div class="container">
    <div class="section-header">
      <span class="section-tag">Step-by-Step Guide</span>
      <h2 class="section-title">The Admission Procedure</h2>
      <p class="section-subtitle">
        We ensure a transparent, fair, and welcoming admission process for parents and young scholars.
      </p>
    </div>

    <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px;">
      <div style="background: var(--white); padding: 26px; border-radius: var(--radius-lg); border: 1px solid var(--border); box-shadow: var(--shadow-sm); position: relative;">
        <div style="font-size: 2.2rem; font-weight: 800; color: var(--secondary-light); font-family: var(--font-heading); margin-bottom: 10px;">01</div>
        <h3 style="font-size: 1.15rem; color: var(--primary); margin-bottom: 8px;">Registration</h3>
        <p style="font-size: 0.885rem; color: var(--muted); line-height: 1.55;">
          Obtain the school prospectus and registration form from the administrative desk or fill out the online form below.
        </p>
      </div>

      <div style="background: var(--white); padding: 26px; border-radius: var(--radius-lg); border: 1px solid var(--border); box-shadow: var(--shadow-sm); position: relative;">
        <div style="font-size: 2.2rem; font-weight: 800; color: var(--secondary-light); font-family: var(--font-heading); margin-bottom: 10px;">02</div>
        <h3 style="font-size: 1.15rem; color: var(--primary); margin-bottom: 8px;">Interaction / Test</h3>
        <p style="font-size: 0.885rem; color: var(--muted); line-height: 1.55;">
          Informal friendly interaction for Pre-Primary; baseline diagnostic assessment in English & Math for Classes 1 and above.
        </p>
      </div>

      <div style="background: var(--white); padding: 26px; border-radius: var(--radius-lg); border: 1px solid var(--border); box-shadow: var(--shadow-sm); position: relative;">
        <div style="font-size: 2.2rem; font-weight: 800; color: var(--secondary-light); font-family: var(--font-heading); margin-bottom: 10px;">03</div>
        <h3 style="font-size: 1.15rem; color: var(--primary); margin-bottom: 8px;">Document Check</h3>
        <p style="font-size: 0.885rem; color: var(--muted); line-height: 1.55;">
          Submission of original Transfer Certificate (TC), copy of birth certificate, marksheet, and passport size photographs.
        </p>
      </div>

      <div style="background: var(--white); padding: 26px; border-radius: var(--radius-lg); border: 1px solid var(--border); box-shadow: var(--shadow-sm); position: relative;">
        <div style="font-size: 2.2rem; font-weight: 800; color: var(--secondary-light); font-family: var(--font-heading); margin-bottom: 10px;">04</div>
        <h3 style="font-size: 1.15rem; color: var(--primary); margin-bottom: 8px;">Fee & Enrollment</h3>
        <p style="font-size: 0.885rem; color: var(--muted); line-height: 1.55;">
          Deposit of admission and composite tuition fees to confirm admission, followed by issue of student ID, uniform, and books.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- Fee Structure & Eligibility Section -->
<section class="section section-bg-light" id="fees">
  <div class="container">
    <div class="section-header">
      <span class="section-tag">Mandatory Disclosure Compliance</span>
      <h2 class="section-title">Approved Fee Schedule (<?php echo ACADEMIC_SESSION; ?>)</h2>
      <p class="section-subtitle">
        Transparent, fair fee approved by the School Management Committee with no capitation or donation charges.
      </p>
    </div>

    <div style="background: var(--white); border-radius: var(--radius-xl); border: 1px solid var(--border); overflow: hidden; box-shadow: var(--shadow-md); margin-bottom: 40px;">
      <div class="table-responsive">
        <table class="mpd-table">
          <thead>
            <tr>
              <th>Class / Standard</th>
              <th>Admission Fee (One Time)</th>
              <th>Composite Monthly Tuition Fee</th>
              <th>Examination & Activity Fee (Annual)</th>
              <th>Lab & Computer Charge</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><strong>Pre-Primary (Nursery, LKG, UKG)</strong></td>
              <td>₹ 2,500</td>
              <td>₹ 950 / month</td>
              <td>₹ 1,000 / year</td>
              <td>Included</td>
            </tr>
            <tr>
              <td><strong>Primary (Classes I to V)</strong></td>
              <td>₹ 3,000</td>
              <td>₹ 1,200 / month</td>
              <td>₹ 1,200 / year</td>
              <td>Included</td>
            </tr>
            <tr>
              <td><strong>Middle (Classes VI to VIII)</strong></td>
              <td>₹ 3,500</td>
              <td>₹ 1,450 / month</td>
              <td>₹ 1,400 / year</td>
              <td>₹ 300 / year</td>
            </tr>
            <tr>
              <td><strong>Secondary (Classes IX & X)</strong></td>
              <td>₹ 4,000</td>
              <td>₹ 1,750 / month</td>
              <td>₹ 1,600 / year</td>
              <td>₹ 500 / year</td>
            </tr>
            <tr>
              <td><strong>Senior Secondary (+2 Science)</strong></td>
              <td>₹ 5,000</td>
              <td>₹ 2,200 / month</td>
              <td>₹ 2,000 / year</td>
              <td>₹ 800 / year</td>
            </tr>
            <tr>
              <td><strong>Senior Secondary (+2 Commerce / Arts)</strong></td>
              <td>₹ 4,500</td>
              <td>₹ 1,950 / month</td>
              <td>₹ 1,800 / year</td>
              <td>₹ 400 / year</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div style="padding: 16px 24px; background: #f8fafc; border-top: 1px solid var(--border); font-size: 0.85rem; color: var(--muted); display: flex; justify-content: space-between; flex-wrap: wrap; gap: 10px;">
        <span>* Optional transport charges apply according to distance from school campus (Isuapur, Mashrakh, Taraiya, Marhaura, etc.).</span>
        <span style="font-weight: 600; color: var(--primary);">Concessions available for siblings and meritorious students.</span>
      </div>
    </div>

    <!-- Age Eligibility Matrix -->
    <div style="background: var(--white); border-radius: var(--radius-xl); border: 1px solid var(--border); padding: 30px; box-shadow: var(--shadow-sm);" id="eligibility">
      <h3 style="font-size: 1.3rem; color: var(--primary); margin-bottom: 15px;">Age Eligibility Criteria (As of 31st March <?php echo date('Y'); ?>)</h3>
      <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 16px; text-align: center;">
        <div style="background: #f8fafc; padding: 16px; border-radius: var(--radius-md); border: 1px solid var(--border);">
          <div style="font-weight: 700; color: var(--primary); font-size: 1rem;">Nursery</div>
          <div style="color: var(--secondary); font-weight: 600; font-size: 0.9rem; margin-top: 4px;">3+ Years</div>
        </div>
        <div style="background: #f8fafc; padding: 16px; border-radius: var(--radius-md); border: 1px solid var(--border);">
          <div style="font-weight: 700; color: var(--primary); font-size: 1rem;">LKG / UKG</div>
          <div style="color: var(--secondary); font-weight: 600; font-size: 0.9rem; margin-top: 4px;">4+ to 5+ Years</div>
        </div>
        <div style="background: #f8fafc; padding: 16px; border-radius: var(--radius-md); border: 1px solid var(--border);">
          <div style="font-weight: 700; color: var(--primary); font-size: 1rem;">Class I</div>
          <div style="color: var(--secondary); font-weight: 600; font-size: 0.9rem; margin-top: 4px;">6+ Years (NEP 2020)</div>
        </div>
        <div style="background: #f8fafc; padding: 16px; border-radius: var(--radius-md); border: 1px solid var(--border);">
          <div style="font-weight: 700; color: var(--primary); font-size: 1rem;">Class XI (+2)</div>
          <div style="color: var(--secondary); font-weight: 600; font-size: 0.9rem; margin-top: 4px;">Passed Class X Board</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Online Application / Enquiry Form -->
<section class="section" id="enquiry">
  <div class="container">
    <div style="max-width: 800px; margin: 0 auto; background: var(--white); border-radius: var(--radius-xl); padding: 40px; border: 1px solid var(--border); box-shadow: var(--shadow-xl);">
      <div style="text-align: center; margin-bottom: 30px;">
        <span class="section-tag">Direct Admissions Portal</span>
        <h2 style="font-size: 2rem; color: var(--primary); margin-bottom: 8px;">Online Admission Application Form</h2>
        <p style="font-size: 0.925rem; color: var(--muted);">
          Please fill out the authentic details. Our admissions counselor will contact you within 24 working hours.
        </p>
      </div>

      <form class="ajax-inquiry-form" method="POST">
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px;">
          <div class="form-group">
            <label>Parent / Guardian Full Name *</label>
            <input type="text" name="parent_name" class="form-control" placeholder="e.g. Ramesh Chandra Sharma" required>
          </div>
          <div class="form-group">
            <label>Student Full Name *</label>
            <input type="text" name="student_name" class="form-control" placeholder="e.g. Aditya Sharma" required>
          </div>
        </div>

        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px;">
          <div class="form-group">
            <label>Contact Mobile Number *</label>
            <input type="tel" name="phone" class="form-control" placeholder="10-digit number" pattern="[0-9]{10}" required>
          </div>
          <div class="form-group">
            <label>Email Address</label>
            <input type="email" name="email" class="form-control" placeholder="parent@example.com">
          </div>
        </div>

        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px;">
          <div class="form-group">
            <label>Grade Seeking Admission Into *</label>
            <select name="grade" class="form-control" required>
              <option value="">Select Grade</option>
              <option value="Playgroup / Nursery">Playgroup / Nursery</option>
              <option value="LKG / UKG">LKG / UKG</option>
              <option value="Class I to V (Primary)">Class I to V (Primary)</option>
              <option value="Class VI to VIII (Middle)">Class VI to VIII (Middle)</option>
              <option value="Class IX to X (Secondary)">Class IX to X (Secondary)</option>
              <option value="Class XI Science (PCM/PCB)">Class XI Science (PCM/PCB)</option>
              <option value="Class XI Commerce">Class XI Commerce</option>
              <option value="Class XI Arts / Humanities">Class XI Arts / Humanities</option>
            </select>
          </div>
          <div class="form-group">
            <label>School Bus Transport Required?</label>
            <select name="transport" class="form-control">
              <option value="No">No, Self-Arranged Commute</option>
              <option value="Yes - Isuapur Area">Yes - Isuapur Route</option>
              <option value="Yes - Mashrakh Route">Yes - Mashrakh Route</option>
              <option value="Yes - Taraiya Route">Yes - Taraiya Route</option>
              <option value="Yes - Other Route">Yes - Other Saran Route</option>
            </select>
          </div>
        </div>

        <div class="form-group">
          <label>Previous School Name & City</label>
          <input type="text" name="prev_school" class="form-control" placeholder="Name of school previously attended">
        </div>

        <div class="form-group">
          <label>Any Additional Information / Queries</label>
          <textarea name="message" class="form-control" rows="3" placeholder="Tell us if you need hostel, special academic support, or fee guidance..."></textarea>
        </div>

        <button type="submit" class="btn btn-secondary btn-lg" style="width: 100%; margin-top: 15px;">
          Submit Admission Application
        </button>
      </form>
    </div>
  </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
