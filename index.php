<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta name="robots" content="">
	<title>Admin Dashboard | Home</title>


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
						<h2 class="mb-1">Admin Dashboard</h2>
						<nav>
							<ol class="breadcrumb mb-0">
								<li class="breadcrumb-item">
									<a href="index.php"><i class="ti ti-smart-home"></i></a>
								</li>
								<li class="breadcrumb-item">
									Dashboard
								</li>
								<li class="breadcrumb-item active" aria-current="page">Admin Dashboard</li>
							</ol>
						</nav>
					</div>
					<!-- <div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">
					<div class="me-2 mb-2">
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
					</div>
					<div class="mb-2">
						<a href="#" data-bs-toggle="modal" data-bs-target="#add_leaves" class="btn btn-primary d-flex align-items-center"><i class="ti ti-circle-plus me-2"></i>Add Leave</a>
					</div>
					<div class="head-icons ms-2">
						<a href="javascript:void(0);" class="" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Collapse" id="collapse-header">
							<i class="ti ti-chevrons-up"></i>
						</a>
					</div>
				</div> -->
				</div>
				<!-- /Breadcrumb -->


				<div class="row">
					<div class="col-xl-9 col-lg-12 col-md-12 col-12">

						<div class="row">

						<div class="col-xl-4 col-md-4">
						<div class="card">
							<div class="card-body ">
								<div class="tick-dash-card d-flex align-items-center justify-content-between">
									<div>
										<h3 class="mb-1 fs-24">26 </h3>
										<span class="fs-14">New Tickets </span>								
									</div>
									<div class="tick-dash-icon">
										<img src="assets/img/icons/new-ticket.png" class="img-fluid">
									</div>
								</div>
							
							</div>
						</div>
					</div>

					<div class="col-xl-4 col-md-4">
						<div class="card">
							<div class="card-body ">
							<div class="tick-dash-card d-flex align-items-center justify-content-between">
							<div>
							<h3 class="mb-1 fs-24">13</h3>
								<span class="fs-14 ">Tickets In Progress</span>
								</div>
									<div class="tick-dash-icon">
										<img src="assets/img/icons/ti-progress.png" class="img-fluid">
									</div>
							</div>
							</div>
						</div>
					</div>

					<div class="col-xl-4 col-md-4">
						<div class="card">
							<div class="card-body">
							<div class="tick-dash-card d-flex align-items-center justify-content-between">
							<div>
							<h3 class="mb-1 fs-24">09</h3>
								<span class="fs-14 ">Resolved Tickets</span>
									
							</div>
							
									<div class="tick-dash-icon">
										<img src="assets/img/icons/ti-resolved.png" class="img-fluid">
									</div>
							</div>
						</div>
					</div>
					</div>

					<div class="col-xl-6 col-md-6">
						<div class="card">
							<div class="card-body">
							<div class="tick-dash-card d-flex align-items-center justify-content-between">
							<div>
							<h3 class="mb-1 fs-24">3.67<span class="fs-12 fw-medium text-danger"><i class="fa-solid fa-caret-up me-1"></i>+5.3%</span></h3>
								<span class="fs-14">Avg. 1st Response Time</span>
								<p class="fs-12  mb-0">from last month </p>
								<!-- <p class="fs-12 mb-0">&nbsp; </p> -->
								</div>
							
							<div class="tick-dash-icon">
								<img src="assets/img/icons/ti-resolve.png" class="img-fluid">
							</div>
					</div>
						</div>
					</div>
					</div>

					<div class="col-xl-6 col-md-6">
						<div class="card">
							<div class="card-body">
							<div class="tick-dash-card d-flex align-items-center justify-content-between">
							<div>
							<h3 class="mb-1 fs-24">3.67<span class="fs-12 fw-medium text-danger"><i class="fa-solid fa-caret-up me-1"></i>+5.3%</span></h3>
								<span class="fs-14">Avg. Resolve Time</span>
								<p class="fs-12  mb-0">from last month </p>
								<!-- <p class="fs-12 mb-0">&nbsp; </p> -->
							</div>
							
							<div class="tick-dash-icon">
								<img src="assets/img/icons/ti-response.png" class="img-fluid">
							</div>
					</div>
						</div>
					</div>


						</div>
						</div>

					</div>

					<div class="col-xl-3 col-lg-12 px-md-0 col-12">

					
						<div class="card ">
							<div class="card-body">
								<div class="tick-dash-card d-flex justify-content-between mb-0">
									<div class="w-75">
								<h3 class="mb-1 fs-24">17</h3>
								<span class="fs-14 ">Overdue Tickets</span>
								</div>
								<div class="tick-dash-icon">
								<img src="assets/img/icons/ti-overdue.png" class="img-fluid">
							</div>
								</div>
								<!-- <p class="fs-12 mb-0">&nbsp; </p> -->
								<div class="ov-box">
									<div class="ov-box-inner">
									<span class=" ">24<span class="fs-10">Hrs</span></span>
									<p class="mt-3">7</p>
									<p class="mb-0 mt-3">tickets </p>
									</div>
									<div class="ov-box-inner">
									<span class="">48<span class="fs-10">Hrs</span></span>
									<p class="mt-3">7</p>
									<p class="mb-0 mt-3">tickets </p>
									</div>
									<div class="ov-box-inner" style="border:0;">
									<span class=" ">72<span class="fs-10">Hrs</span></span>
									<p class="mt-3">12</p>
									<p class="mb-0 mt-3">tickets </p>
									</div>
								</div>
							</div>
						</div>
					
					</div>
					

				</div>

				<div class="row d-none">

					<div class="col-xl-4 col-md-4">
						<div class="card flex-fill">
							<div class="card-body">
								<div class="d-flex align-items-center justify-content-between">
									<div class="w-75">
										<h3 class="mb-1 fs-24">86</h3>
										<span class="fs-14 fw-medium ">Total Tickets Today </span>

									</div>
									<div class="w-25 text-end">
										<img src="assets/img/icons/new-ticket.png" class="img-fluid">
									</div>
								</div>

							</div>
						</div>
					</div>

					<div class="col-xl-4 col-md-4">
						<div class="card flex-fill">
							<div class="card-body ">
								<div class="d-flex align-items-center justify-content-between">
									<div class="w-75">
										<h3 class="mb-1 fs-24">3</h3>
										<span class="fs-14 ">Open Tickets</span>
									</div>
									<div class="w-25 text-end">
										<img src="assets/img/icons/open-tickets.png" class="img-fluid">
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-xl-4 col-md-4">
						<div class="card flex-fill">
							<div class="card-body">
								<div class="d-flex align-items-center justify-content-between">
									<div class="w-75">
										<h3 class="mb-1 fs-24">22</h3>
										<span class="fs-14 ">In progress</span>
									</div>
									<div class="w-25 text-end">
										<img src="assets/img/icons/In-progress.png" class="img-fluid">
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-xl-4 col-md-4">
						<div class="card flex-fill">
							<div class="card-body">
								<div class="d-flex align-items-center justify-content-between">
									<div class="w-75">
										<h3 class="mb-1 fs-24">26</h3>
										<span class="fs-14 ">Resolved Tickets</span>
									</div>
									<div class="w-25 text-end">
										<img src="assets/img/icons/ti-resolved.png" class="img-fluid">
									</div>
								</div>
							</div>
						</div>
					</div>


					<div class="col-xl-4 col-md-4">
						<div class="card flex-fill">
							<div class="card-body">
								<div class="d-flex align-items-center justify-content-between">
									<div class="w-75">
										<h3 class="mb-1 fs-24">8</h3>
										<span class="fs-14 ">High Priority Tickets</span>
									</div>
									<div class="w-25 text-end">
										<img src="assets/img/icons/high-priority-tickets.png" class="img-fluid">
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-xl-4 col-md-4">
						<div class="card flex-fill">
							<div class="card-body">
								<div class="d-flex align-items-center justify-content-between">
									<div class="w-75">
										<h3 class="mb-1 fs-24">3</h3>
										<span class="fs-14 ">SLA Breaches</span>
									</div>
									<div class="w-25 text-end">
										<img src="assets/img/icons/sla-breaches.png" class="img-fluid">
									</div>
								</div>
							</div>
						</div>
					</div>


				</div>



				<div class="row px-2">
					<div class="card px-0">
						<div class="card-header bg-transparent ">
							<div class="d-flex align-items-center justify-content-between flex-wrap">
								<div class="flex-column">
									<h5 class="mb-1">Recent Tickets</h5>
									<!-- <p class="text-body fs-12">List of ticket open by Customers</p> -->
								</div>
								<div class="d-flex justify-content-end me-2">
									<!-- <a href="javascript:;" data-bs-toggle="offcanvas"  data-bs-target="#offcanvas1"class="btn btn-primary btn-sm h-25 me-0">Search by filters</a> -->


									<div class="dropdown mb-2 d-none">
										<a href="javascript:void(0);"
											class="btn btn-white border btn-sm d-inline-flex align-items-center"
											data-bs-toggle="dropdown">
											<i class="ti ti-calendar me-1"></i>Today
										</a>
										<ul class="dropdown-menu  dropdown-menu-end p-3">
											<li>
												<a href="javascript:void(0);" class="dropdown-item rounded-1">This
													Month</a>
											</li>
											<li>
												<a href="javascript:void(0);" class="dropdown-item rounded-1">This
													Week</a>
											</li>
											<li>
												<a href="javascript:void(0);" class="dropdown-item rounded-1">Today</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="card-body p-0">
							<div class="table-responsive table-responsive-lg">
								<table class="table ">
									<thead class="thead-light">
										<tr>

											<th scope="col">Ticket ID</th>
											<th scope="col">Employee Name</th>
											<th scope="col">Ticket Detail</th>
											<th scope="col">Category</th>
											<th scope="col">Status</th>

											<th scope="col">Action</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>
												<p class="mb-0 d-block"> 09834</p>
												<span class="badge bg-soft-primary">Low</span>
											</td>
											<td class="">
												<div class="d-flex align-items-start">
													<a href="assets/img/users/user-32.webp" data-fancycard="gallery"
														data-caption="" class="avatar avatar-lg">
														<img src="assets/img/users/user-32.webp"
															class="img-fluid rounded-3 " alt="img">
													</a>
													<div class="ms-2">
														<p class="text-dark mb-0 fs-12">James MIller </p>
														<span class="fs-12 d-block mb-0 fs-12">International Sales
														</span>
														<span class="fs-12 d-block mb-0 fs-12">Vice President</span>
														<p class="mb-0 fs-13">1st Floor / Seat no 22 </p>

													</div>
												</div>

											</td>

											<td>
												<p class="fs-12 text-dark mb-1">Unable to Connect to Office Wi-Fi</p>
												<div class="row">
													<div class="col-lg-6">
														<span class="fs-12 d-block mb-0 fs-12"><i>Created on:</i></span>
														<p class="mb-0 fs-12">12 Apr 2025</p>
														<p class="mb-0 fs-12">10:00 AM</p>
													</div>
													<div class="col-lg-6">
														<span class="fs-12 d-block mb-0 fs-12"><i>Due on:</i></span>
														<p class="mb-0 fs-12">12 Apr 2025</p>
														<p class="mb-0 fs-12">10:00 AM</p>

													</div>
												</div>
											</td>
											<td>
												<p class="fs-12 mb-0 text-dark fw-600">Hardware</p>
												<p class="fs-12 mb-0">Mouse</p>

											</td>
											<td>
												<p class="fs-12 d-inline-flex align-items-center mb-1">
													<i class="ti ti-circle-filled fs-10 me-1 text-danger"></i>Due today
												</p>
											</td>
										<td>
												<div class="btn-group  py-2">
													<button type="button"
														class="btn btn-outline-primary btn-sm dropdown-toggle"
														data-bs-toggle="dropdown" aria-expanded="false">
														Assign
													</button>
													<ul class="dropdown-menu  dropdown-menu-end p-3">
														<li><a class="dropdown-item" href="javascript:void(0);">Jack</a>
														</li>
														<li><a class="dropdown-item" href="javascript:void(0);">
																Oliver</a></li>
														<li><a class="dropdown-item"
																href="javascript:void(0);">Sarah</a></li>

													</ul>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<p class="mb-0 d-block"> 09835</p>
												<span class="badge bg-soft-primary">Low</span>
											</td>
											<td>
												<div class="d-flex align-items-start">
													<a href="assets/img/users/user-32.webp" data-fancycard="gallery"
														data-caption="" class="avatar avatar-lg">
														<img src="assets/img/users/user-33.webp"
															class="img-fluid rounded-3 " alt="img">
													</a>
													<div class="ms-2">
														<p class="text-dark fs-12 mb-0">Henry Full </p>
														<span class="fs-12  d-block mb-0">Aministration</span>
														<span class="fs-12 d-block mb-0">Manager</span>
														<p class="mb-0 fs-13">1st Floor / Seat no 18 </p>
													</div>
												</div>

											</td>

											<td>
												<p class="fs-12 text-dark mb-1">Frequent Wi-Fi Disconnection</p>
												<div class="row">
													<div class="col-lg-6">
														<span class="fs-12 d-block mb-0 fs-12"><i>Created on:</i></span>
														<p class="mb-0 fs-12">12 Apr 2025</p>
														<p class="mb-0 fs-12">10:00 AM</p>
													</div>
													<div class="col-lg-6">
														<span class="fs-12 d-block mb-0 fs-12"><i>Due on:</i></span>
														<p class="mb-0 fs-12">12 Apr 2025</p>
														<p class="mb-0 fs-12">10:00 AM</p>

													</div>
												</div>
											</td>
											</td>
											<td>
												<p class="fs-12 mb-0 text-dark fw-600">Hardware</p>
												<p class="fs-12 mb-0">Mouse</p>

											</td>
											<td>
												<p class="fs-12 d-inline-flex align-items-center mb-1">
													<i class="ti ti-circle-filled fs-10 me-1 text-danger"></i>Due today
												</p>
											</td>
										<td>
												<div class="btn-group  py-2">
													<button type="button"
														class="btn btn-outline-primary btn-sm dropdown-toggle"
														data-bs-toggle="dropdown" aria-expanded="false">
														Assign
													</button>
													<ul class="dropdown-menu  dropdown-menu-end p-3">
														<li><a class="dropdown-item" href="javascript:void(0);">Jack</a>
														</li>
														<li><a class="dropdown-item" href="javascript:void(0);">
																Oliver</a></li>
														<li><a class="dropdown-item"
																href="javascript:void(0);">Sarah</a></li>

													</ul>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<p class="mb-0 d-block"> 09836</p>
												<span class="badge bg-soft-primary">Low</span>
											</td>
											<td>
												<div class="d-flex align-items-start">
													<a href="assets/img/users/user-32.webp" data-fancycard="gallery"
														data-caption="" class="avatar avatar-lg">
														<img src="assets/img/users/user-34.webp"
															class="img-fluid rounded-3 " alt="img">
													</a>
													<div class="ms-2">
														<p class="text-dark fs-12 mb-0">Dickson Joe</p>
														<span class="fs-12 d-block mb-0">Brand</span>
														<span class="fs-12 d-block mb-0">Content writer</span>
														<p class="mb-0 fs-13">1st Floor / Seat no 05 </p>

													</div>
												</div>

											</td>

											<td>
												<p class="fs-12 text-dark mb-1">LAN Cable Not Detecting Network</p>
												<div class="row">
													<div class="col-lg-6">
														<span class="fs-12 d-block mb-0 fs-12"><i>Created on:</i></span>
														<p class="mb-0 fs-12">12 Apr 2025</p>
														<p class="mb-0 fs-12">10:00 AM</p>
													</div>
													<div class="col-lg-6">
														<span class="fs-12 d-block mb-0 fs-12"><i>Due on:</i></span>
														<p class="mb-0 fs-12">12 Apr 2025</p>
														<p class="mb-0 fs-12">10:00 AM</p>

													</div>
												</div>
											</td>
											</td>
											<td>
												<p class="fs-12 mb-0 text-dark fw-600">Hardware</p>
												<p class="fs-12 mb-0">Mouse</p>

											</td>
											<td>
												<p class="fs-13 d-inline-flex align-items-center mb-1">
													<i class="ti ti-circle-filled fs-10 me-1 text-secondary"></i>Not
													picked
												</p>
											</td>
										<td>
												<div class="btn-group  py-2">
													<button type="button"
														class="btn btn-outline-primary btn-sm dropdown-toggle"
														data-bs-toggle="dropdown" aria-expanded="false">
														Assign
													</button>
													<ul class="dropdown-menu  dropdown-menu-end p-3">
														<li><a class="dropdown-item" href="javascript:void(0);">Jack</a>
														</li>
														<li><a class="dropdown-item" href="javascript:void(0);">
																Oliver</a></li>
														<li><a class="dropdown-item"
																href="javascript:void(0);">Sarah</a></li>

													</ul>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<p class="mb-0 d-block"> 09837</p>
												<span class="badge bg-soft-primary">Low</span>
											</td>
											<td>
												<div class="d-flex align-items-start">
													<a href="assets/img/users/user-32.webp" data-fancycard="gallery"
														data-caption="" class="avatar avatar-lg">
														<img src="assets/img/users/user-35.webp"
															class="img-fluid rounded-3 " alt="img">
													</a>
													<div class="ms-2">
														<p class="text-dark fs-12 mb-0">Sarah Thompson</p>
														<span class="fs-12 d-block mb-0">Human Resources</span>
														<span class="fs-12 d-block mb-0">HR Manager</span>
														<p class="mb-0 fs-13">1st Floor / Seat no 18 </p>

													</div>
												</div>

											</td>

											<td>
												<p class="fs-12 text-dark mb-1">IP Conflict Error</p>
												<div class="row">
													<div class="col-lg-6">
														<span class="fs-12 d-block mb-0 fs-12"><i>Created on:</i></span>
														<p class="mb-0 fs-12">12 Apr 2025</p>
														<p class="mb-0 fs-12">10:00 AM</p>
													</div>
													<div class="col-lg-6">
														<span class="fs-12 d-block mb-0 fs-12"><i>Due on:</i></span>
														<p class="mb-0 fs-12">12 Apr 2025</p>
														<p class="mb-0 fs-12">10:00 AM</p>

													</div>
												</div>
											</td>
											<td>
												<p class="fs-12 mb-0 text-dark fw-600">Hardware</p>
												<p class="fs-12 mb-0">Mouse</p>

											</td>
											<td>
												<p class="fs-13 d-inline-flex align-items-center mb-1">
													<i class="ti ti-circle-filled fs-10 me-1 text-secondary"></i>Not
													picked
												</p>
											</td>
										<td>
												<div class="btn-group  py-2">
													<button type="button"
														class="btn btn-outline-primary btn-sm dropdown-toggle"
														data-bs-toggle="dropdown" aria-expanded="false">
														Assign
													</button>
													<ul class="dropdown-menu  dropdown-menu-end p-3">
														<li><a class="dropdown-item" href="javascript:void(0);">Jack</a>
														</li>
														<li><a class="dropdown-item" href="javascript:void(0);">
																Oliver</a></li>
														<li><a class="dropdown-item"
																href="javascript:void(0);">Sarah</a></li>

													</ul>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<p class="mb-0 d-block"> 09838</p>
												<span class="badge bg-soft-primary">Low</span>
											</td>
											<td>
												<div class="d-flex align-items-start">
													<a href="assets/img/users/user-32.webp" data-fancycard="gallery"
														data-caption="" class="avatar avatar-lg">
														<img src="assets/img/users/user-36.webp"
															class="img-fluid rounded-3 " alt="img">
													</a>
													<div class="ms-2">
														<p class="text-dark fs-12 mb-0">Emily Rodriguez</p>
														<span class="fs-12 d-block mb-0">Finance</span>
														<span class="fs-12 d-block mb-0">Finance Analyst</span>
														<p class="mb-0 fs-13">1st Floor / Seat no 17 </p>

													</div>
												</div>

											</td>

											<td>
												<p class="fs-12 text-dark mb-1">Network Printer Not Found</p>
												<div class="row">
													<div class="col-lg-6">
														<span class="fs-12 d-block mb-0 fs-12"><i>Created on:</i></span>
														<p class="mb-0 fs-12">12 Apr 2025</p>
														<p class="mb-0 fs-12">10:00 AM</p>
													</div>
													<div class="col-lg-6">
														<span class="fs-12 d-block mb-0 fs-12"><i>Due on:</i></span>
														<p class="mb-0 fs-12">12 Apr 2025</p>
														<p class="mb-0 fs-12">10:00 AM</p>

													</div>
												</div>
											</td>
											</td>
											<td>
												<p class="fs-12 mb-0 text-dark fw-600">Hardware</p>
												<p class="fs-12 mb-0">Mouse</p>

											</td>
											<td>
												<p class="fs-13 d-inline-flex align-items-center mb-1">
													<i class="ti ti-circle-filled fs-10 me-1 text-warning"></i>On going
												</p>
											</td>
										<td>
												<div class="btn-group  py-2">
													<button type="button"
														class="btn btn-outline-primary btn-sm dropdown-toggle"
														data-bs-toggle="dropdown" aria-expanded="false">
														Assign
													</button>
													<ul class="dropdown-menu  dropdown-menu-end p-3">
														<li><a class="dropdown-item" href="javascript:void(0);">Jack</a>
														</li>
														<li><a class="dropdown-item" href="javascript:void(0);">
																Oliver</a></li>
														<li><a class="dropdown-item"
																href="javascript:void(0);">Sarah</a></li>

													</ul>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<p class="mb-0 d-block"> 09839</p>
												<span class="badge bg-soft-primary">Low</span>
											</td>
											<td>
												<div class="d-flex align-items-start">
													<a href="assets/img/users/user-28.webp" data-fancycard="gallery"
														data-caption="" class="avatar avatar-lg">
														<img src="assets/img/users/user-18.webp"
															class="img-fluid rounded-3 " alt="img">
													</a>
													<div class="ms-2">
														<p class="text-dark fs-12 mb-0">Sophia Patel </p>
														<span class="fs-12 d-block mb-0">Human Resources</span>
														<span class="fs-12 d-block mb-0">Talent Acquisition
															Specialist</span>
														<p class="mb-0 fs-13">1st Floor / Seat no 35 </p>

													</div>
												</div>

											</td>

											<td>
												<p class="fs-12 text-dark mb-1">Access Denied to Shared Network Drive
												</p>
												<div class="row">
													<div class="col-lg-6">
														<span class="fs-12 d-block mb-0 fs-12"><i>Created on:</i></span>
														<p class="mb-0 fs-12">12 Apr 2025</p>
														<p class="mb-0 fs-12">10:00 AM</p>
													</div>
													<div class="col-lg-6">
														<span class="fs-12 d-block mb-0 fs-12"><i>Due on:</i></span>
														<p class="mb-0 fs-12">12 Apr 2025</p>
														<p class="mb-0 fs-12">10:00 AM</p>

													</div>
												</div>
											</td>
											</td>
											<td>
												<p class="fs-12 mb-0 text-dark fw-600">Hardware</p>
												<p class="fs-12 mb-0">Mouse</p>

											</td>
											<td>
												<p class="fs-12 d-inline-flex align-items-center mb-1">
													<i class="ti ti-circle-filled fs-10 me-1 text-warning"></i>On going
												</p>
											</td>
										<td>
												<div class="btn-group  py-2">
													<button type="button"
														class="btn btn-outline-primary btn-sm dropdown-toggle"
														data-bs-toggle="dropdown" aria-expanded="false">
														Assign
													</button>
													<ul class="dropdown-menu  dropdown-menu-end p-3">
														<li><a class="dropdown-item" href="javascript:void(0);">Jack</a>
														</li>
														<li><a class="dropdown-item" href="javascript:void(0);">
																Oliver</a></li>
														<li><a class="dropdown-item"
																href="javascript:void(0);">Sarah</a></li>

													</ul>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<p class="mb-0 d-block"> 09840</p>
												<span class="badge bg-soft-primary">Low</span>
											</td>
											<td>
												<div class="d-flex align-items-start">
													<a href="assets/img/users/user-32.webp" data-fancycard="gallery"
														data-caption="" class="avatar avatar-lg">
														<img src="assets/img/users/user-38.webp"
															class="img-fluid rounded-3 " alt="img">
													</a>
													<div class="ms-2">
														<p class="text-dark fs-12 mb-0">Isabella Morris</p>
														<span class="fs-12 d-block mb-0">Operations</span>
														<span class="fs-12 d-block mb-0">Project Coordinator</span>
														<p class="mb-0 fs-13">1st Floor / Seat no 42 </p>

													</div>
												</div>

											</td>

											<td>
												<p class="fs-12 text-dark mb-1">Unable to Ping Server</p>
												<div class="row">
													<div class="col-lg-6">
														<span class="fs-12 d-block mb-0 fs-12"><i>Created on:</i></span>
														<p class="mb-0 fs-12">12 Apr 2025</p>
														<p class="mb-0 fs-12">10:00 AM</p>
													</div>
													<div class="col-lg-6">
														<span class="fs-12 d-block mb-0 fs-12"><i>Due on:</i></span>
														<p class="mb-0 fs-12">12 Apr 2025</p>
														<p class="mb-0 fs-12">10:00 AM</p>

													</div>
												</div>
											</td>
											<td>
												<p class="fs-12 mb-0 text-dark fw-600">Hardware</p>
												<p class="fs-12 mb-0">Mouse</p>

											</td>
											<td>
												<p class="fs-13 d-inline-flex align-items-center mb-1">
													<i class="ti ti-circle-filled fs-10 me-1 text-success"></i>Resolved
												</p>
											</td>
										<td>
												<div class="btn-group  py-2">
													<button type="button"
														class="btn btn-outline-primary btn-sm dropdown-toggle"
														data-bs-toggle="dropdown" aria-expanded="false">
														Assign
													</button>
													<ul class="dropdown-menu  dropdown-menu-end p-3">
														<li><a class="dropdown-item" href="javascript:void(0);">Jack</a>
														</li>
														<li><a class="dropdown-item" href="javascript:void(0);">
																Oliver</a></li>
														<li><a class="dropdown-item"
																href="javascript:void(0);">Sarah</a></li>

													</ul>
												</div>
											</td>
										</tr>

									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>

				<div class="row mb-2">
					<div class="text-end">
						
						<div class="dropdown mb-2">
                                <a href="javascript:void(0);" class="btn btn-white bg-white border btn-sm d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                    <i class="ti ti-calendar me-1"></i>This Month
                                </a>
                                <ul class="dropdown-menu  dropdown-menu-end p-3">
                                
								<li><a class="dropdown-item" href="javascript:void(0);">Today</a></li>
										<li><a class="dropdown-item" href="javascript:void(0);">This week</a></li>
										<li><a class="dropdown-item" href="javascript:void(0);">This month</a></li>
										<li><a class="dropdown-item" href="javascript:void(0);">Last month</a></li>
                                </ul>
                            </div>
						
					</div>
				</div>


				<div class="row">
					<div class="col-xl-4 col-md-4">

						<div class="card">
							<div class="card-header d-flex justify-content-between">
								<h5 class="">Tickets by category</h5>
								<!-- <div class="dropdown mb-2">
                                <a href="javascript:void(0);" class="btn btn-white border btn-sm d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                    <i class="ti ti-calendar me-1"></i>This Month
                                </a>
                                <ul class="dropdown-menu  dropdown-menu-end p-3">
                                
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">This Week</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">Today</a>
                                    </li>
                                </ul>
                            </div> -->
								

							</div>
							<div class="card-body" style="height:500px;overflow-y:auto;">
								<div id="chart-pie"></div>
								<div class="row">
									<div class="col-xl-6">
										<div class="d-flex justify-content-between mb-3">
											<p class="fs-14 d-inline-flex align-items-center mb-1">
												<i class="ti ti-circle-filled fs-14 me-2 text-purple"></i>Network
											</p>
										</div>

										<div class="d-flex justify-content-between mb-3">
											<p class="fs-14 d-inline-flex align-items-center mb-1">
												<i class="ti ti-circle-filled fs-14 me-2 text-dark"></i>Hardware
											</p>
										</div>
									</div>
									<div class="col-xl-6">

										<div class="d-flex justify-content-between mb-3">
											<p class="fs-14 d-inline-flex align-items-center mb-1">
												<i class="ti ti-circle-filled fs-14 me-2 text-secondary"></i>Software
											</p>
										</div>

										<div class="d-flex justify-content-between mb-3">
											<p class="fs-14 d-inline-flex align-items-center mb-1">
												<i class="ti ti-circle-filled fs-14 me-2 text-dark"></i>Other
											</p>
										</div>
									</div>
								</div>



							</div>

						</div>
					</div>
					<div class="col-xl-4 col-md-4">
						<div class="card">
							<div class="card-header d-flex justify-content-between">
								<h5 class="">Tickets by department</h5>
								<!-- <div class="dropdown mb-2">
                                <a href="javascript:void(0);" class="btn btn-white border btn-sm d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                    <i class="ti ti-calendar me-1"></i>This Month
                                </a>
                                <ul class="dropdown-menu  dropdown-menu-end p-3">
                                
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">This Week</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">Today</a>
                                    </li>
                                </ul>
                            </div> -->
							</div>
							<div class="card-body" style="height:500px;overflow-y:auto;">
								<div id="chart-donut"></div>
								<div class="d-flex justify-content-between mb-3">
									<p class="fs-14 d-inline-flex align-items-center mb-1">
										<i class="ti ti-circle-filled fs-14 me-2 text-purple"></i>Marketing
									</p>
									<span class="fs-14 text-dark">41</span>
								</div>

								<div class="d-flex justify-content-between mb-3">
									<p class="fs-14 d-inline-flex align-items-center mb-1">
										<i class="ti ti-circle-filled fs-14 me-2 text-success"></i>IT
									</p>
									<span class="fs-14 text-dark">11</span>
								</div>

								<div class="d-flex justify-content-between mb-3">
									<p class="fs-14 d-inline-flex align-items-center mb-1">
										<i class="ti ti-circle-filled fs-14 me-2 text-info"></i>Finance
									</p>
									<span class="fs-14 text-dark">22</span>
								</div>
							</div>


						</div>

					</div>
					<div class="col-xl-4 col-md-4">
					<div class="card">
							<div class="card-header">
								<h5 class="">Tickets by status</h5>
							</div>
							<div class="card-body" style="height:500px;overflow-y:auto;">
							<div id="chart-donut-2"></div>

							<div class="row mt-4">
								<div class="col-xl-6 col-12">
								<div class="d-flex justify-content-between mb-3">
									<p class="fs-14 d-inline-flex align-items-center mb-1">
										<i class="ti ti-circle-filled fs-14 me-2 text-primary"></i>Due today
									</p>
									<span class="fs-14 text-dark">12</span>
								</div>

								<div class="d-flex justify-content-between mb-3">
									<p class="fs-14 d-inline-flex align-items-center mb-1">
										<i class="ti ti-circle-filled fs-14 me-2 text-secondary"></i>Not picked
									</p>
									<span class="fs-14 text-dark">11</span>
								</div>
								</div>
								<div class="col-xl-6 col-12">
								<div class="d-flex justify-content-between mb-3">
									<p class="fs-14 d-inline-flex align-items-center mb-1">
										<i class="ti ti-circle-filled fs-14 me-2 text-success"></i>On going
									</p>
									<span class="fs-14 text-dark">22</span>
								</div>
								<div class="d-flex justify-content-between mb-3">
									<p class="fs-14 d-inline-flex align-items-center mb-1">
										<i class="ti ti-circle-filled fs-14 me-2 text-warning"></i>Resolved
									</p>
									<span class="fs-14 text-dark">22</span>
								</div>
								</div>
							</div>
							

								
								<!-- <div class="progress progress-xl mb-4" role="progressbar" aria-valuenow="50"
									aria-valuemin="0" aria-valuemax="100">
									<div class="progress-bar bg-primary" style="width: 72%">
									</div>
								</div>
								<div class="progress progress-xl mb-4" role="progressbar" aria-valuenow="50"
									aria-valuemin="0" aria-valuemax="100">
									<div class="progress-bar bg-secondary" style="width: 59%">
									</div>
								</div>
								<div class="progress progress-xl mb-4" role="progressbar" aria-valuenow="50"
									aria-valuemin="0" aria-valuemax="100">
									<div class="progress-bar bg-success" style="width: 80%">
									</div>
								</div>


								<div class="d-flex justify-content-between mb-3">

									<div class="d-flex justify-content-between mb-3">
										<p class="fs-14 d-inline-flex align-items-center mb-1">
											<i class="ti ti-circle-filled fs-14 me-2 text-primary"></i>Open
										</p>
										<span class="fs-14 text-dark px-2">39</span>
									</div>

									<div class="d-flex justify-content-between mb-3">
										<p class="fs-14 d-inline-flex align-items-center mb-1">
											<i class="ti ti-circle-filled fs-14 me-2 text-secondary"></i>In Progress
										</p>
										<span class="fs-14 text-dark px-2">22</span>
									</div>

									<div class="d-flex justify-content-between mb-3">
										<p class="fs-14 d-inline-flex align-items-center mb-1">
											<i class="ti ti-circle-filled fs-14 me-2 text-success"></i>Resolved
										</p>
										<span class="fs-14 text-dark px-2">22</span>
									</div>
								</div> -->
							</div>
						</div>

					</div>
				</div>



				<div class="row">
					<div class="col-xl-8  col-lg-12">
					<div class="card">
							<div class="card-header d-flex justify-content-between">
								<h5 class="">Support team overview</h5>
								<!-- <div class="btn-group ">
									<button type="button" class="btn btn-primary  dropdown-toggle"
										data-bs-toggle="dropdown" aria-expanded="false">
										Filter
									</button>
									<ul class="dropdown-menu">
										<li><a class="dropdown-item" href="javascript:void(0);">Today</a></li>
										<li><a class="dropdown-item" href="javascript:void(0);">This week</a></li>
										<li><a class="dropdown-item" href="javascript:void(0);">This month</a></li>
										<li><a class="dropdown-item" href="javascript:void(0);">Last month</a></li>
									</ul>
								</div> -->
							</div>
							<div class="card-body" style="height:380px;overflow-y:auto;">
								<div class="table-responsive">
									<table class="table mb-0">
										<thead>
											<tr>
												<th>Team</th>
												<th>Assigned</th>
												<th>Avg. <br />Resolution</th>
												<th>New<br /> Tickets</th>
												<th>Tickets<br /> In Progress</th>
												<th>Resolved<br /> Tickets</th>
												<th>Overdue<br /> Tickets</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>
													<div class="d-flex align-items-center">
														<a href="assets/img/users/user-32.webp" data-fancycard="gallery"
															data-caption="" class="avatar avatar-sm me-2">
															<img src="assets/img/users/user-30.webp"
																class="img-fluid rounded-3 " alt="img">
														</a>
														<p class="text-dark mb-0 fs-12">Robert</p>
													</div>
												</td>
												<td>41</td>
												<td>92%</td>
												<td>10</td>
												<td>16</td>
												<td>18</td>
												<td><div class="hv-text position-relative">20
												<ul class="hv-list">
													<li>24 Hrs: 15</li>
													<li>48 Hrs: 3</li>
													<li>72 Hrs: 2</li>
												</ul> 
												</div> 
											</td>
											</tr>
											<tr>
												<td>
													<div class="d-flex align-items-center">
														<a href="assets/img/users/user-32.webp" data-fancycard="gallery"
															data-caption="" class="avatar avatar-sm me-2">
															<img src="assets/img/users/user-31.webp"
																class="img-fluid rounded-3 " alt="img">
														</a>
														<p class="text-dark mb-0 fs-12">Ashley</p>
													</div>
												</td>
												<td>34</td>
												<td>57%</td>
												<td>20</td>
												<td>26</td>
												<td>28</td>
												<td><div class="hv-text position-relative">20
												<ul class="hv-list">
													<li>24 Hrs: 15</li>
													<li>48 Hrs: 3</li>
													<li>72 Hrs: 2</li>
												</ul> 
												</div> 
											</td>
											</tr>
											<tr>
												<td>	<div class="d-flex align-items-center">
														<a href="assets/img/users/user-32.webp" data-fancycard="gallery"
															data-caption="" class="avatar avatar-sm me-2">
															<img src="assets/img/users/user-29.webp"
																class="img-fluid rounded-3 " alt="img">
														</a>
														<p class="text-dark mb-0 fs-12">William</p>
													</div>
													</td>
												<td>31</td>
												<td>99%</td>
												<td>30</td>
												<td>36</td>
												<td>38</td>
												<td><div class="hv-text position-relative">30
												<ul class="hv-list">
													<li>24 Hrs: 15</li>
													<li>48 Hrs: 5</li>
													<li>72 Hrs: 10</li>
												</ul> 
												</div> 
											</td>
											</tr>
											<tr>
											<td>	<div class="d-flex align-items-center">
														<a href="assets/img/users/user-32.webp" data-fancycard="gallery"
															data-caption="" class="avatar avatar-sm me-2">
															<img src="assets/img/users/user-28.webp"
																class="img-fluid rounded-3 " alt="img">
														</a>
														<p class="text-dark mb-0 fs-12">Heather</p>
													</div>
													</td>
												<td>29</td>
												<td>1%</td>
												<td>40</td>
												<td>46</td>
												<td>48</td>
												<td><div class="hv-text position-relative">40
												<ul class="hv-list">
													<li>24 Hrs: 25</li>
													<li>48 Hrs: 10</li>
													<li>72 Hrs: 5</li>
												</ul> 
												</div> 
											</td>
											</tr>
											<tr>
											<td>	<div class="d-flex align-items-center">
														<a href="assets/img/users/user-32.webp" data-fancycard="gallery"
															data-caption="" class="avatar avatar-sm me-2">
															<img src="assets/img/users/user-27.webp"
																class="img-fluid rounded-3 " alt="img">
														</a>
														<p class="text-dark mb-0 fs-12">Robert</p>
													</div>
													</td>
												<td>41</td>
												<td>92%</td>
												<td>70</td>
												<td>76</td>
												<td>78</td>
												<td><div class="hv-text position-relative">50
												<ul class="hv-list">
													<li>24 Hrs: 25</li>
													<li>48 Hrs: 15</li>
													<li>72 Hrs: 5</li>
												</ul> 
												</div> 
											</td>
											</tr>
											<tr>
											<td>	<div class="d-flex align-items-center">
														<a href="assets/img/users/user-32.webp" data-fancycard="gallery"
															data-caption="" class="avatar avatar-sm me-2">
															<img src="assets/img/users/user-24.webp"
																class="img-fluid rounded-3 " alt="img">
														</a>
														<p class="text-dark mb-0 fs-12">Ashely</p>
													</div>
													</td>
												<td>34</td>
												<td>57%</td>
												<td>90</td>
												<td>96</td>
												<td>98</td>
												<td><div class="hv-text position-relative">60
												<ul class="hv-list">
													<li>24 Hrs: 35</li>
													<li>48 Hrs: 10</li>
													<li>72 Hrs: 15</li>
												</ul> 
												</div> 
											</td>
											</tr>
											
											

										</tbody>
									</table>
								</div>
							</div>
						</div>

						

					</div>
					<div class="col-xl-4  col-lg-12">
					
						
							
							<div class="card flex-fill">
                        <div class="card-header pb-2 d-flex align-items-center justify-content-between flex-wrap">
                            <h5 class="mb-2">Recent Activity</h5>
                            <!-- <a href="" class="btn btn-light btn-md mb-2">View All</a> -->
                        </div>
                        <div class="card-body">
                            <div class="recent-item">
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex align-items-center w-100">
                                        <a href="javscript:void(0);" class="avatar  flex-shrink-0">
                                            <img src="assets/img/users/user-38.webp" class="rounded-3" alt="img">
                                        </a>
                                        <div class="ms-2 flex-fill">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <h6 class="fs-medium text-truncate"><a href="javscript:void(0);">Sarah Adams</a></h6>
                                                <p class="fs-13">15:05 AM</p>
                                            </div>
                                            <p class="fs-13">Marked laptop issue ticket as resolved </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="recent-item">
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex align-items-center w-100">
                                        <a href="javscript:void(0);" class="avatar  flex-shrink-0">
                                            <img src="assets/img/users/user-01.webp" class="rounded-3" alt="img">
                                        </a>
                                        <div class="ms-2 flex-fill">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <h6 class="fs-medium text-truncate"><a href="javscript:void(0);">Mark Spencer</a></h6>
                                                <p class="fs-13">9:06 AM</p>
                                            </div>
                                            <p class="fs-13">Ticket assigned to IT specialist Oliver Smith</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="recent-item">
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex align-items-center w-100">
                                        <a href="javscript:void(0);" class="avatar  flex-shrink-0">
                                            <img src="assets/img/users/user-11.webp" class="rounded-3" alt="img">
                                        </a>
                                        <div class="ms-2 flex-fill">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <h6 class="fs-medium text-truncate"><a href="javscript:void(0);">Michael Philips</a></h6>
                                                <p class="fs-13">9:15 AM</p>
                                            </div>
                                            <p class="fs-13">Added a comment: “Still nothing. No response</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="recent-item">
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex align-items-center w-100">
                                        <a href="javscript:void(0);" class="avatar  flex-shrink-0">
                                            <img src="assets/img/users/user-11.webp" class="rounded-3" alt="img">
                                        </a>
                                        <div class="ms-2 flex-fill">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <h6 class="fs-medium text-truncate"><a href="javscript:void(0);">Michael Philips</a></h6>
                                                <p class="fs-13">09:05 AM</p>
                                            </div>
                                            <p class="fs-13">Submitted a new ticket for laptop not turning on</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="recent-item">
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex align-items-center w-100">
                                        <a href="javscript:void(0);" class="avatar  flex-shrink-0">
                                            <img src="assets/img/users/user-20.webp" class="rounded-3" alt="img">
                                        </a>
                                        <div class="ms-2 flex-fill">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <h6 class="fs-medium text-truncate"><a href="javscript:void(0);">John Carlos </a></h6>
                                                <p class="fs-13">04:37 PM</p>
                                            </div>
                                            <p class="fs-13">Reopened a ticket about Outlook sync issue</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="recent-item">
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex align-items-center w-100">
                                        <a href="javscript:void(0);" class="avatar  flex-shrink-0">
                                            <img src="assets/img/users/user-08.webp" class="rounded-3" alt="img">
                                        </a>
                                        <div class="ms-2 flex-fill">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <h6 class="fs-medium text-truncate"><a href="javscript:void(0);">David Lee </a></h6>
                                                <p class="fs-13">03:15 PM</p>
                                            </div>
                                            <p class="fs-13">Closed ticket regarding office network connectivity</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
								<!-- <a href=""
									class="btn btn-outline-primary mb-3 d-flex align-items-center justify-content-center me-3">Create
									Ticket <i class="fa-solid fa-arrow-right-long ms-2 text-primary"></i></a>
								<a href=""
									class="btn btn-outline-primary mb-3 d-flex align-items-center justify-content-center me-3">Escalate
									Ticket <i class="fa-solid fa-arrow-right-long ms-2 text-primary"></i></a>
								<a href=""
									class="btn btn-outline-primary mb-3 d-flex align-items-center justify-content-center me-3">Assign
									/ Reassign Ticket <i class="fa-solid fa-arrow-right-long ms-2 text-primary"></i></a>
								<a href=""
									class="btn btn-outline-primary mb-3 d-flex align-items-center justify-content-center me-3">Close
									/Archieve Ticket <i class="fa-solid fa-arrow-right-long ms-2 text-primary"></i></a> -->

								<!-- <div class="d-flex justify-content-start">
									<a href="" class="btn btn-outline-primary mb-3 me-3">Create Ticket</a>
									<a href="" class="btn btn-outline-primary mb-3 me-3">Escalate Ticket</a>
									<a href="" class="btn btn-outline-primary mb-3 me-3">Assign / Reassign Ticket</a>
								</div>

								<div class="d-flex justify-content-start">
									<a href="" class="btn btn-outline-primary mb-3 me-3">Merge Ticket</a>
									<a href="" class="btn btn-outline-primary mb-3 me-3">Close /Archieve Ticket</a>
									<a href="" class="btn btn-outline-primary mb-3 me-3">Export Report</a>
								</div>

								<div class="d-flex justify-content-start">
									<a href="" class="btn btn-outline-primary mb-3 me-3">Close /Archieve Ticket</a>
								</div> -->
							</div>
						</div>
					</div>




				</div>

				<!-- /Page Wrapper -->


				<!-- Offcanvas 1 -->
				<div class="offcanvas  offcanvas-end" tabindex="-1" id="offcanvas1" aria-labelledby="label1">
					<!-- <div class="offcanvas-header">
						<h5 class="offcanvas-title" id="label1">Offcanvas 1</h5>
						<button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
					</div> -->
					<div class="offcanvas-body">
						<div class="">
							<div class="card-header">
								<div class="d-flex align-items-center justify-content-between mb-0">
									<span class="fs-20 fw-bold text-dark">Search by:</span>
									<!-- <a href="#" class="fs-18 text-success">Clear</a> -->
								</div>
							</div>
							<div class="card-body">
								<div class="mb-0">
									<label class="form-label  mb-1"></label>
									<input type="text" class="form-control" placeholder="Ticket ID">
								</div>
								<!-- <div class="mb-3 d-none">
									<label class="form-label  mb-1">Ticket ID</label>
									<p class="text-dark">128B</p>
									
								</div> -->
								<div class="mb-0">
									<label class="form-label  mb-1"></label>
									<input type="text" class="form-control" placeholder="Employee name ">
									<!-- <select class="form-select">
										<option></option>
										<option></option>
										<option></option>
										<option></option>
									</select> -->
								</div>
								<div class="mb-0">
									<label class="form-label  mb-1"></label>
									<input type="text" class="form-control" placeholder="Subject">
									<!-- <select class="form-select">
										<option></option>
										<option></option>
										<option></option>
										<option></option>
									</select> -->
								</div>
								<div class="mb-0">
									<label class="form-label  mb-1"></label>
									<input type="text" class="form-control" placeholder="Floor Number ">
									<!-- <select class="form-select">
										<option></option>
										<option></option>
										<option></option>
										<option></option>
									</select> -->
								</div>
								<div class="mb-0">
									<label class="form-label  mb-1"></label>
									<select class="form-select" placeholder="">
										<option selected>Status</option>
										<option>Open</option>
										<option>Close</option>

									</select>
								</div>
								<div class="mb-0">
									<label class="form-label  mb-1"></label>
									<select class="form-select" placeholder="">
										<option selected>Priority</option>
										<option>High</option>
										<option>Medium</option>
										<option>Low</option>
									</select>
								</div>
								<div class="mb-0">
									<label class="form-label mb-1"> </label>
									<select class="form-select" placeholder="">
										<option selected>Category</option>
										<option>Hardware</option>
										<option>Software</option>
									</select>
								</div>
								<div class="mb-2">
									<label class="form-label  mb-1"> </label>
									<select class="form-select" placeholder="">
										<option selected>Sub category</option>
										<option>Mouse</option>
										<option>Keyboard</option>
										<option>Figma</option>
									</select>
								</div>
								<div class="mb-2 rangg">
									<label class="form-label  mb-1">Created on </label>
									<input type="text" name="daterange" class="form-control"
										value="01/01/2018 - 01/15/2018" />
								</div>

								<div class="mb-4 rangg">
									<label class="form-label  mb-1">Due on</label>
									<input type="text" name="daterange" class="form-control"
										value="01/01/2018 - 01/15/2018" />

								</div>

								<!-- <div class="mb-3">
									<label class="form-label mb-1">Companies</label>
									<input type="text" class="form-control" placeholder="">
								</div>

								<div class="mb-3">
									<label class="form-label mb-1">Tags</label>
									<input type="text" class="form-control" placeholder="">
								</div> -->

								<div class="d-flex justify-content-start mt-2">
									<button type="button" class="btn btn-primary btn-md fs-12 text-uppercase"
										data-bs-dismiss="offcanvas">Apply filters</button>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Offcanvas 1 -->



				<?php include 'includes/footer.php'; ?>
			</div>
			<!-- /Main Wrapper -->
		</div>


		<?php include 'includes/script.php'; ?>
		<script>
			$(function () {
				$('input[name="daterange"]').daterangepicker({
					opens: 'left'
				}, function (start, end, label) {
					console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
				});
			});
		</script>

</body>

</html>