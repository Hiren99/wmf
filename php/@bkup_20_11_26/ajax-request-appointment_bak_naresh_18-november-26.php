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
        response("error", "Day/Time required", "request_appointment_date_time");
    }

    /* =========================
    ✅ RECAPTCHA VERIFY
    ========================= */
    $verify = google_recaptcha_verify_with_curl($recaptcha);

    if( empty($verify->success) )
    {
        response("error", "Please select I'm not a robot", "recaptcha");
    }

    // email start
    {
        $recipient = "help@watermoldfire.net";

        // Set the email subject.
        $subject = "Inquiry for WMF Site Inspection";

        $email_content = "Name: ".$request_appointment_name."\r\n<br>";

		$email_content .= "Phone: ".$request_appointment_phone."\r\n<br>";

		$email_content .= "Zip: ".$request_appointment_zip_code."\r\n<br>";
		
		$email_content .= "Day/Time: ".$request_appointment_date_time."\r\n<br><br>";

        send_mail_with_attachments($recipient, $subject, $email_content);
    }
    // email end

    // ✅ SUCCESS RESPONSE
    response(
        "success",
        "We'll contact you to confirm availability."
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