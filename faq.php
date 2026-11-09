<?php $page = 'faq'; include 'includes/header.php'; ?>

  <section class="page-hero">
    <div class="container">
      <p class="eyebrow"><?php echo $t['faq_eyebrow']; ?></p>
      <h1><?php echo $t['faq_title']; ?></h1>
    </div>
  </section>

  <section>
    <div class="container">
      <div class="faq-list">
        <details open><summary><?php echo $t['faq1_q']; ?></summary><p><?php echo $t['faq1_a']; ?></p></details>
        <details><summary><?php echo $t['faq2_q']; ?></summary><p><?php echo $t['faq2_a']; ?></p></details>
        <details><summary><?php echo $t['faq3_q']; ?></summary><p><?php echo $t['faq3_a']; ?></p></details>
        <details><summary><?php echo $t['faq4_q']; ?></summary><p><?php echo $t['faq4_a']; ?></p></details>
      </div>
    </div>
  </section>

<?php include 'includes/footer.php'; ?>
