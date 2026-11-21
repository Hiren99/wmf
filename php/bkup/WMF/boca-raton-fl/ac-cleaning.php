<?php
require_once __DIR__ . '/../includes/init.php';

$pagename = "boca-raton-fl/ac-cleaning.php";

$title = "Air Duct &amp; HVAC Cleaning in Boca Raton, FL | NADCA-Aligned";

$meta_description = "Air duct, dryer vent and HVAC coil cleaning in Boca Raton. NADCA-aligned methodology. High-rise condo, gated community & snowbird-return specialists. Call 561-401-0436.";

$meta_keywords = "air duct boca raton, hvac cleaning boca raton, dryer vent, ac cleaning, air duct cleaning";

$canonical_url = "https://watermoldfire.net/boca-raton-fl/ac-cleaning/";

$geo_tags = '
<meta name="geo.region" content="US-FL">
<meta name="geo.placename" content="Boca Raton">
<meta name="geo.position" content="26.4040;-80.0805">
<meta name="ICBM" content="26.4040, -80.0805">
';

$open_graph = '
<meta property="og:type" content="website">
<meta property="og:site_name" content="Water Mold Fire Restoration">
<meta property="og:title" content="Air Duct &amp; HVAC Cleaning in Boca Raton, FL | NADCA-Aligned">
<meta property="og:description" content="Air duct, dryer vent and HVAC coil cleaning in Boca Raton. NADCA ACR-aligned methodology. High-rise condo and gated community specialists.">
<meta property="og:url" content="https://watermoldfire.net/boca-raton-fl/ac-cleaning/">
<meta property="og:image" content="'.site_url().'images/logo.webp">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="og:locale" content="en_US">
';

$twitter = '
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Air Duct &amp; HVAC Cleaning in Boca Raton, FL">
<meta name="twitter:description" content="NADCA-aligned air duct, dryer vent and HVAC coil cleaning in Boca. Condo and snowbird-return specialists.">
<meta name="twitter:image" content="'.site_url().'images/logo.webp">
';

$schema_ld_json = '
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "@id": "https://watermoldfire.net/boca-raton-fl/ac-cleaning/#service",
      "name": "Air Duct & HVAC Cleaning in Boca Raton, FL",
      "serviceType": ["Air Duct Cleaning","HVAC Cleaning","Dryer Vent Cleaning"],
      "description": "NADCA ACR-aligned air duct, dryer vent and HVAC coil cleaning in Boca Raton, FL. Comprehensive duct cleaning, return and supply trunk cleaning, register cleaning, evaporator coil cleaning, blower assembly cleaning, dryer vent cleaning and post-water-loss HVAC decontamination for high-rise condos, gated country club homes, Mizner-era properties and single-family stock across Boca, Highland Beach, Delray and coastal Palm Beach County. Cleaning service only — for HVAC repair, install or refrigerant work, refer to a licensed FL CAC contractor.",
      "url": "https://watermoldfire.net/boca-raton-fl/ac-cleaning/",
      "provider": {"@id": "https://watermoldfire.net/boca-raton-fl/#localbusiness"},
      "areaServed": [
        {"@type": "City", "name": "Boca Raton"},{"@type": "City", "name": "Highland Beach"},
        {"@type": "City", "name": "Delray Beach"},{"@type": "City", "name": "Gulf Stream"},
        {"@type": "City", "name": "Boynton Beach"},{"@type": "City", "name": "Deerfield Beach"},
        {"@type": "City", "name": "Coconut Creek"},{"@type": "City", "name": "Parkland"},
        {"@type": "City", "name": "Coral Springs"},{"@type": "City", "name": "Wellington"}
      ],
      "hoursAvailable": {"@type": "OpeningHoursSpecification","dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"],"opens": "00:00","closes": "23:59"},
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Air Duct & HVAC Cleaning Services",
        "itemListElement": [
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Whole-System Air Duct Cleaning (NADCA ACR-Aligned)"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Return & Supply Trunk Cleaning"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Register & Diffuser Cleaning"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Evaporator Coil Cleaning"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Blower Assembly Cleaning"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Dryer Vent Cleaning"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Post-Water-Loss HVAC Decontamination"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Post-Smoke HVAC Decontamination"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Post-Mold-Remediation HVAC Cleaning"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Snowbird-Return HVAC System Cleaning"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "High-Rise Condo & Gated Community HVAC Cleaning"}}
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
      "@type": "BreadcrumbList","@id": "https://watermoldfire.net/boca-raton-fl/ac-cleaning/#breadcrumb",
      "itemListElement": [
        {"@type": "ListItem","position": 1,"name": "Home","item": "https://watermoldfire.net/"},
        {"@type": "ListItem","position": 2,"name": "Boca Raton, FL","item": "https://watermoldfire.net/boca-raton-fl/"},
        {"@type": "ListItem","position": 3,"name": "Air Duct & HVAC Cleaning","item": "https://watermoldfire.net/boca-raton-fl/ac-cleaning/"}
      ]
    },
    {
      "@type": "WebPage","@id": "https://watermoldfire.net/boca-raton-fl/ac-cleaning/#webpage",
      "url": "https://watermoldfire.net/boca-raton-fl/ac-cleaning/",
      "name": "Air Duct & HVAC Cleaning in Boca Raton, FL",
      "isPartOf": {"@id": "https://watermoldfire.net/#website"},
      "about": {"@id": "https://watermoldfire.net/boca-raton-fl/ac-cleaning/#service"},
      "breadcrumb": {"@id": "https://watermoldfire.net/boca-raton-fl/ac-cleaning/#breadcrumb"},
      "inLanguage": "en-US"
    },
    {
      "@type": "FAQPage","@id": "https://watermoldfire.net/boca-raton-fl/ac-cleaning/#faq",
      "mainEntity": [
        {"@type": "Question","name": "What standard do you follow for air duct cleaning?","acceptedAnswer": {"@type": "Answer","text": "We follow the NADCA ACR Standard — Assessment, Cleaning &amp; Restoration of HVAC Systems, published by the National Air Duct Cleaners Association — as the published industry consensus standard for HVAC system cleaning. The standard specifies inspection protocols, source-removal cleaning methods (rather than chemical encapsulation), HEPA filtration during cleaning, and post-cleaning verification. We perform cleaning service only; for HVAC repair, install or refrigerant work we refer to a Florida-licensed CAC (Certified Air Conditioning Contractor)."}},
        {"@type": "Question","name": "Why does HVAC cleaning matter in Boca Raton?","acceptedAnswer": {"@type": "Answer","text": "Boca\'s A/C systems run essentially every day of the year, producing constant condensate, drawing in coastal salt-air particulates, and accumulating dust, pet dander, pollen and (in snowbird-vacancy properties) mold growth on coils and in duct interiors during the May-November shoulder season when units often run improperly or at high humidity setpoints. Post-water-loss, post-fire and post-mold-remediation HVAC cleaning is required to remove residual contamination from the air-distribution system. Snowbird-return HVAC cleaning is one of our most common fall and winter service categories."}},
        {"@type": "Question","name": "Do you handle HVAC cleaning in Boca\'s high-rise condos and gated communities?","acceptedAnswer": {"@type": "Answer","text": "Yes. Boca high-rise condos along A1A and the gated country club communities (Boca West, Polo Club, Stonebridge) carry HOA contractor approval requirements, freight-elevator access coordination and (for snowbird-occupied units) seasonal scheduling. We work routinely with Boca condo boards, property managers and the HOA management companies on residential unit HVAC cleaning and (where contracted) building-wide common-system cleaning."}},
        {"@type": "Question","name": "How often should I have my air ducts cleaned?","acceptedAnswer": {"@type": "Answer","text": "The EPA does not recommend a fixed routine schedule for HVAC cleaning — instead recommending cleaning when there is visible mold growth in the system, vermin infestation, substantial accumulation of dust and debris, or after a water-loss or fire event. In practice, NADCA suggests every 3 to 7 years for typical residential systems, more frequently for properties with pets, allergies, recent renovation, or seasonal-vacancy patterns. Snowbird-return cleaning every fall is a reasonable cycle for Boca shoulder-season properties."}},
        {"@type": "Question","name": "Do you do post-water-loss or post-fire HVAC decontamination?","acceptedAnswer": {"@type": "Answer","text": "Yes. Water and fire losses contaminate HVAC systems with moisture, soot and smoke residue that will spread building-wide if the system is operated post-loss. Post-water-loss decontamination removes biofilm and mold from coils, plenums and duct interiors. Post-fire decontamination removes soot and smoke residue, often combined with active odor neutralization. We coordinate HVAC cleaning with our water damage, fire damage and mold remediation crews when those scopes are also in progress."}},
        {"@type": "Question","name": "Are you a licensed HVAC contractor?","acceptedAnswer": {"@type": "Answer","text": "We are not a licensed Florida CAC (Certified Air Conditioning Contractor) — we perform cleaning service only. For HVAC repair, install, replacement, refrigerant work, system design or any work requiring a licensed mechanical contractor, we refer to a Florida-licensed CAC. Our cleaning scope sits within the boundaries that don\'t require CAC licensure. This positioning is honest and consumer-protective — HVAC cleaning and HVAC contracting are different licensed scopes in Florida."}}
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
                Air Duct & HVAC Cleaning in Boca Raton, FL
            </h1>   
            <!-- Feature Pills -->
            <div class="feature-pills">
                <div class="feature-pill">
                    <i class="fas fa-comments"></i>
                    <span>NADCA-Aligned</span>
                </div>
                <div class="feature-pill">
                    <i class="fas fa-certificate"></i>
                    <span>IICRC-Certified Technicians</span>
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
                                <h2 id="intro-h">NADCA-Aligned Air Duct &amp; HVAC Cleaning in Boca Raton</h2>
                                <p>
                                Water Mold Fire Restoration of Boca Raton performs
                                comprehensive air duct, dryer vent and HVAC coil cleaning
                                service across the city's high-rise condo stock, gated
                                country club communities, Mizner-era Mediterranean Revival
                                properties and single-family inventory. We follow the
                                <strong>NADCA ACR Standard</strong> &mdash; Assessment,
                                Cleaning &amp; Restoration of HVAC Systems, published by the
                                National Air Duct Cleaners Association &mdash; as the
                                industry consensus standard for HVAC system cleaning. The
                                standard specifies inspection, source-removal cleaning
                                (rather than chemical encapsulation), HEPA filtration during
                                cleaning, and post-cleaning verification. We perform
                                cleaning service only; for HVAC repair, install or
                                refrigerant work, refer to a Florida-licensed CAC
                                (Certified Air Conditioning Contractor).
                                </p>
                            </section>

                            <section class="why-flbm" aria-labelledby="why-h">
                                <h2 id="why-h">Why HVAC Cleaning Matters in Boca Raton</h2>
                                <p>
                                Boca's climate and building stock put unique demands on
                                residential and commercial HVAC systems. We see the same
                                patterns repeat:
                                </p>
                                <ul class="listing">
                                    <li>
                                        <strong>Year-round operation, year-round dust load.</strong>
                                        Boca A/C systems run essentially every day of the year,
                                        drawing in coastal salt-air particulates, dust, pollen and
                                        pet dander. Filter changes catch some of it; what passes
                                        through accumulates on coils, in plenums, on blower
                                        assemblies and in supply-trunk interiors. Over time, the
                                        accumulation reduces system efficiency and degrades
                                        indoor air quality.
                                    </li>
                                    <li>
                                        <strong>Snowbird-vacancy mold colonization.</strong>
                                        Boca's seasonal-resident population means thousands of
                                        high-rise condo and gated-community units sit vacant from
                                        May through November. Unit owners often turn HVAC to high
                                        setpoints or off entirely to save on utility costs;
                                        interior humidity routinely exceeds 70-75% RH for months
                                        at a stretch; coils, plenums and duct interiors develop
                                        biofilm and mold colonies. Snowbird-return HVAC cleaning
                                        is one of our most consistent fall and early-winter
                                        service categories.
                                    </li>
                                    <li>
                                        <strong>Post-water-loss decontamination.</strong>
                                        Water damage contaminates HVAC systems with moisture and
                                        produces mold growth on coils and in plenums. Operating a
                                        contaminated system spreads mold spores building-wide. We
                                        decontaminate HVAC systems as part of water damage
                                        cleanup work.
                                    </li>
                                    <li>
                                        <strong>Post-fire and post-smoke decontamination.</strong>
                                        Fire and smoke residue penetrates HVAC systems through
                                        intake during the fire and (if HVAC is operated post-loss)
                                        spreads throughout the building. Post-fire HVAC
                                        decontamination is part of fire restoration scopes, often
                                        combined with active odor neutralization.
                                    </li>
                                    <li>
                                        <strong>Post-mold-remediation cleaning.</strong>
                                        Mold remediation work typically requires post-clearance
                                        HVAC cleaning to remove any spores that migrated through
                                        the system before containment was established or that
                                        accumulated in the air-distribution system prior to
                                        remediation.
                                    </li>
                                    <li>
                                        <strong>High-rise condo &amp; gated community
                                        coordination.</strong>
                                        Boca high-rise condos and gated communities (Boca West,
                                        Polo Club, Stonebridge) carry HOA contractor approval
                                        requirements, freight-elevator access coordination and
                                        (for snowbird-occupied units) seasonal scheduling. We
                                        work routinely with Boca condo boards and property
                                        managers.
                                    </li>
                                    <li>
                                        <strong>Dryer vent cleaning.</strong>
                                        Lint accumulation in dryer vent runs is a documented fire
                                        risk and a recurring service we provide to Boca homeowners
                                        and HOAs. Long dryer vent runs in older condo construction
                                        with shared exhaust systems carry particular exposure.
                                    </li>
                                </ul>
                            </section>

                            <section class="process" aria-labelledby="process-h">
                                <h2 id="process-h">Our HVAC Cleaning Process (NADCA ACR-Aligned)</h2>
                                <ol>
                                    <li><strong>Pre-cleaning inspection.</strong> Visual assessment of system components, identification of accessible cleaning points, photographic documentation of pre-cleaning condition.</li>
                                    <li><strong>System preparation.</strong> Power isolation, protection of furnishings and surrounding areas, HEPA negative-air containment where needed for contaminated systems.</li>
                                    <li><strong>Source-removal cleaning.</strong> Mechanical agitation (brushes, air whips, compressed-air tools) inside the duct system combined with simultaneous high-volume negative-air vacuuming with HEPA filtration. Coils, blower assemblies, drain pans and registers cleaned manually.</li>
                                    <li><strong>Verification.</strong> Post-cleaning visual inspection and documentation. For post-water-loss, post-fire or post-remediation work, air sampling and surface verification where the protocol calls for it.</li>
                                    <li><strong>Final filter replacement.</strong> Fresh high-quality filter installed at completion.</li>
                                    <li><strong>Written report.</strong> Pre/post photo documentation and scope summary for owner records or HOA / insurance documentation.</li>
                                </ol>
                            </section>

                            <section class="services" aria-labelledby="services-h">
                                <h2 id="services-h">Our Boca HVAC &amp; Duct Cleaning Services</h2>
                                <ul class="listing">
                                    <li><strong>Whole-system air duct cleaning.</strong> NADCA ACR-aligned source-removal cleaning of the complete supply and return system.</li>
                                    <li><strong>Return and supply trunk cleaning.</strong> Major trunk lines, branch ducts, plenums.</li>
                                    <li><strong>Register and diffuser cleaning.</strong> Removable surface cleaning of each register.</li>
                                    <li><strong>Evaporator coil cleaning.</strong> Manual access and cleaning of A/H coils with appropriate coil cleaners.</li>
                                    <li><strong>Blower assembly cleaning.</strong> Squirrel cage, motor housing, drain pan cleaning.</li>
                                    <li><strong>Dryer vent cleaning.</strong> Lint removal from vent runs through to exterior termination.</li>
                                    <li><strong>Post-water-loss HVAC decontamination.</strong> Mold and biofilm removal from coils and duct interiors after water damage events.</li>
                                    <li><strong>Post-smoke HVAC decontamination.</strong> Soot and smoke residue removal combined with odor neutralization.</li>
                                    <li><strong>Post-mold-remediation HVAC cleaning.</strong> Clearance HVAC cleaning after mold remediation scopes.</li>
                                    <li><strong>Snowbird-return HVAC system cleaning.</strong> Comprehensive cleaning for properties returning from May-November shoulder-season vacancy.</li>
                                </ul>
                            </section>

                            <section class="service-area" aria-labelledby="area-h">
                                <h2 id="area-h">Where We Clean HVAC Systems in Boca Raton</h2>
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
                                <h2 id="faq-h">Boca HVAC &amp; Duct Cleaning FAQs</h2>

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
                                                What standard do you follow for air duct cleaning?
                                            </button>
                                        </h3>
                                        <div id="collapse_1"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_1"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>The NADCA ACR Standard &mdash; the industry consensus standard for HVAC cleaning. Source-removal cleaning, HEPA filtration, post-cleaning verification. Cleaning service only &mdash; for HVAC repair or install, refer to a FL-licensed CAC contractor.</p>
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
                                                Why does HVAC cleaning matter in Boca Raton?
                                            </button>
                                        </h3>
                                        <div id="collapse_2"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_2"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>Year-round A/C operation, coastal salt-air load, snowbird-vacancy mold colonization, post-water-loss / post-fire / post-mold-remediation decontamination. Snowbird-return cleaning is a consistent fall category.</p>
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
                                                Do you handle HVAC cleaning in Boca's high-rise condos and gated communities?
                                            </button>
                                        </h3>
                                        <div id="collapse_3"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_3"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>Yes. We work routinely with Boca condo boards and property managers on HOA approvals, freight-elevator access, and snowbird-occupied scheduling.</p>
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
                                                How often should I have my air ducts cleaned?
                                            </button>
                                        </h3>
                                        <div id="collapse_4"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_4"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>EPA doesn't recommend a fixed schedule, but cleaning is recommended when there's visible mold, vermin, substantial dust accumulation or after a water/fire event. NADCA suggests every 3-7 years for typical residential; more frequently for snowbird-vacancy properties. Annual snowbird-return cleaning is reasonable for Boca shoulder-season units.</p>
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
                                                Do you do post-water-loss or post-fire HVAC decontamination?
                                            </button>
                                        </h3>
                                        <div id="collapse_5"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_5"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>Yes. We decontaminate HVAC systems as part of water damage, fire damage and mold remediation scopes.</p>
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
                                                Are you a licensed HVAC contractor?
                                            </button>
                                        </h3>
                                        <div id="collapse_6"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_6"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>We are not a Florida CAC contractor &mdash; we perform cleaning service only. For HVAC repair, install, replacement or refrigerant work, we refer to a FL-licensed CAC. HVAC cleaning and HVAC contracting are different licensed scopes in Florida.</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </section>

                            <section class="contact" aria-labelledby="contact-h">
                                <h2 id="contact-h">Schedule Boca HVAC &amp; Duct Cleaning</h2>
                                <address>
                                    <strong>Water Mold Fire Restoration of Boca Raton</strong><br>
                                    6020 N Federal Highway<br>
                                    Boca Raton, FL 33487<br>
                                    <a href="tel:+15614010436">561-401-0436</a> &middot;
                                    <a href="mailto:bocaraton@watermoldfire.net">bocaraton@watermoldfire.net</a><br>
                                    NADCA ACR-Aligned HVAC Cleaning
                                </address>
                                <p>
                                Snowbird-return cleaning, post-water-loss decontamination,
                                post-fire HVAC scope, or routine duct cleaning?
                                <a class="cta" href="tel:+15614010436">Call 561-401-0436</a>
                                to schedule.
                                </p>
                                <p class="back-to-hub">
                                &larr; Back to <a href="<?php echo site_url("boca-raton-fl"); ?>">all Boca Raton restoration services</a>
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