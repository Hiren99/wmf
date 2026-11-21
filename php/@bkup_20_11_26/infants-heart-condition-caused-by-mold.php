<?php
require_once __DIR__ . '/includes/init.php';

$restoration_news_id = 34;

$getSingleRestorationNews = getSingleRestorationNews($restoration_news_id);

if( empty($getSingleRestorationNews) )
{
    require_once __DIR__ . '/404.php';
    exit;
}

$pagename = "infants-heart-condition-caused-by-mold.php";

$title = $getSingleRestorationNews['title'] . " - Water Mold Fire Restoration";

$meta_description = ($getSingleRestorationNews['meta_description'] ?? $getSingleRestorationNews['short_description'] ?? ''); 

$meta_keywords = ($getSingleRestorationNews['meta_keywords'] ?? '');

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
                            <?php echo $getSingleRestorationNews['title'] ?? ''; ?>
                        </h1>
                        <p class="description">
                            <?php echo $getSingleRestorationNews['short_description'] ?? ''; ?>
                        </p>
                    </div>
                </div>
                <!-- RIGHT IMAGE -->
                <div class="col-lg-6">
                    <div class="imagewrapper">
                        <div class="image-card">
                            <?php
                            if( !empty($getSingleRestorationNews['list_image']) && root_path('/images/'.$getSingleRestorationNews['list_image']) )
                            {
                                echo '<img src="'.site_url('/images/').$getSingleRestorationNews['list_image'].'" class="img-fluid cdheroimg" alt="'.display_htmlspecialchars($getSingleRestorationNews['title'] ?? '').'" />';
                            }
                            ?>
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
                        <?php echo $getSingleRestorationNews['content'] ?? ''; ?>
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