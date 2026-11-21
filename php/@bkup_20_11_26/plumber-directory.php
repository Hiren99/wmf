<?php
require_once __DIR__ . '/includes/init.php';

$is_body_html_close_same_page = true;

$pagename = "plumber-directory.php";

$title = "Verified Local Plumbers Nationwide";

$meta_description = 'If you are searching for a Local Plumber in your area, you are not alone. Water Mold Fire Restoration often uses the services of plumbers on water damage jobs. You can search local plumbers nationwide.';

$meta_keywords = 'local plumber, plumber directory, plumbing company, verified plumbers, verified local plumbers';

$getUsStatesList = getUsStatesList();

require_once __DIR__ . '/includes/header.php';
?>

    <section class="cd-property section">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-md-8 col-lg-8">
                    <div class="cd-sectiontitle">
                        <h1 class="titleh1">Verified Local Plumbers Nationwide</h1>
                    </div>

                    <div class="row text-center mb-4">
                        <div class="col-xl-12">
                            <img src="<?php echo site_url(); ?>images/VLP_White-Rectangle.png" alt="Verified Local Plumbers" title="Verified Local Plumbers" class="img-fluid" />
                        </div>
                    </div>

                    <p>If you are searching for a Local Plumber in your area, you are not alone. Water Mold Fire Restoration often uses the services of plumbers on water damage jobs. What we found was that the internet is riddled with spam listings from lead generations companies. Not only is this frustrating for the consumer but it also takes away from the profits of the plumbers as they are all but obligated to work with these marketers in order to get jobs. As a convenience to our customers and to show appreciation to the legitimate plumbing companies, we have created the Verified Local Plumber program.</p>

	                <p> Our hope is that by having a resource (US) that verifies the licenses of each plumbing company that enlists, we can easily pass this resource along to our customers when needed. This also limits companies to one listing in their actual location so there are not people gaming the system with multiple listings to try to cover more real estate. Ultimately you will know if a Verified Local Plumber’s listing says they are are at a location, they are in fact at that specific location.</p>

                    <h2 class="mb-4">Search Your State for a Verified Local Plumber</h2>

                    <div id="map"></div>

                    <div class="border p-4 mt-4">
                        <?php
                        if( !empty($getUsStatesList) && is_array($getUsStatesList) )
                        {
                            echo '
                            <div class="row">';

                                foreach( $getUsStatesList as $row )
                                {
                                    echo '
                                    <div class="col-xl-4">
                                        <a href="'.site_url('/local-plumber/'.strtolower($row['SLUG'])).'" >'.ucwords($row['STATE_NAME']).'</a>
                                    </div>
                                    ';
                                }

                            echo '
                            </div>';
                        }

                        local_plumber_form();
                        ?>
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

<script type='text/javascript' src='<?php echo site_url(); ?>js/mapdata.js'></script>
<script type='text/javascript' src='<?php echo site_url(); ?>js/usmap.js'></script>