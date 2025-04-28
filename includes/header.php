<!-- Header -->
<div class="header">
    <div class="main-header">

        <div class="header-left">
            <a href="index.php" class="logo">
                <img src="assets/img/logo.png" alt="Logo">
            </a>
            <a href="index.php" class="dark-logo">
                <img src="assets/img/logo-white.png" alt="Logo">
            </a>
        </div>

        <a id="mobile_btn" class="mobile_btn" href="#sidebar">
            <span class="bar-icon">
                <span></span>
                <span></span>
                <span></span>
            </span>
        </a>

        <div class="header-user">
            <div class="nav user-menu nav-list">

                <div class="me-auto d-flex align-items-center" id="header-search">
                    <a id="toggle_btn" href="javascript:void(0);" class="btn btn-menubar me-1">
                        <i class="ti ti-arrow-bar-to-left"></i>
                    </a>
                    <!-- Search -->
                    <div class="input-group input-group-flat d-inline-flex me-1">
                        <span class="input-icon-addon">
                            <i class="ti ti-search"></i>
                        </span>
                        <input type="text" class="form-control" placeholder="Search in HRMS">
                        <span class="input-group-text">
                            <kbd>CTRL + / </kbd>
                        </span>
                    </div>
                    <!-- /Search -->
                    <!-- <div class="dropdown crm-dropdown">
                        <a href="#" class="btn btn-menubar me-1" data-bs-toggle="dropdown">
                            <i class="ti ti-layout-grid"></i>
                        </a>
                        <div class="dropdown-menu dropdown-lg dropdown-menu-start">
                            <div class="card mb-0 border-0 shadow-none">
                                <div class="card-header">
                                    <h4>CRM</h4>
                                </div>
                                <div class="card-body pb-1">		
                                    <div class="row">
                                        <div class="col-sm-6">							
                                            <a href="/contacts" class="d-flex align-items-center justify-content-between p-2 crm-link mb-3">
                                                <span class="d-flex align-items-center me-3">
                                                    <i class="ti ti-user-shield text-default me-2"></i>Contacts
                                                </span>
                                                <i class="ti ti-arrow-right"></i>
                                            </a>							
                                            <a href="/deals-grid" class="d-flex align-items-center justify-content-between p-2 crm-link mb-3">
                                                <span class="d-flex align-items-center me-3">
                                                    <i class="ti ti-heart-handshake text-default me-2"></i>Deals
                                                </span>
                                                <i class="ti ti-arrow-right"></i>
                                            </a>								
                                            <a href="/pipeline" class="d-flex align-items-center justify-content-between p-2 crm-link mb-3">
                                                <span class="d-flex align-items-center me-3">
                                                    <i class="ti ti-timeline-event-text text-default me-2"></i>Pipeline
                                                </span>
                                                <i class="ti ti-arrow-right"></i>
                                            </a>		
                                        </div>
                                        <div class="col-sm-6">							
                                            <a href="/companies-grid" class="d-flex align-items-center justify-content-between p-2 crm-link mb-3">
                                                <span class="d-flex align-items-center me-3">
                                                    <i class="ti ti-building text-default me-2"></i>Companies
                                                </span>
                                                <i class="ti ti-arrow-right"></i>
                                            </a>								
                                            <a href="/leads-grid" class="d-flex align-items-center justify-content-between p-2 crm-link mb-3">
                                                <span class="d-flex align-items-center me-3">
                                                    <i class="ti ti-user-check text-default me-2"></i>Leads
                                                </span>
                                                <i class="ti ti-arrow-right"></i>
                                            </a>								
                                            <a href="/activity" class="d-flex align-items-center justify-content-between p-2 crm-link mb-3">
                                                <span class="d-flex align-items-center me-3">
                                                    <i class="ti ti-activity text-default me-2"></i>Activities
                                                </span>
                                                <i class="ti ti-arrow-right"></i>
                                            </a>		
                                        </div>
                                    </div>		
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!-- <a href="/profile-settings" class="btn btn-menubar">
                        <i class="ti ti-settings-cog"></i>
                    </a>	 -->
                </div>

                <!-- Horizontal Single -->
                <div class="sidebar sidebar-horizontal" id="horizontal-single">
                    <div class="sidebar-menu">
                        <div class="main-menu">
                            <ul class="nav-menu">
                                <li class="menu-title">
                                    <span>Main</span>
                                </li>
                                <li class="submenu">
                                    <a href="#" class="active subdrop">
                                        <i class="ti ti-smart-home"></i><span>Dashboard</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="/index" class="active">Admin Dashboard</a></li>
                                        <li><a href="/employee-dashboard" class="">Employee Dashboard</a></li>
                                        <li><a href="/deals-dashboard" class="">Deals Dashboard</a></li>
                                        <li><a href="/leads-dashboard" class="">Leads Dashboard</a></li>                                    </ul>
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
                                        <li>
                                            <a href="/layout-horizontal" class="">
                                                <span>Horizontal</span>
                                            </a>
                                        </li>
                                        <li >
                                            <a href="/layout-detached" class="">
                                                <span>Detached</span>
                                            </a>
                                        </li>
                                        <li >
                                            <a href="/layout-modern" class="">
                                                <span>Modern</span>
                                            </a>
                                        </li>
                                        <li >
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
                                            <a href="/layout-box"  class="">
                                                <span>Boxed</span>
                                            </a>
                                        </li>
                                        <li >
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
                                            <a href="javascript:void(0);" class=""><span>Projects</span>
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
                                            <a href="javascript:void(0);"  class=""><span>Employees</span>
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
                                        <li class=""><a href="/holidays"><span>Holidays</span></a></li>                                        <li class="submenu">
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
                                        <li><a href="/termination" class=""><span>Termination</span></a></li>														
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
                                            <a href="javascript:void(0);"  class=""><span>Payroll</span>
                                                <span class="menu-arrow"></span>
                                            </a>
                                            <ul>
                                                <li><a href="/employee-salary" class="">Employee Salary</a></li>
                                                <li><a href="/payslip" class="">Payslip</a></li>
                                                <li><a href="/payroll" class="">Payroll Items</a></li>
                                            </ul>
                                        </li>
                                        <li class="submenu">
                                            <a href="javascript:void(0);"  class=""><span>Assets</span>
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
                                                <li><a href="/roles-permissions" class="">Roles & Permissions</a></li>  </ul>
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
                                                        <li><a href="/connected-apps" class="">Connected Apps</a></li>                                                    </ul>
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
                                                    <a href="javascript:void(0);"class="">Blogs<span class="menu-arrow"></span></a>
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
                                        <li><a href="/cities" class="">Cities</a></li>                                                    </ul>
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
                                                        <li><a href="/register-3" class="">Basic</a></li>                                                    </ul>
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
                                        <li><a href="/email-verification-3" class="">Basic</a></li>                                                    </ul>
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
                                                    <a href="javascript:void(0);" class="">
                                                        <i class="ti ti-input-search"></i>
                                                        <span>Forms</span>
                                                        <span class="menu-arrow"></span>
                                                    </a>
                                                    <ul>
                                                        <li class="submenu submenu-two">
                                                            <a href="javascript:void(0);"  class="">Form Elements <span class="menu-arrow inside-submenu"></span>
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
                        </div>
                    </div>
                </div>
                <!-- /Horizontal Single -->

                <div class="d-flex align-items-center">
                <!-- <div class="me-2 mb-2">
                <div class="dropdown">
                   <a href="javascript:void(0);" class="btn btn-primary text-start border-0 dropdown-toggle border btn-sm d-inline-flex align-items-center " data-bs-toggle="dropdown">
                            New Ticket
                            <i class="fa-solid fa-angle-down px-2 fs=10"></i>
                            </a>
                            <ul class="dropdown-menu  dropdown-menu-end p-0">
                                <li>
                                  <a href="javascript:void(0);" class="dropdown-item rounded-1">Flight</a>
                                 </li>
                               <li>
                               <a href="javascript:void(0);" class="dropdown-item rounded-1">Train</a>
                            </li>
                         </ul>
                      </div>
                    </div> -->
                    <div class="me-1">
                        <a href="#" class="btn btn-menubar btnFullscreen">
                            <i class="ti ti-maximize"></i>
                        </a>
                    </div>
                    <!-- <div class="dropdown me-1">
                        <a href="#" class="btn btn-menubar" data-bs-toggle="dropdown">
                            <i class="ti ti-layout-grid-remove"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <div class="card mb-0 border-0 shadow-none">
                                <div class="card-header">
                                    <h4>Applications</h4>
                                </div>
                                <div class="card-body">											
                                    <a href="/calendar" class="d-block pb-2">
                                        <span class="avatar avatar-md bg-transparent-dark me-2"><i class="ti ti-calendar text-gray-9"></i></span>Calendar
                                    </a>										
                                    <a href="/todo" class="d-block py-2">
                                        <span class="avatar avatar-md bg-transparent-dark me-2"><i class="ti ti-subtask text-gray-9"></i></span>To Do
                                    </a>										
                                    <a href="/notes" class="d-block py-2">
                                        <span class="avatar avatar-md bg-transparent-dark me-2"><i class="ti ti-notes text-gray-9"></i></span>Notes
                                    </a>										
                                    <a href="/file-manager" class="d-block py-2">
                                        <span class="avatar avatar-md bg-transparent-dark me-2"><i class="ti ti-folder text-gray-9"></i></span>File Manager
                                    </a>								
                                        <span class="avatar avatar-md bg-transparent-dark me-2"><i class="ti ti-layout-kanban text-gray-9"></i></span>Kanban
                                    </a>								
                                    <a href="/invoices" class="d-block py-2 pb-0">
                                        <span class="avatar avatar-md bg-transparent-dark me-2"><i class="ti ti-file-invoice text-gray-9"></i></span>Invoices
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!-- <div class="me-1">
                        <a href="/chat" class="btn btn-menubar position-relative">
                            <i class="ti ti-brand-hipchat"></i>
                            <span class="badge bg-info rounded-pill d-flex align-items-center justify-content-center header-badge">5</span>
                        </a>
                    </div>
                    <div class="me-1">
                        <a href="/email" class="btn btn-menubar">
                            <i class="ti ti-mail"></i>
                        </a>
                    </div> -->
                    <div class="me-1 notification_item">
                        <a href="#" class="btn btn-menubar position-relative me-1" id="notification_popup"
                            data-bs-toggle="dropdown">
                            <i class="ti ti-mail"></i>
                            <!-- <span class="notification-status-dot"></span> -->
                        </a>
                        <div class="dropdown-menu dropdown-menu-end notification-dropdown p-4">
                            <div class="d-flex align-items-center justify-content-between border-bottom p-0 pb-3 mb-3">
                                <h4 class="notification-title">Message</h4>
                                <div class="d-flex align-items-center">
                                    <a href="#" class="text-primary fs-15 me-3 lh-1">Mark all as read</a>
                                    <div class="dropdown">
                                        <a href="javascript:void(0);" class="bg-white dropdown-toggle"
                                            data-bs-toggle="dropdown">
                                            <i class="ti ti-calendar-due me-1"></i>Today
                                        </a>
                                        <ul class="dropdown-menu mt-2 p-3">
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item rounded-1">
                                                    This Week
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item rounded-1">
                                                    Last Week
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item rounded-1">
                                                    Last Month
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="noti-content">
                                <div class="d-flex flex-column">
                                    <div class="border-bottom mb-3 pb-3">
                                        <a href="/activity">
                                            <div class="d-flex">
                                                <span class="avatar avatar-lg me-2 flex-shrink-0">
                                                    <img src="assets/img/profiles/avatar-27.webp" alt="Profile">
                                                </span>
                                                <div class="flex-grow-1">
                                                    <p class="mb-1"><span
                                                            class="text-dark fw-semibold">Shawn</span>
                                                        performance in Math is below the threshold.</p>
                                                    <span>Just Now</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="border-bottom mb-3 pb-3">
                                        <a href="/activity" class="pb-0">
                                            <div class="d-flex">
                                                <span class="avatar avatar-lg me-2 flex-shrink-0">
                                                    <img src="assets/img/profiles/avatar-23.webp" alt="Profile">
                                                </span>
                                                <div class="flex-grow-1">
                                                    <p class="mb-1"><span
                                                            class="text-dark fw-semibold">Sylvia</span> added
                                                        appointment on 02:00 PM</p>
                                                    <span>10 mins ago</span>
                                                    <div
                                                        class="d-flex justify-content-start align-items-center mt-1">
                                                        <span class="btn btn-light btn-sm me-2">Deny</span>
                                                        <span class="btn btn-primary btn-sm">Approve</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="border-bottom mb-3 pb-3">
                                        <a href="/activity">
                                            <div class="d-flex">
                                                <span class="avatar avatar-lg me-2 flex-shrink-0">
                                                    <img src="assets/img/profiles/avatar-25.webp" alt="Profile">
                                                </span>
                                                <div class="flex-grow-1">
                                                    <p class="mb-1">New student record <span class="text-dark fw-semibold"> George</span> is created by <span class="text-dark fw-semibold">Teressa</span></p>
                                                    <span>2 hrs ago</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="border-0 mb-3 pb-0">
                                        <a href="/activity">
                                            <div class="d-flex">
                                                <span class="avatar avatar-lg me-2 flex-shrink-0">
                                                    <img src="assets/img/profiles/avatar-01.webp" alt="Profile">
                                                </span>
                                                <div class="flex-grow-1">
                                                    <p class="mb-1">A new teacher record for <span class="text-dark fw-semibold">Elisa</span> </p>
                                                    <span>09:45 AM</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex p-0">
                                <a href="#" class="btn btn-light w-100 me-2">Cancel</a>
                                <a href="notice-board.php" class="btn btn-primary w-100">View All</a>
                            </div>
                        </div>
                    </div>
                    <div class="me-1 notification_item">
                        <a href="#" class="btn btn-menubar position-relative me-1" id="notification_popup"
                            data-bs-toggle="dropdown">
                            <i class="ti ti-bell"></i>
                            <span class="notification-status-dot"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end notification-dropdown p-4">
                            <div class="d-flex align-items-center justify-content-between border-bottom p-0 pb-3 mb-3">
                                <h4 class="notification-title">Notifications (2)</h4>
                                <div class="d-flex align-items-center">
                                    <a href="#" class="text-primary fs-15 me-3 lh-1">Mark all as read</a>
                                    <div class="dropdown">
                                        <a href="javascript:void(0);" class="bg-white dropdown-toggle"
                                            data-bs-toggle="dropdown">
                                            <i class="ti ti-calendar-due me-1"></i>Today
                                        </a>
                                        <ul class="dropdown-menu mt-2 p-3">
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item rounded-1">
                                                    This Week
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item rounded-1">
                                                    Last Week
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item rounded-1">
                                                    Last Month
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="noti-content">
                                <div class="d-flex flex-column">
                                    <div class="border-bottom mb-3 pb-3">
                                        <a href="/activity">
                                            <div class="d-flex">
                                                <span class="avatar avatar-lg me-2 flex-shrink-0">
                                                    <img src="assets/img/profiles/avatar-27.webp" alt="Profile">
                                                </span>
                                                <div class="flex-grow-1">
                                                    <p class="mb-1"><span
                                                            class="text-dark fw-semibold">Shawn</span>
                                                        performance in Math is below the threshold.</p>
                                                    <span>Just Now</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="border-bottom mb-3 pb-3">
                                        <a href="/activity" class="pb-0">
                                            <div class="d-flex">
                                                <span class="avatar avatar-lg me-2 flex-shrink-0">
                                                    <img src="assets/img/profiles/avatar-23.webp" alt="Profile">
                                                </span>
                                                <div class="flex-grow-1">
                                                    <p class="mb-1"><span
                                                            class="text-dark fw-semibold">Sylvia</span> added
                                                        appointment on 02:00 PM</p>
                                                    <span>10 mins ago</span>
                                                    <div
                                                        class="d-flex justify-content-start align-items-center mt-1">
                                                        <span class="btn btn-light btn-sm me-2">Deny</span>
                                                        <span class="btn btn-primary btn-sm">Approve</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="border-bottom mb-3 pb-3">
                                        <a href="/activity">
                                            <div class="d-flex">
                                                <span class="avatar avatar-lg me-2 flex-shrink-0">
                                                    <img src="assets/img/profiles/avatar-25.webp" alt="Profile">
                                                </span>
                                                <div class="flex-grow-1">
                                                    <p class="mb-1">New student record <span class="text-dark fw-semibold"> George</span> is created by <span class="text-dark fw-semibold">Teressa</span></p>
                                                    <span>2 hrs ago</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="border-0 mb-3 pb-0">
                                        <a href="/activity">
                                            <div class="d-flex">
                                                <span class="avatar avatar-lg me-2 flex-shrink-0">
                                                    <img src="assets/img/profiles/avatar-01.webp" alt="Profile">
                                                </span>
                                                <div class="flex-grow-1">
                                                    <p class="mb-1">A new teacher record for <span class="text-dark fw-semibold">Elisa</span> </p>
                                                    <span>09:45 AM</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex p-0">
                                <a href="#" class="btn btn-light w-100 me-2">Cancel</a>
                                <a href="notice-board.php" class="btn btn-primary w-100">View All</a>
                            </div>
                        </div>
                    </div>
                    <div class="dropdown profile-dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle d-flex align-items-center"
                            data-bs-toggle="dropdown">
                            <span class="avatar avatar-sm online">
                                <img src="assets/img/profiles/avatar-12.webp" alt="Img" class="img-fluid rounded-circle">
                            </span>
                        </a>
                        <div class="dropdown-menu shadow-none">
                            <div class="card mb-0">
                                <div class="card-header">
                                    <div class="d-flex align-items-center">
                                        <span class="avatar avatar-lg me-2 avatar-rounded">
                                            <img src="assets/img/profiles/avatar-12.webp" alt="img">
                                        </span>
                                        <div>
                                            <h5 class="mb-0">Kevin Larry</h5>
                                            <p class="fs-12 fw-medium mb-0"><a href="">admin@astrikdigital.com</a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <a class="dropdown-item d-inline-flex align-items-center p-0 py-2" href="profile.php">
                                        <i class="ti ti-user-circle me-1"></i>My Profile
                                    </a>
                                    <!-- <a class="dropdown-item d-inline-flex align-items-center p-0 py-2" href="/bussiness-settings">
                                        <i class="ti ti-settings me-1"></i>Settings
                                    </a> -->
                                    <!-- <a class="dropdown-item d-inline-flex align-items-center p-0 py-2" href="/security-settings">
                                        <i class="ti ti-status-change me-1"></i>Status
                                    </a> -->
                                    <!-- <a class="dropdown-item d-inline-flex align-items-center p-0 py-2" href="/profile-settings">
                                        <i class="ti ti-circle-arrow-up me-1"></i>My Account
                                    </a> -->
                                    <!-- <a class="dropdown-item d-inline-flex align-items-center p-0 py-2" href="/knowledgebase">
                                        <i class="ti ti-question-mark me-1"></i>Knowledge Base
                                    </a> -->
                                </div>
                                <div class="card-footer">
                                    <a class="dropdown-item d-inline-flex align-items-center p-0 py-2" href="/login">
                                        <i class="ti ti-login me-2"></i>Logout
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                 
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div class="dropdown mobile-user-menu">
            <a href="javascript:void(0);" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
            <div class="dropdown-menu dropdown-menu-end">
                <a class="dropdown-item" href="/profile">My Profile</a>
                <a class="dropdown-item" href="/profile-settings">Settings</a>
                <a class="dropdown-item" href="/login">Logout</a>
            </div>
        </div>
        <!-- /Mobile Menu -->

    </div>

</div>
<!-- /Header -->     