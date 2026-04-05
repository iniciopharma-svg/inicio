<?php
$page       = 'visual';
$page_title = 'Visual Aid';
$meta_desc  = 'Iniciopharma Visual Aid — product information and presentation material.';
require_once 'includes/header.php';
?>

<!-- PAGE HERO -->
<section class="page-hero">
  <div class="container">
    <div class="section-label" style="justify-content:center;">Resources</div>
    <h1 class="page-hero-title">Visual <span>Aid</span></h1>
    <p class="page-hero-sub">Product presentation and reference material for healthcare professionals.</p>
  </div>
</section>

<!-- PDF VIEWER -->
<section class="section" style="padding-top:0;">
  <div class="container">

    <div class="visual-aid-wrap reveal">
      <div class="visual-aid-toolbar">
        <span class="visual-aid-title"><i class="fa fa-file-pdf" style="color:var(--cyan);margin-right:8px;"></i>Iniciopharma Visual Aid</span>
        <a href="assets/docs/visual.pdf" download class="btn btn-outline" style="padding:8px 18px;font-size:13px;">
          <i class="fa fa-download"></i> Download PDF
        </a>
      </div>
      <div class="visual-aid-viewer">
        <iframe
          src="assets/docs/visual.pdf#view=FitH&scrollbar=1&toolbar=1&navpanes=0"
          width="100%"
          height="100%"
          title="Iniciopharma Visual Aid">
        </iframe>
      </div>
    </div>

  </div>
</section>

<?php require_once 'includes/footer.php'; ?>
