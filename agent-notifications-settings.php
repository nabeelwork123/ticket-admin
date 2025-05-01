<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta name="robots" content="">
	<title>Admin Dashboard | Agent Notifications Settings </title>


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
						<h2 class="mb-1">Agent Notifications Settings</h2>
						<nav>
							<ol class="breadcrumb mb-0">
								<li class="breadcrumb-item">
									<a href="index.php"><i class="ti ti-smart-home"></i></a>
								</li>
								<li class="breadcrumb-item">
									Notifications
								</li>
								<li class="breadcrumb-item active" aria-current="page">Agent Notifications Settings
								</li>
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



				<div class="card">
					<div class="card-header border-0">
						<h4 class="card-title mb-2">Agent notifications</h4>
						<p>These notifications will be sent via notifications on the HRMS and on the email registered in the user’s profile.</p>
					</div>
					<div class="card-body">
						<div class="row mb-3">
							<div class="col-xl-10 col-lg-10">
								<div class="d-flex align-items-baseline">
									<div class="form-check form-switch">
										<input class="form-check-input" type="checkbox" role="switch"
											id="switchCheckChecked" checked>
										<label class="form-check-label" for="switchCheckChecked">New ticket assigned</label>
									</div>
								
								</div>

							</div>
							<div class="col-xl-2 col-lg-2 text-end">
							<div class="d-flex justify-content-between w-25">
								<a href="draft-notification-for-agent.php" class="fs-10 text-body px-4"><i class="fa-solid fa-eye"></i></a>
								<a href="draft-notification-for-agent.php" class="fs-10 text-body px-4"><i class="fa-solid fa-pen"></i></a>
								</div>
							</div>
						</div>

						<div class="row mb-3">
							<div class="col-xl-10 col-lg-10">
								<div class="d-flex align-items-baseline">
									<div class="form-check form-switch">
										<input class="form-check-input" type="checkbox" role="switch"
											id="switchCheckChecked" checked>
										<label class="form-check-label" for="switchCheckChecked">Ticket reassigned to you</label>
									</div>
									
								</div>

							</div>
							<div class="col-xl-2 col-lg-2 text-end">
							<div class="d-flex justify-content-between w-25">
								<a href="draft-notification-for-agent.php" class="fs-10 text-body px-4"><i class="fa-solid fa-eye"></i></a>
								<a href="draft-notification-for-agent.php" class="fs-10 text-body px-4"><i class="fa-solid fa-pen"></i></a>
								</div>
							</div>
						</div>


						<div class="row mb-3">
							<div class="col-xl-10 col-lg-10">
								<div class="d-flex align-items-baseline">
									<div class="form-check form-switch">
										<input class="form-check-input" type="checkbox" role="switch"
											id="switchCheckChecked" checked>
										<label class="form-check-label" for="switchCheckChecked">Ticket marked as high prior</label>
									</div>
									
								</div>
							</div>
							<div class="col-xl-2 col-lg-2 text-end">
							<div class="d-flex justify-content-between w-25">
								<a href="draft-notification-for-agent.php" class="fs-10 text-body px-4"><i class="fa-solid fa-eye"></i></a>
								<a href="draft-notification-for-agent.php" class="fs-10 text-body px-4"><i class="fa-solid fa-pen"></i></a>
								</div>
							</div>
						</div>


						<div class="row mb-3">
							<div class="col-xl-10 col-lg-10">
								<div class="d-flex align-items-baseline">
									<div class="form-check form-switch">
										<input class="form-check-input" type="checkbox" role="switch"
											id="switchCheckChecked" checked>
										<label class="form-check-label" for="switchCheckChecked">Ticket closed</label>
									</div>
									<p class="mb-0"></p>
								</div>
							</div>
							<div class="col-xl-2 col-lg-2 text-end">
							<div class="d-flex justify-content-between w-25">
								<a href="draft-notification-for-agent.php" class="fs-10 text-body px-4"><i class="fa-solid fa-eye"></i></a>
								<a href="draft-notification-for-agent.php" class="fs-10 text-body px-4"><i class="fa-solid fa-pen"></i></a>
								</div>
							</div>
						</div>

						
						<div class="row mb-3">
							<div class="col-xl-10 col-lg-10">
								<div class="d-flex align-items-baseline">
									<div class="form-check form-switch">
										<input class="form-check-input" type="checkbox" role="switch"
											id="switchCheckChecked" checked>
										<label class="form-check-label" for="switchCheckChecked">Feedback Received on Resolved Ticket</label>
									</div>
									
								</div>
							</div>
							<div class="col-xl-2 col-lg-2 text-end">
							<div class="d-flex justify-content-between w-25">
								<a href="draft-notification-for-agent.php" class="fs-10 text-body px-4"><i class="fa-solid fa-eye"></i></a>
								<a href="draft-notification-for-agent.php" class="fs-10 text-body px-4"><i class="fa-solid fa-pen"></i></a>
								</div>
							</div>
						</div>

					</div>
				</div>




				<div class="card">
					<div class="card-header border-0">
						<h4 class="card-title mb-2">Agent SLA notifications</h4>
						<p>These notifications will be sent via notifications on the HRMS and on the email registered in the user’s profile. </p>
					</div>
					<div class="card-body">
						<div class="row mb-3">
							<div class="col-xl-10 col-lg-10">
								<div class="d-flex align-items-baseline">
									<div class="form-check form-switch">
										<input class="form-check-input" type="checkbox" role="switch"
											id="switchCheckChecked" checked>
										<label class="form-check-label" for="switchCheckChecked">5 mins before response time</label>
									</div>
								
								</div>

							</div>
							<div class="col-xl-2 col-lg-2 text-end">
								<div class="d-flex justify-content-between w-25">
								<a href="draft-notification-for-agent.php" class="fs-10 text-body px-4"><i class="fa-solid fa-eye"></i></a>
								<a href="draft-notification-for-agent.php" class="fs-10 text-body px-4"><i class="fa-solid fa-pen"></i></a>
								</div>
								<!-- <a href="" class="text-info">view/edit notification </a> -->
							</div>
						</div>

						<div class="row mb-3">
							<div class="col-xl-10 col-lg-10">
								<div class="d-flex align-items-baseline">
									<div class="form-check form-switch">
										<input class="form-check-input" type="checkbox" role="switch"
											id="switchCheckChecked" checked>
										<label class="form-check-label" for="switchCheckChecked">5 mins before resolution time</label>
									</div>
									
								</div>

							</div>
							<div class="col-xl-2 col-lg-2 text-end">
							<div class="d-flex justify-content-between w-25">
								<a href="draft-notification-for-agent.php" class="fs-10 text-body px-4"><i class="fa-solid fa-eye"></i></a>
								<a href="draft-notification-for-agent.php" class="fs-10 text-body px-4"><i class="fa-solid fa-pen"></i></a>
								</div>
							</div>
						</div>


						<div class="row mb-3">
							<div class="col-xl-10 col-lg-10">
								<div class="d-flex align-items-baseline">
									<div class="form-check form-switch">
										<input class="form-check-input" type="checkbox" role="switch"
											id="switchCheckChecked" checked>
										<label class="form-check-label" for="switchCheckChecked">Missed Response Time</label>
									</div>
									
								</div>
							</div>
							<div class="col-xl-2 col-lg-2 text-end">
							<div class="d-flex justify-content-between w-25">
								<a href="draft-notification-for-agent.php" class="fs-10 text-body px-4"><i class="fa-solid fa-eye"></i></a>
								<a href="draft-notification-for-agent.php" class="fs-10 text-body px-4"><i class="fa-solid fa-pen"></i></a>
								</div>
							</div>
						</div>


						<div class="row mb-3">
							<div class="col-xl-10 col-lg-10">
								<div class="d-flex align-items-baseline">
									<div class="form-check form-switch">
										<input class="form-check-input" type="checkbox" role="switch"
											id="switchCheckChecked" checked>
										<label class="form-check-label" for="switchCheckChecked">Missed Resolution Time (Ticket Unresolved) </label>
									</div>
									
								</div>
							</div>
							<div class="col-xl-2 col-lg-2 text-end">
							<div class="d-flex justify-content-between w-25">
								<a href="draft-notification-for-agent.php" class="fs-10 text-body px-4"><i class="fa-solid fa-eye"></i></a>
								<a href="draft-notification-for-agent.php" class="fs-10 text-body px-4"><i class="fa-solid fa-pen"></i></a>
								</div>
							</div>
						</div>

						
						

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
							<input type="text" name="daterange" class="form-control" value="01/01/2018 - 01/15/2018" />
						</div>

						<div class="mb-4 rangg">
							<label class="form-label  mb-1">Due on</label>
							<input type="text" name="daterange" class="form-control" value="01/01/2018 - 01/15/2018" />

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


		<!-- Modal -->
		<div class="modal fade" id="exampleModal123" tabindex="-1" aria-labelledby="exampleModalLabel"
			aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<!-- <div class="modal-header border-0">
		<h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
		<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
	  </div> -->
					<div class="modal-body text-center rounded-4 py-3">
						<h4 class="fs-18 text-dark py-3">SLA successfully added </h4>
						<p>Your SLA for the sub-category "Networking issues" has been sucessfully added.</p>
						<p>Would you like to add another subcategory SLA ?</p>

					</div>
					<div class="d-flex justify-content-center mb-4">
						<button type="button" class="btn btn-primary fs-14 me-2" data-bs-dismiss="modal">Add more
							subcategory SLA wise </button>
						<button type="button" class="btn btn-light fs-14" data-bs-dismiss="modal">Save changes</button>
					</div>
				</div>
			</div>
		</div>

		<!-- Modal -->


		<!-- Modal -->
		<div class="modal fade" id="exampleModal1234" tabindex="-1" aria-labelledby="exampleModalLabel"
			aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<!-- <div class="modal-header border-0">
		<h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
		<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
	  </div> -->
					<div class="modal-body rounded-4 py-3">
						<h4 class="fs-18 text-dark py-3 text-center">Add new sub-category </h4>
						<div class="row">
							<div class="col-lg-12 mb-2">
								<label class="form-label">Select Category</label>
								<select class="form-select">
									<option selected></option>
									<option></option>
									<option></option>
									<option></option>
								</select>
							</div>

							<div class="col-lg-12 mb-2">
								<label class="form-label">Type in sub-category </label>
								<select class="form-select">
									<option selected></option>
									<option></option>
									<option></option>
									<option></option>
								</select>
							</div>
							<div class="col-lg-12 mb-2">
								<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#exampleModal1234"
									class="d-flex justify-content-end align-items-center mt-1 fs-12 text-info">Add new
									sub-category <span class="text-info text-center ms-2 fs-10 mt-1"><i
											class="fa-solid fa-plus"></i></span> </a>
							</div>
						</div>

					</div>
					<div class="d-flex justify-content-center mb-4">
						<button type="button" class="btn btn-primary fs-14 me-2" data-bs-toggle="modal"
							data-bs-target="#exampleModal123">Submit sub-category </button>
					</div>
				</div>
			</div>
		</div>

		<!-- Modal -->


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
	<script>
		$("#toggle").click(function () {
			$("#box").toggle();
		});
	</script>
	</div>


</body>

</html>