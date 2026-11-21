<?php
require_once __DIR__ . '/../includes/init.php';

$pagename = "miami-fl/ac-cleaning.php";

$title = "Air Duct Cleaning in Miami, FL | HVAC &amp; Dryer Vent";

$meta_description = "NADCA-aligned air duct, HVAC & dryer vent cleaning in Miami, FL. Coil cleaning, sanitization, post-damage HVAC restoration. Healthier indoor air. 305-999-5144.";

$meta_keywords = "air duct miami, hvac cleaning miami, dryer vent, ac cleaning, air duct cleaning";

$canonical_url = "https://watermoldfire.net/miami-fl/ac-cleaning/";

$geo_tags = '
<meta name="geo.region" content="US-FL">
<meta name="geo.placename" content="Miami">
<meta name="geo.position" content="25.7800;-80.1850">
<meta name="ICBM" content="25.7800, -80.1850">
';

$open_graph = '
<meta property="og:type" content="website">
<meta property="og:site_name" content="Water Mold Fire Restoration">
<meta property="og:title" content="Air Duct Cleaning in Miami, FL | HVAC &amp; Dryer Vent">
<meta property="og:description" content="NADCA-aligned air duct, HVAC and dryer vent cleaning in Miami. Coil cleaning, sanitization, post-damage HVAC restoration for healthier indoor air.">
<meta property="og:url" content="https://watermoldfire.net/miami-fl/ac-cleaning/">
<meta property="og:image" content="'.site_url().'images/logo.webp">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="og:locale" content="en_US">
';

$twitter = '
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Air Duct Cleaning in Miami, FL">
<meta name="twitter:description" content="NADCA-aligned air duct, HVAC coil & dryer vent cleaning in Miami. Healthier indoor air for homes, condos & businesses.">
<meta name="twitter:image" content="'.site_url().'images/logo.webp">
';

$schema_ld_json = '
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "@id": "https://watermoldfire.net/miami-fl/ac-cleaning/#service",
      "name": "Air Duct, HVAC & Dryer Vent Cleaning in Miami, FL",
      "serviceType": ["Air Duct Cleaning","HVAC Cleaning","Dryer Vent Cleaning","HVAC Coil Cleaning","Air Handler Cleaning","Duct Sanitization","Indoor Air Quality Service","Post-Damage HVAC Cleaning","High-Rise Condo Duct Cleaning"],
      "description": "NADCA ACR-aligned air duct cleaning, HVAC cleaning, dryer vent cleaning and HVAC coil cleaning in Miami, FL. Source-removal cleaning with HEPA negative-air containment, blower wheel and air-handler cleaning, evaporator and condenser coil cleaning, drain pan cleaning, antimicrobial sanitization, high-rise condo cross-unit HVAC service and post-water-damage and post-fire HVAC restoration across Miami-Dade County.",
      "url": "https://watermoldfire.net/miami-fl/ac-cleaning/",
      "provider": {"@id": "https://watermoldfire.net/miami-fl/#localbusiness"},
      "areaServed": [
        {"@type": "City", "name": "Miami"},{"@type": "City", "name": "Miami Beach"},
        {"@type": "City", "name": "Coral Gables"},{"@type": "City", "name": "Aventura"},
        {"@type": "City", "name": "Sunny Isles Beach"},{"@type": "City", "name": "Key Biscayne"},
        {"@type": "City", "name": "Doral"},{"@type": "City", "name": "Hialeah"},
        {"@type": "City", "name": "Pinecrest"},{"@type": "City", "name": "Homestead"}
      ],
      "hoursAvailable": {"@type": "OpeningHoursSpecification","dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"],"opens": "00:00","closes": "23:59"},
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Air Duct & HVAC Cleaning Services",
        "itemListElement": [
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Whole-Home Air Duct Cleaning"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "High-Rise Condo Air Handler & Duct Cleaning"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "HVAC Coil Cleaning (Evaporator & Condenser)"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Air Handler & Blower Wheel Cleaning"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Condensate Drain Pan & Line Cleaning"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Dryer Vent Cleaning"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Antimicrobial Duct Sanitization"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "UV Light Installation"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Post-Water-Damage HVAC Cleaning"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Post-Fire & Smoke HVAC Decontamination"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Post-Construction Duct Cleaning"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Commercial Air Duct & HVAC Cleaning"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Indoor Air Quality Assessment"}}
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
      "@type": "BreadcrumbList","@id": "https://watermoldfire.net/miami-fl/ac-cleaning/#breadcrumb",
      "itemListElement": [
        {"@type": "ListItem","position": 1,"name": "Home","item": "https://watermoldfire.net/"},
        {"@type": "ListItem","position": 2,"name": "Miami, FL","item": "https://watermoldfire.net/miami-fl/"},
        {"@type": "ListItem","position": 3,"name": "Air Duct & HVAC Cleaning","item": "https://watermoldfire.net/miami-fl/ac-cleaning/"}
      ]
    },
    {
      "@type": "WebPage","@id": "https://watermoldfire.net/miami-fl/ac-cleaning/#webpage",
      "url": "https://watermoldfire.net/miami-fl/ac-cleaning/",
      "name": "Air Duct, HVAC & Dryer Vent Cleaning in Miami, FL",
      "isPartOf": {"@id": "https://watermoldfire.net/#website"},
      "about": {"@id": "https://watermoldfire.net/miami-fl/ac-cleaning/#service"},
      "breadcrumb": {"@id": "https://watermoldfire.net/miami-fl/ac-cleaning/#breadcrumb"},
      "inLanguage": "en-US"
    },
    {
      "@type": "FAQPage","@id": "https://watermoldfire.net/miami-fl/ac-cleaning/#faq",
      "mainEntity": [
        {"@type": "Question","name": "How often should I clean my air ducts in Miami?","acceptedAnswer": {"@type": "Answer","text": "NADCA recommends every 3 to 5 years for typical residential systems, but Miami conditions push that interval shorter. Year-round A/C operation, 75-80% ambient humidity and frequent post-water-damage and post-construction events accelerate duct contamination. A reasonable Miami baseline is every 2 to 4 years for occupied homes, and immediately after any water loss, fire event, renovation or evidence of biological growth in the system."}},
        {"@type": "Question","name": "Why is air duct cleaning more important in Miami?","acceptedAnswer": {"@type": "Answer","text": "Miami A/C systems run roughly 8,000 hours per year — four times the runtime of an HVAC system in the Northeast or Midwest. Every hour pulls dust, pollen, mold spores, skin cells, pet dander and coastal salt-air particulates through the return ducts, across the evaporator coil and back into the home. Combined with Miami\'s year-round 75-80% humidity, that creates ideal conditions for biological growth inside ducts, on coils and in drain pans."}},
        {"@type": "Question","name": "Do you clean HVAC systems in Miami high-rise condos?","acceptedAnswer": {"@type": "Answer","text": "Yes — Miami\'s high-rise condo stock is a significant portion of our work. High-rise air handlers, coils and unit-level duct runs need cleaning just as residential homes do, and they often present additional challenges: shared HVAC stacks, freight-elevator access, HOA approval for in-unit work, and (in some cases) building-wide systems that require coordination with engineering staff. We\'ve cleaned air handlers in buildings across Brickell, downtown, Sunny Isles, Aventura, Bal Harbour and Mid Beach."}},
        {"@type": "Question","name": "Do you clean HVAC coils and the air handler, not just the ducts?","acceptedAnswer": {"@type": "Answer","text": "Yes. Duct-only cleaning is incomplete in Miami conditions, because the evaporator coil and blower wheel are usually where the biological growth is heaviest. Our standard scope includes supply and return ducts, registers and grilles, air handler cabinet interior, blower wheel and motor housing, evaporator coil, and condensate drain pan and line."}},
        {"@type": "Question","name": "How long does a typical air duct cleaning take?","acceptedAnswer": {"@type": "Answer","text": "Standard residential whole-home duct, air handler and coil cleaning runs 3 to 5 hours for a single-system home, longer for multi-system homes, large condos or commercial properties. Source-removal techniques with HEPA-filtered negative-air containment keep the work area clean during cleaning."}},
        {"@type": "Question","name": "Should I have my HVAC cleaned after a water leak or fire?","acceptedAnswer": {"@type": "Answer","text": "Almost always, yes. After a water loss the HVAC system has likely pulled humid air across contaminated materials and redistributed spores. After a fire, smoke and soot embed in every duct, register, coil and blower wheel. Running A/C after a fire in a Miami high-rise can spread contamination into adjacent units through shared stacks. We coordinate post-loss HVAC cleaning alongside our water and fire damage restoration crews."}},
        {"@type": "Question","name": "Do dryer vents really need cleaning?","acceptedAnswer": {"@type": "Answer","text": "Yes — and in Miami they need it more often than national averages suggest. Florida households run dryers year-round for beach towels, swimwear, exercise wear and humid-climate clothing turnover, depositing lint faster. The U.S. Fire Administration attributes thousands of structure fires annually to dryer vent lint. We recommend annual dryer vent cleaning for most Miami homes; every 6 months for high-rise condos with long, complex vent runs."}}
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
                Air Duct, HVAC & Dryer Vent Cleaning in Miami, FL
            </h1>   
            <!-- Feature Pills -->
            <div class="feature-pills">
                <div class="feature-pill">
                    <i class="fas fa-comments"></i>
                    <span>NADCA-Aligned Cleaning</span>
                </div>
                <div class="feature-pill">
                    <i class="fas fa-certificate"></i>
                    <span>Ducts, Vents & HVAC Coils</span>
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
                                <h2 id="intro-h">Air Duct, HVAC &amp; Dryer Vent Cleaning for Miami Homes &amp; Businesses</h2>
                                <p>
                                A Miami A/C system runs roughly 8,000 hours per year &mdash;
                                four times the runtime of an HVAC system in the Northeast or
                                Midwest. Every hour of that runtime pulls dust, pollen, mold
                                spores, skin cells, pet dander and coastal salt-air
                                particulates through the return ducts, across the evaporator
                                coil and back into the rooms you live in. Add Miami's
                                year-round 75-80% relative humidity, and you have ideal
                                conditions for biological growth inside ducts, on coils and in
                                drain pans. Water Mold Fire Restoration of Miami provides
                                comprehensive, NADCA ACR-aligned air duct, HVAC and dryer vent
                                cleaning for homes, condos and commercial properties across
                                Miami-Dade County &mdash; using source-removal cleaning with
                                HEPA-filtered negative-air containment, not the
                                surface-blow-and-vacuum approach some lower-cost competitors
                                rely on.
                                </p>
                            </section>

                            <section class="why-flbm" aria-labelledby="why-h">
                                <h2 id="why-h">Why Air Duct &amp; HVAC Cleaning Matters in Miami</h2>
                                <ul class="listing">
                                    <li>
                                        <strong>Year-round A/C operation.</strong>
                                        Miami systems run almost every day of the year. Filters
                                        that last 90 days in Ohio are spent in 30-45 days here.
                                    </li>
                                    <li>
                                        <strong>Coastal humidity &amp; biological growth.</strong>
                                        Evaporator coils are cold and wet by design &mdash; in
                                        Miami's climate, that cold-wet surface is a perfect
                                        substrate for mold and bacterial colonization. We see
                                        condo air handlers with heavy biofilm growth on the coil
                                        face and drain pan.
                                    </li>
                                    <li>
                                        <strong>High-rise condo air handler patterns.</strong>
                                        Miami's vertical condo stock has a different HVAC profile
                                        than single-family homes: closet-mounted air handlers,
                                        shorter duct runs, common-area equipment, and (in some
                                        buildings) shared HVAC stacks. Brickell, downtown, Sunny
                                        Isles, Aventura, Bal Harbour, Mid Beach all have stock
                                        that requires this specialized approach.
                                    </li>
                                    <li>
                                        <strong>Salt-air coil corrosion.</strong>
                                        On coastal properties &mdash; Miami Beach, Key Biscayne,
                                        Bal Harbour, Sunny Isles &mdash; outdoor condenser coils
                                        accumulate salt deposits that accelerate fin corrosion.
                                        Annual coil washing extends condenser life on waterfront
                                        properties.
                                    </li>
                                    <li>
                                        <strong>Post-water-damage HVAC contamination.</strong>
                                        After major water events, thousands of Miami HVAC systems
                                        pull humid air across contaminated materials and
                                        redistribute spores. If water reached the air handler or
                                        ductwork directly, the system itself becomes a contaminant
                                        source.
                                    </li>
                                    <li>
                                        <strong>Post-fire smoke and soot.</strong>
                                        After a Miami high-rise fire, smoke residue migrates
                                        through shared HVAC stacks into adjacent units. Cleaning
                                        the system before normal operation resumes is non-negotiable.
                                    </li>
                                    <li>
                                        <strong>Dryer vent lint accumulation.</strong>
                                        Miami households run dryers year-round for beach towels,
                                        swimwear and humid-climate clothing turnover &mdash;
                                        higher volume than colder-climate averages. Condo
                                        high-rises with long, complex vent runs particularly prone
                                        to buildup.
                                    </li>
                                    <li>
                                        <strong>Hurricane debris in outdoor condensers.</strong>
                                        Outdoor condenser units take a beating during tropical
                                        systems. Post-storm coil cleaning is part of routine
                                        restoration after named events.
                                    </li>
                                </ul>
                            </section>

                            <section class="standards" aria-labelledby="std-h">
                                <h2 id="std-h">Our Cleaning Standards &mdash; NADCA ACR &amp; IICRC S210</h2>
                                <p>
                                Air duct cleaning in Florida is not licensed at the state
                                level the way mold remediation or plumbing contracting is.
                                What separates a thorough source-removal cleaning from a
                                quick-pass vacuum is methodology and standards alignment. We
                                follow:
                                </p>
                                <ul class="listing">
                                    <li>
                                        <strong>NADCA ACR (Assessment, Cleaning and Restoration of
                                        HVAC Systems)</strong> &mdash; the National Air Duct Cleaners
                                        Association's industry standard.
                                    </li>
                                    <li>
                                        <strong>IICRC S210 Standard for the Inspection of HVAC
                                        Systems</strong> &mdash; the Institute of Inspection,
                                        Cleaning and Restoration Certification's framework.
                                    </li>
                                    <li>
                                        <strong>EPA Mold Course and IAQ guidance.</strong>
                                        For systems with confirmed microbial growth, we coordinate
                                        with our Florida-licensed mold remediation team (MRSR2655)
                                        under appropriate containment.
                                    </li>
                                </ul>
                                <p>
                                <em>If your developer is updating this page with specific
                                technician certifications (NADCA ASCS, CVI; IICRC HVAC; FL
                                CAC contractor license; etc.), add them here.</em>
                                </p>
                            </section>

                            <section class="services" aria-labelledby="svc-h">
                                <h2 id="svc-h">Our Miami Cleaning Services</h2>
                                <ul class="listing">
                                    <li><strong>Whole-home air duct cleaning.</strong> Source-removal with HEPA-filtered negative-air containment.</li>
                                    <li><strong>High-rise condo air handler &amp; duct cleaning.</strong> Coordinated with HOA boards, engineering staff and unit owners.</li>
                                    <li><strong>HVAC coil cleaning.</strong> Evaporator (where biological growth lives) and outdoor condenser (salt-air corrosion front line).</li>
                                    <li><strong>Air handler &amp; blower wheel cleaning.</strong> Cabinet interior, blower wheel, motor housing.</li>
                                    <li><strong>Condensate drain pan &amp; line cleaning.</strong></li>
                                    <li><strong>Dryer vent cleaning.</strong> Annual recommended.</li>
                                    <li><strong>Antimicrobial sanitization.</strong> EPA-registered, post source-removal.</li>
                                    <li><strong>UV light installation.</strong> In-duct UV-C to inhibit microbial growth.</li>
                                    <li><strong>Post-water-damage HVAC cleaning.</strong> Coordinated with our <a href="<?php echo site_url("miami-fl/water-damage-restoration/"); ?>">water damage restoration</a> team.</li>
                                    <li><strong>Post-fire HVAC decontamination.</strong> Coordinated with our <a href="<?php echo site_url("miami-fl/fire-damage-restoration/"); ?>">fire damage restoration</a> team.</li>
                                    <li><strong>Post-construction duct cleaning.</strong> Drywall dust and construction debris removal.</li>
                                    <li><strong>Commercial duct &amp; HVAC cleaning.</strong> Restaurants, retail, multi-family, office.</li>
                                    <li><strong>Indoor Air Quality (IAQ) assessment.</strong></li>
                                </ul>
                            </section>

                            <section class="process" aria-labelledby="process-h">
                                <h2 id="process-h">Our Air Duct &amp; HVAC Cleaning Process</h2>
                                <ol>
                                    <li><strong>Pre-cleaning inspection.</strong> Visual of ductwork, registers, air handler, evaporator coil, blower wheel, condensate. Photos document baseline.</li>
                                    <li><strong>Containment setup.</strong> Plastic at register openings, HEPA-filtered negative-air machine connected to trunk line.</li>
                                    <li><strong>Source-removal cleaning.</strong> Pneumatic whips, rotary brushes, air-driven agitators dislodge debris; negative-air machine extracts.</li>
                                    <li><strong>Component cleaning.</strong> Air handler interior, blower wheel, evaporator coil, drain pan. Condenser coil washed where in scope.</li>
                                    <li><strong>Sanitization (optional).</strong> EPA-registered antimicrobial.</li>
                                    <li><strong>Final inspection &amp; documentation.</strong> Post-cleaning photos, before/after comparison, written documentation.</li>
                                </ol>
                            </section>

                            <section class="service-area" aria-labelledby="area-h">
                                <h2 id="area-h">Where We Clean in Miami</h2>
                                <p>
                                Brickell, Downtown Miami, Edgewater, Wynwood, Little Havana,
                                Coconut Grove, Coral Gables, South Beach, Mid Beach, North
                                Beach, Bal Harbour, Sunny Isles Beach, Aventura, Key Biscayne,
                                North Miami, Doral, Hialeah, Pinecrest, Palmetto Bay, Kendall,
                                Homestead.
                                </p>
                            </section>

                            <section class="faq bg-light mb-4" aria-labelledby="faq-h">
                                <h2 id="faq-h">Miami Air Duct &amp; HVAC Cleaning FAQs</h2>

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
                                                How often should I clean my air ducts in Miami?
                                            </button>
                                        </h3>
                                        <div id="collapse_1"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_1"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>NADCA recommends 3-5 years; Miami conditions push that shorter — 2-4 years for occupied homes, immediately after any water loss, fire event or renovation.</p>
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
                                                Why is air duct cleaning more important in Miami?
                                            </button>
                                        </h3>
                                        <div id="collapse_2"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_2"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>Miami A/C runs ~8,000 hours per year — 4x northern systems. Year-round 75-80% humidity creates ideal conditions for biological growth.</p>
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
                                                Do you clean HVAC systems in Miami high-rise condos?
                                            </button>
                                        </h3>
                                        <div id="collapse_3"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_3"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>Yes. Closet air handlers, shared HVAC stacks, HOA approval and freight-elevator coordination. Brickell, Sunny Isles, Aventura, Bal Harbour, Mid Beach, downtown.</p>
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
                                                Do you clean HVAC coils and the air handler, not just the ducts?
                                            </button>
                                        </h3>
                                        <div id="collapse_4"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_4"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>Yes. Evaporator coil and blower wheel are usually where biological growth is heaviest. Standard scope includes ducts, registers, air handler interior, blower wheel, coil, drain pan and line.</p>
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
                                                How long does a typical air duct cleaning take?
                                            </button>
                                        </h3>
                                        <div id="collapse_5"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_5"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>3-5 hours for a single-system residence, longer for multi-system or commercial.</p>
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
                                                Should I have my HVAC cleaned after a water leak or fire?
                                            </button>
                                        </h3>
                                        <div id="collapse_6"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_6"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>Almost always yes. Post-water HVAC redistributes spores; post-fire HVAC spreads soot and odor. Particularly critical in high-rise condos with shared stacks.</p>
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
                                                Do dryer vents really need cleaning?
                                            </button>
                                        </h3>
                                        <div id="collapse_7"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_7"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>Yes — annually for most Miami homes, every 6 months for high-rise condos with long, complex vent runs.</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </section>

                            <section class="contact" aria-labelledby="contact-h">
                                <h2 id="contact-h">Call Miami's Air Duct &amp; HVAC Cleaning Team</h2>
                                <address>
                                    <strong>Water Mold Fire Restoration of Miami</strong><br>
                                    100 Biscayne Blvd<br>
                                    Miami, FL 33132<br>
                                    <a href="tel:+13059995144">305-999-5144</a> &middot;
                                    <a href="mailto:miami@watermoldfire.net">miami@watermoldfire.net</a><br>
                                    24/7 Service
                                </address>
                                <p>
                                Allergies acting up, A/C smelling musty, dryer taking forever,
                                or due for routine cleaning?
                                <a class="cta" href="tel:+13059995144">Call 305-999-5144</a>.
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