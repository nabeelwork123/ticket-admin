<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta name="robots" content="">
	<title>Admin Dashboard | Draft Notification for Agent </title>


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
						<h2 class="mb-1">Draft Notification for Agent</h2>
						<nav>
							<ol class="breadcrumb mb-0">
								<li class="breadcrumb-item">
									<a href="index.php"><i class="ti ti-smart-home"></i></a>
								</li>
								<li class="breadcrumb-item">
									Notifications
								</li>
								<li class="breadcrumb-item active" aria-current="page">Draft Notification for Agent</li>
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
						<h4 class="card-title mb-0">Notification for when response time is near</h4>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-lg-12 mb-4">
							<label class="form-label">Subject *</label>
							<input type="text" class="form-control" placeholder="SLA Reminder - Unanswered Ticket: #((ticket.number)) ((ticket.subject))">
							</div>

							<div class="col-lg-12 mb-2">
							<label class="form-label">Message *</label>
							<div id="summernote" class="form-control"></div>
							</div>
							<div class="col-lg-12 mt-3">
							<div class="d-flex justify-content-end">
								<a href="javascript:;"  data-bs-toggle="modal" data-bs-target="#exampleModal123" class="btn btn-primary me-2">Save</a>
								<button type="button" class="btn btn-light me-2">Cancel</button>
							</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>



		<!-- /Page Wrapper -->


		

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
						<h4 class="fs-18 text-dark py-3">Notification successfully edited</h4>
						<p>Your notification has been successfully edited to the system. Would you like to add another one?</p>

					</div>
					<div class="d-flex justify-content-center mb-4">
						<a href="agent-notifications-settings.php" class="btn btn-primary fs-14 me-2" >Edit more notifications </a>
						<button type="button" class="btn btn-light fs-14" data-bs-dismiss="modal">No, thankyou</button>
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

	// 	$('#summernote').summernote({
    //     placeholder: 'Hi  ',
    //     tabsize: 2,
    //     height: 150,
    //     toolbar: [
    //       ['style', ['style']],
    //       ['font', ['bold', 'underline', 'clear']],
    //       ['color', ['color']],
    //       ['para', ['ul', 'ol', 'paragraph']],
    //       ['table', ['table']],
    //       ['insert', ['link', 'picture', 'video']],
    //       ['view', ['fullscreen', 'codeview', 'help']]
    //     ]
    //   });

	$('#summernote').summernote({
  placeholder: 'Hi',
  tabsize: 2,
  height: 200,
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

// Set the initial content
$('#summernote').summernote('code', `
  Hi,<br><br>
  Ticket number {{ticket.number}} is unanswered for more than {{ticket.timeSinceCreation}}.<br>
  The SLA Response Time arrives in {{ticket.timeUntil Response Due}}.<br><br>
  You can view the status and history of this ticket anytime through the following link (requires login):<br>
  {{ticket.agentUrl}}
`);

	</script>
	</div>


</body>

</html>