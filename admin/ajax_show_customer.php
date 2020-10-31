<?php include('includes/header.php'); ?>

<?php

//Include functions
include('includes/functions.php');

?>

<?php 

/****************Get  customer info to ajax *******************/

// Collect id from AJAX url 
$id = $_GET['cid'];

//require database class files
require('includes/pdocon.php');

//instatiating our database objects
$db = new Pdocon;

//Create a query to select all users to display in the table
$db->query('SELECT * FROM users where id=:id');   

$db->bindvalue(':id', $id, PDO::PARAM_INT);

//Fetch all data and keep in a row variable
$row  =   $db->fetchSingle(); 



//Display this result to ajax
    if($row){
        
        echo '  <div  class="table-responsive">
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr >
                                <th class="text-center">Name</th>
                                <th class="text-center">Amount</th>
                                <th class="text-center">Email</th>
                            </tr>
                        </thead>
                        <tbody>
                           <tr class="text-center">
                            <td>' . $row['full_name'] . '</td>
                            <td>$ ' . $row['spending'] . '</td>
                            <td>' . $row['email'] . '</td>
                          </tr>

                        </tbody>
                    </table>
                </div>';
    }



?>

