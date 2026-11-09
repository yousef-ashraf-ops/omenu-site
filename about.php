<?php $page = 'about'; include 'includes/header.php'; ?>

<!-- ── ABOUT US SECTION ── -->
<section class="about-hero" id="about">
  <div class="container">
    <div class="section-head reveal text-center">
      <p class="eyebrow"><?php echo $lang === "ar" ? "من نحن" : "About Us"; ?></p>
      <h2>
        <?php echo $lang === "ar"
          ? "تمكين مطاعم المستقبل عبر <span>التميز التشغيلي</span>"
          : "Empowering Next-Gen Restaurants with <span>Operational Excellence</span>"; ?>
      </h2>
      <p>
        <?php echo $lang === "ar"
          ? "نحن نوفر حلول إدارة وتطوير المطاعم الشاملة لمساعدة أصحاب الضيافة والمطابخ السحابية على التوسع والكفاءة."
          : "We deliver end-to-end F&B management and consultancy solutions designed to help restaurant owners, franchises, and cloud kitchens scale efficiently."; ?>
      </p>
    </div>

    <!-- Core Offerings Grid -->
    <div class="stats-grid" style="margin-bottom: 30px;">

      <!-- Card 1 -->
      <div class="stat-card reveal">
        <div class="stat-icon">🚀</div>
        <h3><?php echo $lang === "ar" ? "تطوير وإطلاق المفاهيم" : "Concept Launch & Scaling"; ?></h3>
        <p>
          <?php echo $lang === "ar"
            ? "من الفكرة الأولى إلى افتتاح الفرع، نساعدك في بناء وتطوير مفاهيم مطاعم ناجحة وقابلة للتوسع في الخليج."
            : "From initial concept design to grand opening, we turn restaurant visions into market-ready, scalable brand models across the GCC."; ?>
        </p>
      </div>

      <!-- Card 2 -->
      <div class="stat-card reveal">
        <div class="stat-icon">🍳</div>
        <h3><?php echo $lang === "ar" ? "تطوير القوائم وإدارة المطابخ" : "Menu Engineering & Kitchen Ops"; ?></h3>
        <p>
          <?php echo $lang === "ar"
            ? "تصميم وصفات مميزة، تحسين كلفة الأطباق (Food Cost)، وتدريب أطقم المطابخ للحفاظ على أعلى جودة."
            : "Recipe development, food cost optimization, kitchen layout workflows, and staff culinary training for maximum profitability."; ?>
        </p>
      </div>

      <!-- Card 3 -->
      <div class="stat-card reveal">
        <div class="stat-icon">📈</div>
        <h3><?php echo $lang === "ar" ? "التسويق وتموضع العلامة" : "Hospitality Growth & Marketing"; ?></h3>
        <p>
          <?php echo $lang === "ar"
            ? "استراتيجيات تسويق رقمية وحملات مخصصة لقطاع المطاعم لزيادة المبيعات وجذب العملاء بشكل مستمر."
            : "Targeted F&B digital marketing, brand positioning, and acquisition strategies tailored to drive recurring foot traffic and delivery orders."; ?>
        </p>
      </div>

      <!-- Card 4 -->
      <div class="stat-card reveal">
        <div class="stat-icon">📊</div>
        <h3><?php echo $lang === "ar" ? "تحسين العمليات وسلسلة التوريد" : "Operations & Supply Chain"; ?></h3>
        <p>
          <?php echo $lang === "ar"
            ? "رفع كفاءة سلاسل التوريد، تقليل الهدر التشغيلي، ووضع معايير الجودة لضمان أقصى ربحية."
            : "Streamlining inventory management, vendor negotiations, quality control protocols, and day-to-day store operations."; ?>
        </p>
      </div>

    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
