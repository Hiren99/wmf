<?php
require_once __DIR__ . '/includes/init.php';

$articles_id = 65;

$getArticleList = getSingleArticle($articles_id);

if( empty($getArticleList) )
{
    require_once __DIR__ . '/404.php';
    exit;
}

$pagename = "epa-guidelines-for-mold-remediation.php";

$title = $getArticleList['title'] . " - Water Mold Fire Restoration";

$meta_description = "Mold is everywhere in our natural environment. You can find mold indoors and outdoors. Mold will enter your home on your shoes, on your clothing, in your grocery bags, even on your pets.";

$meta_keywords = "mold removal, mold remediation, allergic reactions, source of water, EPA Guidelines, N-95 rated respirator.";

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
                            <img src="<?php echo site_url('/images/'); ?>epa-guidelines-for-mold-remediation-1500.jpg" class="img-fluid cdheroimg" alt="<?php echo display_htmlspecialchars($getArticleList['title'] ?? ''); ?>" title="<?php echo display_htmlspecialchars($getArticleList['title'] ?? ''); ?>" />
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