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
    $referral_program_fullname = (!empty($_POST['referral_program_fullname']) ? trim($_POST['referral_program_fullname']) : '');
    $referral_program_phone = (!empty($_POST['referral_program_phone']) ? trim($_POST['referral_program_phone']) : '');
	$referral_program_email = (!empty($_POST['referral_program_email']) ? trim($_POST['referral_program_email']) : '');
	$referral_program_zip_code = (!empty($_POST['referral_program_zip_code']) ? trim($_POST['referral_program_zip_code']) : '');
    $referral_program_comments = (!empty($_POST['referral_program_comments']) ? trim($_POST['referral_program_comments']) : '');

    $recaptcha = (!empty($_POST['g-recaptcha-response']) ? $_POST['g-recaptcha-response'] : '');

    /* =========================
    ✅ FIELD VALIDATIONS
    ========================= */

    if( $referral_program_fullname==='' )
    {
        response("error", "Full Name is required", "referral_program_fullname");
    }

    if( $referral_program_phone==='' )
    {
        response("error", "Phone is required", "referral_program_phone");
    }

    // Email
    if( $referral_program_email==='' )
    {
        response("error", "Email Address is required", "referral_program_email");
    }
    else if( !filter_var($referral_program_email, FILTER_VALIDATE_EMAIL) )
    {
        response("error", "Invalid Email Address", "referral_program_email");
    }

    if( $referral_program_zip_code==='' )
    {
        response("error", "Zip", "referral_program_zip_code");
    }

    if( $referral_program_comments==='' )
    {
        response("error", "Comments required", "referral_program_comments");
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
        $subject = "Application received: Referral Program";

        $email_content = "Referral Program\r\n<br>";

		$email_content .= "Full Name: ".$referral_program_fullname."\r\n<br>";

		$email_content .= "Phone: ".$referral_program_phone."\r\n<br>";  
		
		$email_content .= "Email: ".$referral_program_email."\r\n<br>";

		$email_content .= "Zip: ".$referral_program_zip_code."\r\n<br>";
		
		$email_content .= "How’d You Hear About Us?: ".$referral_program_comments."\r\n<br><br>";

        send_mail_with_attachments($recipient, $subject, $email_content);
    }
    // email end

    // ✅ SUCCESS RESPONSE
    response(
        "success",
        "Your Referral Program inquiry submitted successfully. We will get back to you as soon as possible."
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