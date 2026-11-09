<?php $page = 'why'; include 'includes/header.php'; ?>

  <section class="page-hero">
    <div class="container">
      <p class="eyebrow"><?php echo $t['why_eyebrow']; ?></p>
      <h1><?php echo $t['why_title']; ?></h1>
    </div>
  </section>

  <!-- Stats -->
  <section class="why-stats">
    <div class="container">
      <div class="stats-grid">
        <?php foreach ([1,2,3] as $i): ?>
          <div class="stat-card reveal">
            <div class="stat-icon"><?php echo $i===1?'📈':($i===2?'💰':'⚡'); ?></div>
            <div class="num"><?php echo $t['stat'.$i.'_num']; ?></div>
            <h3><?php echo $t['stat'.$i.'_h']; ?></h3>
            <p><?php echo $t['stat'.$i.'_p']; ?></p>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- Management team -->
  <section class="founder">
    <div class="container">
      <div class="section-head reveal">
        <span class="eyebrow"><?php echo $lang==='ar'?'فريق الإدارة':'Management Team'; ?></span>
        <h2><?php echo $lang==='ar'?'القادة وراء النجاح':'The People Behind the Success'; ?></h2>
      </div>

      <div class="management-grid">

        <!-- Ashraf Al Amour -->
        <div class="mgmt-card reveal" style="--delay:.05s">
          <div class="avatar-circle">A</div>
          <span class="avatar-badge"><?php echo $lang==='ar'?'المؤسس':'Founder'; ?></span>
          <h3>Ashraf Al Amour</h3>
          <span class="mgmt-title"><?php echo $lang==='ar'?'المدير التنفيذي':'CEO & Founder'; ?></span>
          <p class="mgmt-bio">
            <?php echo $lang==='ar'
              ? 'خبرة تزيد على 19 عامًا في قطاع المطاعم بالإمارات، أسس أكثر من 25 مفهوم ناجح.'
              : 'Over 19 years in UAE F&B, founded 25+ restaurant concepts across the region.'; ?>
          </p>
        </div>

        <!-- Philip Khouri -->
        <div class="mgmt-card reveal" style="--delay:.1s">
          <div class="avatar-circle">P</div>
          <span class="avatar-badge"><?php echo $lang==='ar'?'شريك':'Partner'; ?></span>
          <h3>Philip Khouri</h3>
          <span class="mgmt-title"><?php echo $lang==='ar'?'مدير العمليات':'COO'; ?></span>
          <p class="mgmt-bio">
            <?php echo $lang==='ar'
              ? 'متخصص في تحسين العمليات وسلاسل التوريد للمطاعم والمقاهي الكبرى.'
              : 'Specialises in operational efficiency and supply-chain optimisation for multi-branch F&B groups.'; ?>
          </p>
        </div>

        <!-- Hasan Abu Zayed -->
        <div class="mgmt-card reveal" style="--delay:.15s">
          <div class="avatar-circle">H</div>
          <span class="avatar-badge"><?php echo $lang==='ar'?'شريك':'Partner'; ?></span>
          <h3>Hasan Abu Zayed</h3>
          <span class="mgmt-title"><?php echo $lang==='ar'?'مدير التطوير':'Development Director'; ?></span>
          <p class="mgmt-bio">
            <?php echo $lang==='ar'
              ? 'يقود تطوير مفاهيم المطاعم الجديدة وفرص التوسع في السوق الإماراتي.'
              : 'Leads new concept development and market-expansion opportunities across the UAE.'; ?>
          </p>
        </div>

      </div>
    </div>
  </section>

<?php include 'includes/footer.php'; ?>
