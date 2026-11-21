<?php
require_once __DIR__ . '/includes/init.php';

$pagename = "our-work-gallery.php";

$title = "Our Work Gallery - Water Mold Fire Restoration";

$meta_description='View our work gallery photos. Before and After photos for water damage restoration, mold removal and fire damage restoration'; 

$meta_keywords = 'Our work gallery, before and after results, mold removal, fire damage, water damage restoration';

require_once __DIR__ . '/includes/header.php';
?>

    <!-- ===== gallery ===== -->
    <section class="cdgallery">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-md-8 col-lg-8">
                    <div class="gallery-page">
                        <h1 class="titleh1">Our Work - Gallery</h1>
                        <div class="gallery-section">
                            <h2>Water Damage Before &amp; After</h2>
                            <div class="gallery-grid">
                                <div class="gallery-item">
                                    <img src="https://watermoldfire.net/images/water-damage3.jpg" alt="Water Damage Before and After">
                                </div>
                                <div class="gallery-item">
                                    <img src="https://watermoldfire.net/images/water-damage3.jpg" alt="Water Damage Restoration">
                                </div>
                            </div>
                        </div>
                        <div class="gallery-section">
                            <h2>Mold Removal Before &amp; After</h2>
                            <div class="gallery-grid">
                                <div class="gallery-item">
                                    <img src="https://watermoldfire.net/images/mold-removal_1.jpg" alt="Mold Removal Before and After">
                                </div>
                                <div class="gallery-item">
                                    <img src="https://watermoldfire.net/images/mold-removal_1.jpg" alt="Mold Removal Work">
                                </div>
                            </div>
                        </div>
                        <div class="gallery-section">
                            <h2>Fire Damage Before &amp; After</h2>
                            <div class="gallery-grid">
                                <div class="gallery-item">
                                    <img src="https://watermoldfire.net/images/fire-demage_1.jpg" alt="Fire Damage Before and After">
                                </div>
                                <div class="gallery-item">
                                    <img src="https://watermoldfire.net/images/fire-demage_2.jpg" alt="Fire Damage Restoration">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Lightbox -->
                    <div class="lightbox" id="lightbox">
                        <button class="close-btn" id="closeBtn">&times;</button>
                        <button class="prev-btn" id="prevBtn">&#10094;</button>
                        <div class="lightbox-content">
                            <img id="lightboxImg" src="" alt="">
                            <div class="lightbox-title" id="lightboxTitle"></div>
                        </div>
                        <button class="next-btn" id="nextBtn">&#10095;</button>
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