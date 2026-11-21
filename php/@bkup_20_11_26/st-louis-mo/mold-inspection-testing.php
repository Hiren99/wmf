<?php
require_once __DIR__ . '/../includes/init.php';

$pagename = "st-louis-mo/mold-inspection-testing.php";

$title = "Mold Inspection &amp; Testing in St. Louis, MO | Pre-Purchase &amp; IAQ";

$meta_description = "St. Louis mold inspection & testing. Pre-purchase, post-flash-flood, basement & IAQ assessments. Air and surface sampling, AIHA-accredited lab. IICRC Firm. Call 314-282-4140.";

$meta_keywords = "mold inspection st. louis, mold inspector st. louis, mold assessment st. louis, pre-purchase mold inspection, real estate mold inspection, mold testing st. louis, mold air test, mold surface test, indoor air quality testing st. louis, post-remediation verification, PRV mold";

$canonical_url = "https://watermoldfire.net/st-louis-mo/mold-inspection-testing/";

$geo_tags = '
<meta name="geo.region" content="US-MO">
<meta name="geo.placename" content="Saint Louis">
<meta name="geo.position" content="38.5790;-90.2700">
<meta name="ICBM" content="38.5790, -90.2700">
';

$open_graph = '
<meta property="og:type" content="website">
<meta property="og:site_name" content="Water Mold Fire Restoration">
<meta property="og:title" content="Mold Inspection &amp; Testing in St. Louis, MO | Pre-Purchase &amp; IAQ">
<meta property="og:description" content="St. Louis mold inspection and testing. Pre-purchase, post-flash-flood, basement and IAQ assessments. Air and surface sampling, AIHA-accredited lab analysis. IICRC Firm.">
<meta property="og:url" content="https://watermoldfire.net/st-louis-mo/mold-inspection-testing/">
<meta property="og:image" content="'.site_url().'images/logo.webp">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="og:locale" content="en_US">
';

$twitter = '
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Mold Inspection &amp; Testing in St. Louis, MO">
<meta name="twitter:description" content="Pre-purchase, post-flash-flood, basement and IAQ mold assessments in St. Louis. AIHA-accredited lab.">
<meta name="twitter:image" content="'.site_url().'images/logo.webp">
';

$schema_ld_json = '
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "@id": "https://watermoldfire.net/st-louis-mo/mold-inspection-testing/#service",
      "name": "Mold Inspection & Testing in St. Louis, MO",
      "serviceType": ["Mold Inspection","Mold Testing","Mold Assessment","Indoor Air Quality Testing","Post-Remediation Verification"],
      "description": "Mold inspection and testing in St. Louis, MO. Visual assessment, moisture mapping with thermal imaging, air sampling (spore trap), surface sampling, AIHA-accredited lab analysis and written assessment reports for real estate transactions, post-flash-flood and post-sewer-backup losses, South City basement IAQ concerns, four-family flat HOA and landlord-tenant disputes, historic property assessments, insurance claims and post-remediation verification across the City of St. Louis, St. Louis County and the metro. IICRC Firm Certified.",
      "url": "https://watermoldfire.net/st-louis-mo/mold-inspection-testing/",
      "provider": {"@id": "https://watermoldfire.net/st-louis-mo/#localbusiness"},
      "areaServed": [
        {"@type": "City", "name": "Saint Louis"},{"@type": "City", "name": "Clayton"},
        {"@type": "City", "name": "University City"},{"@type": "City", "name": "Webster Groves"},
        {"@type": "City", "name": "Kirkwood"},{"@type": "City", "name": "Maplewood"},
        {"@type": "City", "name": "Ladue"},{"@type": "City", "name": "Chesterfield"},
        {"@type": "City", "name": "Florissant"},{"@type": "City", "name": "Saint Charles"}
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
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "South City Basement Mold Assessment"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Post-Flash-Flood Mold Inspection"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Post-Sewer-Backup Mold Inspection"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Post-Tornado Mold Assessment"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Four-Family Flat Cross-Unit Assessment"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Historic Property Mold Assessment"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Insurance Claim Mold Assessment"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Landlord-Tenant / HOA Dispute Assessment"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Indoor Air Quality (IAQ) Testing"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "HVAC Mold Testing"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Post-Remediation Verification (PRV)"}}
        ]
      }
    },
    {
      "@type": "LocalBusiness","@id": "https://watermoldfire.net/st-louis-mo/#localbusiness",
      "name": "Water Mold Fire Restoration of St. Louis",
      "url": "https://watermoldfire.net/st-louis-mo/",
      "telephone": "+1-314-282-4140","email": "stlouis@watermoldfire.net",
      "address": {"@type": "PostalAddress","streetAddress": "3958 Randall Street","addressLocality": "Saint Louis","addressRegion": "MO","postalCode": "63116","addressCountry": "US"},
      "geo": {"@type": "GeoCoordinates","latitude": 38.5790,"longitude": -90.2700},
      "aggregateRating": {"@type": "AggregateRating","ratingValue": "5.0","reviewCount": "118"}
    },
    {
      "@type": "BreadcrumbList","@id": "https://watermoldfire.net/st-louis-mo/mold-inspection-testing/#breadcrumb",
      "itemListElement": [
        {"@type": "ListItem","position": 1,"name": "Home","item": "https://watermoldfire.net/"},
        {"@type": "ListItem","position": 2,"name": "St. Louis, MO","item": "https://watermoldfire.net/st-louis-mo/"},
        {"@type": "ListItem","position": 3,"name": "Mold Inspection & Testing","item": "https://watermoldfire.net/st-louis-mo/mold-inspection-testing/"}
      ]
    },
    {
      "@type": "WebPage","@id": "https://watermoldfire.net/st-louis-mo/mold-inspection-testing/#webpage",
      "url": "https://watermoldfire.net/st-louis-mo/mold-inspection-testing/",
      "name": "Mold Inspection & Testing in St. Louis, MO",
      "isPartOf": {"@id": "https://watermoldfire.net/#website"},
      "about": {"@id": "https://watermoldfire.net/st-louis-mo/mold-inspection-testing/#service"},
      "breadcrumb": {"@id": "https://watermoldfire.net/st-louis-mo/mold-inspection-testing/#breadcrumb"},
      "inLanguage": "en-US"
    },
    {
      "@type": "FAQPage","@id": "https://watermoldfire.net/st-louis-mo/mold-inspection-testing/#faq",
      "mainEntity": [
        {"@type": "Question","name": "Does Missouri license mold inspectors?","acceptedAnswer": {"@type": "Answer","text": "No. Missouri does not require state licensure for mold assessment or remediation, unlike Florida, Texas, New York and a handful of other states. The Missouri Department of Health and Senior Services publishes consumer guidance, but no individual or company license is required to perform the work. In the absence of state licensing, the meaningful credentials for St. Louis property owners to evaluate are: IICRC Firm certification (which we hold), adherence to the published ASTM and IICRC assessment standards, use of AIHA-accredited laboratories for sample analysis, and the assessor\'s documentation discipline on the written report."}},
        {"@type": "Question","name": "Do I need a mold inspection before buying a home in St. Louis?","acceptedAnswer": {"@type": "Answer","text": "Strongly recommended, particularly for any pre-WWII South City brick rowhouse, four-family flat, Bevo Mill or Holly Hills brick cottage, Carondelet or Dutchtown stock, Soulard or Lafayette Square Victorian, or property with a stone-foundation basement. Standard St. Louis home inspections do not typically include air sampling — moisture meters and visual checks are the most you usually get. South City basements with limestone or brick foundations accumulate moisture for years before visible mold appears; four-family flats transmit moisture between units invisibly through shared chases; pre-WWII brick stock has original galvanized supply pipe and cast-iron drain stacks that produce slow chronic leaks. A pre-purchase mold assessment with air sampling tells you what you\'re actually buying."}},
        {"@type": "Question","name": "What\'s the difference between a mold inspection and mold testing?","acceptedAnswer": {"@type": "Answer","text": "A mold inspection is the visual and instrument-based assessment of a property — walkthrough, moisture meter readings, thermal imaging, identification of suspect growth and moisture sources. Mold testing is the laboratory analysis of physical samples collected during the inspection — air samples (spore traps), surface samples (tape lifts, swabs) and bulk samples — to identify and quantify the species present. Most St. Louis assessments include both."}},
        {"@type": "Question","name": "Why is independent post-remediation verification recommended in St. Louis?","acceptedAnswer": {"@type": "Answer","text": "The EPA, IICRC and ASTM all recommend that mold assessment and remediation be performed by independent parties on significant jobs, even though Missouri does not legally require it (Florida does, under Statute 468.8419). The reason is straightforward: an assessor who is also bidding the remediation has a financial incentive to oversize findings, and a remediator who is also performing the clearance has an incentive to undersize them. We perform our own inspection and testing service for smaller jobs and recommend independent third-party post-remediation verification on insurance-driven and large-scope work to remove that conflict from the clearance decision."}},
        {"@type": "Question","name": "Should I have a mold assessment after the August 2022 flash flooding or May 2024 tornado?","acceptedAnswer": {"@type": "Answer","text": "Yes — and we have been performing post-event assessments continuously since both events. The July/August 2022 flash flooding inundated tens of thousands of South City and inner-suburb basements with Category 3 sewer-mixed water under enormous time pressure for mitigation. Many properties were dried under conditions that didn\'t fully address hidden moisture in framing cavities, behind drywall and inside HVAC systems. The May 2024 EF3 tornado opened roof and wall envelopes; wind-driven rain intrusion in the weeks after seeded attic and ceiling-cavity mold that often isn\'t visible from below. An independent assessment with air sampling confirms whether the original mitigation succeeded or whether hidden mold has colonized."}},
        {"@type": "Question","name": "Can you assess mold in a St. Louis four-family flat or landlord-tenant dispute?","acceptedAnswer": {"@type": "Answer","text": "Yes — four-family flat cross-unit disputes are a recurring St. Louis category. Owners and landlords regularly disagree about which unit\'s plumbing caused the leak and which party is responsible for the resulting mold. Tenants disputing landlord responsibility, or new owners disputing prior-owner disclosure, also produce recurring assessment work. Independent third-party assessment with written documentation, photographs, moisture mapping and lab results gives all parties — and the carriers, the legal counsel and the Missouri property code framework — a defensible neutral basis for the responsibility decision."}},
        {"@type": "Question","name": "Do you perform assessments in St. Louis historic districts?","acceptedAnswer": {"@type": "Answer","text": "Yes. Soulard Historic District, Lafayette Square Historic District, Compton Heights, The Hill, Central West End historic blocks, Old North St. Louis, Carondelet Historic District and the District\'s other landmark properties all have moisture and mold considerations that benefit from detailed documentation supporting any anticipated City of St. Louis Cultural Resources Office or municipal landmarks-commission review. Original lath-and-plaster walls, mansard roofs, stone foundations and pre-Civil-War brick masonry interact with humidity and water intrusion differently than modern stock."}},
        {"@type": "Question","name": "How much does a mold inspection cost in St. Louis?","acceptedAnswer": {"@type": "Answer","text": "Pricing depends on the size of the property, the scope of testing and number of lab samples submitted. A standard single-family home or condo inspection with two to three air samples typically runs in the low hundreds; full basement assessments for older South City brick stock, larger properties, multi-unit building scopes and litigation-grade documentation cost more. Written quote before any sampling."}},
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
                Mold Inspection & Mold Testing in St. Louis, MO
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
                    <span>St. Louis</span>
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
                                <h2 id="intro-h">Mold Inspection &amp; Testing in St. Louis</h2>
                                <p>
                                Missouri does not license mold assessment professionals at the
                                state level &mdash; unlike Florida (which licenses both
                                assessors and remediators under Chapter 468 of the Florida
                                Statutes), Texas, New York and a handful of other states.
                                That means St. Louis property owners evaluating an assessment
                                quote have to weigh credentials that actually substantiate
                                the work: industry certification, use of AIHA-accredited
                                laboratories for sample analysis, and adherence to published
                                assessment standards (ASTM and IICRC). Water Mold Fire
                                Restoration of St. Louis is <strong>IICRC Firm
                                Certified</strong>, performs assessments to ASTM and IICRC
                                documentation standards, and uses AIHA-accredited labs for
                                all sample analysis. We perform inspections and testing for
                                real estate transactions, post-flash-flood and
                                post-sewer-backup losses, South City basement indoor air
                                quality concerns, four-family flat and landlord-tenant
                                disputes, post-May-2024-tornado property assessments,
                                insurance claims and post-remediation verification across the
                                City of St. Louis, St. Louis County and the surrounding
                                metro.
                                </p>
                            </section>

                            <section class="why-flbm" aria-labelledby="why-h">
                                <h2 id="why-h">When St. Louis Properties Need a Mold Inspection</h2>
                                <p>
                                In a city with pre-WWII red-brick rowhouses and four-family
                                flats as the dominant residential typology, limestone- and
                                brick-foundation basements as a near-universal feature, humid
                                continental summers, and a 2022 flash flooding and 2024
                                tornado season still producing post-event work, "I want to
                                know what's actually in this property" is one of the most
                                reasonable things a St. Louis property owner or buyer can
                                ask. The most common scenarios:
                                </p>
                                <ul class="listing">
                                    <li>
                                        <strong>Pre-purchase real estate inspections.</strong>
                                        St. Louis's housing inventory &mdash; South City brick
                                        rowhouses and four-family flats, Bevo Mill and Holly Hills
                                        brick cottages, Dutchtown and Carondelet stock, Soulard and
                                        Lafayette Square Victorians, Tower Grove neighborhood
                                        ornate brick, The Hill Italianates, Central West End
                                        mansion stock, Forest Park area apartment buildings, and
                                        the postwar Capes and ranches of the inner-ring St. Louis
                                        County suburbs &mdash; carries hidden-mold profiles that
                                        standard home inspections will not surface. Most St. Louis
                                        home inspectors do not perform air sampling and are limited
                                        to visual checks and moisture meter readings. An independent
                                        mold assessment tells you what's actually behind the
                                        drywall, in the basement, in the attic and in the HVAC
                                        system before you close.
                                    </li>
                                    <li>
                                        <strong>South City basement assessments.</strong>
                                        Pre-WWII St. Louis brick homes nearly all sit on limestone
                                        or brick foundation basements built before modern moisture
                                        management. Visible staining, musty smell, recurring
                                        condensation on cold-water lines, peeling paint at the base
                                        of walls in Bevo Mill, Holly Hills, Carondelet, Dutchtown,
                                        Tower Grove South, Shaw and Soulard properties &mdash; all
                                        classic South City basement mold indicators that benefit
                                        from instrument and lab confirmation.
                                    </li>
                                    <li>
                                        <strong>Post-August-2022 flash flooding assessments.</strong>
                                        The July/August 2022 flash flooding inundated tens of
                                        thousands of South City and inner-suburb basements with
                                        Category 3 sewer-mixed water under enormous time pressure
                                        for mitigation. Many properties were dried under conditions
                                        that didn't fully address hidden moisture in framing
                                        cavities, behind drywall, and inside HVAC systems. We
                                        continue to perform post-2022 verification assessments for
                                        owners and buyers concerned that the original mitigation
                                        was incomplete.
                                    </li>
                                    <li>
                                        <strong>Post-May-2024 tornado assessments.</strong>
                                        The May 16, 2024 EF3 tornado that tracked through portions
                                        of north and west St. Louis opened roof and wall envelopes;
                                        wind-driven rain intrusion in the weeks after seeded attic
                                        and ceiling-cavity mold that often isn't visible from
                                        below. Pre-sale and pre-repair assessments document what
                                        the tornado actually produced and what subsequent rain has
                                        compounded.
                                    </li>
                                    <li>
                                        <strong>Four-family flat &amp; multi-unit assessments.</strong>
                                        The St. Louis brick four-family flat is the city's signature
                                        pre-WWII multi-unit residential building, found across South
                                        City, the central corridor and Central West End. Cross-unit
                                        disputes over leak responsibility, landlord-tenant disputes
                                        over rental-unit habitability, and condo HOA disputes over
                                        common-element moisture all benefit from independent
                                        third-party assessment.
                                    </li>
                                    <li>
                                        <strong>Historic district assessments.</strong>
                                        Soulard Historic District, Lafayette Square Historic
                                        District, Compton Heights, The Hill, Central West End
                                        historic blocks, Old North St. Louis and Carondelet
                                        Historic District all have properties where envelope
                                        modifications require coordination with the relevant
                                        landmarks commission. Assessment documentation supports
                                        anticipated review processes for envelope-affecting
                                        remediation work.
                                    </li>
                                    <li>
                                        <strong>Indoor air quality (IAQ) testing.</strong>
                                        Unexplained respiratory symptoms, persistent musty smell in
                                        a South City basement, new-occupant complaints in a rental
                                        garden unit, or due-diligence baseline testing for a buyer
                                        with allergy or asthma concerns. We perform IAQ-focused
                                        sampling protocols beyond the standard mold scope when
                                        warranted.
                                    </li>
                                    <li>
                                        <strong>Insurance claim documentation.</strong>
                                        Missouri insurance carriers increasingly require independent
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
                                <h2 id="lic-h">Missouri Mold Regulation &amp; Why Independence Still Matters</h2>
                                <p>
                                Missouri does not license mold assessment or mold remediation
                                contractors. The Missouri Department of Health and Senior
                                Services publishes consumer guidance documents on indoor
                                mold, but no individual or company license is required to
                                perform either service. This is different from Florida, where
                                Chapter 468, Part XVI of the Florida Statutes requires
                                separate Mold Assessor and Mold Remediator licenses and
                                prohibits the same company from doing both on the same
                                project.
                                </p>
                                <p>
                                Missouri doesn't impose that separation by law, but the
                                published industry consensus &mdash; the EPA's <em>Mold
                                Remediation in Schools and Commercial Buildings</em> guidance,
                                the IICRC industry standards for mold remediation and
                                assessment, and the ASTM standards for moisture and mold
                                assessment &mdash; all recommend that mold assessment and
                                mold remediation be performed by independent parties on
                                significant jobs. The reasoning is the same in Missouri as it
                                is in Florida: an assessor who is also bidding the remediation
                                contract has an incentive to oversize the findings, and a
                                remediator performing its own clearance has an incentive to
                                undersize them.
                                </p>
                                <p>
                                We follow that best practice voluntarily. We perform our own
                                <a href="<?php echo site_url("st-louis-mo/mold-remediation/"); ?>">mold
                                remediation</a> service in Missouri (a legal scope here), and
                                we perform assessment and testing on the same property when
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
                                    <li><strong>Pre-inspection consult.</strong> Reason for assessment, property history, recent water events (sewer backup, flash flood, frozen pipe burst, tornado intrusion), occupant health concerns.</li>
                                    <li><strong>On-site visual inspection.</strong> Systematic walkthrough with photo documentation. Basement, mechanical rooms, kitchen and bathroom plumbing chases, attic, party walls and shared chases in four-family flats, HVAC closets and supply runs.</li>
                                    <li><strong>Moisture mapping &amp; thermal imaging.</strong> Calibrated meters and thermographic camera locate hidden moisture in walls, ceilings, floor cavities, stone-foundation basements and around plumbing penetrations.</li>
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
                                    <li><strong>HVAC sampling.</strong> Air handler and duct sampling for system contamination — particularly important in St. Louis's long humid cooling season.</li>
                                    <li><strong>South City basement &amp; cellar sampling.</strong> Pre-WWII brick stock with limestone and brick foundations.</li>
                                    <li><strong>Attic sampling.</strong> Tornado- and hail-driven roof leak attic mold detection in older St. Louis housing.</li>
                                    <li><strong>Indoor Air Quality (IAQ) testing.</strong> Broader sampling for occupant health concerns.</li>
                                    <li><strong>Post-Remediation Verification.</strong> Independent verification against the original remediation scope.</li>
                                </ul>
                            </section>

                            <section class="service-area" aria-labelledby="area-h">
                                <h2 id="area-h">Where We Inspect &amp; Test in St. Louis &amp; the Metro</h2>
                                <p>
                                The City of St. Louis &mdash; Bevo Mill, Holly Hills,
                                Dutchtown, Carondelet, Patch, Boulevard Heights, St. Louis
                                Hills, Princeton Heights, Southampton, Tower Grove South,
                                Tower Grove East, Shaw, Compton Heights, Benton Park,
                                Cherokee Street, Soulard, Lafayette Square, The Hill,
                                Botanical Heights, McRee Town, Midtown, Grand Center, Forest
                                Park, Forest Park Southeast, Central West End, Downtown,
                                Washington Avenue Loft District, Old North St. Louis, Hyde
                                Park. <strong>St. Louis County:</strong> Clayton, University
                                City, Webster Groves, Kirkwood, Maplewood, Brentwood,
                                Richmond Heights, Ladue, Frontenac, Town and Country,
                                Chesterfield, Ballwin, Ellisville, Wildwood, Manchester,
                                Crestwood, Affton, Mehlville, Florissant, Hazelwood, Maryland
                                Heights, Bridgeton, Creve Coeur, Olivette. <strong>St.
                                Charles County:</strong> St. Charles, St. Peters, O'Fallon,
                                Wentzville. Real estate closings and insurance deadlines often
                                run tight &mdash; we schedule rush appointments where the
                                calendar allows.
                                </p>
                            </section>

                            <section class="faq bg-light mb-4" aria-labelledby="faq-h">
                                <h2 id="faq-h">St. Louis Mold Inspection &amp; Testing FAQs</h2>

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
                                                Does Missouri license mold inspectors?
                                            </button>
                                        </h3>
                                        <div id="collapse_1"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_1"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>No. Missouri does not require state licensure for mold assessment or remediation. The meaningful credentials are <strong>IICRC Firm certification</strong>, adherence to ASTM and IICRC assessment standards, and use of AIHA-accredited laboratories.</p>
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
                                                Do I need a mold inspection before buying a home in St. Louis?
                                            </button>
                                        </h3>
                                        <div id="collapse_2"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_2"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>Strongly recommended for any pre-WWII South City brick rowhouse, four-family flat, Bevo Mill or Holly Hills cottage, Soulard or Lafayette Square Victorian, or property with a stone-foundation basement. Standard St. Louis home inspections typically do not include air sampling. South City basement and four-family flat shared-chase moisture profiles are not visible from the showing walkthrough.</p>
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
                                                <p>Inspection is visual/instrument-based; testing is lab analysis of samples collected during inspection. Most St. Louis assessments include both.</p>
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
                                                Why is independent post-remediation verification recommended in St. Louis?
                                            </button>
                                        </h3>
                                        <div id="collapse_4"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_4"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>EPA, IICRC and ASTM all recommend independent third-party PRV on significant jobs &mdash; even though Missouri doesn't require it (Florida does). Conflict-of-interest removal: an assessor bidding the remediation has incentive to oversize; a remediator self-clearing has incentive to undersize.</p>
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
                                                Should I have a mold assessment after the August 2022 flash flooding or May 2024 tornado?
                                            </button>
                                        </h3>
                                        <div id="collapse_5"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_5"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>Yes &mdash; one of our most active assessment categories. The 2022 flooding produced rushed mitigation that often didn't fully address hidden moisture; the 2024 tornado opened envelopes that seeded weeks-later wind-driven rain intrusion. Independent assessment confirms whether mitigation succeeded.</p>
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
                                                Can you assess mold in a St. Louis four-family flat or landlord-tenant dispute?
                                            </button>
                                        </h3>
                                        <div id="collapse_6"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_6"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>Yes &mdash; recurring St. Louis category. Four-family flat cross-unit disputes and landlord-tenant disputes both benefit from independent neutral documentation that gives all parties a defensible basis for the responsibility decision.</p>
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
                                                Do you perform assessments in St. Louis historic districts?
                                            </button>
                                        </h3>
                                        <div id="collapse_7"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_7"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>Yes. Soulard, Lafayette Square, Compton Heights, The Hill, Central West End historic blocks, Old North, Carondelet and the metro's other historic-district properties all benefit from detailed documentation supporting any anticipated landmarks-commission review.</p>
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
                                                How much does a mold inspection cost in St. Louis?
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
                                <h2 id="contact-h">Schedule a St. Louis Mold Inspection</h2>
                                <address>
                                    <strong>Water Mold Fire Restoration of St. Louis</strong><br>
                                    3958 Randall Street<br>
                                    Saint Louis, MO 63116<br>
                                    <a href="tel:+13142824140">314-282-4140</a> &middot;
                                    <a href="mailto:stlouis@watermoldfire.net">stlouis@watermoldfire.net</a><br>
                                    IICRC Firm Certified
                                </address>
                                <p>
                                Real estate closing, post-2022-flood verification,
                                post-2024-tornado attic concern, South City basement IAQ
                                question, or four-family flat dispute?
                                <a class="cta" href="tel:+13142824140">Call 314-282-4140</a>
                                to schedule.
                                </p>
                                <p class="back-to-hub">
                                &larr; Back to <a href="<?php echo site_url("st-louis-mo/"); ?>">all St. Louis restoration services</a>
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