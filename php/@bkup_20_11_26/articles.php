<?php
require_once __DIR__ . '/includes/init.php';

$pagename = "articles.php";

$title = "Water Mold Fire Restoration Articles";

$meta_description = 'Water Mold Fire Restoration Articles';

require_once __DIR__ . '/includes/header.php';

$fetchArticleAllCategoryList = fetchArticleAllCategoryList();

$fetchArticleList = fetchArticleList(1);
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
                        <!-- <div class="search-bar">
                            <input type="text" class="form-control" placeholder="Enter city, zip or service..."/>
                            <button class="btn-quote">Search</button>
                        </div> -->
                    </div>
                </div>
                <!-- RIGHT IMAGE -->
                <div class="col-lg-6">
                    <div class="imagewrapper">
                        <div class="image-card">
                            <!-- SET YOUR IMAGE PATH -->
                            <img src="<?php echo site_url(); ?>images/fire-demage.jpg" class="img-fluid cdheroimg" alt="Restoration Resources?" />                            
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

    <div class="cdlistinner">
        <div class="container">
            <div id="loading" style="display: none;">Loading articles...</div>

            <div id="article-data">
                <?php echo $fetchArticleList['html'] ?? ''; ?>
            </div>
        </div>        
    </div>

<?php
require_once __DIR__ . '/includes/footer.php';
?>