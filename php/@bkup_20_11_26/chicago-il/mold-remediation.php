<?php
require_once __DIR__ . '/../includes/init.php';

$pagename = "chicago-il/mold-remediation.php";

$title = "Mold Removal &amp; Mold Remediation in Chicago, IL | IICRC Firm";

$meta_description = "Chicago mold remediation following IICRC S520. Basement, two-flat & high-rise mold removal. Containment, HEPA, antimicrobial. IICRC Firm. GC #TGC141820. 312-574-3814.";

$meta_keywords = "mold remediation chicago, mold remediation company chicago, mold abatement, mold contractor chicago, mold removal chicago, black mold removal, mold cleanup chicago, toxic mold removal";

$canonical_url = "https://watermoldfire.net/chicago-il/mold-remediation/";

$geo_tags = '
<meta name="geo.region" content="US-IL">
<meta name="geo.placename" content="Chicago">
<meta name="geo.position" content="41.9479;-87.6553">
<meta name="ICBM" content="41.9479, -87.6553">
';

$open_graph = '
<meta property="og:type" content="website">
<meta property="og:site_name" content="Water Mold Fire Restoration">
<meta property="og:title" content="Mold Removal &amp; Mold Remediation in Chicago, IL | IICRC Firm">
<meta property="og:description" content="Chicago mold remediation following IICRC S520. Black mold removal, full containment, HEPA filtration. Basement, two-flat and high-rise specialists. IICRC Firm + Chicago GC #TGC141820.">
<meta property="og:url" content="https://watermoldfire.net/chicago-il/mold-remediation/">
<meta property="og:image" content="'.site_url().'images/logo.webp">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="og:locale" content="en_US">
';

$twitter = '
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Mold Removal &amp; Remediation in Chicago, IL">
<meta name="twitter:description" content="IICRC S520 mold remediation in Chicago. Basement, two-flat & high-rise. IICRC Firm + Chicago GC #TGC141820.">
<meta name="twitter:image" content="'.site_url().'images/logo.webp">
';

$schema_ld_json = '
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "@id": "https://watermoldfire.net/chicago-il/mold-remediation/#service",
      "name": "Mold Removal & Mold Remediation in Chicago, IL",
      "serviceType": ["Mold Remediation","Mold Removal","Mold Abatement"],
      "description": "Mold remediation in Chicago, IL following the IICRC S520 Standard for Professional Mold Remediation. Black mold removal, negative-air containment, HEPA filtration, antimicrobial treatment and moisture source repair for Chicago bungalows, two-flats, greystones, high-rise condos and commercial properties throughout Cook County and Chicagoland. IICRC Firm Certified. Licensed Chicago General Contractor #TGC141820.",
      "url": "https://watermoldfire.net/chicago-il/mold-remediation/",
      "provider": {"@id": "https://watermoldfire.net/chicago-il/#localbusiness"},
      "areaServed": [
        {"@type": "City", "name": "Chicago"},{"@type": "City", "name": "Evanston"},
        {"@type": "City", "name": "Oak Park"},{"@type": "City", "name": "Skokie"},
        {"@type": "City", "name": "Wilmette"},{"@type": "City", "name": "Glenview"},
        {"@type": "City", "name": "Northbrook"},{"@type": "City", "name": "Naperville"},
        {"@type": "City", "name": "Berwyn"},{"@type": "City", "name": "Schaumburg"}
      ],
      "hoursAvailable": {
        "@type": "OpeningHoursSpecification",
        "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"],
        "opens": "00:00","closes": "23:59"
      },
      "hasCredential": [
        {"@type": "EducationalOccupationalCredential","name": "IICRC Firm Certification","credentialCategory": "certification","recognizedBy": {"@type": "Organization","name": "Institute of Inspection, Cleaning and Restoration Certification"}},
        {"@type": "EducationalOccupationalCredential","name": "Chicago General Contractor License","credentialCategory": "license","identifier": "TGC141820","recognizedBy": {"@type": "GovernmentOrganization","name": "City of Chicago Department of Buildings"}}
      ],
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Mold Remediation Services",
        "itemListElement": [
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Black Mold Removal"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Basement Mold Remediation"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Post-Frozen-Pipe-Burst Mold Remediation"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Post-Sewer-Backup Mold Remediation"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Attic Mold Remediation (Ice Dam Origin)"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Crawlspace Mold Remediation"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "HVAC & Air Handler Mold Remediation"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Two-Flat & Condo Cross-Unit Mold Remediation"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Negative-Air Containment & HEPA Filtration"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Antimicrobial Treatment & Encapsulation"}}
        ]
      }
    },
    {
      "@type": "LocalBusiness",
      "@id": "https://watermoldfire.net/chicago-il/#localbusiness",
      "name": "Water Mold Fire Restoration of Chicago",
      "url": "https://watermoldfire.net/chicago-il/",
      "telephone": "+1-312-574-3814",
      "email": "chicago@watermoldfire.net",
      "address": {
        "@type": "PostalAddress","streetAddress": "3521 North Wilton Avenue",
        "addressLocality": "Chicago","addressRegion": "IL",
        "postalCode": "60657","addressCountry": "US"
      },
      "geo": {"@type": "GeoCoordinates","latitude": 41.9479,"longitude": -87.6553},
      "aggregateRating": {"@type": "AggregateRating","ratingValue": "5.0","reviewCount": "118"}
    },
    {
      "@type": "BreadcrumbList",
      "@id": "https://watermoldfire.net/chicago-il/mold-remediation/#breadcrumb",
      "itemListElement": [
        {"@type": "ListItem","position": 1,"name": "Home","item": "https://watermoldfire.net/"},
        {"@type": "ListItem","position": 2,"name": "Chicago, IL","item": "https://watermoldfire.net/chicago-il/"},
        {"@type": "ListItem","position": 3,"name": "Mold Remediation","item": "https://watermoldfire.net/chicago-il/mold-remediation/"}
      ]
    },
    {
      "@type": "WebPage",
      "@id": "https://watermoldfire.net/chicago-il/mold-remediation/#webpage",
      "url": "https://watermoldfire.net/chicago-il/mold-remediation/",
      "name": "Mold Removal & Mold Remediation in Chicago, IL",
      "isPartOf": {"@id": "https://watermoldfire.net/#website"},
      "about": {"@id": "https://watermoldfire.net/chicago-il/mold-remediation/#service"},
      "breadcrumb": {"@id": "https://watermoldfire.net/chicago-il/mold-remediation/#breadcrumb"},
      "inLanguage": "en-US"
    },
    {
      "@type": "FAQPage",
      "@id": "https://watermoldfire.net/chicago-il/mold-remediation/#faq",
      "mainEntity": [
        {"@type": "Question","name": "Does Illinois license mold remediation contractors?","acceptedAnswer": {"@type": "Answer","text": "No. Illinois does not require state licensure for mold remediation or mold assessment, unlike Florida (which licenses both under Chapter 468) and a handful of other states. The Illinois Department of Public Health publishes guidance on mold, but there is no individual or company license required to perform the work. In the absence of state licensing, the meaningful credentials for Chicago property owners to evaluate are: industry certification (IICRC Firm certification, which is what we hold), adherence to the published consensus standard (IICRC S520 Standard for Professional Mold Remediation), and proper municipal contractor licensing for any reconstruction work (in our case, Chicago General Contractor License #TGC141820)."}},
        {"@type": "Question","name": "Why does mold grow in Chicago homes and basements?","acceptedAnswer": {"@type": "Answer","text": "Chicago\'s mold conditions are different from Sun Belt markets but no less common. The primary drivers are basement humidity (Chicago\'s high water table and clay soils mean most basements stay damp without continuous dehumidification), frozen pipe bursts in winter that soak drywall and framing for days before owners return from holiday travel, sewer backups during heavy rain events, ice dam meltwater entering attic and ceiling cavities, and chronic supply-line failures in century-old galvanized plumbing in vintage two-flats and bungalows. Once wet materials sit at room temperature for 48 hours, mold colonization begins regardless of the city\'s relative humidity."}},
        {"@type": "Question","name": "Do I need a mold assessment before remediation in Illinois?","acceptedAnswer": {"@type": "Answer","text": "Not legally — Illinois doesn\'t license either assessment or remediation. But the EPA, IICRC and ASTM all recommend independent assessment before significant remediation work, and many insurance carriers require it on jobs above a certain size. The EPA\'s published guidance recommends professional remediation for any mold contamination affecting more than 10 square feet. We perform our own mold inspection and testing service when appropriate, and we recommend independent third-party post-remediation verification on insurance-driven and significant losses to remove any conflict of interest from the clearance decision."}},
        {"@type": "Question","name": "What standard do you follow for mold remediation in Chicago?","acceptedAnswer": {"@type": "Answer","text": "The IICRC S520 Standard for Professional Mold Remediation — the published industry consensus standard, developed under ANSI processes and recognized by insurance carriers, indoor air quality professionals and the courts. S520 specifies containment design, negative-air pressure and HEPA filtration requirements, PPE, porous-material removal protocols, antimicrobial use, and the documentation expected for post-remediation clearance. We are IICRC Firm Certified, meaning the firm itself operates under IICRC standards across water damage (S500), mold remediation (S520) and fire and smoke damage (S700)."}},
        {"@type": "Question","name": "What does mold remediation cost in Chicago?","acceptedAnswer": {"@type": "Answer","text": "Pricing depends on affected square footage, materials involved, containment scope, and whether moisture source repair is part of the job. Small contained basement jobs run a few hundred dollars; large losses involving HVAC contamination, multi-unit cross-contamination in a Chicago two-flat or three-flat, or whole-property remediation following a major sewer backup can run into the thousands. We provide written estimates after on-site evaluation and work directly with your insurance carrier where coverage applies."}},
        {"@type": "Question","name": "How long does mold remediation take?","acceptedAnswer": {"@type": "Answer","text": "Small contained remediation typically 1 to 3 days. Larger jobs — multi-room basement contamination, HVAC cleaning, remediation tied to a Category 3 sewer backup, or cross-unit two-flat work — run 3 to 7 days plus reconstruction time. Reconstruction is handled in-house under our Chicago General Contractor License #TGC141820, properly permitted through the Department of Buildings."}},
        {"@type": "Question","name": "Is black mold (Stachybotrys) more dangerous than other molds?","acceptedAnswer": {"@type": "Answer","text": "Stachybotrys chartarum gets the most attention because of mycotoxin concerns, but the EPA, CDC and IICRC all treat indoor mold growth as a problem regardless of species. The same remediation protocol applies. If anyone in the home has asthma, allergies, immune suppression or respiratory symptoms, consult a physician — we are not medical providers."}}
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
                Mold Removal & Mold Remediation in Chicago, IL
            </h1>   
            <!-- Feature Pills -->
            <div class="feature-pills">
                <div class="feature-pill">
                    <i class="fas fa-certificate"></i>
                    <span>IICRC Firm Certified</span>
                </div>
                <div class="feature-pill">
                    <i class="fas fa-building"></i>
                    <span>Basement & Two-Flat Specialists</span>
                </div>
                <div class="feature-pill">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>Chicago GC #TGC141820</span>
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
                                <h2 id="intro-h">IICRC S520 Mold Removal &amp; Remediation in Chicago</h2>
                                <p>
                                Mold in Chicago is not driven by Sun Belt humidity, but it is
                                no less common. The drivers are different: damp basements with
                                clay-soil water tables, frozen pipe bursts that soak drywall
                                for days while owners are out of town, summer sewer backups
                                pushing Category 3 water through finished basements and garden
                                units, ice dam meltwater seeping into top-floor ceilings,
                                chronic supply line pinholes in century-old galvanized plumbing
                                in Lakeview two-flats and Logan Square greystones, and the
                                sealed-tight new-construction lakefront condos where any
                                moisture event has nowhere to dry out to. Water Mold Fire
                                Restoration of Chicago is <strong>IICRC Firm Certified</strong>
                                and performs mold remediation in accordance with the
                                <strong>IICRC S520 Standard for Professional Mold
                                Remediation</strong> &mdash; the published industry consensus
                                standard recognized by insurance carriers, IAQ professionals
                                and the courts. Reconstruction stays in-house under our
                                <strong>Chicago General Contractor License #TGC141820</strong>.
                                </p>
                            </section>

                            <section class="why-flbm" aria-labelledby="why-h">
                                <h2 id="why-h">Why Chicago Properties Develop Mold</h2>
                                <p>
                                Mold calls across Cook County and Chicagoland trace back to a
                                handful of conditions specific to this market. We see the same
                                patterns repeat in Chicago bungalows, two-flats and three-flats,
                                greystones, lakefront high-rises, postwar ranches and
                                pre-WWII apartment conversions:
                                </p>
                                <ul class="listing">
                                    <li>
                                        <strong>Damp basements &amp; garden units.</strong>
                                        Chicago's high water table and clay soils keep basements at
                                        elevated moisture levels year-round. Field-stone foundations
                                        in vintage bungalows wick groundwater through the parge
                                        coat; poured concrete foundations crack at the cold joint;
                                        block foundations leak at the mortar lines. Finished
                                        basements without continuous dehumidification, basement
                                        bedrooms in garden-unit conversions, and storage rooms in
                                        two-flat and three-flat buildings all accumulate moisture
                                        and produce visible mold within months.
                                    </li>
                                    <li>
                                        <strong>Post-frozen-pipe-burst contamination.</strong>
                                        Polar vortex events in January 2014, January 2019 and
                                        January 2024 each produced citywide waves of frozen pipe
                                        bursts. When the burst happens while owners are out of town,
                                        drywall and framing can sit saturated for days before
                                        discovery. Mold colonizes within 48 hours. The post-burst
                                        mold catch-up work runs for months after every major cold
                                        snap.
                                    </li>
                                    <li>
                                        <strong>Post-sewer-backup contamination.</strong>
                                        Sewer backups deposit Category 3 contaminated water across
                                        basement floors and into drywall, framing, insulation,
                                        carpet and cabinetry. Even with prompt extraction, residual
                                        biofilm and moisture seed aggressive mold colonization. The
                                        July 2023 Lower West Side and July 2024 Northwest Side
                                        flooding events drove a wave of post-backup remediation work
                                        across the affected neighborhoods.
                                    </li>
                                    <li>
                                        <strong>Ice dam attic mold.</strong>
                                        Meltwater backed up behind eave ice dams enters attic
                                        insulation and roof sheathing, often invisibly. Owners
                                        discover the mold months later during a roof project or
                                        listing inspection. Attic mold from ice dam intrusion is a
                                        recurring Chicago category we don't see in Sun Belt markets.
                                    </li>
                                    <li>
                                        <strong>Original-era plumbing failures.</strong>
                                        Chicago's pre-WWII housing stock &mdash; bungalows, two-flats
                                        and three-flats, greystones, workers' cottages &mdash; runs
                                        on galvanized supply pipe (pinholing after 60-80 years) and
                                        cast-iron drain stacks (rusting through at hub joints).
                                        Slow chronic leaks behind tiled walls, under sinks and
                                        inside cabinets seed mold colonies that compound over
                                        months before anyone smells the problem.
                                    </li>
                                    <li>
                                        <strong>Two-flat &amp; condo cross-unit migration.</strong>
                                        Chicago's two-flat, three-flat and 6-flat building stock,
                                        plus the lakefront high-rise condo inventory, all share
                                        plumbing risers, HVAC, common drain stacks and party walls.
                                        A leak in the upstairs unit produces mold in the unit below,
                                        and HOA-versus-owner responsibility disputes routinely
                                        complicate remediation timing. We work multi-unit jobs
                                        regularly.
                                    </li>
                                    <li>
                                        <strong>Sealed-tight new construction.</strong>
                                        Modern energy-code construction in West Loop, Fulton Market
                                        and the newer lakefront condo towers achieves tight envelope
                                        performance &mdash; which also means any moisture event has
                                        nowhere to dry out to without mechanical assistance. Small
                                        leaks become outsize mold problems faster in tight
                                        construction than in vintage drafty stock.
                                    </li>
                                </ul>
                            </section>

                            <section class="credentials" aria-labelledby="cred-h">
                                <h2 id="cred-h">Credentials, Standards &amp; What They Mean in Illinois</h2>
                                <p>
                                Illinois does not license mold assessment or mold remediation
                                contractors at the state level, unlike Florida (Chapter 468),
                                Texas, New York and a handful of other states. The Illinois
                                Department of Public Health publishes consumer guidance on
                                mold, but no individual or company license is required to
                                perform the work. That puts the burden on Chicago property
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
                                        damage restoration (IICRC S500), mold remediation (IICRC
                                        S520) and fire and smoke damage restoration (IICRC S700).
                                        Firm certification means the company itself operates under
                                        IICRC standards, not just individual technicians holding
                                        cards.
                                    </li>
                                    <li>
                                        <strong>IICRC S520 Standard for Professional Mold Remediation.</strong>
                                        The published ANSI-process industry consensus standard for
                                        how mold remediation must be performed: containment design,
                                        negative-air pressure and HEPA filtration requirements,
                                        personal protective equipment, porous-material removal
                                        protocols, antimicrobial use, and documentation expected for
                                        post-remediation clearance. We work to S520 on every job.
                                    </li>
                                    <li>
                                        <strong>Licensed Chicago General Contractor #TGC141820.</strong>
                                        Issued by the City of Chicago Department of Buildings.
                                        Required for any general contracting work within Chicago
                                        city limits &mdash; meaning reconstruction after a mold
                                        remediation (drywall replacement, finish carpentry, flooring,
                                        sometimes electrical and plumbing rough-in) stays in-house
                                        and properly permitted, not subbed out to unlicensed labor.
                                    </li>
                                    <li>
                                        <strong>Independent post-remediation verification.</strong>
                                        The EPA, IICRC and ASTM all recommend independent
                                        third-party post-remediation verification on significant
                                        jobs. Illinois doesn't require it, but we recommend it on
                                        insurance-driven and large-scope work to remove any conflict
                                        of interest from the final clearance decision. We perform
                                        our own <a href="<?php echo site_url("chicago-il/mold-inspection-testing/"); ?>">mold
                                        inspection and testing</a> service for smaller jobs and
                                        coordinate with independent IAQ assessors when independence
                                        is warranted.
                                    </li>
                                </ul>
                            </section>

                            <section class="process" aria-labelledby="process-h">
                                <h2 id="process-h">Our Mold Remediation Process (IICRC S520)</h2>
                                <ol>
                                    <li><strong>On-site assessment.</strong> Visual inspection, moisture mapping, thermal imaging, identification of the moisture source.</li>
                                    <li><strong>Containment setup.</strong> 6-mil polyethylene barriers, sealed HVAC vents, negative air pressure with HEPA scrubbers exhausted outside containment.</li>
                                    <li><strong>Personal protective equipment.</strong> Tyvek suits, gloves, eye protection, N95 or half-face HEPA respirators.</li>
                                    <li><strong>Removal of contaminated porous materials.</strong> Drywall, insulation, carpet, pad, baseboards, cabinetry, bagged inside containment and removed through a decontamination route.</li>
                                    <li><strong>HEPA filtration &amp; surface cleaning</strong> with EPA-registered antimicrobials.</li>
                                    <li><strong>Moisture source repair.</strong> Plumbing, foundation seal, HVAC, sump pump replacement, basement waterproofing &mdash; whatever the source actually is, fixed as part of the same job.</li>
                                    <li><strong>Post-remediation clearance.</strong> Visual verification and, on significant jobs, independent third-party post-remediation verification (PRV).</li>
                                    <li><strong>Reconstruction.</strong> Drywall, flooring, cabinetry, paint and finish carpentry &mdash; in-house under Chicago General Contractor License <strong>#TGC141820</strong>, properly permitted through the Department of Buildings.</li>
                                </ol>
                            </section>

                            <section class="types" aria-labelledby="types-h">
                                <h2 id="types-h">Types of Mold We Remediate in Chicago</h2>
                                <p>
                                Common indoor molds we encounter on Cook County jobs include
                                <em>Stachybotrys chartarum</em> ("black mold"),
                                <em>Aspergillus</em>, <em>Penicillium</em>, <em>Cladosporium</em>
                                and <em>Chaetomium</em>. The EPA, CDC and IICRC treat any
                                indoor mold growth as a problem regardless of species, and the
                                S520 protocol is essentially the same across genera. Species
                                identification is the assessor's job; we work from the
                                assessor's protocol (or, on small unassessed jobs, from our
                                own visual and instrument-based scope).
                                </p>
                            </section>

                            <section class="service-area" aria-labelledby="area-h">
                                <h2 id="area-h">Where We Remediate Mold in Chicago &amp; Chicagoland</h2>
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
                                </p>
                            </section>

                            <section class="faq bg-light mb-4" aria-labelledby="faq-h">
                                <h2 id="faq-h">Chicago Mold Remediation FAQs</h2>

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
                                                Does Illinois license mold remediation contractors?
                                            </button>
                                        </h3>
                                        <div id="collapse_1"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_1"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>No. Illinois does not require state licensure for mold remediation or assessment, unlike Florida. The meaningful credentials are <strong>IICRC Firm certification</strong>, adherence to the <strong>IICRC S520</strong> standard, and proper municipal contractor licensing (in our case, <strong>Chicago General Contractor License #TGC141820</strong>).</p>
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
                                                Why does mold grow in Chicago homes and basements?
                                            </button>
                                        </h3>
                                        <div id="collapse_2"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_2"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>Damp basements with clay-soil water tables, frozen pipe bursts, sewer backups, ice dam meltwater, original galvanized plumbing pinholes, and sealed-tight new construction that can't dry out. Chicago's drivers are different from Sun Belt markets but no less common.</p>
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
                                                Do I need a mold assessment before remediation in Illinois?
                                            </button>
                                        </h3>
                                        <div id="collapse_3"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_3"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>Not legally &mdash; Illinois doesn't license either side. But EPA/IICRC/ASTM recommend independent assessment before significant remediation, and many insurance carriers require it on larger jobs. The EPA recommends professional remediation for any mold affecting more than 10 sq ft.</p>
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
                                                What standard do you follow for mold remediation in Chicago?
                                            </button>
                                        </h3>
                                        <div id="collapse_4"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_4"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>IICRC S520 &mdash; the published ANSI-process consensus standard for mold remediation. We are IICRC Firm Certified, meaning the firm operates under IICRC standards across all three relevant standards (S500 water, S520 mold, S700 fire).</p>
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
                                                What does mold remediation cost in Chicago?
                                            </button>
                                        </h3>
                                        <div id="collapse_5"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_5"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>Small contained basement jobs run a few hundred dollars; large losses involving HVAC contamination, two-flat cross-unit work or whole-property post-sewer-backup remediation can run into the thousands. Written estimates after on-site evaluation.</p>
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
                                                How long does mold remediation take?
                                            </button>
                                        </h3>
                                        <div id="collapse_6"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_6"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>Small contained jobs: 1-3 days. Larger jobs: 3-7 days plus reconstruction. Reconstruction handled in-house under Chicago GC License #TGC141820.</p>
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
                                                Is black mold more dangerous than other molds?
                                            </button>
                                        </h3>
                                        <div id="collapse_7"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_7"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>EPA, CDC and IICRC treat indoor mold growth as a problem regardless of species &mdash; the same remediation protocol applies. For health-driven questions, consult a physician; we are not medical providers.</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </section>

                            <section class="contact" aria-labelledby="contact-h">
                                <h2 id="contact-h">Call Chicago's IICRC-Certified Mold Remediation Team</h2>
                                <address>
                                    <strong>Water Mold Fire Restoration of Chicago</strong><br>
                                    3521 North Wilton Avenue<br>
                                    Chicago, IL 60657<br>
                                    <a href="tel:+13125743814">312-574-3814</a> &middot;
                                    <a href="mailto:chicago@watermoldfire.net">chicago@watermoldfire.net</a><br>
                                    IICRC Firm Certified &middot; Chicago GC License #TGC141820
                                </address>
                                <p>
                                Visible growth, musty basement smell, recent frozen pipe burst,
                                sewer backup or ice dam intrusion?
                                <a class="cta" href="tel:+13125743814">Call 312-574-3814</a>
                                and we'll schedule an on-site evaluation.
                                </p>
                                <p class="back-to-hub">
                                &larr; Back to <a href="<?php echo site_url("chicago-il/"); ?>">all Chicago restoration services</a>
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