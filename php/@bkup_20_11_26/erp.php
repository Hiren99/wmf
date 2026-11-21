<?php
require_once __DIR__ . '/includes/init.php';

$pagename = "erp.php";

$title = "Water Mold Fire Restoration Emergency Response Program";

$meta_description = 'Water Mold Fire Restoration Emergency Response Program';

require_once __DIR__ . '/includes/header.php';
?>

    <section class="cd-property section">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-md-8 col-lg-8">

                    <div class="rounded-3 shadow-lg p-4 bg-color-white mb-5">
                        <h4 class="text-center mb-3">Please Submit the form to Inquire about WMF’s Emergency Response Program</h4>

                        <form id="ajax_erp_frm" method="post" action="<?php echo site_url('/ajax-erp/'); ?>" enctype="multipart/form-data">
                            
                            <div class="row g-2">

                                <div class="col-xl-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="erp_fullname" id="erp_fullname" placeholder="Full Name">
                                        <label for="erp_fullname">Full Name</label>
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="erp_phone" id="erp_phone" placeholder="Phone">
                                        <label for="erp_phone">Phone</label>
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" name="erp_email" id="erp_email" placeholder="Email">
                                        <label for="erp_email">Email</label>
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="erp_zip_code" id="erp_zip_code" placeholder="Zip">
                                        <label for="erp_zip_code">Zip</label>
                                    </div>
                                </div>

                                <div class="col-xl-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" name="erp_comments" id="erp_comments" placeholder="How’d You Hear About Us?"></textarea>
                                        <label for="erp_comments">How’d You Hear About Us?</label>
                                    </div>
                                </div>

                                <div class="col-xl-6 col-md-6 col-lg-6">
                                    <div class="g-recaptcha" data-sitekey="<?php echo GOOGLE_RECAPTCHA_SITE_KEY; ?>"></div>
                                    <span id="error_erp_recaptcha" class="text-danger"></span>
                                </div>

                                <div class="col-xl-6 col-md-6 col-lg-6">
                                    <button type="submit" class="btn-quote w-100">Submit</button>
                                </div>

                                <div id="erp_frm_message" class="mt-3 text-center"></div>

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