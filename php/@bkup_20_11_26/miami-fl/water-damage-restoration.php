<?php
require_once __DIR__ . '/../includes/init.php';

$pagename = "miami-fl/water-damage-restoration.php";

$title = "Water Damage &amp; Flood Cleanup in Miami, FL | 24/7";

$meta_description = "24/7 water damage restoration & flood cleanup in Miami, FL. Emergency extraction, drying, storm & sewage cleanup. IICRC certified. Brickell-based. 305-999-5144.";

$meta_keywords = "water damage restoration miami, water damage repair miami, water damage cleanup miami, flood cleanup miami, flood damage restoration miami, hurricane flood damage miami, miami beach flood cleanup";

$canonical_url = "https://watermoldfire.net/miami-fl/water-damage-restoration/";

$geo_tags = '
<meta name="geo.region" content="US-FL">
<meta name="geo.placename" content="Miami">
<meta name="geo.position" content="25.7800;-80.1850">
<meta name="ICBM" content="25.7800, -80.1850">
';

$open_graph = '
<meta property="og:type" content="website">
<meta property="og:site_name" content="Water Mold Fire Restoration">
<meta property="og:title" content="Water Damage &amp; Flood Cleanup in Miami, FL | 24/7">
<meta property="og:description" content="Emergency water damage and flood cleanup in Miami. Extraction, drying, storm and sewage cleanup, full insurance documentation. 24/7 from downtown Miami.">
<meta property="og:url" content="https://watermoldfire.net/miami-fl/water-damage-restoration/">
<meta property="og:image" content="'.site_url().'images/logo.webp">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="og:locale" content="en_US">
';

$twitter = '
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Water Damage &amp; Flood Cleanup in Miami, FL">
<meta name="twitter:description" content="24/7 water extraction, flood cleanup, drying & mold prevention in Miami. IICRC certified.">
<meta name="twitter:image" content="'.site_url().'images/logo.webp">
';

$schema_ld_json = '
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "@id": "https://watermoldfire.net/miami-fl/water-damage-restoration/#service",
      "name": "Water Damage Restoration & Flood Cleanup in Miami, FL",
      "serviceType": ["Water Damage Restoration","Flood Damage Cleanup"],
      "description": "24/7 emergency water damage restoration and flood cleanup in Miami, FL. Water extraction, flood damage repair, structural drying, dehumidification, mold prevention, content pack-out and insurance documentation for Category 1, 2 and 3 water losses including storm surge, king tide flooding and sewage backups across Miami-Dade County.",
      "url": "https://watermoldfire.net/miami-fl/water-damage-restoration/",
      "provider": {"@id": "https://watermoldfire.net/miami-fl/#localbusiness"},
      "areaServed": [
        {"@type": "City", "name": "Miami"},
        {"@type": "City", "name": "Miami Beach"},
        {"@type": "City", "name": "Coral Gables"},
        {"@type": "City", "name": "Aventura"},
        {"@type": "City", "name": "Sunny Isles Beach"},
        {"@type": "City", "name": "Key Biscayne"},
        {"@type": "City", "name": "Doral"},
        {"@type": "City", "name": "Hialeah"},
        {"@type": "City", "name": "Pinecrest"},
        {"@type": "City", "name": "Homestead"}
      ],
      "hoursAvailable": {
        "@type": "OpeningHoursSpecification",
        "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"],
        "opens": "00:00",
        "closes": "23:59"
      },
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Water Damage & Flood Cleanup Services",
        "itemListElement": [
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Emergency Water Extraction"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Flood Damage Cleanup & Repair"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Hurricane & Storm Surge Flood Cleanup"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "King Tide Flooding Cleanup"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Structural Drying & Dehumidification"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Burst Pipe & Pipe Leak Cleanup"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Sewage Backup Cleanup (Category 3 Water)"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "A/C Condensate & Appliance Leak Cleanup"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "High-Rise Condo Water Damage"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Content Pack-Out & Restoration"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Insurance Claim Documentation"}}
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
        "@type": "PostalAddress",
        "streetAddress": "100 Biscayne Blvd",
        "addressLocality": "Miami",
        "addressRegion": "FL",
        "postalCode": "33132",
        "addressCountry": "US"
      },
      "geo": {"@type": "GeoCoordinates","latitude": 25.7800,"longitude": -80.1850},
      "aggregateRating": {"@type": "AggregateRating","ratingValue": "5.0","reviewCount": "118"}
    },
    {
      "@type": "BreadcrumbList",
      "@id": "https://watermoldfire.net/miami-fl/water-damage-restoration/#breadcrumb",
      "itemListElement": [
        {"@type": "ListItem","position": 1,"name": "Home","item": "https://watermoldfire.net/"},
        {"@type": "ListItem","position": 2,"name": "Miami, FL","item": "https://watermoldfire.net/miami-fl/"},
        {"@type": "ListItem","position": 3,"name": "Water Damage Restoration","item": "https://watermoldfire.net/miami-fl/water-damage-restoration/"}
      ]
    },
    {
      "@type": "WebPage",
      "@id": "https://watermoldfire.net/miami-fl/water-damage-restoration/#webpage",
      "url": "https://watermoldfire.net/miami-fl/water-damage-restoration/",
      "name": "Water Damage Restoration in Miami, FL",
      "isPartOf": {"@id": "https://watermoldfire.net/#website"},
      "about": {"@id": "https://watermoldfire.net/miami-fl/water-damage-restoration/#service"},
      "breadcrumb": {"@id": "https://watermoldfire.net/miami-fl/water-damage-restoration/#breadcrumb"},
      "inLanguage": "en-US"
    },
    {
      "@type": "FAQPage",
      "@id": "https://watermoldfire.net/miami-fl/water-damage-restoration/#faq",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "How fast can you respond to water damage in Miami?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Our Miami crews dispatch 24/7 from our Biscayne Boulevard facility in downtown Miami and target an on-site arrival of 60 minutes or less for emergency calls across Miami-Dade County. During named storms, king-tide flooding events and city-wide losses, we run a triage system that prioritizes active leaks and Category 3 sewage losses first."
          }
        },
        {
          "@type": "Question",
          "name": "Does Florida homeowners insurance cover water damage in Miami?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Sudden and accidental water damage — burst supply lines, A/C overflows, wind-driven rain through a damaged roof — is generally covered under a standard Florida HO-3 policy. Rising flood water (storm surge from Biscayne Bay, king tide intrusion, hurricane runoff) is not covered by a standard policy and requires separate flood insurance through the NFIP or a private flood carrier. Miami\'s insurance environment has tightened further since the post-Surfside reforms and the 2022/2023 Florida insurance overhaul, so accurate cause-of-loss documentation is critical."
          }
        },
        {
          "@type": "Question",
          "name": "Do you handle water damage in Miami high-rise condos?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes — and Miami\'s vertical condo stock (Brickell, downtown, Sunny Isles, Aventura, Bal Harbour, Mid Beach) is one of our most active service categories. High-rise water losses present unique coordination challenges: shared plumbing stacks, multi-unit cross-contamination, HOA and property-management approvals, freight-elevator access and condo bylaws around contractor entry. We work routinely with Miami condo boards and property managers across the city\'s largest buildings."
          }
        },
        {
          "@type": "Question",
          "name": "What\'s the difference between water damage and flood damage in Miami?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Insurance policies treat them as separate perils. Water damage refers to losses originating inside the building envelope (pipes, appliances, A/C, roof leaks) and is generally covered by HO-3 policies. Flood damage refers to rising surface water from outside (storm surge, king tide flooding, overflowing canals, hurricane runoff) and requires separate flood insurance. In Miami this distinction matters more than it does almost anywhere else in the country because king-tide and sea-level flooding events affect coastal properties multiple times per year — we document cause-of-loss carefully so the correct carrier is billed."
          }
        },
        {
          "@type": "Question",
          "name": "How long does water damage restoration take in a Miami home?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Extraction and drying typically run 3 to 5 days. Miami\'s high ambient humidity often extends drying timelines past inland norms — coastal properties on Biscayne Bay and the Atlantic side routinely see outdoor relative humidity above 75%. Reconstruction (drywall, flooring, paint) adds 1 to 3 weeks depending on scope and on Miami-Dade permit cycles, which can run longer than other Florida counties for HVHZ-affected work."
          }
        },
        {
          "@type": "Question",
          "name": "Should I call my insurance company or a restoration company first?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Call the restoration company first. Florida policies require you to take reasonable steps to mitigate further damage, and in Miami\'s climate mold can begin colonizing wet materials within 24 to 48 hours. We stop the spread, photograph and document cause of loss for your adjuster, then coordinate with your insurer."
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
                Water Damage Restoration & Flood Cleanup in Miami, FL
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
                                <h2 id="intro-h">24/7 Water Damage &amp; Flood Cleanup for Miami Homes &amp; Businesses</h2>
                                <p>
                                Water damage in Miami arrives from more directions than almost
                                any other US city. It comes up through ground-floor units in
                                Mid Beach and Edgewater during sunny-day king tides. It
                                drives sideways through a 30th-floor balcony slider in Brickell
                                during a tropical squall. It wells up out of an aging cast-iron
                                stack in a 1960s Coconut Grove condo. And every few years it
                                arrives as a named-storm event: Hurricane Andrew (1992) is still
                                the benchmark, but Hurricane Wilma (2005), Hurricane Irma (2017)
                                and every season since has produced its own wave of claims.
                                Water Mold Fire Restoration of Miami handles all of it &mdash;
                                IICRC-certified crews dispatched 24 hours a day from our
                                Biscayne Boulevard facility in downtown Miami with truck-mounted
                                extractors, commercial-grade dehumidifiers, thermal imaging
                                cameras and the documentation discipline Florida insurance
                                carriers now require post-2022 reforms.
                                </p>
                            </section>

                            <section class="local-context" aria-labelledby="local-h">
                                <h2 id="local-h">The Miami Conditions That Drive Most Water Losses</h2>
                                <p>
                                We see the same loss patterns repeat across Miami-Dade County,
                                and most of them trace back to Miami's specific geography,
                                climate and building stock:
                                </p>
                                <ul class="listing">
                                    <li>
                                        <strong>King tide &amp; sea-level flooding.</strong>
                                        Miami Beach now operates one of the largest municipal
                                        stormwater pump systems in the country, but seasonal king
                                        tides still routinely flood ground-floor units, garages and
                                        lobbies across Mid Beach, North Beach, Edgewater, the
                                        Venetian Islands and the low-lying corridors of Coral Gables.
                                        This is Category 3 brackish water under IICRC standards
                                        &mdash; it cannot simply be extracted and dried in place.
                                    </li>
                                    <li>
                                        <strong>Hurricane wind-driven rain through HVHZ envelopes.</strong>
                                        Even with the Miami-Dade HVHZ code &mdash; the most stringent
                                        residential construction code in the country &mdash; pre-2002
                                        buildings have window, door and impact-glass assemblies that
                                        fail under sustained 80 mph-plus gusts. Hurricane Andrew's
                                        legacy is the code we have today; everything built before
                                        Andrew was tested and largely failed.
                                    </li>
                                    <li>
                                        <strong>High-rise condo plumbing failures.</strong>
                                        Miami's signature vertical density &mdash; Brickell, downtown,
                                        Sunny Isles, Aventura, Bal Harbour, Mid Beach &mdash; means
                                        plumbing failures cascade vertically. A supply line break on
                                        the 28th floor sends water through every unit below it. Older
                                        Miami condos along Collins Avenue and Biscayne Boulevard with
                                        original cast-iron drain stacks have similar exposure on the
                                        sanitary side. Cross-unit coordination, HOA approval and
                                        elevator scheduling become as critical as the actual cleanup.
                                    </li>
                                    <li>
                                        <strong>A/C condensate overflows.</strong>
                                        Air conditioning systems in Miami run essentially every day
                                        of the year, producing gallons of condensate per system per
                                        day. Clogged drain lines and short-cycling oversized units
                                        produce slow ceiling leaks that often go undetected for
                                        weeks &mdash; one of the single most common interior loss
                                        sources we respond to.
                                    </li>
                                    <li>
                                        <strong>Slab leaks in pre-1990 coastal copper.</strong>
                                        Single-family stock in Coral Gables, Coconut Grove, Pinecrest
                                        and Palmetto Bay typically sits on slab-on-grade foundations
                                        with copper supply lines. Miami's saline atmosphere and
                                        acidic soils accelerate pinhole leak formation in pre-1990
                                        copper, particularly east of US-1.
                                    </li>
                                    <li>
                                        <strong>Surfside-driven inspection triggers.</strong>
                                        Since the June 2021 Champlain Towers South collapse and the
                                        subsequent state condo-safety reforms, water damage in
                                        Miami-Dade condos over 25 years old now routinely triggers
                                        structural review, mold assessment and engineering scrutiny
                                        that did not exist before. Restoration jobs that used to
                                        close in a week now run weeks longer for the documentation
                                        the post-Surfside environment demands.
                                    </li>
                                </ul>
                            </section>

                            <section class="flood" aria-labelledby="flood-h">
                                <h2 id="flood-h">Flood Cleanup &amp; Flood Damage Restoration in Miami</h2>
                                <p>
                                Miami residents call any water in the house "a flood," but the
                                insurance industry and the IICRC draw a hard line: a true flood
                                is rising surface water from outside the building &mdash; storm
                                surge from Biscayne Bay, overflowing canals, street flooding,
                                hurricane runoff, king tide intrusion. By IICRC S500 standards,
                                all floodwater is Category 3 ("black water") because it carries
                                soil, hydrocarbons, pesticides, bacteria and sewage from miles
                                around. It cannot simply be extracted and dried in place.
                                </p>
                                <p>
                                Our Miami flood damage cleanup process is built around that
                                reality. We arrive in full PPE, extract standing floodwater
                                with truck-mounted pumps, remove and dispose of contaminated
                                porous materials, apply EPA-registered antimicrobials to
                                remaining framing and slab, and deploy commercial drying
                                equipment sized for the volume of water Miami flood events
                                actually produce. We've responded to flooded ground floors,
                                garages, lobbies and first-floor condos across the city,
                                including seasonal Biscayne Bay overtopping in the Venetian
                                Islands, Star Island, Hibiscus Island and the Brickell Key area.
                                </p>
                                <p>
                                <strong>Important note on insurance:</strong> standard Florida
                                HO-3 homeowners policies do <em>not</em> cover flood damage.
                                That coverage comes from a separate NFIP or private flood
                                policy. We document cause-of-loss carefully on every job so the
                                right carrier is billed for the right portion of the work
                                &mdash; many Miami losses involve both wind-driven rain
                                (homeowners) and flood (NFIP) on the same property.
                                </p>
                            </section>

                            <section class="process" aria-labelledby="process-h">
                                <h2 id="process-h">Our Water Damage Restoration Process</h2>
                                <p>
                                Every job we run in Miami follows the IICRC S500 Standard for
                                Professional Water Damage Restoration:
                                </p>
                                <ol>
                                    <li><strong>Emergency response &amp; assessment (Hour 1).</strong> Crew dispatch, source identification and shutoff, thermal imaging and moisture mapping. Documentation begins on minute one.</li>
                                    <li><strong>Water extraction (Hours 1&ndash;6).</strong> Truck-mounted and portable extractors pull standing water. Cat 3 losses get full PPE and porous-material removal.</li>
                                    <li><strong>Structural drying &amp; dehumidification (Days 1&ndash;5).</strong> Air movers and LGR dehumidifiers create dry-air conditions. Miami's ambient humidity often extends this stage 24&ndash;48 hours past inland norms.</li>
                                    <li><strong>Antimicrobial treatment &amp; mold prevention.</strong> EPA-registered antimicrobials applied to wet materials &mdash; non-negotiable in Miami's climate.</li>
                                    <li><strong>Daily monitoring &amp; documentation.</strong> Moisture readings, temperature and RH logged daily until materials hit dry standard.</li>
                                    <li><strong>Reconstruction.</strong> Drywall, flooring, cabinetry, paint and finish carpentry, all in-house, all permitted through Miami-Dade.</li>
                                </ol>
                            </section>

                            <section class="categories" aria-labelledby="cats-h">
                                <h2 id="cats-h">Water Damage Categories We Handle</h2>
                                <ul class="listing">
                                    <li><strong>Category 1 (clean water).</strong> Broken supply lines, refrigerator and ice-maker lines, water heater failures, rainwater intrusion through a clean envelope.</li>
                                    <li><strong>Category 2 (gray water).</strong> Dishwasher and washing machine discharge, toilet overflows (no feces), A/C condensate through contaminated pans.</li>
                                    <li><strong>Category 3 (black water).</strong> Sewage backups, storm surge from Biscayne Bay, king tide saltwater intrusion, floodwater. Requires material removal, full PPE and verified post-remediation cleaning.</li>
                                </ul>
                            </section>

                            <section class="insurance" aria-labelledby="ins-h">
                                <h2 id="ins-h">Florida Insurance &amp; Documentation</h2>
                                <p>
                                Florida's homeowners insurance environment has tightened
                                significantly since the 2022 and 2023 reforms (SB 2A and
                                related claims-handling changes), and Miami-Dade has been hit
                                harder than any other county. Carriers are stricter about
                                cause-of-loss documentation; many private carriers have pulled
                                out of Miami-Dade entirely, leaving Citizens as the carrier
                                of last resort for thousands of properties. We build every job
                                file the way an adjuster needs to see it: thermal images,
                                moisture maps, daily readings, photo logs, and a clear written
                                scope. We work with Citizens and all remaining major carriers,
                                and we coordinate directly with your adjuster.
                                </p>
                            </section>

                            <section class="service-area" aria-labelledby="area-h">
                                <h2 id="area-h">Where We Respond in Miami &amp; Miami-Dade County</h2>
                                <p>
                                Our water damage crews respond throughout Miami and Miami-Dade
                                County &mdash; Brickell, Downtown Miami, Edgewater, Wynwood,
                                Little Havana, Coconut Grove, Coral Gables, South Beach, Mid
                                Beach, North Beach, Bal Harbour, Sunny Isles Beach, Aventura,
                                Key Biscayne, North Miami, Doral, Hialeah, Pinecrest, Palmetto
                                Bay, Kendall and Homestead.
                                </p>
                            </section>

                            <section class="faq bg-light mb-4" aria-labelledby="faq-h">
                                <h2 id="faq-h">Miami Water Damage Restoration FAQs</h2>

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
                                                How fast can you respond to water damage in Miami?
                                            </button>
                                        </h3>
                                        <div id="collapse_1"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_1"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>
                                                Our Miami crews dispatch 24/7 from our Biscayne Boulevard
                                                facility in downtown Miami and target an on-site arrival of
                                                60 minutes or less across Miami-Dade County. During named
                                                storms and king-tide events, we triage active leaks and Cat 3
                                                sewage losses first.
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
                                                Does Florida homeowners insurance cover water damage in Miami?
                                            </button>
                                        </h3>
                                        <div id="collapse_2"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_2"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>
                                                Sudden and accidental water damage is generally covered under
                                                a standard Florida HO-3 policy. Rising flood water (storm
                                                surge, king tide, hurricane runoff) is not covered by a
                                                standard policy and requires separate NFIP or private flood
                                                insurance. Miami's insurance market has tightened further
                                                since 2022 reforms, so cause-of-loss documentation is critical.
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
                                                Do you handle water damage in Miami high-rise condos?
                                            </button>
                                        </h3>
                                        <div id="collapse_3"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_3"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>
                                                Yes &mdash; Miami's vertical condo stock (Brickell, downtown,
                                                Sunny Isles, Aventura, Bal Harbour, Mid Beach) is one of our
                                                most active categories. We work routinely with Miami condo
                                                boards and property managers, coordinate freight-elevator
                                                access, and handle multi-unit cross-contamination scenarios.
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
                                                What's the difference between water damage and flood damage in Miami?
                                            </button>
                                        </h3>
                                        <div id="collapse_4"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_4"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>
                                                Water damage is internal-origin (pipes, appliances, A/C, roof);
                                                flood damage is rising surface water from outside (storm surge,
                                                king tide, runoff). In Miami this distinction matters more than
                                                almost anywhere &mdash; king-tide events flood coastal properties
                                                multiple times per year and trigger NFIP claims, not HO-3 claims.
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
                                                How long does water damage restoration take in a Miami home?
                                            </button>
                                        </h3>
                                        <div id="collapse_5"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_5"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>
                                                Extraction and drying typically run 3 to 5 days, often longer
                                                on coastal properties where outdoor RH stays above 75%.
                                                Reconstruction adds 1 to 3 weeks depending on Miami-Dade permit
                                                cycles, which can run longer than other Florida counties.
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
                                                Should I call my insurance company or a restoration company first?
                                            </button>
                                        </h3>
                                        <div id="collapse_6"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_6"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>
                                                Call the restoration company first. Florida policies require
                                                you to mitigate further damage, and in Miami's climate mold
                                                colonizes within 24 to 48 hours. We document cause-of-loss
                                                for your adjuster, then coordinate with your insurer.
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </section>

                            <section class="contact" aria-labelledby="contact-h">
                                <h2 id="contact-h">Call Miami's Water Damage Restoration Team</h2>
                                <address>
                                    <strong>Water Mold Fire Restoration of Miami</strong><br>
                                    100 Biscayne Blvd<br>
                                    Miami, FL 33132<br>
                                    <a href="tel:+13059995144">305-999-5144</a> &middot;
                                    <a href="mailto:miami@watermoldfire.net">miami@watermoldfire.net</a><br>
                                    24/7 Emergency Service
                                    </address>
                                <p>
                                Active water loss in Miami or Miami Beach?
                                <a class="cta" href="tel:+13059995144">Call 305-999-5144</a> and
                                a crew will be rolling.
                                </p>
                                <p class="back-to-hub">
                                &larr; Back to
                                <a href="<?php echo site_url("miami-fl/"); ?>">all Miami restoration services</a>
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