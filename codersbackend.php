<?php

require "dbconnection.php";
$sql = "select * from hcodeusers";
$result = mysqli_query($conn, $sql);

while ($data = mysqli_fetch_assoc($result)) {
    $id = $data["id"];
    $username = $data["username"];
    $solved = 0;
    $time = $data["time"];
    $sqlsolved = "select * from hcodesolved where userid = $id";
    $resultsolved = mysqli_query($conn, $sqlsolved);
    $solved = mysqli_num_rows($resultsolved);
    echo  '
    <tr class="rows" id="row1">
                        <!-- <th scope="row"></th> -->
                        <td>' . $id . '</td>
                        <td>' . $username . '</td>
                        <td>' . $solved . '</td>
                        <td>' . $time . '</td>
                    </tr>';
}
