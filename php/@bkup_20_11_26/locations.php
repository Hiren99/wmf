<?php
require_once __DIR__ . '/includes/init.php';

$pagename = "locations.php";

$title = "Our Locations at Water Mold Fire Restoration";

$meta_description = 'Water Mold Fire Restoration offers help with Water Damage, Mold Removal, and Fire Restoration problems throughout USA. Find our Locations and contact numbes here. For Emergency assistance call on 800-905-0277'; 

$meta_keywords = "water damage restoration, water damage experts throughout USA, mold removal, fire damage restoration, water damage help.";

$is_body_html_close_same_page = true;

require_once __DIR__ . '/includes/header.php';

$locations_list = [
    [
        'title' => 'Water Mold Fire Restoration of Albuquerque',
        'description' => 'WMF offers all of Albuquerque help with Water Damage, Mold Removal, and Fire Restoration problems. Give us a call with any questions or for emergency assistance at 505-312-4758.',
        'phone' => '505-312-4758',
        'href'  => site_url('albuquerque-nm/'),
    ],

    [
        'title' => 'Water Mold Fire Restoration of Atlanta',
        'description' => 'WMF offers all of Atlanta help with Water Damage, Mold Removal, and Fire Restoration problems. Give us a call with any questions or for emergency assistance at 678-373-4654.',
        'phone' => '678-373-4654',
        'href'  => site_url('atlanta-ga/'),
    ],

    [
        'title' => 'Water Mold Fire Restoration of Austin',
        'description' => 'WMF offers all of Austin help with Water Damage, Mold Removal, and Fire Restoration problems. Give us a call with any questions or for emergency assistance at 512-540-5768.',
        'phone' => '512-540-5768',
        'href'  => site_url('austin-tx/'),
    ],

    [
        'title' => 'Water Mold Fire Restoration of Baltimore',
        'description' => 'WMF offers all of Baltimore help with Water Damage, Mold Removal, and Fire Restoration problems. Give us a call with any questions or for emergency assistance at 443-839-0449.',
        'phone' => '443-839-0449',
        'href'  => site_url('baltimore-md/'),
    ],

    [
        'title' => 'Water Mold Fire Restoration of Boca Raton',
        'description' => 'WMF offers all of Boca Raton help with Water Damage, Mold Removal, and Fire Restoration problems. Give us a call with any questions or for emergency assistance at 561-401-0436.',
        'phone' => '561-401-0436',
        'href'  => site_url('boca-raton-fl/'),
    ],

    [
        'title' => 'Water Mold Fire Restoration of Boston',
        'description' => 'WMF offers all of Boston help with Water Damage, Mold Removal, and Fire Restoration problems. Give us a call with any questions or for emergency assistance at 617-701-7868.',
        'phone' => '617-701-7868',
        'href'  => site_url('boston-ma/'),
    ],

    [
        'title' => 'Water Mold Fire Restoration of Chicago',
        'description' => 'WMF offers all of Chicago help with Water Damage, Mold Removal, and Fire Restoration problems. Give us a call with any questions or for emergency assistance at 312-574-3814.',
        'phone' => '312-574-3814',
        'href'  => site_url('chicago-il/'),
    ],

    [
        'title' => 'Water Mold Fire Restoration of Charleston',
        'description' => 'WMF offers all of Charleston help with Water Damage, Mold Removal, and Fire Restoration problems. Give us a call with any questions or for emergency assistance at 843-654-0070.',
        'phone' => '843-654-0070',
        'href'  => site_url('charleston-sc/'),
    ],

    [
        'title' => 'Water Mold Fire Restoration of Dallas',
        'description' => 'WMF offers all of Dallas help with Water Damage, Mold Removal, and Fire Restoration problems. Give us a call with any questions or for emergency assistance at 972-559-4244.',
        'phone' => '972-559-4244',
        'href'  => site_url('dallas-tx/'),
    ],

    [
        'title' => 'Water Mold Fire Restoration of Fort Lauderdale',
        'description' => 'WMF offers all of Fort Lauderdale help with Water Damage, Mold Removal, and Fire Restoration problems. Give us a call with any questions or for emergency assistance at 954-800-0801.',
        'phone' => '954-800-0801',
        'href'  => site_url('fort-lauderdale-fl/'),
    ],

    [
        'title' => 'Water Mold Fire Restoration of Fayetteville Arkansas',
        'description' => 'WMF offers all of Fayetteville Arkansas help with Water Damage, Mold Removal, and Fire Restoration problems. Give us a call with any questions or for emergency assistance at 479-333-2252.',
        'phone' => '479-333-2252',
        'href'  => site_url('fayetteville-ar/'),
    ],

    [
        'title' => 'Water Mold Fire Restoration of Gulfport',
        'description' => 'WMF offers all of Gulfport help with Water Damage, Mold Removal, and Fire Restoration problems. Give us a call with any questions or for emergency assistance at 985-251-0881.',
        'phone' => '985-251-0881',
        'href'  => site_url('gulfport-ms/'),
    ],

    [
        'title' => 'Water Mold Fire Restoration of Honolulu',
        'description' => 'WMF offers all of Honolulu help with Water Damage, Mold Removal, and Fire Restoration problems. Give us a call with any questions or for emergency assistance at 808-745-1481.',
        'phone' => '808-745-1481',
        'href'  => site_url('honolulu-hi/'),
    ],

    [
        'title' => 'Water Mold Fire Restoration of Houston',
        'description' => 'WMF offers all of Houston help with Water Damage, Mold Removal, and Fire Restoration problems. Give us a call with any questions or for emergency assistance at 713-496-2066.',
        'phone' => '713-496-2066',
        'href'  => site_url('houston-tx/'),
    ],

    [
        'title' => 'Water Mold Fire Restoration of Indianapolis',
        'description' => 'WMF offers all of Indianapolis help with Water Damage, Mold Removal, and Fire Restoration problems. Give us a call with any questions or for emergency assistance at 317-495-6514.',
        'phone' => '317-495-6514',
        'href'  => site_url('indianapolis-in/'),
    ],

    [
        'title' => 'Water Mold Fire Restoration of Jersey City',
        'description' => 'WMF offers all of Jersey City help with Water Damage, Mold Removal, and Fire Restoration problems. Give us a call with any questions or for emergency assistance at 201-528-3997.',
        'phone' => '201-528-3997',
        'href'  => site_url('jersey-city-nj/'),
    ],

    [
        'title' => 'Water Mold Fire Restoration of Jacksonville',
        'description' => 'WMF offers all of Jacksonville help with Water Damage, Mold Removal, and Fire Restoration problems. Give us a call with any questions or for emergency assistance at 904-839-0449.',
        'phone' => '904-839-0449',
        'href'  => site_url('jacksonville-fl/'),
    ],

    [
        'title' => 'Water Mold Fire Restoration of Louisville',
        'description' => 'WMF offers all of Louisville help with Water Damage, Mold Removal, and Fire Restoration problems. Give us a call with any questions or for emergency assistance at 502-233-7827.',
        'phone' => '502-233-7827',
        'href'  => site_url('louisville-ky/'),
    ],

    [
        'title' => 'Water Mold Fire Restoration of Long Island',
        'description' => 'WMF offers all of Long Island help with Water Damage, Mold Removal, and Fire Restoration problems. Give us a call with any questions or for emergency assistance at 917-300-1113.',
        'phone' => '917-300-1113',
        'href'  => site_url('long-island-ny/'),
    ],

    [
        'title' => 'Water Mold Fire Restoration of Los Angeles',
        'description' => 'WMF offers all of Los Angeles help with Water Damage, Mold Removal, and Fire Restoration problems. Give us a call with any questions or for emergency assistance at 323-999-2063.',
        'phone' => '323-999-2063',
        'href'  => site_url('los-angeles-ca/'),
    ],

    [
        'title' => 'Water Mold Fire Restoration of Minneapolis',
        'description' => 'WMF offers all of Minneapolis help with Water Damage, Mold Removal, and Fire Restoration problems. Give us a call with any questions or for emergency assistance at 651-395-7036.',
        'phone' => '651-395-7036',
        'href'  => site_url('minneapolis-mn/'),
    ],

    [
        'title' => 'Water Mold Fire Restoration of Miami',
        'description' => 'WMF offers all of Miami help with Water Damage, Mold Removal, and Fire Restoration problems. Give us a call with any questions or for emergency assistance at 305-999-5144.',
        'phone' => '305-999-5144',
        'href'  => site_url('miami-fl/'),
    ],

    [
        'title' => 'Water Mold Fire Restoration of Myrtle Beach',
        'description' => 'WMF offers all of Myrtle Beach help with Water Damage, Mold Removal, and Fire Restoration problems. Give us a call with any questions or for emergency assistance at 843-305-7391.',
        'phone' => '843-305-7391',
        'href'  => site_url('myrtle-beach-sc/'),
    ],

    [
        'title' => 'Water Mold Fire Restoration of Nashville',
        'description' => 'WMF offers all of Nashville help with Water Damage, Mold Removal, and Fire Restoration problems. Give us a call with any questions or for emergency assistance at 615-200-6875.',
        'phone' => '615-200-6875',
        'href'  => site_url('nashville-tn/'),
    ],

    [
        'title' => 'Water Mold Fire Restoration of New York',
        'description' => 'WMF offers all of New York help with Water Damage, Mold Removal, and Fire Restoration problems. Give us a call with any questions or for emergency assistance at 212-257-2169.',
        'phone' => '212-257-2169',
        'href'  => site_url('new-york-ny/'),
    ],

    [
        'title' => 'Water Mold Fire Restoration of Orlando',
        'description' => 'WMF offers all of Orlando help with Water Damage, Mold Removal, and Fire Restoration problems. Give us a call with any questions or for emergency assistance at 321-236-6180.',
        'phone' => '321-236-6180',
        'href'  => site_url('orlando-fl/'),
    ],

    [
        'title' => 'Water Mold Fire Restoration of Providence',
        'description' => 'WMF offers all of Providence help with Water Damage, Mold Removal, and Fire Restoration problems. Give us a call with any questions or for emergency assistance at 401-400-0034.',
        'phone' => '401-400-0034',
        'href'  => site_url('providence-ri/'),
    ],

    [
        'title' => 'Water Mold Fire Restoration of Pembroke Pines',
        'description' => 'WMF offers all of Pembroke Pines help with Water Damage, Mold Removal, and Fire Restoration problems. Give us a call with any questions or for emergency assistance at 305-999-5161.',
        'phone' => '305-999-5161',
        'href'  => site_url('pembroke-pines-fl/'),
    ],

    [
        'title' => 'Water Mold Fire Restoration of Phoenix',
        'description' => 'WMF offers all of Phoenix help with Water Damage, Mold Removal, and Fire Restoration problems. Give us a call with any questions or for emergency assistance at 623-201-3386.',
        'phone' => '623-201-3386',
        'href'  => site_url('phoenix-az/'),
    ],

    [
        'title' => 'Water Mold Fire Restoration of Philadelphia',
        'description' => 'WMF offers all of Philadelphia help with Water Damage, Mold Removal, and Fire Restoration problems. Give us a call with any questions or for emergency assistance at 215-645-2960.',
        'phone' => '215-645-2960',
        'href'  => site_url('philadelphia-pa/'),
    ],

    [
        'title' => 'Water Mold Fire Restoration of Raleigh',
        'description' => 'WMF offers all of Raleigh help with Water Damage, Mold Removal, and Fire Restoration problems. Give us a call with any questions or for emergency assistance at 919-296-5743.',
        'phone' => '919-296-5743',
        'href'  => site_url('raleigh-nc/'),
    ],

    [
        'title' => 'Water Mold Fire Restoration of St. Louis',
        'description' => 'WMF offers all of St. Louis help with Water Damage, Mold Removal, and Fire Restoration problems. Give us a call with any questions or for emergency assistance at 314-282-4140.',
        'phone' => '314-282-4140',
        'href'  => site_url('st-louis-mo/'),
    ],

    [
        'title' => 'Water Mold Fire Restoration of San Jose',
        'description' => 'WMF offers all of San Jose help with Water Damage, Mold Removal, and Fire Restoration problems. Give us a call with any questions or for emergency assistance at 408-883-3503.',
        'phone' => '408-883-3503',
        'href'  => site_url('san-jose-ca/'),
    ],

    [
        'title' => 'Water Mold Fire Restoration of Sacramento',
        'description' => 'WMF offers all of Sacramento help with Water Damage, Mold Removal, and Fire Restoration problems. Give us a call with any questions or for emergency assistance at 916-905-5393.',
        'phone' => '916-905-5393',
        'href'  => site_url('sacramento-ca/'),
    ],

    [
        'title' => 'Water Mold Fire Restoration of San Diego',
        'description' => 'WMF offers all of San Diego help with Water Damage, Mold Removal, and Fire Restoration problems. Give us a call with any questions or for emergency assistance at 619-900-4211.',
        'phone' => '619-900-4211',
        'href'  => site_url('san-diego-ca/'),
    ],

    [
        'title' => 'Water Mold Fire Restoration of San Francisco',
        'description' => 'WMF offers all of San Francisco help with Water Damage, Mold Removal, and Fire Restoration problems. Give us a call with any questions or for emergency assistance at 415-404-9145.',
        'phone' => '415-404-9145',
        'href'  => site_url('san-francisco-ca/'),
    ],

    [
        'title' => 'Water Mold Fire Restoration of South Florida',
        'description' => 'WMF offers all of South Florida help with Water Damage, Mold Removal, and Fire Restoration problems. Give us a call with any questions or for emergency assistance at 954-406-0416.',
        'phone' => '954-406-0416',
        'href'  => site_url('south-florida/'),
    ],

    [
        'title' => 'Water Mold Fire Restoration of Tampa',
        'description' => 'WMF offers all of Tampa help with Water Damage, Mold Removal, and Fire Restoration problems. Give us a call with any questions or for emergency assistance at 813-438-3891.',
        'phone' => '813-438-3891',
        'href'  => site_url('tampa-fl/'),
    ],

    [
        'title' => 'Water Mold Fire Restoration of Virginia Beach',
        'description' => 'WMF offers all of Virginia Beach help with Water Damage, Mold Removal, and Fire Restoration problems. Give us a call with any questions or for emergency assistance at 757-828-5295.',
        'phone' => '757-828-5295',
        'href'  => site_url('virginia-beach-va/'),
    ],

    [
        'title' => 'Water Mold Fire Restoration of Washington DC',
        'description' => 'WMF offers all of Washington DC help with Water Damage, Mold Removal, and Fire Restoration problems. Give us a call with any questions or for emergency assistance at 202-650-0299.',
        'phone' => '202-650-0299',
        'href'  => site_url('washington-dc/'),
    ],

    [
        'title' => 'Water Mold Fire Restoration of Westchester',
        'description' => 'WMF offers all of Westchester help with Water Damage, Mold Removal, and Fire Restoration problems. Give us a call with any questions or for emergency assistance at 914-481-3938.',
        'phone' => '914-481-3938',
        'href'  => site_url('westchester-ny/'),
    ],
];
?>

    <!-- ===== top search ===== -->
    <section class="cdLocation">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-md-8 col-lg-8">
                    <!-- 1. Search Panel -->
                    <div class="search-panel">
                        <h2>Find a Service Professional in Your Area</h2>
                        <form name="frm_service_area" id="frm_service_area" method="POST">
                            <div class="custom-search-box">
                                <input type="text" name="zipcode" id="zipcode" class="form-control" placeholder="Enter City, State or Zip Code..." value="<?php echo (!empty($_POST['zipcode']) ? ucwords(strtolower($_POST['zipcode'])) : ''); ?>">
                                <button class="btn-search" type="submit">Search</button>
                            </div>
                        </form>
                    </div>

                    <!-- 2. Dynamic Map Placeholder -->
                    <div class="map-wrapper" id="dynamic-map-container">
                        <div id="locations_map_canvas"></div>
                    </div>

                    <!-- 3. Location Cards Grid -->
                    <div id="location-section-main">
                        <h3 class="location-section-title">
                            <i class="fa-solid fa-building-user text-primary"></i> 
                            Available Locations
                        </h3>
                        <!-- Grid System -->
                        <div class="row g-4">
                            <?php
                            if( !empty($locations_list) && is_array($locations_list) )
                            {
                                $l = 1;
                                foreach( $locations_list as $location )
                                {
                            ?>
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="location-card<?php echo $l==1 ? ' card-featured' : ''; ?>">
                                            <div class="card-header-info">
                                                <div class="location-icon">
                                                    <i class="fa-solid fa-location-dot"></i>
                                                </div>
                                                <div class="cdcityTitle">
                                                    <a href="<?php echo (!empty($location['href']) ? $location['href'] : "#"); ?>" target="_self" class="citylink">
                                                        <?php
                                                        if( $l==1 )
                                                        {
                                                        ?>
                                                            <span class="badge bg-warning text-dark mb-1">Closest Match</span>
                                                        <?php
                                                        }
                                                        ?>
                                                        <h4 class="location-title"><?php echo display_htmlspecialchars($location['title']); ?></h4>
                                                    </a>
                                                </div>
                                            </div>
                                            <p class="location-desc">
                                                <?php echo display_htmlspecialchars($location['description']); ?>
                                            </p>
                                            <a href="tel:<?php echo preg_replace('/[^0-9]/', '', $location['phone']); ?>" class="cdstyle1 butn butn__new">
                                                <i class="fa-solid fa-phone"></i> <?php echo display_htmlspecialchars($location['phone']); ?>
                                            </a>
                                        </div>
                                    </div>
                            <?php
                                    $l++;
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>

                <div id="pincode" style="display: none;"><?php echo (!empty($_POST['zipcode']) ? ucwords(strtolower($_POST['zipcode'])) : ''); ?></div>
                
                <?php
                require_once __DIR__ . '/includes/left-sidebar.php';
                ?>
            </div>
        </div>
    </section> 

    <?php
    require_once __DIR__ . '/includes/our-client-logos-list.php';
    ?>

<?php
require_once __DIR__ . '/includes/footer.php';
?>

<script type="text/javascript">
    jQuery(function($)
    {
        // Asynchronously Load the map API 
        let script = document.createElement('script');
        
        script.src = "https://maps.googleapis.com/maps/api/js?key=<?php echo GOOGLE_MAP_KEY; ?>&loading=async&callback=initialize";
        script.async = true;
        script.defer = true;

        document.body.appendChild(script);
    });

    function initialize()
    {
        let map;
        let bounds = new google.maps.LatLngBounds();
        let mapOptions = {
            mapTypeId: 'roadmap',
            scrollwheel: false
        };

        // Display a map on the page
        map = new google.maps.Map(document.getElementById("locations_map_canvas"), mapOptions);
        map.setTilt(45);

        // Multiple Marker
        let markers = [
            ["Water Mold Fire Restoration of Gulfport" , 30.3588676,-89.1171485,['96826'],['Gulfport'],['Mississippi']],
            ["Water Mold Fire Restoration of Tampa" , 28.0906958,-82.5150917,['33601'],['Tampa'],['Florida']],
            ["Water Mold Fire Restoration of Austin" , 30.4106499,-97.7548366,['78759'],['Austin'],['Texas']],
            ["Water Mold Fire Restoration of South Florida" , 41.11384253465108,-73.81224690438233,['32003'],['South Florida'],['Florida']],
            ["Water Mold Fire Restoration of Chesapeake" , 41.11384253465108,-73.81224690438233,['23323'],['Chesapeake'],['Virginia']],
            ["Water Mold Fire Restoration of Greensboro" , 41.11384253465108,-73.81224690438233,['27406'],['Greensboro'],['North Carolina']],
            ["Water Mold Fire Restoration of Myrtle Beach" , 33.6208282,-78.9865519,['29575'],['Myrtle Beach'],['South Carolina']],
            ["Water Mold Fire Restoration of Richmond" , 41.11384253465108,-73.81224690438233,['23225'],['Richmond'],['Virginia']],
            ["Water Mold Fire Restoration of Fayetteville" , 41.11384253465108,-73.81224690438233,['28304'],['Fayetteville'],['North Carolina']],
            ["Water Mold Fire Restoration of Raleigh" , 41.11384253465108,-73.81224690438233,['27608'],['Raleigh'],['North Carolina']],
            ["Water Mold Fire Restoration of Toronto" , 41.1012599,-73.79237710000001,['M4B1B3'],['Toronto'],['Province Of Ontario']],
            ["Water Mold Fire Restoration of Pembroke Pines" , 26.007765,-80.29625550000003,['33026'],['Pembroke Pines'],['Florida']],
            ["Water Mold Fire Restoration of Westchester" , 41.1012599,-73.79237710000001,['10532'],['Westchester'],['New York']],
            ["Water Mold Fire Restoration of San Jose" , 37.3493818,-121.9374057,['95053'],['San Jose'],['Florida']],
            ["Water Mold Fire Restoration of Washington DC" , 38.898708,-77.053967,['20037'],['Washington DC'],['United States']],
            ["Water Mold Fire Restoration of Virginia Beach" , 36.839797,-76.06292300000001,['23464'],['Virginia Beach'],['Virginia']],
            ["Water Mold Fire Restoration of St. Louis" , 38.5780827,-90.2591041,['63101'],['St. Louis'],['Missouri']],
            ["Water Mold Fire Restoration of San Francisco" , 37.7740081,-122.4048171,['94016'],['San Francisco'],['California']],
            ["Water Mold Fire Restoration of San Diego" , 32.7211621,-117.16227430000004,['22434'],['San Diego'],['California']],       
            ["Water Mold Fire Restoration of Sacramento" , 38.516943,-121.46175219999998,['94203'],['Sacramento'],['California']],        
            ["Water Mold Fire Restoration of Providence" , 41.8535631,-71.4736815,['02911'],['Providence'],['Rhode Island']],
            ["Water Mold Fire Restoration of Phoenix" , 33.4857027,-112.22694790000003,['85001'],['Phoenix'],['Arizona']],
            ["Water Mold Fire Restoration of Philadelphia" , 40.0135425,-75.17478540000002,['19019'],['Philadelphia'],['Pennsylvania']],
            ["Water Mold Fire Restoration of Orlando" , 28.5537244,-81.34760219999998,['32789'],['Orlando'],['Florida']],
            ["Water Mold Fire Restoration of New York City" , 40.7711,-73.95643849999999,['10001'],['New York City'],['New York']],
            ["Water Mold Fire Restoration of New Orleans" , 29.9494686,-90.06793349999998,['70032'],['New Orleans'],['Louisiana']],
            ["Water Mold Fire Restoration of Nashville" , 36.0589725,-86.7385299,['37011'],['Nashville'],['Tennessee']],
            ["Water Mold Fire Restoration of Minneapolis" , 45.0084106,-93.28027259999999,['55111'],['Minneapolis'],['Minnesota']],        
            ["Water Mold Fire Restoration of Miami" , 25.7489297,-80.3885391,['33101'],['Miami'],['Oklahoma']],
            ["Water Mold Fire Restoration of Memphis" , 35.22502639999999,-90.00613909999998,['37501'],['Memphis'],['Tennessee']],
            ["Water Mold Fire Restoration of Louisville" , 38.1289703,-85.66189810000003,['40018'],['Louisville'],['Kentucky']],
            ["Water Mold Fire Restoration of Los Angeles" , 34.04646359999999,-118.32632480000001,['90001'],['Los Angeles'],['California']],
            ["Water Mold Fire Restoration of Long Island" , 40.73983229999999,-73.48997829999996,['11101'],['Long Island'],['New York']],            
            ["Water Mold Fire Restoration of Jersey City" , 40.7406897,-74.04401989999997,['07030'],['Jersey City'],['New Jersey']],
            ["Water Mold Fire Restoration of Jacksonville" , 30.16465719999999,-81.53350119999999,['32034'],['Jacksonville'],['Florida']],
            ["Water Mold Fire Restoration of Houston" , 29.6630774,-95.21102480000002,['77001'],['Houston'],['Texas']],
            ["Water Mold Fire Restoration of Indianapolis" , 39.75848939999999,-86.23266260000003,['46077'],['Indianapolis'],['Indiana']],
            ["Water Mold Fire Restoration of Hartford" , 41.7867244,-72.66232809999997,['06101'],['Hartford'],['Connecticut']],        
            ["Water Mold Fire Restoration of Fort Lauderdale" , 26.1220887,-80.13305559999998,['33301'],['Fort Lauderdale'],['Florida']],             
            ["Water Mold Fire Restoration of Daytona Beach" , 29.2990676,-81.09354580000002,['32114'],['Daytona Beach'],['Florida']],
            ["Water Mold Fire Restoration of Dallas" , 32.8164374,-96.75789079999998,['75001'],['Dallas'],['Texas']],
            ["Water Mold Fire Restoration of Corpus Christi" , 27.760825,-97.45925399999999,['78336'],['Corpus Christi'],['Texas']],
            ["Water Mold Fire Restoration of Columbus" , 39.9450605,-83.11362710000003,['43004'],['Columbus'],['Georgia']],
            ["Water Mold Fire Restoration of Cleveland" , 41.4725327,-81.71157440000002,['44101'],['Cleveland'],['Ohio']],        
            ["Water Mold Fire Restoration of Chicago" , 41.9461114,-87.65277179999998,['60007'],['Chicago'],['Illinois']],
            ["Water Mold Fire Restoration of Cape Coral" , 26.562853699999994,-81.95090639102513,['33914'],['Cape Coral'],['Florida']],
            ["Water Mold Fire Restoration of Charleston" , 32.9218587,-79.87409479999997,['29401'],['Charleston'],['South Carolina']],        
            ["Water Mold Fire Restoration of Boston" , 42.3511702,-71.04929809999999,['02101'],['Boston'],['Massachusetts']],        
            ["Water Mold Fire Restoration of Baltimore MD" , 39.2738951,-76.6058257,['21230'],['Baltimore MD'],['Maryland']],
            ["Water Mold Fire Restoration of Atlanta" , 33.7733596,-84.39895939999997,['30301'],['Atlanta'],['Georgia']],
            ["Water Mold Fire Restoration of Albuquerque" , 35.0773319,-106.62508359999998,['87101'],['Albuquerque'],['New Mexico']],
            ["Water Mold Fire Restoration of Boca Raton" , 26.4031443,-80.07560860000001,['33487'],['Boca Raton'],['Florida']],
            ["Water Mold Fire Restoration of Fayetteville Arkansas" , 36.223070,-94.133850,['72764'],['Fayetteville Arkansas'],['Arkansas']],
            ["Water Mold Fire Restoration of Honolulu" , 21.3282733,-157.9638893,['96805'],['Honolulu'],['Hawaii']]
        ];

        let infoWindowContent = [
            <?php
            if( !empty($locations_list) && is_array($locations_list) )
            {
                foreach( $locations_list as $location )
                {
            ?>
                    ["<div><h4><a href='<?php echo (!empty($location['href']) ? $location['href'] : "#"); ?>'><?php echo display_htmlspecialchars($location['title']); ?></a></h4><p><?php echo display_htmlspecialchars($location['description']); ?></p><h3><a href='tel:<?php echo preg_replace('/[^0-9]/', '', $location['phone']); ?>'><?php echo display_htmlspecialchars($location['phone']); ?></a></h3></div>"],
            <?php
                }
            }
            ?>
        ];

        // Display multiple markers on a map
        let infoWindow = new google.maps.InfoWindow(), marker, i;
        let Getpincode = document.getElementById('pincode').innerHTML;
        let states = false;
        let cities = false;
        let markersNewArray = [];
        let infoWindowContentNewArray = [];

        if( Getpincode!="" )
        {
            for( i = 0; i < markers.length; i++ )
            {
                if(markers[i][5].indexOf(Getpincode) >= 0)
                {
                    states = true;
                } 
                
                if(markers[i][4].indexOf(Getpincode) >= 0)
                {
                    cities = true;
                    markersNewArray.push(markers[i]);
                }
            }
            markers = markersNewArray;

            for( i = 0; i < infoWindowContent.length; i++ )
            {
                if(infoWindowContent[i][0].indexOf(Getpincode) >= 0)
                {
                    infoWindowContentNewArray.push(infoWindowContent[i]);
                }
            }
            infoWindowContent = infoWindowContentNewArray;
        }

        if(states == true || cities == true)
        {
            document.getElementById("location-section-main").style.display = "none";

            let ul=document.createElement('ul');
            ul.className = "list-unstyled mt-4 maplist";
        }

        var searchcontent = "";

        for( i = 0; i < markers.length; i++ )
        {
            if(states == true)
            {
                if(markers[i][5].indexOf(Getpincode) >= 0)
                {
                    //alert(markers[i][5]);
                    let image = '<?php echo site_url(); ?>images/map_marker.png';
                    let position = new google.maps.LatLng(markers[i][1], markers[i][2]);
                    bounds.extend(position);
                    marker = new google.maps.Marker({
                        position: position,
                        map: map,
                        title: markers[i][0],
                        icon: image
                    });

                    // Allow each marker to have an info window  
                    google.maps.event.addListener(marker, 'click', (function(marker, i)
                    {
                        return function()
                        {
                            infoWindow.setContent(infoWindowContent[i][0]);
                            infoWindow.open(map, marker);
                        }
                    })(marker, i));

                    /*let li=document.createElement('li');
                    li.className = "media"; 
                    li.innerHTML =  '<img src="<?php //echo site_url(); ?>images/map_marker.png" class="mr-4 ml-4"><div class="media-body">'+infoWindowContent[i][0]+'</div>';
                    ul.appendChild(li);*/
                }
            
            }
            else if( cities == true )
            {
                if(markers[i][4].indexOf(Getpincode) >= 0)
                {
                    let image = '<?php echo site_url(); ?>images/map_marker.png';
                    let position = new google.maps.LatLng(markers[i][1], markers[i][2]);
                    bounds.extend(position);
                    marker = new google.maps.Marker({
                        position: position,
                        map: map,
                        title: markers[i][0],
                        icon: image
                    });

                    // Allow each marker to have an info window  
                    google.maps.event.addListener(marker, 'click', (function(marker, i)
                    {
                        return function()
                        {
                            if( infoWindowContent[i] && infoWindowContent[i][0] )
                            {
                                infoWindow.setContent(infoWindowContent[i][0]);
                            }

                            infoWindow.open(map, marker);
                        }
                    })(marker, i));

                    /*let li=document.createElement('li');
                    li.className = "media"; 
                    if( infoWindowContent[i] && infoWindowContent[i][0] )
                    {
                        li.innerHTML =  '<img src="<?php //echo site_url(); ?>images/map_marker.png" class="mr-4 ml-4"><div class="media-body">'+infoWindowContent[i][0]+'</div>';
                    }
                    ul.appendChild(li);*/
                }
            
            }
            else
            {
                let image = '<?php echo site_url(); ?>images/map_marker.png';
                let position = new google.maps.LatLng(markers[i][1], markers[i][2]);
                bounds.extend(position);
                marker = new google.maps.Marker({
                    position: position,
                    map: map,
                    title: markers[i][0],
                    icon: image
                });

                // Allow each marker to have an info window  
                google.maps.event.addListener(marker, 'click', (function(marker, i)
                {
                    return function()
                    {
                        infoWindow.setContent(infoWindowContent[i][0]);
                        infoWindow.open(map, marker);
                    }
                })(marker, i));

                if(Getpincode != "")
                {
                    <?php
                    $CityName = '';

                    if( !empty($_POST['zipcode']) )
                    {
                        $CityQry = "SELECT City,Latitude,Longitude FROM ZIPCodes WHERE ZipCode = '".$_POST['zipcode']."'";
                        $CityArow = $BaseModel->queryData($CityQry);

                        if(!empty($CityArow))
                        {
                            $CityName = ucfirst(strtolower($CityArow['City']));
                            $Latitude = $CityArow['Latitude'];
                            $Longitude = $CityArow['Longitude'];
                        }
                    }
                    ?>
                    <?php
                    if($CityName != "")
                    {
                    ?>
                        if(markers[i][4].indexOf('<?php echo $CityName; ?>') !== -1)
                        {
                            infoWindow.setContent(infoWindowContent[i][0]);
                            infoWindow.open(map, marker);
                            document.getElementById("location-section-main").style.display = "none";
                            
                            document.getElementById("searchArticle").style.display = "block";
                            document.getElementById("SearchDiv").innerHTML = infoWindowContent[i][0];
                        }
                        else
                        {
                            //FINDING NEAR BY PLACES
                            let latitude = <?php echo $Latitude; ?>;
                            let longitude = <?php echo $Longitude; ?>;
                            let minDif = 99999;
                            let closest;

                            for (index = 0; index < markers.length; index++)
                            {
                                var dif = PythagorasEquirectangular(latitude, longitude, markers[index][1], markers[index][2]);
                                if (dif < minDif)
                                {
                                    closest = index;
                                    minDif = dif;
                                }
                            }

                            if(markers[i][3].indexOf(markers[closest][3][0]) !== -1)
                            {
                                infoWindow.setContent(infoWindowContent[i][0]);
                                infoWindow.open(map, marker);
                                document.getElementById("location-section-main").style.display = "none";
                                document.getElementById("searchArticleState").style.display = "none";
                                document.getElementById("searchArticle").style.display = "block";
                                document.getElementById("SearchDiv").innerHTML = infoWindowContent[i][0];
                            }
                            //FINDING NEAR BY PLACES
                        }
                    <?php
                    }
                    else
                    {
                    ?> 
                        if(markers[i][4].indexOf(Getpincode) !== -1)
                        {
                            infoWindow.setContent(infoWindowContent[i][0]);
                            infoWindow.open(map, marker);
                            document.getElementById("location-section-main").style.display = "none";
                        }
                    <?php
                    }
                    ?>
                }
            }
            // Automatically center the map fitting all markers on the screen
            map.fitBounds(bounds);
        }

        if(states == true)
        {
            document.getElementById('searchArticleState').appendChild(ul);
        }

        // Loop through our array of markers & place each one on the map  
        // Override our map zoom level once our fitBounds function runs (Make sure it only runs once)
        if(Getpincode != "")
        {
            if(states == false)
            {
                var boundsListener = google.maps.event.addListener((map), 'bounds_changed', function(event) {
                    this.setZoom(6);
                    google.maps.event.removeListener(boundsListener);
                });
            }
            else
            {
                var boundsListener = google.maps.event.addListener((map), 'bounds_changed', function(event) {
                    this.setZoom(4);
                    google.maps.event.removeListener(boundsListener);
                });
            }
        }
        else
        {
            var boundsListener = google.maps.event.addListener((map), 'bounds_changed', function(event) {
                this.setZoom(4);
                google.maps.event.removeListener(boundsListener);
            });
        }
        //console.log(<?php //echo $CityName; ?>);

        function Deg2Rad(deg)
        {
            return deg * Math.PI / 180;
        }

        function PythagorasEquirectangular(lat1, lon1, lat2, lon2)
        {
            lat1 = Deg2Rad(lat1);
            lat2 = Deg2Rad(lat2);
            lon1 = Deg2Rad(lon1);
            lon2 = Deg2Rad(lon2);
            let R = 6371; // km
            let x = (lon2 - lon1) * Math.cos((lat1 + lat2) / 2);
            let y = (lat2 - lat1);
            let d = Math.sqrt(x * x + y * y) * R;

            return d;
        }

        /*function NearestCity(latitude, longitude)
        {
            var minDif = 99999;
            var closest;

            for (index = 0; index < markers.length; index++) {
                var dif = PythagorasEquirectangular(latitude, longitude, markers[index][1], markers[index][2]);
                if (dif < minDif) {
                closest = index;
                minDif = dif;
                }
            }
            // echo the nearest city
            // alert(markers[closest]);
        }*/
    }
</script>

<?php
if( !empty($is_body_html_close_same_page) && $is_body_html_close_same_page==true )
{
    echo '</body></html>';
}