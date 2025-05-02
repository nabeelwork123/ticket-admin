<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta name="robots" content="">
	<title>Create New Category  | Admin Ticketing </title>


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
						<h2 class="mb-1">Create new category </h2>
						<nav>
							<ol class="breadcrumb mb-0">
								<li class="breadcrumb-item">
									<a href="index.php"><i class="ti ti-smart-home"></i></a>
								</li>
								<li class="breadcrumb-item">
									Categories management
								</li>
								<li class="breadcrumb-item active" aria-current="page"> Create new category </li>
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
										<span class="fs-16 d-block fw-bold text-dark">Create New Category</span>
										<p class="fs-12 text-body">Choose the category name carefully, as it serves as the foundation for organizing your ticket structure. All related sub-categories will be created under this main category, so accuracy and clarity at this stage are crucial for maintaining a logical and efficient ticketing system.
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /Breadcrumb -->

				<div class="card mb-4">
					<div class="card-header border-0">
						<h4 class="fs-16 fw-600 text-dark mb-0 px-0">Create a new category </h4>
					</div>
					<div class="card-body">
						<div class="row align-items-center">
							<div class="col-lg-8">
								<div class="mb-3">
									<label for="" class="form-label text-primary">1. Name of the category </label>
									<input type="text" class="form-control" placeholder="Type in an appropriate title ">
								</div>
								</div>
								
							
								<div class="col-lg-6">
								<label for="" class="form-label text-primary">2. Mark category admin </label>
								<select class="form-select">
									<option selected>Select department </option>
										<option>Admin</option>
										<option>Procurement </option>
										<option>Customer Support</option>
										<option>IT Support</option>
										



									</select>
								</div>
								<div class="col-lg-6 ">
								<label for="" class="text-body fs-10 mb-2 d-block">You can mark one or multiple employees as the category head.</label>
								<select class="js-example-placeholder-multiple select2 js-states "
									multiple="multiple">
									<option value="fr-1">Michael Anderson</option>
									<option value="fr-2">Emily Thompson</option>
									<option value="fr-3">Daniel Brooks</option>
									<option value="fr-4">Sophia Carter</option>
									<option value="fr-5">James Preston</option>
									<option value="fr-6">Olivia Bennett</option>
								</select>
								</div>

								<div class="col-lg-12 mt-4">
									<a  class="btn btn-primary" id="show">Save & Submit  </a>
								</div>
							</div>
							
						</div>
			    </div>
				

				<div class="card " id="box" style="display:none;">
					<!-- <div class="card-header border-0">
						</div> -->
							<div class="card-body">
								<div class="row">
									<div class="col-lg-6">
										<h4 class="fs-16 fw-600 text-dark mb-4 px-0">Add subcategories to a category & assign employees
										</h4>

										<div class="mb-3">
											<label for="" class="form-label text-primary">1. Name of the subcategory</label>
											<p>Enter one or more subcategories, separated by commas. <br>
												<span>Example</span> Password Reset, Account Access, Email Issues</p>
											<input type="text" class="form-control"
												placeholder="Type in anappropriate category titles, seperated by comma ">
										</div>

										<!-- <div class="mb-3">
											<label for="" class="form-label">Description of the category </label>
											<textarea class="form-control h-100"
												placeholder="Type to Search"></textarea>
										</div> -->

										<div class="mb-3">
											<label for="" class="form-label text-primary">2. Assign subcategories to employees</label>
											<p class="mb-1">Enter the names or select the employees you want to assign to the above subcategories.</p>
											<select class="js-example-placeholder-multiple select2 js-states "
									multiple="multiple">
									<option value="fr-1">Michael Anderson</option>
									<option value="fr-2">Emily Thompson</option>
									<option value="fr-3">Daniel Brooks</option>
									<option value="fr-4">Sophia Carter</option>
									<option value="fr-5">James Preston</option>
									<option value="fr-6">Olivia Bennett</option>
								</select>

											<!-- <select class="js-select2"  placeholder="Type to search">
												<option>Assigned Agent </option>
												<option>Label</option>
												<option>Peter Holmes</option>
											</select> -->
											<div class="add-category mt-md-4 mt-2">
												<a href="javascript:;"  class="text-info fs-14 fw-500">+ Add new sub-category</a>
											</div>
											<div class="mt-md-4 mt-2">
												<a  class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal123">Save & Submit  </a>
											</div>
										</div>
									</div>
								</div>
							</div>
				</div>

				</div>
			</div>

			<!-- /Page Wrapper -->


			<!-- Modal -->
			<div class="modal fade" id="exampleModal123" tabindex="-1" aria-labelledby="exampleModalLabel"	aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered">
					<div class="modal-content">

						<div class="modal-body text-center rounded-4 py-3">
							<h4 class="fs-18 text-dark py-3">New category added </h4>
						    <p>The new category along with the sub categories have been sucessfully added to the system. Would you like to add more categories?</p>		
						</div>
						<div class="d-flex justify-content-center mb-4">
							<button type="button" class="btn btn-primary fs-14 me-3" data-bs-toggle="modal"
								data-bs-target="#exampleModal123">Add more categories </button>
							<a href="set-default-sla-policy.php"  class="btn btn-light fs-14" >No, thankyou </a>
						</div>
					</div>
				</div>
			</div>
			<!-- Modal -->

			<!-- Modal -->
			<div class="modal fade" id="exampleModal1234" tabindex="-1" aria-labelledby="exampleModalLabel"	aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered">
					<div class="modal-content">
						<!-- <div class="modal-header border-0">
				<h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
	  			</div> -->
						<div class="modal-body rounded-4 py-4">
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
								<div class="col-lg-12 mb-3">
									<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#exampleModal1234"
										class="d-flex justify-content-end align-items-center mt-1 fs-12 text-info">Add
										new
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

			<!-- ----------------- Table Modal Start ------------------------- -->
			<div class="modal fade" id="exampleModal12345" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg">
				  <div class="modal-content rounded-4">
					<div class="modal-body px-md-4 px-3">
						<div class="row">
							<div class="col-lg-12">
								<div class="card bg-transparent border-0 shadow-none ">
									<div class="card-header border-0 hdBtn-align">
										<h4 class="fs-15 fw-600 text-dark mb-3">1.Set your selected subcategory SLA Policy </h4>			
										<button type="button" class="" data-bs-dismiss="modal" aria-label="Close"><i class="fa-solid fa-xmark"></i></button>
									</div>
									<div class="">
										<div class="table-responsive table-responsive-lg  sla-table sla-table1 ">
											<table class="table table-borderless">
												<thead class="">
													<tr>
													<th class="text-purple fs-16 fw-medium">Priority </th>
													<th class="text-purple fs-16 fw-medium">Respond Within</th>
													<th class="text-purple fs-16 fw-medium">Resolve Within</th>
													<th class="text-purple fs-16 fw-medium">Default priority</th>
													</tr>
												</thead>
												<tbody class="bg-transparent">
													<tr>
														<td>
															<p class="fs-14 d-inline-flex align-items-center mb-0"><i
																	class="ti ti-square-filled fs-10 me-1 text-danger"></i>Urgent
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
															<div class="me-2">
																<input type="number" class="form-control">
															</div>
														</td>
													</tr>
			
													<tr>
														<td>
															<p class="fs-14 d-inline-flex align-items-center mb-0"><i
																	class="ti ti-square-filled fs-10 me-1 text-warning"></i>High
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
															<div class="me-2">
																<input type="number" class="form-control">
															</div>
														</td>
													</tr>
			
													<tr>
														<td>
															<p class="fs-14 d-inline-flex align-items-center mb-0"><i
																	class="ti ti-square-filled fs-10 me-1 text-purple"></i>Medium
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
															<div class="me-2">
																<input type="number" class="form-control">
															</div>
														</td>
													</tr>
			
													<tr>
														<td>
															<p class="fs-14 d-inline-flex align-items-center mb-0"><i
																	class="ti ti-square-filled fs-10 me-1 text-success"></i>Low
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
															<div class="me-2">
																<input type="number" class="form-control">
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
						<div class="row align-items-center mb-3 px-2">
							<h4 class="fs-15 fw-600 text-dark mb-3">3.Your default reminder policy</h4>
							<div class="col-lg-12 bg-li-bg p-4 rounded-2">
								<p class="mb-3"><i class="fa-solid fa-circle-check text-primary me-2 fs-10"></i><span
										class="text-primary">mins before response time ends:</span> Reminder to admin to
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

								<div class="esc-box-out">
									<div class="esc-box">
										<label>Escalation notification recieptents</label>
										<ul class="esc-box-list">
											<li>Assigned Agent <i class="fa-solid fa-xmark"></i></li>
											<li>Label <i class="fa-solid fa-xmark"></i></li>
											<li>Peter Holmes <i class="fa-solid fa-xmark"></i></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				  </div>
				</div>
			</div>
			<!-- ----------------- Table Modal End ------------------------- -->

			<!-- --------------------- 4th Edit Name Category Start -------------------- -->
			<!-- Modal -->
			<div class="modal fade" id="exampleModal123456" tabindex="-1" aria-labelledby="exampleModalLabel"	aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered">
					<div class="modal-content rounded-4">
						<div class="modal-body py-2">														
							<div class="row">
								<div class="col-lg-12 mb-2">
								<div class="card-header border-0 hdBtn-align mt-md-3 mt-2">
										<h4 class="fs-20 fw-200 text-dark mb-md-3 mb-2">Edit name of the subcategory</h4>			
										<button type="button" class="" data-bs-dismiss="modal" aria-label="Close"><i class="fa-solid fa-xmark"></i></button>
								</div>
								<p>Enter one or more subcategories, separated by commas.<br>
								<span class="text-primary">Example:</span> Password Reset, Account Access, Email Issues</p>
								</div>

								<div class="col-lg-12 mb-2">
									<input type="text" class="form-control" placeholder="Type in an appropriate category titles, separated by comma">
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

			<!-- --------------------- 4th Popup End -------------------- -->

			<!-- --------------------- 5th Assign SubCategory Start -------------------- -->

            <!-- Modal -->
            <div class="modal fade" id="exampleModal1234567" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content rounded-4">
                        <div class="modal-body py-2">
                            <div class="row">
                                <div class="col-lg-12 mb-2">
                                    <div class="card-header border-0 hdBtn-align mt-md-3 mt-2">
                                        <h4 class="fs-20 fw-200 text-dark mb-md-3 mb-2">Assign sub-category to users
                                        </h4>
                                        <button type="button" class="" data-bs-dismiss="modal" aria-label="Close"><i
                                                class="fa-solid fa-xmark"></i></button>
                                    </div>
                                    <p>Enter the names or select the employees you want to assign to the subcategory</p>
                                </div>

                                <div class="col-lg-12 mb-2">
                                    <select class="js-example-placeholder-multiple select2 js-states" multiple="multiple" placeholder="Type to Search">
                                        <option value="fr-1">Jack Tin</option>
                                        <option value="fr-2">Henry Hill</option>
                                        <option value="fr-3">Peter Holmes</option>
                                    </select>
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

            <!-- --------------------- 5th Popup End -------------------- -->


			<!-- --------------------- 6th Edit Category Start -------------------- -->

            <!-- Modal -->
            <div class="modal fade" id="exampleModal12345678" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content rounded-4">
                        <div class="modal-body py-2">
                            <div class="row">
                                <div class="col-lg-12 mb-2">
                                    <div class="card-header border-0 hdBtn-align mt-md-3 mt-2">
                                        <h4 class="fs-20 fw-200 text-dark mb-md-3 mb-2">Edit Category</h4>
                                        <button type="button" class="" data-bs-dismiss="modal" aria-label="Close"><i
                                                class="fa-solid fa-xmark"></i></button>
                                    </div>
								</div>


								<div class="col-lg-12 mb-2">
									<div class="row inputSelect-div  mb-md-3 mb-2">
										<p class="text-primary">Name of the Category</p>
										<div class="col-md-5">
											<input type="text" class="form-control" placeholder="Type in an appropriate titles">
										</div>
									</div>									                                    
                                </div>

                                <div class="col-lg-12 mb-2">
									<div class="row inputSelect-div">
										<p class="text-primary">Choose Category head</p>
										<div class="col-md-5">
											<input type="text" class="form-control" placeholder="Type in an appropriate category titles, separated by comma">
										</div>

										<div class="col-md-7 mt-md-0 mt-2">
											<select class="js-example-placeholder-multiple select2 js-states placeholder" multiple="multiple" placeholder="Type to Search">
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

            <!-- --------------------- 6th Popup End -------------------- -->



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
		$(document).ready(function() {
     $("#hide").click(function() {
         $("#box").hide();
     });

     $("#show").click(function() {
         $("#box").show();
     });

	});
	</script>
	</div>


</body>

</html>