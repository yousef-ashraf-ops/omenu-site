<?php $page = 'services'; include 'includes/header.php'; ?>

  <section class="page-hero">
    <div class="container">
      <p class="eyebrow"><?php echo $t['help_eyebrow']; ?></p>
      <h1><?php echo $t['help_title']; ?></h1>
    </div>
  </section>

  <section>
    <div class="container">
      <div class="help-grid">
        <?php for ($i = 1; $i <= 9; $i++): ?>
          <div class="help-item"><span class="dot"></span> <?php echo $t['help' . $i]; ?></div>
        <?php endfor; ?>
      </div>
    </div>
  </section>

<?php include 'includes/footer.php'; ?>
