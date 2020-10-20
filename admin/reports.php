<?php include('includes/header.php'); ?>


<?php

//Include functions

//check to see if user if logged in else redirect to index page



?>
<?php

//Get ID and pass it on to ajax
    

?>
    
    
<script>

$(document).ready(function(){
    
    
    //Call function to display result menu at a certain interval
    
    
    
    //Call function to display Customer information at a certain interval
    
   
    
    
    //Get id from php to javascript
    
        
        
    //create a function to display result menu using .ajax()
  

    
    
    //create a function to get and Display customer information .ajax()
    
    
 
    
});
    
</script>
    
    


    <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="page-header">
                           <?php //Collect the admin's name and put it in there using the session super global?> Admin Name | You are Admin
                        </h3>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-envelope"></i><a href="msg-customer.php">Message Customer</a>  
                            </li>
                            <small class="pull-right"><a href="customers.php"> View Customers </a> </small>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                 <!-- FIRST ROW WITH PANELS -->

                <!-- /.row -->
                <div class="row" id="hold_top_info">
                 
              
                </div> 

                <div class="row">
                    
                    <div class="col-lg-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title text-center"><i class="fa fa-money fa-fw"></i> Customer Information</h3>
                            </div>
                            <div id="customerinfo" class="panel-body" style="background-color:lightgrey;">
                                 <!-- Customer information from Ajax Here -->
                              
                                <div class="text-right">
                                    <a href="#"><i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title text-center"><i class="fa fa-money fa-fw"></i> Transactions Details</h3>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th>Order #</th>
                                                <th>Order Date</th>
                                               
                                                <th>Amount (USD)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>3326</td>
                                                <td>10/21/2013</td>
                                         
                                                <td>$321.33</td>
                                            </tr>
                                            <tr>
                                                <td>3325</td>
                                                <td>10/21/2013</td>
                                           
                                                <td>$234.34</td>
                                            </tr>
                                            <tr>
                                                <td>3324</td>
                                                <td>10/21/2013</td>
                                         
                                                <td>$724.17</td>
                                            </tr>
                                            <tr>
                                                <td>3323</td>
                                                <td>10/21/2013</td>
                                        
                                                <td>$23.71</td>
                                            </tr>
                                      
                                        </tbody>
                                    </table>
                                </div>
                                <div class="text-right">
                                    <a href="#"><i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title text-center"><i class="fa fa-money fa-fw"></i> Update Spending Amount</h3>
                            </div>
                            <div id="alert_success" class="panel-body">
   
                                          <br>
                                          
                                            <form method="post" class="form-horizontal" role="form" action="ajax_form_post.php" id="updatedata">
                                                  <div class="form-group">
                                                        <label class="control-label col-sm-2" for="salary" style="color:#777;">Amt</label>
                                                        <div class="col-sm-10">
                                                          <input type="text" name="salary" class="form-control" id="salary" placeholder="Udpate Amount" required>
                                                        </div>
                                                  </div>
                                                  <div class="form-group">
                                                        <div class="col-sm-10">
                                                          <input type="hidden" name="c_id" class="form-control" id="user_id" value="" required>
                                                        </div>
                                                  </div>

                                                  <div class="form-group"> 
                                                    <div class="col-sm-offset-2 col-sm-10">
                                                      <input type="submit" class="btn btn-primary" name="update_customer" value="submit"  id="">
                                                    </div>
                                                  </div>
                                            </form>
                                            
                                <div class="text-right">
                                    <a href="#"><i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                    <script>
            /************** Updating data to database using id ******************/ 
                    
                    $(document).ready(function(){ 

                        //Post Data to Database


                            //Prevent Form from sending Data by itself and refreshing the page


                            //Collect all data from the form 
                        

                            //Get the action value from the form
                           

                            //Create you .post() and reset the form values
                        
                           




                               


                    });

                </script>
 
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->
<?php include('includes/footer.php'); ?>