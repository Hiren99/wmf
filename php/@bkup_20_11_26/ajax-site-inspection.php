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
    // echo "<pre>"; print_r($_FILES); exit;

	// Get POST safely
    $site_inspection_appointment_type = (
        !empty($_POST['site_inspection_appointment_type']) ? 
        trim($_POST['site_inspection_appointment_type']) : 
        'Site Inspection'
    );

    $site_inspection_name = (!empty($_POST['site_inspection_name']) ? trim($_POST['site_inspection_name']) : '');

    $site_inspection_phone = (!empty($_POST['site_inspection_phone']) ? trim($_POST['site_inspection_phone']) : '');

	$site_inspection_zip_code = (!empty($_POST['site_inspection_zip_code']) ? trim($_POST['site_inspection_zip_code']) : '');

    $site_inspection_service = (
        !empty($_POST['site_inspection_service']) ? 
        trim($_POST['site_inspection_service']) : 
        ''
    );

    $site_inspection_preferred_day = (
        !empty($_POST['site_inspection_preferred_day']) ? 
        date('m/d/Y', strtotime($_POST['site_inspection_preferred_day'])) : 
        ''
    );

    $site_inspection_preferred_time = (
        !empty($_POST['site_inspection_preferred_time']) ? 
        date('h:i A', strtotime($_POST['site_inspection_preferred_time'])) : 
        ''
    );

    $recaptcha = (!empty($_POST['g-recaptcha-response']) ? $_POST['g-recaptcha-response'] : '');

    /* =========================
    ✅ FIELD VALIDATIONS
    ========================= */

    if( $site_inspection_name==='' )
    {
        response("error", "Name is required", "site_inspection_name");
    }

    if( $site_inspection_phone==='' )
    {
        response("error", "Phone is required", "site_inspection_phone");
    }

    if( $site_inspection_zip_code==='' )
    {
        response("error", "Zip Code is required", "site_inspection_zip_code");
    }

    if( $site_inspection_service==='' )
    {
        response("error", "Service is required", "site_inspection_service");
    }

    if( $site_inspection_appointment_type == "Site Inspection" )
    {
        if( $site_inspection_preferred_day==='' )
        {
            response("error", "Preferred Day required", "site_inspection_preferred_day");
        }
    }

    /* pic/file start */
    $site_inspection_file_path = '';
    if( $site_inspection_appointment_type == "Virtual Quote" )
    {
        if( !empty($_FILES["site_inspection_file"]["name"]) )
        {
            $site_inspection_file_name = $_FILES["site_inspection_file"]["name"];
            $validExt = array("jpg", "png", "jpeg", "pdf");
            $path = pathinfo($site_inspection_file_name);
            // $filename = $path['filename'];
            $ext = strtolower($path['extension']);
            $temp_name = $_FILES['site_inspection_file']['tmp_name'];
            
            $targetDir = root_path("upload/virtual_quote/");
            if(!is_dir($targetDir))
            {
                mkdir($targetDir, 0755, true);
            }

            if( !in_array($ext, $validExt) )
            {
                response(
                    "error",
                    "Not a valid file"
                );
            }
            else if( $_FILES["site_inspection_file"]["size"] > 5000000 )
            {
                response(
                    "error",
                    "Sorry, your file is too large. Upload size is less then 5MB"
                );
            }    
            else
            {
                $site_inspection_file_name = generate_slug($site_inspection_name). '_'. time().'.'.$ext;

                $site_inspection_file_path = $targetDir. $site_inspection_file_name;

                move_uploaded_file( $_FILES["site_inspection_file"]["tmp_name"], $site_inspection_file_path);
            }
        }
    }
    // echo $site_inspection_file_path; exit;
    /* pic/file end */

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
                'value' => $site_inspection_zip_code
            ]
        ],
        'debug' => false, // 👈 enable debug
    ];

    $rs_data = $BaseModel->fetchData($options);
    // echo "<pre>"; print_r($rs_data); exit;

    $site_inspection_city = (
        !empty($rs_data["City"]) ? 
        ucwords(strtolower($rs_data["City"])) : 
        ''
    );

    $site_inspection_state = (
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
        // $recipient = "rajesh.mitmold@gmail.com";

        // Set the email subject.
        $subject = "WMF Site Inspection Inquiries";
        if( $site_inspection_appointment_type == "Virtual Quote" )
        {
            $subject = "WMF Virtual Quote Inquiries";
        }

        $email_content = "Name: ".$site_inspection_name."\r\n<br>";

		$email_content .= "Phone: ".$site_inspection_phone."\r\n<br>";

		$email_content .= "City: ".$site_inspection_city."\r\n<br>";

		$email_content .= "State: ".$site_inspection_state."\r\n<br>";

		$email_content .= "Zip: ".$site_inspection_zip_code."\r\n<br>";

		$email_content .= "Service: ".$site_inspection_service."\r\n<br>";
		
        if( $site_inspection_appointment_type == "Site Inspection" )
        {
            $email_content .= "Preferred Day: ".$site_inspection_preferred_day."\r\n<br>";
            
            $email_content .= "Preferred Time: ".$site_inspection_preferred_time."\r\n<br>";
        }

        // echo $email_content; exit;

        $attachments = array();
        if( $site_inspection_appointment_type == "Virtual Quote" && (!empty($site_inspection_file_path) && file_exists($site_inspection_file_path)) )
        {
            $attachments[] = array(
                'file' => $site_inspection_file_path, 
                'name' => $site_inspection_name .'-'. $site_inspection_phone
            );
        }
        // echo "<pre>"; print_r($attachments); exit;

        send_mail_with_attachments($recipient, $subject, $email_content, $attachments);
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