<?php
require_once __DIR__ . '/../includes/init.php';

$pagename = "fort-lauderdale-fl/mold-inspection-testing.php";

$title = "Mold Inspection & Testing in Fort Lauderdale, FL | MRSA1639";

$meta_description = "Florida-licensed mold inspection & testing in Fort Lauderdale, FL (MRSA1639). Independent air & surface sampling for real estate, insurance, IAQ & PRV. 954-800-0801.";

$meta_keywords = "mold inspection fort lauderdale, mold inspector fort lauderdale, mold assessment fort lauderdale, pre-purchase mold inspection, real estate mold inspection, mold testing fort lauderdale, mold air test, mold surface test, indoor air quality testing fort lauderdale, post-remediation verification, PRV mold";

$canonical_url = "https://watermoldfire.net/fort-lauderdale-fl/mold-inspection-testing/";

$geo_tags = '
    <meta name="geo.region" content="US-FL">
    <meta name="geo.placename" content="Fort Lauderdale">
    <meta name="geo.position" content="26.1901;-80.1755">
    <meta name="ICBM" content="26.1901, -80.1755">
';

$open_graph = '
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Water Mold Fire Restoration">
    <meta property="og:title" content="Mold Inspection & Testing in Fort Lauderdale, FL | MRSA1639">
    <meta property="og:description" content="Florida-licensed mold inspection (MRSA1639) in Fort Lauderdale. Independent air & surface sampling for real estate, insurance, IAQ and post-remediation verification.">
    <meta property="og:url" content="https://watermoldfire.net/fort-lauderdale-fl/mold-inspection-testing/">
    <meta property="og:image" content="'.site_url().'images/logo.webp">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:locale" content="en_US">
';

$twitter = '
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Mold Inspection & Testing in Fort Lauderdale, FL">
    <meta name="twitter:description" content="FL-licensed mold assessor (MRSA1639). Independent inspection, air & surface testing for real estate, insurance and IAQ.">
    <meta name="twitter:image" content="'.site_url().'images/logo.webp">
';

$schema_ld_json = '
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@graph": [
            {
                "@type": "Service",
                "@id": "https://watermoldfire.net/fort-lauderdale-fl/mold-inspection-testing/#service",
                "name": "Mold Inspection & Testing in Fort Lauderdale, FL",
                "serviceType": ["Mold Inspection","Mold Testing","Mold Assessment","Indoor Air Quality Testing","Post-Remediation Verification"],
                "description": "Florida-licensed mold inspection and testing (MRSA1639) in Fort Lauderdale, FL. Independent visual assessment, moisture mapping with thermal imaging, air sampling (spore trap), surface sampling (tape lift, swab, bulk), AIHA-accredited lab analysis and written assessment protocols for real estate transactions, insurance claims, indoor air quality concerns and post-remediation verification.",
                "url": "https://watermoldfire.net/fort-lauderdale-fl/mold-inspection-testing/",
                "provider": {
                    "@id": "https://watermoldfire.net/fort-lauderdale-fl/#localbusiness"
                },
                "areaServed": [
                    {"@type": "City", "name": "Fort Lauderdale"},
                    {"@type": "City", "name": "Wilton Manors"},
                    {"@type": "City", "name": "Oakland Park"},
                    {"@type": "City", "name": "Lauderdale-by-the-Sea"},
                    {"@type": "City", "name": "Pompano Beach"},
                    {"@type": "City", "name": "Plantation"},
                    {"@type": "City", "name": "Davie"},
                    {"@type": "City", "name": "Sunrise"},
                    {"@type": "City", "name": "Hollywood"}
                ],
                "hoursAvailable": {
                    "@type": "OpeningHoursSpecification",
                    "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"],
                    "opens": "00:00",
                    "closes": "23:59"
                },
                "hasCredential": {
                    "@type": "EducationalOccupationalCredential",
                    "name": "Florida Mold Assessor License",
                    "credentialCategory": "license",
                    "identifier": "MRSA1639",
                    "recognizedBy": {
                    "@type": "GovernmentOrganization",
                    "name": "Florida Department of Business & Professional Regulation"
                    }
                },
                "hasOfferCatalog": {
                    "@type": "OfferCatalog",
                    "name": "Mold Inspection & Testing Services",
                    "itemListElement": [
                        {"@type": "Offer","itemOffered": {"@type": "Service","name": "Visual Mold Inspection & Moisture Mapping"}},
                        {"@type": "Offer","itemOffered": {"@type": "Service","name": "Air Sampling (Spore Trap)"}},
                        {"@type": "Offer","itemOffered": {"@type": "Service","name": "Surface Sampling (Tape Lift, Swab, Bulk)"}},
                        {"@type": "Offer","itemOffered": {"@type": "Service","name": "Pre-Purchase Real Estate Mold Inspection"}},
                        {"@type": "Offer","itemOffered": {"@type": "Service","name": "Post-Water-Damage Mold Inspection"}},
                        {"@type": "Offer","itemOffered": {"@type": "Service","name": "Insurance Claim Mold Assessment"}},
                        {"@type": "Offer","itemOffered": {"@type": "Service","name": "Indoor Air Quality (IAQ) Testing"}},
                        {"@type": "Offer","itemOffered": {"@type": "Service","name": "HVAC Mold Testing"}},
                        {"@type": "Offer","itemOffered": {"@type": "Service","name": "Post-Remediation Verification (PRV)"}},
                        {"@type": "Offer","itemOffered": {"@type": "Service","name": "Written Remediation Protocol"}}
                    ]
                }
            },
            {
                "@type": "LocalBusiness",
                "@id": "https://watermoldfire.net/fort-lauderdale-fl/#localbusiness",
                "name": "Water Mold Fire Restoration of Fort Lauderdale",
                "url": "https://watermoldfire.net/fort-lauderdale-fl/",
                "telephone": "+1-954-800-0801",
                "address": {
                    "@type": "PostalAddress",
                    "streetAddress": "5400 NW 36th Ave, Suite A",
                    "addressLocality": "Fort Lauderdale",
                    "addressRegion": "FL",
                    "postalCode": "33309",
                    "addressCountry": "US"
                },
                "geo": {
                    "@type": "GeoCoordinates",
                    "latitude": 26.1901,
                    "longitude": -80.1755
                },
                "aggregateRating": {
                    "@type": "AggregateRating",
                    "ratingValue": "5.0",
                    "reviewCount": "118"
                }
            },
            {
                "@type": "BreadcrumbList",
                "@id": "https://watermoldfire.net/fort-lauderdale-fl/mold-inspection-testing/#breadcrumb",
                "itemListElement": [
                    {"@type": "ListItem","position": 1,"name": "Home","item": "https://watermoldfire.net/"},
                    {"@type": "ListItem","position": 2,"name": "Fort Lauderdale, FL","item": "https://watermoldfire.net/fort-lauderdale-fl/"},
                    {"@type": "ListItem","position": 3,"name": "Mold Inspection & Testing","item": "https://watermoldfire.net/fort-lauderdale-fl/mold-inspection-testing/"}
                ]
            },
            {
                "@type": "WebPage",
                "@id": "https://watermoldfire.net/fort-lauderdale-fl/mold-inspection-testing/#webpage",
                "url": "https://watermoldfire.net/fort-lauderdale-fl/mold-inspection-testing/",
                "name": "Mold Inspection & Testing in Fort Lauderdale, FL",
                "isPartOf": {"@id": "https://watermoldfire.net/#website"},
                "about": {"@id": "https://watermoldfire.net/fort-lauderdale-fl/mold-inspection-testing/#service"},
                "breadcrumb": {"@id": "https://watermoldfire.net/fort-lauderdale-fl/mold-inspection-testing/#breadcrumb"},
                "inLanguage": "en-US"
            },
            {
                "@type": "FAQPage",
                "@id": "https://watermoldfire.net/fort-lauderdale-fl/mold-inspection-testing/#faq",
                "mainEntity": [
                    {
                        "@type": "Question",
                        "name": "Are you a licensed mold inspector in Florida?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Yes. Water Mold Fire Restoration of Fort Lauderdale operates under Florida Mold Assessor License MRSA1639, issued by the Florida Department of Business & Professional Regulation under Chapter 468, Part XVI of the Florida Statutes. Florida is one of a small number of states that legally requires mold assessors to be individually licensed — anyone performing mold inspection or testing for compensation in Florida must hold a current MRSA license."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "What\'s the difference between a mold inspection and mold testing?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "A mold inspection is the visual and instrument-based assessment of a property — walkthrough, moisture meter readings, thermal imaging, identification of suspect growth and moisture sources. Mold testing is the laboratory analysis of physical samples we collect during the inspection — air samples (spore traps), surface samples (tape lifts, swabs) and bulk samples — to identify and quantify the species present. Most Fort Lauderdale assessments include both. Inspection alone tells us what we can see; testing tells us what\'s in the air and behind the drywall."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "Do I need a mold inspection before buying a house in Fort Lauderdale?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Strongly recommended, particularly for coastal homes east of US-1, properties built before 1990 with original A/C and plumbing systems, homes that have been vacant for any length of time, and any property where prior water damage shows up on the seller\'s disclosure or in the home inspection. Florida sellers are required to disclose known material defects, but undisclosed mold behind drywall is a common post-closing dispute. A pre-purchase MRSA-licensed assessment puts the question to bed before money changes hands."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "Why can\'t you do both the inspection and the remediation?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Florida Statute 468.8419 prohibits the same company from performing both mold assessment and mold remediation on the same project, and requires that the assessor and remediator have no shared financial interest on that job. It\'s a consumer protection rule — an assessor who is also bidding the remediation has an incentive to find more work. We hold both an MRSA license (this service) and an MRSR license (under a separate qualifying individual), but we never use them on the same project. Clients who hire us for assessment use an independent FL-licensed remediator; clients who hire us for remediation work from an independent assessor\'s protocol."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "How much does a mold inspection cost in Fort Lauderdale?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Pricing depends on the size of the property, the scope of testing and the number of lab samples submitted. A standard residential inspection with two to three air samples typically runs in the low hundreds; large properties, multi-unit condo assessments, post-remediation verifications and litigation-grade documentation cost more. We provide a written quote before any sampling begins so there are no surprises when lab fees come back."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "How long do mold test results take?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "The on-site inspection and sampling typically takes 1 to 3 hours depending on property size. Lab analysis at our AIHA-accredited partner labs runs 3 to 5 business days for standard turnaround; expedited 24- and 48-hour turnarounds are available for time-sensitive real estate closings and insurance deadlines. You receive a written assessment report with photos, moisture readings, lab data, interpretation and (where applicable) a written remediation protocol."
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
                Mold Inspection & Mold Testing in Fort Lauderdale, FL
            </h1>   
            <!-- Feature Pills -->
            <div class="feature-pills">
                <div class="feature-pill">
                    <i class="fas fa-certificate"></i>
                    <span>FL Licensed: MRSA1639</span>
                </div>
                <div class="feature-pill">
                    <i class="fas fa-comments"></i>
                    <span>Independent Assessment</span>
                </div>
                <div class="feature-pill">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>Fort Lauderdale</span>
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