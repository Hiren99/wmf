<?php
require_once __DIR__ . '/../includes/init.php';

$pagename = "dallas-tx/mold-inspection-testing.php";

$title = "Mold Inspection &amp; Testing in Dallas, TX | Pre-Purchase &amp; IAQ";

$meta_description = "Dallas mold inspection & testing. Pre-purchase, post-Uri freeze, post-tornado, Lakewood Tudor & IAQ assessments. AIHA-accredited lab. Call 972-559-4244.";

$meta_keywords = "mold inspection dallas, mold inspector dallas, mold assessment dallas, pre-purchase mold inspection, real estate mold inspection, mold testing dallas, mold air test, mold surface test, indoor air quality testing dallas, post-remediation verification, PRV mold";

$canonical_url = "https://watermoldfire.net/dallas-tx/mold-inspection-testing/";

$geo_tags = '
<meta name="geo.region" content="US-TX">
<meta name="geo.placename" content="Dallas">
<meta name="geo.position" content="32.8230;-96.7670">
<meta name="ICBM" content="32.8230, -96.7670">
';

$open_graph = '
<meta property="og:type" content="website">
<meta property="og:site_name" content="Water Mold Fire Restoration">
<meta property="og:title" content="Mold Inspection &amp; Testing in Dallas, TX | Pre-Purchase &amp; IAQ">
<meta property="og:description" content="Dallas mold inspection and testing. Pre-purchase, post-Uri freeze, post-tornado, Lakewood Tudor and IAQ assessments. Air and surface sampling, AIHA-accredited lab.">
<meta property="og:url" content="https://watermoldfire.net/dallas-tx/mold-inspection-testing/">
<meta property="og:image" content="'.site_url().'images/logo.webp">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="og:locale" content="en_US">
';

$twitter = '
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Mold Inspection &amp; Testing in Dallas, TX">
<meta name="twitter:description" content="Pre-purchase, post-Uri, post-tornado, Lakewood Tudor and IAQ mold assessments in Dallas.">
<meta name="twitter:image" content="'.site_url().'images/logo.webp">
';

$schema_ld_json = '
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "@id": "https://watermoldfire.net/dallas-tx/mold-inspection-testing/#service",
      "name": "Mold Inspection & Testing in Dallas, TX",
      "serviceType": ["Mold Inspection","Mold Testing","Mold Assessment","Indoor Air Quality Testing","Post-Remediation Verification"],
      "description": "Mold inspection and testing in Dallas, TX. Visual assessment, moisture mapping with thermal imaging, air sampling (spore trap), surface sampling, AIHA-accredited lab analysis and written assessment reports for real estate transactions, post-Winter-Storm-Uri verification, post-tornado assessments, Lakewood Tudor and Park Cities historic properties, insurance claims and post-remediation verification across Dallas County and the DFW metro.",
      "url": "https://watermoldfire.net/dallas-tx/mold-inspection-testing/",
      "provider": {"@id": "https://watermoldfire.net/dallas-tx/#localbusiness"},
      "areaServed": [
        {"@type": "City", "name": "Dallas"},{"@type": "City", "name": "Highland Park"},
        {"@type": "City", "name": "University Park"},{"@type": "City", "name": "Plano"},
        {"@type": "City", "name": "Frisco"},{"@type": "City", "name": "Richardson"},
        {"@type": "City", "name": "Garland"},{"@type": "City", "name": "Irving"},
        {"@type": "City", "name": "Arlington"},{"@type": "City", "name": "McKinney"}
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
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Post-Tornado Mold Assessment"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Post-Hail-Roof-Leak Attic Assessment"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Lakewood Tudor & East Dallas Historic Property Assessment"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Park Cities Mansion Mold Assessment"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Insurance Claim Mold Assessment"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Indoor Air Quality (IAQ) Testing"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "HVAC Mold Testing"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Post-Remediation Verification (PRV)"}}
        ]
      }
    },
    {
      "@type": "LocalBusiness","@id": "https://watermoldfire.net/dallas-tx/#localbusiness",
      "name": "Water Mold Fire Restoration of Dallas",
      "url": "https://watermoldfire.net/dallas-tx/",
      "telephone": "+1-972-559-4244","email": "dallas@watermoldfire.net",
      "address": {"@type": "PostalAddress","streetAddress": "6215 Richmond Avenue","addressLocality": "Dallas","addressRegion": "TX","postalCode": "75214","addressCountry": "US"},
      "geo": {"@type": "GeoCoordinates","latitude": 32.8230,"longitude": -96.7670},
      "aggregateRating": {"@type": "AggregateRating","ratingValue": "5.0","reviewCount": "118"}
    },
    {
      "@type": "BreadcrumbList","@id": "https://watermoldfire.net/dallas-tx/mold-inspection-testing/#breadcrumb",
      "itemListElement": [
        {"@type": "ListItem","position": 1,"name": "Home","item": "https://watermoldfire.net/"},
        {"@type": "ListItem","position": 2,"name": "Dallas, TX","item": "https://watermoldfire.net/dallas-tx/"},
        {"@type": "ListItem","position": 3,"name": "Mold Inspection & Testing","item": "https://watermoldfire.net/dallas-tx/mold-inspection-testing/"}
      ]
    },
    {
      "@type": "WebPage","@id": "https://watermoldfire.net/dallas-tx/mold-inspection-testing/#webpage",
      "url": "https://watermoldfire.net/dallas-tx/mold-inspection-testing/",
      "name": "Mold Inspection & Testing in Dallas, TX",
      "isPartOf": {"@id": "https://watermoldfire.net/#website"},
      "about": {"@id": "https://watermoldfire.net/dallas-tx/mold-inspection-testing/#service"},
      "breadcrumb": {"@id": "https://watermoldfire.net/dallas-tx/mold-inspection-testing/#breadcrumb"},
      "inLanguage": "en-US"
    },
    {
      "@type": "FAQPage","@id": "https://watermoldfire.net/dallas-tx/mold-inspection-testing/#faq",
      "mainEntity": [
        {"@type": "Question","name": "Does Texas license mold inspectors?","acceptedAnswer": {"@type": "Answer","text": "Yes. Texas regulates mold assessment and mold remediation under the Texas Occupations Code and 25 TAC Chapter 295, administered by the Texas Department of Licensing and Regulation (TDLR). Mold assessment in Texas requires a state-issued Mold Assessment Consultant (MAC) license for the individual assessor and a Mold Assessment Company license for the company. We operate as a Texas-Licensed Mold Company under RCO1374. For mold assessments that fall under the Texas assessment requirement on remediation work above the size threshold, we coordinate with TX-licensed Mold Assessment Consultants who hold the individual MAC credential."}},
        {"@type": "Question","name": "Do I need a mold inspection before buying a home in Dallas?","acceptedAnswer": {"@type": "Answer","text": "Strongly recommended for any property that may have been affected by February 2021\'s Winter Storm Uri freeze (millions of frozen-pipe bursts across Texas with many bursts undetected for days), the May 2024 DFW tornado outbreak or the October 2019 North Dallas EF3 tornado; for any pre-WWII Lakewood Tudor, M Streets, Munger Place or Junius Heights historic property; for Park Cities mansion stock with original construction details; and for any pre-1990 single-family stock with copper slab supply lines. Standard Dallas home inspections do not typically include air sampling. A pre-purchase assessment with air sampling tells you what\'s actually behind the drywall, in the attic and in the HVAC system before you close."}},
        {"@type": "Question","name": "Should I have a mold assessment after Winter Storm Uri damage?","acceptedAnswer": {"@type": "Answer","text": "Yes — and we\'ve been performing post-Uri verification assessments continuously since the 2021 event. Many DFW homeowners had mitigation performed under enormous time pressure and contractor-capacity strain after Uri; many bursts produced multi-day saturation of drywall and framing before discovery; insurance reauthorizations delayed proper drying on many properties. An independent assessment with air sampling confirms whether the original mitigation succeeded or whether hidden mold has colonized."}},
        {"@type": "Question","name": "Should I have a mold assessment after tornado or hail damage in Dallas?","acceptedAnswer": {"@type": "Answer","text": "Yes. Tornado-driven envelope damage and hail-roof-leak intrusion both seed attic and ceiling-cavity mold that often isn\'t visible from inside the house for weeks or months. Pre-roof-repair, pre-sale and post-emergency-repair assessments document the extent of any existing mold before reconstruction or closing. Insurance carriers increasingly require this documentation on storm claims of significant size."}},
        {"@type": "Question","name": "What\'s the difference between a mold inspection and mold testing?","acceptedAnswer": {"@type": "Answer","text": "A mold inspection is the visual and instrument-based assessment of a property — walkthrough, moisture meter readings, thermal imaging, identification of suspect growth and moisture sources. Mold testing is the laboratory analysis of physical samples collected during the inspection — air samples (spore traps), surface samples (tape lifts, swabs) and bulk samples — to identify and quantify the species present. Most Dallas assessments include both."}},
        {"@type": "Question","name": "Do you assess Lakewood, M Streets and Park Cities historic properties?","acceptedAnswer": {"@type": "Answer","text": "Yes. Lakewood Tudor Revival, M Streets bungalows, Munger Place Prairie Foursquares, Junius Heights stock, Highland Park and University Park mansion inventory all have lath-and-plaster walls, original tile and slate roofs, complex rooflines and pre-WWII construction details that benefit from documented moisture mapping and air sampling. Pre-purchase, pre-renovation and pre-sale assessments are common in the East Dallas and Park Cities markets."}},
        {"@type": "Question","name": "How much does a mold inspection cost in Dallas?","acceptedAnswer": {"@type": "Answer","text": "Pricing depends on the size of the property, the scope of testing and number of lab samples submitted. A standard residential or single-unit condo inspection with two to three air samples typically runs in the low hundreds; larger properties, multi-unit assessments and litigation-grade documentation cost more. Written quote before any sampling."}},
        {"@type": "Question","name": "How long do mold test results take?","acceptedAnswer": {"@type": "Answer","text": "On-site inspection and sampling typically 1 to 3 hours. AIHA-accredited lab analysis 3 to 5 business days standard; expedited 24- and 48-hour turnarounds available for time-sensitive closings and insurance deadlines."}}
      ]
    }
  ]
}
</script>
';

require_once __DIR__ . '/../includes/header.php';
?>

    <!-- ===== HERO ===== -->
    <section class="hero-section cddallas-tx">
        <div class="hero-content">
            <!-- Main Heading -->
            <h1 class="hero-title">
                Mold Inspection & Mold Testing in Dallas, TX
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
                    <span>Dallas</span>
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
                                <h2 id="intro-h">Mold Inspection &amp; Testing in Dallas</h2>
                                <p>
                                Texas regulates mold assessment under the Texas Occupations
                                Code and 25 TAC Chapter 295 (administered by TDLR). Mold
                                assessment in Texas requires state-issued credentials for
                                both the assessor and the company. Water Mold Fire
                                Restoration of Dallas operates as a <strong>Texas-Licensed
                                Mold Company under RCO1374</strong>, and we perform
                                assessments to ASTM and IICRC documentation standards using
                                AIHA-accredited laboratories for sample analysis. We
                                perform inspections and testing for real estate
                                transactions, post-Winter-Storm-Uri verification,
                                post-tornado and post-hail assessments, Lakewood Tudor and
                                M Streets historic property work, Park Cities mansion
                                stock, insurance claims, indoor air quality concerns and
                                post-remediation verification across Dallas County, the
                                Park Cities and the DFW metro. For assessment work that
                                falls under the Texas independent-assessor requirement on
                                remediation jobs above the size threshold, we coordinate
                                with TX-licensed Mold Assessment Consultants holding the
                                individual MAC credential.
                                </p>
                            </section>

                            <section class="why-flbm" aria-labelledby="why-h">
                                <h2 id="why-h">When Dallas Properties Need a Mold Inspection</h2>
                                <ul class="listing">
                                    <li>
                                        <strong>Pre-purchase real estate inspections.</strong>
                                        Lakewood Tudor, M Streets bungalows, Munger Place Prairie
                                        Foursquares, Park Cities mansion stock, Uptown condos and
                                        pre-1990 single-family slab stock all carry hidden-mold
                                        profiles standard home inspections won't surface.
                                    </li>
                                    <li>
                                        <strong>Post-Winter-Storm-Uri assessments.</strong>
                                        Many DFW homeowners had mitigation performed under
                                        enormous time pressure after Feb 2021. Independent
                                        assessment confirms whether drying succeeded.
                                    </li>
                                    <li>
                                        <strong>Post-tornado assessments.</strong>
                                        May 2024 outbreak, Oct 2019 N. Dallas EF3 envelope damage
                                        admits wind-driven rain that seeds weeks-later attic and
                                        ceiling-cavity mold.
                                    </li>
                                    <li>
                                        <strong>Post-hail-roof-leak attic assessments.</strong>
                                        DFW hail damages roofs; water intrusion seeds attic mold
                                        that surfaces in subsequent rainfall.
                                    </li>
                                    <li>
                                        <strong>Lakewood, M Streets, Park Cities historic
                                        assessments.</strong>
                                        Pre-WWII East Dallas and Park Cities stock with
                                        lath-and-plaster and original construction benefits from
                                        documented moisture mapping.
                                    </li>
                                    <li>
                                        <strong>Insurance claim documentation.</strong>
                                        Texas carriers require documentation on water and storm
                                        claims of significant size.
                                    </li>
                                    <li>
                                        <strong>Indoor air quality (IAQ) testing.</strong>
                                        Unexplained respiratory symptoms, musty smell, new-occupant
                                        complaints, due-diligence baseline testing.
                                    </li>
                                    <li>
                                        <strong>Post-Remediation Verification (PRV).</strong>
                                        Required by TX rules on remediation jobs above the size
                                        threshold; recommended on insurance-driven and large-scope
                                        work.
                                    </li>
                                </ul>
                            </section>

                            <section class="licensing" aria-labelledby="lic-h">
                                <h2 id="lic-h">Texas Mold Regulation &amp; Why Independence Matters</h2>
                                <p>
                                Texas mold rules (25 TAC Chapter 295) require a written
                                mold remediation protocol prepared by a TX-licensed Mold
                                Assessment Consultant (MAC) before remediation work begins
                                on most projects, and the same individual or company cannot
                                perform both assessment and remediation on the same project
                                beyond limited exceptions. The regulatory design parallels
                                Florida's (Chapter 468) and exists for the same reason: an
                                assessor who is also bidding the remediation has incentive
                                to oversize findings, and a remediator self-clearing has
                                incentive to undersize. We hold the Texas mold company
                                license under <strong>RCO1374</strong> and coordinate with
                                independent TX-licensed Mold Assessment Consultants for
                                assessment work that requires the MAC credential.
                                </p>
                            </section>

                            <section class="process" aria-labelledby="process-h">
                                <h2 id="process-h">Our Mold Inspection &amp; Testing Process</h2>
                                <ol>
                                    <li><strong>Pre-inspection consult.</strong> Property history, recent water events, occupant concerns.</li>
                                    <li><strong>On-site visual inspection</strong> with photo documentation.</li>
                                    <li><strong>Moisture mapping &amp; thermal imaging.</strong></li>
                                    <li><strong>Air sampling (spore trap).</strong> Outdoor baseline + indoor samples.</li>
                                    <li><strong>Surface sampling.</strong> Tape lifts, swabs, bulk samples.</li>
                                    <li><strong>AIHA-accredited lab analysis.</strong> 3-5 business days; rush 24-48 hours.</li>
                                    <li><strong>Written assessment report</strong> with photos, moisture mapping, thermal images, lab results, interpretation, and (where mold is confirmed) a remediation protocol.</li>
                                </ol>
                            </section>

                            <section class="service-area" aria-labelledby="area-h">
                                <h2 id="area-h">Where We Inspect &amp; Test in Dallas &amp; DFW</h2>
                                <p>
                                East Dallas (Lakewood, M Streets, Munger Place, Casa Linda,
                                Forest Hills, Junius Heights, White Rock Lake), Park Cities
                                (Highland Park, University Park, Preston Hollow), North
                                Dallas, Uptown / Downtown / Deep Ellum, Oak Cliff, Northern
                                suburbs (Plano, Frisco, McKinney, Richardson), Eastern
                                suburbs (Garland, Mesquite), Mid-Cities (Irving, Arlington,
                                Las Colinas).
                                </p>
                            </section>

                            <section class="faq bg-light mb-4" aria-labelledby="faq-h">
                                <h2 id="faq-h">Dallas Mold Inspection FAQs</h2>

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
                                                <p>Yes. TDLR licenses individual Mold Assessment Consultants (MAC) and Mold Assessment Companies under 25 TAC Ch 295. We hold the company credential <strong>RCO1374</strong> and coordinate with TX-licensed MACs for assessment work requiring the individual credential.</p>
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
                                                Do I need a mold inspection before buying a home in Dallas?
                                            </button>
                                        </h3>
                                        <div id="collapse_2"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_2"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>Strongly recommended for Uri-affected properties, tornado-affected properties, pre-WWII Lakewood / M Streets / Munger Place / Park Cities stock, and pre-1990 slab supply line stock.</p>
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
                                                <p>Yes &mdash; one of our most active assessment categories since 2021. Independent verification that emergency mitigation succeeded.</p>
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
                                                Should I have a mold assessment after tornado or hail damage in Dallas?
                                            </button>
                                        </h3>
                                        <div id="collapse_4"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_4"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>Yes. Envelope damage admits wind-driven rain that seeds weeks-later attic and ceiling-cavity mold. Insurance carriers increasingly require documentation.</p>
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
                                                <p>Inspection is visual/instrument-based; testing is lab analysis. Most DFW assessments include both.</p>
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
                                                Do you assess Lakewood, M Streets and Park Cities historic properties?
                                            </button>
                                        </h3>
                                        <div id="collapse_6"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_6"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>Yes. Pre-WWII East Dallas and Park Cities stock with lath-and-plaster and original construction benefits from documented moisture mapping.</p>
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
                                                How much does a mold inspection cost in Dallas?
                                            </button>
                                        </h3>
                                        <div id="collapse_7"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_7"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>Standard single-unit with 2-3 air samples: low hundreds. Larger scopes cost more.</p>
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
                                <h2 id="contact-h">Schedule a Dallas Mold Inspection</h2>
                                <address>
                                    <strong>Water Mold Fire Restoration of Dallas</strong><br>
                                    6215 Richmond Avenue<br>
                                    Dallas, TX 75214<br>
                                    <a href="tel:+19725594244">972-559-4244</a> &middot;
                                    <a href="mailto:dallas@watermoldfire.net">dallas@watermoldfire.net</a><br>
                                    Texas-Licensed Mold Company RCO1374
                                </address>
                                <p>
                                Real estate closing, post-Uri verification, post-tornado
                                attic concern, Lakewood Tudor pre-purchase or insurance
                                documentation?
                                <a class="cta" href="tel:+19725594244">Call 972-559-4244</a>
                                to schedule.
                                </p>
                                <p class="back-to-hub">
                                &larr; Back to <a href="<?php echo site_url("dallas-tx/"); ?>">all Dallas restoration services</a>
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