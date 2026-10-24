<?php
require_once __DIR__ . '/../config.php';
?>
  <!-- Footer -->
  <footer class="site-footer">
    <div class="container">
      <div class="footer-grid">
        <!-- Col 1: About School -->
        <div class="footer-about">
          <div class="footer-brand">
            <img src="assets/img/logo.webp" alt="<?php echo SCHOOL_NAME; ?> Crest">
            <div>
              <h3><?php echo SCHOOL_NAME; ?></h3>
              <div style="font-size: 0.78rem; color: #fbbf24; font-weight: 600;"><?php echo SCHOOL_MOTTO; ?> &bull; <?php echo SCHOOL_MOTTO_TRANS; ?></div>
            </div>
          </div>
          <p>
            An exemplary CBSE affiliated Senior Secondary co-educational English-medium school committed to academic distinction, high moral discipline, and 360-degree personality grooming in Saran, Bihar.
          </p>
          <div style="font-size: 0.825rem; color: #cbd5e1; line-height: 1.5; padding: 10px; background: rgba(255,255,255,0.05); border-radius: 8px;">
            <div><strong>Affiliation No:</strong> <?php echo CBSE_AFFILIATION_NO; ?></div>
            <div><strong>School Code:</strong> <?php echo CBSE_SCHOOL_CODE; ?></div>
            <div><strong>Managed by:</strong> <?php echo TRUST_NAME; ?></div>
          </div>
        </div>

        <!-- Col 2: Quick Links -->
        <div>
          <h4 class="footer-heading">Quick Links</h4>
          <ul class="footer-links">
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About School</a></li>
            <li><a href="academics.php">Curriculum & Streams</a></li>
            <li><a href="admissions.php">Admissions 2026-27</a></li>
            <li><a href="facilities.php">Campus Facilities</a></li>
            <li><a href="gallery.php">Photo Gallery</a></li>
            <li><a href="contact.php">Contact & Location</a></li>
          </ul>
        </div>

        <!-- Col 3: CBSE MPD Links -->
        <div>
          <h4 class="footer-heading">CBSE Disclosures</h4>
          <ul class="footer-links">
            <li><a href="mpd.php" style="color: #fbbf24; font-weight: 600;">★ Appendix IX (Full MPD)</a></li>
            <li><a href="mpd.php#section-b">Affiliation Grant Letter</a></li>
            <li><a href="mpd.php#section-b">Trust Registration Deed</a></li>
            <li><a href="mpd.php#section-b">Fire & Building Safety</a></li>
            <li><a href="mpd.php#section-c">Fee Structure 2026-27</a></li>
            <li><a href="mpd.php#section-c">Academic Calendar</a></li>
            <li><a href="mpd.php#section-c">SMC & PTA Committee</a></li>
            <li><a href="mpd.php#section-e">Campus Infrastructure</a></li>
          </ul>
        </div>

        <!-- Col 4: Contact & Social -->
        <div>
          <h4 class="footer-heading">Contact & Helpdesk</h4>
          <div class="footer-contact-item">
            <svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
            <span><?php echo SCHOOL_ADDRESS; ?></span>
          </div>
          <div class="footer-contact-item">
            <svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
            <div>
              <a href="tel:<?php echo SCHOOL_PHONE_PRIMARY; ?>" style="color: #fff; font-weight: 600;"><?php echo SCHOOL_PHONE_PRIMARY; ?></a><br>
              <a href="tel:<?php echo SCHOOL_PHONE_SECONDARY; ?>"><?php echo SCHOOL_PHONE_SECONDARY; ?></a>
            </div>
          </div>
          <div class="footer-contact-item">
            <svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
            <a href="mailto:<?php echo SCHOOL_EMAIL; ?>"><?php echo SCHOOL_EMAIL; ?></a>
          </div>

          <div style="margin-top: 20px;">
            <a href="<?php echo FACEBOOK_URL; ?>" target="_blank" rel="noopener noreferrer" class="btn btn-secondary btn-sm" style="display: inline-flex; gap: 8px;">
              <svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
              Follow on Facebook
            </a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bottom Copyright -->
    <div class="footer-bottom">
      <div class="container">
        <div class="footer-bottom-inner">
          <div>
            &copy; <?php echo date('Y'); ?> <strong><?php echo SCHOOL_NAME; ?></strong>. All Rights Reserved.
          </div>
          <div style="color: #64748b;">
            Affiliated to Central Board of Secondary Education (CBSE), New Delhi &bull; Official Portal: <a href="https://sanskardeep.co.in" style="color: #cbd5e1;">sanskardeep.co.in</a>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <!-- Floating Quick Actions -->
  <div class="floating-widget">
    <a href="mpd.php" class="float-btn float-btn-mpd" title="CBSE Mandatory Public Disclosure">
      CBSE MPD
    </a>
    <a href="https://wa.me/916204168019?text=Hello%20Sanskar%20Deep%20International%20School%2C%20I%20would%20like%20to%20enquire%20about%20admissions." target="_blank" rel="noopener noreferrer" class="float-btn float-btn-phone" title="Chat on WhatsApp / Call Admissions">
      <svg width="24" height="24" fill="currentColor" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
    </a>
    <button class="float-btn float-btn-top" id="backToTopBtn" aria-label="Back to Top">
      <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path></svg>
    </button>
  </div>

  <!-- Document Preview Modal (for CBSE MPD Certificates) -->
  <div class="modal-overlay" id="docModalOverlay">
    <div class="modal-box" id="docModal">
      <div class="modal-header">
        <h3 id="docModalTitle">CBSE Compliance Document</h3>
        <button class="modal-close-btn" id="docModalClose">&times;</button>
      </div>
      <div class="modal-body" id="docModalContent">
        <!-- Content dynamically injected via JS -->
      </div>
    </div>
  </div>

  <!-- Admission Enquiry Modal -->
  <div class="modal-overlay" id="enquiryModalOverlay">
    <div class="modal-box" id="enquiryModal" style="max-width: 580px;">
      <div class="modal-header">
        <h3>Admission Enquiry (<?php echo ACADEMIC_SESSION; ?>)</h3>
        <button class="modal-close-btn" id="enquiryModalClose">&times;</button>
      </div>
      <div class="modal-body">
        <p style="font-size: 0.885rem; color: #64748b; margin-bottom: 20px;">
          Fill out the details below. Our admissions counselor will connect with you with syllabus, fee details, and entrance guidelines.
        </p>
        <form class="ajax-inquiry-form" method="POST">
          <div class="form-group">
            <label>Parent / Guardian Name *</label>
            <input type="text" name="parent_name" class="form-control" placeholder="e.g. Anand Kumar" required>
          </div>
          <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 12px;">
            <div class="form-group">
              <label>Student's Name</label>
              <input type="text" name="student_name" class="form-control" placeholder="e.g. Aryan Kumar">
            </div>
            <div class="form-group">
              <label>Seeking Admission In *</label>
              <select name="grade" class="form-control" required>
                <option value="">Select Grade</option>
                <option value="Playgroup / Nursery">Playgroup / Nursery</option>
                <option value="LKG / UKG">LKG / UKG</option>
                <option value="Class 1 - 5">Class 1 to 5 (Primary)</option>
                <option value="Class 6 - 8">Class 6 to 8 (Middle)</option>
                <option value="Class 9 - 10">Class 9 to 10 (Secondary)</option>
                <option value="Class 11 Science">Class 11 (Science Stream)</option>
                <option value="Class 11 Commerce">Class 11 (Commerce Stream)</option>
                <option value="Class 11 Arts">Class 11 (Arts / Humanities)</option>
              </select>
            </div>
          </div>
          <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 12px;">
            <div class="form-group">
              <label>Mobile Number *</label>
              <input type="tel" name="phone" class="form-control" placeholder="10-digit number" pattern="[0-9]{10}" required>
            </div>
            <div class="form-group">
              <label>Email Address</label>
              <input type="email" name="email" class="form-control" placeholder="parent@example.com">
            </div>
          </div>
          <div class="form-group">
            <label>Any Specific Questions / Comments</label>
            <textarea name="message" class="form-control" rows="3" placeholder="Tell us about previous schooling, transport requirement, etc."></textarea>
          </div>
          <button type="submit" class="btn btn-secondary" style="width: 100%; margin-top: 10px;">
            Submit Admission Enquiry
          </button>
        </form>
      </div>
    </div>
  </div>

  <!-- Main JavaScript File -->
  <script src="assets/js/main.js"></script>
</body>
</html>
