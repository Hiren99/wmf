<?php
require_once __DIR__ . '/includes/init.php';

$pagename = "new-york-ny.php";

$title = "Restoration Company in New York City, NY | Water Mold Fire";

$meta_description = "NYC's 24/7 property restoration company for water, mold, fire, sewer backup & storm cleanup across Manhattan and the five boroughs. IICRC Firm Certified.";

$meta_keywords = "restoration company new york city";

$canonical_url = "https://watermoldfire.net/new-york-ny/";

$geo_tags = '
<meta name="geo.region" content="US-NY">
<meta name="geo.placename" content="New York">
<meta name="geo.position" content="40.7720;-73.9560">
';

$open_graph = '
<meta property="og:type" content="website">
<meta property="og:site_name" content="Water Mold Fire Restoration">
<meta property="og:title" content="Restoration Company in New York City, NY | Water Mold Fire">
<meta property="og:description" content="Trusted NYC restoration company. Water, mold, fire, sewer backup, hurricane remnant cleanup across Manhattan and the five boroughs. IICRC Firm Certified.">
<meta property="og:url" content="https://watermoldfire.net/new-york-ny/">
<meta property="og:image" content="'.site_url().'images/logo.webp">
';

$schema_ld_json = '
<script type="application/ld+json">
{"@context":"https://schema.org","@graph":[
{"@type":"LocalBusiness","@id":"https://watermoldfire.net/new-york-ny/#localbusiness","name":"Water Mold Fire Restoration of New York City","description":"Property restoration company in New York City offering water damage, mold remediation, mold inspection and fire damage restoration across Manhattan, Brooklyn, Queens, the Bronx and Staten Island, plus the inner-ring suburbs. IICRC Firm Certified.","url":"https://watermoldfire.net/new-york-ny/","email":"newyorkcity@watermoldfire.net","priceRange":"$$","image":"'.site_url().'images/banner/s1.webp","logo":"'.site_url().'images/logo.webp","address":{"@type":"PostalAddress","streetAddress":"1450 2nd Ave","addressLocality":"New York","addressRegion":"NY","postalCode":"10021","addressCountry":"US"},"geo":{"@type":"GeoCoordinates","latitude":40.7720,"longitude":-73.9560},"openingHoursSpecification":[{"@type":"OpeningHoursSpecification","dayOfWeek":["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"],"opens":"00:00","closes":"23:59"}],"areaServed":[{"@type":"City","name":"New York"},{"@type":"City","name":"Brooklyn"},{"@type":"City","name":"Queens"},{"@type":"City","name":"Bronx"},{"@type":"City","name":"Staten Island"},{"@type":"City","name":"Jersey City"},{"@type":"City","name":"Hoboken"},{"@type":"City","name":"Yonkers"}],"aggregateRating":{"@type":"AggregateRating","ratingValue":"5.0","reviewCount":"118"},"hasCredential":{"@type":"EducationalOccupationalCredential","name":"IICRC Firm Certification","credentialCategory":"certification","recognizedBy":{"@type":"Organization","name":"Institute of Inspection, Cleaning and Restoration Certification"}},"hasOfferCatalog":{"@type":"OfferCatalog","name":"Restoration Services","itemListElement":[{"@type":"Offer","itemOffered":{"@type":"Service","name":"Water Damage Restoration","url":"https://watermoldfire.net/new-york-ny/water-damage-restoration/"}},{"@type":"Offer","itemOffered":{"@type":"Service","name":"Mold Remediation","url":"https://watermoldfire.net/new-york-ny/mold-remediation/"}},{"@type":"Offer","itemOffered":{"@type":"Service","name":"Mold Inspection & Testing","url":"https://watermoldfire.net/new-york-ny/mold-inspection-testing/"}},{"@type":"Offer","itemOffered":{"@type":"Service","name":"Fire Damage Restoration","url":"https://watermoldfire.net/new-york-ny/fire-damage-restoration/"}}]},"sameAs":["https://share.google/o4GcmHQUm8s6DqTR6","https://www.facebook.com/watermoldfirenewyorkcity/","https://www.yelp.com/biz/water-mold-fire-restoration-of-new-york-city-manhattan-2"]},
{"@type":"BreadcrumbList","@id":"https://watermoldfire.net/new-york-ny/#breadcrumb","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"https://watermoldfire.net/"},{"@type":"ListItem","position":2,"name":"Locations","item":"https://watermoldfire.net/locations/"},{"@type":"ListItem","position":3,"name":"New York City, NY","item":"https://watermoldfire.net/new-york-ny/"}]},
{"@type":"WebPage","@id":"https://watermoldfire.net/new-york-ny/#webpage","url":"https://watermoldfire.net/new-york-ny/","name":"Restoration Company in New York City, NY","isPartOf":{"@id":"https://watermoldfire.net/#website"},"about":{"@id":"https://watermoldfire.net/new-york-ny/#localbusiness"},"breadcrumb":{"@id":"https://watermoldfire.net/new-york-ny/#breadcrumb"},"inLanguage":"en-US"}
]}
</script>
';

require_once __DIR__ . '/includes/header.php';
?>

    <!-- ===== HERO ===== -->
    <section class="hero-section">
        <div class="hero-content">
            <!-- Main Heading -->
            <h1 class="hero-title">
                New York City's Most Trusted Property Restoration Company
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
                    <span>Servicing all of New York</span>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <?php
    require_once __DIR__ . '/new-york-ny/cta-service-rating.php';
    ?>

    <!-- location tabs -->
    <?php
    require_once __DIR__ . '/new-york-ny/form-and-services.php';
    ?>

    <!-- description -->
    <section class="cddescription cdarticlepage">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="cdinner">
                        <div class="articleDesc short-content" id="articleContent">

                            <section class="intro" aria-labelledby="intro-h">
                                <h2 id="intro-h">Property Restoration in New York City</h2>
                                <p>Water Mold Fire Restoration of New York City serves homeowners, co-op and condo boards, building managers, building owners and business owners across all five boroughs of New York City and the surrounding metro. From the pre-war co-op and condo buildings of Manhattan's Upper East Side, Upper West Side, Central Park West, Park Avenue and Fifth Avenue corridors, to the brownstone stock of Brooklyn Heights, Park Slope, Cobble Hill, Fort Greene, Clinton Hill, Bedford-Stuyvesant and the Greenwich Village historic districts, the high-rise condo towers of Midtown East, Hudson Yards, Battery Park City, Downtown Brooklyn and Long Island City, the modern luxury construction of Tribeca and the West Side, and the single-family and multifamily stock across Queens, the Bronx and Staten Island, the NYC building inventory is uniquely varied. Our local crews dispatch 24/7 from our Upper East Side facility on 2nd Avenue near East 76th Street. We are <strong>IICRC Firm Certified</strong>.</p>
                            </section>

                            <section class="local-context" aria-labelledby="local-h">
                                <h2 id="local-h">Why NYC Properties Need a Local Restoration Company</h2>
                                <p>New York City's restoration profile is dominated by a small set of city-specific conditions: <strong>century-old building stock</strong> with original cast-iron drain stacks and galvanized supply lines still in service across pre-war Manhattan and the Brooklyn brownstone neighborhoods; <strong>vertical co-op and condo plumbing cascades</strong> where a supply line break on a 30th-floor unit sends water through every unit below, with the unique co-op / condo board approval and contractor-coordination layer that defines NYC restoration work; <strong>Hurricane Sandy (October 2012)</strong>, which devastated coastal NYC neighborhoods (the Rockaways, Coney Island, Staten Island South Shore, Red Hook, Lower Manhattan), inundated the subway system and produced years of subsequent restoration work; <strong>Hurricane Ida remnants (September 2021)</strong>, which dropped record rainfall on the city and flooded basement apartments across Queens and the Bronx with fatal consequences; <strong>recurring nor'easter snow events</strong> and the occasional polar vortex producing frozen-pipe-burst waves in older buildings; and <strong>severe summer thunderstorm rainfall</strong> that overwhelms NYC's combined sewer infrastructure (the largest combined sewer system in the country) producing backflow into basements and ground-floor apartments. Add the year-round humid-subtropical-to-humid-continental climate, A/C condensate from the spring-through-fall cooling season, and the post-Surfside-era condo board scrutiny that has tightened NYC building inspections, and you have a market where restoration is a year-round, building-specific, board-coordinated practice.</p>
                            </section>

                            <section class="services-hub mb-4" aria-labelledby="services-h">
                                <h2 id="services-h">Our NYC Services</h2>
                                <div class="service-grid">
                                    <div class="service-item"><a href="<?php echo site_url("new-york-ny/water-damage-restoration/"); ?>"><h3>Water Damage Restoration &amp; Flood Cleanup</h3><p>Emergency water extraction, vertical condo cascade response, pre-war building plumbing failures, sewer backups, hurricane remnant flooding.</p></a></div>
                                    <div class="service-item"><a href="<?php echo site_url("new-york-ny/mold-remediation/"); ?>"><h3>Mold Remediation &amp; Mold Removal</h3><p>Industry-standard mold remediation. Co-op and condo board coordination, brownstone basement work, post-water-loss remediation.</p></a></div>
                                    <div class="service-item"><a href="<?php echo site_url("new-york-ny/mold-inspection-testing/"); ?>"><h3>Mold Inspection &amp; Mold Testing</h3><p>Pre-purchase, post-Sandy, post-Ida, co-op board and IAQ assessments with lab-analyzed air and surface sampling.</p></a></div>
                                    <div class="service-item"><a href="<?php echo site_url("new-york-ny/fire-damage-restoration/"); ?>"><h3>Fire Damage Restoration, Smoke &amp; Odor Removal</h3><p>Board-up, soot and smoke removal, odor neutralization and full structural rebuild after kitchen, electrical and pre-war building fires.</p></a></div>
                                </div>
                            </section>

                            <section class="credentials" aria-labelledby="cred-h">
                                <h2 id="cred-h">Our NYC Credentials</h2>
                                <p>NYC restoration work is governed by NYC Department of Buildings permitting for any reconstruction scope and by co-op and condo board approval processes for any work in residential buildings. New York State maintains specific licensing for certain trades and (since 2015) for mold professionals on commercial properties above a certain scope under New York Labor Law Article 32; we operate under <strong>IICRC Firm Certification</strong> &mdash; firm-level certification meaning the company operates under IICRC standards across water damage (IICRC S500), mold remediation (IICRC S520) and fire and smoke damage (IICRC S700) &mdash; as the meaningful industry credential and coordinate with NY-licensed assessors where the project scope requires.</p>
                            </section>

                            <section class="service-area" aria-labelledby="area-h">
                                <h2 id="area-h">NYC Coverage</h2>
                                <p><strong>Manhattan:</strong> Upper East Side, Upper West Side, Central Park West, Yorkville, Carnegie Hill, Lenox Hill, Midtown East, Midtown West, Hell's Kitchen, Murray Hill, Chelsea, Flatiron, NoMad, Gramercy, Greenwich Village, West Village, East Village, SoHo, NoHo, Tribeca, Battery Park City, Financial District, Lower East Side, Chinatown, Two Bridges, Harlem, East Harlem, Washington Heights, Inwood, Morningside Heights. <strong>Brooklyn:</strong> Brooklyn Heights, DUMBO, Downtown Brooklyn, Cobble Hill, Carroll Gardens, Park Slope, Prospect Heights, Fort Greene, Clinton Hill, Bed-Stuy, Williamsburg, Greenpoint, Bushwick, Red Hook, Sunset Park, Bay Ridge, Crown Heights, Flatbush, Prospect Lefferts Gardens. <strong>Queens:</strong> Long Island City, Astoria, Sunnyside, Woodside, Jackson Heights, Forest Hills, Rego Park, Kew Gardens, Flushing, Bayside. <strong>Bronx:</strong> Riverdale, Fieldston, Bedford Park, Mott Haven, South Bronx, Fordham. <strong>Staten Island:</strong> St. George, Stapleton, New Brighton, South Shore.</p>
                            </section>

                            <section class="contact" aria-labelledby="contact-h">
                                <h2 id="contact-h">Contact Water Mold Fire Restoration of New York City</h2>
                                <address>
                                    <strong>Water Mold Fire Restoration of New York City</strong><br>
                                    1450 2nd Ave<br>
                                    New York, NY 10021<br>
                                    <a href="tel:+1212-257-2169">212-257-2169</a> &middot;
                                    <a href="mailto:newyorkcity@watermoldfire.net">newyorkcity@watermoldfire.net</a><br>
                                    24/7 Emergency Service &middot; IICRC Firm Certified
                                </address>
                                <p>Call now for 24/7 emergency response.</p>
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
    require_once __DIR__ . '/new-york-ny/why-choose.php';
    ?>

    <?php
    require_once __DIR__ . '/includes/our-client-logos-list.php';
    ?>

    <!-- city map -->
    <?php
    require_once __DIR__ . '/new-york-ny/address-with-map.php';
    ?>

<?php
require_once __DIR__ . '/includes/footer.php';
?>