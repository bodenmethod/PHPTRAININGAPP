<?php include('includes/header.php'); ?>

<?php

//Include functions

//check to see if user if logged in else redirect to index page

?>

<?php 
/************** Fetching data from database using id ******************/


//require database class files


//instatiating our database objects


//Create a query to display customer inf // You must bind the id coming in from the url



    
//Get the id and keep it in a variable.


//Bind your id
   

//Fetching the data
   

?>



  <div class="well">
   
  <small class="pull-right"><a href="customers.php"> View Customers</a> </small>
 
  <?php //Collect the admin's name and put it in there using the session super global
    
    echo '<small class="pull-left" style="color:#337ab7;"> Admin Name here | Editing Customer</small>';

?>
    
    <h2 class="text-center">My Customers</h2> <hr>
    <br>
   </div> <hr>
   
    
   <div class="rows">
    <?php // call your display function to display session message on top page ?>
     <div class="col-md-6 col-md-offset-3">
          <?php  // Display result in the form values : ?>
          <br>
           <form class="form-horizontal" role="form" method="post" action="">
            <div class="form-group">
            <label class="control-label col-sm-2" for="name" style="color:#f3f3f3;">Fullname:</label>
            <div class="col-sm-10">
              <input type="name" name="name" class="form-control" id="name" value="" required>
            </div>
          </div>
            <div class="form-group">
            <label class="control-label col-sm-2" for="country" style="color:#f3f3f3;">Amount:</label>
            <div class="col-sm-10">
              <input type="country" name="salary" class="form-control" id="country" value="" required>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="email" style="color:#f3f3f3;">Email:</label>
            <div class="col-sm-10">
              <input type="email" name="email" class="form-control" id="email" value="" required>
            </div>
          </div>
          <div class="form-group ">
            <label class="control-label col-sm-2" for="pwd" style="color:#f3f3f3;">Password:</label>
            <div class="col-sm-10">
             <fieldset disabled> 
              <input type="password" name="password" class="form-control disabled" id="pwd" placeholder="Cannot Change Password" required>
             </fieldset> 
            </div>
          </div>

          <div class="form-group"> 
            <div class="col-sm-offset-2 col-sm-10">
              <input type="submit" class="btn btn-primary" name="update_form" value="Update">
              <button type="submit" class="btn btn-danger pull-right" name="delete_form">Delete</button>
            </div>
          </div>
          
          <?php //end  ?>
          
        </form>
          
  </div>
</div>  

<?php 
/************** Update data to database using id ******************/  
      
//Get field names from from and validate          
 
     
      //Write your query
     
     
     
     //binding values with your variable
    
     
     //Execute query statement to send it into the database
     
     
     //Confirm execution and set your messages to display as well has redirection and errors

     
     
     
    
/************** Delete data from database using id ******************/  
      
//Setting a confirmation message when the delete button is clicked // the result must be closable div that has a form with two buttons. one for no and one for yes. The no shoule close the closable div but the yes should proceed to deleting the customer, must delete the customer with the customer id         




//If the Yes Delete (confim delete) button is click from the closable div proceed to delete


    
    // get the id from the url
     
    
    
    //write your query
    
     
     
    //binding values with your  url id variable
     
   
     
    //Execute query statement to send it into the database
   
     
    //Confirm execution and display a delete success message and redirect admin to customers page


        
      
?>


</div>
 
</div>
  
</div>
<?php include('includes/footer.php'); ?>