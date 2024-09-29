<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link " href="<?= site_url('sys/dashboard') ?>">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->


        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-nav1" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>Division</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav1" class="nav-content collapse " data-bs-parent="#sidebar-nav">

                <li>
                    <a href="<?= site_url('division/viewCamp') ?>">
                        <i class="bi bi-circle"></i><span>View Camp</span>
                    </a>
                </li>

            </ul>
        </li><!-- End Components Nav 2-->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#forms-nav0" data-bs-toggle="collapse" href="#">
                <i class="bi bi-journal-text"></i><span>Tender</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="forms-nav0" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="<?= site_url('tender/view') ?>">
                        <i class="bi bi-circle"></i><span>View Tender</span>
                    </a>
                </li>
                <li>
                    <a href="<?= site_url('tender/TenderProgress') ?>">
                        <i class="bi bi-circle"></i><span>Tender Progress</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Forms Nav -->
        <!-- check-->
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-nav2" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>Item Request</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav2" class="nav-content collapse " data-bs-parent="#sidebar-nav">

                <li>
                    <a href="<?= site_url('itemrequest/viewReq') ?>">
                        <i class="bi bi-circle"></i><span>View Request</span>
                    </a>
                </li>
                <li>
                    <a href="<?= site_url('itemrequest/viewNewReq') ?>">
                        <i class="bi bi-circle"></i><span>View New Item Request</span>
                    </a>
                </li>


            </ul>
        </li><!-- End Components Nav -->
        <!-- check-->
        <!-- Inventory Forms Nav -->
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#forms-nav27" data-bs-toggle="collapse" href="#">
                <i class="bi bi-journal-text"></i><span>Inventory</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="forms-nav27" class="nav-content collapse " data-bs-parent="#sidebar-nav">

                <li>
                    <a href="<?= site_url('inventory/view') ?>">
                        <i class="bi bi-circle"></i><span>View Inventory Item</span>
                    </a>
                </li>

            </ul>
        </li><!-- End Forms Nav -->

        <!-- Inventory Forms Nav -->
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#forms-nav27" data-bs-toggle="collapse" href="#">
                <i class="bi bi-journal-text"></i><span>Inventory</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="forms-nav27" class="nav-content collapse " data-bs-parent="#sidebar-nav">

                <li>
                    <a href="<?= site_url('inventory/viewall') ?>">
                        <i class="bi bi-circle"></i><span>View Inventory</span>
                    </a>
                </li>

            </ul>
        </li><!-- End Forms Nav -->



        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#icons-nav0" data-bs-toggle="collapse" href="#">
                <i class="bi bi-gem"></i><span>Procurement Plan</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="icons-nav0" class="nav-content collapse " data-bs-parent="#sidebar-nav">

                <li>
                    <a href="<?= site_url('procurementPlan/viewPro') ?>">
                        <i class="bi bi-circle"></i><span>View Procurement Plan</span>
                    </a>
                </li>
                <li>
                    <a href="<?= site_url('yearPlan/viewYearPlan') ?>">
                        <i class="bi bi-circle"></i><span>Year Procurement Plan</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Icons Nav -->
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#icons-nav1" data-bs-toggle="collapse" href="#">
                <i class="bi bi-gem"></i><span>Vote</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="icons-nav1" class="nav-content collapse " data-bs-parent="#sidebar-nav">

                <li>
                    <a href="<?= site_url('vote/view') ?>">
                        <i class="bi bi-circle"></i><span>View Vote</span>
                    </a>
                </li>
                <li>
                    <a href="<?= site_url('vote/voteLedger') ?>">
                        <i class="bi bi-circle"></i><span>Vote Allocations</span>
                    </a>
                </li>

            </ul>
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-nav212" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>Reports</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav212" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="<?= site_url('itemrequest/viewReqprogress') ?>">
                        <i class="bi bi-circle"></i><span>View Progress of Request</span>
                    </a>
                </li>

                <li>
                    <a href="<?= site_url('Reports/tenderReports') ?>">
                        <i class="bi bi-circle"></i><span>Tender Reports</span>
                    </a>
                </li>
                <li>
                    <a href="<?= site_url('SubmitedBid/TenderOpeningReport') ?>">
                        <i class="bi bi-circle"></i><span>Tender Opening Committee Report</span>
                    </a>
                </li>
                <li>
                    <a href="<?= site_url('Procurement/TECRecomendReport') ?>">
                        <i class="bi bi-circle"></i><span>Technical Committee Reports</span>
                    </a>
                </li>
                <li>
                    <a href="<?= site_url('Procurement/PCApprovedReport') ?>">
                        <i class="bi bi-circle"></i><span>Procurement Committee Reports</span>
                    </a>
                </li>

            </ul>
        </li><!-- End Components Nav -->
        <!--<li class="nav-item">
        
             <a class="nav-link collapsed" data-bs-target="#forms-nav1" data-bs-toggle="collapse" href="#">
               <i class="bi bi-journal-text"></i><span>Invitation For BID</span><i class="bi bi-chevron-down ms-auto"></i>
             </a>
             <ul id="forms-nav1" class="nav-content collapse " data-bs-parent="#sidebar-nav">
               <li>
                 <a href="<?= site_url('invitation/add') ?>">
                   <i class="bi bi-circle"></i><span>Create BID Invitation</span>
                 </a>
               </li>
               <li>
                <a href="<?= site_url('invitation/view') ?>">
                   <i class="bi bi-circle"></i><span>View Invitation For BID</span>
                 </a>
               </li>
              
             </ul>
           </li><!-- End Forms Nav -->
        <!--  </li>--><!-- End Icons Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#forms-nav2" data-bs-toggle="collapse" href="#">
                <i class="bi bi-journal-text"></i><span>BID Announcement</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="forms-nav2" class="nav-content collapse " data-bs-parent="#sidebar-nav">

                <li>
                    <a href="<?= site_url('bidAnnounce/view') ?>">
                        <i class="bi bi-circle"></i><span>View Announcement</span>
                    </a>
                </li>

            </ul>
        </li><!-- End Forms Nav -->

        <li class="nav-heading">Pages</li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>Profile</span>
            </a>
        </li><!-- End Profile Page Nav -->



        <li class="nav-item">
            <a class="nav-link collapsed" href="pages-contact.html">
                <i class="bi bi-envelope"></i>
                <span>Contact</span>
            </a>
        </li><!-- End Contact Page Nav -->



        <li class="nav-item">
            <a class="nav-link collapsed" href="pages-login.html">
                <i class="bi bi-box-arrow-in-right"></i>
                <span>Login</span>
            </a>
        </li><!-- End Login Page Nav -->


    </ul>

</aside><!-- End Sidebar-->
