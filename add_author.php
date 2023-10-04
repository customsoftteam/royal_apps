<?php
ob_start();
session_start();
$websiteTitle="Add Book";
include("inc/header.inc.php");

	$page='addBook';
	include('config/config.php'); 
	include('inc/left_menu.php'); 

	if(isset($_POST['submit']))
	{
		$parameters=array(
			  "first_name" => $_POST['first_name'],
			  "last_name"=>$_POST['last_name'],
			  "birthday"=>date("Y-m-dTH:i:s",strtotime($_POST['birth_date'])),
			  "biography"=>$_POST['biography'],
			  "gender"=>$_POST['gender'],
			  "place_of_birth"=>$_POST['place_of_birth']
		);
		$response=create_author_request($_SESSION['token'],$parameters);

		header("location: add_author.php?msg=add_succ");
	}
	


		?>
      
           <div class="content-body">

		   			

        <!-- page content -->
        	     <div class="container-fluid">
				   <div class="row page-titles mx-0">
				
				   
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                       <li class="breadcrumb-item">Manage Authors</li>
                       <li class="breadcrumb-item active"><a href="#">Add Author</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->
			
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">

							<?php
					if($_GET['msg']=='add_succ')
					{
					?>
					<div class="alert alert-success">
					  <strong>Success!</strong> Author Added Successfully.
					</div>
					<?php
					}
					?>
                             
										
							 <h4 class="card-title"> Add Author</h4>
							 <hr />
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" 
					enctype="multipart/form-data" method="post" onSubmit="return validate();">
					
					
                      <div class="row">
                      
					  <div class="form-group  col-md-6 col-sm-6 col-xs-12">
                        <label class="control-label" for="Brand Name ">First Name 
						<span class="required">*</span>
                        </label>
                      
                          <input type="text" id="first_name" name="first_name" placeholder="Enter First Name" 
							 class="form-control" required="required">
                      
                      </div>


                      <div class="form-group  col-md-6 col-sm-6 col-xs-12">
                        <label class="control-label" for="Brand Name ">Last Name 
						<span class="required">*</span>
                        </label>
                      
                          <input type="text" id="last_name" name="last_name" placeholder="Enter Last Name" 
							 class="form-control" required="required">
                      
                      </div>


					  

					  <div class="form-group  col-md-6 col-sm-6 col-xs-12">
                        <label class="control-label" for="Brand Name ">Birth Date 
						<span class="required">*</span>
                        </label>
                      
                          <input type="date" id="birth_date" name="birth_date" placeholder="Enter Birth Date" 
							 class="form-control" required="required">
                      
                      </div>


					  <div class="form-group  col-md-6 col-sm-6 col-xs-12">
                        <label class="control-label" for="Brand Name ">Biography 
						<span class="required">*</span>
                        </label>
                      
                          <input type="text" id="biography" name="biography" placeholder="Enter biography" 
							 class="form-control" required="required">
                      
                      </div>

					  <div class="form-group  col-md-6 col-sm-6 col-xs-12">
                        <label class="control-label" for="Brand Name ">Gender 
						<span class="required">*</span>
                        </label>
                      
                          <select id="gender" name="gender"
							 class="form-control" required="required">
                                <option value="">--Select Gender--</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                      
                      </div>

					  <div class="form-group  col-md-6 col-sm-6 col-xs-12">
                        <label class="control-label" for="Brand Name ">Birth Place 
						<span class="required">*</span>
                        </label>
                      
                          <input type="text" id="place_of_birth" name="place_of_birth" placeholder="Enter Birth Place" 
							 class="form-control" required="required">
                      
                      </div>

				
                      <div class="ln_solid"></div>
					  
                       <div class="form-group  col-md-12 col-sm-12 col-xs-12 text-center">
						  <button type="submit" name="submit" value="save" class="btn btn-success">Save</button>
                       
                      </div>
                    </div>
                    </form>
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

    
	
  </body>

<!----->
<?php 



?>

<script>
	//Setting focus on first field of form
	$(document).ready(function()
	{
		$("#first_name").focus();
	});
	
</script>
<!--//scrolling js-->
</body>
</html>
