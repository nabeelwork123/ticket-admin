<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta name="robots" content="">
	<title>Ticketing System</title>


	<?php include 'includes/style.php'; ?>

</head>

<body>

	<!-- Main Wrapper -->
	<div class="main-wrapper">



		<?php include 'includes/header.php'; ?>
		<?php include 'includes/sidebar.php'; ?>

		<!-- Page Wrapper -->
		<div class="page-wrapper">
			<div class="content">

				<!-- Breadcrumb -->
				<div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb mb-3">
					<div class="my-auto mb-2">
						<h2 class="mb-1">Notifications settings for Agents</h2>
						<nav>
							<ol class="breadcrumb mb-0">
								<li class="breadcrumb-item">
									<a href="index.php"><i class="ti ti-smart-home"></i> Dashboard</a>
								</li>
								<li class="breadcrumb-item">
								SLA Management 
								</li>
								<li class="breadcrumb-item active" aria-current="page">SLA Category Wise</li>
							</ol>
						</nav>
					</div>
					<div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">
					<!-- <div class="me-2 mb-2">
						<div class="dropdown">
							<a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
								<i class="ti ti-file-export me-1"></i>Export
							</a>
							<ul class="dropdown-menu  dropdown-menu-end p-3">
								<li>
									<a href="javascript:void(0);" class="dropdown-item rounded-1"><i class="ti ti-file-type-pdf me-1"></i>Export as PDF</a>
								</li>
								<li>
									<a href="javascript:void(0);" class="dropdown-item rounded-1"><i class="ti ti-file-type-xls me-1"></i>Export as Excel </a>
								</li>
							</ul>
						</div>
					</div> -->
					<div class="mb-2">
						<a href="#" data-bs-toggle="modal" data-bs-target="#add_leaves" class="btn btn-primary d-flex align-items-center">Create mew subcategory SLA </a>
					</div>
					<!-- <div class="head-icons ms-2">
						<a href="javascript:void(0);" class="" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Collapse" id="collapse-header">
							<i class="ti ti-chevrons-up"></i>
						</a>
					</div> -->
				</div>
				</div>
				<!-- /Breadcrumb -->

				<div class="card">
				<div class="card-header border-0">
						<div class="row">
							<div class="col-lg-10 col-md-12">
							<h4 class="card-title mt-2">SLAs set for categories </h4>
							</div>
							<div class="col-lg-2 col-md-12 text-end">
								<select class="form-select">
									<option selected>Search by category </option>
									<option></option>
									<option></option>
									<option></option>
								</select>
							</div>
						</div>
						
						</div>
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-bordered border-dark">
							<thead>
								<tr class="table-info">
								<th rowspan="4" colspan="1" class="mb-4">Category</th>
								<th rowspan="2" colspan="1">Subcategory</th>
								<th colspan="4" class="">Response Time</th>
								<th colspan="4" class="">Resolution Time</th>
								<th rowspan="2">Action</th>
								</tr>
								<tr>
								<th>Urgent</th>
								<th>High</th>
								<th>Medium</th>
								<th>Low</th>
								<th>Urgent</th>
								<th>High</th>
								<th>Medium</th>
								<th>Low</th>
								</tr>
							</thead>
							<tbody>
								<tr>
								<td>Networking</td>
								<td>IP Issue</td>
								<td>2 hr</td>
								<td>3 mins</td>
								<td>4 hrs</td>
								<td>30 mins</td>
								<td>15 mins</td>
								<td>45 mins</td>
								<td>2 days</td>
								<td>4 days</td>
								<td>
									<div class="d-flex justify-content-between">
										<a href="" class="fs-10 text-body"><i class="fa-solid fa-eye"></i></a>
										<a href="" class="fs-10 text-body"><i class="fa-solid fa-pen"></i></a>
										<a href="" class="fs-10 text-body"><i class="fa-solid fa-trash"></i></a>
									</div>	
								</td>
								</tr>
								<!-- Add more rows as needed -->
								<tr>
								<td>Networking</td>
								<td>IP Issue</td>
								<td>2 hr</td>
								<td>3 mins</td>
								<td>4 hrs</td>
								<td>30 mins</td>
								<td>15 mins</td>
								<td>45 mins</td>
								<td>2 days</td>
								<td>4 days</td>
								<td>
									<div class="d-flex justify-content-between">
										<a href="" class="fs-10 text-body"><i class="fa-solid fa-eye"></i></a>
										<a href="" class="fs-10 text-body"><i class="fa-solid fa-pen"></i></a>
										<a href="" class="fs-10 text-body"><i class="fa-solid fa-trash"></i></a>
									</div>	
								</td>
								</tr>

								</tr>
								<!-- Add more rows as needed -->
								<tr>
								<td>Networking</td>
								<td>IP Issue</td>
								<td>2 hr</td>
								<td>3 mins</td>
								<td>4 hrs</td>
								<td>30 mins</td>
								<td>15 mins</td>
								<td>45 mins</td>
								<td>2 days</td>
								<td>4 days</td>
								<td>
									<div class="d-flex justify-content-between">
										<a href="" class="fs-10 text-body"><i class="fa-solid fa-eye"></i></a>
										<a href="" class="fs-10 text-body"><i class="fa-solid fa-pen"></i></a>
										<a href="" class="fs-10 text-body"><i class="fa-solid fa-trash"></i></a>
									</div>	
								</td>
								</tr>
							</tbody>
							</table>

							
						</div>
					</div>
				</div>


			


	
			


				


			<!-- /Page Wrapper -->


			<?php include 'includes/footer.php'; ?>
		</div>
		<!-- /Main Wrapper -->
	</div>

	<?php include 'includes/script.php'; ?>
	</div>

</body>

</html>