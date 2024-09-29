 <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="index.html">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav0" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Employee</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav0" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
              <a href="<?= site_url('employee/add')?>">
              <i class="bi bi-circle"></i><span>Add Employee</span>
            </a>
          </li>
          <li>
            <a href="<?= site_url('employee/view')?>">
              <i class="bi bi-circle"></i><span>View Employee</span>
            </a>
          </li>
          <li>
            <a href="<?= site_url('employee/edit')?>">
              <i class="bi bi-circle"></i><span>Edit Employee</span>
            </a>
          </li>
           <li>
            <a href="<?= site_url('calculation/cal')?>">
              <i class="bi bi-circle"></i><span>Calculation</span>
            </a>
          </li>
          

        </ul>
      </li><!-- End Components Nav1 -->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav1" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Division</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav1" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
              <a href="<?= site_url('division/addcamp')?>">
              <i class="bi bi-circle"></i><span>Add Camp</span>
            </a>
          </li>
          <li>
              <a href="<?= site_url('division/viewCamp')?>">
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
           <a href="<?= site_url('tender/viewcestimate')?>">
              <i class="bi bi-circle"></i><span>View Tender Details</span>
            </a>
          </li>
          <li>
           <a href="<?= site_url('tender/view')?>">
              <i class="bi bi-circle"></i><span>View Tender</span>
            </a>
          </li>
          <li>
            <a href="<?= site_url('tender/close')?>">
              <i class="bi bi-circle"></i><span>Close Tender</span>
            </a>
          </li>
        </ul>
      </li><!-- End Forms Nav 3 -->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav2" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Submitted BID</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav2" class="nav-content collapse " data-bs-parent="#sidebar-nav">          
          <li>
           <a href="<?= site_url('SubmitedBid/OpeningBid')?>">
              <i class="bi bi-circle"></i><span>Submitted Bid</span>
            </a>
          </li>
          <li>
           <a href="<?= site_url('tender/view')?>">
              <i class="bi bi-circle"></i><span>View Tender</span>
            </a>
          </li>
          <li>
            <a href="<?= site_url('SubmitedBid/BidList')?>">
              <i class="bi bi-circle"></i><span>Close Tender</span>
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
              <a href="<?= site_url('itemrequest/createReq')?>">
              <i class="bi bi-circle"></i><span>Create Request</span>
            </a>
          </li>
          <li>
            <a href="<?= site_url('itemrequest/viewReq')?>">
              <i class="bi bi-circle"></i><span>View Request</span>
            </a>
          </li>
           <li>
              <a href="<?= site_url('request/requestadd')?>">
              <i class="bi bi-circle"></i><span>Request</span>
            </a>
          </li>
        </ul>
      </li><!-- End Components Nav -->
<!-- check-->
      

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-bar-chart"></i><span>Charts</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="charts-chartjs.html">
              <i class="bi bi-circle"></i><span>Chart.js</span>
            </a>
          </li>
          <li>
            <a href="charts-apexcharts.html">
              <i class="bi bi-circle"></i><span>ApexCharts</span>
            </a>
          </li>
          <li>
            <a href="charts-echarts.html">
              <i class="bi bi-circle"></i><span>ECharts</span>
            </a>
          </li>
        </ul>
      </li><!-- End Charts Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#icons-nav0" data-bs-toggle="collapse" href="#">
          <i class="bi bi-gem"></i><span>Procurement Plan</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="icons-nav0" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="<?= site_url('procurementPlan/createPro')?>">
              <i class="bi bi-circle"></i><span>Create Procurement Plan</span>
            </a>
          </li>
          <li>
            <a href="<?= site_url('procurementPlan/viewPro')?>">
              <i class="bi bi-circle"></i><span>View Procurement Plan</span>
            </a>
          </li>
          <li>
            <a href="<?= site_url('yearPlan/viewYearPlan')?>">
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
            <a href="<?= site_url('vote/add')?>">
              <i class="bi bi-circle"></i><span>Add Vote</span>
            </a>
          </li>
          <li>
            <a href="<?= site_url('vote/view')?>">
              <i class="bi bi-circle"></i><span>View Vote</span>
            </a>
          </li>
         
        </ul>
   <!--<li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav1" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Invitation For BID</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav1" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="<?= site_url('invitation/add')?>">
              <i class="bi bi-circle"></i><span>Create BID Invitation</span>
            </a>
          </li>
          <li>
           <a href="<?= site_url('invitation/view')?>">
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
            <a href="<?= site_url('bidAnnounce/notice')?>">
              <i class="bi bi-circle"></i><span>BID Invitation</span>
            </a>
          </li>
          <li>
           <a href="<?= site_url('bidAnnounce/view')?>">
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
        <a class="nav-link collapsed" href="pages-faq.html">
          <i class="bi bi-question-circle"></i>
          <span>F.A.Q</span>
        </a>
      </li><!-- End F.A.Q Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-contact.html">
          <i class="bi bi-envelope"></i>
          <span>Contact</span>
        </a>
      </li><!-- End Contact Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-register.html">
          <i class="bi bi-card-list"></i>
          <span>Register</span>
        </a>
      </li><!-- End Register Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-login.html">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Login</span>
        </a>
      </li><!-- End Login Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-error-404.html">
          <i class="bi bi-dash-circle"></i>
          <span>Error 404</span>
        </a>
      </li><!-- End Error 404 Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-blank.html">
          <i class="bi bi-file-earmark"></i>
          <span>Blank</span>
        </a>
      </li><!-- End Blank Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->
