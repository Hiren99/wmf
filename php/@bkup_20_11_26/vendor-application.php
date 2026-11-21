<?php
require_once __DIR__ . '/includes/init.php';

$pagename = "vendor-application.php";

$title = "Water Mold Fire Restoration";

$meta_description = 'Water Mold Fire Restoration';

require_once __DIR__ . '/includes/header.php';
?>

    <section class="cd-property section">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-md-8 col-lg-8">

                    <div class="rounded-3 shadow-lg p-4 bg-color-white">
                        <h3 class="mb-3 text-center">Vendor Application</h3>

                        <form id="ajax_vendor_application_frm" method="post" action="<?php echo site_url('/ajax-vendor-application/'); ?>" enctype="multipart/form-data">
                            <input type="hidden" name="vendor_app_addedby" id="vendor_app_addedby" value="<?php echo (!empty($_GET['addedid']) && is_numeric($_GET['addedid']) ? $_GET['addedid'] : 0); ?>">

                            <div class="row g-2">

                                <div class="col-xl-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="vendor_app_first_name" id="vendor_app_first_name" placeholder="First name">
                                        <label for="vendor_app_first_name">First name</label>
                                    </div>
                                </div>

                                <div class="col-xl-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="vendor_app_username" id="vendor_app_username" placeholder="User Name">
                                        <label for="vendor_app_username">User Name</label>
                                    </div>
                                </div>

                                <div class="col-xl-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="vendor_app_password" id="vendor_app_password" placeholder="Password">
                                        <label for="vendor_app_password">Password</label>
                                    </div>
                                </div>

                                <div class="col-xl-12">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" name="vendor_app_email" id="vendor_app_email" placeholder="Email">
                                        <label for="vendor_app_email">Email</label>
                                    </div>
                                </div>

                                <div class="col-xl-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="vendor_app_street_address" id="vendor_app_street_address" placeholder="Street Address">
                                        <label for="vendor_app_street_address">Street Address</label>
                                    </div>
                                </div>

                                <div class="col-xl-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="vendor_app_city" id="vendor_app_city" placeholder="City">
                                        <label for="vendor_app_city">City</label>
                                    </div>
                                </div>

                                <div class="col-xl-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="vendor_app_phone" id="vendor_app_phone" placeholder="Phone">
                                        <label for="vendor_app_phone">Phone</label>
                                    </div>
                                </div>

                                <div class="col-xl-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="vendor_app_zip_code" id="vendor_app_zip_code" placeholder="Zip Code">
                                        <label for="vendor_app_zip_code">Zip Code</label>
                                    </div>
                                </div>

                                <div class="col-xl-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" name="vendor_app_inspector_notes" id="vendor_app_inspector_notes" placeholder="Notes"></textarea>
                                        <label for="vendor_app_inspector_notes">Notes</label>
                                    </div>
                                </div>

                                <div class="col-xl-12">
                                    <?php
                                    if( function_exists('get_check_user_services_list') )
                                    {
                                        foreach( get_check_user_services_list() as $list_key => $list_val )
                                        {
                                        ?>
                                            <div>
                                                <input type="checkbox" name="vendor_app_check_list[<?php echo $list_val ?>]" id="<?php echo $list_key ?>" value="1" /> <?php echo $list_val; ?>
                                            </div>
                                        <?php
                                        }
                                    }
                                    ?>
                                </div>

                                <div class="col-xl-6 col-md-6 col-lg-6">
                                    <div class="g-recaptcha" data-sitekey="<?php echo GOOGLE_RECAPTCHA_SITE_KEY; ?>"></div>
                                    <span id="error_vendor_app_recaptcha" class="text-danger"></span>
                                </div>

                                <div class="col-xl-6 col-md-6 col-lg-6">
                                    <button type="submit" class="btn-quote w-100">Save</button>
                                </div>

                                <div id="vendor_app_frm_message" class="mt-3 text-center"></div>

                            </div>
                        </form>
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