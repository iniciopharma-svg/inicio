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
      <div id="pdf-container" style="padding:24px 0;display:flex;flex-direction:column;align-items:center;gap:24px;">
        <p id="pdf-loading" style="color:var(--text-muted);padding:40px;">Loading PDF...</p>
      </div>
    </div>

  </div>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.11.174/pdf.min.js"></script>
<script>
  pdfjsLib.GlobalWorkerOptions.workerSrc = 'https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.11.174/pdf.worker.min.js';

  const container = document.getElementById('pdf-container');
  const loading   = document.getElementById('pdf-loading');

  pdfjsLib.getDocument('assets/docs/visual.pdf').promise.then(function(pdf) {
    loading.remove();
    const totalPages = pdf.numPages;
    const containerWidth = container.offsetWidth - 48;

    for (let pageNum = 1; pageNum <= totalPages; pageNum++) {
      pdf.getPage(pageNum).then(function(page) {
        const baseViewport = page.getViewport({ scale: 1 });
        const scale = containerWidth / baseViewport.width;
        const viewport = page.getViewport({ scale: scale });

        const canvas = document.createElement('canvas');
        canvas.width  = viewport.width;
        canvas.height = viewport.height;
        canvas.style.width        = '100%';
        canvas.style.height       = 'auto';
        canvas.style.display      = 'block';
        canvas.style.borderRadius = '4px';
        canvas.style.boxShadow    = '0 4px 20px rgba(0,0,0,0.4)';

        container.appendChild(canvas);

        page.render({
          canvasContext: canvas.getContext('2d'),
          viewport: viewport
        });
      });
    }
  }).catch(function() {
    loading.innerHTML = '<i class="fa fa-exclamation-circle" style="color:#ff6b6b;margin-right:8px;"></i>PDF not found. Please upload visual.pdf to assets/docs/';
  });
</script>

<?php require_once 'includes/footer.php'; ?>
