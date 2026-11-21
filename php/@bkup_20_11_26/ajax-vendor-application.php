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
    $vendor_app_first_name = (!empty($_POST['vendor_app_first_name']) ? trim($_POST['vendor_app_first_name']) : '');
    $vendor_app_username = (!empty($_POST['vendor_app_username']) ? trim($_POST['vendor_app_username']) : '');
    $vendor_app_password = (!empty($_POST['vendor_app_password']) ? trim($_POST['vendor_app_password']) : '');
	$vendor_app_email = (!empty($_POST['vendor_app_email']) ? trim($_POST['vendor_app_email']) : '');
    $vendor_app_street_address = (!empty($_POST['vendor_app_street_address']) ? trim($_POST['vendor_app_street_address']) : '');
    $vendor_app_city = (!empty($_POST['vendor_app_city']) ? trim($_POST['vendor_app_city']) : '');
    $vendor_app_phone = (!empty($_POST['vendor_app_phone']) ? trim($_POST['vendor_app_phone']) : '');
    $vendor_app_zip_code = (!empty($_POST['vendor_app_zip_code']) ? trim($_POST['vendor_app_zip_code']) : '');
    $vendor_app_inspector_notes = (!empty($_POST['vendor_app_inspector_notes']) ? trim($_POST['vendor_app_inspector_notes']) : '');   
    $vendor_app_check_list = (!empty($_POST['vendor_app_check_list']) && is_array(($_POST['vendor_app_check_list'])) ? implode(',', $_POST['vendor_app_check_list']) : '');
    $vendor_app_addedby = (!empty($_POST['vendor_app_addedby']) && is_numeric($_POST['vendor_app_addedby']) ? $_POST['vendor_app_addedby'] : 0);

    $recaptcha = (!empty($_POST['g-recaptcha-response']) ? $_POST['g-recaptcha-response'] : '');

    /* =========================
    ✅ FIELD VALIDATIONS
    ========================= */

    if( $vendor_app_first_name==='' )
    {
        response("error", "First Name is required", "vendor_app_first_name");
    }

    if( $vendor_app_username==='' )
    {
        response("error", "User Name is required", "vendor_app_username");
    }

    if( $vendor_app_password==='' )
    {
        response("error", "Passoword is required", "vendor_app_password");
    }

    // Email
    if( $vendor_app_email==='' )
    {
        response("error", "Email Address is required", "vendor_app_email");
    }
    else if( !filter_var($vendor_app_email, FILTER_VALIDATE_EMAIL) )
    {
        response("error", "Invalid Email Address", "vendor_app_email");
    }

    if( $vendor_app_street_address==='' )
    {
        response("error", "Street Address is required", "vendor_app_street_address");
    }

    if( $vendor_app_city==='' )
    {
        response("error", "City is required", "vendor_app_city");
    }

    if( $vendor_app_phone==='' )
    {
        response("error", "Phone is required", "vendor_app_phone");
    }

    // zipcode
    if( $vendor_app_zip_code==='' )
    {
        response("error", "Zip Code is required", "vendor_app_zip_code");
    }
    else if( !preg_match('/^[0-9]{5,10}$/', $vendor_app_zip_code) )
    {
        response("error", "Invalid Zip Code", "vendor_app_zip_code");
    }

    if( $vendor_app_inspector_notes==='' )
    {
        response("error", "Notes is required", "vendor_app_inspector_notes");
    }

    /* =========================
    ✅ RECAPTCHA VERIFY
    ========================= */
    $verify = google_recaptcha_verify_with_curl($recaptcha);

    if( empty($verify->success) )
    {
        response("error", "Please select I'm not a robot", "recaptcha");
    }

    // add_vendor_api start
    $url = 'http://wmfrestoration.org/admin/add_vendor_api.php';
    
    $postData = [
        'fname' => $vendor_app_first_name,
        'username' => $vendor_app_username,
        'password' => $vendor_app_password,
        'email' => $vendor_app_email,
        'street_address' => $vendor_app_street_address,
        'city' => $vendor_app_city,
        'phone' => $vendor_app_phone,
        'zip_code' => $vendor_app_zip_code,
        'inspector_notes' => $vendor_app_inspector_notes,
        'check_list' => $vendor_app_check_list,
        'addedby' => $vendor_app_addedby,
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
    // add_vendor_api end

    // email start
    {
        $recipient = "wmfrestoration@gmail.com";

        // Set the email subject.
        $subject = "Water Mold Fire Restoration";

        // Build the email content.

        $email_content = "vendor application\n\n";

        $email_content .= "Name: ".$vendor_app_first_name."\n";

        $email_content .= "User Name: ".$vendor_app_username."\n";

        $email_content .= "Password: ".$vendor_app_password."\n";

        $email_content .= "Email: ".$vendor_app_email."\n";

        $email_content .= "Street Address: ".$vendor_app_street_address."\n";

        $email_content .= "City: ".$vendor_app_city."\n";

        $email_content .= "Phone: ".$vendor_app_phone."\n";

        $email_content .= "Zip Code: ".$vendor_app_zip_code."\n";

        $email_content .= "Inspector Notes: ".$vendor_app_inspector_notes."\n";

        $email_content .= $vendor_app_check_list."\n";

        send_mail_with_attachments($recipient, $subject, $email_content);
    }
    // email end

    // ✅ SUCCESS RESPONSE
    response(
        "success",
        "Your Vendor Application is submitted successfully."
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