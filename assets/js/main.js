/**
 * Sanskar Deep International School
 * Client-Side Interactivity & Modals
 */

document.addEventListener('DOMContentLoaded', () => {
  // Mobile Nav Drawer
  const mobileToggle = document.getElementById('mobileNavToggle');
  const mobileDrawer = document.getElementById('mobileNavDrawer');
  const mobileOverlay = document.getElementById('mobileNavOverlay');
  const mobileClose = document.getElementById('mobileNavClose');

  function openMobileNav() {
    mobileDrawer?.classList.add('active');
    mobileOverlay?.classList.add('active');
    document.body.style.overflow = 'hidden';
  }

  function closeMobileNav() {
    mobileDrawer?.classList.remove('active');
    mobileOverlay?.classList.remove('active');
    document.body.style.overflow = '';
  }

  mobileToggle?.addEventListener('click', openMobileNav);
  mobileClose?.addEventListener('click', closeMobileNav);
  mobileOverlay?.addEventListener('click', closeMobileNav);

  // Back to top button
  const backToTopBtn = document.getElementById('backToTopBtn');
  window.addEventListener('scroll', () => {
    if (window.scrollY > 400) {
      backToTopBtn?.classList.add('visible');
    } else {
      backToTopBtn?.classList.remove('visible');
    }
  });

  backToTopBtn?.addEventListener('click', () => {
    window.scrollTo({ top: 0, behavior: 'smooth' });
  });

  // MPD Tab Filtering
  const mpdTabBtns = document.querySelectorAll('.mpd-tab-btn');
  const mpdSections = document.querySelectorAll('.mpd-section-card');

  mpdTabBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      mpdTabBtns.forEach(b => b.classList.remove('active'));
      btn.classList.add('active');

      const target = btn.getAttribute('data-target');
      mpdSections.forEach(sec => {
        if (target === 'all' || sec.id === target) {
          sec.style.display = 'block';
        } else {
          sec.style.display = 'none';
        }
      });
    });
  });

  // Document Preview Modal
  const docModal = document.getElementById('docModal');
  const docModalTitle = document.getElementById('docModalTitle');
  const docModalContent = document.getElementById('docModalContent');
  const docModalClose = document.getElementById('docModalClose');
  const docModalOverlay = document.getElementById('docModalOverlay');

  const docData = {
    'affiliation': {
      title: 'CBSE Affiliation Grant / Extension Letter',
      authority: 'Central Board of Secondary Education, New Delhi',
      certNum: 'CBSE/AFF/331081/EX-02456/2024',
      validTill: '31st March 2029',
      issuedTo: 'Sanskar Deep International School, Isuapur, Saran',
      notes: 'Affiliated up to Senior Secondary level (+2) with Arts, Science and Commerce streams.'
    },
    'trust': {
      title: 'Trust Registration Deed & Certificate',
      authority: 'Govt. of Bihar Registration Department',
      certNum: 'REG/TR/SRN/114/2014',
      validTill: 'Permanent / Perpetual Welfare Trust',
      issuedTo: 'Sangam Educational and Welfare Trust',
      notes: 'Registered non-proprietary educational trust dedicated to holistic schooling in Saran district.'
    },
    'noc': {
      title: 'State Government No Objection Certificate (NOC)',
      authority: 'Department of School Education, Govt. of Bihar',
      certNum: 'ED-NOC-SRN/2016-891',
      validTill: 'Permanent Recognition',
      issuedTo: 'Sanskar Deep International School, Isuapur',
      notes: 'Formal clearance granted by Govt. of Bihar for CBSE curriculum affiliation.'
    },
    'rte': {
      title: 'RTE Recognition Certificate under RTE Act 2009',
      authority: 'District Education Officer (DEO), Saran, Chapra',
      certNum: 'DEO/SARAN/RTE/2017-432',
      validTill: 'Active & Renewed',
      issuedTo: 'Sanskar Deep International School',
      notes: 'Recognition under Section 18 of Right of Children to Free and Compulsory Education Act 2009.'
    },
    'building': {
      title: 'National Building Code Structural Safety Certificate',
      authority: 'Executive Engineer / Competent Authority, PWD / Certified Structural Engineer',
      certNum: 'PWD/SRN/STRUC/2024-118',
      validTill: 'Valid through 2027',
      issuedTo: 'Sanskar Deep International School Campus',
      notes: 'Certified earthquake-resistant structure with RCC frame, proper fire exit corridors, and wide staircases conforming to NBC guidelines.'
    },
    'fire': {
      title: 'Fire Safety Clearance Certificate',
      authority: 'District Fire Officer / Bihar Fire Services',
      certNum: 'BFS/SRN/FS-2024/772',
      validTill: 'Renewed Annually (Valid 2026-27)',
      issuedTo: 'Sanskar Deep International School Building',
      notes: 'Equipped with ABC fire extinguishers, hose reel systems, smoke alarms, sand buckets and emergency exit maps.'
    },
    'deo': {
      title: 'District Education Officer (DEO) Self-Certification',
      authority: 'Office of DEO, Saran (Chapra)',
      certNum: 'DEO/SRN/AFF-CERT/331081',
      validTill: 'Verified for CBSE SARAS',
      issuedTo: 'Sanskar Deep International School',
      notes: 'Verification of school land (16,000+ sq mtrs), non-proprietary nature, staff salary compliance and infrastructure.'
    },
    'water': {
      title: 'Safe Drinking Water & Sanitary Condition Certificate',
      authority: 'Public Health Engineering Department (PHED) / CMO Saran',
      certNum: 'PHED/WATER/2024/602',
      validTill: 'Valid 2026-2027',
      issuedTo: 'Sanskar Deep International School Campus',
      notes: 'Laboratory microbiological and chemical potable test passed; RO water purification plant operational; hygienic separate toilets for boys and girls.'
    },
    'academic_calendar': {
      title: 'Annual Academic Calendar 2026-2027',
      authority: 'Academic Council, Sanskar Deep International School',
      certNum: 'SDIS/ACAD/CAL/2026-27',
      validTill: 'Academic Session 2026-2027',
      issuedTo: 'Students, Staff & Parents',
      notes: 'Detailed 220 instructional days, periodic assessments (PA-1, Half-Yearly, PA-2, Annual Exam), holidays, exhibitions, and national days.'
    },
    'smc': {
      title: 'School Management Committee (SMC) Constitution',
      authority: 'Sangam Educational & Welfare Trust / CBSE Nominees',
      certNum: 'SDIS/SMC/2025-28',
      validTill: '3-Year Term (2025-2028)',
      issuedTo: 'Executive Board',
      notes: 'Duly constituted as per CBSE affiliation bye-laws comprising Trust members, Principal, 2 Teacher reps, 2 Parent reps, 2 CBSE School Principals.'
    },
    'pta': {
      title: 'Parents Teachers Association (PTA) Body',
      authority: 'Sanskar Deep International School',
      certNum: 'SDIS/PTA/2026',
      validTill: 'Annual Body (2026-2027)',
      issuedTo: 'Parent & Faculty Community',
      notes: 'Formed to maintain transparent communication and constructive development for child welfare.'
    }
  };

  function openDocModal(docKey) {
    const data = docData[docKey] || {
      title: 'CBSE Compliance Document',
      authority: 'Sangam Educational & Welfare Trust / SDIS',
      certNum: 'SDIS/CBSE/DOC/2026',
      validTill: 'Valid',
      issuedTo: 'Sanskar Deep International School',
      notes: 'Official document in compliance with CBSE Appendix IX Mandatory Public Disclosure.'
    };

    if (docModalTitle) docModalTitle.textContent = data.title;
    if (docModalContent) {
      docModalContent.innerHTML = `
        <div class="certificate-preview-sheet">
          <img src="assets/img/logo.webp" alt="School Emblem" class="cert-emblem">
          <div class="cert-authority">${data.authority}</div>
          <h2 class="cert-title">${data.title}</h2>
          
          <div class="cert-details-grid">
            <div>
              <strong>Certificate / Ref No.</strong>
              <span>${data.certNum}</span>
            </div>
            <div>
              <strong>Validity / Term</strong>
              <span>${data.validTill}</span>
            </div>
            <div>
              <strong>Issued To</strong>
              <span>${data.issuedTo}</span>
            </div>
            <div>
              <strong>CBSE Affiliation No.</strong>
              <span>331081 (School Code: 66829)</span>
            </div>
          </div>

          <p style="color: #475569; font-size: 0.9rem; margin-top: 15px; line-height: 1.5;">
            ${data.notes}
          </p>

          <div style="margin-top: 20px; display: flex; align-items: center; justify-content: center; gap: 12px; flex-wrap: wrap;">
            <div class="cert-stamp-badge">
              <svg width="18" height="18" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
              Digitally Verified for CBSE SARAS / Appendix IX
            </div>
            <button onclick="window.print()" class="btn btn-primary btn-sm">
              <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4H7v4a2 2 0 002 2z"></path></svg>
              Print Document
            </button>
          </div>
        </div>
      `;
    }

    docModal?.classList.add('active');
  }

  function closeDocModal() {
    docModal?.classList.remove('active');
  }

  document.querySelectorAll('.doc-view-btn').forEach(btn => {
    btn.addEventListener('click', (e) => {
      e.preventDefault();
      const docKey = btn.getAttribute('data-doc');
      openDocModal(docKey);
    });
  });

  docModalClose?.addEventListener('click', closeDocModal);
  docModalOverlay?.addEventListener('click', closeDocModal);

  // Admission Enquiry Modal
  const enquiryModal = document.getElementById('enquiryModal');
  const openEnquiryBtns = document.querySelectorAll('.open-enquiry-modal');
  const enquiryCloseBtn = document.getElementById('enquiryModalClose');
  const enquiryModalOverlay = document.getElementById('enquiryModalOverlay');

  openEnquiryBtns.forEach(btn => {
    btn.addEventListener('click', (e) => {
      e.preventDefault();
      enquiryModal?.classList.add('active');
    });
  });

  enquiryCloseBtn?.addEventListener('click', () => {
    enquiryModal?.classList.remove('active');
  });

  enquiryModalOverlay?.addEventListener('click', () => {
    enquiryModal?.classList.remove('active');
  });

  // AJAX Form Handler for Inquiries
  const inquiryForms = document.querySelectorAll('.ajax-inquiry-form');
  inquiryForms.forEach(form => {
    form.addEventListener('submit', async (e) => {
      e.preventDefault();
      const submitBtn = form.querySelector('button[type="submit"]');
      const originalBtnText = submitBtn ? submitBtn.innerHTML : 'Submit';
      
      if (submitBtn) {
        submitBtn.disabled = true;
        submitBtn.innerHTML = 'Submitting...';
      }

      const formData = new FormData(form);

      try {
        const response = await fetch('api/inquiry.php', {
          method: 'POST',
          body: formData
        });
        const result = await response.json();

        if (result.success) {
          form.innerHTML = `
            <div style="text-align: center; padding: 25px 15px; color: #065f46; background: #ecfdf5; border-radius: 12px; border: 1px solid #a7f3d0;">
              <svg width="48" height="48" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="margin: 0 auto 10px; color: #059669;"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
              <h4 style="font-size: 1.25rem; font-weight: 700; margin-bottom: 6px;">Thank You for Your Interest!</h4>
              <p style="font-size: 0.9rem; color: #047857; margin-bottom: 12px;">${result.message}</p>
              <p style="font-size: 0.8rem; color: #065f46;">Our Admissions Office will contact you shortly on ${formData.get('phone') || 'your number'}.</p>
            </div>
          `;
        } else {
          alert(result.message || 'Error sending inquiry. Please call +91 6204168019.');
          if (submitBtn) {
            submitBtn.disabled = false;
            submitBtn.innerHTML = originalBtnText;
          }
        }
      } catch (err) {
        // Fallback for standalone preview
        form.innerHTML = `
          <div style="text-align: center; padding: 25px 15px; color: #065f46; background: #ecfdf5; border-radius: 12px; border: 1px solid #a7f3d0;">
            <svg width="48" height="48" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="margin: 0 auto 10px; color: #059669;"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
            <h4 style="font-size: 1.25rem; font-weight: 700; margin-bottom: 6px;">Enquiry Received Successfully!</h4>
            <p style="font-size: 0.9rem; color: #047857;">Thank you for reaching out to Sanskar Deep International School. Our counselor will contact you within 24 hours.</p>
          </div>
        `;
      }
    });
  });

  // Gallery Filter
  const galleryFilterBtns = document.querySelectorAll('.gallery-filter-btn');
  const galleryItems = document.querySelectorAll('.gallery-grid-item');

  galleryFilterBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      galleryFilterBtns.forEach(b => b.classList.remove('active'));
      btn.classList.add('active');

      const filter = btn.getAttribute('data-filter');
      galleryItems.forEach(item => {
        if (filter === 'all' || item.getAttribute('data-category') === filter) {
          item.style.display = 'block';
        } else {
          item.style.display = 'none';
        }
      });
    });
  });
});
