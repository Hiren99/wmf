<?php
require_once __DIR__ . '/includes/init.php';

$pagename = "restoration-news.php";

$title = "Restoration News - Water Mold Fire Restoration";

$meta_description = 'WMF Restoration is in business to help people get their lives back to normal. During times of struggle and frustration, we take pride in easing that burden!';

require_once __DIR__ . '/includes/header.php';

$fetchRestorationNewsList = fetchRestorationNewsList(1);
?>

    <!-- ===== HERO ===== -->
    <section class="herotwobox">
        <div class="container">
            <div class="row align-items-center g-5">
                <!-- LEFT CONTENT -->
                <div class="col-lg-6">
                    <div class="content-box">
                        <h1 class="title">
                            Water Mold Fire Restoration
                        </h1>
                        <div class="cdcontent">
                            <p>WMF Restoration is in business to help people get their lives back to normal. During times of struggle and frustration, we take pride in easing that burden!</p>
                            <p>Water Mold Fire Restoration is who the nation turns to for bringing a home or business back to normal after they have been damaged. We offer our services to over 50 major metro areas.</p>
                        </div>
                    </div>
                </div>
                <!-- RIGHT IMAGE -->
                <div class="col-lg-6">
                    <div class="imagewrapper">
                        <div class="image-card">
                            <!-- SET YOUR IMAGE PATH -->
                            <img src="<?php echo site_url(); ?>images/fire-demage.jpg" class="img-fluid cdheroimg" alt="Water Mold Fire Restoration" />                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="cdlistinner">
        <div class="container">
            <div id="restoration-news-data">
                <?php echo $fetchRestorationNewsList['html'] ?? ''; ?>
            </div>
        </div>        
    </div>

<?php
require_once __DIR__ . '/includes/footer.php';
?>