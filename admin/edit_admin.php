<?php include('includes/header.php'); ?>


<?php

//Include functions

//check to see if user if logged in else redirect to index page

?>
   
   
    <div class="row">
      <div class="col-md-4 col-md-offset-4">
      </div>
      <div class="col-md-4 col-md-offset-4">
           <form class="form-horizontal" role="form" method="post" action="<?php $_SERVER["PHP_SELF"]; ?>" enctype="multipart/form-data">
           
           <?php 
               
               /************** Fetching data from database using id ******************/


                //require database class files


                //instatiating our database objects


                //Create a query to display customer inf // You must bind the id coming in from the url




                //Get the admin email from the session super global and keep it in a variable.


                //Bind your email


                //Fetching the data and display it in the form value fields
               
          
             
               
    
            //: ?>
               
            <div class="form-group">
            <label class="control-label col-sm-2" for="name"></label>
            <div class="col-sm-10">
              <input type="name" name="name" class="form-control" id="name" value="" required>
            </div>
          </div>
          
          <div class="form-group">
            <label class="control-label col-sm-2" for="email"></label>
            <div class="col-sm-10">
              <input type="email" name="username" class="form-control" id="email" value="" required>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="pwd"></label>
            <div class="col-sm-10"> 
              <input type="password" name="password" class="form-control" id="pwd" placeholder="Confirm Password" required>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="image"></label>
            <div class="col-sm-10">
              <input type="file" name="image" id="image" placeholder="Choose Image">
            </div>
          </div>

          <div class="form-group"> 
            <div class="col-sm-offset-2 col-sm-10 text-center">
              <button type="submit" class="btn btn-primary pull-right" name="submit_update">Update</button>
              <a class="pull-left btn btn-danger" href="my_admin.php">Cancel</a>
            </div>
          </div>
          
          <?php // end your php ?>
</form>
          
<?php
          
/************** Update data to database using id ******************/  
          
      
//Get field names from from and validate          
        
           
     //Getting image and move images to admin_image folders
          
     
     //Write your query
     
     
     
     //binding values with your variable
    
     
     //Execute query statement to send it into the database
     
     
     //Confirm execution and set your messages to display as well has redirection and errors


?>
          
          
          
  </div>
</div>
          
  </div>
</div>
  
<?php include('includes/footer.php'); ?>  