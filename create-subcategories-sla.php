<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta name="robots" content="">
	<title>Create Subcategories SLA  | Admin Ticketing  </title>


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
						<h2 class="mb-1">Create Subcategories SLA </h2>
						<nav>
							<ol class="breadcrumb mb-0">
								<li class="breadcrumb-item">
									<a href="index.php"><i class="ti ti-smart-home"></i></a>
								</li>
								<li class="breadcrumb-item">
								SLA Management
								</li>
								<li class="breadcrumb-item active" aria-current="page">Create Subcategories SLA </li>
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
					<div class="col-xl-12">
						<div class="card">
							<div class="card-body">
								<h4 class="card-title mb-3">Set SLA of sub-categories</h4>

								<div class="row">
									<div class="col-lg-6 mb-2">
									<label class="form-label">Select category</label>
									<select class="form-select">
										<option selected disabled>Select category</option>
										<option>IT Support</option>
									</select>
									</div>
									<div class="col-lg-6 mb-2">
									<label class="form-label">Select one or multiple sub-categories</label>
									<select class="js-example-placeholder-multiple select2 js-states" multiple="multiple">
                                <option value="fr-1">Laptop</option>
                                <option value="fr-2">Work Station</option>
                                <option value="fr-3">Keyboard</option>
                                <option value="fr-4">Mouse</option>
                                <option value="fr-5">Headphone</option>
								<option value="fr-6">Monitor</option>
								<option value="fr-7">Printer</option>
								<option value="fr-8">Attendance Machine</option>
								<option value="fr-9">Software Installation</option>
								<option value="fr-10">Email</option>
                            </select>
									<!-- <select class="form-select">
										<option selected disabled>Select sub-categories</option>
										<option>Laptop</option>
										<option>Work Station</option>
										<option>Keyboard</option>
										<option>Mouse</option>
										<option>Headphone</option>
										<option>Monitor</option>
										<option>Printer</option>
										<option>Attendance Machine</option>
										<option>Software Installation</option>
										<option>Email</option>
										<option>Phone</option>
										<option>Internet</option>
										<option>HR Portal</option>
										<option>Kiosk Portal</option>
									</select> -->
									 <a href="javascript:;"  data-bs-toggle="modal" data-bs-target="#exampleModal1234"  class="d-flex justify-content-end align-items-center mt-1 fs-12 text-info">Add new sub-category <span class="text-info text-center ms-2 fs-10 mt-1"><i class="fa-solid fa-plus"></i></span> </a>
									</div>
								</div>
								 	
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-xl-12 col-lg-12">
						<div class="card bg-transparent border-0 shadow-none ">
							<div class="card-header border-0 px-0">
								<h4 class="fs-15 fw-600 text-dark mb-3 px-2">1.Set your selected subcategory SLA policy </h4>

							</div>
							<div class="row">
								<div class="col-xl-8">
								<div class="table-responsive table-responsive-lg  sla-table sla-table1 ">
									<table class="table table-borderless">
										<thead class="">
											<tr>
											<th class="text-purple fs-16 fw-medium">Priority </th>
											<th class="text-purple fs-16 fw-medium">Respond Within</th>
											<th class="text-purple fs-16 fw-medium">Resolve Within</th>
											<th class="text-purple fs-16 fw-medium">Select default priority
															<a class="text-dark" data-bs-toggle="tooltip"
																data-bs-placement="bottom" title=""
																data-bs-original-title="This priority applies to tickets without a set priority">
																<i class="fa-solid fa-circle-exclamation text-purple"></i>

															</a>
														</th>
											</tr>
										</thead>
										<tbody class="bg-transparent">
											<tr>
												<td>
													<p class="fs-14 d-inline-flex align-items-center mb-0"><i
															class="ti ti-circle-filled fs-10 me-1 text-danger"></i>Urgent
													</p>
												</td>
												<td>
													<div class="d-flex align-items-center">
														<div class=" me-2">
															<input type="number" class="form-control" placeholder="1">
														</div>
														<div class="">
															<select class="form-select">
																<option>Hrs</option>
																<option>Mins</option>
																<option>Sec</option>
															</select>
														</div>
													</div>
												</td>
												<td>
													<div class="d-flex align-items-center ">
														<div class=" me-2">
															<input type="number" class="form-control" placeholder="2">
														</div>
														<div class="">
															<select class="form-select">
																<option>Hrs</option>
																<option>Mins</option>
																<option>Sec</option>
															</select>
														</div>
													</div>
												</td>
												<td>
												<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="checkDefault">
  <label class="form-check-label" for="checkDefault">
   
  </label>
</div>						
												</td>												
											</tr>

											<tr>
												<td>
													<p class="fs-14 d-inline-flex align-items-center mb-0"><i
															class="ti ti-circle-filled fs-10 me-1 text-warning"></i>High
													</p>
												</td>
												<td>
													<div class="d-flex align-items-center">
														<div class=" me-2">
															<input type="number" class="form-control" placeholder="2">
														</div>
														<div class="">
															<select class="form-select">
																<option>Hrs</option>
																<option>Mins</option>
																<option>Sec</option>
															</select>
														</div>
													</div>
												</td>
												<td>
													<div class="d-flex align-items-center ">
														<div class=" me-2">
															<input type="number" class="form-control" placeholder="6">
														</div>
														<div class="">
															<select class="form-select">
																<option>Hrs</option>
																<option>Mins</option>
																<option>Sec</option>
															</select>
														</div>
													</div>
												</td>
												<td>
												<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="checkDefault">
  <label class="form-check-label" for="checkDefault">
   
  </label>
</div>						
												</td>												
											</tr>

											<tr>
												<td>
													<p class="fs-14 d-inline-flex align-items-center mb-0"><i
															class="ti ti-circle-filled fs-10 me-1 text-purple"></i>Medium
													</p>
												</td>
												<td>
													<div class="d-flex align-items-center">
														<div class=" me-2">
															<input type="number" class="form-control" placeholder="1">
														</div>
														<div class="">
															<select class="form-select">
																<option>Hrs</option>
																<option>Mins</option>
																<option>Sec</option>
															</select>
														</div>
													</div>
												</td>
												<td>
													<div class="d-flex align-items-center ">
														<div class=" me-2">
															<input type="number" class="form-control" placeholder="2">
														</div>
														<div class="">
															<select class="form-select">
																<option>Hrs</option>
																<option>Mins</option>
																<option>Sec</option>
															</select>
														</div>
													</div>
												</td>
												<td>
												<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="checkDefault">
  <label class="form-check-label" for="checkDefault">
   
  </label>
</div>						
												</td>												
											</tr>

											<tr>
												<td>
													<p class="fs-14 d-inline-flex align-items-center mb-0"><i
															class="ti ti-circle-filled fs-10 me-1 text-success"></i>Low
													</p>
												</td>
												<td>
													<div class="d-flex align-items-center">
														<div class=" me-2">
															<input type="number" class="form-control" placeholder="2">
														</div>
														<div class="">
															<select class="form-select">
																<option>Hrs</option>
																<option>Mins</option>
																<option>Sec</option>
															</select>
														</div>
													</div>
												</td>
												<td>
													<div class="d-flex align-items-center ">
														<div class=" me-2">
															<input type="number" class="form-control" placeholder="4">
														</div>
														<div class="">
															<select class="form-select">
																<option>Hrs</option>
																<option>Mins</option>
																<option>Sec</option>
															</select>
														</div>
													</div>
												</td>
												<td>
												<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="checkDefault">
  <label class="form-check-label" for="checkDefault">
   
  </label>
</div>						
												</td>												
											</tr>

										</tbody>
									</table>
								</div>
								</div>
							</div>
								

							</div>
						</div>
						</div>
						

						<!-- 
						<div class="row">
							<div class="col-xl-8  col-lg-8">
								<div class="row align-items-center mb-4">
									<h4 class="fs-15 fw-600 text-dark mb-3">2.Set your default Priority  policy</h4>
									<div class="col-lg-3 col-md-3">
										<select class="form-select form-control">
											<option selected>Medium</option>
											<option>High</option>
											<option>Low</option>
										</select>
									</div>
									<div class="col-lg-9 col-md-9">
										<p class="mb-0">This priority applies to tickets without a set priority</p>
									</div>
								</div>
							</div>
						</div>
						-->


						<div class="row align-items-center mb-3 px-2">
							<h4 class="fs-15 fw-600 text-dark mb-3">2.Your default reminder policy</h4>
							<div class="col-lg-12 bg-li-bg p-4 rounded-2">
								<p class="mb-3"><i class="fa-solid fa-circle-check text-primary me-2 fs-10"></i><span
										class="text-primary">5 mins before response time ends:</span> Reminder to admin to
									assign ticket and reminder to agents to begin action.</p>
								<p class="mb-0"><i class="fa-solid fa-circle-check text-primary me-2 fs-10"></i><span
										class="text-primary">5 mins before resolution time:</span> Reminder to agent to
									resolve ticket and to the admin to follow up with the agent.</p>
							</div>
						</div>


						<div class="row align-items-center mb-3 px-2">
							<h4 class="fs-15 fw-600 text-dark mb-3">Your default escalation policy</h4>
							<div class="col-lg-12 bg-li-bg p-4 rounded-2">
								<p class="mb-3"><i class="fa-solid fa-circle-check text-primary me-2 fs-10"></i><span
										class="text-primary">Immediately after response time ends:</span> Reminder to
									admin to assign ticket and reminder to agents to begin action.</p>
								<p class="mb-0"><i class="fa-solid fa-circle-check text-primary me-2 fs-10"></i><span
										class="text-primary">Immediately after resolution time: </span> Reminder to
									agent to resolve ticket and to the admin to follow up with the agent.</p>

								<!-- <div class="esc-box-out">
									<div class="esc-box">
										<label>Escalation notification recieptents</label>
										<ul class="esc-box-list">
											<li>Assigned Agent <i class="fa-solid fa-xmark"></i></li>
											<li>Label <i class="fa-solid fa-xmark"></i></li>
											<li>Peter Holmes <i class="fa-solid fa-xmark"></i></li>
											
										</ul>
									</div>
								</div> -->
								<div class="col-lg-8 sest">
								<label class="form-label mt-3">Select recipients you wish to send escalation notice to</label>
								<select class="js-example-placeholder-multiple select2 js-states border-primary border-1"
									multiple="multiple">
									<option value="fr-1">Noah Thompson</option>
									<option value="fr-2">Sophia Martinez</option>
									<option value="fr-3">James Patel</option>
									<option value="fr-4">Isabella Nguyen</option>
									<option value="fr-5">Ethan Roberts</option>
								
								</select>
								</div>
							</div>
							

<!-- <div class="col-lg-8 bg-white py-3 px-3 rounded-3 mt-3">

<span class="fs-14 fw-bold text-dark mb-3">Important</span>
<p class="fs-12 text-body">Do you wish to create unique SLA for every subcategory
	set in this category</p>
<div class="form-check form-check-inline">
	<input class="form-check-input" type="radio" name="radioDefault"
		id="radioDefault1">
	<label class="form-check-label" for="radioDefault1">
		Yes
	</label>
</div>
<div class="form-check form-check-inline">
	<input class="form-check-input" type="radio" name="radioDefault"
		id="radioDefault2" checked>
	<label class="form-check-label" for="radioDefault2">
		No
	</label>
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


<!-- Modal -->
<div class="modal fade" id="exampleModal123" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
        <button type="button" class="btn btn-primary fs-14 me-2" data-bs-dismiss="modal">Add more subcategory SLA wise </button>
        <button type="button" class="btn btn-light fs-14" data-bs-dismiss="modal">Save changes</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal1234" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <!-- <div class="modal-header border-0">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div> -->
      <div class="modal-body rounded-4 py-3">
         <h4 class="fs-18 text-dark py-3 text-center">Add new sub-category  </h4>
		 <div class="row">
			<!-- <div class="col-lg-12 mb-2">
			<label class="form-label">Select Category</label>
			<select class="form-select">
				<option selected></option>
				<option></option>
				<option></option>
				<option></option>
			</select>
			</div> -->

			<div class="col-lg-12 mb-2">
			<label class="form-label text-primary">Name of the subcategory </label>
			<input type="text" class="form-control" placeholder="Type in an appropriate category title(s), separated by comma">
			<!-- <select class="form-select">
				<option selected></option>
				<option></option>
				<option></option>
				<option></option>
			</select> -->
			</div>
			<div class="col-lg-12 mb-2">
			<a href="javascript:;"  data-bs-toggle="modal" data-bs-target="#exampleModal1234"  class="d-flex justify-content-end align-items-center mt-1 fs-12 text-info">Add new sub-category <span class="text-info text-center ms-2 fs-10 mt-1"><i class="fa-solid fa-plus"></i></span> </a>
			</div>
		 </div>
		
      </div>
      <div class="d-flex justify-content-center mb-4">
        <button type="button" class="btn btn-primary fs-14 me-2" data-bs-toggle="modal" data-bs-target="#exampleModal123">Add sub-category </button>
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