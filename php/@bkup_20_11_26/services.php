<?php
require_once __DIR__ . '/includes/init.php';

$pagename = "services.php";

$title = "Our Services at Water Mold Fire Restoration";

$meta_description = 'WMF offers more than 50 major metro areas unsurpassed service when it comes to water damage, mold removal, and fire restoration. Our team members are hand selected and IICRC certified to make sure you will always receive the highest quality work when you need it most. Review our services.';

$meta_keywords = 'water damage restoration, mold removal, mold remediation, fire damage restoration, air duct cleaning, water damage, fire damage';

require_once __DIR__ . '/includes/header.php';
?>

    <section class="cd-property section">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-md-8 col-lg-8">
                    <div class="cd-sectiontitle text-center">
                        <h1 class="titleh1">Services</h1>
                    </div>

                    <div>
                        <p>WMF offers more than 50 major metro areas unsurpassed service when it comes to water damage, mold removal, and fire restoration. Our team members are hand selected and IICRC certified to make sure you will always receive the highest quality work when you need it most.</p>
                        <p>Other Services:</p>
                        <ul class="listing mb-4">
                            <li>Air Duct Cleaning</li>
                            <li>Carpet Cleaning</li>
                            <li>Full Demolition</li>
                            <li>Pack Out and Pack In</li>
                            <li>Smoke and Odor Removal</li>
                        </ul>

                        <p><a href="<?php echo site_url(); ?>water-damage-restoration/"><strong>Water Damage Restoration</strong></a></p>
                        <p>When it comes to water damage restoration and flood cleanup services, no one does it better than us. We have teams standing by around the clock to take your call and dispatch teams at a moments notice.</p>

                        <p><a href="<?php echo site_url(); ?>mold-removal/"><strong>Mold Removal</strong></a></p>
                        <p>If you have elevated levels of mold in your home or business, hiring the professionals at Water Mold Fire will help ensure the problem is handled correctly. Indoor mold growth can be harmful one’s health and must be handled properly. We know exactly what needs to be done!</p>

                        <p><a href="<?php echo site_url(); ?>fire-damage-restoration/"><strong>Fire Damage Restoration</strong></a></p>
                        <p>If your home or business has fallen victim to a fire, we can help you restore it back to its original state. Our team has dealt with countless fire damaged homes and are prepared to put their skills to work when called upon.</p>

                        <p><strong><a href="<?php echo site_url(); ?>air-duct-cleaning/">Air Duct Cleaning</a></strong></p>
                        <p>Duct cleaning is essentially the cleaning of the various components of the cooling and heating systems of air systems. It is recommended that the air ducts and handler of the heating and cooling systems are cleaned every 3-5 years in order to keep the system energy efficient, clean and safe.</p>
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