 <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="<?= site_url('sys/dashboard')?>">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav11" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Division</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav11" class="nav-content collapse " data-bs-parent="#sidebar-nav">
         
          <li>
              <a href="<?= site_url('division/viewCamp')?>">
              <i class="bi bi-circle"></i><span>View Camp</span>
            </a>
          </li>          
        </ul>
      </li><!-- End Components Nav 2-->
       <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav1" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Procurement Item Category</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav1" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
              <a href="<?= site_url('ProcurementRequestItemList/add')?>">
              <i class="bi bi-circle"></i><span>Add Item</span>
            </a>
          </li>
          <li>
              <a href="<?= site_url('ProcurementRequestItemList/view')?>">
              <i class="bi bi-circle"></i><span>View Item</span>
            </a>
          </li>          
        </ul>
      </li><!-- End Components Nav 2-->

      
   
<!-- Request-->
    <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav2" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Item Request</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav2" class="nav-content collapse " data-bs-parent="#sidebar-nav">
         
          <li>
              <a href="<?= site_url('itemrequest/viewNewReq')?>">
              <i class="bi bi-circle"></i><span>View New Item Request</span>
            </a>
          </li>
        </ul>
      </li><!-- End Components Nav -->

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
          <i class="bi bi-gem"></i><span>Allocations</span><i class="bi bi-chevron-down ms-auto"></i>
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
          <li>
            <a href="<?= site_url('vote/voteLedger')?>">
              <i class="bi bi-circle"></i><span>Vote Allocations</span>
            </a>
          </li>
          
        </ul>
  <!-- End Forms Nav -->
    <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#icons-nav111" data-bs-toggle="collapse" href="#">
          <i class="bi bi-gem"></i><span>Supplier Category</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="icons-nav111" class="nav-content collapse " data-bs-parent="#sidebar-nav">
       
          <li>
            <a href="<?= site_url('SupplierCategory/add')?>">
              <i class="bi bi-circle"></i><span>Add Supplier Category</span>
            </a>
          </li>
           <li>
            <a href="<?= site_url('SupplierCategory/view')?>">
              <i class="bi bi-circle"></i><span>View Supplier Category</span>
            </a>
          </li>
        </ul>
  <!-- End Forms Nav -->
  

      <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="<?= site_url('employee/Profile')?>">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Profile Page Nav -->

     
      <li class="nav-item">
        <a class="nav-link collapsed" href="<?= site_url('employee/contact')?>">
          <i class="bi bi-envelope"></i>
          <span>Contact</span>
        </a>
      </li><!-- End Contact Page Nav -->

      

       <li class="nav-item">
        <a class="nav-link collapsed" href="<?= site_url('sys')?>">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Login</span>
        </a>
      </li><!-- End Login Page Nav -->


    </ul>

  </aside><!-- End Sidebar-->
