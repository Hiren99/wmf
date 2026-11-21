<?php
require_once __DIR__ . '/includes/init.php';

$articles_id = 50;

$getArticleList = getSingleArticle($articles_id);

if( empty($getArticleList) )
{
    require_once __DIR__ . '/404.php';
    exit;
}

$pagename = "water-damage-cleanup-tips.php";

$title = $getArticleList['title'] . " - Water Mold Fire Restoration";

$meta_description = "A broken pipe is by far one of the most damaging challenges that any homeowner could face. Even a small leak in a water line can quickly cause a considerable amount of damage to your home. Water Mold Fire Restoration, 800-905-0277, would like to offer some valuable water damage cleanup tips.";

$meta_keywords = "water damage cleanup, water damage tips,  how to cleanup, water mold fire restoration, water damage assistance";

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
                            <img src="<?php echo site_url('/images/'); ?>water-damage-cleanup-tips1.jpg" class="img-fluid cdheroimg" alt="<?php echo display_htmlspecialchars($getArticleList['title'] ?? ''); ?>" title="<?php echo display_htmlspecialchars($getArticleList['title'] ?? ''); ?>" />
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