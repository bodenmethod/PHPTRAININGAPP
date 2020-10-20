<?php include('includes/header.php'); ?>


<?php

//Include functions

//check to see if user if logged in else redirect to index page

?>
 
 
 
<?php
/************** Register new customer ******************/


//require database class files


//instatiating our database objects


//Collect and clean values from the form



//Hash password using our md5 function


//Check and see if user already exist in database using email so write query and bind email
         
    
     

//Call function to count row
   
         
//Display error if customer exist 
   
     
        
//Write query to insert values, bind values
    


//Execute and assign a varaible to the execution result // remember it returns true of false
    
            
         
//Comfirm execute and display error or success message
       



?>

  
    <div class="row">
      <div class="col-md-4 col-md-offset-4">
          <p class="pull-right" style="color:#777"> Adding Customer in Database</p><br>
      </div>
      <div class="col-md-4 col-md-offset-4">
           <form class="form-horizontal" role="form" method="post" action="">
            <div class="form-group">
            <label class="control-label col-sm-2" for="name"></label>
            <div class="col-sm-10">
              <input type="name" name="name" class="form-control" id="name" placeholder="Enter Full Name" required>
            </div>
          </div>
            <div class="form-group">
            <label class="control-label col-sm-2" for="salary"></label>
            <div class="col-sm-10">
              <input type="text" name="salary" class="form-control" id="country" placeholder="Enter Amount" required>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="email"></label>
            <div class="col-sm-10">
              <input type="email" name="username" class="form-control" id="email" placeholder="Enter Email" required>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="pwd"></label>
            <div class="col-sm-10"> 
              <input type="password" name="password" class="form-control" id="pwd" placeholder="Enter Password" required>
            </div>
          </div>

          <div class="form-group"> 
            <div class="col-sm-offset-2 col-sm-10">
              <div class="checkbox">
                <label><input type="checkbox" required> Accept</label>
              </div>
            </div>
          </div>

          <div class="form-group"> 
            <div class="col-sm-offset-2 col-sm-10 text-center">
              <button type="submit" class="btn btn-primary pull-right" name="submit_login">Register</button>
              <a class="pull-left btn btn-danger" href="customers.php"> Cancel</a>
            </div>
          </div>
</form>
          
  </div>
</div>
          
  </div>
</div>
  
<?php include('includes/footer.php'); ?>  