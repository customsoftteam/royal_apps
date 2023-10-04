<?php
ob_start();
session_start();
include("inc/header.inc.php");

include('config/config.php');
	
include('inc/left_menu.php');
		
		
?>
<style>
.text-white
{
	color:white !important;
}
</style>
 <!--**********************************
            Content body start
        ***********************************-->
       <div class="content-body">
        <!-- page content -->
        	     <div class="container-fluid">
				   <div class="row page-titles mx-0">
				
				   
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="dashboard.php">Home</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->
			
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                             
                            <h2>Welcome, <?=$_SESSION['name']?></h2>
            
                        </div>
                    </div>
              </div>
            </div>
         
        </div>
        <!-- /page content -->
						
         </div>
       
     

        <!-- footer content -->
   	    <?php  include('inc/footer.inc.php'); ?>   
	   
      </div>
   