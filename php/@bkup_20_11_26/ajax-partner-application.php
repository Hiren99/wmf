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
    $partner_app_fullname = (!empty($_POST['partner_app_fullname']) ? trim($_POST['partner_app_fullname']) : '');
    $partner_app_username = (!empty($_POST['partner_app_username']) ? trim($_POST['partner_app_username']) : '');
    $partner_app_password = (!empty($_POST['partner_app_password']) ? trim($_POST['partner_app_password']) : '');
	$partner_app_email = (!empty($_POST['partner_app_email']) ? trim($_POST['partner_app_email']) : '');
    $partner_app_street_address = (!empty($_POST['partner_app_street_address']) ? trim($_POST['partner_app_street_address']) : '');
    $partner_app_city = (!empty($_POST['partner_app_city']) ? trim($_POST['partner_app_city']) : '');
    $partner_app_phone = (!empty($_POST['partner_app_phone']) ? trim($_POST['partner_app_phone']) : '');
    $partner_app_zip_code = (!empty($_POST['partner_app_zip_code']) ? trim($_POST['partner_app_zip_code']) : '');
    $partner_app_sales_rep = (!empty($_POST['partner_app_sales_rep']) ? trim($_POST['partner_app_sales_rep']) : '');
    $partner_app_inspector_notes = (!empty($_POST['partner_app_inspector_notes']) ? trim($_POST['partner_app_inspector_notes']) : '');   
    $partner_app_check_list = (!empty($_POST['partner_app_check_list']) && is_array(($_POST['partner_app_check_list'])) ? implode(',', $_POST['partner_app_check_list']) : '');
    $partner_app_addedby = (!empty($_POST['partner_app_addedby']) && is_numeric($_POST['partner_app_addedby']) ? $_POST['partner_app_addedby'] : 0);

    $recaptcha = (!empty($_POST['g-recaptcha-response']) ? $_POST['g-recaptcha-response'] : '');

    /* =========================
    ✅ FIELD VALIDATIONS
    ========================= */

    if( $partner_app_fullname==='' )
    {
        response("error", "Full Name is required", "partner_app_fullname");
    }

    if( $partner_app_username==='' )
    {
        response("error", "User Name is required", "partner_app_username");
    }

    if( $partner_app_password==='' )
    {
        response("error", "Passoword is required", "partner_app_password");
    }

    // Email
    if( $partner_app_email==='' )
    {
        response("error", "Email Address is required", "partner_app_email");
    }
    else if( !filter_var($partner_app_email, FILTER_VALIDATE_EMAIL) )
    {
        response("error", "Invalid Email Address", "partner_app_email");
    }

    if( $partner_app_street_address==='' )
    {
        response("error", "Street Address is required", "partner_app_street_address");
    }

    if( $partner_app_city==='' )
    {
        response("error", "City is required", "partner_app_city");
    }

    if( $partner_app_phone==='' )
    {
        response("error", "Phone is required", "partner_app_phone");
    }

    // zipcode
    if( $partner_app_zip_code==='' )
    {
        response("error", "Zip Code is required", "partner_app_zip_code");
    }
    else if( !preg_match('/^[0-9]{5,10}$/', $partner_app_zip_code) )
    {
        response("error", "Invalid Zip Code", "partner_app_zip_code");
    }

    if( $partner_app_sales_rep==='' )
    {
        response("error", "Sales Rep is required", "partner_app_sales_rep");
    }

    if( $partner_app_inspector_notes==='' )
    {
        response("error", "Notes is required", "partner_app_inspector_notes");
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
        $subject = "Partner Application Received";

        // Build the email content.

        $email_content = "Partner application\n\n";

        $email_content .= "Name: ".$partner_app_fullname."\n";

        $email_content .= "User Name: ".$partner_app_username."\n";

        $email_content .= "Password: ".$partner_app_password."\n";

        $email_content .= "Email: ".$partner_app_email."\n";

        $email_content .= "Street Address: ".$partner_app_street_address."\n";

        $email_content .= "City: ".$partner_app_city."\n";

        $email_content .= "Phone: ".$partner_app_phone."\n";

        $email_content .= "Zip Code: ".$partner_app_zip_code."\n";

        $email_content .= "Sales Rep: ".$partner_app_sales_rep."\n";

        $email_content .= "Inspector Notes: ".$partner_app_inspector_notes."\n";

        $email_content .= $partner_app_check_list."\n";

        send_mail_with_attachments($recipient, $subject, $email_content);
    }
    // email end

    // ✅ SUCCESS RESPONSE
    response(
        "success",
        "Your Partner Application is submitted successfully."
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