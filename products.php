<?php
$page       = 'products';
$page_title = 'Our Products';
$meta_desc  = 'Explore Iniciopharma\'s full range of pharmaceutical products — Remose, Mubrin, Fevedol, Vitamin D3, Skal-Up Syrup and more.';
require_once 'includes/header.php';

$products = [
  [
    'name'        => 'Remose-D',
    'image'       => 'assets/images/products/remose-d.png',
    'composition' => 'Esomeprazole Gastro Resistant (E/C) & Domperidone (S/R) Capsules',
    'category'    => 'gastro',
    'cat_label'   => 'Gastro & Liver',
    'cat_class'   => 'cat-gastro',
    'type'        => 'Capsules',
    'schedule'    => 'Schedule H',
    'desc'        => 'A combination capsule offering dual action — Esomeprazole reduces stomach acid production while Domperidone improves gastric motility, providing effective relief from GERD, acid reflux, and associated nausea.',
    'indications' => 'GERD, Acid Reflux, Nausea, Gastric Motility Disorders',
    'storage'     => 'Store below 30°C, protect from moisture',
  ],
  [
    'name'        => 'Mubrin-100',
    'image'       => 'assets/images/products/mubrin-100.png',
    'composition' => 'Acebrophylline Capsules 100 mg',
    'category'    => 'respiratory',
    'cat_label'   => 'Respiratory',
    'cat_class'   => 'cat-resp',
    'type'        => 'Capsules',
    'schedule'    => 'Schedule H',
    'desc'        => 'Acebrophylline combines the bronchodilator properties of theophylline with mucolytic activity, providing comprehensive management of chronic obstructive airway diseases, bronchitis, and asthma.',
    'indications' => 'Asthma, COPD, Chronic Bronchitis, Airway Obstruction',
    'storage'     => 'Store below 25°C in a dry place',
  ],
  [
    'name'        => 'Remose-L',
    'image'       => 'assets/images/products/remos-l.png',
    'composition' => 'Esomeprazole Enteric Coated & Levosulpiride Sustained Release Capsules',
    'category'    => 'gastro',
    'cat_label'   => 'Gastro & Liver',
    'cat_class'   => 'cat-gastro',
    'type'        => 'Capsules',
    'schedule'    => 'Schedule H',
    'desc'        => 'Combines Esomeprazole\'s acid suppression with Levosulpiride\'s prokinetic and antiemetic effects for comprehensive gastroesophageal reflux management with improved gastric emptying.',
    'indications' => 'GERD, Functional Dyspepsia, Bloating, Gastric Emptying Disorders',
    'storage'     => 'Store below 30°C, protect from moisture',
  ],
  [
    'name'        => 'Vitamin D3',
    'image'       => 'assets/images/products/vitamin-d3.png',
    'composition' => 'Cholecalciferol Oral Solution',
    'category'    => 'nutrition',
    'cat_label'   => 'Nutritional',
    'cat_class'   => 'cat-nutrition',
    'type'        => 'Oral Solution',
    'schedule'    => 'OTC',
    'desc'        => 'High-potency Vitamin D3 (Cholecalciferol) oral solution for correcting Vitamin D deficiency. Supports bone mineralization, immune function, calcium absorption, and overall metabolic health.',
    'indications' => 'Vitamin D Deficiency, Rickets, Osteoporosis, Immune Support',
    'storage'     => 'Store at room temperature, away from direct sunlight',
  ],
  [
    'name'        => 'Remose-40',
    'image'       => 'assets/images/products/remose-40.png',
    'composition' => 'Pantoprazole Tablets 40 mg',
    'category'    => 'gastro',
    'cat_label'   => 'Gastro & Liver',
    'cat_class'   => 'cat-gastro',
    'type'        => 'Tablets',
    'schedule'    => 'Schedule H',
    'desc'        => 'A proton pump inhibitor (PPI) that significantly reduces gastric acid secretion. Effective for treatment of peptic ulcer, GERD, and Zollinger-Ellison syndrome with a proven safety profile.',
    'indications' => 'Peptic Ulcer, GERD, H. pylori Eradication, Zollinger-Ellison Syndrome',
    'storage'     => 'Store below 30°C in a dry place',
  ],
  [
    'name'        => 'Fevedol-MF-125',
    'image'       => 'assets/images/products/fevedol-mf-125.png',
    'composition' => 'Paracetamol & Ibuprofen Suspension 125 mg',
    'category'    => 'pain',
    'cat_label'   => 'Pain & Fever',
    'cat_class'   => 'cat-pain',
    'type'        => 'Suspension',
    'schedule'    => 'OTC',
    'desc'        => 'Paediatric suspension combining Paracetamol\'s antipyretic properties with Ibuprofen\'s anti-inflammatory action, providing fast and effective fever and pain relief in children.',
    'indications' => 'Paediatric Fever, Mild-Moderate Pain, Post-Vaccination Fever',
    'storage'     => 'Store below 25°C, keep away from children',
  ],
  [
    'name'        => 'Fevedol-MF',
    'image'       => 'assets/images/products/fevedol-mf.png',
    'composition' => 'Paracetamol & Ibuprofen Suspension',
    'category'    => 'pain',
    'cat_label'   => 'Pain & Fever',
    'cat_class'   => 'cat-pain',
    'type'        => 'Suspension',
    'schedule'    => 'OTC',
    'desc'        => 'Standard strength suspension for both adults and children. Dual-action formula provides rapid relief from fever, headache, body pain, and inflammatory conditions.',
    'indications' => 'Fever, Headache, Body Pain, Inflammatory Pain',
    'storage'     => 'Store below 25°C',
  ],
  [
    'name'        => 'Skal-Up Syrup',
    'image'       => 'assets/images/products/skal-up-syrup.png',
    'composition' => 'Multivitamin, Multimineral & Amino Acid Syrup',
    'category'    => 'nutrition',
    'cat_label'   => 'Nutritional',
    'cat_class'   => 'cat-nutrition',
    'type'        => 'Syrup',
    'schedule'    => 'OTC',
    'desc'        => 'Skal-Up Syrup is a comprehensive nutritional supplement formulated with essential vitamins, minerals, and amino acids to support healthy growth, energy levels, and overall well-being in children and adults.',
    'indications' => 'Nutritional Deficiency, Growth Support, General Weakness, Fatigue',
    'storage'     => 'Store below 25°C, keep away from direct sunlight',
  ],
];
?>

<!-- PAGE HERO -->
<section class="page-hero">
  <div class="container">
    <div class="breadcrumb">
      <a href="index.php">Home</a>
      <span class="breadcrumb-sep">/</span>
      <span>Products</span>
    </div>
    <div class="section-label" style="justify-content:center;">Our Portfolio</div>
    <h1 class="page-hero-title">Our <span>Products</span></h1>
    <p class="page-hero-sub">A comprehensive range of pharmaceutical formulations across key therapeutic areas — quality you can trust, pricing that's fair.</p>
  </div>
</section>

<!-- ============================================================
     PRODUCTS
     ============================================================ -->
<section class="section">
  <div class="container">

    <!-- Filter Tabs -->
    <div class="filter-tabs reveal" style="margin-bottom:48px;">
      <button class="filter-tab active" data-filter="all">All Products</button>
      <button class="filter-tab" data-filter="gastro">Gastro &amp; Liver</button>
      <button class="filter-tab" data-filter="respiratory">Respiratory</button>
      <button class="filter-tab" data-filter="pain">Pain &amp; Fever</button>
      <button class="filter-tab" data-filter="nutrition">Nutrition</button>
    </div>

    <div class="products-full-grid">
      <?php foreach ($products as $i => $p): ?>
      <div class="product-full-card reveal reveal-delay-<?php echo ($i % 3) + 1; ?>" data-category="<?php echo $p['category']; ?>">
        <div class="product-card-top">
          <div class="product-icon-wrap" style="width:120px;height:120px;margin:0 auto 16px;padding:8px;background:#fff;border-radius:var(--radius);">
            <img src="<?php echo htmlspecialchars($p['image']); ?>" alt="<?php echo htmlspecialchars($p['name']); ?>" style="width:100%;height:100%;object-fit:contain;" />
          </div>
          <span class="product-cat-badge <?php echo $p['cat_class']; ?>"><?php echo $p['cat_label']; ?></span>
        </div>
        <div class="product-card-body">
          <h3 class="product-full-name"><?php echo htmlspecialchars($p['name']); ?></h3>
          <p class="product-full-comp"><?php echo htmlspecialchars($p['composition']); ?></p>
          <p class="product-full-desc"><?php echo htmlspecialchars($p['desc']); ?></p>

          <div class="product-detail-row">
            <span class="product-detail-key">Dosage Form</span>
            <span class="product-detail-val"><?php echo htmlspecialchars($p['type']); ?></span>
          </div>
          <div class="product-detail-row">
            <span class="product-detail-key">Schedule</span>
            <span class="product-detail-val"><?php echo htmlspecialchars($p['schedule']); ?></span>
          </div>
          <div class="product-detail-row">
            <span class="product-detail-key">Indications</span>
            <span class="product-detail-val" style="text-align:right; max-width:200px;"><?php echo htmlspecialchars($p['indications']); ?></span>
          </div>
          <div class="product-detail-row">
            <span class="product-detail-key">Storage</span>
            <span class="product-detail-val" style="text-align:right; max-width:200px;"><?php echo htmlspecialchars($p['storage']); ?></span>
          </div>

          <a href="contact.php" class="btn btn-outline" style="width:100%; justify-content:center; margin-top:20px;">
            Enquire About This Product <i class="fa fa-arrow-right"></i>
          </a>
        </div>
      </div>
      <?php endforeach; ?>
    </div>

  </div>
</section>

<!-- Disclaimer -->
<section class="section-sm" style="background: var(--bg-secondary); border-top: 1px solid var(--border);">
  <div class="container">
    <div class="glass-card" style="padding:28px 32px; display:flex; gap:16px; align-items:flex-start;">
      <span style="font-size:24px; flex-shrink:0;">⚠️</span>
      <div>
        <div style="font-family:var(--font-heading); font-size:13px; font-weight:600; color:var(--cyan); margin-bottom:8px; letter-spacing:1px; text-transform:uppercase;">Medical Disclaimer</div>
        <p style="font-size:13px; color:var(--text-secondary); line-height:1.8;">All products listed are prescription or OTC medicines as indicated. Always consult a qualified healthcare professional before use. Product information is for reference only. Iniciopharma does not recommend self-medication.</p>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="cta-section">
  <div class="cta-bg"></div>
  <div class="container">
    <div class="cta-inner reveal">
      <h2 class="cta-title">Need More <span>Information?</span></h2>
      <p class="cta-subtitle">Contact our team for detailed product information, samples, or distribution enquiries.</p>
      <div class="cta-actions">
        <a href="contact.php" class="btn btn-primary">Get In Touch <i class="fa fa-arrow-right"></i></a>
        <a href="tel:+917523076895" class="btn btn-outline"><i class="fa fa-phone"></i> +91 75230 76895</a>
      </div>
    </div>
  </div>
</section>

<?php require_once 'includes/footer.php'; ?>
