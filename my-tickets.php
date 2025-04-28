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
						<h2 class="mb-1">My tickets</h2>
						<nav>
							<ol class="breadcrumb mb-0">
								<li class="breadcrumb-item">
									<a href="/index"><i class="ti ti-smart-home"></i></a>
								</li>
								<li class="breadcrumb-item">
									Dashboard
								</li>
								<li class="breadcrumb-item active" aria-current="page">My tickets</li>
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




				<div class="row px-2">
					<div class="card px-0">
						<div class="card-header bg-transparent ">
							<div class="d-flex align-items-center justify-content-between flex-wrap">
								<div class="flex-column">
									<h5 class=" mb-1">Your assigned tickets </h5>
									<!-- <p class="text-body fs-12">List of ticket open by Customers</p> -->
								</div>
								<div class="d-flex justify-content-end me-2">

								<a href="javascript:;" data-bs-toggle="offcanvas"  data-bs-target="#offcanvas1" class="btn btn-primary btn-sm me-sm-4 me-2 h-25">Filters</a>

								 <!-- <select class="form-select me-2 py-0 mb-2 " id="offcanvasSelect">
												<option value="" selected>Filter by </option>
												<option value="offcanvas1">Test</option>
												<option value="offcanvas2">Test</option>
												<option value="offcanvas3">Test</option>
								  </select>  -->


									<div class="dropdown mb-2">
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
							<div class="table-responsive table-responsive-lg">
									<table class="table ">
										<thead class="thead-light">
											<tr>

												<th scope="col">Ticket ID</th>
												<th scope="col">Employee Name</th>
												<th scope="col">Ticket Detail</th>
												<th scope="col">Category</th>
												<th scope="col">Status</th>
												<th scope="col">Priority</th>
												<!-- <th scope="col">Ticket Date</th>
												<th scope="col">Due Date</th> -->
												<th scope="col">Location</th>
												<th scope="col">Action</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>
												09834
												</td>
												<td class="">
													<div class="d-flex align-items-center">
														<a href="assets/img/users/user-32.webp" data-fancycard="gallery"
															data-caption="" class="avatar avatar-lg">
															<img src="assets/img/users/user-32.webp" class="img-fluid rounded-circle" alt="img">
														</a>
														<div class="ms-2">
															<p class="text-dark mb-0 fs-12">James MIller </p>
															<span class="fs-12 d-block mb-0 fs-12">International Sales </span>
															<span class="fs-12 d-block mb-0 fs-12" >Vice President</span>

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
													<span class="badge bg-soft-primary">Low</span>
												</td>

											
												<td>
												<p class="d-block fs-12 mb-0">1st Floor</p>
												<p class="d-block fs-12 ">Seat no 22</p>
												</td>	
												<td>
													<a href="#" class="btn btn-secondary py-1 btn-sm">Pick</a>
												</td>
											</tr>
											<tr>
												<td>
												09836
												</td>
												<td>
													<div class="d-flex align-items-center">
														<a href="assets/img/users/user-32.webp" data-fancycard="gallery"
															data-caption="" class="avatar avatar-lg">
															<img src="assets/img/users/user-33.webp" class="img-fluid rounded-circle" alt="img">
														</a>
														<div class="ms-2">
															<p class="text-dark fs-12 mb-0">Henry Full </p>
															<span class="fs-12  d-block mb-0">Aministration</span>
															<span class="fs-12 d-block mb-0">Manager</span>

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
													</div></td>
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
													<span class="badge bg-soft-warning">low</span>
												</td>

											
												<td>
												<p class="d-block fs-12 mb-0">1st Floor</p>
												<p class="d-block fs-12 ">Seat no 20</p>
												</td>	
												<td>
													<a href="#" class="btn btn-secondary py-1 btn-sm">Pick</a>
												</td>
											</tr>
											<tr>
												<td>
												09836
												</td>
												<td>
													<div class="d-flex align-items-center">
														<a href="assets/img/users/user-32.webp" data-fancycard="gallery"
															data-caption="" class="avatar avatar-lg">
															<img src="assets/img/users/user-34.webp" class="img-fluid rounded-circle" alt="img">
														</a>
														<div class="ms-2">
															<p class="text-dark fs-12 mb-0">Dickson Joe</p>
															<span class="fs-12 d-block mb-0">Brand</span>
															<span class="fs-12 d-block mb-0">Content writer</span>

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
													</div></td>
												</td>
												<td>
												 <p class="fs-12 mb-0 text-dark fw-600">Hardware</p>
												 <p class="fs-12 mb-0">Mouse</p>
												
												</td>
												<td>
													<p class="fs-13 d-inline-flex align-items-center mb-1">
														<i class="ti ti-circle-filled fs-10 me-1 text-secondary"></i>Not picked
													</p>
												</td>
												<td>
													<span class="badge bg-soft-danger">high</span>
												</td>

												
												<td>
												<p class="d-block fs-12 mb-0">1st Floor</p>
												<p class="d-block fs-12 ">Seat no 19</p>
												</td>	
												<td>
													<a href="#" class="btn btn-secondary btn-sm py-1">Pick</a>
												</td>
											</tr>
											<tr>
												<td>
												09837
												</td>
												<td>
													<div class="d-flex align-items-center">
														<a href="assets/img/users/user-32.webp" data-fancycard="gallery"
															data-caption="" class="avatar avatar-lg">
															<img src="assets/img/users/user-35.webp" class="img-fluid rounded-circle" alt="img">
														</a>
														<div class="ms-2">
															<p class="text-dark fs-12 mb-0">Sarah Thompson</p>
															<span class="fs-12 d-block mb-0">Human Resources</span>
															<span class="fs-12 d-block mb-0">HR Manager</span>

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
														<i class="ti ti-circle-filled fs-10 me-1 text-secondary"></i>Not picked
													</p>
												</td>
												<td>
													<span class="badge bg-soft-danger">high</span>
												</td>

												
												<td>
												<p class="d-block fs-12 mb-0">1st Floor</p>
												<p class="d-block fs-12 ">Seat no 22</p>
												</td>	
												<td>
												<a href="#" class="btn btn-secondary btn-sm py-1">Pick</a>
												</td>
											</tr>
											<tr>
												<td>
												09838
												</td>
												<td>
													<div class="d-flex align-items-center">
														<a href="assets/img/users/user-32.webp" data-fancycard="gallery"
															data-caption="" class="avatar avatar-lg">
															<img src="assets/img/users/user-36.webp" class="img-fluid rounded-circle" alt="img">
														</a>
														<div class="ms-2">
															<p class="text-dark fs-12 mb-0">Emily Rodriguez</p>
															<span class="fs-12 d-block mb-0">Finance</span>
															<span class="fs-12 d-block mb-0">Finance Analyst</span>

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
													</div></td>
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
													<span class="badge bg-soft-danger">high</span>
												</td>

												
												<td>
												<p class="d-block fs-12 mb-0">1st Floor</p>
												<p class="d-block fs-12 ">Seat no 02</p>
												</td>	
												<td>
												<a href="#" class="btn btn-secondary btn-sm py-1">Pick</a>
												</td>
											</tr>
											<tr>
												<td>
												09838
												</td>
												<td>
													<div class="d-flex align-items-center">
														<a href="assets/img/users/user-28.webp" data-fancycard="gallery"
															data-caption="" class="avatar avatar-lg">
															<img src="assets/img/users/user-18.jpg" class="img-fluid rounded-circle" alt="img">
														</a>
														<div class="ms-2">
															<p class="text-dark fs-12 mb-0">Sophia Patel </p>
															<span class="fs-12 d-block mb-0">Human Resources</span>
															<span class="fs-12 d-block mb-0">Talent Acquisition Specialist</span>

														</div>
													</div>

												</td>

												<td>
													<p class="fs-12 text-dark mb-1">Access Denied to Shared Network Drive</p>
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
													</div></td>
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
													<span class="badge bg-soft-success">medium</span>
												</td>

												
												<td>
												<p class="d-block fs-12 mb-0">1st Floor</p>
												<p class="d-block fs-12 ">Seat no 06</p>
												</td>	
												<td>
												<a href="#" class="btn btn-secondary btn-sm py-1">Pick</a>
												</td>
											</tr>
											<tr>
												<td>
												09838
												</td>
												<td>
													<div class="d-flex align-items-center">
														<a href="assets/img/users/user-32.webp" data-fancycard="gallery"
															data-caption="" class="avatar avatar-lg">
															<img src="assets/img/users/user-38.webp" class="img-fluid rounded-circle" alt="img">
														</a>
														<div class="ms-2">
															<p class="text-dark fs-12 mb-0">Isabella Morris</p>
															<span class="fs-12 d-block mb-0">Operations</span>
															<span class="fs-12 d-block mb-0">Project Coordinator</span>

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
													<span class="badge bg-soft-danger">high</span>
												</td>

												
												<td>
												<p class="d-block fs-12 mb-0">1st Floor</p>
												<p class="d-block fs-12 ">Seat no 06</p>
												</td>	
												<td>
												<a href="#" class="btn btn-secondary btn-sm py-1">Pick</a>
												</td>
											</tr>
											
										</tbody>
									</table>
							</div>
						</div>
					</div>
				</div>






			</div>



	
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
									<button type="button" class="btn btn-primary btn-md fs-12 text-uppercase" data-bs-dismiss="offcanvas">Apply filters</button>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Offcanvas 1 -->


				


			<!-- /Page Wrapper -->


			<?php include 'includes/footer.php'; ?>
		</div>
		<!-- /Main Wrapper -->
	</div>

	<?php include 'includes/script.php'; ?>

	<script>
	document.getElementById('offcanvasSelect').addEventListener('change', function () {
			const selectedId = this.value;
			if (selectedId) {
				const targetOffcanvasEl = document.getElementById(selectedId);
				const bsOffcanvas = new bootstrap.Offcanvas(targetOffcanvasEl);
				bsOffcanvas.show();
			}
		});

	
	</script>
<script>
$(function() {
  $('input[name="daterange"]').daterangepicker({
    opens: 'left'
  }, function(start, end, label) {
    console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
  });
});
</script>

<!-- <script>
  document.querySelectorAll('.dropdown-menu .dropdown-item').forEach(item => {
    item.addEventListener('click', function (e) {
      e.preventDefault();
      const value = this.getAttribute('data-value');
      const label = this.textContent;

      // Update button text
      document.getElementById('splitDropdownLabel').textContent = label;

      // You can use this value however you want
      console.log('Selected value:', value);
    });
  });
</script> -->


</body>

</html>