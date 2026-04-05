<?php
$page       = 'careers';
$page_title = 'Careers';
$meta_desc  = 'Join the Iniciopharma team — explore career opportunities in pharmaceuticals, sales, and healthcare in Vadodara, Gujarat.';
require_once 'includes/header.php';

$jobs = [
  [
    'title'    => 'Medical Sales Representative',
    'dept'     => 'Sales & Marketing',
    'location' => 'Vadodara, Gujarat',
    'type'     => 'Full-time',
    'exp'      => '1-3 Years',
    'desc'     => 'Promote Iniciopharma\'s product range to doctors, hospitals, and pharmacies across the assigned territory. Build strong relationships with healthcare professionals.',
  ],
  [
    'title'    => 'Quality Control Analyst',
    'dept'     => 'Quality Assurance',
    'location' => 'Vadodara, Gujarat',
    'type'     => 'Full-time',
    'exp'      => '2-4 Years',
    'desc'     => 'Perform analytical testing of raw materials, in-process samples, and finished products. Ensure compliance with GMP and pharmacopoeial standards.',
  ],
  [
    'title'    => 'Production Pharmacist',
    'dept'     => 'Manufacturing',
    'location' => 'Vadodara, Gujarat',
    'type'     => 'Full-time',
    'exp'      => '1-3 Years',
    'desc'     => 'Oversee pharmaceutical production operations, ensure batch documentation is accurate, and maintain product quality standards throughout the manufacturing process.',
  ],
  [
    'title'    => 'Regulatory Affairs Executive',
    'dept'     => 'Regulatory',
    'location' => 'Vadodara, Gujarat',
    'type'     => 'Full-time',
    'exp'      => '2-5 Years',
    'desc'     => 'Manage drug licensing, product registrations, and liaise with CDSCO/State FDA. Prepare and maintain regulatory dossiers and submissions.',
  ],
  [
    'title'    => 'Marketing Executive',
    'dept'     => 'Marketing',
    'location' => 'Vadodara / Remote',
    'type'     => 'Full-time',
    'exp'      => '1-3 Years',
    'desc'     => 'Plan and execute marketing campaigns, manage digital presence, and create promotional materials for our pharmaceutical product portfolio.',
  ],
  [
    'title'    => 'Warehouse &amp; Logistics Executive',
    'dept'     => 'Supply Chain',
    'location' => 'Vadodara, Gujarat',
    'type'     => 'Full-time',
    'exp'      => '1-2 Years',
    'desc'     => 'Manage inventory, coordinate dispatches, ensure proper cold-chain and storage conditions, and maintain accurate stock records.',
  ],
];
?>

<!-- PAGE HERO -->
<section class="page-hero">
  <div class="container">
    <div class="breadcrumb">
      <a href="index.php">Home</a>
      <span class="breadcrumb-sep">/</span>
      <span>Careers</span>
    </div>
    <div class="section-label" style="justify-content:center;">Join Our Team</div>
    <h1 class="page-hero-title">Careers at <span>Iniciopharma</span></h1>
    <p class="page-hero-sub">Be part of a team that's making quality healthcare accessible to all. Grow your career while making a real difference.</p>
  </div>
</section>

<!-- ============================================================
     WHY WORK WITH US
     ============================================================ -->
<section class="section" style="background:var(--bg-secondary);">
  <div class="container">
    <div class="text-center reveal" style="margin-bottom:48px;">
      <div class="section-label">Life at Iniciopharma</div>
      <h2 class="section-title">Why Work <span>With Us</span></h2>
      <p class="section-subtitle">We invest in our people as much as we invest in our products.</p>
    </div>

    <div class="perks-grid">
      <div class="perk-card reveal reveal-delay-1">
        <span class="perk-icon">📈</span>
        <div class="perk-title">Career Growth</div>
        <div class="perk-text">Structured learning paths, performance reviews, and promotions based on merit and achievement.</div>
      </div>
      <div class="perk-card reveal reveal-delay-2">
        <span class="perk-icon">🏥</span>
        <div class="perk-title">Health Benefits</div>
        <div class="perk-text">Comprehensive medical insurance for employees and their families — because we practice what we preach.</div>
      </div>
      <div class="perk-card reveal reveal-delay-3">
        <span class="perk-icon">🎓</span>
        <div class="perk-title">Training &amp; Development</div>
        <div class="perk-text">Regular industry workshops, certifications, and knowledge-sharing sessions to keep you ahead.</div>
      </div>
      <div class="perk-card reveal reveal-delay-4">
        <span class="perk-icon">🤝</span>
        <div class="perk-title">Collaborative Culture</div>
        <div class="perk-text">Open, transparent, and supportive work environment where every team member's input is valued.</div>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
     JOB LISTINGS
     ============================================================ -->
<section class="section">
  <div class="container">
    <div class="text-center reveal" style="margin-bottom:48px;">
      <div class="section-label">Open Positions</div>
      <h2 class="section-title">Current <span>Openings</span></h2>
      <p class="section-subtitle">Find a role that matches your skills and passion for healthcare.</p>
    </div>

    <?php foreach ($jobs as $i => $job): ?>
    <div class="job-listing reveal reveal-delay-<?php echo ($i % 3) + 1; ?>">
      <div style="flex:1;">
        <h3 class="job-title-text"><?php echo htmlspecialchars($job['title']); ?></h3>
        <p style="font-size:13px; color:var(--text-secondary); line-height:1.7; margin-bottom:12px; max-width:600px;"><?php echo htmlspecialchars($job['desc']); ?></p>
        <div class="job-meta">
          <span><i class="fa fa-briefcase"></i> <?php echo htmlspecialchars($job['dept']); ?></span>
          <span><i class="fa fa-map-marker-alt"></i> <?php echo htmlspecialchars($job['location']); ?></span>
          <span><i class="fa fa-clock"></i> <?php echo htmlspecialchars($job['type']); ?></span>
          <span><i class="fa fa-star"></i> <?php echo htmlspecialchars($job['exp']); ?></span>
        </div>
      </div>
      <div style="flex-shrink:0;">
        <a href="contact.php" class="btn btn-outline" style="white-space:nowrap;">
          Apply Now <i class="fa fa-arrow-right"></i>
        </a>
      </div>
    </div>
    <?php endforeach; ?>

    <!-- General Application -->
    <div class="glass-card reveal" style="padding:36px; margin-top:40px; text-align:center;">
      <span style="font-size:40px; display:block; margin-bottom:16px;">💼</span>
      <h3 style="font-family:var(--font-heading); font-size:20px; font-weight:700; color:var(--text-primary); margin-bottom:12px;">Don't See Your Role?</h3>
      <p style="font-size:14px; color:var(--text-secondary); max-width:500px; margin:0 auto 24px; line-height:1.8;">
        We're always looking for talented, passionate individuals. Send us your resume and we'll keep you in mind for future openings.
      </p>
      <a href="mailto:iniciopharmaceuticals@gmail.com?subject=General Application" class="btn btn-primary">
        <i class="fa fa-envelope"></i> Send Your Resume
      </a>
    </div>
  </div>
</section>

<!-- ============================================================
     PROCESS SECTION
     ============================================================ -->
<section class="section" style="background:var(--bg-secondary);">
  <div class="container">
    <div class="text-center reveal" style="margin-bottom:48px;">
      <div class="section-label">Application Process</div>
      <h2 class="section-title">How to <span>Apply</span></h2>
    </div>

    <div style="display:grid; grid-template-columns:repeat(4,1fr); gap:24px;">
      <?php
      $steps = [
        ['num'=>'01', 'icon'=>'📝', 'title'=>'Apply',       'desc'=>'Submit your resume to our email or through the contact form.'],
        ['num'=>'02', 'icon'=>'📞', 'title'=>'Screening',   'desc'=>'Our HR team reviews your application and contacts shortlisted candidates.'],
        ['num'=>'03', 'icon'=>'🗣️', 'title'=>'Interview',   'desc'=>'One or two rounds of interviews with the team and management.'],
        ['num'=>'04', 'icon'=>'🎉', 'title'=>'Offer',       'desc'=>'Selected candidates receive a formal offer letter and onboarding details.'],
      ];
      foreach ($steps as $i => $step):
      ?>
      <div class="glass-card reveal reveal-delay-<?php echo $i+1; ?>" style="padding:28px; text-align:center;">
        <div style="font-family:var(--font-heading); font-size:32px; font-weight:800; color:var(--cyan-dim); -webkit-text-stroke:1px var(--cyan); margin-bottom:12px;"><?php echo $step['num']; ?></div>
        <span style="font-size:32px; display:block; margin-bottom:12px;"><?php echo $step['icon']; ?></span>
        <div style="font-family:var(--font-heading); font-size:14px; font-weight:600; color:var(--text-primary); margin-bottom:8px;"><?php echo $step['title']; ?></div>
        <div style="font-size:13px; color:var(--text-secondary); line-height:1.7;"><?php echo $step['desc']; ?></div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="cta-section">
  <div class="cta-bg"></div>
  <div class="container">
    <div class="cta-inner reveal">
      <h2 class="cta-title">Ready to Make a <span>Difference?</span></h2>
      <p class="cta-subtitle">Join Iniciopharma and be part of a mission that matters — quality healthcare for every life.</p>
      <div class="cta-actions">
        <a href="mailto:iniciopharmaceuticals@gmail.com?subject=Job Application" class="btn btn-primary">
          <i class="fa fa-envelope"></i> Send Your Application
        </a>
        <a href="contact.php" class="btn btn-outline">Contact HR Team</a>
      </div>
    </div>
  </div>
</section>

<?php require_once 'includes/footer.php'; ?>
