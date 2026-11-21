<?php
require_once __DIR__ . '/../includes/init.php';

$pagename = "st-louis-mo/mold-remediation.php";

$title = "Mold Removal &amp; Mold Remediation in St. Louis, MO | IICRC Firm";

$meta_description = "St. Louis mold remediation following industry standards. Basement, four-family flat, brick rowhouse & historic home mold removal. Containment, HEPA, antimicrobial. IICRC Firm. 314-282-4140.";

$meta_keywords = "mold remediation st. louis, mold remediation company st. louis, mold abatement, mold contractor st. louis, mold removal st. louis, black mold removal, mold cleanup st. louis, toxic mold removal";

$canonical_url = "https://watermoldfire.net/st-louis-mo/mold-remediation/";

$geo_tags = '
<meta name="geo.region" content="US-MO">
<meta name="geo.placename" content="Saint Louis">
<meta name="geo.position" content="38.5790;-90.2700">
<meta name="ICBM" content="38.5790, -90.2700">
';

$open_graph = '
<meta property="og:type" content="website">
<meta property="og:site_name" content="Water Mold Fire Restoration">
<meta property="og:title" content="Mold Removal &amp; Mold Remediation in St. Louis, MO | IICRC Firm">
<meta property="og:description" content="St. Louis mold remediation following industry standards. Black mold removal, full containment, HEPA filtration. Basement, four-family flat, brick rowhouse and historic specialists.">
<meta property="og:url" content="https://watermoldfire.net/st-louis-mo/mold-remediation/">
<meta property="og:image" content="'.site_url().'images/logo.webp">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="og:locale" content="en_US">
';

$twitter = '
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Mold Removal &amp; Remediation in St. Louis, MO">
<meta name="twitter:description" content="Industry-standard mold remediation in St. Louis. Basement, four-family flat and brick rowhouse specialists. IICRC Firm.">
<meta name="twitter:image" content="'.site_url().'images/logo.webp">
';

$schema_ld_json = '
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "@id": "https://watermoldfire.net/st-louis-mo/mold-remediation/#service",
      "name": "Mold Removal & Mold Remediation in St. Louis, MO",
      "serviceType": ["Mold Remediation","Mold Removal","Mold Abatement"],
      "description": "Mold remediation in St. Louis, MO following the IICRC S520 Standard for Professional Mold Remediation. Black mold removal, negative-air containment, HEPA filtration, antimicrobial treatment and moisture source repair for South City brick rowhouses, four-family flats, Soulard and Lafayette Square historic stock, Central West End mansions, condos and commercial properties across the City of St. Louis, St. Louis County and the metro. IICRC Firm Certified.",
      "url": "https://watermoldfire.net/st-louis-mo/mold-remediation/",
      "provider": {"@id": "https://watermoldfire.net/st-louis-mo/#localbusiness"},
      "areaServed": [
        {"@type": "City", "name": "Saint Louis"},{"@type": "City", "name": "Clayton"},
        {"@type": "City", "name": "University City"},{"@type": "City", "name": "Webster Groves"},
        {"@type": "City", "name": "Kirkwood"},{"@type": "City", "name": "Maplewood"},
        {"@type": "City", "name": "Ladue"},{"@type": "City", "name": "Chesterfield"},
        {"@type": "City", "name": "Florissant"},{"@type": "City", "name": "Saint Charles"}
      ],
      "hoursAvailable": {
        "@type": "OpeningHoursSpecification",
        "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"],
        "opens": "00:00","closes": "23:59"
      },
      "hasCredential": {
        "@type": "EducationalOccupationalCredential",
        "name": "IICRC Firm Certification",
        "credentialCategory": "certification",
        "recognizedBy": {"@type": "Organization","name": "Institute of Inspection, Cleaning and Restoration Certification"}
      },
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Mold Remediation Services",
        "itemListElement": [
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Black Mold Removal"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "South City Basement Mold Remediation"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Post-Flash-Flood Mold Remediation"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Post-Sewer-Backup Mold Remediation"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Four-Family Flat Cross-Unit Mold Remediation"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Brick Rowhouse & Historic Property Mold Remediation"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Attic Mold Remediation"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Crawlspace & Cellar Mold Remediation"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "HVAC & Air Handler Mold Remediation"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Negative-Air Containment & HEPA Filtration"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Antimicrobial Treatment & Encapsulation"}}
        ]
      }
    },
    {
      "@type": "LocalBusiness",
      "@id": "https://watermoldfire.net/st-louis-mo/#localbusiness",
      "name": "Water Mold Fire Restoration of St. Louis",
      "url": "https://watermoldfire.net/st-louis-mo/",
      "telephone": "+1-314-282-4140",
      "email": "stlouis@watermoldfire.net",
      "address": {"@type": "PostalAddress","streetAddress": "3958 Randall Street","addressLocality": "Saint Louis","addressRegion": "MO","postalCode": "63116","addressCountry": "US"},
      "geo": {"@type": "GeoCoordinates","latitude": 38.5790,"longitude": -90.2700},
      "aggregateRating": {"@type": "AggregateRating","ratingValue": "5.0","reviewCount": "118"}
    },
    {
      "@type": "BreadcrumbList",
      "@id": "https://watermoldfire.net/st-louis-mo/mold-remediation/#breadcrumb",
      "itemListElement": [
        {"@type": "ListItem","position": 1,"name": "Home","item": "https://watermoldfire.net/"},
        {"@type": "ListItem","position": 2,"name": "St. Louis, MO","item": "https://watermoldfire.net/st-louis-mo/"},
        {"@type": "ListItem","position": 3,"name": "Mold Remediation","item": "https://watermoldfire.net/st-louis-mo/mold-remediation/"}
      ]
    },
    {
      "@type": "WebPage",
      "@id": "https://watermoldfire.net/st-louis-mo/mold-remediation/#webpage",
      "url": "https://watermoldfire.net/st-louis-mo/mold-remediation/",
      "name": "Mold Removal & Mold Remediation in St. Louis, MO",
      "isPartOf": {"@id": "https://watermoldfire.net/#website"},
      "about": {"@id": "https://watermoldfire.net/st-louis-mo/mold-remediation/#service"},
      "breadcrumb": {"@id": "https://watermoldfire.net/st-louis-mo/mold-remediation/#breadcrumb"},
      "inLanguage": "en-US"
    },
    {
      "@type": "FAQPage",
      "@id": "https://watermoldfire.net/st-louis-mo/mold-remediation/#faq",
      "mainEntity": [
        {"@type": "Question","name": "Does Missouri license mold remediation contractors?","acceptedAnswer": {"@type": "Answer","text": "No. Missouri does not require state licensure for mold remediation or mold assessment, unlike Florida, Texas, New York and a handful of other states. The Missouri Department of Health and Senior Services publishes guidance on mold, but no individual or company license is required to perform the work. In the absence of state licensing, the meaningful credentials for St. Louis property owners to evaluate are: industry certification (we are IICRC Firm Certified), adherence to the published consensus standards (the IICRC S520 standard for mold remediation), use of AIHA-accredited laboratories for any sampling, and the company\'s documentation discipline on the written scope and clearance."}},
        {"@type": "Question","name": "Why does mold grow in St. Louis homes and basements?","acceptedAnswer": {"@type": "Answer","text": "St. Louis sits in a humid continental climate with July and August relative humidity routinely above 70%, and the metro\'s residential building stock includes a high percentage of pre-WWII brick homes with limestone or brick foundation basements that were built before modern moisture management. The primary drivers we see are: combined sewer backups during heavy summer rain that deposit Category 3 water in South City basements (the August 2022 flash flooding being the catastrophic recent benchmark); chronic basement moisture from groundwater seepage through old stone foundations; frozen pipe bursts in winter that soak drywall for days before owners return from holiday travel; post-tornado roof and envelope damage allowing wind-driven rain intrusion (the May 2024 EF3 tornado producing months of secondary moisture and mold work); A/C condensate overflows during the long humid cooling season; and chronic supply-line failures in century-old galvanized plumbing in vintage four-family flats and brick rowhouses across South City, Soulard and Lafayette Square. Once wet materials sit at room temperature for 48 hours, mold colonization begins."}},
        {"@type": "Question","name": "Do I need a mold assessment before remediation in Missouri?","acceptedAnswer": {"@type": "Answer","text": "Not legally — Missouri doesn\'t license either assessment or remediation. But the EPA, IICRC and ASTM all recommend independent assessment before significant remediation work, and many insurance carriers require it on jobs above a certain size. The EPA\'s published guidance recommends professional remediation for any mold contamination affecting more than 10 square feet. We perform our own mold inspection and testing service when appropriate, and we recommend independent third-party post-remediation verification on insurance-driven and significant losses to remove any conflict of interest from the clearance decision."}},
        {"@type": "Question","name": "What standard do you follow for mold remediation in St. Louis?","acceptedAnswer": {"@type": "Answer","text": "We follow the IICRC S520 Standard for Professional Mold Remediation — the published industry consensus standard, developed under ANSI processes and recognized by insurance carriers, indoor air quality professionals and the courts. S520 specifies containment design, negative-air pressure and HEPA filtration requirements, PPE, porous-material removal protocols, antimicrobial use, and the documentation expected for post-remediation clearance. We are IICRC Firm Certified, meaning the firm itself operates under IICRC standards across water damage, mold and fire and smoke damage."}},
        {"@type": "Question","name": "Is South City basement mold common in St. Louis?","acceptedAnswer": {"@type": "Answer","text": "Yes — it is our single most consistent St. Louis service category. South City brick rowhouses, four-family flats, Bevo Mill and Holly Hills cottages, Carondelet stock and the historic neighborhoods of Soulard, Lafayette Square and Benton Park nearly all sit on limestone or brick foundation basements that were built before modern moisture management. These basements accumulate groundwater seepage through old stone walls, take Category 3 backflow during summer combined-sewer events (the August 2022 flash flooding produced massive post-flood mold work), and trap A/C condensate and HVAC moisture. Finished basement conversions in older South City stock produce significant remediation scopes when the underlying moisture problem finally manifests as visible growth."}},
        {"@type": "Question","name": "Did the August 2022 flash flooding and May 2024 tornado cause a mold surge in St. Louis?","acceptedAnswer": {"@type": "Answer","text": "Yes — both events produced substantial post-event mold remediation waves. The July/August 2022 flash flooding inundated tens of thousands of South City and inner-suburb basements with Category 3 sewer-mixed water; mold colonized in 24-72 hours and post-event remediation work ran for months. The May 16, 2024 EF3 tornado opened roof envelopes across affected properties in north and west St. Louis, allowing wind-driven rain intrusion that seeded attic and ceiling-cavity mold weeks after the storm passed. We were still working post-tornado mold catch-up jobs many months later. Insurance carriers in Missouri increasingly require independent assessment documentation on water claims of significant size before closing them out."}},
        {"@type": "Question","name": "Do you handle mold remediation in four-family flats and historic St. Louis properties?","acceptedAnswer": {"@type": "Answer","text": "Yes. The St. Louis brick four-family flat — the city\'s signature pre-WWII multi-unit residential building, found across South City, the central corridor and Central West End — shares plumbing risers, common chases, party walls and (in many buildings) shared utility basements. Mold migration between units is common after a single-unit water loss. Historic district properties (Soulard Historic District, Lafayette Square Historic District, Compton Heights, the Hill, Central West End historic blocks, Old North St. Louis) require coordination with the St. Louis Cultural Resources Office or relevant landmarks commission for envelope-affecting work. Bevo Mill and Holly Hills cottages with original Germanic construction details, Lafayette Square gingerbread Victorians and Central West End mansion stock all have moisture and remediation considerations the standard playbook doesn\'t cover."}},
        {"@type": "Question","name": "What does mold remediation cost in St. Louis?","acceptedAnswer": {"@type": "Answer","text": "Pricing depends on affected square footage, materials involved, containment scope, and whether moisture source repair is part of the job. Small contained jobs run a few hundred dollars; large losses involving HVAC contamination, full South City basement remediation, four-family flat cross-unit work, or whole-property remediation following a major flash flood or sewer backup can run into the thousands. We provide written estimates after on-site evaluation and work directly with your insurance carrier where coverage applies."}},
        {"@type": "Question","name": "How long does mold remediation take?","acceptedAnswer": {"@type": "Answer","text": "Small contained remediation typically 1 to 3 days. Larger jobs — multi-room basement contamination, HVAC cleaning, four-family flat cross-unit work, or remediation tied to a Category 3 sewer backup or flash flood — run 3 to 7 days plus reconstruction time."}}
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
                Mold Removal & Mold Remediation in St. Louis, MO
            </h1>   
            <!-- Feature Pills -->
            <div class="feature-pills">
                <div class="feature-pill">
                    <i class="fas fa-certificate"></i>
                    <span>IICRC Firm</span>
                </div>
                <div class="feature-pill">
                    <i class="fas fa-headset"></i>
                    <span>Same-Day Containment</span>
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
                                <h2 id="intro-h">Industry-Standard Mold Removal &amp; Remediation in St. Louis</h2>
                                <p>
                                Mold in St. Louis is a year-round condition driven by the
                                metro's humid continental climate, its 19th- and early
                                20th-century combined sewer infrastructure, the periodic
                                catastrophic flash flooding the region produces, and a
                                residential building stock dominated by pre-WWII red-brick
                                rowhouses and four-family flats with limestone and brick
                                foundation basements. With July and August relative humidity
                                routinely above 70%, the post-August-2022 flash flooding wave
                                that inundated tens of thousands of South City basements with
                                Category 3 sewer-mixed water, the May 2024 EF3 tornado that
                                opened envelopes across north and west St. Louis allowing
                                wind-driven rain intrusion, and a Bevo Mill / Holly Hills /
                                Soulard / Lafayette Square inventory of century-old brick
                                stock with original galvanized supply pipe, St. Louis gives
                                mold every condition it needs to colonize. Water Mold Fire
                                Restoration of St. Louis is <strong>IICRC Firm
                                Certified</strong> and performs mold remediation in
                                accordance with the published industry consensus standard
                                (the IICRC S520 Standard for Professional Mold Remediation)
                                recognized by insurance carriers, indoor air quality
                                professionals and the courts.
                                </p>
                            </section>

                            <section class="why-flbm" aria-labelledby="why-h">
                                <h2 id="why-h">Why St. Louis Properties Develop Mold</h2>
                                <p>
                                Mold calls across the City of St. Louis, St. Louis County and
                                the surrounding metro trace back to a handful of conditions
                                specific to this market. We see the same patterns repeat in
                                Bevo Mill and Holly Hills brick cottages, Dutchtown and
                                Carondelet pre-WWII brick, Tower Grove South and Shaw rowhouses,
                                Soulard and Lafayette Square Victorians, four-family flats
                                across South City and the central corridor, The Hill
                                Italianates, Central West End mansion stock, and the postwar
                                stock that fills the inner-ring St. Louis County suburbs:
                                </p>
                                <ul class="listing">
                                    <li>
                                        <strong>South City basement moisture in stone-foundation
                                        brick stock.</strong>
                                        Pre-WWII St. Louis brick homes nearly all sit on limestone
                                        or brick foundation basements built before modern moisture
                                        management. Groundwater wicks through old stone walls;
                                        mortar joints fail; the half-finished basements common
                                        across Bevo Mill, Holly Hills, Carondelet, Dutchtown,
                                        Tower Grove South and the entire South City corridor stay
                                        damp year-round and produce chronic mold without
                                        continuous dehumidification.
                                    </li>
                                    <li>
                                        <strong>Post-August-2022 flash flood contamination.</strong>
                                        The July 25-26, 2022 flash flooding inundated tens of
                                        thousands of South City and inner-suburb basements with
                                        eight to nine inches of rain in six hours, sending
                                        Category 3 combined-sewer water through floor drains,
                                        laundry standpipes and showers across entire
                                        neighborhoods. Even with prompt extraction, residual
                                        biofilm and moisture seeded aggressive mold colonization
                                        that produced months of post-event remediation work.
                                        We are still occasionally working catch-up jobs on
                                        properties where the initial mitigation was incomplete.
                                    </li>
                                    <li>
                                        <strong>Post-May-2024 tornado envelope damage.</strong>
                                        The May 16, 2024 EF3 tornado that tracked through portions
                                        of north and west St. Louis opened roof envelopes,
                                        windows and exterior walls across affected properties.
                                        Wind-driven rain intrusion during the storm and subsequent
                                        rain events seeded attic and ceiling-cavity mold that
                                        often didn't become visible until weeks or months later.
                                        Tornado-driven secondary mold work is a recurring spring
                                        and fall category for St. Louis.
                                    </li>
                                    <li>
                                        <strong>Four-family flat cross-unit migration.</strong>
                                        The St. Louis brick four-family flat shares plumbing
                                        risers, common chases and party-wall systems. A leak in
                                        the upstairs unit produces mold in the unit below;
                                        landlord-tenant and HOA responsibility disputes routinely
                                        complicate the remediation timing. We work four-family
                                        flat jobs regularly across South City, Tower Grove and
                                        Central West End.
                                    </li>
                                    <li>
                                        <strong>Humidity, A/C condensate &amp; air-handler
                                        colonization.</strong>
                                        St. Louis A/C systems run heavily from May through
                                        October. Clogged condensate lines, undersized returns and
                                        short-cycling oversized units produce persistent moisture
                                        inside air handlers and supply plenums. Air handlers are
                                        mold incubators in this climate, and contamination of the
                                        air-distribution system spreads spores building-wide
                                        before anyone notices.
                                    </li>
                                    <li>
                                        <strong>Post-frozen-pipe-burst contamination.</strong>
                                        Polar-vortex cold snaps in January and February produce
                                        predictable burst waves in St. Louis. When a burst happens
                                        while owners are out of town, drywall and framing sit
                                        saturated for days before discovery. Mold colonizes within
                                        48 hours, and post-burst mold catch-up work runs through
                                        the spring.
                                    </li>
                                    <li>
                                        <strong>Hail-driven envelope failures.</strong>
                                        St. Louis sits in the corridor that produces the highest
                                        density of severe hail in the country. Major hail events
                                        damage roofs, gutters and window envelopes; the resulting
                                        water intrusion seeds attic and wall-cavity mold weeks
                                        after the storm, often discovered during a later roof
                                        project or a listing inspection.
                                    </li>
                                    <li>
                                        <strong>Original-era plumbing failures.</strong>
                                        Pre-WWII St. Louis stock &mdash; South City brick rowhouses,
                                        four-family flats, Soulard and Lafayette Square Victorians,
                                        Bevo Mill and Carondelet cottages, Central West End
                                        mansions &mdash; runs on galvanized supply pipe (pinholing
                                        from the inside out after 60-80 years) and cast-iron drain
                                        stacks (rusting through at hub joints). Slow chronic leaks
                                        behind tiled walls, under sinks and inside cabinets seed
                                        mold colonies that compound over months.
                                    </li>
                                </ul>
                            </section>

                            <section class="credentials" aria-labelledby="cred-h">
                                <h2 id="cred-h">Credentials, Standards &amp; What They Mean in Missouri</h2>
                                <p>
                                Missouri does not license mold assessment or mold remediation
                                contractors at the state level, unlike Florida (which
                                licenses both under Chapter 468 of the Florida Statutes),
                                Texas, New York and a handful of other states. The Missouri
                                Department of Health and Senior Services publishes consumer
                                guidance on indoor mold, but no individual or company license
                                is required to perform the work. That puts the burden on
                                Missouri property owners to evaluate restoration companies on
                                the credentials that actually substantiate the work.
                                </p>
                                <p>
                                The meaningful credentials are industry certification and
                                adherence to the published consensus standards:
                                </p>
                                <ul class="listing">
                                    <li>
                                        <strong>IICRC Firm Certified.</strong> Firm-level certification
                                        from the Institute of Inspection, Cleaning and Restoration
                                        Certification &mdash; the recognized standards body for water
                                        damage restoration, mold remediation and fire and smoke
                                        damage restoration. Firm certification means the company
                                        itself operates under IICRC standards, not just individual
                                        technicians holding cards.
                                    </li>
                                    <li>
                                        <strong>Published industry consensus standard.</strong> We
                                        work to the IICRC S520 Standard for Professional Mold
                                        Remediation on every job &mdash; the ANSI-process industry
                                        consensus standard specifying containment design,
                                        negative-air pressure and HEPA filtration requirements,
                                        personal protective equipment, porous-material removal
                                        protocols, antimicrobial use, and the documentation expected
                                        for post-remediation clearance.
                                    </li>
                                    <li>
                                        <strong>Independent post-remediation verification.</strong>
                                        The EPA, IICRC and ASTM all recommend independent
                                        third-party post-remediation verification on significant
                                        jobs. Missouri doesn't require it, but we recommend it on
                                        insurance-driven and large-scope work to remove any conflict
                                        of interest from the final clearance decision. We perform
                                        our own
                                        <a href="<?php echo site_url("st-louis-mo/mold-inspection-testing/"); ?>">mold
                                        inspection and testing</a> service for smaller jobs and
                                        coordinate with independent indoor air quality assessors
                                        when independence is warranted.
                                    </li>
                                </ul>
                            </section>

                            <section class="process" aria-labelledby="process-h">
                                <h2 id="process-h">Our Mold Remediation Process</h2>
                                <p>
                                Every job we run follows the IICRC S520 Standard for
                                Professional Mold Remediation:
                                </p>
                                <ol>
                                    <li><strong>On-site assessment.</strong> Visual inspection, moisture mapping, thermal imaging, identification of the moisture source (sewer backup, flash flood aftermath, frozen pipe burst, tornado envelope damage, hail-driven roof leak, A/C condensate, original plumbing failure, stone-foundation seepage).</li>
                                    <li><strong>Containment setup.</strong> 6-mil polyethylene barriers, sealed HVAC vents, negative air pressure with HEPA scrubbers exhausted outside containment.</li>
                                    <li><strong>Personal protective equipment.</strong> Tyvek suits, gloves, eye protection, N95 or half-face HEPA respirators.</li>
                                    <li><strong>Removal of contaminated porous materials.</strong> Drywall, insulation, carpet, pad, baseboards, cabinetry, bagged inside containment and removed through a decontamination route.</li>
                                    <li><strong>HEPA filtration &amp; surface cleaning</strong> with EPA-registered antimicrobials.</li>
                                    <li><strong>Moisture source repair.</strong> Plumbing, foundation seal, HVAC, sump pump installation or replacement, basement waterproofing, roof and envelope repair &mdash; whatever the source actually is, fixed as part of the same job.</li>
                                    <li><strong>Post-remediation clearance.</strong> Visual verification and, on significant jobs, independent third-party post-remediation verification (PRV).</li>
                                    <li><strong>Reconstruction.</strong> Drywall, flooring, cabinetry, paint and finish carpentry, coordinated with licensed Missouri trade subcontractors and properly permitted through the City of St. Louis Building Division or the relevant St. Louis County or municipal building department.</li>
                                </ol>
                            </section>

                            <section class="types" aria-labelledby="types-h">
                                <h2 id="types-h">Types of Mold We Remediate in St. Louis</h2>
                                <p>
                                Common indoor molds we encounter on St. Louis area jobs
                                include <em>Stachybotrys chartarum</em> ("black mold"),
                                <em>Aspergillus</em>, <em>Penicillium</em>, <em>Cladosporium</em>
                                and <em>Chaetomium</em>. The EPA, CDC and IICRC treat any
                                indoor mold growth as a problem regardless of species, and
                                the remediation protocol is essentially the same across
                                genera. Species identification is the assessor's job; we work
                                from the assessor's protocol or, on small unassessed jobs,
                                from our own visual and instrument-based scope.
                                </p>
                            </section>

                            <section class="service-area" aria-labelledby="area-h">
                                <h2 id="area-h">Where We Remediate Mold in St. Louis &amp; the Metro</h2>
                                <p>
                                The City of St. Louis &mdash; Bevo Mill, Holly Hills,
                                Dutchtown, Carondelet, Patch, Boulevard Heights, St. Louis
                                Hills, Princeton Heights, Southampton, Tower Grove South,
                                Tower Grove East, Shaw, Compton Heights, Benton Park,
                                Cherokee Street, Soulard, Lafayette Square, The Hill,
                                Botanical Heights, McRee Town, Midtown, Grand Center, Forest
                                Park, Forest Park Southeast, Central West End, Visitation
                                Park, Downtown, Washington Avenue Loft District, Old North
                                St. Louis, Hyde Park. <strong>St. Louis County:</strong>
                                Clayton, University City, Webster Groves, Kirkwood, Maplewood,
                                Brentwood, Richmond Heights, Ladue, Frontenac, Town and
                                Country, Chesterfield, Ballwin, Ellisville, Wildwood,
                                Manchester, Crestwood, Affton, Mehlville, Florissant,
                                Hazelwood, Maryland Heights, Bridgeton, Creve Coeur,
                                Olivette. <strong>St. Charles County:</strong> St. Charles,
                                St. Peters, O'Fallon, Wentzville.
                                </p>
                            </section>

                            <section class="faq bg-light mb-4" aria-labelledby="faq-h">
                                <h2 id="faq-h">St. Louis Mold Remediation FAQs</h2>

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
                                                Does Missouri license mold remediation contractors?
                                            </button>
                                        </h3>
                                        <div id="collapse_1"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_1"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>No. Missouri does not require state licensure for mold remediation or assessment, unlike Florida. The meaningful credentials are <strong>IICRC Firm certification</strong> and adherence to the published industry consensus standards.</p>
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
                                                Why does mold grow in St. Louis homes and basements?
                                            </button>
                                        </h3>
                                        <div id="collapse_2"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_2"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>Humid continental summers (70%+ RH), South City stone-foundation basements that wick groundwater year-round, combined sewer backups depositing Category 3 water during flash flood events, frozen pipe bursts, tornado-driven envelope intrusion, hail-driven roof leaks, A/C condensate during the long cooling season, and original galvanized plumbing pinholes in pre-WWII stock.</p>
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
                                                Do I need a mold assessment before remediation in Missouri?
                                            </button>
                                        </h3>
                                        <div id="collapse_3"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_3"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>Not legally &mdash; Missouri doesn't license either side. But EPA/IICRC/ASTM recommend independent assessment before significant remediation, and many insurance carriers require it on larger jobs. EPA recommends professional remediation for any mold affecting more than 10 sq ft.</p>
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
                                                What standard do you follow for mold remediation in St. Louis?
                                            </button>
                                        </h3>
                                        <div id="collapse_4"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_4"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>The IICRC S520 industry consensus standard. We are IICRC Firm Certified.</p>
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
                                                Is South City basement mold common in St. Louis?
                                            </button>
                                        </h3>
                                        <div id="collapse_5"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_5"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>Yes &mdash; our single most consistent St. Louis category. Pre-WWII South City brick stock sits on limestone and brick foundation basements that accumulate groundwater seepage, take combined-sewer backflow during summer rain events, and trap A/C condensate. Finished basement conversions in older South City stock produce significant remediation scopes.</p>
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
                                                Did the August 2022 flash flooding and May 2024 tornado cause a mold surge in St. Louis?
                                            </button>
                                        </h3>
                                        <div id="collapse_6"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_6"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>Yes &mdash; both events produced substantial post-event mold waves. The 2022 flash flooding inundated tens of thousands of basements with Category 3 sewer-mixed water; mold colonized in 24-72 hours and post-event remediation ran for months. The May 2024 EF3 tornado opened envelopes that seeded weeks-later wind-driven rain intrusion.</p>
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
                                                Do you handle mold remediation in four-family flats and historic St. Louis properties?
                                            </button>
                                        </h3>
                                        <div id="collapse_7"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_7"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>Yes. The St. Louis brick four-family flat is one of our most active multi-unit scopes. Historic-district properties (Soulard, Lafayette Square, Compton Heights, the Hill, Central West End historic blocks, Old North) require coordination with the St. Louis Cultural Resources Office for envelope-affecting work.</p>
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
                                                What does mold remediation cost in St. Louis?
                                            </button>
                                        </h3>
                                        <div id="collapse_8"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_8"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>Small contained jobs run a few hundred dollars; large losses involving HVAC contamination, full South City basement remediation, four-family flat cross-unit work or whole-property post-flood remediation can run into the thousands. Written estimates after on-site evaluation.</p>
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
                                                How long does mold remediation take?
                                            </button>
                                        </h3>
                                        <div id="collapse_9"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_9"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>Small contained jobs: 1-3 days. Larger jobs: 3-7 days plus reconstruction.</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                
                            </section>

                            <section class="contact" aria-labelledby="contact-h">
                                <h2 id="contact-h">Call St. Louis's IICRC-Certified Mold Remediation Team</h2>
                                <address>
                                    <strong>Water Mold Fire Restoration of St. Louis</strong><br>
                                    3958 Randall Street<br>
                                    Saint Louis, MO 63116<br>
                                    <a href="tel:+13142824140">314-282-4140</a> &middot;
                                    <a href="mailto:stlouis@watermoldfire.net">stlouis@watermoldfire.net</a><br>
                                    IICRC Firm Certified
                                </address>
                                <p>
                                Visible growth, musty South City basement smell, recent
                                sewer backup, post-2022-flood remediation catch-up, or
                                post-tornado attic concern?
                                <a class="cta" href="tel:+13142824140">Call 314-282-4140</a>
                                and we'll schedule an on-site evaluation.
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