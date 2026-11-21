<?php
require_once __DIR__ . '/../includes/init.php';

$pagename = "miami-fl/leak-detection.php";

$title = "Leak Detection in Miami, FL | Plumbing &amp; Insurance";

$meta_description = "Leak detection in Miami, FL. Slab, pool, shower, appliance & hidden leaks. Invasive & non-invasive methods. Insurance documentation reports. 305-999-5144.";

$meta_keywords = "leak detection miami, water leak detection miami, hidden leak detection, plumbing leak detection, leak detection services, slab leak detection miami, slab leak repair, under slab leak, pool leak detection miami, swimming pool leak detection, pool leak repair, dishwasher leak detection, refrigerator leak detection, icemaker leak, shower pan leak, washing machine leak, water heater leak, electronic leak detection, thermal leak detection, acoustic leak detection, non-invasive leak detection, invasive leak detection, insurance leak detection report, third party leak inspection, leak documentation for insurance claim, leak inspection report miami";

$canonical_url = "https://watermoldfire.net/miami-fl/leak-detection/";

$geo_tags = '
<meta name="geo.region" content="US-FL">
<meta name="geo.placename" content="Miami">
<meta name="geo.position" content="25.7800;-80.1850">
<meta name="ICBM" content="25.7800, -80.1850">
';

$open_graph = '
<meta property="og:type" content="website">
<meta property="og:site_name" content="Water Mold Fire Restoration">
<meta property="og:title" content="Leak Detection in Miami, FL | Plumbing &amp; Insurance">
<meta property="og:description" content="Leak detection in Miami — slab, pool, shower, appliance & hidden leaks. Invasive & non-invasive methods, third-party insurance reports. 24/7.">
<meta property="og:url" content="https://watermoldfire.net/miami-fl/leak-detection/">
<meta property="og:image" content="'.site_url().'images/logo.webp">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="og:locale" content="en_US">
';

$twitter = '
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Leak Detection in Miami, FL">
<meta name="twitter:description" content="Slab, pool, shower & appliance leak detection in Miami. Invasive & non-invasive. Insurance documentation reports.">
<meta name="twitter:image" content="'.site_url().'images/logo.webp">
';

$schema_ld_json = '
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "@id": "https://watermoldfire.net/miami-fl/leak-detection/#service",
      "name": "Leak Detection in Miami, FL",
      "serviceType": ["Leak Detection","Slab Leak Detection","Pool Leak Detection","Shower Pan Leak Detection","Appliance Leak Detection","Insurance Documentation Leak Detection","Electronic Leak Detection","Thermal Leak Detection","Acoustic Leak Detection","Invasive Leak Detection","Non-Invasive Leak Detection","High-Rise Condo Leak Detection"],
      "description": "Invasive and non-invasive leak detection in Miami, FL. Electronic acoustic, infrared thermal imaging, tracer gas, static pressure and hydrostatic testing, sewer camera inspection, dye testing and targeted access cuts to pinpoint slab leaks, pool leaks, shower pan leaks, dishwasher and refrigerator/icemaker leaks, washing machine and water heater leaks, high-rise condo cross-unit leaks, behind-wall plumbing leaks and hidden roof leaks. Independent third-party leak documentation reports for insurance claims also available across Miami-Dade County.",
      "url": "https://watermoldfire.net/miami-fl/leak-detection/",
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
        "name": "Leak Detection Services",
        "itemListElement": [
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Slab Leak Detection"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Pool & Spa Leak Detection"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "High-Rise Condo Cross-Unit Leak Detection"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Behind-Wall Plumbing Leak Detection"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Pinhole & Copper Pipe Leak Detection"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Cast-Iron Drain Line Leak Detection"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Shower Pan & Tile Leak Detection"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Dishwasher Leak Detection"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Refrigerator & Icemaker Line Leak Detection"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Washing Machine Hose & Supply Leak Detection"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Water Heater Leak Detection"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Toilet Flange & Wax Ring Leak Detection"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "A/C Condensate Leak Detection"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Irrigation System Leak Detection"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Hidden Roof & Window Leak Detection"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Sewer Line Camera Inspection"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Insurance Documentation Leak Detection (Third-Party Reports)"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Invasive Leak Verification (Targeted Access Cuts)"}}
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
      "@type": "BreadcrumbList","@id": "https://watermoldfire.net/miami-fl/leak-detection/#breadcrumb",
      "itemListElement": [
        {"@type": "ListItem","position": 1,"name": "Home","item": "https://watermoldfire.net/"},
        {"@type": "ListItem","position": 2,"name": "Miami, FL","item": "https://watermoldfire.net/miami-fl/"},
        {"@type": "ListItem","position": 3,"name": "Leak Detection","item": "https://watermoldfire.net/miami-fl/leak-detection/"}
      ]
    },
    {
      "@type": "WebPage","@id": "https://watermoldfire.net/miami-fl/leak-detection/#webpage",
      "url": "https://watermoldfire.net/miami-fl/leak-detection/",
      "name": "Leak Detection in Miami, FL",
      "isPartOf": {"@id": "https://watermoldfire.net/#website"},
      "about": {"@id": "https://watermoldfire.net/miami-fl/leak-detection/#service"},
      "breadcrumb": {"@id": "https://watermoldfire.net/miami-fl/leak-detection/#breadcrumb"},
      "inLanguage": "en-US"
    },
    {
      "@type": "FAQPage","@id": "https://watermoldfire.net/miami-fl/leak-detection/#faq",
      "mainEntity": [
        {"@type": "Question","name": "Do you offer invasive or non-invasive leak detection?","acceptedAnswer": {"@type": "Answer","text": "Both. Non-invasive is the default — electronic acoustic listening, infrared thermal imaging, tracer gas, and static and hydrostatic pressure testing locate most Miami leaks without opening drywall, tile or concrete. When symptoms warrant — multiple suspect sources, deeply buried lines, confirming a positive find before a major repair — we move to controlled invasive verification: small targeted access cuts, fixture removal, sub-slab access. Even invasive jobs are limited to the smallest scope that answers the question."}},
        {"@type": "Question","name": "I already know I have a leak — do I need detection, or just a report for my insurance?","acceptedAnswer": {"@type": "Answer","text": "Many Miami homeowners already know exactly where their leak came from — burst icemaker line, shower pan failure, dishwasher hose let go, condo unit upstairs cracked a supply line. What their insurance carrier won\'t accept is the homeowner\'s own description. We provide Insurance Documentation Leak Detection: an independent third-party leak inspection with photos, moisture mapping, cause-of-loss narrative and scope, formatted for direct submission to your carrier or public adjuster. Especially after Florida\'s 2022 and 2023 insurance reforms — and given how Miami-Dade\'s carrier landscape has tightened more than any other county — carriers expect this level of documentation."}},
        {"@type": "Question","name": "Why is my water bill suddenly high in Miami?","acceptedAnswer": {"@type": "Answer","text": "An unexplained spike almost always points to one of a handful of leaks: a slab leak in your supply line, a pool leak, an underground irrigation leak, a running toilet flapper, or a leaking refrigerator/ice-maker line. In condo settings, the leak may also be in a neighboring unit feeding into shared chases. We isolate the source with a pressure test of the main supply and targeted instrumentation."}},
        {"@type": "Question","name": "How do you detect a slab leak in a Miami home?","acceptedAnswer": {"@type": "Answer","text": "Slab leaks are common in Miami because single-family stock in Coral Gables, Pinecrest, Palmetto Bay, Coconut Grove and Miami Shores typically sits on slab-on-grade foundations with copper supply lines aging out from acidic soils and saltwater intrusion. We start with a static pressure test, isolate hot vs cold side, then use ground microphones and infrared thermal imaging to pinpoint location through the concrete. Most slab leaks pinpoint to within 6 to 12 inches without breaking the slab."}},
        {"@type": "Question","name": "How do you find leaks in Miami high-rise condos?","acceptedAnswer": {"@type": "Answer","text": "Miami\'s vertical condo stock — Brickell, downtown, Sunny Isles, Aventura, Bal Harbour, Mid Beach — produces leaks that often originate two or three floors above where they surface. We use static pressure testing on the affected unit\'s supply, acoustic detection along shared risers, thermal imaging across shared walls and ceilings, and coordination with the building engineering team to isolate which unit and which line is the source. This is one of our most common Miami service categories."}},
        {"@type": "Question","name": "Will my Florida homeowners insurance cover a slab leak in Miami?","acceptedAnswer": {"@type": "Answer","text": "Generally, the resulting water damage from a sudden and accidental slab leak is covered under a standard Florida HO-3 policy, and many policies cover the access cost with the right endorsement. The repair of the pipe itself is sometimes excluded. Miami-Dade\'s insurance market has tightened more than any other county since 2022, so detailed cause-of-loss documentation has become essential. We provide written detection reports formatted for insurance submission."}}
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
                Leak Detection in Miami, FL
            </h1>   
            <!-- Feature Pills -->
            <div class="feature-pills">
                <div class="feature-pill">
                    <i class="fas fa-comments"></i>
                    <span>Invasive & Non-Invasive</span>
                </div>
                <div class="feature-pill">
                    <i class="fas fa-certificate"></i>
                    <span>Insurance Documentation Reports</span>
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
                                <h2 id="intro-h">Leak Detection for Miami Homes &amp; Businesses</h2>
                                <p>
                                A leak you can't see is the most expensive kind. In a Miami
                                high-rise it can also be a leak in someone else's unit two
                                floors above &mdash; finding it requires coordination with
                                condo engineering, not just thermal imaging in your own
                                ceiling. Water Mold Fire Restoration of Miami finds leaks of
                                every kind: supply, drain, slab, pool, shower pan, appliance,
                                condo cross-unit, irrigation and roof. We use both
                                <strong>non-invasive methods</strong> (electronic acoustic,
                                infrared thermal imaging, tracer gas, pressure testing) and,
                                when symptoms warrant, <strong>targeted invasive verification</strong>
                                (controlled access cuts, fixture removal, sub-slab access).
                                Our crews dispatch from our Biscayne Boulevard facility in
                                downtown Miami and cover Miami-Dade County 24/7 for active
                                leak emergencies.
                                </p>
                                <p>
                                We also offer <a href="#insurance-doc"><strong>Insurance
                                Documentation Leak Detection</strong></a> &mdash; an
                                independent third-party leak inspection and written report
                                for Miami property owners who already know what their leak is
                                but need the documentation their insurance carrier requires.
                                </p>
                            </section>

                            <section class="local-context" aria-labelledby="local-h">
                                <h2 id="local-h">Leak Types We Detect in Miami</h2>
                                <p>
                                "Leak detection" gets used as if every leak is the same kind,
                                but finding a pinhole copper supply leak under a slab in
                                Coral Gables is nothing like locating a failing shower pan in
                                a Brickell high-rise. Our crews see these categories repeat
                                across Miami-Dade:
                                </p>
                                <ul class="listing">
                                    <li>
                                        <strong>High-rise condo cross-unit leaks.</strong>
                                        Miami's signature vertical density means leaks often originate
                                        floors above where they surface. Brickell, downtown, Sunny
                                        Isles, Aventura, Bal Harbour and Mid Beach buildings have
                                        shared supply risers and drain stacks that can carry water
                                        cross-unit for hours before the source is identified.
                                        Engineering coordination is part of the job.
                                    </li>
                                    <li>
                                        <strong>Slab leaks in saltwater-corroded copper.</strong>
                                        Single-family Miami stock in Coral Gables, Coconut Grove,
                                        Pinecrest, Palmetto Bay and the older Miami Shores corridors
                                        is slab-on-grade with copper supply. Saltwater intrusion,
                                        acidic soils and electrolytic activity produce pinhole leaks.
                                    </li>
                                    <li>
                                        <strong>Pool &amp; spa leaks.</strong>
                                        Miami-Dade is dense with in-ground pools, particularly in
                                        Coral Gables, Coconut Grove, Pinecrest, Key Biscayne and
                                        Palmetto Bay. Pool losing more than a quarter-inch per day
                                        above evaporation has a leak that needs finding before it
                                        undermines the deck or rebar.
                                    </li>
                                    <li>
                                        <strong>Cast-iron drain failures in 1960s-80s condos.</strong>
                                        Original cast-iron drain stacks in vintage Miami condos
                                        have reached 50+ years in a humid coastal environment.
                                        Corrosion, scale, sagging and failure inside shared wall
                                        cavities make leak source identification difficult.
                                    </li>
                                    <li>
                                        <strong>Shower pan &amp; wet-area leaks.</strong>
                                        Failed shower pans, cracked grout, broken tile membranes
                                        and leaking tub overflows in 1970s-90s Miami housing stock
                                        and high-rise condos. Surface as buckled flooring outside
                                        the bathroom or ceiling stains in the unit below.
                                    </li>
                                    <li>
                                        <strong>Dishwasher leaks.</strong>
                                        Failed door gaskets, supply-line cracks, drain-hose failures
                                        behind the unit.
                                    </li>
                                    <li>
                                        <strong>Refrigerator &amp; icemaker line leaks.</strong>
                                        Plastic icemaker supply lines behind the refrigerator are
                                        one of the most common interior leak sources in Miami homes.
                                    </li>
                                    <li>
                                        <strong>Washing machine hose &amp; supply leaks.</strong>
                                        Rubber washing machine hoses age out in Miami heat and
                                        humidity. Catastrophic burst can release hundreds of gallons
                                        in minutes.
                                    </li>
                                    <li>
                                        <strong>Water heater leaks.</strong>
                                        Tank corrosion at the bottom seam, T&amp;P discharge,
                                        supply failures. Closet-mounted units in condos cause the
                                        worst secondary damage.
                                    </li>
                                    <li>
                                        <strong>A/C condensate leaks.</strong>
                                        Miami A/C runs nearly every day of the year. Clogged or
                                        cracked condensate lines produce slow ceiling leaks.
                                    </li>
                                    <li>
                                        <strong>Irrigation leaks.</strong>
                                        A buried lateral or valve failure can lose hundreds of
                                        gallons per day, masked by already-lush South Florida
                                        landscaping.
                                    </li>
                                    <li>
                                        <strong>Roof &amp; window leaks from tropical-system rain.</strong>
                                        Often present as interior staining far from the actual
                                        point of entry. Thermal imaging traces water back to the
                                        real source.
                                    </li>
                                </ul>
                            </section>

                            <section class="methods" aria-labelledby="methods-h">
                                <h2 id="methods-h">Our Leak Detection Methods &mdash; Non-Invasive and Invasive</h2>
                                <p>
                                No single detection method finds every leak. We default to
                                non-invasive tools, then escalate to controlled invasive
                                verification when symptoms warrant it.
                                </p>

                                <h3>Non-Invasive Methods (Default)</h3>
                                <ul class="listing">
                                    <li><strong>Static &amp; hydrostatic pressure testing.</strong> Isolate the system, watch the gauge.</li>
                                    <li><strong>Electronic acoustic detection.</strong> Ground microphones and acoustic correlators listen for pressurized water signatures.</li>
                                    <li><strong>Infrared thermal imaging.</strong> Maps temperature differentials across walls, floors and ceilings.</li>
                                    <li><strong>Tracer gas.</strong> Non-flammable hydrogen-nitrogen mix for leaks too small for acoustic detection.</li>
                                    <li><strong>Sewer / drain line camera inspection.</strong> Push camera through cleanout for cast-iron and PVC drain diagnosis.</li>
                                    <li><strong>Dye testing.</strong> Fluorescent dye for pools, shower pans, toilet flanges, roof penetrations.</li>
                                    <li><strong>Moisture mapping.</strong> Defines the wet zone for exact repair scope.</li>
                                </ul>

                                <h3>Invasive Methods (When Symptoms Warrant)</h3>
                                <ul class="listing">
                                    <li><strong>Targeted drywall access cuts.</strong> Surgical openings at acoustic/thermal pinpoint location.</li>
                                    <li><strong>Fixture &amp; appliance removal.</strong> Pull dishwasher, fridge, washing machine, toilet, vanity for direct access.</li>
                                    <li><strong>Tile &amp; shower pan inspection cuts.</strong> Controlled tile removal at suspected failure point.</li>
                                    <li><strong>Sub-slab access.</strong> Minimum opening to expose confirmed slab leak.</li>
                                </ul>
                            </section>

                            <section id="insurance-doc" class="insurance-doc" aria-labelledby="insdoc-h">
                                <h2 id="insdoc-h">Insurance Documentation Leak Detection &mdash; Third-Party Reports</h2>
                                <p>
                                A growing share of our Miami calls come from property owners
                                who already know where their leak is. They found the burst
                                icemaker line. They watched the shower pan finally give way.
                                The condo upstairs cracked a supply line and their ceiling is
                                the result. What they need is not "find the leak." What they
                                need is an independent, third-party leak inspection report
                                formatted for their insurance carrier.
                                </p>
                                <p>
                                Miami-Dade's insurance environment tightened harder than
                                anywhere else in Florida after the 2022 (SB 2A) and 2023
                                reforms. Multiple private carriers have pulled out of
                                Miami-Dade entirely, and the carriers that remain require
                                detailed cause-of-loss documentation before paying out water
                                claims. A homeowner's own statement is not enough. Our
                                Insurance Documentation Leak Detection service is built for
                                this scenario:
                                </p>
                                <ul class="listing">
                                    <li>Independent on-site inspection of the known leak source.</li>
                                    <li>Photo documentation of the failed component and resulting damage.</li>
                                    <li>Moisture mapping across the affected area.</li>
                                    <li>Cause-of-loss narrative (sudden and accidental versus long-term seepage).</li>
                                    <li>Written report formatted for direct submission to your carrier, public adjuster or attorney.</li>
                                    <li>Rush turnaround for tight claim deadlines.</li>
                                </ul>
                                <p>
                                We work with Citizens and the limited private market remaining
                                in Miami-Dade. The service is also commonly requested for real
                                estate disputes, landlord-tenant claims, and Miami condo HOA
                                disputes (where the failure point determines who pays for the
                                loss, particularly important for buildings now subject to
                                post-Surfside milestone inspection requirements).
                                </p>
                            </section>

                            <section class="signs" aria-labelledby="signs-h">
                                <h2 id="signs-h">Signs You Have a Hidden Leak</h2>
                                <ul class="listing">
                                    <li>Water bill jumped 20% or more with no change in usage.</li>
                                    <li>Water meter spins with every fixture in the unit turned off.</li>
                                    <li>Warm or damp spots on a tile or concrete floor.</li>
                                    <li>Pool drops more than a quarter inch per day above evaporation.</li>
                                    <li>Ceiling stains in a condo unit (often from the unit above).</li>
                                    <li>Persistent musty smell with no visible mold.</li>
                                    <li>Drywall staining, baseboard buckling or peeling paint.</li>
                                    <li>Reduced water pressure at one or more fixtures.</li>
                                    <li>Unusually green or lush patch of grass in the lawn.</li>
                                    <li>Sound of running water inside walls with nothing in use.</li>
                                </ul>
                            </section>

                            <section class="process" aria-labelledby="process-h">
                                <h2 id="process-h">Our Leak Detection Process</h2>
                                <ol>
                                    <li><strong>Phone intake.</strong> Symptoms, water bill history, recent water events, property age, construction type, condo or single-family.</li>
                                    <li><strong>On-site walkthrough &amp; meter check.</strong></li>
                                    <li><strong>System isolation &amp; pressure testing.</strong></li>
                                    <li><strong>Instrument detection.</strong> Acoustic, thermal, tracer gas, camera, dye as needed.</li>
                                    <li><strong>Pinpoint &amp; mark.</strong></li>
                                    <li><strong>Written report.</strong> For insurance submission where applicable.</li>
                                    <li><strong>Repair coordination.</strong> Our <a href="/miami-fl/plumbing/">plumbing repair</a> team, your preferred plumber, or hand off to your contractor.</li>
                                </ol>
                            </section>

                            <section class="service-area" aria-labelledby="area-h">
                                <h2 id="area-h">Where We Detect Leaks in Miami</h2>
                                <p>
                                Brickell, Downtown Miami, Edgewater, Wynwood, Little Havana,
                                Coconut Grove, Coral Gables, South Beach, Mid Beach, North
                                Beach, Bal Harbour, Sunny Isles Beach, Aventura, Key Biscayne,
                                North Miami, Doral, Hialeah, Pinecrest, Palmetto Bay, Kendall,
                                Homestead.
                                </p>
                            </section>

                            <section class="faq bg-light mb-4" aria-labelledby="faq-h">
                                <h2 id="faq-h">Miami Leak Detection FAQs</h2>

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
                                                Do you offer invasive or non-invasive leak detection?
                                            </button>
                                        </h3>
                                        <div id="collapse_1"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_1"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>Both. Non-invasive default, controlled invasive verification when symptoms warrant.</p>
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
                                                I already know I have a leak — do I need detection, or just a report for my insurance?
                                            </button>
                                        </h3>
                                        <div id="collapse_2"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_2"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>Many Miami property owners need only the documentation. Our <a href="#insurance-doc">Insurance Documentation Leak Detection</a> service provides an independent third-party report formatted for carriers — essential in Miami-Dade's tightened 2022-reform insurance environment.</p>
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
                                                Why is my water bill suddenly high in Miami?
                                            </button>
                                        </h3>
                                        <div id="collapse_3"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_3"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>Slab leak, pool leak, irrigation leak, running toilet, refrigerator/ice-maker line, or in condos a neighboring-unit leak feeding shared chases.</p>
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
                                                How do you detect a slab leak in a Miami home?
                                            </button>
                                        </h3>
                                        <div id="collapse_4"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_4"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>Static pressure test, isolate hot vs cold, ground microphones and infrared thermal imaging to pinpoint through concrete. Most slab leaks within 6-12 inches.</p>
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
                                                How do you find leaks in Miami high-rise condos?
                                            </button>
                                        </h3>
                                        <div id="collapse_5"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_5"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>Static pressure testing, acoustic detection along shared risers, thermal imaging across shared walls and ceilings, coordination with building engineering. One of our most common Miami categories.</p>
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
                                                Will my Florida homeowners insurance cover a slab leak in Miami?
                                            </button>
                                        </h3>
                                        <div id="collapse_6"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_6"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>Generally the resulting water damage is covered under HO-3; access cost often covered with the right endorsement. Pipe repair sometimes excluded. Miami-Dade's tightened insurance environment makes documentation essential.</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </section>

                            <section class="contact" aria-labelledby="contact-h">
                                <h2 id="contact-h">Call Miami's Leak Detection Team</h2>
                                <address>
                                    <strong>Water Mold Fire Restoration of Miami</strong><br>
                                    100 Biscayne Blvd<br>
                                    Miami, FL 33132<br>
                                    <a href="tel:+13059995144">305-999-5144</a> &middot;
                                    <a href="mailto:miami@watermoldfire.net">miami@watermoldfire.net</a><br>
                                    24/7 Emergency Service
                                </address>
                                <p>
                                Water bill climbing, pool dropping, condo ceiling stained, or
                                a stain you can't explain?
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