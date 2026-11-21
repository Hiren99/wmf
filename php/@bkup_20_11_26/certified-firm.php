<?php
require_once __DIR__ . '/includes/init.php';

$pagename = "about-us.php";

$title = "Certified Firm";

$meta_description = 'Certified Firm';

require_once __DIR__ . '/includes/header.php';
?>

    <section class="cd-property section">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-md-8 col-lg-8">
                    <div class="cd-sectiontitle text-center">
                        <h1 class="titleh1">Certified Firm</h1>
                    </div>
                    
                    <div class="row">
                        <div class="col-xl-12">
                            <img src="<?php echo site_url(); ?>images/iicrc-certified.jpg" class="img-fluid border" />
                        </div>
                    </div>
                        
                </div>
                
                <?php
                require_once __DIR__ . '/includes/left-sidebar.php';
                ?>
            </div>            
        </div>
    </section>

    <?php
    require_once __DIR__ . '/includes/our-client-logos-list.php';
    ?>

<?php
require_once __DIR__ . '/includes/footer.php';
?>