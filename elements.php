<?php
$page_title = 'Elements';
$page_description = 'Bootstrap 5 elements and components reference for PhPstrap Lite.';
$page_slug = 'elements';
include __DIR__ . '/includes/header.php';
?>

<div class="container py-5">

  <!-- Page header -->
  <div class="mb-5 pb-4 border-bottom">
    <h1 class="fw-bold">Bootstrap 5 Elements</h1>
    <p class="lead text-muted">A reference of all available components, utilities, and form controls.</p>
    <div class="d-flex flex-wrap gap-2">
      <?php $sections = ['typography','colours','buttons','alerts','badges','cards','accordion','forms','tables','list-groups','navs','progress','spinners','pagination','breadcrumb','modal','grid']; ?>
      <?php foreach ($sections as $s): ?>
        <a href="#<?= $s ?>" class="badge text-bg-secondary text-decoration-none"><?= ucfirst(str_replace('-', ' ', $s)) ?></a>
      <?php endforeach; ?>
    </div>
  </div>

  <!-- ================================================
       TYPOGRAPHY
  ================================================ -->
  <section id="typography" class="mb-5 pb-4 border-bottom">
    <h2 class="fw-bold mb-4">Typography</h2>

    <h4 class="text-muted mb-3">Headings</h4>
    <h1>h1 — The quick brown fox</h1>
    <h2>h2 — The quick brown fox</h2>
    <h3>h3 — The quick brown fox</h3>
    <h4>h4 — The quick brown fox</h4>
    <h5>h5 — The quick brown fox</h5>
    <h6>h6 — The quick brown fox</h6>

    <h4 class="text-muted mt-4 mb-3">Display headings</h4>
    <p class="display-1">Display 1</p>
    <p class="display-3">Display 3</p>
    <p class="display-5">Display 5</p>

    <h4 class="text-muted mt-4 mb-3">Body text</h4>
    <p class="lead">Lead paragraph — slightly larger intro text for page openers.</p>
    <p>Regular paragraph. The quick brown fox jumps over the lazy dog. Use paragraphs for body copy and content blocks throughout the page.</p>
    <p><small>Small text using <code>&lt;small&gt;</code> or <code>.small</code>.</small></p>

    <h4 class="text-muted mt-4 mb-3">Inline elements</h4>
    <p>
      <strong>Bold</strong> &nbsp;
      <em>Italic</em> &nbsp;
      <u>Underline</u> &nbsp;
      <s>Strikethrough</s> &nbsp;
      <mark>Highlighted</mark> &nbsp;
      <abbr title="HyperText Markup Language">HTML</abbr> &nbsp;
      <kbd>Ctrl+C</kbd> &nbsp;
      <code>inline code</code>
    </p>

    <h4 class="text-muted mt-4 mb-3">Blockquote</h4>
    <blockquote class="blockquote border-start border-4 border-primary ps-4">
      <p class="mb-1">Build simple, fast, maintainable websites without the overhead of a full CMS.</p>
      <footer class="blockquote-footer">PhPstrap Lite</footer>
    </blockquote>

    <h4 class="text-muted mt-4 mb-3">Lists</h4>
    <div class="row g-4">
      <div class="col-md-4">
        <p class="fw-semibold mb-1">Unordered</p>
        <ul>
          <li>Item one</li>
          <li>Item two</li>
          <li>Item three</li>
        </ul>
      </div>
      <div class="col-md-4">
        <p class="fw-semibold mb-1">Ordered</p>
        <ol>
          <li>First item</li>
          <li>Second item</li>
          <li>Third item</li>
        </ol>
      </div>
      <div class="col-md-4">
        <p class="fw-semibold mb-1">Unstyled</p>
        <ul class="list-unstyled">
          <li>No bullets</li>
          <li>Clean layout</li>
          <li>For custom lists</li>
        </ul>
      </div>
    </div>

    <h4 class="text-muted mt-4 mb-3">Code blocks</h4>
    <pre class="bg-body-secondary rounded p-3"><code>&lt;?php
$page_title = 'My Page';
include 'includes/header.php';
?&gt;</code></pre>
  </section>

  <!-- ================================================
       COLOURS
  ================================================ -->
  <section id="colours" class="mb-5 pb-4 border-bottom">
    <h2 class="fw-bold mb-4">Colours</h2>

    <h4 class="text-muted mb-3">Background colours</h4>
    <div class="d-flex flex-wrap gap-2 mb-4">
      <?php foreach (['primary','secondary','success','danger','warning','info','light','dark','body-secondary','body-tertiary'] as $c): ?>
        <div class="p-3 rounded text-center bg-<?= $c ?> <?= in_array($c, ['light','body-secondary','body-tertiary','warning','info']) ? 'text-dark' : 'text-white' ?>" style="min-width:110px;font-size:.8rem">.bg-<?= $c ?></div>
      <?php endforeach; ?>
    </div>

    <h4 class="text-muted mb-3">Text colours</h4>
    <div class="d-flex flex-wrap gap-3">
      <?php foreach (['primary','secondary','success','danger','warning','info','dark','muted','body'] as $c): ?>
        <span class="text-<?= $c ?>">.text-<?= $c ?></span>
      <?php endforeach; ?>
    </div>
  </section>

  <!-- ================================================
       BUTTONS
  ================================================ -->
  <section id="buttons" class="mb-5 pb-4 border-bottom">
    <h2 class="fw-bold mb-4">Buttons</h2>

    <h4 class="text-muted mb-3">Solid variants</h4>
    <div class="d-flex flex-wrap gap-2 mb-4">
      <?php foreach (['primary','secondary','success','danger','warning','info','light','dark'] as $v): ?>
        <button class="btn btn-<?= $v ?>"><?= ucfirst($v) ?></button>
      <?php endforeach; ?>
    </div>

    <h4 class="text-muted mb-3">Outline variants</h4>
    <div class="d-flex flex-wrap gap-2 mb-4">
      <?php foreach (['primary','secondary','success','danger','warning','info','dark'] as $v): ?>
        <button class="btn btn-outline-<?= $v ?>"><?= ucfirst($v) ?></button>
      <?php endforeach; ?>
    </div>

    <h4 class="text-muted mb-3">Sizes &amp; states</h4>
    <div class="d-flex flex-wrap align-items-center gap-2 mb-4">
      <button class="btn btn-primary btn-lg">Large</button>
      <button class="btn btn-primary">Default</button>
      <button class="btn btn-primary btn-sm">Small</button>
      <button class="btn btn-primary" disabled>Disabled</button>
      <button class="btn btn-primary">
        <span class="spinner-border spinner-border-sm me-2" role="status" aria-hidden="true"></span>Loading…
      </button>
    </div>

    <h4 class="text-muted mb-3">With icons</h4>
    <div class="d-flex flex-wrap gap-2 mb-4">
      <button class="btn btn-primary"><i class="fa-solid fa-paper-plane me-2"></i>Send</button>
      <button class="btn btn-success"><i class="fa-solid fa-check me-2"></i>Confirm</button>
      <button class="btn btn-danger"><i class="fa-solid fa-trash me-2"></i>Delete</button>
      <button class="btn btn-outline-secondary"><i class="fa-solid fa-download me-2"></i>Download</button>
    </div>

    <h4 class="text-muted mb-3">Button group</h4>
    <div class="btn-group" role="group">
      <button class="btn btn-outline-primary">Left</button>
      <button class="btn btn-outline-primary">Middle</button>
      <button class="btn btn-outline-primary">Right</button>
    </div>
  </section>

  <!-- ================================================
       ALERTS
  ================================================ -->
  <section id="alerts" class="mb-5 pb-4 border-bottom">
    <h2 class="fw-bold mb-4">Alerts</h2>
    <?php foreach (['primary','secondary','success','danger','warning','info','light','dark'] as $v): ?>
      <div class="alert alert-<?= $v ?>" role="alert">
        <strong><?= ucfirst($v) ?> alert —</strong> Some helpful message or feedback for the user.
      </div>
    <?php endforeach; ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>Dismissible alert</strong> — Click the X to close this notification.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  </section>

  <!-- ================================================
       BADGES
  ================================================ -->
  <section id="badges" class="mb-5 pb-4 border-bottom">
    <h2 class="fw-bold mb-4">Badges</h2>
    <div class="d-flex flex-wrap gap-2 mb-3">
      <?php foreach (['primary','secondary','success','danger','warning','info','light','dark'] as $v): ?>
        <span class="badge text-bg-<?= $v ?>"><?= ucfirst($v) ?></span>
      <?php endforeach; ?>
    </div>
    <div class="d-flex flex-wrap gap-2 mb-3">
      <?php foreach (['primary','secondary','success','danger','warning','info'] as $v): ?>
        <span class="badge rounded-pill text-bg-<?= $v ?>"><?= ucfirst($v) ?> pill</span>
      <?php endforeach; ?>
    </div>
    <div class="d-flex flex-wrap align-items-center gap-3">
      <?php foreach (['primary','secondary','danger'] as $v): ?>
        <button class="btn btn-<?= $v ?> position-relative">
          Notifications
          <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill text-bg-danger">4<span class="visually-hidden">unread</span></span>
        </button>
      <?php endforeach; ?>
    </div>
  </section>

  <!-- ================================================
       CARDS
  ================================================ -->
  <section id="cards" class="mb-5 pb-4 border-bottom">
    <h2 class="fw-bold mb-4">Cards</h2>
    <div class="row g-4">
      <div class="col-md-4">
        <div class="card h-100 border-0 shadow-sm rounded-4">
          <div class="card-body p-4">
            <h5 class="card-title fw-bold">Basic card</h5>
            <p class="card-text text-muted">Cards are flexible content containers. Use <code>border-0 shadow-sm rounded-4</code> for a clean modern look.</p>
            <a href="#" class="btn btn-primary btn-sm">Action</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card h-100 border-0 shadow-sm rounded-4 card-hover">
          <img src="/assets/img/engineerparallax.jpg" class="card-img-top article-cover rounded-top-4" alt="Card image">
          <div class="card-body p-4">
            <p class="small text-muted mb-1">9 May 2026</p>
            <h5 class="card-title fw-bold">Image card</h5>
            <p class="card-text text-muted">Use <code>.article-cover</code> for a consistent 16:9 cover image with <code>object-fit: cover</code>.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card h-100 rounded-4 border-primary">
          <div class="card-header bg-primary text-white rounded-top-4 fw-semibold">Featured</div>
          <div class="card-body p-4">
            <h5 class="card-title fw-bold">Card with header</h5>
            <p class="card-text text-muted">Add a coloured <code>.card-header</code> to highlight important or featured content.</p>
          </div>
          <div class="card-footer text-muted small rounded-bottom-4">Updated today</div>
        </div>
      </div>
    </div>
  </section>

  <!-- ================================================
       ACCORDION
  ================================================ -->
  <section id="accordion" class="mb-5 pb-4 border-bottom">
    <h2 class="fw-bold mb-4">Accordion</h2>
    <div class="accordion" id="demoAccordion">
      <?php $items = [
        ['q' => 'What is PhPstrap Lite?', 'a' => 'A lightweight Bootstrap 5 and PHP starter kit for building static websites, landing pages, and small guide sites without a database or CMS.'],
        ['q' => 'Do I need a database?', 'a' => 'No. PhPstrap Lite uses flat PHP files for pages and articles. No database configuration is required.'],
        ['q' => 'Can I use it commercially?', 'a' => 'Yes. PhPstrap Lite is released under the MIT licence, which permits personal and commercial use.'],
      ]; ?>
      <?php foreach ($items as $i => $item): ?>
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button <?= $i > 0 ? 'collapsed' : '' ?>" type="button" data-bs-toggle="collapse" data-bs-target="#acc<?= $i ?>">
            <?= e($item['q']) ?>
          </button>
        </h2>
        <div id="acc<?= $i ?>" class="accordion-collapse collapse <?= $i === 0 ? 'show' : '' ?>" data-bs-parent="#demoAccordion">
          <div class="accordion-body"><?= e($item['a']) ?></div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </section>

  <!-- ================================================
       FORMS
  ================================================ -->
  <section id="forms" class="mb-5 pb-4 border-bottom">
    <h2 class="fw-bold mb-4">Forms</h2>
    <div class="row g-5">

      <div class="col-lg-6">
        <h4 class="text-muted mb-3">Basic inputs</h4>
        <div class="mb-3">
          <label class="form-label" for="el-text">Text input</label>
          <input type="text" id="el-text" class="form-control" placeholder="Enter text">
        </div>
        <div class="mb-3">
          <label class="form-label" for="el-email">Email</label>
          <input type="email" id="el-email" class="form-control" placeholder="you@example.com">
        </div>
        <div class="mb-3">
          <label class="form-label" for="el-password">Password</label>
          <input type="password" id="el-password" class="form-control" placeholder="••••••••">
        </div>
        <div class="mb-3">
          <label class="form-label" for="el-number">Number</label>
          <input type="number" id="el-number" class="form-control" placeholder="0">
        </div>
        <div class="mb-3">
          <label class="form-label" for="el-textarea">Textarea</label>
          <textarea id="el-textarea" class="form-control" rows="4" placeholder="Your message…"></textarea>
        </div>
        <div class="mb-3">
          <label class="form-label" for="el-select">Select</label>
          <select id="el-select" class="form-select">
            <option selected>Choose an option</option>
            <option>Option A</option>
            <option>Option B</option>
            <option>Option C</option>
          </select>
        </div>
        <div class="mb-3">
          <label class="form-label" for="el-file">File upload</label>
          <input type="file" id="el-file" class="form-control">
        </div>
        <div class="mb-3">
          <label class="form-label" for="el-range">Range <span id="rangeVal">50</span></label>
          <input type="range" id="el-range" class="form-range" min="0" max="100" value="50" oninput="document.getElementById('rangeVal').textContent=this.value">
        </div>
      </div>

      <div class="col-lg-6">
        <h4 class="text-muted mb-3">Checks, radios &amp; switches</h4>
        <div class="mb-3">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="chk1" checked>
            <label class="form-check-label" for="chk1">Checkbox checked</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="chk2">
            <label class="form-check-label" for="chk2">Checkbox unchecked</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="chk3" disabled>
            <label class="form-check-label" for="chk3">Checkbox disabled</label>
          </div>
        </div>
        <div class="mb-3">
          <div class="form-check">
            <input class="form-check-input" type="radio" name="radios" id="rad1" checked>
            <label class="form-check-label" for="rad1">Radio option A</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="radios" id="rad2">
            <label class="form-check-label" for="rad2">Radio option B</label>
          </div>
        </div>
        <div class="mb-3">
          <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" role="switch" id="sw1" checked>
            <label class="form-check-label" for="sw1">Switch on</label>
          </div>
          <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" role="switch" id="sw2">
            <label class="form-check-label" for="sw2">Switch off</label>
          </div>
        </div>

        <h4 class="text-muted mb-3">Input groups</h4>
        <div class="input-group mb-3">
          <span class="input-group-text">@</span>
          <input type="text" class="form-control" placeholder="Username">
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Search…">
          <button class="btn btn-primary"><i class="fa-solid fa-magnifying-glass"></i></button>
        </div>
        <div class="input-group mb-3">
          <span class="input-group-text">$</span>
          <input type="number" class="form-control" placeholder="0.00">
          <span class="input-group-text">USD</span>
        </div>

        <h4 class="text-muted mb-3">Floating labels</h4>
        <div class="form-floating mb-3">
          <input type="text" class="form-control" id="fl-name" placeholder="Full name">
          <label for="fl-name">Full name</label>
        </div>
        <div class="form-floating mb-3">
          <input type="email" class="form-control" id="fl-email" placeholder="Email">
          <label for="fl-email">Email address</label>
        </div>
        <div class="form-floating mb-3">
          <select class="form-select" id="fl-select">
            <option selected>Choose…</option>
            <option>Option A</option>
          </select>
          <label for="fl-select">Category</label>
        </div>

        <h4 class="text-muted mb-3">Input sizes</h4>
        <input class="form-control form-control-lg mb-2" type="text" placeholder="Large input">
        <input class="form-control mb-2" type="text" placeholder="Default input">
        <input class="form-control form-control-sm" type="text" placeholder="Small input">
      </div>

      <div class="col-12">
        <h4 class="text-muted mb-3">Validation states</h4>
        <div class="row g-3">
          <div class="col-md-4">
            <label class="form-label" for="val-valid">Valid input</label>
            <input type="text" id="val-valid" class="form-control is-valid" value="Looks good!">
            <div class="valid-feedback">That's correct.</div>
          </div>
          <div class="col-md-4">
            <label class="form-label" for="val-invalid">Invalid input</label>
            <input type="text" id="val-invalid" class="form-control is-invalid" value="Wrong value">
            <div class="invalid-feedback">Please fix this field.</div>
          </div>
          <div class="col-md-4">
            <label class="form-label" for="val-disabled">Disabled input</label>
            <input type="text" id="val-disabled" class="form-control" value="Read only" disabled>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ================================================
       TABLES
  ================================================ -->
  <section id="tables" class="mb-5 pb-4 border-bottom">
    <h2 class="fw-bold mb-4">Tables</h2>
    <div class="table-responsive mb-4">
      <table class="table table-striped table-hover align-middle">
        <thead class="table-dark">
          <tr><th>#</th><th>Name</th><th>Role</th><th>Status</th><th></th></tr>
        </thead>
        <tbody>
          <?php $rows = [['Alice','Admin','Active'],['Bob','Editor','Active'],['Carol','Viewer','Inactive']]; ?>
          <?php foreach ($rows as $i => $r): ?>
          <tr>
            <td><?= $i + 1 ?></td>
            <td><strong><?= e($r[0]) ?></strong></td>
            <td><?= e($r[1]) ?></td>
            <td><span class="badge text-bg-<?= $r[2] === 'Active' ? 'success' : 'secondary' ?>"><?= e($r[2]) ?></span></td>
            <td><a href="#" class="btn btn-outline-primary btn-sm">Edit</a></td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
    <div class="table-responsive">
      <table class="table table-bordered table-sm">
        <thead><tr><th>Bordered</th><th>Small</th><th>Table</th></tr></thead>
        <tbody>
          <tr><td>Cell</td><td>Cell</td><td>Cell</td></tr>
          <tr class="table-active"><td>Active row</td><td>Cell</td><td>Cell</td></tr>
          <tr class="table-danger"><td>Danger row</td><td>Cell</td><td>Cell</td></tr>
        </tbody>
      </table>
    </div>
  </section>

  <!-- ================================================
       LIST GROUPS
  ================================================ -->
  <section id="list-groups" class="mb-5 pb-4 border-bottom">
    <h2 class="fw-bold mb-4">List Groups</h2>
    <div class="row g-4">
      <div class="col-md-4">
        <p class="fw-semibold mb-2">Basic</p>
        <ul class="list-group">
          <li class="list-group-item">Item one</li>
          <li class="list-group-item">Item two</li>
          <li class="list-group-item active" aria-current="true">Active item</li>
          <li class="list-group-item disabled">Disabled item</li>
        </ul>
      </div>
      <div class="col-md-4">
        <p class="fw-semibold mb-2">Flush (no outer borders)</p>
        <ul class="list-group list-group-flush border rounded">
          <li class="list-group-item">Flush item one</li>
          <li class="list-group-item">Flush item two</li>
          <li class="list-group-item">Flush item three</li>
        </ul>
      </div>
      <div class="col-md-4">
        <p class="fw-semibold mb-2">With badges</p>
        <ul class="list-group">
          <li class="list-group-item d-flex justify-content-between align-items-center">
            Inbox <span class="badge text-bg-primary rounded-pill">4</span>
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-center">
            Drafts <span class="badge text-bg-secondary rounded-pill">2</span>
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-center">
            Sent
          </li>
        </ul>
      </div>
    </div>
  </section>

  <!-- ================================================
       NAVS (TABS & PILLS)
  ================================================ -->
  <section id="navs" class="mb-5 pb-4 border-bottom">
    <h2 class="fw-bold mb-4">Navs — Tabs &amp; Pills</h2>

    <h4 class="text-muted mb-3">Tabs</h4>
    <ul class="nav nav-tabs mb-3" id="demoTabs" role="tablist">
      <li class="nav-item" role="presentation">
        <button class="nav-link active" id="tab-one" data-bs-toggle="tab" data-bs-target="#tab-one-pane" type="button">Tab one</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="tab-two" data-bs-toggle="tab" data-bs-target="#tab-two-pane" type="button">Tab two</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="tab-three" data-bs-toggle="tab" data-bs-target="#tab-three-pane" type="button">Tab three</button>
      </li>
    </ul>
    <div class="tab-content mb-5">
      <div class="tab-pane fade show active p-3 border rounded" id="tab-one-pane">Content for <strong>Tab one</strong>. Add any Bootstrap markup inside a tab pane.</div>
      <div class="tab-pane fade p-3 border rounded" id="tab-two-pane">Content for <strong>Tab two</strong>. Tabs switch without a page reload via Bootstrap's JS.</div>
      <div class="tab-pane fade p-3 border rounded" id="tab-three-pane">Content for <strong>Tab three</strong>. Use <code>data-bs-toggle="tab"</code> on each button.</div>
    </div>

    <h4 class="text-muted mb-3">Pills</h4>
    <ul class="nav nav-pills mb-3">
      <li class="nav-item"><a class="nav-link active" href="#">Active</a></li>
      <li class="nav-item"><a class="nav-link" href="#">Link</a></li>
      <li class="nav-item"><a class="nav-link" href="#">Link</a></li>
      <li class="nav-item"><a class="nav-link disabled">Disabled</a></li>
    </ul>
  </section>

  <!-- ================================================
       PROGRESS
  ================================================ -->
  <section id="progress" class="mb-5 pb-4 border-bottom">
    <h2 class="fw-bold mb-4">Progress Bars</h2>
    <?php $bars = [['primary',25,'25%'],['success',50,'50%'],['warning',75,'75%'],['danger',100,'100%']]; ?>
    <?php foreach ($bars as [$colour,$val,$label]): ?>
    <div class="mb-3">
      <div class="progress" style="height:1.25rem">
        <div class="progress-bar bg-<?= $colour ?>" role="progressbar" style="width:<?= $val ?>%" aria-valuenow="<?= $val ?>" aria-valuemin="0" aria-valuemax="100"><?= $label ?></div>
      </div>
    </div>
    <?php endforeach; ?>
    <div class="progress mb-3" style="height:1.25rem">
      <div class="progress-bar progress-bar-striped bg-info" style="width:65%" role="progressbar">Striped 65%</div>
    </div>
    <div class="progress" style="height:1.25rem">
      <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" style="width:80%" role="progressbar">Animated 80%</div>
    </div>
  </section>

  <!-- ================================================
       SPINNERS
  ================================================ -->
  <section id="spinners" class="mb-5 pb-4 border-bottom">
    <h2 class="fw-bold mb-4">Spinners</h2>
    <div class="d-flex flex-wrap align-items-center gap-4 mb-3">
      <?php foreach (['primary','secondary','success','danger','warning','info','dark'] as $c): ?>
        <div class="spinner-border text-<?= $c ?>" role="status"><span class="visually-hidden">Loading…</span></div>
      <?php endforeach; ?>
    </div>
    <div class="d-flex flex-wrap align-items-center gap-4 mb-4">
      <?php foreach (['primary','secondary','success','danger','warning','info','dark'] as $c): ?>
        <div class="spinner-grow text-<?= $c ?>" role="status"><span class="visually-hidden">Loading…</span></div>
      <?php endforeach; ?>
    </div>
    <h4 class="text-muted mb-3">Sizes</h4>
    <div class="d-flex align-items-center gap-3">
      <div class="spinner-border spinner-border-sm text-primary" role="status"><span class="visually-hidden">Loading…</span></div>
      <div class="spinner-border text-primary" role="status"><span class="visually-hidden">Loading…</span></div>
      <div class="spinner-border text-primary" style="width:3rem;height:3rem" role="status"><span class="visually-hidden">Loading…</span></div>
    </div>
  </section>

  <!-- ================================================
       PAGINATION
  ================================================ -->
  <section id="pagination" class="mb-5 pb-4 border-bottom">
    <h2 class="fw-bold mb-4">Pagination</h2>
    <nav aria-label="Demo pagination">
      <ul class="pagination mb-3">
        <li class="page-item disabled"><a class="page-link">Previous</a></li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item active" aria-current="page"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">4</a></li>
        <li class="page-item"><a class="page-link" href="#">Next</a></li>
      </ul>
    </nav>
    <nav aria-label="Large pagination">
      <ul class="pagination pagination-lg">
        <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
        <li class="page-item active"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
      </ul>
    </nav>
  </section>

  <!-- ================================================
       BREADCRUMB
  ================================================ -->
  <section id="breadcrumb" class="mb-5 pb-4 border-bottom">
    <h2 class="fw-bold mb-4">Breadcrumb</h2>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item"><a href="/blog">Blog</a></li>
        <li class="breadcrumb-item active" aria-current="page">Getting Started</li>
      </ol>
    </nav>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Elements</li>
      </ol>
    </nav>
  </section>

  <!-- ================================================
       MODAL
  ================================================ -->
  <section id="modal" class="mb-5 pb-4 border-bottom">
    <h2 class="fw-bold mb-4">Modal</h2>
    <div class="d-flex gap-2 flex-wrap">
      <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#demoModal">Open modal</button>
      <button class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#demoModalLg">Large modal</button>
      <button class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#demoModalSm">Small modal</button>
    </div>

    <div class="modal fade" id="demoModal" tabindex="-1" aria-labelledby="demoModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content rounded-4">
          <div class="modal-header">
            <h5 class="modal-title fw-bold" id="demoModalLabel">Modal title</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>Modal body content. Add any HTML here — forms, text, images, or other components.</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-primary">Confirm</button>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="demoModalLg" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content rounded-4">
          <div class="modal-header">
            <h5 class="modal-title fw-bold">Large modal</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body"><p>Large modal — use <code>.modal-lg</code> on the dialog wrapper.</p></div>
          <div class="modal-footer"><button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button></div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="demoModalSm" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-sm modal-dialog-centered">
        <div class="modal-content rounded-4">
          <div class="modal-header">
            <h5 class="modal-title fw-bold">Small modal</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body"><p>Small modal — use <code>.modal-sm</code>.</p></div>
          <div class="modal-footer"><button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button></div>
        </div>
      </div>
    </div>
  </section>

  <!-- ================================================
       GRID
  ================================================ -->
  <section id="grid" class="mb-5">
    <h2 class="fw-bold mb-4">Grid</h2>
    <p class="text-muted mb-3">Bootstrap uses a 12-column responsive grid. Resize the browser to see columns stack.</p>

    <h4 class="text-muted mb-3">Equal columns</h4>
    <div class="row g-2 mb-4">
      <?php foreach (['col','col','col','col'] as $c): ?>
        <div class="<?= $c ?>"><div class="bg-primary text-white text-center rounded py-2 small">.col</div></div>
      <?php endforeach; ?>
    </div>

    <h4 class="text-muted mb-3">Mixed widths</h4>
    <div class="row g-2 mb-4">
      <div class="col-md-8"><div class="bg-primary bg-opacity-75 text-white text-center rounded py-2 small">.col-md-8</div></div>
      <div class="col-md-4"><div class="bg-primary text-white text-center rounded py-2 small">.col-md-4</div></div>
    </div>
    <div class="row g-2 mb-4">
      <div class="col-md-4"><div class="bg-secondary bg-opacity-75 text-white text-center rounded py-2 small">.col-md-4</div></div>
      <div class="col-md-4"><div class="bg-secondary text-white text-center rounded py-2 small">.col-md-4</div></div>
      <div class="col-md-4"><div class="bg-secondary bg-opacity-75 text-white text-center rounded py-2 small">.col-md-4</div></div>
    </div>

    <h4 class="text-muted mb-3">Responsive breakpoints</h4>
    <div class="row g-2 mb-4 text-center small">
      <div class="col-12 col-sm-6 col-md-4 col-lg-3"><div class="bg-info bg-opacity-25 rounded py-2">.col-12 .col-sm-6 .col-md-4 .col-lg-3</div></div>
      <div class="col-12 col-sm-6 col-md-4 col-lg-3"><div class="bg-info bg-opacity-25 rounded py-2">.col-12 .col-sm-6 .col-md-4 .col-lg-3</div></div>
      <div class="col-12 col-sm-6 col-md-4 col-lg-3"><div class="bg-info bg-opacity-25 rounded py-2">.col-12 .col-sm-6 .col-md-4 .col-lg-3</div></div>
      <div class="col-12 col-sm-6 col-md-4 col-lg-3"><div class="bg-info bg-opacity-25 rounded py-2">.col-12 .col-sm-6 .col-md-4 .col-lg-3</div></div>
    </div>

    <h4 class="text-muted mb-3">Gutters</h4>
    <div class="row g-0 mb-2 text-center small">
      <div class="col"><div class="bg-warning bg-opacity-50 rounded py-2">.g-0 (no gap)</div></div>
      <div class="col"><div class="bg-warning bg-opacity-50 rounded py-2">.g-0</div></div>
      <div class="col"><div class="bg-warning bg-opacity-50 rounded py-2">.g-0</div></div>
    </div>
    <div class="row g-4 text-center small">
      <div class="col"><div class="bg-warning bg-opacity-75 rounded py-2">.g-4 (1.5rem gap)</div></div>
      <div class="col"><div class="bg-warning bg-opacity-75 rounded py-2">.g-4</div></div>
      <div class="col"><div class="bg-warning bg-opacity-75 rounded py-2">.g-4</div></div>
    </div>
  </section>

</div>

<?php include __DIR__ . '/includes/footer.php'; ?>
