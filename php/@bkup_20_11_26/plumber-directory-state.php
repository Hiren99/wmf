<?php
require_once __DIR__ . '/includes/init.php';

$state_slug = ($_GET['state'] ?? '');

$getStateBySlg = getStateBySlg($state_slug);

if( empty($getStateBySlg) )
{
    require_once __DIR__ . '/404.php';
    exit;
}

$state_name = $getStateBySlg['STATE_NAME'];

$pagename = "plumber-directory-state.php";

$title = ucwords($state_name)." Local Plumbers - Water mold fire restoration";

$meta_description = "If you are searching for a Local Plumber in ".ucwords($state_name).", WMF has a list of local verified plumbers in ".ucwords($state_name).". We often uses services of plumbers on water damage jobs, you can find tried and verified ".ucwords($state_name)." plumbers in our directory.";

$meta_keywords = $state_name.' local plumber, '.$state_name.' plumber directory, '.$state_name.' verified plumbers, '.$state_name.' plumbing company, '.$state_name.' verified local plumbers';

$getCityListPlumberDirectoryExistsByStateID = getCityListPlumberDirectoryExistsByStateID($getStateBySlg['ID']);

require_once __DIR__ . '/includes/header.php';
?>

    <section class="cd-property section">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-md-8 col-lg-8">
                    <div class="cd-sectiontitle">
                        <h1 class="titleh1">Search for Verified Local Plumbers in <?php echo ucwords($state_name); ?></h1>
                    </div>

                    <div class="row text-center mb-4">
                        <div class="col-xl-12">
                            <img src="<?php echo site_url(); ?>images/VLP_White-Rectangle.png" alt="Verified Local Plumbers" title="Verified Local Plumbers" class="img-fluid" />
                        </div>
                    </div>

                    <p>If you are searching for a Local Plumber in <?php echo ucwords($state_name); ?>, you are not alone. Water Mold Fire Restoration often uses the services of <?php echo ucwords($state_name); ?> plumbers on water damage jobs. What we found was that the internet is riddled with spam listings from lead generations companies. Not only is this frustrating for the consumer but it also takes away from the profits of the plumbers as they are all but obligated to work with these marketers in order to get jobs. As a convenience to our customers and to show appreciation to the legitimate plumbing companies, we have created the Verified Local Plumber program.</p>

	                <p>Our hope is that by having a resource (US) that verifies the licenses of each <?php echo ucwords($state_name); ?> plumbing company that enlists, we can easily pass this resource along to our customers when needed. This also limits companies to one listing in their actual location so there are not people gaming the system with multiple listings to try to cover more real estate. Ultimately you will know if a Verified Local Plumber’s listing says they are are at a location, they are in fact at that specific location. </p>

                    <div class="border p-4 mt-4">
                        <?php
                        if( !empty($getCityListPlumberDirectoryExistsByStateID) && is_array($getCityListPlumberDirectoryExistsByStateID) )
                        {
                            echo '
                            <div class="row">';

                                foreach( $getCityListPlumberDirectoryExistsByStateID as $row )
                                {
                                    echo '
                                    <div class="col-xl-4">
                                        <a href="'.site_url('/local-plumber/'.strtolower($state_slug).'/'.strtolower($row['SLUG_CITY'])).'" >'.ucwords($row['CITY']).'</a>
                                    </div>
                                    ';
                                }

                            echo '
                            </div>';
                        }
                        else
                        {
                            echo '<h3>No Cities Found</h3>';
                        }

                        local_plumber_form();
                        ?>

                        <div>
                            <a href="<?php echo site_url('/local-plumber/'); ?>" class="btn btn-primary mt-4">Back</a>
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