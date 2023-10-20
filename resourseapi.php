<?php
// Set the URL of the CLIST API endpoint
$url = 'https://clist.by:443/api/v3/resource/';


$ch = curl_init();
echo"hello";
// Set the cURL options
curl_setopt($ch, CURLOPT_URL, $url);  // Set the URL to request
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);  // Return the response as a string
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Authorization: ApiKey kdclist:4d57c38a5152aa97ebd122b6c17442f14f0725a1',
));  // Set the API key in the request headers

// Execute the cURL request and store the response
$response = curl_exec($ch);
$http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
echo 'HTTP Code: ' . $http_code . '<br>';

// Check if the request was successful
if ($response === false) {
    echo 'Error: ' . curl_error($ch);
} else {
    // Decode the JSON response
    $data = json_decode($response, true);

    // Print the list of contests
    foreach ($data['objects'] as $resource) {
       echo' 
        <tr class="rows" id="row1">
        <!-- <th scope="row"></th> -->
        
        <td><img
                id="logos"
                class="codechef"
                src="https://clist.by'.$resource["icon"].'"
                alt="codelogo"
            />
            <a
            href="'.$resource["name"].'"
            style="color: white"
            >'.$resource["name"].'</a>
            </td>
            
        <td>Updated</td>
        <td>'.$resource["n_contests"].'</td>
        <td>
        '.$resource["n_accounts"].'
        </td>
        ';
    }
}

// Close the cURL session

curl_close($ch);
?>
