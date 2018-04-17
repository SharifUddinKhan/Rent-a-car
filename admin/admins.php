<?php include 'includes/admin_header.php'; ?>

    <div id="wrapper">
<?php include 'includes/navigation.php'; ?>
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                    
    					 <h1 class="page-header">
                            User Details
                            
                        </h1>
                        
                        
                       <?php 
                       
                       		if(isset($_GET['source'])){
                       			
                       			$source = $_GET['source'];
                       		}else {
                       			$source = "";
                       		}
                       		
                       		switch($source) {
                       			
                       			   case 'addadmin';
                       			   include 'includes/addadmin.php';
                       			   break;
                       			   
                       			   case 'editadmin';
                       			   include 'includes/editadmin.php';
                       			   break;
                       			   
                       			   case '340';
                       			   echo "Nice 340";
                       			   break;
                       			   
                       			   default: 
                       			   	include 'includes/viewAllAdmin.php';
                       			   
                       			   break;
                       		}
                       
                       ?>
                                                    
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
<?php include 'includes/admin_footer.php';?>