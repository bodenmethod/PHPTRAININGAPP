<?php include('includes/header.php'); ?>


<?php

//Include functions

//check to see if user if logged in else redirect to index page


?>

<?php 
/************** Fetching all data from database ******************/


//require database class files


//instatiating our database objects


//Create a query to select all users to display in the table
   

    

//Fetch all data and keep in a result set
 


?>



  <div class="container">

   <?php // call your display function to display session message on top page ?>
   
  <div class="jumbotron">
  
  <small class="pull-right"><a href="register_user.php"> Add Customer </a> </small>
 
  <?php //Collect session name and write a welcome message with the user session's name ?>
    
    <h2 class="text-center">Customers</h2> <hr>
    <br>
     <table class="table table-bordered table-hover text-center">
        <thead >
          <tr>
            <th class="text-center">User ID</th>
            <th class="text-center">Full Name</th>
            <th class="text-center">Spending</th>
            <th class="text-center">Email</th>
            <th class="text-center">Password</th>
            <th class="text-center">Report</th>
          </tr>
        </thead>
        <tbody>
    <?php  // loop through your result set and fill in the table : ?>
          <tr>
            <td>user id here</td>
            <td>fullname</td>
            <td>Spending amount</td>
            <td>email</td>
            <td>password</td>
            <td><a href="reports.php" class='btn btn-primary'>View Report</a></td>
            <td><a href="edit.php" class='btn btn-danger'>Edit</a></td>
            
          </tr>
          
          <?php //end your loop ?>
        </tbody>
     </table>
</div>
  </div>
  
</div>
  
  
<?php include('includes/footer.php'); ?>