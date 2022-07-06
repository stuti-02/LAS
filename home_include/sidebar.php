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
          

          <li class="nav-item dropdown has-arrow">
            <a
              href="#"
              class="dropdown-toggle nav-link"
              data-bs-toggle="dropdown"
            >
              <span class="user-img"
                ><img
                  class="rounded-circle"
                  src="assets/admin/t-woner.png"
                  width="31"
                  alt="Admin"
              /></span>
            </a>
            <div class="dropdown-menu">
              <div class="user-header">
                <div class="avatar avatar-sm">
                  <img
                    src="assets/admin/t-woner.png"
                  />
                </div>
                <div class="user-text">
                  <h6>Admin</h6>
                  <p class="text-muted mb-0">SPI Library Hub</p>
                </div>
              </div>
              <a class="dropdown-item" href="admin_profile.php">My Profile</a>
              <a class="dropdown-item" href="logout.php">Logout</a>
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
                <a href="dashboard.php" class="active">
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
                  <li><a href="fee_status.php">Student's Status</a></li>
                  <li><a href="fee_record.php">Fee Record</a></li>
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
                </ul>
              </li>
        
              <li>
                <a href="fee_mgmt.php"><i class="fas fa-comment-dollar"></i> <span>Change Fees</span></a
                >
              </li>
              
            </ul>
          </div>
        </div>
    </div>