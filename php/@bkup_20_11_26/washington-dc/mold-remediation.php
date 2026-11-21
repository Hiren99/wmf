<?php
require_once __DIR__ . '/../includes/init.php';

$pagename = "washington-dc/mold-remediation.php";

$title = "Mold Removal &amp; Mold Remediation in Washington, DC | IICRC Firm";

$meta_description = "DC mold remediation following industry standards. English basement, rowhouse, condo & historic building mold removal. Containment, HEPA, antimicrobial. IICRC Firm. 202-650-0299.";

$meta_keywords = "mold remediation washington, mold remediation company washington, mold abatement, mold contractor washington, mold removal washington, black mold removal, mold cleanup washington, toxic mold removal";

$canonical_url = "https://watermoldfire.net/washington-dc/mold-remediation/";

$geo_tags = '
<meta name="geo.region" content="US-DC">
<meta name="geo.placename" content="Washington">
<meta name="geo.position" content="38.9000;-77.0470">
<meta name="ICBM" content="38.9000, -77.0470">
';

$open_graph = '
<meta property="og:type" content="website">
<meta property="og:site_name" content="Water Mold Fire Restoration">
<meta property="og:title" content="Mold Removal &amp; Mold Remediation in Washington, DC | IICRC Firm">
<meta property="og:description" content="DC mold remediation following industry standards. Black mold removal, full containment, HEPA filtration. English basement, rowhouse, condo and historic building specialists.">
<meta property="og:url" content="https://watermoldfire.net/washington-dc/mold-remediation/">
<meta property="og:image" content="'.site_url().'images/logo.webp">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="og:locale" content="en_US">
';

$twitter = '
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Mold Removal &amp; Remediation in Washington, DC">
<meta name="twitter:description" content="Industry-standard mold remediation in Washington DC. English basement, rowhouse and condo specialists. IICRC Firm.">
<meta name="twitter:image" content="'.site_url().'images/logo.webp">
';

$schema_ld_json = '
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "@id": "https://watermoldfire.net/washington-dc/mold-remediation/#service",
      "name": "Mold Removal & Mold Remediation in Washington, DC",
      "serviceType": ["Mold Remediation","Mold Removal","Mold Abatement"],
      "description": "Mold remediation in Washington, DC following the IICRC S520 Standard for Professional Mold Remediation. Black mold removal, negative-air containment, HEPA filtration, antimicrobial treatment and moisture source repair for DC rowhouses, English basements, Wardman houses, Federal-era brick, embassy-row historic properties, downtown condos and commercial properties across all four quadrants of the District and the DMV. IICRC Firm Certified.",
      "url": "https://watermoldfire.net/washington-dc/mold-remediation/",
      "provider": {"@id": "https://watermoldfire.net/washington-dc/#localbusiness"},
      "areaServed": [
        {"@type": "City", "name": "Washington"},{"@type": "City", "name": "Arlington"},
        {"@type": "City", "name": "Alexandria"},{"@type": "City", "name": "Bethesda"},
        {"@type": "City", "name": "Silver Spring"},{"@type": "City", "name": "Chevy Chase"},
        {"@type": "City", "name": "McLean"},{"@type": "City", "name": "Falls Church"},
        {"@type": "City", "name": "Hyattsville"},{"@type": "City", "name": "Takoma Park"}
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
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "English Basement Mold Remediation"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Post-Sewer-Backup Mold Remediation"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Rowhouse Party-Wall Mold Remediation"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Historic Brick & Federal-Era Building Mold Remediation"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Attic Mold Remediation"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Crawlspace Mold Remediation"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "HVAC & Air Handler Mold Remediation"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Condo Cross-Unit Mold Remediation"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Negative-Air Containment & HEPA Filtration"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Antimicrobial Treatment & Encapsulation"}}
        ]
      }
    },
    {
      "@type": "LocalBusiness",
      "@id": "https://watermoldfire.net/washington-dc/#localbusiness",
      "name": "Water Mold Fire Restoration of Washington DC",
      "url": "https://watermoldfire.net/washington-dc/",
      "telephone": "+1-202-650-0299",
      "email": "washingtondc@watermoldfire.net",
      "address": {"@type": "PostalAddress","streetAddress": "2200 Pennsylvania Avenue NW","addressLocality": "Washington","addressRegion": "DC","postalCode": "20037","addressCountry": "US"},
      "geo": {"@type": "GeoCoordinates","latitude": 38.9000,"longitude": -77.0470},
      "aggregateRating": {"@type": "AggregateRating","ratingValue": "5.0","reviewCount": "118"}
    },
    {
      "@type": "BreadcrumbList",
      "@id": "https://watermoldfire.net/washington-dc/mold-remediation/#breadcrumb",
      "itemListElement": [
        {"@type": "ListItem","position": 1,"name": "Home","item": "https://watermoldfire.net/"},
        {"@type": "ListItem","position": 2,"name": "Washington, DC","item": "https://watermoldfire.net/washington-dc/"},
        {"@type": "ListItem","position": 3,"name": "Mold Remediation","item": "https://watermoldfire.net/washington-dc/mold-remediation/"}
      ]
    },
    {
      "@type": "WebPage",
      "@id": "https://watermoldfire.net/washington-dc/mold-remediation/#webpage",
      "url": "https://watermoldfire.net/washington-dc/mold-remediation/",
      "name": "Mold Removal & Mold Remediation in Washington, DC",
      "isPartOf": {"@id": "https://watermoldfire.net/#website"},
      "about": {"@id": "https://watermoldfire.net/washington-dc/mold-remediation/#service"},
      "breadcrumb": {"@id": "https://watermoldfire.net/washington-dc/mold-remediation/#breadcrumb"},
      "inLanguage": "en-US"
    },
    {
      "@type": "FAQPage",
      "@id": "https://watermoldfire.net/washington-dc/mold-remediation/#faq",
      "mainEntity": [
        {"@type": "Question","name": "Does Washington DC license mold remediation contractors?","acceptedAnswer": {"@type": "Answer","text": "No. Washington, DC does not require District-level licensure for mold remediation or mold assessment, unlike Florida, Texas, New York and a handful of other states. The DC Department of Health publishes guidance on indoor mold, but no individual or company license is required to perform the work. In the absence of District licensing, the meaningful credentials for DC property owners to evaluate are: industry certification (we are IICRC Firm Certified), adherence to the published consensus standards (the IICRC S520 standard for mold remediation), use of AIHA-accredited laboratories for any sampling, and the company\'s documentation discipline on the written scope and clearance."}},
        {"@type": "Question","name": "Why does mold grow in DC homes and basements?","acceptedAnswer": {"@type": "Answer","text": "DC sits in a humid subtropical climate zone — July and August outdoor relative humidity routinely runs 70-75% — and the city\'s building stock is dominated by century-old brick rowhouses with below-grade English basements that nearly all carry chronic moisture. The primary drivers we see are: combined sewer backups during heavy summer rain that deposit Category 3 water in English basements; chronic basement moisture from elevated water tables (particularly in low-lying corridors near the Potomac, Anacostia, Rock Creek and the Tidal Basin); A/C condensate overflows during the long DC cooling season; original galvanized supply pipe pinholes in pre-WWII rowhouses; hurricane remnant and tropical storm flooding; and party-wall moisture migration between attached rowhouses that produces visible mold in the neighbor\'s interior days after a leak. Once wet materials sit at room temperature for 48 hours, mold colonization begins."}},
        {"@type": "Question","name": "Do I need a mold assessment before remediation in DC?","acceptedAnswer": {"@type": "Answer","text": "Not legally — DC doesn\'t license either assessment or remediation. But the EPA, IICRC and ASTM all recommend independent assessment before significant remediation work, and many insurance carriers require it on jobs above a certain size. The EPA\'s published guidance recommends professional remediation for any mold contamination affecting more than 10 square feet. We perform our own mold inspection and testing service when appropriate, and we recommend independent third-party post-remediation verification on insurance-driven and significant losses to remove any conflict of interest from the clearance decision."}},
        {"@type": "Question","name": "What standard do you follow for mold remediation in DC?","acceptedAnswer": {"@type": "Answer","text": "We follow the IICRC S520 Standard for Professional Mold Remediation — the published industry consensus standard, developed under ANSI processes and recognized by insurance carriers, indoor air quality professionals and the courts. S520 specifies containment design, negative-air pressure and HEPA filtration requirements, PPE, porous-material removal protocols, antimicrobial use, and the documentation expected for post-remediation clearance. We are IICRC Firm Certified, meaning the firm itself operates under IICRC standards across water damage, mold and fire and smoke damage."}},
        {"@type": "Question","name": "Is English basement mold common in DC rowhouses?","acceptedAnswer": {"@type": "Answer","text": "Yes — it is one of our most consistent DC service categories. English basements and garden units sit below grade and below sewer-line elevation, which means they accumulate moisture from groundwater seepage through brick foundations, from sewer backups during heavy summer rain, from A/C condensate overflows, and from any plumbing failure upstairs that travels down through plumbing chases. Finished English basements with drywall, carpet, drop ceilings and built-in cabinetry produce significant remediation scopes; unfinished basements with original brick walls and exposed framing are easier to remediate but still require careful moisture-source identification."}},
        {"@type": "Question","name": "Do you handle mold remediation in DC condos and historic properties?","acceptedAnswer": {"@type": "Answer","text": "Yes. DC\'s condo stock — Foggy Bottom, the West End, Dupont, Logan Circle, downtown, NoMa, Capitol Riverfront, the Southwest Wharf, Rosslyn and Crystal City — has shared HVAC stacks, common plumbing risers and party-wall cross-contamination paths that move mold between units. Historic district properties (Capitol Hill Historic District, Georgetown Historic District, Massachusetts Avenue Historic District, U Street Historic District and others) require coordination with the DC Historic Preservation Office for any envelope-affecting remediation work. Embassy-row mansions along Massachusetts Avenue, Federal-era Capitol Hill rowhouses, Wardman rowhouses in Petworth and Park View, and 1920s-30s apartment buildings in Cleveland Park and Woodley Park all have particular moisture and remediation considerations the standard playbook doesn\'t cover."}},
        {"@type": "Question","name": "What does mold remediation cost in Washington DC?","acceptedAnswer": {"@type": "Answer","text": "Pricing depends on affected square footage, materials involved, containment scope, and whether moisture source repair is part of the job. Small contained jobs run a few hundred dollars; large losses involving HVAC contamination, full English basement remediation in a rowhouse, cross-unit condo migration or whole-property remediation following a major water loss can run into the thousands. We provide written estimates after on-site evaluation and work directly with your insurance carrier where coverage applies."}},
        {"@type": "Question","name": "How long does mold remediation take?","acceptedAnswer": {"@type": "Answer","text": "Small contained remediation typically 1 to 3 days. Larger jobs — multi-room basement contamination, HVAC cleaning, rowhouse party-wall work, condo cross-unit remediation, or remediation tied to a Category 3 sewer backup — run 3 to 7 days plus reconstruction time."}}
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
                Mold Removal & Mold Remediation in Washington, DC
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
                                <h2 id="intro-h">Industry-Standard Mold Removal &amp; Remediation in Washington DC</h2>
                                <p>
                                Mold in Washington DC is a year-round condition driven by the
                                city's humid subtropical climate, its 19th-century combined
                                sewer infrastructure, and a residential building stock
                                dominated by century-old brick rowhouses with below-grade
                                English basements. With July and August outdoor relative
                                humidity routinely above 70-75%, summer thunderstorm
                                sewer backups that deposit Category 3 contaminated water in
                                English basements, an A/C cooling season that runs from May
                                through October producing constant condensate, and a Federal
                                Triangle's worth of pre-WWII brick rowhouses still running
                                on original galvanized supply pipe, DC gives mold every
                                condition it needs to colonize. Water Mold Fire Restoration
                                of Washington DC is <strong>IICRC Firm Certified</strong>
                                and performs mold remediation in accordance with the
                                published industry consensus standard (the IICRC S520
                                Standard for Professional Mold Remediation) recognized by
                                insurance carriers, indoor air quality professionals and the
                                courts.
                                </p>
                            </section>

                            <section class="why-flbm" aria-labelledby="why-h">
                                <h2 id="why-h">Why DC Properties Develop Mold</h2>
                                <p>
                                Mold calls across all four quadrants of the District and the
                                surrounding DMV trace back to a handful of conditions
                                specific to this market. We see the same patterns repeat in
                                Capitol Hill rowhouses, Georgetown Federals, Adams Morgan and
                                Mount Pleasant Victorians, Petworth and Park View Wardmans,
                                Foggy Bottom and West End condos, Cleveland Park and Woodley
                                Park apartment houses, and the modern towers of NoMa, Capitol
                                Riverfront and the Southwest Wharf:
                                </p>
                                <ul class="listing">
                                    <li>
                                        <strong>English basement &amp; garden unit moisture.</strong>
                                        DC's signature below-grade rowhouse space is also its most
                                        consistent mold environment. English basements sit below
                                        sewer-line elevation, accumulate groundwater seepage through
                                        brick foundations, take Category 3 contamination during
                                        summer sewer backups, and trap A/C condensate and HVAC
                                        moisture. Finished English basements with drywall, carpet,
                                        cabinetry and sometimes full kitchens produce significant
                                        remediation scopes; the moisture problem usually predates
                                        the visible mold discovery by months or years.
                                    </li>
                                    <li>
                                        <strong>Post-sewer-backup contamination.</strong>
                                        DC's combined sewer system in older neighborhoods deposits
                                        Category 3 contaminated water across basement floors during
                                        heavy summer thunderstorm events. Even with prompt
                                        extraction, residual biofilm and moisture seed aggressive
                                        mold colonization. The July 8, 2019 Northwest DC flash
                                        flooding produced months of post-backup remediation work
                                        across the affected English basements.
                                    </li>
                                    <li>
                                        <strong>Summer humidity &amp; A/C condensate.</strong>
                                        DC's humid subtropical climate keeps outdoor relative
                                        humidity above 70% through the cooling season. A/C systems
                                        carry heavy condensate loads from May through October, and
                                        any clogged drain line, undersized return or short-cycling
                                        oversized unit produces persistent moisture inside the air
                                        handler and supply plenum. Air handlers are mold incubators
                                        in this climate, and contamination of the air-distribution
                                        system spreads spores building-wide before anyone notices.
                                    </li>
                                    <li>
                                        <strong>Hurricane remnant water intrusion.</strong>
                                        Wind-driven rain from hurricane remnants and tropical
                                        storms moving up the mid-Atlantic pushes water through
                                        roof-to-wall transitions, around window frames, under
                                        entry thresholds and into attic spaces. Hurricane Isabel
                                        (2003), Hurricane Sandy remnants (2012), Hurricane Florence
                                        remnants (2018) and every active Atlantic season since
                                        leaves DC properties with envelope-driven moisture that
                                        seeds mold within 48 hours.
                                    </li>
                                    <li>
                                        <strong>Rowhouse party-wall moisture migration.</strong>
                                        DC's rowhouse density &mdash; Capitol Hill, Logan Circle,
                                        Shaw, U Street, Adams Morgan, Mount Pleasant, Petworth,
                                        Park View, Bloomingdale, Eckington, Brookland, H Street,
                                        Georgetown &mdash; means a leak in one party-wall cavity
                                        can produce visible mold in the neighbor's interior days
                                        later. Shared chimney chases and common plumbing stacks
                                        compound the cross-house exposure.
                                    </li>
                                    <li>
                                        <strong>Original-era plumbing failures.</strong>
                                        DC's pre-WWII housing stock &mdash; Federal-era Capitol
                                        Hill, Victorian Logan Circle, turn-of-century Adams Morgan
                                        and Mount Pleasant, Wardman rowhouses in Petworth and Park
                                        View &mdash; still carries galvanized supply pipe (pinholing
                                        from the inside out after 60-80 years) and cast-iron drain
                                        stacks (rusting through at hub joints). Slow chronic leaks
                                        behind tiled walls, under sinks and inside cabinets seed
                                        mold colonies that compound over months.
                                    </li>
                                    <li>
                                        <strong>Condo cross-unit migration.</strong>
                                        Foggy Bottom, the West End, Dupont, Logan, downtown, NoMa,
                                        Capitol Riverfront, the Southwest Wharf and the modern
                                        Rosslyn and Crystal City towers all share HVAC stacks,
                                        common drain risers and pressurized air-distribution
                                        systems that move spores between units. A single unit with
                                        hidden moisture can seed colonization across the floor
                                        above and below.
                                    </li>
                                    <li>
                                        <strong>Historic-district envelope constraints.</strong>
                                        Capitol Hill, Georgetown, Massachusetts Avenue, U Street and
                                        other DC historic districts restrict envelope modifications
                                        on contributing properties. Remediation that requires
                                        opening exterior brick or replacing original windows
                                        triggers Historic Preservation Office review. We coordinate
                                        that process where it applies.
                                    </li>
                                </ul>
                            </section>

                            <section class="credentials" aria-labelledby="cred-h">
                                <h2 id="cred-h">Credentials, Standards &amp; What They Mean in DC</h2>
                                <p>
                                Washington, DC does not license mold assessment or mold
                                remediation contractors at the District level, unlike Florida
                                (which licenses both under Chapter 468 of the Florida
                                Statutes), Texas, New York and a handful of other states.
                                The DC Department of Health publishes consumer guidance on
                                indoor mold, but no individual or company license is required
                                to perform the work. That puts the burden on DC property
                                owners to evaluate restoration companies on the credentials
                                that actually substantiate the work.
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
                                        consensus standard specifying containment design, negative-air
                                        pressure and HEPA filtration requirements, personal protective
                                        equipment, porous-material removal protocols, antimicrobial
                                        use, and the documentation expected for post-remediation
                                        clearance.
                                    </li>
                                    <li>
                                        <strong>Independent post-remediation verification.</strong>
                                        The EPA, IICRC and ASTM all recommend independent third-party
                                        post-remediation verification on significant jobs. DC doesn't
                                        require it, but we recommend it on insurance-driven and
                                        large-scope work to remove any conflict of interest from the
                                        final clearance decision. We perform our own
                                        <a href="<?php echo site_url("washington-dc/mold-inspection-testing/"); ?>">mold
                                        inspection and testing</a> service for smaller jobs and
                                        coordinate with independent IAQ assessors when independence
                                        is warranted.
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
                                    <li><strong>On-site assessment.</strong> Visual inspection, moisture mapping, thermal imaging, identification of the moisture source (sewer backup, English basement seepage, A/C condensate, party-wall migration, original plumbing failure, hurricane remnant intrusion).</li>
                                    <li><strong>Containment setup.</strong> 6-mil polyethylene barriers, sealed HVAC vents, negative air pressure with HEPA scrubbers exhausted outside containment.</li>
                                    <li><strong>Personal protective equipment.</strong> Tyvek suits, gloves, eye protection, N95 or half-face HEPA respirators.</li>
                                    <li><strong>Removal of contaminated porous materials.</strong> Drywall, insulation, carpet, pad, baseboards, cabinetry, bagged inside containment and removed through a decontamination route.</li>
                                    <li><strong>HEPA filtration &amp; surface cleaning</strong> with EPA-registered antimicrobials.</li>
                                    <li><strong>Moisture source repair.</strong> Plumbing, foundation seal, HVAC, sump pump installation or replacement, basement waterproofing &mdash; whatever the source actually is, fixed as part of the same job.</li>
                                    <li><strong>Post-remediation clearance.</strong> Visual verification and, on significant jobs, independent third-party post-remediation verification (PRV).</li>
                                    <li><strong>Reconstruction.</strong> Drywall, flooring, cabinetry, paint and finish carpentry, coordinated with licensed DC trade subcontractors and properly permitted through the DC Department of Buildings, with Historic Preservation Office coordination on historic-district properties.</li>
                                </ol>
                            </section>

                            <section class="types" aria-labelledby="types-h">
                                <h2 id="types-h">Types of Mold We Remediate in DC</h2>
                                <p>
                                Common indoor molds we encounter on DC area jobs include
                                <em>Stachybotrys chartarum</em> ("black mold"),
                                <em>Aspergillus</em>, <em>Penicillium</em>, <em>Cladosporium</em>
                                and <em>Chaetomium</em>. The EPA, CDC and IICRC treat any
                                indoor mold growth as a problem regardless of species, and
                                the remediation protocol is essentially the same across
                                genera. Species identification is the assessor's job; we
                                work from the assessor's protocol or, on small unassessed
                                jobs, from our own visual and instrument-based scope.
                                </p>
                            </section>

                            <section class="service-area" aria-labelledby="area-h">
                                <h2 id="area-h">Where We Remediate Mold in DC &amp; the DMV</h2>
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
                                Rockville.
                                </p>
                            </section>

                            <section class="faq bg-light mb-4" aria-labelledby="faq-h">
                                <h2 id="faq-h">DC Mold Remediation FAQs</h2>

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
                                                Does Washington DC license mold remediation contractors?
                                            </button>
                                        </h3>
                                        <div id="collapse_1"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_1"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>No. DC does not require District-level licensure for mold remediation or assessment, unlike Florida. The meaningful credentials are <strong>IICRC Firm certification</strong> and adherence to the published industry consensus standards.</p>
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
                                                Why does mold grow in DC homes and basements?
                                            </button>
                                        </h3>
                                        <div id="collapse_2"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_2"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>Humid subtropical summers (70-75% RH), combined sewer backups depositing Category 3 water in English basements, chronic basement moisture from elevated water tables, A/C condensate during the long cooling season, hurricane remnant water intrusion, rowhouse party-wall migration, and original galvanized plumbing pinholes in pre-WWII stock. DC drivers are humid-summer + below-grade-basement specific.</p>
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
                                                Do I need a mold assessment before remediation in DC?
                                            </button>
                                        </h3>
                                        <div id="collapse_3"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_3"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>Not legally &mdash; DC doesn't license either side. But EPA/IICRC/ASTM recommend independent assessment before significant remediation, and many insurance carriers require it on larger jobs. EPA recommends professional remediation for any mold affecting more than 10 sq ft.</p>
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
                                                What standard do you follow for mold remediation in DC?
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
                                                Is English basement mold common in DC rowhouses?
                                            </button>
                                        </h3>
                                        <div id="collapse_5"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_5"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>Yes &mdash; one of our most consistent DC scopes. English basements sit below sewer-line elevation and accumulate moisture from groundwater seepage, summer sewer backups, A/C condensate and upstairs plumbing failures. Finished English basements with kitchens and baths produce significant remediation scopes.</p>
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
                                                Do you handle mold remediation in DC condos and historic properties?
                                            </button>
                                        </h3>
                                        <div id="collapse_6"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_6"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>Yes. Foggy Bottom, West End, Dupont, downtown, NoMa, Capitol Riverfront and the Southwest Wharf condos all have cross-unit migration paths. Historic-district properties (Capitol Hill, Georgetown, Massachusetts Avenue, U Street) require DC Historic Preservation Office coordination for envelope-affecting work.</p>
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
                                                What does mold remediation cost in Washington DC?
                                            </button>
                                        </h3>
                                        <div id="collapse_7"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_7"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>Small contained jobs run a few hundred dollars; large losses involving HVAC contamination, full English basement remediation or condo cross-unit work can run into the thousands. Written estimates after on-site evaluation.</p>
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
                                                How long does mold remediation take?
                                            </button>
                                        </h3>
                                        <div id="collapse_8"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_8"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>Small contained jobs: 1-3 days. Larger jobs: 3-7 days plus reconstruction.</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </section>

                            <section class="contact" aria-labelledby="contact-h">
                                <h2 id="contact-h">Call DC's IICRC-Certified Mold Remediation Team</h2>
                                <address>
                                    <strong>Water Mold Fire Restoration of Washington DC</strong><br>
                                    2200 Pennsylvania Avenue NW<br>
                                    Washington, DC 20037<br>
                                    <a href="tel:+12026500299">202-650-0299</a> &middot;
                                    <a href="mailto:washingtondc@watermoldfire.net">washingtondc@watermoldfire.net</a><br>
                                    IICRC Firm Certified
                                </address>
                                <p>
                                Visible growth, musty English basement smell, recent sewer
                                backup, A/C condensate stain or hurricane remnant intrusion?
                                <a class="cta" href="tel:+12026500299">Call 202-650-0299</a>
                                and we'll schedule an on-site evaluation.
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