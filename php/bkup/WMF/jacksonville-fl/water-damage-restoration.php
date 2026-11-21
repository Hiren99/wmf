<?php
require_once __DIR__ . '/../includes/init.php';

$pagename = "jacksonville-fl/water-damage-restoration.php";

$title = "Water Damage &amp; Flood Cleanup in Jacksonville, FL | 24/7";

$meta_description = "24/7 water damage & flood cleanup in Jacksonville. Hurricane Helene & Matthew storm surge, St Johns River flooding, condo cascades. IICRC certified. 904-839-0449.";

$meta_keywords = "water damage restoration jacksonville, water damage repair jacksonville, water damage cleanup jacksonville, emergency water extraction jacksonville, burst pipe cleanup, flood cleanup jacksonville, flood damage restoration jacksonville, flood damage repair, flooded house cleanup, hurricane flood damage, storm flood cleanup";

$canonical_url = "https://watermoldfire.net/jacksonville-fl/water-damage-restoration/";

$geo_tags = '
<meta name="geo.region" content="US-FL">
<meta name="geo.placename" content="Jacksonville">
<meta name="geo.position" content="30.2200;-81.5570">
<meta name="ICBM" content="30.2200, -81.5570">
';

$open_graph = '
<meta property="og:type" content="website">
<meta property="og:site_name" content="Water Mold Fire Restoration">
<meta property="og:title" content="Water Damage &amp; Flood Cleanup in Jacksonville, FL | 24/7">
<meta property="og:description" content="Emergency water damage and flood cleanup in Jacksonville. Hurricane response, St Johns River flooding, condo cascades. 24/7 Southside dispatch.">
<meta property="og:url" content="https://watermoldfire.net/jacksonville-fl/water-damage-restoration/">
<meta property="og:image" content="'.site_url().'images/logo.webp">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="og:locale" content="en_US">
';

$twitter = '
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Water Damage &amp; Flood Cleanup in Jacksonville, FL">
<meta name="twitter:description" content="24/7 water extraction, flood cleanup, drying & mold prevention in Jacksonville. IICRC certified.">
<meta name="twitter:image" content="'.site_url().'images/logo.webp">
';

$schema_ld_json = '
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "@id": "https://watermoldfire.net/jacksonville-fl/water-damage-restoration/#service",
      "name": "Water Damage Restoration & Flood Cleanup in Jacksonville, FL",
      "serviceType": ["Water Damage Restoration","Flood Damage Cleanup","Hurricane Water Damage","River Flood Cleanup"],
      "description": "24/7 emergency water damage restoration and flood cleanup in Jacksonville, FL. Hurricane water intrusion response (Helene 2024, Matthew 2016, Irma 2017), St. Johns River flooding, condo plumbing cascades, A/C condensate overflows, slab leaks and storm surge across Duval County, the Beaches, St. Johns County and the Northeast Florida metro.",
      "url": "https://watermoldfire.net/jacksonville-fl/water-damage-restoration/",
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
        "name": "Water Damage & Flood Cleanup Services",
        "itemListElement": [
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Emergency Water Extraction"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Hurricane & Storm Water Damage Cleanup"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "St. Johns River Flood Cleanup"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Coastal Storm Surge Flood Cleanup"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "High-Rise Condo & Beachfront Water Damage"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Slab Leak Water Damage"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "A/C Condensate & Appliance Leak Cleanup"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Burst Pipe & Pipe Leak Cleanup"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Sewage Backup Cleanup (Category 3 Water)"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Structural Drying & Dehumidification"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Content Pack-Out & Restoration"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Insurance Claim Documentation"}}
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
      "@type": "BreadcrumbList","@id": "https://watermoldfire.net/jacksonville-fl/water-damage-restoration/#breadcrumb",
      "itemListElement": [
        {"@type": "ListItem","position": 1,"name": "Home","item": "https://watermoldfire.net/"},
        {"@type": "ListItem","position": 2,"name": "Jacksonville, FL","item": "https://watermoldfire.net/jacksonville-fl/"},
        {"@type": "ListItem","position": 3,"name": "Water Damage Restoration","item": "https://watermoldfire.net/jacksonville-fl/water-damage-restoration/"}
      ]
    },
    {
      "@type": "WebPage","@id": "https://watermoldfire.net/jacksonville-fl/water-damage-restoration/#webpage",
      "url": "https://watermoldfire.net/jacksonville-fl/water-damage-restoration/",
      "name": "Water Damage Restoration in Jacksonville, FL",
      "isPartOf": {"@id": "https://watermoldfire.net/#website"},
      "about": {"@id": "https://watermoldfire.net/jacksonville-fl/water-damage-restoration/#service"},
      "breadcrumb": {"@id": "https://watermoldfire.net/jacksonville-fl/water-damage-restoration/#breadcrumb"},
      "inLanguage": "en-US"
    },
    {
      "@type": "FAQPage","@id": "https://watermoldfire.net/jacksonville-fl/water-damage-restoration/#faq",
      "mainEntity": [
        {"@type": "Question","name": "How fast can you respond to water damage in Jacksonville?","acceptedAnswer": {"@type": "Answer","text": "Our Jacksonville crews dispatch 24/7 from our Southside facility and target an on-site arrival of 60 minutes or less for emergency calls across Duval County, the Beaches and the surrounding Northeast Florida counties. During named storms — Hurricane Helene 2024 storm surge, Matthew 2016, Irma 2017, Dorian 2019, Nicole 2022 — we run a triage system that prioritizes active leaks and Category 3 sewage and floodwater losses first."}},
        {"@type": "Question","name": "What happened during Hurricane Helene in Jacksonville?","acceptedAnswer": {"@type": "Answer","text": "Hurricane Helene made landfall in Florida\'s Big Bend region on September 26, 2024 as a Category 4 storm. While Jacksonville was not in the landfall path, the storm\'s massive size pushed historic storm surge up the Atlantic side of the Florida peninsula, producing significant flooding across the Jacksonville Beaches, the Intracoastal Waterway corridor, the St. Johns River basin, and the lower-elevation neighborhoods of San Marco, Riverside and downtown. Many Jacksonville properties along the river took on water for the first time in modern memory. Post-Helene mitigation and remediation work in Jacksonville continues."}},
        {"@type": "Question","name": "Does Florida homeowners insurance cover water damage in Jacksonville?","acceptedAnswer": {"@type": "Answer","text": "Sudden and accidental water damage — burst supply lines, A/C overflows, wind-driven rain through a damaged roof — is generally covered under a standard Florida HO-3 policy. Rising flood water (St. Johns River flooding, storm surge, hurricane runoff) is NOT covered by a standard policy and requires separate flood insurance through the NFIP or a private flood carrier. Properties in NFIP-mapped flood zones along the St. Johns River, the Intracoastal Waterway and the Beaches corridor are typically required to carry flood insurance by their mortgage lenders. Florida\'s insurance market has tightened since the 2022 reforms (SB 2A), so accurate cause-of-loss documentation is critical."}},
        {"@type": "Question","name": "Why does the St. Johns River flood Jacksonville so badly during hurricanes?","acceptedAnswer": {"@type": "Answer","text": "The St. Johns River flows north through downtown Jacksonville and meets the Atlantic at the city\'s eastern edge. When a major hurricane pushes Atlantic storm surge up the river mouth, surge water travels miles upstream and combines with the upstream rainfall and runoff that the hurricane has dumped on the basin. Hurricane Irma (2017) produced record-setting St. Johns River flooding through downtown, San Marco, the Riverside and Avondale districts; Hurricane Helene (2024) repeated the pattern at the river mouth and along the Beaches. River-corridor properties are particularly exposed and frequently take Category 3 contaminated floodwater."}},
        {"@type": "Question","name": "Do you handle water damage in Jacksonville Beach high-rise condos?","acceptedAnswer": {"@type": "Answer","text": "Yes. Jacksonville Beach, Atlantic Beach, Neptune Beach and Ponte Vedra Beach all have oceanfront and intracoastal high-rise condo stock with shared plumbing risers, vertical cascade exposure and HOA-managed contractor coordination. We work routinely with Beaches condo boards and property managers."}},
        {"@type": "Question","name": "What\'s the difference between water damage and flood damage in Jacksonville?","acceptedAnswer": {"@type": "Answer","text": "Insurance policies treat them as separate perils. Water damage refers to losses originating inside the building envelope (pipes, appliances, A/C, roof leaks) and is generally covered by HO-3 policies. Flood damage refers to rising surface water from outside (St. Johns River flooding, storm surge, hurricane runoff) and requires separate flood insurance. Jacksonville\'s river-and-coastal geography makes this distinction matter on most major-storm claims — we document cause-of-loss carefully so the correct carrier is billed."}},
        {"@type": "Question","name": "Should I call my insurance company or a restoration company first?","acceptedAnswer": {"@type": "Answer","text": "Call the restoration company first. Florida policies require you to take reasonable steps to mitigate further damage, and in Jacksonville\'s humid subtropical climate mold can begin colonizing wet materials within 24 to 48 hours. We stop the spread, photograph and document cause of loss for your adjuster, then coordinate with your insurer."}}
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
                Water Damage Restoration & Flood Cleanup in Jacksonville, FL
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
                                <h2 id="intro-h">24/7 Water Damage &amp; Flood Cleanup for Jacksonville Homes &amp; Businesses</h2>
                                <p>
                                Water damage in Jacksonville arrives from a Northeast Florida
                                mix of hurricane and river flooding, year-round subtropical
                                humidity, and the interior plumbing failures common to any
                                humid-climate market. The defining recent event was
                                <strong>Hurricane Helene in September 2024</strong>, whose
                                historic storm surge pushed up the Atlantic side of the
                                Florida peninsula and produced significant flooding across
                                the Jacksonville Beaches, the Intracoastal Waterway corridor,
                                the St. Johns River basin and the lower-elevation
                                neighborhoods of San Marco, Riverside and downtown.
                                <strong>Hurricane Irma in September 2017</strong> produced
                                record-setting St. Johns River flooding through downtown
                                Jacksonville and the river-corridor historic districts.
                                <strong>Hurricane Matthew in October 2016</strong>
                                paralleled the Northeast Florida coast and damaged roofs
                                and envelopes across the metro. Beyond named-storm events,
                                Jacksonville's day-to-day water losses include A/C
                                condensate overflows during the long cooling season, slab
                                leaks in pre-1990 single-family stock, high-rise condo
                                plumbing cascades along the Beaches, and the chronic
                                original-plumbing failures common to Riverside, Avondale,
                                Springfield and San Marco's pre-WWII historic inventory.
                                Water Mold Fire Restoration of Jacksonville handles all of
                                it &mdash; IICRC-certified crews dispatched 24 hours a day
                                from our Southside Jacksonville facility.
                                </p>
                            </section>

                            <section class="local-context" aria-labelledby="local-h">
                                <h2 id="local-h">The Jacksonville Conditions That Drive Most Water Losses</h2>
                                <ul class="listing">
                                    <li>
                                        <strong>Hurricane water intrusion &amp; storm surge.</strong>
                                        Jacksonville's Northeast Florida position takes hurricanes
                                        that move up the Atlantic from the Caribbean and Bahamas,
                                        and late-season storms that hit Coastal Georgia and NE
                                        Florida. Hurricane Helene (2024), Matthew (2016), Irma
                                        (2017), Dorian (2019) and Nicole (2022) all produced
                                        significant Jacksonville damage.
                                    </li>
                                    <li>
                                        <strong>St. Johns River flooding.</strong>
                                        Hurricane storm surge pushed up the St. Johns River mouth
                                        combines with upstream rainfall and runoff to produce
                                        record-setting river flooding through downtown
                                        Jacksonville, San Marco, Riverside and the river-corridor
                                        districts. Irma (2017) was the recent benchmark; Helene
                                        (2024) repeated the pattern at the river mouth and along
                                        the Beaches.
                                    </li>
                                    <li>
                                        <strong>Beaches storm surge &amp; intracoastal flooding.</strong>
                                        Jacksonville Beach, Atlantic Beach, Neptune Beach, Mayport
                                        and Ponte Vedra Beach take direct Atlantic surge during
                                        major storms. Ground-floor coastal units and intracoastal
                                        waterway properties are most exposed.
                                    </li>
                                    <li>
                                        <strong>High-rise condo plumbing cascades.</strong>
                                        Beaches oceanfront condo towers, downtown Jacksonville
                                        residential high-rises, and condo stock along the
                                        Intracoastal and the river corridor all share plumbing
                                        risers and stairwell pressurization. A supply line break
                                        on an upper floor cascades through every unit below.
                                    </li>
                                    <li>
                                        <strong>A/C condensate overflows.</strong>
                                        Jacksonville A/C systems run essentially every day from
                                        April through November, producing constant condensate.
                                        Clogged drain lines and short-cycling oversized units
                                        produce slow ceiling leaks that often go undetected for
                                        weeks.
                                    </li>
                                    <li>
                                        <strong>Slab leaks in pre-1990 single-family stock.</strong>
                                        Pre-1990 Jacksonville single-family stock across Arlington,
                                        the older Southside, Mandarin and the Westside typically
                                        sits on slab-on-grade with copper supply lines.
                                        Jacksonville's groundwater chemistry accelerates copper
                                        pinhole formation in older systems.
                                    </li>
                                    <li>
                                        <strong>Original-era plumbing in historic Jax stock.</strong>
                                        Riverside and Avondale brick bungalows (1910s-1930s),
                                        Springfield Victorian and Edwardian rowhouses, San Marco
                                        Mediterranean Revival, and pre-WWII Arlington and Murray
                                        Hill stock still carry original galvanized supply pipe
                                        and cast-iron drain stacks where they haven't been
                                        rehabbed. Slow chronic leaks compound over months behind
                                        plaster walls and under slabs.
                                    </li>
                                    <li>
                                        <strong>Sewer backups.</strong>
                                        Heavy summer thunderstorm rainfall and hurricane runoff
                                        overwhelm portions of Jacksonville's sewer infrastructure,
                                        producing Category 3 backflow into low-lying basements
                                        (where they exist), garages and ground-floor units.
                                    </li>
                                </ul>
                            </section>

                            <section class="process" aria-labelledby="process-h">
                                <h2 id="process-h">Our Water Damage Restoration Process</h2>
                                <p>
                                Every job we run in Jacksonville follows the IICRC S500
                                Standard for Professional Water Damage Restoration:
                                </p>
                                <ol>
                                    <li><strong>Emergency response &amp; assessment (Hour 1).</strong> Crew dispatch, source identification and shutoff, thermal imaging and moisture mapping.</li>
                                    <li><strong>Water extraction (Hours 1&ndash;6).</strong> Truck-mounted and portable extractors. Category 3 sewage and floodwater losses get full PPE and porous-material removal.</li>
                                    <li><strong>Structural drying &amp; dehumidification (Days 1&ndash;5).</strong> Air movers and LGR dehumidifiers. Jacksonville's high coastal humidity often extends drying past inland norms.</li>
                                    <li><strong>Antimicrobial treatment &amp; mold prevention.</strong> EPA-registered antimicrobials applied to wet materials.</li>
                                    <li><strong>Daily monitoring &amp; documentation.</strong> Moisture readings, temperature and RH logged daily.</li>
                                    <li><strong>Reconstruction.</strong> Drywall, flooring, cabinetry, paint and finish carpentry, permitted through the City of Jacksonville Building Inspection Division as applicable. Historic Riverside / Avondale / Springfield / San Marco properties handled with finish-matching for original architectural elements.</li>
                                </ol>
                            </section>

                            <section class="categories" aria-labelledby="cats-h">
                                <h2 id="cats-h">Water Damage Categories We Handle</h2>
                                <ul class="listing">
                                    <li><strong>Category 1 (clean water).</strong> Broken supply lines, refrigerator and ice-maker lines, water heater failures.</li>
                                    <li><strong>Category 2 (gray water).</strong> Dishwasher and washing machine discharge, toilet overflows (no feces), A/C condensate.</li>
                                    <li><strong>Category 3 (black water).</strong> Sewage backups, St. Johns River floodwater, Atlantic storm surge, hurricane runoff. Requires material removal, full PPE and verified post-remediation cleaning.</li>
                                </ul>
                            </section>

                            <section class="insurance" aria-labelledby="ins-h">
                                <h2 id="ins-h">Florida Insurance &amp; Documentation in Northeast Florida</h2>
                                <p>
                                Florida's homeowners insurance environment has tightened
                                significantly since the 2022 and 2023 reforms (SB 2A and
                                related claims-handling changes). Northeast Florida has not
                                seen the same private-carrier exodus as Miami-Dade and
                                Broward, but the market has tightened metro-wide and
                                carriers are stricter about cause-of-loss documentation.
                                Properties along the St. Johns River and the Beaches
                                corridor are typically in NFIP-mapped flood zones and
                                require separate flood insurance for the rising-water
                                component of hurricane losses. We build every Jacksonville
                                job file the way an adjuster needs to see it: thermal
                                images, moisture maps, daily readings, photo logs and a
                                clear written scope.
                                </p>
                            </section>

                            <section class="service-area" aria-labelledby="area-h">
                                <h2 id="area-h">Where We Respond in Jacksonville &amp; the Metro</h2>
                                <p>
                                Duval County &mdash; Riverside, Avondale, Murray Hill,
                                Springfield, San Marco, San Jose, Downtown, LaVilla,
                                Brooklyn, Mandarin, Bayard, Baymeadows, Deerwood, the
                                Cathedral District, Tinseltown, St. Johns Town Center,
                                Sans Souci, Arlington, Eastside, Ortega, the Westside, Cedar
                                Hills. <strong>Beaches:</strong> Jacksonville Beach,
                                Atlantic Beach, Neptune Beach, Mayport, Ponte Vedra Beach.
                                <strong>Surrounding counties:</strong> Orange Park, Fleming
                                Island, Middleburg (Clay); St. Johns, Ponte Vedra, St.
                                Augustine (St. Johns); Fernandina Beach, Yulee (Nassau);
                                Green Cove Springs.
                                </p>
                            </section>

                            <section class="faq bg-light mb-4" aria-labelledby="faq-h">
                                <h2 id="faq-h">Jacksonville Water Damage Restoration FAQs</h2>

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
                                                How fast can you respond to water damage in Jacksonville?
                                            </button>
                                        </h3>
                                        <div id="collapse_1"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_1"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>60-minute target on-site arrival across Duval County, the Beaches and surrounding NE Florida counties. During named storms we triage active leaks and Category 3 losses first.</p>
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
                                                What happened during Hurricane Helene in Jacksonville?
                                            </button>
                                        </h3>
                                        <div id="collapse_2"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_2"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>Helene made Big Bend landfall on Sept 26, 2024, but its size pushed historic storm surge up the Atlantic side. Significant flooding across Jacksonville Beaches, Intracoastal corridor, St. Johns River basin, and lower-elevation San Marco / Riverside / downtown. Post-Helene mitigation work continues.</p>
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
                                                Does Florida homeowners insurance cover water damage in Jacksonville?
                                            </button>
                                        </h3>
                                        <div id="collapse_3"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_3"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>Sudden and accidental water damage is covered under standard HO-3. Rising flood water (river flooding, storm surge, hurricane runoff) requires separate NFIP or private flood. Florida market has tightened post-2022.</p>
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
                                                Why does the St. Johns River flood Jacksonville so badly during hurricanes?
                                            </button>
                                        </h3>
                                        <div id="collapse_4"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_4"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>Atlantic surge pushed up the river mouth combines with upstream rainfall. Hurricane Irma (2017) produced record St. Johns flooding through downtown, San Marco, Riverside. Helene (2024) repeated the pattern at the mouth.</p>
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
                                                Do you handle water damage in Jacksonville Beach high-rise condos?
                                            </button>
                                        </h3>
                                        <div id="collapse_5"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_5"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>Yes. Jacksonville Beach, Atlantic Beach, Neptune Beach and Ponte Vedra Beach have oceanfront and intracoastal high-rise stock with shared plumbing risers. We coordinate with Beaches condo boards and property managers.</p>
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
                                                What's the difference between water damage and flood damage in Jacksonville?
                                            </button>
                                        </h3>
                                        <div id="collapse_6"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_6"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>Water damage is internal-origin (pipes, appliances, A/C, roof); flood damage is rising surface water from outside (river, surge, runoff). Jacksonville's river-and-coastal geography makes this distinction matter on most major-storm claims.</p>
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
                                                <p>Call the restoration company first. FL policies require mitigation. Mold colonizes within 24-48 hours in NE Florida's humid climate.</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </section>

                            <section class="contact" aria-labelledby="contact-h">
                                <h2 id="contact-h">Call Jacksonville's Water Damage Restoration Team</h2>
                                <address>
                                    <strong>Water Mold Fire Restoration of Jacksonville</strong><br>
                                    Jacksonville, FL 32256<br>
                                    <a href="tel:+19048390449">904-839-0449</a> &middot;
                                    <a href="mailto:jacksonville@watermoldfire.net">jacksonville@watermoldfire.net</a><br>
                                    24/7 Emergency Service
                                </address>
                                <p>
                                Active water loss, St. Johns River flooding, hurricane water
                                intrusion, or condo plumbing cascade in Jacksonville?
                                <a class="cta" href="tel:+19048390449">Call 904-839-0449</a>
                                and a crew will be rolling.
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