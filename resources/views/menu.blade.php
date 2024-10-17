
<style>
.menu-item a {
    display: flex;
    align-items: center;
    text-decoration: none;
    color: #fff; /* Default text color for contrast */
    padding: 10px;
    border-radius: 4px; /* Rounded corners for the menu items */
}

.menu-item a div {
    margin-left: 10px; /* Space between icon and text */
}

/* Specific styles for Login item */
.login-item a {
    background-color: #000; /* Black background */
}

.login-item a div {
    color: #fff; /* White text color for contrast */
}

/* Specific styles for Sign In item */
.sign-in-item a {
    background-color: #fff; /* White background */
    color: #000; /* Black text color for contrast */
}

.sign-in-item a div {
    color: #000; /* Ensure text is black */
}
</style>
  <body>
    <!-- Layout wrapper -->

          <!-- Navbar -->

          <nav
            class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar"
          >
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              
              <!-- /Search -->

              <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- Place this tag where you want the button to render. -->
                <li class="nav-item lh-1 me-3">
              
                </li>

                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  
                  
                       
                    
                  
                <li class="menu-item login-item">
    <a href="{{ url('login') }}" class="menu-link">
      <i class="menu-icon tf-icons bx bx-home-circle"></i>
      <div data-i18n="Analytics">Login</div>
    </a>
</li>


                    
                  </ul>
                </li>
                <!--/ User -->
              </ul>
            </div>
          </nav>

          <!-- / Navbar -->