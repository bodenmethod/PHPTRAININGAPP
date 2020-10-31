<?php include('includes/header.php'); ?>

<?php

//Include functions
include('includes/functions.php');


?>

<?php 
/************** Fetching data from database using id ******************/
      if(isset($_GET['cus_id'])){

        $user_id     =   $_GET['cus_id'];

      }

        //require database class files
        require('includes/pdocon.php');

        //instatiating our database objects
        $db = new Pdocon;

        //Create a query to display customer info // You must bind the id coming in from the url
        $db->query("SELECT * FROM users WHERE id = :id");

        //Get the id and keep it in a variable. Bind your id
        $db->bindvalue(':id', $user_id, PDO::PARAM_INT);

        //Fetching the data and display it in the form value fields
        $row = $db->fetchSingle();


?>



  <div class="well">
   
  <small class="pull-right"><a href="customers.php"> View Customers</a> </small>
 
  <?php //Collect the admin's name and put it in there using the session super global
  echo $_SESSION['user_data']['fullname'] 
  ?> | Editing Customer

    
    <h2 class="text-center">My Customers</h2> <hr>
    <br>
   </div> <hr>
   
    
   <div class="rows">
    <?php showmsg(); ?>
     <div class="col-md-6 col-md-offset-3">
          <?php  // Display result in the form values :
            if($row) :
            ?>
          <br>
           <form class="form-horizontal" role="form" method="post" action="edit.php?cus_id=<?php echo $user_id ?>">
            <div class="form-group">
            <label class="control-label col-sm-2" for="name" style="color:#f3f3f3;">Fullname:</label>
            <div class="col-sm-10">
              <input type="name" name="name" class="form-control" id="name" value="<?php echo $row['full_name'] ?>" required>
            </div>
          </div>
            <div class="form-group">
            <label class="control-label col-sm-2" for="country" style="color:#f3f3f3;">Amount:</label>
            <div class="col-sm-10">
              <input type="country" name="salary" class="form-control" id="country" value="<?php echo $row['spending'] ?>" required>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="email" style="color:#f3f3f3;">Email:</label>
            <div class="col-sm-10">
              <input type="email" name="email" class="form-control" id="email" value="<?php echo $row['email'] ?>" required>
            </div>
          </div>
          <div class="form-group ">
            <label class="control-label col-sm-2" for="pwd" style="color:#f3f3f3;">Password:</label>
            <div class="col-sm-10">
             <fieldset disabled> 
              <input type="password" name="password" class="form-control disabled" id="pwd" placeholder="Cannot Change Password" value="<?php echo $row['full_name'] ?>" required>
              <!-- DO NOT ECHO PASSWORD IN REAL WORLD APP -->
             </fieldset> 
            </div>
          </div>

          <div class="form-group"> 
            <div class="col-sm-offset-2 col-sm-10">
              <input type="submit" class="btn btn-primary" name="update_customer" value="Update">
              <button type="submit" class="btn btn-danger pull-right" name="delete_customer">Delete</button>
            </div>
          </div>
          
          <?php //end
          endif;
          ?>
          
        </form>
          
  </div>
</div>  

<?php 
/************** Update data to database using id ******************/  
      
      //Get field names from form and validate          
 
      //Write your query
    
     //binding values with your variable
    
     //Execute query statement to send it into the database
     
     //Confirm execution and set your messages to display as well has redirection and errors


/*************UPDATE ADMIN ******************/

if(isset($_POST['update_customer'])){

  $raw_name       = cleandata($_POST['name']);
  $raw_amount     = cleandata($_POST['amount']);
  $raw_email      = cleandata($_POST['email']);

  $c_name         = sanitize($raw_name);
  $c_amount       = valint($raw_amount);
  $c_email        = valemail($raw_email);

  //Write query to insert values, bind values
  $db->query("UPDATE users SET full_name=:fullname, email=:email, spending=:amount WHERE id=:id");

  $db->bindvalue(':id', $user_id, PDO::PARAM_INT);
  $db->bindvalue(':fullname', $c_name, PDO::PARAM_STR);
  $db->bindvalue(':email', $c_email, PDO::PARAM_STR);
  $db->bindvalue(':amount', $c_amount, PDO::PARAM_INT);
  
//Execute and assign a varaible to the execution result 
// remember it returns true of false
  $run_update  =  $db->execute();

           
//Confirm execute and display error or success message
  if($run_update){

    redirect('customers.php');

    keepmsg('<div class="alert alert-success text-center" role="alert"><strong>Success!</strong>
    Customer updated successfully.
  </div>');

  }else{

    redirect('customers.php');

    keepmsg('<div class="alert alert-dange text-center" role="alert">
    Update unsuccessful. Please try again.
  </div>');

  }

}



/************** Delete data from database using id ******************/  
      
//Setting a confirmation message when the delete button is clicked // the result must be closable div that has a form with two buttons. one for no and one for yes. The no should close the closable div but the yes should proceed to deleting the customer, must delete the customer with the customer id 

 //If the Yes Delete (confim delete) button is click from the closable div proceed to delete

    // get the id from the url
   
    //write your query
    
    //binding values with your  url id variable
     
    //Execute query statement to send it into the database
   
    //Confirm execution and display a delete success message and redirect admin to customers page

if(isset($_POST['delete_customer'])){

  keepmsg('<div class="alert alert-danger text-center">
          
          <strong>Please confirm?</strong> This will delete your account.
          
          <br><br>
          
          <a href="#" class="btn btn-default" data-dismiss="alert" aria-label="close">Do NOT delete</a>
          <form method="post" action="edit.php"/>
          <input type="hidden" value="' . $user_id .'" name="id">
          
          <br>
          
          <input type="submit" name="delete_user" value="Yes, Delete" class="btn btn-danger">
          </form>
          
          </div>');

}     
      

//If the Yes Delete (confim delete) button is click from the closable div proceed to delete
    if(isset($_POST['delete_user'])){

    // get the id from the url
      $id = $_POST['id'];
    
    //write your query
    $db->query("DELETE FROM users WHERE id = :id");
  
    //binding values with your url id variable
    $db->bindvalue(':id', $id, PDO::PARAM_INT);
      
    //Execute query statement to send it into the database
    $run  =  $db->execute();
     
    //Confirm execution and display a delete success message and redirect admin to index page
    if($run){

      redirect('customers.php');

      keepmsg('<div class="alert alert-success text-center">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      <strong>Success!</strong> User successfully deleted. 
    </div>');

    }else{

      keepmsg('<div class="alert alert-danger text-center">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      <strong>Sorry!</strong> User with ID ' . $id . ' Could not be deleted. 
    </div>');

    }


    }
   
      
?>


</div>
 
</div>
  
</div>
<?php include('includes/footer.php'); ?>