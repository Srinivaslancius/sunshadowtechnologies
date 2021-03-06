    <?php 
        $currentFile = $_SERVER["PHP_SELF"];
        $parts = Explode('/', $currentFile);
        $page_name = $parts[count($parts) - 1];
    ?>
<div class="site-left-sidebar">
        <div class="sidebar-backdrop"></div>
        <div class="custom-scrollbar">
          <ul class="sidebar-menu">
            <li class="menu-title">Menu</li>
             <li  class="<?php if($page_name == 'dashboard.php') { echo "active"; } ?>">
              <a href="dashboard.php" aria-haspopup="true">
                <span class="menu-icon">
                   <i class="zmdi zmdi-view-dashboard zmdi-hc-fw"></i>
                </span> 
                <span class="menu-text">Dashboard</span>
              </a>
            </li>          
            <li class="<?php if($page_name == 'site_settings.php') { echo "active"; } ?>">
              <a href="site_settings.php" aria-haspopup="true">
                <span class="menu-icon">
                  <i class="zmdi zmdi-settings zmdi-hc-fw"></i>
                </span>
                <span class="menu-text">Site Settings</span>
              </a>
            </li>
            <li class="with-sub">
              <a href="#" aria-haspopup="true">
                <span class="menu-icon">
                  <i class="zmdi zmdi-accounts zmdi-hc-fw"></i>
                </span>
                <span class="menu-text">Users</span>
              </a>
              <ul class="sidebar-submenu collapse">
                <li class="menu-subtitle">Users</li>
                <li class="<?php if($page_name == 'admin_users.php' || $page_name == 'add_admin_users.php' || $page_name == 'edit_admin_users.php') { echo "active"; } ?>"><a href="admin_users.php">Admin Users</a></li>
                <!-- <li class="<?php if($page_name == 'users.php' || $page_name == 'add_users.php' || $page_name == 'edit_users.php') { echo "active"; } ?>"><a href="users.php">Users</a></li> -->
              </ul> 
            </li>
            <li  class="<?php if($page_name == 'banners.php' || $page_name == 'add_banners.php' || $page_name == 'edit_banners.php') { echo "active"; } ?>">
              <a href="banners.php" aria-haspopup="true">
                <span class="menu-icon">
                   <i class="zmdi zmdi-collection-image  zmdi-hc-fw"></i>
                </span> 
                <span class="menu-text">Banners</span>
              </a>
            </li>
            <li  class="<?php if($page_name == 'categories.php' || $page_name == 'add_categories.php' || $page_name == 'edit_categories.php') { echo "active"; } ?>">
              <a href="categories.php" aria-haspopup="true">
                <span class="menu-icon">
                   <i class="zmdi zmdi-store zmdi-hc-fw"></i>
                </span>
                <span class="menu-text">Categories</span>
              </a>
            </li>
            <li  class="<?php if($page_name == 'downloads.php' || $page_name == 'add_downloads.php' || $page_name == 'edit_downloads.php') { echo "active"; } ?>">
              <a href="downloads.php" aria-haspopup="true">
                <span class="menu-icon">
                   <i class="glyphicon glyphicon-download-alt"></i>
                </span> 
                <span class="menu-text">Downloads</span>
              </a>
            </li>
            <li  class="<?php if($page_name == 'features.php' || $page_name == 'add_features.php' || $page_name == 'edit_features.php') { echo "active"; } ?>">
              <a href="features.php" aria-haspopup="true">
                <span class="menu-icon">
                   <i class="glyphicon glyphicon-hand-right"></i>
                </span> 
                <span class="menu-text">Features</span>
              </a>
            </li>
            <li  class="<?php if($page_name == 'industries.php' || $page_name == 'add_industries.php' || $page_name == 'edit_industries.php') { echo "active"; } ?>">
              <a href="industries.php" aria-haspopup="true">
                <span class="menu-icon">
                   <i class="glyphicon glyphicon-hand-right"></i>
                </span> 
                <span class="menu-text">Industries</span>
              </a>
            </li>
            <li  class="<?php if($page_name == 'industries_test_cases.php' || $page_name == 'add_industries_test_cases.php' || $page_name == 'edit_industries_test_cases.php') { echo "active"; } ?>">
              <a href="industries_test_cases.php" aria-haspopup="true">
                <span class="menu-icon">
                   <i class="glyphicon glyphicon-hand-right"></i>
                </span> 
                <span class="menu-text">Industries Case Studies</span>
              </a>
            </li>
            <li  class="<?php if($page_name == 'case_studies.php' || $page_name == 'add_case_studies.php' || $page_name == 'edit_case_studies.php') { echo "active"; } ?>">
              <a href="case_studies.php" aria-haspopup="true">
                <span class="menu-icon">
                   <i class="zmdi zmdi-shopping-basket zmdi-hc-fw"></i>
                </span>
                <span class="menu-text">Case Studies</span>
              </a>
            </li>
           <li  class="<?php if($page_name == 'our_clients.php' || $page_name == 'add_our_clients.php' || $page_name == 'edit_our_clients.php') { echo "active"; } ?>">
              <a href="our_clients.php" aria-haspopup="true">
                <span class="menu-icon">
                   <i class="zmdi zmdi-collection-image  zmdi-hc-fw"></i>
                </span> 
                <span class="menu-text">Our Clients</span>
              </a>
            </li>
            <li  class="<?php if($page_name == 'greenmarks.php' || $page_name == 'add_greenmarks.php' || $page_name == 'edit_greenmarks.php') { echo "active"; } ?>">
              <a href="greenmarks.php" aria-haspopup="true">
                <span class="menu-icon">
                   <i class="zmdi zmdi-collection-image  zmdi-hc-fw"></i>
                </span> 
                <span class="menu-text">GreenMarks</span>
              </a>
            </li>
            <li  class="<?php if($page_name == 'testimonials.php' || $page_name == 'add_testimonials.php' || $page_name == 'edit_testimonials.php') { echo "active"; } ?>">
              <a href="testimonials.php" aria-haspopup="true">
                <span class="menu-icon">
                   <i class="zmdi zmdi-comments  zmdi-hc-fw"></i>
                </span> 
                <span class="menu-text">Our Team</span>
              </a>
            </li>
            <li  class="<?php if($page_name == 'products.php' || $page_name == 'add_products.php' || $page_name == 'edit_products.php') { echo "active"; } ?>">
              <a href="products.php" aria-haspopup="true">
                <span class="menu-icon">
                   <i class="zmdi zmdi-collection-image  zmdi-hc-fw"></i>
                </span> 
                <span class="menu-text">Products</span>
              </a>
            </li>
            <li  class="<?php if($page_name == 'content_pages.php' || $page_name == 'add_content_pages.php' || $page_name == 'edit_content_pages.php') { echo "active"; } ?>">
              <a href="content_pages.php" aria-haspopup="true">
                <span class="menu-icon">
                   <i class="zmdi zmdi-collection-item  zmdi-hc-fw"></i>
                </span> 
                <span class="menu-text">Content Pages</span>
              </a>
            </li>
            <li  class="<?php if($page_name == 'news.php' || $page_name == 'add_news.php' || $page_name == 'edit_news.php') { echo "active"; } ?>">
              <a href="news.php" aria-haspopup="true">
                <span class="menu-icon">
                   <i class="zmdi zmdi-collection-item  zmdi-hc-fw"></i>
                </span> 
                <span class="menu-text">News</span>
              </a>
            </li>
            
          
            <li  class="<?php if($page_name == 'faqs.php' || $page_name == 'add_faqs.php' || $page_name == 'edit_faqs.php') { echo "active"; } ?>">
              <a href="faqs.php" aria-haspopup="true">
                <span class="menu-icon">
                   <i class="zmdi zmdi-pin-help zmdi-hc-fw"></i>
                </span> 
                <span class="menu-text">FAQ'S</span>
              </a>
            </li>
            
            <li  class="<?php if($page_name == 'newsletter.php' ) { echo "active"; } ?>">
              <a href="newsletter.php" aria-haspopup="true">
                <span class="menu-icon">
                   <i class="zmdi zmdi-collection-image zmdi-hc-fw"></i>
                </span>
                <span class="menu-text">News Letters</span>
              </a>
            </li>
            <li  class="<?php if($page_name == 'customer_enqueries.php') { echo "active"; } ?>">
              <a href="customer_enqueries.php" aria-haspopup="true">
                <span class="menu-icon">
                   <i class="zmdi zmdi-account-box-mail zmdi-hc-fw"></i>
                </span>
                <span class="menu-text">Customer Enqueries</span>
              </a>
            </li>
            <!-- <li  class="<?php if($page_name == 'feedbacks.php') { echo "active"; } ?>">
              <a href="feedbacks.php" aria-haspopup="true">
                <span class="menu-icon">
                   <i class="zmdi zmdi-account-box-mail zmdi-hc-fw"></i>
                </span>
                <span class="menu-text">User Feedbacks</span>
              </a>
            </li> -->
          </ul>
        </div>
      </div>