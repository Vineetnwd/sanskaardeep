<?php
$pageTitle = 'Contact Us & Campus Location | Sanskar Deep International School, Isuapur';
$metaDescription = 'Contact Sanskar Deep International School, Isuapur, Saran (Chapra), Bihar. Phone: +91 6204168019. Find driving directions, map, and office timings.';
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/includes/header.php';
?>

<!-- Page Header -->
<div class="page-header">
  <div class="container">
    <div class="page-header-content">
      <h1>Contact Us & Campus Location</h1>
      <div class="breadcrumbs">
        <a href="index.php">Home</a> &bull; <span>Contact</span>
      </div>
    </div>
  </div>
</div>

<!-- Main Contact Section -->
<section class="section">
  <div class="container">
    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px; align-items: start;">
      <!-- Col 1: Contact Information -->
      <div>
        <span class="section-tag">Get in Touch</span>
        <h2 style="font-size: 2.2rem; color: var(--primary); margin-bottom: 16px;">We’re Here to Assist You</h2>
        <p style="color: var(--muted); font-size: 0.95rem; line-height: 1.6; margin-bottom: 25px;">
          Whether you have questions regarding CBSE curriculum, admissions for <?php echo ACADEMIC_SESSION; ?>, fee structure, bus routes, or Mandatory Public Disclosures, our administrative team is at your service.
        </p>

        <!-- Info Cards -->
        <div style="display: flex; flex-direction: column; gap: 20px;">
          <!-- Card 1: Address -->
          <div style="background: var(--light); padding: 20px; border-radius: var(--radius-md); border-left: 4px solid var(--primary); display: flex; gap: 16px;">
            <div style="color: var(--primary); font-size: 1.5rem; flex-shrink: 0;">📍</div>
            <div>
              <h4 style="font-size: 1.1rem; color: var(--primary); margin-bottom: 4px;">School Campus Address</h4>
              <p style="font-size: 0.9rem; color: var(--dark-soft); line-height: 1.5;">
                <strong><?php echo SCHOOL_NAME; ?></strong><br>
                <?php echo SCHOOL_ADDRESS; ?>
              </p>
            </div>
          </div>

          <!-- Card 2: Phone -->
          <div style="background: var(--light); padding: 20px; border-radius: var(--radius-md); border-left: 4px solid var(--secondary); display: flex; gap: 16px;">
            <div style="color: var(--secondary); font-size: 1.5rem; flex-shrink: 0;">📞</div>
            <div>
              <h4 style="font-size: 1.1rem; color: var(--primary); margin-bottom: 4px;">Telephone & Helplines</h4>
              <p style="font-size: 0.9rem; color: var(--dark-soft); line-height: 1.5;">
                <strong>Admission Helpline:</strong> <a href="tel:<?php echo SCHOOL_PHONE_PRIMARY; ?>" style="color: var(--secondary); font-weight: 700;"><?php echo SCHOOL_PHONE_PRIMARY; ?></a><br>
                <strong>Administrative Desk:</strong> <a href="tel:<?php echo SCHOOL_PHONE_SECONDARY; ?>"><?php echo SCHOOL_PHONE_SECONDARY; ?></a>
              </p>
            </div>
          </div>

          <!-- Card 3: Email -->
          <div style="background: var(--light); padding: 20px; border-radius: var(--radius-md); border-left: 4px solid var(--accent-green); display: flex; gap: 16px;">
            <div style="color: var(--accent-green); font-size: 1.5rem; flex-shrink: 0;">✉️</div>
            <div>
              <h4 style="font-size: 1.1rem; color: var(--primary); margin-bottom: 4px;">Official Email Address</h4>
              <p style="font-size: 0.9rem; color: var(--dark-soft); line-height: 1.5;">
                <a href="mailto:<?php echo SCHOOL_EMAIL; ?>" style="color: #2563eb; text-decoration: underline; font-weight: 600;"><?php echo SCHOOL_EMAIL; ?></a><br>
                <span style="font-size: 0.8rem; color: var(--muted);">For official CBSE correspondence & queries</span>
              </p>
            </div>
          </div>

          <!-- Card 4: Visiting Hours -->
          <div style="background: var(--light); padding: 20px; border-radius: var(--radius-md); border-left: 4px solid #8b5cf6; display: flex; gap: 16px;">
            <div style="color: #8b5cf6; font-size: 1.5rem; flex-shrink: 0;">🕒</div>
            <div>
              <h4 style="font-size: 1.1rem; color: var(--primary); margin-bottom: 4px;">Visiting & Administrative Hours</h4>
              <p style="font-size: 0.9rem; color: var(--dark-soft); line-height: 1.5;">
                <strong>Monday to Saturday:</strong> 8:00 AM – 3:00 PM<br>
                <strong>Principal Meeting:</strong> 10:00 AM – 1:00 PM (Prior Appointment)
              </p>
            </div>
          </div>
        </div>
      </div>

      <!-- Col 2: Message Form -->
      <div style="background: var(--white); border-radius: var(--radius-xl); padding: 35px; border: 1px solid var(--border); box-shadow: var(--shadow-xl);">
        <h3 style="font-size: 1.5rem; color: var(--primary); margin-bottom: 8px;">Send Us a Message</h3>
        <p style="font-size: 0.885rem; color: var(--muted); margin-bottom: 24px;">
          Leave your message or query below. Our administrative officer will respond promptly.
        </p>

        <form class="ajax-inquiry-form" method="POST">
          <div class="form-group">
            <label>Your Full Name *</label>
            <input type="text" name="parent_name" class="form-control" placeholder="e.g. Anand Kumar" required>
          </div>

          <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 12px;">
            <div class="form-group">
              <label>Phone / Mobile *</label>
              <input type="tel" name="phone" class="form-control" placeholder="10-digit number" pattern="[0-9]{10}" required>
            </div>
            <div class="form-group">
              <label>Email Address</label>
              <input type="email" name="email" class="form-control" placeholder="name@example.com">
            </div>
          </div>

          <div class="form-group">
            <label>Subject / Nature of Inquiry</label>
            <select name="grade" class="form-control">
              <option value="Admission Inquiry">Admission Inquiry</option>
              <option value="CBSE MPD Verification">CBSE MPD Verification</option>
              <option value="Fee & Transport Inquiry">Fee & Transport Inquiry</option>
              <option value="Career / Teaching Job">Career / Faculty Application</option>
              <option value="General Feedback">General Feedback</option>
            </select>
          </div>

          <div class="form-group">
            <label>Your Message / Query *</label>
            <textarea name="message" class="form-control" rows="4" placeholder="Write your message here..." required></textarea>
          </div>

          <button type="submit" class="btn btn-secondary" style="width: 100%; margin-top: 10px;">
            Send Message Now
          </button>
        </form>
      </div>
    </div>
  </div>
</section>

<!-- Location Map & Directions Section -->
<section class="section section-bg-light" style="padding: 50px 0;">
  <div class="container">
    <div class="section-header">
      <span class="section-tag">Campus Route</span>
      <h2 class="section-title">How to Reach the Campus</h2>
      <p class="section-subtitle">
        Centrally located in Isuapur with seamless road connections across Saran (Chapra) district.
      </p>
    </div>

    <!-- Direction Guidance Strip -->
    <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; margin-bottom: 30px;">
      <div style="background: var(--white); padding: 22px; border-radius: var(--radius-md); border: 1px solid var(--border);">
        <h4 style="color: var(--primary); font-size: 1.05rem; margin-bottom: 6px;">From Chapra Headquarter</h4>
        <p style="font-size: 0.85rem; color: var(--muted); line-height: 1.5;">
          Approx 25 km north via SH-73 / Marhaura – Isuapur route. Regular direct bus and auto services are available.
        </p>
      </div>
      <div style="background: var(--white); padding: 22px; border-radius: var(--radius-md); border: 1px solid var(--border);">
        <h4 style="color: var(--primary); font-size: 1.05rem; margin-bottom: 6px;">From Mashrakh Junction</h4>
        <p style="font-size: 0.85rem; color: var(--muted); line-height: 1.5;">
          Just 10 km south toward Isuapur. 15-minute drive via Mashrakh-Isuapur road.
        </p>
      </div>
      <div style="background: var(--white); padding: 22px; border-radius: var(--radius-md); border: 1px solid var(--border);">
        <h4 style="color: var(--primary); font-size: 1.05rem; margin-bottom: 6px;">From Taraiya</h4>
        <p style="font-size: 0.85rem; color: var(--muted); line-height: 1.5;">
          Approx 8 km west. Connected via Taraiya-Isuapur link road with direct school bus routes.
        </p>
      </div>
    </div>

    <!-- Interactive Google Map Embed -->
    <div style="border-radius: var(--radius-xl); overflow: hidden; box-shadow: var(--shadow-xl); border: 1px solid var(--border); height: 420px; width: 100%;">
      <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14349.563810452382!2d84.8142!3d26.0468!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3992b1b3b24f5a2b%3A0x6b876e5d7fa!2sIsuapur%2C%20Bihar%20841411!5e0!3m2!1sen!2sin!4v1700000000000!5m2!1sen!2sin" 
        width="100%" 
        height="100%" 
        style="border:0;" 
        allowfullscreen="" 
        loading="lazy" 
        referrerpolicy="no-referrer-when-downgrade">
      </iframe>
    </div>
  </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
