<?php
require_once __DIR__ . '/includes/init.php';

$state_slug = ($_GET['state'] ?? '');
$city_slug = ($_GET['city'] ?? '');

$getStateBySlg = getStateBySlg($state_slug);

if( empty($getStateBySlg) )
{
    require_once __DIR__ . '/404.php';
    exit;
}

$getCityBySlugAndStateID = getCityBySlugAndStateID($city_slug, $getStateBySlg['ID']);

if( empty($getCityBySlugAndStateID) )
{
    require_once __DIR__ . '/404.php';
    exit;
}

$state_name = $getStateBySlg['STATE_NAME'];
$city_name = $getCityBySlugAndStateID['CITY'];

$pagename = "plumber_city_listing.php";

$title = ucwords($city_name)." Local Plumbers - Water mold fire restoration";

$meta_description = "If you are searching for a Local Plumber in ".ucwords($city_name).", WMF has a list of local verified plumbers in ".ucwords($city_name).". We often uses services of plumbers on water damage jobs, you can find tried and verified ".$city_name." plumbers in our directory.";

$meta_keywords = $city_name.' local plumber, '.$city_name.' plumber directory, '.$city_name.' verified plumbers, '.$city_name.' plumbing company, '.$city_name.' verified local plumbers';

$getCityListPMExistsByStateIDAndCityID = getCityListPMExistsByStateIDAndCityID($getStateBySlg['ID'], $getCityBySlugAndStateID['ID']);

require_once __DIR__ . '/includes/header.php';
?>

    <section class="cd-property section">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-md-8 col-lg-8">
                    <div class="cd-sectiontitle">
                        <h1 class="titleh1">Search for Verified Local Plumbers in <?php echo ucwords($city_name); ?></h1>
                    </div>

                    <div class="row text-center mb-4">
                        <div class="col-xl-12">
                            <img src="<?php echo site_url(); ?>images/VLP_White-Rectangle.png" alt="Verified Local Plumbers" title="Verified Local Plumbers" class="img-fluid" />
                        </div>
                    </div>

                    <p>If you are searching for a Local Plumber in <?php echo ucwords($city_name); ?>, you are not alone. Water Mold Fire Restoration often uses the services of <?php echo ucwords($city_name); ?> plumbers on water damage jobs. What we found was that the internet is riddled with spam listings from lead generations companies. Not only is this frustrating for the consumer but it also takes away from the profits of the plumbers as they are all but obligated to work with these marketers in order to get jobs. As a convenience to our customers and to show appreciation to the legitimate plumbing companies, we have created the Verified Local Plumber program.</p>

	                <p>Our hope is that by having a resource (US) that verifies the licenses of each <?php echo ucwords($city_name); ?> plumbing company that enlists, we can easily pass this resource along to our customers when needed. This also limits companies to one listing in their actual location so there are not people gaming the system with multiple listings to try to cover more real estate. Ultimately you will know if a Verified Local Plumber’s listing says they are are at a location, they are in fact at that specific location. </p>

                    <div class="border p-4 mt-4">
                        <?php
                        if( !empty($getCityListPMExistsByStateIDAndCityID) && is_array($getCityListPMExistsByStateIDAndCityID) )
                        {
                            foreach( $getCityListPMExistsByStateIDAndCityID as $row )
                            {
                                // echo "<pre>"; print_r($row); echo "</pre>";
                                $bussiness_name = !empty($row['business_name']) ? $row['business_name'] : ($row['fname'].' '.$row['lname']);

                                $pm_url = site_url('/local-plumber/'.strtolower($state_slug).'/'.strtolower($city_slug).'/'.strtolower($row['slug']));
                            ?>
                                <div class="pm_item">
                                    <h3 class="pm_business_name mb-3">
                                        <a href="<?php echo $pm_url; ?>"><?php echo $bussiness_name; ?></a>
                                    </h3>
                                
                                    <div class="pm_body">
                                        <div class="row">
                                            <div class="col-xl-8 col-md-8 col-lg-8">
                                                <div class="pm_phone mb-2">
                                                    <a href="tel:<?php echo $row['phone']; ?>"><?php echo $row['phone']; ?></a>
                                                </div>

                                                <div class="plumber_area fst-italic mb-2">
                                                    <?php echo $city_name.', '.($getStateBySlg['STATE_CODE'] ?? $state_name).', '.$row['zip_code']; ?>
                                                </div>

                                                <div class="pm_ffering fw-bold mb-2">Offering Plumbing Service in <?php echo $city_name; ?></div>

                                                <div class="pm_bio">
                                                    <?php echo nofollow($row['bio'] ?? '').(!empty($row['website']) ? ' '.$row['website'] : ''); ?>
                                                </div>
                                            </div>

                                            <div class="col-xl-4 col-md-4 col-lg-4">
                                                <?php
                                                if( !empty($row['logo']) && root_path("upload/plumber_logo/".$row['logo']) )
                                                {
                                                    echo '<img src="'.site_url('/upload/plumber_logo/').$row['logo'].'" class="img-fluid">';
                                                }
                                                ?>
                                            </div>
                                        </div>

                                        <div class="pm_btn_view_detail_main text-center border-top pt-3 my-2">
                                            <a href="<?php echo $pm_url; ?>" class="pm_btn_view_detail">View Details</a>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            }
                        }

                        local_plumber_form();
                        ?>

                        <div>
                            <a href="<?php echo site_url('/local-plumber/'.strtolower($state_slug)); ?>" class="btn btn-primary mt-4">Back</a>
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