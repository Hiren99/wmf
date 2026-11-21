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
    $plumber_business_name = (!empty($_POST['plumber_business_name']) ? trim($_POST['plumber_business_name']) : '');
	$plumber_phone = (!empty($_POST['plumber_phone']) ? trim($_POST['plumber_phone']) : '');
    $plumber_website = (!empty($_POST['plumber_website']) ? trim($_POST['plumber_website']) : '');
    $plumber_email = (!empty($_POST['plumber_email']) ? trim($_POST['plumber_email']) : '');
    $plumber_state = (!empty($_POST['plumber_state']) ? trim($_POST['plumber_state']) : '');
    $plumber_city = (!empty($_POST['plumber_city']) ? trim($_POST['plumber_city']) : '');
    $plumber_zip_code = (!empty($_POST['plumber_zip_code']) ? trim($_POST['plumber_zip_code']) : '');
    $plumber_description = (!empty($_POST['plumber_description']) ? trim($_POST['plumber_description']) : '');
    $plumber_license_number = (!empty($_POST['plumber_license_number']) ? $_POST['plumber_license_number'] : '');

    $recaptcha = (!empty($_POST['g-recaptcha-response']) ? $_POST['g-recaptcha-response'] : '');

    /* =========================
    ✅ FIELD VALIDATIONS
    ========================= */

    if( $plumber_business_name==='' )
    {
        response("error", "Business Name is required", "plumber_business_name");
    }

    if( $plumber_phone==='' )
    {
        response("error", "Phone Number is required", "plumber_phone");
    }

    if( $plumber_website==='' )
    {
        response("error", "Website is required", "plumber_website");
    }

    if( $plumber_email==='' )
    {
        response("error", "Email Address is required", "plumber_email");
    }
    else if( !filter_var($plumber_email, FILTER_VALIDATE_EMAIL) )
    {
        response("error", "Invalid Email Address", "plumber_email");
    }

    if( $plumber_state==='' )
    {
        response("error", "State is required", "plumber_state");
    }

    if( $plumber_city==='' )
    {
        response("error", "City is required", "plumber_city");
    }

    if( $plumber_zip_code==='' )
    {
        response("error", "Zip Code is required", "plumber_zip_code");
    }
    else if( !preg_match('/^[0-9]{5,10}$/', $plumber_zip_code) )
    {
        response("error", "Invalid Zip Code", "plumber_zip_code");
    }

    // comments
    if( $plumber_description==='' )
    {
        response("error", "Bio is required", "plumber_description");
    }

    /* =========================
    ✅ RECAPTCHA VERIFY
    ========================= */
    $verify = google_recaptcha_verify_with_curl($recaptcha);

    if( empty($verify->success) )
    {
        response("error", "Please select I'm not a robot", "recaptcha");
    }

    /* logo start */
    $plumber_logo_file = '';
    if( !empty($_FILES["plumber_logo"]["name"]) )
    {
        $plumber_logo_name = $_FILES["plumber_logo"]["name"];
        $validExt = array("jpg", "png", "jpeg", "bmp", "gif");
        $path = pathinfo($plumber_logo_name);
        $filename = $path['filename'];
        $ext = $path['extension'];
        $temp_name = $_FILES['plumber_logo']['tmp_name'];
        
        $targetDir = root_path("upload/plumber_logo/");
        if(!is_dir($targetDir))
        {
            mkdir($targetDir, 0755, true);
        }

        if( !in_array($ext, $validExt) )
        {
            response(
                "error",
                "Not a valid image file"
            );
        }
        else if( $_FILES["plumber_logo"]["size"] > 5000000 )
        {
            response(
                "error",
                "Sorry, your file is too large. Upload size is less then 5mb"
            );
        }    
        else
        {
            $plumber_logo_file = generate_slug($filename). '_'. time().'.'.$ext;

            $filePath = $targetDir. $plumber_logo_file;

            move_uploaded_file( $_FILES["plumber_logo"]["tmp_name"], $filePath);
        }
    }
    /* logo end */

    $block_email_options = [
        'select' => "id",
        'from' => 'block_email',
        'where' => [
            [
                'column' => 'email', 
                'value' => $plumber_email
            ],
        ],
    ];

    $block_email_count = $BaseModel->fetchData($block_email_options, 'count');
    
    if( $block_email_count <= 0 )
    {
        $business_name_slug = generate_slug($plumber_business_name);

        $plumber_directory_options = [
            'select' => "id",
            'from' => 'plumber_directory',
            'where' => [
                [
                    'column' => 'slug', 
                    'value' => $business_name_slug
                ],
            ],
        ];

        $plumber_directory_count = $BaseModel->fetchData($plumber_directory_options, 'count');
        if( $plumber_directory_count > 0 )
        {
            $business_name_slug = $business_name_slug . ' - ' . time();
        }

        #START CODE FOR INSERT
        $qryColumns = [
            'business_name' => $plumber_business_name,
            'phone' => $plumber_phone,
            'state' => $plumber_state,
            'city' => $plumber_city,
            'website' => $plumber_website,
            'license_number' => $plumber_license_number,
            'email' => $plumber_email,
            'slug' => $business_name_slug,
            'bio' => $plumber_description,
            'zip_code' => $plumber_zip_code,
            'logo' => $plumber_logo_file,
            'date_added' => date('Y-m-d H:i:s'),
        ];

        $plumber_directory_ins = $BaseModel->insertQuery('plumber_directory', $qryColumns);
        #END CODE FOR INSERT
    }

    response(
        "success",
        "Thank You! Your listing added successfully. It is under review. It will be published shortly after is approved."
    );
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
