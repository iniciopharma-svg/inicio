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

<!-- PDF PAGES -->
<section class="section" style="padding-top:0;">
  <div class="container">

    <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:20px;flex-wrap:wrap;gap:12px;">
      <span style="font-family:var(--font-heading);font-weight:600;font-size:15px;color:var(--text-primary);">
        <i class="fa fa-file-pdf" style="color:var(--cyan);margin-right:8px;"></i>Iniciopharma Visual Aid
      </span>
      <a href="assets/docs/visual.pdf" download class="btn btn-outline" style="padding:8px 18px;font-size:13px;">
        <i class="fa fa-download"></i> Download PDF
      </a>
    </div>

    <div id="pdf-container" style="display:flex;flex-direction:column;gap:24px;width:100%;">
      <p id="pdf-loading" style="color:var(--text-muted);padding:40px;text-align:center;">Loading PDF...</p>
    </div>

  </div>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.11.174/pdf.min.js"></script>
<script>
  console.log('VISUAL AID VERSION: 2026-04-05-v3');
  pdfjsLib.GlobalWorkerOptions.workerSrc = 'https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.11.174/pdf.worker.min.js';

  window.addEventListener('load', function() {
    const container = document.getElementById('pdf-container');
    const loading   = document.getElementById('pdf-loading');
    const containerWidth = container.getBoundingClientRect().width;

    pdfjsLib.getDocument('assets/docs/visual.pdf').promise.then(function(pdf) {
      loading.remove();
      const totalPages = pdf.numPages;
      const renders = [];

      for (let pageNum = 1; pageNum <= totalPages; pageNum++) {
        renders.push(
          pdf.getPage(pageNum).then(function(page) {
            const baseViewport = page.getViewport({ scale: 1 });
            const scale = containerWidth / baseViewport.width;
            const viewport = page.getViewport({ scale: scale });

            const canvas = document.createElement('canvas');
            canvas.width  = viewport.width;
            canvas.height = viewport.height;
            canvas.style.width   = '100%';
            canvas.style.display = 'block';
            canvas.style.borderRadius = '6px';
            canvas.style.boxShadow = '0 4px 24px rgba(0,0,0,0.5)';
            canvas.dataset.page = pageNum;

            container.appendChild(canvas);

            return page.render({
              canvasContext: canvas.getContext('2d'),
              viewport: viewport
            }).promise;
          })
        );
      }
    }).catch(function() {
      loading.innerHTML = '<i class="fa fa-exclamation-circle" style="color:#ff6b6b;margin-right:8px;"></i>PDF not found. Please upload visual.pdf to assets/docs/';
    });
  });
</script>

<?php require_once 'includes/footer.php'; ?>
