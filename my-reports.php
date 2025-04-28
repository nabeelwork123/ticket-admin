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
						<h2 class="mb-1">My reports</h2>
						<nav>
							<ol class="breadcrumb mb-0">
								<li class="breadcrumb-item">
									<a href="/index"><i class="ti ti-smart-home"></i></a>
								</li>
								<li class="breadcrumb-item">
									Dashboard
								</li>
								<li class="breadcrumb-item active" aria-current="page">My reports</li>
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

			
				<div class="row g-1">
					<div class="col-xl-2 col-md-3">
						<div class="card flex-fill reportBox">
							<div class="card-body">
							<h3 class="mb-1 fs-24">47 <span class="fs-12 fw-medium text-danger"><i class="fa-solid fa-caret-up me-1"></i>+5.3%</span></h3>
								<span class="fs-14 fw-medium text-body">Tickets Resolved</span>
								<p class="fs-12 mb-0">Compared to last month</p>
							</div>
						</div>
					</div>

					<div class="col-xl-2 col-md-3">
						<div class="card flex-fill reportBox">
							<div class="card-body">
							<h3 class="mb-1 fs-24">69<span class="fs-12 fw-medium text-danger"><i class="fa-solid fa-caret-up me-1"></i>+5.3%</span></h3>
								<span class="fs-14 fw-medium text-body">Tickets Assigned</span>
								<p class="fs-12 text-body mb-0">Compared to last month</p>
							</div>
						</div>
					</div>

					

					<div class="col-xl-2 col-md-3">
						<div class="card flex-fill reportBox">
							<div class="card-body">
							<h3 class="mb-1 fs-24">07<span class="fs-12 fw-medium text-danger"><i class="fa-solid fa-caret-up me-1"></i>+5.3%</span></h3>
								<span class="fs-14 fw-medium text-body"> Missed deadlines</span>
								<p class="fs-12 text-body mb-0">  Compared to last month </p>
							</div>
						</div>
					</div>

					<div class="col-xl-2 col-md-3">
						<div class="card flex-fill reportBox">
							<div class="card-body">
							<h3 class="mb-1 fs-24">02:30<span class="fs-12 fw-medium text-danger"><i class="fa-solid fa-caret-up me-1"></i>+5.3%</span></h3>
								<span class="fs-14 fw-medium text-body">Avg. Resolution Time</span>
								<p class="fs-12 text-body mb-0">Compared to last month</p>
							</div>
						</div>
					</div>

					<div class="col-xl-2 col-md-3">
						<div class="card flex-fill reportBox">
							<div class="card-body">
							<h3 class="mb-1 fs-24">4.5<span class="fs-12 fw-medium text-danger"><i class="fa-solid fa-caret-up me-1"></i>+5.3%</span></h3>
								<span class="fs-14 fw-medium text-body">User Rating Avg.</span>
								<p class="fs-12 text-body mb-0">Compared to last month</p>
							</div>
						</div>
					</div>

					<div class="col-xl-2 col-md-3">
						<div class="card flex-fill reportBox">
							<div class="card-body">
							<h3 class="mb-1 fs-24">13<span class="fs-12 fw-medium text-danger"><i class="fa-solid fa-caret-up me-1"></i>+5.3%</span></h3>
								<span class="fs-14 fw-medium text-body">Reopened Tickets</span>
								<p class="fs-12 text-body mb-0">Compared to last month</p>
							</div>
						</div>
					</div>

				</div>
			
              


				<div class="row mb-4">
					<div class="col-xl-12 col-md-12">
						<div class="card flex-fill overflow-hidden">
							<div class="card-header">
								<div class="d-flex align-items-center justify-content-between flex-wrap">
									<h5 class="">Tickets Summary </h5>
									<div class="dropdown mb-2">
										<a href="javascript:void(0);"
											class="btn btn-white border btn-sm d-inline-flex align-items-center"
											data-bs-toggle="dropdown">
											<i class="ti ti-calendar me-1"></i>Select Range
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
							<div class="card-body">
								<div class="row">
									<div class="col-lg-3 ps-0 align-self-start">
									<div class="row">
											<div class="col-lg-12 col-md-6 mb-3">
												<div class="card b-0 shadow-none m-0">
													<div class="card-body p-3">
														<div class="fw-500">
															<p class="text-mute mt-0 mb-2"><i
																	class="fa fa-fw fa-square fs-12"
																	style="color: #664dc9;"></i> Avg. Tickets Picked </p>
															<h2 class="fw-500 m-0">1,525</h2>
														</div>
													</div>
												</div>
											</div>
											<div class="col-lg-12 col-md-6 mb-3">
												<div class="card b-0 shadow-none m-0">
													<div class="card-body p-3">
														<div class="fw-500">
															<p class="text-mute mt-0 mb-2"><i
																	class="fa fa-fw fa-square fs-12"
																	style="color: #f26522;"></i> Avg. Tickets Solved</p>
															<h2 class="fw-500 m-0">1,280</h2>
														</div>
													</div>
												</div>
											</div>
											<div class="col-lg-12 col-md-6">
												<div class="card b-0 shadow-none m-0">
													<div class="card-body p-3">
														<div class="fw-500">
															<p class="text-mute mt-0 mb-2">
																<i class="fa fa-fw fa-square fs-12" style="color:#f4d03f;"></i> Avg Tickets Reopened </p>
															<h2 class="fw-500 m-0">200</h2>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-9 p-0 bs-1" style="position: relative;">
									<!-- <div id="mixed-chart" class="chart-set"></div> -->
									<div  id="chart-bar"></div>
									</div>
								</div>
								<!-- <div class="est-img">
							 <img src="assets/img/ticketing/chart1.png" class="img-fluid">
							 </div> -->

							</div>
						</div>
					</div>
					
				</div>


				<div class="row">
					<!-- Chart -->
					<div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="">Ticket by first reply time</h5>
                    </div>
                    <div class="card-body">
					<div id="chart-pie" class="h-200"></div>
                    </div>
                </div>
            </div>
            <!-- /Chart -->
					<!-- <div class="col-xl-6">
						<div class="card b-1 overflow-hidden">
							<div class="card-header no-border">
								<h5 class="">Employees satisfaction on tickets</h5>
							</div>
							<div class="card-body">
								<div class="row">
									<div class="col-6 be-1 bb-1 ">
										<div class="card border border-0 shadow-none ps-10 px-2 py-2">
											<div>
												<p class="text-mute m-0 mb-3">Tickets opened</p>
												<h3 class="mb-0 fw-500 l-h-50">180 tickets</h3>
											</div>
										</div>
									</div>
									<div class="col-6 bb-1 ">
										<div class="card shadow-none ps-10">
										<div class="d-flex align-items-center justify-content-between px-4 py-3">
											
											<div class="avatar  me-15 w-25 h-100  text-center align-content-center me-10">
												<i class="fs-34 fa fa-thumbs-up text-success"></i>
											</div>
												<div>
													<p class="text-mute m-0">Positive</p>
													<h3 class="mb-0 fw-500">75%</h3>
												</div>
											</div>
											<div class="progress mt-0 mb-0" role="progressbar"
												aria-label="Example 1px high" aria-valuenow="75" aria-valuemin="0"
												aria-valuemax="100" style="height: 5px">
												<div class="progress-bar bg-success" style="width: 75%"></div>
											</div>
										</div>
									</div>
									<div class="col-6 be-1 ">
										<div class="card shadow-none pe-10 mt-20">
										<div class="d-flex align-items-center justify-content-between px-4 py-3">
											
											<div class="avatar  me-15 w-25 h-100  text-center align-content-center me-10">
												<i class="fs-34 fa fa-thumbs-up text-warning"></i>
											</div>
											<div>
												<p class="text-mute m-0">Neutral</p>
												<h3 class="mb-0 fw-500">20%</h3>
											</div>
										</div>
											<div class="progress mt-0 mb-0" role="progressbar"
												aria-label="Example 1px high" aria-valuenow="75" aria-valuemin="0"
												aria-valuemax="100" style="height: 5px">
												<div class="progress-bar bg-warning" style="width: 20%"></div>
											</div>
										</div>
									</div>
									<div class="col-6">
										<div class="card shadow-none ps-10 mt-20">
										<div class="d-flex align-items-center justify-content-between px-4 py-3">
											
											<div class="avatar  me-15 w-25 h-100  text-center align-content-center me-10">
												<i class="fs-34 fa fa-thumbs-up text-danger"></i>
											</div>
												<div>
													<p class="text-mute m-0">Negative</p>
													<h3 class="mb-0 fw-500">5%</h3>
												</div>
											</div>
											<div class="progress mt-0 mb-0" role="progressbar"
												aria-label="Example 1px high" aria-valuenow="75" aria-valuemin="0"
												aria-valuemax="100" style="height: 5px">
												<div class="progress-bar bg-danger" style="width: 5%"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div> -->

					<div class="col-xl-6">
					<div class="card b-1 overflow-hidden">
							<div class="card-header no-border">
								<h5 class="">Employees satisfaction on tickets</h5>
							</div>
							<div class="card-body">
								<div class="row">
									<div class="col-6 be-1 bb-1 ">
										<div class="card border border-0 shadow-none ps-10 px-2 py-2">
											<div>
												<p class="text-mute m-0 mb-3">Tickets picked</p>
												<h3 class="mb-0 fw-500 l-h-50">180 tickets</h3>
											</div>
										</div>
									</div>
									<div class="col-6 bb-1 ">
										<div class="card shadow-none ps-10">
										<div class="d-flex align-items-center justify-content-between px-md-4 px-2 py-md-3 py-2">
											
											<div class="avatar  me-15 w-25 h-100  text-center align-content-center me-10">
												<i class="fa fa-thumbs-up text-success"></i>
											</div>
												<div>
													<p class="text-mute m-0">Positive</p>
													<h3 class="mb-0 fw-500">75%</h3>
												</div>
											</div>
											<div class="progress mt-0 mb-0" role="progressbar"
												aria-label="Example 1px high" aria-valuenow="75" aria-valuemin="0"
												aria-valuemax="100" style="height: 5px">
												<div class="progress-bar bg-success" style="width: 75%"></div>
											</div>
										</div>
									</div>
									<div class="col-6 be-1 ">
										<div class="card shadow-none pe-10 mt-20">
										<div class="d-flex align-items-center justify-content-between px-md-4 px-2 py-md-3 py-2">
											
											<div class="avatar  me-15 w-25 h-100  text-center align-content-center me-10">
												<i class="fa fa-thumbs-up text-warning"></i>
											</div>
											<div>
												<p class="text-mute m-0">Neutral</p>
												<h3 class="mb-0 fw-500">20%</h3>
											</div>
										</div>
											<div class="progress mt-0 mb-0" role="progressbar"
												aria-label="Example 1px high" aria-valuenow="75" aria-valuemin="0"
												aria-valuemax="100" style="height: 5px">
												<div class="progress-bar bg-warning" style="width: 20%"></div>
											</div>
										</div>
									</div>
									<div class="col-6">
										<div class="card shadow-none ps-10 mt-20">
										<div class="d-flex align-items-center justify-content-between px-md-4 px-2 py-md-3 py-2">
											
											<div class="avatar  me-15 w-25 h-100  text-center align-content-center me-10">
												<i class="fa fa-thumbs-up text-danger"></i>
											</div>
												<div>
													<p class="text-mute m-0">Negative</p>
													<h3 class="mb-0 fw-500">5%</h3>
												</div>
											</div>
											<div class="progress mt-0 mb-0" role="progressbar"
												aria-label="Example 1px high" aria-valuenow="75" aria-valuemin="0"
												aria-valuemax="100" style="height: 5px">
												<div class="progress-bar bg-danger" style="width: 5%"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

                </div>

			
				</div>

				




				<!-- /Page Wrapper -->


				<?php include 'includes/footer.php'; ?>
			</div>
			<!-- /Main Wrapper -->
			 </div>
			

			<?php include 'includes/script.php'; ?>

</body>

</html>