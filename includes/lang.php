<?php
/*
  ============================================================
  LANGUAGE / TRANSLATIONS  (English default, Arabic secondary)
  ------------------------------------------------------------
  Add ?lang=ar to switch to Arabic (the nav button does this).
  Edit any text here, in BOTH 'en' and 'ar'.
  ============================================================
*/
$lang = (isset($_GET['lang']) && $_GET['lang'] === 'ar') ? 'ar' : 'en';
$dir  = ($lang === 'ar') ? 'rtl' : 'ltr';
$other_lang  = ($lang === 'ar') ? 'en' : 'ar';
$other_label = ($lang === 'ar') ? 'English' : 'العربية';

/* Numeric prices (same in both languages) — used by the cart maths.
   The currency label is per-language below. */
$PRICES = ['chef' => 10000, 'manager' => 5000, 'menu' => 10000];

$T = [
  'en' => [
    'page_title'   => 'O-menu — Restaurant Operations',
    'brand'        => 'O-menu',
    'currency'     => 'AED',

    'nav_home'     => 'Home',
    'nav_why'      => 'Why Us',
    'nav_services' => 'Services',
    'nav_packages' => 'Packages',
    'nav_faq'      => 'FAQ',

    'hero_eyebrow' => 'Restaurant operations made simple',
    'hero_title'   => 'Restaurant operations & development, across the UAE',
    'hero_text'    => 'A professional operations team serving restaurants and cafés across the UAE — complete solutions to improve performance, raise efficiency, and grow profits, however many branches you run.',
    'hero_btn'     => 'Get started',

    'client_logo'  => 'Client logo',

    'why_eyebrow'  => "Why we're your best choice",
    'why_title'    => 'From improvised operations to professional operations',
    'why_text'     => 'Real results that speak to the quality of our service.',
    'stat1_num' => '+73%', 'stat1_h' => 'Sales growth',    'stat1_p' => 'Real growth in branch sales.',
    'stat2_num' => '-28%', 'stat2_h' => 'Lower costs',      'stat2_p' => 'Reducing direct and indirect costs.',
    'stat3_num' => '40%',  'stat3_h' => 'Higher efficiency','stat3_p' => 'Better operational performance in less time.',

    'pkg_eyebrow'  => 'Packages designed for you',
    'pkg_title'    => 'Everything you need to run your restaurant successfully',
    'thumb'        => 'Service image',
    'card1_h' => 'Chef service',        'card1_p' => 'Recipe development and kitchen supervision.',
    'card2_h' => 'Operations manager',  'card2_p' => 'Direct oversight of branch performance.',
    'card3_h' => 'Menu re-engineering', 'card3_p' => 'Improving items and pricing to increase profit.',
    'add_btn' => 'Add to order',

    'num_eyebrow'  => 'O-menu in numbers',
    'num_title'    => 'Numbers that tell our success story',
    'num1' => 'Brands', 'num2' => 'Branches operated', 'num3' => 'Operations managers',
    'num4' => 'Staff trained', 'num5' => 'Years of experience',

    'help_eyebrow' => 'Our vision for you',
    'help_title'   => 'How we help you',
    'help1' => 'Professional operations plan', 'help2' => 'Quality control',   'help3' => 'Team training',
    'help4' => 'Waste control',                'help5' => 'Inventory review',  'help6' => 'Municipality compliance',
    'help7' => 'Instant reports',              'help8' => 'Customer feedback', 'help9' => 'Regular consulting',

    'rev_eyebrow'  => 'Client reviews',
    'rev_title'    => 'Every success story is proof of our excellence',
    'rev1' => 'A complete, highly professional service — pricing, menu development, and team follow-up. True success partners.',
    'rev1_name' => 'Qidr Restaurant', 'rev1_role' => 'Owner', 'rev1_av' => 'Q',
    'rev2' => 'They provided staff training and constant attention to cleanliness, with fast responses to any issue.',
    'rev2_name' => 'Zomorod Restaurant', 'rev2_role' => 'Manager', 'rev2_av' => 'Z',
    'rev3' => 'They helped us avoid municipality violations with a daily program, and sales improved after menu re-engineering.',
    'rev3_name' => 'Nineties Café', 'rev3_role' => 'Owner', 'rev3_av' => 'N',

    'faq_eyebrow'  => 'FAQ',
    'faq_title'    => "Find the answers you're looking for",
    'faq1_q' => 'How does the service help increase my sales?',
    'faq1_a' => 'By developing daily procedures, training teams, and running regular on-site visits to monitor quality and performance.',
    'faq2_q' => 'Do you make on-site visits to branches?',
    'faq2_a' => 'Yes, regular visits across the UAE to make sure operational procedures are sound.',
    'faq3_q' => 'Can the service be provided for a single branch?',
    'faq3_a' => 'Yes, our services start from one branch and scale to hundreds.',
    'faq4_q' => 'When do results start to show?',
    'faq4_a' => 'Results usually begin to appear within the first 90 days.',

    'contact_eyebrow' => 'Contact us',
    'contact_title'   => "Leave a message and we'll get back to you",
    'f_name' => 'Full name', 'f_phone' => 'Phone', 'f_email' => 'Email',
    'f_business' => 'Business type', 'f_message' => 'Leave us a message', 'f_send' => 'Send',
    'form_sending' => 'Sending...',
    'form_success' => 'Your message has been received. Thank you!',
    'form_error'   => 'Could not reach the server. Make sure the backend is running (python app.py).',

    'cart_title'   => 'Your order',
    'cart_empty'   => 'Your cart is empty.',
    'cart_total'   => 'Total',
    'cart_name'    => 'Your name',
    'cart_phone'   => 'Your phone',
    'cart_checkout'=> 'Place order',
    'cart_success' => 'Your order has been placed. We will contact you shortly!',
    'cart_error'   => 'Could not place the order. Make sure the backend is running.',
    'cart_remove'  => 'Remove',

    'foot_about' => 'A leading company operating and developing restaurants and cafés across the UAE, offering innovative solutions that raise efficiency and drive sustainable success.',
    'foot_links' => 'Links', 'foot_contact' => 'Contact',
    'foot_phone' => 'Phone: +971 00 000 0000', 'foot_addr' => 'United Arab Emirates',
    'foot_rights' => 'All rights reserved',
  ],

  'ar' => [
    'page_title'   => 'أو-منيو — تشغيل المطاعم',
    'brand'        => 'أو-منيو',
    'currency'     => 'د.إ',

    'nav_home'     => 'الرئيسية',
    'nav_why'      => 'لماذا نحن',
    'nav_services' => 'خدماتنا',
    'nav_packages' => 'الباقات',
    'nav_faq'      => 'الأسئلة الشائعة',

    'hero_eyebrow' => 'تجربة تشغيل بلا تعقيد',
    'hero_title'   => 'تشغيل وتطوير المطاعم في جميع أنحاء الإمارات',
    'hero_text'    => 'فريق تشغيل محترف يخدم المطاعم والمقاهي في جميع أنحاء الإمارات — حلول متكاملة لتطوير الأداء ورفع الكفاءة وزيادة الأرباح مهما كان عدد فروعك.',
    'hero_btn'     => 'ابدأ الآن',

    'client_logo'  => 'شعار عميل',

    'why_eyebrow'  => 'لماذا نحن خيارك الأفضل؟',
    'why_title'    => 'من تشغيل عشوائي إلى تشغيل احترافي',
    'why_text'     => 'نتائج ملموسة تتحدث عن جودة خدماتنا.',
    'stat1_num' => '+73%', 'stat1_h' => 'زيادة المبيعات', 'stat1_p' => 'نمو حقيقي في مبيعات الفروع.',
    'stat2_num' => '-28%', 'stat2_h' => 'خفض المصروفات',  'stat2_p' => 'تقليل التكاليف المباشرة وغير المباشرة.',
    'stat3_num' => '40%',  'stat3_h' => 'تحسن الكفاءة',   'stat3_p' => 'أداء تشغيلي أعلى في وقت أقل.',

    'pkg_eyebrow'  => 'باقات مصممة لك',
    'pkg_title'    => 'كل ما تحتاجه لتشغيل مطعمك بنجاح',
    'thumb'        => 'صورة الخدمة',
    'card1_h' => 'خدمة الشيف',           'card1_p' => 'تطوير الوصفات والإشراف على المطبخ.',
    'card2_h' => 'مدير التشغيل',          'card2_p' => 'إشراف مباشر على أداء الفروع.',
    'card3_h' => 'إعادة هندسة المنيو',    'card3_p' => 'تحسين الأصناف والأسعار لزيادة الربح.',
    'add_btn' => 'أضف للطلب',

    'num_eyebrow'  => 'أو-منيو بأرقام',
    'num_title'    => 'أرقام تروي قصة نجاحنا',
    'num1' => 'علامة تجارية', 'num2' => 'فرع تم تشغيله', 'num3' => 'مدير تشغيل',
    'num4' => 'موظف مُدرَّب', 'num5' => 'سنة خبرة',

    'help_eyebrow' => 'رؤيتنا لك',
    'help_title'   => 'كيف نساعدك؟',
    'help1' => 'خطة تشغيل احترافية', 'help2' => 'مراقبة الجودة',   'help3' => 'تدريب فرق العمل',
    'help4' => 'السيطرة على الهدر',  'help5' => 'مراجعة المخزون',  'help6' => 'إجراءات البلدية',
    'help7' => 'تقارير فورية',       'help8' => 'تقييم الزبائن',   'help9' => 'استشارات دورية',

    'rev_eyebrow'  => 'آراء عملائنا',
    'rev_title'    => 'كل قصة نجاح شهادة على تميزنا',
    'rev1' => 'خدمة متكاملة واحترافية عالية في التسعير وتطوير المنيو ومتابعة الفريق. شركاء نجاح فعلًا.',
    'rev1_name' => 'مطعم قدر', 'rev1_role' => 'صاحب المطعم', 'rev1_av' => 'ق',
    'rev2' => 'وفروا تدريبًا للعمالة واهتمامًا مستمرًا بالنظافة، مع استجابة سريعة لأي ملاحظة.',
    'rev2_name' => 'مطعم زمرد', 'rev2_role' => 'مدير المطعم', 'rev2_av' => 'ز',
    'rev3' => 'ساعدونا في تجاوز مخالفات البلدية عبر برنامج يومي، وتحسّنت مبيعاتنا بعد هندسة المنيو.',
    'rev3_name' => 'مقهى التسعينات', 'rev3_role' => 'صاحب المقهى', 'rev3_av' => 'ت',

    'faq_eyebrow'  => 'الأسئلة الشائعة',
    'faq_title'    => 'هنا تجد الإجابات التي تبحث عنها',
    'faq1_q' => 'كيف تساعدني الخدمة في زيادة المبيعات؟',
    'faq1_a' => 'عبر تطوير الإجراءات اليومية وتدريب الفرق وزيارات ميدانية دورية لمتابعة الجودة والأداء.',
    'faq2_q' => 'هل تتم زيارات ميدانية للفروع؟',
    'faq2_a' => 'نعم، زيارات دورية في جميع أنحاء الإمارات للتأكد من سلامة الإجراءات التشغيلية.',
    'faq3_q' => 'هل يمكن تقديم الخدمة لفرع واحد؟',
    'faq3_a' => 'نعم، تبدأ خدماتنا من فرع واحد وتغطي حتى مئات الفروع.',
    'faq4_q' => 'متى تظهر نتائج التشغيل؟',
    'faq4_a' => 'غالبًا تبدأ النتائج بالظهور خلال أول 90 يومًا.',

    'contact_eyebrow' => 'تواصل معنا',
    'contact_title'   => 'اترك رسالتك وسنعود إليك',
    'f_name' => 'الاسم بالكامل', 'f_phone' => 'الجوال', 'f_email' => 'البريد الإلكتروني',
    'f_business' => 'نوع النشاط', 'f_message' => 'اترك رسالة لنا', 'f_send' => 'إرسال',
    'form_sending' => 'جاري الإرسال...',
    'form_success' => 'تم استلام رسالتك بنجاح. شكرًا لك!',
    'form_error'   => 'تعذّر الاتصال بالخادم. تأكد أن الـ backend يعمل (python app.py).',

    'cart_title'   => 'طلبك',
    'cart_empty'   => 'سلة الطلبات فارغة.',
    'cart_total'   => 'الإجمالي',
    'cart_name'    => 'اسمك',
    'cart_phone'   => 'رقم جوالك',
    'cart_checkout'=> 'تأكيد الطلب',
    'cart_success' => 'تم استلام طلبك. سنتواصل معك قريبًا!',
    'cart_error'   => 'تعذّر إرسال الطلب. تأكد أن الـ backend يعمل.',
    'cart_remove'  => 'حذف',

    'foot_about' => 'شركة رائدة في تشغيل وتطوير المطاعم والمقاهي في جميع أنحاء الإمارات، نقدم حلولًا مبتكرة ترفع الكفاءة وتعزز النجاح المستدام.',
    'foot_links' => 'روابط', 'foot_contact' => 'تواصل',
    'foot_phone' => 'هاتف: 0000 000 00 971+', 'foot_addr' => 'الإمارات العربية المتحدة',
    'foot_rights' => 'جميع الحقوق محفوظة',
  ],
];

$t = $T[$lang];
