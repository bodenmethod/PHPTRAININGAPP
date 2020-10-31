<?php include('includes/header.php'); ?>


<?php

//Include functions
include('includes/functions.php');


?>

<?php 
/************** Fetching all data from database ******************/


//require database class files
require('includes/pdocon.php');

//instatiating our database objects
$db = new Pdocon;


//Create a query to select all users to display in the table
$db->query('SELECT * FROM users');   
    

//Fetch all data and keep in a result set
$results  =   $db->fetchMultiple(); 


?>



  <div class="container">

   <?php showmsg(); ?>
   
  <div class="jumbotron">
  
  <small class="pull-right"><a href="register_user.php"> Add Customer </a> </small>
 
  <?php //Collect session name and write a welcome message with the user session's name
  echo $_SESSION['user_data']['fullname'] 
  ?> | Admin
    
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
        
     <!-- loop through your result set and fill in the table : -->
    <?php foreach($results as $result) : ?>
          <tr>
            <td><?php echo $result['id'] ?></td>
            <td><?php echo $result['full_name'] ?></td>
            <td><?php echo $result['spending'] ?></td>
            <td><?php echo $result['email'] ?></td>
            <td><?php echo $result['password'] ?></td>
            <td><a href="reports.php?cus_id=<?php echo $result['id'] ?>" class='btn btn-primary'>View Report</a></td>
            <td><a href="edit.php?cus_id=<?php echo $result['id'] ?>" class='btn btn-danger'>Edit</a></td>
            
          </tr>
          
          <!-- end your loop -->
          <?php endforeach ; ?>
        </tbody>
     </table>
</div>
  </div>
  
</div>
  
  
<?php include('includes/footer.php'); ?>