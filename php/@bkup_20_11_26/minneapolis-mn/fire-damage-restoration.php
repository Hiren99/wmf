<?php
require_once __DIR__ . '/../includes/init.php';

$pagename = "minneapolis-mn/fire-damage-restoration.php";

$title = "Fire Damage Restoration in Minneapolis, MN | 24/7 Smoke &amp; Odor Removal";

$meta_description = "24/7 fire & smoke damage restoration in Minneapolis. Heating, electrical, kitchen, duplex & lake cabin fires. Board-up, soot, odor removal. IICRC Firm. Call 651-395-7036.";

$meta_keywords = "fire damage restoration minneapolis, fire damage repair minneapolis, fire damage cleanup, fire restoration company minneapolis, house fire restoration, smoke damage restoration minneapolis, smoke damage cleanup, soot removal minneapolis, smoke odor removal, smoke damage repair";

$canonical_url = "https://watermoldfire.net/minneapolis-mn/fire-damage-restoration/";

$geo_tags = '
<meta name="geo.region" content="US-MN">
<meta name="geo.placename" content="Minneapolis">
<meta name="geo.position" content="45.0050;-93.2470">
<meta name="ICBM" content="45.0050, -93.2470">
';

$open_graph = '
<meta property="og:type" content="website">
<meta property="og:site_name" content="Water Mold Fire Restoration">
<meta property="og:title" content="Fire Damage Restoration in Minneapolis, MN | 24/7 Smoke &amp; Odor Removal">
<meta property="og:description" content="Emergency fire, smoke and odor restoration in Minneapolis. Heating-season fires, electrical, kitchen and lake cabin fires. IICRC Firm Certified. 24/7 dispatch.">
<meta property="og:url" content="https://watermoldfire.net/minneapolis-mn/fire-damage-restoration/">
<meta property="og:image" content="'.site_url().'images/logo.webp">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="og:locale" content="en_US">
';

$twitter = '
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Fire Damage Restoration in Minneapolis, MN">
<meta name="twitter:description" content="24/7 fire, smoke & odor damage cleanup in the Twin Cities. Heating, electrical, kitchen and lake cabin fires.">
<meta name="twitter:image" content="'.site_url().'images/logo.webp">
';

$schema_ld_json = '
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "@id": "https://watermoldfire.net/minneapolis-mn/fire-damage-restoration/#service",
      "name": "Fire Damage Restoration, Smoke & Odor Removal in Minneapolis, MN",
      "serviceType": ["Fire Damage Restoration","Smoke Damage Restoration","Soot Removal","Fire & Smoke Odor Removal"],
      "description": "24/7 emergency fire and smoke damage restoration in Minneapolis, MN. Emergency board-up and tarping, firefighting water mitigation, soot and smoke residue removal, odor neutralization, HVAC decontamination, content pack-out and full reconstruction for heating-season furnace and space-heater fires, electrical fires, kitchen fires, duplex and condo cross-unit smoke contamination, lake cabin fires and wood-burning stove and fireplace fires across the Twin Cities. IICRC Firm Certified.",
      "url": "https://watermoldfire.net/minneapolis-mn/fire-damage-restoration/",
      "provider": {"@id": "https://watermoldfire.net/minneapolis-mn/#localbusiness"},
      "areaServed": [
        {"@type": "City", "name": "Minneapolis"},{"@type": "City", "name": "Saint Paul"},
        {"@type": "City", "name": "Edina"},{"@type": "City", "name": "Bloomington"},
        {"@type": "City", "name": "Eden Prairie"},{"@type": "City", "name": "Minnetonka"},
        {"@type": "City", "name": "Plymouth"},{"@type": "City", "name": "Maple Grove"},
        {"@type": "City", "name": "St. Louis Park"},{"@type": "City", "name": "Roseville"}
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
        "name": "Fire & Smoke Damage Restoration Services",
        "itemListElement": [
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Emergency Board-Up & Roof Tarping"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Firefighting Water Damage Mitigation"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Soot & Smoke Residue Removal"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Smoke Odor Neutralization (Thermal Fogging, Hydroxyl, Ozone)"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "HVAC & Air Duct Smoke Decontamination"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Heating-Season Furnace & Space-Heater Fire Cleanup"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Wood-Burning Stove & Fireplace Fire Restoration"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Electrical & Knob-and-Tube Wiring Fire Restoration"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Kitchen & Protein Fire Cleanup"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Northeast Minneapolis Duplex Cross-Unit Smoke Cleanup"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Downtown High-Rise Condo Cross-Unit Smoke Cleanup"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Lake Cabin Fire Restoration"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Historic Bungalow & Foursquare Fire Restoration"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Content Pack-Out & Off-Site Cleaning"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Full Reconstruction & Rebuild"}}
        ]
      }
    },
    {
      "@type": "LocalBusiness","@id": "https://watermoldfire.net/minneapolis-mn/#localbusiness",
      "name": "Water Mold Fire Restoration of Minneapolis",
      "url": "https://watermoldfire.net/minneapolis-mn/",
      "telephone": "+1-651-395-7036","email": "minneapolis@watermoldfire.net",
      "address": {"@type": "PostalAddress","streetAddress": "1920 Central Ave NE","addressLocality": "Minneapolis","addressRegion": "MN","postalCode": "55418","addressCountry": "US"},
      "geo": {"@type": "GeoCoordinates","latitude": 45.0050,"longitude": -93.2470},
      "aggregateRating": {"@type": "AggregateRating","ratingValue": "5.0","reviewCount": "118"}
    },
    {
      "@type": "BreadcrumbList","@id": "https://watermoldfire.net/minneapolis-mn/fire-damage-restoration/#breadcrumb",
      "itemListElement": [
        {"@type": "ListItem","position": 1,"name": "Home","item": "https://watermoldfire.net/"},
        {"@type": "ListItem","position": 2,"name": "Minneapolis, MN","item": "https://watermoldfire.net/minneapolis-mn/"},
        {"@type": "ListItem","position": 3,"name": "Fire Damage Restoration","item": "https://watermoldfire.net/minneapolis-mn/fire-damage-restoration/"}
      ]
    },
    {
      "@type": "WebPage","@id": "https://watermoldfire.net/minneapolis-mn/fire-damage-restoration/#webpage",
      "url": "https://watermoldfire.net/minneapolis-mn/fire-damage-restoration/",
      "name": "Fire Damage Restoration in Minneapolis, MN",
      "isPartOf": {"@id": "https://watermoldfire.net/#website"},
      "about": {"@id": "https://watermoldfire.net/minneapolis-mn/fire-damage-restoration/#service"},
      "breadcrumb": {"@id": "https://watermoldfire.net/minneapolis-mn/fire-damage-restoration/#breadcrumb"},
      "inLanguage": "en-US"
    },
    {
      "@type": "FAQPage","@id": "https://watermoldfire.net/minneapolis-mn/fire-damage-restoration/#faq",
      "mainEntity": [
        {"@type": "Question","name": "How fast can you respond to a fire in Minneapolis?","acceptedAnswer": {"@type": "Answer","text": "Our Minneapolis crews dispatch 24/7 from our facility on Central Avenue NE in Northeast Minneapolis and target an on-site arrival of 60 minutes or less for emergency calls across the Twin Cities. For active scenes, we coordinate with the Minneapolis Fire Department, Saint Paul Fire Department, Edina Fire Department, Bloomington Fire Department or the relevant suburban department before any cleaning begins."}},
        {"@type": "Question","name": "Why are fires more common in Minneapolis during winter?","acceptedAnswer": {"@type": "Answer","text": "The Twin Cities heating-season fire risk is structural and seasonal. Polar vortex cold drives sustained furnace operation, sharply increased space heater use, dryer-vent buildup from heavy fabric loads, wood-burning stove and fireplace use, and holiday-season candles and decorative lighting. The Minneapolis winter is longer and more severe than Chicago\'s, which extends the heating-fire window from late October through early April. Pre-WWII Northeast Minneapolis duplexes, South Minneapolis bungalows and American Foursquares often still carry original or partially-upgraded electrical systems (knob-and-tube, ungrounded outlets, undersized service panels) that fail under sustained heating load. Minneapolis Fire Department residential fire volume peaks every winter."}},
        {"@type": "Question","name": "Should I clean soot or smoke residue myself before you arrive?","acceptedAnswer": {"@type": "Answer","text": "No. Soot is acidic, oily and abrasive. Wiping with household cleaners or a damp cloth embeds it permanently into porous surfaces — drywall, wood, fabric, grout. Running the furnace or air handler after a fire spreads smoke residue throughout the building. In a Northeast Minneapolis duplex with shared HVAC or interior connecting stairs, that spread can cross into the neighbor\'s unit within hours. Turn the HVAC off, leave the soot alone, and call us."}},
        {"@type": "Question","name": "Does Minnesota homeowners insurance cover fire damage?","acceptedAnswer": {"@type": "Answer","text": "Fire is a named peril on virtually every Minnesota HO-3 policy and one of the most reliably covered residential losses. Your policy generally pays for structural repair, contents replacement and Additional Living Expenses (ALE) while you are displaced. Minnesota insurance market conditions are stable, and standard homeowners fire coverage remains intact across the major carriers. We work with all the major Minnesota carriers."}},
        {"@type": "Question","name": "Do you handle fires in Northeast Minneapolis duplexes and triplexes?","acceptedAnswer": {"@type": "Answer","text": "Yes — and it is one of our most frequent Twin Cities categories. The duplex and triplex stock that defines Logan Park, Marshall Terrace, Sheridan, Audubon Park, Holland, Windom Park and most of the older Northeast Minneapolis blocks shares interior connecting stairwells, common HVAC chases, party walls and (in some buildings) shared utility rooms. A fire in one unit deposits smoke residue into the unit above or below through these shared paths. We routinely coordinate with both owners, the property manager and (where applicable) any condominium association for multi-unit cleanup."}},
        {"@type": "Question","name": "Do you handle lake cabin fires?","acceptedAnswer": {"@type": "Answer","text": "Yes. Cabin fires around Lake Minnetonka, White Bear Lake, Forest Lake, the Brainerd Lakes corridor and the smaller suburban lakes are a recurring seasonal category. Wood-burning stoves, fireplace inserts, propane heaters and original-era electrical systems in older cabin stock are all ignition sources. We coordinate with the relevant lake-area fire department and dispatch crews directly to cabin properties for stabilization, cleanup and reconstruction."}},
        {"@type": "Question","name": "How long does fire damage restoration take in a Minneapolis home?","acceptedAnswer": {"@type": "Answer","text": "Emergency stabilization in the first 24 to 72 hours. Cleaning, deodorization and content pack-out 1 to 3 weeks. Reconstruction is the longest phase — small kitchen fires might rebuild in 2 to 4 weeks; substantial structural losses run 3 to 6 months given Minneapolis or Saint Paul Department of Buildings permit timing and the lead times on vintage finish-matching for Twin Cities bungalows, Foursquares and pre-WWII trim work."}},
        {"@type": "Question","name": "Why does my whole building smell like smoke when only one unit burned?","acceptedAnswer": {"@type": "Answer","text": "In a Northeast Minneapolis duplex or triplex, downtown condo, Mill District loft or downtown Saint Paul condo, smoke moves through shared HVAC chases, common stairwells, party-wall penetrations and (in tightly-stacked vintage buildings) gap leakage between framing bays within minutes of a fire. Smoke also penetrates porous materials — drywall, fabric, wood, grout — and continues to off-gas for weeks or months. Real odor removal requires HVAC decontamination at the building level plus unit-by-unit cleaning and active odor neutralization, not just surface cleaning."}},
        {"@type": "Question","name": "What about smoke odor that won\'t go away?","acceptedAnswer": {"@type": "Answer","text": "Smoke odor compounds embed in porous materials and continue to off-gas for weeks or months. Surface cleaning addresses only what\'s visible. Real odor removal requires breaking down the odor molecule itself through thermal fogging, hydroxyl generation and ozone treatment. We typically combine modalities because one tool rarely handles a whole-unit odor scope on its own. Vintage Twin Cities plaster walls, original wood subfloors and the dense framing of duplexes and bungalows hold smoke odor especially stubbornly and benefit from extended treatment cycles."}}
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
                Fire & Smoke Damage Restoration in Minneapolis, MN
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
                    <span>Minneapolis</span>
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
                                <h2 id="intro-h">24/7 Fire Damage Restoration, Smoke &amp; Odor Removal in Minneapolis</h2>
                                <p>
                                A fire in Minneapolis doesn't stop being a fire once the trucks
                                leave. The structural damage is the obvious part; the harder
                                part is everything the fire left behind &mdash; thousands of
                                gallons of firefighting water soaking plaster walls and
                                hardwood floors, acidic soot embedded in porous surfaces,
                                smoke odor migrating through HVAC chases and party walls into
                                neighboring units of a Northeast Minneapolis duplex or
                                downtown condo, and a clock that has already started on
                                secondary mold growth in the wet framing and drywall. Water
                                Mold Fire Restoration of Minneapolis handles all of it, in the
                                right sequence: board-up first, water mitigation second, soot
                                and smoke cleaning third, odor neutralization, content
                                restoration, full reconstruction. Our crews are
                                <strong>IICRC Firm Certified</strong>, follow the IICRC S700
                                industry standard for fire and smoke damage restoration, and
                                dispatch 24/7 from our facility on Central Avenue NE in
                                Northeast Minneapolis.
                                </p>
                            </section>

                            <section class="local-context" aria-labelledby="local-h">
                                <h2 id="local-h">Why Twin Cities Fires Need a Specialized Restoration Approach</h2>
                                <p>
                                Minneapolis fires have characteristics that warm-weather and
                                year-round mild-climate losses simply do not. Our crews are
                                built around these conditions:
                                </p>
                                <ul class="listing">
                                    <li>
                                        <strong>Heating-season ignition sources (Oct&ndash;Apr).</strong>
                                        Twin Cities residential fire volume peaks every winter, and
                                        the Minneapolis heating season runs longer than Chicago's
                                        &mdash; from late October through early April. Polar vortex
                                        cold (late January 2019, February 2021, January 2024) drives
                                        sustained furnace operation, sharply increased space heater
                                        use, dryer-vent buildup from heavy fabric loads, and
                                        holiday-season candles and decorative lighting. Wood-burning
                                        stoves and fireplace use add another increment in older
                                        Northeast Minneapolis duplexes, South Minneapolis bungalows,
                                        Saint Paul Victorians and lake cabins across the metro.
                                    </li>
                                    <li>
                                        <strong>Vintage knob-and-tube and ungrounded wiring.</strong>
                                        Twin Cities pre-1940 housing stock &mdash; Northeast
                                        Minneapolis duplexes and triplexes, South Minneapolis
                                        bungalows, American Foursquares across both cities, Saint
                                        Paul Victorians in Summit Hill and Macalester-Groveland,
                                        Crocus Hill rowhouses &mdash; was originally wired with
                                        knob-and-tube electrical systems. Many buildings have been
                                        partially upgraded to modern Romex or conduit, but pockets
                                        of original knob-and-tube remain in attics, behind walls
                                        and in ceiling boxes citywide. Splices in junction boxes
                                        degrade over a century of thermal cycling and become
                                        arcing-fault ignition sources.
                                    </li>
                                    <li>
                                        <strong>Northeast Minneapolis duplex &amp; triplex cross-unit
                                        smoke contamination.</strong>
                                        Northeast Minneapolis's distinctive duplex and triplex stock
                                        shares interior connecting stairs, common HVAC chases, party
                                        walls and (in many buildings) shared utility rooms. A fire
                                        in the garden unit deposits smoke residue into the first
                                        and second floors through these shared paths within minutes.
                                        We work multi-unit cross-contamination scenarios regularly
                                        and coordinate between owners, property managers and condo
                                        associations.
                                    </li>
                                    <li>
                                        <strong>Downtown high-rise condo &amp; Mill District loft
                                        smoke migration.</strong>
                                        Downtown Minneapolis, the North Loop, the Mill District and
                                        downtown Saint Paul condo stock all see cross-unit smoke
                                        contamination through shared HVAC stacks, common corridors
                                        and stairwell pressurization. A single-unit fire routinely
                                        deposits smoke residue into multiple neighboring units.
                                        Cross-unit cleanup, HOA coordination and freight-elevator
                                        scheduling become as critical as the actual cleaning. Mill
                                        District loft conversions in century-old brick-and-timber
                                        flour mills hold smoke residue differently than modern
                                        construction and require modified cleaning chemistries.
                                    </li>
                                    <li>
                                        <strong>Wood-burning stoves &amp; fireplace fires.</strong>
                                        Older Twin Cities housing stock and the lake-cabin inventory
                                        ringing Minnetonka, White Bear Lake and Forest Lake all
                                        carry wood-burning heating sources that produce a steady
                                        baseline of chimney fires, creosote ignitions, hearth
                                        burnouts and stovepipe failures. We handle these alongside
                                        the broader heating-season fire category.
                                    </li>
                                    <li>
                                        <strong>Kitchen and protein fires.</strong>
                                        Year-round category, but the Twin Cities' dense restaurant
                                        scene (Northeast Minneapolis, North Loop, Uptown,
                                        Eat Street, downtown Saint Paul) produces a steady stream
                                        of commercial-kitchen fire calls alongside the residential
                                        Thanksgiving-and-holiday-season volume. Protein-fire smoke
                                        is invisible and pervasive and requires specialized
                                        degreasing chemistry.
                                    </li>
                                    <li>
                                        <strong>Lake cabin fires.</strong>
                                        Cabins around Lake Minnetonka, White Bear Lake, Forest Lake,
                                        the Brainerd Lakes corridor and smaller suburban lakes are
                                        a recurring seasonal category. Wood-burning stoves, fireplace
                                        inserts, propane heaters and original-era electrical systems
                                        in older cabin stock are all ignition sources. Many cabins
                                        are unoccupied much of the year, which extends discovery
                                        time and produces larger losses.
                                    </li>
                                    <li>
                                        <strong>Firefighting water + mold risk.</strong>
                                        Fire suppression releases thousands of gallons of water that
                                        soaks framing, drywall, insulation, hardwood floors and
                                        plaster walls. In Twin Cities vintage construction with
                                        thick plaster and dense framing &mdash; and in cold ambient
                                        temperatures that slow evaporation &mdash; that water doesn't
                                        dry out passively. Every Minneapolis fire job includes
                                        aggressive drying alongside the cleaning scope, often with
                                        supplemental heat in winter conditions, to prevent the mold
                                        problem that otherwise follows on a 48-72 hour clock.
                                    </li>
                                </ul>
                            </section>

                            <section class="process" aria-labelledby="process-h">
                                <h2 id="process-h">Our Fire Damage Restoration Process</h2>
                                <ol>
                                    <li><strong>Emergency stabilization (Hour 1-24).</strong> Site safety walkthrough, board-up of openings, roof tarping over burn-throughs, securing the property against Minneapolis winter weather exposure.</li>
                                    <li><strong>Firefighting water mitigation (Hours 1-72).</strong> Extract, dry and dehumidify affected areas to prevent the mold problem that otherwise follows every fire. Winter jobs add supplemental heat to support evaporation in cold ambient conditions.</li>
                                    <li><strong>Soot and smoke residue removal.</strong> Smoke type identification (dry, wet, protein, fuel-based) drives the cleaning method.</li>
                                    <li><strong>HVAC decontamination.</strong> Air handlers, returns, supply trunks and registers &mdash; critical in Northeast Minneapolis duplexes and downtown condos where smoke travels through shared HVAC paths.</li>
                                    <li><strong>Smoke odor neutralization.</strong> Thermal fogging, hydroxyl generators, ozone treatment.</li>
                                    <li><strong>Content pack-out.</strong> Salvageable contents inventoried, packed out, cleaned off-site.</li>
                                    <li><strong>Reconstruction.</strong> Framing, drywall, plaster repair, insulation, hardwood floor refinishing, cabinetry, electrical, paint and finish carpentry, coordinated with licensed Twin Cities trade subcontractors and properly permitted through the relevant city building department.</li>
                                </ol>
                            </section>

                            <section class="smoke-types" aria-labelledby="smoke-h">
                                <h2 id="smoke-h">The Types of Smoke We Clean</h2>
                                <ul class="listing">
                                    <li><strong>Dry smoke.</strong> High-temperature, fast-burning fires (paper, wood, electrical attic fires). Powdery residue. Easiest to clean.</li>
                                    <li><strong>Wet smoke.</strong> Smoldering fires with plastics, rubber, synthetic upholstery, roofing materials. Dense, sticky, smeary residue. Hardest to clean.</li>
                                    <li><strong>Protein smoke.</strong> Kitchen fires (grease, protein-based foods). Invisible residue, pervasive odor. Specialized degreasing chemistry required.</li>
                                    <li><strong>Fuel oil &amp; petroleum smoke.</strong> Furnace, water heater, oil-tank and generator fires. Oily residues, aggressive solvent cleaning.</li>
                                    <li><strong>Creosote &amp; wood-stove smoke.</strong> Wood-burning stove and fireplace fires. Dense, oily, deeply-staining residue that penetrates plaster and grout.</li>
                                </ul>
                            </section>

                            <section class="odor" aria-labelledby="odor-h">
                                <h2 id="odor-h">Smoke Odor Removal in Twin Cities Homes</h2>
                                <p>
                                The most common complaint we hear from Minneapolis homeowners
                                weeks after a fire is "everything looks fine, but I still
                                smell smoke." Smoke odor compounds embed in porous materials
                                and continue to off-gas for months. Surface cleaning addresses
                                only what's visible. Real odor removal requires breaking down
                                the odor molecule itself &mdash; thermal fogging, hydroxyl
                                generation, ozone treatment. We typically combine modalities
                                because one tool rarely handles a whole-house or whole-unit
                                odor scope on its own. Vintage Twin Cities plaster walls,
                                original wood subfloors and the dense framing of Northeast
                                Minneapolis duplexes and South Minneapolis bungalows hold
                                smoke odor especially stubbornly and benefit from extended
                                hydroxyl treatment cycles.
                                </p>
                            </section>

                            <section class="insurance" aria-labelledby="ins-h">
                                <h2 id="ins-h">Minnesota Fire Insurance &amp; ALE Coverage</h2>
                                <p>
                                Fire is a named peril on virtually every Minnesota HO-3 policy.
                                Most policies include structural repair (Coverage A), personal
                                property (Coverage C) and Additional Living Expenses (Coverage
                                D / ALE) for hotel, rental and meal costs while you cannot
                                live in the property. Minnesota insurance market conditions
                                are stable &mdash; no hurricane-driven carrier exodus,
                                consistent rate structure across the major carriers &mdash;
                                and standard homeowners fire coverage remains intact. We work
                                with all the major Minnesota carriers and coordinate directly
                                with your adjuster.
                                </p>
                            </section>

                            <section class="service-area" aria-labelledby="area-h">
                                <h2 id="area-h">Where We Respond to Fire Damage in the Twin Cities</h2>
                                <p>
                                All of Minneapolis (Northeast, Downtown, North Loop, Mill
                                District, Loring Park, Uptown, Whittier, Lyn-Lake, Powderhorn,
                                Phillips, Cedar-Riverside, U of M area, Como, Prospect Park,
                                Seward, Longfellow, Nokomis, Linden Hills, Lake Harriet, Bde
                                Maka Ska, Kenwood, Lowry Hill, Bryn Mawr, Camden, Near North,
                                Folwell, the bungalow belt). All of Saint Paul (Summit Hill,
                                Macalester-Groveland, Highland Park, Crocus Hill, Como,
                                Frogtown, Saint Anthony Park, Hamline-Midway, the East Side).
                                Suburban Edina, Saint Louis Park, Bloomington, Eden Prairie,
                                Minnetonka, Wayzata, Plymouth, Maple Grove, Brooklyn Park,
                                Roseville, Richfield, Eagan, Burnsville, Apple Valley,
                                Woodbury, and lake-cabin properties around Lake Minnetonka,
                                White Bear Lake and Forest Lake.
                                </p>
                            </section>

                            <section class="faq bg-light mb-4" aria-labelledby="faq-h">
                                <h2 id="faq-h">Minneapolis Fire Damage Restoration FAQs</h2>

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
                                                How fast can you respond to a fire in Minneapolis?
                                            </button>
                                        </h3>
                                        <div id="collapse_1"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_1"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>60-minute target on-site arrival across the Twin Cities. We coordinate with the Minneapolis Fire Department, Saint Paul FD, Edina FD, Bloomington FD or the relevant suburban department before cleaning begins.</p>
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
                                                Why are fires more common in Minneapolis during winter?
                                            </button>
                                        </h3>
                                        <div id="collapse_2"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_2"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>Heating-season ignition sources spike from late October through early April: sustained furnace operation, space heater use, dryer-vent buildup, wood-burning stoves and fireplaces, holiday-season candles, and stressed vintage knob-and-tube and ungrounded electrical systems in pre-WWII housing.</p>
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
                                                Should I clean soot or smoke residue myself before you arrive?
                                            </button>
                                        </h3>
                                        <div id="collapse_3"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_3"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>No. Soot is acidic, oily and abrasive. Wiping embeds it permanently. Running the furnace or air handler after a fire spreads residue &mdash; particularly dangerous in duplexes and condos with shared chases. Turn HVAC off, leave the soot alone, call us.</p>
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
                                                Does Minnesota homeowners insurance cover fire damage?
                                            </button>
                                        </h3>
                                        <div id="collapse_4"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_4"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>Fire is named peril on virtually every Minnesota HO-3 policy. Coverage typically includes structural, contents and ALE while displaced. Minnesota market conditions are stable.</p>
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
                                                Do you handle fires in Northeast Minneapolis duplexes and triplexes?
                                            </button>
                                        </h3>
                                        <div id="collapse_5"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_5"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>Yes &mdash; one of our most frequent categories. Shared interior stairs, HVAC chases and party walls deposit smoke residue into neighboring units within minutes. We coordinate between owners, property managers and condo associations for multi-unit cleanup.</p>
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
                                                Do you handle lake cabin fires?
                                            </button>
                                        </h3>
                                        <div id="collapse_6"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_6"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>Yes. Lake Minnetonka, White Bear Lake, Forest Lake, the Brainerd Lakes corridor. Wood-burning stoves, fireplace inserts, propane heaters and original-era electrical are common ignition sources. We dispatch directly to cabin properties for stabilization, cleanup and reconstruction.</p>
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
                                                How long does fire damage restoration take in a Minneapolis home?
                                            </button>
                                        </h3>
                                        <div id="collapse_7"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_7"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>Stabilization 24-72 hours. Cleaning and deodorization 1-3 weeks. Reconstruction 2 weeks to 6 months depending on scope and Minneapolis or Saint Paul Department of Buildings permit timing.</p>
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
                                                Why does my whole building smell like smoke when only one unit burned?
                                            </button>
                                        </h3>
                                        <div id="collapse_8"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_8"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>Smoke moves through shared HVAC, stairwells, party-wall penetrations and gap leakage within minutes. Smoke compounds embed in porous materials and off-gas for weeks. HVAC decontamination plus active odor neutralization required at the building level.</p>
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
                                                What about smoke odor that won't go away?
                                            </button>
                                        </h3>
                                        <div id="collapse_9"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_9"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>Embeds in porous materials and off-gases for weeks/months. Real odor removal requires breaking down the odor molecule itself through thermal fogging, hydroxyl generation and ozone &mdash; typically in combination.</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </section>

                            <section class="contact" aria-labelledby="contact-h">
                                <h2 id="contact-h">Call Minneapolis's Fire Damage, Smoke &amp; Odor Removal Team</h2>
                                <address>
                                    <strong>Water Mold Fire Restoration of Minneapolis</strong><br>
                                    1920 Central Avenue NE<br>
                                    Minneapolis, MN 55418<br>
                                    <a href="tel:+16513957036">651-395-7036</a> &middot;
                                    <a href="mailto:minneapolis@watermoldfire.net">minneapolis@watermoldfire.net</a><br>
                                    24/7 Emergency Service<br>
                                    IICRC Firm Certified
                                </address>
                                <p>
                                Active fire, recent fire, duplex unit fire that smoked you
                                out, kitchen fire, wood-stove or fireplace fire, or lake cabin
                                fire anywhere in the Twin Cities?
                                <a class="cta" href="tel:+16513957036">Call 651-395-7036</a>
                                and a crew will be on the way before the structure has finished
                                cooling.
                                </p>
                                <p class="back-to-hub">
                                &larr; Back to <a href="<?php echo site_url("minneapolis-mn/"); ?>">all Minneapolis restoration services</a>
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