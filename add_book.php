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
			  "author" => array("id"=> $_POST['author']),
			  "title"=>$_POST['title'],
			  "release_date"=>date("Y-m-dTH:i:s",strtotime($_POST['release_date'])),
			  "description"=>$_POST['description'],
			  "isbn"=>$_POST['isbn'],
			  "format"=>$_POST['format'],
			  "number_of_pages"=>intval($_POST['pages'])
		);
		$response=create_book_request($_SESSION['token'],$parameters);

		header("location: add_book.php?msg=add_succ");
	}
	

	$response=author_list_curl_request($_SESSION['token'],"id");

	$author_list=json_decode($response);
		?>
      
           <div class="content-body">

		   			

        <!-- page content -->
        	     <div class="container-fluid">
				   <div class="row page-titles mx-0">
				
				   
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                       <li class="breadcrumb-item">Manage Books</li>
                       <li class="breadcrumb-item active"><a href="#">Add Book</a></li>
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
					  <strong>Success!</strong> Book Added Successfully.
					</div>
					<?php
					}
					?>
                             
										
							 <h4 class="card-title"> Add Book</h4>
							 <hr />
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" 
					enctype="multipart/form-data" method="post" onSubmit="return validate();">
					
					
                      <div class="row">
                      
					  <div class="form-group  col-md-6 col-sm-6 col-xs-12">
                        <label class="control-label" for="Brand Name ">Title 
						<span class="required">*</span>
                        </label>
                      
                          <input type="text" id="title" name="title" placeholder="Enter Title" 
							 class="form-control" required="required">
                      
                      </div>

					  <div class="form-group  col-md-6 col-sm-6 col-xs-12">
                        <label class="control-label" for="Brand Name ">Author 
						<span class="required">*</span>
                        </label>
                      
                          <select id="author" name="author" class="form-control" required="required">
								<option value="">--Select Author--</option>
								<?php
								foreach($author_list->items as $author)
								{
									?>
									<option value="<?php echo $author->id;?>"><?php echo $author->first_name." ".$author->last_name;?></option>
									<?php
								}
								?>
						  </select>
                      
                      </div>

					  <div class="form-group  col-md-6 col-sm-6 col-xs-12">
                        <label class="control-label" for="Brand Name ">Release Date 
						<span class="required">*</span>
                        </label>
                      
                          <input type="date" id="release_date" name="release_date" placeholder="Enter Release Date" 
							 class="form-control" required="required">
                      
                      </div>


					  <div class="form-group  col-md-6 col-sm-6 col-xs-12">
                        <label class="control-label" for="Brand Name ">Description 
						<span class="required">*</span>
                        </label>
                      
                          <input type="text" id="description" name="description" placeholder="Enter Description" 
							 class="form-control" required="required">
                      
                      </div>

					  <div class="form-group  col-md-6 col-sm-6 col-xs-12">
                        <label class="control-label" for="Brand Name ">ISBN 
						<span class="required">*</span>
                        </label>
                      
                          <input type="text" id="isbn" name="isbn" placeholder="Enter ISBN" 
							 class="form-control" required="required">
                      
                      </div>

					  <div class="form-group  col-md-6 col-sm-6 col-xs-12">
                        <label class="control-label" for="Brand Name ">Format 
						<span class="required">*</span>
                        </label>
                      
                          <input type="text" id="format" name="format" placeholder="Enter Format" 
							 class="form-control" required="required">
                      
                      </div>

					  <div class="form-group  col-md-6 col-sm-6 col-xs-12">
                        <label class="control-label" for="Brand Name ">No. of Pages 
						<span class="required">*</span>
                        </label>
                      
                          <input type="text" id="pages" name="pages" placeholder="Enter No. of Pages" 
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
		$("#title").focus();
	});
	
</script>
<!--//scrolling js-->
</body>
</html>
