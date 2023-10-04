<?php
ob_start();
session_start();
$websiteTitle="View Author";
include("inc/header.inc.php");
?>
 
       
<?php 
	$page='viewAuthor';
	include('config/config.php'); 
	include('inc/left_menu.php'); 
	

	if($_GET['action']=='delete')
	{
		$response=delete_book($_SESSION['token'],$_GET['id']);

		header("location: view_author.php?msg=del_succ&id=".$_GET['author_id']);
	}
	
	$response=single_author_curl_request($_SESSION['token'],$_GET['id']);

	$author=json_decode($response);



		?>
      
           <div class="content-body">
        <!-- page content -->
        	     <div class="container-fluid">
				   <div class="row page-titles mx-0">
				
				   
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                       <li class="breadcrumb-item">Author</li>
                       <li class="breadcrumb-item active"><a href="#">View Author</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->
			
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">

							<?php
					if($_GET['msg']=='del_succ')
					{
					?>
					<div class="alert alert-success">
					  <strong>Success!</strong> Book deleted Successfully.
					</div>
					<?php
					}
					?>
                             
										
					<h4 class="card-title"> View Author</h4>
							 <hr />
                   
					
                      <div class="row">
                      
					  <div class="form-group  col-md-2 col-sm-12 col-xs-12">
                        <label class="control-label" for="Brand Name ">First Name 
						
                        </label>
                      
                      
                      </div>
					  <div class="form-group  col-md-10 col-sm-12 col-xs-12">
                       
                      
                         <?php echo $author->first_name;?>
                      
                      </div>

					  <div class="form-group  col-md-2 col-sm-2 col-xs-12">
                        <label class="control-label" for="Brand Name ">Last Name 
						
                        </label>
                      
                        
                      
                      </div>
					  <div class="form-group  col-md-10 col-sm-2 col-xs-12">
                        
                      
                         <?php echo $author->last_name;?>
                      
                      </div>

					  <div class="form-group  col-md-2 col-sm-2 col-xs-12">
                        <label class="control-label" for="Brand Name ">Birthday 
						
                        </label>
                      
                        
                      
                      </div>
					  <div class="form-group  col-md-10 col-sm-2 col-xs-12">
                       
                      
                         <?php echo date("Y-m-d",strtotime($author->birthday));?>
                      
                      </div>

					  <div class="form-group  col-md-2 col-sm-2 col-xs-2">
                        <label class="control-label" for="Brand Name ">Gender
						
                        </label>
                      
                        
                      
                      </div>
					  <div class="form-group  col-md-10 col-sm-2 col-xs-2">
                        
                      
                         <?php echo $author->gender;?>
                      
                      </div>

					  <div class="form-group  col-md-2 col-sm-2 col-xs-2">
                        <label class="control-label" for="Brand Name ">Birth Place 
						
                        </label>
                      
                        
                      
                      </div>
					  <div class="form-group  col-md-10 col-sm-2 col-xs-2">
                                             
                         <?php echo $author->place_of_birth;?>
                      
                      </div>
					  <div class="form-group  col-md-12 col-sm-12 col-xs-12"></div>
</div>
					  <hr>
					  <div class="row">
					  <h2>Books</h2><br>
					  <div class="col-md-12">
					  <table id="datatable-fixed-header" class="table table-striped table-bordered zero-configuration">
							<thead>
								<tr>
									<th>Id</th>
									<th>Title</th>
									<th>Release Date</th>
									<th>Description</th>
									<th>ISBN</th>
									<th>Format</th>
									<th>No. of Pages</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php
								foreach($author->books as $book)
								{
								?>
								<tr>
									<td><?php echo $book->id;?></td>
									<td><?php echo $book->title;?></td>
									<td><?php echo $book->release_date;?></td>
									<td><?php echo $book->description;?></td>
									<td><?php echo $book->isbn;?></td>
									<td><?php echo $book->format;?></td>
									<td><?php echo $book->number_of_pages;?></td>
									<td>
											
											<a onclick="return confirm('Are you sure to delete this Book?');" href="view_author.php?action=delete&author_id=<?php echo $_GET['id']; ?>&id=<?php echo $book->id; ?>"><i class="fa fa-trash"></i></a>
											</td>
								</tr>
								<?php
								}
								?>
							</tbody>
					</table>
							</div>
							</div>
					  
					                 
						
                   
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

</body>
</html>
