<?php
require_once __DIR__ . '/../includes/init.php';

$pagename = "albuquerque-nm/mold-inspection-testing.php";

$title = "Mold Inspection &amp; Testing in Albuquerque, NM | Pre-Purchase &amp; IAQ";

$meta_description = "Albuquerque mold inspection & testing. Pre-purchase, swamp cooler attic, post-monsoon, stucco cavity & IAQ assessments. Air and surface sampling, AIHA-accredited lab. IICRC Firm. 505-312-4758.";

$meta_keywords = "mold inspection albuquerque, mold inspector albuquerque, mold assessment albuquerque, pre-purchase mold inspection, real estate mold inspection, mold testing albuquerque, mold air test, mold surface test, indoor air quality testing albuquerque, post-remediation verification, PRV mold";

$canonical_url = "https://watermoldfire.net/albuquerque-nm/mold-inspection-testing/";

$geo_tags = '
<meta name="geo.region" content="US-NM">
<meta name="geo.placename" content="Albuquerque">
<meta name="geo.position" content="35.0780;-106.6320">
<meta name="ICBM" content="35.0780, -106.6320">
';

$open_graph = '
<meta property="og:type" content="website">
<meta property="og:site_name" content="Water Mold Fire Restoration">
<meta property="og:title" content="Mold Inspection &amp; Testing in Albuquerque, NM | Pre-Purchase &amp; IAQ">
<meta property="og:description" content="Albuquerque mold inspection and testing. Pre-purchase, swamp cooler attic, post-monsoon, stucco cavity and IAQ assessments. Air and surface sampling, AIHA-accredited lab analysis. IICRC Firm.">
<meta property="og:url" content="https://watermoldfire.net/albuquerque-nm/mold-inspection-testing/">
<meta property="og:image" content="'.site_url().'images/logo.webp">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="og:locale" content="en_US">
';

$twitter = '
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Mold Inspection &amp; Testing in Albuquerque, NM">
<meta name="twitter:description" content="Pre-purchase, swamp cooler attic, post-monsoon, stucco cavity and IAQ mold assessments in ABQ. AIHA-accredited lab.">
<meta name="twitter:image" content="'.site_url().'images/logo.webp">
';

$schema_ld_json = '
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "@id": "https://watermoldfire.net/albuquerque-nm/mold-inspection-testing/#service",
      "name": "Mold Inspection & Testing in Albuquerque, NM",
      "serviceType": ["Mold Inspection","Mold Testing","Mold Assessment","Indoor Air Quality Testing","Post-Remediation Verification"],
      "description": "Mold inspection and testing in Albuquerque, NM. Visual assessment, moisture mapping with thermal imaging, air sampling (spore trap), surface sampling, AIHA-accredited lab analysis and written assessment reports for real estate transactions, swamp cooler attic assessments, post-monsoon water-loss inspections, stucco-cavity and flat-roof IAQ concerns, adobe and pueblo revival historic property assessments, insurance claims and post-remediation verification across the City, Bernalillo County and the metro. IICRC Firm Certified.",
      "url": "https://watermoldfire.net/albuquerque-nm/mold-inspection-testing/",
      "provider": {"@id": "https://watermoldfire.net/albuquerque-nm/#localbusiness"},
      "areaServed": [
        {"@type": "City", "name": "Albuquerque"},{"@type": "City", "name": "Rio Rancho"},
        {"@type": "City", "name": "Corrales"},{"@type": "City", "name": "Bernalillo"},
        {"@type": "City", "name": "Placitas"},{"@type": "City", "name": "Tijeras"},
        {"@type": "City", "name": "Cedar Crest"},{"@type": "City", "name": "Los Lunas"},
        {"@type": "City", "name": "Belen"},{"@type": "City", "name": "Edgewood"}
      ],
      "hoursAvailable": {"@type": "OpeningHoursSpecification","dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"],"opens": "00:00","closes": "23:59"},
      "hasCredential": {
        "@type": "EducationalOccupationalCredential",
        "name": "IICRC Firm Certification",
        "credentialCategory": "certification",
        "recognizedBy": {"@type": "Organization","name": "Institute of Inspection, Cleaning and Restoration Certification"}
      },
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Mold Inspection & Testing Services",
        "itemListElement": [
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Visual Mold Inspection & Moisture Mapping"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Air Sampling (Spore Trap)"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Surface Sampling (Tape Lift, Swab, Bulk)"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Pre-Purchase Real Estate Mold Inspection"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Swamp Cooler Attic Mold Assessment"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Stucco Cavity Mold Assessment"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Post-Monsoon Mold Inspection"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Post-Flat-Roof-Leak Mold Inspection"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Adobe & Pueblo Revival Property Mold Assessment"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Insurance Claim Mold Assessment"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Indoor Air Quality (IAQ) Testing"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "HVAC Mold Testing"}},
          {"@type": "Offer","itemOffered": {"@type": "Service","name": "Post-Remediation Verification (PRV)"}}
        ]
      }
    },
    {
      "@type": "LocalBusiness","@id": "https://watermoldfire.net/albuquerque-nm/#localbusiness",
      "name": "Water Mold Fire Restoration of Albuquerque",
      "url": "https://watermoldfire.net/albuquerque-nm/",
      "telephone": "+1-505-312-4758","email": "albuquerque@watermoldfire.net",
      "address": {"@type": "PostalAddress","streetAddress": "1925 Coal Place SE","addressLocality": "Albuquerque","addressRegion": "NM","postalCode": "87106","addressCountry": "US"},
      "geo": {"@type": "GeoCoordinates","latitude": 35.0780,"longitude": -106.6320},
      "aggregateRating": {"@type": "AggregateRating","ratingValue": "5.0","reviewCount": "118"}
    },
    {
      "@type": "BreadcrumbList","@id": "https://watermoldfire.net/albuquerque-nm/mold-inspection-testing/#breadcrumb",
      "itemListElement": [
        {"@type": "ListItem","position": 1,"name": "Home","item": "https://watermoldfire.net/"},
        {"@type": "ListItem","position": 2,"name": "Albuquerque, NM","item": "https://watermoldfire.net/albuquerque-nm/"},
        {"@type": "ListItem","position": 3,"name": "Mold Inspection & Testing","item": "https://watermoldfire.net/albuquerque-nm/mold-inspection-testing/"}
      ]
    },
    {
      "@type": "WebPage","@id": "https://watermoldfire.net/albuquerque-nm/mold-inspection-testing/#webpage",
      "url": "https://watermoldfire.net/albuquerque-nm/mold-inspection-testing/",
      "name": "Mold Inspection & Testing in Albuquerque, NM",
      "isPartOf": {"@id": "https://watermoldfire.net/#website"},
      "about": {"@id": "https://watermoldfire.net/albuquerque-nm/mold-inspection-testing/#service"},
      "breadcrumb": {"@id": "https://watermoldfire.net/albuquerque-nm/mold-inspection-testing/#breadcrumb"},
      "inLanguage": "en-US"
    },
    {
      "@type": "FAQPage","@id": "https://watermoldfire.net/albuquerque-nm/mold-inspection-testing/#faq",
      "mainEntity": [
        {"@type": "Question","name": "Does New Mexico license mold inspectors?","acceptedAnswer": {"@type": "Answer","text": "No. New Mexico does not require state licensure for mold assessment or remediation, unlike Florida, Texas, New York and a handful of other states. The New Mexico Environment Department publishes consumer guidance, but no individual or company license is required to perform the work. In the absence of state licensing, the meaningful credentials for Albuquerque property owners to evaluate are: IICRC Firm certification (which we hold), adherence to the published ASTM and IICRC assessment standards, use of AIHA-accredited laboratories for sample analysis, and the assessor\'s documentation discipline on the written report."}},
        {"@type": "Question","name": "Do I need a mold inspection before buying a home in Albuquerque?","acceptedAnswer": {"@type": "Answer","text": "Strongly recommended, particularly for any ABQ home with a rooftop swamp cooler, any property with a flat roof, any pre-WWII Huning Highland or Nob Hill home with stone-foundation basement, any adobe or pueblo revival property in the North Valley or Old Town, and any property in NFIP-mapped flood zones along the Bosque or near major arroyos. Standard Albuquerque home inspections do not typically include air sampling — moisture meters and visual checks are the most you usually get. Swamp cooler attic moisture is invisible from inside the house; stucco-cavity moisture sits behind exterior walls for weeks before producing visible interior damage; flat-roof leaks show up months later. A pre-purchase mold assessment with air sampling tells you what you\'re actually buying."}},
        {"@type": "Question","name": "What\'s the difference between a mold inspection and mold testing?","acceptedAnswer": {"@type": "Answer","text": "A mold inspection is the visual and instrument-based assessment of a property — walkthrough, moisture meter readings, thermal imaging, identification of suspect growth and moisture sources. Mold testing is the laboratory analysis of physical samples collected during the inspection — air samples (spore traps), surface samples (tape lifts, swabs) and bulk samples — to identify and quantify the species present. Most Albuquerque assessments include both."}},
        {"@type": "Question","name": "Why is independent post-remediation verification recommended in New Mexico?","acceptedAnswer": {"@type": "Answer","text": "The EPA, IICRC and ASTM all recommend that mold assessment and remediation be performed by independent parties on significant jobs, even though New Mexico does not legally require it (Florida does, under Statute 468.8419). The reason is straightforward: an assessor who is also bidding the remediation has a financial incentive to oversize findings, and a remediator who is also performing the clearance has an incentive to undersize them. We perform our own inspection and testing service for smaller jobs and recommend independent third-party post-remediation verification on insurance-driven and large-scope work to remove that conflict from the clearance decision."}},
        {"@type": "Question","name": "Should I have a swamp cooler attic assessment in Albuquerque?","acceptedAnswer": {"@type": "Answer","text": "Yes — especially before buying a home with a rooftop swamp cooler, and after any season in which the cooler was known to leak or run improperly. Swamp coolers sit on roofs and depend on a water supply line that runs through the ceiling into the unit above. Leaks deposit water in attic insulation and on roof decking where the homeowner can\'t see or hear the moisture. Mold colonization on attic insulation, framing and the underside of the roof deck is common in homes where swamp cooler maintenance has been inconsistent. An attic-focused mold assessment with air sampling and visual inspection of the swamp cooler installation tells you what\'s actually in the attic before you close on the property or before you commit to a costly attic conversion."}},
        {"@type": "Question","name": "Should I have a mold assessment after a monsoon-season water event?","acceptedAnswer": {"@type": "Answer","text": "Yes, if the water sat for more than 24-48 hours before mitigation began, or if mitigation was performed under time pressure during a citywide monsoon event. Monsoon flash flooding produces Category 3 contaminated surface water that seeds mold colonization quickly; even prompt extraction can leave residual moisture behind drywall, in framing cavities and in HVAC systems. An independent assessment with air sampling confirms whether the drying actually succeeded or whether hidden mold has colonized."}},
        {"@type": "Question","name": "Do you assess mold in adobe and pueblo revival homes?","acceptedAnswer": {"@type": "Answer","text": "Yes. Adobe, pueblo revival, territorial and Spanish colonial revival homes — particularly in the North Valley, Country Club, Old Town, Corrales and the historic neighborhoods — have moisture and mold considerations the standard playbook doesn\'t cover. Solid adobe walls absorb and release moisture along long time constants; vigas and latillas hold moisture along grain patterns; flat-roof connections to thick exterior walls produce complex moisture migration paths. Assessment in these properties requires moisture mapping and sampling protocols adapted to the construction, and documentation that supports any anticipated City of Albuquerque Landmarks Commission or historic-district review."}},
        {"@type": "Question","name": "How much does a mold inspection cost in Albuquerque?","acceptedAnswer": {"@type": "Answer","text": "Pricing depends on the size of the property, the scope of testing and number of lab samples submitted. A standard single-family home or condo inspection with two to three air samples typically runs in the low hundreds; full attic-and-stucco-cavity assessments for older ABQ stock, larger properties and litigation-grade documentation cost more. Written quote before any sampling."}},
        {"@type": "Question","name": "How long do mold test results take?","acceptedAnswer": {"@type": "Answer","text": "On-site inspection and sampling typically 1 to 3 hours. AIHA-accredited lab analysis 3 to 5 business days standard; expedited 24- and 48-hour turnarounds available for time-sensitive closings and insurance deadlines."}}
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
                Mold Inspection & Mold Testing in Albuquerque, NM
            </h1>   
            <!-- Feature Pills -->
            <div class="feature-pills">
                <div class="feature-pill">
                    <i class="fas fa-certificate"></i>
                    <span>IICRC Firm Certified</span>
                </div>
                <div class="feature-pill">
                    <i class="fas fa-comments"></i>
                    <span>Independent Assessment</span>
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
                                <h2 id="intro-h">Mold Inspection &amp; Testing in Albuquerque</h2>
                                <p>
                                New Mexico does not license mold assessment professionals at
                                the state level &mdash; unlike Florida (which licenses both
                                assessors and remediators under Chapter 468 of the Florida
                                Statutes), Texas, New York and a handful of other states.
                                That means Albuquerque property owners evaluating an
                                assessment quote have to weigh credentials that actually
                                substantiate the work: industry certification, use of
                                AIHA-accredited laboratories for sample analysis, and
                                adherence to published assessment standards (ASTM and IICRC).
                                Water Mold Fire Restoration of Albuquerque is <strong>IICRC
                                Firm Certified</strong>, performs assessments to ASTM and
                                IICRC documentation standards, and uses AIHA-accredited labs
                                for all sample analysis. We perform inspections and testing
                                for real estate transactions, swamp cooler attic
                                assessments, post-monsoon water-loss inspections,
                                stucco-cavity and flat-roof IAQ concerns, adobe and pueblo
                                revival historic property assessments, insurance claims and
                                post-remediation verification across the City of Albuquerque,
                                Bernalillo County, Rio Rancho and the surrounding metro.
                                </p>
                            </section>

                            <section class="why-flbm" aria-labelledby="why-h">
                                <h2 id="why-h">When Albuquerque Properties Need a Mold Inspection</h2>
                                <p>
                                In a market where rooftop swamp coolers are nearly universal,
                                flat roofs are an architectural signature, stucco-and-frame
                                construction is dominant, and the high-desert "dry climate"
                                assumption regularly causes owners to underestimate moisture
                                problems, "I want to know what's actually in this property"
                                is one of the most reasonable things an Albuquerque property
                                owner or buyer can ask. The most common scenarios:
                                </p>
                                <ul class="listing">
                                    <li>
                                        <strong>Pre-purchase real estate inspections.</strong>
                                        Albuquerque's housing inventory &mdash; adobe and pueblo
                                        revival homes in the North Valley, Country Club and Old
                                        Town, stucco-and-frame ranches across the Northeast Heights
                                        and Foothills, mid-century modern in Ridgecrest and Nob
                                        Hill, Victorian and bungalow stock in the Huning Highland
                                        Historic District, contemporary construction in Mesa del
                                        Sol and the Westside, mountainfront custom homes in Sandia
                                        Heights and Four Hills, and East Mountain properties out
                                        to Tijeras and Sandia Park &mdash; carries hidden-mold
                                        profiles that standard home inspections will not surface.
                                        Most ABQ home inspectors do not perform air sampling and
                                        are limited to visual checks and moisture meter readings.
                                        An independent mold assessment tells you what's actually
                                        in the attic, in the stucco cavities, in the swamp cooler
                                        ductwork and in the HVAC system before you close.
                                    </li>
                                    <li>
                                        <strong>Swamp cooler attic assessments.</strong>
                                        Rooftop swamp coolers leak in ways the homeowner can't see
                                        or hear from inside the house, depositing water in attic
                                        insulation and on roof decking until mold colonizes. An
                                        attic-focused assessment with air sampling and visual
                                        inspection of the swamp cooler installation is one of our
                                        most valuable services for ABQ buyers, and for owners who
                                        suspect their swamp cooler ran improperly through the past
                                        season. Pre-attic-conversion assessments also catch
                                        existing mold problems before owners commit to costly
                                        finish work in a space that turns out to have moisture
                                        issues.
                                    </li>
                                    <li>
                                        <strong>Stucco-cavity assessments.</strong>
                                        Wind-driven monsoon rain pushes water through hairline
                                        stucco cracks at corners, window heads, door frames and
                                        parapet caps. The water sits in wall cavities behind the
                                        stucco and seeds mold before producing visible interior
                                        damage. Properties with original stucco systems from the
                                        1950s through the 1980s, and properties with visible
                                        stucco cracking near windows and parapets, benefit from
                                        moisture mapping and targeted air sampling to determine
                                        whether mold has colonized.
                                    </li>
                                    <li>
                                        <strong>Post-monsoon assessments.</strong>
                                        Monsoon flash flooding produces Category 3 surface water
                                        that seeds mold quickly. Even with prompt extraction,
                                        residual moisture behind drywall, in framing cavities and
                                        in HVAC systems can produce hidden mold weeks after the
                                        original water event. Post-monsoon verification
                                        assessments are a recurring late-summer and fall service
                                        category for us.
                                    </li>
                                    <li>
                                        <strong>Post-flat-roof-leak assessments.</strong>
                                        Flat-roof drainage failures during monsoon storms produce
                                        attic and ceiling-cavity mold that often isn't visible
                                        from inside the house for weeks or months. Pre-roof-repair
                                        and pre-sale assessments confirm the extent of any
                                        existing damage.
                                    </li>
                                    <li>
                                        <strong>Adobe &amp; pueblo revival assessments.</strong>
                                        Solid adobe construction, pueblo revival, territorial style
                                        and Spanish colonial revival homes behave differently from
                                        frame-and-stucco modern stock. North Valley, Country Club,
                                        Old Town, Corrales and Placitas adobe properties require
                                        moisture mapping and sampling protocols adapted to the
                                        construction, plus documentation that supports any
                                        anticipated landmarks-commission review for
                                        envelope-affecting remediation work.
                                    </li>
                                    <li>
                                        <strong>Indoor air quality (IAQ) testing.</strong>
                                        Unexplained respiratory symptoms, persistent musty smell,
                                        new-occupant complaints in a rental, or due-diligence
                                        baseline testing for a buyer with allergy or asthma
                                        concerns. We perform IAQ-focused sampling protocols beyond
                                        the standard mold scope when warranted.
                                    </li>
                                    <li>
                                        <strong>Insurance claim documentation.</strong>
                                        New Mexico insurance carriers increasingly require
                                        independent mold assessment documentation on water claims
                                        of significant size before closing them out. Our reports
                                        are written to meet that standard.
                                    </li>
                                    <li>
                                        <strong>Post-Remediation Verification (PRV).</strong>
                                        Independent verification that a completed mold remediation
                                        actually worked. EPA, IICRC and ASTM all recommend PRV by
                                        an independent third party on significant jobs.
                                    </li>
                                </ul>
                            </section>

                            <section class="licensing" aria-labelledby="lic-h">
                                <h2 id="lic-h">New Mexico Mold Regulation &amp; Why Independence Still Matters</h2>
                                <p>
                                New Mexico does not license mold assessment or mold
                                remediation contractors. The New Mexico Environment
                                Department publishes consumer guidance documents on indoor
                                mold, but no individual or company license is required to
                                perform either service. This is different from Florida,
                                where Chapter 468, Part XVI of the Florida Statutes requires
                                separate Mold Assessor and Mold Remediator licenses and
                                prohibits the same company from doing both on the same
                                project.
                                </p>
                                <p>
                                New Mexico doesn't impose that separation by law, but the
                                published industry consensus &mdash; the EPA's <em>Mold
                                Remediation in Schools and Commercial Buildings</em>
                                guidance, the IICRC industry standards for mold remediation
                                and assessment, and the ASTM standards for moisture and
                                mold assessment &mdash; all recommend that mold assessment
                                and mold remediation be performed by independent parties on
                                significant jobs. The reasoning is the same in New Mexico as
                                it is in Florida: an assessor who is also bidding the
                                remediation contract has an incentive to oversize the
                                findings, and a remediator performing its own clearance has
                                an incentive to undersize them.
                                </p>
                                <p>
                                We follow that best practice voluntarily. We perform our own
                                <a href="<?php echo site_url("albuquerque-nm/mold-remediation/"); ?>">mold
                                remediation</a> service in New Mexico (a legal scope here),
                                and we perform assessment and testing on the same property
                                when warranted. For insurance-driven and large-scope jobs,
                                we recommend independent third-party post-remediation
                                verification &mdash; and we can coordinate with independent
                                indoor air quality assessors when that separation matters
                                to the claim or to the parties involved.
                                </p>
                            </section>

                            <section class="process" aria-labelledby="process-h">
                                <h2 id="process-h">Our Mold Inspection &amp; Testing Process</h2>
                                <ol>
                                    <li><strong>Pre-inspection consult.</strong> Reason for assessment, property history, recent water events (swamp cooler leak, monsoon flood, flat-roof failure, plumbing burst, stucco intrusion), occupant health concerns.</li>
                                    <li><strong>On-site visual inspection.</strong> Systematic walkthrough with photo documentation. Attic spaces (especially around swamp cooler penetrations), kitchen and bathroom plumbing chases, basement or crawlspace where present, stucco-cavity exterior, HVAC closets and supply runs.</li>
                                    <li><strong>Moisture mapping &amp; thermal imaging.</strong> Calibrated meters and thermographic camera locate hidden moisture in walls, ceilings, floor cavities, attic decking, stucco cavities and around plumbing penetrations.</li>
                                    <li><strong>Air sampling (spore trap).</strong> Outdoor baseline + indoor samples for lab comparison.</li>
                                    <li><strong>Surface sampling.</strong> Tape lifts, swabs, bulk samples for direct identification.</li>
                                    <li><strong>AIHA-accredited lab analysis.</strong> Standard 3-5 business days; rush 24-48 hours.</li>
                                    <li><strong>Written assessment report.</strong> Photos, moisture mapping, thermal images, lab results, interpretation, and (where mold is confirmed) a recommended remediation scope.</li>
                                </ol>
                            </section>

                            <section class="types" aria-labelledby="types-h">
                                <h2 id="types-h">Types of Testing We Perform</h2>
                                <ul class="listing">
                                    <li><strong>Air sampling (spore trap).</strong> Indoor vs. outdoor airborne spore comparison.</li>
                                    <li><strong>Surface sampling.</strong> Species ID via tape lift, swab, settled dust.</li>
                                    <li><strong>Bulk sampling.</strong> Direct examination of suspect materials.</li>
                                    <li><strong>HVAC sampling.</strong> Air handler and duct sampling for system contamination — particularly important in ABQ homes that have transitioned from swamp cooler to refrigerated air.</li>
                                    <li><strong>Attic sampling.</strong> Swamp-cooler-leak and flat-roof-failure attic mold detection.</li>
                                    <li><strong>Stucco-cavity sampling.</strong> Wall-cavity moisture and mold assessment behind stucco systems.</li>
                                    <li><strong>Crawlspace sampling.</strong> Mid-century ABQ stock with raised-foundation crawlspaces.</li>
                                    <li><strong>Indoor Air Quality (IAQ) testing.</strong> Broader sampling for occupant health concerns.</li>
                                    <li><strong>Post-Remediation Verification.</strong> Independent verification against the original remediation scope.</li>
                                </ul>
                            </section>

                            <section class="service-area" aria-labelledby="area-h">
                                <h2 id="area-h">Where We Inspect &amp; Test in Albuquerque &amp; the Metro</h2>
                                <p>
                                The City of Albuquerque &mdash; Huning Highland, Downtown,
                                EDo, Old Town, Sawmill District, Wells Park, Nob Hill,
                                University Heights, Ridgecrest, Uptown, the Heights,
                                Foothills, Far Northeast Heights, Glenwood Hills, Tanoan,
                                Sandia Heights, Four Hills, Taylor Ranch, Paradise Hills,
                                Volcano Cliffs, Westgate Heights, Ladera, Mesa Verde, Country
                                Club, North Valley, Los Ranchos de Albuquerque, South Valley,
                                International District, Mesa del Sol. <strong>Sandoval
                                County:</strong> Rio Rancho, Corrales, Bernalillo, Placitas.
                                <strong>East Mountains:</strong> Tijeras, Sandia Park, Cedar
                                Crest, San Antonito, Edgewood, Moriarty. <strong>Valencia
                                County:</strong> Los Lunas, Belen, Bosque Farms, Peralta. Real
                                estate closings and insurance deadlines often run tight
                                &mdash; we schedule rush appointments where the calendar
                                allows.
                                </p>
                            </section>

                            <section class="faq bg-light mb-4" aria-labelledby="faq-h">
                                <h2 id="faq-h">Albuquerque Mold Inspection &amp; Testing FAQs</h2>

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
                                                Does New Mexico license mold inspectors?
                                            </button>
                                        </h3>
                                        <div id="collapse_1"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_1"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>No. New Mexico does not require state licensure for mold assessment or remediation. The meaningful credentials are <strong>IICRC Firm certification</strong>, adherence to ASTM and IICRC assessment standards, and use of AIHA-accredited laboratories.</p>
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
                                                Do I need a mold inspection before buying a home in Albuquerque?
                                            </button>
                                        </h3>
                                        <div id="collapse_2"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_2"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>Strongly recommended for any property with a rooftop swamp cooler, any flat-roof home, any pre-WWII Huning Highland or Nob Hill home, any adobe or pueblo revival property, and any property in NFIP-mapped flood zones. Standard ABQ home inspections typically do not include air sampling.</p>
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
                                                What's the difference between a mold inspection and mold testing?
                                            </button>
                                        </h3>
                                        <div id="collapse_3"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_3"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>Inspection is visual/instrument-based; testing is lab analysis of samples collected during inspection. Most Albuquerque assessments include both.</p>
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
                                                Why is independent post-remediation verification recommended in New Mexico?
                                            </button>
                                        </h3>
                                        <div id="collapse_4"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_4"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>EPA, IICRC and ASTM all recommend independent third-party PRV on significant jobs &mdash; even though NM doesn't require it (Florida does). Conflict-of-interest removal: an assessor bidding the remediation has incentive to oversize; a remediator self-clearing has incentive to undersize.</p>
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
                                                Should I have a swamp cooler attic assessment in Albuquerque?
                                            </button>
                                        </h3>
                                        <div id="collapse_5"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_5"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>Yes, especially before buying a home with a rooftop swamp cooler, and after any season in which the cooler was known to leak. Attic-focused mold assessment with air sampling tells you what's actually above the ceiling.</p>
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
                                                Should I have a mold assessment after a monsoon-season water event?
                                            </button>
                                        </h3>
                                        <div id="collapse_6"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_6"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>Yes, if water sat more than 24-48 hours before mitigation, or if mitigation was rushed during a citywide event. Monsoon flash flooding produces Category 3 water that seeds mold quickly.</p>
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
                                                Do you assess mold in adobe and pueblo revival homes?
                                            </button>
                                        </h3>
                                        <div id="collapse_7"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_7"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>Yes. Adobe, pueblo revival, territorial and Spanish colonial revival construction requires moisture mapping and sampling protocols adapted to the construction. North Valley, Country Club, Old Town, Corrales and Placitas properties.</p>
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
                                                How much does a mold inspection cost in Albuquerque?
                                            </button>
                                        </h3>
                                        <div id="collapse_8"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_8"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>Standard single-family / condo inspection with 2-3 air samples runs low hundreds; larger properties and building-wide scopes cost more. Written quote before sampling.</p>
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
                                                How long do mold test results take?
                                            </button>
                                        </h3>
                                        <div id="collapse_9"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading_9"
                                            data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>On-site 1-3 hours. Lab analysis 3-5 business days standard, 24-48 hours rush available.</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </section>

                            <section class="contact" aria-labelledby="contact-h">
                                <h2 id="contact-h">Schedule an Albuquerque Mold Inspection</h2>
                                <address>
                                    <strong>Water Mold Fire Restoration of Albuquerque</strong><br>
                                    1925 Coal Place SE<br>
                                    Albuquerque, NM 87106<br>
                                    <a href="tel:+15053124758">505-312-4758</a> &middot;
                                    <a href="mailto:albuquerque@watermoldfire.net">albuquerque@watermoldfire.net</a><br>
                                    IICRC Firm Certified
                                </address>
                                <p>
                                Real estate closing, swamp cooler attic assessment,
                                post-monsoon verification, stucco-cavity concern, or
                                adobe-property pre-purchase evaluation?
                                <a class="cta" href="tel:+15053124758">Call 505-312-4758</a>
                                to schedule.
                                </p>
                                <p class="back-to-hub">
                                &larr; Back to <a href="<?php echo site_url("albuquerque-nm/"); ?>">all Albuquerque restoration services</a>
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