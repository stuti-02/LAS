    <div class="header">
        <div class="header-left">
          <a href="index.php" class="logo">
            <img src="assets/img/logo-small.png" alt="Logo"/><span class="ms-4">Softpro Library Hub</span>
          </a>
          <a href="index.php" class="logo logo-small">
            <img
              src="assets/img/logo-small.png" alt="Logo" width="30" height="30"/>
          </a>
        </div>

        <a href="javascript:void(0);" id="toggle_btn">
          <i class="fas fa-align-left"></i>
        </a>

        <div class="top-nav-search">
          <form>
            <input type="text" class="form-control" placeholder="Search here" />
            <button class="btn" type="submit">
              <i class="fas fa-search"></i>
            </button>
          </form>
        </div>

        <a class="mobile_btn" id="mobile_btn">
          <i class="fas fa-bars"></i>
        </a>

        <ul class="nav user-menu">
          <li class="nav-item dropdown noti-dropdown">
            <a
              href="#"
              class="dropdown-toggle nav-link"
              data-bs-toggle="dropdown"
            >
              <i class="far fa-bell"></i>
              <span class="badge badge-pill">3</span>
            </a>
            <div class="dropdown-menu notifications">
              <div class="topnav-dropdown-header">
                <span class="notification-title">Notifications</span>
                <a href="javascript:void(0)" class="clear-noti"> Clear All </a>
              </div>
              <div class="noti-content">
                <ul class="notification-list">
                  <li class="notification-message">
                    <a href="#">
                      <div class="media d-flex">
                        <span class="avatar avatar-sm flex-shrink-0">
                          <img
                            class="avatar-img rounded-circle"
                            alt="User Image"
                            src="assets/img/profiles/avatar-02.jpg"
                          />
                        </span>
                        <div class="media-body flex-grow-1">
                          <p class="noti-details">
                            <span class="noti-title">Carlson Tech</span> has
                            approved
                            <span class="noti-title">your estimate</span>
                          </p>
                          <p class="noti-time">
                            <span class="notification-time">4 mins ago</span>
                          </p>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li class="notification-message">
                    <a href="#">
                      <div class="media d-flex">
                        <span class="avatar avatar-sm flex-shrink-0">
                          <img
                            class="avatar-img rounded-circle"
                            alt="User Image"
                            src="assets/img/profiles/avatar-11.jpg"
                          />
                        </span>
                        <div class="media-body flex-grow-1">
                          <p class="noti-details">
                            <span class="noti-title"
                              >International Software Inc</span
                            >
                            has sent you a invoice in the amount of
                            <span class="noti-title">$218</span>
                          </p>
                          <p class="noti-time">
                            <span class="notification-time">6 mins ago</span>
                          </p>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li class="notification-message">
                    <a href="#">
                      <div class="media d-flex">
                        <span class="avatar avatar-sm flex-shrink-0">
                          <img
                            class="avatar-img rounded-circle"
                            alt="User Image"
                            src="assets/img/profiles/avatar-17.jpg"
                          />
                        </span>
                        <div class="media-body flex-grow-1">
                          <p class="noti-details">
                            <span class="noti-title">John Hendry</span> sent a
                            cancellation request
                            <span class="noti-title">Apple iPhone XR</span>
                          </p>
                          <p class="noti-time">
                            <span class="notification-time">8 mins ago</span>
                          </p>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li class="notification-message">
                    <a href="#">
                      <div class="media d-flex">
                        <span class="avatar avatar-sm flex-shrink-0">
                          <img
                            class="avatar-img rounded-circle"
                            alt="User Image"
                            src="assets/img/profiles/avatar-13.jpg"
                          />
                        </span>
                        <div class="media-body flex-grow-1">
                          <p class="noti-details">
                            <span class="noti-title">Mercury Software Inc</span>
                            added a new product
                            <span class="noti-title">Apple MacBook Pro</span>
                          </p>
                          <p class="noti-time">
                            <span class="notification-time">12 mins ago</span>
                          </p>
                        </div>
                      </div>
                    </a>
                  </li>
                </ul>
              </div>
              <div class="topnav-dropdown-footer">
                <a href="#">View all Notifications</a>
              </div>
            </div>
          </li>

          <li class="nav-item dropdown has-arrow">
            <a
              href="#"
              class="dropdown-toggle nav-link"
              data-bs-toggle="dropdown"
            >
              <span class="user-img"
                ><img
                  class="rounded-circle"
                  src="assets/img/profiles/avatar-01.jpg"
                  width="31"
                  alt="Ryan Taylor"
              /></span>
            </a>
            <div class="dropdown-menu">
              <div class="user-header">
                <div class="avatar avatar-sm">
                  <img
                    src="assets/img/profiles/avatar-01.jpg"
                    alt="User Image"
                    class="avatar-img rounded-circle"
                  />
                </div>
                <div class="user-text">
                  <h6>Ryan Taylor</h6>
                  <p class="text-muted mb-0">Administrator</p>
                </div>
              </div>
              <a class="dropdown-item" href="profile.php">My Profile</a>
              <a class="dropdown-item" href="inbox.php">Inbox</a>
              <a class="dropdown-item" href="login.php">Logout</a>
            </div>
          </li>
        </ul>
      </div>

      <div class="sidebar" id="sidebar">
        <div class="sidebar-inner slimscroll">
          <div id="sidebar-menu" class="sidebar-menu">
            <ul>
              <li class="menu-title">
                <span>Main Menu</span>
              </li>
              <li>
                <a href="index.php" class="active">
                    <i class="fas fa-user-graduate"></i>
                    <span>Admin Dashboard</span>
                </a>
              </li>
              <li class="submenu">
                <a href="#">
                    <i class="fas fa-user-graduate"></i> <span> Students</span>
                    <span class="menu-arrow"></span>
                </a>
                <ul>
                  <li><a href="add-student.php">Student Add</a></li>
                  <li><a href="students.php">Student List</a></li>
                </ul>
              </li>
              <li>
                <a href="generate_barcode.php">
                  <i class="fas fa-chalkboard-teacher"></i>
                  <span> Generate Barcode</span> 
                </a>
              </li>
              <li class="submenu">
                <a href="#"
                  ><i class="fas fa-building"></i> <span> Fee Management</span>
                  <span class="menu-arrow"></span
                ></a>

                <ul>
                  <li><a href="add-fee.php">Add Fee</a></li>
                  <li><a href="fee_list.php">Student's List</a></li>
                </ul>
              </li>
              <li class="submenu">
                <a href="#"
                  ><i class="fas fa-book-reader"></i> <span> Attendance Management</span>
                  <span class="menu-arrow"></span
                ></a>
                <ul>
                  <li><a href="mark-attendance.php">Mark Attendance</a></li>
                  <li><a href="entry-attendance.php">Entry Attendance</a></li>
                  <li><a href="exit-attendance.php">Exit Attendance</a></li>
                  <li><a href="view-attendance.php">View Attendance</a></li>
                </ul>
              </li>
              <li class="submenu">
                <a href="#"
                  ><i class="fas fa-clipboard"></i> <span> Invoices</span>
                  <span class="menu-arrow"></span
                ></a>
                <ul>
                  <li><a href="invoices.php">Invoices List</a></li>
                  <li><a href="invoice-grid.php">Invoices Grid</a></li>
                  <li><a href="add-invoice.php">Add Invoices</a></li>
                  <li><a href="edit-invoice.php">Edit Invoices</a></li>
                  <li><a href="view-invoice.php">Invoices Details</a></li>
                  <li>
                    <a href="invoices-settings.php">Invoices Settings</a>
                  </li>
                </ul>
              </li>
              <li class="menu-title">
                <span>Management</span>
              </li>
              <li class="submenu">
                <a href="#"
                  ><i class="fas fa-file-invoice-dollar"></i>
                  <span> Accounts</span> <span class="menu-arrow"></span
                ></a>
                <ul>
                  <li><a href="fee-collection.php">Fees Collection</a></li>
                  <li><a href="expenses.php">Expenses</a></li>
                  <li><a href="salary.php">Salary</a></li>
                  <li><a href="add-fees-collection.php">Add Fees</a></li>
                  <li><a href="add-expenses.php">Add Expenses</a></li>
                  <li><a href="add-salary.php">Add Salary</a></li>
                </ul>
              </li>
        
              <li>
                <a href="fee_mgmt.php"
                  ><i class="fas fa-comment-dollar"></i> <span>Change Fees</span></a
                >
              </li>
              
            </ul>
          </div>
        </div>
    </div>