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
        <a class="nav-link collapsed" data-bs-target="#components-nav0" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Employee Management</span><i class="bi bi-chevron-down ms-auto"></i>
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
            <a href="<?= site_url('employee/adddesignation')?>">
              <i class="bi bi-circle"></i><span>Create Designation</span>
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
      <!-- End Components Nav1 -->
       <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav111" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Task</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav111" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
              <a href="<?= site_url('division/addTask')?>">
              <i class="bi bi-circle"></i><span>Add Task</span>
            </a>
          </li>
          <li>
              <a href="<?= site_url('division/viewTask')?>">
              <i class="bi bi-circle"></i><span>View Task</span>
            </a>
          </li>          
        </ul>
      </li><!-- End Components Nav 2-->
      
    </ul>

  </aside><!-- End Sidebar-->
