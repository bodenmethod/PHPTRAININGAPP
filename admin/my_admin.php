<?php include('includes/header.php'); ?>

<?php

//Include functions

//check to see if user if logged in else redirect to index page

?>

<?php 
/************** Fetching data from database using id ******************/

//require database class files


//instatiating our database objects


//Create a query to select all users to display in the table
   

    

//Fetch all data and keep in a result set



?>



  <div class="well">
   
  <small class="pull-right"><a href="customers.php"> View Customers</a> </small>
 
  <?php //Collect the admin's name and put it in there using the session super global
    
    echo '<small class="pull-left" style="color:#337ab7;"> Admin Name here | Veiwing / Editing</small>';
?>
    
    <h2 class="text-center">My Account</h2> <hr>
    <br>
   </div>
   
<div class="container"> 
   <div class="rows">
     
      <?php // call your display function to display session message on top page ?>
      
     <div class="col-md-9">
         
          <?php  // loop through your result set and fill in the form : ?>
          
          <br>
           <form class="form-horizontal" role="form" method="post" action="">
            <div class="form-group">
            <label class="control-label col-sm-2" for="name" style="color:#f3f3f3;">Fullname:</label>
            <div class="col-sm-10">
              <input type="name" name="name" class="form-control" id="name" value="" required>
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
              <input type="password" name="password" class="form-control disabled" id="pwd" value="" required>
             </fieldset> 
            </div>
          </div>

         <br>
          <div class="form-group"> 
            <div class="col-sm-offset-2 col-sm-10">
                <a class="btn btn-primary" href="edit_admin.php">Edit</a>
                <button type="submit" class="btn btn-danger pull-right" name="delete_form">Delete</button>
            </div>
          </div>
          
          
          
        </form>
          
  </div>
       <div class="col-md-3">
           <div style="padding: 20px;">
             <div class="thumbnail" >
              <a href="edit_admin.php">
               
                   <?php // Get the image form table and keep in a variable ?>
               
                <?php //echo  image folder and concatinate it with a style style="width:150px;height:150px">'; ?> 
              </a>
              <h4 class="text-center"><?php //echo fullname of admin  ?></4>
            </div>
           </div>
       </div>
       
       <?php //end php ?>
       
  </div>  

</div>

<?php 
  
/************** Deleting data from database when delete button is clicked ******************/  
      
      
//Setting a confirmation message when the delete button is clicked // the result must be closable div that has a form with two buttons. one for no and one for yes. The no shoule close the closable div but the yes should proceed to deleting the admin, must delete the admin with the admin id         




//If the Yes Delete (confim delete) button is click from the closable div proceed to delete


    
    // get the id from the url
     
    
    
    //write your query
    
     
     
    //binding values with your  url id variable
     
   
     
    //Execute query statement to send it into the database
   
     
    //Confirm execution and display a delete success message and redirect admin to index page


    
    

        
      
?>

         
         
          

</div>
 
</div>
  
</div>
<?php include('includes/footer.php'); ?>