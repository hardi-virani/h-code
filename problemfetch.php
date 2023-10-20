<?php
require "dbconnection.php";

$sql = "select * from hcodeProblem";
$result=mysqli_query($conn,$sql);

echo mysqli_num_rows($result);
while( $problemdetail=mysqli_fetch_assoc($result))
{
    $pid = (int)$problemdetail["id"];
    $uid = (int)$_SESSION["id"];
    $sqlsolved = "select * from hcodesolved where problemid=$pid and userid=$uid";
    $resultsolved=mysqli_query($conn,$sqlsolved);
     
    echo'
    <form action="editor.php" method="get">
    <input name="id" type="hidden" value="'.$problemdetail["id"].'></input>
    <tr class="rows" name="row1">
                            <!-- <th scope="row"></th> -->
                            <td>'.$problemdetail["id"].'</td>
                            
                            <td><a href="" style="color: white">
                                '.$problemdetail["title"].'</a>
                                </td>  
                            <td>'.$problemdetail["difficulty"].'</td>
                            <td>'.$problemdetail["accepted"].'</td>
                            <td>'.$problemdetail["tag"].'</td>';
                            if(mysqli_num_rows($resultsolved)==1)
                            {
                                echo'
                                <td><button style="background-color: green;">solved</button></td>';
                            }
                            else{
                            echo '
                            <td><button>solve</button></td>
                            ';
                            }
                            echo'
                        </tr>
                      </form>';
}
