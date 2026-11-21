<?php
require_once __DIR__ . '/../includes/init.php';

$pagename = "miami-fl/mold-remediation.php";

$title = "Mold Removal &amp; Mold Remediation in Miami, FL | MRSR2655";

$meta_description = "Florida-licensed mold remediation in Miami, FL (MRSR2655). Black mold removal, containment, HEPA filtration per IICRC S520. Condo & high-rise specialists. 305-999-5144.";

$meta_keywords = "mold remediation miami, mold remediation company miami, mold abatement, mold contractor miami, mold removal miami, black mold removal, mold cleanup miami, toxic mold removal";

$canonical_url = "https://watermoldfire.net/miami-fl/mold-remediation/";

$geo_tags = '
<meta name="geo.region" content="US-FL">
<meta name="geo.placename" content="Miami">
<meta name="geo.position" content="25.7800;-80.1850">
<meta name="ICBM" content="25.7800, -80.1850">
';

$open_graph = '
<meta property="og:type" content="website">
<meta property="og:site_name" content="Water Mold Fire Restoration">
<meta property="og:title" content="Mold Removal &amp; Mold Remediation in Miami, FL | MRSR2655">
<meta property="og:description" content="Florida-licensed mold remediation (MRSR2655) in Miami. Black mold removal, full containment, HEPA filtration. Condo and high-rise specialists across Miami-Dade.">
<meta property="og:url" content="https://watermoldfire.net/miami-fl/mold-remediation/">
<meta property="og:image" content="'.site_url().'images/logo.webp">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="og:locale" content="en_US">
';

$twitter = '
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Mold Removal &amp; Remediation in Miami, FL">
<meta name="twitter:description" content="FL-licensed mold remediator (MRSR2655) serving Miami. Black mold removal, containment, HEPA filtration. 24/7.">
<meta name="twitter:image" content="'.site_url().'images/logo.webp">
';

$schema_ld_json = '
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "@id": "https://watermoldfire.net/miami-fl/mold-remediation/#service",
      "name": "Mold Removal & Mold Remediation in Miami, FL",
      "serviceType": ["Mold Remediation","Mold Removal","Mold Abatement"],
      "description": "Florida-licensed mold remediation (MRSR2655) in Miami, FL. IICRC S520-compliant black mold removal, negative-air containment, HEPA filtration, antimicrobial treatment and moisture source repair for homes, high-rise condos and commercial properties throughout Miami-Dade County.",
      "url": "https://watermoldfire.net/miami-fl/mold-remediation/",
      "provider": {"@id": "https://watermoldfire.net/miami-fl/#localbusiness"},
      "areaServed": [
        {"@type": "City", "name": "Miami"},{"@type": "City", "name": "Miami Beach"},
        {"@type": "City", "name": "Coral Gables"},{"@type": "City", "name": "Aventura"},
        {"@type": "City", "name": "Sunny Isles Beach"},{"@type": "City", "name": "Key Biscayne"},
        {"@type": "City", "name": "Doral"},{"@type": "City", "name": "Hialeah"},
        {"@type": "City", "name": "Pinecrest"},{"@type": "City", "name": "Homestead"}
      ],
      "hoursAvailable": {
        "@type": "OpeningHoursSpecification",
        "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"],
        "opens": "00:00","closes": "23:59"
      },
      "hasCredential": {
        "@type": "EducationalOccupationalCredential",
        "name": "Florida Mold Remediator License",
        "credentialCategory": "license",
        "identifier": "MRSR2655",
        "recognizedBy": {"@type": "GovernmentOrganization","name": "Florida Department of Business & Professional Regulation"}
      },
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Mold Remediation Services",
        "itemListElement": [
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Black Mold Removal"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "High-Rise Condo Mold Remediation"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Attic Mold Remediation"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "HVAC & Air Handler Mold Remediation"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Post-Water-Damage Mold Remediation"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Post-Surfside-Era Condo Mold Remediation"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Negative-Air Containment & HEPA Filtration"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Antimicrobial Treatment & Encapsulation"}}
        ]
      }
    },
    {
      "@type": "LocalBusiness",
      "@id": "https://watermoldfire.net/miami-fl/#localbusiness",
      "name": "Water Mold Fire Restoration of Miami",
      "url": "https://watermoldfire.net/miami-fl/",
      "telephone": "+1-305-999-5144",
      "email": "miami@watermoldfire.net",
      "address": {
        "@type": "PostalAddress","streetAddress": "100 Biscayne Blvd",
        "addressLocality": "Miami","addressRegion": "FL",
        "postalCode": "33132","addressCountry": "US"
      },
      "geo": {"@type": "GeoCoordinates","latitude": 25.7800,"longitude": -80.1850},
      "aggregateRating": {"@type": "AggregateRating","ratingValue": "5.0","reviewCount": "118"}
    },
    {
      "@type": "BreadcrumbList",
      "@id": "https://watermoldfire.net/miami-fl/mold-remediation/#breadcrumb",
      "itemListElement": [
        {"@type": "ListItem","position": 1,"name": "Home","item": "https://watermoldfire.net/"},
        {"@type": "ListItem","position": 2,"name": "Miami, FL","item": "https://watermoldfire.net/miami-fl/"},
        {"@type": "ListItem","position": 3,"name": "Mold Remediation","item": "https://watermoldfire.net/miami-fl/mold-remediation/"}
      ]
    },
    {
      "@type": "WebPage",
      "@id": "https://watermoldfire.net/miami-fl/mold-remediation/#webpage",
      "url": "https://watermoldfire.net/miami-fl/mold-remediation/",
      "name": "Mold Removal & Mold Remediation in Miami, FL",
      "isPartOf": {"@id": "https://watermoldfire.net/#website"},
      "about": {"@id": "https://watermoldfire.net/miami-fl/mold-remediation/#service"},
      "breadcrumb": {"@id": "https://watermoldfire.net/miami-fl/mold-remediation/#breadcrumb"},
      "inLanguage": "en-US"
    },
    {
      "@type": "FAQPage",
      "@id": "https://watermoldfire.net/miami-fl/mold-remediation/#faq",
      "mainEntity": [
        {"@type": "Question","name": "Are you a licensed mold remediator in Florida?","acceptedAnswer": {"@type": "Answer","text": "Yes. Water Mold Fire Restoration operates under Florida Mold Remediator License MRSR2655, issued by the Florida Department of Business & Professional Regulation under Chapter 468, Part XVI of the Florida Statutes. The license is a state credential — it covers our Miami office at 100 Biscayne Blvd as well as our Fort Lauderdale operations."}},
        {"@type": "Question","name": "Why is mold so common in Miami homes?","acceptedAnswer": {"@type": "Answer","text": "Miami\'s outdoor relative humidity averages 75-80% year round, ambient temperatures support mold growth every month of the calendar, and 60+ inches of annual rainfall combined with hurricane season water intrusion gives mold every condition it needs. Miami\'s building stock magnifies this: high-rise condos with shared HVAC stacks and original 1960s-80s plumbing in Brickell, downtown and along Collins Avenue create cavity moisture that colonizes fast. South Beach Art Deco buildings with lath-and-plaster walls hold moisture differently than modern construction. Coral Gables Mediterranean Revival homes with original tile roofs and unconditioned attic spaces accumulate humidity in ways CBS construction does not."}},
        {"@type": "Question","name": "Do I need a separate mold assessment before remediation in Florida?","acceptedAnswer": {"@type": "Answer","text": "For most insurance-paid jobs in Florida, yes. Florida Statute 468.8419 prohibits the same company from performing both assessment and remediation on the same project, and requires that the assessor and remediator have no shared financial relationship. We coordinate with independent FL-licensed mold assessors (MRSA license-holders) for the pre-remediation protocol and post-remediation verification."}},
        {"@type": "Question","name": "Does Surfside affect mold remediation in Miami-Dade condos?","acceptedAnswer": {"@type": "Answer","text": "Yes. Since the June 2021 Champlain Towers South collapse and the subsequent Florida condo safety reforms, water damage and mold growth in Miami-Dade condominium buildings over 25 years old can trigger structural review, milestone inspection requirements and engineering scrutiny that did not exist before 2021. Mold remediation in a Surfside-era condo is now often part of a larger condo safety scope — we coordinate with structural engineers and assessment professionals where required."}},
        {"@type": "Question","name": "What does mold remediation cost in Miami?","acceptedAnswer": {"@type": "Answer","text": "Pricing depends on affected square footage, materials involved, containment scope, and whether moisture source repair is part of the job. Small contained jobs run a few hundred dollars; large losses involving HVAC contamination, condo cross-unit migration or whole-property remediation following a major water loss can run into the thousands. We provide written estimates after on-site evaluation and work directly with your insurance carrier where coverage applies."}},
        {"@type": "Question","name": "How long does mold remediation take?","acceptedAnswer": {"@type": "Answer","text": "Small contained remediation typically 1 to 3 days. Larger jobs — multi-room contamination, HVAC cleaning, remediation tied to a Category 3 water loss — run 3 to 7 days plus reconstruction time. Final clearance is established by independent post-remediation verification (PRV) by an MRSA-licensed assessor."}},
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
                Mold Removal & Mold Remediation in Miami, FL
            </h1>   
            <!-- Feature Pills -->
            <div class="feature-pills">
                <div class="feature-pill">
                    <i class="fas fa-certificate"></i>
                    <span>FL Licensed: MRSR2655</span>
                </div>
                <div class="feature-pill">
                    <i class="fas fa-headset"></i>
                    <span>Condo & High-Rise Specialists</span>
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
                                <h2 id="intro-h">Florida-Licensed Mold Removal &amp; Remediation in Miami</h2>
                                <p>
                                Mold in Miami is not a maintenance issue &mdash; it's a climate
                                condition. With outdoor relative humidity averaging 75-80% year
                                round, more than 60 inches of annual rainfall, hurricane-season
                                water intrusion and a building stock that runs from 1920s
                                Coral Gables Mediterranean Revival homes to 1960s Brickell
                                high-rises to 2020s Edgewater glass towers, Miami gives mold
                                every condition it needs to colonize. Water Mold Fire
                                Restoration of Miami is a Florida-licensed mold remediator
                                under <strong>FL Mold Remediator License #MRSR2655</strong>,
                                handling everything from small contained bathroom jobs to
                                whole-property remediations following major water losses and
                                Surfside-era condo inspections. Our crews follow the IICRC S520
                                Standard for Professional Mold Remediation and coordinate
                                directly with independent
                                <a href="<?php echo site_url("miami-fl/mold-inspection-testing/"); ?>">FL-licensed mold
                                assessors</a> as Chapter 468 of the Florida Statutes requires.
                                </p>
                            </section>

                            <section class="why-flbm" aria-labelledby="why-h">
                                <h2 id="why-h">Why Miami Properties Develop Mold</h2>
                                <p>
                                Mold calls across Miami-Dade trace back to a handful of
                                city-specific conditions. We see the same patterns repeat in
                                Brickell high-rises, Coral Gables ranches, South Beach Art Deco
                                buildings, Coconut Grove bungalows, Hialeah single-family stock
                                and Doral office park properties:
                                </p>
                                <ul class="listing">
                                    <li>
                                        <strong>High-rise condo HVAC cross-contamination.</strong>
                                        Miami's signature high-rise condo stock &mdash; Brickell,
                                        downtown, Sunny Isles, Aventura, Bal Harbour &mdash; has
                                        shared HVAC stacks, common drain risers and pressurized
                                        air-distribution systems that move spores between units. A
                                        single unit with hidden moisture can seed colonization across
                                        the floor above and below.
                                    </li>
                                    <li>
                                        <strong>Pre-1990 coastal copper supply leaks.</strong>
                                        Single-family Miami stock in Coral Gables, Coconut Grove,
                                        Pinecrest, Palmetto Bay and the older corridors of Miami
                                        Shores has copper supply lines aging out from acidic soils
                                        and saltwater intrusion. Pinhole leaks wick into baseboards
                                        and cabinets, and mold colonizes the cavity before any
                                        visible staining appears.
                                    </li>
                                    <li>
                                        <strong>Hurricane-driven water intrusion.</strong>
                                        Wind-driven rain from Hurricane Andrew (1992), Hurricane
                                        Wilma (2005), Hurricane Irma (2017) and the named storms
                                        since pushes water through roof-to-wall transitions, around
                                        window frames and under entry thresholds. Even with HVHZ
                                        envelopes, pre-2002 buildings see envelope failures, and
                                        any moisture left undried for 48-72 hours becomes a mold
                                        problem.
                                    </li>
                                    <li>
                                        <strong>King tide flooding in coastal ground floors.</strong>
                                        Miami Beach pump systems mitigate most street flooding, but
                                        ground-floor units in Mid Beach, North Beach, Edgewater and
                                        the Venetian Islands still see brackish water intrusion
                                        during fall king tides. Saltwater intrusion is Category 3
                                        and a mold-spore vector all at once.
                                    </li>
                                    <li>
                                        <strong>Surfside-era post-water inspection triggers.</strong>
                                        Since the June 2021 Champlain Towers South collapse, water
                                        damage in Miami-Dade condos over 25 years old now routinely
                                        triggers structural review and mold assessment requirements
                                        that did not exist before 2021. Mold work in older Miami
                                        condos is now embedded in a larger inspection and compliance
                                        scope.
                                    </li>
                                    <li>
                                        <strong>Art Deco &amp; Mediterranean Revival construction.</strong>
                                        South Beach Art Deco buildings (1930s) and Coral Gables
                                        Mediterranean Revival homes (1920s-30s) have construction
                                        details &mdash; lath-and-plaster walls, original tile roofs
                                        with unconditioned attic spaces, stucco-on-frame envelopes
                                        &mdash; that hold and conceal moisture differently than
                                        post-Andrew CBS construction. Mold patterns in these
                                        properties don't follow modern playbooks.
                                    </li>
                                </ul>
                            </section>

                            <section class="licensing" aria-labelledby="lic-h">
                                <h2 id="lic-h">Florida Mold Licensing &amp; What It Means for You</h2>
                                <p>
                                Florida regulates mold-related services under Chapter 468,
                                Part XVI of the Florida Statutes. Anyone performing mold
                                remediation for compensation must hold a state-issued
                                <strong>Mold Remediator (MRSR)</strong> license, and anyone
                                performing mold assessment must hold a separate
                                <strong>Mold Assessor (MRSA)</strong> license. Florida Statute
                                &sect; 468.8419 also prohibits the same individual or company
                                from performing both on the same project, and requires that
                                the assessor and remediator have no shared financial interest
                                in the outcome.
                                </p>
                                <p>
                                We operate under <strong>FL Mold Remediator License
                                #MRSR2655</strong> &mdash; a state credential that covers our
                                Miami office as well as our Fort Lauderdale operations &mdash;
                                and we coordinate with independent FL-licensed mold assessors
                                for the pre-remediation protocol and post-remediation
                                verification. If your insurance carrier, condo board or
                                property manager asks for our license, give them the MRSR2655
                                number.
                                </p>
                            </section>

                            <section class="process" aria-labelledby="process-h">
                                <h2 id="process-h">Our Mold Remediation Process (IICRC S520)</h2>
                                <ol>
                                    <li><strong>Review of the written assessment protocol</strong> prepared by an independent FL-licensed mold assessor.</li>
                                    <li><strong>Containment setup</strong> — 6-mil polyethylene barriers, sealed HVAC vents, negative air pressure with HEPA scrubbers exhausted outside containment.</li>
                                    <li><strong>Personal protective equipment</strong> — Tyvek suits, gloves, eye protection, N95 or half-face HEPA respirators.</li>
                                    <li><strong>Removal of contaminated porous materials</strong> — drywall, insulation, carpet, pad, baseboards, cabinetry, bagged inside containment and removed through a decontamination route.</li>
                                    <li><strong>HEPA filtration &amp; surface cleaning</strong> with EPA-registered antimicrobials.</li>
                                    <li><strong>Moisture source repair</strong> — plumbing, roofing, HVAC, coordinated as part of the same job.</li>
                                    <li><strong>Post-remediation verification</strong> by an independent FL-licensed assessor before reconstruction begins.</li>
                                </ol>
                            </section>

                            <section class="types" aria-labelledby="types-h">
                                <h2 id="types-h">Types of Mold We Remediate in Miami</h2>
                                <p>
                                Common indoor molds we encounter on Miami-Dade jobs include
                                <em>Stachybotrys chartarum</em> ("black mold"),
                                <em>Aspergillus</em>, <em>Penicillium</em>, <em>Cladosporium</em>
                                and <em>Chaetomium</em>. The EPA, CDC and IICRC treat any
                                indoor mold growth as a problem regardless of species, and the
                                S520 protocol is essentially the same across genera. Species
                                identification is the assessor's job; we work from the
                                assessor's protocol.
                                </p>
                            </section>

                            <section class="service-area" aria-labelledby="area-h">
                                <h2 id="area-h">Where We Remediate Mold in Miami</h2>
                                <p>
                                Brickell, Downtown Miami, Edgewater, Wynwood, Little Havana,
                                Coconut Grove, Coral Gables, South Beach, Mid Beach, North
                                Beach, Bal Harbour, Sunny Isles Beach, Aventura, Key Biscayne,
                                North Miami, Doral, Hialeah, Pinecrest, Palmetto Bay, Kendall,
                                Homestead.
                                </p>
                            </section>

                            <section class="faq bg-light mb-4" aria-labelledby="faq-h">
                                <h2 id="faq-h">Miami Mold Remediation FAQs</h2>

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
                                                Are you a licensed mold remediator in Florida?
                                            </button>
                                        </h3>
                                        <div id="collapse_1"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_1"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>Yes. We operate under <strong>Florida Mold Remediator License MRSR2655</strong>, issued under Chapter 468, Part XVI of the Florida Statutes. The license is a state credential covering our Miami office as well as our Fort Lauderdale operations.</p>
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
                                                Why is mold so common in Miami homes?
                                            </button>
                                        </h3>
                                        <div id="collapse_2"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_2"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>75-80% year-round humidity, year-round growth temperatures, 60+ inches annual rainfall, hurricane water intrusion, and a building stock that runs from 1920s lath-and-plaster Mediterranean Revival to 2020s glass towers — Miami magnifies the climate factors that drive mold.</p>
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
                                                Do I need a separate mold assessment before remediation in Florida?
                                            </button>
                                        </h3>
                                        <div id="collapse_3"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_3"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>For most insurance-paid jobs, yes. Florida Statute 468.8419 prohibits same-company assessment + remediation on the same project. We coordinate with independent FL-licensed <a href="<?php echo site_url("miami-fl/mold-inspection-testing/"); ?>">mold assessors</a> for the protocol and verification.</p>
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
                                                Does Surfside affect mold remediation in Miami-Dade condos?
                                            </button>
                                        </h3>
                                        <div id="collapse_4"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_4"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>Yes. Since the June 2021 Champlain Towers South collapse, water damage and mold growth in Miami-Dade condos over 25 years old can trigger structural review and engineering scrutiny that did not exist before 2021. We coordinate with structural engineers where required.</p>
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
                                                What does mold remediation cost in Miami?
                                            </button>
                                        </h3>
                                        <div id="collapse_5"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_5"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>Small contained jobs run a few hundred dollars; large losses involving HVAC contamination, cross-unit condo migration or whole-property remediation can run into the thousands. Written estimates after on-site evaluation.</p>
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
                                                <p>Small contained jobs: 1-3 days. Larger jobs: 3-7 days plus reconstruction. Final clearance via independent post-remediation verification.</p>
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
                                                <p>EPA, CDC and IICRC treat indoor mold growth as a problem regardless of species — the same remediation protocol applies. For health-driven questions, consult a physician; we are not medical providers.</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </section>

                            <section class="contact" aria-labelledby="contact-h">
                                <h2 id="contact-h">Call Miami's Licensed Mold Remediator</h2>
                                <address>
                                    <strong>Water Mold Fire Restoration of Miami</strong><br>
                                    100 Biscayne Blvd<br>
                                    Miami, FL 33132<br>
                                    <a href="tel:+13059995144">305-999-5144</a> &middot;
                                    <a href="mailto:miami@watermoldfire.net">miami@watermoldfire.net</a><br>
                                    FL Mold Remediator License MRSR2655
                                </address>
                                <p>
                                Visible growth, musty smell, recent water loss or condo
                                milestone inspection finding?
                                <a class="cta" href="tel:+13059995144">Call 305-999-5144</a>
                                and we'll schedule an on-site evaluation.
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