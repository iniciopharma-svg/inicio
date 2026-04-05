<?php
$page       = 'about';
$page_title = 'About Us';
$meta_desc  = 'Learn about Iniciopharma — 4+ years of pharmaceutical excellence in Vadodara, Gujarat. Our mission, vision, values, and team.';
require_once 'includes/header.php';
?>

<!-- PAGE HERO -->
<section class="page-hero">
  <div class="container">
    <div class="breadcrumb">
      <a href="index.php">Home</a>
      <span class="breadcrumb-sep">/</span>
      <span>About Us</span>
    </div>
    <div class="section-label" style="justify-content:center;">Our Story</div>
    <h1 class="page-hero-title">About <span>Iniciopharma</span></h1>
    <p class="page-hero-sub">Two decades of dedication to affordable, quality healthcare — driven by a simple belief that every life deserves the best.</p>
  </div>
</section>

<!-- ============================================================
     VISION & MISSION
     ============================================================ -->
<section class="section">
  <div class="container">
    <div class="vision-mission-grid reveal">
      <div class="vm-card vision">
        <span class="vm-icon">🎯</span>
        <h3 class="vm-title">Our Vision</h3>
        <p class="vm-text">To provide the best healthcare services to every life — regardless of their economic background or location. We envision a future where quality medicines are accessible to all Indians.</p>
      </div>
      <div class="vm-card mission">
        <span class="vm-icon">🚀</span>
        <h3 class="vm-title">Our Mission</h3>
        <p class="vm-text">To manufacture and distribute premium pharmaceutical products at affordable prices, while maintaining the highest standards of quality, safety, and patient trust — contributing to a healthier India.</p>
      </div>
    </div>

    <!-- Company Story -->
    <div class="about-grid" style="margin-bottom: 80px;">
      <div class="reveal">
        <div class="section-label">Our Journey</div>
        <h2 class="section-title">4+ Years of <span>Pharmaceutical</span> Excellence</h2>
        <p style="font-size:15px; color:var(--text-secondary); line-height:1.9; margin-bottom:20px;">
          Iniciopharma was born from a realization — that despite India's pharmaceutical industry being one of the largest in the world, millions of patients still struggled to access quality medicines at fair prices.
        </p>
        <p style="font-size:15px; color:var(--text-secondary); line-height:1.9; margin-bottom:20px;">
          Our founders, with over two decades of hands-on experience in the industry, set out to change this. Starting from Vadodara, Gujarat, we built a company that places patient welfare above everything else.
        </p>
        <p style="font-size:15px; color:var(--text-secondary); line-height:1.9; margin-bottom:32px;">
          Today, Iniciopharma is a trusted name among healthcare professionals, hospitals, and pharmacies — known for consistent quality, transparent pricing, and reliable supply.
        </p>
        <div style="display:flex; gap:12px; flex-wrap:wrap;">
          <span class="tag tag-cyan">Est. 2000+</span>
          <span class="tag tag-violet">Vadodara, Gujarat</span>
          <span class="tag tag-green">Pan India Growing</span>
        </div>
      </div>

      <div class="reveal reveal-delay-2">
        <div class="about-image-box" style="border-radius: var(--radius-lg); border: 1px solid var(--border); padding: 40px; background: var(--bg-card); position:relative; overflow:hidden;">
          <div style="position:absolute;inset:0;background:conic-gradient(from 0deg, transparent 0deg, rgba(0,229,255,0.04) 60deg, transparent 120deg);animation: spin-slow 20s linear infinite;"></div>
          <div style="position:relative;z-index:1;">
            <div style="display:grid; grid-template-columns:1fr 1fr; gap:20px;">
              <div style="text-align:center; padding:24px; background:var(--bg-glass); border:1px solid var(--border); border-radius:var(--radius);">
                <div style="font-family:var(--font-heading); font-size:36px; font-weight:800; color:var(--cyan);">4+</div>
                <div style="font-size:13px; color:var(--text-muted);">Years in Pharma</div>
              </div>
              <div style="text-align:center; padding:24px; background:var(--bg-glass); border:1px solid var(--border); border-radius:var(--radius);">
                <div style="font-family:var(--font-heading); font-size:36px; font-weight:800; color:var(--violet);">35+</div>
                <div style="font-size:13px; color:var(--text-muted);">Products</div>
              </div>
              <div style="text-align:center; padding:24px; background:var(--bg-glass); border:1px solid var(--border); border-radius:var(--radius);">
                <div style="font-family:var(--font-heading); font-size:36px; font-weight:800; color:var(--green);">4</div>
                <div style="font-size:13px; color:var(--text-muted);">Therapy Areas</div>
              </div>
              <div style="text-align:center; padding:24px; background:var(--bg-glass); border:1px solid var(--border); border-radius:var(--radius);">
                <div style="font-family:var(--font-heading); font-size:36px; font-weight:800; color:var(--cyan);">Mon–Sat</div>
                <div style="font-size:13px; color:var(--text-muted);">Support</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Values -->
    <div class="text-center reveal" style="margin-bottom:48px;">
      <div class="section-label">What Drives Us</div>
      <h2 class="section-title">Our Core <span>Values</span></h2>
    </div>
    <div class="values-grid">
      <div class="value-card reveal reveal-delay-1">
        <div class="value-num">01</div>
        <div class="value-title">Integrity</div>
        <div class="value-text">We never compromise on honesty — in our formulations, our pricing, and our relationships with healthcare partners.</div>
      </div>
      <div class="value-card reveal reveal-delay-2">
        <div class="value-num">02</div>
        <div class="value-title">Quality</div>
        <div class="value-text">Every batch is tested rigorously. We maintain GMP-compliant manufacturing to ensure every product is safe and effective.</div>
      </div>
      <div class="value-card reveal reveal-delay-3">
        <div class="value-num">03</div>
        <div class="value-title">Accessibility</div>
        <div class="value-text">Premium healthcare should not be a privilege. We price our medicines to be genuinely affordable for every patient.</div>
      </div>
      <div class="value-card reveal reveal-delay-1">
        <div class="value-num">04</div>
        <div class="value-title">Innovation</div>
        <div class="value-text">We continually invest in R&amp;D to improve formulations and explore new therapeutic areas where we can make an impact.</div>
      </div>
      <div class="value-card reveal reveal-delay-2">
        <div class="value-num">05</div>
        <div class="value-title">Partnership</div>
        <div class="value-text">We build long-term relationships with healthcare providers, treating them as true partners in delivering patient care.</div>
      </div>
      <div class="value-card reveal reveal-delay-3">
        <div class="value-num">06</div>
        <div class="value-title">Responsibility</div>
        <div class="value-text">We take social and environmental responsibility seriously — contributing to healthier communities through ethical business practices.</div>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
     TEAM SECTION
     ============================================================ -->
<section class="section" style="background: var(--bg-secondary);">
  <div class="container">
    <div class="text-center reveal" style="margin-bottom:60px;">
      <div class="section-label">Our People</div>
      <h2 class="section-title">Meet the <span>Leadership Team</span></h2>
      <p class="section-subtitle">Experienced pharmaceutical professionals driving our mission to deliver quality healthcare.</p>
    </div>

    <div class="team-grid">
      <div class="team-card reveal reveal-delay-1">
        <div class="team-avatar">MD</div>
        <div class="team-name">Managing Director</div>
        <div class="team-role">Founder &amp; CEO</div>
        <div class="team-bio">With over 20 years in the pharmaceutical industry, our MD founded Iniciopharma with a vision to make quality medicines affordable for every Indian.</div>
      </div>
      <div class="team-card reveal reveal-delay-2">
        <div class="team-avatar" style="background: linear-gradient(135deg, var(--violet), var(--cyan));">QA</div>
        <div class="team-name">Quality Assurance Head</div>
        <div class="team-role">Director — Quality Control</div>
        <div class="team-bio">Leads our quality assurance team, ensuring every product batch meets strict GMP and pharmacopoeial standards before distribution.</div>
      </div>
      <div class="team-card reveal reveal-delay-3">
        <div class="team-avatar" style="background: linear-gradient(135deg, var(--green), var(--cyan));">SM</div>
        <div class="team-name">Sales &amp; Marketing Head</div>
        <div class="team-role">Director — Business Development</div>
        <div class="team-bio">Drives our partnerships with healthcare providers and distribution networks, expanding Iniciopharma's reach across India.</div>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
     CERTIFICATIONS
     ============================================================ -->
<section class="section">
  <div class="container">
    <div class="text-center reveal" style="margin-bottom:48px;">
      <div class="section-label">Standards &amp; Compliance</div>
      <h2 class="section-title">Our <span>Certifications</span></h2>
      <p class="section-subtitle">Every product and process meets the highest regulatory standards.</p>
    </div>

    <div class="cert-grid">
      <div class="cert-card reveal reveal-delay-1">
        <span class="cert-icon">🏅</span>
        <div class="cert-name">GMP Certified</div>
        <div class="cert-body">Good Manufacturing Practice</div>
      </div>
      <div class="cert-card reveal reveal-delay-2">
        <span class="cert-icon">📋</span>
        <div class="cert-name">Drug License</div>
        <div class="cert-body">Licensed by CDSCO / State FDA</div>
      </div>
      <div class="cert-card reveal reveal-delay-3">
        <span class="cert-icon">🔬</span>
        <div class="cert-name">WHO-GMP</div>
        <div class="cert-body">World Health Organization Guidelines</div>
      </div>
      <div class="cert-card reveal reveal-delay-4">
        <span class="cert-icon">✅</span>
        <div class="cert-name">ISO Compliant</div>
        <div class="cert-body">International Quality Standards</div>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="cta-section">
  <div class="cta-bg"></div>
  <div class="container">
    <div class="cta-inner reveal">
      <h2 class="cta-title">Want to Know <span>More?</span></h2>
      <p class="cta-subtitle">Explore our product range or reach out to discuss how we can serve your healthcare needs.</p>
      <div class="cta-actions">
        <a href="products.php" class="btn btn-primary">View Our Products <i class="fa fa-arrow-right"></i></a>
        <a href="contact.php" class="btn btn-outline">Contact Us</a>
      </div>
    </div>
  </div>
</section>

<?php require_once 'includes/footer.php'; ?>
