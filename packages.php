<?php $page = 'packages'; include 'includes/header.php'; ?>

  <section class="page-hero">
    <div class="container">
      <p class="eyebrow"><?php echo $t['pkg_eyebrow']; ?></p>
      <h1><?php echo $t['pkg_title']; ?></h1>
    </div>
  </section>

  <section>
    <div class="container">
      <div class="cards-grid">
        <?php
          $cards = [['card1', 'chef'], ['card2', 'manager'], ['card3', 'menu']];
          foreach ($cards as $c):
            $key = $c[0]; $price = $PRICES[$c[1]]; $name = $t[$key . '_h'];
        ?>
          <div class="service-card">
            <div class="thumb"><?php echo $t['thumb']; ?></div>
            <div class="body">
              <h3><?php echo $name; ?></h3>
              <div class="price"><?php echo $t['currency'] . ' ' . number_format($price); ?></div>
              <p><?php echo $t[$key . '_p']; ?></p>
              <button class="btn add-to-cart"
                      data-name="<?php echo htmlspecialchars($name, ENT_QUOTES); ?>"
                      data-price="<?php echo $price; ?>">
                <?php echo $t['add_btn']; ?>
              </button>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

<?php include 'includes/footer.php'; ?>
