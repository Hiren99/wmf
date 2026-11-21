<?php
require_once __DIR__ . '/../includes/init.php';

$pagename = "washington-dc/water-damage-restoration.php";

$title = "Water Damage &amp; Flood Cleanup in Washington, DC | 24/7";

$meta_description = "24/7 water damage & flood cleanup in Washington DC. Sewer backups, basement flooding, storm flooding, hurricane remnants, pipe bursts. IICRC Firm. Call 202-650-0299.";

$meta_keywords = "water damage restoration washington, water damage repair washington, water damage cleanup washington, emergency water extraction washington, burst pipe cleanup, flood cleanup washington, flood damage restoration washington, flood damage repair, flooded house cleanup, hurricane flood damage, storm flood cleanup";

$canonical_url = "https://watermoldfire.net/washington-dc/water-damage-restoration/";

$geo_tags = '
<meta name="geo.region" content="US-DC">
<meta name="geo.placename" content="Washington">
<meta name="geo.position" content="38.9000;-77.0470">
<meta name="ICBM" content="38.9000, -77.0470">
';

$open_graph = '
<meta property="og:type" content="website">
<meta property="og:site_name" content="Water Mold Fire Restoration">
<meta property="og:title" content="Water Damage &amp; Flood Cleanup in Washington, DC | 24/7">
<meta property="og:description" content="Emergency water damage, sewer backup and basement flood cleanup in DC. 24/7 Foggy Bottom-based crews across the District and DMV. IICRC Firm Certified.">
<meta property="og:url" content="https://watermoldfire.net/washington-dc/water-damage-restoration/">
<meta property="og:image" content="'.site_url().'images/logo.webp">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="og:locale" content="en_US">
';

$twitter = '
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Water Damage &amp; Flood Cleanup in Washington, DC">
<meta name="twitter:description" content="24/7 water damage, sewer backup, basement flood and storm cleanup in DC and the DMV. IICRC Firm.">
<meta name="twitter:image" content="'.site_url().'images/logo.webp">
';

$schema_ld_json = '
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "@id": "https://watermoldfire.net/washington-dc/water-damage-restoration/#service",
      "name": "Water Damage Restoration & Flood Cleanup in Washington, DC",
      "serviceType": ["Water Damage Restoration","Basement Flood Cleanup","Sewer Backup Cleanup","Storm Flood Cleanup"],
      "description": "24/7 emergency water damage restoration and flood cleanup in Washington, DC. Pipe burst response, sewer backup cleanup (Category 3 water), basement and English basement flooding, sump pump failures, storm and hurricane remnant flooding, structural drying, dehumidification, mold prevention and insurance documentation for Category 1, 2 and 3 water losses across all four quadrants of the District and the DMV. IICRC Firm Certified.",
      "url": "https://watermoldfire.net/washington-dc/water-damage-restoration/",
      "provider": {"@id": "https://watermoldfire.net/washington-dc/#localbusiness"},
      "areaServed": [
        {"@type": "City", "name": "Washington"},
        {"@type": "City", "name": "Arlington"},
        {"@type": "City", "name": "Alexandria"},
        {"@type": "City", "name": "Bethesda"},
        {"@type": "City", "name": "Silver Spring"},
        {"@type": "City", "name": "Chevy Chase"},
        {"@type": "City", "name": "McLean"},
        {"@type": "City", "name": "Falls Church"},
        {"@type": "City", "name": "Hyattsville"},
        {"@type": "City", "name": "Takoma Park"}
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
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Sewer Backup Cleanup (Category 3 Water)"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "English Basement & Garden Unit Flood Cleanup"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Storm & Hurricane Remnant Flood Cleanup"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Burst Pipe & Pipe Leak Cleanup"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Frozen Pipe Burst Cleanup"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Sump Pump Failure Water Cleanup"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Structural Drying & Dehumidification"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "A/C Condensate & Appliance Leak Cleanup"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Rowhouse Shared-Wall Water Damage"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "High-Rise Condo Water Damage"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Content Pack-Out & Restoration"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Insurance Claim Documentation"}}
        ]
      }
    },
    {
      "@type": "LocalBusiness",
      "@id": "https://watermoldfire.net/washington-dc/#localbusiness",
      "name": "Water Mold Fire Restoration of Washington DC",
      "url": "https://watermoldfire.net/washington-dc/",
      "telephone": "+1-202-650-0299",
      "email": "washingtondc@watermoldfire.net",
      "address": {"@type": "PostalAddress","streetAddress": "2200 Pennsylvania Avenue NW","addressLocality": "Washington","addressRegion": "DC","postalCode": "20037","addressCountry": "US"},
      "geo": {"@type": "GeoCoordinates","latitude": 38.9000,"longitude": -77.0470},
      "aggregateRating": {"@type": "AggregateRating","ratingValue": "5.0","reviewCount": "118"}
    },
    {
      "@type": "BreadcrumbList",
      "@id": "https://watermoldfire.net/washington-dc/water-damage-restoration/#breadcrumb",
      "itemListElement": [
        {"@type": "ListItem","position": 1,"name": "Home","item": "https://watermoldfire.net/"},
        {"@type": "ListItem","position": 2,"name": "Washington, DC","item": "https://watermoldfire.net/washington-dc/"},
        {"@type": "ListItem","position": 3,"name": "Water Damage Restoration","item": "https://watermoldfire.net/washington-dc/water-damage-restoration/"}
      ]
    },
    {
      "@type": "WebPage",
      "@id": "https://watermoldfire.net/washington-dc/water-damage-restoration/#webpage",
      "url": "https://watermoldfire.net/washington-dc/water-damage-restoration/",
      "name": "Water Damage Restoration in Washington, DC",
      "isPartOf": {"@id": "https://watermoldfire.net/#website"},
      "about": {"@id": "https://watermoldfire.net/washington-dc/water-damage-restoration/#service"},
      "breadcrumb": {"@id": "https://watermoldfire.net/washington-dc/water-damage-restoration/#breadcrumb"},
      "inLanguage": "en-US"
    },
    {
      "@type": "FAQPage",
      "@id": "https://watermoldfire.net/washington-dc/water-damage-restoration/#faq",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "How fast can you respond to water damage in Washington DC?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Our DC crews dispatch 24/7 from our Foggy Bottom office on Pennsylvania Avenue NW and target an on-site arrival of 60 minutes or less for emergency calls across all four quadrants of the District, Arlington, Alexandria, Bethesda, Chevy Chase and Silver Spring. During major storm events — the June 2012 derecho, the July 8, 2019 Northwest DC flash flooding, hurricane remnants moving up the mid-Atlantic — we run a triage system that prioritizes active leaks and Category 3 sewer-backup losses first."
          }
        },
        {
          "@type": "Question",
          "name": "Does DC homeowners insurance cover water damage?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Sudden and accidental water damage — burst supply lines, A/C overflows, wind-driven rain through a damaged roof — is generally covered under a standard DC HO-3 homeowners policy. Sewer backup is NOT covered by a standard policy and requires a separate sewer/drain backup endorsement, which many DC carriers offer as an add-on (typically $5,000-$25,000 in limits). Rising flood water — Potomac or Anacostia tidal surge, surface flooding from heavy rain that overwhelms the storm drain system — requires separate flood insurance through the NFIP or a private flood carrier. Properties in the Georgetown waterfront, the Southwest Waterfront, Hains Point, and other low-lying corridors near the rivers are typically in NFIP-mapped flood zones."
          }
        },
        {
          "@type": "Question",
          "name": "Why do DC basements and English basements flood during heavy rain?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Older parts of DC\'s sewer system are combined — stormwater and sanitary sewage share the same underground pipes — which is why the DC Water and Sewer Authority built the DC Clean Rivers Project and the Anacostia River Tunnel (one of the largest stormwater tunnel projects on the East Coast) to mitigate overflow events. Even with that infrastructure improvement, heavy summer thunderstorm rainfall still drives sewer backups into DC basements through floor drains, laundry standpipes and showers. English basements and garden-level units — the below-grade rental and in-law spaces that fill DC rowhouses across Capitol Hill, Logan Circle, Shaw, U Street, Adams Morgan and most of the historic neighborhoods — have the most direct exposure. The July 8, 2019 flash flooding was the most visible recent example, when roughly three to four inches of rain in an hour overwhelmed storm drains and flooded basements across Northwest DC."
          }
        },
        {
          "@type": "Question",
          "name": "Is sewer backup water dangerous?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Sewer backup water is Category 3 (\'black water\') under the IICRC S500 standard — it contains raw sewage, bacteria, parasites and chemical contaminants. It cannot simply be extracted and dried in place. Contaminated porous materials (drywall to the flood line, carpet, padding, insulation, particle-board cabinetry, finished English basement framing in some cases) must be removed and disposed of, remaining structural materials must be sanitized with EPA-registered antimicrobials, and the property requires verified post-cleaning before reconstruction can begin. We arrive in full PPE and follow Category 3 protocol on every DC sewer-backup job."
          }
        },
        {
          "@type": "Question",
          "name": "Do you handle water damage in DC rowhouses and condos?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes — and DC\'s rowhouse and condo stock is one of our most active scopes. Rowhouses share party walls and (in many older buildings) common plumbing chases and shared utility risers, so a supply line failure in one unit can drive moisture and damage into the neighbor\'s wall cavity within hours. Condo buildings in Foggy Bottom, the West End, Dupont, Logan, downtown, NoMa and the Capitol Riverfront have vertical plumbing risers where an upper-floor break sends water through every unit below. We coordinate routinely with DC condo associations, property managers and the District\'s HOA legal framework for multi-unit and cross-unit cleanup."
          }
        },
        {
          "@type": "Question",
          "name": "How long does water damage restoration take in a DC home?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Extraction and drying typically run 3 to 5 days. DC\'s pre-WWII rowhouse stock — Federal-era brick on the Hill, Victorian rowhouses in Logan Circle and Shaw, Wardman rowhouses in Petworth and Park View — often extends drying timelines because of the thermal mass of solid brick walls and original plaster. Reconstruction (drywall, flooring, paint, finish work) adds 1 to 4 weeks depending on scope and DC Department of Buildings permit timing. Historic district properties (Capitol Hill Historic District, Georgetown Historic District, Massachusetts Avenue Historic District and others) add Historic Preservation Office review time for any envelope-affecting work."
          }
        },
        {
          "@type": "Question",
          "name": "Should I call my insurance company or a restoration company first?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Call the restoration company first. DC homeowners policies require you to take reasonable steps to mitigate further damage, and mold can begin colonizing wet drywall and framing within 24 to 48 hours, especially in DC\'s humid summer climate. We stop the spread, photograph and document cause of loss for your adjuster, then coordinate with your insurer."
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
    <section class="hero-section">
        <div class="hero-content">
            <!-- Main Heading -->
            <h1 class="hero-title">
                Water Damage Restoration & Flood Cleanup in Washington, DC
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
                    <span>Washington</span>
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
                                <h2 id="intro-h">24/7 Water Damage &amp; Flood Cleanup for Washington DC Homes &amp; Businesses</h2>
                                <p>
                                Water damage in Washington DC arrives from more directions
                                than most East Coast cities. It comes up through English
                                basement floors in Capitol Hill and Logan Circle rowhouses
                                during summer thunderstorm sewer backups. It drives sideways
                                through Foggy Bottom and West End high-rise windows during a
                                hurricane remnant pushing up the mid-Atlantic. It wells up
                                out of an aging cast-iron stack in a 1910s Adams Morgan
                                Victorian. It comes down through ceiling planes after an
                                ice-dam freeze in a Wardman rowhouse, after the
                                <strong>July 8, 2019</strong> 3-4-inch-in-an-hour rainfall
                                that flooded basements across Northwest DC, and after every
                                major mid-Atlantic storm event since. Water Mold Fire
                                Restoration of Washington DC handles all of it &mdash; IICRC
                                Firm Certified crews dispatched 24 hours a day from our
                                Foggy Bottom office on Pennsylvania Avenue NW with
                                truck-mounted extractors, commercial-grade dehumidifiers,
                                thermal imaging cameras and the documentation discipline DC
                                insurance carriers expect.
                                </p>
                            </section>

                            <section class="local-context" aria-labelledby="local-h">
                                <h2 id="local-h">The DC Conditions That Drive Most Water Losses</h2>
                                <p>
                                We see the same loss patterns repeat across all four quadrants
                                of the District and the surrounding DMV, and most of them
                                trace back to Washington's specific climate, infrastructure
                                and building stock:
                                </p>
                                <ul class="listing">
                                    <li>
                                        <strong>Combined sewer backups during heavy rain.</strong>
                                        Older parts of DC's sewer system carry stormwater and
                                        sanitary sewage in the same pipes &mdash; a 19th-century
                                        design that the DC Water Clean Rivers Project and the
                                        Anacostia River Tunnel were specifically built to mitigate.
                                        Even with that infrastructure online, heavy summer
                                        thunderstorm rainfall still drives backflow up through
                                        basement floor drains, laundry standpipes and showers across
                                        the historic rowhouse neighborhoods. Category 3 contaminated
                                        water containing raw sewage. The July 8, 2019 flash flooding
                                        was the most visible recent example; the steady baseline is
                                        dozens of smaller backups every summer storm season.
                                    </li>
                                    <li>
                                        <strong>English basement &amp; garden unit flooding.</strong>
                                        DC rowhouses across Capitol Hill, Logan Circle, Shaw, U
                                        Street, Adams Morgan, Mount Pleasant, Columbia Heights,
                                        Petworth and Park View nearly all have below-grade English
                                        basements or garden-level rental units. These spaces sit
                                        below the rough sewer-line elevation, which means any
                                        backup or surface flooding lands there first. Finished
                                        English basements with drywall, flooring, cabinetry and
                                        sometimes full kitchens take losses that go well beyond
                                        what a mechanical basement would see.
                                    </li>
                                    <li>
                                        <strong>Hurricane remnants &amp; tropical storm flooding.</strong>
                                        DC sits at the northern edge of the East Coast tropical
                                        track. Even when a hurricane doesn't make landfall in the
                                        mid-Atlantic, remnants pushing up from the Gulf or moving
                                        across the Carolinas regularly drop major rainfall and wind
                                        damage on the DMV. Hurricane Isabel (September 2003) pushed
                                        Potomac tidal surge into Georgetown's lower streets, the
                                        Southwest Waterfront and Old Town Alexandria. Hurricane
                                        Agnes (June 1972) remains the worst flood event in DC area
                                        history. Tropical Storm Lee, Hurricane Sandy remnants,
                                        Hurricane Florence remnants and every active Atlantic
                                        season since has produced its own wave of DC area claims.
                                    </li>
                                    <li>
                                        <strong>The June 2012 derecho.</strong>
                                        The June 29, 2012 mid-Atlantic derecho remains the
                                        signature recent storm event in DC restoration memory:
                                        80-100 mph straight-line winds across the metro in a
                                        single Friday evening, more than a million customers
                                        without power for as long as ten days during peak summer
                                        heat, thousands of trees down on homes and vehicles,
                                        and a wave of secondary water damage and mold work that
                                        ran for months after as inadequately-dried storm damage
                                        produced cascading problems.
                                    </li>
                                    <li>
                                        <strong>Frozen pipe bursts (Jan&ndash;Feb).</strong>
                                        DC is not Minneapolis, but a January polar vortex visit
                                        still releases enough cold to fail vulnerable plumbing.
                                        Exterior-wall supply lines in pre-WWII rowhouses, unheated
                                        Wardman row basements, English basement laundry rooms
                                        plumbed against an exterior wall, and lake-house style
                                        weekend properties in the surrounding DMV all freeze and
                                        burst when temperatures hold below 15&deg;F for multiple
                                        days. We see a frozen-pipe wave every cold-snap winter.
                                    </li>
                                    <li>
                                        <strong>Rowhouse shared-wall water migration.</strong>
                                        DC's rowhouse density &mdash; Capitol Hill, Georgetown,
                                        Logan Circle, Shaw, U Street, Adams Morgan, Mount Pleasant,
                                        Columbia Heights, Petworth, Park View, Bloomingdale, Eckington,
                                        Brookland, H Street &mdash; means a leak in one party-wall
                                        cavity can produce visible damage in the neighbor's
                                        finished interior days later. Shared chimney chases and
                                        common plumbing stacks compound the cross-house exposure.
                                        Older rowhouses with original galvanized supply pipe and
                                        cast-iron drain stacks have particular failure rates.
                                    </li>
                                    <li>
                                        <strong>High-rise condo plumbing failures.</strong>
                                        Foggy Bottom, the West End, Dupont, downtown, NoMa,
                                        Capitol Riverfront, the Southwest Wharf and the modern
                                        condo towers of Rosslyn and Crystal City all share
                                        plumbing risers. A supply line break on an upper floor
                                        sends water through every unit below it. Cross-unit
                                        coordination, HOA approval and freight-elevator scheduling
                                        become as critical as the cleanup itself.
                                    </li>
                                    <li>
                                        <strong>A/C condensate overflows.</strong>
                                        DC summers run long and humid, A/C systems carry heavy
                                        condensate loads, and clogged drain lines and short-cycling
                                        oversized units produce slow ceiling leaks that often go
                                        undetected for weeks &mdash; one of the most common
                                        interior loss sources across the DC condo and rowhouse
                                        market.
                                    </li>
                                </ul>
                            </section>

                            <section class="basement-flooding" aria-labelledby="basement-h">
                                <h2 id="basement-h">English Basement Flooding &amp; Sewer Backup Cleanup in DC</h2>
                                <p>
                                DC's English basement is the city's signature residential
                                space and its most consistent water-damage exposure. Below
                                the main rowhouse floor, often with a separate exterior
                                entrance, frequently rented out as a garden unit or used as
                                an in-law suite, the English basement sits below sewer-line
                                elevation in most blocks. When a heavy summer rain event
                                overwhelms the combined sewer infrastructure, the path of
                                least resistance is back up through the lowest connected
                                drain &mdash; the English basement floor drain, the
                                laundry standpipe, the basement shower. Category 3
                                contaminated water enters across the entire floor.
                                </p>
                                <p>
                                Our English basement and sewer backup cleanup process is
                                built around that reality. We arrive in full PPE for any
                                backup involving sewer water, extract standing water with
                                truck-mounted pumps, remove and dispose of contaminated
                                porous materials (drywall to the flood line, carpet, padding,
                                insulation, particle-board cabinetry, sometimes finished
                                framing), apply EPA-registered antimicrobials to remaining
                                structural materials, and deploy commercial drying equipment
                                sized for the volume DC basement floods actually produce. We
                                work with DC carriers on the sewer backup endorsement and
                                document cause-of-loss carefully so the right portion of the
                                job is billed to the right carrier.
                                </p>
                                <p>
                                <strong>Important note on insurance:</strong> standard DC
                                HO-3 homeowners policies do <em>not</em> include sewer/drain
                                backup coverage. That coverage comes from a separate
                                endorsement most carriers offer (typically $5,000-$25,000 in
                                limits). Surface flooding from heavy rain that overwhelms
                                the storm drain system, or rising Potomac or Anacostia
                                water, requires NFIP or private flood insurance. Properties
                                in the Georgetown waterfront, the Southwest Waterfront,
                                Hains Point and other low-lying river corridors are typically
                                in NFIP-mapped flood zones.
                                </p>
                            </section>

                            <section class="process" aria-labelledby="process-h">
                                <h2 id="process-h">Our Water Damage Restoration Process</h2>
                                <p>
                                Every job we run in DC follows the IICRC S500 Standard for
                                Professional Water Damage Restoration &mdash; the published
                                industry consensus standard:
                                </p>
                                <ol>
                                    <li><strong>Emergency response &amp; assessment (Hour 1).</strong> Crew dispatch, source identification and shutoff, thermal imaging and moisture mapping. Documentation begins on minute one.</li>
                                    <li><strong>Water extraction (Hours 1&ndash;6).</strong> Truck-mounted and portable extractors pull standing water. Category 3 sewer-backup losses get full PPE and porous-material removal.</li>
                                    <li><strong>Structural drying &amp; dehumidification (Days 1&ndash;5).</strong> Air movers and LGR dehumidifiers create dry-air conditions. DC's summer ambient humidity often extends this stage 24-48 hours past drier-climate norms.</li>
                                    <li><strong>Antimicrobial treatment &amp; mold prevention.</strong> EPA-registered antimicrobials applied to wet materials &mdash; non-negotiable in DC's humid climate.</li>
                                    <li><strong>Daily monitoring &amp; documentation.</strong> Moisture readings, temperature and RH logged daily until materials hit dry standard.</li>
                                    <li><strong>Reconstruction.</strong> Drywall, flooring, cabinetry, paint and finish carpentry, coordinated with licensed DC trade subcontractors and properly permitted through the DC Department of Buildings, with Historic Preservation Office coordination on historic-district properties.</li>
                                </ol>
                            </section>

                            <section class="categories" aria-labelledby="cats-h">
                                <h2 id="cats-h">Water Damage Categories We Handle</h2>
                                <ul class="listing">
                                    <li><strong>Category 1 (clean water).</strong> Broken supply lines, refrigerator and ice-maker lines, water heater failures, frozen pipe bursts on the supply side, rainwater intrusion through a clean envelope.</li>
                                    <li><strong>Category 2 (gray water).</strong> Dishwasher and washing machine discharge, toilet overflows (no feces), A/C condensate through contaminated pans, sump pump failures going stale.</li>
                                    <li><strong>Category 3 (black water).</strong> Sewer backups (the dominant DC residential basement category), Potomac or Anacostia tidal floodwater, surface floodwater from storm events. Requires material removal, full PPE and verified post-remediation cleaning.</li>
                                </ul>
                            </section>

                            <section class="insurance" aria-labelledby="ins-h">
                                <h2 id="ins-h">DC Insurance &amp; Documentation</h2>
                                <p>
                                Washington's homeowners insurance market is more stable than
                                the Southeast hurricane markets and the Gulf Coast, but the
                                policy structure has its own DC-specific traps. Sudden and
                                accidental water damage from supply-line and appliance
                                failures is covered under a standard HO-3 policy. Sewer/drain
                                backup coverage is a separate endorsement many DC homeowners
                                only realize they needed after the first basement backup &mdash;
                                typical limits of $5,000-$25,000 may be insufficient for a
                                fully finished English basement with kitchen and bath. Sump
                                pump failure is typically tied to the sewer backup rider.
                                Surface flooding from a heavy storm that overwhelms storm
                                drains, and rising Potomac or Anacostia water, requires
                                separate NFIP or private flood insurance. We build every
                                DC job file the way an adjuster needs to see it: thermal
                                images, moisture maps, daily readings, photo logs and a
                                clear written scope, and we coordinate directly with your
                                adjuster.
                                </p>
                            </section>

                            <section class="service-area" aria-labelledby="area-h">
                                <h2 id="area-h">Where We Respond in Washington DC &amp; the DMV</h2>
                                <p>
                                All four quadrants of the District. <strong>Northwest:</strong>
                                Foggy Bottom, West End, Georgetown, Burleith, Glover Park,
                                Palisades, Spring Valley, AU Park, Tenleytown, Friendship
                                Heights, Chevy Chase DC, Cleveland Park, Woodley Park,
                                Kalorama, Dupont Circle, Logan Circle, U Street, Shaw, Mount
                                Vernon Triangle, Penn Quarter, Chinatown, Downtown, Adams
                                Morgan, Mount Pleasant, Columbia Heights, Petworth, Park
                                View, Brightwood, Takoma DC. <strong>Northeast:</strong>
                                Brookland, Edgewood, Eckington, NoMa, Trinidad, H Street,
                                Atlas District, Capitol Hill North, Michigan Park, Woodridge,
                                Riggs Park, Fort Lincoln, Deanwood. <strong>Southeast:</strong>
                                Capitol Hill South, Navy Yard, Capitol Riverfront, Anacostia,
                                Historic Anacostia, Congress Heights, Hillcrest, Fairlawn.
                                <strong>Southwest:</strong> Southwest Waterfront, the Wharf,
                                Buzzard Point, L'Enfant Plaza, Bellevue.
                                <strong>Northern Virginia:</strong> Arlington, Rosslyn,
                                Courthouse, Clarendon, Ballston, Crystal City, Pentagon City,
                                Alexandria, Old Town, Del Ray, McLean, Falls Church, Vienna,
                                Tysons. <strong>Suburban Maryland:</strong> Bethesda, Chevy
                                Chase MD, Silver Spring, Takoma Park, College Park,
                                Hyattsville, Mount Rainier, Rockville.
                                </p>
                            </section>

                            <section class="faq bg-light mb-4" aria-labelledby="faq-h">
                                <h2 id="faq-h">DC Water Damage Restoration FAQs</h2>

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
                                                How fast can you respond to water damage in Washington DC?
                                            </button>
                                        </h3>
                                        <div id="collapse_1"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_1"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>
                                                Our DC crews dispatch 24/7 from our Foggy Bottom office on
                                                Pennsylvania Avenue NW and target an on-site arrival of 60
                                                minutes or less across all four quadrants and the inner DMV.
                                                During major storm events &mdash; the June 2012 derecho, the
                                                July 8, 2019 Northwest DC flash flooding, hurricane remnants
                                                &mdash; we triage active leaks and Category 3 sewer-backup
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
                                                Does DC homeowners insurance cover water damage?
                                            </button>
                                        </h3>
                                        <div id="collapse_2"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_2"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>
                                                Sudden and accidental water damage is generally covered under
                                                a standard DC HO-3 policy. Sewer backup is NOT &mdash; that
                                                requires a separate endorsement (typically $5,000-$25,000 in
                                                limits). Rising flood water (Potomac or Anacostia surge,
                                                surface flooding) requires separate NFIP or private flood
                                                insurance.
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
                                                Why do DC basements and English basements flood during heavy rain?
                                            </button>
                                        </h3>
                                        <div id="collapse_3"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_3"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>
                                                Older DC sewer infrastructure is combined &mdash; stormwater
                                                and sanitary sewage share pipes. Heavy summer thunderstorm
                                                rainfall drives backflow up through basement floor drains,
                                                laundry standpipes and showers. English basements sit below
                                                sewer-line elevation and take the brunt. The July 8, 2019
                                                flash flooding was the recent benchmark.
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
                                                Is sewer backup water dangerous?
                                            </button>
                                        </h3>
                                        <div id="collapse_4"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_4"
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

                                    <!-- FAQ 5 -->
                                    <div class="accordion-item">
                                        <h3 class="accordion-header" id="heading_5">
                                            <button class="accordion-button collapsed"
                                                type="button"
                                                data-bs-toggle="collapse"
                                                data-bs-target="#collapse_5"
                                                aria-expanded="false"
                                                aria-controls="collapse_5">
                                                Do you handle water damage in DC rowhouses and condos?
                                            </button>
                                        </h3>
                                        <div id="collapse_5"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_5"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>
                                                Yes &mdash; one of our most active scopes. Rowhouses share
                                                party walls and plumbing chases that move moisture between
                                                houses. Condo buildings in Foggy Bottom, the West End, NoMa
                                                and Capitol Riverfront have vertical risers that cascade
                                                water through every unit below an upper-floor break.
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
                                                How long does water damage restoration take in a DC home?
                                            </button>
                                        </h3>
                                        <div id="collapse_6"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_6"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>
                                                Extraction and drying 3 to 5 days, often longer in pre-WWII
                                                rowhouse construction with solid brick walls and original
                                                plaster. Reconstruction adds 1 to 4 weeks depending on scope
                                                and DC Department of Buildings permit timing. Historic
                                                district properties add Historic Preservation Office review
                                                time.
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
                                                Should I call my insurance company or a restoration company first?
                                            </button>
                                        </h3>
                                        <div id="collapse_7"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_7"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>
                                                Call the restoration company first. DC policies require
                                                mitigation. Mold colonizes within 24-48 hours, especially
                                                in DC's humid summer climate. We document cause-of-loss for
                                                your adjuster, then coordinate with your insurer.
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </section>

                            <section class="contact" aria-labelledby="contact-h">
                                <h2 id="contact-h">Call DC's Water Damage Restoration Team</h2>
                                <address>
                                    <strong>Water Mold Fire Restoration of Washington DC</strong><br>
                                    2200 Pennsylvania Avenue NW<br>
                                    Washington, DC 20037<br>
                                    <a href="tel:+12026500299">202-650-0299</a> &middot;
                                    <a href="mailto:washingtondc@watermoldfire.net">washingtondc@watermoldfire.net</a><br>
                                    24/7 Emergency Service<br>
                                    IICRC Firm Certified
                                </address>
                                <p>
                                Active sewer backup, English basement flood, frozen pipe
                                burst, or any water loss in DC or the DMV?
                                <a class="cta" href="tel:+12026500299">Call 202-650-0299</a>
                                and a crew will be rolling.
                                </p>
                                <p class="back-to-hub">
                                &larr; Back to
                                <a href="<?php echo site_url("washington-dc/"); ?>">all Washington DC restoration services</a>
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