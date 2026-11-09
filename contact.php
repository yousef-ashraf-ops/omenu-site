<?php $page = 'contact'; include 'includes/header.php'; ?>

  <section class="page-hero">
    <div class="container">
      <p class="eyebrow"><?php echo $t['contact_eyebrow']; ?></p>
      <h1><?php echo $t['contact_title']; ?></h1>
    </div>
  </section>

  <section>
    <div class="container">
      <div class="contact-grid">
        <div class="contact">
          <form id="contactForm">
            <input type="text"  name="name"          placeholder="<?php echo $t['f_name']; ?>" required>
            <input type="tel"   name="phone"         placeholder="<?php echo $t['f_phone']; ?>">
            <input type="email" name="email"         placeholder="<?php echo $t['f_email']; ?>">
            <input type="text"  name="business_type" placeholder="<?php echo $t['f_business']; ?>">
            <textarea rows="4"  name="message"       placeholder="<?php echo $t['f_message']; ?>"></textarea>
            <button type="submit" class="btn"><?php echo $t['f_send']; ?></button>
            <p id="formMsg" class="form-msg"></p>
          </form>
        </div>
        <div class="map">
          <iframe src="https://www.google.com/maps?q=Dubai,United+Arab+Emirates&output=embed" loading="lazy"></iframe>
        </div>
      </div>
    </div>
  </section>

<?php include 'includes/footer.php'; ?>
