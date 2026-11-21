<?php
require_once __DIR__ . '/includes/init.php';

$pagename = "holiday-notice-template.php";

$title = "Holiday Notice Template";

$meta_description = 'Holiday Notice Template';

require_once __DIR__ . '/includes/header.php';
?>

<style>
    .hpp_notice_link {
        font-size: 1.1rem;;
    }
    .hpp_notice {
        margin-top: 30px;
    }
    .hpp_notice h3 {
        font-size: 1.6rem;
        font-weight: 600;
    }
    .hpp_notice h4 {
        font-size: 1.4rem;
        margin-bottom: 10px;
        font-weight: 600;
    }
    .hpp_notice hr {
        margin: 20px 0;
    }
    .hpp_notice .pi_detail {
        margin: 15px 0;
    }
    .hpp_notice .pi_detail .bb_1 {
        border-bottom: 1px solid #212529;
        width: 250px;
        display: inline-block;
    }
</style>

    <section class="cd-property section">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-md-8 col-lg-8">
                    <div class="cd-sectiontitle text-center">
                        <h1 class="titleh1">Holiday Notice Template</h1>
                    </div>

                    <div class="text-center">
                    <p>Below you will find a preview of the Holiday Notice to Owner/Tenant. To Download the word template simply click the link below.</p>

                    <a href="<?php echo site_url(); ?>Holiday-Property-Protection-Notice.docx" download class="hpp_notice_link">Download Holiday Notice Template</a>
                </div>

                <div class="hpp_notice">
                    <h3>Holiday Property Protection Notice</h3>
                    <hr>

                    <h4>Property Information</h4>

                    <div class="pi_detail">
                        <div><b>Date:</b> <span class="bb_1"></span></div>
                        <div><b>Property Management Company:</b> <span class="bb_1"></span></div>
                        <div><b>Property Address / Unit #:</b> <span class="bb_1"></span></div>
                    </div>

                    <p>The holiday season often involves travel and extended time away from home. When a property is left unattended, even minor issues—such as a slow plumbing leak, elevated humidity, or lack of airflow—can quickly lead to significant damage.</p>
                    <p>This notice is being provided to help reduce the risk of water damage and mold growth while you are away, allowing you to enjoy a joyful and stress-free holiday season. </p>
                    <p>If you are traveling for the Holidays, please review the following tips. These proactive steps before leaving can significantly reduce the risk of property damage while your property is unoccupied.</p>

                    <hr>

                    <h4>Water Shut Off</h4>

                    <ul class="listing">
                        <li><b>Turn off the main water supply</b> to the unit if possible.</li>
                        <li>
                            <span>If the main water supply cannot be shut off, <b>close individual shut-off</b> valves at plumbing fixtures such as:</span>
                            <ul class="listing">
                                <li>Sinks</li>
                                <li>Toilets</li>
                                <li>Washing machines</li>
                                <li>Dishwashers</li>
                            </ul>
                        </li>
                    </ul>

                    <hr>

                    <h4>Humidity & Temperature Control</h4>

                    <ul class="listing">
                        <li><b>Do not turn off the HVAC system.</b><br>Maintain a consistent temperature that helps control indoor humidity and avoids drastic fluctuations that can create condensation.</li>
                        <li>
                            <span><b>Monitor indoor humidity.</b><br>Indoor humidity should ideally remain at <b>50% or below</b>.</span>
                            <ul class="listing">
                                <li>If you do not have a humidity monitor, consider purchasing one.</li>
                                <li>Adjust thermostat settings as needed to maintain proper humidity levels.</li>
                            </ul>
                        </li>
                    </ul>

                    <hr>

                    <h4>Airflow & Filtration</h4>

                    <ul class="listing">
                        <li><b>Change air filter(s)</b> before leaving to ensure proper airflow and efficient HVAC operation.</li>
                        <li><b>Leave interior doors open</b> where appropriate to allow air to circulate throughout the property.</li>
                        <li><b>Leave closet doors open.</b><br>Closets often have limited airflow and can be one of the first places mold growth occurs, especially during periods of elevated humidity.</li>
                    </ul>

                    <hr>

                    <h4>Cleaning & Preparation</h4>

                    <ul class="listing">
                        <li><b>Perform a deep clean prior to leaving.</b><br>Dust, debris, and organic materials can act as nutrients for mold growth when humidity rises.</li>
                        <li>Remove trash and perishable items before departure.</li>
                    </ul>

                    <hr>

                    <h4>Light & Ventilation</h4>

                    <ul class="listing">
                        <li>Where safe and permitted, <b>leave blinds or curtains open</b> to allow natural sunlight into the property during the day.</li>
                    </ul>

                    <hr>

                    <h4>Smart Monitoring & Access</h4>

                    <ul class="listing">
                        <li>
                            <span>Consider using <b>smart monitoring devices</b>, such as:</span>
                            <ul class="listing">
                                <li>App-connected thermostats</li>
                                <li>Water leak detectors<br>These tools can alert you to potential issues while you are away.</li>
                            </ul>
                        </li>
                        <li><b>Leave a key or access instructions</b> with a trusted individual who can quickly access the property if needed.</li>
                    </ul>

                    <hr>

                    <h4>Insurance Preparedness</h4>

                    <ul class="listing">
                        <li><b>Gather your insurance documentation before traveling.</b><br>Ensure you have your <b>insurance carrier name and policy number readily available</b> in case you need it while you are away.</li>
                        <li>Store this information in a secure but accessible location, such as a password-protected phone note or email.</li>
                    </ul>

                    <hr>

                    <h4>Final Reminder</h4>
                    <p>A few minutes of preparation before leaving can help prevent costly damage, insurance claims, and disruptions during the holiday season. These steps are intended to help protect your property and provide peace of mind while you are away.</p>

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