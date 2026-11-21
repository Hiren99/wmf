<?php
require_once __DIR__ . '/includes/init.php';

$pagename = "lead-form.php";

$title = "Lead - Water Mold Fire Restoration";

$meta_description = "Lead - Water Mold Fire Restoration";

$meta_keywords = "";

require_once __DIR__ . '/includes/header.php';
?>

    <section class="cd-property section">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-md-12 col-lg-12">
                    
                    <aside class="quote-card mb-4">
                        <div class="quote-header">
                            <h3>Add Lead</h3>
                        </div>
                        <form id="ajax_lead_form" method="post" action="<?php echo site_url('/ajax-lead-form/'); ?>">
                            <div class="row g-2">
                                <div class="col-xl-6 col-md-6 col-lg-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="lead_customer_name" id="lead_customer_name" placeholder="Customer Name" />
                                        <label for="lead_customer_name">Customer Name</label>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-md-6 col-lg-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" name="lead_email_address" id="lead_email_address" placeholder="Email Address" />
                                        <label for="lead_email_address">Email Address</label>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-md-6 col-lg-6">
                                    <div class="form-floating">
                                        <input type="tel" class="form-control" name="lead_phone_number" id="lead_phone_number" placeholder="Phone Number" />
                                        <label for="lead_phone_number">Phone Number</label>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-md-6 col-lg-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="lead_secondary_phone_number" id="lead_secondary_phone_number" placeholder="Secondary Phone Number" />
                                        <label for="lead_secondary_phone_number">Secondary Phone Number</label>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-md-12 col-lg-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="lead_street_address" id="lead_street_address" placeholder="Street Address" />
                                        <label for="lead_street_address">Street Address</label>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-4 col-lg-4">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="lead_zipcode" id="lead_zipcode" placeholder="Zip Code of Property" />
                                        <label for="lead_zipcode">Zip Code of Property</label>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-4 col-lg-4">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="lead_city" id="lead_city" placeholder="City" />
                                        <label for="lead_city">City</label>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-4 col-lg-4">
                                    <div class="form-floating">
                                        <input type="type" class="form-control" name="lead_state" id="lead_state" placeholder="State" />
                                        <label for="lead_state">State</label>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-md-6 col-lg-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="lead_insurance_carrier" id="lead_insurance_carrier" placeholder="Insurance Carrier" />
                                        <label for="lead_insurance_carrier">Insurance Carrier</label>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-md-6 col-lg-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="lead_insurance_agent" id="lead_insurance_agent" placeholder="Insurance Agent" />
                                        <label for="lead_insurance_agent">Insurance Agent</label>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-md-6 col-lg-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="lead_policy_no" id="lead_policy_no" placeholder="Policy #" />
                                        <label for="lead_policy_no">Policy #</label>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-md-6 col-lg-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="lead_claim_no" id="lead_claim_no" placeholder="Claim #" />
                                        <label for="lead_claim_no">Claim #</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-floating">
                                <textarea class="form-control" id="lead_comments" name="lead_comments" placeholder="Comments"></textarea>
                                <label for="lead_comments">Comments</label>
                            </div>
                            <!-- Captcha -->
                            <div class="row align-items-center">
                                <div class="col-xl-6 col-md-6 col-lg-6">
                                    <div class="g-recaptcha" data-sitekey="<?php echo GOOGLE_RECAPTCHA_SITE_KEY; ?>"></div>
                                    <span id="error_lead_recaptcha" class="text-danger"></span>
                                </div>
                                <div class="col-xl-6 col-md-6 col-lg-6">
                                    <button type="submit" class="btn-quote px-5">Submit</button>
                                </div>
                            </div>

                            <div id="lead_form_messages" class="mt-3 text-center"></div>
                            
                            <div class="quote-footer">
                                By submitting this form I am consenting to receive text messages from
                                <strong>WMF Restoration</strong>. <br />
                                <a href="<?php echo site_url('terms-of-service'); ?>">Click here</a> for SMS Terms of Service.
                            </div>
                        </form>
                    </aside>
                        
                </div>
            </div>            
        </div>
    </section>

    <?php
    require_once __DIR__ . '/includes/our-client-logos-list.php';
    ?>

<?php
if( isset($pg) && $pg == 'yelp' )
{
?>
    <script>
        try
        {
            __adroll.track("pageView", {"segment_name":"<?php echo $id; ?>"})
        }
        catch(err) {}
    </script>
<?php
}
?>

<?php
require_once __DIR__ . '/includes/footer.php';
?>