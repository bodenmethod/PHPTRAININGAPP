<?php include('includes/header.php'); ?>


<?php

//Include functions

//check to see if user if logged in else redirect to index page

?>



<?php 

/****************Get  customer info to ajax *******************/

//require database class files


//instatiating our database objects


//write a stametment that will check if a field name coming in from the ajax post is set and then Create a query to update user // You must bind the id coming in from the ajax data


    
//Get the id and keep it in a variable from the ajax


//Bind your id
   

//Execute and keep the execution result in a row variable



//send echo message to ajax
  

            if($row){

                 echo "<p class='bg-success text-center' style='font-weight:bold;'>User Updated </p>";
    
             }else{
                
                echo "<p class='bg-danger text-center'>User Update not Successfull</p>";
                
            }    
                

        }

?>