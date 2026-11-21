<?php
require_once __DIR__ . '/../includes/init.php';

$pagename = "boca-raton-fl/fire-damage-restoration.php";

$title = "Fire Damage Restoration in Boca Raton, FL | 24/7 Smoke &amp; Odor Removal";

$meta_description = "24/7 fire & smoke damage restoration in Boca Raton. High-rise condo, Mizner-era, lightning, kitchen & marina fires. Board-up, soot, odor removal. IICRC certified. 561-401-0436.";

$meta_keywords = "fire damage restoration boca raton, fire damage repair boca raton, fire damage cleanup, fire restoration company boca raton, house fire restoration, smoke damage restoration boca raton, smoke damage cleanup, soot removal boca raton, smoke odor removal, smoke damage repair";

$canonical_url = "https://watermoldfire.net/boca-raton-fl/fire-damage-restoration/";

$geo_tags = '
<meta name="geo.region" content="US-FL">
<meta name="geo.placename" content="Boca Raton">
<meta name="geo.position" content="26.4040;-80.0805">
<meta name="ICBM" content="26.4040, -80.0805">
';

$open_graph = '
<meta property="og:type" content="website">
<meta property="og:site_name" content="Water Mold Fire Restoration">
<meta property="og:title" content="Fire Damage Restoration in Boca Raton, FL | 24/7 Smoke &amp; Odor Removal">
<meta property="og:description" content="Emergency fire & smoke damage cleanup in Boca Raton. Board-up, soot removal, odor neutralization, high-rise condo cross-unit work. 24/7 dispatch.">
<meta property="og:url" content="https://watermoldfire.net/boca-raton-fl/fire-damage-restoration/">
<meta property="og:image" content="'.site_url().'images/logo.webp">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="og:locale" content="en_US">
';

$twitter = '
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Fire Damage Restoration in Boca Raton, FL">
<meta name="twitter:description" content="24/7 fire & smoke damage cleanup in Boca. Board-up, soot, odor removal, condo cross-unit cleanup, full rebuild.">
<meta name="twitter:image" content="'.site_url().'images/logo.webp">
';

$schema_ld_json = '
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "@id": "https://watermoldfire.net/boca-raton-fl/fire-damage-restoration/#service",
      "name": "Fire & Smoke Damage Restoration in Boca Raton, FL",
      "serviceType": ["Fire Damage Restoration","Smoke Damage Restoration","Soot Removal","Fire & Smoke Odor Removal"],
      "description": "24/7 emergency fire and smoke damage restoration in Boca Raton, FL. Emergency board-up and tarping, firefighting water mitigation, soot and smoke residue removal, odor neutralization, HVAC decontamination, content pack-out and full reconstruction for high-rise condos, gated country club homes, Mizner-era Mediterranean Revival properties, kitchen fires, lightning fires, marina and yacht fires across Boca Raton, Highland Beach, Delray Beach and coastal Palm Beach County.",
      "url": "https://watermoldfire.net/boca-raton-fl/fire-damage-restoration/",
      "provider": {"@id": "https://watermoldfire.net/boca-raton-fl/#localbusiness"},
      "areaServed": [
        {"@type": "City", "name": "Boca Raton"},{"@type": "City", "name": "Highland Beach"},
        {"@type": "City", "name": "Delray Beach"},{"@type": "City", "name": "Gulf Stream"},
        {"@type": "City", "name": "Boynton Beach"},{"@type": "City", "name": "Deerfield Beach"},
        {"@type": "City", "name": "Coconut Creek"},{"@type": "City", "name": "Parkland"},
        {"@type": "City", "name": "Coral Springs"},{"@type": "City", "name": "Wellington"}
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
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Gated Country Club Community Fire Restoration"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Mizner-Era Historic Property Fire Restoration"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Content Pack-Out & Off-Site Cleaning"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Kitchen & Protein Fire Cleanup"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Lightning Strike & Electrical Fire Restoration"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Marine & Yacht Fire Cleanup"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Full Reconstruction & Rebuild"}}
        ]
      }
    },
    {
      "@type": "LocalBusiness","@id": "https://watermoldfire.net/boca-raton-fl/#localbusiness",
      "name": "Water Mold Fire Restoration of Boca Raton",
      "url": "https://watermoldfire.net/boca-raton-fl/",
      "telephone": "+1-561-401-0436","email": "bocaraton@watermoldfire.net",
      "address": {"@type": "PostalAddress","streetAddress": "6020 N Federal Highway","addressLocality": "Boca Raton","addressRegion": "FL","postalCode": "33487","addressCountry": "US"},
      "geo": {"@type": "GeoCoordinates","latitude": 26.4040,"longitude": -80.0805},
      "aggregateRating": {"@type": "AggregateRating","ratingValue": "5.0","reviewCount": "118"}
    },
    {
      "@type": "BreadcrumbList","@id": "https://watermoldfire.net/boca-raton-fl/fire-damage-restoration/#breadcrumb",
      "itemListElement": [
        {"@type": "ListItem","position": 1,"name": "Home","item": "https://watermoldfire.net/"},
        {"@type": "ListItem","position": 2,"name": "Boca Raton, FL","item": "https://watermoldfire.net/boca-raton-fl/"},
        {"@type": "ListItem","position": 3,"name": "Fire Damage Restoration","item": "https://watermoldfire.net/boca-raton-fl/fire-damage-restoration/"}
      ]
    },
    {
      "@type": "WebPage","@id": "https://watermoldfire.net/boca-raton-fl/fire-damage-restoration/#webpage",
      "url": "https://watermoldfire.net/boca-raton-fl/fire-damage-restoration/",
      "name": "Fire Damage Restoration in Boca Raton, FL",
      "isPartOf": {"@id": "https://watermoldfire.net/#website"},
      "about": {"@id": "https://watermoldfire.net/boca-raton-fl/fire-damage-restoration/#service"},
      "breadcrumb": {"@id": "https://watermoldfire.net/boca-raton-fl/fire-damage-restoration/#breadcrumb"},
      "inLanguage": "en-US"
    },
    {
      "@type": "FAQPage","@id": "https://watermoldfire.net/boca-raton-fl/fire-damage-restoration/#faq",
      "mainEntity": [
        {"@type": "Question","name": "How fast can you respond to a fire in Boca Raton?","acceptedAnswer": {"@type": "Answer","text": "Our Boca crews dispatch 24/7 from our facility on North Federal Highway near the Delray Beach border and target an on-site arrival of 60 minutes or less for emergency calls across Boca Raton, Highland Beach, Delray Beach and coastal Palm Beach County. For active scenes, we coordinate with Boca Raton Fire Rescue, Palm Beach County Fire Rescue, Delray Beach Fire Rescue, Highland Beach Fire Rescue, the relevant Broward department (Deerfield Beach, Coral Springs, Parkland Fire Rescue) or the City of Coconut Creek before any cleaning begins."}},
        {"@type": "Question","name": "Should I clean soot or smoke residue myself before you arrive?","acceptedAnswer": {"@type": "Answer","text": "No. Soot is acidic, oily and abrasive. Wiping with household cleaners or a damp cloth embeds it permanently into porous surfaces. Running the A/C after a fire spreads smoke residue throughout the building — particularly dangerous in high-rise condos where shared HVAC systems can cross-contaminate other units. Turn the HVAC off, leave the soot alone, and call us."}},
        {"@type": "Question","name": "Does Florida homeowners insurance cover fire damage in Boca Raton?","acceptedAnswer": {"@type": "Answer","text": "Fire is a named peril on virtually every Florida HO-3 policy and one of the most reliably covered residential losses. Your policy generally pays for structural repair, contents replacement and Additional Living Expenses (ALE) while you are displaced. Palm Beach County\'s insurance market has tightened since the 2022 reforms, but standard fire coverage on existing HO-3 policies remains intact. We work with Citizens and all remaining major carriers."}},
        {"@type": "Question","name": "Do you handle high-rise condo fires in Boca Raton?","acceptedAnswer": {"@type": "Answer","text": "Yes — and Boca\'s vertical condo stock along A1A, the oceanfront corridor and the gated country club towers makes high-rise fire and smoke cross-contamination a recurring category for us. A single-unit fire routinely deposits smoke residue into 8-20 neighboring units through shared HVAC stacks, common corridors and stairwell pressurization. We coordinate with Boca condo boards, property managers and the building\'s engineering staff for cross-unit cleanup."}},
        {"@type": "Question","name": "Do you handle marine and yacht fire losses?","acceptedAnswer": {"@type": "Answer","text": "Yes. Boca Raton\'s marinas — the Boca Raton Yacht & Tennis Club, Royal Palm Yacht Club, Lake Boca Raton and the surrounding coastal marinas in Delray and Highland Beach — produce a steady stream of engine-room, galley and shore-power fires. Marine fire residue is particularly difficult: oily, dense, highly corrosive in salt air. We handle marine fire cleanup routinely."}},
        {"@type": "Question","name": "How long does fire damage restoration take in Boca Raton?","acceptedAnswer": {"@type": "Answer","text": "Emergency stabilization in the first 24 to 72 hours. Cleaning, deodorization and content pack-out 1 to 3 weeks. Reconstruction is the longest phase — small kitchen fires might rebuild in 2 to 4 weeks; substantial structural losses run 3 to 6 months given Palm Beach County permit cycles and Boca\'s gated-community HOA architectural review requirements. Mizner-era and historic properties add finish-matching time for original tile roofs, plaster details and architectural elements."}},
        {"@type": "Question","name": "Why does my whole condo smell like smoke when only one unit burned?","acceptedAnswer": {"@type": "Answer","text": "In a Boca high-rise, smoke moves through shared HVAC stacks, vertical chases, common corridors and stairwell pressurization within minutes of a fire. Smoke also penetrates porous materials — drywall, fabric, wood, grout — and continues to off-gas for weeks or months. Real odor removal requires HVAC decontamination at the building level plus unit-by-unit cleaning and active odor neutralization, not just surface cleaning."}}
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
                Fire & Smoke Damage Restoration in Boca Raton, FL
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
                    <span>Boca Raton</span>
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
                                <h2 id="intro-h">24/7 Fire &amp; Smoke Damage Restoration in Boca Raton</h2>
                                <p>
                                A fire in Boca Raton doesn't stop being a fire once the
                                trucks leave. The structural damage is the obvious part;
                                the harder part is everything the fire left behind &mdash;
                                thousands of gallons of firefighting water soaking drywall
                                and flooring, acidic soot embedded in porous surfaces,
                                smoke odor migrating through HVAC systems into rooms (and
                                in high-rise condos, into other people's units) that never
                                touched flame, and a clock that's already started on
                                secondary mold growth in this subtropical climate. Water
                                Mold Fire Restoration of Boca Raton handles all of it, in
                                the right sequence: board-up first, water mitigation second,
                                soot and smoke cleaning third, odor neutralization, content
                                restoration, full reconstruction. Our crews follow the
                                IICRC S700 Standard for Professional Fire and Smoke Damage
                                Restoration and dispatch 24/7 from our facility on North
                                Federal Highway near the Delray Beach border.
                                </p>
                            </section>

                            <section class="local-context" aria-labelledby="local-h">
                                <h2 id="local-h">Why Boca Fires Need a Specialized Restoration Approach</h2>
                                <p>
                                Boca Raton fires have characteristics that inland and
                                Northeast losses simply do not. Our crews are built around
                                these conditions:
                                </p>
                                <ul class="listing">
                                    <li>
                                        <strong>High-rise condo smoke migration.</strong>
                                        Boca's high-rise condo density &mdash; the A1A oceanfront
                                        corridor, the Yacht Club towers, the gated country club
                                        mid-rise condos at Boca West, Polo Club, Stonebridge and
                                        Boca Pointe &mdash; means a fire in one unit deposits
                                        smoke residue into 8-20 neighboring units through shared
                                        HVAC stacks, common corridors and stairwell pressurization.
                                        Cross-unit cleanup, HOA coordination and freight-elevator
                                        scheduling become as critical as the actual cleaning. We
                                        handle multi-unit smoke restoration routinely.
                                    </li>
                                    <li>
                                        <strong>Gated country club community considerations.</strong>
                                        Boca West, Polo Club of Boca Raton, Stonebridge, Royal
                                        Palm Yacht and Country Club, Broken Sound, Woodfield,
                                        Boca Pointe, Saturnia, Bocaire and St. Andrews all carry
                                        HOA-managed property protocols, contractor approval
                                        requirements, gate-access coordination and architectural
                                        review for any visible exterior work. Fire damage scopes
                                        in these communities involve coordination layers that
                                        non-gated markets don't have.
                                    </li>
                                    <li>
                                        <strong>Florida lightning &amp; electrical ignitions.</strong>
                                        Florida is the lightning capital of the United States and
                                        Palm Beach County sees significant warm-season lightning
                                        activity. Lightning ignites attic fires, fries HVAC
                                        condensers, and triggers in-wall electrical fires &mdash;
                                        particularly in older single-family stock and 1980s
                                        gated-community construction with aging electrical
                                        systems.
                                    </li>
                                    <li>
                                        <strong>Mizner-era and Mediterranean Revival historic
                                        property fires.</strong>
                                        The original Mizner-designed homes in Old Floresta and
                                        Royal Palm, the Boca Raton Resort complex, and the
                                        surrounding 1920s Mediterranean Revival landmarks all have
                                        construction details &mdash; lath-and-plaster walls, tile
                                        roofs over wood framing, stucco-on-frame envelopes &mdash;
                                        that behave differently in fires and during cleanup than
                                        post-1990 CBS construction. Restoration in these properties
                                        requires coordination with City of Boca Raton Historic
                                        Preservation review for designated landmarks.
                                    </li>
                                    <li>
                                        <strong>Marine &amp; yacht fires.</strong>
                                        Boca Raton's marinas &mdash; the Boca Raton Yacht &amp;
                                        Tennis Club, Royal Palm Yacht Club, the Lake Boca Raton
                                        moorings and the surrounding coastal marinas in Delray
                                        and Highland Beach &mdash; produce a steady stream of
                                        engine-room, galley and shore-power fires. Marine fire
                                        residue is dense, oily and highly corrosive in salt air.
                                    </li>
                                    <li>
                                        <strong>Salt air accelerates soot corrosion.</strong>
                                        On coastal Boca properties &mdash; A1A oceanfront, Por La
                                        Mar, Spanish River, Highland Beach &mdash; fire soot
                                        combined with humid salt air begins corroding electronics,
                                        fixtures, appliances and metal trim within hours.
                                    </li>
                                    <li>
                                        <strong>Humidity-driven secondary mold.</strong>
                                        Firefighting water plus 75%+ ambient humidity is an open
                                        invitation for mold growth on wet, smoke-saturated framing
                                        and drywall. Every Boca fire job includes aggressive
                                        drying alongside the cleaning scope.
                                    </li>
                                </ul>
                            </section>

                            <section class="process" aria-labelledby="process-h">
                                <h2 id="process-h">Our Fire Damage Restoration Process</h2>
                                <ol>
                                    <li><strong>Emergency stabilization (Hour 1-24).</strong> Site safety walkthrough, board-up of openings, roof tarping over burn-throughs, securing the property.</li>
                                    <li><strong>Firefighting water mitigation (Hours 1-72).</strong> Extract, dry and dehumidify affected areas to prevent the mold problem that otherwise follows every Boca fire.</li>
                                    <li><strong>Soot and smoke residue removal.</strong> Smoke type identification (dry, wet, protein, fuel-based) drives the cleaning method.</li>
                                    <li><strong>HVAC decontamination.</strong> Air handlers, returns, supply trunks and registers. In high-rises this often extends to building-wide HVAC system cleaning coordinated with engineering.</li>
                                    <li><strong>Smoke odor neutralization.</strong> Thermal fogging, hydroxyl generators, ozone treatment.</li>
                                    <li><strong>Content pack-out.</strong> Salvageable contents inventoried, packed out, cleaned off-site.</li>
                                    <li><strong>Reconstruction.</strong> Framing, drywall, insulation, flooring, cabinetry, electrical, paint and finish carpentry. Palm Beach County and City of Boca Raton permitting handled in-house, with Historic Preservation coordination on Mizner-era properties.</li>
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
                                <h2 id="odor-h">Smoke Odor Removal in Boca Homes &amp; Condos</h2>
                                <p>
                                The most common complaint we hear from Boca homeowners weeks
                                after a fire is "everything looks fine, but I still smell
                                smoke." Smoke odor compounds embed in porous materials and
                                continue to off-gas for months. Surface cleaning addresses
                                only what's visible. Real odor removal requires breaking
                                down the odor molecule itself &mdash; thermal fogging,
                                hydroxyl generation, ozone treatment. We typically combine
                                modalities because one tool rarely handles a whole-house or
                                whole-unit odor scope on its own.
                                </p>
                            </section>

                            <section class="insurance" aria-labelledby="ins-h">
                                <h2 id="ins-h">Florida Fire Insurance &amp; ALE Coverage</h2>
                                <p>
                                Fire is a named peril on virtually every Florida HO-3 policy.
                                Most policies include structural repair (Coverage A), personal
                                property (Coverage C) and Additional Living Expenses (Coverage
                                D / ALE) for hotel, rental and meal costs while you cannot
                                live in the property. Palm Beach County's insurance market
                                has tightened since the 2022 reforms; many private carriers
                                have pulled back from coastal South Florida exposure, leaving
                                Citizens as the carrier for many Boca properties. Standard
                                fire coverage on existing policies remains intact. We work
                                with Citizens and all remaining major carriers.
                                </p>
                            </section>

                            <section class="service-area" aria-labelledby="area-h">
                                <h2 id="area-h">Where We Respond to Fire Damage in Boca Raton</h2>
                                <p>
                                Downtown / Mizner Park, Royal Palm Yacht &amp; Country Club,
                                Por La Mar, Spanish River, Boca Heights, Camino Gardens,
                                Boca Bath &amp; Tennis, Boca Pointe, Boca West, Polo Club,
                                Boca Country Club, Royal Palm Polo, Stonebridge, Sandalfoot
                                Cove, Boca Falls, The Oaks, Broken Sound, Woodfield,
                                Saturnia, Bocaire, St. Andrews, Old Floresta, FAU and west
                                Boca. Across Palm Beach County: Highland Beach, Delray Beach,
                                Gulf Stream, Boynton Beach, Wellington. Northern Broward:
                                Deerfield Beach, Coconut Creek, Parkland, Coral Springs,
                                Pompano Beach. We also handle marine fire losses across the
                                Boca Raton Yacht &amp; Tennis Club, Royal Palm Yacht Club,
                                Lake Boca Raton and surrounding marinas.
                                </p>
                            </section>

                            <section class="faq bg-light mb-4" aria-labelledby="faq-h">
                                <h2 id="faq-h">Boca Raton Fire Damage Restoration FAQs</h2>

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
                                                How fast can you respond to a fire in Boca Raton?
                                            </button>
                                        </h3>
                                        <div id="collapse_1"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_1"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>60-minute target on-site arrival across Boca, southern Palm Beach County and northern Broward. We coordinate with Boca Raton Fire Rescue, Palm Beach County Fire Rescue, Delray Beach Fire Rescue and the relevant municipal department before cleaning begins.</p>
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
                                                <p>No. Soot is acidic, oily and abrasive. Wiping embeds it permanently. Running the A/C spreads residue &mdash; particularly dangerous in high-rise condos with shared HVAC. Turn HVAC off, leave the soot alone, call us.</p>
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
                                                Does Florida homeowners insurance cover fire damage in Boca Raton?
                                            </button>
                                        </h3>
                                        <div id="collapse_3"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_3"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>Fire is named peril on virtually every Florida HO-3 policy. Coverage typically includes structural, contents and ALE while displaced. Palm Beach County market has tightened, but fire coverage on existing policies remains intact.</p>
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
                                                Do you handle high-rise condo fires in Boca Raton?
                                            </button>
                                        </h3>
                                        <div id="collapse_4"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_4"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>Yes. Boca's vertical condo stock makes cross-unit smoke contamination a recurring category. A single-unit fire deposits residue in 8-20 neighboring units through shared HVAC and stairwell pressurization. We coordinate with Boca condo boards and engineering staff.</p>
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
                                                Do you handle marine and yacht fire losses?
                                            </button>
                                        </h3>
                                        <div id="collapse_5"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_5"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>Yes. Boca Raton Yacht &amp; Tennis Club, Royal Palm Yacht Club, Lake Boca Raton marinas. Marine fire residue is dense, oily and corrosive in salt air. Routine work for our crews.</p>
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
                                                How long does fire damage restoration take in Boca Raton?
                                            </button>
                                        </h3>
                                        <div id="collapse_6"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_6"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>Stabilization 24-72 hours. Cleaning and deodorization 1-3 weeks. Reconstruction 2 weeks to 6 months depending on scope, Palm Beach County permit cycles, and gated-community HOA architectural review. Mizner-era properties add finish-matching time.</p>
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
                                                Why does my whole condo smell like smoke when only one unit burned?
                                            </button>
                                        </h3>
                                        <div id="collapse_7"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_7"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>Smoke moves through shared HVAC stacks, vertical chases, corridors and stairwell pressurization within minutes. Smoke compounds penetrate porous materials and off-gas for weeks. HVAC decontamination plus active odor neutralization is required.</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                
                            </section>

                            <section class="contact" aria-labelledby="contact-h">
                                <h2 id="contact-h">Call Boca's Fire &amp; Smoke Damage Restoration Team</h2>
                                <address>
                                    <strong>Water Mold Fire Restoration of Boca Raton</strong><br>
                                    6020 N Federal Highway<br>
                                    Boca Raton, FL 33487<br>
                                    <a href="tel:+15614010436">561-401-0436</a> &middot;
                                    <a href="mailto:bocaraton@watermoldfire.net">bocaraton@watermoldfire.net</a><br>
                                    24/7 Emergency Service
                                </address>
                                <p>
                                Active fire, recent fire, or a high-rise unit that just
                                burned and smoked yours out?
                                <a class="cta" href="tel:+15614010436">Call 561-401-0436</a>
                                and a crew will be on the way before the structure has
                                finished cooling.
                                </p>
                                <p class="back-to-hub">
                                &larr; Back to <a href="<?php echo site_url("boca-raton-fl/"); ?>">all Boca Raton restoration services</a>
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