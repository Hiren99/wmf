<?php
require_once __DIR__ . '/../includes/init.php';

$pagename = "albuquerque-nm/fire-damage-restoration.php";

$title = "Fire Damage Restoration in Albuquerque, NM | 24/7 Smoke &amp; Odor Removal";

$meta_description = "24/7 fire & smoke damage restoration in Albuquerque. Wildland-urban interface, kiva fireplace, kitchen, electrical & heating fires. Board-up, soot, odor removal. IICRC Firm. 505-312-4758.";

$meta_keywords = "fire damage restoration albuquerque, fire damage repair albuquerque, fire damage cleanup, fire restoration company albuquerque, house fire restoration, smoke damage restoration albuquerque, smoke damage cleanup, soot removal albuquerque, smoke odor removal, smoke damage repair";

$canonical_url = "https://watermoldfire.net/albuquerque-nm/fire-damage-restoration/";

$geo_tags = '
<meta name="geo.region" content="US-NM">
<meta name="geo.placename" content="Albuquerque">
<meta name="geo.position" content="35.0780;-106.6320">
<meta name="ICBM" content="35.0780, -106.6320">
';

$open_graph = '
<meta property="og:type" content="website">
<meta property="og:site_name" content="Water Mold Fire Restoration">
<meta property="og:title" content="Fire Damage Restoration in Albuquerque, NM | 24/7 Smoke &amp; Odor Removal">
<meta property="og:description" content="Emergency fire, smoke and odor restoration in Albuquerque. Wildland-urban interface, kiva fireplace, kitchen, electrical and heating-season fires. IICRC Firm Certified. 24/7 dispatch.">
<meta property="og:url" content="https://watermoldfire.net/albuquerque-nm/fire-damage-restoration/">
<meta property="og:image" content="'.site_url().'images/logo.webp">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="og:locale" content="en_US">
';

$twitter = '
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Fire Damage Restoration in Albuquerque, NM">
<meta name="twitter:description" content="24/7 fire, smoke & odor damage cleanup in ABQ. Wildland-urban interface, kiva fireplace, kitchen and electrical fires.">
<meta name="twitter:image" content="'.site_url().'images/logo.webp">
';

$schema_ld_json = '
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "@id": "https://watermoldfire.net/albuquerque-nm/fire-damage-restoration/#service",
      "name": "Fire Damage Restoration, Smoke & Odor Removal in Albuquerque, NM",
      "serviceType": ["Fire Damage Restoration","Smoke Damage Restoration","Soot Removal","Fire & Smoke Odor Removal","Wildfire Smoke Damage"],
      "description": "24/7 emergency fire and smoke damage restoration in Albuquerque, NM. Emergency board-up and tarping, firefighting water mitigation, soot and smoke residue removal, odor neutralization, HVAC and swamp cooler duct decontamination, content pack-out and full reconstruction for wildland-urban interface fires along the Sandia foothills and East Mountains, kiva fireplace and chimney fires, heating-season furnace and space-heater fires, electrical fires in older Huning Highland and Nob Hill stock, kitchen fires, regional wildfire smoke intrusion events, adobe and stucco property fires, and condo and high-rise fires across the City, Bernalillo County and the metro. IICRC Firm Certified.",
      "url": "https://watermoldfire.net/albuquerque-nm/fire-damage-restoration/",
      "provider": {"@id": "https://watermoldfire.net/albuquerque-nm/#localbusiness"},
      "areaServed": [
        {"@type": "City", "name": "Albuquerque"},{"@type": "City", "name": "Rio Rancho"},
        {"@type": "City", "name": "Corrales"},{"@type": "City", "name": "Bernalillo"},
        {"@type": "City", "name": "Placitas"},{"@type": "City", "name": "Tijeras"},
        {"@type": "City", "name": "Cedar Crest"},{"@type": "City", "name": "Los Lunas"},
        {"@type": "City", "name": "Belen"},{"@type": "City", "name": "Edgewood"}
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
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "HVAC & Swamp Cooler Duct Smoke Decontamination"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Wildland-Urban Interface Fire Restoration"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Regional Wildfire Smoke Damage Cleanup"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Kiva Fireplace & Chimney Fire Cleanup"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Heating-Season Furnace & Space-Heater Fire Cleanup"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Electrical & Vintage Wiring Fire Restoration"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Kitchen & Protein Fire Cleanup"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Adobe, Pueblo Revival & Stucco Property Fire Restoration"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Condo & High-Rise Smoke Cleanup"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Content Pack-Out & Off-Site Cleaning"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Full Reconstruction & Rebuild"}}
        ]
      }
    },
    {
      "@type": "LocalBusiness","@id": "https://watermoldfire.net/albuquerque-nm/#localbusiness",
      "name": "Water Mold Fire Restoration of Albuquerque",
      "url": "https://watermoldfire.net/albuquerque-nm/",
      "telephone": "+1-505-312-4758","email": "albuquerque@watermoldfire.net",
      "address": {"@type": "PostalAddress","streetAddress": "1925 Coal Place SE","addressLocality": "Albuquerque","addressRegion": "NM","postalCode": "87106","addressCountry": "US"},
      "geo": {"@type": "GeoCoordinates","latitude": 35.0780,"longitude": -106.6320},
      "aggregateRating": {"@type": "AggregateRating","ratingValue": "5.0","reviewCount": "118"}
    },
    {
      "@type": "BreadcrumbList","@id": "https://watermoldfire.net/albuquerque-nm/fire-damage-restoration/#breadcrumb",
      "itemListElement": [
        {"@type": "ListItem","position": 1,"name": "Home","item": "https://watermoldfire.net/"},
        {"@type": "ListItem","position": 2,"name": "Albuquerque, NM","item": "https://watermoldfire.net/albuquerque-nm/"},
        {"@type": "ListItem","position": 3,"name": "Fire Damage Restoration","item": "https://watermoldfire.net/albuquerque-nm/fire-damage-restoration/"}
      ]
    },
    {
      "@type": "WebPage","@id": "https://watermoldfire.net/albuquerque-nm/fire-damage-restoration/#webpage",
      "url": "https://watermoldfire.net/albuquerque-nm/fire-damage-restoration/",
      "name": "Fire Damage Restoration in Albuquerque, NM",
      "isPartOf": {"@id": "https://watermoldfire.net/#website"},
      "about": {"@id": "https://watermoldfire.net/albuquerque-nm/fire-damage-restoration/#service"},
      "breadcrumb": {"@id": "https://watermoldfire.net/albuquerque-nm/fire-damage-restoration/#breadcrumb"},
      "inLanguage": "en-US"
    },
    {
      "@type": "FAQPage","@id": "https://watermoldfire.net/albuquerque-nm/fire-damage-restoration/#faq",
      "mainEntity": [
        {"@type": "Question","name": "How fast can you respond to a fire in Albuquerque?","acceptedAnswer": {"@type": "Answer","text": "Our Albuquerque crews dispatch 24/7 from our Huning Highland facility on Coal Place SE and target an on-site arrival of 60 minutes or less for emergency calls across the City of Albuquerque, Bernalillo County, Rio Rancho and the inner East Mountains. For active scenes, we coordinate with Albuquerque Fire Rescue (AFR), Bernalillo County Fire Department, Rio Rancho Fire Rescue, the relevant East Mountain volunteer fire department or the New Mexico State Forestry Division for wildland-urban interface incidents before any cleaning begins."}},
        {"@type": "Question","name": "Do Albuquerque homes face wildland-urban interface fire risk?","acceptedAnswer": {"@type": "Answer","text": "Yes — and the risk is significant for properties along the Sandia foothills (Glenwood Hills, Heritage East, Tanoan, Sandia Heights, Four Hills), in the Bosque cottonwood forest corridor along the Rio Grande, and out into the East Mountains (Tijeras, Sandia Park, Cedar Crest, San Antonito). The 2022 Hermits Peak/Calf Canyon Fire became the largest wildfire in New Mexico history at over 340,000 acres, and the 2011 Las Conchas Fire (over 156,000 acres) burned within sight of populated areas. While neither directly entered Albuquerque, both produced regional smoke events that impacted indoor air quality across the metro for weeks. Drought conditions, fuel loads in the Sandias and ongoing climate volatility keep wildland-urban interface fire risk elevated, and properties in the foothills and East Mountains carry meaningful exposure."}},
        {"@type": "Question","name": "Do you handle wildfire smoke intrusion in Albuquerque homes?","acceptedAnswer": {"@type": "Answer","text": "Yes. Regional wildfire smoke events — from New Mexico fires, from fires in Arizona, Colorado and California carried by upper-level winds, and from prescribed burns in the Sandias — push smoke and ash particulates into ABQ homes through swamp cooler intake (a major exposure pathway in this market), HVAC systems, windows and door seals, and roof and wall penetrations. The resulting indoor smoke contamination requires HVAC and duct decontamination, swamp cooler pad replacement and unit cleaning, content cleaning, and odor neutralization. We respond to wildfire smoke damage calls throughout the fire season (typically April through October in the Southwest) and during major regional events at any time of year."}},
        {"@type": "Question","name": "Why are kiva fireplace and chimney fires a recurring Albuquerque category?","acceptedAnswer": {"@type": "Answer","text": "Kiva fireplaces — the corner adobe or stucco fireplaces that are an architectural signature across ABQ adobe, pueblo revival, territorial and southwest-style homes — and the chimney systems that serve them present specific fire-restoration considerations. Creosote buildup in irregularly-shaped flues, mortar joint failures in pre-WWII chimneys, and inadequate spark arrestor maintenance produce chimney fires that can spread to wood vigas and roof framing. The ash and smoke residue from a kiva fireplace fire is dense, deeply staining and difficult to remove from the surrounding adobe or stucco surfaces. We handle kiva fireplace cleanup, chimney-fire damage and chimney rebuild coordination as a recurring ABQ specialty."}},
        {"@type": "Question","name": "Should I clean soot or smoke residue myself before you arrive?","acceptedAnswer": {"@type": "Answer","text": "No. Soot is acidic, oily and abrasive. Wiping with household cleaners or a damp cloth embeds it permanently into porous surfaces — drywall, wood, fabric, grout, original adobe and stucco surfaces. Running the swamp cooler or HVAC system after a fire spreads smoke residue throughout the building and into adjacent rooms. Turn the swamp cooler and HVAC off, leave the soot alone, and call us."}},
        {"@type": "Question","name": "Does New Mexico homeowners insurance cover fire damage?","acceptedAnswer": {"@type": "Answer","text": "Fire is a named peril on virtually every New Mexico HO-3 policy and one of the most reliably covered residential losses. Your policy generally pays for structural repair, contents replacement and Additional Living Expenses (ALE) while you are displaced. New Mexico\'s insurance market has tightened for properties in wildland-urban interface zones along the Sandia foothills and East Mountains following the 2022 Hermits Peak/Calf Canyon Fire and subsequent regional fire activity; some carriers have raised premiums, increased deductibles, or limited new policies for high-exposure properties. But standard fire coverage on existing HO-3 policies remains intact. We work with all the major New Mexico carriers."}},
        {"@type": "Question","name": "Do you handle fires in adobe, pueblo revival and stucco homes?","acceptedAnswer": {"@type": "Answer","text": "Yes. Adobe construction, pueblo revival, territorial style and stucco-and-frame homes all behave differently from frame-and-drywall modern construction during a fire and during restoration. Solid adobe walls are fire-resistant on the exterior surface but transmit heat to vigas, latillas and interior framing in ways that can produce hidden structural damage above and behind the fire scene. Stucco-on-frame walls hold smoke and soot residue differently than drywall and require specialized cleaning. Vigas (exposed ceiling beams) and latillas (decorative ceiling decking) hold smoke odor along grain patterns and benefit from extended hydroxyl treatment. Reconstruction in adobe and pueblo revival properties requires careful coordination with the construction style and (in historic districts) with the City of Albuquerque Landmarks Commission."}},
        {"@type": "Question","name": "How long does fire damage restoration take in an Albuquerque home?","acceptedAnswer": {"@type": "Answer","text": "Emergency stabilization in the first 24 to 72 hours. Cleaning, deodorization and content pack-out 1 to 3 weeks. Reconstruction is the longest phase — small kitchen fires might rebuild in 2 to 4 weeks; substantial structural losses run 3 to 6 months given City of Albuquerque Planning Department or Bernalillo County permit timing and the lead times on vintage finish-matching for adobe, pueblo revival and pre-WWII Huning Highland and Nob Hill stock. Historic-district properties add Landmarks Commission review time for envelope-affecting work."}},
        {"@type": "Question","name": "What about smoke odor that won\'t go away?","acceptedAnswer": {"@type": "Answer","text": "Smoke odor compounds embed in porous materials and continue to off-gas for weeks or months. Surface cleaning addresses only what\'s visible. Real odor removal requires breaking down the odor molecule itself through thermal fogging, hydroxyl generation and ozone treatment. We typically combine modalities because one tool rarely handles a whole-house odor scope on its own. Adobe walls, original wood vigas and latillas, and the dense framing of pre-WWII Huning Highland and Nob Hill stock hold smoke odor especially stubbornly and benefit from extended treatment cycles."}}
      ]
    }
  ]
}
</script>
';

require_once __DIR__ . '/../includes/header.php';
?>

    <!-- ===== HERO ===== -->
    <section class="hero-section cdalbuquerque-nm">
        <div class="hero-content">
            <!-- Main Heading -->
            <h1 class="hero-title">
                Fire & Smoke Damage Restoration in Albuquerque, NM
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
                    <span>Albuquerque</span>
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
                                <h2 id="intro-h">24/7 Fire Damage Restoration, Smoke &amp; Odor Removal in Albuquerque</h2>
                                <p>
                                A fire in Albuquerque doesn't stop being a fire once the
                                trucks leave. The structural damage is the obvious part; the
                                harder part is everything the fire left behind &mdash; the
                                firefighting water soaking adobe walls and ceiling vigas,
                                acidic soot embedded in porous stucco and original wood
                                surfaces, smoke odor migrating through swamp cooler ducts
                                and HVAC systems into rooms that never touched flame, and a
                                clock that has already started on secondary mold growth in
                                the wet framing and drywall. Water Mold Fire Restoration of
                                Albuquerque handles all of it, in the right sequence: board-up
                                first, water mitigation second, soot and smoke cleaning
                                third, odor neutralization, content restoration, full
                                reconstruction. Our crews are <strong>IICRC Firm
                                Certified</strong>, follow the IICRC S700 industry standard
                                for fire and smoke damage restoration, and dispatch 24/7
                                from our facility on Coal Place SE in the Huning Highland
                                area near downtown.
                                </p>
                            </section>

                            <section class="local-context" aria-labelledby="local-h">
                                <h2 id="local-h">Why Albuquerque Fires Need a Specialized Restoration Approach</h2>
                                <p>
                                Albuquerque fires have characteristics that wetter-climate
                                and non-southwest markets simply do not. Our crews are built
                                around these conditions:
                                </p>
                                <ul class="listing">
                                    <li>
                                        <strong>Wildland-urban interface fire exposure.</strong>
                                        Properties along the Sandia foothills (Glenwood Hills,
                                        Heritage East, Tanoan, Sandia Heights, Four Hills), in the
                                        Bosque cottonwood forest corridor along the Rio Grande, and
                                        out into the East Mountains (Tijeras, Sandia Park, Cedar
                                        Crest, San Antonito) carry meaningful wildland-urban
                                        interface fire risk. The 2022 Hermits Peak/Calf Canyon
                                        Fire became the largest wildfire in New Mexico history at
                                        over 340,000 acres; the 2011 Las Conchas Fire burned over
                                        156,000 acres within sight of populated areas. Drought
                                        conditions, fuel loads and climate volatility keep the
                                        risk elevated. WUI fire restoration combines structural
                                        rebuild scopes with extensive ember-driven envelope damage,
                                        outbuilding losses, vehicle damage and (in the worst cases)
                                        whole-property losses that require ground-up reconstruction.
                                    </li>
                                    <li>
                                        <strong>Regional wildfire smoke intrusion.</strong>
                                        Even when fires aren't burning near Albuquerque, regional
                                        wildfire smoke from New Mexico, Arizona, Colorado and
                                        California events pushes smoke and ash particulates into
                                        ABQ homes through swamp cooler intake, HVAC systems,
                                        windows and door seals. The 2022 Hermits Peak smoke
                                        events, the 2020 California-Oregon-Colorado fire-season
                                        smoke and the recurring spring fire-season smoke from
                                        prescribed and wildfire activity all produce indoor air
                                        quality impacts citywide. Restoration requires HVAC and
                                        duct decontamination, swamp cooler pad replacement and
                                        cleaning, content cleaning and odor neutralization.
                                    </li>
                                    <li>
                                        <strong>Kiva fireplace and chimney fires.</strong>
                                        Kiva fireplaces &mdash; the corner adobe or stucco
                                        fireplaces that are an architectural signature of ABQ
                                        adobe, pueblo revival, territorial and southwest-style
                                        homes &mdash; produce a steady baseline of chimney fires.
                                        Creosote buildup in irregularly-shaped flues, mortar joint
                                        failures in pre-WWII chimneys, and inadequate spark
                                        arrestor maintenance allow fires to spread to wood vigas
                                        and roof framing. Kiva fireplace ash and smoke residue is
                                        dense, deeply staining and difficult to remove from
                                        adobe and stucco surfaces.
                                    </li>
                                    <li>
                                        <strong>Heating-season ignition sources (Oct&ndash;Mar).</strong>
                                        Albuquerque winters drive sustained furnace operation,
                                        increased space heater use, dryer-vent buildup, and kiva
                                        fireplace and wood-burning stove use. Holiday-season
                                        candles and decorative lighting add another increment. The
                                        city's pre-WWII Huning Highland and Nob Hill stock often
                                        still carries original or partially-upgraded electrical
                                        systems that fail under sustained heating load.
                                    </li>
                                    <li>
                                        <strong>Vintage electrical wiring in older ABQ stock.</strong>
                                        Huning Highland Historic District, Nob Hill, Country Club
                                        and the older North Valley properties carry pre-WWII
                                        construction with original or partially-upgraded electrical
                                        systems. Knob-and-tube wiring, ungrounded outlets and
                                        undersized service panels are common, and splices in
                                        junction boxes degrade over a century of thermal cycling
                                        and become arcing-fault ignition sources.
                                    </li>
                                    <li>
                                        <strong>Adobe, pueblo revival &amp; stucco fire behavior.</strong>
                                        Adobe construction is fire-resistant on the exterior
                                        surface but transmits heat to vigas, latillas and interior
                                        framing in ways that can produce hidden structural damage
                                        above and behind the visible fire scene. Stucco-on-frame
                                        walls hold smoke and soot residue differently than drywall.
                                        Vigas and latillas hold smoke odor along grain patterns.
                                        Restoration in adobe and pueblo revival properties requires
                                        approaches adapted to the construction.
                                    </li>
                                    <li>
                                        <strong>Kitchen and protein fires.</strong>
                                        Year-round category. Restaurants in Nob Hill, Downtown,
                                        Old Town, EDo, the Sawmill District, the North Valley and
                                        the Heights produce a steady stream of commercial-kitchen
                                        fire calls alongside the residential
                                        Thanksgiving-and-holiday-season volume. Protein-fire smoke
                                        is invisible and pervasive and requires specialized
                                        degreasing chemistry.
                                    </li>
                                    <li>
                                        <strong>Firefighting water + mold risk.</strong>
                                        Fire suppression releases thousands of gallons of water
                                        that soak framing, drywall, insulation, vigas, latillas
                                        and adobe walls. Even in ABQ's dry climate, trapped
                                        moisture behind finishes seeds mold within 48 hours. Every
                                        ABQ fire job includes aggressive drying alongside the
                                        cleaning scope.
                                    </li>
                                    <li>
                                        <strong>Coordination with AFR and regional departments.</strong>
                                        For active scenes we coordinate with Albuquerque Fire
                                        Rescue (AFR), Bernalillo County Fire Department, Rio
                                        Rancho Fire Rescue, the relevant East Mountain volunteer
                                        fire department or the New Mexico State Forestry Division
                                        for wildland-urban interface incidents.
                                    </li>
                                </ul>
                            </section>

                            <section class="wildfire" aria-labelledby="wildfire-h">
                                <h2 id="wildfire-h">Wildland-Urban Interface &amp; Regional Wildfire Smoke Cleanup</h2>
                                <p>
                                New Mexico's wildfire seasons have grown more severe over
                                the past decade, and the 2022 Hermits Peak/Calf Canyon
                                Fire &mdash; the largest wildfire in state history at over
                                340,000 acres &mdash; made the consequences visible across
                                Albuquerque and the broader region. Albuquerque properties
                                in wildland-urban interface zones along the Sandia foothills
                                and out into the East Mountains carry direct fire risk;
                                properties across the entire metro carry regional wildfire
                                smoke risk during major events anywhere in New Mexico,
                                Arizona, Colorado and California.
                                </p>
                                <p>
                                Direct WUI fire restoration combines structural rebuild
                                scopes with extensive ember-driven envelope damage,
                                outbuilding losses, vehicle damage and (in the worst cases)
                                whole-property losses that require ground-up reconstruction.
                                We work with adjusters, structural engineers and (in
                                historic-district properties) the relevant landmarks
                                commission to scope and rebuild fire-damaged properties.
                                </p>
                                <p>
                                Regional wildfire smoke intrusion is a different scope. Smoke
                                and ash particulates enter ABQ homes through swamp cooler
                                intake (a major exposure pathway specific to this market),
                                HVAC systems, windows and door seals, and roof and wall
                                penetrations. Restoration requires HVAC and duct
                                decontamination, swamp cooler pad replacement and unit
                                cleaning, content cleaning, soft-good laundering, and odor
                                neutralization through thermal fogging, hydroxyl generation
                                and ozone treatment. Wildfire smoke compounds embed in
                                porous materials and continue to off-gas for weeks. We
                                respond to wildfire smoke damage calls throughout the
                                southwestern fire season (typically April through October)
                                and during major regional events at any time of year.
                                </p>
                            </section>

                            <section class="process" aria-labelledby="process-h">
                                <h2 id="process-h">Our Fire Damage Restoration Process</h2>
                                <ol>
                                    <li><strong>Emergency stabilization (Hour 1-24).</strong> Site safety walkthrough, board-up of openings, roof tarping over burn-throughs, securing the property against weather exposure and (in WUI fire scenes) further ember exposure.</li>
                                    <li><strong>Firefighting water mitigation (Hours 1-72).</strong> Extract, dry and dehumidify affected areas to prevent the mold problem that otherwise follows every fire, even in ABQ's dry climate.</li>
                                    <li><strong>Soot and smoke residue removal.</strong> Smoke type identification (dry, wet, protein, fuel-based, wildfire-particulate) drives the cleaning method.</li>
                                    <li><strong>HVAC and swamp cooler duct decontamination.</strong> Air handlers, returns, supply trunks, registers and swamp cooler pad and duct systems &mdash; critical in ABQ where these systems are the primary smoke-distribution paths.</li>
                                    <li><strong>Smoke odor neutralization.</strong> Thermal fogging, hydroxyl generators, ozone treatment.</li>
                                    <li><strong>Content pack-out.</strong> Salvageable contents inventoried, packed out, cleaned off-site.</li>
                                    <li><strong>Reconstruction.</strong> Framing, drywall, stucco repair, adobe wall repair where applicable, viga and latilla restoration, insulation, flooring, cabinetry, electrical, paint and finish carpentry, coordinated with licensed New Mexico trade subcontractors and properly permitted through the City of Albuquerque Planning Department or the relevant municipal building department, with Landmarks Commission coordination on historic-district properties.</li>
                                </ol>
                            </section>

                            <section class="smoke-types" aria-labelledby="smoke-h">
                                <h2 id="smoke-h">The Types of Smoke We Clean</h2>
                                <ul class="listing">
                                    <li><strong>Dry smoke.</strong> High-temperature, fast-burning fires (paper, wood, electrical attic fires). Powdery residue. Easiest to clean.</li>
                                    <li><strong>Wet smoke.</strong> Smoldering fires with plastics, rubber, synthetic upholstery, roofing materials. Dense, sticky, smeary residue. Hardest to clean.</li>
                                    <li><strong>Protein smoke.</strong> Kitchen fires (grease, protein-based foods). Invisible residue, pervasive odor. Specialized degreasing chemistry required.</li>
                                    <li><strong>Fuel oil &amp; petroleum smoke.</strong> Furnace, water heater and outbuilding fires. Oily residues, aggressive solvent cleaning.</li>
                                    <li><strong>Wood-stove, kiva fireplace &amp; creosote smoke.</strong> Kiva fireplaces, chimney fires and wood-burning stoves common across ABQ adobe, pueblo revival and southwest-style stock. Dense, oily, deeply-staining residue that penetrates adobe and stucco.</li>
                                    <li><strong>Wildfire particulate smoke.</strong> Regional wildfire events bringing smoke and ash from New Mexico, Arizona, Colorado and California fires into ABQ homes through swamp cooler intake, HVAC and envelope penetrations. Fine particulate that embeds in soft goods and HVAC systems.</li>
                                </ul>
                            </section>

                            <section class="odor" aria-labelledby="odor-h">
                                <h2 id="odor-h">Smoke Odor Removal in Albuquerque Homes</h2>
                                <p>
                                The most common complaint we hear from Albuquerque homeowners
                                weeks after a fire is "everything looks fine, but I still
                                smell smoke." Smoke odor compounds embed in porous materials
                                and continue to off-gas for months. Surface cleaning
                                addresses only what's visible. Real odor removal requires
                                breaking down the odor molecule itself &mdash; thermal
                                fogging, hydroxyl generation, ozone treatment. We typically
                                combine modalities because one tool rarely handles a
                                whole-house odor scope on its own. Adobe walls, original wood
                                vigas and latillas, and the dense framing of pre-WWII Huning
                                Highland and Nob Hill stock hold smoke odor especially
                                stubbornly and benefit from extended hydroxyl treatment
                                cycles.
                                </p>
                            </section>

                            <section class="insurance" aria-labelledby="ins-h">
                                <h2 id="ins-h">New Mexico Fire Insurance &amp; ALE Coverage</h2>
                                <p>
                                Fire is a named peril on virtually every New Mexico HO-3
                                policy. Most policies include structural repair (Coverage A),
                                personal property (Coverage C) and Additional Living
                                Expenses (Coverage D / ALE) for hotel, rental and meal costs
                                while you cannot live in the property. New Mexico's
                                insurance market has tightened for properties in
                                wildland-urban interface zones along the Sandia foothills,
                                Bosque corridor and East Mountains following the 2022
                                Hermits Peak/Calf Canyon Fire and subsequent regional fire
                                activity; some carriers have raised premiums, increased
                                deductibles or limited new policies for high-exposure
                                properties. But standard fire coverage on existing HO-3
                                policies remains intact. We work with all the major New
                                Mexico carriers and coordinate directly with your adjuster.
                                </p>
                            </section>

                            <section class="service-area" aria-labelledby="area-h">
                                <h2 id="area-h">Where We Respond to Fire Damage in Albuquerque &amp; the Metro</h2>
                                <p>
                                The City of Albuquerque &mdash; Huning Highland, Downtown,
                                EDo, Old Town, Sawmill District, Nob Hill, University
                                Heights, Ridgecrest, Uptown, the Heights, Foothills, Far
                                Northeast Heights, Glenwood Hills, Tanoan, Sandia Heights,
                                Four Hills, Taylor Ranch, Paradise Hills, Volcano Cliffs,
                                Westgate Heights, Country Club, North Valley, Los Ranchos
                                de Albuquerque, South Valley, International District, Mesa
                                del Sol. <strong>Sandoval County:</strong> Rio Rancho,
                                Corrales, Bernalillo, Placitas. <strong>East Mountains
                                (wildland-urban interface zones):</strong> Tijeras, Sandia
                                Park, Cedar Crest, San Antonito, Edgewood, Moriarty.
                                <strong>Valencia County:</strong> Los Lunas, Belen, Bosque
                                Farms, Peralta.
                                </p>
                            </section>

                            <section class="faq bg-light mb-4" aria-labelledby="faq-h">
                                <h2 id="faq-h">Albuquerque Fire Damage Restoration FAQs</h2>

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
                                                How fast can you respond to a fire in Albuquerque?
                                            </button>
                                        </h3>
                                        <div id="collapse_1"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_1"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>60-minute target on-site arrival across the City, Bernalillo County and the inner metro. We coordinate with Albuquerque Fire Rescue, Bernalillo County FD, Rio Rancho Fire Rescue or the relevant East Mountain volunteer fire department before cleaning begins.</p>
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
                                                Do Albuquerque homes face wildland-urban interface fire risk?
                                            </button>
                                        </h3>
                                        <div id="collapse_2"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_2"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>Yes &mdash; Sandia foothills (Sandia Heights, Glenwood Hills, Heritage East, Four Hills), Bosque cottonwood corridor along the Rio Grande, and the East Mountains (Tijeras, Sandia Park, Cedar Crest). The 2022 Hermits Peak/Calf Canyon Fire and 2011 Las Conchas Fire are recent reminders of how rapidly NM fire seasons can escalate.</p>
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
                                                Do you handle wildfire smoke intrusion in Albuquerque homes?
                                            </button>
                                        </h3>
                                        <div id="collapse_3"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_3"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>Yes. Regional wildfire smoke pushes ash and particulates into ABQ homes through swamp cooler intake, HVAC and envelope penetrations. Restoration requires HVAC and duct decontamination, swamp cooler cleaning, content cleaning and odor neutralization.</p>
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
                                                Why are kiva fireplace and chimney fires a recurring Albuquerque category?
                                            </button>
                                        </h3>
                                        <div id="collapse_4"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_4"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>Creosote buildup in irregularly-shaped flues, mortar joint failures in pre-WWII chimneys, and inadequate spark arrestor maintenance produce chimney fires that spread to wood vigas and roof framing. Kiva fireplace ash is dense and deeply staining on adobe and stucco surfaces.</p>
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
                                                Should I clean soot or smoke residue myself before you arrive?
                                            </button>
                                        </h3>
                                        <div id="collapse_5"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_5"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>No. Soot is acidic, oily and abrasive. Wiping embeds it permanently. Running the swamp cooler or HVAC after a fire spreads residue throughout the building. Turn off, leave the soot alone, call us.</p>
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
                                                Does New Mexico homeowners insurance cover fire damage?
                                            </button>
                                        </h3>
                                        <div id="collapse_6"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_6"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>Fire is named peril on virtually every NM HO-3 policy. Coverage typically includes structural, contents and ALE while displaced. Insurance market has tightened for WUI properties following 2022 Hermits Peak fire, but standard fire coverage on existing policies remains intact.</p>
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
                                                Do you handle fires in adobe, pueblo revival and stucco homes?
                                            </button>
                                        </h3>
                                        <div id="collapse_7"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_7"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>Yes. Adobe transmits heat to vigas, latillas and interior framing in ways that can produce hidden structural damage. Stucco holds smoke residue differently than drywall. Reconstruction requires approaches adapted to the construction and (in historic districts) coordination with the City of Albuquerque Landmarks Commission.</p>
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
                                                How long does fire damage restoration take in an ABQ home?
                                            </button>
                                        </h3>
                                        <div id="collapse_8"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_8"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>Stabilization 24-72 hours. Cleaning and deodorization 1-3 weeks. Reconstruction 2 weeks to 6 months depending on scope and the relevant building department permit timing. Historic-district properties add Landmarks Commission review time.</p>
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
                                                <p>Embeds in porous materials and off-gases for weeks/months. Real odor removal requires breaking down the odor molecule itself through thermal fogging, hydroxyl generation and ozone &mdash; typically in combination. Adobe walls and vigas hold odor especially stubbornly.</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </section>

                            <section class="contact" aria-labelledby="contact-h">
                                <h2 id="contact-h">Call Albuquerque's Fire Damage, Smoke &amp; Odor Removal Team</h2>
                                <address>
                                    <strong>Water Mold Fire Restoration of Albuquerque</strong><br>
                                    1925 Coal Place SE<br>
                                    Albuquerque, NM 87106<br>
                                    <a href="tel:+15053124758">505-312-4758</a> &middot;
                                    <a href="mailto:albuquerque@watermoldfire.net">albuquerque@watermoldfire.net</a><br>
                                    24/7 Emergency Service<br>
                                    IICRC Firm Certified
                                </address>
                                <p>
                                Active fire, wildland-urban interface fire damage, regional
                                wildfire smoke intrusion, kiva fireplace fire, kitchen fire
                                or any fire damage in Albuquerque or the metro?
                                <a class="cta" href="tel:+15053124758">Call 505-312-4758</a>
                                and a crew will be on the way before the structure has
                                finished cooling.
                                </p>
                                <p class="back-to-hub">
                                &larr; Back to <a href="<?php echo site_url("albuquerque-nm/"); ?>">all Albuquerque restoration services</a>
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