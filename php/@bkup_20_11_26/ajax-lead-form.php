<?php
header("X-Robots-Tag: noindex", true);
header('Content-Type: application/json');

require_once __DIR__ . '/includes/init.php';

// Helper function
function response($status, $message, $field = "")
{
    echo json_encode(
        [
            "status" => $status,
            "message" => $message,
            "field" => $field
        ]
    );
    exit;
}

if( $_SERVER['REQUEST_METHOD']==='POST' )
{
    // Check honeypot field
    if( !empty($_POST['honeypot_lead_time']) )
    {
        // Likely spam bot
        response(
            "error",
            "Spam detected!"
        );
    }

    // Rate limit start
    {
        $limit = 60;
        $timeWindow = 60;

        $lead_form_rate_limits_file = __DIR__ . '/lead_form_rate_limits.json';

        // Get client IP
        $clientIP = ($_SERVER['REMOTE_ADDR'] ?? 'unknown');

        // Unique identifier
        $key = hash('sha256', $clientIP);

        $fp = fopen($lead_form_rate_limits_file, 'c+');

        flock($fp, LOCK_EX);

        $data = json_decode(stream_get_contents($fp), true) ?? [];

        $currentTime = time();

        if( !isset($data[$key]) || $currentTime - $data[$key]['time'] >= $timeWindow)
        {
            $data[$key] = [
                'count' => 0,
                'time' => $currentTime
            ];
        }

        $data[$key]['count']++;

        $count = $data[$key]['count'];

        if( $count > $limit )
        {
            $retryAfter = $timeWindow - ($currentTime - $data[$key]['time']);

            ftruncate($fp, 0);
            rewind($fp);
            fwrite($fp, json_encode($data));

            flock($fp, LOCK_UN);
            fclose($fp);

            // http_response_code(429);
            // header("Retry-After: $retryAfter");

            response(
                "error",
                "Too many requests. Maximum 60 requests per minute."
            );
        }

        ftruncate($fp, 0);
        rewind($fp);
        fwrite($fp, json_encode($data));

        flock($fp, LOCK_UN);
        fclose($fp);
    }
    // Rate limit end

	// Get POST safely
    $customer_name = (!empty($_POST['lead_customer_name']) ? trim($_POST['lead_customer_name']) : '');
    $email_address = (!empty($_POST['lead_email_address']) ? trim($_POST['lead_email_address']) : '');
    $phone_number = (!empty($_POST['lead_phone_number']) ? trim($_POST['lead_phone_number']) : '');
	$secondary_phone_number = (!empty($_POST['lead_secondary_phone_number']) ? trim($_POST['lead_secondary_phone_number']) : '');
    $street_address = (!empty($_POST['lead_street_address']) ? trim($_POST['lead_street_address']) : '');
    $zipcode = (!empty($_POST['lead_zipcode']) ? trim($_POST['lead_zipcode']) : '');
    $city = (!empty($_POST['lead_city']) ? trim($_POST['lead_city']) : '');
    $state = (!empty($_POST['lead_state']) ? trim($_POST['lead_state']) : '');
    $insurance_carrier = (!empty($_POST['lead_insurance_carrier']) ? trim($_POST['lead_insurance_carrier']) : '');
    $insurance_agent = (!empty($_POST['lead_insurance_agent']) ? trim($_POST['lead_insurance_agent']) : '');
    $policy_no = (!empty($_POST['lead_policy_no']) ? trim($_POST['lead_policy_no']) : '');
    $claim_no = (!empty($_POST['lead_claim_no']) ? trim($_POST['lead_claim_no']) : '');
    $comments = (!empty($_POST['lead_comments']) ? trim($_POST['lead_comments']) : '');

    /* =========================
    ✅ FIELD VALIDATIONS
    ========================= */

    // Customer Name
    if( $customer_name==='' )
    {
        response("error", "Customer Name is required", "lead_customer_name");
    }

    // Email
    if( $email_address==='' )
    {
        response("error", "Email Address is required", "lead_email_address");
    }
    else if( !filter_var($email_address, FILTER_VALIDATE_EMAIL) )
    {
        response("error", "Invalid Email Address", "lead_email_address");
    }

    // Phone
    if( $phone_number==='' )
    {
        response("error", "Phone Number is required", "lead_phone_number");
    }

    // Street Address
    if( $street_address==='' )
    {
        response("error", "Street Address is required", "lead_street_address");
    }

    // zipcode
    if( $zipcode==='' )
    {
        response("error", "Zip Code is required", "lead_zipcode");
    }
    else if( !preg_match('/^[0-9]{5,10}$/', $zipcode) )
    {
        response("error", "Invalid Zip Code", "lead_zipcode");
    }

    // City
    if( $city==='' )
    {
        response("error", "City is required", "lead_city");
    }

    // State
    if( $state==='' )
    {
        response("error", "State is required", "lead_state");
    }

    // comments
    if( $comments==='' )
    {
        response("error", "Comments is required", "lead_comments");
    }

    // api lead-form start
    $url = 'https://wmfrestoration.org/watermoldfire_api/lead-form.php';
    
    $postData = [
        'customer_name' => $customer_name,
        'email_address' => $email_address,
        'phone_number' => $phone_number,
        'secondary_phone_number' => $secondary_phone_number,
        'street_address' => $street_address,
        'zipcode' => $zipcode,
        'city' => $city,
        'state' => $state,
        'insurance_carrier' => $insurance_carrier,
        'insurance_agent' => $insurance_agent,
        'policy_no' => $policy_no,
        'claim_no' => $claim_no,
        'comments' => $comments,
        'source' => 'WMF.net Lead Form',
        'source_url' => 'https://watermoldfire.net/lead-form/'
    ];

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($postData));
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    $response = curl_exec($ch);
    curl_close($ch);

    /*$curl_error = curl_error($ch);
    if( $curl_error )
    {
        echo "<pre>"; print_r($curl_error); echo "</pre>";
    }

    echo "<pre>"; print_r($response); echo "</pre>";*/
    // api lead-form end

    // ✅ SUCCESS RESPONSE
    response(
        "success",
        "Your Request has Been Received, an WMF Rep Will Contact to Confirm."
    );
    exit;
}
else
{
    response(
        "error",
        "This method is not allow"
    );
    exit;
}