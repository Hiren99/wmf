<?php
require_once __DIR__ . '/../includes/init.php';

$pagename = "albuquerque-nm/water-damage-restoration.php";

$title = "Water Damage &amp; Flood Cleanup in Albuquerque, NM | 24/7";

$meta_description = "24/7 water damage & flood cleanup in Albuquerque. Monsoon flash flooding, swamp cooler leaks, flat-roof failures, pipe bursts, arroyo overflows. IICRC Firm. Call 505-312-4758.";

$meta_keywords = "water damage restoration albuquerque, water damage repair albuquerque, water damage cleanup albuquerque, emergency water extraction albuquerque, burst pipe cleanup, flood cleanup albuquerque, flood damage restoration albuquerque, flood damage repair, flooded house cleanup, hurricane flood damage, storm flood cleanup";

$canonical_url = "https://watermoldfire.net/albuquerque-nm/water-damage-restoration/";

$geo_tags = '
    <meta name="geo.region" content="US-NM">
    <meta name="geo.placename" content="Albuquerque">
    <meta name="geo.position" content="35.0780;-106.6320">
    <meta name="ICBM" content="35.0780, -106.6320">
';

$open_graph = '
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Water Mold Fire Restoration">
    <meta property="og:title" content="Water Damage &amp; Flood Cleanup in Albuquerque, NM | 24/7">
    <meta property="og:description" content="Emergency water damage, monsoon flash flood, swamp cooler and flat-roof leak cleanup in Albuquerque. 24/7 Huning Highland-based crews. IICRC Firm Certified.">
    <meta property="og:url" content="https://watermoldfire.net/albuquerque-nm/water-damage-restoration/">
    <meta property="og:image" content="'.site_url().'images/logo.webp">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:locale" content="en_US">
';

$twitter = '
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Water Damage &amp; Flood Cleanup in Albuquerque, NM">
    <meta name="twitter:description" content="24/7 monsoon flash flood, swamp cooler, flat-roof and pipe burst water cleanup in Albuquerque. IICRC Firm.">
    <meta name="twitter:image" content="'.site_url().'images/logo.webp">
';

$schema_ld_json = '
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "@id": "https://watermoldfire.net/albuquerque-nm/water-damage-restoration/#service",
      "name": "Water Damage Restoration & Flood Cleanup in Albuquerque, NM",
      "serviceType": ["Water Damage Restoration","Flood Cleanup","Monsoon Flash Flood Cleanup","Swamp Cooler Leak Cleanup","Flat Roof Leak Water Damage"],
      "description": "24/7 emergency water damage restoration and flood cleanup in Albuquerque, NM. Monsoon flash flood response, swamp cooler (evaporative cooler) leak cleanup, flat-roof drainage failure water damage, arroyo overflow cleanup, pipe bursts including high-desert freeze events, structural drying, dehumidification, mold prevention and insurance documentation for Category 1, 2 and 3 water losses across the City, Bernalillo County and the metro. IICRC Firm Certified.",
      "url": "https://watermoldfire.net/albuquerque-nm/water-damage-restoration/",
      "provider": {"@id": "https://watermoldfire.net/albuquerque-nm/#localbusiness"},
      "areaServed": [
        {"@type": "City", "name": "Albuquerque"},
        {"@type": "City", "name": "Rio Rancho"},
        {"@type": "City", "name": "Corrales"},
        {"@type": "City", "name": "Bernalillo"},
        {"@type": "City", "name": "Placitas"},
        {"@type": "City", "name": "Tijeras"},
        {"@type": "City", "name": "Cedar Crest"},
        {"@type": "City", "name": "Los Lunas"},
        {"@type": "City", "name": "Belen"},
        {"@type": "City", "name": "Edgewood"}
      ],
      "hoursAvailable": {
        "@type": "OpeningHoursSpecification",
        "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"],
        "opens": "00:00",
        "closes": "23:59"
      },
      "hasCredential": {
        "@type": "EducationalOccupationalCredential",
        "name": "IICRC Firm Certification",
        "credentialCategory": "certification",
        "recognizedBy": {"@type": "Organization","name": "Institute of Inspection, Cleaning and Restoration Certification"}
      },
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Water Damage & Flood Cleanup Services",
        "itemListElement": [
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Emergency Water Extraction"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Monsoon Flash Flood Cleanup"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Swamp Cooler / Evaporative Cooler Leak Cleanup"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Flat Roof & Parapet Drainage Failure Cleanup"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Arroyo Overflow & Storm Drain Flood Cleanup"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Burst Pipe & Pipe Leak Cleanup"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Frozen Pipe Burst Cleanup (High-Desert Freeze Events)"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Sewer Backup Cleanup (Category 3 Water)"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Stucco Cavity Water Intrusion Cleanup"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Bosque-Adjacent Property Flood Response"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Structural Drying & Dehumidification"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Content Pack-Out & Restoration"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Insurance Claim Documentation"}}
        ]
      }
    },
    {
      "@type": "LocalBusiness",
      "@id": "https://watermoldfire.net/albuquerque-nm/#localbusiness",
      "name": "Water Mold Fire Restoration of Albuquerque",
      "url": "https://watermoldfire.net/albuquerque-nm/",
      "telephone": "+1-505-312-4758",
      "email": "albuquerque@watermoldfire.net",
      "address": {"@type": "PostalAddress","streetAddress": "1925 Coal Place SE","addressLocality": "Albuquerque","addressRegion": "NM","postalCode": "87106","addressCountry": "US"},
      "geo": {"@type": "GeoCoordinates","latitude": 35.0780,"longitude": -106.6320},
      "aggregateRating": {"@type": "AggregateRating","ratingValue": "5.0","reviewCount": "118"}
    },
    {
      "@type": "BreadcrumbList",
      "@id": "https://watermoldfire.net/albuquerque-nm/water-damage-restoration/#breadcrumb",
      "itemListElement": [
        {"@type": "ListItem","position": 1,"name": "Home","item": "https://watermoldfire.net/"},
        {"@type": "ListItem","position": 2,"name": "Albuquerque, NM","item": "https://watermoldfire.net/albuquerque-nm/"},
        {"@type": "ListItem","position": 3,"name": "Water Damage Restoration","item": "https://watermoldfire.net/albuquerque-nm/water-damage-restoration/"}
      ]
    },
    {
      "@type": "WebPage",
      "@id": "https://watermoldfire.net/albuquerque-nm/water-damage-restoration/#webpage",
      "url": "https://watermoldfire.net/albuquerque-nm/water-damage-restoration/",
      "name": "Water Damage Restoration in Albuquerque, NM",
      "isPartOf": {"@id": "https://watermoldfire.net/#website"},
      "about": {"@id": "https://watermoldfire.net/albuquerque-nm/water-damage-restoration/#service"},
      "breadcrumb": {"@id": "https://watermoldfire.net/albuquerque-nm/water-damage-restoration/#breadcrumb"},
      "inLanguage": "en-US"
    },
    {
      "@type": "FAQPage",
      "@id": "https://watermoldfire.net/albuquerque-nm/water-damage-restoration/#faq",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "How fast can you respond to water damage in Albuquerque?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Our Albuquerque crews dispatch 24/7 from our Huning Highland facility on Coal Place SE and target an on-site arrival of 60 minutes or less for emergency calls across the City of Albuquerque, Bernalillo County, Rio Rancho and the inner East Mountains. During monsoon-season flash flood events — when an isolated thunderstorm can drop one to two inches of rain on a single neighborhood in under an hour and overwhelm storm drains across the Heights, the South Valley and the West Side — we run a triage system that prioritizes active leaks and Category 3 sewer-backup losses first."
          }
        },
        {
          "@type": "Question",
          "name": "What is monsoon-season flash flooding in Albuquerque?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The North American Monsoon brings a regular pattern of intense, localized afternoon and evening thunderstorms to the Albuquerque metro from approximately mid-June through mid-September each year. Individual storm cells routinely drop one to two inches of rain in under an hour on small areas of the city, overwhelming storm drains, overtopping arroyos managed by AMAFCA (the Albuquerque Metropolitan Arroyo Flood Control Authority), and producing flash flooding in low-lying neighborhoods, garages, basements where they exist, and ground-floor living spaces. Properties adjacent to arroyos, in the South Valley, near the Bosque along the Rio Grande, and in low spots of the Heights are most exposed. Monsoon flooding is the dominant warm-season water damage category in Albuquerque."
          }
        },
        {
          "@type": "Question",
          "name": "Why are swamp cooler leaks such a common Albuquerque water damage source?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Evaporative coolers — locally called swamp coolers — are installed on a high percentage of Albuquerque homes because the city\'s low ambient humidity makes them an efficient cooling option that doesn\'t require refrigeration. They sit on the roof and use a continuous water supply line to wet absorbent pads through which the unit draws warm outside air. Failures are common: float valves stick open and overflow the unit, water lines crack during winter freeze events, pads degrade and clog the drainage, and seasonal startup or shutdown done improperly leaves connections leaking. Failed swamp coolers leak hundreds of gallons of water through ceiling planes, into attic insulation, down interior walls and into rooms below. We respond to swamp cooler water damage calls year-round and the volume spikes in the spring startup and fall shutdown windows."
          }
        },
        {
          "@type": "Question",
          "name": "Why do Albuquerque flat roofs leak?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Flat roofs with parapet walls are a signature Albuquerque architectural detail — pueblo revival, territorial, Spanish colonial revival and mid-century southwest styles all rely on them. They are also one of the most common ABQ water-damage sources. Flat roofs drain through scuppers, internal drains and parapet penetrations that all have to stay clear; debris from cottonwoods, monsoon-blown dirt and bird nesting clog drainage and back water up against the roof membrane. Stucco-parapet flashings crack from UV exposure and freeze-thaw cycles at elevation. Even small membrane failures hold standing water during monsoon events. The resulting leaks enter attic spaces and ceiling cavities, and the resulting moisture can sit and feed mold for weeks before visible staining appears."
          }
        },
        {
          "@type": "Question",
          "name": "Does New Mexico homeowners insurance cover water damage?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Sudden and accidental water damage — burst supply lines, A/C overflows, wind-driven rain through a damaged roof — is generally covered under a standard New Mexico HO-3 homeowners policy. Swamp cooler leaks are typically covered as sudden plumbing failures when the failure is itself sudden, though carriers may dispute long-term gradual leaks. Sewer backup is NOT covered by a standard policy and requires a separate sewer/drain backup endorsement. Rising flood water — arroyo overflow, surface flooding from monsoon rain that overwhelms storm drains — requires separate flood insurance through the NFIP or a private flood carrier. Properties adjacent to arroyos and in NFIP-mapped flood zones around the Bosque and Rio Grande corridor are typically required to carry flood insurance by their mortgage lenders."
          }
        },
        {
          "@type": "Question",
          "name": "Do Albuquerque properties get frozen pipe bursts?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, though less commonly than in northern markets. Albuquerque\'s high-desert climate produces extreme temperature swings — a December morning can hit 15-20°F before warming into the 50s by afternoon — and freeze events do happen, especially when polar air pushes south down the Front Range. Exterior-wall supply lines on north-facing walls, unheated garage plumbing, hose bibs left connected over winter, and the swamp cooler water lines that aren\'t properly winterized all freeze and burst when the city sees multiple-day cold snaps. The 2011 Albuquerque cold snap (when temperatures hit -15°F and gas service to thousands of homes was interrupted) is the recent benchmark; less severe winter freezes produce a steady annual baseline of pipe-burst calls."
          }
        },
        {
          "@type": "Question",
          "name": "Is sewer backup water dangerous?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Sewer backup water is Category 3 (\'black water\') under the IICRC S500 standard — it contains raw sewage, bacteria, parasites and chemical contaminants. It cannot simply be extracted and dried in place. Contaminated porous materials (drywall to the flood line, carpet, padding, insulation, particle-board cabinetry) must be removed and disposed of, remaining structural materials must be sanitized with EPA-registered antimicrobials, and the property requires verified post-cleaning before reconstruction can begin. We arrive in full PPE and follow Category 3 protocol on every sewer-backup job."
          }
        },
        {
          "@type": "Question",
          "name": "How long does water damage restoration take in an Albuquerque home?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Extraction and drying typically run 3 to 5 days. Albuquerque\'s stucco-and-frame construction, adobe homes and pueblo revival stock often extend drying timelines because of the thermal mass of solid wall systems and the way moisture migrates through stucco cavities. Low ambient humidity helps evaporation but high-elevation low air density actually reduces dehumidifier efficiency slightly, which we account for in equipment sizing. Reconstruction (drywall, stucco patch, flooring, paint, finish work) adds 1 to 4 weeks depending on scope and City of Albuquerque Planning Department permit timing."
          }
        },
        {
          "@type": "Question",
          "name": "Should I call my insurance company or a restoration company first?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Call the restoration company first. New Mexico policies require you to take reasonable steps to mitigate further damage, and even in Albuquerque\'s dry climate mold can begin colonizing wet drywall and framing within 24 to 48 hours once moisture is trapped behind finishes. We stop the spread, photograph and document cause of loss for your adjuster, then coordinate with your insurer."
          }
        }
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
                Water Damage Restoration & Flood Cleanup in Albuquerque, NM
            </h1>   
            <!-- Feature Pills -->
            <div class="feature-pills">
                <div class="feature-pill">
                    <i class="fas fa-headset"></i>
                    <span>60-Minute Emergency Response</span>
                </div>
                <div class="feature-pill">
                    <i class="fas fa-certificate"></i>
                    <span>IICRC-Certified Technicians</span>
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
                                <h2 id="intro-h">24/7 Water Damage &amp; Flood Cleanup for Albuquerque Homes &amp; Businesses</h2>
                                <p>
                                Water damage in Albuquerque arrives from a different set of
                                sources than most American cities. It comes down through
                                ceiling planes after a <strong>swamp cooler float valve</strong>
                                sticks open on the roof and quietly drains hundreds of gallons
                                into attic insulation. It enters through <strong>flat-roof
                                parapet drainage</strong> that clogged with cottonwood debris
                                before the monsoon storm hit. It surges up through garages
                                and ground floors during <strong>monsoon-season flash
                                flooding</strong>, when a single afternoon thunderstorm can
                                drop one to two inches of rain on a Northeast Heights
                                neighborhood in under an hour. It backs up through floor
                                drains when an arroyo overtops near the South Valley or the
                                West Side. It splits a copper supply line on a north-facing
                                wall when a polar-front cold snap drops the high desert below
                                15&deg;F. Water Mold Fire Restoration of Albuquerque handles
                                all of it &mdash; IICRC Firm Certified crews dispatched 24
                                hours a day from our facility on Coal Place SE in the Huning
                                Highland area, with truck-mounted extractors,
                                commercial-grade dehumidifiers, thermal imaging cameras and
                                the documentation discipline New Mexico insurance carriers
                                expect.
                                </p>
                            </section>

                            <section class="local-context" aria-labelledby="local-h">
                                <h2 id="local-h">The Albuquerque Conditions That Drive Most Water Losses</h2>
                                <p>
                                We see the same loss patterns repeat across the City of
                                Albuquerque, Bernalillo County, Rio Rancho and the
                                surrounding metro, and most of them trace back to ABQ's
                                specific high-desert climate, infrastructure and building
                                stock:
                                </p>
                                <ul class="listing">
                                    <li>
                                        <strong>Swamp cooler (evaporative cooler) failures.</strong>
                                        Swamp coolers are installed on a high percentage of
                                        Albuquerque homes because the city's low ambient humidity
                                        makes them efficient. They sit on roofs and depend on a
                                        continuous water supply line wetting absorbent pads. Float
                                        valves stick open and overflow; water lines crack during
                                        winter freezes; pads degrade and clog drainage; seasonal
                                        startup or shutdown done improperly leaves connections
                                        leaking. A failed swamp cooler dumps hundreds of gallons
                                        through ceiling planes, attic insulation, interior walls
                                        and rooms below. Spring startup and fall shutdown produce
                                        peak call volume. The leaks often go undetected for hours
                                        or days because the unit is on the roof and the owner can't
                                        hear or see the failure from inside the house.
                                    </li>
                                    <li>
                                        <strong>Monsoon-season flash flooding (Jul&ndash;Sep).</strong>
                                        The North American Monsoon brings intense, localized
                                        afternoon and evening thunderstorms to the metro from
                                        mid-June through mid-September. Individual storm cells drop
                                        one to two inches of rain in under an hour, overwhelming
                                        storm drains, overtopping AMAFCA-managed arroyos, and
                                        producing flash flooding through normally-dry channels
                                        that cut residential neighborhoods. The South Valley,
                                        low-lying Heights neighborhoods, Bosque-adjacent
                                        properties and any home in an arroyo flood zone all see
                                        recurring monsoon water damage.
                                    </li>
                                    <li>
                                        <strong>Flat-roof drainage failures.</strong>
                                        Flat roofs with parapet drainage are a signature
                                        Albuquerque architectural detail across pueblo revival,
                                        territorial, Spanish colonial revival and southwest
                                        mid-century stock. They drain through scuppers, internal
                                        drains and parapet penetrations that have to stay clear.
                                        Cottonwood debris, monsoon-blown dirt and bird nesting clog
                                        drainage and back water up against the roof membrane.
                                        Stucco-parapet flashings crack from UV exposure and
                                        freeze-thaw cycles at 5,300 feet of elevation. Even small
                                        membrane failures hold standing water during monsoon
                                        events and leak into attic spaces and ceiling cavities.
                                    </li>
                                    <li>
                                        <strong>Stucco cavity water intrusion.</strong>
                                        Stucco-and-frame construction is the dominant ABQ
                                        residential building system. Stucco fails differently than
                                        brick or siding: hairline cracks at corners, window heads
                                        and door frames allow wind-driven monsoon rain into the
                                        wall cavity, where the moisture can sit for weeks before
                                        producing visible interior damage. Stucco mesh and lath
                                        corrosion behind older stucco compounds the problem. ABQ
                                        homes from the 1950s through the 1980s with original
                                        stucco systems are particularly common candidates.
                                    </li>
                                    <li>
                                        <strong>Arroyo overflow &amp; bosque flooding.</strong>
                                        Albuquerque's arroyo network &mdash; managed by AMAFCA
                                        &mdash; carries enormous monsoon flows through channels
                                        that cross residential neighborhoods across the metro.
                                        Properties adjacent to arroyos and in the Rio Grande
                                        Bosque corridor see periodic overtopping and surface
                                        flooding during major monsoon events. The October 2018
                                        early-season warm rain on snow event and recurring
                                        smaller arroyo overtopping incidents through every
                                        monsoon season produce a steady baseline of
                                        flood-cleanup work.
                                    </li>
                                    <li>
                                        <strong>High-desert freeze events.</strong>
                                        Albuquerque's high-desert climate produces extreme
                                        temperature swings; freeze events do happen, especially
                                        when polar air pushes south down the Front Range. The
                                        2011 cold snap (with temperatures hitting -15&deg;F and
                                        widespread gas-service interruptions) is the recent
                                        benchmark; less severe winter freezes produce a steady
                                        annual baseline of pipe-burst calls. Exterior-wall supply
                                        lines, unheated garage plumbing, hose bibs and improperly
                                        winterized swamp cooler water lines are the typical
                                        failure points.
                                    </li>
                                    <li>
                                        <strong>Sewer backups.</strong>
                                        Sewer backups happen during heavy rain events and during
                                        line failures upstream. The Albuquerque Bernalillo County
                                        Water Utility Authority manages city wastewater
                                        infrastructure; older parts of the City of Albuquerque
                                        carry combined or partially-combined sewer service that
                                        produces backflow during major monsoon events. Category 3
                                        contaminated water under industry standards.
                                    </li>
                                    <li>
                                        <strong>Original-era plumbing in pre-WWII ABQ stock.</strong>
                                        Huning Highland Historic District, Nob Hill, Country Club
                                        and the older North Valley neighborhoods carry pre-WWII
                                        construction with galvanized supply pipe and cast-iron
                                        drain stacks. Pinhole leaks, hub-joint failures and slow
                                        chronic leaks behind plaster walls compound over months
                                        before owners notice the moisture.
                                    </li>
                                </ul>
                            </section>

                            <section class="monsoon-flooding" aria-labelledby="monsoon-h">
                                <h2 id="monsoon-h">Monsoon Flash Flooding &amp; Arroyo Overflow Cleanup</h2>
                                <p>
                                Albuquerque flooding doesn't behave like flooding in cities
                                with steady rainfall. The North American Monsoon delivers
                                most of the city's annual precipitation in a roughly
                                three-month window through intense, localized thunderstorms
                                that can drop one to two inches of rain on a single
                                neighborhood in under an hour. When that happens, AMAFCA's
                                arroyo network carries the runoff &mdash; but arroyos that
                                run dry 350 days a year fill rapidly during monsoon storms,
                                occasionally overtopping, and the storm drain system is
                                sized for typical rather than extreme events. Surface water
                                finds its way into low-lying garages, ground floors and
                                basements (where they exist) on properties adjacent to
                                arroyos, in the South Valley, in low spots of the Heights,
                                and in the Bosque-adjacent neighborhoods along the Rio
                                Grande corridor.
                                </p>
                                <p>
                                Our monsoon flood cleanup process is built around that
                                reality. Surface floodwater is Category 3 contaminated water
                                under industry standards &mdash; it carries soil,
                                agricultural runoff from upstream watersheds, hydrocarbons
                                from street surfaces, and biological contaminants. We
                                arrive in full PPE, extract standing water with
                                truck-mounted pumps, remove and dispose of contaminated
                                porous materials, apply EPA-registered antimicrobials to
                                remaining structural materials, and deploy commercial drying
                                equipment sized for the volume monsoon floods actually
                                produce. ABQ's low ambient humidity helps evaporation
                                compared to humid markets, but at 5,300 feet of elevation
                                dehumidifier efficiency drops slightly, which we account
                                for in equipment sizing.
                                </p>
                                <p>
                                <strong>Important note on insurance:</strong> standard New
                                Mexico HO-3 homeowners policies do <em>not</em> cover surface
                                flooding or arroyo overflow. That coverage comes from a
                                separate NFIP or private flood policy. Properties in
                                NFIP-mapped flood zones along the Rio Grande corridor and
                                adjacent to major arroyos are typically required to carry
                                flood insurance by their mortgage lenders. Many ABQ
                                homeowners outside mapped flood zones don't carry flood
                                coverage and learn after a monsoon event that their
                                homeowners policy doesn't apply.
                                </p>
                            </section>

                            <section class="swamp-cooler" aria-labelledby="swamp-h">
                                <h2 id="swamp-h">Swamp Cooler Leak Cleanup in Albuquerque</h2>
                                <p>
                                Swamp coolers &mdash; evaporative coolers, the rooftop cooling
                                technology that depends on Albuquerque's low ambient humidity
                                to work &mdash; are installed on a high percentage of ABQ
                                homes and are one of the single most common water-damage
                                sources we respond to. The unit sits on the roof; a
                                continuous water supply line keeps absorbent pads wet; a
                                blower draws warm outside air through the wet pads, dropping
                                its temperature by evaporation; the cooled air is forced
                                into the house through ductwork. When the system works it
                                uses water efficiently. When it fails, it dumps a large
                                volume of water into ceiling planes, attic insulation,
                                interior walls and rooms below before anyone notices.
                                </p>
                                <p>
                                Common failure modes we see across Albuquerque: stuck float
                                valves that overflow the unit continuously; cracked water
                                supply lines from winter freeze events that thaw and start
                                leaking in spring startup; degraded or clogged pads that
                                cause drainage problems; failed pumps that flood the unit;
                                and seasonal transitions (spring startup or fall shutdown)
                                done improperly that leave connections leaking. The leaks
                                usually go undetected for hours or days because the unit
                                is out of sight on the roof. We respond to swamp cooler
                                water damage year-round; volume spikes during spring
                                startup (April-May) and fall shutdown (October-November)
                                windows.
                                </p>
                            </section>

                            <section class="process" aria-labelledby="process-h">
                                <h2 id="process-h">Our Water Damage Restoration Process</h2>
                                <p>
                                Every job we run in Albuquerque follows the IICRC S500
                                Standard for Professional Water Damage Restoration &mdash;
                                the published industry consensus standard:
                                </p>
                                <ol>
                                    <li><strong>Emergency response &amp; assessment (Hour 1).</strong> Crew dispatch, source identification and shutoff (swamp cooler supply line, broken pipe, roof breach), thermal imaging and moisture mapping. Documentation begins on minute one.</li>
                                    <li><strong>Water extraction (Hours 1&ndash;6).</strong> Truck-mounted and portable extractors pull standing water. Category 3 sewer-backup and monsoon flood losses get full PPE and porous-material removal.</li>
                                    <li><strong>Structural drying &amp; dehumidification (Days 1&ndash;5).</strong> Air movers and LGR dehumidifiers create dry-air conditions. Equipment sized for ABQ's 5,300-foot elevation and low ambient humidity.</li>
                                    <li><strong>Antimicrobial treatment &amp; mold prevention.</strong> EPA-registered antimicrobials applied to wet materials &mdash; even in ABQ's dry climate, trapped moisture behind finishes seeds mold within 48 hours.</li>
                                    <li><strong>Daily monitoring &amp; documentation.</strong> Moisture readings, temperature and RH logged daily until materials hit dry standard.</li>
                                    <li><strong>Reconstruction.</strong> Drywall, stucco patch, flooring, cabinetry, paint and finish carpentry, coordinated with licensed New Mexico trade subcontractors and properly permitted through the City of Albuquerque Planning Department or the relevant Bernalillo or Sandoval County department.</li>
                                </ol>
                            </section>

                            <section class="categories" aria-labelledby="cats-h">
                                <h2 id="cats-h">Water Damage Categories We Handle</h2>
                                <ul class="listing">
                                    <li><strong>Category 1 (clean water).</strong> Broken supply lines, refrigerator and ice-maker lines, water heater failures, sudden swamp cooler supply line breaks, rainwater intrusion through a clean envelope.</li>
                                    <li><strong>Category 2 (gray water).</strong> Dishwasher and washing machine discharge, toilet overflows (no feces), A/C condensate through contaminated pans, gradual swamp cooler leaks that have stood in attic insulation.</li>
                                    <li><strong>Category 3 (black water).</strong> Sewer backups, monsoon surface floodwater, arroyo overflow, Rio Grande bosque flooding. Requires material removal, full PPE and verified post-remediation cleaning.</li>
                                </ul>
                            </section>

                            <section class="insurance" aria-labelledby="ins-h">
                                <h2 id="ins-h">New Mexico Insurance &amp; Documentation</h2>
                                <p>
                                New Mexico's homeowners insurance market is generally stable,
                                though wildfire exposure has tightened the market for
                                properties in wildland-urban interface zones along the
                                Sandia foothills and the East Mountains. Sudden and
                                accidental water damage from supply-line and appliance
                                failures is covered under a standard HO-3 policy. Swamp
                                cooler failures are typically covered as sudden plumbing
                                failures, though carriers may dispute long-term gradual
                                leaks where they argue the homeowner should have caught the
                                problem sooner. Sewer/drain backup coverage is a separate
                                endorsement many New Mexico homeowners only realize they
                                need after the first monsoon-season backup. Surface flooding
                                from monsoon rain that overwhelms storm drains, and arroyo
                                overflow, requires separate NFIP or private flood insurance.
                                We build every ABQ job file the way a New Mexico adjuster
                                needs to see it: thermal images, moisture maps, daily
                                readings, photo logs and a clear written scope, and we
                                coordinate directly with your adjuster.
                                </p>
                            </section>

                            <section class="service-area" aria-labelledby="area-h">
                                <h2 id="area-h">Where We Respond in Albuquerque &amp; the Metro</h2>
                                <p>
                                The City of Albuquerque &mdash; Huning Highland, Downtown,
                                EDo, Old Town, Sawmill District, Wells Park, Nob Hill,
                                University Heights, Ridgecrest, Spruce Park, Uptown, the
                                Heights, Foothills, Far Northeast Heights, Glenwood Hills,
                                Heritage East, Tanoan, Sandia Heights, Four Hills, Taylor
                                Ranch, Paradise Hills, Volcano Cliffs, Westgate Heights,
                                Ladera, Mesa Verde, Country Club, North Valley, Los Ranchos
                                de Albuquerque, South Valley, International District,
                                Trumbull Village, Mesa del Sol. <strong>Sandoval
                                County:</strong> Rio Rancho, Corrales, Bernalillo, Placitas,
                                Algodones. <strong>East Mountains:</strong> Tijeras, Sandia
                                Park, Cedar Crest, San Antonito, Edgewood, Moriarty.
                                <strong>Valencia County:</strong> Los Lunas, Belen, Bosque
                                Farms, Peralta.
                                </p>
                            </section>

                            <section class="faq bg-light mb-4" aria-labelledby="faq-h">
                                <h2 id="faq-h">Albuquerque Water Damage Restoration FAQs</h2>

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
                                                How fast can you respond to water damage in Albuquerque?
                                            </button>
                                        </h3>
                                        <div id="collapse_1"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_1"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>
                                                Our ABQ crews dispatch 24/7 from our Huning Highland facility
                                                on Coal Place SE and target an on-site arrival of 60 minutes
                                                or less across the City, Bernalillo County, Rio Rancho and
                                                the inner East Mountains. During monsoon-season flash flood
                                                events we triage active leaks and Category 3 sewer-backup
                                                losses first.
                                                </p>
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
                                                What is monsoon-season flash flooding in Albuquerque?
                                            </button>
                                        </h3>
                                        <div id="collapse_2"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_2"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>
                                                The North American Monsoon brings intense, localized
                                                afternoon thunderstorms to the metro from mid-June through
                                                mid-September. Individual storms drop one to two inches of
                                                rain in under an hour, overwhelming storm drains and
                                                overtopping AMAFCA arroyos, producing flash flooding in
                                                low-lying neighborhoods.
                                                </p>
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
                                                Why are swamp cooler leaks such a common Albuquerque water damage source?
                                            </button>
                                        </h3>
                                        <div id="collapse_3"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_3"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>
                                                Swamp coolers sit on roofs and depend on a continuous water
                                                supply. Float valves stick open, lines crack, pads clog,
                                                seasonal transitions go wrong. Failed units leak hundreds of
                                                gallons through ceiling planes, attic insulation, walls and
                                                rooms below. Spring startup and fall shutdown produce peak
                                                call volume.
                                                </p>
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
                                                Why do Albuquerque flat roofs leak?
                                            </button>
                                        </h3>
                                        <div id="collapse_4"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_4"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>
                                                Flat roofs drain through scuppers, internal drains and
                                                parapet penetrations that have to stay clear. Cottonwood
                                                debris, monsoon-blown dirt and bird nesting clog drainage;
                                                stucco-parapet flashings crack from UV and freeze-thaw at
                                                elevation. Even small failures hold standing water during
                                                monsoon events.
                                                </p>
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
                                                Does New Mexico homeowners insurance cover water damage?
                                            </button>
                                        </h3>
                                        <div id="collapse_5"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_5"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>
                                                Sudden and accidental water damage is generally covered under
                                                a standard NM HO-3 policy. Sewer backup is NOT &mdash; that
                                                requires a separate endorsement. Rising flood water (arroyo
                                                overflow, monsoon surface flooding) requires separate NFIP or
                                                private flood insurance.
                                                </p>
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
                                                Do Albuquerque properties get frozen pipe bursts?
                                            </button>
                                        </h3>
                                        <div id="collapse_6"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_6"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>
                                                Yes, less commonly than northern markets but real. Polar-air
                                                cold snaps below 15&deg;F (2011 was the recent benchmark)
                                                fail exterior-wall supply lines, unheated garage plumbing,
                                                hose bibs and improperly winterized swamp cooler lines.
                                                </p>
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
                                                Is sewer backup water dangerous?
                                            </button>
                                        </h3>
                                        <div id="collapse_7"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_7"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>
                                                Yes &mdash; Category 3 ("black water"). Contains raw sewage
                                                and pathogens. Requires full PPE, porous-material removal,
                                                antimicrobial treatment and verified cleaning.
                                                </p>
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
                                                How long does water damage restoration take in an ABQ home?
                                            </button>
                                        </h3>
                                        <div id="collapse_8"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_8"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>
                                                Extraction and drying 3 to 5 days. Low ambient humidity
                                                helps evaporation; high-elevation low air density slightly
                                                reduces dehumidifier efficiency. Reconstruction adds 1 to 4
                                                weeks depending on scope and City of Albuquerque permit
                                                timing.
                                                </p>
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
                                                Should I call my insurance company or a restoration company first?
                                            </button>
                                        </h3>
                                        <div id="collapse_9"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_9"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>
                                                Call the restoration company first. NM policies require
                                                mitigation. Even in dry climate, trapped moisture behind
                                                finishes seeds mold within 24-48 hours.
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </section>

                            <section class="contact" aria-labelledby="contact-h">
                                <h2 id="contact-h">Call Albuquerque's Water Damage Restoration Team</h2>
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
                                Active swamp cooler leak, flat-roof failure, monsoon flash
                                flood, frozen pipe burst, or any water loss in ABQ or the
                                metro?
                                <a class="cta" href="tel:+15053124758">Call 505-312-4758</a>
                                and a crew will be rolling.
                                </p>
                                <p class="back-to-hub">
                                &larr; Back to
                                <a href="<?php echo site_url("albuquerque-nm/"); ?>">all Albuquerque restoration services</a>
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