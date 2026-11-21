<?php
require_once __DIR__ . '/includes/init.php';

$plumber_directory_slug = ($_GET['slug'] ?? '');

$row_plumber = getPlumberDirectoryBySlug($plumber_directory_slug);

if( empty($row_plumber) )
{
    require_once __DIR__ . '/404.php';
    exit;
}

$city_name = '';
if( !empty($row_plumber['city']) )
{
    $getCityByID = getCityByID($row_plumber['city']);

    $city_name = ucwords($getCityByID['CITY']) ?? '';
}

$state_name = '';
if( !empty($row_plumber['state']) )
{
    $getStateByID = getStateByID($row_plumber['state']);

    $state_name = ucwords($getStateByID['STATE_NAME']) ?? '';
}

$bussiness_name = (
    !empty($row_plumber['business_name']) ? 
    $row_plumber['business_name'] : 
    ($row_plumber['fname'].' '.$row_plumber['lname'])
);

if( empty($bussiness_name) )
{
	$bussiness_name = str_replace('-', " ", ucwords($plumber_directory_slug))." Local Plumbers - Water mold fire restoration";
}

$pagename = "plumber_details.php";

$title = $bussiness_name;

$meta_description = "If you are searching for a Local Plumber in ".$city_name.", ".$bussiness_name." is local verified plumbers, WMF has a list of local verified plumbers in ".$city_name.". We often uses services of plumbers on water damage jobs, you can find tried and verified plumbers in our directory.";

$meta_keywords = $plumber_directory_slug.' local plumber, '.$plumber_directory_slug.' plumber directory, '.$plumber_directory_slug.' verified plumbers, '.$plumber_directory_slug.' plumbing company, '.$plumber_directory_slug.' verified local plumbers';

require_once __DIR__ . '/includes/header.php';
?>

    <section class="cd-property section">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-md-8 col-lg-8">
                    <div class="cd-sectiontitle mb-3">
                        <h1 class="titleh1"><?php echo ucwords($bussiness_name); ?></h1>
                    </div>

                    <h5 class="border-bottom pb-1">Plumbing Company Profile</h5>

                    <div class="row">
                        <div class="col-xl-8 col-md-8 col-lg-8">
                            <div class="mb-2">
                                Location: <?php echo $city_name.', '.($getStateBySlg['STATE_CODE'] ?? $state_name).', '.($row_plumber['zip_code'] ?? ''); ?>
                            </div>

                            <div class="pm_phone mb-2">
                                Phone: <a href="tel:<?php echo $row_plumber['phone']; ?>"><?php echo $row_plumber['phone']; ?></a>
                            </div>

                            <div class="pm_phone mb-2">
                                Emial: <a href="mailto:<?php echo $row_plumber['email']; ?>"><?php echo $row_plumber['email']; ?></a>
                            </div>

                            <div class="pm_phone mb-2">
                                Website: <?php echo $row_plumber['website']; ?>
                            </div>

                            <div class="pm_phone mb-2">
                                License #: <?php echo $row_plumber['license_number']; ?>
                            </div>
                        </div>

                        <div class="col-xl-4 col-md-4 col-lg-4">
                            <?php
                            if( !empty($row_plumber['logo']) && root_path("upload/plumber_logo/".$row_plumber['logo']) )
                            {
                                echo '<img src="'.site_url('/upload/plumber_logo/').$row_plumber['logo'].'" class="img-fluid">';
                            }
                            ?>
                        </div>
                    </div>

                    <div class="border-top mt-1 pt-3">
                        <?php echo nofollow($row_plumber['bio'] ?? ''); ?>
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