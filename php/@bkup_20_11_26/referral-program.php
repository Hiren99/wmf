<?php
require_once __DIR__ . '/includes/init.php';

$pagename = "referral-program.php";

$title = "Water Mold Fire Restoration";

$meta_description = 'Water Mold Fire Restoration';

require_once __DIR__ . '/includes/header.php';
?>

    <section class="cd-property section">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-md-8 col-lg-8">

                    <div class="rounded-3 shadow-lg p-4 bg-color-white mb-5">
                        <h3 class="text-center mb-3">Referral Program</h3>
                        
                        <div class="mb-4">
                            <iframe width="100%" height="300" src="https://www.youtube.com/embed/WtUd51hMdwY?autoplay=1&mute=1" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>

                        <h4 class="text-center mb-3">Please Submit the form to inquire about WMF Referral Program </h4>

                        <form id="ajax_referral_program_frm" method="post" action="<?php echo site_url('/ajax-referral-program/'); ?>" enctype="multipart/form-data">
                            
                            <div class="row g-2">

                                <div class="col-xl-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="referral_program_fullname" id="referral_program_fullname" placeholder="Full Name">
                                        <label for="referral_program_fullname">Full Name</label>
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="referral_program_phone" id="referral_program_phone" placeholder="Phone">
                                        <label for="referral_program_phone">Phone</label>
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" name="referral_program_email" id="referral_program_email" placeholder="Email">
                                        <label for="referral_program_email">Email</label>
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="referral_program_zip_code" id="referral_program_zip_code" placeholder="Zip">
                                        <label for="referral_program_zip_code">Zip</label>
                                    </div>
                                </div>

                                <div class="col-xl-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" name="referral_program_comments" id="referral_program_comments" placeholder="How’d You Hear About Us?"></textarea>
                                        <label for="referral_program_comments">How’d You Hear About Us?</label>
                                    </div>
                                </div>

                                <div class="col-xl-6 col-md-6 col-lg-6">
                                    <div class="g-recaptcha" data-sitekey="<?php echo GOOGLE_RECAPTCHA_SITE_KEY; ?>"></div>
                                    <span id="error_referral_program_recaptcha" class="text-danger"></span>
                                </div>

                                <div class="col-xl-6 col-md-6 col-lg-6">
                                    <button type="submit" class="btn-quote w-100">Submit</button>
                                </div>

                                <div id="referral_program_frm_message" class="mt-3 text-center"></div>

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