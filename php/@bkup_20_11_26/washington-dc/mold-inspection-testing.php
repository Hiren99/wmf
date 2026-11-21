<?php
require_once __DIR__ . '/../includes/init.php';

$pagename = "washington-dc/mold-inspection-testing.php";

$title = "Mold Inspection &amp; Testing in Washington, DC | Pre-Purchase &amp; IAQ";

$meta_description = "DC mold inspection & testing. Pre-purchase, post-sewer-backup, English basement & IAQ assessments. Air and surface sampling. IICRC Firm. Call 202-650-0299.";

$meta_keywords = "mold inspection washington, mold inspector washington, mold assessment washington, pre-purchase mold inspection, real estate mold inspection, mold testing washington, mold air test, mold surface test, indoor air quality testing washington, post-remediation verification, PRV mold";

$canonical_url = "https://watermoldfire.net/washington-dc/mold-inspection-testing/";

$geo_tags = '
<meta name="geo.region" content="US-DC">
<meta name="geo.placename" content="Washington">
<meta name="geo.position" content="38.9000;-77.0470">
<meta name="ICBM" content="38.9000, -77.0470">
';

$open_graph = '
<meta property="og:type" content="website">
<meta property="og:site_name" content="Water Mold Fire Restoration">
<meta property="og:title" content="Mold Inspection &amp; Testing in Washington, DC | Pre-Purchase &amp; IAQ">
<meta property="og:description" content="DC mold inspection and testing. Pre-purchase, post-sewer-backup, English basement and IAQ assessments. Air and surface sampling, AIHA-accredited lab analysis. IICRC Firm.">
<meta property="og:url" content="https://watermoldfire.net/washington-dc/mold-inspection-testing/">
<meta property="og:image" content="'.site_url().'images/logo.webp">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="og:locale" content="en_US">
';

$twitter = '
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Mold Inspection &amp; Testing in Washington, DC">
<meta name="twitter:description" content="Pre-purchase, post-sewer-backup, English basement and IAQ mold assessments in DC. AIHA-accredited lab.">
<meta name="twitter:image" content="'.site_url().'images/logo.webp">
';

$schema_ld_json = '
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "@id": "https://watermoldfire.net/washington-dc/mold-inspection-testing/#service",
      "name": "Mold Inspection & Testing in Washington, DC",
      "serviceType": ["Mold Inspection","Mold Testing","Mold Assessment","Indoor Air Quality Testing","Post-Remediation Verification"],
      "description": "Mold inspection and testing in Washington, DC. Visual assessment, moisture mapping with thermal imaging, air sampling (spore trap), surface sampling, AIHA-accredited lab analysis and written assessment reports for real estate transactions, post-sewer-backup losses, English basement and crawlspace IAQ concerns, rowhouse party-wall disputes, condo HOA disputes, embassy-row historic property assessments, insurance claims and post-remediation verification across the District and the DMV. IICRC Firm Certified.",
      "url": "https://watermoldfire.net/washington-dc/mold-inspection-testing/",
      "provider": {"@id": "https://watermoldfire.net/washington-dc/#localbusiness"},
      "areaServed": [
        {"@type": "City", "name": "Washington"},{"@type": "City", "name": "Arlington"},
        {"@type": "City", "name": "Alexandria"},{"@type": "City", "name": "Bethesda"},
        {"@type": "City", "name": "Silver Spring"},{"@type": "City", "name": "Chevy Chase"},
        {"@type": "City", "name": "McLean"},{"@type": "City", "name": "Falls Church"},
        {"@type": "City", "name": "Hyattsville"},{"@type": "City", "name": "Takoma Park"}
      ],
      "hoursAvailable": {"@type": "OpeningHoursSpecification","dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"],"opens": "00:00","closes": "23:59"},
      "hasCredential": {
        "@type": "EducationalOccupationalCredential",
        "name": "IICRC Firm Certification",
        "credentialCategory": "certification",
        "recognizedBy": {"@type": "Organization","name": "Institute of Inspection, Cleaning and Restoration Certification"}
      },
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Mold Inspection & Testing Services",
        "itemListElement": [
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Visual Mold Inspection & Moisture Mapping"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Air Sampling (Spore Trap)"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Surface Sampling (Tape Lift, Swab, Bulk)"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Pre-Purchase Real Estate Mold Inspection"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "English Basement Mold Assessment"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Post-Sewer-Backup Mold Inspection"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Rowhouse Party-Wall Assessment"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Historic Property Mold Assessment"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Insurance Claim Mold Assessment"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Condo HOA Dispute Assessment"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Indoor Air Quality (IAQ) Testing"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "HVAC Mold Testing"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Post-Remediation Verification (PRV)"}}
        ]
      }
    },
    {
      "@type": "LocalBusiness","@id": "https://watermoldfire.net/washington-dc/#localbusiness",
      "name": "Water Mold Fire Restoration of Washington DC",
      "url": "https://watermoldfire.net/washington-dc/",
      "telephone": "+1-202-650-0299","email": "washingtondc@watermoldfire.net",
      "address": {"@type": "PostalAddress","streetAddress": "2200 Pennsylvania Avenue NW","addressLocality": "Washington","addressRegion": "DC","postalCode": "20037","addressCountry": "US"},
      "geo": {"@type": "GeoCoordinates","latitude": 38.9000,"longitude": -77.0470},
      "aggregateRating": {"@type": "AggregateRating","ratingValue": "5.0","reviewCount": "118"}
    },
    {
      "@type": "BreadcrumbList","@id": "https://watermoldfire.net/washington-dc/mold-inspection-testing/#breadcrumb",
      "itemListElement": [
        {"@type": "ListItem","position": 1,"name": "Home","item": "https://watermoldfire.net/"},
        {"@type": "ListItem","position": 2,"name": "Washington, DC","item": "https://watermoldfire.net/washington-dc/"},
        {"@type": "ListItem","position": 3,"name": "Mold Inspection & Testing","item": "https://watermoldfire.net/washington-dc/mold-inspection-testing/"}
      ]
    },
    {
      "@type": "WebPage","@id": "https://watermoldfire.net/washington-dc/mold-inspection-testing/#webpage",
      "url": "https://watermoldfire.net/washington-dc/mold-inspection-testing/",
      "name": "Mold Inspection & Testing in Washington, DC",
      "isPartOf": {"@id": "https://watermoldfire.net/#website"},
      "about": {"@id": "https://watermoldfire.net/washington-dc/mold-inspection-testing/#service"},
      "breadcrumb": {"@id": "https://watermoldfire.net/washington-dc/mold-inspection-testing/#breadcrumb"},
      "inLanguage": "en-US"
    },
    {
      "@type": "FAQPage","@id": "https://watermoldfire.net/washington-dc/mold-inspection-testing/#faq",
      "mainEntity": [
        {"@type": "Question","name": "Does Washington DC license mold inspectors?","acceptedAnswer": {"@type": "Answer","text": "No. Washington, DC does not require District-level licensure for mold assessment or remediation, unlike Florida, Texas, New York and a handful of other states. The DC Department of Health publishes consumer guidance, but no individual or company license is required to perform the work. In the absence of District licensing, the meaningful credentials for DC property owners to evaluate are: IICRC Firm certification (which we hold), adherence to the published ASTM and IICRC assessment standards, use of AIHA-accredited laboratories for sample analysis, and the assessor\'s documentation discipline on the written report."}},
        {"@type": "Question","name": "Do I need a mold inspection before buying a home in DC?","acceptedAnswer": {"@type": "Answer","text": "Strongly recommended, particularly for any DC rowhouse or condo with an English basement, any pre-WWII brick rowhouse on Capitol Hill, in Logan Circle, Shaw, Adams Morgan, Mount Pleasant, Columbia Heights, Petworth or Park View, and any property in a historic district where envelope modifications are restricted. Standard DC home inspections do not typically include air sampling — moisture meters and visual checks are the most you usually get. English basements are below sewer-line elevation and accumulate moisture for years before visible mold appears; rowhouse party walls transmit moisture between attached houses invisibly; embassy-row mansions and Wardman rowhouses have original galvanized supply pipe and cast-iron drain stacks that produce slow chronic leaks. A pre-purchase mold assessment with air sampling tells you what you\'re actually buying."}},
        {"@type": "Question","name": "What\'s the difference between a mold inspection and mold testing?","acceptedAnswer": {"@type": "Answer","text": "A mold inspection is the visual and instrument-based assessment of a property — walkthrough, moisture meter readings, thermal imaging, identification of suspect growth and moisture sources. Mold testing is the laboratory analysis of physical samples collected during the inspection — air samples (spore traps), surface samples (tape lifts, swabs) and bulk samples — to identify and quantify the species present. Most DC assessments include both."}},
        {"@type": "Question","name": "Why is independent post-remediation verification recommended in DC?","acceptedAnswer": {"@type": "Answer","text": "The EPA, IICRC and ASTM all recommend that mold assessment and remediation be performed by independent parties on significant jobs, even though Washington, DC does not legally require it (Florida does, under Statute 468.8419). The reason is straightforward: an assessor who is also bidding the remediation has a financial incentive to oversize findings, and a remediator who is also performing the clearance has an incentive to undersize them. We perform our own inspection and testing service for smaller jobs and recommend independent third-party post-remediation verification on insurance-driven and large-scope work to remove that conflict from the clearance decision."}},
        {"@type": "Question","name": "Should I have a mold assessment after a DC sewer backup or basement flood?","acceptedAnswer": {"@type": "Answer","text": "Yes. Sewer backup water is Category 3 (\'black water\') under the published industry standard and seeds aggressive mold colonization even after prompt cleanup. After major rain events — the July 8, 2019 Northwest DC flash flooding being the most visible recent example — independent assessment confirms whether drying actually succeeded and whether mold has colonized behind drywall, in framing cavities or in the HVAC system. Insurance carriers increasingly require this documentation before closing out water claims of significant size."}},
        {"@type": "Question","name": "Can you assess mold in a DC rowhouse party-wall dispute or condo HOA dispute?","acceptedAnswer": {"@type": "Answer","text": "Yes — and party-wall and HOA disputes are a recurring DC category. Rowhouse owners regularly disagree about which side of a shared party wall the moisture is originating from and which owner is responsible for the resulting mold. Condo associations face the same question with cross-unit migration through shared HVAC and plumbing risers. Independent third-party assessment with written documentation, photographs, moisture mapping and lab results gives both parties — and the carriers, the HOA legal counsel and the District\'s property code framework — a defensible neutral basis for the responsibility decision."}},
        {"@type": "Question","name": "Do you perform assessments in DC historic districts?","acceptedAnswer": {"@type": "Answer","text": "Yes. Capitol Hill Historic District, Georgetown Historic District, Massachusetts Avenue Historic District, U Street Historic District, Logan Circle Historic District, Mount Pleasant Historic District, Sheridan-Kalorama Historic District and the District\'s other landmark properties all have moisture and mold considerations that go beyond the standard playbook. Original lath-and-plaster walls, slate roofs, brick parapets, embassy-mansion attic systems and 1820s Federal-era construction details all interact with humidity and water intrusion differently than modern stock. Our assessments document those properties with the level of detail historic-district remediation work requires."}},
        {"@type": "Question","name": "How much does a mold inspection cost in DC?","acceptedAnswer": {"@type": "Answer","text": "Pricing depends on the size of the property, the scope of testing and number of lab samples submitted. A standard single-family home or condo inspection with two to three air samples typically runs in the low hundreds; full English basement assessments, larger properties, multi-unit building scopes and litigation-grade documentation cost more. Written quote before any sampling."}},
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
                Mold Inspection & Mold Testing in Washington, DC
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
                    <span>Washington</span>
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
                                <h2 id="intro-h">Mold Inspection &amp; Testing in Washington DC</h2>
                                <p>
                                Washington, DC does not license mold assessment professionals
                                at the District level &mdash; unlike Florida (which licenses
                                both assessors and remediators under Chapter 468 of the
                                Florida Statutes), Texas, New York and a handful of other
                                states. That means DC property owners evaluating an
                                assessment quote have to weigh credentials that actually
                                substantiate the work: industry certification, use of
                                AIHA-accredited laboratories for sample analysis, and
                                adherence to published assessment standards (ASTM and IICRC).
                                Water Mold Fire Restoration of Washington DC is
                                <strong>IICRC Firm Certified</strong>, performs assessments
                                to ASTM and IICRC documentation standards, and uses
                                AIHA-accredited labs for all sample analysis. We perform
                                inspections and testing for real estate transactions,
                                post-sewer-backup losses, English basement and crawlspace
                                indoor air quality concerns, rowhouse party-wall and condo
                                HOA disputes, embassy-row historic property assessments,
                                insurance claims and post-remediation verification across
                                all four quadrants of the District and the surrounding DMV.
                                </p>
                            </section>

                            <section class="why-flbm" aria-labelledby="why-h">
                                <h2 id="why-h">When DC Properties Need a Mold Inspection</h2>
                                <p>
                                In a city with English basements as a near-universal feature,
                                housing stock that runs back to the 1820s, humid subtropical
                                summers and a combined sewer infrastructure that produces
                                predictable basement backups, "I want to know what's actually
                                in this property" is one of the most reasonable things a DC
                                property owner or buyer can ask. The most common scenarios:
                                </p>
                                <ul class="listing">
                                    <li>
                                        <strong>Pre-purchase real estate inspections.</strong>
                                        DC's housing inventory &mdash; Federal-era and Victorian
                                        rowhouses on Capitol Hill, in Logan Circle and Shaw,
                                        Wardman rowhouses across Petworth and Park View, Adams
                                        Morgan and Mount Pleasant Victorians, Foggy Bottom and
                                        West End condos, Cleveland Park and Woodley Park 1920s-30s
                                        apartment houses, Georgetown Federals, embassy-row
                                        mansions, and new condo towers in NoMa and Capitol
                                        Riverfront &mdash; carries hidden-mold profiles that
                                        standard home inspections will not surface. Most DC home
                                        inspectors do not perform air sampling and are limited to
                                        visual checks and moisture meter readings. An independent
                                        mold assessment tells you what's actually behind the
                                        drywall, in the English basement, in the attic and in the
                                        HVAC system before you close.
                                    </li>
                                    <li>
                                        <strong>English basement &amp; garden unit assessments.</strong>
                                        DC's signature below-grade rowhouse space is also its most
                                        consistent hidden-moisture environment. English basements
                                        sit below sewer-line elevation and accumulate moisture
                                        from groundwater seepage, summer sewer backups, A/C
                                        condensate and upstairs plumbing failures. Pre-purchase
                                        and pre-rental assessments confirm whether visible finish
                                        is hiding a moisture problem behind it.
                                    </li>
                                    <li>
                                        <strong>Post-sewer-backup assessments.</strong>
                                        Sewer backup water is Category 3 ("black water") under
                                        published industry standards and seeds aggressive mold
                                        colonization even after prompt cleanup. After the July 8,
                                        2019 Northwest DC flash flooding and the recurring smaller
                                        backup events through every summer storm season, post-backup
                                        mold assessment work runs for months in the affected
                                        basements.
                                    </li>
                                    <li>
                                        <strong>Rowhouse party-wall disputes.</strong>
                                        DC's rowhouse density produces recurring disputes between
                                        neighbors over which side of a shared party wall the
                                        moisture is originating from and which owner is responsible
                                        for the resulting mold. Independent neutral assessment with
                                        moisture mapping, thermal imaging and lab results gives
                                        both parties a defensible basis for the responsibility
                                        decision.
                                    </li>
                                    <li>
                                        <strong>Condo HOA disputes.</strong>
                                        Foggy Bottom, West End, Dupont, downtown, NoMa, Capitol
                                        Riverfront and Southwest Wharf condos share HVAC stacks,
                                        plumbing risers and common chases that move moisture
                                        between units. Independent assessment is usually the
                                        fastest path through condo-board-versus-unit-owner
                                        stalemates over remediation responsibility.
                                    </li>
                                    <li>
                                        <strong>Historic district assessments.</strong>
                                        Capitol Hill Historic District, Georgetown Historic District,
                                        Massachusetts Avenue Historic District, U Street Historic
                                        District, Logan Circle Historic District, Mount Pleasant
                                        Historic District and Sheridan-Kalorama Historic District
                                        all have properties where envelope modifications require
                                        DC Historic Preservation Office review. Assessment
                                        documentation must support the HPO process when
                                        envelope-affecting remediation work is anticipated.
                                    </li>
                                    <li>
                                        <strong>Indoor air quality (IAQ) testing.</strong>
                                        Unexplained respiratory symptoms, persistent musty smell in
                                        an English basement, new-occupant complaints in a rental
                                        garden unit, or due-diligence baseline testing for a buyer
                                        with allergy or asthma concerns. We perform IAQ-focused
                                        sampling protocols beyond the standard mold scope when
                                        warranted.
                                    </li>
                                    <li>
                                        <strong>Insurance claim documentation.</strong>
                                        DC and DMV insurance carriers increasingly require
                                        independent mold assessment documentation on water claims
                                        of significant size before closing them out. Our reports
                                        are written to meet that standard.
                                    </li>
                                    <li>
                                        <strong>Post-Remediation Verification (PRV).</strong>
                                        Independent verification that a completed mold remediation
                                        actually worked. EPA, IICRC and ASTM all recommend PRV by
                                        an independent third party on significant jobs.
                                    </li>
                                </ul>
                            </section>

                            <section class="licensing" aria-labelledby="lic-h">
                                <h2 id="lic-h">DC Mold Regulation &amp; Why Independence Still Matters</h2>
                                <p>
                                Washington, DC does not license mold assessment or mold
                                remediation contractors. The DC Department of Health
                                publishes consumer guidance documents on indoor mold, but no
                                individual or company license is required to perform either
                                service. This is different from Florida, where Chapter 468,
                                Part XVI of the Florida Statutes requires separate Mold
                                Assessor and Mold Remediator licenses and prohibits the same
                                company from doing both on the same project.
                                </p>
                                <p>
                                DC doesn't impose that separation by law, but the published
                                industry consensus &mdash; the EPA's <em>Mold Remediation in
                                Schools and Commercial Buildings</em> guidance, the IICRC
                                industry standards for mold remediation and assessment, and
                                the ASTM standards for moisture and mold assessment &mdash;
                                all recommend that mold assessment and mold remediation be
                                performed by independent parties on significant jobs. The
                                reasoning is the same in DC as it is in Florida: an
                                assessor who is also bidding the remediation contract has
                                an incentive to oversize the findings, and a remediator
                                performing its own clearance has an incentive to undersize
                                them.
                                </p>
                                <p>
                                We follow that best practice voluntarily. We perform our own
                                <a href="<?php echo site_url("washington-dc/mold-remediation/"); ?>">mold
                                remediation</a> service in DC (a legal scope here), and we
                                perform assessment and testing on the same property when
                                warranted. For insurance-driven and large-scope jobs, we
                                recommend independent third-party post-remediation
                                verification &mdash; and we can coordinate with independent
                                indoor air quality assessors when that separation matters to
                                the claim or to the parties involved.
                                </p>
                            </section>

                            <section class="process" aria-labelledby="process-h">
                                <h2 id="process-h">Our Mold Inspection &amp; Testing Process</h2>
                                <ol>
                                    <li><strong>Pre-inspection consult.</strong> Reason for assessment, property history, recent water events (sewer backup, English basement flood, frozen pipe burst, hurricane remnant intrusion), occupant health concerns.</li>
                                    <li><strong>On-site visual inspection.</strong> Systematic walkthrough with photo documentation. English basement, mechanical rooms, kitchen and bathroom plumbing chases, attic, party walls, HVAC closets and supply runs.</li>
                                    <li><strong>Moisture mapping &amp; thermal imaging.</strong> Calibrated meters and thermographic camera locate hidden moisture in walls, ceilings, floor cavities, brick foundations and around plumbing penetrations.</li>
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
                                    <li><strong>HVAC sampling.</strong> Air handler and duct sampling for system contamination — particularly relevant in DC's long humid cooling season.</li>
                                    <li><strong>English basement &amp; crawlspace sampling.</strong> DC rowhouses, garden units and pre-WWII single-family stock with damp foundations.</li>
                                    <li><strong>Attic sampling.</strong> Hurricane remnant and roof-leak-driven attic mold detection in older DC and DMV housing.</li>
                                    <li><strong>Indoor Air Quality (IAQ) testing.</strong> Broader sampling for occupant health concerns.</li>
                                    <li><strong>Post-Remediation Verification.</strong> Independent verification against the original remediation scope.</li>
                                </ul>
                            </section>

                            <section class="service-area" aria-labelledby="area-h">
                                <h2 id="area-h">Where We Inspect &amp; Test in DC &amp; the DMV</h2>
                                <p>
                                All four quadrants of the District &mdash; Foggy Bottom, West
                                End, Georgetown, Glover Park, Palisades, Spring Valley,
                                Tenleytown, Friendship Heights, Cleveland Park, Woodley Park,
                                Kalorama, Dupont, Logan Circle, U Street, Shaw, Penn Quarter,
                                Downtown, Adams Morgan, Mount Pleasant, Columbia Heights,
                                Petworth, Park View, Brookland, Eckington, NoMa, H Street,
                                Capitol Hill, Navy Yard, Capitol Riverfront, Anacostia,
                                Congress Heights, Southwest Waterfront, the Wharf.
                                <strong>Northern Virginia:</strong> Arlington, Rosslyn,
                                Clarendon, Ballston, Crystal City, Alexandria, Old Town, Del
                                Ray, McLean, Falls Church, Vienna, Tysons.
                                <strong>Suburban Maryland:</strong> Bethesda, Chevy Chase
                                MD, Silver Spring, Takoma Park, College Park, Hyattsville,
                                Rockville. Real estate closings and insurance deadlines often
                                run tight &mdash; we schedule rush appointments where the
                                calendar allows.
                                </p>
                            </section>

                            <section class="faq bg-light mb-4" aria-labelledby="faq-h">
                                <h2 id="faq-h">DC Mold Inspection &amp; Testing FAQs</h2>

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
                                                Does Washington DC license mold inspectors?
                                            </button>
                                        </h3>
                                        <div id="collapse_1"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_1"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>No. DC does not require District-level licensure for mold assessment or remediation. The meaningful credentials are <strong>IICRC Firm certification</strong>, adherence to ASTM and IICRC assessment standards, and use of AIHA-accredited laboratories.</p>
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
                                                Do I need a mold inspection before buying a home in DC?
                                            </button>
                                        </h3>
                                        <div id="collapse_2"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_2"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>Strongly recommended for any rowhouse with an English basement, any pre-WWII brick rowhouse, and any property in a historic district. Standard DC home inspections typically do not include air sampling. English basement and party-wall moisture profiles are not visible from the showing walkthrough.</p>
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
                                                <p>Inspection is visual/instrument-based; testing is lab analysis of samples collected during inspection. Most DC assessments include both.</p>
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
                                                Why is independent post-remediation verification recommended in DC?
                                            </button>
                                        </h3>
                                        <div id="collapse_4"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_4"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>EPA, IICRC and ASTM all recommend independent third-party PRV on significant jobs &mdash; even though DC doesn't require it (Florida does). Conflict-of-interest removal: an assessor bidding the remediation has incentive to oversize; a remediator self-clearing has incentive to undersize.</p>
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
                                                Should I have a mold assessment after a DC sewer backup or basement flood?
                                            </button>
                                        </h3>
                                        <div id="collapse_5"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_5"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>Yes. Sewer backup water is Category 3 and seeds mold colonization even after prompt cleanup. The July 8, 2019 flash flooding is the most visible recent example, but smaller backups happen every summer storm season. Independent assessment confirms drying succeeded and mold did not colonize.</p>
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
                                                Can you assess mold in a DC rowhouse party-wall dispute or condo HOA dispute?
                                            </button>
                                        </h3>
                                        <div id="collapse_6"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_6"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>Yes &mdash; recurring DC category. Rowhouse party-wall disputes and condo HOA cross-unit disputes both benefit from independent neutral documentation that gives all parties a defensible basis for the responsibility decision.</p>
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
                                                Do you perform assessments in DC historic districts?
                                            </button>
                                        </h3>
                                        <div id="collapse_7"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_7"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>Yes. Capitol Hill, Georgetown, Massachusetts Avenue, U Street, Logan Circle, Mount Pleasant, Sheridan-Kalorama and the District's other historic-district properties all have moisture and remediation considerations that benefit from detailed documentation supporting any anticipated DC Historic Preservation Office review.</p>
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
                                                How much does a mold inspection cost in DC?
                                            </button>
                                        </h3>
                                        <div id="collapse_8"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_8"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>Standard single-family / condo inspection with 2-3 air samples runs low hundreds; larger properties and building-wide scopes cost more. Written quote before sampling.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- FAQ 9 -->
                                    <div class="accordion-item">
                                        <h3 class="accordion-header" id="heading_9">
                                            <button class="accordion-button collapsed"
                                                type="button"
                                                data-bs-toggle="collapse"
                                                data-bs-target="#collapse_9"
                                                aria-expanded="false"
                                                aria-controls="collapse_9">
                                                How long do mold test results take?
                                            </button>
                                        </h3>
                                        <div id="collapse_9"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_9"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>On-site 1-3 hours. Lab analysis 3-5 business days standard, 24-48 hours rush available.</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </section>

                            <section class="contact" aria-labelledby="contact-h">
                                <h2 id="contact-h">Schedule a DC Mold Inspection</h2>
                                <address>
                                    <strong>Water Mold Fire Restoration of Washington DC</strong><br>
                                    2200 Pennsylvania Avenue NW<br>
                                    Washington, DC 20037<br>
                                    <a href="tel:+12026500299">202-650-0299</a> &middot;
                                    <a href="mailto:washingtondc@watermoldfire.net">washingtondc@watermoldfire.net</a><br>
                                    IICRC Firm Certified
                                </address>
                                <p>
                                Real estate closing, post-sewer-backup assessment, English
                                basement IAQ concern, rowhouse party-wall dispute or condo
                                HOA dispute?
                                <a class="cta" href="tel:+12026500299">Call 202-650-0299</a>
                                to schedule.
                                </p>
                                <p class="back-to-hub">
                                &larr; Back to <a href="<?php echo site_url("washington-dc/"); ?>">all Washington DC restoration services</a>
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