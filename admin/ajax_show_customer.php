<?php include('includes/header.php'); ?>


<?php

//Include functions

//check to see if user if logged in else redirect to index page

?>



<?php 

/****************Get  customer info to ajax *******************/

//require database class files


//instatiating our database objects


//Create a query to display customer inf // You must bind the id coming in from the ajax data



    
//Get the id and keep it in a variable from the ajax


//Bind your id
   

//Fetching the data and keep it a row variable



//Display this result to ajax
    if($row){
        
        echo '  <div  class="table-responsive">
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr >
                                <th class="text-center">Customer Name</th>
                                <th class="text-center">Amount</th>
                                <th class="text-center">Email</th>
                            </tr>
                        </thead>
                        <tbody>
                           <tr class="text-center">
                            <td>' . $row['full_name'] . '</td>
                            <td>$ ' . $row['Spending_Amt'] . '</td>
                            <td>' . $row['email'] . '</td>
                          </tr>

                        </tbody>
                    </table>
                </div>';
    }



?>

