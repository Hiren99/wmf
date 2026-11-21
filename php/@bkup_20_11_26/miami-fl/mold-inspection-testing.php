<?php
require_once __DIR__ . '/../includes/init.php';

$pagename = "miami-fl/mold-inspection-testing.php";

$title = "Mold Inspection &amp; Testing in Miami, FL | MRSA1639";

$meta_description = "Florida-licensed mold inspection & testing in Miami, FL (MRSA1639). Independent air & surface sampling for real estate, Surfside-era condo, insurance, IAQ. 305-999-5144.";

$meta_keywords = "mold inspection miami, mold inspector miami, mold assessment miami, pre-purchase mold inspection, real estate mold inspection, mold testing miami, mold air test, mold surface test, indoor air quality testing miami, post-remediation verification, PRV mold";

$canonical_url = "https://watermoldfire.net/miami-fl/mold-inspection-testing/";

$geo_tags = '
<meta name="geo.region" content="US-FL">
<meta name="geo.placename" content="Miami">
<meta name="geo.position" content="25.7800;-80.1850">
<meta name="ICBM" content="25.7800, -80.1850">
';

$open_graph = '
<meta property="og:type" content="website">
<meta property="og:site_name" content="Water Mold Fire Restoration">
<meta property="og:title" content="Mold Inspection &amp; Testing in Miami, FL | MRSA1639">
<meta property="og:description" content="Florida-licensed mold inspection (MRSA1639) in Miami. Independent air & surface sampling for real estate, Surfside-era condo, insurance and IAQ assessments.">
<meta property="og:url" content="https://watermoldfire.net/miami-fl/mold-inspection-testing/">
<meta property="og:image" content="'.site_url().'images/logo.webp">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="og:locale" content="en_US">
';

$twitter = '
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Mold Inspection &amp; Testing in Miami, FL">
<meta name="twitter:description" content="FL-licensed mold assessor (MRSA1639). Independent inspection, air & surface testing for real estate, condo and insurance assessments in Miami.">
<meta name="twitter:image" content="'.site_url().'images/logo.webp">
';

$schema_ld_json = '
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "@id": "https://watermoldfire.net/miami-fl/mold-inspection-testing/#service",
      "name": "Mold Inspection & Testing in Miami, FL",
      "serviceType": ["Mold Inspection","Mold Testing","Mold Assessment","Indoor Air Quality Testing","Post-Remediation Verification"],
      "description": "Florida-licensed mold inspection and testing (MRSA1639) in Miami, FL. Independent visual assessment, moisture mapping with thermal imaging, air sampling (spore trap), surface sampling, AIHA-accredited lab analysis and written assessment protocols for real estate transactions, Surfside-era condo milestone inspections, insurance claims, IAQ concerns and post-remediation verification across Miami-Dade County.",
      "url": "https://watermoldfire.net/miami-fl/mold-inspection-testing/",
      "provider": {"@id": "https://watermoldfire.net/miami-fl/#localbusiness"},
      "areaServed": [
        {"@type": "City", "name": "Miami"},{"@type": "City", "name": "Miami Beach"},
        {"@type": "City", "name": "Coral Gables"},{"@type": "City", "name": "Aventura"},
        {"@type": "City", "name": "Sunny Isles Beach"},{"@type": "City", "name": "Key Biscayne"},
        {"@type": "City", "name": "Doral"},{"@type": "City", "name": "Hialeah"},
        {"@type": "City", "name": "Pinecrest"},{"@type": "City", "name": "Homestead"}
      ],
      "hoursAvailable": {"@type": "OpeningHoursSpecification","dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"],"opens": "00:00","closes": "23:59"},
      "hasCredential": {
        "@type": "EducationalOccupationalCredential",
        "name": "Florida Mold Assessor License",
        "credentialCategory": "license",
        "identifier": "MRSA1639",
        "recognizedBy": {"@type": "GovernmentOrganization","name": "Florida Department of Business & Professional Regulation"}
      },
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Mold Inspection & Testing Services",
        "itemListElement": [
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Visual Mold Inspection & Moisture Mapping"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Air Sampling (Spore Trap)"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Surface Sampling (Tape Lift, Swab, Bulk)"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Pre-Purchase Real Estate Mold Inspection"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Surfside-Era Condo Mold Assessment"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Post-Water-Damage Mold Inspection"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Insurance Claim Mold Assessment"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Indoor Air Quality (IAQ) Testing"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "HVAC Mold Testing"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Post-Remediation Verification (PRV)"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Written Remediation Protocol"}}
        ]
      }
    },
    {
      "@type": "LocalBusiness","@id": "https://watermoldfire.net/miami-fl/#localbusiness",
      "name": "Water Mold Fire Restoration of Miami",
      "url": "https://watermoldfire.net/miami-fl/",
      "telephone": "+1-305-999-5144","email": "miami@watermoldfire.net",
      "address": {"@type": "PostalAddress","streetAddress": "100 Biscayne Blvd","addressLocality": "Miami","addressRegion": "FL","postalCode": "33132","addressCountry": "US"},
      "geo": {"@type": "GeoCoordinates","latitude": 25.7800,"longitude": -80.1850},
      "aggregateRating": {"@type": "AggregateRating","ratingValue": "5.0","reviewCount": "118"}
    },
    {
      "@type": "BreadcrumbList","@id": "https://watermoldfire.net/miami-fl/mold-inspection-testing/#breadcrumb",
      "itemListElement": [
        {"@type": "ListItem","position": 1,"name": "Home","item": "https://watermoldfire.net/"},
        {"@type": "ListItem","position": 2,"name": "Miami, FL","item": "https://watermoldfire.net/miami-fl/"},
        {"@type": "ListItem","position": 3,"name": "Mold Inspection & Testing","item": "https://watermoldfire.net/miami-fl/mold-inspection-testing/"}
      ]
    },
    {
      "@type": "WebPage","@id": "https://watermoldfire.net/miami-fl/mold-inspection-testing/#webpage",
      "url": "https://watermoldfire.net/miami-fl/mold-inspection-testing/",
      "name": "Mold Inspection & Testing in Miami, FL",
      "isPartOf": {"@id": "https://watermoldfire.net/#website"},
      "about": {"@id": "https://watermoldfire.net/miami-fl/mold-inspection-testing/#service"},
      "breadcrumb": {"@id": "https://watermoldfire.net/miami-fl/mold-inspection-testing/#breadcrumb"},
      "inLanguage": "en-US"
    },
    {
      "@type": "FAQPage","@id": "https://watermoldfire.net/miami-fl/mold-inspection-testing/#faq",
      "mainEntity": [
        {"@type": "Question","name": "Are you a licensed mold inspector in Florida?","acceptedAnswer": {"@type": "Answer","text": "Yes. Water Mold Fire Restoration of Miami operates under Florida Mold Assessor License MRSA1639, issued by the Florida Department of Business & Professional Regulation under Chapter 468, Part XVI of the Florida Statutes. Florida is one of a small number of states that legally requires mold assessors to be individually licensed."}},
        {"@type": "Question","name": "Do I need a mold inspection before buying a condo in Miami?","acceptedAnswer": {"@type": "Answer","text": "Strongly recommended, particularly for buildings over 25 years old in the wake of the post-Surfside condo safety reforms. Miami\'s high-rise condo stock — Brickell, downtown, Sunny Isles, Aventura, Bal Harbour, Mid Beach — has shared HVAC stacks and common drain risers that move moisture and spores between units. An independent MRSA-licensed assessment gives you written documentation of what\'s actually in the unit and the systems serving it, before closing."}},
        {"@type": "Question","name": "What\'s the difference between a mold inspection and mold testing?","acceptedAnswer": {"@type": "Answer","text": "A mold inspection is the visual and instrument-based assessment of a property — walkthrough, moisture meter readings, thermal imaging, identification of suspect growth and moisture sources. Mold testing is the laboratory analysis of physical samples collected during the inspection — air samples (spore traps), surface samples (tape lifts, swabs) and bulk samples — to identify and quantify the species present. Most Miami assessments include both."}},
        {"@type": "Question","name": "Why can\'t you do both the inspection and the remediation?","acceptedAnswer": {"@type": "Answer","text": "Florida Statute 468.8419 prohibits the same company from performing both mold assessment and mold remediation on the same project, and requires the assessor and remediator have no shared financial interest on that job. It\'s a consumer protection rule. We hold both an MRSA license (this service) and an MRSR license (our remediation arm) but we never use them on the same project."}},
        {"@type": "Question","name": "Do you perform Surfside-era condo mold assessments?","acceptedAnswer": {"@type": "Answer","text": "Yes. Since the June 2021 Champlain Towers South collapse and the Florida condo safety reforms that followed, Miami-Dade condominium buildings over 25 years old now require milestone structural inspections that often produce mold assessment needs. We perform MRSA-licensed assessments coordinated with engineering teams and condo boards for individual units, common areas and building-wide IAQ concerns."}},
        {"@type": "Question","name": "How much does a mold inspection cost in Miami?","acceptedAnswer": {"@type": "Answer","text": "Pricing depends on the size of the property, the scope of testing and number of lab samples submitted. A standard residential or single-unit condo inspection with two to three air samples typically runs in the low hundreds; large properties, multi-unit condo assessments, building-wide common-area scopes and litigation-grade documentation cost more. Written quote before any sampling."}},
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
    <section class="hero-section">
        <div class="hero-content">
            <!-- Main Heading -->
            <h1 class="hero-title">
                Mold Inspection & Mold Testing in Miami, FL
            </h1>   
            <!-- Feature Pills -->
            <div class="feature-pills">
                <div class="feature-pill">
                    <i class="fas fa-certificate"></i>
                    <span>FL Licensed: MRSA1639</span>
                </div>
                <div class="feature-pill">
                    <i class="fas fa-comments"></i>
                    <span>Independent Assessment</span>
                </div>
                <div class="feature-pill">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>Miami</span>
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
                                <h2 id="intro-h">Florida-Licensed Mold Inspection &amp; Testing in Miami</h2>
                                <p>
                                Mold assessment in Florida is a regulated service. Anyone
                                performing mold inspection or testing for compensation must
                                hold an active state-issued Mold Assessor license, and an
                                assessor cannot also bid the remediation on the same project.
                                That separation exists for a reason &mdash; it keeps the
                                findings honest. Water Mold Fire Restoration of Miami operates
                                under <strong>FL Mold Assessor License #MRSA1639</strong>, and
                                we perform independent mold inspections and laboratory testing
                                across Miami-Dade County for real estate transactions,
                                post-Surfside condo milestone inspections, insurance claims,
                                post-water-damage properties, indoor air quality concerns and
                                post-remediation verification. Our assessments meet ASTM and
                                IICRC documentation standards and are accepted by every major
                                Florida homeowners insurance carrier.
                                </p>
                            </section>

                            <section class="why-flbm" aria-labelledby="why-h">
                                <h2 id="why-h">When Miami Properties Need a Mold Inspection</h2>
                                <p>
                                In a climate this favorable to mold and a market this dense
                                with high-rise condos and historic homes, "I want to know what
                                I'm buying" is among the most reasonable things a Miami
                                property owner or buyer can ask. The most common scenarios:
                                </p>
                                <ul class="listing">
                                    <li>
                                        <strong>Pre-purchase real estate inspections.</strong>
                                        Miami's coastal high-rise condos, Brickell tower units,
                                        Sunny Isles oceanfront buildings, Coral Gables historic
                                        homes, and Coconut Grove bungalows all carry mold risk
                                        profiles that visual showings won't surface. Florida sellers
                                        must disclose known material defects, but undisclosed mold
                                        behind drywall is a common post-closing dispute &mdash; a
                                        pre-closing MRSA assessment prevents it.
                                    </li>
                                    <li>
                                        <strong>Surfside-era condo milestone inspections.</strong>
                                        Since June 2021, Miami-Dade condo buildings over 25 years
                                        old require milestone structural inspections under Florida's
                                        post-Surfside reforms. Many of these inspections turn up
                                        moisture intrusion and require formal mold assessment
                                        documentation for board records and engineering reports. We
                                        perform unit-level, common-area and building-wide
                                        assessments coordinated with structural engineers and HOA
                                        leadership.
                                    </li>
                                    <li>
                                        <strong>Post-water-damage assessments.</strong>
                                        After a pipe leak, A/C overflow, hurricane water intrusion,
                                        king-tide flooding event or condo cross-unit migration, an
                                        independent assessment tells you whether drying succeeded or
                                        whether mold has already colonized the cavity. Many
                                        Miami-Dade insurance carriers now require this written
                                        confirmation before closing out a water claim.
                                    </li>
                                    <li>
                                        <strong>Suspected hidden mold.</strong>
                                        Musty smell, unexplained respiratory symptoms, recurring
                                        condensation, visible staining at baseboards or ceiling
                                        edges. Visible mold is the symptom, not the source &mdash;
                                        we use moisture meters, thermal imaging and air sampling to
                                        locate what's behind the finish.
                                    </li>
                                    <li>
                                        <strong>Insurance claim documentation.</strong>
                                        Miami-Dade's insurance market has tightened harder than
                                        anywhere else in Florida since the 2022 reforms. Carriers
                                        expect MRSA-licensed documentation of cause-of-loss, scope
                                        and species. Our reports are written to meet that standard.
                                    </li>
                                    <li>
                                        <strong>Condo HOA &amp; landlord-tenant disputes.</strong>
                                        Miami's vertical condo density produces ongoing disputes
                                        over whose unit the moisture source originated in and whose
                                        responsibility the resulting growth is. Independent
                                        assessment is usually the fastest path through a stalemate.
                                    </li>
                                    <li>
                                        <strong>Post-Remediation Verification (PRV).</strong>
                                        Independent verification that a completed mold remediation
                                        actually worked &mdash; required by FL law and condo bylaws
                                        for many Miami-Dade buildings.
                                    </li>
                                </ul>
                            </section>

                            <section class="licensing" aria-labelledby="lic-h">
                                <h2 id="lic-h">Why MRSA Licensing &amp; Independence Matter</h2>
                                <p>
                                Florida's mold-related services law (Chapter 468, Part XVI of
                                the Florida Statutes) requires a state-issued license for both
                                assessment (MRSA) and remediation (MRSR), and Statute &sect;
                                468.8419 prohibits the same individual or company from
                                performing both on the same project. It's a deliberate
                                consumer-protection design: an assessor who is also angling to
                                win the remediation contract has an incentive to oversize the
                                findings. Keeping the two roles independent gives the property
                                owner a defensible written protocol and a remediator who must
                                execute against it.
                                </p>
                                <p>
                                We hold both licenses &mdash; <strong>MRSA1639</strong> for
                                assessment (this page) and
                                <strong>MRSR2655</strong> for
                                <a href="<?php echo site_url("miami-fl/mold-remediation/"); ?>">remediation</a> &mdash;
                                under separate qualifying individuals, exactly as Florida law
                                requires. We never use them on the same job. If a Miami
                                competitor offers you both assessment and remediation on a
                                single contract, that is itself a red flag worth questioning.
                                </p>
                            </section>

                            <section class="process" aria-labelledby="process-h">
                                <h2 id="process-h">Our Mold Inspection &amp; Testing Process</h2>
                                <ol>
                                    <li><strong>Pre-inspection consult.</strong> Reason for assessment, property history, recent water events, occupant health concerns.</li>
                                    <li><strong>On-site visual inspection.</strong> Systematic walkthrough with photo documentation.</li>
                                    <li><strong>Moisture mapping &amp; thermal imaging.</strong> Calibrated meters and thermographic camera locate hidden moisture.</li>
                                    <li><strong>Air sampling (spore trap).</strong> Outdoor baseline + indoor samples for lab comparison.</li>
                                    <li><strong>Surface sampling.</strong> Tape lifts, swabs, bulk samples for direct identification.</li>
                                    <li><strong>AIHA-accredited lab analysis.</strong> Standard 3-5 business days; rush 24-48 hours.</li>
                                    <li><strong>Written assessment report.</strong> Photos, moisture mapping, thermal images, lab results, interpretation, and (where mold is confirmed) a written remediation protocol.</li>
                                </ol>
                            </section>

                            <section class="types" aria-labelledby="types-h">
                                <h2 id="types-h">Types of Testing We Perform</h2>
                                <ul class="listing">
                                    <li><strong>Air sampling (spore trap).</strong> Indoor vs. outdoor airborne spore comparison.</li>
                                    <li><strong>Surface sampling.</strong> Species ID via tape lift, swab, settled dust.</li>
                                    <li><strong>Bulk sampling.</strong> Direct examination of suspect materials.</li>
                                    <li><strong>HVAC sampling.</strong> Air handler and duct sampling for system contamination.</li>
                                    <li><strong>Indoor Air Quality (IAQ) testing.</strong> Broader sampling for occupant health concerns.</li>
                                    <li><strong>Post-Remediation Verification.</strong> Independent verification against original protocol clearance criteria.</li>
                                </ul>
                            </section>

                            <section class="service-area" aria-labelledby="area-h">
                                <h2 id="area-h">Where We Inspect &amp; Test in Miami</h2>
                                <p>
                                Brickell, Downtown Miami, Edgewater, Wynwood, Little Havana,
                                Coconut Grove, Coral Gables, South Beach, Mid Beach, North
                                Beach, Bal Harbour, Sunny Isles Beach, Aventura, Key Biscayne,
                                North Miami, Doral, Hialeah, Pinecrest, Palmetto Bay, Kendall,
                                Homestead. Real estate closings, condo board deadlines and
                                insurance windows often run tight &mdash; we schedule rush
                                appointments where the calendar allows.
                                </p>
                            </section>

                            <section class="faq bg-light mb-4" aria-labelledby="faq-h">
                                <h2 id="faq-h">Miami Mold Inspection &amp; Testing FAQs</h2>

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
                                                Are you a licensed mold inspector in Florida?
                                            </button>
                                        </h3>
                                        <div id="collapse_1"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_1"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>Yes. <strong>Florida Mold Assessor License MRSA1639</strong>, issued under Chapter 468, Part XVI of the Florida Statutes.</p>
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
                                                Do I need a mold inspection before buying a condo in Miami?
                                            </button>
                                        </h3>
                                        <div id="collapse_2"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_2"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>Strongly recommended, particularly for buildings over 25 years old post-Surfside. Miami high-rise condos have shared HVAC and drain systems that move moisture between units — an independent assessment gives you written documentation before closing.</p>
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
                                                <p>Inspection is visual/instrument-based; testing is lab analysis of samples collected during inspection. Most Miami assessments include both.</p>
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
                                                Why can't you do both the inspection and the remediation?
                                            </button>
                                        </h3>
                                        <div id="collapse_4"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_4"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>Florida Statute 468.8419 prohibits it. We hold both MRSA1639 and MRSR2655 but never use them on the same project.</p>
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
                                                Do you perform Surfside-era condo mold assessments?
                                            </button>
                                        </h3>
                                        <div id="collapse_5"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_5"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>Yes. Miami-Dade condos over 25 years old now require milestone structural inspections that often trigger mold assessment work. We coordinate with engineering teams and condo boards.</p>
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
                                                How much does a mold inspection cost in Miami?
                                            </button>
                                        </h3>
                                        <div id="collapse_6"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_6"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>Standard single-unit inspection with 2-3 air samples runs low hundreds; larger properties and building-wide scopes cost more. Written quote before sampling.</p>
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
                                                How long do mold test results take?
                                            </button>
                                        </h3>
                                        <div id="collapse_7"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_7"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>On-site 1-3 hours. Lab analysis 3-5 business days standard, 24-48 hours rush available.</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </section>

                            <section class="contact" aria-labelledby="contact-h">
                                <h2 id="contact-h">Schedule a Miami Mold Inspection</h2>
                                <address>
                                    <strong>Water Mold Fire Restoration of Miami</strong><br>
                                    100 Biscayne Blvd<br>
                                    Miami, FL 33132<br>
                                    <a href="tel:+13059995144">305-999-5144</a> &middot;
                                    <a href="mailto:miami@watermoldfire.net">miami@watermoldfire.net</a><br>
                                    FL Mold Assessor License MRSA1639
                                </address>
                                <p>
                                Real estate closing, condo milestone inspection,
                                post-water-damage assessment or insurance documentation?
                                <a class="cta" href="tel:+13059995144">Call 305-999-5144</a> to
                                schedule.
                                </p>
                                <p class="back-to-hub">
                                &larr; Back to <a href="<?php echo site_url("miami-fl/"); ?>">all Miami restoration services</a>
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