<?php
require_once __DIR__ . '/../includes/init.php';

$pagename = "austin-tx/mold-inspection-testing.php";

$title = "Mold Inspection &amp; Testing in Austin, TX | Pre-Purchase &amp; IAQ";

$meta_description = "Austin mold inspection & testing. Pre-purchase, post-Uri freeze, post-Hill-Country-flash-flood, Hyde Park historic & IAQ assessments. AIHA-accredited lab. 512-540-5768.";

$meta_keywords = "mold inspection austin, mold inspector austin, mold assessment austin, pre-purchase mold inspection, real estate mold inspection, mold testing austin, mold air test, mold surface test, indoor air quality testing austin, post-remediation verification, PRV mold";

$canonical_url = "https://watermoldfire.net/austin-tx/mold-inspection-testing/";

$geo_tags = '
<meta name="geo.region" content="US-TX">
<meta name="geo.placename" content="Austin">
<meta name="geo.position" content="30.4170;-97.7560">
<meta name="ICBM" content="30.4170, -97.7560">
';

$open_graph = '
<meta property="og:type" content="website">
<meta property="og:site_name" content="Water Mold Fire Restoration">
<meta property="og:title" content="Mold Inspection &amp; Testing in Austin, TX | Pre-Purchase &amp; IAQ">
<meta property="og:description" content="Austin mold inspection and testing. Pre-purchase, post-Uri freeze, post-Hill-Country-flash-flood, Hyde Park historic and IAQ assessments.">
<meta property="og:url" content="https://watermoldfire.net/austin-tx/mold-inspection-testing/">
<meta property="og:image" content="'.site_url().'images/logo.webp">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="og:locale" content="en_US">
';

$twitter = '
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Mold Inspection &amp; Testing in Austin, TX">
<meta name="twitter:description" content="Pre-purchase, post-Uri, post-Hill-Country-flash-flood and historic property mold assessments in Austin.">
<meta name="twitter:image" content="'.site_url().'images/logo.webp">
';

$schema_ld_json = '
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "@id": "https://watermoldfire.net/austin-tx/mold-inspection-testing/#service",
      "name": "Mold Inspection & Testing in Austin, TX",
      "serviceType": ["Mold Inspection","Mold Testing","Mold Assessment","Indoor Air Quality Testing","Post-Remediation Verification"],
      "description": "Mold inspection and testing in Austin, TX. Visual assessment, moisture mapping with thermal imaging, air sampling (spore trap), surface sampling, AIHA-accredited lab analysis and written assessment reports for real estate transactions, post-Winter-Storm-Uri verification, post-Hill-Country-flash-flood assessments, Hyde Park and Travis Heights historic properties, Westlake and lake home pre-purchase, insurance claims and post-remediation verification across the Greater Austin metro.",
      "url": "https://watermoldfire.net/austin-tx/mold-inspection-testing/",
      "provider": {"@id": "https://watermoldfire.net/austin-tx/#localbusiness"},
      "areaServed": [
        {"@type": "City", "name": "Austin"},{"@type": "City", "name": "Round Rock"},
        {"@type": "City", "name": "Cedar Park"},{"@type": "City", "name": "Pflugerville"},
        {"@type": "City", "name": "Westlake Hills"},{"@type": "City", "name": "Bee Cave"},
        {"@type": "City", "name": "Lakeway"},{"@type": "City", "name": "Buda"},
        {"@type": "City", "name": "Georgetown"},{"@type": "City", "name": "Leander"}
      ],
      "hoursAvailable": {"@type": "OpeningHoursSpecification","dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"],"opens": "00:00","closes": "23:59"},
      "hasCredential": {
        "@type": "EducationalOccupationalCredential",
        "name": "Texas Licensed Mold Company",
        "credentialCategory": "license",
        "identifier": "RCO1374",
        "recognizedBy": {"@type": "GovernmentOrganization","name": "Texas Department of Licensing and Regulation"}
      },
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Mold Inspection & Testing Services",
        "itemListElement": [
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Visual Mold Inspection & Moisture Mapping"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Air Sampling (Spore Trap)"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Surface Sampling (Tape Lift, Swab, Bulk)"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Pre-Purchase Real Estate Mold Inspection"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Post-Winter-Storm-Uri Mold Inspection"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Post-Hill-Country-Flash-Flood Mold Assessment"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Hyde Park / Travis Heights Historic Property Assessment"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Lake Home & Hill Country Property Assessment"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Insurance Claim Mold Assessment"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Indoor Air Quality (IAQ) Testing"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "HVAC Mold Testing"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Post-Remediation Verification (PRV)"}}
        ]
      }
    },
    {
      "@type": "LocalBusiness","@id": "https://watermoldfire.net/austin-tx/#localbusiness",
      "name": "Water Mold Fire Restoration of Austin",
      "url": "https://watermoldfire.net/austin-tx/",
      "telephone": "+1-512-540-5768","email": "austin@watermoldfire.net",
      "address": {"@type": "PostalAddress","streetAddress": "11266 Taylor Draper Ln","addressLocality": "Austin","addressRegion": "TX","postalCode": "78759","addressCountry": "US"},
      "geo": {"@type": "GeoCoordinates","latitude": 30.4170,"longitude": -97.7560},
      "aggregateRating": {"@type": "AggregateRating","ratingValue": "5.0","reviewCount": "118"}
    },
    {
      "@type": "BreadcrumbList","@id": "https://watermoldfire.net/austin-tx/mold-inspection-testing/#breadcrumb",
      "itemListElement": [
        {"@type": "ListItem","position": 1,"name": "Home","item": "https://watermoldfire.net/"},
        {"@type": "ListItem","position": 2,"name": "Austin, TX","item": "https://watermoldfire.net/austin-tx/"},
        {"@type": "ListItem","position": 3,"name": "Mold Inspection & Testing","item": "https://watermoldfire.net/austin-tx/mold-inspection-testing/"}
      ]
    },
    {
      "@type": "WebPage","@id": "https://watermoldfire.net/austin-tx/mold-inspection-testing/#webpage",
      "url": "https://watermoldfire.net/austin-tx/mold-inspection-testing/",
      "name": "Mold Inspection & Testing in Austin, TX",
      "isPartOf": {"@id": "https://watermoldfire.net/#website"},
      "about": {"@id": "https://watermoldfire.net/austin-tx/mold-inspection-testing/#service"},
      "breadcrumb": {"@id": "https://watermoldfire.net/austin-tx/mold-inspection-testing/#breadcrumb"},
      "inLanguage": "en-US"
    },
    {
      "@type": "FAQPage","@id": "https://watermoldfire.net/austin-tx/mold-inspection-testing/#faq",
      "mainEntity": [
        {"@type": "Question","name": "Does Texas license mold inspectors?","acceptedAnswer": {"@type": "Answer","text": "Yes. TDLR licenses individual Mold Assessment Consultants (MAC) and Mold Assessment Companies under 25 TAC Chapter 295. We operate as a Texas-Licensed Mold Company under RCO1374. For assessment work requiring the individual MAC credential, we coordinate with TX-licensed Mold Assessment Consultants."}},
        {"@type": "Question","name": "Do I need a mold inspection before buying a home in Austin?","acceptedAnswer": {"@type": "Answer","text": "Strongly recommended. Austin\'s hot real estate market means many homes turn over quickly with limited diligence; Winter Storm Uri 2021 affected nearly every home in the metro; Hill Country flash flood events (July 2024, Memorial Day 2015, Halloween 2013) have inundated properties along Onion Creek, Shoal Creek and the Hill Country creek corridors; pre-WWII Hyde Park and Travis Heights historic stock has lath-and-plaster moisture profiles; and Lake Travis / Lake Austin lake homes have shoulder-season moisture exposure. A pre-purchase mold assessment with air sampling tells you what\'s actually in the property before closing."}},
        {"@type": "Question","name": "Should I have a mold assessment after Winter Storm Uri damage?","acceptedAnswer": {"@type": "Answer","text": "Yes. Many Austin homeowners had mitigation performed under enormous time pressure after Feb 2021; many bursts produced multi-day saturation before discovery. Independent assessment confirms whether mitigation succeeded."}},
        {"@type": "Question","name": "Should I have a mold assessment after Hill Country flash flooding?","acceptedAnswer": {"@type": "Answer","text": "Yes. Hill Country flash flood water is Category 3 contaminated water carrying agricultural runoff, sewage and hydrocarbons. Even with prompt extraction, residual moisture seeds mold. Independent assessment confirms cleanup succeeded."}},
        {"@type": "Question","name": "What\'s the difference between a mold inspection and mold testing?","acceptedAnswer": {"@type": "Answer","text": "Inspection is visual and instrument-based (walkthrough, moisture meter, thermal imaging). Testing is lab analysis of physical samples (air spore traps, surface tape lifts, swabs, bulk). Most Austin assessments include both."}},
        {"@type": "Question","name": "Do you assess Lake Travis and Lake Austin lake homes?","acceptedAnswer": {"@type": "Answer","text": "Yes. Lake corridor properties have shoulder-season moisture exposure, post-flood-inflow saturation and HVAC contamination from prolonged off-season vacancy. Pre-purchase and end-of-season assessments are common."}},
        {"@type": "Question","name": "How much does a mold inspection cost in Austin?","acceptedAnswer": {"@type": "Answer","text": "Standard single-family or single-unit condo inspection with 2-3 air samples typically runs in the low hundreds; larger properties and litigation-grade documentation cost more."}},
        {"@type": "Question","name": "How long do mold test results take?","acceptedAnswer": {"@type": "Answer","text": "On-site 1-3 hours. AIHA-accredited lab analysis 3-5 business days standard; 24-48 hours rush."}}
      ]
    }
  ]
}
</script>
';

require_once __DIR__ . '/../includes/header.php';
?>

    <!-- ===== HERO ===== -->
    <section class="hero-section">
        <div class="hero-content">
            <!-- Main Heading -->
            <h1 class="hero-title">
                Mold Inspection & Mold Testing in Austin, TX
            </h1>   
            <!-- Feature Pills -->
            <div class="feature-pills">
                <div class="feature-pill">
                    <i class="fas fa-certificate"></i>
                    <span>IICRC Firm Certified</span>
                </div>
                <div class="feature-pill">
                    <i class="fas fa-comments"></i>
                    <span>Independent Assessment</span>
                </div>
                <div class="feature-pill">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>Austin</span>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <?php
    require_once __DIR__ . '/cta-service-rating.php';
    ?>

    <!-- location tabs -->
    <?php
    require_once __DIR__ . '/form-and-services.php';
    ?>

    <!-- description -->
    <section class="cddescription cdarticlepage">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="cdinner">
                        <div class="articleDesc short-content" id="articleContent">

                            <section class="intro" aria-labelledby="intro-h">
                                <h2 id="intro-h">Mold Inspection &amp; Testing in Austin</h2>
                                <p>
                                Texas regulates mold assessment under the Texas Occupations
                                Code and 25 TAC Chapter 295 (administered by TDLR). Water
                                Mold Fire Restoration of Austin operates as a
                                <strong>Texas-Licensed Mold Company under RCO1374</strong>,
                                and we perform assessments to ASTM and IICRC documentation
                                standards using AIHA-accredited laboratories. We perform
                                inspections and testing for real estate transactions in
                                Austin's active market, post-Winter-Storm-Uri verification,
                                post-Hill-Country-flash-flood assessments, Hyde Park and
                                Travis Heights historic property work, Westlake and Lake
                                Travis lake-home assessments, insurance claims, IAQ
                                concerns and post-remediation verification across the
                                Greater Austin metro. For assessment work falling under the
                                Texas independent-assessor requirement, we coordinate with
                                TX-licensed Mold Assessment Consultants.
                                </p>
                            </section>

                            <section class="why-flbm" aria-labelledby="why-h">
                                <h2 id="why-h">When Austin Properties Need a Mold Inspection</h2>
                                <ul class="listing">
                                    <li>
                                        <strong>Pre-purchase real estate inspections.</strong>
                                        Austin's hot real estate market, with many properties
                                        affected by Uri freeze and Hill Country flash flooding,
                                        plus pre-WWII Hyde Park bungalow and historic stock
                                        moisture profiles.
                                    </li>
                                    <li>
                                        <strong>Post-Winter-Storm-Uri assessments.</strong>
                                        Many Austin homeowners had mitigation performed under
                                        enormous time pressure after Feb 2021. Independent
                                        verification.
                                    </li>
                                    <li>
                                        <strong>Post-Hill-Country-flash-flood assessments.</strong>
                                        July 2024, Memorial Day 2015, Halloween 2013 events
                                        produced Category 3 contaminated water exposure across
                                        affected properties.
                                    </li>
                                    <li>
                                        <strong>Lake home pre-purchase &amp; end-of-season
                                        assessments.</strong>
                                        Lake Travis, Lake Austin and Hill Country lake-front
                                        properties.
                                    </li>
                                    <li>
                                        <strong>Hyde Park, Travis Heights, Old West Austin
                                        historic assessments.</strong>
                                        Pre-WWII Austin lath-and-plaster and original
                                        construction.
                                    </li>
                                    <li>
                                        <strong>Insurance claim documentation.</strong>
                                        TX carriers increasingly require independent mold
                                        assessment on water claims of significant size.
                                    </li>
                                    <li>
                                        <strong>Indoor air quality (IAQ) testing.</strong>
                                        Unexplained respiratory symptoms, musty smell, new-occupant
                                        complaints, due-diligence testing.
                                    </li>
                                    <li>
                                        <strong>Post-Remediation Verification (PRV).</strong>
                                        Required by TX rules on remediation jobs above the size
                                        threshold.
                                    </li>
                                </ul>
                            </section>

                            <section class="licensing" aria-labelledby="lic-h">
                                <h2 id="lic-h">Texas Mold Regulation &amp; Why Independence Matters</h2>
                                <p>
                                Texas mold rules require a written remediation protocol by
                                a TX-licensed Mold Assessment Consultant before remediation
                                on most projects, and the same company cannot do both
                                beyond limited exceptions. We hold the company credential
                                under <strong>RCO1374</strong> and coordinate with
                                independent TX-licensed MACs.
                                </p>
                            </section>

                            <section class="process" aria-labelledby="process-h">
                                <h2 id="process-h">Our Mold Inspection &amp; Testing Process</h2>
                                <ol>
                                    <li><strong>Pre-inspection consult.</strong> Property history, recent water events, occupant concerns.</li>
                                    <li><strong>On-site visual inspection</strong> with photo documentation.</li>
                                    <li><strong>Moisture mapping &amp; thermal imaging.</strong></li>
                                    <li><strong>Air sampling (spore trap).</strong></li>
                                    <li><strong>Surface sampling.</strong></li>
                                    <li><strong>AIHA-accredited lab analysis.</strong> 3-5 business days; rush 24-48 hours.</li>
                                    <li><strong>Written assessment report</strong> with photos, moisture mapping, thermal images, lab results.</li>
                                </ol>
                            </section>

                            <section class="service-area" aria-labelledby="area-h">
                                <h2 id="area-h">Where We Inspect &amp; Test in Austin</h2>
                                <p>
                                Central Austin (Downtown, Hyde Park, Brentwood, Crestview,
                                Allandale, Tarrytown), South Austin (Travis Heights,
                                Bouldin Creek, SoCo, Zilker), N/NW Austin (Mueller,
                                Spicewood Springs, NW Hills, Domain), West Austin / Hill
                                Country (Westlake Hills, Rollingwood, Bee Cave, Lakeway,
                                Lake Travis), Williamson County (Round Rock, Cedar Park,
                                Leander, Georgetown), Hays County (Buda, Kyle, San Marcos).
                                </p>
                            </section>

                            <section class="faq bg-light mb-4" aria-labelledby="faq-h">
                                <h2 id="faq-h">Austin Mold Inspection FAQs</h2>
                                
                                <div class="accordion" id="faqAccordion">

                                    <!-- FAQ 1 -->
                                    <div class="accordion-item">
                                        <h3 class="accordion-header" id="heading_1">
                                            <button class="accordion-button collapsed"
                                                type="button"
                                                data-bs-toggle="collapse"
                                                data-bs-target="#collapse_1"
                                                aria-expanded="false"
                                                aria-controls="collapse_1">
                                                Does Texas license mold inspectors?
                                            </button>
                                        </h3>
                                        <div id="collapse_1"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_1"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>Yes. TDLR licenses MACs and Mold Assessment Companies. We hold the company credential <strong>RCO1374</strong>.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- FAQ 2 -->
                                    <div class="accordion-item">
                                        <h3 class="accordion-header" id="heading_2">
                                            <button class="accordion-button collapsed"
                                                type="button"
                                                data-bs-toggle="collapse"
                                                data-bs-target="#collapse_2"
                                                aria-expanded="false"
                                                aria-controls="collapse_2">
                                                Do I need a mold inspection before buying a home in Austin?
                                            </button>
                                        </h3>
                                        <div id="collapse_2"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_2"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>Strongly recommended for Uri-affected, flash-flood-affected, pre-WWII historic, and lake-home properties.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- FAQ 3 -->
                                    <div class="accordion-item">
                                        <h3 class="accordion-header" id="heading_3">
                                            <button class="accordion-button collapsed"
                                                type="button"
                                                data-bs-toggle="collapse"
                                                data-bs-target="#collapse_3"
                                                aria-expanded="false"
                                                aria-controls="collapse_3">
                                                Should I have a mold assessment after Winter Storm Uri damage?
                                            </button>
                                        </h3>
                                        <div id="collapse_3"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_3"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>Yes &mdash; independent verification that emergency mitigation succeeded.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- FAQ 4 -->
                                    <div class="accordion-item">
                                        <h3 class="accordion-header" id="heading_4">
                                            <button class="accordion-button collapsed"
                                                type="button"
                                                data-bs-toggle="collapse"
                                                data-bs-target="#collapse_4"
                                                aria-expanded="false"
                                                aria-controls="collapse_4">
                                                Should I have a mold assessment after Hill Country flash flooding?
                                            </button>
                                        </h3>
                                        <div id="collapse_4"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_4"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>Yes. Cat 3 contaminated water seeds mold even after prompt extraction.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- FAQ 5 -->
                                    <div class="accordion-item">
                                        <h3 class="accordion-header" id="heading_5">
                                            <button class="accordion-button collapsed"
                                                type="button"
                                                data-bs-toggle="collapse"
                                                data-bs-target="#collapse_5"
                                                aria-expanded="false"
                                                aria-controls="collapse_5">
                                                What's the difference between a mold inspection and mold testing?
                                            </button>
                                        </h3>
                                        <div id="collapse_5"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_5"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>Inspection is visual/instrument; testing is lab analysis. Most assessments include both.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- FAQ 6 -->
                                    <div class="accordion-item">
                                        <h3 class="accordion-header" id="heading_6">
                                            <button class="accordion-button collapsed"
                                                type="button"
                                                data-bs-toggle="collapse"
                                                data-bs-target="#collapse_6"
                                                aria-expanded="false"
                                                aria-controls="collapse_6">
                                                Do you assess Lake Travis and Lake Austin lake homes?
                                            </button>
                                        </h3>
                                        <div id="collapse_6"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_6"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>Yes. Shoulder-season moisture and post-flood-inflow saturation.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- FAQ 7 -->
                                    <div class="accordion-item">
                                        <h3 class="accordion-header" id="heading_7">
                                            <button class="accordion-button collapsed"
                                                type="button"
                                                data-bs-toggle="collapse"
                                                data-bs-target="#collapse_7"
                                                aria-expanded="false"
                                                aria-controls="collapse_7">
                                                How much does a mold inspection cost in Austin?
                                            </button>
                                        </h3>
                                        <div id="collapse_7"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_7"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>Standard with 2-3 air samples: low hundreds.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- FAQ 8 -->
                                    <div class="accordion-item">
                                        <h3 class="accordion-header" id="heading_8">
                                            <button class="accordion-button collapsed"
                                                type="button"
                                                data-bs-toggle="collapse"
                                                data-bs-target="#collapse_8"
                                                aria-expanded="false"
                                                aria-controls="collapse_8">
                                                How long do mold test results take?
                                            </button>
                                        </h3>
                                        <div id="collapse_8"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_8"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>On-site 1-3 hours. Lab 3-5 business days, 24-48 hours rush.</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                
                            </section>

                            <section class="contact" aria-labelledby="contact-h">
                                <h2 id="contact-h">Schedule an Austin Mold Inspection</h2>
                                <address>
                                    <strong>Water Mold Fire Restoration of Austin</strong><br>
                                    11266 Taylor Draper Ln<br>
                                    Austin, TX 78759<br>
                                    <a href="tel:+15125405768">512-540-5768</a> &middot;
                                    <a href="mailto:austin@watermoldfire.net">austin@watermoldfire.net</a><br>
                                    Texas-Licensed Mold Company RCO1374
                                </address>
                                <p>
                                Real estate closing, post-Uri verification,
                                post-Hill-Country-flash-flood assessment, Hyde Park historic
                                pre-purchase, or lake-home evaluation?
                                <a class="cta" href="tel:+15125405768">Call 512-540-5768</a>
                                to schedule.
                                </p>
                                <p class="back-to-hub">
                                &larr; Back to <a href="<?php echo site_url("austin-tx/"); ?>">all Austin restoration services</a>
                                </p>
                            </section>

                        </div>
                        <!-- Show More Button -->
                        <div class="mt-3">
                            <a href="javascript:void(0)" class="cdmorelink" id="showMoreBtn">+ Show More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- full width data -->
    <?php
    require_once __DIR__ . '/why-choose.php';
    ?>

    <?php
    require_once __DIR__ . '/../includes/our-client-logos-list.php';
    ?>

    <!-- city map -->
    <?php
    require_once __DIR__ . '/address-with-map.php';
    ?>

<?php
require_once __DIR__ . '/../includes/footer.php';
?>