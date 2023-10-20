<?php
function formatDuration($seconds)
{
    $days = floor($seconds / (60 * 60 * 24));
    $hours = floor(($seconds % (60 * 60 * 24)) / (60 * 60));
    $minutes = floor(($seconds % (60 * 60)) / 60);
    $seconds = $seconds % 60;

    $output = '';
    if ($days > 0) {
        $output .= $days . ' day' . ($days > 1 ? 's' : '') . ' ';
        return trim($output);
    } elseif ($hours > 0) {
        $output .= $hours . ' hour' . ($hours > 1 ? 's' : '') . ' ';
        return trim($output);
    } elseif ($minutes > 0) {
        $output .= $minutes . ' minute' . ($minutes > 1 ? 's' : '') . ' ';
        return trim($output);
    } elseif ($seconds > 0 || empty($output)) {
        $output .= $seconds . ' second' . ($seconds > 1 ? 's' : '');
        return trim($output);
    }

    return trim($output);
}
function formatRemainingTime($timestamp)
{

    $timestamp = strtotime($timestamp);
    $remainingSeconds = max($timestamp - time(), 0);  // Ensure the remaining time is not negative

    $hours = floor($remainingSeconds / (60 * 60));
    $minutes = floor(($remainingSeconds % (60 * 60)) / 60);
    $seconds = $remainingSeconds % 60;

    if ($hours > 24) {
        return floor($hours / 24) . " days";
    }
    $output = $hours . ':' . $minutes . ':' . $seconds;


    return trim($output);
}


// Set the URL of the CLIST API endpoint
$url = 'https://clist.by:443/api/v3/contest/?order_by=-start';

// Set the parameters for the API request
// $params = array(
//     'limit' => 4000000000,  // Set the number of results to retrieve
//     'format' => 'json',  // Set the response format
// );
// // Build the URL with the query string
// $url .= '?' . http_build_query($params);

// Initialize a new cURL session
$ch = curl_init();

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
    foreach ($data['objects'] as $contest) {
        // if (!$contest["duration"]) {

        //     continue;
        // }
        // if (strtotime($contest["end"]) < time()) {
        //     continue;
        // }
        echo '<tr class="rows" ">';
        echo '<td>' . date("d.m.y D G:i", strtotime($contest['start'])) . '</td>';
        // echo "<script></script>";
        echo '<td>
        ' . formatDuration($contest["duration"])
            . '</a></td>';
        echo '<td>' . formatRemainingTime($contest["end"]) . '</td>';
        echo '<td>
        <a
        href="' . $contest["href"] . '"
        style="color: white"
        >' .
            $contest["event"] . '</a>
        <a
            href="https://calendar.google.com/calendar/u/0/r"
            ><img
                id="logos"
                src="assets/img/calendar-icon.webp"
        /></a>
    </td>';

        echo '<td>
        <a
        href="' . $contest["resource"] . '"
        style="color: white"
        >' .
            $contest["host"] . '</a> </td>';
    }
}

// Close the cURL session

curl_close($ch);
?>

<!-- <tr class="rows" id="row1">
                           
                            <td>10.03 Fri 12:04</td>
                            <td>43 days</td>
                            <td>45:42:46</td>
                            <td>
                                <img
                                    id="logos"
                                    class="codechef"
                                    src="assets/img/codechef.png"
                                    alt="codelogo"
                                />
                                Code Chef March Challenge 2021 Division 3
                                <a
                                    href="https://calendar.google.com/calendar/u/0/r"
                                    ><img
                                        id="logos"
                                        src="assets/img/calendar-icon.webp"
                                /></a>
                            </td>
                            <td class="links">
                                <a
                                    href="https://www.codechef.com/"
                                    style="color: white"
                                    >Codechef.com</a
                                >
                            </td>
                        </tr> -->