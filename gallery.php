<?php
$pageTitle = 'Photo Gallery & Campus Life | Sanskar Deep International School';
$metaDescription = 'Explore vibrant glimpses of campus life, smart classrooms, science labs, library, sports activities, and celebrations at Sanskar Deep International School, Isuapur.';
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/includes/header.php';
?>

<!-- Page Header -->
<div class="page-header">
  <div class="container">
    <div class="page-header-content">
      <h1>Photo Gallery & Campus Life</h1>
      <div class="breadcrumbs">
        <a href="index.php">Home</a> &bull; <span>Gallery</span>
      </div>
    </div>
  </div>
</div>

<!-- Gallery Filter & Grid -->
<section class="section">
  <div class="container">
    <div class="section-header">
      <span class="section-tag">Moments at Sanskardeep</span>
      <h2 class="section-title">Visual Showcase of Our Campus</h2>
      <p class="section-subtitle">
        Capturing energetic classroom sessions, rigorous laboratory experiments, sports events, and daily celebrations.
      </p>
    </div>

    <!-- Filter Buttons -->
    <div style="display: flex; justify-content: center; gap: 10px; margin-bottom: 40px; flex-wrap: wrap;">
      <button class="gallery-filter-btn active btn btn-primary btn-sm" data-filter="all">All Photos</button>
      <button class="gallery-filter-btn btn btn-outline btn-sm" data-filter="campus">Campus & Building</button>
      <button class="gallery-filter-btn btn btn-outline btn-sm" data-filter="academics">Classrooms & Labs</button>
      <button class="gallery-filter-btn btn btn-outline btn-sm" data-filter="library">Library</button>
      <button class="gallery-filter-btn btn btn-outline btn-sm" data-filter="sports">Sports & Activities</button>
    </div>

    <!-- Photo Grid -->
    <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 24px;" id="galleryGrid">
      <!-- Item 1: Campus -->
      <div class="gallery-grid-item" data-category="campus" style="border-radius: var(--radius-lg); overflow: hidden; box-shadow: var(--shadow-md); border: 1px solid var(--border); background: #fff;">
        <div style="height: 240px; overflow: hidden;">
          <img src="assets/img/campus.jpg" alt="Main School Campus" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.4s ease;">
        </div>
        <div style="padding: 16px;">
          <span style="font-size: 0.75rem; text-transform: uppercase; color: var(--secondary); font-weight: 700;">Campus</span>
          <h4 style="font-size: 1.05rem; margin-top: 4px; color: var(--primary-dark);">Sprawling 4-Acre Campus</h4>
          <p style="font-size: 0.85rem; color: var(--muted); margin-top: 4px;">Lush green lawns and contemporary school infrastructure in Isuapur.</p>
        </div>
      </div>

      <!-- Item 2: Classroom -->
      <div class="gallery-grid-item" data-category="academics" style="border-radius: var(--radius-lg); overflow: hidden; box-shadow: var(--shadow-md); border: 1px solid var(--border); background: #fff;">
        <div style="height: 240px; overflow: hidden;">
          <img src="assets/img/classroom.jpg" alt="Smart Classroom Session" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.4s ease;">
        </div>
        <div style="padding: 16px;">
          <span style="font-size: 0.75rem; text-transform: uppercase; color: var(--secondary); font-weight: 700;">Academics</span>
          <h4 style="font-size: 1.05rem; margin-top: 4px; color: var(--primary-dark);">Smart Digital Classroom</h4>
          <p style="font-size: 0.85rem; color: var(--muted); margin-top: 4px;">Interactive display panel session engaging students in science and math.</p>
        </div>
      </div>

      <!-- Item 3: Science Lab -->
      <div class="gallery-grid-item" data-category="academics" style="border-radius: var(--radius-lg); overflow: hidden; box-shadow: var(--shadow-md); border: 1px solid var(--border); background: #fff;">
        <div style="height: 240px; overflow: hidden;">
          <img src="assets/img/lab.jpg" alt="Science Laboratory Practical" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.4s ease;">
        </div>
        <div style="padding: 16px;">
          <span style="font-size: 0.75rem; text-transform: uppercase; color: var(--secondary); font-weight: 700;">Science</span>
          <h4 style="font-size: 1.05rem; margin-top: 4px; color: var(--primary-dark);">Senior Science Practical Session</h4>
          <p style="font-size: 0.85rem; color: var(--muted); margin-top: 4px;">Hands-on experimentation under qualified faculty guidance in Chemistry lab.</p>
        </div>
      </div>

      <!-- Item 4: Library -->
      <div class="gallery-grid-item" data-category="library" style="border-radius: var(--radius-lg); overflow: hidden; box-shadow: var(--shadow-md); border: 1px solid var(--border); background: #fff;">
        <div style="height: 240px; overflow: hidden;">
          <img src="assets/img/library.jpg" alt="Reading Hall" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.4s ease;">
        </div>
        <div style="padding: 16px;">
          <span style="font-size: 0.75rem; text-transform: uppercase; color: var(--secondary); font-weight: 700;">Library</span>
          <h4 style="font-size: 1.05rem; margin-top: 4px; color: var(--primary-dark);">Modern Library & Research Wing</h4>
          <p style="font-size: 0.85rem; color: var(--muted); margin-top: 4px;">Students researching literature, references, and preparing for competitive exams.</p>
        </div>
      </div>

      <!-- Item 5: Sports -->
      <div class="gallery-grid-item" data-category="sports" style="border-radius: var(--radius-lg); overflow: hidden; box-shadow: var(--shadow-md); border: 1px solid var(--border); background: #fff;">
        <div style="height: 240px; overflow: hidden;">
          <img src="assets/img/sports.jpg" alt="Sports Day & Track Events" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.4s ease;">
        </div>
        <div style="padding: 16px;">
          <span style="font-size: 0.75rem; text-transform: uppercase; color: var(--secondary); font-weight: 700;">Sports</span>
          <h4 style="font-size: 1.05rem; margin-top: 4px; color: var(--primary-dark);">Annual Sports Meet & Track</h4>
          <p style="font-size: 0.85rem; color: var(--muted); margin-top: 4px;">Inter-house athletic competition and football match on the school grounds.</p>
        </div>
      </div>

      <!-- Item 6: Facebook Live Updates Card -->
      <div class="gallery-grid-item" data-category="all" style="border-radius: var(--radius-lg); overflow: hidden; box-shadow: var(--shadow-md); border: 1px solid var(--border); background: linear-gradient(135deg, #1877f2 0%, #0c56c2 100%); color: #fff; display: flex; flex-direction: column; justify-content: center; padding: 30px; text-align: center;">
        <div style="width: 50px; height: 50px; background: rgba(255,255,255,0.2); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 15px;">
          <svg width="24" height="24" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
        </div>
        <h4 style="font-size: 1.3rem; color: #fff; margin-bottom: 8px;">Explore 100+ More Photos on Facebook</h4>
        <p style="font-size: 0.885rem; color: #e0e7ff; margin-bottom: 20px;">
          Our Facebook page is updated regularly with student video reels, award ceremonies, and festival galleries!
        </p>
        <a href="<?php echo FACEBOOK_URL; ?>" target="_blank" rel="noopener noreferrer" class="btn btn-secondary" style="align-self: center;">
          Open Facebook Album
        </a>
      </div>
    </div>
  </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
