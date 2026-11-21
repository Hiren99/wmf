<?php
require_once __DIR__ . '/../includes/init.php';

$pagename = "boca-raton-fl/plumbing.php";

$title = "Plumbing in Boca Raton, FL | FL Licensed CFC1433275 | 24/7";

$meta_description = "Florida-licensed plumbing contractor in Boca Raton (CFC1433275). 24/7 emergencies, repipes, water heaters, drains, high-rise condo plumbing. Call 561-401-0436.";

$meta_keywords = "plumber boca raton, licensed plumber boca raton, emergency plumber boca raton, 24/7 plumber boca raton, local plumber, plumbing boca raton, plumbing services boca raton, plumbing contractor boca raton, plumbing repair boca raton, whole house repipe boca raton, water heater repair boca raton, drain cleaning boca raton, slab leak repair, sewer line repair, tankless water heater installation";

$canonical_url = "https://watermoldfire.net/boca-raton-fl/plumbing/";

$geo_tags = '
<meta name="geo.region" content="US-FL">
<meta name="geo.placename" content="Boca Raton">
<meta name="geo.position" content="26.4040;-80.0805">
<meta name="ICBM" content="26.4040, -80.0805">
';

$open_graph = '
<meta property="og:type" content="website">
<meta property="og:site_name" content="Water Mold Fire Restoration">
<meta property="og:title" content="Plumbing in Boca Raton, FL | FL Licensed CFC1433275">
<meta property="og:description" content="Florida-licensed plumbing contractor (CFC1433275) in Boca Raton. 24/7 plumbing emergencies, repipes, water heaters, high-rise condo plumbing. Palm Beach County coverage.">
<meta property="og:url" content="https://watermoldfire.net/boca-raton-fl/plumbing/">
<meta property="og:image" content="'.site_url().'images/logo.webp">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="og:locale" content="en_US">
';

$twitter = '
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Plumbing in Boca Raton, FL | CFC1433275">
<meta name="twitter:description" content="24/7 FL-licensed plumber serving Boca. Emergencies, repipes, water heaters, drains, high-rise condo plumbing.">
<meta name="twitter:image" content="'.site_url().'images/logo.webp">
';

$schema_ld_json = '
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": ["Service","Plumber"],
      "@id": "https://watermoldfire.net/boca-raton-fl/plumbing/#service",
      "name": "Plumbing in Boca Raton, FL",
      "serviceType": ["Plumbing","Plumbing Repair","Repipe","Drain Service","Water Heater","Emergency Plumbing"],
      "description": "Florida-licensed plumbing contractor (CFC1433275) in Boca Raton, FL. 24/7 emergency plumbing repair, whole-house repipe, water heater install and replacement, tankless conversions, drain cleaning and pipe rehab, high-rise condo plumbing, slab leak repair and gas piping across Boca Raton, Highland Beach, Delray and coastal Palm Beach County.",
      "url": "https://watermoldfire.net/boca-raton-fl/plumbing/",
      "provider": {"@id": "https://watermoldfire.net/boca-raton-fl/#localbusiness"},
      "areaServed": [
        {"@type": "City", "name": "Boca Raton"},{"@type": "City", "name": "Highland Beach"},
        {"@type": "City", "name": "Delray Beach"},{"@type": "City", "name": "Gulf Stream"},
        {"@type": "City", "name": "Boynton Beach"},{"@type": "City", "name": "Deerfield Beach"},
        {"@type": "City", "name": "Coconut Creek"},{"@type": "City", "name": "Parkland"},
        {"@type": "City", "name": "Coral Springs"},{"@type": "City", "name": "Wellington"}
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
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "24/7 Emergency Plumbing Repair"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Whole-House Repipe (Copper, PEX, CPVC)"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Slab Leak Repair"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Cast-Iron Drain Stack Rehab"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Water Heater Repair & Replacement"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Tankless Water Heater Conversion"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Drain Cleaning & Hydro Jetting"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Sewer Line Repair & Replacement"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "High-Rise Condo Plumbing"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Gas Line Installation & Repair"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Backflow Prevention"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Fixture Installation"}}
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
      "@type": "BreadcrumbList","@id": "https://watermoldfire.net/boca-raton-fl/plumbing/#breadcrumb",
      "itemListElement": [
        {"@type": "ListItem","position": 1,"name": "Home","item": "https://watermoldfire.net/"},
        {"@type": "ListItem","position": 2,"name": "Boca Raton, FL","item": "https://watermoldfire.net/boca-raton-fl/"},
        {"@type": "ListItem","position": 3,"name": "Plumbing","item": "https://watermoldfire.net/boca-raton-fl/plumbing/"}
      ]
    },
    {
      "@type": "WebPage","@id": "https://watermoldfire.net/boca-raton-fl/plumbing/#webpage",
      "url": "https://watermoldfire.net/boca-raton-fl/plumbing/",
      "name": "Plumbing in Boca Raton, FL",
      "isPartOf": {"@id": "https://watermoldfire.net/#website"},
      "about": {"@id": "https://watermoldfire.net/boca-raton-fl/plumbing/#service"},
      "breadcrumb": {"@id": "https://watermoldfire.net/boca-raton-fl/plumbing/#breadcrumb"},
      "inLanguage": "en-US"
    },
    {
      "@type": "FAQPage","@id": "https://watermoldfire.net/boca-raton-fl/plumbing/#faq",
      "mainEntity": [
        {"@type": "Question","name": "Are you a licensed plumbing contractor in Florida?","acceptedAnswer": {"@type": "Answer","text": "Yes. Water Mold Fire Restoration of Boca Raton operates under Florida Certified Plumbing Contractor License CFC1433275, issued by the Florida Department of Business & Professional Regulation under Chapter 489 of the Florida Statutes. The license is a statewide credential — it covers our Boca Raton office at 6020 N Federal Highway as well as our Fort Lauderdale and Miami operations."}},
        {"@type": "Question","name": "Do you handle 24/7 emergency plumbing in Boca Raton?","acceptedAnswer": {"@type": "Answer","text": "Yes. Our Boca crews dispatch 24/7 from our facility on North Federal Highway and target a 60-minute on-site arrival for emergency calls across Boca Raton, Highland Beach, Delray Beach and coastal Palm Beach County. Active burst pipes, slab leaks producing water at the surface, sewer backups, water heater failures and high-rise condo cascades are the calls we triage first."}},
        {"@type": "Question","name": "Do you do whole-house repipes in Boca Raton?","acceptedAnswer": {"@type": "Answer","text": "Yes. Whole-house repipes are a recurring scope in older Boca single-family stock with original pre-1990 copper supply lines that have started developing pinhole leaks. We perform copper, PEX and CPVC repipes coordinated with City of Boca Raton or Palm Beach County permitting and (where applicable) gated-community HOA architectural review. Most whole-house repipes complete in 2-5 days depending on size and finish-restoration scope."}},
        {"@type": "Question","name": "Do you handle slab leak repair?","acceptedAnswer": {"@type": "Answer","text": "Yes. Slab leak repair is one of our most common Boca plumbing scopes — pre-1990 single-family stock across Royal Palm, Por La Mar, Spanish River and the older neighborhoods has copper supply lines under slab-on-grade foundations that develop pinhole leaks from coastal soil chemistry. We perform spot repair, slab penetration access and reroute through attic or wall when slab access is impractical. Our in-house leak detection team confirms exact location before any slab work begins."}},
        {"@type": "Question","name": "Do you do high-rise condo plumbing in Boca Raton?","acceptedAnswer": {"@type": "Answer","text": "Yes — and Boca\'s high-rise condo stock along A1A, the oceanfront corridor and the gated country club towers (Boca West, Polo Club, Stonebridge) is one of our most active categories. We work routinely with Boca condo boards, property managers and engineering staff on shared plumbing riser issues, cross-unit responsibility documentation, freight-elevator-access coordination and HOA contractor approval requirements."}},
        {"@type": "Question","name": "Do you install tankless water heaters?","acceptedAnswer": {"@type": "Answer","text": "Yes. Tankless conversions are popular in Boca\'s high-end residential market for the space savings, the on-demand hot water, and the long unit life relative to tank units. We size and install gas and electric tankless units, coordinate gas line upsizing where required, and permit through Palm Beach County or the City of Boca Raton as the property requires."}},
        {"@type": "Question","name": "Do you handle cast-iron drain stack rehab in older Boca homes?","acceptedAnswer": {"@type": "Answer","text": "Yes. Pre-1990 Boca stock and the Mizner-era 1920s landmarks where they haven\'t been rehabbed often still carry original cast-iron drain stacks. Cast iron rusts through at hub joints after 60-80 years, producing leaks behind walls and under slabs that are difficult and disruptive to repair. We perform full cast-iron stack replacement, partial line replacement, and (where appropriate) CIPP cured-in-place pipe lining to extend stack life without full demolition."}}
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
                Licensed Plumber & Plumbing Services in Boca Raton, FL
            </h1>   
            <!-- Feature Pills -->
            <div class="feature-pills">
                <div class="feature-pill">
                    <i class="fas fa-headset"></i>
                    <span>FL Licensed CFC1433275</span>
                </div>
                <div class="feature-pill">
                    <i class="fas fa-certificate"></i>
                    <span>24/7 Emergency Plumbing</span>
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
                                <h2 id="intro-h">Florida-Licensed Plumbing in Boca Raton</h2>
                                <p>
                                Water Mold Fire Restoration of Boca Raton operates as a
                                Florida-licensed plumbing contractor under <strong>FL
                                Certified Plumbing Contractor License #CFC1433275</strong>,
                                issued by the Florida Department of Business &amp;
                                Professional Regulation under Chapter 489 of the Florida
                                Statutes. We handle 24/7 emergency plumbing, whole-house
                                repipes, slab leak repair, cast-iron drain stack rehab,
                                water heater repair and replacement, tankless conversions,
                                drain cleaning and hydro jetting, sewer line repair,
                                high-rise condo plumbing and gas line work across Boca
                                Raton, Highland Beach, Delray Beach, coastal Palm Beach
                                County and the inner-ring Broward communities. Dispatched
                                24/7 from our facility on North Federal Highway near the
                                Delray Beach border.
                                </p>
                            </section>

                            <section class="why-flbm" aria-labelledby="why-h">
                                <h2 id="why-h">Why Boca Plumbing Has Its Own Profile</h2>
                                <p>
                                Boca Raton plumbing concentrates on a handful of categories
                                we see repeatedly across the city's mix of high-rise condos,
                                gated country club homes, Mizner-era Mediterranean Revival
                                properties and 1950s-90s single-family stock:
                                </p>
                                <ul class="listing">
                                    <li>
                                        <strong>Pre-1990 copper supply line pinhole leaks.</strong>
                                        Single-family Boca stock in Royal Palm, Por La Mar,
                                        Spanish River, Boca Heights and the older neighborhoods
                                        was built with copper supply lines that are now 35-70+
                                        years into service. Boca's coastal location accelerates
                                        pinhole leak formation: acidic soil chemistry, brackish
                                        groundwater on properties closer to the Atlantic, and
                                        decades of mineral-content water all degrade copper from
                                        the inside out. We respond to copper pinhole calls
                                        constantly &mdash; spot repairs, partial-line replacement
                                        and (often) whole-house repipe recommendations when the
                                        pattern becomes systemic.
                                    </li>
                                    <li>
                                        <strong>Cast-iron drain stack rehab.</strong>
                                        Pre-1990 Boca stock and the Mizner-era 1920s properties
                                        where original plumbing remains in place still carry
                                        cast-iron drain stacks. Cast iron fails at hub joints
                                        after 60-80 years, producing slow chronic leaks behind
                                        walls and under slabs that are difficult and disruptive
                                        to access. We perform full cast-iron stack replacement,
                                        partial line replacement, and CIPP (cured-in-place pipe)
                                        lining to extend stack life without full demolition where
                                        appropriate.
                                    </li>
                                    <li>
                                        <strong>High-rise condo plumbing.</strong>
                                        Boca's vertical condo stock along A1A and in the gated
                                        country club mid-rise towers (Boca West, Polo Club,
                                        Stonebridge) shares plumbing risers and common chases.
                                        Cross-unit work, freight-elevator coordination, condo
                                        board approvals and HOA contractor requirements make
                                        condo plumbing fundamentally different from single-family
                                        work. We work routinely with Boca condo boards and
                                        property managers.
                                    </li>
                                    <li>
                                        <strong>Slab leak repair on slab-on-grade foundations.</strong>
                                        Boca single-family stock is overwhelmingly slab-on-grade,
                                        and copper supply lines run under the slab. Slab leaks
                                        produce warm floor spots, baseboard moisture, elevated
                                        water bills and meter-test confirmation. Repair options
                                        include spot access through the slab, reroute through
                                        attic or wall, or full repipe depending on the property
                                        and the failure pattern.
                                    </li>
                                    <li>
                                        <strong>Tankless water heater conversions.</strong>
                                        Boca's high-end residential market drives steady demand
                                        for tankless conversions &mdash; space savings, on-demand
                                        hot water, longer unit life. We size, install and permit
                                        gas and electric tankless units.
                                    </li>
                                    <li>
                                        <strong>Mizner-era and historic property work.</strong>
                                        Original Mizner-designed homes in Old Floresta and Royal
                                        Palm and the surrounding 1920s Mediterranean Revival
                                        landmarks require plumbing approaches that respect the
                                        construction &mdash; lath-and-plaster walls, original
                                        tile floors, finish-matching considerations. Historic
                                        district properties may require City of Boca Raton
                                        Historic Preservation coordination for envelope-affecting
                                        work.
                                    </li>
                                    <li>
                                        <strong>Snowbird-vacancy plumbing failures.</strong>
                                        Boca's seasonal-resident population produces a constant
                                        stream of vacant-unit plumbing failures. Snowbird unit
                                        floods can run for days before discovery. We respond to
                                        vacant-unit cascade calls every offseason and coordinate
                                        with absent owners, property managers and HOAs.
                                    </li>
                                </ul>
                            </section>

                            <section class="services" aria-labelledby="services-h">
                                <h2 id="services-h">Our Boca Plumbing Services</h2>
                                <ul class="listing">
                                    <li><strong>24/7 emergency plumbing.</strong> Burst pipes, active leaks, sewer backups, water heater failures, high-rise condo cascades.</li>
                                    <li><strong>Whole-house repipe.</strong> Copper, PEX and CPVC repipes for pre-1990 single-family stock with chronic pinhole leaks.</li>
                                    <li><strong>Slab leak repair.</strong> Spot access, reroute and full repipe options.</li>
                                    <li><strong>Cast-iron drain stack rehab.</strong> Full replacement, partial line work, CIPP lining.</li>
                                    <li><strong>Water heater repair &amp; replacement.</strong> Standard tank, hybrid heat pump, and electric or gas tankless.</li>
                                    <li><strong>Tankless water heater conversion.</strong> Sizing, install, gas line upsizing, permitting.</li>
                                    <li><strong>Drain cleaning &amp; hydro jetting.</strong> Kitchen, bath and main line clogs; commercial drain service.</li>
                                    <li><strong>Sewer line repair &amp; replacement.</strong> Open trench, trenchless and pipe bursting options.</li>
                                    <li><strong>High-rise condo plumbing.</strong> Riser repairs, supply and drain work, cross-unit coordination.</li>
                                    <li><strong>Gas line installation &amp; repair.</strong> Permitted gas piping for appliances, tankless heaters, generators and outdoor kitchens.</li>
                                    <li><strong>Backflow prevention.</strong> Installation, certification, testing and repair.</li>
                                    <li><strong>Fixture installation.</strong> Toilets, sinks, faucets, garbage disposals, dishwashers, ice makers.</li>
                                </ul>
                            </section>

                            <section class="service-area" aria-labelledby="area-h">
                                <h2 id="area-h">Where We Plumb in Boca Raton</h2>
                                <p>
                                Downtown / Mizner Park, Royal Palm Yacht &amp; Country Club,
                                Por La Mar, Spanish River, Boca Heights, Camino Gardens,
                                Boca Bath &amp; Tennis, Boca Pointe, Boca West, Polo Club,
                                Boca Country Club, Royal Palm Polo, Stonebridge, Sandalfoot
                                Cove, Boca Falls, The Oaks, Broken Sound, Woodfield,
                                Saturnia, Bocaire, St. Andrews, Old Floresta and west Boca.
                                Across Palm Beach County: Highland Beach, Delray Beach,
                                Gulf Stream, Boynton Beach, Wellington. Northern Broward:
                                Deerfield Beach, Coconut Creek, Parkland, Coral Springs.
                                </p>
                            </section>

                            <section class="faq bg-light mb-4" aria-labelledby="faq-h">
                                <h2 id="faq-h">Boca Raton Plumbing FAQs</h2>

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
                                                Are you a licensed plumbing contractor in Florida?
                                            </button>
                                        </h3>
                                        <div id="collapse_1"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_1"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>Yes. <strong>FL Certified Plumbing Contractor License #CFC1433275</strong>, issued under Chapter 489 of the Florida Statutes. Statewide credential covering Boca, Fort Lauderdale and Miami.</p>
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
                                                Do you handle 24/7 emergency plumbing in Boca Raton?
                                            </button>
                                        </h3>
                                        <div id="collapse_2"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_2"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>Yes. 60-minute on-site target across Boca, southern Palm Beach County and northern Broward. Active burst pipes, slab leaks at the surface, sewer backups and high-rise condo cascades get triaged first.</p>
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
                                                Do you do whole-house repipes in Boca Raton?
                                            </button>
                                        </h3>
                                        <div id="collapse_3"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_3"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>Yes. Recurring scope in pre-1990 Boca single-family stock with chronic copper pinhole leaks. Copper, PEX and CPVC options. 2-5 days typical for most homes.</p>
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
                                                Do you handle slab leak repair?
                                            </button>
                                        </h3>
                                        <div id="collapse_4"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_4"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>Yes. One of our most common Boca scopes. Spot repair, slab access or reroute through attic or wall depending on the property. In-house leak detection confirms location before slab work begins.</p>
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
                                                Do you do high-rise condo plumbing in Boca Raton?
                                            </button>
                                        </h3>
                                        <div id="collapse_5"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_5"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>Yes. We work routinely with Boca condo boards, property managers and engineering staff on shared plumbing risers, cross-unit responsibility, freight-elevator coordination and HOA contractor requirements.</p>
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
                                                Do you install tankless water heaters?
                                            </button>
                                        </h3>
                                        <div id="collapse_6"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_6"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>Yes. Gas and electric tankless conversions are popular in Boca's high-end residential market. We size, install, coordinate gas line upsizing and permit through Palm Beach County or the City of Boca Raton.</p>
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
                                                Do you handle cast-iron drain stack rehab in older Boca homes?
                                            </button>
                                        </h3>
                                        <div id="collapse_7"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_7"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>Yes. Pre-1990 stock and Mizner-era landmarks often still have original cast iron. Full replacement, partial line, or CIPP lining options.</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </section>

                            <section class="contact" aria-labelledby="contact-h">
                                <h2 id="contact-h">Call Boca's FL-Licensed Plumber</h2>
                                <address>
                                    <strong>Water Mold Fire Restoration of Boca Raton</strong><br>
                                    6020 N Federal Highway<br>
                                    Boca Raton, FL 33487<br>
                                    <a href="tel:+15614010436">561-401-0436</a> &middot;
                                    <a href="mailto:bocaraton@watermoldfire.net">bocaraton@watermoldfire.net</a><br>
                                    FL Plumbing Contractor License CFC1433275 &middot; 24/7 Emergency Service
                                </address>
                                <p>
                                Active leak, water heater failure, sewer backup, condo
                                plumbing emergency, or repipe scope in Boca?
                                <a class="cta" href="tel:+15614010436">Call 561-401-0436</a>
                                and a crew will be rolling.
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