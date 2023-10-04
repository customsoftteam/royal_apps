<?php

ob_start();

session_start();
set_time_limit(0);
$websiteTitle = "List Category";

include("inc/header.inc.php");

include("config/config.php");


if ($_SESSION['userid'] == '') {

	header("Location: index.php");

	exit;
}

$page = 'author_list';

include('inc/left_menu.php');

if($_GET['action']=='delete')
	{
		$response=delete_author($_SESSION['token'],$_GET['id']);

		header("location: author_list.php?msg=del_succ");
	}

$response=author_list_curl_request($_SESSION['token'],"id");

$response=json_decode($response);



?>

<!-- page content -->

<div class="content-body">


	<div class="container-fluid">

		<div class="row page-titles mx-0">

			<div class="col p-md-0">

				<ol class="breadcrumb">

					<li class="breadcrumb-item"><a href="javascript:void(0)">Royal Apps >> </a></li>

					<li class=""><a href="list_asset.php"> &nbsp;List Authors</a></li>

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
					  <strong>Success!</strong> Author deleted Successfully.
					</div>
					<?php
					}
					?>

						<h4 class="card-title">Author List</h4>

						<div class="text-right mt-btn">

						</div>

						<br>

						<div class="table-responsive">

							<table id="datatable-fixed-header" class="table table-striped table-bordered zero-configuration">

								<thead>

									<tr>

										<th>ID</th>

										<th>First Name</th>
										<th>Last Name</th>
										<th>Birthday</th>
										<th>Gender</th>
										<th>Birth Place</th>
								
										<th>Action</th>

									</tr>

								</thead>

								<tbody>

									<?php

									foreach($response->items as $row)
									{

										$response=single_author_curl_request($_SESSION['token'],$row->id);

										$author=json_decode($response);

										$no_books=isset($author->books)?count($author->books):0;
									?>

										<tr>

											<td><?php echo $row->id;?></td>
											<td><?php echo $row->first_name;?></td>
											<td><?php echo $row->last_name;?></td>

											<td><?php echo date("Y-m-d",strtotime($row->birthday));?></td>
											<td><?php echo $row->gender;?></td>
											<td><?php echo $row->place_of_birth;?></td>
											
											<td>
											<a target="_blank" href="view_author.php?id=<?php echo $row->id; ?>"><i class="fa fa-eye"></i></a>
											
											<?php
											if($no_books<=0)
											{
											?>
											<a onclick="return confirm('Are you sure to delete this Author?');" href="author_list.php?action=delete&id=<?php echo $row->id; ?>"><i class="fa fa-trash"></i></a>
											<?php
											}
											?>	
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

<!-- footer content -->

<?php include('inc/footer.inc.php'); ?>



</div>

</body>



</html>