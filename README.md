# Sanskar Deep International School - Official Website

**Official Domain:** [sanskardeep.co.in](https://sanskardeep.co.in)  
**Facebook Page:** [facebook.com/sanskardeepinternational](https://www.facebook.com/sanskardeepinternational/)  
**Affiliation:** Central Board of Secondary Education (CBSE), New Delhi  
- **CBSE Affiliation No:** 331081  
- **CBSE School Code:** 66829  
- **Managing Trust:** Sangam Educational and Welfare Trust  
- **Address:** At & P.O. - Isuapur, P.S. - Isuapur, Dist. - Saran (Chapra), Bihar - 841411  
- **Helplines:** +91 6204168019 / +91 6204168020  
- **Official Email:** sanskardeep1@gmail.com  

---

## 🌟 Key Features & Architecture

1. **Mandatory Public Disclosure (MPD / Appendix IX)**:
   - Dedicated, fully compliant page strictly following CBSE Appendix-IX guidelines.
   - Organized into **Part A (General Information)**, **Part B (Documents & Information)**, **Part C (Result & Academics)**, **Part D (Staff Details)**, and **Part E (Infrastructure)**.
   - Interactive document modal viewer for all statutory certificates (Affiliation Letter, Trust Deed, State NOC, Building Safety, Fire Safety, RTE, DEO, PHED Water & Sanitation).
   - Printable stylesheet for one-click Appendix-IX summary printing for CBSE inspectors and parents.

2. **CBSE Academic Streams (+2)**:
   - Full curriculum details for **Science (Medical & Non-Medical)**, **Commerce**, and **Humanities / Arts** streams.
   - Continuous and Comprehensive Evaluation (CCE) assessment rules and academic calendar breakdown.

3. **Admissions Portal**:
   - Transparent, SMC-approved Fee Schedule for all standards from Nursery to Class XII.
   - Age criteria matrix aligned with NEP 2020.
   - Interactive AJAX-enabled Online Admission Enquiry form with automatic local logging (`data/inquiries.json`).

4. **Visual & Campus Showcase**:
   - Modern, high-resolution imagery for Digital Smart Classrooms, Science Laboratories, Library & Reading Hall, and Sports Grounds.
   - Real school emblem integration with motto: **आत्मदीपः भव** (*Be Your Own Light*) and the 5 core pillars (*Arduous, Etiquette, Education, Discipline, Perfection*).
   - Direct integration card and links to the official Facebook page.

5. **Technology Stack**:
   - Clean, modular PHP with `includes/header.php`, `includes/footer.php`, and centralized `config.php`.
   - Vanilla CSS (`assets/css/style.css`) using CSS variables, Google Fonts (*Outfit* and *Inter*), rich navy & gold academic color palette, and micro-interactions.
   - Vanilla JavaScript (`assets/js/main.js`) with zero heavyweight dependencies.
   - `.htaccess` with clean URL rewriting and browser caching rules.

---

## 🚀 How to Run Locally

You can launch the site on any local machine using PHP's built-in web server:

```bash
cd /Users/vineetsingh/Projects/php/sankardeep
php -S 127.0.0.1:8080
```

Then open `http://127.0.0.1:8080` in your web browser.

---

## 📁 File Structure

```
├── config.php            # School configuration, constants, and phone/email
├── index.php             # Homepage with hero, highlights, leadership, and notices
├── mpd.php               # CBSE Mandatory Public Disclosure (Appendix IX)
├── about.php             # About Us, Vision, Mission, Leadership & Trust
├── academics.php         # CBSE Curriculum, Streams (+2), and Calendar
├── admissions.php        # Admission process, fee schedule, and application form
├── facilities.php        # Smart classes, science & AI labs, library, sports
├── gallery.php           # Filterable photo gallery & Facebook connection
├── contact.php           # Address, phone, visiting hours, Google map, inquiry
├── .htaccess             # Apache rewrite rules and security headers
├── api/
│   └── inquiry.php       # JSON endpoint for admission and contact messages
├── assets/
│   ├── css/
│   │   └── style.css     # Responsive styles, design system, and print media
│   ├── js/
│   │   └── main.js       # Mobile drawer, document modals, tabs & AJAX handlers
│   └── img/              # Real school logo and high-resolution campus photography
└── data/                 # Auto-generated storage for online inquiries
```
