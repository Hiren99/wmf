<?php
require_once __DIR__ . '/includes/init.php';

$pagename = "resources.php";

$title = "Water Mold Fire Restoration Resources";

$meta_description = 'Water Mold Fire Restoration Resources';

require_once __DIR__ . '/includes/header.php';

$fetchArticleAllCategoryList = fetchArticleAllCategoryList();

// Water Damage category articles
$water_damage_articles = getArticleList(
    array(2),
    array(
        'limit' => 5
    )
);

// Mold Removal category articles
$mold_removal_articles = getArticleList(
    array(3),
    array(
        'limit' => 5
    )
);

// Fire Damage category articles
$fire_damage_articles = getArticleList(
    array(4),
    array(
        'limit' => 5
    )
);
?>

    <!-- ===== HERO ===== -->
    <section class="herotwobox">
        <div class="container">
            <div class="row align-items-center g-5">
                <!-- LEFT CONTENT -->
                <div class="col-lg-6">
                    <div class="content-box">
                        <h1 class="title">
                            <!-- Restoration Resources -->
                            Water Mold Fire Restoration
                        </h1>
                        <div class="cdcontent">
                            <p>WMF Restoration is in business to help people get their lives back to normal. During times of struggle and frustration, we take pride in easing that burden!</p>
                            <p>Water Mold Fire Restoration is who the nation turns to for bringing a home or business back to normal after they have been damaged. We offer our services to over 50 major metro areas.</p>
                        </div>
                        <?php /* <div class="search-bar">
                            <input type="text" class="form-control" placeholder="Enter city, zip or service..."/>
                            <button class="btn-quote">Search</button>
                        </div> */ ?>
                    </div>
                </div>
                <!-- RIGHT IMAGE -->
                <div class="col-lg-6">
                    <div class="imagewrapper">
                        <div class="image-card">
                            <!-- SET YOUR IMAGE PATH -->
                            <img src="<?php echo site_url(); ?>/images/fire-demage.jpg" class="img-fluid cdheroimg" alt="Restoration Resources?" />                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- menu strip -->
    <?php
    echo $fetchArticleAllCategoryList['html'] ?? '';
    ?>

    <!-- resources -->
    <section class="cd-resources">
        <div class="container">
            <!-- Water -->
            <div class="cd-heading">
                <h2>Water Damage</h2>
            </div>
            <div class="row g-4 mb-5">
                <!-- LEFT SIDE -->
                <div class="col-lg-6">
                    <div class="row g-4">
                        <?php
                        if( !empty($water_damage_articles) && is_array($water_damage_articles) )
                        {
                            // Get the first two records
                            $first_two_water_damage_articles = array_slice($water_damage_articles, 0, 2);

                            foreach( $first_two_water_damage_articles as $water_damage_article )
                            {
                        ?>
                                <div class="col-md-6">
                                    <div class="cd-card">
                                        <div class="cd-card-image">
                                            <?php
                                            if( !empty($water_damage_article['list_image']) && file_exists(root_path('images/'.$water_damage_article['list_image'])) )
                                            {
                                            ?>
                                                <img src="<?php echo site_url('/images/').$water_damage_article['list_image']; ?>" class="img-fluid" alt="<?php echo $water_damage_article['title']; ?>"/>
                                            <?php
                                            }
                                            ?>
                                        </div>
                                        <div class="cd-card-body">
                                            <h3 class="cd-card-title">
                                                <?php echo $water_damage_article['title']; ?>
                                            </h3>
                                            <div class="cd-small-line"></div>
                                            <p class="cd-card-text"><?php echo $water_damage_article['short_description']; ?></p>
                                            <a href="<?php echo site_url(strtolower($water_damage_article['article_url'])); ?>" class="cd-readmore">
                                                Read More
                                                <i class="fa-solid fa-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                        <?php
                            }
                        }
                        ?>
                    </div>
                </div>

                <!-- RIGHT SIDE -->
                <div class="col-lg-6">
                    <div class="cd-article-wrap">
                        <!-- ARTICLE -->
                        <?php
                        if( !empty($water_damage_articles) && is_array($water_damage_articles) )
                        {
                            // Skip the first two records
                            $water_damage_articles = array_slice($water_damage_articles, 2, 3);

                            foreach( $water_damage_articles as $water_damage_article )
                            {
                        ?>
                                <div class="cd-article">
                                    <h3 class="cd-article-title">
                                        <a href="<?php echo site_url(strtolower($water_damage_article['article_url'])); ?>" class="cdotherbloglink">
                                            <?php echo $water_damage_article['title']; ?>
                                        </a>
                                    </h3>
                                    <p class="cd-article-text">
                                        <?php echo $water_damage_article['short_description']; ?>
                                    </p>
                                </div>
                        <?php
                            }
                        }
                        ?>
                        
                        <!-- BUTTON -->
                        <div class="cd-btn-wrap">                            
                            <a href="<?php echo site_url('articles'); ?>" class="btn-quote">
                                See All Articles
                                <i class="fa-duotone fa-regular fa-arrow-right-from-line ps-2"></i>
                            </a>                            
                        </div>
                    </div>
                </div>
            </div>

            <!-- mold -->
            <div class="cd-heading">
                <h2>Mold Removal</h2>
            </div>
            <div class="row g-4 mb-5">
                <!-- LEFT SIDE -->
                <div class="col-lg-6">
                    <div class="row g-4">
                        <?php
                        if( !empty($mold_removal_articles) && is_array($mold_removal_articles) )
                        {
                            // Get the first two records
                            $first_two_mold_removal_articles = array_slice($mold_removal_articles, 0, 2);

                            foreach( $first_two_mold_removal_articles as $mold_removal_article )
                            {
                        ?>
                                <div class="col-md-6">
                                    <div class="cd-card">
                                        <div class="cd-card-image">
                                            <?php
                                            if( !empty($mold_removal_article['list_image']) && file_exists(root_path('images/'.$mold_removal_article['list_image'])) )
                                            {
                                            ?>
                                                <img src="<?php echo site_url('/images/').$mold_removal_article['list_image']; ?>" class="img-fluid" alt="<?php echo $mold_removal_article['title']; ?>"/>
                                            <?php
                                            }
                                            ?>
                                        </div>
                                        <div class="cd-card-body">
                                            <h3 class="cd-card-title">
                                                <?php echo $mold_removal_article['title']; ?>
                                            </h3>
                                            <div class="cd-small-line"></div>
                                            <p class="cd-card-text"><?php echo $mold_removal_article['short_description']; ?></p>
                                            <a href="<?php echo site_url(strtolower($mold_removal_article['article_url'])); ?>" class="cd-readmore">
                                                Read More
                                                <i class="fa-solid fa-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                        <?php
                            }
                        }
                        ?>
                    </div>
                </div>
                <!-- RIGHT SIDE -->
                <div class="col-lg-6">
                    <div class="cd-article-wrap">
                        <!-- ARTICLE -->
                         <?php
                        if( !empty($mold_removal_articles) && is_array($mold_removal_articles) )
                        {
                            // Skip the first two records
                            $mold_removal_articles = array_slice($mold_removal_articles, 2, 3);

                            foreach( $mold_removal_articles as $mold_removal_article )
                            {
                        ?>
                                <div class="cd-article">
                                    <h3 class="cd-article-title">
                                        <a href="<?php echo site_url(strtolower($mold_removal_article['article_url'])); ?>" class="cdotherbloglink">
                                            <?php echo $mold_removal_article['title']; ?>
                                        </a>
                                    </h3>
                                    <p class="cd-article-text">
                                        <?php echo $mold_removal_article['short_description']; ?>
                                    </p>
                                </div>
                        <?php
                            }
                        }
                        ?>
                        
                        <!-- BUTTON -->
                        <div class="cd-btn-wrap">                            
                            <a href="<?php echo site_url('articles'); ?>" class="btn-quote">
                                See All Articles
                                <i class="fa-duotone fa-regular fa-arrow-right-from-line ps-2"></i>
                            </a>                            
                        </div>
                    </div>
                </div>
            </div>

            <!-- Fire Damage -->
            <div class="cd-heading">
                <h2>Fire Damage</h2>
            </div>
            <div class="row g-4 mb-5">
                <!-- LEFT SIDE -->
                <div class="col-lg-6">
                    <div class="row g-4">
                        <?php
                        if( !empty($fire_damage_articles) && is_array($fire_damage_articles) )
                        {
                            // Get the first two records
                            $first_two_fire_damage_articles = array_slice($fire_damage_articles, 0, 2);

                            foreach( $first_two_fire_damage_articles as $fire_damage_article )
                            {
                        ?>
                                <div class="col-md-6">
                                    <div class="cd-card">
                                        <div class="cd-card-image">
                                            <?php
                                            if( !empty($fire_damage_article['list_image']) && file_exists(root_path('images/'.$fire_damage_article['list_image'])) )
                                            {
                                            ?>
                                                <img src="<?php echo site_url('/images/').$fire_damage_article['list_image']; ?>" class="img-fluid" alt="<?php echo $fire_damage_article['title']; ?>"/>
                                            <?php
                                            }
                                            ?>
                                        </div>
                                        <div class="cd-card-body">
                                            <h3 class="cd-card-title">
                                                <?php echo $fire_damage_article['title']; ?>
                                            </h3>
                                            <div class="cd-small-line"></div>
                                            <p class="cd-card-text"><?php echo $fire_damage_article['short_description']; ?></p>
                                            <a href="<?php echo site_url(strtolower($fire_damage_article['article_url'])); ?>" class="cd-readmore">
                                                Read More
                                                <i class="fa-solid fa-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                        <?php
                            }
                        }
                        ?>
                    </div>
                </div>
                <!-- RIGHT SIDE -->
                <div class="col-lg-6">
                    <div class="cd-article-wrap">
                        <!-- ARTICLE -->
                         <?php
                        if( !empty($fire_damage_articles) && is_array($fire_damage_articles) )
                        {
                            // Skip the first two records
                            $fire_damage_articles = array_slice($fire_damage_articles, 2, 3);

                            foreach( $fire_damage_articles as $fire_damage_article )
                            {
                        ?>
                                <div class="cd-article">
                                    <h3 class="cd-article-title">
                                        <a href="<?php echo site_url(strtolower($fire_damage_article['article_url'])); ?>" class="cdotherbloglink">
                                            <?php echo $fire_damage_article['title']; ?>
                                        </a>
                                    </h3>
                                    <p class="cd-article-text">
                                        <?php echo $fire_damage_article['short_description']; ?>
                                    </p>
                                </div>
                        <?php
                            }
                        }
                        ?>

                        <!-- BUTTON -->
                        <div class="cd-btn-wrap">                            
                            <a href="<?php echo site_url('articles'); ?>" class="btn-quote">
                                See All Articles
                                <i class="fa-duotone fa-regular fa-arrow-right-from-line ps-2"></i>
                            </a>                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
require_once __DIR__ . '/includes/footer.php';
?>