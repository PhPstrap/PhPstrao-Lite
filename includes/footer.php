</main>
<footer class="footer mt-auto py-5 <?= $footer_style === 'dark' ? 'bg-dark text-light' : 'bg-light' ?>">
  <div class="container">
    <div class="row g-4">
      <div class="col-md-6">
        <h5 class="fw-bold"><?= e($site_name) ?></h5>
        <p class="mb-0 text-opacity"><?= e($site_description) ?></p>
      </div>
      <div class="col-md-3">
        <h6>Pages</h6>
        <ul class="list-unstyled small">
          <li><a href="/privacy">Privacy Policy</a></li>
          <li><a href="/terms">Terms</a></li>
          <li><a href="/sitemap">Sitemap</a></li>
        </ul>
      </div>
      <div class="col-md-3">
        <h6>Contact</h6>
        <p class="small mb-0"><a href="mailto:<?= e($site_email) ?>"><?= e($site_email) ?></a></p>
      </div>
    </div>
    <hr>
    <p class="small mb-0">&copy; <?= date('Y') ?> <?= e($site_name) ?>. Built with PhPstrap Lite.</p>
  </div>
</footer>
<script src="/assets/js/bootstrap.bundle.min.js"></script>
<script src="/assets/js/main.js"></script>
</body>
</html>
