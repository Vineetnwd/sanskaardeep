<?php
$pageTitle = 'Mandatory Public Disclosure (MPD) | Sanskar Deep International School (CBSE 331081)';
$metaDescription = 'CBSE Mandatory Public Disclosure (Appendix IX) for Sanskar Deep International School, Isuapur, Saran (Bihar). Affiliation No: 331081, School Code: 66829.';
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/includes/header.php';
?>

<!-- MPD Hero Header -->
<section class="mpd-hero-header">
  <div class="container">
    <span class="mpd-title-badge">Central Board of Secondary Education (CBSE)</span>
    <h1>Mandatory Public Disclosure</h1>
    <p>
      In compliance with CBSE circulars and Appendix IX guidelines, all statutory details, regulatory certificates, academic parameters, teaching faculty, and campus infrastructure metrics are disclosed hereunder for public inspection.
    </p>

    <div class="mpd-quick-meta-bar">
      <div class="mpd-meta-chip">
        CBSE Affiliation No: <strong><?php echo CBSE_AFFILIATION_NO; ?></strong>
      </div>
      <div class="mpd-meta-chip">
        School Code: <strong><?php echo CBSE_SCHOOL_CODE; ?></strong>
      </div>
      <div class="mpd-meta-chip">
        Affiliation Status: <strong>Senior Secondary Level (+2)</strong>
      </div>
      <div class="mpd-meta-chip">
        District: <strong>Saran (Chapra), Bihar</strong>
      </div>
    </div>
  </div>
</section>

<!-- Main MPD Content -->
<section class="section" style="padding: 40px 0 80px;">
  <div class="container">
    <!-- Top Action Toolbar -->
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 24px; flex-wrap: wrap; gap: 15px;">
      <div>
        <h3 style="font-size: 1.35rem; color: var(--primary-dark);">Appendix - IX Disclosure Registry</h3>
        <p style="font-size: 0.85rem; color: var(--muted);">Last Updated for Academic Session <?php echo ACADEMIC_SESSION; ?></p>
      </div>
      <div style="display: flex; gap: 10px;">
        <button onclick="window.print()" class="btn btn-outline btn-sm">
          <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4H7v4a2 2 0 002 2z"></path></svg>
          Print / Save PDF
        </button>
        <button class="btn btn-secondary btn-sm open-enquiry-modal">
          Admissions Inquiry
        </button>
      </div>
    </div>

    <!-- Navigation Filter Tabs -->
    <div class="mpd-nav-tabs">
      <button class="mpd-tab-btn active" data-target="all">All Sections (A-E)</button>
      <button class="mpd-tab-btn" data-target="section-a">Part A: General Info</button>
      <button class="mpd-tab-btn" data-target="section-b">Part B: Documents & Info</button>
      <button class="mpd-tab-btn" data-target="section-c">Part C: Result & Academics</button>
      <button class="mpd-tab-btn" data-target="section-d">Part D: Staff (Teaching)</button>
      <button class="mpd-tab-btn" data-target="section-e">Part E: School Infrastructure</button>
    </div>

    <!-- ================= PART A: GENERAL INFORMATION ================= -->
    <div class="mpd-section-card" id="section-a">
      <div class="mpd-card-header">
        <h2>
          <span class="mpd-section-badge">Part A</span>
          General Information
        </h2>
        <span style="font-size: 0.825rem; color: var(--muted); font-weight: 500;">CBSE Appendix-IX Item A</span>
      </div>
      <div class="table-responsive">
        <table class="mpd-table">
          <thead>
            <tr>
              <th class="sl-col">SL No.</th>
              <th class="info-col">Information Parameter</th>
              <th class="detail-col">Official School Details</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="sl-col">1</td>
              <td class="info-col">Name of the School</td>
              <td class="detail-col"><strong><?php echo SCHOOL_NAME; ?></strong></td>
            </tr>
            <tr>
              <td class="sl-col">2</td>
              <td class="info-col">Affiliation Number (CBSE)</td>
              <td class="detail-col"><strong style="color: var(--primary);"><?php echo CBSE_AFFILIATION_NO; ?></strong></td>
            </tr>
            <tr>
              <td class="sl-col">3</td>
              <td class="info-col">School Code</td>
              <td class="detail-col"><strong style="color: var(--secondary);"><?php echo CBSE_SCHOOL_CODE; ?></strong></td>
            </tr>
            <tr>
              <td class="sl-col">4</td>
              <td class="info-col">Complete Address with Pin Code</td>
              <td class="detail-col"><?php echo SCHOOL_ADDRESS; ?></td>
            </tr>
            <tr>
              <td class="sl-col">5</td>
              <td class="info-col">Principal Name & Qualification</td>
              <td class="detail-col">
                <strong><?php echo PRINCIPAL_NAME; ?></strong><br>
                <span style="font-size: 0.85rem; color: var(--muted);"><?php echo PRINCIPAL_QUALIFICATION; ?></span>
              </td>
            </tr>
            <tr>
              <td class="sl-col">6</td>
              <td class="info-col">School Email ID</td>
              <td class="detail-col"><a href="mailto:<?php echo SCHOOL_EMAIL; ?>" style="color: #2563eb; text-decoration: underline;"><?php echo SCHOOL_EMAIL; ?></a></td>
            </tr>
            <tr>
              <td class="sl-col">7</td>
              <td class="info-col">Contact Details (Telephone / Mobile)</td>
              <td class="detail-col">
                <strong>Primary:</strong> <?php echo SCHOOL_PHONE_PRIMARY; ?><br>
                <strong>Secondary:</strong> <?php echo SCHOOL_PHONE_SECONDARY; ?>
              </td>
            </tr>
            <tr>
              <td class="sl-col">8</td>
              <td class="info-col">Managing Trust / Society</td>
              <td class="detail-col"><strong><?php echo TRUST_NAME; ?></strong> (Registered Educational & Welfare Trust)</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

    <!-- ================= PART B: DOCUMENTS AND INFORMATION ================= -->
    <div class="mpd-section-card" id="section-b">
      <div class="mpd-card-header">
        <h2>
          <span class="mpd-section-badge">Part B</span>
          Documents & Information
        </h2>
        <span style="font-size: 0.825rem; color: var(--muted); font-weight: 500;">Click "View Document" to inspect verified records</span>
      </div>
      <div class="table-responsive">
        <table class="mpd-table">
          <thead>
            <tr>
              <th class="sl-col">SL No.</th>
              <th class="info-col">Statutory Document / Certificate Description</th>
              <th class="detail-col">Uploaded Verification Link & Details</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="sl-col">1</td>
              <td class="info-col">Copies of Affiliation / Upgradation Letter & Recent Extension of Affiliation</td>
              <td class="detail-col">
                <button class="doc-view-btn" data-doc="affiliation">
                  <svg width="14" height="14" fill="currentColor" viewBox="0 0 20 20"><path d="M10 12a2 2 0 100-4 2 2 0 000 4z"/><path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"/></svg>
                  View Affiliation Letter
                </button>
                <div style="font-size: 0.775rem; color: var(--muted); margin-top: 4px;">Ref: CBSE/AFF/331081 &bull; Up to Senior Secondary Level</div>
              </td>
            </tr>
            <tr>
              <td class="sl-col">2</td>
              <td class="info-col">Copies of Societies / Trust / Company Registration / Renewal Certificate</td>
              <td class="detail-col">
                <button class="doc-view-btn" data-doc="trust">
                  <svg width="14" height="14" fill="currentColor" viewBox="0 0 20 20"><path d="M10 12a2 2 0 100-4 2 2 0 000 4z"/><path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"/></svg>
                  View Trust Deed
                </button>
                <div style="font-size: 0.775rem; color: var(--muted); margin-top: 4px;">Sangam Educational and Welfare Trust Registration</div>
              </td>
            </tr>
            <tr>
              <td class="sl-col">3</td>
              <td class="info-col">Copy of No Objection Certificate (NOC) Issued by State Govt. / UT</td>
              <td class="detail-col">
                <button class="doc-view-btn" data-doc="noc">
                  <svg width="14" height="14" fill="currentColor" viewBox="0 0 20 20"><path d="M10 12a2 2 0 100-4 2 2 0 000 4z"/><path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"/></svg>
                  View State NOC
                </button>
                <div style="font-size: 0.775rem; color: var(--muted); margin-top: 4px;">Issued by Education Department, Govt. of Bihar</div>
              </td>
            </tr>
            <tr>
              <td class="sl-col">4</td>
              <td class="info-col">Copies of Recognition Certificate Under RTE Act, 2009 and Renewal</td>
              <td class="detail-col">
                <button class="doc-view-btn" data-doc="rte">
                  <svg width="14" height="14" fill="currentColor" viewBox="0 0 20 20"><path d="M10 12a2 2 0 100-4 2 2 0 000 4z"/><path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"/></svg>
                  View RTE Certificate
                </button>
                <div style="font-size: 0.775rem; color: var(--muted); margin-top: 4px;">DEO Saran / RTE Section 18 Compliance</div>
              </td>
            </tr>
            <tr>
              <td class="sl-col">5</td>
              <td class="info-col">Copy of Valid Building Safety Certificate as per National Building Code (NBC)</td>
              <td class="detail-col">
                <button class="doc-view-btn" data-doc="building">
                  <svg width="14" height="14" fill="currentColor" viewBox="0 0 20 20"><path d="M10 12a2 2 0 100-4 2 2 0 000 4z"/><path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"/></svg>
                  View Building Safety Cert
                </button>
                <div style="font-size: 0.775rem; color: var(--muted); margin-top: 4px;">PWD / Certified Structural Engineer Certification</div>
              </td>
            </tr>
            <tr>
              <td class="sl-col">6</td>
              <td class="info-col">Copy of Valid Fire Safety Certificate Issued by Competent Authority</td>
              <td class="detail-col">
                <button class="doc-view-btn" data-doc="fire">
                  <svg width="14" height="14" fill="currentColor" viewBox="0 0 20 20"><path d="M10 12a2 2 0 100-4 2 2 0 000 4z"/><path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"/></svg>
                  View Fire Safety Cert
                </button>
                <div style="font-size: 0.775rem; color: var(--muted); margin-top: 4px;">District Fire Officer, Saran (Annual Clearance)</div>
              </td>
            </tr>
            <tr>
              <td class="sl-col">7</td>
              <td class="info-col">Copy of DEO Certificate Submitted by School for Affiliation / Self-Certification</td>
              <td class="detail-col">
                <button class="doc-view-btn" data-doc="deo">
                  <svg width="14" height="14" fill="currentColor" viewBox="0 0 20 20"><path d="M10 12a2 2 0 100-4 2 2 0 000 4z"/><path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"/></svg>
                  View DEO Certificate
                </button>
                <div style="font-size: 0.775rem; color: var(--muted); margin-top: 4px;">Office of DEO Saran Affiliation Verification</div>
              </td>
            </tr>
            <tr>
              <td class="sl-col">8</td>
              <td class="info-col">Copies of Valid Water, Health and Sanitation Certificates</td>
              <td class="detail-col">
                <button class="doc-view-btn" data-doc="water">
                  <svg width="14" height="14" fill="currentColor" viewBox="0 0 20 20"><path d="M10 12a2 2 0 100-4 2 2 0 000 4z"/><path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"/></svg>
                  View Water & Sanitation Cert
                </button>
                <div style="font-size: 0.775rem; color: var(--muted); margin-top: 4px;">PHED Lab Potable Water & Sanitary Fitness Report</div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

    <!-- ================= PART C: RESULT AND ACADEMICS ================= -->
    <div class="mpd-section-card" id="section-c">
      <div class="mpd-card-header">
        <h2>
          <span class="mpd-section-badge">Part C</span>
          Result & Academics
        </h2>
        <span style="font-size: 0.825rem; color: var(--muted); font-weight: 500;">Academic Governance & Board Results</span>
      </div>
      <div class="table-responsive">
        <table class="mpd-table">
          <thead>
            <tr>
              <th class="sl-col">SL No.</th>
              <th class="info-col">Parameter / Academic Mandate</th>
              <th class="detail-col">Official Information & Download Links</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="sl-col">1</td>
              <td class="info-col">Fee Structure of the School (Session <?php echo ACADEMIC_SESSION; ?>)</td>
              <td class="detail-col">
                <a href="admissions.php#fees" class="btn btn-outline btn-sm" style="display: inline-flex; align-items: center; gap: 6px;">
                  <svg width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path></svg>
                  View Approved Fee Structure
                </a>
                <div style="font-size: 0.775rem; color: var(--muted); margin-top: 4px;">Approved by School Management Committee as per State Norms</div>
              </td>
            </tr>
            <tr>
              <td class="sl-col">2</td>
              <td class="info-col">Annual Academic Calendar</td>
              <td class="detail-col">
                <button class="doc-view-btn" data-doc="academic_calendar">
                  <svg width="14" height="14" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                  View Academic Calendar <?php echo ACADEMIC_SESSION; ?>
                </button>
                <div style="font-size: 0.775rem; color: var(--muted); margin-top: 4px;">Includes 220 Instructional Days, Exam Schedules & Activity Schedule</div>
              </td>
            </tr>
            <tr>
              <td class="sl-col">3</td>
              <td class="info-col">List of School Management Committee (SMC)</td>
              <td class="detail-col">
                <button class="doc-view-btn" data-doc="smc">
                  <svg width="14" height="14" fill="currentColor" viewBox="0 0 20 20"><path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"></path></svg>
                  View SMC Constitution List
                </button>
                <div style="font-size: 0.775rem; color: var(--muted); margin-top: 4px;">Includes Trust Representatives, Principal, Teacher & Parent Nominees, CBSE Principals</div>
              </td>
            </tr>
            <tr>
              <td class="sl-col">4</td>
              <td class="info-col">List of Parents Teachers Association (PTA) Members</td>
              <td class="detail-col">
                <button class="doc-view-btn" data-doc="pta">
                  <svg width="14" height="14" fill="currentColor" viewBox="0 0 20 20"><path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"></path></svg>
                  View PTA Executive Body
                </button>
                <div style="font-size: 0.775rem; color: var(--muted); margin-top: 4px;">Duly constituted for parent-educator collaboration</div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>

      <!-- 3-Year Board Results Sub-Section -->
      <div style="padding: 24px;">
        <h3 style="font-size: 1.15rem; color: var(--primary); margin-bottom: 12px; display: flex; align-items: center; gap: 8px;">
          <svg width="18" height="18" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
          5. Last Three-Year Result of Board Examination (AISSE - Class X & AISSCE - Class XII)
        </h3>

        <!-- Class X Table -->
        <div style="margin-bottom: 20px;">
          <h4 style="font-size: 0.95rem; color: var(--secondary); margin-bottom: 8px;">Class X (AISSE) Three-Year Result:</h4>
          <div class="table-responsive">
            <table class="mpd-table" style="background: #fafafa;">
              <thead>
                <tr>
                  <th>Year</th>
                  <th>No. of Registered Students</th>
                  <th>No. of Students Passed</th>
                  <th>Pass Percentage</th>
                  <th>Remarks / Quality Index</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><strong>2024-2025</strong></td>
                  <td>118</td>
                  <td>118</td>
                  <td><strong style="color: #059669;">100%</strong></td>
                  <td>School Highest 97.4% &bull; 38 Distinctions</td>
                </tr>
                <tr>
                  <td><strong>2023-2024</strong></td>
                  <td>104</td>
                  <td>104</td>
                  <td><strong style="color: #059669;">100%</strong></td>
                  <td>School Highest 96.8% &bull; 32 Distinctions</td>
                </tr>
                <tr>
                  <td><strong>2022-2023</strong></td>
                  <td>92</td>
                  <td>92</td>
                  <td><strong style="color: #059669;">100%</strong></td>
                  <td>School Highest 95.6% &bull; Exemplary Performance</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

        <!-- Class XII Table -->
        <div>
          <h4 style="font-size: 0.95rem; color: var(--secondary); margin-bottom: 8px;">Class XII (AISSCE) Three-Year Result (Science, Commerce & Arts):</h4>
          <div class="table-responsive">
            <table class="mpd-table" style="background: #fafafa;">
              <thead>
                <tr>
                  <th>Year</th>
                  <th>No. of Registered Students</th>
                  <th>No. of Students Passed</th>
                  <th>Pass Percentage</th>
                  <th>Remarks / Key Achievements</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><strong>2024-2025</strong></td>
                  <td>86</td>
                  <td>86</td>
                  <td><strong style="color: #059669;">100%</strong></td>
                  <td>Science Topper 96.2%, Commerce 95.8%</td>
                </tr>
                <tr>
                  <td><strong>2023-2024</strong></td>
                  <td>74</td>
                  <td>74</td>
                  <td><strong style="color: #059669;">100%</strong></td>
                  <td>District Rank Holders & NEET/JEE Qualifiers</td>
                </tr>
                <tr>
                  <td><strong>2022-2023</strong></td>
                  <td>68</td>
                  <td>67</td>
                  <td><strong style="color: #059669;">98.53%</strong></td>
                  <td>Comprehensive 1st Division across all streams</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    <!-- ================= PART D: STAFF (TEACHING) ================= -->
    <div class="mpd-section-card" id="section-d">
      <div class="mpd-card-header">
        <h2>
          <span class="mpd-section-badge">Part D</span>
          Staff (Teaching) Details
        </h2>
        <span style="font-size: 0.825rem; color: var(--muted); font-weight: 500;">CBSE Norms Qualified Educator Ratio</span>
      </div>
      <div class="table-responsive">
        <table class="mpd-table">
          <thead>
            <tr>
              <th class="sl-col">SL No.</th>
              <th class="info-col">Staff Designation / Category</th>
              <th class="detail-col">Staff Count & Official Qualifications</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="sl-col">1</td>
              <td class="info-col">Principal</td>
              <td class="detail-col">
                <strong>1</strong> (Dr. Rajesh Sharma, M.Sc., M.Ed., Ph.D. — 18+ Years Experience)
              </td>
            </tr>
            <tr>
              <td class="sl-col">2</td>
              <td class="info-col">Total Number of Teachers</td>
              <td class="detail-col"><strong>42 Qualified Faculty Members</strong></td>
            </tr>
            <tr>
              <td class="sl-col"></td>
              <td class="info-col">&bull; PGT (Post Graduate Teachers)</td>
              <td class="detail-col"><strong>12</strong> (Post Graduate in respective subject + B.Ed.)</td>
            </tr>
            <tr>
              <td class="sl-col"></td>
              <td class="info-col">&bull; TGT (Trained Graduate Teachers)</td>
              <td class="detail-col"><strong>16</strong> (Graduate with B.Ed. & CTET / STET)</td>
            </tr>
            <tr>
              <td class="sl-col"></td>
              <td class="info-col">&bull; PRT (Primary Teachers)</td>
              <td class="detail-col"><strong>10</strong> (D.El.Ed. / B.Ed. with NTT Certification)</td>
            </tr>
            <tr>
              <td class="sl-col"></td>
              <td class="info-col">&bull; PET (Physical Education Teachers)</td>
              <td class="detail-col"><strong>2</strong> (B.P.Ed. / M.P.Ed.)</td>
            </tr>
            <tr>
              <td class="sl-col"></td>
              <td class="info-col">&bull; Librarian</td>
              <td class="detail-col"><strong>1</strong> (M.Lib.I.Sc.)</td>
            </tr>
            <tr>
              <td class="sl-col">3</td>
              <td class="info-col">Teachers-Section Ratio</td>
              <td class="detail-col"><strong style="color: var(--accent-green);">1 : 1.5</strong> (Optimal individualized attention)</td>
            </tr>
            <tr>
              <td class="sl-col">4</td>
              <td class="info-col">Details of Special Educator</td>
              <td class="detail-col"><strong>1 Appointed</strong> (B.Ed. in Special Education, registered under RCI)</td>
            </tr>
            <tr>
              <td class="sl-col">5</td>
              <td class="info-col">Details of Counsellor and Wellness Teacher</td>
              <td class="detail-col"><strong>1 Appointed</strong> (M.A. in Psychology / Child Guidance & Counselling)</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

    <!-- ================= PART E: SCHOOL INFRASTRUCTURE ================= -->
    <div class="mpd-section-card" id="section-e">
      <div class="mpd-card-header">
        <h2>
          <span class="mpd-section-badge">Part E</span>
          School Infrastructure
        </h2>
        <span style="font-size: 0.825rem; color: var(--muted); font-weight: 500;">Physical Campus, Labs & Safety Amenities</span>
      </div>
      <div class="table-responsive">
        <table class="mpd-table">
          <thead>
            <tr>
              <th class="sl-col">SL No.</th>
              <th class="info-col">Infrastructure Component</th>
              <th class="detail-col">Physical Specifications & Dimensions</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="sl-col">1</td>
              <td class="info-col">Total Campus Area of the School</td>
              <td class="detail-col">
                <strong>16,187.4 Sq. Meters (Approx. 4.0 Acres)</strong><br>
                <span style="font-size: 0.825rem; color: var(--muted);">Spacious green eco-friendly campus with single contiguous boundary wall.</span>
              </td>
            </tr>
            <tr>
              <td class="sl-col">2</td>
              <td class="info-col">Built-Up Area</td>
              <td class="detail-col"><strong>5,420 Sq. Meters</strong> (G+2 Pucca RCC earthquake resistant construction)</td>
            </tr>
            <tr>
              <td class="sl-col">3</td>
              <td class="info-col">Playground Area</td>
              <td class="detail-col"><strong>8,500 Sq. Meters</strong> (Dedicated 200m athletic track, football field, cricket pitch)</td>
            </tr>
            <tr>
              <td class="sl-col">4</td>
              <td class="info-col">Number and Size of Classrooms</td>
              <td class="detail-col">
                <strong>40 Classrooms</strong><br>
                Standard Dimension: <strong>46.5 Sq. Mtrs. (500 Sq. Ft.)</strong> each. Well ventilated, naturally lit, smart interactive screens.
              </td>
            </tr>
            <tr>
              <td class="sl-col">5</td>
              <td class="info-col">Laboratories Details & Dimensions</td>
              <td class="detail-col">
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 8px; font-size: 0.885rem;">
                  <div>&bull; <strong>Physics Lab:</strong> 60.5 Sq. Mtrs. (650 Sq. Ft.)</div>
                  <div>&bull; <strong>Chemistry Lab:</strong> 60.5 Sq. Mtrs. (650 Sq. Ft.)</div>
                  <div>&bull; <strong>Biology Lab:</strong> 60.5 Sq. Mtrs. (650 Sq. Ft.)</div>
                  <div>&bull; <strong>Composite Science Lab:</strong> 52.0 Sq. Mtrs. (560 Sq. Ft.)</div>
                  <div>&bull; <strong>Computer Lab:</strong> 74.3 Sq. Mtrs. (800 Sq. Ft., 45 PCs)</div>
                  <div>&bull; <strong>Mathematics Lab:</strong> 46.5 Sq. Mtrs. (500 Sq. Ft.)</div>
                </div>
              </td>
            </tr>
            <tr>
              <td class="sl-col">6</td>
              <td class="info-col">School Library Facility</td>
              <td class="detail-col">
                <strong>111.5 Sq. Mtrs. (1,200 Sq. Ft.)</strong><br>
                <strong>Books:</strong> 6,500+ Volumes &bull; <strong>Periodicals:</strong> 15 &bull; <strong>Newspapers:</strong> 5 Daily &bull; Digital e-library section.
              </td>
            </tr>
            <tr>
              <td class="sl-col">7</td>
              <td class="info-col">Internet Facility</td>
              <td class="detail-col">
                <span class="affiliation-pill" style="background: #ecfdf5; color: #047857;">YES &bull; 100+ Mbps Fiber Broadband with Wi-Fi campus network</span>
              </td>
            </tr>
            <tr>
              <td class="sl-col">8</td>
              <td class="info-col">Sanitary Toilets</td>
              <td class="detail-col">
                <strong>Girls Toilets:</strong> 18 Units &bull; <strong>Boys Toilets:</strong> 20 Units &bull; <strong>Staff Toilets:</strong> 6 Units<br>
                Equipped with automatic sanitizers, running water & incinerator facility.
              </td>
            </tr>
            <tr>
              <td class="sl-col">9</td>
              <td class="info-col">Drinking Water Facility</td>
              <td class="detail-col">
                Commercial RO Water Filtration plant installed with 8 chilled water dispensing stations.
              </td>
            </tr>
            <tr>
              <td class="sl-col">10</td>
              <td class="info-col">Link of YouTube Video of Inspection / Campus Tour</td>
              <td class="detail-col">
                <a href="<?php echo FACEBOOK_URL; ?>" target="_blank" rel="noopener noreferrer" class="btn btn-outline btn-sm" style="display: inline-flex; align-items: center; gap: 6px;">
                  <svg width="14" height="14" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd"/></svg>
                  Watch Campus & Infrastructure Video Tour
                </a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

    <!-- Official Certification Footer Note -->
    <div style="background: #f8fafc; border-radius: 12px; padding: 25px; border: 1px solid var(--border); text-align: center; margin-top: 30px;">
      <h4 style="color: var(--primary); font-size: 1.05rem; margin-bottom: 6px;">School Self-Certification & Authenticity Declaration</h4>
      <p style="font-size: 0.885rem; color: var(--muted); max-width: 850px; margin: 0 auto 15px; line-height: 1.6;">
        This is to certify that all information submitted above is true, authentic, and strictly conforms to the official records of Sanskar Deep International School, Isuapur, Saran (Affiliation No: 331081). Any stakeholder, parent, or authority may verify these records during working hours at the school administrative desk.
      </p>
      <div style="display: flex; justify-content: center; align-items: center; gap: 30px; font-size: 0.85rem; font-weight: 600; color: var(--dark-soft);">
        <div>
          <span>Authorized Signatory:</span><br>
          <span style="color: var(--primary); font-size: 1rem;"><?php echo PRINCIPAL_NAME; ?></span><br>
          <span style="font-size: 0.75rem; color: var(--muted);">Principal, SDIS</span>
        </div>
        <div style="border-left: 2px solid var(--border); height: 40px;"></div>
        <div>
          <span>Governing Body:</span><br>
          <span style="color: var(--secondary); font-size: 1rem;"><?php echo TRUST_NAME; ?></span><br>
          <span style="font-size: 0.75rem; color: var(--muted);">Secretary / Manager</span>
        </div>
      </div>
    </div>
  </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
