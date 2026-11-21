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

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    
    // Get POST safely
    $first_name = (!empty($_POST['first_name']) ? trim($_POST['first_name']) : '');
    $last_name = (!empty($_POST['last_name']) ? trim($_POST['last_name']) : '');
    $email = (!empty($_POST['email']) ? trim($_POST['email']) : '');
	$phone = (!empty($_POST['phone']) ? trim($_POST['phone']) : '');
    $zip = (!empty($_POST['zip']) ? trim($_POST['zip']) : '');
    $interest = (!empty($_POST['interest']) ? trim($_POST['interest']) : '');
    $message = (!empty($_POST['message']) ? trim($_POST['message']) : '');

    $email_subject = (!empty($_POST['email_subject']) ? $_POST['email_subject'] : '');
    $city_name = (!empty($_POST['city_name']) ? $_POST['city_name'] : '');

    $recaptcha = (!empty($_POST['g-recaptcha-response']) ? $_POST['g-recaptcha-response'] : '');

    /* =========================
    ✅ FIELD VALIDATIONS
    ========================= */

    if( $first_name==='' )
    {
        response("error", "First Name is required", "first_name");
    }

    if( $last_name==='' )
    {
        response("error", "Last Name is required", "last_name");
    }

    if( $email==='' )
    {
        response("error", "Email Address is required", "email");
    }
    else if( !filter_var($email, FILTER_VALIDATE_EMAIL) )
    {
        response("error", "Invalid Email Address", "email");
    }

    if( $phone==='' )
    {
        response("error", "Phone Number is required", "phone");
    }

    if( $zip==='' )
    {
        response("error", "Zip Code is required", "zip");
    }
    else if( !preg_match('/^[0-9]{5,10}$/', $zip) )
    {
        response("error", "Invalid Zip Code", "zipcode");
    }

    if( $interest==='' )
    {
        response("error", "Interested is required", "interest");
    }

    // comments
    if( $message==='' )
    {
        response("error", "Describe your restoration needs is required", "message");
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
        'select' => "id",
        'from' => 'block_email',
        'where' => [
            [
                'column' => 'email', 
                'value' => $email
            ],
        ],
    ];

    $block_email_count = $BaseModel->fetchData($options, 'count');
    
    if( $block_email_count > 0 )
    {
        response(
            "success",
            "Thank You! Your message has been sent."
        );
    }


    #START CODE FOR INSERT ENQUIRY
    if( $email_subject == "Inquiry on WMF - Cleaning Disinfection" )
    {
        $qryColumns = [
            'fname' => $first_name,
            'lname' => $last_name,
            'phone' => $phone,
            'zip' => $zip,
            'interest' => $interest,
            'email' => $email,
            'description' => $message,
            'city_name' => $city_name,
            'entry_date' => date('Y-m-d H:i:s'),
        ];

        $campaign_ins = $BaseModel->insertQuery('cleaning_disinfection_enquiry', $qryColumns);
    }
    #END CODE FOR INSERT ENQUIRY


    // location_inquiry_api start
    {
        $url = 'https://wmfrestoration.org/admin/location_inquiry_api.php';

        $postData = [
            'fname' => $first_name,
            'lname' => $last_name,
            'phone' => $phone,
            'zip' => $zip,
            'interest' => $interest,
            'email' => $email,
            'description' => $message,
            'city' => $city_name
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
        }*/

        // echo "<pre>"; print_r($response); echo "</pre>";
    }
    // location_inquiry_api end

    // sent email start
    {
        // Set the recipient email address.
        // FIXME: Update this to your desired email address.
        $recipient = "help@watermoldfire.net";
        // $recipient = "rajesh.mitmold@gmail.com";
        
        if( $email_subject != '' )
        {
            // Set the email subject.
            $subject = $email_subject;
        }
        else
        {
            // Set the email subject.
            $subject = "Inquiry on WMF - Mold";
        }
        
        if( $city_name != '' )
        {
            // Build the email content.
            $email_content = "Following inquiry received on ".$city_name."\n\n<br><br>";
        }
        else
        {
            // Build the email content.
            $email_content = "Following inquiry received\n\n<br><br>";
        }

        $email_content .= "Name: $first_name $last_name\n<br>";
        $email_content .= "Email: $email\n<br>";
        $email_content .= "Phone: $phone\n<br>";
        $email_content .= "Zip: $zip\n<br>";
        $email_content .= "Interest: $interest\n<br>";
        $email_content .= "Desc: $message\n<br>";;

        // Send the email.
        $is_send = send_mail_with_attachments($recipient, $subject, $email_content);
        if( $is_send )
        {
            response(
                "success",
                "Thank You! Your message has been sent successfully.",
                $response
            );

        }
        else
        {
            response(
                "error",
                "Oops! Something went wrong and we couldn't send your message."
            );
        }
    }
    // sent email end
}
else
{
    // Not a POST request, set a 403 (forbidden) response code.
    response(
        "error",
        "There was a problem with your submission, please try again."
    );
}

?>
