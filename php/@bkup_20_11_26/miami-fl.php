<?php
require_once __DIR__ . '/includes/init.php';

$pagename = "miami-fl.php";

$title = "Restoration Company in Miami, FL | Water Mold Fire";

$meta_description = "Miami's 24/7 restoration company for hurricane water damage, coastal mold, fire, plumbing & HVAC. Licensed, insured, local crews in Brickell. Call 305-999-5144.";

$meta_keywords = "restoration company miami";

$canonical_url = "https://watermoldfire.net/miami-fl/";

$geo_tags = '
<meta name="geo.region" content="US-FL">
<meta name="geo.placename" content="Miami">
<meta name="geo.position" content="25.7800;-80.1850">
<meta name="ICBM" content="25.7800, -80.1850">
';

$open_graph = '
<meta property="og:type" content="website">
<meta property="og:site_name" content="Water Mold Fire Restoration">
<meta property="og:title" content="Restoration Company in Miami, FL | Water Mold Fire">
<meta property="og:description" content="Trusted restoration company in Miami, FL. Water, mold, fire, plumbing & HVAC services. 24/7 emergency response. Licensed, insured & 5-star rated.">
<meta property="og:url" content="https://watermoldfire.net/miami-fl/">
<meta property="og:image" content="'.site_url().'images/logo.webp">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="og:locale" content="en_US">
';

$twitter = '
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Restoration Company in Miami, FL">
<meta name="twitter:description" content="24/7 water, mold, fire, plumbing & HVAC restoration in Miami. Licensed, insured, 5-star rated.">
<meta name="twitter:image" content="'.site_url().'images/logo.webp">
';

$schema_ld_json = '
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "LocalBusiness",
      "@id": "https://watermoldfire.net/miami-fl/#localbusiness",
      "name": "Water Mold Fire Restoration of Miami",
      "alternateName": "Water Mold Fire Restoration & Plumbing — Miami",
      "description": "Full-service property restoration company in Miami, FL offering water damage, mold remediation, fire damage, plumbing, leak detection and air duct cleaning services across Miami-Dade County.",
      "url": "https://watermoldfire.net/miami-fl/",
      "telephone": "+1-305-999-5144",
      "email": "miami@watermoldfire.net",
      "priceRange": "$$",
      "image": "'.site_url().'images/banner/s1.webp",
      "logo": "'.site_url().'images/logo.webp",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "100 Biscayne Blvd",
        "addressLocality": "Miami",
        "addressRegion": "FL",
        "postalCode": "33132",
        "addressCountry": "US"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 25.7800,
        "longitude": -80.1850
      },
      "openingHoursSpecification": [{
        "@type": "OpeningHoursSpecification",
        "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"],
        "opens": "00:00",
        "closes": "23:59"
      }],
      "areaServed": [
        {"@type": "City", "name": "Miami"},
        {"@type": "City", "name": "Miami Beach"},
        {"@type": "City", "name": "Coral Gables"},
        {"@type": "City", "name": "Aventura"},
        {"@type": "City", "name": "Sunny Isles Beach"},
        {"@type": "City", "name": "Bal Harbour"},
        {"@type": "City", "name": "Key Biscayne"},
        {"@type": "City", "name": "Doral"},
        {"@type": "City", "name": "Hialeah"},
        {"@type": "City", "name": "Pinecrest"},
        {"@type": "City", "name": "Palmetto Bay"},
        {"@type": "City", "name": "North Miami"},
        {"@type": "City", "name": "North Miami Beach"},
        {"@type": "City", "name": "Homestead"}
      ],
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "5.0",
        "reviewCount": "118"
      },
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Restoration Services",
        "itemListElement": [
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Water Damage Restoration","url": "https://watermoldfire.net/miami-fl/water-damage-restoration/"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Mold Remediation","url": "https://watermoldfire.net/miami-fl/mold-remediation/"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Mold Inspection & Testing","url": "https://watermoldfire.net/miami-fl/mold-inspection-testing/"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Fire Damage Restoration","url": "https://watermoldfire.net/miami-fl/fire-damage-restoration/"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Plumbing","url": "https://watermoldfire.net/miami-fl/plumbing/"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Leak Detection","url": "https://watermoldfire.net/miami-fl/leak-detection/"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Air Duct & HVAC Cleaning","url": "https://watermoldfire.net/miami-fl/ac-cleaning/"}}
        ]
      },
      "sameAs": [
        "https://share.google/hCFBPvvd4aBVYPGdd",
        "https://www.facebook.com/watermoldfiremiami",
        "https://www.instagram.com/watermoldfire/"
      ]
    },
    {
      "@type": "BreadcrumbList",
      "@id": "https://watermoldfire.net/miami-fl/#breadcrumb",
      "itemListElement": [
        {"@type": "ListItem","position": 1,"name": "Home","item": "https://watermoldfire.net/"},
        {"@type": "ListItem","position": 2,"name": "Locations","item": "https://watermoldfire.net/locations/"},
        {"@type": "ListItem","position": 3,"name": "Miami, FL","item": "https://watermoldfire.net/miami-fl/"}
      ]
    },
    {
      "@type": "WebPage",
      "@id": "https://watermoldfire.net/miami-fl/#webpage",
      "url": "https://watermoldfire.net/miami-fl/",
      "name": "Restoration Company in Miami, FL",
      "isPartOf": {"@id": "https://watermoldfire.net/#website"},
      "about": {"@id": "https://watermoldfire.net/miami-fl/#localbusiness"},
      "breadcrumb": {"@id": "https://watermoldfire.net/miami-fl/#breadcrumb"},
      "inLanguage": "en-US"
    }
  ]
}
</script>
';

require_once __DIR__ . '/includes/header.php';
?>

    <!-- ===== HERO ===== -->
    <section class="hero-section">
        <div class="hero-content">
            <!-- Main Heading -->
            <h1 class="hero-title">
                Miami's Most Trusted Property Restoration Company
            </h1>   
            <!-- Feature Pills -->
            <div class="feature-pills">
                <div class="feature-pill">
                    <i class="fas fa-headset"></i>
                    <span>24/7 Emergency Response</span>
                </div>
                <div class="feature-pill">
                    <i class="fas fa-comments"></i>
                    <span>Free Consultation</span>
                </div>
                <div class="feature-pill">
                    <i class="fas fa-building"></i>
                    <span>Residential & Commercial</span>
                </div>
                <div class="feature-pill">
                    <i class="fas fa-certificate"></i>
                    <span>IICRC Certified Firm</span>
                </div>
                <div class="feature-pill">
                    <i class="fas fa-file-invoice-dollar"></i>
                    <span>Direct Insurance Billing</span>
                </div>
                <div class="feature-pill">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>Servicing all of Florida</span>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <?php
    require_once __DIR__ . '/miami-fl/cta-service-rating.php';
    ?>

    <!-- location tabs -->
    <?php
    require_once __DIR__ . '/miami-fl/form-and-services.php';
    ?>

    <!-- description -->
    <section class="cddescription cdarticlepage">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="cdinner">
                        <div class="articleDesc short-content" id="articleContent">

                            <section class="intro" aria-labelledby="intro-h">
                                <h2 id="intro-h">Property Restoration in Miami, FL</h2>
                                <p>
                                Water Mold Fire Restoration of Miami serves homeowners, condo
                                associations, property managers and businesses across Miami-Dade
                                County. From the Art Deco buildings of South Beach to the
                                high-rise condo towers of Brickell and Sunny Isles, the
                                Mediterranean Revival homes of Coral Gables to the 1950s CBS
                                bungalow stock of Hialeah, Miami's building inventory is
                                uniquely diverse &mdash; and uniquely demanding when restoration
                                work is required. Our local crews dispatch 24/7 from our
                                Biscayne Boulevard facility in downtown Miami.
                                </p>
                            </section>

                            <section class="local-context" aria-labelledby="local-h">
                                <h2 id="local-h">Why Miami Properties Need a Local Restoration Company</h2>
                                <p>
                                Miami's climate, geography and building stock create restoration
                                challenges no national franchise was trained to handle. The
                                defining event for the modern South Florida restoration industry
                                remains <strong>Hurricane Andrew</strong> &mdash; the Category 5
                                storm that flattened South Miami-Dade in August 1992 and forced
                                the rewrite of Florida building code that produced the
                                High Velocity Hurricane Zone (HVHZ) requirements still in force
                                today. Andrew's legacy is the most stringent residential
                                construction code in the United States; the cost is that
                                restoration in Miami-Dade requires a working understanding of
                                HVHZ Product Approval, Notice of Acceptance (NOA) compliance,
                                and Miami-Dade-specific permitting that out-of-county
                                contractors routinely get wrong.
                                </p>
                                <p>
                                Miami's risk profile has also shifted since Andrew. The June 2021
                                <strong>Surfside condo collapse</strong> &mdash; in which the
                                Champlain Towers South partial collapse killed 98 people &mdash;
                                drove the state-wide condominium safety reforms that now require
                                structural recertification for condos over 25 years old in
                                Miami-Dade. Water intrusion, mold growth and structural moisture
                                problems in older Miami condos now trigger inspection and
                                remediation requirements that simply did not exist before 2021.
                                Sea level rise compounds it: Miami Beach now operates one of the
                                largest municipal stormwater pump systems in the country, and
                                sunny-day king tide flooding regularly pushes brackish water
                                into ground-floor units across Mid Beach, North Beach, Edgewater
                                and the Venetian Islands. Add the year-round humidity that makes
                                coastal Miami a natural environment for mold colonization within
                                48 hours of any leak, and you have a city where restoration is
                                rarely a one-and-done event.
                                </p>
                            </section>

                            <!-- SERVICES HUB — links to all 7 silo pages -->
                            <section class="services-hub mb-4" aria-labelledby="services-h">
                                <h2 id="services-h">Our Miami Services</h2>
                                <div class="service-grid">
                                    <div class="service-item">
                                        <a href="<?php echo site_url("miami-fl/water-damage-restoration/"); ?>">
                                        <h3>Water Damage Restoration</h3>
                                        <p>Emergency water extraction, structural drying and dehumidification after pipe bursts, leaks, storms and floods.</p>
                                        </a>
                                    </div>
                                    <div class="service-item">
                                        <a href="<?php echo site_url("miami-fl/mold-remediation/"); ?>">
                                        <h3>Mold Remediation</h3>
                                        <p>Florida-licensed mold removal (MRSR2655) with containment, HEPA filtration and post-remediation verification.</p>
                                        </a>
                                    </div>
                                    <div class="service-item">
                                        <a href="<?php echo site_url("miami-fl/mold-inspection-testing/"); ?>">
                                        <h3>Mold Inspection &amp; Testing</h3>
                                        <p>Independent mold assessments (MRSA1639) with lab-analyzed air and surface sampling.</p>
                                        </a>
                                    </div>
                                    <div class="service-item">
                                        <a href="<?php echo site_url("miami-fl/fire-damage-restoration/"); ?>">
                                        <h3>Fire Damage Restoration</h3>
                                        <p>Board-up, soot and smoke removal, odor neutralization and full structural rebuild.</p>
                                        </a>
                                    </div>
                                    <div class="service-item">
                                        <a href="<?php echo site_url("miami-fl/plumbing/"); ?>">
                                        <h3>Plumbing</h3>
                                        <p>Florida-licensed plumbing contractor (CFC1433275) for repairs, repipes, water heaters, drains and emergencies.</p>
                                        </a>
                                    </div>
                                    <div class="service-item">
                                        <a href="<?php echo site_url("miami-fl/leak-detection/"); ?>">
                                        <h3>Leak Detection</h3>
                                        <p>Invasive and non-invasive slab, pool, appliance and hidden leak detection. Insurance documentation reports available.</p>
                                        </a>
                                    </div>
                                    <div class="service-item">
                                        <a href="<?php echo site_url("miami-fl/ac-cleaning/"); ?>">
                                        <h3>Air Duct &amp; HVAC Cleaning</h3>
                                        <p>NADCA-aligned air duct, dryer vent and HVAC coil cleaning for healthier indoor air.</p>
                                        </a>
                                    </div>
                                </div>
                            </section>

                            <section class="service-area" aria-labelledby="area-h">
                                <h2 id="area-h">Miami Neighborhoods We Serve</h2>
                                <p>
                                Our Miami crews respond throughout Miami-Dade County, including
                                Brickell, Downtown Miami, Edgewater, Wynwood, the Design
                                District, Little Havana, Coconut Grove, Coral Gables, South
                                Beach, Mid Beach, North Beach, Bal Harbour, Sunny Isles Beach,
                                Aventura, Key Biscayne, North Miami, North Miami Beach, Doral,
                                Hialeah, Miami Springs, Pinecrest, Palmetto Bay, Kendall and
                                Homestead.
                                </p>
                            </section>

                            <section class="contact" aria-labelledby="contact-h">
                                <h2 id="contact-h">Contact Water Mold Fire Restoration of Miami</h2>
                                <address>
                                    <strong>Water Mold Fire Restoration of Miami</strong><br>
                                    100 Biscayne Blvd<br>
                                    Miami, FL 33132<br>
                                    <a href="tel:+13059995144">305-999-5144</a> &middot;
                                    <a href="mailto:miami@watermoldfire.net">miami@watermoldfire.net</a><br>
                                    24/7 Emergency Service
                                </address>
                                <p><a class="cta" href="tel:+13059995144">Call Now for 24/7 Emergency Response</a></p>
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
    require_once __DIR__ . '/miami-fl/why-choose.php';
    ?>

    <?php
    require_once __DIR__ . '/includes/our-client-logos-list.php';
    ?>

    <!-- city map -->
    <?php
    require_once __DIR__ . '/miami-fl/address-with-map.php';
    ?>

<?php
require_once __DIR__ . '/includes/footer.php';
?>