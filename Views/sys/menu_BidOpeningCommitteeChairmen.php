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
        <a class="nav-link collapsed" data-bs-target="#forms-nav2" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>BID Opening</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav2" class="nav-content collapse " data-bs-parent="#sidebar-nav">          
          <li>
           <a href="<?= site_url('SubmitedBid/OpeningBid')?>">
              <i class="bi bi-circle"></i><span>Submitted Bid</span>
            </a>
          </li>
           
          <li>
            <a href="<?= site_url('SubmitedBid/TenderOpeningReport')?>">
                  <i class="bi bi-circle"></i><span>Tender Opening Report</span>
            </a>
          </li>
        </ul>
      </li><!-- End Forms Nav -->
   

      

      <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="<?= site_url('employee/Profile')?>">
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
