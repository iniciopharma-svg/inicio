<?php
$page       = 'home';
$page_title = 'Healthcare for Every Life';
$meta_desc  = 'Iniciopharma — Premium quality pharmaceutical products at affordable prices. Based in Vadodara, Gujarat, India.';
require_once 'includes/header.php';
?>

<!-- ============================================================
     HERO
     ============================================================ -->
<section class="hero">
  <div class="hero-bg"></div>
  <canvas id="particle-canvas" style="position:absolute;inset:0;width:100%;height:100%;"></canvas>

  <div class="hero-content">
    <div class="hero-text">

      <div class="hero-badge">
        <span class="dot"></span>
        TRUSTED PHARMACEUTICAL COMPANY
      </div>

      <h1 class="hero-title">
        Premium Healthcare
        <span class="line-cyan">Solutions for</span>
        <span class="line-gradient">Every Life</span>
      </h1>

      <p class="hero-desc">
        Iniciopharma delivers high-quality medicines at affordable prices — because access to good health shouldn't be a privilege. Serving patients across India for over 20 years.
      </p>

      <div class="hero-actions">
        <a href="products.php" class="btn btn-primary">
          <i class="fa fa-flask"></i> Explore Products
        </a>
        <a href="contact.php" class="btn btn-outline">
          Contact Us <i class="fa fa-arrow-right"></i>
        </a>
      </div>

      <div class="hero-stats">
        <div class="hero-stat-item">
          <div class="hero-stat-num" data-target="20" data-suffix="+">0+</div>
          <div class="hero-stat-label">Years</div>
        </div>
        <div class="hero-stat-item">
          <div class="hero-stat-num" data-target="10" data-suffix="+">0+</div>
          <div class="hero-stat-label">Products</div>
        </div>
        <div class="hero-stat-item">
          <div class="hero-stat-num" data-target="4" data-suffix="">0</div>
          <div class="hero-stat-label">Therapy Areas</div>
        </div>
        <div class="hero-stat-item">
          <div class="hero-stat-num" data-target="24" data-suffix="/7">0</div>
          <div class="hero-stat-label">Support</div>
        </div>
      </div>

    </div>

    <!-- Right side — hidden on mobile -->
    <div class="hero-visual">
      <div class="molecule-ring ring-1"><div class="ring-dot"></div></div>
      <div class="molecule-ring ring-2"><div class="ring-dot ring-dot-2"></div></div>
      <div class="hero-float-badge badge-tl">
        <div class="float-badge-val">ISO</div>
        <div class="float-badge-label">Certified</div>
      </div>
      <div class="hero-float-badge badge-br">
        <div class="float-badge-val">GMP</div>
        <div class="float-badge-label">Compliant</div>
      </div>
      <div class="hero-card-main">
        <div class="product-preview-title">Featured Products</div>
        <div class="product-preview-item">
          <div class="product-preview-icon" style="background:#fff;padding:4px;">
            <img src="assets/images/products/remose-d.png" alt="Remose-D" style="width:100%;height:100%;object-fit:contain;" />
          </div>
          <div>
            <div class="product-preview-name">Remose-D</div>
            <div class="product-preview-cat">Gastro &amp; Liver Health</div>
          </div>
          <span class="tag tag-cyan" style="margin-left:auto;font-size:10px;">New</span>
        </div>
        <div class="product-preview-item">
          <div class="product-preview-icon" style="background:#fff;padding:4px;">
            <img src="assets/images/products/mubrin-100.png" alt="Mubrin-100" style="width:100%;height:100%;object-fit:contain;" />
          </div>
          <div>
            <div class="product-preview-name">Mubrin-100</div>
            <div class="product-preview-cat">Respiratory Health</div>
          </div>
        </div>
        <div class="product-preview-item">
          <div class="product-preview-icon" style="background:#fff;padding:4px;">
            <img src="assets/images/products/fevedol-mf.png" alt="Fevedol-MF" style="width:100%;height:100%;object-fit:contain;" />
          </div>
          <div>
            <div class="product-preview-name">Fevedol-MF</div>
            <div class="product-preview-cat">Pain &amp; Fever</div>
          </div>
        </div>
        <div class="product-preview-item">
          <div class="product-preview-icon" style="background:#fff;padding:4px;">
            <img src="assets/images/products/skal-up-syrup.png" alt="Skal-Up Syrup" style="width:100%;height:100%;object-fit:contain;" />
          </div>
          <div>
            <div class="product-preview-name">Skal-Up Syrup</div>
            <div class="product-preview-cat">Nutritional Supplement</div>
          </div>
        </div>
        <a href="products.php" class="btn btn-outline" style="width:100%;justify-content:center;margin-top:16px;">
          View All Products <i class="fa fa-arrow-right"></i>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
     MARQUEE
     ============================================================ -->
<div class="marquee-section">
  <div class="marquee-track">
    <?php
    $items = ['Gastro & Liver Health','Respiratory Care','Pain Management','Nutritional Supplements','Quality Assured','GMP Certified','ISO Compliant','Affordable Healthcare','20+ Years Experience','Vadodara, Gujarat','Pan India Reach'];
    $all   = array_merge($items, $items);
    foreach ($all as $item):
    ?>
    <span class="marquee-item"><span class="dot"></span><?php echo htmlspecialchars($item); ?></span>
    <?php endforeach; ?>
  </div>
</div>

<!-- ============================================================
     STATS
     ============================================================ -->
<section class="stats-section section-sm">
  <div class="container">
    <div class="stats-grid reveal">
      <div class="stat-item">
        <span class="stat-icon">🏆</span>
        <div class="stat-number" data-target="20" data-suffix="+">0+</div>
        <div class="stat-label">Years of Excellence</div>
      </div>
      <div class="stat-item">
        <span class="stat-icon">💊</span>
        <div class="stat-number" data-target="10" data-suffix="+">0+</div>
        <div class="stat-label">Products Available</div>
      </div>
      <div class="stat-item">
        <span class="stat-icon">🧬</span>
        <div class="stat-number" data-target="4" data-suffix="">0</div>
        <div class="stat-label">Therapy Categories</div>
      </div>
      <div class="stat-item">
        <span class="stat-icon">📞</span>
        <div class="stat-number" data-target="24" data-suffix="/7">0</div>
        <div class="stat-label">Customer Support</div>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
     FEATURED PRODUCTS
     ============================================================ -->
<section class="section" style="background:var(--bg-primary);">
  <div class="container">

    <div class="products-header reveal">
      <div>
        <div class="section-label">Our Portfolio</div>
        <h2 class="section-title">Featured <span>Products</span></h2>
      </div>
      <a href="products.php" class="btn btn-outline">View All <i class="fa fa-arrow-right"></i></a>
    </div>

    <div class="filter-tabs reveal">
      <button class="filter-tab active" data-filter="all">All</button>
      <button class="filter-tab" data-filter="gastro">Gastro &amp; Liver</button>
      <button class="filter-tab" data-filter="respiratory">Respiratory</button>
      <button class="filter-tab" data-filter="pain">Pain &amp; Fever</button>
      <button class="filter-tab" data-filter="nutrition">Nutrition</button>
    </div>

    <div class="products-grid">

      <div class="product-card reveal reveal-delay-1" data-category="gastro">
        <div class="product-icon-wrap"><img src="assets/images/products/remose-d.png" alt="Remose-D" /></div>
        <div class="product-card-info">
          <span class="product-cat-badge cat-gastro">Gastro</span>
          <div class="product-name">Remose-D</div>
          <div class="product-composition">Esomeprazole (E/C) &amp; Domperidone (S/R) Capsules</div>
          <div class="product-card-footer">
            <span><i class="fa fa-tag" style="color:var(--cyan);margin-right:4px;"></i>Rx</span>
            <a href="products.php">Details →</a>
          </div>
        </div>
      </div>

      <div class="product-card reveal reveal-delay-2" data-category="respiratory">
        <div class="product-icon-wrap"><img src="assets/images/products/mubrin-100.png" alt="Mubrin-100" /></div>
        <div class="product-card-info">
          <span class="product-cat-badge cat-resp">Respiratory</span>
          <div class="product-name">Mubrin-100</div>
          <div class="product-composition">Acebrophylline Capsules 100 mg</div>
          <div class="product-card-footer">
            <span><i class="fa fa-tag" style="color:var(--green);margin-right:4px;"></i>Rx</span>
            <a href="products.php">Details →</a>
          </div>
        </div>
      </div>

      <div class="product-card reveal reveal-delay-3" data-category="gastro">
        <div class="product-icon-wrap"><img src="assets/images/products/remos-l.png" alt="Remose-L" /></div>
        <div class="product-card-info">
          <span class="product-cat-badge cat-gastro">Gastro</span>
          <div class="product-name">Remose-L</div>
          <div class="product-composition">Esomeprazole EC &amp; Levosulpiride SR Capsules</div>
          <div class="product-card-footer">
            <span><i class="fa fa-tag" style="color:var(--cyan);margin-right:4px;"></i>Rx</span>
            <a href="products.php">Details →</a>
          </div>
        </div>
      </div>

      <div class="product-card reveal reveal-delay-4" data-category="nutrition">
        <div class="product-icon-wrap"><img src="assets/images/products/vitamin-d3.png" alt="Vitamin D3" /></div>
        <div class="product-card-info">
          <span class="product-cat-badge cat-nutrition">Nutrition</span>
          <div class="product-name">Vitamin D3</div>
          <div class="product-composition">Cholecalciferol Oral Solution</div>
          <div class="product-card-footer">
            <span><i class="fa fa-tag" style="color:var(--violet);margin-right:4px;"></i>OTC</span>
            <a href="products.php">Details →</a>
          </div>
        </div>
      </div>

      <div class="product-card reveal reveal-delay-1" data-category="gastro">
        <div class="product-icon-wrap"><img src="assets/images/products/remose-40.png" alt="Remose-40" /></div>
        <div class="product-card-info">
          <span class="product-cat-badge cat-gastro">Gastro</span>
          <div class="product-name">Remose-40</div>
          <div class="product-composition">Pantoprazole Tablets 40 mg</div>
          <div class="product-card-footer">
            <span><i class="fa fa-tag" style="color:var(--cyan);margin-right:4px;"></i>Rx</span>
            <a href="products.php">Details →</a>
          </div>
        </div>
      </div>

      <div class="product-card reveal reveal-delay-2" data-category="pain">
        <div class="product-icon-wrap"><img src="assets/images/products/fevedol-mf.png" alt="Fevedol-MF" /></div>
        <div class="product-card-info">
          <span class="product-cat-badge cat-pain">Pain &amp; Fever</span>
          <div class="product-name">Fevedol-MF</div>
          <div class="product-composition">Paracetamol &amp; Ibuprofen Suspension</div>
          <div class="product-card-footer">
            <span><i class="fa fa-tag" style="color:#ff6b35;margin-right:4px;"></i>OTC</span>
            <a href="products.php">Details →</a>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ============================================================
     SERVICES
     ============================================================ -->
<section class="services-section section">
  <div class="container">
    <div class="text-center reveal">
      <div class="section-label">What We Offer</div>
      <h2 class="section-title">Our <span>Therapeutic</span> Specialties</h2>
      <p class="section-subtitle">Covering critical healthcare needs across four key areas — trusted by patients and practitioners.</p>
    </div>

    <div class="services-grid" style="margin-top:48px;">
      <div class="service-card reveal reveal-delay-1">
        <div class="service-icon">🫀</div>
        <div class="service-body">
          <h3 class="service-title">Gastro &amp; Liver Health</h3>
          <p class="service-desc">Advanced formulations for GERD, acid reflux, and digestive disorders. Our Remose range delivers precision relief.</p>
          <a href="products.php" class="service-link">View Products <i class="fa fa-arrow-right"></i></a>
        </div>
      </div>
      <div class="service-card reveal reveal-delay-2">
        <div class="service-icon">🫁</div>
        <div class="service-body">
          <h3 class="service-title">Respiratory Care</h3>
          <p class="service-desc">Effective solutions for asthma and COPD. Mubrin-100 provides sustained bronchodilation and mucolytic relief.</p>
          <a href="products.php" class="service-link">View Products <i class="fa fa-arrow-right"></i></a>
        </div>
      </div>
      <div class="service-card reveal reveal-delay-3">
        <div class="service-icon">💉</div>
        <div class="service-body">
          <h3 class="service-title">Pain &amp; Fever</h3>
          <p class="service-desc">Fast-acting antipyretic and analgesic formulations for adults and children. Safe, effective, accessible.</p>
          <a href="products.php" class="service-link">View Products <i class="fa fa-arrow-right"></i></a>
        </div>
      </div>
      <div class="service-card reveal reveal-delay-1">
        <div class="service-icon">☀️</div>
        <div class="service-body">
          <h3 class="service-title">Nutritional Supplements</h3>
          <p class="service-desc">Essential vitamins and minerals for overall wellness — supporting bone health, immunity, and growth.</p>
          <a href="products.php" class="service-link">View Products <i class="fa fa-arrow-right"></i></a>
        </div>
      </div>
      <div class="service-card reveal reveal-delay-2">
        <div class="service-icon">🔬</div>
        <div class="service-body">
          <h3 class="service-title">Quality Assurance</h3>
          <p class="service-desc">Rigorous multi-stage QC on every batch. GMP-compliant manufacturing, pharmacopoeial standards.</p>
          <a href="about.php" class="service-link">Learn More <i class="fa fa-arrow-right"></i></a>
        </div>
      </div>
      <div class="service-card reveal reveal-delay-3">
        <div class="service-icon">🚚</div>
        <div class="service-body">
          <h3 class="service-title">Distribution Network</h3>
          <p class="service-desc">Reliable supply chain across Gujarat and beyond — ensuring timely availability at pharmacies and hospitals.</p>
          <a href="contact.php" class="service-link">Partner With Us <i class="fa fa-arrow-right"></i></a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
     ABOUT SNIPPET
     ============================================================ -->
<section class="about-section section">
  <div class="container">
    <div class="about-grid">

      <div class="about-image-wrap reveal">
        <div class="about-image-box">
          <span class="about-big-icon">🏭</span>
          <p class="about-image-caption">Founded with a mission to make quality healthcare accessible to all — a trusted pharmaceutical name for over two decades.</p>
          <div style="display:flex;justify-content:center;gap:12px;margin-top:20px;position:relative;z-index:1;flex-wrap:wrap;">
            <span class="tag tag-cyan">GMP Certified</span>
            <span class="tag tag-violet">ISO Compliant</span>
            <span class="tag tag-green about-badge-inline">20+ Years of Trust</span>
          </div>
        </div>
        <div class="about-badge">
          <span class="about-badge-num">20+</span>
          <span class="about-badge-text">Years of Trust</span>
        </div>
      </div>

      <div class="reveal reveal-delay-2">
        <div class="section-label">Who We Are</div>
        <h2 class="section-title">Committed to <span>Quality</span> Healthcare</h2>
        <p class="section-subtitle" style="margin-bottom:28px;">
          After two decades in pharmaceuticals, we realized quality medicine at affordable prices is still critical. We exist to change that.
        </p>
        <div class="about-features">
          <div class="about-feature">
            <div class="about-feature-icon">🎯</div>
            <div>
              <div class="about-feature-title">Patient-First</div>
              <div class="about-feature-text">Safety and efficacy at the core of every product.</div>
            </div>
          </div>
          <div class="about-feature">
            <div class="about-feature-icon">🔬</div>
            <div>
              <div class="about-feature-title">Rigorous QA</div>
              <div class="about-feature-text">Multi-stage quality checks before market release.</div>
            </div>
          </div>
          <div class="about-feature">
            <div class="about-feature-icon">💰</div>
            <div>
              <div class="about-feature-title">Affordable</div>
              <div class="about-feature-text">Premium quality priced for real-world accessibility.</div>
            </div>
          </div>
          <div class="about-feature">
            <div class="about-feature-icon">🌐</div>
            <div>
              <div class="about-feature-title">Wide Reach</div>
              <div class="about-feature-text">Strong network across Gujarat, growing pan-India.</div>
            </div>
          </div>
        </div>
        <div style="margin-top:32px;">
          <a href="about.php" class="btn btn-primary">Learn More <i class="fa fa-arrow-right"></i></a>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ============================================================
     WHY CHOOSE US
     ============================================================ -->
<section class="why-section section" style="background:var(--bg-secondary);">
  <div class="container">
    <div class="text-center reveal">
      <div class="section-label">Why Iniciopharma</div>
      <h2 class="section-title">Your <span>Trusted</span> Healthcare Partner</h2>
      <p class="section-subtitle">We don't just manufacture medicines — we deliver trust, reliability, and care with every product.</p>
    </div>
    <div class="why-grid" style="margin-top:48px;">
      <div class="why-card reveal reveal-delay-1">
        <span class="why-card-icon">🏅</span>
        <h4 class="why-card-title">Certified Quality</h4>
        <p class="why-card-desc">GMP-compliant manufacturing meeting Indian Pharmacopoeia standards for maximum patient safety.</p>
      </div>
      <div class="why-card reveal reveal-delay-2">
        <span class="why-card-icon">💡</span>
        <h4 class="why-card-title">Innovation Driven</h4>
        <p class="why-card-desc">Constant R&amp;D investment keeps our formulations ahead of the curve.</p>
      </div>
      <div class="why-card reveal reveal-delay-3">
        <span class="why-card-icon">🤝</span>
        <h4 class="why-card-title">Strong Partnerships</h4>
        <p class="why-card-desc">Trusted by hundreds of hospitals, clinics, and pharmacies across Gujarat.</p>
      </div>
      <div class="why-card reveal reveal-delay-1">
        <span class="why-card-icon">⚡</span>
        <h4 class="why-card-title">Fast Delivery</h4>
        <p class="why-card-desc">Efficient logistics ensuring on-time supply to minimise disruption to care.</p>
      </div>
      <div class="why-card reveal reveal-delay-2">
        <span class="why-card-icon">💰</span>
        <h4 class="why-card-title">Affordable Pricing</h4>
        <p class="why-card-desc">Quality healthcare made accessible — essential medicines priced fairly for all.</p>
      </div>
      <div class="why-card reveal reveal-delay-3">
        <span class="why-card-icon">📞</span>
        <h4 class="why-card-title">24/7 Support</h4>
        <p class="why-card-desc">Round-the-clock assistance for healthcare professionals and partners.</p>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
     CTA
     ============================================================ -->
<section class="cta-section">
  <div class="cta-bg"></div>
  <div class="container">
    <div class="cta-inner reveal">
      <div class="section-label" style="justify-content:center;">Get In Touch</div>
      <h2 class="cta-title">Ready to Partner with <span>Iniciopharma?</span></h2>
      <p class="cta-subtitle">Whether you're a healthcare professional, pharmacy, or hospital — we'd love to collaborate.</p>
      <div class="cta-actions">
        <a href="contact.php" class="btn btn-primary">
          Contact Us Today <i class="fa fa-arrow-right"></i>
        </a>
        <a href="tel:+917523076895" class="btn btn-outline">
          <i class="fa fa-phone"></i> +91 75230 76895
        </a>
      </div>
    </div>
  </div>
</section>

<?php require_once 'includes/footer.php'; ?>
