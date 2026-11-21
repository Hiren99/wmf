<?php
require_once __DIR__ . '/includes/init.php';

$pagename = "contact.php";

$title = "Contact Us - Water Mold Fire Restoration";

$meta_description = 'Use this form below to tell our professional about your water, mold, and/or fire restoration needs and we will get back to you as soon as possible'; 

$meta_keywords = 'contact water mold fire restoration, contact wmf, mold removal, fire damage, water damage restoration';

require_once __DIR__ . '/includes/header.php';
?>

    <!-- ===== contact ===== -->
    <section class="cdcontact">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <!-- Hero Section -->
                    <div class="hero">
                        <img src="<?php echo site_url('/images/'); ?>banner-inner.jpg" class="img-fluid" alt="Contact Information" />
                        <div class="hero-content">
                            <span>24/7 Restoration Support</span>
                            <h1>Contact Information</h1>
                            <p>
                                Get professional help for water, mold, and fire restoration services.
                                Our team is ready to respond quickly.
                            </p>
                        </div>
                    </div>
                    <!-- Info Section -->
                    <div class="info-grid">
                        <div class="card">
                            <h2>We’re Here to Help</h2>
                            <p class="lead">
                                We appreciate any questions you have regarding our services.
                            </p>
                            <div class="service-tags">
                                <span>Water Restoration</span>
                                <span>Mold Removal</span>
                                <span>Fire Restoration</span>
                            </div>
                            <div class="contact-list">
                                <div class="contact-item">
                                    <div class="contact-icon">☎</div>
                                    <div>
                                        <strong>Call Us</strong><br>
                                        <a href="tel:+18009050277" style="color:#374151;text-decoration:none;">800-905-0277</a>
                                    </div>
                                </div>
                                <div class="contact-item">
                                    <div class="contact-icon">✉</div>
                                    <div>
                                        <strong>Email Us</strong><br>
                                        <a href="mailto:help@watermoldfire.net" style="color:#374151;text-decoration:none;">
                                        help@watermoldfire.net
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card resources">
                            <h2>WMF Restoration Resources</h2>
                            <ul>
                                <li>Corporate Information</li>
                                <li>WMF Restoration Story</li>
                                <li>Latest Articles</li>
                                <li>FAQs</li>
                                <li>Careers</li>
                                <li>Contact Information</li>
                            </ul>
                        </div>
                    </div>
                    <div class="description">Use the form below to tell our professional about your water, mold, and/or fire restoration needs and we will get back to you as soon as possible. Usually within the hour. For the most accurate quote provide a photo.</div>
                    <!-- Quote Form -->
                    <div class="quote-section">
                        <div class="quote-header">
                            <h2>Request a Free Quote</h2>
                            <p>Fill out the form and our restoration specialist will contact you shortly.</p>
                        </div>
                        <form id="ajax_contact_frm" class="quote-form" method="post" action="<?php echo site_url('/quote-mailer/'); ?>">
                            <div class="form-grid">
                                <div class="form-group">
                                    <label for="first_name">First Name</label>
                                    <input type="text" id="first_name" name="first_name" placeholder="Enter first name">
                                </div>
                                <div class="form-group">
                                    <label for="last_name">Last Name</label>
                                    <input type="text" id="last_name" name="last_name" placeholder="Enter last name">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email Address</label>
                                    <input type="tel" id="email" name="email" placeholder="Your Email Address">
                                </div>
                                <div class="form-group">
                                    <label for="phone">Phone Number</label>
                                    <input type="tel" id="phone" name="phone" placeholder="Your phone number">
                                </div>
                                <div class="form-group">
                                    <label for="zip">Zip Code</label>
                                    <input type="text" id="zip" name="zip" placeholder="Your zip code">
                                </div>
                                <div class="form-group">
                                    <label for="interest">What are you interested in?</label>
                                    <input type="text" class="form-control" id="interest" name="interest" placeholder="What are you interested in?">
                                </div>
                                <div class="form-group full">
                                    <label for="message">Tell us about your project</label>
                                    <textarea id="message" name="message" placeholder="Describe your restoration needs..."></textarea>
                                </div>
                            </div>
                            <div class="form-grid align-items-center mt-3">
                                <div class="form-group">
                                    <div class="g-recaptcha" data-sitekey="<?php echo GOOGLE_RECAPTCHA_SITE_KEY; ?>"></div>
                                    <span id="error_recaptcha" class="text-danger"></span>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="submit-btn">Get A Quote Now</button>
                                </div>
                            </div>

                            <div id="frm_message" class="mt-3 text-center"></div>

                            <p class="policy-text">
                                By submitting this form I am consenting to receive text messages from WMF Restoration.
                                Messaging frequency may vary. We do not share or sell SMS opt-in, or phone numbers for the purpose of SMS.
                                You can opt out any time by texting STOP. For assistance, text HELP or visit our website at
                                <a href="<?php echo site_url(); ?>" target="_blank">watermoldfire.net</a>.
                                Visit <a href="<?php echo site_url('privacy-policy/'); ?>" target="_self">Privacy Policy</a> and <a href="<?php echo site_url('terms-of-service/'); ?>" target="_self">Terms of Service</a>.
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
    require_once __DIR__ . '/includes/our-client-logos-list.php';
    ?>

<?php
require_once __DIR__ . '/includes/footer.php';
?>