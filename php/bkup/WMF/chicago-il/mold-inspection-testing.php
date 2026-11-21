<?php
require_once __DIR__ . '/../includes/init.php';

$pagename = "chicago-il/mold-inspection-testing.php";

$title = "Mold Inspection &amp; Testing in Chicago, IL | Pre-Purchase &amp; IAQ";

$meta_description = "Chicago mold inspection & testing. Pre-purchase, post-pipe-burst, basement & IAQ assessments with lab-analyzed air & surface sampling. IICRC Firm. Chicago GC #TGC141820. 312-574-3814.";

$meta_keywords = "mold inspection chicago, mold inspector chicago, mold assessment chicago, pre-purchase mold inspection, real estate mold inspection, mold testing chicago, mold air test, mold surface test, indoor air quality testing chicago, post-remediation verification, PRV mold";

$canonical_url = "https://watermoldfire.net/chicago-il/mold-inspection-testing/";

$geo_tags = '
<meta name="geo.region" content="US-IL">
<meta name="geo.placename" content="Chicago">
<meta name="geo.position" content="41.9479;-87.6553">
<meta name="ICBM" content="41.9479, -87.6553">
';

$open_graph = '
<meta property="og:type" content="website">
<meta property="og:site_name" content="Water Mold Fire Restoration">
<meta property="og:title" content="Mold Inspection &amp; Testing in Chicago, IL | Pre-Purchase &amp; IAQ">
<meta property="og:description" content="Chicago mold inspection and testing. Pre-purchase, post-pipe-burst, basement and IAQ assessments. Air and surface sampling, AIHA-accredited lab analysis. IICRC Firm.">
<meta property="og:url" content="https://watermoldfire.net/chicago-il/mold-inspection-testing/">
<meta property="og:image" content="'.site_url().'images/logo.webp">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="og:locale" content="en_US">
';

$twitter = '
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Mold Inspection &amp; Testing in Chicago, IL">
<meta name="twitter:description" content="Pre-purchase, post-pipe-burst, basement and IAQ mold assessments in Chicago. Air and surface sampling, AIHA-accredited lab.">
<meta name="twitter:image" content="'.site_url().'images/logo.webp">
';

$schema_ld_json = '
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "@id": "https://watermoldfire.net/chicago-il/mold-inspection-testing/#service",
      "name": "Mold Inspection & Testing in Chicago, IL",
      "serviceType": ["Mold Inspection","Mold Testing","Mold Assessment","Indoor Air Quality Testing","Post-Remediation Verification"],
      "description": "Mold inspection and testing in Chicago, IL. Visual assessment, moisture mapping with thermal imaging, air sampling (spore trap), surface sampling, AIHA-accredited lab analysis and written assessment reports for real estate transactions, post-frozen-pipe-burst and post-sewer-backup losses, basement IAQ concerns, two-flat and condo HOA disputes, insurance claims and post-remediation verification across Cook County and Chicagoland. IICRC Firm Certified.",
      "url": "https://watermoldfire.net/chicago-il/mold-inspection-testing/",
      "provider": {"@id": "https://watermoldfire.net/chicago-il/#localbusiness"},
      "areaServed": [
        {"@type": "City", "name": "Chicago"},{"@type": "City", "name": "Evanston"},
        {"@type": "City", "name": "Oak Park"},{"@type": "City", "name": "Skokie"},
        {"@type": "City", "name": "Wilmette"},{"@type": "City", "name": "Glenview"},
        {"@type": "City", "name": "Northbrook"},{"@type": "City", "name": "Naperville"},
        {"@type": "City", "name": "Berwyn"},{"@type": "City", "name": "Schaumburg"}
      ],
      "hoursAvailable": {"@type": "OpeningHoursSpecification","dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"],"opens": "00:00","closes": "23:59"},
      "hasCredential": [
        {"@type": "EducationalOccupationalCredential","name": "IICRC Firm Certification","credentialCategory": "certification","recognizedBy": {"@type": "Organization","name": "Institute of Inspection, Cleaning and Restoration Certification"}},
        {"@type": "EducationalOccupationalCredential","name": "Chicago General Contractor License","credentialCategory": "license","identifier": "TGC141820","recognizedBy": {"@type": "GovernmentOrganization","name": "City of Chicago Department of Buildings"}}
      ],
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Mold Inspection & Testing Services",
        "itemListElement": [
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Visual Mold Inspection & Moisture Mapping"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Air Sampling (Spore Trap)"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Surface Sampling (Tape Lift, Swab, Bulk)"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Pre-Purchase Real Estate Mold Inspection"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Basement Mold Assessment"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Post-Frozen-Pipe-Burst Mold Inspection"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Post-Sewer-Backup Mold Inspection"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Insurance Claim Mold Assessment"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Two-Flat / Condo HOA Dispute Assessment"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Indoor Air Quality (IAQ) Testing"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "HVAC Mold Testing"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Post-Remediation Verification (PRV)"}}
        ]
      }
    },
    {
      "@type": "LocalBusiness","@id": "https://watermoldfire.net/chicago-il/#localbusiness",
      "name": "Water Mold Fire Restoration of Chicago",
      "url": "https://watermoldfire.net/chicago-il/",
      "telephone": "+1-312-574-3814","email": "chicago@watermoldfire.net",
      "address": {"@type": "PostalAddress","streetAddress": "3521 North Wilton Avenue","addressLocality": "Chicago","addressRegion": "IL","postalCode": "60657","addressCountry": "US"},
      "geo": {"@type": "GeoCoordinates","latitude": 41.9479,"longitude": -87.6553},
      "aggregateRating": {"@type": "AggregateRating","ratingValue": "5.0","reviewCount": "118"}
    },
    {
      "@type": "BreadcrumbList","@id": "https://watermoldfire.net/chicago-il/mold-inspection-testing/#breadcrumb",
      "itemListElement": [
        {"@type": "ListItem","position": 1,"name": "Home","item": "https://watermoldfire.net/"},
        {"@type": "ListItem","position": 2,"name": "Chicago, IL","item": "https://watermoldfire.net/chicago-il/"},
        {"@type": "ListItem","position": 3,"name": "Mold Inspection & Testing","item": "https://watermoldfire.net/chicago-il/mold-inspection-testing/"}
      ]
    },
    {
      "@type": "WebPage","@id": "https://watermoldfire.net/chicago-il/mold-inspection-testing/#webpage",
      "url": "https://watermoldfire.net/chicago-il/mold-inspection-testing/",
      "name": "Mold Inspection & Testing in Chicago, IL",
      "isPartOf": {"@id": "https://watermoldfire.net/#website"},
      "about": {"@id": "https://watermoldfire.net/chicago-il/mold-inspection-testing/#service"},
      "breadcrumb": {"@id": "https://watermoldfire.net/chicago-il/mold-inspection-testing/#breadcrumb"},
      "inLanguage": "en-US"
    },
    {
      "@type": "FAQPage","@id": "https://watermoldfire.net/chicago-il/mold-inspection-testing/#faq",
      "mainEntity": [
        {"@type": "Question","name": "Does Illinois license mold inspectors?","acceptedAnswer": {"@type": "Answer","text": "No. Illinois does not require state licensure for mold assessment or remediation, unlike Florida, Texas, New York and a handful of other states. The Illinois Department of Public Health publishes consumer guidance, but no individual or company license is required to perform the work. In the absence of state licensing, the meaningful credentials for Chicago property owners to evaluate are: IICRC Firm certification (which we hold), adherence to the published ASTM and IICRC standards for assessment procedure, use of AIHA-accredited laboratories for sample analysis, and the assessor\'s documentation discipline on the written report."}},
        {"@type": "Question","name": "Do I need a mold inspection before buying a home in Chicago?","acceptedAnswer": {"@type": "Answer","text": "Strongly recommended, particularly for any pre-WWII Chicago bungalow, two-flat, three-flat, greystone, or workers\' cottage. Standard home inspections in Chicago do not include mold testing — moisture meters and visual checks are the most you typically get. Chicago basements are almost universal in single-family stock and almost universally damp; ice dam attic intrusion is a recurring hidden-mold source not visible from below; original galvanized supply pipe and cast-iron drain stacks in century-old buildings produce chronic slow leaks behind tiled walls. A pre-purchase mold assessment with air sampling tells you what you\'re actually buying."}},
        {"@type": "Question","name": "What\'s the difference between a mold inspection and mold testing?","acceptedAnswer": {"@type": "Answer","text": "A mold inspection is the visual and instrument-based assessment of a property — walkthrough, moisture meter readings, thermal imaging, identification of suspect growth and moisture sources. Mold testing is the laboratory analysis of physical samples collected during the inspection — air samples (spore traps), surface samples (tape lifts, swabs) and bulk samples — to identify and quantify the species present. Most Chicago assessments include both."}},
        {"@type": "Question","name": "Why is independent post-remediation verification recommended in Chicago?","acceptedAnswer": {"@type": "Answer","text": "The EPA, IICRC and ASTM all recommend that mold assessment and remediation be performed by independent parties on significant jobs, even though Illinois does not legally require it (Florida does, under Statute 468.8419). The reason is straightforward: an assessor who is also bidding the remediation has a financial incentive to oversize findings, and a remediator who is also performing the clearance has an incentive to undersize them. We perform our own inspection and testing service for smaller jobs and recommend independent third-party post-remediation verification on insurance-driven and large-scope work to remove that conflict from the clearance decision."}},
        {"@type": "Question","name": "Should I have a mold assessment after a Chicago frozen pipe burst or sewer backup?","acceptedAnswer": {"@type": "Answer","text": "If the water sat for more than 48 hours before mitigation began, or if mitigation was rushed during a citywide event (the January 2014, 2019 and 2024 polar vortex burst surges, or the July 2023 and July 2024 sewer-backup flooding events), yes. An independent assessment confirms whether drying actually succeeded and whether mold has colonized behind drywall, in framing cavities, or in the HVAC system. Insurance carriers increasingly require this documentation before closing out water claims of significant size."}},
        {"@type": "Question","name": "Can you assess mold in a Chicago two-flat or condo HOA dispute?","acceptedAnswer": {"@type": "Answer","text": "Yes. Two-flat, three-flat, 6-flat and high-rise condo disputes over which unit\'s plumbing caused the leak (and which unit is therefore responsible for the resulting mold remediation) are a recurring Chicago category. Independent third-party assessment with written documentation, photographs, moisture mapping and lab results gives both parties — and the HOA, the property manager, and the carriers involved — a defensible neutral basis for the responsibility decision. We document neutrally for both sides."}},
        {"@type": "Question","name": "How much does a mold inspection cost in Chicago?","acceptedAnswer": {"@type": "Answer","text": "Pricing depends on the size of the property, the scope of testing and number of lab samples submitted. A standard single-family home or condo inspection with two to three air samples typically runs in the low hundreds; basement-and-attic full assessments, larger properties, multi-unit building scopes and litigation-grade documentation cost more. Written quote before any sampling."}},
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
    <section class="hero-section cdchicago-il">
        <div class="hero-content">
            <!-- Main Heading -->
            <h1 class="hero-title">
                Mold Inspection & Mold Testing in Chicago, IL
            </h1>   
            <!-- Feature Pills -->
            <div class="feature-pills">
                <div class="feature-pill">
                    <i class="fas fa-certificate"></i>
                    <span>IICRC Firm Certified</span>
                </div>
                <div class="feature-pill">
                    <i class="fas fa-comments"></i>
                    <span>Pre-Purchase & IAQ Assessments</span>
                </div>
                <div class="feature-pill">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>Chicago</span>
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
                                <h2 id="intro-h">Mold Inspection &amp; Testing in Chicago</h2>
                                <p>
                                Illinois does not license mold assessment professionals at the
                                state level &mdash; unlike Florida (Chapter 468), Texas, New
                                York and a handful of other states. That means Chicago property
                                owners evaluating an assessment quote have to weigh credentials
                                that actually substantiate the work: industry certification,
                                use of AIHA-accredited laboratories for sample analysis, and
                                adherence to published assessment standards (ASTM and IICRC).
                                Water Mold Fire Restoration of Chicago is <strong>IICRC Firm
                                Certified</strong>, performs assessments to ASTM and IICRC
                                documentation standards, and uses AIHA-accredited labs for all
                                sample analysis. We perform inspections and testing for real
                                estate transactions, post-frozen-pipe-burst and post-sewer-backup
                                losses, basement IAQ concerns, two-flat and condo HOA disputes,
                                insurance claims and post-remediation verification across Cook
                                County and Chicagoland.
                                </p>
                            </section>

                            <section class="why-flbm" aria-labelledby="why-h">
                                <h2 id="why-h">When Chicago Properties Need a Mold Inspection</h2>
                                <p>
                                In a city with damp basements as a near-universal feature,
                                housing stock that runs back to the 1880s, and a winter cycle
                                that produces predictable frozen-pipe-burst surges every few
                                years, "I want to know what's actually in this property" is
                                one of the most reasonable things a Chicago property owner or
                                buyer can ask. The most common scenarios:
                                </p>
                                <ul class="listing">
                                    <li>
                                        <strong>Pre-purchase real estate inspections.</strong>
                                        Chicago's housing inventory &mdash; bungalows, two-flats,
                                        three-flats, greystones, workers' cottages, lakefront
                                        high-rise condos &mdash; carries hidden-mold profiles that
                                        standard home inspections will not surface. Most Chicago
                                        home inspectors do not perform air sampling and are limited
                                        to visual checks and moisture meter readings. An independent
                                        MRI-style mold assessment tells you what's actually behind
                                        the drywall, in the basement floor cavity, in the attic
                                        insulation and in the HVAC system before you close.
                                    </li>
                                    <li>
                                        <strong>Post-frozen-pipe-burst assessments.</strong>
                                        After the January 2014, January 2019 and January 2024 polar
                                        vortex burst surges, thousands of Chicago homeowners had
                                        mitigation performed under enormous time pressure. Many
                                        bursts went undetected for days while owners were out of
                                        town. An independent assessment confirms whether the drying
                                        actually succeeded or whether mold has colonized behind
                                        finishes and inside framing cavities.
                                    </li>
                                    <li>
                                        <strong>Post-sewer-backup assessments.</strong>
                                        Sewer backup water is Category 3 ("black water") under IICRC
                                        S500 and seeds aggressive mold colonization even after
                                        prompt cleanup. After the July 2023 Lower West Side flooding
                                        and the July 2024 Northwest Side rainfall events,
                                        post-backup mold assessment work ran for months in the
                                        affected basements and garden units.
                                    </li>
                                    <li>
                                        <strong>Basement and crawlspace assessments.</strong>
                                        Chicago basements are almost universally damp because of
                                        clay-soil water tables. Field-stone foundations in vintage
                                        bungalows wick groundwater; poured concrete foundations
                                        crack at the cold joint; block foundations leak at the
                                        mortar lines. Visible staining, musty smell, recurring
                                        condensation on cold-water lines, peeling paint at the base
                                        of walls &mdash; all classic Chicago basement mold
                                        indicators that benefit from instrument and lab confirmation.
                                    </li>
                                    <li>
                                        <strong>Two-flat and condo HOA disputes.</strong>
                                        Chicago's two-flat, three-flat, 6-flat and condo stock all
                                        produce recurring disputes over which unit's plumbing caused
                                        the leak and which party owns the resulting mold remediation.
                                        Independent neutral assessment is usually the fastest path
                                        through the stalemate.
                                    </li>
                                    <li>
                                        <strong>Indoor air quality (IAQ) testing.</strong>
                                        Unexplained respiratory symptoms, persistent musty smell,
                                        new-occupant complaints in a rental, or due-diligence
                                        baseline testing for a buyer with allergy or asthma
                                        concerns. We perform IAQ-focused sampling protocols beyond
                                        the standard mold scope when warranted.
                                    </li>
                                    <li>
                                        <strong>Insurance claim documentation.</strong>
                                        Illinois insurance carriers increasingly require independent
                                        mold assessment documentation on water claims of significant
                                        size before closing them out. Our reports are written to
                                        meet that standard.
                                    </li>
                                    <li>
                                        <strong>Post-Remediation Verification (PRV).</strong>
                                        Independent verification that a completed mold remediation
                                        actually worked. EPA, IICRC and ASTM all recommend PRV by an
                                        independent third party on significant jobs.
                                    </li>
                                </ul>
                            </section>

                            <section class="licensing" aria-labelledby="lic-h">
                                <h2 id="lic-h">Illinois Mold Regulation &amp; Why Independence Still Matters</h2>
                                <p>
                                Illinois does not license mold assessment or mold remediation
                                contractors. The Illinois Department of Public Health publishes
                                consumer guidance documents, but no individual or company
                                license is required to perform either service. This is
                                different from Florida, where Chapter 468, Part XVI of the
                                Florida Statutes requires separate Mold Assessor (MRSA) and
                                Mold Remediator (MRSR) licenses and where Statute &sect;
                                468.8419 prohibits the same company from doing both on the
                                same project.
                                </p>
                                <p>
                                Illinois doesn't impose that separation by law, but the
                                published industry consensus &mdash; the EPA's <em>Mold
                                Remediation in Schools and Commercial Buildings</em> guidance,
                                the IICRC S520 Standard for Professional Mold Remediation, and
                                the ASTM E2418 Standard Guide for Readily Observable Moisture
                                Affecting Indoor Materials &mdash; all recommend that mold
                                assessment and mold remediation be performed by independent
                                parties on significant jobs. The reasoning is the same in
                                Illinois as it is in Florida: an assessor who is also bidding
                                the remediation contract has an incentive to oversize the
                                findings, and a remediator performing its own clearance has an
                                incentive to undersize them.
                                </p>
                                <p>
                                We follow that best practice voluntarily. We perform our own
                                <a href="<?php echo site_url("chicago-il/mold-remediation/"); ?>">mold remediation</a>
                                service in Illinois (a legal scope here), and we perform
                                assessment and testing on the same property when warranted.
                                For insurance-driven and large-scope jobs, we recommend
                                independent third-party post-remediation verification &mdash;
                                and we can coordinate with independent IAQ assessors when
                                that separation matters to the claim or to the parties
                                involved.
                                </p>
                            </section>

                            <section class="process" aria-labelledby="process-h">
                                <h2 id="process-h">Our Mold Inspection &amp; Testing Process</h2>
                                <ol>
                                    <li><strong>Pre-inspection consult.</strong> Reason for assessment, property history, recent water events (frozen pipe burst, sewer backup, ice dam), occupant health concerns.</li>
                                    <li><strong>On-site visual inspection.</strong> Systematic walkthrough with photo documentation. Basement, mechanical rooms, kitchen and bathroom plumbing chases, attic, HVAC closets and supply runs.</li>
                                    <li><strong>Moisture mapping &amp; thermal imaging.</strong> Calibrated meters and thermographic camera locate hidden moisture in walls, ceilings, floor cavities and around plumbing penetrations.</li>
                                    <li><strong>Air sampling (spore trap).</strong> Outdoor baseline + indoor samples for lab comparison.</li>
                                    <li><strong>Surface sampling.</strong> Tape lifts, swabs, bulk samples for direct identification.</li>
                                    <li><strong>AIHA-accredited lab analysis.</strong> Standard 3-5 business days; rush 24-48 hours.</li>
                                    <li><strong>Written assessment report.</strong> Photos, moisture mapping, thermal images, lab results, interpretation, and (where mold is confirmed) a recommended remediation scope.</li>
                                </ol>
                            </section>

                            <section class="types" aria-labelledby="types-h">
                                <h2 id="types-h">Types of Testing We Perform</h2>
                                <ul class="listing">
                                    <li><strong>Air sampling (spore trap).</strong> Indoor vs. outdoor airborne spore comparison.</li>
                                    <li><strong>Surface sampling.</strong> Species ID via tape lift, swab, settled dust.</li>
                                    <li><strong>Bulk sampling.</strong> Direct examination of suspect materials.</li>
                                    <li><strong>HVAC sampling.</strong> Air handler and duct sampling for system contamination &mdash; particularly important in tight new-construction Chicago condos.</li>
                                    <li><strong>Basement &amp; crawlspace sampling.</strong> Chicago bungalows, two-flats, and pre-WWII single-family stock with damp foundations.</li>
                                    <li><strong>Attic sampling.</strong> Ice-dam-origin attic mold detection in older Chicago housing.</li>
                                    <li><strong>Indoor Air Quality (IAQ) testing.</strong> Broader sampling for occupant health concerns.</li>
                                    <li><strong>Post-Remediation Verification.</strong> Independent verification against the original remediation scope.</li>
                                </ul>
                            </section>

                            <section class="service-area" aria-labelledby="area-h">
                                <h2 id="area-h">Where We Inspect &amp; Test in Chicago</h2>
                                <p>
                                Lakeview, Wrigleyville, Boystown, Lincoln Park, Old Town,
                                Gold Coast, Streeterville, River North, the Loop, West Loop,
                                Fulton Market, South Loop, Pilsen, Bridgeport, Hyde Park,
                                Kenwood, Bronzeville, Beverly, Logan Square, Wicker Park,
                                Bucktown, Humboldt Park, Avondale, Lincoln Square,
                                Andersonville, Edgewater, Uptown, Rogers Park, North Center,
                                Roscoe Village, Irving Park, Albany Park, Portage Park,
                                Jefferson Park, the bungalow belt, and suburban Evanston,
                                Skokie, Wilmette, Glenview, Northbrook, Park Ridge, Arlington
                                Heights, Schaumburg, Naperville, Oak Park, Berwyn and Cicero.
                                Real estate closings and insurance deadlines often run tight
                                &mdash; we schedule rush appointments where the calendar
                                allows.
                                </p>
                            </section>

                            <section class="faq bg-light mb-4" aria-labelledby="faq-h">
                                <h2 id="faq-h">Chicago Mold Inspection &amp; Testing FAQs</h2>

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
                                                Does Illinois license mold inspectors?
                                            </button>
                                        </h3>
                                        <div id="collapse_1"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_1"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>No. Illinois does not require state licensure for mold assessment or remediation. The meaningful credentials are <strong>IICRC Firm certification</strong>, adherence to ASTM and IICRC assessment standards, and use of AIHA-accredited laboratories.</p>
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
                                                Do I need a mold inspection before buying a home in Chicago?
                                            </button>
                                        </h3>
                                        <div id="collapse_2"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_2"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>Strongly recommended for any pre-WWII bungalow, two-flat, three-flat, greystone or workers' cottage. Standard Chicago home inspections do not include air sampling. Basement, attic and HVAC moisture profiles are not visible from the showing walkthrough.</p>
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
                                                What's the difference between a mold inspection and mold testing?
                                            </button>
                                        </h3>
                                        <div id="collapse_3"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_3"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>Inspection is visual/instrument-based; testing is lab analysis of samples collected during inspection. Most Chicago assessments include both.</p>
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
                                                Why is independent post-remediation verification recommended in Chicago?
                                            </button>
                                        </h3>
                                        <div id="collapse_4"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_4"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>EPA, IICRC and ASTM all recommend independent third-party PRV on significant jobs &mdash; even though Illinois doesn't require it (Florida does). The reasoning is conflict-of-interest removal: an assessor bidding the remediation has incentive to oversize; a remediator self-clearing has incentive to undersize.</p>
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
                                                Should I have a mold assessment after a Chicago frozen pipe burst or sewer backup?
                                            </button>
                                        </h3>
                                        <div id="collapse_5"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_5"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>Yes, if the water sat more than 48 hours before mitigation, or if mitigation was rushed during a citywide event (the January 2014, 2019, 2024 polar vortex bursts; July 2023 and 2024 sewer-backup floods). Independent assessment confirms drying succeeded and mold did not colonize behind finishes.</p>
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
                                                Can you assess mold in a Chicago two-flat or condo HOA dispute?
                                            </button>
                                        </h3>
                                        <div id="collapse_6"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_6"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>Yes. Two-flat, three-flat, 6-flat and condo disputes over leak responsibility are a recurring Chicago category. Independent neutral documentation gives all parties a defensible basis for the responsibility decision.</p>
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
                                                How much does a mold inspection cost in Chicago?
                                            </button>
                                        </h3>
                                        <div id="collapse_7"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_7"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>Standard single-family / condo inspection with 2-3 air samples runs low hundreds; larger properties and building-wide scopes cost more. Written quote before sampling.</p>
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
                                                <p>On-site 1-3 hours. Lab analysis 3-5 business days standard, 24-48 hours rush available.</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </section>

                            <section class="contact" aria-labelledby="contact-h">
                                <h2 id="contact-h">Schedule a Chicago Mold Inspection</h2>
                                <address>
                                    <strong>Water Mold Fire Restoration of Chicago</strong><br>
                                    3521 North Wilton Avenue<br>
                                    Chicago, IL 60657<br>
                                    <a href="tel:+13125743814">312-574-3814</a> &middot;
                                    <a href="mailto:chicago@watermoldfire.net">chicago@watermoldfire.net</a><br>
                                    IICRC Firm Certified
                                </address>
                                <p>
                                Real estate closing, post-frozen-pipe-burst assessment,
                                post-sewer-backup verification, basement IAQ concern or
                                two-flat HOA dispute?
                                <a class="cta" href="tel:+13125743814">Call 312-574-3814</a>
                                to schedule.
                                </p>
                                <p class="back-to-hub">
                                &larr; Back to <a href="<?php echo site_url("chicago-il/"); ?>">all Chicago restoration services</a>
                                </p>

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