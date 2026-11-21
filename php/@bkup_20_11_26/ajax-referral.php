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
    $referral_name_company = (!empty($_POST['referral_name_company']) ? trim($_POST['referral_name_company']) : '');
    $referral_phone = (!empty($_POST['referral_phone']) ? trim($_POST['referral_phone']) : '');
	$referral_email = (!empty($_POST['referral_email']) ? trim($_POST['referral_email']) : '');
    $referral_comments = (!empty($_POST['referral_comments']) ? trim($_POST['referral_comments']) : '');

    $recaptcha = (!empty($_POST['g-recaptcha-response']) ? $_POST['g-recaptcha-response'] : '');

    /* =========================
    ✅ FIELD VALIDATIONS
    ========================= */

    if( $referral_name_company==='' )
    {
        response("error", "Name/Company is required", "referral_name_company");
    }

    if( $referral_phone==='' )
    {
        response("error", "Phone is required", "referral_phone");
    }

    // Email
    if( $referral_email==='' )
    {
        response("error", "Email Address is required", "referral_email");
    }
    else if( !filter_var($referral_email, FILTER_VALIDATE_EMAIL) )
    {
        response("error", "Invalid Email Address", "referral_email");
    }

    if( $referral_comments==='' )
    {
        response("error", "Comments required", "referral_comments");
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
        $subject = "Referral Received";

        // Build the email content.

        $email_content ="Referral received on ".date("d/m/Y h:i a")."\n<br>";
        $email_content .= "Name: $referral_name_company\n<br>";
        $email_content .= "Email: $referral_email\n<br>";
        $email_content .= "Phone: $referral_phone\n<br>";
        $email_content .= "Comments: $referral_comments\n<br>";

        send_mail_with_attachments($recipient, $subject, $email_content);
    }
    // email end

    // ✅ SUCCESS RESPONSE
    response(
        "success",
        "We have received your associate information. Thank you."
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