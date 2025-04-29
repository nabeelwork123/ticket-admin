
<!-- Sidebar -->
<div class="sidebar" id="sidebar">
    <!-- Logo -->
    <div class="sidebar-logo">
        <a href="index.php" class="logo logo-normal">
            <img src="assets/img/logo.png" alt="Logo">
        </a>
        <a href="index.php" class="logo-small">
            <img src="assets/img/star1.png" alt="Logo">
        </a>
        <a href="index.php" class="dark-logo">
            <img src="assets/img/star2.png" alt="Logo">
        </a>
    </div>
    <!-- /Logo -->
    <div class="modern-profile p-3 pb-0">
        <div class="text-center rounded bg-light p-3 mb-4 user-profile">
            <div class="avatar avatar-lg online mb-3">
                <img src="assets/img/profiles/avatar-02.jpg" alt="Img" class="img-fluid rounded-circle">
            </div>
            <h6 class="fs-12 fw-normal mb-1">Adrian Herman</h6>
            <p class="fs-10">System Admin</p>
        </div>
        <div class="sidebar-nav mb-3">
            <ul class="nav nav-tabs nav-tabs-solid nav-tabs-rounded nav-justified bg-transparent" role="tablist">
                <li class="nav-item"><a class="nav-link active border-0" href="#">Menu</a></li>
                <li class="nav-item"><a class="nav-link border-0" href="/chat">Chats</a></li>
                <li class="nav-item"><a class="nav-link border-0" href="/email">Inbox</a></li>
            </ul>
        </div>
    </div>
    <div class="sidebar-header p-3 pb-0 pt-2">
        <div class="text-center rounded bg-light p-2 mb-4 sidebar-profile d-flex align-items-center">
            <div class="avatar avatar-md onlin">
                <img src="assets/img/profiles/avatar-02.jpg" alt="Img" class="img-fluid rounded-circle">
            </div>
            <div class="text-start sidebar-profile-info ms-2">
                <h6 class="fs-12 fw-normal mb-1">Adrian Herman</h6>
                <p class="fs-10">System Admin</p>
            </div>
        </div>
        <div class="input-group input-group-flat d-inline-flex mb-4">
            <span class="input-icon-addon">
                <i class="ti ti-search"></i>
            </span>
            <input type="text" class="form-control" placeholder="Search in HRMS">
            <span class="input-group-text">
                <kbd>CTRL + / </kbd>
            </span>
        </div>
        <div class="d-flex align-items-center justify-content-between menu-item mb-3">
            <div class="me-3">
                <a href="/calendar" class="btn btn-menubar">
                    <i class="ti ti-layout-grid-remove"></i>
                </a>
            </div>
            <div class="me-3">
                <a href="/chat" class="btn btn-menubar position-relative">
                    <i class="ti ti-brand-hipchat"></i>
                    <span class="badge bg-info rounded-pill d-flex align-items-center justify-content-center header-badge">5</span>
                </a>
            </div>
            <div class="me-3 notification-item">
                <a href="/activity" class="btn btn-menubar position-relative me-1">
                    <i class="ti ti-bell"></i>
                    <span class="notification-status-dot"></span>
                </a>
            </div>
            <div class="me-0">
                <a href="/email" class="btn btn-menubar">
                    <i class="ti ti-message"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="sidebar-inner slimscroll">
    <div id="sidebar-menu" class="sidebar-menu">
        <ul>
            <!-- <li class="menu-title"><span>Admin Area</span></li> -->
            <li>
                <ul>
                   
                    <li><a href="index.php"><i class="ti ti-home"></i><span>Dashboard</span></a></li>
                    <li><a href="ticket-management.php"><i class="ti ti-ticket"></i><span>Ticket Management</span></a></li>
                    <!-- <li><a href=""><i class="ti ti-report"></i><span>Set </span></a></li>
                    <li><a href="ticket-details.php"><i class="ti ti-article"></i><span>Ticket details</span></a></li> -->
                    
                   <!--  <li><a href="quick-statics.php"><i class="ti ti-chart-dots-2"></i><span>Quick statics</span></a></li>
                    <li><a href="ticket-details.php"><i class="ti ti-list"></i><span>Tickets details</span></a></li> -->
                     <!-- <li><a href="add-department.php"><i class="fa-regular fa-building"></i><span>Add Department</span></a></li>
                    <li><a href="add-designations.php"><i class="fa-solid fa-user"></i><span>Add Designations</span></a></li>
                    <li><a href="add-policy.php"><i class="fa-solid fa-book"></i><span>Add Policy</span></a></li>
                    <li><a href="add-company.php"><i class="fa-solid fa-building"></i><span>Add Company</span></a></li>
-->
                  
                    <li class="submenu">
                           <a href="javascript:void(0);" class="">
                                <i class="ti ti-user-star"></i><span>SLA Management </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="set-default-sla-policy.php" class="">Default SLA Policy</a></li>
                                <li><a href="subcategories-sla.php" class="">Subcategories SLA</a></li>
                               <li><a href="create-subcategories-sla.php" class="">Create subcategories SLA</a></li>
                                <!-- <li><a href="sister-concerned-company.php" class="">Sister concerned company</a></li>
                                <li><a href="add-sister-company.php" class="">Add sister companies</a></li> -->
                                
                            </ul>
                    </li> 

                    <li class="submenu">
                           <a href="javascript:void(0);" class="">
                                <i class="ti ti-bell"></i><span>Notification </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="agent-notifications-settings.php" class="">Agent Notifications Settings</a></li>
                                <li><a href="draft-notification-for-agent.php" class="">Draft Notification for Agent</a></li>
                          </ul>
                    </li>
                    
                    <li class="submenu">
                           <a href="javascript:void(0);" class="">
                                <i class="ti ti-bell"></i><span>Categories </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="new-categories-sub-categories.php" class="">New Categories Sub Categories</a></li>
                                <li><a href="categories-subcategories_management.php" class="">Categories Subcategories Management</a></li>
                                
                          </ul>
                    </li>
                    
                    
                </ul>
            </li>
        </ul>


        <!-- <ul class="mt-4">
            <li class="menu-title"><span>User Area</span></li>
            <li>
                <ul>
                <li><a href="my-attendance.php"><i class="ti ti-external-link"></i><span>My Attendance</span></a></li>
                <li><a href="leaves.php"><i class="ti ti-table-plus"></i><span>Leaves</span></a></li>
                <li><a href="profile.php"><i class="ti ti-user"></i><span>Profile</span></a></li> 
                    
                    <li class="submenu">
                            <a href="forms.php" class="">
                                <i class="ti ti-user-star"></i><span>Forms</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="resigination.php" class="">Resigination</a></li>
                                <li><a href="grievance.php" class="">Grievance </a></li>
                                <li><a href="advance-salary.php" class="">Advance Salary</a></li>
                                <li><a href="feedback.php" class="">Feedback</a></li>
                               
                            </ul>
                        </li>
                    <li><a href="performance-management.php"><i class="ti ti-stack"></i><span>Performance</span></a></li>
                    <li><a href="payslip.php"><i class="ti ti-brand-cashapp"></i><span>Payslip</span></a></li>
                </ul>
            </li>
        </ul> -->
    </div>
</div>


    
</div>
<!-- /Sidebar -->

<!-- Horizontal Menu -->
<div class="sidebar sidebar-horizontal" id="horizontal-menu">
    <div class="sidebar-menu">
        <div class="main-menu">
            <ul class="nav-menu">
                <li class="menu-title">
                    <span>Main</span>
                </li>
                <li class="submenu">
                    <a href="#"   class="active subdrop">
                        <i class="ti ti-smart-home"></i><span>Dashboard</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul>
                        <li><a href="/index" class="active">Admin Dashboard</a></li>
                        <li><a href="/employee-dashboard" class="">Employee Dashboard</a></li>
                        <li><a href="/deals-dashboard" class="">Deals Dashboard</a></li>
                        <li><a href="/leads-dashboard" class="">Leads Dashboard</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#" class="">
                        <i class="ti ti-user-star"></i><span>Super Admin</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul>
                        <li><a href="/dashboard" class="">Dashboard</a></li>
                        <li><a href="/companies"  class="">Companies</a></li>
                        <li><a href="/subscription" class="">Subscriptions</a></li>
                        <li><a href="/packages" class="">Packages</a></li>
                        <li><a href="/domain" class="">Domain</a></li>
                        <li><a href="/purchase-transaction" class="">Purchase Transaction</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#" class="">
                        <i class="ti ti-layout-grid-add"></i><span>Applications</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul>
                        <li><a href="/chat" class="">Chat</a></li>
                        <li class="submenu submenu-two">
                            <a href="/call" class="">Calls<span class="menu-arrow inside-submenu"></span></a>
                            <ul>
                                <li><a href="/voice-call" class="">Voice Call</a></li>
                                <li><a href="/video-call" class="">Video Call</a></li>
                                <li><a href="/outgoing-call"  class="">Outgoing Call</a></li>
                                <li><a href="/incoming-call" class="">Incoming Call</a></li>
                                <li><a href="/call-history"  class="">Call History</a></li>
                            </ul>
                        </li>
                        <li><a href="/calendar" class="">Calendar</a></li>
                        <li><a href="/email" class="">Email</a></li>
                        <li><a href="/todo" class="">To Do</a></li>
                        <li><a href="/notes" class="">Notes</a></li>
                        <li><a href="/social-feed" class="">Social Feed</a></li>
                        <li><a href="/file-manager" class="">File Manager</a></li>
                        <li><a href="/kanban-view" class="">Kanban</a></li>
                        <li><a href="/invoices" class="">Invoices</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#" class="">
                        <i class="ti ti-layout-board-split"></i><span>Layouts</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul>
                        <li >
                            <a href="/layout-horizontal" class="">
                                <span>Horizontal</span>
                            </a>
                        </li>
                        <li >
                            <a href="/layout-detached" class="">
                                <span>Detached</span>
                            </a>
                        </li>
                        <li>
                            <a href="/layout-modern"  class="">
                                <span>Modern</span>
                            </a>
                        </li>
                        <li>
                            <a href="/layout-two-column" class="">
                                <span>Two Column </span>
                            </a>
                        </li>
                        <li>
                            <a href="/layout-hovered" class="">
                                <span>Hovered</span>
                            </a>
                        </li>
                        <li>
                            <a href="/layout-box" class="">
                                <span>Boxed</span>
                            </a>
                        </li>
                        <li>
                            <a href="/layout-horizontal-single" class="">
                                <span>Horizontal Single</span>
                            </a>
                        </li>
                        <li>
                            <a href="/layout-horizontal-overlay" class="">
                                <span>Horizontal Overlay</span>
                            </a>
                        </li>
                        <li>
                            <a href="/layout-horizontal-box" class="">
                                <span>Horizontal Box</span>
                            </a>
                        </li>
                        <li>
                            <a href="/layout-horizontal-sidemenu" class="">
                                <span>Menu Aside</span>
                            </a>
                        </li>
                        <li>
                            <a href="/layout-vertical-transparent" class="">
                                <span>Transparent</span>
                            </a>
                        </li>
                        <li>
                            <a href="/layout-without-header" class="">
                                <span>Without Header</span>
                            </a>
                        </li>
                        <li>
                            <a href="/layout-rtl" class="">
                                <span>RTL</span>
                            </a>
                        </li>
                        <li> 
                            <a href="/layout-dark" class="">
                                <span>Dark</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#" class="">
                        <i class="ti ti-user-star"></i><span>Projects</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul>
                        <li>
                            <a href="/clients-grid" class=""><span>Clients</span>
                            </a>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"class=""><span>Projects</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="/projects-grid" class="">Projects</a></li>
                                <li><a href="/tasks" class="">Tasks</a></li>
                                <li><a href="/task-board" class="">Task Board</a></li>
                            </ul>
                        </li>		
                        <li class="submenu">
                            <a href="/call" class="">Crm<span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="/contacts-grid" class=""><span>Contacts</span></a></li>
                                <li><a href="/companies-grid" class=""><span>Companies</span></a></li>
                                <li><a href="/deals-grid" class=""><span>Deals</span></a></li>
                                <li><a href="/leads-grid" class=""><span>Leads</span></a></li>
                                <li><a href="/pipeline" class=""><span>Pipeline</span></a></li>
                                <li><a href="/analytics" class=""><span>Analytics</span></a></li>
                                <li><a href="/activity" class=""><span>Activities</span></a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);" class=""><span>Employees</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="/employees" class="">Employee Lists</a></li>
                                <li><a href="/employees-grid" class="">Employee Grid</a></li>
                                <li><a href="/employee-details" class="">Employee Details</a></li>
                                <li><a href="/departments" class="">Departments</a></li>
                                <li><a href="/designations" class="">Designations</a></li>
                                <li><a href="/policy" class="">Policies</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"  class=""><span>Tickets</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="/tickets" class="">Tickets</a></li>
                                <li><a href="/ticket-details" class="">Ticket Details</a></li>
                            </ul>
                        </li>
                        <li class=""><a href="/holidays"><span>Holidays</span></a></li>
                        <li class="submenu">
                            <a href="javascript:void(0);" class=""><span>Attendance</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li class="submenu">
                                    <a href="javascript:void(0);" class="">Leaves<span class="menu-arrow"></span></a>
                                    <ul>
                                        <li><a href="/leaves" class="" >Leaves (Admin)</a></li>
                                        <li><a href="/leaves-employee" class="">Leave (Employee)</a></li>
                                        <li><a href="/leave-settings" class="">Leave Settings</a></li>												
                                    </ul>												
                                </li>
                                <li><a href="/attendance-admin" class="">Attendance (Admin)</a></li>
                                <li><a href="/attendance-employee" class="">Attendance (Employee)</a></li>
                                <li><a href="/timesheets" class="">Timesheets</a></li>
                                <li><a href="/schedule-timing" class="">Shift & Schedule</a></li>
                                <li><a href="/overtime" class="">Overtime</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);" class=""><span>Performance</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="/performance-indicator" class="">Performance Indicator</a></li>
                                <li><a href="/performance-review" class="">Performance Review</a></li>
                                <li><a href="/performance-appraisal" class="">Performance Appraisal</a></li>
                                <li><a href="/goal-tracking" class="">Goal List</a></li>
                                <li><a href="/goal-type" class="">Goal Type</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);" class=""><span>Training</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="/training" class="">Training List</a></li>
                                <li><a href="/trainers" class="">Trainers</a></li>
                                <li><a href="/training-type" class="">Training Type</a></li>
                            </ul>
                        </li>
                        <li><a href="/promotion" class=""><span>Promotion</span></a></li>
                        <li><a href="/resignation" class=""><span>Resignation</span></a></li>
                        <li><a href="/termination"  class=""><span>Termination</span></a></li>														
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#" class="">
                        <i class="ti ti-user-star"></i><span>Administration</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul>
                        <li class="submenu">
                            <a href="javascript:void(0);" class=""><span>Sales</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="/estimates" class="">Estimates</a></li>
                                <li><a href="/invoice" class="">Invoices</a></li>
                                <li><a href="/payments" class="">Payments</a></li>
                                <li><a href="/expenses" class="">Expenses</a></li>
                                <li><a href="/provident-fund" class="">Provident Fund</a></li>
                                <li><a href="/taxes" class="">Taxes</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);" class=""><span>Accounting</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="/categories" class="" >Categories</a></li>
                                <li><a href="/budgets" class="">Budgets</a></li>
                                <li><a href="/budget-expenses" class="">Budget Expenses</a></li>
                                <li><a href="/budget-revenues" class="">Budget Revenues</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);" class=""><span>Payroll</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="/employee-salary" class="">Employee Salary</a></li>
                                <li><a href="/payslip" class="">Payslip</a></li>
                                <li><a href="/payroll" class="">Payroll Items</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);" class=""><span>Assets</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="/assets" class="">Assets</a></li>
                                <li><a href="/asset-categories" class="">Asset Categories</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);" class=""><span>Help & Supports</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="/knowledgebase" class="">Knowledge Base</a></li>
                                <li><a href="/activity" class="">Activities</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);" class=""><span>User Management</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="/users" class="">Users</a></li>
                                <li><a href="/roles-permissions" class="">Roles & Permissions</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);" class=""><span>Reports</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="/expenses-report" class="">Expense Report</a></li>
                                <li><a href="/invoice-report" class="">Invoice Report</a></li>
                                <li><a href="/payment-report" class="">Payment Report</a></li>
                                <li><a href="/project-report" class="">Project Report</a></li>
                                <li><a href="/task-report" class="">Task Report</a></li>
                                <li><a href="/user-report" class="">User Report</a></li>
                                <li><a href="/employee-report" class="">Employee Report</a></li>
                                <li><a href="/payslip-report" class="">Payslip Report</a></li>
                                <li><a href="/attendance-report" class="">Attendance Report</a></li>
                                <li><a href="/leave-report" class="">Leave Report</a></li>
                                <li><a href="/daily-report" class="">Daily Report</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);" class=""><span>Settings</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li class="submenu">
                                    <a href="javascript:void(0);" class="">General Settings<span class="menu-arrow"></span></a>
                                    <ul>
                                        <li><a href="/profile-settings" class="">Profile</a></li>
                                        <li><a href="/security-settings" class="">Security</a></li>
                                        <li><a href="/notification-settings" class="">Notifications</a></li>
                                        <li><a href="/connected-apps" class="">Connected Apps</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);" class="">Website Settings<span class="menu-arrow"></span></a>
                                    <ul>
                                        <li><a href="/bussiness-settings" class="">Business Settings</a></li>
                                        <li><a href="/seo-settings" class="">SEO Settings</a></li>
                                        <li><a href="/localization-settings" class="">Localization</a></li>
                                        <li><a href="/prefixes" class="">Prefixes</a></li>
                                        <li><a href="/preferences" class="">Preferences</a></li>
                                        <li><a href="/performance-appraisal" class="">Appearance</a></li>
                                        <li><a href="/language" class="">Language</a></li>
                                        <li><a href="/authentication-settings" class="">Authentication</a></li>
                                        <li><a href="/ai-settings" class="">AI Settings</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);" class="">App Settings<span class="menu-arrow"></span></a>
                                    <ul>
                                        <li><a href="/salary-settings" class="">Salary Settings</a></li>
                                        <li><a href="/approval-settings" class="">Approval Settings</a></li>
                                        <li><a href="/invoice-settings" class="">Invoice Settings</a></li>
                                        <li><a href="/leave-type" class="">Leave Type</a></li>
                                        <li><a href="/custom-fields" class="">Custom Fields</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);" class="">System Settings<span class="menu-arrow"></span></a>
                                    <ul>
                                        <li><a href="/email-settings" class="">Email Settings</a></li>
                                        <li><a href="/email-template" class="">Email Templates</a></li>
                                        <li><a href="/sms-settings" class="">SMS Settings</a></li>
                                        <li><a href="/sms-template" class="">SMS Templates</a></li>
                                        <li><a href="/otp-settings" class="">OTP</a></li>
                                        <li><a href="/gdpr" class="">GDPR Cookies</a></li>
                                        <li><a href="/maintenance-mode" class="">Maintenance Mode</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);" class="">Financial Settings<span class="menu-arrow"></span></a>
                                    <ul>
                                        <li><a href="/payment-gateways" class="">Payment Gateways</a></li>
                                        <li><a href="/tax-rates" class="">Tax Rate</a></li>
                                        <li><a href="/currencies" class="">Currencies</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);" class="">Other Settings<span class="menu-arrow"></span></a>
                                    <ul>
                                        <li><a href="/custom-css" class="">Custom CSS</a></li>
                                        <li><a href="/custom-js" class="">Custom JS</a></li>
                                        <li><a href="/cronjob" class="">Cronjob</a></li>
                                        <li><a href="/storage-settings" class="">Storage</a></li>
                                        <li><a href="/ban-ip-address" class="">Ban IP Address</a></li>
                                        <li><a href="/backup" class="">Backup</a></li>
                                        <li><a href="/clear-cache" class="">Clear Cache</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#" class="">
                        <i class="ti ti-page-break"></i><span>Pages</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul>
                        <li><a href="/starter" class=""><span>Starter</span></a></li>
                        <li><a href="/profile" class=""><span>Profile</span></a></li>
                        <li><a href="/gallery" class=""><span>Gallery</span></a></li>
                        <li><a href="/search-result" class=""><span>Search Results</span></a></li>
                        <li><a href="/timeline" class=""><span>Timeline</span></a></li>
                        <li><a href="/pricing"  class=""><span>Pricing</span></a></li>
                        <li><a href="/coming-soon" class=""><span>Coming Soon</span></a></li>
                        <li><a href="/under-maintenance" class=""><span>Under Maintenance</span></a></li>
                        <li><a href="/under-construction" class=""><span>Under Construction</span></a></li>
                        <li><a href="/api-keys" class=""><span>API Keys</span></a></li>
                        <li><a href="/privacy-policy" class=""><span>Privacy Policy</span></a></li>
                        <li><a href="/terms-condition"  class=""><span>Terms & Conditions</span></a></li>
                        <li class="submenu">
                            <a href="#" class=""><span>Content</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li class=""><a href="/pages">Pages</a></li>
                                <li class="submenu">
                                    <a href="javascript:void(0);" class="">Blogs<span class="menu-arrow"></span></a>
                                    <ul>
                                        <li class=""><a href="/blogs">All Blogs</a></li>
                                        <li class=""><a href="/blog-categories">Categories</a></li>
                                        <li class=""><a href="/blog-comments">Comments</a></li>
                                        <li class=""><a href="/blog-tags">Tags</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);" class="">Locations<span class="menu-arrow"></span></a>
                                    <ul>
                                        <li><a href="/countries" class="">Countries</a></li>
                                        <li><a href="/states" class="">States</a></li>
                                        <li><a href="/cities" class="">Cities</a></li>
                                    </ul>
                                </li>
                                <li><a href="/testimonials" class="">Testimonials</a></li>
                                <li><a href="/faq" class="">FAQ’S</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#" class="">
                                <span>Authentication</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li class="submenu">
                                    <a href="javascript:void(0);" class="">Login<span class="menu-arrow"></span></a>
                                    <ul>
                                        <li><a href="/login" class="">Cover</a></li>
                                        <li><a href="/login-2" class="">Illustration</a></li>
                                        <li><a href="/login-3" class="">Basic</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);" class="">Register<span class="menu-arrow"></span></a>
                                    <ul>
                                        <li><a href="/register" class="">Cover</a></li>
                                        <li><a href="/register-2" class="">Illustration</a></li>
                                        <li><a href="/register-3" class="">Basic</a></li>
                                    </ul>
                                </li>
                                <li class="submenu"><a href="javascript:void(0);" class="">Forgot Password<span class="menu-arrow"></span></a>
                                    <ul>
                                        <li><a href="/forgot-password" class="">Cover</a></li>
                                        <li><a href="/forgot-password-2" class="">Illustration</a></li>
                                        <li><a href="/forgot-password-3" class="">Basic</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);" class="">Reset Password<span class="menu-arrow"></span></a>
                                    <ul>
                                        <li><a href="/reset-password" class="">Cover</a></li>
                                        <li><a href="/reset-password-2" class="">Illustration</a></li>
                                        <li><a href="/reset-password-3" class="">Basic</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);" class="">Email Verification<span class="menu-arrow"></span></a>
                                    <ul>
                                        <li><a href="/email-verification" class="">Cover</a></li>
                                        <li><a href="/email-verification-2" class="">Illustration</a></li>
                                        <li><a href="/email-verification-3" class="">Basic</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);" class="">2 Step Verification<span class="menu-arrow"></span></a>
                                    <ul>
                                        <li><a href="/two-step-verification" class="">Cover</a></li>
                                        <li><a href="/two-step-verification-2" class="">Illustration</a></li>
                                        <li><a href="/two-step-verification-3" class="">Basic</a></li>
                                    </ul>
                                </li>
                                <li><a href="/lock-screen" class="">Lock Screen</a></li>
                                <li><a href="/error-404" class="">404 Error</a></li>
                                <li><a href="/error-500" class="">500 Error</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#" class="">
                                <span>UI Interface</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li class="submenu">
                                    <a href="javascript:void(0);" class="">
                                        <i class="ti ti-hierarchy-2"></i>
                                        <span>Base UI</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="/ui-alerts" class="">Alerts</a>
                                        </li>
                                        <li>
                                            <a href="/ui-accordion" class="">Accordion</a>
                                        </li>
                                        <li>
                                            <a href="/ui-avatar" class="">Avatar</a>
                                        </li>
                                        <li>
                                            <a href="/ui-badges" class="">Badges</a>
                                        </li>
                                        <li>
                                            <a href="/ui-borders" class="">Border</a>
                                        </li>
                                        <li>
                                            <a href="/ui-buttons" class="">Buttons</a>
                                        </li>
                                        <li>
                                            <a href="/ui-buttons-group" class="">Button Group</a>
                                        </li>
                                        <li>
                                            <a href="/ui-breadcrumb" class="">Breadcrumb</a>
                                        </li>
                                        <li>
                                            <a href="/ui-cards" class="">Card</a>
                                        </li>
                                        <li>
                                            <a href="/ui-carousel" class="">Carousel</a>
                                        </li>
                                        <li>
                                            <a href="/ui-colors" class="">Colors</a>
                                        </li>
                                        <li>
                                            <a href="/ui-dropdowns" class="">Dropdowns</a>
                                        </li>
                                        <li>
                                            <a href="/ui-grid" class="">Grid</a>
                                        </li>
                                        <li>
                                            <a href="/ui-images" class="">Images</a>
                                        </li>
                                        <li>
                                            <a href="/ui-lightbox" class="">Lightbox</a>
                                        </li>
                                        <li>
                                            <a href="/ui-media" class="">Media</a>
                                        </li>
                                        <li>
                                            <a href="/ui-modals" class="">Modals</a>
                                        </li>
                                        <li>
                                            <a href="/ui-offcanvas" class="">Offcanvas</a>
                                        </li>
                                        <li>
                                            <a href="/ui-pagination" class="">Pagination</a>
                                        </li>
                                        <li>
                                            <a href="/ui-popovers" class="">Popovers</a>
                                        </li>
                                        <li>
                                            <a href="/ui-progress" class="">Progress</a>
                                        </li>
                                        <li>
                                            <a href="/ui-placeholders" class="">Placeholders</a>
                                        </li>
                                        <li>
                                            <a href="/ui-spinner" class="">Spinner</a>
                                        </li>
                                        <li>
                                            <a href="/ui-sweetalerts" class="">Sweet Alerts</a>
                                        </li>
                                        <li>
                                            <a href="/ui-nav-tabs" class="">Tabs</a>
                                        </li>
                                        <li>
                                            <a href="/ui-toasts" class="">Toasts</a>
                                        </li>
                                        <li>
                                            <a href="/ui-tooltips" class="">Tooltips</a>
                                        </li>
                                        <li>
                                            <a href="/ui-typography" class="">Typography</a>
                                        </li>
                                        <li>
                                            <a href="/ui-video" class="">Video</a>
                                        </li>
                                        <li>
                                            <a href="/ui-sortable" class="">Sortable</a>
                                        </li>
                                        <li>
                                            <a href="/ui-swiperjs" class="">Swiperjs</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);" class="">
                                        <i class="ti ti-hierarchy-3"></i>
                                        <span>Advanced UI</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="/ui-ribbon" class="">Ribbon</a>
                                        </li>
                                        <li>
                                            <a href="/ui-clipboard" class="">Clipboard</a>
                                        </li>
                                        <li>
                                            <a href="/ui-drag-drop" class="">Drag & Drop</a>
                                        </li>
                                        <li>
                                            <a href="/ui-rangeslider" class="">Range Slider</a>
                                        </li>
                                        <li>
                                            <a href="/ui-rating" class="">Rating</a>
                                        </li>
                                        <li>
                                            <a href="/ui-text-editor" class="">Text Editor</a>
                                        </li>
                                        <li>
                                            <a href="/ui-counter" class="">Counter</a>
                                        </li>
                                        <li>
                                            <a href="/ui-scrollbar" class="">Scrollbar</a>
                                        </li>
                                        <li>
                                            <a href="/ui-stickynote" class="">Sticky Note</a>
                                        </li>
                                        <li>
                                            <a href="/ui-timeline" class="">Timeline</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);"  class="">
                                        <i class="ti ti-input-search"></i>
                                        <span>Forms</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li class="submenu submenu-two">
                                            <a href="javascript:void(0);" class="">Form Elements <span class="menu-arrow inside-submenu"></span>
                                            </a>
                                            <ul>
                                                <li>
                                                    <a href="/form-basic-inputs" class="">Basic Inputs</a>
                                                </li>
                                                <li>
                                                    <a href="/form-checkbox-radios" class="">Checkbox & Radios</a>
                                                </li>
                                                <li>
                                                    <a href="/form-input-groups" class="">Input Groups</a>
                                                </li>
                                                <li>
                                                    <a href="/form-grid-gutters" class="">Grid & Gutters</a>
                                                </li>
                                                <li>
                                                    <a href="/form-select" class="">Form Select</a>
                                                </li>
                                                <li>
                                                    <a href="/form-mask" class="">Input Masks</a>
                                                </li>
                                                <li>
                                                    <a href="/form-fileupload" class="">File Uploads</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="submenu submenu-two">
                                            <a href="javascript:void(0);" class="">Layouts <span class="menu-arrow inside-submenu"></span>
                                            </a>
                                            <ul>
                                                <li>
                                                    <a href="/form-horizontal"  class="">Horizontal Form</a>
                                                </li>
                                                <li>
                                                    <a href="/form-vertical"  class="">Vertical Form</a>
                                                </li>
                                                <li>
                                                    <a href="/form-floating-labels"  class="">Floating Labels</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="/form-validation"  class="">Form Validation</a>
                                        </li>
                                        <li>
                                            <a href="/form-select2"  class="">Select2</a>
                                        </li>
                                        <li>
                                            <a href="/form-wizard"  class="">Form Wizard</a>
                                        </li>
                                        <li>
                                            <a href="/form-pickers"  class="">Form Pickers</a>
                                        </li>
                                        
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);" class="">
                                        <i class="ti ti-table-plus"></i>
                                        <span>Tables</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="/tables-basic"  class="">Basic Tables </a>
                                        </li>
                                        <li>
                                            <a href="/data-tables"  class="">Data Table </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);" class="">
                                        <i class="ti ti-chart-line"></i>
                                        <span>Charts</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="/chart-apex"  class="">Apex Charts</a>
                                        </li>
                                        <li>
                                            <a href="/chart-c3" class="">Chart C3</a>
                                        </li>
                                        <li>
                                            <a href="/chart-js" class="">Chart Js</a>
                                        </li>
                                        <li>
                                            <a href="/chart-morris" class="">Morris Charts</a>
                                        </li>
                                        <li>
                                            <a href="/chart-flot" class="">Flot Charts</a>
                                        </li>
                                        <li>
                                            <a href="/chart-peity" class="">Peity Charts</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);" class="">
                                        <i class="ti ti-icons"></i>
                                        <span>Icons</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="/icon-fontawesome" class="">Fontawesome Icons</a>
                                        </li>
                                        <li>
                                            <a href="/icon-tabler" class="">Tabler Icons</a>
                                        </li>
                                        <li>
                                            <a href="/icon-bootstrap" class="">Bootstrap Icons</a>
                                        </li>
                                        <li>
                                            <a href="/icon-remix" class="">Remix Icons</a>
                                        </li>
                                        <li>
                                            <a href="/icon-feather" class="">Feather Icons</a>
                                        </li>
                                        <li>
                                            <a href="/icon-ionic" class="">Ionic Icons</a>
                                        </li>
                                        <li>
                                            <a href="/icon-material" class="">Material Icons</a>
                                        </li>
                                        <li>
                                            <a href="/icon-pe7" class="">Pe7 Icons</a>
                                        </li>
                                        <li>
                                            <a href="/icon-simpleline" class="">Simpleline Icons</a>
                                        </li>
                                        <li>
                                            <a href="/icon-themify" class="">Themify Icons</a>
                                        </li>
                                        <li>
                                            <a href="/icon-weather" class="">Weather Icons</a>
                                        </li>
                                        <li>
                                            <a href="/icon-typicon" class="">Typicon Icons</a>
                                        </li>
                                        <li>
                                            <a href="/icon-flag" class="">Flag Icons</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);"  class="">
                                        <i class="ti ti-table-plus"></i>
                                        <span>Maps</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="/maps-vector" class="">Vector</a>
                                        </li>
                                        <li>
                                            <a href="/maps-leaflet" class="">Leaflet</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="#">Documentation</a></li>
                        <li><a href="#">Change Log</a></li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><span>Multi Level</span><span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="javascript:void(0);">Multilevel 1</a></li>
                                <li class="submenu submenu-two">
                                    <a href="javascript:void(0);">Multilevel 2<span class="menu-arrow inside-submenu"></span></a>
                                    <ul>
                                        <li><a href="javascript:void(0);">Multilevel 2.1</a></li>
                                        <li class="submenu submenu-two submenu-three">
                                            <a href="javascript:void(0);">Multilevel 2.2<span class="menu-arrow inside-submenu inside-submenu-two"></span></a>
                                            <ul>
                                                <li><a href="javascript:void(0);">Multilevel 2.2.1</a></li>
                                                <li><a href="javascript:void(0);">Multilevel 2.2.2</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="javascript:void(0);">Multilevel 3</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
            <div class="d-xl-flex align-items-center d-none">
                <a href="#" class="me-3 avatar avatar-sm">
                    <img src="assets/img/profiles/avatar-07.jpg" alt="profile" class="rounded-circle">
                </a>
                <a href="#" class="btn btn-icon btn-sm rounded-circle mode-toggle">
                    <i class="ti ti-sun"></i>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- /Horizontal Menu -->

<!-- Two Col Sidebar -->
<div class="two-col-sidebar" id="two-col-sidebar">
    <div class="sidebar sidebar-twocol">
        <div class="twocol-mini">
            <a href="/index" class="logo-small">
                <img src="assets/img/logo-small.svg" alt="Logo">
            </a>
            <div class="sidebar-left slimscroll">
                <div class="nav flex-column align-items-center nav-pills" id="sidebar-tabs" role="tablist" aria-orientation="vertical">
                    <a href="#" class="nav-link  show active " title="Dashboard" data-bs-toggle="tab" data-bs-target="#dashboard">
                        <i class="ti ti-smart-home"></i>
                    </a>
                    <a href="#" class="nav-link " title="Apps" data-bs-toggle="tab" data-bs-target="#application">
                        <i class="ti ti-layout-grid-add"></i>
                    </a>
                    <a href="#" class="nav-link " title="Super Admin" data-bs-toggle="tab" data-bs-target="#super-admin">
                        <i class="ti ti-user-star"></i>
                    </a>
                    <a href="#" class="nav-link " title="Layout" data-bs-toggle="tab" data-bs-target="#layout">
                        <i class="ti ti-layout-board-split"></i>
                    </a>
                    <a href="#" class="nav-link " title="Projects" data-bs-toggle="tab" data-bs-target="#projects">
                        <i class="ti ti-users-group"></i>
                    </a>
                    <a href="#" class="nav-link " title="Crm" data-bs-toggle="tab" data-bs-target="#crm">
                        <i class="ti ti-user-shield"></i>
                    </a>
                    <a href="#" class="nav-link " title="Hrm" data-bs-toggle="tab" data-bs-target="#hrm">
                        <i class="ti ti-user"></i>
                    </a>
                    <a href="#" class="nav-link " title="Finance" data-bs-toggle="tab" data-bs-target="#finance">
                        <i class="ti ti-shopping-cart-dollar"></i>
                    </a>
                    <a href="#" class="nav-link " title="Administration" data-bs-toggle="tab" data-bs-target="#administration">
                        <i class="ti ti-cash"></i>
                    </a>
                    <a href="#" class="nav-link " title="Content" data-bs-toggle="tab" data-bs-target="#content">
                        <i class="ti ti-license"></i>
                    </a>
                    <a href="#" class="nav-link " title="Pages" data-bs-toggle="tab" data-bs-target="#pages">
                        <i class="ti ti-page-break"></i>
                    </a>
                    <a href="#" class="nav-link  " title="Authentication" data-bs-toggle="tab"
                        data-bs-target="#authentication">
                        <i class="ti ti-lock-check"></i>
                    </a>
                    <a href="#" class="nav-link " title="UI Elements" data-bs-toggle="tab"
                        data-bs-target="#ui-elements">
                        <i class="ti ti-ux-circle"></i>
                    </a>
                    <a href="#" class="nav-link " title="Extras" data-bs-toggle="tab" data-bs-target="#extras">
                        <i class="ti ti-vector-triangle"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="sidebar-right">
            <div class="sidebar-logo mb-4">
                <a href="index.php" class="logo logo-normal">
                    <img src="assets/img/star1.png" alt="Logo">
                </a>
                <a href="/index" class="dark-logo">
                    <img src="assets/img/logo-white.png" alt="Logo">
                </a>
            </div>
            <div class="sidebar-scroll">
                <h6 class="mb-3">Welcome to SmartHR</h6>
                <div class="text-center rounded bg-light p-3 mb-4">
                    <div class="avatar avatar-lg online mb-3">
                        <img src="assets/img/profiles/avatar-02.jpg" alt="Img" class="img-fluid rounded-circle">
                    </div>
                    <h6 class="fs-12 fw-normal mb-1">Adrian Herman</h6>
                    <p class="fs-10">System Admin</p>
                </div>
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade  show active " id="dashboard">
                        <ul>
                            <li class="menu-title"><span>MAIN MENU</span></li>
                            <li><a href="/index" class="active">Admin Dashboard</a></li>
                            <li><a href="/employee-dashboard" class="">Employee Dashboard</a></li>
                            <li><a href="/deals-dashboard" class="">Deals Dashboard</a></li>
                            <li><a href="/leads-dashboard" class="">Leads Dashboard</a></li>
                        </ul>
                    </div>
                    <div class="tab-pane fade " id="application">
                        <ul>
                            <li class="menu-title"><span>APPLICATION</span></li>
                            <li><a href="/voice-call"class="" >Voice Call</a></li>
                            <li><a href="/video-call" class="">Video Call</a></li>
                            <li><a href="/outgoing-call" class="">Outgoing Call</a></li>
                            <li><a href="/incoming-call" class="">Incoming Call</a></li>
                            <li><a href="/call-history" class="">Call History</a></li>
                            <li><a href="/calendar" class="">Calendar</a></li>
                            <li><a href="/email" class="">Email</a></li>
                            <li><a href="/todo" class="">To Do</a></li>
                            <li><a href="/notes"class="">Notes</a></li>
                            <li><a href="/social-active" class="">File Manager</a></li>
                            <li><a href="/file-manager" class="">File Manager</a></li>
                            <li><a href="/kanban-view" class="">Kanban</a></li>
                            <li><a href="/invoices" class="">Invoices</a></li>
                        </ul>
                    </div>
                    <div class="tab-pane fade " id="super-admin">
                        <ul>
                            <li class="menu-title"><span>SUPER ADMIN</span></li>
                            <li><a href="/dashboard" class="">Dashboard</a></li>
                            <li><a href="/companies" class="">Companies</a></li>
                            <li><a href="/subscription" class="">Subscriptions</a></li>
                            <li><a href="/packages" class="">Packages</a></li>
                            <li><a href="/domain" class="">Domain</a></li>
                            <li><a href="/purchase-transaction" class="">Purchase Transaction</a></li>
                        </ul>
                    </div>
                    <div class="tab-pane fade " id="layout">
                        <ul>
                            <li class="menu-title"><span>LAYOUT</span></li>
                            <li><a href="/layout-horizontal" class=""><span>Horizontal</span></a></li>
                            <li><a href="/layout-detached" class=""><span>Detached</span></a></li>
                            <li><a href="/layout-modern" class=""><span>Modern</span></a></li>
                            <li><a href="/layout-two-column" class=""><span>Two Column </span></a></li>
                            <li><a href="/layout-hovered" class=""><span>Hovered</span></a></li>
                            <li><a href="/layout-box" class=""><span>Boxed</span></a></li>
                            <li><a href="/layout-horizontal-single" class=""><span>Horizontal Single</span></a></li>
                            <li><a href="/layout-horizontal-overlay" class=""><span>Horizontal Overlay</span></a></li>
                            <li><a href="/layout-horizontal-box" class=""><span>Horizontal Box</span></a></li>
                            <li><a href="/layout-horizontal-sidemenu" class=""><span>Menu Aside</span></a></li>
                            <li><a href="/layout-vertical-transparent" class=""><span>Transparent</span></a></li>
                            <li><a href="/layout-without-header" class=""><span>Without Header</span></a></li>
                            <li><a href="/layout-rtl" class=""><span>RTL</span></a></li>
                            <li><a href="/layout-dark" class=""><span>Dark</span></a></li>
                        </ul>
                    </div>
                    <div class="tab-pane fade " id="projects">
                        <ul>
                            <li class="menu-title"><span>PROJECTS</span></li>
                            <li class=""><a href="/clients-grid">Clients</a></li>
                            <li class="submenu">
                                <a href="javascript:void(0);"><span>Projects</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul>
                                    <li><a href="/projects-grid" class="">Projects</a></li>
                                    <li><a href="/tasks" class="">Tasks</a></li>
                                    <li><a href="/task-board" class="">Task Board</a></li>
                                </ul>
                            </li>	
                        </ul>
                    </div>
                    <div class="tab-pane fade " id="crm">
                        <ul>
                            <li class="menu-title"><span>CRM</span></li>
                            <li><a href="/contacts-grid" class="" ><span>Contacts</span></a></li>
                            <li><a href="/companies-grid" class=""><span>Companies</span></a></li>
                            <li><a href="/deals-grid" class=""><span>Deals</span></a></li>
                            <li><a href="/leads-grid" class=""><span>Leads</span></a></li>
                            <li><a href="/pipeline" class=""><span>Pipeline</span></a></li>
                            <li><a href="/analytics" class=""><span>Analytics</span></a></li>
                            <li><a href="/activity" class=""><span>Activities</span></a></li>
                        </ul>
                    </div>
                    <div class="tab-pane fade " id="hrm">
                        <ul>
                            <li class="menu-title"><span>HRM</span></li>
                            <li class="submenu">
                                <a href="javascript:void(0);" class=""><span>Employees</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul>
                                    <li><a href="/employees" class="">Employee Lists</a></li>
                                    <li><a href="/employees-grid" class="">Employee Grid</a></li>
                                    <li><a href="/employee-details" class="">Employee Details</a></li>
                                    <li><a href="/departments" class="">Departments</a></li>
                                    <li><a href="/designations" class="">Designations</a></li>
                                    <li><a href="/policy" class="">Policies</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);" class=""><span>Tickets</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul>
                                    <li><a href="/tickets" class="">Tickets</a></li>
                                    <li><a href="/ticket-details" class="">Ticket Details</a></li>
                                </ul>
                            </li>
                            <li class=""><a href="/holidays"><span>Holidays</span></a></li>
                            <li class="submenu">
                                <a href="javascript:void(0);" class=""><span>Attendance</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul>
                                    <li class="submenu submenu-two">
                                        <a href="javascript:void(0);" class="">Leaves<span
                                                class="menu-arrow inside-submenu"></span></a>
                                        <ul>
                                            <li><a href="/leaves" class="">Leaves (Admin)</a></li>
                                            <li><a href="/leaves-employee" class="">Leave (Employee)</a></li>
                                            <li><a href="/leave-settings" class="">Leave Settings</a></li>												
                                        </ul>												
                                    </li>
                                    <li><a href="/attendance-admin" class="">Attendance (Admin)</a></li>
                                    <li><a href="/attendance-employee" class="">Attendance (Employee)</a></li>
                                    <li><a href="/timesheets" class="">Timesheets</a></li>
                                    <li><a href="/schedule-timing" class="">Shift & Schedule</a></li>
                                    <li><a href="/overtime" class="">Overtime</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);" class=""><span>Performance</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul>
                                    <li><a href="/performance-indicator" class="">Performance Indicator</a></li>
                                    <li><a href="/performance-review" class="">Performance Review</a></li>
                                    <li><a href="/performance-appraisal" class="">Performance Appraisal</a></li>
                                    <li><a href="/goal-tracking" class="">Goal List</a></li>
                                    <li><a href="/goal-type" class="">Goal Type</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);" class=""><span>Training</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul>
                                    <li><a href="/training" class="">Training List</a></li>
                                    <li><a href="/trainers" class="">Trainers</a></li>
                                    <li><a href="/training-type" class="">Training Type</a></li>
                                </ul>
                            </li>
                            <li><a href="/promotion" class=""><span>Promotion</span></a></li>
                            <li><a href="/resignation" class=""><span>Resignation</span></a></li>
                            <li><a href="/termination" class=""><span>Termination</span></a></li>
                        </ul>
                    </div>
                    <div class="tab-pane fade " id="finance">
                        <ul>
                            <li class="menu-title"><span>FINANCE & ACCOUNTS</span></li>
                            <li class="submenu">
                                <a href="javascript:void(0);" class=""><span>Sales</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul>
                                    <li><a href="/estimates" class="">Estimates</a></li>
                                    <li><a href="/invoice" class="">Invoices</a></li>
                                    <li><a href="/payments" class="">Payments</a></li>
                                    <li><a href="/expenses" class="">Expenses</a></li>
                                    <li><a href="/provident-fund" class="">Provident Fund</a></li>
                                    <li><a href="/taxes" class="">Taxes</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);" class=""><span>Accounting</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul>
                                    <li><a href="/categories" class="">Categories</a></li>
                                    <li><a href="/budgets" class="">Budgets</a></li>
                                    <li><a href="/budget-expenses" class="">Budget Expenses</a></li>
                                    <li><a href="/budget-revenues" class="">Budget Revenues</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);" class=""><span>Payroll</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul>
                                    <li><a href="/employee-salary" class="">Employee Salary</a></li>
                                    <li><a href="/payslip" class="">Payslip</a></li>
                                    <li><a href="/payroll" class="">Payroll Items</a></li>
                                </ul>
                            </li>									
                        </ul>
                    </div>
                    <div class="tab-pane fade " id="administration">
                        <ul>
                            <li class="menu-title"><span>ADMINISTRATION</span></li>
                            <li class="submenu">
                                <a href="javascript:void(0);" class=""><span>Assets</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul>
                                    <li><a href="/assets" class="">Assets</a></li>
                                    <li><a href="/asset-categories" class="">Asset Categories</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);" class=""><span>Help & Supports</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul>
                                    <li><a href="/knowledgebase" class="">Knowledge Base</a></li>
                                    <li><a href="/activity" class="">Activities</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);" class=""><span>User Management</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul>
                                    <li><a href="/users" class="">Users</a></li>
                                    <li><a href="/roles-permissions" class="">Roles & Permissions</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);" class=""><span>Reports</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul>
                                    <li><a href="/expenses-report" class="">Expense Report</a></li>
                                    <li><a href="/invoice-report" class="">Invoice Report</a></li>
                                    <li><a href="/payment-report" class="">Payment Report</a></li>
                                    <li><a href="/project-report" class="">Project Report</a></li>
                                    <li><a href="/task-report" class="">Task Report</a></li>
                                    <li><a href="/user-report" class="">User Report</a></li>
                                    <li><a href="/employee-report" class="">Employee Report</a></li>
                                    <li><a href="/payslip-report" class="">Payslip Report</a></li>
                                    <li><a href="/attendance-report" class="">Attendance Report</a></li>
                                    <li><a href="/leave-report" class="">Leave Report</a></li>
                                    <li><a href="/daily-report" class="">Daily Report</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);" class="">
                                    General Settings
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul>
                                    <li><a href="/profile-settings" class="">Profile</a></li>
                                    <li><a href="/security-settings" class="">Security</a></li>
                                    <li><a href="/notification-settings" class="">Notifications</a></li>
                                    <li><a href="/connected-apps" class="">Connected Apps</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);" class="">
                                    Website Settings
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul>
                                    <li><a href="/bussiness-settings" class="">Business Settings</a></li>
                                    <li><a href="/seo-settings" class="">SEO Settings</a></li>
                                    <li><a href="/localization-settings" class="">Localization</a></li>
                                    <li><a href="/prefixes" class="">Prefixes</a></li>
                                    <li><a href="/preferences" class="">Preferences</a></li>
                                    <li><a href="/performance-appraisal" class="">Appearance</a></li>
                                    <li><a href="/language" class="">Language</a></li>
                                    <li><a href="/authentication-settings" class="">Authentication</a></li>
                                    <li><a href="/ai-settings" class="">AI Settings</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);" class="">App Settings<span class="menu-arrow"></span></a>
                                <ul>
                                    <li><a href="/salary-settings" class="">Salary Settings</a></li>
                                    <li><a href="/approval-settings" class="">Approval Settings</a></li>
                                    <li><a href="/invoice-settings" class="">Invoice Settings</a></li>
                                    <li><a href="/leave-type" class="">Leave Type</a></li>
                                    <li><a href="/custom-fields" class="">Custom Fields</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);" class="">
                                    System Settings
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul>
                                    <li><a href="/email-settings" class="">Email Settings</a></li>
                                    <li><a href="/email-template" class="">Email Templates</a></li>
                                    <li><a href="/sms-settings" class="">SMS Settings</a></li>
                                    <li><a href="/sms-template" class="">SMS Templates</a></li>
                                    <li><a href="/otp-settings" class="">OTP</a></li>
                                    <li><a href="/gdpr" class="">GDPR Cookies</a></li>
                                    <li><a href="/maintenance-mode" class="">Maintenance Mode</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);" class="">
                                    Financial Settings
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul>
                                    <li><a href="/payment-gateways" class="">Payment Gateways</a></li>
                                    <li><a href="/tax-rates" class="">Tax Rate</a></li>
                                    <li><a href="/currencies" class="">Currencies</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);" class="">Other Settings<span class="menu-arrow"></span></a>
                                <ul>
                                    <li><a href="/custom-css" class="">Custom CSS</a></li>
                                    <li><a href="/custom-js" class="">Custom JS</a></li>
                                    <li><a href="/cronjob" class="">Cronjob</a></li>
                                    <li><a href="/storage-settings" class="">Storage</a></li>
                                    <li><a href="/ban-ip-address" class="">Ban IP Address</a></li>
                                    <li><a href="/backup" class="">Backup</a></li>
                                    <li><a href="/clear-cache" class="">Clear Cache</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-pane fade " id="content">
                        <ul>
                            <li class="menu-title"><span>CONTENT</span></li>
                            <li class=""><a href="/pages">Pages</a></li>
                            <li class="submenu">
                                <a href="javascript:void(0);" class="">
                                    Blogs
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul>
                                    <li><a href="/blogs" class="">All Blogs</a></li>
                                    <li><a href="/blog-categories" class="">Categories</a></li>
                                    <li><a href="/blog-comments" class="">Comments</a></li>
                                    <li><a href="/blog-tags" class="">Blog Tags</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);" class="">
                                    Locations
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul>
                                    <li><a href="/countries" class="">Countries</a></li>
                                    <li><a href="/states" class="">States</a></li>
                                    <li><a href="/cities" class="">Cities</a></li>
                                </ul>
                            </li>
                            <li><a href="/testimonials" class="">Testimonials</a></li>
                            <li><a href="/faq" class="">FAQ’S</a></li>
                        </ul>
                    </div>
                    <div class="tab-pane fade  " id="pages">
                        <ul>
                            <li class="menu-title"><span>PAGES</span></li>
                            <li><a href="/starter" class=""><span>Starter</span></a></li>
                            <li><a href="/profile" class=""><span>Profile</span></a></li>
                            <li><a href="/gallery" class=""><span>Gallery</span></a></li>
                            <li><a href="/search-result" class=""><span>Search Results</span></a></li>
                            <li><a href="/timeline" class=""><span>Timeline</span></a></li>
                            <li><a href="/pricing" class=""><span>Pricing</span></a></li>
                            <li><a href="/coming-soon" class=""><span>Coming Soon</span></a></li>
                            <li><a href="/under-maintenance" class=""><span>Under Maintenance</span></a></li>
                            <li><a href="/under-construction" class=""><span>Under Construction</span></a></li>
                            <li><a href="/api-keys" class=""><span>API Keys</span></a></li>
                            <li><a href="/privacy-policy" class=""><span>Privacy Policy</span></a></li>
                            <li><a href="/terms-condition" class=""><span>Terms & Conditions</span></a></li>
                        </ul>
                    </div>
                    <div class="tab-pane fade  " id="authentication">
                        <ul>
                            <li class="menu-title"><span>AUTHENTICATION</span></li>
                            <li class="submenu">
                                <a href="javascript:void(0);" class="">
                                    Login<span class="menu-arrow"></span>
                                </a>
                                <ul>
                                    <li><a href="/login" class="">Cover</a></li>
                                    <li><a href="/login-2" class="">Illustration</a></li>
                                    <li><a href="/login-3" class="">Basic</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);" class="">
                                    Register<span class="menu-arrow"></span>
                                </a>
                                <ul>
                                    <li><a href="/register" class="">Cover</a></li>
                                    <li><a href="/register-2" class="">Illustration</a></li>
                                    <li><a href="/register-3" class="">Basic</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);" class="">
                                    Forgot Password<span class="menu-arrow"></span>
                                </a>
                                <ul>
                                    <li><a href="/forgot-password" class="">Cover</a></li>
                                    <li><a href="/forgot-password-2" class="">Illustration</a></li>
                                    <li><a href="/forgot-password-3" class="">Basic</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);" class="">
                                    Reset Password<span class="menu-arrow"></span>
                                </a>
                                <ul>
                                    <li><a href="/reset-password" class="">Cover</a></li>
                                    <li><a href="/reset-password-2" class="">Illustration</a></li>
                                    <li><a href="/reset-password-3" class="">Basic</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);" class="">
                                    Email Verification<span class="menu-arrow"></span>
                                </a>
                                <ul>
                                    <li><a href="/email-verification" class="">Cover</a></li>
                                    <li><a href="/email-verification-2" class="">Illustration</a></li>
                                    <li><a href="/email-verification-3" class="">Basic</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);" class="">
                                    2 Step Verification<span class="menu-arrow"></span>
                                </a>
                                <ul>
                                    <li><a href="/two-step-verification" class="">Cover</a></li>
                                    <li><a href="/two-step-verification-2" class="">Illustration</a></li>
                                    <li><a href="/two-step-verification-3" class="">Basic</a></li>
                                </ul>
                            </li>
                            <li><a href="/lock-screen" class="">Lock Screen</a></li>
                            <li><a href="/error-404" class="">404 Error</a></li>
                            <li><a href="/error-500" class="">500 Error</a></li>
                        </ul>
                    </div>
                    <div class="tab-pane fade " id="ui-elements">
                        <ul>
                            <li class="menu-title"><span>UI INTERFACE</span></li>
                            <li class="submenu">
                                <a href="javascript:void(0);"  class="">Base UI<span class="menu-arrow"></span>
                                </a>
                                <ul>
                                    <li>
                                        <a href="/ui-alerts" class="">Alerts</a>
                                    </li>
                                    <li>
                                        <a href="/ui-accordion" class="">Accordion</a>
                                    </li>
                                    <li>
                                        <a href="/ui-avatar" class="">Avatar</a>
                                    </li>
                                    <li>
                                        <a href="/ui-badges" class="">Badges</a>
                                    </li>
                                    <li>
                                        <a href="/ui-borders" class="">Border</a>
                                    </li>
                                    <li>
                                        <a href="/ui-buttons" class="">Buttons</a>
                                    </li>
                                    <li>
                                        <a href="/ui-buttons-group" class="">Button Group</a>
                                    </li>
                                    <li>
                                        <a href="/ui-breadcrumb" class="">Breadcrumb</a>
                                    </li>
                                    <li>
                                        <a href="/ui-cards" class="">Card</a>
                                    </li>
                                    <li>
                                        <a href="/ui-carousel" class="">Carousel</a>
                                    </li>
                                    <li>
                                        <a href="/ui-colors" class="">Colors</a>
                                    </li>
                                    <li>
                                        <a href="/ui-dropdowns" class="">Dropdowns</a>
                                    </li>
                                    <li>
                                        <a href="/ui-grid" class="">Grid</a>
                                    </li>
                                    <li>
                                        <a href="/ui-images" class="">Images</a>
                                    </li>
                                    <li>
                                        <a href="/ui-lightbox" class="">Lightbox</a>
                                    </li>
                                    <li>
                                        <a href="/ui-media" class="">Media</a>
                                    </li>
                                    <li>
                                        <a href="/ui-modals" class="">Modals</a>
                                    </li>
                                    <li>
                                        <a href="/ui-offcanvas" class="">Offcanvas</a>
                                    </li>
                                    <li>
                                        <a href="/ui-pagination" class="">Pagination</a>
                                    </li>
                                    <li>
                                        <a href="/ui-popovers" class="">Popovers</a>
                                    </li>
                                    <li>
                                        <a href="/ui-progress" class="">Progress</a>
                                    </li>
                                    <li>
                                        <a href="/ui-placeholders" class="">Placeholders</a>
                                    </li>
                                    <li>
                                        <a href="/ui-spinner" class="">Spinner</a>
                                    </li>
                                    <li>
                                        <a href="/ui-sweetalerts" class="">Sweet Alerts</a>
                                    </li>
                                    <li>
                                        <a href="/ui-nav-tabs" class="">Tabs</a>
                                    </li>
                                    <li>
                                        <a href="/ui-toasts" class="">Toasts</a>
                                    </li>
                                    <li>
                                        <a href="/ui-tooltips" class="">Tooltips</a>
                                    </li>
                                    <li>
                                        <a href="/ui-typography" class="">Typography</a>
                                    </li>
                                    <li>
                                        <a href="/ui-video" class="">Video</a>
                                    </li>
                                    <li>
                                        <a href="/ui-sortable" class="">Sortable</a>
                                    </li>
                                    <li>
                                        <a href="/ui-swiperjs" class="">Swiperjs</a>
                                    </li>
                                </ul>
                                   
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);"  class=""> Advanced UI <span class="menu-arrow"></span> </a>
                                <ul>
                                    <li>
                                        <a href="/ui-ribbon" class="">Ribbon</a>
                                    </li>
                                    <li>
                                        <a href="/ui-clipboard" class="">Clipboard</a>
                                    </li>
                                    <li>
                                        <a href="/ui-drag-drop" class="">Drag & Drop</a>
                                    </li>
                                    <li>
                                        <a href="/ui-rangeslider" class="">Range Slider</a>
                                    </li>
                                    <li>
                                        <a href="/ui-rating" class="">Rating</a>
                                    </li>
                                    <li>
                                        <a href="/ui-text-editor" class="">Text Editor</a>
                                    </li>
                                    <li>
                                        <a href="/ui-counter" class="">Counter</a>
                                    </li>
                                    <li>
                                        <a href="/ui-scrollbar" class="">Scrollbar</a>
                                    </li>
                                    <li>
                                        <a href="/ui-stickynote" class="">Sticky Note</a>
                                    </li>
                                    <li>
                                        <a href="/ui-timeline" class="">Timeline</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);" class=""> Forms <span class="menu-arrow"></span>
                                </a>
                                <ul>
                                    <li class="submenu submenu-two">
                                        <a href="javascript:void(0);" class="">Form Elements<span class="menu-arrow inside-submenu"></span></a>
                                        <ul>
                                            <li>
                                                <a href="/form-basic-inputs" class="">Basic Inputs</a>
                                            </li>
                                            <li>
                                                <a href="/form-checkbox-radios" class="">Checkbox & Radios</a>
                                            </li>
                                            <li>
                                                <a href="/form-input-groups" class="">Input Groups</a>
                                            </li>
                                            <li>
                                                <a href="/form-grid-gutters" class="">Grid & Gutters</a>
                                            </li>
                                            <li>
                                                <a href="/form-select" class="">Form Select</a>
                                            </li>
                                            <li>
                                                <a href="/form-mask" class="">Input Masks</a>
                                            </li>
                                            <li>
                                                <a href="/form-fileupload" class="">File Uploads</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="submenu submenu-two">
                                        <a href="javascript:void(0);" class="">Layouts<span class="menu-arrow inside-submenu"></span></a>
                                        <ul>
                                            <li>
                                                <a href="/form-horizontal"  class="">Horizontal Form</a>
                                            </li>
                                            <li>
                                                <a href="/form-vertical"  class="">Vertical Form</a>
                                            </li>
                                            <li>
                                                <a href="/form-floating-labels"  class="">Floating Labels</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="/form-validation"  class="">Form Validation</a>
                                    </li>
                                    <li>
                                        <a href="/form-select2"  class="">Select2</a>
                                    </li>
                                    <li>
                                        <a href="/form-wizard"  class="">Form Wizard</a>
                                    </li>
                                    <li>
                                        <a href="/form-pickers"  class="">Form Pickers</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);" class="">Tables <span class="menu-arrow"></span></a>
                                <ul>
                                    <li>
                                        <a href="/tables-basic"  class="">Basic Tables </a>
                                    </li>
                                    <li>
                                        <a href="/data-tables"  class="">Data Table </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);" class="">Charts<span class="menu-arrow"></span> </a>
                                <ul>
                                    <li>
                                        <a href="/chart-apex"  class="">Apex Charts</a>
                                    </li>
                                    <li>
                                        <a href="/chart-c3" class="">Chart C3</a>
                                    </li>
                                    <li>
                                        <a href="/chart-js" class="">Chart Js</a>
                                    </li>
                                    <li>
                                        <a href="/chart-morris" class="">Morris Charts</a>
                                    </li>
                                    <li>
                                        <a href="/chart-flot" class="">Flot Charts</a>
                                    </li>
                                    <li>
                                        <a href="/chart-peity" class="">Peity Charts</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);" class="">Icons<span class="menu-arrow"></span> </a>
                                <ul>
                                    <li>
                                        <a href="/icon-fontawesome" class="">Fontawesome Icons</a>
                                    </li>
                                    <li>
                                        <a href="/icon-tabler" class="">Tabler Icons</a>
                                    </li>
                                    <li>
                                        <a href="/icon-bootstrap" class="">Bootstrap Icons</a>
                                    </li>
                                    <li>
                                        <a href="/icon-remix" class="">Remix Icons</a>
                                    </li>
                                    <li>
                                        <a href="/icon-feather" class="">Feather Icons</a>
                                    </li>
                                    <li>
                                        <a href="/icon-ionic" class="">Ionic Icons</a>
                                    </li>
                                    <li>
                                        <a href="/icon-material" class="">Material Icons</a>
                                    </li>
                                    <li>
                                        <a href="/icon-pe7" class="">Pe7 Icons</a>
                                    </li>
                                    <li>
                                        <a href="/icon-simpleline" class="">Simpleline Icons</a>
                                    </li>
                                    <li>
                                        <a href="/icon-themify" class="">Themify Icons</a>
                                    </li>
                                    <li>
                                        <a href="/icon-weather" class="">Weather Icons</a>
                                    </li>
                                    <li>
                                        <a href="/icon-typicon" class="">Typicon Icons</a>
                                    </li>
                                    <li>
                                        <a href="/icon-flag" class="">Flag Icons</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);" class="">
                                    <i class="ti ti-table-plus"></i>
                                    <span>Maps</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul>
                                    <li>
                                        <a href="/maps-vector" class="">Vector</a>
                                    </li>
                                    <li>
                                        <a href="/maps-leaflet" class="">Leaflet</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="extras">
                        <ul>
                            <li class="menu-title"><span>EXTRAS</span></li>
                            <li><a href="#">Documentation</a></li>
                            <li><a href="#">Change Log</a></li>
                            <li class="submenu">
                                <a href="javascript:void(0);"><span>Multi Level</span><span class="menu-arrow"></span></a>
                                <ul>
                                    <li><a href="javascript:void(0);">Multilevel 1</a></li>
                                    <li class="submenu submenu-two">
                                        <a href="javascript:void(0);">Multilevel 2<span class="menu-arrow inside-submenu"></span></a>
                                        <ul>
                                            <li><a href="javascript:void(0);">Multilevel 2.1</a></li>
                                            <li class="submenu submenu-two submenu-three">
                                                <a href="javascript:void(0);">Multilevel 2.2<span class="menu-arrow inside-submenu inside-submenu-two"></span></a>
                                                <ul>
                                                    <li><a href="javascript:void(0);">Multilevel 2.2.1</a></li>
                                                    <li><a href="javascript:void(0);">Multilevel 2.2.2</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="javascript:void(0);">Multilevel 3</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Two Col Sidebar -->

<!-- Stacked Sidebar -->
<div class="stacked-sidebar" id="stacked-sidebar">
    <div class="sidebar sidebar-stacked" style="display: flex !important;">
        <div class="stacked-mini">
            <a href="/index" class="logo-small">
                <img src="assets/img/star1.png" alt="Logo">
            </a>
            <div class="sidebar-left slimscroll">
                <div class="d-flex align-items-center flex-column">
                    <div class="mb-1 notification-item">
                        <a href="#" class="btn btn-menubar position-relative">
                            <i class="ti ti-bell"></i>
                            <span class="notification-status-dot"></span>
                        </a>
                    </div>
                    <div class="mb-1">
                        <a href="#" class="btn btn-menubar btnFullscreen">
                            <i class="ti ti-maximize"></i>
                        </a>
                    </div>
                    <div class="mb-1">
                        <a href="/calendar" class="btn btn-menubar">
                            <i class="ti ti-layout-grid-remove"></i>
                        </a>
                    </div>
                    <div class="mb-1">
                        <a href="/chat" class="btn btn-menubar position-relative">
                            <i class="ti ti-brand-hipchat"></i>
                            <span class="badge bg-info rounded-pill d-flex align-items-center justify-content-center header-badge">5</span>
                        </a>
                    </div>
                    <div class="mb-1">
                        <a href="/email" class="btn btn-menubar">
                            <i class="ti ti-mail"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="sidebar-right d-flex justify-content-between flex-column">
            <div class="sidebar-scroll">
                <h6 class="mb-3">Welcome to SmartHR</h6>
                <div class="sidebar-profile text-center rounded bg-light p-3 mb-4">
                    <div class="avatar avatar-lg online mb-3">
                        <img src="assets/img/profiles/avatar-02.jpg" alt="Img" class="img-fluid rounded-circle">
                    </div>
                    <h6 class="fs-12 fw-normal mb-1">Adrian Herman</h6>
                    <p class="fs-10">System Admin</p>
                </div>
                <div class="stack-menu">
                    <div class="nav flex-column align-items-center nav-pills" role="tablist" aria-orientation="vertical">
                        <div class="row g-2">
                            <div class="col-6">
                                <a href="#menu-dashboard" role="tab" class="nav-link  show active " title="Dashboard" data-bs-toggle="tab" data-bs-target="#menu-dashboard" aria-selected="true">
                                    <span><i class="ti ti-smart-home"></i></span>
                                    <p>Dashboard</p>
                                </a>
                            </div>
                            <div class="col-6">
                                <a href="#menu-application" role="tab" class="nav-link  " title="Apps" data-bs-toggle="tab" data-bs-target="#menu-application" aria-selected="false">
                                    <span><i class="ti ti-layout-grid-add"></i></span>
                                    <p>Applications</p>
                                </a>
                            </div>
                            <div class="col-6">
                                <a href="#menu-superadmin" role="tab" class="nav-link " title="Apps" data-bs-toggle="tab" data-bs-target="#menu-superadmin" aria-selected="false">
                                    <span><i class="ti ti-user-star"></i></span>
                                    <p>Super Admin</p>
                                </a>
                            </div>
                            <div class="col-6">
                                <a href="#menu-layout" role="tab" class="nav-link " title="Layout" data-bs-toggle="tab" data-bs-target="#menu-layout" aria-selected="false">
                                    <span><i class="ti ti-layout-board-split"></i></span>
                                    <p>Layouts</p>
                                </a>
                            </div>
                            <div class="col-6">
                                <a href="#menu-project" role="tab" class="nav-link " title="Projects" data-bs-toggle="tab" data-bs-target="#menu-project" aria-selected="false">
                                    <span><i class="ti ti-folder"></i></span>
                                    <p>Projects</p>
                                </a>
                            </div>
                            <div class="col-6">
                                <a href="#menu-crm" role="tab" class="nav-link " title="CRM" data-bs-toggle="tab" data-bs-target="#menu-crm" aria-selected="false">
                                    <span><i class="ti ti-user-shield"></i></span>
                                    <p>Crm</p>
                                </a>
                            </div>
                            <div class="col-6">
                                <a href="#menu-hrm" role="tab" class="nav-link " title="HRM" data-bs-toggle="tab" data-bs-target="#menu-hrm" aria-selected="false">
                                    <span><i class="ti ti-users"></i></span>
                                    <p>Hrm</p>
                                </a>
                            </div>
                            <div class="col-6">
                                <a href="#menu-finance" role="tab" class="nav-link " title="Finance & Accounts" data-bs-toggle="tab" data-bs-target="#menu-finance" aria-selected="false">
                                    <span><i class="ti ti-shopping-cart-dollar"></i></span>
                                    <p>Finance & Accounts</p>
                                </a>
                            </div>
                            <div class="col-6">
                                <a href="#menu-administration" role="tab" class="nav-link " title="Administration" data-bs-toggle="tab" data-bs-target="#menu-administration" aria-selected="false">
                                    <span><i class="ti ti-cash"></i></span>
                                    <p>Administration</p>
                                </a>
                            </div>
                            <div class="col-6">
                                <a href="#menu-content" role="tab" class="nav-link " title="Content" data-bs-toggle="tab" data-bs-target="#menu-content" aria-selected="false">
                                    <span><i class="ti ti-license"></i></span>
                                    <p>Contents</p>
                                </a>
                            </div>
                            <div class="col-6">
                                <a href="#menu-pages" role="tab" class="nav-link " title="Pages"
                                    data-bs-toggle="tab" data-bs-target="#menu-pages" aria-selected="false">
                                    <span><i class="ti ti-page-break"></i></span>
                                    <p>Pages</p>
                                </a>
                            </div>
                            <div class="col-6">
                                <a href="#menu-authentication" role="tab" class="nav-link  " title="Authentication" data-bs-toggle="tab" data-bs-target="#menu-authentication" aria-selected="false">
                                    <span><i class="ti ti-lock-check"></i></span>
                                    <p>Authentication</p>
                                </a>
                            </div>
                            <div class="col-6">
                                <a href="#menu-ui-elements" role="tab" class="nav-link " title="UI Elements" data-bs-toggle="tab" data-bs-target="#menu-ui-elements" aria-selected="false">
                                    <span><i class="ti ti-ux-circle"></i></span>
                                    <p>Basic UI</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade  show active "  id="menu-dashboard">
                            <ul class="stack-submenu">
                                <li><a href="/index" class="active">Admin Dashboard</a></li>
                        <li><a href="/employee-dashboard" class="">Employee Dashboard</a></li>
                        <li><a href="/deals-dashboard" class="">Deals Dashboard</a></li>
                        <li><a href="/leads-dashboard" class="">Leads Dashboard</a></li>
                            </ul>
                        </div>
                        <div class="tab-pane fade " id="menu-superadmin">
                            <ul class="stack-submenu">
                        <li><a href="/dashboard" class="">Dashboard</a></li>
                        <li><a href="/companies"  class="">Companies</a></li>
                        <li><a href="/subscription" class="">Subscriptions</a></li>
                        <li><a href="/packages" class="">Packages</a></li>
                        <li><a href="/domain" class="">Domain</a></li>
                        <li><a href="/purchase-transaction" class="">Purchase Transaction</a></li>

                            </ul>
                        </div>
                        <div class="tab-pane fade " id="menu-application">
                            <ul class="stack-submenu">
                                <li><a href="/chat" class="">Chat</a></li>
                                <li class="submenu submenu-two">
                                    <a href="/call" class="">Calls<span
                                            class="menu-arrow inside-submenu"></span></a>
                                    <ul>
                                        <li><a href="/voice-call" class="">Voice Call</a></li>
                                        <li><a href="/video-call" class="">Video Call</a></li>
                                        <li><a href="/outgoing-call"  class="">Outgoing Call</a></li>
                                        <li><a href="/incoming-call" class="">Incoming Call</a></li>
                                         <li><a href="/call-history"  class="">Call History</a></li>

                                    </ul>
                                </li>
                                <li><a href="/calendar" class="">Calendar</a></li>
                                <li><a href="/email" class="">Email</a></li>
                                <li><a href="/todo" class="">To Do</a></li>
                                <li><a href="/notes" class="">Notes</a></li>
                                <li><a href="/file-manager" class="">File Manager</a></li>
                                <li><a href="/kanban-view" class="">Kanban</a></li>
                                <li><a href="/invoices" class="">Invoices</a></li>
                            </ul>
                        </div>
                        <div class="tab-pane fade " id="menu-layout">
                            <ul class="stack-submenu">
                                <li class="">
                                    <a href="/layout-horizontal">
                                        <span>Horizontal</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="/layout-detached">
                                        <span>Detached</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="/layout-modern">
                                        <span>Modern</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="/layout-two-column">
                                        <span>Two Column </span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="/layout-hovered">
                                        <span>Hovered</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="/layout-box">
                                        <span>Boxed</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="/layout-horizontal-single">
                                        <span>Horizontal Single</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="/layout-horizontal-overlay">
                                        <span>Horizontal Overlay</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="/layout-horizontal-box">
                                        <span>Horizontal Box</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="/layout-horizontal-sidemenu">
                                        <span>Menu Aside</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="/layout-vertical-transparent">
                                        <span>Transparent</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="/layout-without-header">
                                        <span>Without Header</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="/layout-rtl">
                                        <span>RTL</span>
                                    </a>
                                </li>
                                <li class=""> 
                                    <a href="/layout-dark">
                                        <span>Dark</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-pane fade " id="menu-project">
                            <ul class="stack-submenu">
                                <li class=""><a href="/clients-grid"><span>Clients</span></a></li>
                                <li class="submenu">
                                    <a href="javascript:void(0);" class=""><span>Projects</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="/projects-grid" class="">Projects</a></li>
                                        <li><a href="/tasks" class="">Tasks</a></li>
                                        <li><a href="/task-board" class="">Task Board</a></li>
                                    </ul>
                                </li>	
                            </ul>
                        </div>
                        <div class="tab-pane fade " id="menu-crm">
                            <ul class="stack-submenu">
                                <li class=""><a href="/contacts-grid"><span>Contacts</span></a></li>
                                <li  class=""><a href="/companies-grid"><span>Companies</span></a></li>
                                <li class=""><a href="/deals-grid"><span>Deals</span></a></li>
                                <li class=""><a href="/leads-grid"><span>Leads</span></a></li>
                                <li class=""><a href="/pipeline"><span>Pipeline</span></a></li>
                                <li class=""><a href="/analytics"><span>Analytics</span></a></li>
                                <li class=""><a href="/activity"><span>Activities</span></a></li>

                            </ul>
                        </div>
                        <div class="tab-pane fade " id="menu-hrm">
                            <ul class="stack-submenu">
                                <li class="submenu">
                                    <a href="javascript:void(0);" class=""><span>Employees</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="/employees" class="">Employee Lists</a></li>
                                        <li><a href="/employees-grid" class="">Employee Grid</a></li>
                                        <li><a href="/employee-details" class="">Employee Details</a></li>
                                        <li><a href="/departments" class="">Departments</a></li>
                                        <li><a href="/designations" class="">Designations</a></li>
                                        <li><a href="/policy" class="">Policies</a></li>
        
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);" class=""><span>Tickets</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="/tickets" class="">Tickets</a></li>
                                        <li><a href="/ticket-details" class="">Ticket Details</a></li>
                                    </ul>
                                </li>
                                <li class=""><a href="/holidays"><span>Holidays</span></a></li>
                                <li class="submenu">
                                    <a href="javascript:void(0);" class=""><span>Attendance</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li class="submenu submenu-two">
                                            <a href="javascript:void(0);" class="">Leaves<span class="menu-arrow inside-submenu"></span></a>
                                            <ul>
                                                <li><a href="/leaves" class="" >Leaves (Admin)</a></li>
                                                <li><a href="/leaves-employee" class="">Leave (Employee)</a></li>
                                                <li><a href="/leave-settings" class="">Leave Settings</a></li>											
                                            </ul>												
                                        </li>
                                        <li><a href="/attendance-admin" class="">Attendance (Admin)</a></li>
                                <li><a href="/attendance-employee" class="">Attendance (Employee)</a></li>
                                <li><a href="/timesheets" class="">Timesheets</a></li>
                                <li><a href="/schedule-timing" class="">Shift & Schedule</a></li>
                                <li><a href="/overtime" class="">Overtime</a></li>                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);"  class=""><span>Performance</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="/performance-indicator" class="">Performance Indicator</a></li>
                                <li><a href="/performance-review" class="">Performance Review</a></li>
                                <li><a href="/performance-appraisal" class="">Performance Appraisal</a></li>
                                <li><a href="/goal-tracking" class="">Goal List</a></li>
                                <li><a href="/goal-type" class="">Goal Type</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);" class=""><span>Training</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="/training" class="">Training List</a></li>
                                        <li><a href="/trainers" class="">Trainers</a></li>
                                        <li><a href="/training-type" class="">Training Type</a></li>
                                    </ul>
                                </li>
                                <li class=""><a href="/promotion"><span>Promotion</span></a></li>
                                <li class=""><a href="/resignation"><span>Resignation</span></a></li>
                                <li class=""><a href="/termination"><span>Termination</span></a></li>		
                            </ul>
                        </div>
                        <div class="tab-pane fade " id="menu-finance">
                            <ul class="stack-submenu">
                                <li class="submenu">
                                    <a href="javascript:void(0);" class=""><span>Sales</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="/estimates" class="">Estimates</a></li>
                                <li><a href="/invoice" class="">Invoices</a></li>
                                <li><a href="/payments" class="">Payments</a></li>
                                <li><a href="/expenses" class="">Expenses</a></li>
                                <li><a href="/provident-fund" class="">Provident Fund</a></li>
                                <li><a href="/taxes" class="">Taxes</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);" class=""><span>Accounting</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="/categories" class="" >Categories</a></li>
                                        <li><a href="/budgets" class="">Budgets</a></li>
                                        <li><a href="/budget-expenses" class="">Budget Expenses</a></li>
                                        <li><a href="/budget-revenues" class="">Budget Revenues</a></li>

                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);" class=""><span>Payroll</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="/employee-salary" class="">Employee Salary</a></li>
                                <li><a href="/payslip" class="">Payslip</a></li>
                                <li><a href="/payroll" class="">Payroll Items</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-pane fade " id="menu-administration">
                            <ul class="stack-submenu">
                                <li class="submenu">
                                    <a href="javascript:void(0);" class=""><span>Assets</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="/assets" class="">Assets</a></li>
                                        <li><a href="/asset-categories" class="">Asset Categories</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);" class=""><span>Help & Supports</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="/knowledgebase" class="">Knowledge Base</a></li>
                                        <li><a href="/activity" class="">Activities</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);" class=""><span>User Management</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="/users" class="">Users</a></li>
                                        <li><a href="/roles-permissions" class="">Roles & Permissions</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);" class=""><span>Reports</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="/expenses-report" class="">Expense Report</a></li>
                                        <li><a href="/invoice-report" class="">Invoice Report</a></li>
                                        <li><a href="/payment-report" class="">Payment Report</a></li>
                                        <li><a href="/project-report" class="">Project Report</a></li>
                                        <li><a href="/task-report" class="">Task Report</a></li>
                                        <li><a href="/user-report" class="">User Report</a></li>
                                        <li><a href="/employee-report" class="">Employee Report</a></li>
                                        <li><a href="/payslip-report" class="">Payslip Report</a></li>
                                        <li><a href="/attendance-report" class="">Attendance Report</a></li>
                                        <li><a href="/leave-report" class="">Leave Report</a></li>
                                        <li><a href="/daily-report" class="">Daily Report</a></li> </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);" class="">
                                        General Settings
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="/profile-settings" class="">Profile</a></li>
                                        <li><a href="/security-settings" class="">Security</a></li>
                                        <li><a href="/notification-settings" class="">Notifications</a></li>
                                        <li><a href="/connected-apps" class="">Connected Apps</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);" class="">
                                        Website Settings
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="/bussiness-settings" class="">Business Settings</a></li>
                                        <li><a href="/seo-settings" class="">SEO Settings</a></li>
                                        <li><a href="/localization-settings" class="">Localization</a></li>
                                        <li><a href="/prefixes" class="">Prefixes</a></li>
                                        <li><a href="/preferences" class="">Preferences</a></li>
                                        <li><a href="/performance-appraisal" class="">Appearance</a></li>
                                        <li><a href="/language" class="">Language</a></li>
                                        <li><a href="/authentication-settings" class="">Authentication</a></li>
                                        <li><a href="/ai-settings" class="">AI Settings</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);" class="">App Settings<span class="menu-arrow"></span></a>
                                    <ul>
                                        <li><a href="/salary-settings" class="">Salary Settings</a></li>
                                        <li><a href="/approval-settings" class="">Approval Settings</a></li>
                                        <li><a href="/invoice-settings" class="">Invoice Settings</a></li>
                                        <li><a href="/leave-type" class="">Leave Type</a></li>
                                        <li><a href="/custom-fields" class="">Custom Fields</a></li>                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);"  class="">
                                        System Settings
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="/email-settings" class="">Email Settings</a></li>
                                        <li><a href="/email-template" class="">Email Templates</a></li>
                                        <li><a href="/sms-settings" class="">SMS Settings</a></li>
                                        <li><a href="/sms-template" class="">SMS Templates</a></li>
                                        <li><a href="/otp-settings" class="">OTP</a></li>
                                        <li><a href="/gdpr" class="">GDPR Cookies</a></li>
                                        <li><a href="/maintenance-mode" class="">Maintenance Mode</a></li>

                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);" class="">
                                        Financial Settings
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="/payment-gateways" class="">Payment Gateways</a></li>
                                        <li><a href="/tax-rates" class="">Tax Rate</a></li>
                                        <li><a href="/currencies" class="">Currencies</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);"  class="">Other Settings<span class="menu-arrow"></span></a>
                                    <ul>
                                        <li><a href="/custom-css" class="">Custom CSS</a></li>
                                        <li><a href="/custom-js" class="">Custom JS</a></li>
                                        <li><a href="/cronjob" class="">Cronjob</a></li>
                                        <li><a href="/storage-settings" class="">Storage</a></li>
                                        <li><a href="/ban-ip-address" class="">Ban IP Address</a></li>
                                        <li><a href="/backup" class="">Backup</a></li>
                                        <li><a href="/clear-cache" class="">Clear Cache</a></li>                                    </ul>
                               
                            </ul>
                        </div>
                        <div class="tab-pane fade " id="menu-content">
                            <ul class="stack-submenu">
                                <li class="submenu">
                                    <a href="javascript:void(0);" class="">Blogs<span class="menu-arrow"></span></a>
                                    <ul>
                                        <li class=""><a href="/blogs">All Blogs</a></li>
                                        <li class=""><a href="/blog-categories">Categories</a></li>
                                        <li class=""><a href="/blog-comments">Comments</a></li>
                                        <li class=""><a href="/blog-tags">Tags</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);" class="">Locations<span class="menu-arrow"></span></a>
                                    <ul>
                                        <li><a href="/countries" class="">Countries</a></li>
                                        <li><a href="/states" class="">States</a></li>
                                        <li><a href="/cities" class="">Cities</a></li>

                                    </ul>
                                </li>
                                <li><a href="/testimonials" class="">Testimonials</a></li>
                                <li><a href="/faq" class="">FAQ’S</a></li>

                            </ul>
                        </div>
                        <div class="tab-pane fade " id="menu-pages">
                            <ul class="stack-submenu">
                                <li class=""><a href="/starter"><span>Starter</span></a></li>
                        <li class=""><a href="/profile"><span>Profile</span></a></li>
                        <li class=""><a href="/gallery"><span>Gallery</span></a></li>
                        <li class=""><a href="/search-result"><span>Search Results</span></a></li>
                        <li class=""><a href="/timeline"><span>Timeline</span></a></li>
                        <li class=""><a href="/pricing"><span>Pricing</span></a></li>
                        <li class=""><a href="/coming-soon"><span>Coming Soon</span></a></li>
                        <li class=""><a href="/under-maintenance"><span>Under Maintenance</span></a></li>
                        <li class=""><a href="/under-construction"><span>Under Construction</span></a></li>
                        <li class=""><a href="/api-keys"><span>API Keys</span></a></li>
                        <li class=""><a href="/privacy-policy"><span>Privacy Policy</span></a></li>
                        <li class=""><a href="/terms-condition"><span>Terms & Conditions</span></a></li>
                            </ul>
                        </div>
                        <div class="tab-pane fade  " id="menu-authentication">
                            <ul class="stack-submenu">
                                <li class="submenu">
                                    <a href="javascript:void(0);" class="">Login<span class="menu-arrow"></span></a>
                                    <ul>
                                        <li><a href="/login" class="">Cover</a></li>
                                        <li><a href="/login-2" class="">Illustration</a></li>
                                        <li><a href="/login-3" class="">Basic</a></li>                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);" class="">Register<span class="menu-arrow"></span></a>
                                    <ul>
                                        <li><a href="/register" class="">Cover</a></li>
                                        <li><a href="/register-2" class="">Illustration</a></li>
                                        <li><a href="/register-3" class="">Basic</a></li>

                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);" class="">Reset Password<span class="menu-arrow"></span></a>
                                    <ul>
                                        <li><a href="/reset-password" class="">Cover</a></li>
                                        <li><a href="/reset-password-2" class="">Illustration</a></li>
                                        <li><a href="/reset-password-3" class="">Basic</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);" class="">Email Verification<span class="menu-arrow"></span></a>
                                    <ul>
                                        <li><a href="/email-verification" class="">Cover</a></li>
                                        <li><a href="/email-verification-2" class="">Illustration</a></li>
                                        <li><a href="/email-verification-3" class="">Basic</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);" class="">2 Step Verification<span class="menu-arrow"></span></a>
                                    <ul>
                                        <li><a href="/two-step-verification" class="">Cover</a></li>
                                        <li><a href="/two-step-verification-2" class="">Illustration</a></li>
                                        <li><a href="/two-step-verification-3" class="">Basic</a></li>
                                    </ul>
                                </li>
                                <li><a href="/lock-screen" class="">Lock Screen</a></li>
                                <li><a href="/error-404" class="">404 Error</a></li>
                                <li><a href="/error-500" class="">500 Error</a></li>
                            </ul>
                        </div>
                        <div class="tab-pane fade " id="menu-ui-elements">
                            <ul class="stack-submenu">
                                <li class="submenu">
                                    <a href="javascript:void(0);" class="">Base UI<span class="menu-arrow"></span></a>
                                    <ul>
                                        <li>
                                            <a href="/ui-alerts" class="">Alerts</a>
                                        </li>
                                        <li>
                                            <a href="/ui-accordion" class="">Accordion</a>
                                        </li>
                                        <li>
                                            <a href="/ui-avatar" class="">Avatar</a>
                                        </li>
                                        <li>
                                            <a href="/ui-badges" class="">Badges</a>
                                        </li>
                                        <li>
                                            <a href="/ui-borders" class="">Border</a>
                                        </li>
                                        <li>
                                            <a href="/ui-buttons" class="">Buttons</a>
                                        </li>
                                        <li>
                                            <a href="/ui-buttons-group" class="">Button Group</a>
                                        </li>
                                        <li>
                                            <a href="/ui-breadcrumb" class="">Breadcrumb</a>
                                        </li>
                                        <li>
                                            <a href="/ui-cards" class="">Card</a>
                                        </li>
                                        <li>
                                            <a href="/ui-carousel" class="">Carousel</a>
                                        </li>
                                        <li>
                                            <a href="/ui-colors" class="">Colors</a>
                                        </li>
                                        <li>
                                            <a href="/ui-dropdowns" class="">Dropdowns</a>
                                        </li>
                                        <li>
                                            <a href="/ui-grid" class="">Grid</a>
                                        </li>
                                        <li>
                                            <a href="/ui-images" class="">Images</a>
                                        </li>
                                        <li>
                                            <a href="/ui-lightbox" class="">Lightbox</a>
                                        </li>
                                        <li>
                                            <a href="/ui-media" class="">Media</a>
                                        </li>
                                        <li>
                                            <a href="/ui-modals" class="">Modals</a>
                                        </li>
                                        <li>
                                            <a href="/ui-offcanvas" class="">Offcanvas</a>
                                        </li>
                                        <li>
                                            <a href="/ui-pagination" class="">Pagination</a>
                                        </li>
                                        <li>
                                            <a href="/ui-popovers" class="">Popovers</a>
                                        </li>
                                        <li>
                                            <a href="/ui-progress" class="">Progress</a>
                                        </li>
                                        <li>
                                            <a href="/ui-placeholders" class="">Placeholders</a>
                                        </li>
                                        <li>
                                            <a href="/ui-spinner" class="">Spinner</a>
                                        </li>
                                        <li>
                                            <a href="/ui-sweetalerts" class="">Sweet Alerts</a>
                                        </li>
                                        <li>
                                            <a href="/ui-nav-tabs" class="">Tabs</a>
                                        </li>
                                        <li>
                                            <a href="/ui-toasts" class="">Toasts</a>
                                        </li>
                                        <li>
                                            <a href="/ui-tooltips" class="">Tooltips</a>
                                        </li>
                                        <li>
                                            <a href="/ui-typography" class="">Typography</a>
                                        </li>
                                        <li>
                                            <a href="/ui-video" class="">Video</a>
                                        </li>
                                        <li>
                                            <a href="/ui-sortable" class="">Sortable</a>
                                        </li>
                                        <li>
                                            <a href="/ui-swiperjs" class="">Swiperjs</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);" class=""> Advanced UI<span class="menu-arrow"></span></a>
                                    <ul>
                                        <li>
                                            <a href="/ui-ribbon" class="">Ribbon</a>
                                        </li>
                                        <li>
                                            <a href="/ui-clipboard" class="">Clipboard</a>
                                        </li>
                                        <li>
                                            <a href="/ui-drag-drop" class="">Drag & Drop</a>
                                        </li>
                                        <li>
                                            <a href="/ui-rangeslider" class="">Range Slider</a>
                                        </li>
                                        <li>
                                            <a href="/ui-rating" class="">Rating</a>
                                        </li>
                                        <li>
                                            <a href="/ui-text-editor" class="">Text Editor</a>
                                        </li>
                                        <li>
                                            <a href="/ui-counter" class="">Counter</a>
                                        </li>
                                        <li>
                                            <a href="/ui-scrollbar" class="">Scrollbar</a>
                                        </li>
                                        <li>
                                            <a href="/ui-stickynote" class="">Sticky Note</a>
                                        </li>
                                        <li>
                                            <a href="/ui-timeline" class="">Timeline</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);" class="">Forms<span class="menu-arrow"></span> </a>
                                    <ul>
                                        <li class="submenu submenu-two">
                                            <a href="javascript:void(0);" class="">Form Elements<span class="menu-arrow inside-submenu"></span></a>
                                            <ul>
                                                <li>
                                                    <a href="/form-basic-inputs" class="">Basic Inputs</a>
                                                </li>
                                                <li>
                                                    <a href="/form-checkbox-radios" class="">Checkbox & Radios</a>
                                                </li>
                                                <li>
                                                    <a href="/form-input-groups" class="">Input Groups</a>
                                                </li>
                                                <li>
                                                    <a href="/form-grid-gutters" class="">Grid & Gutters</a>
                                                </li>
                                                <li>
                                                    <a href="/form-select" class="">Form Select</a>
                                                </li>
                                                <li>
                                                    <a href="/form-mask" class="">Input Masks</a>
                                                </li>
                                                <li>
                                                    <a href="/form-fileupload" class="">File Uploads</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="submenu submenu-two">
                                            <a href="javascript:void(0);" class="">Layouts<span class="menu-arrow inside-submenu"></span></a>
                                            <ul>
                                                <li>
                                                    <a href="/form-horizontal"  class="">Horizontal Form</a>
                                                </li>
                                                <li>
                                                    <a href="/form-vertical"  class="">Vertical Form</a>
                                                </li>
                                                <li>
                                                    <a href="/form-floating-labels"  class="">Floating Labels</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="/form-validation"  class="">Form Validation</a>
                                        </li>
                                        <li>
                                            <a href="/form-select2"  class="">Select2</a>
                                        </li>
                                        <li>
                                            <a href="/form-wizard"  class="">Form Wizard</a>
                                        </li>
                                        <li>
                                            <a href="/form-pickers"  class="">Form Pickers</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);" class="">Tables<span class="menu-arrow"></span></a>
                                    <ul>
                                        <li>
                                            <a href="/tables-basic"  class="">Basic Tables </a>
                                        </li>
                                        <li>
                                            <a href="/data-tables"  class="">Data Table </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);" class="">Charts<span class="menu-arrow"></span> </a>
                                    <ul>
                                        <li>
                                            <a href="/chart-apex"  class="">Apex Charts</a>
                                        </li>
                                        <li>
                                            <a href="/chart-c3" class="">Chart C3</a>
                                        </li>
                                        <li>
                                            <a href="/chart-js" class="">Chart Js</a>
                                        </li>
                                        <li>
                                            <a href="/chart-morris" class="">Morris Charts</a>
                                        </li>
                                        <li>
                                            <a href="/chart-flot" class="">Flot Charts</a>
                                        </li>
                                        <li>
                                            <a href="/chart-peity" class="">Peity Charts</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);" class="">Icons<span class="menu-arrow"></span> </a>
                                    <ul>
                                        <li>
                                            <a href="/icon-fontawesome" class="">Fontawesome Icons</a>
                                        </li>
                                        <li>
                                            <a href="/icon-tabler" class="">Tabler Icons</a>
                                        </li>
                                        <li>
                                            <a href="/icon-bootstrap" class="">Bootstrap Icons</a>
                                        </li>
                                        <li>
                                            <a href="/icon-remix" class="">Remix Icons</a>
                                        </li>
                                        <li>
                                            <a href="/icon-feather" class="">Feather Icons</a>
                                        </li>
                                        <li>
                                            <a href="/icon-ionic" class="">Ionic Icons</a>
                                        </li>
                                        <li>
                                            <a href="/icon-material" class="">Material Icons</a>
                                        </li>
                                        <li>
                                            <a href="/icon-pe7" class="">Pe7 Icons</a>
                                        </li>
                                        <li>
                                            <a href="/icon-simpleline" class="">Simpleline Icons</a>
                                        </li>
                                        <li>
                                            <a href="/icon-themify" class="">Themify Icons</a>
                                        </li>
                                        <li>
                                            <a href="/icon-weather" class="">Weather Icons</a>
                                        </li>
                                        <li>
                                            <a href="/icon-typicon" class="">Typicon Icons</a>
                                        </li>
                                        <li>
                                            <a href="/icon-flag" class="">Flag Icons</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);" class="">
                                        <i class="ti ti-table-plus"></i>
                                        <span>Maps</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="/maps-vector" class="">Vector</a>
                                        </li>
                                        <li>
                                            <a href="/maps-leaflet" class="">Leaflet</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-3">
                <a href="javascript:void(0);" class="d-flex align-items-center fs-12 mb-3">Documentation</a>
                <a href="javascript:void(0);" class="d-flex align-items-center fs-12">Change Log<span class="badge bg-pink badge-xs text-white fs-10 ms-2">v4.0.2</span></a>
            </div>
        </div>
    </div>
</div>
<!-- /Stacked Sidebar -->


<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Get the current page URL
        let currentPage = window.location.pathname.split("/").pop();
       // Select all sidebar links
        let menuItems = document.querySelectorAll("#sidebar-menu a");
        menuItems.forEach(item => {
            // Get the href of each menu item
            let menuItemHref = item.getAttribute("href");
            // Compare the current page with menu href
            if (menuItemHref === currentPage) {
                item.classList.add("active");
                // Optionally highlight the parent li
                item.closest("li").classList.add("active");
            }
        });
    });
</script>