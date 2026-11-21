<?php
header("X-Robots-Tag: noindex", true);
header('Content-Type: application/json');

require_once __DIR__ . '/includes/init.php';

// Helper function
function response($status, $message, $option)
{
    echo json_encode(
        [
            "status" => $status,
            "message" => $message,
            "option" => $option
        ]
    );
    exit;
}

$state_id = ($_POST['state_id'] ?? 0);

$city_option = '<option value="">Select City</option>';

if( !empty($state_id) && is_numeric($state_id) )
{
    $getUsCityListByStateID = getUsCityListByStateID($state_id);

    if( !empty($getUsCityListByStateID) && is_array($getUsCityListByStateID) )
    {
        foreach( $getUsCityListByStateID as $row )
        {
            $city_option .='<option value="'.$row['ID'].'">'.ucwords($row['CITY']).'</option>';
        }
    }
}

response(
    "success",
    "Get city list by state id",
    $city_option
);

?>
