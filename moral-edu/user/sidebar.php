<aside id="sidebar" class="sidebar">

  <ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
      <a class="nav-link " href="home">
        <i class="bi bi-grid"></i>
        <span>Home / Dashboard</span>
      </a>
    </li>
	
	
	<?php
    $service_arr = ['service', 'service-add', 'service-edit', 'service-category', 'service-category-add'];
    ?>
    <li class="nav-item">
      <a class="nav-link collapsed <?= is_numeric(array_search($activePage, $service_arr)) ? 'active' : ''; ?>" data-bs-target="#Service" data-bs-toggle="collapse" href="#">
        <i class="bi bi-book-half"></i><span>Course </span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="Service" class="nav-content collapse  <?= is_numeric(array_search($activePage, $service_arr)) ? 'show' : ''; ?>" data-bs-parent="#sidebar-nav">
        <li><a href="service-category" class="<?= ($activePage == 'service-category' ||  $activePage == 'service-category-add' ||  $activePage == 'service-edit') ? 'active' : ''; ?>"><i class="bi bi-bookmarks-fill"></i><span> Category </span> </a> </li>
        <li><a href="service" class="<?= ($activePage == 'service' ||  $activePage == 'service-add' ||  $activePage == 'service-edit') ? 'active' : ''; ?>"><i class="bi bi-book-half"></i><span> Course List </span> </a> </li>
      </ul>
    </li>

   

    <li class="nav-item">
      <a class="nav-link collapsed <?= ($activePage == 'student-list' || $activePage == 'add-student' || $activePage == 'edit-student' || $activePage == 'details-student' || $activePage == 'batch-list' || $activePage == 'add-batch' || $activePage == 'edit-batch' || $activePage == 'degree-list' || $activePage == 'add-degree' || $activePage == 'edit-degree' ||
                                      $activePage == 'board-list' || $activePage == 'add-board' || $activePage == 'edit-board' || $activePage == 'month-list' || $activePage == 'add-month' || $activePage == 'edit-month' || $activePage == 'year-list' || $activePage == 'add-year' || $activePage == 'edit-year' || $activePage == 'blood-grp-list' || $activePage == 'add-blood-grp' || $activePage == 'edit-blood-grp' || $activePage == 'dist-list' || $activePage == 'add-dist' || $activePage == 'edit-add-dist' || $activePage == 'upzila-list') ? 'active' : ''; ?>" data-bs-target="#Students" data-bs-toggle="collapse" href="#">


        <i class="bi bi-people-fill"></i><span>Students</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="Students" class="nav-content collapse <?= ($activePage == 'student-list' || $activePage == 'add-student' || $activePage == 'edit-student' || $activePage == 'details-student' || $activePage == 'batch-list' || $activePage == 'add-batch' || $activePage == 'edit-batch' || $activePage == 'degree-list' || $activePage == 'add-degree' || $activePage == 'edit-degree'
                                                      ||  $activePage == 'board-list' || $activePage == 'add-board' || $activePage == 'edit-board' || $activePage == 'month-list' || $activePage == 'add-month' || $activePage == 'edit-month' || $activePage == 'year-list' || $activePage == 'add-year' || $activePage == 'edit-year' || $activePage == 'blood-grp-list' || $activePage == 'add-blood-grp' || $activePage == 'edit-blood-grp'  || $activePage == 'dist-list' || $activePage == 'add-dist' || $activePage == 'edit-dist' || $activePage == 'upzila-list' || $activePage == 'add-upzila' || $activePage == 'edit-upzila') ? 'show' : ''; ?>" data-bs-parent="#sidebar-nav">


        <li><a href="student-list" class="<?= ($activePage == 'student-list' || $activePage == 'add-student' || $activePage == 'edit-student' || $activePage == 'details-student') ? 'active' : ''; ?>"><i class="bi bi-person-check-fill"></i><span> Students Info </span> </a> </li>
        <li><a href="batch-list" class="<?= ($activePage == 'batch-list' || $activePage == 'add-batch' || $activePage == 'edit-batch') ? 'active' : ''; ?>"><i class="bi bi-tag-fill"></i><span> Batch </span> </a> </li>
        <li><a href="degree-list" class="<?= ($activePage == 'degree-list' || $activePage == 'add-degree' || $activePage == 'edit-degree') ? 'active' : ''; ?>"><i class="bi bi-mortarboard"></i><span> Degree </span> </a> </li>
        <li><a href="board-list" class="<?= ($activePage == 'board-list' || $activePage == 'add-board' || $activePage == 'edit-board') ? 'active' : ''; ?>"><i class="bi bi-building"></i><span> Board </span> </a> </li>


        <li><a href="month-list" class="<?= ($activePage == 'month-list' || $activePage == 'add-month' || $activePage == 'edit-month') ? 'active' : ''; ?>"><i class="bi bi-calendar2-month-fill"></i><span> Month </span> </a> </li>
        <li><a href="year-list" class="<?= ($activePage == 'year-list' || $activePage == 'add-year' || $activePage == 'edit-year') ? 'active' : ''; ?>"><i class="bi bi-calendar"></i><span> Year </span> </a> </li>
        <li><a href="blood-grp-list" class="<?= ($activePage == 'blood-grp-list' || $activePage == 'add-blood-grp' || $activePage == 'edit-blood-grp') ? 'active' : ''; ?>"><i class="bi bi-droplet-fill"></i><span> Blood Group </span> </a> </li>

        <li><a href="dist-list" class="<?= ($activePage == 'dist-list' || $activePage == 'add-dist' || $activePage == 'edit-add-dist') ? 'active' : ''; ?>"><i class="bi bi-geo-alt"></i><span> District </span> </a> </li>
        <li><a href="upzila-list" class="<?= ($activePage == 'upzila-list' || $activePage == 'add-upzila' || $activePage == 'edit-upzila') ? 'active' : ''; ?>"><i class="bi bi-geo-alt-fill"></i><span> Upazilla </span> </a> </li>


      </ul>
    </li>

    <li class="nav-item"><a href="slider" class="nav-link collapsed <?= ($activePage == 'slider' ||  $activePage == 'slider-add' ||  $activePage == 'slider-edit') ? 'active' : ''; ?>"><i class="bi bi-images"></i><span> Slider </span> </a> </li>

    <?php $about_arr = ['web-about-sec', 'team', 'add-team', 'edit-team', 'branch', 'Branch-add', 'branch-edit', 'stats', 'Stats-add', 'stats-edit', 'testimonial', 'Testimonial-add', 'testimonial-edit', 'parner', 'parner-add', 'parner-edit', 'mission', 'Mission-add', 'mission-edit', 'vision', 'Vision-add', 'vision-edit', 'map', 'Map-add', 'map-edit'] ?>

    <li class="nav-item">
      <a class="nav-link collapsed <?= is_numeric(array_search($activePage, $about_arr)) ? 'active' : ''; ?>" data-bs-target="#Website" data-bs-toggle="collapse" href="#">
        <i class="bi bi-laptop"></i><span>Website</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>


      <ul id="Website" class="nav-content collapse <?= is_numeric(array_search($activePage, $about_arr)) ? 'show' : ''; ?>" data-bs-parent="#sidebar-nav">

        <li><a href="web-about-sec" class="<?= ($activePage == 'web-about-sec' || $activePage == 'edit-web-about-sec') ? 'active' : ''; ?>"><i class="bi bi-card-checklist"></i><span> About Us </span> </a> </li>

        <li><a href="team" class="<?= ($activePage == 'team' ||  $activePage == 'add-team' ||  $activePage == 'edit-team') ? 'active' : ''; ?>"><i class="bi bi-people-fill"></i><span> Team </span> </a> </li>

        <li><a href="branch" class="<?= ($activePage == 'branch' ||  $activePage == 'Branch-add' ||  $activePage == 'branch-edit') ? 'active' : ''; ?>"><i class="bi bi-house-fill"></i><span> Branch </span> </a> </li>

        <li><a href="stats" class="<?= ($activePage == 'stats' ||  $activePage == 'Stats-add' ||  $activePage == 'stats-edit') ? 'active' : ''; ?>"><i class="bi bi-bar-chart"></i><span> Stats </span> </a> </li>

        <li><a href="testimonial" class="<?= ($activePage == 'testimonial' ||  $activePage == 'Testimonial-add' ||  $activePage == 'testimonial-edit') ? 'active' : ''; ?>"><i class="bi bi-chat-left-quote-fill"></i><span> Testimonial </span> </a> </li>

        <li><a href="parner" class="<?= ($activePage == 'parner' ||  $activePage == 'parner-add' ||  $activePage == 'parner-edit') ? 'active' : ''; ?>"><i class="bi bi-map"></i><span> Parner </span> </a> </li>

        <li><a href="mission" class="<?= ($activePage == 'mission' ||  $activePage == 'Mission-add' ||  $activePage == 'mission-edit') ? 'active' : ''; ?>"><i class="bi bi-bricks"></i><span> Mission </span> </a> </li>

        <li><a href="vision" class="<?= ($activePage == 'vision' ||  $activePage == 'Vision-add' ||  $activePage == 'vision-edit') ? 'active' : ''; ?>"><i class="bi bi-binoculars-fill"></i><span> Vision </span> </a> </li>

        <li><a href="map" class="<?= ($activePage == 'map' ||  $activePage == 'Map-add' ||  $activePage == 'map-edit') ? 'active' : ''; ?>"><i class="bi bi-geo-alt-fill"></i><span> Map </span> </a> </li>

      </ul>
    </li>

	
	

    <!-- Admissions  -->
    <?php
    $admission_arr = ['diploma-admission', 'diploma-admission-add', 'medical-admission', 'medical-admission-add', 'medical-assistant', 'medical-assistant-add', 'nursing-admission', 'nursing-admission-add'];
    ?>
    <li class="nav-item d-none">
      <a class="nav-link collapsed <?= is_numeric(array_search($activePage, $admission_arr)) ? 'active' : ''; ?>" data-bs-target="#Admission" data-bs-toggle="collapse" href="#">
        <i class="bi bi-building"></i><span>Admission </span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="Admission" class="nav-content collapse  <?= is_numeric(array_search($activePage, $admission_arr)) ? 'show' : ''; ?>" data-bs-parent="#sidebar-nav">

        <li><a href="diploma-admission" class=" <?php echo ($activePage == 'diploma-admission' || $activePage == 'diploma-admission-add') ? 'active' : ''  ?>"><i class="bi bi-menu-app-fill"></i><span> Diploma In Engineering </span> </a> </li>

        <li><a href="medical-admission" class=" <?php echo ($activePage == 'medical-admission' || $activePage == 'medical-admission-add') ? 'active' : ''  ?>"><i class="bi bi-menu-app-fill"></i><span> Medical Diploma </span> </a> </li>

        <li><a href="medical-assistant" class=" <?php echo ($activePage == 'medical-assistant' || $activePage == 'medical-assistant-add') ? 'active' : ''  ?>"><i class="bi bi-menu-app-fill"></i><span> Medical Assistant </span> </a> </li>

        <li><a href="nursing-admission" class=" <?php echo ($activePage == 'nursing-admission' || $activePage == 'nursing-admission-add') ? 'active' : ''  ?>"><i class="bi bi-menu-app-fill"></i><span> Diploma In Nursing & Midwifery </span> </a> </li>

      </ul>
    </li>

    <li class="nav-item"><a href="gallery-sec" class="nav-link collapsed <?= ($activePage == 'gallery-sec' ||  $activePage == 'gallery-sec-add' ||  $activePage == 'gallery-sec-edit') ? 'active' : ''; ?>"><i class="bi bi-images"></i><span> Gallery </span> </a> </li>
    <li class="nav-item"><a href="notice" class="nav-link collapsed <?= ($activePage == 'notice' ||  $activePage == 'notice-add' ||  $activePage == 'notice-edit') ? 'active' : ''; ?>"><i class="bi bi-newspaper"></i><span> News / Notice </span> </a> </li>
    <li class="nav-item"><a href="publish" class="nav-link collapsed <?= ($activePage == 'publish' ||  $activePage == 'publish-add' ||  $activePage == 'publish-edit') ? 'active' : ''; ?>"><i class="bi bi-newspaper"></i><span> Publish </span> </a> </li>
    

    <li class="nav-item">
      <a class="nav-link collapsed <?= ($activePage == 'contact-info' || $activePage == 'contact-info-add' || $activePage == 'contact-info-edit' || $activePage == 'social-media' ||  $activePage == 'social-media-add' ||  $activePage == 'social-media-edit') ? 'active' : ''; ?>" data-bs-target="#Contact" data-bs-toggle="collapse" href="#">
        <i class="bi bi-telephone"></i><span>Contact / Social </span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="Contact" class="nav-content collapse <?= ($activePage == 'contact-info' || $activePage == 'contact-info-add' || $activePage == 'contact-info-edit' || $activePage == 'social-media' ||  $activePage == 'social-media-add' ||  $activePage == 'social-media-edit') ? 'show' : ''; ?>" data-bs-parent="#sidebar-nav">

        <li><a href="contact-info" class="<?= ($activePage == 'contact-info' || $activePage == 'contact-info-add' || $activePage == 'contact-info-edit') ? 'active' : ''; ?>"><i class="bi bi-telephone"></i><span> Contact </span> </a> </li>
        <li><a href="social-media" class="<?= ($activePage == 'social-media' ||  $activePage == 'social-media-add' ||  $activePage == 'social-media-edit') ? 'active' : ''; ?>"><i class="bi bi-menu-app-fill"></i><span> Social Media </span> </a> </li>

      </ul>
    </li>
	
	<li class="nav-item">
        <a class="nav-link collapsed <?= ($activePage == 'stu-payment' || $activePage == 'stu-paym-add' || $activePage == 'stu-dues-pay' ||  $activePage == 'stu-paym-details' || $activePage == 'stu-recent-due') ? 'active' : ''; ?>" data-bs-target="#Payment" data-bs-toggle="collapse" href="#">
          <i class="bi bi-credit-card"></i><span>Payment</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="Payment" class="nav-content collapse <?= ($activePage == 'stu-payment' || $activePage == 'stu-paym-add' || $activePage == 'stu-dues-pay' ||  $activePage == 'stu-paym-details' || $activePage == 'stu-recent-due') ? 'show' : ''; ?>" data-bs-parent="#sidebar-nav">
          
		  <li><a href="stu-payment" class="<?= ($activePage == 'stu-payment'|| $activePage == 'stu-paym-add') ? 'active' : ''; ?>"><i class="bi bi-credit-card-2-back"></i><span> Students Payment </span> </a> </li> 
           <li><a href="stu-dues-pay" class="<?= ($activePage == 'stu-dues-pay') ? 'active' : ''; ?>"><i class="bi bi-cash-stack"></i><span> Pay Dues  </span> </a> </li> 
           <li><a href="stu-paym-details" class="<?= ($activePage == 'stu-paym-details') ? 'active' : ''; ?>"><i class="bi bi-card-list"></i><span> Details View </span> </a> </li> 
           <li><a href="stu-recent-due" class="<?= ($activePage == 'stu-recent-due') ? 'active' : ''; ?>"><i class="bi bi-menu-app-fill"></i><span> Recent/Only Dues </span> </a> </li> 
		   
		   
         <!--  <li><a href="" class="<?= ($activePage == '  ') ? 'active' : ''; ?>"><i class="bi bi-menu-app-fill"></i><span> All Report </span> </a> </li> 
           <li><a href="" class="<?= ($activePage == '  ') ? 'active' : ''; ?>"><i class="bi bi-menu-app-fill"></i><span>Date Wise Report </span> </a> </li> 
           <li><a href="" class="<?= ($activePage == ' ') ? 'active' : ''; ?>"><i class="bi bi-menu-app-fill"></i><span>Single Student Report </span> </a> </li> 
		   -->
          
			
        </ul>
      </li>

 

    <li class="nav-item">
      <a class="nav-link collapsed" <?= ($activePage == 'orders-new?o=add'  || $activePage == 'orders-new?o=manord') ? 'active' : ''; ?> data-bs-target="#QuotSec" data-bs-toggle="collapse" href="#">
        <i class="bi bi-file-earmark-ruled-fill"></i><span>Invoice</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="QuotSec" class="nav-content collapse <?= ($activePage == 'orders-new?o=add'  || $activePage == 'orders-new?o=manord') ? 'show' : ''; ?>" data-bs-parent="#sidebar-nav">
        <li>
          <a href="orders-new?o=add" class="<?= ($activePage == 'orders-new?o=add') ? 'active' : ''; ?>">
            <i class="bi bi-file-earmark-plus-fill"></i><span>New Invoice </span>
          </a>
        </li>

        <li>
          <a href="orders-new?o=manord" class="<?= ($activePage == 'orders-new?o=manord') ? 'active' : ''; ?>">
            <i class="bi bi-file-earmark-ruled-fill"></i><span>Invoice List</span>
          </a>
        </li>
      </ul>
    </li>
	
	
	
	<li class="nav-item <?php echo $Exp; ?> d-none">
	   <a class="nav-link collapsed <?= ( $activePage == 'exp-name-list' || $activePage == 'office-exp-list' || $activePage == 'other-exp-list') ? 'active' : ''; ?>" data-bs-target="#ExpSec" data-bs-toggle="collapse" href="#">
        <i class="bi bi-file-spreadsheet-fill"></i><span>Expenses</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="ExpSec" class="nav-content collapse <?= ( $activePage == 'exp-name-list' || $activePage == 'office-exp-list' || $activePage == 'other-exp-list') ? 'show' : ''; ?>" data-bs-parent="#sidebar-nav">
         
		  <li> <a href="exp-name-list" class="<?= ($activePage == 'exp-name-list') ? 'active' : ''; ?>"> <i class="bi bi-file-spreadsheet-fill"></i><span> Category </span> </a>  </li>
          <li> <a href="office-exp-list" class="<?= ($activePage == 'office-exp-list') ? 'active' : ''; ?>"> <i class="bi bi-house-fill"></i><span>Office Expenses </span> </a> </li>
          <li> <a href="other-exp-list" class="<?= ($activePage == 'other-exp-list') ? 'active' : ''; ?>"> <i class="bi bi-filter-square-fill"></i><span>Other Expenses </span> </a> </li>
		  
        </ul>
      </li>
	  
	   <li class="nav-item <?php echo $Exp; ?> d-none" >
	   <a class="nav-link collapsed <?= ( $activePage == 'bank-list' || $activePage == 'bank-list-add' || $activePage == 'bank-list-edit' || $activePage == 'bank-account' || $activePage == 'bank-account-add' || $activePage == 'bank-account-edit' || $activePage == 'bank-deposit' || $activePage == 'bank-withdraw' || $activePage == 'bank-trans-details' || $activePage == 'bank-report-date-wise' || $activePage == 'single-bank-report' || $activePage == 'single-bank-by-date') ? 'active' : ''; ?>" data-bs-target="#Banking" data-bs-toggle="collapse" href="#">
        <i class="bi bi-file-spreadsheet-fill"></i><span> Banking</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="Banking" class="nav-content collapse <?= ( $activePage == 'bank-list' || $activePage == 'bank-list-add' || $activePage == 'bank-list-edit'  || $activePage == 'bank-account' || $activePage == 'bank-account-add' || $activePage == 'bank-account-edit' || $activePage == 'bank-deposit' || $activePage == 'bank-withdraw' || $activePage == 'bank-trans-details' || $activePage == 'bank-report-date-wise'|| $activePage == 'single-bank-report' || $activePage == 'single-bank-by-date') ? 'show' : ''; ?>" data-bs-parent="#sidebar-nav">
         
		  <li> <a href="bank-list" class="<?= ($activePage == 'bank-list' || $activePage == 'bank-list-add' || $activePage == 'bank-list-edit') ? 'active' : ''; ?>"> <i class="bi bi-file-spreadsheet-fill"></i><span> Bank List </span> </a>  </li>
          <li> <a href="bank-account" class="<?= ($activePage == 'bank-account' || $activePage == 'bank-account-add' || $activePage == 'bank-account-edit') ? 'active' : ''; ?>"> <i class="bi bi-house-fill"></i><span> Account </span> </a> </li>
          <li> <a href="bank-deposit" class="<?= ($activePage == 'bank-deposit') ? 'active' : ''; ?>"> <i class="bi bi-filter-square-fill"></i><span> Deposit  </span> </a> </li>
          <li> <a href="bank-withdraw" class="<?= ($activePage == 'bank-withdraw') ? 'active' : ''; ?>"> <i class="bi bi-filter-square-fill"></i><span> Withdraw </span> </a> </li>
          <li> <a href="bank-trans-details" class="<?= ($activePage == 'bank-trans-details') ? 'active' : ''; ?>"> <i class="bi bi-filter-square-fill"></i><span> Transaction History </span> </a> </li>
          <li> <a href="bank-report-date-wise" class="<?= ($activePage == 'bank-report-date-wise') ? 'active' : ''; ?>"> <i class="bi bi-filter-square-fill"></i><span> Report By Date All </span> </a> </li>
          <li> <a href="single-bank-report" class="<?= ($activePage == 'single-bank-report') ? 'active' : ''; ?>"> <i class="bi bi-filter-square-fill"></i><span> Bank History Single</span> </a> </li>
          <li> <a href="single-bank-by-date" class="<?= ($activePage == 'single-bank-by-date') ? 'active' : ''; ?>"> <i class="bi bi-filter-square-fill"></i><span> Bank History - (By Date) Single</span> </a> </li>
		  
        </ul>
      </li>
	  
	  <li class="nav-item <?php echo $HrAcc; ?> d-none">
        <a class="nav-link collapsed <?= ($activePage == 'emp-list' || $activePage == 'emp-salary-list' || $activePage == 'emp-salary-create' ||  $activePage == 'pay-emp-salary'||  $activePage == 'emp-salary-history' ||  $activePage == 'salary-advance'||  $activePage == 'pay-salary-adv') ? 'active' : ''; ?>" data-bs-target="#HrAcc" data-bs-toggle="collapse" href="#">
          <i class="bi bi-bank"></i><span>HR / ACC</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="HrAcc" class="nav-content collapse <?= ( $activePage == 'emp-list' ||$activePage == 'emp-salary-list' || $activePage == 'emp-salary-create' ||  $activePage == 'pay-emp-salary' || $activePage == 'emp-salary-history' ||  $activePage == 'salary-advance'||  $activePage == 'pay-salary-adv') ? 'show' : ''; ?>" data-bs-parent="#HrAcc">
         
		  <li> <a href="emp-list" class="<?= ($activePage == 'emp-list') ? 'active' : ''; ?>"> <i class="bi bi-people"></i><span> Employees </span> </a>  </li>
          <li> <a href="emp-salary-list" class="<?= ($activePage == 'emp-salary-list') ? 'active' : ''; ?>"> <i class="bi bi-cash"></i><span>Salary </span> </a> </li>
          <li class="d-none" > <a href="emp-salary-create" class="<?= ($activePage == 'emp-salary-create') ? 'active' : ''; ?>"> <i class="bi bi-cash"></i><span>Create Salary </span> </a> </li>
          <li class="d-none" > <a href="pay-emp-salary" class="<?= ($activePage == 'pay-emp-salary') ? 'active' : ''; ?>"> <i class="bi bi-cash"></i><span>Pay Salary </span> </a> </li>
          <li> <a href="salary-advance" class="<?= ($activePage == 'salary-advance') ? 'active' : ''; ?>"> <i class="bi bi-circle-square"></i><span>Advance Salary </span> </a> </li>
          <li class="d-none" > <a href="pay-salary-adv" class="<?= ($activePage == 'pay-salary-adv') ? 'active' : ''; ?>"> <i class="bi bi-filter-square"></i><span>Pay Advance Salary </span> </a> </li>
		  <li> <a href="emp-salary-history" class="<?= ($activePage == 'emp-salary-history') ? 'active' : ''; ?>"> <i class="bi bi-distribute-vertical"></i><span>Salary History</span> </a> </li>
          
		</ul>
      </li>
	  
	  <li class="nav-item <?php echo $Task; ?>">
        <a class="nav-link collapsed <?= ( $activePage == 'task-new' || $activePage == 'task-list' || $activePage == 'task-remind') ? 'active' : ''; ?>" data-bs-target="#TaskSec" data-bs-toggle="collapse" href="#">
          <i class="bi bi-pencil-square"></i><span>Daily Task / Notes</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="TaskSec" class="nav-content collapse <?= ( $activePage == 'task-new' || $activePage == 'task-list' || $activePage == 'task-remind') ? 'show' : ''; ?>" data-bs-parent="#sidebar-nav">
          
		  <li> <a href="task-new" class="<?= ($activePage == 'task-new') ? 'active' : ''; ?>">  <i class="bi bi-stickies-fill"></i><span>Add New</span>  </a> </li>
          <li> <a href="task-list" class="<?= ($activePage == 'task-list') ? 'active' : ''; ?>"> <i class="bi bi-stack"></i><span>Task / Notes List</span> </a> </li>
          <li> <a href="task-remind" class="<?= ($activePage == 'task-remind') ? 'active' : ''; ?>"> <i class="bi bi-alarm"></i><span>Reminder List</span> </a> </li>
		</ul>
      </li>   
	 
 

    <li class="nav-heading">Settings Panel</li>
 

    <li class="nav-item">
      <a class="nav-link collapsed <?= ($activePage == 'users-profile') ? 'active' : ''; ?>" href="users-profile">
        <i class="bi bi-person"></i>
        <span>Profile Settings</span>
      </a>
    </li>

    <li class="nav-item mt-5 text-center">
      <img class="opacity-25" src="../includes/itm.png" width="70%">
    </li>


  </ul>

</aside>