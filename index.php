<?php require_once('header.php') ?>

  <body>
    <div id="course" class="">
      <div class="">

        <!-- Side bar Course Content -->
    
        <div id="sidebar" class="open">
          <a onclick="adjustSidebar()" data-toggle="tooltip" data-placement="right" title="Toggle Navigation">
            <i class="fa fa-bars"></i>
          </a>
          <!-- Course Logo -->
          <div class="primary_logo">
            <a href="index.php">
              <strong><h3>Learn to Code</h3></strong>
              <h2>Twitter Bootstrap</h2>
            </a>
          </div> 
          <!-- course navigation -->
          <nav>
            <ul class="course_materials">

              <!-- Lesson 1 - Whats Up With That Bootstrap? - Sidebar Link -->
              <li class="">
                <a href="#tab1" data-toggle="tab" class="tabs">
                  <strong>Lesson 1</strong>
                  <h4>Whats Up With That Bootstrap?</h4>
                </a>
              </li>

              <!-- Lesson 2 - Understanding The Bootstrap Grid - Sidebar Link -->
              <li class="">
                <a href="#tab2" data-toggle="tab" class="tabs">
                  <strong>Lesson 2</strong>
                  <h4>Understanding The Bootstrap Grid</h4>
                </a>
              </li>

              <!-- Lesson 3 - Bootstrap's Helper Classes & Responsive Utilities - Sidebar Link -->
              <li class="">
                <a href="#tab3" data-toggle="tab" class="tabs">
                  <strong>Lesson 3</strong>
                  <h4>Helper Classes &amp; Responsive Utilities</h4>
                </a>
              </li>

              <!-- Lesson 4 - Bootstrap's Tables & Forms - Sidebar Link -->
              <li class="">
                <a href="#tab4" data-toggle="tab" class="tabs">
                  <strong>Lesson 4</strong>
                  <h4>Bootstrap Tables &amp; Forms</h4>
                </a>
              </li>

              <!-- Lesson 5 - Bootstrap's Buttons & Images - Sidebar Link -->
              <li class="">
                <a href="#tab5" data-toggle="tab" class="tabs">
                  <strong>Lesson 5</strong>
                  <h4>Bootstrap Buttons &amp; Images</h4>
                </a>
              </li>

              <!-- Lesson 6 - More Button & Input Groups - Sidebar Link -->
              <li class="">
                <a href="#tab6" data-toggle="tab" class="tabs">
                  <strong>Lesson 6</strong>
                  <h4>More Buttons &amp; Input Groups</h4>
                </a>
              </li>
              <!-- Lesson 7 - Navbars, Breadcrumbs and Pagination - Sidebar Link -->
              <li class="">
                <a href="#tab7" data-toggle="tab" class="tabs">
                  <strong>Lesson 7</strong>
                  <h4>Navbars, Breadcrumbs and Pagination</h4>
                </a>
              </li>
              <!-- Lesson 8 - Adding Labels & Badges - Sidebar Link -->
              <li class="">
                <a href="#tab8" data-toggle="tab" class="tabs">
                  <strong>Lesson 8</strong>
                  <h4>Adding Labels &amp; Badges</h4>
                </a>
              </li>
              <!-- Lesson 9 - How to use Alerts & Progress Bars - Sidebar Link -->
              <li class="">
                <a href="#tab9" data-toggle="tab" class="tabs">
                  <strong>Lesson 9</strong>
                  <h4>How to use Alerts &amp; Progress Bars</h4>
                </a>
              </li>
              <!-- Lesson 10 - Working with the "Jumbotron" - Sidebar Link -->
              <li class="">
                <a href="#tab10" data-toggle="tab" class="tabs">
                  <strong>Lesson 10</strong>
                  <h4>Headers, Thumbnails &amp; The "Jumbotron"</h4>
                </a>
              </li>
              <!-- Lesson 11- The Use Of Panels &amp; Wells - Sidebar Link -->
              <li class="">
                <a href="#tab11" data-toggle="tab" class="tabs">
                  <strong>Lesson 11</strong>
                  <h4>The Use Of Panels, Wells &amp; List Groups</h4>
                </a>
              </li>
              <!-- Lesson 12 - Using Glyphicons & Font-Awesome - Sidebar Link -->
              <li class="">
                <a href="#tab12" data-toggle="tab" class="tabs">
                  <strong>Lesson 12</strong>
                  <h4>Using Glyphicons &amp; Font-Awesome</h4>
                </a>
              </li>
               
            </ul>
          </nav> 
        </div> <!-- /sidebar -->

        
        <div class="">
          <div id="main_content">
            <!-- Main Content Tabs -->
            <div class="tab-content">
              <!-- Course Overview -->
              <div class="tab-pane active" id="opening_tab">

                <div class="main">
                  <header class="header center">
                    <h1>Coding with Twitter Bootstrap 3</h1>
                    <h3>Front End CSS &amp; Javascript Framework</h3>
                  </header>
                </div>

                <div class="course_overview col-md-6">
                  <ol class="course_overview_lessons">
                    <li><a href="#tab1" data-toggle="tab" title="Getting Strated With Bootstrap" class="tabs">Whats Up With That Bootstrap?</a></li>
                    <li><a href="#tab2" data-toggle="tab" title="Grasping The Bootstrap Grid" class="tabs">Grasping The Bootstrap Grid</a></li>
                    <li><a href="#tab3" data-toggle="tab" title="Bootstrap's Table &amp; Forms" class="tabs">Helper Classes &amp; Responsive Utilities</a></li>
                    <li><a href="#tab4" data-toggle="tab" title="Bootstrap's Table &amp; Forms" class="tabs">Bootstrap Table &amp; Forms</a></li>
                    <li><a href="#tab5" data-toggle="tab" title="Bootstrap's Buttons and Images" class="tabs">Bootstrap Buttons and Images</a></li>
                    <li><a href="#tab6" data-toggle="tab" title="More Button &amp; Input Groups" class="tabs">More Buttons &amp; Input Groups</a></li>              
                  </ol>
                </div>

                <div class="course_overview col-md-6">
                  <ol class="tabs course_overview_lessons course_overview_lessons_2">                  
                    <li><a href="#tab7" data-toggle="tab" title="Navbars, Breadcrumbs &amp; Pagination" class="tabs">Navbars, Breadcrumbs &amp; Pagination</a></li>
                    <li><a href="#tab8" data-toggle="tab" title="Adding Labels &amp; Badges" class="tabs">Adding Labels &amp; Badges</a></li>
                    <li><a href="#tab9" data-toggle="tab" title="How to use Alerts &amp; Progress Bars" class="tabs">How to use Alerts &amp; Progress Bars</a></li>
                    <li><a href="#tab10" data-toggle="tab" title="Working with the JUMBOTRON" class="tabs tab_circle">Headers, Thumbnails &amp; The "JUMBOTRON"</a></li>
                    <li><a href="#tab11" data-toggle="tab" title="Utilizing Panels &amp; Wells" class="tabs tab_circle">Utilizing Panels, Wells &amp; List Groups</a></li>
                    <li><a href="#tab12" data-toggle="tab" title="Using Glyphicons and Font-Awesome" class="tabs tab_circle">Using Glyphicons and Font-Awesome</a></li>
                  </ol>
                </div>

                <!-- Get started Now -->
                <div class="row">
                  <div class="col-xs-12 col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3">
                    <a href="#tab1" class="start_button btn btn-lg btn-primary btn-group-justified" data-toggle="tab">
                      Get Started with Bootstrap Now
                    </a>
                  </div>
                </div>

              </div> <!-- /Course Overview -->

              <!-- tab 1 - Content -Getting Started With Bootstrap -->
              <?php include('lesson1.php');?>
              
              <!-- tab 2 - Content -Grasping The Bootstrap Grid -->
              <?php include('lesson2.php');?>

              <!-- tab 3 - Content -Bootstrap's Helper Classes & Responsive Utilities -->
              <?php include('lesson3.php');?>
              
              <!-- tab 4 - Content -Bootstrap's Table & Forms -->
              <?php include('lesson4.php');?>
              
              <!-- tab 5 - Content -Bootstrap's Buttons and Images -->
              <?php include('lesson5.php');?>
              
              <!-- tab 6 - Content -More on Bootstrap's Buttons and Images -->
              <?php include('lesson6.php');?>
              
              <!-- tab 7 - Content -Navbars, Breadcrumbs & Pagination  -->
              <?php include('lesson7.php');?>
              
              <!-- tab 8 - Content -Adding Labels & Badges -->
              <?php include('lesson8.php');?>
              
              <!-- tab 9 - Content -How to use Alerts & Progress Bars  -->
              <?php include('lesson9.php');?>
              
              <!-- tab 10 - Content -Working with the JUMBOTRON  -->
              <?php include('lesson10.php');?>
              
              <!-- tab 11 - Content -Utilizing Panels & Wells  -->
              <?php include('lesson11.php');?>

              <!-- tab 12 - Content -Adding Glyphicons & font awesome  -->
              <?php include('lesson12.php');?>

            </div> <!-- /Main Content Tabs -->
          </div>
        </div> <!-- /col-sm-9 col-md-9 col-lg-9 -->
<?php require_once('footer.php') ?>