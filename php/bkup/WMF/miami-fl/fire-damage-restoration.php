<?php
require_once __DIR__ . '/../includes/init.php';

$pagename = "miami-fl/fire-damage-restoration.php";

$title = "Fire Damage Restoration in Miami, FL | 24/7 Cleanup";

$meta_description = "24/7 fire & smoke damage restoration in Miami, FL. Emergency board-up, soot removal, odor neutralization, condo cross-unit cleanup. IICRC certified. 305-999-5144.";

$meta_keywords = "fire damage restoration miami, fire damage repair miami, fire damage cleanup, fire restoration company miami, house fire restoration, smoke damage restoration miami, smoke damage cleanup, soot removal miami, smoke odor removal, smoke damage repair";

$canonical_url = "https://watermoldfire.net/miami-fl/fire-damage-restoration/";

$geo_tags = '
<meta name="geo.region" content="US-FL">
<meta name="geo.placename" content="Miami">
<meta name="geo.position" content="25.7800;-80.1850">
<meta name="ICBM" content="25.7800, -80.1850">
';

$open_graph = '
<meta property="og:type" content="website">
<meta property="og:site_name" content="Water Mold Fire Restoration">
<meta property="og:title" content="Fire Damage Restoration in Miami, FL | 24/7 Cleanup">
<meta property="og:description" content="Emergency fire & smoke damage cleanup in Miami. Board-up, soot removal, odor neutralization, high-rise condo cross-unit work. 24/7 dispatch.">
<meta property="og:url" content="https://watermoldfire.net/miami-fl/fire-damage-restoration/">
<meta property="og:image" content="'.site_url().'images/logo.webp">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="og:locale" content="en_US">
';

$twitter = '
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Fire Damage Restoration in Miami, FL">
<meta name="twitter:description" content="24/7 fire & smoke damage cleanup in Miami. Board-up, soot removal, condo cross-unit cleanup, full rebuild.">
<meta name="twitter:image" content="'.site_url().'images/logo.webp">
';

$schema_ld_json = '
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "@id": "https://watermoldfire.net/miami-fl/fire-damage-restoration/#service",
      "name": "Fire & Smoke Damage Restoration in Miami, FL",
      "serviceType": ["Fire Damage Restoration","Smoke Damage Restoration","Soot Removal","Fire & Smoke Odor Removal"],
      "description": "24/7 emergency fire and smoke damage restoration in Miami, FL. Emergency board-up and tarping, firefighting water mitigation, soot and smoke residue removal, odor neutralization, HVAC decontamination, content pack-out and full reconstruction for high-rise condos, single-family homes, commercial properties and marine fire losses across Miami-Dade County.",
      "url": "https://watermoldfire.net/miami-fl/fire-damage-restoration/",
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
        "name": "Fire & Smoke Damage Restoration Services",
        "itemListElement": [
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Emergency Board-Up & Roof Tarping"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Firefighting Water Damage Mitigation"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Soot & Smoke Residue Removal"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Smoke Odor Neutralization (Thermal Fogging, Hydroxyl, Ozone)"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "HVAC & Air Duct Smoke Decontamination"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "High-Rise Condo Cross-Unit Smoke Cleanup"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Content Pack-Out & Off-Site Cleaning"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Kitchen & Protein Fire Cleanup"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Lightning Strike & Electrical Fire Restoration"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Marine & Yacht Fire Cleanup"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Full Reconstruction & Rebuild"}}
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
      "@type": "BreadcrumbList","@id": "https://watermoldfire.net/miami-fl/fire-damage-restoration/#breadcrumb",
      "itemListElement": [
        {"@type": "ListItem","position": 1,"name": "Home","item": "https://watermoldfire.net/"},
        {"@type": "ListItem","position": 2,"name": "Miami, FL","item": "https://watermoldfire.net/miami-fl/"},
        {"@type": "ListItem","position": 3,"name": "Fire Damage Restoration","item": "https://watermoldfire.net/miami-fl/fire-damage-restoration/"}
      ]
    },
    {
      "@type": "WebPage","@id": "https://watermoldfire.net/miami-fl/fire-damage-restoration/#webpage",
      "url": "https://watermoldfire.net/miami-fl/fire-damage-restoration/",
      "name": "Fire Damage Restoration in Miami, FL",
      "isPartOf": {"@id": "https://watermoldfire.net/#website"},
      "about": {"@id": "https://watermoldfire.net/miami-fl/fire-damage-restoration/#service"},
      "breadcrumb": {"@id": "https://watermoldfire.net/miami-fl/fire-damage-restoration/#breadcrumb"},
      "inLanguage": "en-US"
    },
    {
      "@type": "FAQPage","@id": "https://watermoldfire.net/miami-fl/fire-damage-restoration/#faq",
      "mainEntity": [
        {"@type": "Question","name": "How fast can you respond to a fire in Miami?","acceptedAnswer": {"@type": "Answer","text": "Our Miami crews dispatch 24/7 from our Biscayne Boulevard facility in downtown Miami and target an on-site arrival of 60 minutes or less for emergency calls across Miami-Dade County. For active scenes, we coordinate with Miami-Dade Fire Rescue, the City of Miami Fire-Rescue Department, Miami Beach Fire-Rescue or the relevant municipal department before any cleaning begins."}},
        {"@type": "Question","name": "Should I clean soot or smoke residue myself before you arrive?","acceptedAnswer": {"@type": "Answer","text": "No. Soot is acidic, oily and abrasive. Wiping with household cleaners or a damp cloth embeds it permanently into porous surfaces. Running the A/C after a fire spreads smoke residue throughout the building — particularly dangerous in high-rise condos where shared HVAC systems can cross-contaminate other units. Turn the HVAC off, leave the soot alone, and call us."}},
        {"@type": "Question","name": "Does Florida homeowners insurance cover fire damage?","acceptedAnswer": {"@type": "Answer","text": "Fire is a named peril on virtually every Florida HO-3 policy and one of the most reliably covered losses. Your policy generally pays for structural repair, contents replacement and Additional Living Expenses (ALE) while you are displaced. We work with all major Florida carriers including Citizens and the limited private market remaining in Miami-Dade."}},
        {"@type": "Question","name": "Do you handle high-rise condo fires?","acceptedAnswer": {"@type": "Answer","text": "Yes — and Miami\'s vertical condo density (Brickell, downtown, Sunny Isles, Aventura, Bal Harbour, Mid Beach) makes high-rise fire and smoke cross-contamination a recurring category for us. A single-unit fire routinely deposits smoke residue into 8-20 neighboring units through shared HVAC stacks, common corridors and stairwells. We coordinate with condo boards, property managers and the building\'s engineering staff for cross-unit cleanup."}},
        {"@type": "Question","name": "How long does fire damage restoration take in Miami?","acceptedAnswer": {"@type": "Answer","text": "Emergency stabilization in the first 24 to 72 hours. Cleaning, deodorization and content pack-out 1 to 3 weeks. Reconstruction is the longest phase — small kitchen fires might rebuild in 2 to 4 weeks; substantial structural losses run 3 to 6 months given Miami\'s material lead times and Miami-Dade permit cycles, which can run longer than other Florida counties for HVHZ-affected work."}},
        {"@type": "Question","name": "Why does my whole condo smell like smoke when only one unit burned?","acceptedAnswer": {"@type": "Answer","text": "In a Miami high-rise, smoke moves through shared HVAC stacks, vertical chases, common corridors and stairwell pressurization within minutes of a fire. Smoke also penetrates porous materials — drywall, fabric, wood, grout — and continues to off-gas for weeks or months. Real odor removal requires HVAC decontamination at the building level plus unit-by-unit cleaning and active odor neutralization, not just surface cleaning."}},
        {"@type": "Question","name": "Do you handle marine and yacht fire losses?","acceptedAnswer": {"@type": "Answer","text": "Yes. Miami\'s marinas — Miami Beach Marina, Bayside Marketplace, Dinner Key, Coconut Grove and the Miami River — produce a steady stream of engine-room, galley and shore-power fires. Marine fire residue is particularly difficult: oily, dense, highly corrosive in salt air. We handle marine fire cleanup routinely."}}
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
                Fire & Smoke Damage Restoration in Miami, FL
            </h1>   
            <!-- Feature Pills -->
            <div class="feature-pills">
                <div class="feature-pill">
                    <i class="fas fa-headset"></i>
                    <span>24/7 Emergency Board-Up</span>
                </div>
                <div class="feature-pill">
                    <i class="fas fa-building"></i>
                    <span>Smoke, Soot & Odor Removal</span>
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
                                <h2 id="intro-h">24/7 Fire &amp; Smoke Damage Restoration in Miami</h2>
                                <p>
                                A fire in Miami doesn't stop being a fire once the trucks
                                leave. The structural damage is the obvious part; the harder
                                part is everything the fire left behind &mdash; thousands of
                                gallons of firefighting water soaking drywall and flooring,
                                acidic soot embedded in porous surfaces, smoke odor migrating
                                through HVAC systems into rooms (and in high-rise condos,
                                into other people's units) that never touched flame, and a
                                clock that's already started on secondary mold growth in this
                                climate. Water Mold Fire Restoration of Miami handles all of
                                it, in the right sequence: board-up first, water mitigation
                                second, soot and smoke cleaning third, odor neutralization,
                                content restoration, full reconstruction. Our crews follow the
                                IICRC S700 Standard for Professional Fire and Smoke Damage
                                Restoration and dispatch 24/7 from our facility on Biscayne
                                Boulevard in downtown Miami.
                                </p>
                            </section>

                            <section class="local-context" aria-labelledby="local-h">
                                <h2 id="local-h">Why Miami Fires Need a Specialized Restoration Approach</h2>
                                <p>
                                Miami fires have characteristics that inland and Northeast
                                losses simply do not. Our crews are built around these
                                conditions:
                                </p>
                                <ul class="listing">
                                    <li>
                                        <strong>High-rise condo smoke migration.</strong>
                                        Miami's high-rise condo density &mdash; Brickell, downtown,
                                        Sunny Isles, Aventura, Bal Harbour, Mid Beach &mdash; means
                                        a fire in one unit deposits smoke residue into 8-20
                                        neighboring units through shared HVAC stacks, common
                                        corridors and stairwell pressurization. Cross-unit cleanup,
                                        HOA coordination and freight-elevator scheduling become as
                                        critical as the actual cleaning. We handle multi-unit smoke
                                        restoration routinely.
                                    </li>
                                    <li>
                                        <strong>Florida lightning &amp; electrical ignitions.</strong>
                                        Florida is the lightning capital of the United States and
                                        Miami sits in one of the most strike-dense corridors in the
                                        state. Lightning ignites attic fires, fries HVAC condensers,
                                        and triggers in-wall electrical fires &mdash; particularly
                                        in older single-family stock in Coconut Grove, Coral Gables
                                        and Miami Shores with original aluminum or knob-and-tube
                                        wiring still in service.
                                    </li>
                                    <li>
                                        <strong>Hurricane-season ignition sources.</strong>
                                        When power goes out during named storms (Andrew, Wilma,
                                        Irma and the systems since), candle fires, generator misuse
                                        and downed-conductor ignitions spike. Generator carbon
                                        monoxide events also accompany the fire calls.
                                    </li>
                                    <li>
                                        <strong>Marine &amp; yacht fires.</strong>
                                        Miami's marina capacity is among the largest in the country
                                        &mdash; Miami Beach Marina, Dinner Key, Bayside, the Miami
                                        River, Coconut Grove. Engine-room, galley and shore-power
                                        fires on boats produce dense, oily smoke residue that's
                                        highly corrosive in salt air.
                                    </li>
                                    <li>
                                        <strong>Salt air accelerates soot corrosion.</strong>
                                        On coastal properties &mdash; Miami Beach, Key Biscayne, Bal
                                        Harbour, Sunny Isles, the Venetian Islands &mdash; fire soot
                                        combined with humid salt air begins corroding electronics,
                                        fixtures, appliances and metal trim within hours.
                                    </li>
                                    <li>
                                        <strong>Humidity-driven secondary mold.</strong>
                                        Firefighting water plus 75%+ ambient humidity is an open
                                        invitation for mold growth on wet, smoke-saturated framing
                                        and drywall. Every Miami fire job includes aggressive drying
                                        alongside the cleaning scope.
                                    </li>
                                </ul>
                            </section>

                            <section class="process" aria-labelledby="process-h">
                                <h2 id="process-h">Our Fire Damage Restoration Process</h2>
                                <ol>
                                    <li><strong>Emergency stabilization (Hour 1-24).</strong> Site safety walkthrough, board-up of openings, roof tarping over burn-throughs, securing the property.</li>
                                    <li><strong>Firefighting water mitigation (Hours 1-72).</strong> Extract, dry and dehumidify affected areas to prevent the mold problem that otherwise follows every Miami fire.</li>
                                    <li><strong>Soot and smoke residue removal.</strong> Smoke type identification (dry, wet, protein, fuel-based) drives the cleaning method.</li>
                                    <li><strong>HVAC decontamination.</strong> Air handlers, returns, supply trunks and registers. In high-rises this often extends to building-wide HVAC system cleaning coordinated with engineering.</li>
                                    <li><strong>Smoke odor neutralization.</strong> Thermal fogging, hydroxyl generators, ozone treatment.</li>
                                    <li><strong>Content pack-out.</strong> Salvageable contents inventoried, packed out, cleaned off-site.</li>
                                    <li><strong>Reconstruction.</strong> Framing, drywall, insulation, flooring, cabinetry, electrical, paint and finish carpentry. Miami-Dade permitting handled in-house.</li>
                                </ol>
                            </section>

                            <section class="smoke-types" aria-labelledby="smoke-h">
                                <h2 id="smoke-h">The Types of Smoke We Clean</h2>
                                <ul class="listing">
                                    <li><strong>Dry smoke.</strong> High-temperature, fast-burning fires (paper, wood). Powdery residue. Easiest to clean.</li>
                                    <li><strong>Wet smoke.</strong> Smoldering fires with plastics, rubber, synthetic upholstery, roofing materials. Dense, sticky, smeary residue. Hardest to clean.</li>
                                    <li><strong>Protein smoke.</strong> Kitchen fires (grease, protein-based foods). Invisible residue, pervasive odor. Specialized degreasing chemistry required.</li>
                                    <li><strong>Fuel oil &amp; petroleum smoke.</strong> Vehicle, boat-engine and generator fires. Oily residues, aggressive solvent cleaning.</li>
                                </ul>
                            </section>

                            <section class="odor" aria-labelledby="odor-h">
                                <h2 id="odor-h">Smoke Odor Removal in Miami Homes &amp; Condos</h2>
                                <p>
                                The most common complaint we hear from Miami homeowners weeks
                                after a fire is "everything looks fine, but I still smell
                                smoke." Smoke odor compounds embed in porous materials and
                                continue to off-gas for months. Surface cleaning addresses only
                                what's visible. Real odor removal requires breaking down the
                                odor molecule itself &mdash; thermal fogging, hydroxyl
                                generation, ozone treatment. We typically combine modalities
                                because one tool rarely handles a whole-house or whole-unit
                                odor scope on its own.
                                </p>
                            </section>

                            <section class="insurance" aria-labelledby="ins-h">
                                <h2 id="ins-h">Florida Fire Insurance &amp; ALE Coverage</h2>
                                <p>
                                Fire is a named peril on virtually every Florida HO-3 policy.
                                Most policies include structural repair (Coverage A), personal
                                property (Coverage C) and Additional Living Expenses (Coverage
                                D / ALE) for hotel, rental and meal costs while you cannot
                                live in the property. Miami-Dade's insurance market has
                                tightened harder than anywhere else in Florida since the 2022
                                reforms; many private carriers have pulled out entirely,
                                leaving Citizens as the carrier for thousands of Miami
                                properties. We work with Citizens and all remaining major
                                carriers.
                                </p>
                            </section>

                            <section class="service-area" aria-labelledby="area-h">
                                <h2 id="area-h">Where We Respond to Fire Damage in Miami</h2>
                                <p>
                                Brickell, Downtown Miami, Edgewater, Wynwood, Little Havana,
                                Coconut Grove, Coral Gables, South Beach, Mid Beach, North
                                Beach, Bal Harbour, Sunny Isles Beach, Aventura, Key Biscayne,
                                North Miami, Doral, Hialeah, Pinecrest, Palmetto Bay, Kendall
                                and Homestead. We also handle marine fire losses across Miami
                                Beach Marina, Bayside, Dinner Key, the Miami River and
                                Coconut Grove docks.
                                </p>
                            </section>

                            <section class="faq bg-light mb-4" aria-labelledby="faq-h">
                                <h2 id="faq-h">Miami Fire Damage Restoration FAQs</h2>

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
                                                How fast can you respond to a fire in Miami?
                                            </button>
                                        </h3>
                                        <div id="collapse_1"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_1"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>60-minute target on-site arrival across Miami-Dade County. We coordinate with Miami-Dade Fire Rescue, City of Miami Fire-Rescue, Miami Beach Fire-Rescue or the relevant municipal department before cleaning begins.</p>
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
                                                Should I clean soot or smoke residue myself before you arrive?
                                            </button>
                                        </h3>
                                        <div id="collapse_2"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_2"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>No. Soot is acidic, oily and abrasive. Wiping with household cleaners embeds it permanently. Running the A/C after a fire spreads residue — particularly dangerous in high-rise condos with shared HVAC systems. Turn HVAC off, leave the soot alone, call us.</p>
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
                                                Does Florida homeowners insurance cover fire damage?
                                            </button>
                                        </h3>
                                        <div id="collapse_3"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_3"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>Fire is named peril on virtually every Florida HO-3 policy. Coverage typically includes structural, contents and ALE while displaced. We work with Citizens and the limited private market remaining in Miami-Dade.</p>
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
                                                Do you handle high-rise condo fires?
                                            </button>
                                        </h3>
                                        <div id="collapse_4"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_4"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>Yes. Miami's vertical condo density makes cross-unit smoke contamination a recurring category. A single-unit fire deposits residue in 8-20 neighboring units through shared HVAC and stairwell pressurization. We coordinate with condo boards and engineering staff.</p>
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
                                                How long does fire damage restoration take in Miami?
                                            </button>
                                        </h3>
                                        <div id="collapse_5"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_5"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>Stabilization 24-72 hours. Cleaning and deodorization 1-3 weeks. Reconstruction 2 weeks to 6 months depending on scope and Miami-Dade permit cycles.</p>
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
                                                Why does my whole condo smell like smoke when only one unit burned?
                                            </button>
                                        </h3>
                                        <div id="collapse_6"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_6"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>Smoke moves through shared HVAC stacks, vertical chases, corridors and stairwell pressurization within minutes. Smoke compounds penetrate porous materials and off-gas for weeks. HVAC decontamination plus active odor neutralization is required.</p>
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
                                                Do you handle marine and yacht fire losses?
                                            </button>
                                        </h3>
                                        <div id="collapse_7"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_7"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>Yes. Miami Beach Marina, Bayside, Dinner Key, the Miami River, Coconut Grove. Marine fire residue is dense, oily and corrosive in salt air. Routine work for our crews.</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </section>

                            <section class="contact" aria-labelledby="contact-h">
                                <h2 id="contact-h">Call Miami's Fire &amp; Smoke Damage Restoration Team</h2>
                                <address>
                                    <strong>Water Mold Fire Restoration of Miami</strong><br>
                                    100 Biscayne Blvd<br>
                                    Miami, FL 33132<br>
                                    <a href="tel:+13059995144">305-999-5144</a> &middot;
                                    <a href="mailto:miami@watermoldfire.net">miami@watermoldfire.net</a><br>
                                    24/7 Emergency Service
                                </address>
                                <p>
                                Active fire, recent fire, or a high-rise unit that just burned
                                and smoked yours out?
                                <a class="cta" href="tel:+13059995144">Call 305-999-5144</a>
                                and a crew will be on the way before the structure has finished
                                cooling.
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