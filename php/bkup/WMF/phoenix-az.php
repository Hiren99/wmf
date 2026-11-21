<?php
require_once __DIR__ . '/includes/init.php';

$pagename = "phoenix-az.php";

$title = "Restoration Company in Phoenix, AZ | Water Mold Fire";

$meta_description = "Phoenix's 24/7 property restoration company for monsoon flooding, haboob dust, swamp cooler leaks, mold & fire damage. IICRC Firm Certified. Call 623-201-3386.";

$meta_keywords = "restoration company phoenix";

$canonical_url = "https://watermoldfire.net/phoenix-az/";

$geo_tags = '
<meta name="geo.region" content="US-AZ">
<meta name="geo.placename" content="Phoenix">
<meta name="geo.position" content="33.4940;-112.2310">
<meta name="ICBM" content="33.4940, -112.2310">
';

$open_graph = '
<meta property="og:type" content="website">
<meta property="og:site_name" content="Water Mold Fire Restoration">
<meta property="og:title" content="Restoration Company in Phoenix, AZ | Water Mold Fire">
<meta property="og:description" content="Trusted Phoenix restoration company. Monsoon flash flooding, haboob damage, swamp cooler leaks, mold and fire damage. IICRC Firm Certified.">
<meta property="og:url" content="https://watermoldfire.net/phoenix-az/">
<meta property="og:image" content="'.site_url().'images/logo.webp">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="og:locale" content="en_US">
';

$twitter = '
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Restoration Company in Phoenix, AZ">
<meta name="twitter:description" content="24/7 water, mold and fire damage restoration across Phoenix and the Valley of the Sun. IICRC Firm Certified.">
<meta name="twitter:image" content="'.site_url().'images/logo.webp">
';

$schema_ld_json = '
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "LocalBusiness",
      "@id": "https://watermoldfire.net/phoenix-az/#localbusiness",
      "name": "Water Mold Fire Restoration of Phoenix",
      "alternateName": "Water Mold Fire Restoration — Phoenix",
      "description": "Property restoration company in Phoenix, AZ offering water damage, monsoon flood, swamp cooler, mold remediation, mold inspection and fire damage restoration across Maricopa County, the East Valley, the West Valley and the Phoenix metro. IICRC Firm Certified.",
      "url": "https://watermoldfire.net/phoenix-az/",
      "telephone": "+1-623-201-3386",
      "email": "phoenix@watermoldfire.net",
      "priceRange": "$$",
      "image": "'.site_url().'images/banner/s1.webp",
      "logo": "'.site_url().'images/logo.webp",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "7805 West Mulberry Drive",
        "addressLocality": "Phoenix",
        "addressRegion": "AZ",
        "postalCode": "85033",
        "addressCountry": "US"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 33.4940,
        "longitude": -112.2310
      },
      "openingHoursSpecification": [{
        "@type": "OpeningHoursSpecification",
        "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"],
        "opens": "00:00",
        "closes": "23:59"
      }],
      "areaServed": [
        {"@type": "City", "name": "Phoenix"},
        {"@type": "City", "name": "Scottsdale"},
        {"@type": "City", "name": "Tempe"},
        {"@type": "City", "name": "Mesa"},
        {"@type": "City", "name": "Chandler"},
        {"@type": "City", "name": "Gilbert"},
        {"@type": "City", "name": "Glendale"},
        {"@type": "City", "name": "Peoria"},
        {"@type": "City", "name": "Surprise"},
        {"@type": "City", "name": "Goodyear"},
        {"@type": "City", "name": "Avondale"},
        {"@type": "City", "name": "Buckeye"},
        {"@type": "City", "name": "Paradise Valley"},
        {"@type": "City", "name": "Sun City"}
      ],
      "aggregateRating": {"@type": "AggregateRating","ratingValue": "5.0","reviewCount": "118"},
      "hasCredential": {
        "@type": "EducationalOccupationalCredential",
        "name": "IICRC Firm Certification",
        "credentialCategory": "certification",
        "recognizedBy": {"@type": "Organization","name": "Institute of Inspection, Cleaning and Restoration Certification"}
      },
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Restoration Services",
        "itemListElement": [
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Water Damage Restoration","url": "https://watermoldfire.net/phoenix-az/water-damage-restoration/"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Mold Remediation","url": "https://watermoldfire.net/phoenix-az/mold-remediation/"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Mold Inspection & Testing","url": "https://watermoldfire.net/phoenix-az/mold-inspection-testing/"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Fire Damage Restoration","url": "https://watermoldfire.net/phoenix-az/fire-damage-restoration/"}}
        ]
      },
      "sameAs": [
        "https://share.google/GrxODrgsOscKW2duZ",
        "https://www.facebook.com/watermoldfirephoenix/",
        "https://www.yelp.com/biz/water-mold-fire-restoration-phoenix-2"
      ]
    },
    {
      "@type": "BreadcrumbList","@id": "https://watermoldfire.net/phoenix-az/#breadcrumb",
      "itemListElement": [
        {"@type": "ListItem","position": 1,"name": "Home","item": "https://watermoldfire.net/"},
        {"@type": "ListItem","position": 2,"name": "Locations","item": "https://watermoldfire.net/locations/"},
        {"@type": "ListItem","position": 3,"name": "Phoenix, AZ","item": "https://watermoldfire.net/phoenix-az/"}
      ]
    },
    {
      "@type": "WebPage","@id": "https://watermoldfire.net/phoenix-az/#webpage",
      "url": "https://watermoldfire.net/phoenix-az/",
      "name": "Restoration Company in Phoenix, AZ",
      "isPartOf": {"@id": "https://watermoldfire.net/#website"},
      "about": {"@id": "https://watermoldfire.net/phoenix-az/#localbusiness"},
      "breadcrumb": {"@id": "https://watermoldfire.net/phoenix-az/#breadcrumb"},
      "inLanguage": "en-US"
    }
  ]
}
</script>
';

require_once __DIR__ . '/includes/header.php';
?>

    <!-- ===== HERO ===== -->
    <section class="hero-section cdphoenix-az">
        <div class="hero-content">
            <!-- Main Heading -->
            <h1 class="hero-title">
                Phoenix's Most Trusted Property Restoration Company
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
                    <span>Servicing all of Arizona</span>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <?php
    require_once __DIR__ . '/phoenix-az/cta-service-rating.php';
    ?>

    <!-- location tabs -->
    <?php
    require_once __DIR__ . '/phoenix-az/form-and-services.php';
    ?>

    <!-- description -->
    <section class="cddescription cdarticlepage">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="cdinner">
                        <div class="articleDesc short-content" id="articleContent">

                            <section class="intro" aria-labelledby="intro-h">
                                <h2 id="intro-h">Property Restoration in Phoenix, AZ</h2>
                                <p>
                                Water Mold Fire Restoration of Phoenix serves homeowners,
                                HOA associations, property managers and business owners
                                across Maricopa County, the East Valley, the West Valley
                                and the broader Phoenix metro. From the Spanish Colonial
                                Revival and pueblo-revival adobe stock of the historic
                                central Phoenix neighborhoods (Encanto, Coronado, Garfield,
                                F.Q. Story, Willo, Roosevelt), to the stucco-and-tile-roof
                                ranches that fill Maryvale, Sunnyslope, Phoenix Mountain
                                Preserve neighborhoods and the broader Valley, the
                                mid-century modern enclaves of Arcadia, Scottsdale and
                                Paradise Valley, the new construction of the East Valley
                                (Gilbert, Chandler, Mesa) and the West Valley (Surprise,
                                Goodyear, Buckeye), and the high-rise condo towers of
                                Downtown Phoenix and Old Town Scottsdale, the Valley of
                                the Sun's building inventory is uniquely varied. Our local
                                crews dispatch 24/7 from our West Phoenix facility on West
                                Mulberry Drive in the Maryvale corridor. We are
                                <strong>IICRC Firm Certified</strong>.
                                </p>
                            </section>

                            <section class="local-context" aria-labelledby="local-h">
                                <h2 id="local-h">Why Phoenix Properties Need a Local Restoration Company</h2>
                                <p>
                                Phoenix sits in the Sonoran Desert at the heart of the
                                most extreme summer-heat metropolitan area in the country,
                                and the city's restoration profile is dominated by a small
                                set of uniquely Southwestern conditions. <strong>Monsoon
                                season (Jul-Sep)</strong> brings intense localized
                                thunderstorms that drop 1-2 inches of rain on individual
                                neighborhoods in under an hour, overwhelming storm drains
                                and the network of dry washes and arroyos that cut through
                                the Valley. <strong>Haboobs</strong> &mdash; massive
                                dust-storm walls that can reach over 100 miles wide and a
                                mile high &mdash; precede most monsoon storms, depositing
                                sand and dust into HVAC systems, attics and any property
                                with windows or doors left open. <strong>Hurricane Hilary
                                in August 2023</strong> produced historic rainfall and
                                flooding across the Phoenix metro &mdash; the first
                                tropical-storm warning in California-Arizona history.
                                <strong>Swamp coolers (evaporative coolers)</strong>
                                remain on a meaningful portion of older Phoenix homes (the
                                West Valley, central Phoenix historic stock, parts of
                                Maryvale) and are a major water-damage source. The
                                <strong>2024 Phoenix heat dome</strong> that produced
                                113+ consecutive days above 100&deg;F stressed HVAC
                                systems metro-wide, producing condensate-overflow water
                                damage at unusual volume.
                                </p>
                                <p>
                                Beyond seasonal events, Phoenix's day-to-day restoration
                                risks include slab leaks in pre-1990 copper supply
                                systems, A/C condensate overflows during the
                                essentially-year-round cooling season, the
                                "we-don't-get-mold-here" misconception that lets moisture
                                problems sit until they're catastrophic, and the
                                flat-roof drainage failures common to the city's pueblo
                                revival and Spanish Colonial historic stock. <strong>Arizona
                                does not require state licensure for restoration
                                specialties</strong> &mdash; the meaningful credentials
                                are IICRC certification and adherence to the published
                                industry consensus standards.
                                </p>
                            </section>

                            <section class="services-hub mb-4" aria-labelledby="services-h">
                                <h2 id="services-h">Our Phoenix Services</h2>
                                <div class="service-grid">
                                    <div class="service-item">
                                        <a href="<?php echo site_url("phoenix-az/water-damage-restoration/"); ?>">
                                        <h3>Water Damage Restoration &amp; Flood Cleanup</h3>
                                        <p>Emergency water extraction, monsoon flash flood cleanup, swamp cooler leak response, slab leak repair and structural drying.</p>
                                        </a>
                                    </div>
                                    <div class="service-item">
                                        <a href="<?php echo site_url("phoenix-az/mold-remediation/"); ?>">
                                        <h3>Mold Remediation &amp; Mold Removal</h3>
                                        <p>Mold remediation following IICRC industry standards. Containment, HEPA filtration and post-remediation cleaning.</p>
                                        </a>
                                    </div>
                                    <div class="service-item">
                                        <a href="<?php echo site_url("phoenix-az/mold-inspection-testing/"); ?>">
                                        <h3>Mold Inspection &amp; Mold Testing</h3>
                                        <p>Pre-purchase, post-water-loss and indoor air quality mold assessments with lab-analyzed air and surface sampling.</p>
                                        </a>
                                    </div>
                                    <div class="service-item">
                                        <a href="<?php echo site_url("phoenix-az/fire-damage-restoration/"); ?>">
                                        <h3>Fire Damage Restoration, Smoke &amp; Odor Removal</h3>
                                        <p>Board-up, soot and smoke removal, odor neutralization and full structural rebuild.</p>
                                        </a>
                                    </div>
                                </div>
                            </section>

                            <section class="credentials" aria-labelledby="cred-h">
                                <h2 id="cred-h">Our Phoenix Credentials</h2>
                                <p>
                                Arizona does not require a state-level license to perform
                                water damage restoration, mold remediation, mold inspection
                                or fire damage restoration. The Arizona Registrar of
                                Contractors regulates many building trades, but not
                                restoration specialties specifically. <strong>IICRC Firm
                                Certification</strong> is the recognized industry credential
                                where state licensure is not required &mdash; firm-level
                                certification meaning the company operates under IICRC
                                standards across water damage (IICRC S500), mold
                                remediation (IICRC S520) and fire and smoke damage (IICRC
                                S700).
                                </p>
                            </section>

                            <section class="service-area" aria-labelledby="area-h">
                                <h2 id="area-h">Phoenix Neighborhoods &amp; Valley Coverage</h2>
                                <p>
                                <strong>Phoenix:</strong> Downtown, Midtown, Encanto,
                                Coronado, Garfield, F.Q. Story, Willo, Roosevelt, Arcadia,
                                Biltmore, Sunnyslope, Maryvale, Laveen, Ahwatukee, North
                                Phoenix, Desert Ridge, Cave Creek. <strong>East
                                Valley:</strong> Scottsdale, Old Town Scottsdale, Paradise
                                Valley, Tempe, Mesa, Chandler, Gilbert, Queen Creek,
                                Fountain Hills. <strong>West Valley:</strong> Glendale,
                                Peoria, Surprise, Goodyear, Avondale, Buckeye, Sun City,
                                Sun City West, Litchfield Park.
                                </p>
                            </section>

                            <section class="contact" aria-labelledby="contact-h">
                                <h2 id="contact-h">Contact Water Mold Fire Restoration of Phoenix</h2>
                                <address>
                                    <strong>Water Mold Fire Restoration of Phoenix</strong><br>
                                    7805 West Mulberry Drive<br>
                                    Phoenix, AZ 85033<br>
                                    <a href="tel:+16232013386">623-201-3386</a> &middot;
                                    <a href="mailto:phoenix@watermoldfire.net">phoenix@watermoldfire.net</a><br>
                                    24/7 Emergency Service<br>
                                    IICRC Firm Certified
                                </address>
                                <p><a class="cta" href="tel:+16232013386">Call Now for 24/7 Emergency Response</a></p>
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
    require_once __DIR__ . '/phoenix-az/why-choose.php';
    ?>

    <?php
    require_once __DIR__ . '/includes/our-client-logos-list.php';
    ?>

    <!-- city map -->
    <?php
    require_once __DIR__ . '/phoenix-az/address-with-map.php';
    ?>

<?php
require_once __DIR__ . '/includes/footer.php';
?>