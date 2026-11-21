<?php
require_once __DIR__ . '/includes/init.php';

$articles_id = 10;

$getArticleList = getSingleArticle($articles_id);

if( empty($getArticleList) )
{
    require_once __DIR__ . '/404.php';
    exit;
}

$pagename = "septic-tank-backup.php";

$title = $getArticleList['title'] . " - Water Mold Fire Restoration";

$meta_description = "All the things that go into the drain through the sink, toilet, washing machine, dishwasher or shower end up in the septic tank.";

$meta_keywords = "water damage, water damage restoration, Septic tank, emergency situation, untreated sewage0.s.";

require_once __DIR__ . '/includes/header.php';
?>

    <!-- ===== HERO ===== -->
    <section class="herotwobox">
        <div class="container">
            <div class="row align-items-center g-5">
                <!-- LEFT CONTENT -->
                <div class="col-lg-6">
                    <div class="content-box">
                        <h1 class="title">
                            <?php echo $getArticleList['title'] ?? ''; ?>
                        </h1>
                        <p class="description"><?php echo $getArticleList['short_description'] ?? ''; ?></p>
                    </div>
                </div>
                <!-- RIGHT IMAGE -->
                <div class="col-lg-6">
                    <div class="imagewrapper">
                        <div class="image-card">
                            <!-- SET YOUR IMAGE PATH -->
                            <img src="<?php echo site_url('/images/'); ?>septic-tank1.jpg" class="img-fluid cdheroimg" alt="<?php echo display_htmlspecialchars($getArticleList['title'] ?? ''); ?>" title="<?php echo display_htmlspecialchars($getArticleList['title'] ?? ''); ?>" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> 
    <!-- full resources -->
    <div class="cdarticlepage">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-md-8 col-lg-8">
                    <div class="cdinner articleDesc">
                        <?php echo $getArticleList['content'] ?? ''; ?>
                    </div>
                </div>
                
                <?php
                require_once __DIR__ . '/includes/left-sidebar.php';
                ?>
            </div>
        </div>        
    </div>

    <?php
    require_once __DIR__ . '/includes/our-client-logos-list.php';
    ?>

<?php
require_once __DIR__ . '/includes/footer.php';
?>