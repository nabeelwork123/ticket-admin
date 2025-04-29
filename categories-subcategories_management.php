<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta name="robots" content="">
	<title>Admin Dashboard | New Categories Sub Categories </title>


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
						<h2 class="mb-1">New categories and sub categories creation</h2>
						<nav>
							<ol class="breadcrumb mb-0">
								<li class="breadcrumb-item">
									<a href="index.php"><i class="ti ti-smart-home"></i></a>
								</li>
								<li class="breadcrumb-item">
									Categories management
								</li>
								<li class="breadcrumb-item active" aria-current="page">Create new categories and sub categories  </li>
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
						<span class="fs-18 text-dark fw-bold mb-0">	All categories</span>
					</div>
				</div>




				<div class="card ">
					<div class="card-body p-0 ">
					<div class="accordions-items-seperate cst-accordian" id="accordionSpacingExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingSpacingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#SpacingOne" aria-expanded="false" aria-controls="SpacingOne">
									Customer Support
									<div class="d-flex align-items-center justify-content-between">
										<div class="a-crown-box">
											<span class="fs-12 px-2"><i class="fa-solid fa-crown"></i></span>	
											<span class="fs-12">Muhammad Fareed</span>	
											<span class="fs-12 px-2"><i class="fa-solid fa-pen"></i></span>	
										</div>
										<div>
											<span class="cts-badge">subcategories</span>
										</div>
									</div>
                                    </button>
                                </h2>
                                <div id="SpacingOne" class="accordion-collapse collapse show" aria-labelledby="headingSpacingOne" data-bs-parent="#accordionSpacingExample">
                                    <div class="accordion-body py-2 px-4">
	                                 
										<div class="row mt-2">
											<div class="col-lg-4">
												<div class="faq-sidebar">
													<div class="faq-sidebar-header">
														<span class="fs-14">Sales Issue  <a href="#"><i class="fa-solid fa-pen fs-10"></i></a></span>
														<div class="form-check form-switch">
															<input class="form-check-input" type="checkbox" role="switch" id="switchCheckChecked" checked>
															<!-- <label class="form-check-label" for="switchCheckChecked">Checked switch checkbox input</label> -->
															</div>
													</div>
													<div class="faq-sidebar-body">
														<div class="faq-sidebar-body-inner">
															<span class="text-info d-block fs-14">SLA Status</span>
															<span class="text-body d-block fs-14 mb-2">Default/User defined</span>
															<div class="table-responsive">
															<table class="table table-borderless ">
															<thead>
																<tr>
																<th scope="col"></th>
																<th scope="col" class="text-primary">Respose</th>
																<th scope="col" class="text-primary">Resolve</th>
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
																<tr class="etrbg" style="background-color:#D8F2FF!important;">
																<td><b class="text-dark">Medium</b> </td>
																<td>5 days</td>
																<td>5 days</td>
																<td><b class="text-purple"><i>Default</i></b> </td>
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
															<div class="d-flex align-items-center justify-content-between mb-3">
															<span class="text-info d-block fs-14">Assigned Support Agents (4) </span>
															<span class="text-body d-block fs-12 mb-2"><a href=""> <i class="fa-solid fa-pen"></i></a></span>
															</div>
													
														<div class="d-flex align-items-start mb-2">
															<a href="assets/img/users/user-32.webp" data-fancycard="gallery" data-caption="" class="avatar avatar-lg">
																<img src="assets/img/users/user-32.webp" class="img-fluid rounded-3 " alt="img">
															</a>
															<div class="ms-2 mb-2">
																<p class="text-dark mb-0 fs-14">Michael Philips </p>
																<span class="fs-12 d-block mb-0 fs-12">Product manager</span>
															</div>
														</div>

														<div class="d-flex align-items-start mb-3">
															<a href="assets/img/users/user-32.webp" data-fancycard="gallery" data-caption="" class="avatar avatar-lg">
																<img src="assets/img/users/user-32.webp" class="img-fluid rounded-3 " alt="img">
															</a>
															<div class="ms-2 mb-2">
																<p class="text-dark mb-0 fs-14">Michael Philips </p>
																<span class="fs-12 d-block mb-0 fs-12">Product manager</span>
															</div>
														</div>

														<div class="d-flex align-items-start mb-3">
															<a href="assets/img/users/user-32.webp" data-fancycard="gallery" data-caption="" class="avatar avatar-lg">
																<img src="assets/img/users/user-32.webp" class="img-fluid rounded-3 " alt="img">
															</a>
															<div class="ms-2 mb-2">
																<p class="text-dark mb-0 fs-14">Michael Philips </p>
																<span class="fs-12 d-block mb-0 fs-12">Product manager</span>
															</div>
														</div>

														<div class="d-flex align-items-start mb-3">
															<a href="assets/img/users/user-32.webp" data-fancycard="gallery" data-caption="" class="avatar avatar-lg">
																<img src="assets/img/users/user-32.webp" class="img-fluid rounded-3 " alt="img">
															</a>
															<div class="ms-2 mb-2">
																<p class="text-dark mb-0 fs-14">Michael Philips </p>
																<span class="fs-12 d-block mb-0 fs-12">Product manager</span>
															</div>
														</div>
														
														</div>

														<div class="faq-sidebar-body-inner mt-2">
															<div class="d-flex align-items-center justify-content-between mb-3">
															<span class="text-info d-block fs-14">Escalation Contact Points (2) </span>
															<!-- <span class="text-body d-block fs-12 mb-2"><i class="fa-solid fa-pen"></i></span> -->
															</div>
													
														<div class="d-flex align-items-start mb-2">
															<a href="assets/img/users/user-32.webp" data-fancycard="gallery" data-caption="" class="avatar avatar-lg">
																<img src="assets/img/users/user-32.webp" class="img-fluid rounded-3 " alt="img">
															</a>
															<div class="ms-2 mb-2">
																<p class="text-dark mb-0 fs-14">Michael Philips </p>
																<span class="fs-12 d-block mb-0 fs-12">Product manager</span>
															</div>
														</div>

														<div class="d-flex align-items-start mb-3">
															<a href="assets/img/users/user-32.webp" data-fancycard="gallery" data-caption="" class="avatar avatar-lg">
																<img src="assets/img/users/user-32.webp" class="img-fluid rounded-3 " alt="img">
															</a>
															<div class="ms-2 mb-2">
																<p class="text-dark mb-0 fs-14">Michael Philips </p>
																<span class="fs-12 d-block mb-0 fs-12">Product manager</span>
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
														<span class="fs-14 text-dark d-block">Sales Issue  </span>
														<p class="fs-10 text-body"><i class="fa-solid fa-user me-2"></i>Muhammad Fareed </p>
														</div>
														<div></div>
													</div>
													
													<div class="faq-sidebar-body">
														<div class="faq-sidebar-body-inner">
														<span class="text-info d-block fs-14">SLA Status:</span>
														<span class="text-body d-block fs-14 mb-0">Default/User defined</span>
														</div>
														<div class="faq-sidebar-body-inner">
															<span class="text-info">Assigned Support Agents(4)</span>
														</div>

														<div class="faq-sidebar-body-inner">
															<span class="text-info">Escalation Contact Points(2)</span>
														</div>
														<button class="btn btn-primary collapsed d-flex justify-content-center rounded-0 w-100" type="button"
																data-bs-toggle="collapse" data-bs-target="#collapseExample"
																aria-expanded="false" aria-controls="collapseExample">
																Expand the view  
															</button>

														<div class="collapse" id="collapseExample">
														<div class="faq-sidebar-body-inner">
															<span class="text-info">Escalation Contact Points(2)</span>
														</div>

														<div class="faq-sidebar-body-inner">
															<span class="text-info">Escalation Contact Points(2)</span>
														</div>

														<div class="faq-sidebar-body-inner">
															<span class="text-info">Escalation Contact Points(2)</span>
														</div>
													</div>
													</div>
											</div>
											</div>
											<div class="col-lg-4">


											<div class="faq-sidebar">
													<div class="faq-sidebar-header">
														<div>
														<span class="fs-14 text-dark d-block">Sales Issue  </span>
														<p class="fs-10 text-body"><i class="fa-solid fa-user me-2"></i>Muhammad Fareed </p>
														</div>
														<div></div>
													</div>
													
													<div class="faq-sidebar-body">
														<div class="faq-sidebar-body-inner">
														<span class="text-info d-block fs-14">SLA Status:</span>
														<span class="text-body d-block fs-14 mb-0">Default/User defined</span>
														</div>
														<div class="faq-sidebar-body-inner">
															<span class="text-info">Assigned Support Agents(4)</span>
														</div>

														<div class="faq-sidebar-body-inner">
															<span class="text-info">Escalation Contact Points(2)</span>
														</div>
														<button class="btn btn-primary collapsed mb-0 d-flex justify-content-center rounded-0 w-100" type="button"
																data-bs-toggle="collapse" data-bs-target="#collapseExample1"
																aria-expanded="false" aria-controls="collapseExample1">
																Expand the view  
															</button>

														<div class="collapse" id="collapseExample1">
														<div class="faq-sidebar-body-inner">
															<span class="text-info">Escalation Contact Points(2)</span>
														</div>

														<div class="faq-sidebar-body-inner">
															<span class="text-info">Escalation Contact Points(2)</span>
														</div>

														<div class="faq-sidebar-body-inner">
															<span class="text-info">Escalation Contact Points(2)</span>
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
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#SpacingTwo" aria-expanded="false" aria-controls="SpacingTwo">
									Customer Support
									<div class="d-flex align-items-center justify-content-between">
										<div class="a-crown-box">
											<span class="fs-12 px-2"><i class="fa-solid fa-crown"></i></span>	
											<span class="fs-12">Muhammad Fareed</span>	
											<span class="fs-12 px-2"><i class="fa-solid fa-pen"></i></span>	
										</div>
										<div>
											<span class="cts-badge">subcategories</span>
										</div>
									</div>
                                    </button>
                                </h2>
                                <div id="SpacingTwo" class="accordion-collapse collapse" aria-labelledby="headingSpacingTwo" data-bs-parent="#accordionSpacingExample">
                                    <div class="accordion-body">
									<div class="row mt-2">
											<div class="col-lg-4">
												<div class="faq-sidebar">
													<div class="faq-sidebar-header">
														<span class="fs-14">Sales Issue  <a href="#"><i class="fa-solid fa-pen fs-10"></i></a></span>
														<div class="form-check form-switch">
															<input class="form-check-input" type="checkbox" role="switch" id="switchCheckChecked" checked>
															<!-- <label class="form-check-label" for="switchCheckChecked">Checked switch checkbox input</label> -->
															</div>
													</div>
													<div class="faq-sidebar-body">
														<div class="faq-sidebar-body-inner">
															<span class="text-info d-block fs-14">SLA Status</span>
															<span class="text-body d-block fs-14 mb-2">Default/User defined</span>
															<div class="table-responsive">
															<table class="table table-borderless ">
															<thead>
																<tr>
																<th scope="col"></th>
																<th scope="col" class="text-primary">Respose</th>
																<th scope="col" class="text-primary">Resolve</th>
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
																<tr class="etrbg" style="background-color:#D8F2FF!important;">
																<td><b class="text-dark">Medium</b> </td>
																<td>5 days</td>
																<td>5 days</td>
																<td><b class="text-purple"><i>Default</i></b> </td>
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
															<div class="d-flex align-items-center justify-content-between mb-3">
															<span class="text-info d-block fs-14">Assigned Support Agents (4) </span>
															<span class="text-body d-block fs-12 mb-2"><a href=""> <i class="fa-solid fa-pen"></i></a></span>
															</div>
													
														<div class="d-flex align-items-start mb-2">
															<a href="assets/img/users/user-32.webp" data-fancycard="gallery" data-caption="" class="avatar avatar-lg">
																<img src="assets/img/users/user-32.webp" class="img-fluid rounded-3 " alt="img">
															</a>
															<div class="ms-2 mb-2">
																<p class="text-dark mb-0 fs-14">Michael Philips </p>
																<span class="fs-12 d-block mb-0 fs-12">Product manager</span>
															</div>
														</div>

														<div class="d-flex align-items-start mb-3">
															<a href="assets/img/users/user-32.webp" data-fancycard="gallery" data-caption="" class="avatar avatar-lg">
																<img src="assets/img/users/user-32.webp" class="img-fluid rounded-3 " alt="img">
															</a>
															<div class="ms-2 mb-2">
																<p class="text-dark mb-0 fs-14">Michael Philips </p>
																<span class="fs-12 d-block mb-0 fs-12">Product manager</span>
															</div>
														</div>

														<div class="d-flex align-items-start mb-3">
															<a href="assets/img/users/user-32.webp" data-fancycard="gallery" data-caption="" class="avatar avatar-lg">
																<img src="assets/img/users/user-32.webp" class="img-fluid rounded-3 " alt="img">
															</a>
															<div class="ms-2 mb-2">
																<p class="text-dark mb-0 fs-14">Michael Philips </p>
																<span class="fs-12 d-block mb-0 fs-12">Product manager</span>
															</div>
														</div>

														<div class="d-flex align-items-start mb-3">
															<a href="assets/img/users/user-32.webp" data-fancycard="gallery" data-caption="" class="avatar avatar-lg">
																<img src="assets/img/users/user-32.webp" class="img-fluid rounded-3 " alt="img">
															</a>
															<div class="ms-2 mb-2">
																<p class="text-dark mb-0 fs-14">Michael Philips </p>
																<span class="fs-12 d-block mb-0 fs-12">Product manager</span>
															</div>
														</div>
														
														</div>

														<div class="faq-sidebar-body-inner mt-2">
															<div class="d-flex align-items-center justify-content-between mb-3">
															<span class="text-info d-block fs-14">Escalation Contact Points (2) </span>
															<!-- <span class="text-body d-block fs-12 mb-2"><i class="fa-solid fa-pen"></i></span> -->
															</div>
													
														<div class="d-flex align-items-start mb-2">
															<a href="assets/img/users/user-32.webp" data-fancycard="gallery" data-caption="" class="avatar avatar-lg">
																<img src="assets/img/users/user-32.webp" class="img-fluid rounded-3 " alt="img">
															</a>
															<div class="ms-2 mb-2">
																<p class="text-dark mb-0 fs-14">Michael Philips </p>
																<span class="fs-12 d-block mb-0 fs-12">Product manager</span>
															</div>
														</div>

														<div class="d-flex align-items-start mb-3">
															<a href="assets/img/users/user-32.webp" data-fancycard="gallery" data-caption="" class="avatar avatar-lg">
																<img src="assets/img/users/user-32.webp" class="img-fluid rounded-3 " alt="img">
															</a>
															<div class="ms-2 mb-2">
																<p class="text-dark mb-0 fs-14">Michael Philips </p>
																<span class="fs-12 d-block mb-0 fs-12">Product manager</span>
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
														<span class="fs-14 text-dark d-block">Sales Issue  </span>
														<p class="fs-10 text-body"><i class="fa-solid fa-user me-2"></i>Muhammad Fareed </p>
														</div>
														<div></div>
													</div>
													
													<div class="faq-sidebar-body">
														<div class="faq-sidebar-body-inner">
														<span class="text-info d-block fs-14">SLA Status:</span>
														<span class="text-body d-block fs-14 mb-0">Default/User defined</span>
														</div>
														<div class="faq-sidebar-body-inner">
															<span class="text-info">Assigned Support Agents(4)</span>
														</div>

														<div class="faq-sidebar-body-inner">
															<span class="text-info">Escalation Contact Points(2)</span>
														</div>
														<button class="btn btn-primary collapsed d-flex justify-content-center rounded-0 w-100" type="button"
																data-bs-toggle="collapse" data-bs-target="#collapseExample"
																aria-expanded="false" aria-controls="collapseExample">
																Expand the view  
															</button>

														<div class="collapse" id="collapseExample">
														<div class="faq-sidebar-body-inner">
															<span class="text-info">Escalation Contact Points(2)</span>
														</div>

														<div class="faq-sidebar-body-inner">
															<span class="text-info">Escalation Contact Points(2)</span>
														</div>

														<div class="faq-sidebar-body-inner">
															<span class="text-info">Escalation Contact Points(2)</span>
														</div>
													</div>
													</div>
											</div>
											</div>
											<div class="col-lg-4">


											<div class="faq-sidebar">
													<div class="faq-sidebar-header">
														<div>
														<span class="fs-14 text-dark d-block">Sales Issue  </span>
														<p class="fs-10 text-body"><i class="fa-solid fa-user me-2"></i>Muhammad Fareed </p>
														</div>
														<div></div>
													</div>
													
													<div class="faq-sidebar-body">
														<div class="faq-sidebar-body-inner">
														<span class="text-info d-block fs-14">SLA Status:</span>
														<span class="text-body d-block fs-14 mb-0">Default/User defined</span>
														</div>
														<div class="faq-sidebar-body-inner">
															<span class="text-info">Assigned Support Agents(4)</span>
														</div>

														<div class="faq-sidebar-body-inner">
															<span class="text-info">Escalation Contact Points(2)</span>
														</div>
														<button class="btn btn-primary collapsed mb-0 d-flex justify-content-center rounded-0 w-100" type="button"
																data-bs-toggle="collapse" data-bs-target="#collapseExample1"
																aria-expanded="false" aria-controls="collapseExample1">
																Expand the view  
															</button>

														<div class="collapse" id="collapseExample1">
														<div class="faq-sidebar-body-inner">
															<span class="text-info">Escalation Contact Points(2)</span>
														</div>

														<div class="faq-sidebar-body-inner">
															<span class="text-info">Escalation Contact Points(2)</span>
														</div>

														<div class="faq-sidebar-body-inner">
															<span class="text-info">Escalation Contact Points(2)</span>
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
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#SpacingThree"
                                        aria-expanded="false" aria-controls="SpacingThree">
                                        Accordion Item #3
                                    </button>
                                </h2>
                                <div id="SpacingThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingSpacingThree"
                                    data-bs-parent="#accordionSpacingExample">
                                    <div class="accordion-body">
                                        <strong>This is the first item's accordion body.</strong> It is shown by
                                        default, until the collapse plugin adds the appropriate classes that we
                                        use to style each element. These classes control the overall appearance,
                                        as well as the showing and hiding via CSS transitions. You can modify
                                        any of this with custom CSS or overriding our default variables. It's
                                        also worth noting that just about any HTML can go within the
                                        <code>.accordion-body</code>, though the transition does limit overflow.
                                    </div>
                                </div>
                            </div>
                        </div>
					</div>
				</div>



				</div>

				
					
					

			


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
	</div>


</body>

</html>