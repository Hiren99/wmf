<?php
require_once __DIR__ . '/../includes/init.php';

$pagename = "jacksonville-fl/fire-damage-restoration.php";

$title = "Fire Damage Restoration in Jacksonville, FL | 24/7 Smoke &amp; Odor Removal";

$meta_description = "24/7 fire & smoke damage restoration in Jacksonville. Lightning, kitchen, electrical & condo fires. Board-up, soot, odor removal. IICRC certified. 904-839-0449.";

$meta_keywords = "fire damage restoration jacksonville, fire damage repair jacksonville, fire damage cleanup, fire restoration company jacksonville, house fire restoration, smoke damage restoration jacksonville, smoke damage cleanup, soot removal jacksonville, smoke odor removal, smoke damage repair";

$canonical_url = "https://watermoldfire.net/jacksonville-fl/fire-damage-restoration/";

$geo_tags = '
<meta name="geo.region" content="US-FL">
<meta name="geo.placename" content="Jacksonville">
<meta name="geo.position" content="30.2200;-81.5570">
<meta name="ICBM" content="30.2200, -81.5570">
';

$open_graph = '
<meta property="og:type" content="website">
<meta property="og:site_name" content="Water Mold Fire Restoration">
<meta property="og:title" content="Fire Damage Restoration in Jacksonville, FL | 24/7 Smoke &amp; Odor Removal">
<meta property="og:description" content="Emergency fire & smoke damage cleanup in Jacksonville. Lightning, kitchen, electrical and condo fires. Board-up, soot removal, odor neutralization. 24/7 dispatch.">
<meta property="og:url" content="https://watermoldfire.net/jacksonville-fl/fire-damage-restoration/">
<meta property="og:image" content="'.site_url().'images/logo.webp">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="og:locale" content="en_US">
';

$twitter = '
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Fire Damage Restoration in Jacksonville, FL">
<meta name="twitter:description" content="24/7 fire & smoke damage cleanup in Jacksonville. Lightning, kitchen and condo fires.">
<meta name="twitter:image" content="'.site_url().'images/logo.webp">
';

$schema_ld_json = '
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "@id": "https://watermoldfire.net/jacksonville-fl/fire-damage-restoration/#service",
      "name": "Fire & Smoke Damage Restoration in Jacksonville, FL",
      "serviceType": ["Fire Damage Restoration","Smoke Damage Restoration","Soot Removal","Fire & Smoke Odor Removal"],
      "description": "24/7 emergency fire and smoke damage restoration in Jacksonville, FL. Emergency board-up, firefighting water mitigation, soot and smoke residue removal, odor neutralization, HVAC decontamination, content pack-out and full reconstruction for lightning fires, kitchen fires, electrical fires, Beaches condo cross-unit smoke contamination, Riverside / Avondale historic property fires and Mayport / JaxNAS area work across Duval County and the Beaches.",
      "url": "https://watermoldfire.net/jacksonville-fl/fire-damage-restoration/",
      "provider": {"@id": "https://watermoldfire.net/jacksonville-fl/#localbusiness"},
      "areaServed": [
        {"@type": "City", "name": "Jacksonville"},{"@type": "City", "name": "Jacksonville Beach"},
        {"@type": "City", "name": "Atlantic Beach"},{"@type": "City", "name": "Neptune Beach"},
        {"@type": "City", "name": "Ponte Vedra Beach"},{"@type": "City", "name": "Orange Park"},
        {"@type": "City", "name": "Fleming Island"},{"@type": "City", "name": "Saint Augustine"},
        {"@type": "City", "name": "Fernandina Beach"},{"@type": "City", "name": "Yulee"}
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
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Lightning Strike & Electrical Fire Restoration"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Beaches Condo Cross-Unit Smoke Cleanup"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Riverside / Avondale Historic Property Fire Restoration"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Kitchen & Protein Fire Cleanup"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Marine & Yacht Fire Cleanup"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Content Pack-Out & Off-Site Cleaning"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Full Reconstruction & Rebuild"}}
        ]
      }
    },
    {
      "@type": "LocalBusiness","@id": "https://watermoldfire.net/jacksonville-fl/#localbusiness",
      "name": "Water Mold Fire Restoration of Jacksonville",
      "url": "https://watermoldfire.net/jacksonville-fl/",
      "telephone": "+1-904-839-0449","email": "jacksonville@watermoldfire.net",
      "address": {"@type": "PostalAddress","streetAddress": "[STREET ADDRESS TO BE PROVIDED]","addressLocality": "Jacksonville","addressRegion": "FL","postalCode": "32256","addressCountry": "US"},
      "geo": {"@type": "GeoCoordinates","latitude": 30.2200,"longitude": -81.5570},
      "aggregateRating": {"@type": "AggregateRating","ratingValue": "5.0","reviewCount": "118"}
    },
    {
      "@type": "BreadcrumbList","@id": "https://watermoldfire.net/jacksonville-fl/fire-damage-restoration/#breadcrumb",
      "itemListElement": [
        {"@type": "ListItem","position": 1,"name": "Home","item": "https://watermoldfire.net/"},
        {"@type": "ListItem","position": 2,"name": "Jacksonville, FL","item": "https://watermoldfire.net/jacksonville-fl/"},
        {"@type": "ListItem","position": 3,"name": "Fire Damage Restoration","item": "https://watermoldfire.net/jacksonville-fl/fire-damage-restoration/"}
      ]
    },
    {
      "@type": "WebPage","@id": "https://watermoldfire.net/jacksonville-fl/fire-damage-restoration/#webpage",
      "url": "https://watermoldfire.net/jacksonville-fl/fire-damage-restoration/",
      "name": "Fire Damage Restoration in Jacksonville, FL",
      "isPartOf": {"@id": "https://watermoldfire.net/#website"},
      "about": {"@id": "https://watermoldfire.net/jacksonville-fl/fire-damage-restoration/#service"},
      "breadcrumb": {"@id": "https://watermoldfire.net/jacksonville-fl/fire-damage-restoration/#breadcrumb"},
      "inLanguage": "en-US"
    },
    {
      "@type": "FAQPage","@id": "https://watermoldfire.net/jacksonville-fl/fire-damage-restoration/#faq",
      "mainEntity": [
        {"@type": "Question","name": "How fast can you respond to a fire in Jacksonville?","acceptedAnswer": {"@type": "Answer","text": "Our Jacksonville crews dispatch 24/7 from our Southside facility and target an on-site arrival of 60 minutes or less for emergency calls across Duval County, the Beaches and the surrounding Northeast Florida counties. For active scenes, we coordinate with Jacksonville Fire & Rescue Department (JFRD), the Beaches fire departments (Jacksonville Beach, Atlantic Beach, Neptune Beach), St. Johns County Fire Rescue or the relevant municipal department before any cleaning begins."}},
        {"@type": "Question","name": "Should I clean soot or smoke residue myself before you arrive?","acceptedAnswer": {"@type": "Answer","text": "No. Soot is acidic, oily and abrasive. Wiping with household cleaners or a damp cloth embeds it permanently into porous surfaces. Running the A/C after a fire spreads smoke residue throughout the building — particularly dangerous in Beaches high-rise condos where shared HVAC systems can cross-contaminate other units. Turn the HVAC off, leave the soot alone, and call us."}},
        {"@type": "Question","name": "Does Florida homeowners insurance cover fire damage?","acceptedAnswer": {"@type": "Answer","text": "Fire is a named peril on virtually every Florida HO-3 policy and one of the most reliably covered residential losses. Your policy generally pays for structural repair, contents replacement and Additional Living Expenses (ALE) while you are displaced. Florida\'s insurance market has tightened since the 2022 reforms, but fire coverage on standard HO-3 policies remains intact."}},
        {"@type": "Question","name": "Do you handle lightning-strike fire damage in Jacksonville?","acceptedAnswer": {"@type": "Answer","text": "Yes. Florida is the lightning capital of the United States and Jacksonville sees significant warm-season lightning activity, particularly during the May-October convective season. Lightning ignites attic fires (often smoldering for hours before producing visible flame), fries HVAC condensers and air handlers, and triggers in-wall electrical fires — particularly in older single-family stock in Arlington, the older Southside and the pre-WWII historic districts with aging electrical systems."}},
        {"@type": "Question","name": "Do you handle Beaches condo fires?","acceptedAnswer": {"@type": "Answer","text": "Yes. Jacksonville Beach, Atlantic Beach, Neptune Beach and Ponte Vedra Beach oceanfront and intracoastal high-rise condo stock has shared HVAC stacks, common corridors and stairwell pressurization that move smoke between units within minutes of a fire. We coordinate with Beaches condo boards and property managers for cross-unit cleanup."}},
        {"@type": "Question","name": "Do you handle marine and yacht fire losses?","acceptedAnswer": {"@type": "Answer","text": "Yes. Jacksonville\'s marina capacity along the St. Johns River, the Intracoastal Waterway, the Beaches docks, Mayport and Fernandina Beach produces a steady stream of engine-room, galley and shore-power fires. Marine fire residue is dense, oily and corrosive in salt air."}},
        {"@type": "Question","name": "How long does fire damage restoration take in Jacksonville?","acceptedAnswer": {"@type": "Answer","text": "Emergency stabilization in the first 24 to 72 hours. Cleaning, deodorization and content pack-out 1 to 3 weeks. Reconstruction 2 weeks to 6 months depending on scope and the relevant building department permit timing. Historic Riverside / Avondale / Springfield / San Marco properties add Historic Preservation review time for envelope-affecting work."}}
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
                Fire & Smoke Damage Restoration in Jacksonville, FL
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
                    <span>Jacksonville</span>
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
                                <h2 id="intro-h">24/7 Fire &amp; Smoke Damage Restoration in Jacksonville</h2>
                                <p>
                                A fire in Jacksonville doesn't stop being a fire once the
                                trucks leave. The structural damage is the obvious part;
                                the harder part is everything the fire left behind &mdash;
                                firefighting water soaking drywall and flooring, acidic
                                soot embedded in porous surfaces, smoke odor migrating
                                through HVAC systems into rooms (and in Beaches high-rise
                                condos, into other people's units) that never touched
                                flame, and a clock that's already started on secondary
                                mold growth in Northeast Florida's humid subtropical
                                climate. Water Mold Fire Restoration of Jacksonville
                                handles all of it, in the right sequence: board-up first,
                                water mitigation second, soot and smoke cleaning third,
                                odor neutralization, content restoration, full
                                reconstruction. Our crews follow the IICRC S700 Standard
                                for Professional Fire and Smoke Damage Restoration and
                                dispatch 24/7 from our Southside Jacksonville facility.
                                </p>
                            </section>

                            <section class="local-context" aria-labelledby="local-h">
                                <h2 id="local-h">Why Jacksonville Fires Need a Specialized Restoration Approach</h2>
                                <ul class="listing">
                                    <li>
                                        <strong>Florida lightning &amp; electrical ignitions.</strong>
                                        Florida is the lightning capital of the United States;
                                        Jacksonville sits in a high-strike corridor with
                                        significant warm-season activity. Lightning ignites attic
                                        fires, fries HVAC condensers, and triggers in-wall
                                        electrical fires &mdash; particularly in older
                                        single-family stock and pre-WWII historic district
                                        properties.
                                    </li>
                                    <li>
                                        <strong>Beaches condo cross-unit smoke migration.</strong>
                                        Jacksonville Beach, Atlantic Beach, Neptune Beach and
                                        Ponte Vedra Beach oceanfront high-rise condo stock has
                                        shared HVAC stacks, common corridors and stairwell
                                        pressurization that move smoke between units within
                                        minutes. A single-unit fire deposits residue into 8-20
                                        neighboring units. Cross-unit cleanup and HOA coordination
                                        are recurring scopes.
                                    </li>
                                    <li>
                                        <strong>Riverside / Avondale / Springfield / San Marco
                                        historic property fires.</strong>
                                        Pre-WWII Jacksonville historic stock has lath-and-plaster
                                        walls, original tile and slate roofs, and stucco-on-frame
                                        envelopes that behave differently in fires and during
                                        restoration than post-1990 CBS construction. Historic
                                        Preservation coordination may be required for
                                        envelope-affecting reconstruction.
                                    </li>
                                    <li>
                                        <strong>Vintage electrical in pre-WWII stock.</strong>
                                        Original or partially-upgraded knob-and-tube, ungrounded
                                        outlets and undersized service panels in Riverside,
                                        Avondale, Springfield, San Marco and older Murray Hill
                                        stock fail under sustained heating load and produce
                                        electrical-origin fires.
                                    </li>
                                    <li>
                                        <strong>Marine &amp; yacht fires.</strong>
                                        Jacksonville's marina capacity along the St. Johns River,
                                        the Intracoastal Waterway, the Beaches docks, Mayport and
                                        the Naval Station area produces engine-room, galley and
                                        shore-power fires. Marine fire residue is oily, dense and
                                        corrosive in salt air.
                                    </li>
                                    <li>
                                        <strong>Salt air accelerates soot corrosion.</strong>
                                        On coastal Jacksonville properties &mdash; Beaches,
                                        Intracoastal, river-corridor &mdash; fire soot combined
                                        with humid salt air begins corroding electronics, fixtures
                                        and metal trim within hours.
                                    </li>
                                    <li>
                                        <strong>Humidity-driven secondary mold.</strong>
                                        Firefighting water plus 75%+ ambient humidity is an open
                                        invitation for mold growth. Every Jacksonville fire job
                                        includes aggressive drying alongside the cleaning scope.
                                    </li>
                                </ul>
                            </section>

                            <section class="process" aria-labelledby="process-h">
                                <h2 id="process-h">Our Fire Damage Restoration Process</h2>
                                <ol>
                                    <li><strong>Emergency stabilization (Hour 1-24).</strong> Site safety, board-up, roof tarping, securing the property.</li>
                                    <li><strong>Firefighting water mitigation (Hours 1-72).</strong> Extract, dry and dehumidify to prevent secondary mold.</li>
                                    <li><strong>Soot and smoke residue removal.</strong> Smoke type identification drives the cleaning method.</li>
                                    <li><strong>HVAC decontamination.</strong> Air handlers, returns, supply trunks and registers. Beaches condo work often extends to building-wide HVAC system cleaning.</li>
                                    <li><strong>Smoke odor neutralization.</strong> Thermal fogging, hydroxyl generators, ozone treatment.</li>
                                    <li><strong>Content pack-out.</strong> Salvageable contents inventoried, packed out, cleaned off-site.</li>
                                    <li><strong>Reconstruction.</strong> Framing, drywall, insulation, flooring, cabinetry, electrical, paint and finish carpentry. Permitting through the City of Jacksonville Building Inspection Division with Historic Preservation coordination on historic-district properties.</li>
                                </ol>
                            </section>

                            <section class="smoke-types" aria-labelledby="smoke-h">
                                <h2 id="smoke-h">The Types of Smoke We Clean</h2>
                                <ul class="listing">
                                    <li><strong>Dry smoke.</strong> High-temperature, fast-burning fires. Powdery residue. Easiest to clean.</li>
                                    <li><strong>Wet smoke.</strong> Smoldering fires with plastics, rubber, synthetic upholstery. Dense, sticky residue. Hardest to clean.</li>
                                    <li><strong>Protein smoke.</strong> Kitchen fires. Invisible residue, pervasive odor. Specialized degreasing chemistry.</li>
                                    <li><strong>Fuel oil &amp; petroleum smoke.</strong> Vehicle, boat-engine and generator fires.</li>
                                </ul>
                            </section>

                            <section class="odor" aria-labelledby="odor-h">
                                <h2 id="odor-h">Smoke Odor Removal in Jacksonville Homes</h2>
                                <p>
                                Smoke odor compounds embed in porous materials and continue
                                to off-gas for months. Surface cleaning addresses only
                                what's visible. Real odor removal requires breaking down
                                the odor molecule itself &mdash; thermal fogging, hydroxyl
                                generation, ozone treatment. We typically combine
                                modalities because one tool rarely handles a whole-house
                                odor scope on its own.
                                </p>
                            </section>

                            <section class="insurance" aria-labelledby="ins-h">
                                <h2 id="ins-h">Florida Fire Insurance &amp; ALE Coverage</h2>
                                <p>
                                Fire is a named peril on virtually every Florida HO-3 policy.
                                Most policies include structural repair (Coverage A),
                                personal property (Coverage C) and Additional Living
                                Expenses (Coverage D / ALE) for hotel, rental and meal
                                costs while you cannot live in the property. Florida's
                                market has tightened since 2022, but fire coverage on
                                standard HO-3 remains intact. We work with all the major
                                Florida carriers.
                                </p>
                            </section>

                            <section class="service-area" aria-labelledby="area-h">
                                <h2 id="area-h">Where We Respond to Fire Damage in Jacksonville</h2>
                                <p>
                                Riverside, Avondale, Springfield, San Marco, San Jose,
                                Ortega, Downtown, LaVilla, Brooklyn, Mandarin, Bayard,
                                Baymeadows, Deerwood, Tinseltown, Arlington, Eastside, the
                                Westside. <strong>Beaches:</strong> Jacksonville Beach,
                                Atlantic Beach, Neptune Beach, Mayport, Ponte Vedra Beach.
                                <strong>Surrounding counties:</strong> Orange Park, Fleming
                                Island, St. Johns, Ponte Vedra, St. Augustine, Fernandina
                                Beach, Yulee. We also handle marine fire losses across St.
                                Johns River, Intracoastal Waterway, Beaches docks, Mayport
                                and Fernandina Beach marinas.
                                </p>
                            </section>

                            <section class="faq bg-light mb-4" aria-labelledby="faq-h">
                                <h2 id="faq-h">Jacksonville Fire Damage Restoration FAQs</h2>

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
                                                How fast can you respond to a fire in Jacksonville?
                                            </button>
                                        </h3>
                                        <div id="collapse_1"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_1"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>60-minute target arrival across Duval County, the Beaches and surrounding counties. We coordinate with JFRD, Beaches fire departments, St. Johns County Fire Rescue or the relevant municipal department.</p>
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
                                                <p>No. Soot embeds permanently. Running HVAC spreads residue — particularly dangerous in Beaches high-rise condos. Turn HVAC off, leave soot alone, call us.</p>
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
                                                <p>Fire is named peril on virtually every Florida HO-3 policy. Coverage includes structural, contents and ALE.</p>
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
                                                Do you handle lightning-strike fire damage in Jacksonville?
                                            </button>
                                        </h3>
                                        <div id="collapse_4"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_4"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>Yes. Florida is the lightning capital of the US. Lightning ignites attic fires, fries HVAC, triggers in-wall electrical fires — particularly in older single-family and pre-WWII historic stock.</p>
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
                                                Do you handle Beaches condo fires?
                                            </button>
                                        </h3>
                                        <div id="collapse_5"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_5"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>Yes. Beaches oceanfront and intracoastal high-rise condo stock has shared HVAC stacks that distribute smoke. We coordinate with Beaches condo boards and property managers.</p>
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
                                                Do you handle marine and yacht fire losses?
                                            </button>
                                        </h3>
                                        <div id="collapse_6"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_6"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>Yes. St. Johns River, Intracoastal, Beaches docks, Mayport, Fernandina Beach marinas. Marine fire residue is dense, oily, corrosive in salt air.</p>
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
                                                How long does fire damage restoration take in Jacksonville?
                                            </button>
                                        </h3>
                                        <div id="collapse_7"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_7"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>Stabilization 24-72 hours. Cleaning and deodorization 1-3 weeks. Reconstruction 2 weeks to 6 months. Historic-district properties add HPO review time.</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </section>

                            <section class="contact" aria-labelledby="contact-h">
                                <h2 id="contact-h">Call Jacksonville's Fire &amp; Smoke Damage Restoration Team</h2>
                                <address>
                                    <strong>Water Mold Fire Restoration of Jacksonville</strong><br>
                                    Jacksonville, FL 32256<br>
                                    <a href="tel:+19048390449">904-839-0449</a> &middot;
                                    <a href="mailto:jacksonville@watermoldfire.net">jacksonville@watermoldfire.net</a><br>
                                    24/7 Emergency Service
                                </address>
                                <p>
                                Active fire, lightning-strike fire damage, kitchen fire or
                                Beaches condo unit fire that smoked yours out?
                                <a class="cta" href="tel:+19048390449">Call 904-839-0449</a>
                                and a crew will be on the way before the structure has
                                finished cooling.
                                </p>
                                <p class="back-to-hub">
                                &larr; Back to <a href="<?php echo site_url("jacksonville-fl/"); ?>">all Jacksonville restoration services</a>
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