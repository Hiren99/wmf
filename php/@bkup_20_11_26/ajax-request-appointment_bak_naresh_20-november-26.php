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
	// Get POST safely
    $request_appointment_name = (!empty($_POST['request_appointment_name']) ? trim($_POST['request_appointment_name']) : '');
    $request_appointment_phone = (!empty($_POST['request_appointment_phone']) ? trim($_POST['request_appointment_phone']) : '');
	$request_appointment_zip_code = (!empty($_POST['request_appointment_zip_code']) ? trim($_POST['request_appointment_zip_code']) : '');
    $request_appointment_date_time = (
        !empty($_POST['request_appointment_date_time']) ? 
        date('m/d/Y h:i A', strtotime($_POST['request_appointment_date_time'])) : 
        ''
    );

    $recaptcha = (!empty($_POST['g-recaptcha-response']) ? $_POST['g-recaptcha-response'] : '');

    /* =========================
    ✅ FIELD VALIDATIONS
    ========================= */

    if( $request_appointment_name==='' )
    {
        response("error", "Name is required", "request_appointment_name");
    }

    if( $request_appointment_phone==='' )
    {
        response("error", "Phone is required", "request_appointment_phone");
    }

    if( $request_appointment_zip_code==='' )
    {
        response("error", "Zip Code is required", "request_appointment_zip_code");
    }

    if( $request_appointment_date_time==='' )
    {
        response("error", "Preferred Day/Time required", "request_appointment_date_time");
    }

    /* =========================
    ✅ RECAPTCHA VERIFY
    ========================= */
    $verify = google_recaptcha_verify_with_curl($recaptcha);

    if( empty($verify->success) )
    {
        response("error", "Please select I'm not a robot", "recaptcha");
    }

    $options = [
        'select' => "zc.City, zc.State, us.STATE_NAME",
        'from' => "ZIPCodes AS zc",
        'joins' => [
            [
                'type' => 'LEFT',
                'table' => 'us_states AS us',
                'on' => 'us.STATE_CODE = zc.State'
            ]
        ],
        'where' => [
            [
                'column' => 'zc.ZipCode',
                'value' => $request_appointment_zip_code
            ]
        ],
        'debug' => false, // 👈 enable debug
    ];

    $rs_data = $BaseModel->fetchData($options);
    // echo "<pre>"; print_r($rs_data); exit;

    $request_appointment_city = (
        !empty($rs_data["City"]) ? 
        ucwords(strtolower($rs_data["City"])) : 
        ''
    );

    $request_appointment_state = (
        !empty($rs_data["STATE_NAME"]) ? 
        ucwords($rs_data["STATE_NAME"]) : 
        (
            !empty($rs_data["State"]) ? 
            $rs_data["State"] : 
            ''
        )
    );

    // email start
    {
        $recipient = "help@watermoldfire.net";

        // Set the email subject.
        $subject = "WMF Site Inspection Inquiries";

        $email_content = "Name: ".$request_appointment_name."\r\n<br>";

		$email_content .= "Phone: ".$request_appointment_phone."\r\n<br>";

		$email_content .= "City: ".$request_appointment_city."\r\n<br>";

		$email_content .= "State: ".$request_appointment_state."\r\n<br>";

		$email_content .= "Zip: ".$request_appointment_zip_code."\r\n<br>";
		
		$email_content .= "Preferred Day/Time: ".$request_appointment_date_time."\r\n<br><br>";

        // echo $email_content; exit;

        send_mail_with_attachments($recipient, $subject, $email_content);
    }
    // email end

    // ✅ SUCCESS RESPONSE
    response(
        "success",
        "Thank you, Our representative will contact you shortly to confirm availability"
    );
    exit;
}
else
{
    response(
        "error",
        "There was a problem with your submission, please try again."
    );
    exit;
}