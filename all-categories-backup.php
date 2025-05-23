<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta name="robots" content="">
	<title>Admin Dashboard | All Categories </title>


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
						<h2 class="mb-1">All Categories </h2>
						<nav>
							<ol class="breadcrumb mb-0">
								<li class="breadcrumb-item">
									<a href="index.php"><i class="ti ti-smart-home"></i></a>
								</li>
								<li class="breadcrumb-item">
									Categories management
								</li>
								<li class="breadcrumb-item active" aria-current="page">All categories </li>
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

					<div class="imp-hvr">
						<div class="imp-hover-trigger d-flex justify-content-end" style="position: relative;">
							<a href="javascript:;" class="imp-nt">Important Notes <i
									class="fa-solid fa-circle-exclamation"></i></a>

							<div class="imp-hvr-box">
								<div class="row">
									<div class="col-lg-12 mb-2">
										<span class="fs-16 d-block fw-bold text-dark">Default SLA:</span>
										<p class="fs-12 text-body">Each ticket management system has a default SLA. This
											will be the default whenever a ticket is created in your ticket management
											system. You also have the option of selecting a different default SLA for
											specific sub-categories. You can do that by going on SLAs by categoies tab.
										</p>
									</div>

									<div class="col-lg-12 mb-2">
										<span class="fs-16 d-block fw-bold text-dark">Reminders Policy:</span>
										<p class="fs-12 text-body">A standard reminder policy will applied on all
											tickets and categories before the Response Time and Resolve Time are
											reached. The reminder emails can be tailored to your needs by navigating to
											the Notifications tab.</p>
									</div>

									<div class="col-lg-12 mb-2">
										<span class="fs-16 d-block fw-bold text-dark">Escalation Rules:</span>
										<p class="fs-12 text-body">Standard escalation rules will be applied on tickets
											and categories in case of SLA violations. You can customize the emails
											dispatched during such violations through the Notifications tab.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /Breadcrumb -->



				<div class="card bg-transparent shadow-none border-0 px-0 mb-0">
					<div class="card-header bg-transparent border-0 px-0 mb-0">
						<span class="fs-18 text-dark fw-bold mb-0"> All categories</span>
					</div>
				</div>




				<div class=" ">
					<div class="card-body p-0 ">
						<div class="accordions-items-seperate cst-accordian" id="accordionSpacingExample">
							<div class="accordion-item">
								<h2 class="accordion-header" id="headingSpacingOne">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
										data-bs-target="#SpacingOne" aria-expanded="false" aria-controls="SpacingOne">
										IT support
										<div class="a-crown-box">
											<span class="fs-12 px-2"><i class="fa-solid fa-crown"></i></span>
											<span class="fs-12">Muhammad Fareed</span>
											<a class="fs-12 px-2" href="javascript:;" data-bs-toggle="modal"
												data-bs-target="#exampleModaledit"><i class="fa-solid fa-pen"></i></a>
										</div>

										<span class="cts-badge">3 subcategories</span>
									</button>
								</h2>
								<div id="SpacingOne" class="accordion-collapse collapse "
									aria-labelledby="headingSpacingOne" data-bs-parent="#accordionSpacingExample">
									<div class="accordion-body py-xl-2 px-xl-4 px-lg-1 px-md-0">

										<div class="row mt-2">
											<div class="col-lg-4 ">
												<!-- <button class="btn  collapsed d-flex justify-content-between rounded-0 w-100"
													type="button" data-bs-toggle="collapse"
													data-bs-target="#collapseExample" aria-expanded="false"
													aria-controls="collapseExample" id="toggleButton">
													<span id="toggleIcon">+</span> 
												</button>

												<div class="collapse" id="collapseExample">
													
												</div> -->
												<div class="faq-sidebar">
													<div class="faq-sidebar-header">
														<span class="fs-16 text-dark">Sales Issue <a href="javascript:;"
																data-bs-toggle="modal"
																data-bs-target="#exampleModaleditname"><i
																	class="fa-solid fa-pen fs-10"></i></a></span>

													</div>
													<div class="faq-sidebar-body">
														<div class="faq-sidebar-body-inner">
															<span class="text-info d-block fs-14">SLA Status</span>
															<span class="text-body d-block fs-14 mb-2">Default/User
																defined</span>
															<div class="table-responsive">
																<table class="table table-borderless innser-table">
																	<thead>
																		<tr>
																			<th scope="col"></th>
																			<th scope="col" class="text-primary">Respose
																			</th>
																			<th scope="col" class="text-primary">Resolve
																			</th>
																			<th scope="col"></th>
																		</tr>
																	</thead>
																	<tbody>
																		<tr>
																			<td><b class="text-dark">Urgent</b> </td>
																			<td>3 hrs</td>
																			<td>3 hrs</td>
																			<td></td>
																		</tr>
																		<tr>
																			<td><b class="text-dark">High</b> </td>
																			<td>3 mis</td>
																			<td>3 mis</td>
																			<td></td>
																		</tr>
																		<tr class="etrbg"
																			style="background-color:#D8F2FF!important;">
																			<td><b class="text-dark">Medium</b> </td>
																			<td>5 days</td>
																			<td>5 days</td>
																			<td><b
																					class="text-purple"><i>Default</i></b>
																			</td>
																		</tr>
																		<tr>
																			<td><b class="text-dark">Low</b> </td>
																			<td>7 days</td>
																			<td>7 days</td>
																			<td></td>
																		</tr>
																	</tbody>
																</table>
															</div>
														</div>


														<div class="faq-sidebar-body-inner mt-2">
															<div
																class="d-flex align-items-center justify-content-between mb-3">
																<span class="text-info d-block fs-14">Assigned Support
																	Agents (4) </span>
																<span class="text-body d-block fs-12 mb-2"><a href="">
																		<i class="fa-solid fa-pen"></i></a></span>
															</div>

															<div class="d-flex align-items-start mb-2">
																<a href="assets/img/users/user-32.webp"
																	data-fancycard="gallery" data-caption=""
																	class="avatar avatar-lg">
																	<img src="assets/img/users/user-32.webp"
																		class="img-fluid rounded-3 " alt="img">
																</a>
																<div class="ms-2 mb-2">
																	<p class="text-dark mb-0 fs-14">Michael Philips </p>
																	<span class="fs-12 d-block mb-0 fs-12">Product
																		manager</span>
																</div>
															</div>

															<div class="d-flex align-items-start mb-3">
																<a href="assets/img/users/user-32.webp"
																	data-fancycard="gallery" data-caption=""
																	class="avatar avatar-lg">
																	<img src="assets/img/users/user-32.webp"
																		class="img-fluid rounded-3 " alt="img">
																</a>
																<div class="ms-2 mb-2">
																	<p class="text-dark mb-0 fs-14">Michael Philips </p>
																	<span class="fs-12 d-block mb-0 fs-12">Product
																		manager</span>
																</div>
															</div>

															<div class="d-flex align-items-start mb-3">
																<a href="assets/img/users/user-32.webp"
																	data-fancycard="gallery" data-caption=""
																	class="avatar avatar-lg">
																	<img src="assets/img/users/user-32.webp"
																		class="img-fluid rounded-3 " alt="img">
																</a>
																<div class="ms-2 mb-2">
																	<p class="text-dark mb-0 fs-14">Michael Philips </p>
																	<span class="fs-12 d-block mb-0 fs-12">Product
																		manager</span>
																</div>
															</div>

															<div class="d-flex align-items-start mb-3">
																<a href="assets/img/users/user-32.webp"
																	data-fancycard="gallery" data-caption=""
																	class="avatar avatar-lg">
																	<img src="assets/img/users/user-32.webp"
																		class="img-fluid rounded-3 " alt="img">
																</a>
																<div class="ms-2 mb-2">
																	<p class="text-dark mb-0 fs-14">Michael Philips </p>
																	<span class="fs-12 d-block mb-0 fs-12">Product
																		manager</span>
																</div>
															</div>

														</div>

														<div class="faq-sidebar-body-inner mt-2">
															<div
																class="d-flex align-items-center justify-content-between mb-3">
																<span class="text-info d-block fs-14">Escalation Contact
																	Points (2) </span>
																<!-- <span class="text-body d-block fs-12 mb-2"><i class="fa-solid fa-pen"></i></span> -->
															</div>

															<div class="d-flex align-items-start mb-2">
																<a href="assets/img/users/user-32.webp"
																	data-fancycard="gallery" data-caption=""
																	class="avatar avatar-lg">
																	<img src="assets/img/users/user-32.webp"
																		class="img-fluid rounded-3 " alt="img">
																</a>
																<div class="ms-2 mb-2">
																	<p class="text-dark mb-0 fs-14">Michael Philips </p>
																	<span class="fs-12 d-block mb-0 fs-12">Product
																		manager</span>
																</div>
															</div>

															<div class="d-flex align-items-start mb-3">
																<a href="assets/img/users/user-32.webp"
																	data-fancycard="gallery" data-caption=""
																	class="avatar avatar-lg">
																	<img src="assets/img/users/user-32.webp"
																		class="img-fluid rounded-3 " alt="img">
																</a>
																<div class="ms-2 mb-2">
																	<p class="text-dark mb-0 fs-14">Michael Philips </p>
																	<span class="fs-12 d-block mb-0 fs-12">Product
																		manager</span>
																</div>
															</div>


														</div>
													</div>
												</div>
											</div>
											<div class="col-lg-4">


												<div class="faq-sidebar">
													<div class="faq-sidebar-header">
														<div>
															<span class="fs-16 text-dark d-block">Sales Issue </span>
															<!-- <p class="fs-10 text-body"><i class="fa-solid fa-user me-2"></i>Muhammad Fareed </p> -->
														</div>
														<div></div>
													</div>

													<div class="faq-sidebar-body">
														<div class="faq-sidebar-body-inner">
															<span class="text-info d-block fs-14">SLA Status:</span>
															<span class="text-body d-block fs-14 mb-0">Default/User
																defined</span>
														</div>
														<div class="faq-sidebar-body-inner">
															<span class="text-info">Assigned Support Agents(4)</span>
														</div>

														<div class="faq-sidebar-body-inner">
															<span class="text-info">Escalation Contact Points(2)</span>
														</div>
														<button
															class="btn btn-primary collapsed d-flex justify-content-center rounded-0 w-100"
															type="button" data-bs-toggle="collapse"
															data-bs-target="#collapseExample" aria-expanded="false"
															aria-controls="collapseExample">
															Expand the view
														</button>

														<div class="collapse" id="collapseExample">
															<div class="faq-sidebar-body-inner">
																<span class="text-info">Escalation Contact
																	Points(2)</span>
															</div>

															<div class="faq-sidebar-body-inner">
																<span class="text-info">Escalation Contact
																	Points(2)</span>
															</div>

															<div class="faq-sidebar-body-inner">
																<span class="text-info">Escalation Contact
																	Points(2)</span>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-lg-4">


												<div class="faq-sidebar">
													<div class="faq-sidebar-header">
														<div>
															<span class="fs-16 text-dark d-block">Sales Issue </span>
															<!-- <p class="fs-10 text-body"><i class="fa-solid fa-user me-2"></i>Muhammad Fareed </p> -->
														</div>
														<div></div>
													</div>

													<div class="faq-sidebar-body">
														<div class="faq-sidebar-body-inner">
															<span class="text-info d-block fs-14">SLA Status:</span>
															<span class="text-body d-block fs-14 mb-0">Default/User
																defined</span>
														</div>
														<div class="faq-sidebar-body-inner">
															<span class="text-info">Assigned Support Agents(4)</span>
														</div>

														<div class="faq-sidebar-body-inner">
															<span class="text-info">Escalation Contact Points(2)</span>
														</div>
														<button
															class="btn btn-primary collapsed mb-0 d-flex justify-content-center rounded-0 w-100"
															type="button" data-bs-toggle="collapse"
															data-bs-target="#collapseExample1" aria-expanded="false"
															aria-controls="collapseExample1">
															Expand the view
														</button>

														<div class="collapse" id="collapseExample1">
															<div class="faq-sidebar-body-inner">
																<span class="text-info">Escalation Contact
																	Points(2)</span>
															</div>

															<div class="faq-sidebar-body-inner">
																<span class="text-info">Escalation Contact
																	Points(2)</span>
															</div>

															<div class="faq-sidebar-body-inner">
																<span class="text-info">Escalation Contact
																	Points(2)</span>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>


									</div>
								</div>
							</div>
							<div class="accordion-item">
								<h2 class="accordion-header" id="headingSpacingTwo">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
										data-bs-target="#SpacingTwo" aria-expanded="false" aria-controls="SpacingTwo">
										Customer support
										<div class="a-crown-box">
											<span class="fs-12 px-2"><i class="fa-solid fa-crown"></i></span>
											<span class="fs-12">Muhammad Fareed</span>
											<a class="fs-12 px-2" href="javascript:;" data-bs-toggle="modal"
												data-bs-target="#exampleModaledit"><i class="fa-solid fa-pen"></i></a>
										</div>

										<span class="cts-badge">3 subcategories</span>
									</button>
								</h2>
								<div id="SpacingTwo" class="accordion-collapse collapse"
									aria-labelledby="headingSpacingTwo" data-bs-parent="#accordionSpacingExample">
									<div class="accordion-body py-xl-2 px-xl-4 px-lg-1 px-md-0">
										<div class="row mt-2">
											<div class="col-lg-4">
												<div class="faq-sidebar">
													<div class="faq-sidebar-header">
														<span class="fs-16 text-dark">Sales Issue <a href="javascript:;"
																data-bs-toggle="modal"
																data-bs-target="#exampleModaleditname"><i
																	class="fa-solid fa-pen fs-10"></i></a></span>

													</div>
													<div class="faq-sidebar-body">
														<div class="faq-sidebar-body-inner">
															<span class="text-info d-block fs-14">SLA Status</span>
															<span class="text-body d-block fs-14 mb-2">Default/User
																defined</span>
															<div class="table-responsive">
																<table class="table table-borderless ">
																	<thead>
																		<tr>
																			<th scope="col"></th>
																			<th scope="col" class="text-primary">Respose
																			</th>
																			<th scope="col" class="text-primary">Resolve
																			</th>
																			<th scope="col"></th>
																		</tr>
																	</thead>
																	<tbody>
																		<tr>
																			<td><b class="text-dark">Urgent</b> </td>
																			<td>3 hrs</td>
																			<td>3 hrs</td>
																			<td></td>
																		</tr>
																		<tr>
																			<td><b class="text-dark">High</b> </td>
																			<td>3 mis</td>
																			<td>3 mis</td>
																			<td></td>
																		</tr>
																		<tr class="etrbg"
																			style="background-color:#D8F2FF!important;">
																			<td><b class="text-dark">Medium</b> </td>
																			<td>5 days</td>
																			<td>5 days</td>
																			<td><b
																					class="text-purple"><i>Default</i></b>
																			</td>
																		</tr>
																		<tr>
																			<td><b class="text-dark">Low</b> </td>
																			<td>7 days</td>
																			<td>7 days</td>
																			<td></td>
																		</tr>
																	</tbody>
																</table>
															</div>
														</div>


														<div class="faq-sidebar-body-inner mt-2">
															<div
																class="d-flex align-items-center justify-content-between mb-3">
																<span class="text-info d-block fs-14">Assigned Support
																	Agents (4) </span>
																<span class="text-body d-block fs-12 mb-2"><a href="">
																		<i class="fa-solid fa-pen"></i></a></span>
															</div>

															<div class="d-flex align-items-start mb-2">
																<a href="assets/img/users/user-32.webp"
																	data-fancycard="gallery" data-caption=""
																	class="avatar avatar-lg">
																	<img src="assets/img/users/user-32.webp"
																		class="img-fluid rounded-3 " alt="img">
																</a>
																<div class="ms-2 mb-2">
																	<p class="text-dark mb-0 fs-14">Michael Philips </p>
																	<span class="fs-12 d-block mb-0 fs-12">Product
																		manager</span>
																</div>
															</div>

															<div class="d-flex align-items-start mb-3">
																<a href="assets/img/users/user-32.webp"
																	data-fancycard="gallery" data-caption=""
																	class="avatar avatar-lg">
																	<img src="assets/img/users/user-32.webp"
																		class="img-fluid rounded-3 " alt="img">
																</a>
																<div class="ms-2 mb-2">
																	<p class="text-dark mb-0 fs-14">Michael Philips </p>
																	<span class="fs-12 d-block mb-0 fs-12">Product
																		manager</span>
																</div>
															</div>

															<div class="d-flex align-items-start mb-3">
																<a href="assets/img/users/user-32.webp"
																	data-fancycard="gallery" data-caption=""
																	class="avatar avatar-lg">
																	<img src="assets/img/users/user-32.webp"
																		class="img-fluid rounded-3 " alt="img">
																</a>
																<div class="ms-2 mb-2">
																	<p class="text-dark mb-0 fs-14">Michael Philips </p>
																	<span class="fs-12 d-block mb-0 fs-12">Product
																		manager</span>
																</div>
															</div>

															<div class="d-flex align-items-start mb-3">
																<a href="assets/img/users/user-32.webp"
																	data-fancycard="gallery" data-caption=""
																	class="avatar avatar-lg">
																	<img src="assets/img/users/user-32.webp"
																		class="img-fluid rounded-3 " alt="img">
																</a>
																<div class="ms-2 mb-2">
																	<p class="text-dark mb-0 fs-14">Michael Philips </p>
																	<span class="fs-12 d-block mb-0 fs-12">Product
																		manager</span>
																</div>
															</div>

														</div>

														<div class="faq-sidebar-body-inner mt-2">
															<div
																class="d-flex align-items-center justify-content-between mb-3">
																<span class="text-info d-block fs-14">Escalation Contact
																	Points (2) </span>
																<!-- <span class="text-body d-block fs-12 mb-2"><i class="fa-solid fa-pen"></i></span> -->
															</div>

															<div class="d-flex align-items-start mb-2">
																<a href="assets/img/users/user-32.webp"
																	data-fancycard="gallery" data-caption=""
																	class="avatar avatar-lg">
																	<img src="assets/img/users/user-32.webp"
																		class="img-fluid rounded-3 " alt="img">
																</a>
																<div class="ms-2 mb-2">
																	<p class="text-dark mb-0 fs-14">Michael Philips </p>
																	<span class="fs-12 d-block mb-0 fs-12">Product
																		manager</span>
																</div>
															</div>

															<div class="d-flex align-items-start mb-3">
																<a href="assets/img/users/user-32.webp"
																	data-fancycard="gallery" data-caption=""
																	class="avatar avatar-lg">
																	<img src="assets/img/users/user-32.webp"
																		class="img-fluid rounded-3 " alt="img">
																</a>
																<div class="ms-2 mb-2">
																	<p class="text-dark mb-0 fs-14">Michael Philips </p>
																	<span class="fs-12 d-block mb-0 fs-12">Product
																		manager</span>
																</div>
															</div>


														</div>
													</div>
												</div>
											</div>
											<div class="col-lg-4">


												<div class="faq-sidebar">
													<div class="faq-sidebar-header">
														<div>
															<span class="fs-16 text-dark d-block">Sales Issue </span>
															<!-- <p class="fs-10 text-body"><i class="fa-solid fa-user me-2"></i>Muhammad Fareed </p> -->
														</div>
														<div></div>
													</div>

													<div class="faq-sidebar-body">
														<div class="faq-sidebar-body-inner">
															<span class="text-info d-block fs-14">SLA Status:</span>
															<span class="text-body d-block fs-14 mb-0">Default/User
																defined</span>
														</div>
														<div class="faq-sidebar-body-inner">
															<span class="text-info">Assigned Support Agents(4)</span>
														</div>

														<div class="faq-sidebar-body-inner">
															<span class="text-info">Escalation Contact Points(2)</span>
														</div>
														<button
															class="btn btn-primary collapsed d-flex justify-content-center rounded-0 w-100"
															type="button" data-bs-toggle="collapse"
															data-bs-target="#collapseExample" aria-expanded="false"
															aria-controls="collapseExample">
															Expand the view
														</button>

														<div class="collapse" id="collapseExample">
															<div class="faq-sidebar-body-inner">
																<span class="text-info">Escalation Contact
																	Points(2)</span>
															</div>

															<div class="faq-sidebar-body-inner">
																<span class="text-info">Escalation Contact
																	Points(2)</span>
															</div>

															<div class="faq-sidebar-body-inner">
																<span class="text-info">Escalation Contact
																	Points(2)</span>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-lg-4">


												<div class="faq-sidebar">
													<div class="faq-sidebar-header">
														<div>
															<span class="fs-16 text-dark d-block">Sales Issue </span>
															<!-- <p class="fs-10 text-body"><i class="fa-solid fa-user me-2"></i>Muhammad Fareed </p> -->
														</div>
														<div></div>
													</div>

													<div class="faq-sidebar-body">
														<div class="faq-sidebar-body-inner">
															<span class="text-info d-block fs-14">SLA Status:</span>
															<span class="text-body d-block fs-14 mb-0">Default/User
																defined</span>
														</div>
														<div class="faq-sidebar-body-inner">
															<span class="text-info">Assigned Support Agents(4)</span>
														</div>

														<div class="faq-sidebar-body-inner">
															<span class="text-info">Escalation Contact Points(2)</span>
														</div>
														<button
															class="btn btn-primary collapsed mb-0 d-flex justify-content-center rounded-0 w-100"
															type="button" data-bs-toggle="collapse"
															data-bs-target="#collapseExample1" aria-expanded="false"
															aria-controls="collapseExample1">
															Expand the view
														</button>

														<div class="collapse" id="collapseExample1">
															<div class="faq-sidebar-body-inner">
																<span class="text-info">Escalation Contact
																	Points(2)</span>
															</div>

															<div class="faq-sidebar-body-inner">
																<span class="text-info">Escalation Contact
																	Points(2)</span>
															</div>

															<div class="faq-sidebar-body-inner">
																<span class="text-info">Escalation Contact
																	Points(2)</span>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>

									</div>
								</div>
							</div>
							<div class="accordion-item">
								<h2 class="accordion-header" id="headingSpacingThree">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
										data-bs-target="#SpacingThree" aria-expanded="false"
										aria-controls="SpacingThree">
										Admin support
										<div class="a-crown-box">
											<span class="fs-12 px-2"><i class="fa-solid fa-crown"></i></span>
											<span class="fs-12">Muhammad Fareed</span>
											<a class="fs-12 px-2" href="javascript:;" data-bs-toggle="modal"
												data-bs-target="#exampleModaledit"><i class="fa-solid fa-pen"></i></a>
										</div>

										<span class="cts-badge">0 categories</span>
									</button>
								</h2>
								<div id="SpacingThree" class="accordion-collapse collapse"
									aria-labelledby="headingSpacingThree" data-bs-parent="#accordionSpacingExample">
									<div class="accordion-body">
										<div class="row mt-2">
											<div class="col-lg-4">
												<div class="faq-sidebar">
													<div class="faq-sidebar-header">
														<span class="fs-16 text-dark">Sales Issue <a href="javascript:;"
																data-bs-toggle="modal"
																data-bs-target="#exampleModaleditname"><i
																	class="fa-solid fa-pen fs-10"></i></a></span>

													</div>
													<div class="faq-sidebar-body">
														<div class="faq-sidebar-body-inner">
															<span class="text-info d-block fs-14">SLA Status</span>
															<span class="text-body d-block fs-14 mb-2">Default/User
																defined</span>
															<div class="table-responsive">
																<table class="table table-borderless ">
																	<thead>
																		<tr>
																			<th scope="col"></th>
																			<th scope="col" class="text-primary">Respose
																			</th>
																			<th scope="col" class="text-primary">Resolve
																			</th>
																			<th scope="col"></th>
																		</tr>
																	</thead>
																	<tbody>
																		<tr>
																			<td><b class="text-dark">Urgent</b> </td>
																			<td>3 hrs</td>
																			<td>3 hrs</td>
																			<td></td>
																		</tr>
																		<tr>
																			<td><b class="text-dark">High</b> </td>
																			<td>3 mis</td>
																			<td>3 mis</td>
																			<td></td>
																		</tr>
																		<tr class="etrbg"
																			style="background-color:#D8F2FF!important;">
																			<td><b class="text-dark">Medium</b> </td>
																			<td>5 days</td>
																			<td>5 days</td>
																			<td><b
																					class="text-purple"><i>Default</i></b>
																			</td>
																		</tr>
																		<tr>
																			<td><b class="text-dark">Low</b> </td>
																			<td>7 days</td>
																			<td>7 days</td>
																			<td></td>
																		</tr>
																	</tbody>
																</table>
															</div>
														</div>


														<div class="faq-sidebar-body-inner mt-2">
															<div
																class="d-flex align-items-center justify-content-between mb-3">
																<span class="text-info d-block fs-14">Assigned Support
																	Agents (4) </span>
																<span class="text-body d-block fs-12 mb-2"><a href="">
																		<i class="fa-solid fa-pen"></i></a></span>
															</div>

															<div class="d-flex align-items-start mb-2">
																<a href="assets/img/users/user-32.webp"
																	data-fancycard="gallery" data-caption=""
																	class="avatar avatar-lg">
																	<img src="assets/img/users/user-32.webp"
																		class="img-fluid rounded-3 " alt="img">
																</a>
																<div class="ms-2 mb-2">
																	<p class="text-dark mb-0 fs-14">Michael Philips </p>
																	<span class="fs-12 d-block mb-0 fs-12">Product
																		manager</span>
																</div>
															</div>

															<div class="d-flex align-items-start mb-3">
																<a href="assets/img/users/user-32.webp"
																	data-fancycard="gallery" data-caption=""
																	class="avatar avatar-lg">
																	<img src="assets/img/users/user-32.webp"
																		class="img-fluid rounded-3 " alt="img">
																</a>
																<div class="ms-2 mb-2">
																	<p class="text-dark mb-0 fs-14">Michael Philips </p>
																	<span class="fs-12 d-block mb-0 fs-12">Product
																		manager</span>
																</div>
															</div>

															<div class="d-flex align-items-start mb-3">
																<a href="assets/img/users/user-32.webp"
																	data-fancycard="gallery" data-caption=""
																	class="avatar avatar-lg">
																	<img src="assets/img/users/user-32.webp"
																		class="img-fluid rounded-3 " alt="img">
																</a>
																<div class="ms-2 mb-2">
																	<p class="text-dark mb-0 fs-14">Michael Philips </p>
																	<span class="fs-12 d-block mb-0 fs-12">Product
																		manager</span>
																</div>
															</div>

															<div class="d-flex align-items-start mb-3">
																<a href="assets/img/users/user-32.webp"
																	data-fancycard="gallery" data-caption=""
																	class="avatar avatar-lg">
																	<img src="assets/img/users/user-32.webp"
																		class="img-fluid rounded-3 " alt="img">
																</a>
																<div class="ms-2 mb-2">
																	<p class="text-dark mb-0 fs-14">Michael Philips </p>
																	<span class="fs-12 d-block mb-0 fs-12">Product
																		manager</span>
																</div>
															</div>

														</div>

														<div class="faq-sidebar-body-inner mt-2">
															<div
																class="d-flex align-items-center justify-content-between mb-3">
																<span class="text-info d-block fs-14">Escalation Contact
																	Points (2) </span>
																<!-- <span class="text-body d-block fs-12 mb-2"><i class="fa-solid fa-pen"></i></span> -->
															</div>

															<div class="d-flex align-items-start mb-2">
																<a href="assets/img/users/user-32.webp"
																	data-fancycard="gallery" data-caption=""
																	class="avatar avatar-lg">
																	<img src="assets/img/users/user-32.webp"
																		class="img-fluid rounded-3 " alt="img">
																</a>
																<div class="ms-2 mb-2">
																	<p class="text-dark mb-0 fs-14">Michael Philips </p>
																	<span class="fs-12 d-block mb-0 fs-12">Product
																		manager</span>
																</div>
															</div>

															<div class="d-flex align-items-start mb-3">
																<a href="assets/img/users/user-32.webp"
																	data-fancycard="gallery" data-caption=""
																	class="avatar avatar-lg">
																	<img src="assets/img/users/user-32.webp"
																		class="img-fluid rounded-3 " alt="img">
																</a>
																<div class="ms-2 mb-2">
																	<p class="text-dark mb-0 fs-14">Michael Philips </p>
																	<span class="fs-12 d-block mb-0 fs-12">Product
																		manager</span>
																</div>
															</div>


														</div>
													</div>
												</div>
											</div>
											<div class="col-lg-4">


												<div class="faq-sidebar">
													<div class="faq-sidebar-header">
														<div>
															<span class="fs-16 text-dark d-block">Sales Issue </span>
															<!-- <p class="fs-10 text-body"><i class="fa-solid fa-user me-2"></i>Muhammad Fareed </p> -->
														</div>
														<div></div>
													</div>

													<div class="faq-sidebar-body">
														<div class="faq-sidebar-body-inner">
															<span class="text-info d-block fs-14">SLA Status:</span>
															<span class="text-body d-block fs-14 mb-0">Default/User
																defined</span>
														</div>
														<div class="faq-sidebar-body-inner">
															<span class="text-info">Assigned Support Agents(4)</span>
														</div>

														<div class="faq-sidebar-body-inner">
															<span class="text-info">Escalation Contact Points(2)</span>
														</div>
														<button
															class="btn btn-primary collapsed d-flex justify-content-center rounded-0 w-100"
															type="button" data-bs-toggle="collapse"
															data-bs-target="#collapseExample" aria-expanded="false"
															aria-controls="collapseExample">
															Expand the view
														</button>

														<div class="collapse" id="collapseExample">
															<div class="faq-sidebar-body-inner">
																<span class="text-info">Escalation Contact
																	Points(2)</span>
															</div>

															<div class="faq-sidebar-body-inner">
																<span class="text-info">Escalation Contact
																	Points(2)</span>
															</div>

															<div class="faq-sidebar-body-inner">
																<span class="text-info">Escalation Contact
																	Points(2)</span>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-lg-4">


												<div class="faq-sidebar">
													<div class="faq-sidebar-header">
														<div>
															<span class="fs-16 text-dark d-block">Sales Issue </span>
															<!-- <p class="fs-10 text-body"><i class="fa-solid fa-user me-2"></i>Muhammad Fareed </p> -->
														</div>
														<div></div>
													</div>

													<div class="faq-sidebar-body">
														<div class="faq-sidebar-body-inner">
															<span class="text-info d-block fs-14">SLA Status:</span>
															<span class="text-body d-block fs-14 mb-0">Default/User
																defined</span>
														</div>
														<div class="faq-sidebar-body-inner">
															<span class="text-info">Assigned Support Agents(4)</span>
														</div>

														<div class="faq-sidebar-body-inner">
															<span class="text-info">Escalation Contact Points(2)</span>
														</div>
														<button
															class="btn btn-primary collapsed mb-0 d-flex justify-content-center rounded-0 w-100"
															type="button" data-bs-toggle="collapse"
															data-bs-target="#collapseExample1" aria-expanded="false"
															aria-controls="collapseExample1">
															Expand the view
														</button>

														<div class="collapse" id="collapseExample1">
															<div class="faq-sidebar-body-inner">
																<span class="text-info">Escalation Contact
																	Points(2)</span>
															</div>

															<div class="faq-sidebar-body-inner">
																<span class="text-info">Escalation Contact
																	Points(2)</span>
															</div>

															<div class="faq-sidebar-body-inner">
																<span class="text-info">Escalation Contact
																	Points(2)</span>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>



			</div>

			<!-- Modal -->
			<div class="modal fade" id="exampleModaledit" tabindex="-1" aria-labelledby="exampleModalLabel"
				aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered modal-lg">
					<div class="modal-content rounded-4">
						<div class="modal-body py-2">
							<div class="row">
								<div class="col-lg-12 mb-2">
									<div class="card-header border-0 hdBtn-align mt-md-3 mt-2">
										<h4 class="fs-20 fw-200 text-dark mb-md-3 mb-2">Edit Category Name</h4>
										<button type="button" class="" data-bs-dismiss="modal" aria-label="Close"><i
												class="fa-solid fa-xmark"></i></button>
									</div>
								</div>


								<div class="col-lg-12 mb-2">
									<div class="row inputSelect-div  mb-md-3 mb-2">
										<p class="text-primary">Name of the Category</p>
										<div class="col-md-5">
											<input type="text" class="form-control"
												placeholder="Type in an appropriate titles">
										</div>
									</div>
								</div>

								<div class="col-lg-12 mb-2">
									<div class="row inputSelect-div">
										<p class="text-primary">Choose Category head</p>
										<div class="col-md-5">
											<input type="text" class="form-control"
												placeholder="Type in an appropriate category titles, separated by comma">
										</div>

										<div class="col-md-7 mt-md-0 mt-2">
											<select
												class="js-example-placeholder-multiple select2 js-states placeholder"
												multiple="multiple" placeholder="Type to Search">
												<option>Search employee name</option>
												<option value="fr-1">Jack Tin</option>
												<option value="fr-2">Henry Hill</option>
												<option value="fr-3">Peter Holmes</option>
											</select>
										</div>
									</div>
								</div>

							</div>

						</div>
						<div class="ms-3 mb-md-4 mb-2">
							<button type="button" class="btn btn-primary fs-14 me-2" data-bs-toggle="modal"
								data-bs-target="">Save and Submit</button>
						</div>
					</div>
				</div>
			</div>

			<!-- Modal -->


			<!-- Modal -->
			<div class="modal fade" id="exampleModaleditname" tabindex="-1" aria-labelledby="exampleModalLabel"
				aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered">
					<div class="modal-content rounded-4">
						<div class="modal-body py-2">
							<div class="row">
								<div class="col-lg-12 mb-2">
									<div class="card-header border-0 hdBtn-align mt-md-3 mt-2">
										<h4 class="fs-20 fw-200 text-dark mb-md-3 mb-1">Edit name of the subcategory
										</h4>
										<button type="button" class="" data-bs-dismiss="modal" aria-label="Close"><i
												class="fa-solid fa-xmark"></i></button>
									</div>
									<!-- <p>Enter one or more subcategories, separated by commas.<br>
								<span class="text-primary">Example:</span> Password Reset, Account Access, Email Issues</p> -->
								</div>

								<div class="col-lg-12 mb-2">
									<input type="text" class="form-control"
										placeholder="Type in an appropriate category title(s), separated by comma">
								</div>
							</div>

						</div>
						<div class="ms-3 mb-md-4 mb-2">
							<button type="button" class="btn btn-primary fs-14 me-2" data-bs-toggle="modal"
								data-bs-target="">Save and Submit</button>
						</div>
					</div>
				</div>
			</div>
			<!-- Modal -->



			<?php include 'includes/footer.php'; ?>
		</div>
		<!-- /Main Wrapper -->



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
		<script>
			$("#toggle").click(function () {
				$("#box").toggle();
			});

			$('#summernote').summernote({
				placeholder: 'Hello stand alone ui',
				tabsize: 2,
				height: 150,
				toolbar: [
					['style', ['style']],
					['font', ['bold', 'underline', 'clear']],
					['color', ['color']],
					['para', ['ul', 'ol', 'paragraph']],
					['table', ['table']],
					['insert', ['link', 'picture', 'video']],
					['view', ['fullscreen', 'codeview', 'help']]
				]
			});

			$(document).ready(function domReady() {
				$(".js-select2").select2({
					placeholder: "Pick states",
					theme: "material"
				});

				// $(".select2-selection__arrow")
				//     .addClass("material-icons")
				//     .html("arrow_drop_down");
			});
		</script>

		<script>
			const toggleButton = document.getElementById('toggleButton');
			const toggleIcon = document.getElementById('toggleIcon');
			const collapseElement = document.getElementById('collapseExample');

			collapseElement.addEventListener('show.bs.collapse', function () {
				toggleIcon.textContent = '−';
			});

			collapseElement.addEventListener('hide.bs.collapse', function () {
				toggleIcon.textContent = '+';
			});
		</script>
	</div>


</body>

</html>