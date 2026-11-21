<?php
require_once __DIR__ . '/includes/init.php';

$pagename = "referral.php";

$title = "Referral Water Mold Fire Restoration";

$meta_description = 'WMF offers Water Damage Restoration, Mold Remediation, Fire Damage Restoration to home and business owners. We offer 24/7 Emergency Response so you know you can get help when you need it most.';

$meta_keywords = "water damage remediation, water damage, mold removal, mold inspection, fire damage, fire damage restoration, mold remediation";

require_once __DIR__ . '/includes/header.php';
?>

    <section class="cd-property section">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-md-8 col-lg-8">

                    <h1>Water Mold Fire Restoration</h1>

                    <p>Thank you for taking the time to introduce your associate to us! Please input their info below so we can reach out and strike up a conversation.</p>

                    <div class="rounded-3 shadow-lg p-4 bg-color-white mb-5">
                        <form id="ajax_referral_frm" method="post" action="<?php echo site_url('/ajax-referral/'); ?>" enctype="multipart/form-data">
                            
                            <div class="row g-2">

                                <div class="col-xl-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="referral_name_company" id="referral_name_company" placeholder="Name/Company">
                                        <label for="referral_name_company">Name/Company</label>
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="referral_phone" id="referral_phone" placeholder="Phone">
                                        <label for="referral_phone">Phone</label>
                                    </div>
                                </div>

                                <div class="col-xl-12">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" name="referral_email" id="referral_email" placeholder="Email">
                                        <label for="referral_email">Email</label>
                                    </div>
                                </div>

                                <div class="col-xl-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" name="referral_comments" id="referral_comments" placeholder="Comments"></textarea>
                                        <label for="referral_comments">Comments</label>
                                    </div>
                                </div>

                                <div class="col-xl-6 col-md-6 col-lg-6">
                                    <div class="g-recaptcha" data-sitekey="<?php echo GOOGLE_RECAPTCHA_SITE_KEY; ?>"></div>
                                    <span id="error_referral_recaptcha" class="text-danger"></span>
                                </div>

                                <div class="col-xl-6 col-md-6 col-lg-6">
                                    <button type="submit" class="btn-quote w-100">Submit</button>
                                </div>

                                <div id="referral_frm_message" class="mt-3 text-center"></div>

                            </div>
                        </form>
                    </div>

                    <div class="text-center">
                        <img src="<?php echo site_url('/images/'); ?>referral-banner.png" class="icon lazyload img-fluid" alt="Water Damage Restoration" title="Water Damage Restoration">
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