<?php
require_once __DIR__ . '/../includes/init.php';

$pagename = "miami-fl/plumbing.php";

$title = "Plumber in Miami, FL | FL Licensed CFC1433275";

$meta_description = "FL-licensed plumber in Miami, FL (CFC1433275). 24/7 emergency plumbing, whole-house repipes, water heaters, drain cleaning, slab leak repair. 305-999-5144.";

$meta_keywords = "plumber miami, licensed plumber miami, emergency plumber miami, 24/7 plumber miami, local plumber, plumbing miami, plumbing services miami, plumbing contractor miami, plumbing repair miami, whole house repipe miami, water heater repair miami, drain cleaning miami, slab leak repair, sewer line repair, tankless water heater installation";

$canonical_url = "https://watermoldfire.net/miami-fl/plumbing/";

$geo_tags = '
<meta name="geo.region" content="US-FL">
<meta name="geo.placename" content="Miami">
<meta name="geo.position" content="25.7800;-80.1850">
<meta name="ICBM" content="25.7800, -80.1850">
';

$open_graph = '
<meta property="og:type" content="website">
<meta property="og:site_name" content="Water Mold Fire Restoration">
<meta property="og:title" content="Plumber in Miami, FL | FL Licensed CFC1433275">
<meta property="og:description" content="Florida-licensed plumbing contractor (CFC1433275) in Miami. 24/7 emergency, whole-house repipes, water heaters, drain cleaning, slab leak repair across Miami-Dade.">
<meta property="og:url" content="https://watermoldfire.net/miami-fl/plumbing/">
<meta property="og:image" content="'.site_url().'images/logo.webp">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="og:locale" content="en_US">
';

$twitter = '
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Plumber in Miami, FL | FL Licensed CFC1433275">
<meta name="twitter:description" content="FL-licensed plumber (CFC1433275) serving Miami. 24/7 emergency, repipes, water heaters, drain cleaning, slab leak repair.">
<meta name="twitter:image" content="'.site_url().'images/logo.webp">
';

$schema_ld_json = '
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": ["Service","Plumber"],
      "@id": "https://watermoldfire.net/miami-fl/plumbing/#service",
      "name": "Plumber & Plumbing Services in Miami, FL",
      "serviceType": ["Plumbing","Emergency Plumbing","Whole-House Repipe","Water Heater Repair","Drain Cleaning","Slab Leak Repair","Sewer Line Repair","Tankless Water Heater Installation","Backflow Prevention","Commercial Plumbing","High-Rise Condo Plumbing"],
      "description": "Florida-licensed plumbing contractor (CFC1433275) in Miami, FL. 24/7 emergency plumbing, whole-house repipes, water heater installation and repair (tank and tankless), drain cleaning and hydro jetting, slab leak repair, sewer line repair and trenchless replacement, high-rise condo and commercial plumbing, fixture installation, gas line work, and backflow prevention testing and installation across Miami-Dade County.",
      "url": "https://watermoldfire.net/miami-fl/plumbing/",
      "provider": {"@id": "https://watermoldfire.net/miami-fl/#localbusiness"},
      "areaServed": [
        {"@type": "City", "name": "Miami"},{"@type": "City", "name": "Miami Beach"},
        {"@type": "City", "name": "Coral Gables"},{"@type": "City", "name": "Aventura"},
        {"@type": "City", "name": "Sunny Isles Beach"},{"@type": "City", "name": "Key Biscayne"},
        {"@type": "City", "name": "Doral"},{"@type": "City", "name": "Hialeah"},
        {"@type": "City", "name": "Pinecrest"},{"@type": "City", "name": "Homestead"}
      ],
      "hoursAvailable": {"@type": "OpeningHoursSpecification","dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"],"opens": "00:00","closes": "23:59"},
      "hasCredential": {
        "@type": "EducationalOccupationalCredential",
        "name": "Florida Certified Plumbing Contractor License",
        "credentialCategory": "license",
        "identifier": "CFC1433275",
        "recognizedBy": {"@type": "GovernmentOrganization","name": "Florida Department of Business & Professional Regulation"}
      },
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Plumbing Services",
        "itemListElement": [
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "24/7 Emergency Plumbing"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Whole-House Repipe (PEX & CPVC)"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "High-Rise Condo Plumbing"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Slab Leak Repair & Rerouting"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Pinhole Leak Repair"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Water Heater Repair & Replacement"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Tankless Water Heater Installation"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Drain Cleaning & Hydro Jetting"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Sewer Line Repair & Trenchless Replacement"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Cast-Iron Drain Stack Replacement"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Sewer Camera Inspection"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Toilet, Faucet & Fixture Installation"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Garbage Disposal Installation & Repair"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Water Filtration & Softener Installation"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Backflow Prevention Testing & Installation"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Gas Line Repair & Installation"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Commercial Plumbing"}}
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
      "@type": "BreadcrumbList","@id": "https://watermoldfire.net/miami-fl/plumbing/#breadcrumb",
      "itemListElement": [
        {"@type": "ListItem","position": 1,"name": "Home","item": "https://watermoldfire.net/"},
        {"@type": "ListItem","position": 2,"name": "Miami, FL","item": "https://watermoldfire.net/miami-fl/"},
        {"@type": "ListItem","position": 3,"name": "Plumbing","item": "https://watermoldfire.net/miami-fl/plumbing/"}
      ]
    },
    {
      "@type": "WebPage","@id": "https://watermoldfire.net/miami-fl/plumbing/#webpage",
      "url": "https://watermoldfire.net/miami-fl/plumbing/",
      "name": "Plumber & Plumbing Services in Miami, FL",
      "isPartOf": {"@id": "https://watermoldfire.net/#website"},
      "about": {"@id": "https://watermoldfire.net/miami-fl/plumbing/#service"},
      "breadcrumb": {"@id": "https://watermoldfire.net/miami-fl/plumbing/#breadcrumb"},
      "inLanguage": "en-US"
    },
    {
      "@type": "FAQPage","@id": "https://watermoldfire.net/miami-fl/plumbing/#faq",
      "mainEntity": [
        {"@type": "Question","name": "Are you a licensed plumber in Florida?","acceptedAnswer": {"@type": "Answer","text": "Yes. Water Mold Fire Restoration operates as a Florida Certified Plumbing Contractor under license CFC1433275, issued by the Florida Department of Business & Professional Regulation. The \'CFC\' prefix means we hold state-level certification under Florida Statute Chapter 489 — authorized to perform plumbing contracting work anywhere in Florida, not just in a single county. The license covers our Miami office and Fort Lauderdale operations."}},
        {"@type": "Question","name": "How fast can you respond to a plumbing emergency in Miami?","acceptedAnswer": {"@type": "Answer","text": "Our crews dispatch 24/7 from our Biscayne Boulevard facility in downtown Miami and target an on-site arrival of 60 minutes or less for active leaks, sewage backups, no-water situations and burst supply lines anywhere in Miami-Dade County. Scheduled service generally books within 24 to 72 hours."}},
        {"@type": "Question","name": "Why are whole-house repipes so common in Miami?","acceptedAnswer": {"@type": "Answer","text": "Two reasons specific to Miami. First, single-family homes built between 1960 and 1990 — common in Coral Gables, Coconut Grove, Pinecrest, Palmetto Bay and the older Miami Shores corridors — were plumbed with copper supply lines that are now reaching end of life. Coastal saltwater intrusion, acidic soils and electrolytic activity accelerate pinhole formation. Second, Miami-Dade\'s tightened insurance market post-2022 has produced carriers that will not renew without a recent repipe or substantial documented repair history. Insurance dictates upgrade timing as much as failure does."}},
        {"@type": "Question","name": "Do you handle plumbing in Miami high-rise condos?","acceptedAnswer": {"@type": "Answer","text": "Yes. Miami\'s high-rise condo stock — Brickell, downtown, Sunny Isles, Aventura, Bal Harbour, Mid Beach — has plumbing challenges unique to vertical construction: shared supply risers, common drain stacks (often original cast iron in 1960s-80s buildings), pressurized water systems, freight-elevator access constraints and HOA approval requirements. We work with Miami condo boards and property managers routinely and understand the Surfside-era inspection environment for buildings over 25 years old."}},
        {"@type": "Question","name": "How long do water heaters last in Miami?","acceptedAnswer": {"@type": "Answer","text": "Tank water heaters in Miami typically last 8 to 12 years — sometimes less in coastal homes where humidity and salt-air accelerate exterior corrosion, or where local water mineral content shortens anode rod life. Tankless units typically run 15 to 20 years with proper annual flushing. Signs of end of life include rust at the bottom seam, fluctuating temperatures, loud rumbling, and a noticeable drop in hot-water duration."}},
        {"@type": "Question","name": "Should I get a tankless or tank water heater in Miami?","acceptedAnswer": {"@type": "Answer","text": "Both work well in South Florida — no freeze risk to tankless. Tank heaters are cheaper to install and simpler to service. Tankless units cost more upfront but last 15-20 years versus 8-12 for tank, and save 25-30% on water-heating energy. For Miami high-rise condos, tankless is increasingly the standard install due to space constraints and amenity expectations."}},
        {"@type": "Question","name": "Do you perform backflow prevention testing in Miami-Dade?","acceptedAnswer": {"@type": "Answer","text": "Yes. Florida and Miami-Dade County require annual backflow prevention assembly testing for most commercial properties and many residential properties with irrigation, pools or fire suppression connections. Our certified testers perform the test, submit results to the relevant water utility (Miami-Dade Water and Sewer Department, City of Miami Beach Public Works, or others depending on service address), and repair or replace failed assemblies."}}
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
                Licensed Plumber & Plumbing Services in Miami, FL
            </h1>   
            <!-- Feature Pills -->
            <div class="feature-pills">
                <div class="feature-pill">
                    <i class="fas fa-headset"></i>
                    <span>FL Licensed: CFC1433275</span>
                </div>
                <div class="feature-pill">
                    <i class="fas fa-certificate"></i>
                    <span>24/7 Emergency Plumbing</span>
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
                                <h2 id="intro-h">Florida-Licensed Plumbing for Miami Homes &amp; Businesses</h2>
                                <p>
                                Plumbing in Miami is its own discipline. Vertical high-rise
                                density that means a single supply break cascades through 20
                                floors, 1920s Mediterranean Revival single-family stock in
                                Coral Gables with original galvanized lines still in service,
                                1960s Brickell condos with original cast-iron drain stacks
                                reaching end of life, an HVHZ building code that originated
                                here after Hurricane Andrew, post-Surfside condo inspection
                                requirements that turn a routine repair into a building-wide
                                project &mdash; none of it is the plumbing a generic national
                                franchise was trained to handle. Water Mold Fire Restoration
                                of Miami is a <strong>Florida Certified Plumbing Contractor</strong>
                                under license <strong>CFC1433275</strong>, dispatching local
                                crews 24/7 from our Biscayne Boulevard facility in downtown
                                Miami for emergency repairs, whole-house repipes, water heater
                                installation, drain cleaning, slab leak repair, high-rise
                                condo plumbing, sewer-line work and routine fixture service
                                across Miami-Dade County.
                                </p>
                            </section>

                            <section class="why-flbm" aria-labelledby="why-h">
                                <h2 id="why-h">Why Plumbing in Miami Is Different</h2>
                                <ul class="listing">
                                    <li>
                                        <strong>High-rise condo vertical-cascade failures.</strong>
                                        Miami's signature condo density &mdash; Brickell, downtown,
                                        Sunny Isles, Aventura, Bal Harbour, Mid Beach &mdash; means
                                        a single supply break cascades through every unit below it.
                                        Coordination with HOAs, property managers, building engineers
                                        and freight-elevator scheduling becomes as critical as the
                                        actual repair.
                                    </li>
                                    <li>
                                        <strong>Coastal copper corrosion in pre-1990 single-family stock.</strong>
                                        Coral Gables, Coconut Grove, Pinecrest, Palmetto Bay and
                                        older Miami Shores corridors have copper supply lines aging
                                        out from acidic soils and saltwater intrusion. Pinhole leak
                                        wave is well underway.
                                    </li>
                                    <li>
                                        <strong>Cast-iron drain failures in 1960s-80s condos.</strong>
                                        Original cast-iron drain stacks in Miami's vintage condo
                                        stock have reached the 50+ year mark in a humid coastal
                                        environment. Corrosion, scale, sagging and failure inside
                                        shared wall cavities affect multiple units at once.
                                    </li>
                                    <li>
                                        <strong>Surfside-era inspection requirements.</strong>
                                        Since June 2021, Miami-Dade condos over 25 years old require
                                        milestone structural inspections. Plumbing repairs in older
                                        condos now often interact with engineering reports and
                                        formal documentation requirements.
                                    </li>
                                    <li>
                                        <strong>Florida Building Code HVHZ requirements.</strong>
                                        Miami-Dade is THE original High Velocity Hurricane Zone
                                        &mdash; the code that Andrew produced. Specific plumbing
                                        requirements around pipe-strapping, water-heater anchoring,
                                        gas line restraints and product approval (Miami-Dade Notice
                                        of Acceptance / NOA) apply here. Out-of-county contractors
                                        routinely miss these.
                                    </li>
                                    <li>
                                        <strong>Hurricane-season plumbing emergencies.</strong>
                                        Boil-water advisories from supply contamination, sewer
                                        backups from overwhelmed municipal systems, pipe breaks
                                        from settled soil, water heater failures from
                                        power-restoration surges &mdash; Miami sees the full menu
                                        each named-storm season.
                                    </li>
                                </ul>
                            </section>

                            <section class="licensing" aria-labelledby="lic-h">
                                <h2 id="lic-h">What FL Plumbing Licensing Means &mdash; CFC1433275</h2>
                                <p>
                                Florida regulates plumbing contracting under Chapter 489 of
                                the Florida Statutes. To perform plumbing work for
                                compensation in Florida, a contractor must hold either a
                                state-level <strong>Certified Plumbing Contractor (CFC)</strong>
                                license or a county-level Registered Plumbing Contractor (RF)
                                license. The CFC is the higher credential: state exam, minimum
                                liability and workers' comp insurance, continuing education
                                every biennial cycle, state-level oversight from the Florida
                                Construction Industry Licensing Board.
                                </p>
                                <p>
                                We operate under <strong>Florida Certified Plumbing Contractor
                                License #CFC1433275</strong> &mdash; a statewide credential
                                covering our Miami office and Fort Lauderdale operations. If
                                your insurance carrier, condo board or property manager asks
                                for our license, that's the number. Unlicensed plumbing work
                                in Miami is a serious issue: carriers can and do deny claims
                                caused by unlicensed work, and unpermitted plumbing fails
                                Miami-Dade home inspections during real estate sales.
                                </p>
                            </section>

                            <section class="services" aria-labelledby="svc-h">
                                <h2 id="svc-h">Our Miami Plumbing Services</h2>
                                <ul class="listing">
                                    <li><strong>24/7 emergency plumbing.</strong> Active leaks, burst supply lines, sewage backups, no-water and no-hot-water situations.</li>
                                    <li><strong>Whole-house repipes.</strong> CPVC and PEX repipes for homes with failing copper, 2-5 days typical.</li>
                                    <li><strong>High-rise condo plumbing.</strong> Coordinated with HOA boards, property managers and building engineering staff across Brickell, Sunny Isles, Aventura, Bal Harbour and downtown.</li>
                                    <li><strong>Slab leak repair &amp; rerouting.</strong> Spot repair through slab or overhead reroute.</li>
                                    <li><strong>Pinhole leak repair.</strong> Targeted repair of pinhole failures in copper supply.</li>
                                    <li><strong>Water heater repair &amp; replacement.</strong> Tank water heaters, every size and fuel type.</li>
                                    <li><strong>Tankless water heater installation.</strong> Sizing, gas line upgrades, condensate management.</li>
                                    <li><strong>Drain cleaning &amp; hydro jetting.</strong> Cable cleaning for routine clogs, hydro jetting for grease, scale and root intrusion.</li>
                                    <li><strong>Sewer line repair &amp; trenchless replacement.</strong> Camera-first inspection.</li>
                                    <li><strong>Cast-iron drain stack replacement.</strong> Specialty for Miami's 1960s-80s condo stock.</li>
                                    <li><strong>Sewer camera inspection.</strong> Real estate due diligence and diagnostic.</li>
                                    <li><strong>Toilet, faucet, fixture installation.</strong></li>
                                    <li><strong>Garbage disposal repair &amp; installation.</strong></li>
                                    <li><strong>Water filtration &amp; softener installation.</strong></li>
                                    <li><strong>Backflow prevention testing &amp; installation.</strong> Annual certification with the Miami-Dade Water and Sewer Department.</li>
                                    <li><strong>Gas line repair &amp; installation.</strong> Natural gas and LP for pool heaters, ranges and standby generators.</li>
                                    <li><strong>Commercial plumbing.</strong> Restaurants, retail, multi-family, office.</li>
                                </ul>
                            </section>

                            <section class="repipe" aria-labelledby="repipe-h">
                                <h2 id="repipe-h">Whole-House Repipes in Miami</h2>
                                <p>
                                A whole-house repipe replaces every supply line in the home
                                &mdash; hot, cold and fixture branches &mdash; from the meter
                                to the last fixture. One of the most common jobs we run in
                                Miami:
                                </p>
                                <ol>
                                    <li><strong>Pre-1990 coastal homes are at end of life.</strong> Copper installed 1960s-80s has outlasted its realistic service life in this climate.</li>
                                    <li><strong>Miami-Dade carriers are increasingly requiring it.</strong> Many HO-3 carriers won't renew Miami-Dade homeowners policies without a recent repipe or substantial repair history.</li>
                                </ol>
                                <p>
                                We repipe in CPVC or PEX, pull every required permit through
                                the relevant Miami-Dade municipality (City of Miami, Miami
                                Beach, Coral Gables, etc.), and typically complete the job in
                                2 to 5 working days.
                                </p>
                            </section>

                            <section class="emergency" aria-labelledby="emer-h">
                                <h2 id="emer-h">24/7 Emergency Plumbing in Miami</h2>
                                <p>
                                Active leak, burst pipe, sewage backup, condo unit above just
                                let go and water's coming through your ceiling, no hot water
                                on a Sunday night &mdash; we dispatch 24/7 from our Biscayne
                                Boulevard facility and target a 60-minute arrival anywhere in
                                Miami-Dade. We coordinate with our
                                <a href="<?php echo site_url("miami-fl/water-damage-restoration/"); ?>">water damage
                                restoration</a> and
                                <a href="<?php echo site_url("miami-fl/leak-detection/"); ?>">leak detection</a> teams
                                so one call covers diagnosis, repair and damage mitigation.
                                After hours, weekends, holidays &mdash; a dispatcher answers,
                                not a voicemail.
                                </p>
                            </section>

                            <section class="service-area" aria-labelledby="area-h">
                                <h2 id="area-h">Where We Plumb in Miami</h2>
                                <p>
                                Brickell, Downtown Miami, Edgewater, Wynwood, Little Havana,
                                Coconut Grove, Coral Gables, South Beach, Mid Beach, North
                                Beach, Bal Harbour, Sunny Isles Beach, Aventura, Key Biscayne,
                                North Miami, Doral, Hialeah, Pinecrest, Palmetto Bay, Kendall,
                                Homestead.
                                </p>
                            </section>

                            <section class="faq bg-light mb-4" aria-labelledby="faq-h">
                                <h2 id="faq-h">Miami Plumbing FAQs</h2>

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
                                                Are you a licensed plumber in Florida?
                                            </button>
                                        </h3>
                                        <div id="collapse_1"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_1"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>Yes. <strong>Florida Certified Plumbing Contractor License CFC1433275</strong>. Statewide credential covering Miami and Fort Lauderdale operations.</p>
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
                                                How fast can you respond to a plumbing emergency in Miami?
                                            </button>
                                        </h3>
                                        <div id="collapse_2"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_2"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>60-minute target on-site arrival across Miami-Dade County. Scheduled service within 24-72 hours.</p>
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
                                                Why are whole-house repipes so common in Miami?
                                            </button>
                                        </h3>
                                        <div id="collapse_3"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_3"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>Pre-1990 coastal copper at end of life, plus Miami-Dade insurance carriers increasingly requiring repipes for HO-3 renewal post-2022 reforms.</p>
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
                                                Do you handle plumbing in Miami high-rise condos?
                                            </button>
                                        </h3>
                                        <div id="collapse_4"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_4"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>Yes. Brickell, downtown, Sunny Isles, Aventura, Bal Harbour, Mid Beach. Vertical-cascade coordination, HOA approval, freight-elevator scheduling. Surfside-era inspection-aware.</p>
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
                                                How long do water heaters last in Miami?
                                            </button>
                                        </h3>
                                        <div id="collapse_5"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_5"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>Tank: 8-12 years. Tankless: 15-20 years with annual flushing.</p>
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
                                                Should I get a tankless or tank water heater?
                                            </button>
                                        </h3>
                                        <div id="collapse_6"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_6"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>Both work well in South Florida. Tankless costs more upfront, lasts longer, saves 25-30% energy. Tank cheaper to install and service.</p>
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
                                                Do you perform backflow prevention testing in Miami-Dade?
                                            </button>
                                        </h3>
                                        <div id="collapse_7"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_7"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>Yes. Certified testers, submission to Miami-Dade Water and Sewer Department or relevant municipal utility, repair/replace as needed.</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </section>

                            <section class="contact" aria-labelledby="contact-h">
                                <h2 id="contact-h">Call Miami's Licensed Plumbing Contractor</h2>
                                <address>
                                    <strong>Water Mold Fire Restoration of Miami</strong><br>
                                    100 Biscayne Blvd<br>
                                    Miami, FL 33132<br>
                                    <a href="tel:+13059995144">305-999-5144</a> &middot;
                                    <a href="mailto:miami@watermoldfire.net">miami@watermoldfire.net</a><br>
                                    24/7 &middot; FL CFC1433275
                                </address>
                                <p>
                                Active leak, burst pipe, no hot water, sewer backing up, condo
                                upstairs leaking, repipe quote?
                                <a class="cta" href="tel:+13059995144">Call 305-999-5144</a>
                                &mdash; a dispatcher answers, not a voicemail.
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