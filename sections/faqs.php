<section class="section-padding">
  <div class="container">
    <div class="row justify-content-center"><div class="col-lg-8">
      <h2 class="fw-bold text-center mb-4">FAQs</h2>
      <div class="accordion" id="faqAccordion">
        <?php $faqs = [
          ['q'=>'Does PhPstrap Lite need a database?', 'a'=>'No. It is designed for static PHP pages and flat-file content.'],
          ['q'=>'Can I use it for SEO landing pages?', 'a'=>'Yes. It includes page meta, canonical URLs, article meta files, and a sitemap helper.'],
          ['q'=>'Can I add ads or analytics?', 'a'=>'Yes. Enable ads or add a Google Analytics ID in includes/site-config.php.'],
        ]; foreach ($faqs as $i => $faq): ?>
        <div class="accordion-item">
          <h2 class="accordion-header"><button class="accordion-button <?= $i ? 'collapsed' : '' ?>" type="button" data-bs-toggle="collapse" data-bs-target="#faq<?= $i ?>"><?= e($faq['q']) ?></button></h2>
          <div id="faq<?= $i ?>" class="accordion-collapse collapse <?= !$i ? 'show' : '' ?>" data-bs-parent="#faqAccordion"><div class="accordion-body"><?= e($faq['a']) ?></div></div>
        </div>
        <?php endforeach; ?>
      </div>
    </div></div>
  </div>
</section>
