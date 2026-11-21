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
    $erp_fullname = (!empty($_POST['erp_fullname']) ? trim($_POST['erp_fullname']) : '');
    $erp_phone = (!empty($_POST['erp_phone']) ? trim($_POST['erp_phone']) : '');
	$erp_email = (!empty($_POST['erp_email']) ? trim($_POST['erp_email']) : '');
	$erp_zip_code = (!empty($_POST['erp_zip_code']) ? trim($_POST['erp_zip_code']) : '');
    $erp_comments = (!empty($_POST['erp_comments']) ? trim($_POST['erp_comments']) : '');

    $recaptcha = (!empty($_POST['g-recaptcha-response']) ? $_POST['g-recaptcha-response'] : '');

    /* =========================
    ✅ FIELD VALIDATIONS
    ========================= */

    if( $erp_fullname==='' )
    {
        response("error", "Full Name is required", "erp_fullname");
    }

    if( $erp_phone==='' )
    {
        response("error", "Phone is required", "erp_phone");
    }

    // Email
    if( $erp_email==='' )
    {
        response("error", "Email Address is required", "erp_email");
    }
    else if( !filter_var($erp_email, FILTER_VALIDATE_EMAIL) )
    {
        response("error", "Invalid Email Address", "erp_email");
    }

    if( $erp_zip_code==='' )
    {
        response("error", "Zip", "erp_zip_code");
    }

    if( $erp_comments==='' )
    {
        response("error", "Comments required", "erp_comments");
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
        $subject = "Inquiry for WMF Emergency Response Program.";

        $email_content = "Emergency Response Program\r\n<br>";

		$email_content .= "Full Name: ".$erp_fullname."\r\n<br>";

		$email_content .= "Phone: ".$erp_phone."\r\n<br>";  
		
		$email_content .= "Email: ".$erp_email."\r\n<br>";

		$email_content .= "Zip: ".$erp_zip_code."\r\n<br>";
		
		$email_content .= "How’d You Hear About Us?: ".$erp_comments."\r\n<br><br>";

        send_mail_with_attachments($recipient, $subject, $email_content);
    }
    // email end

    // ✅ SUCCESS RESPONSE
    response(
        "success",
        "Your Emergency Response Program inquiry submitted successfully. We will get back to you as soon as possible."
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