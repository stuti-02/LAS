      <div class="header">
          <div class="header-left">
            <a href="index.php" class="logo">
              <img src="assets/img/logo-small.png" alt="Logo"/><span class="ms-2 ps-1" style="color:#e67817;text-shadow:none;font-weight:bold;font-size:20px;">SOFTPRO LIBRARY HUB</span>
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
                    <h6>ADMIN</h6>
                    <p class="text-muted mb-0">SPI LIBRARY HUB</p>
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
                  <span>MAIN MENU</span>
                </li>
                <li>
                  <a href="dashboard.php" class="active">
                      <i class="fas fa-user-graduate"></i>
                      <span>ADMIN DASHBOARD <br>
                      (व्यवस्थापक डैशबोर्ड)</span>
                  </a>
                </li>
                <li class="submenu">
                  <a href="#">
                      <i class="fas fa-user-graduate"></i> <span> STUDENTS (छात्र)</span>
                      <span class="menu-arrow"></span>
                  </a>
                  <ul>
                    <li><a href="add-student.php">ADD STUDENT (छात्र जोड़ें)</a></li>
                    <li><a href="students.php">STUDENT'S LIST (छात्रों की सूची)</a></li>
                  </ul>
                </li>
                <li>
                  <a href="generate_barcode.php">
                    <i class="fas fa-chalkboard-teacher"></i>
                    <span> GENERATE BARCODE <br>
                    (बारकोड उत्पन्न करें)</span> 
                  </a>
                </li>
                <li class="submenu">
                  <a href="#"
                    ><i class="fas fa-building"></i> <span> FEE MANAGEMENT <br>(शुल्क प्रबंधन)</span>
                    <span class="menu-arrow"></span
                  ></a>

                  <ul>
                    <li><a href="add-fee.php">PAY FEE (शुल्क भुगतान)</a></li>
                    <li><a href="fee_status.php">STUDENT'S STATUS <br> (छात्र की स्थिति)</a></li>
                    <li><a href="fee_record.php">FEE RECORD (शुल्क रिकॉर्ड)</a></li>
                  </ul>
                </li>
                <li class="submenu">
                  <a href="#"
                    ><i class="fas fa-book-reader"></i> <span> ATTENDANCE (उपस्थिति)</span>
                    <span class="menu-arrow"></span
                  ></a>
                  <ul>
                    <li><a href="mark-attendance.php">MARK ATTENDANCE <br>(उपस्थिति लगाओ)</a></li>
                    <li><a href="entry-attendance.php">ENTRY ATTENDANCE  <br>(प्रवेश उपस्थिति)</a></li>
                    <li><a href="exit-attendance.php">EXIT ATTENDANCE  <br>(निकास उपस्थिति)</a></li>
                    <li><a href="view-attendance.php">VIEW ATTENDANCE  <br>(सभी उपस्थिति देखें)</a></li>
                  </ul>
                </li>
                
                <li class="menu-title">
                  <span>MANAGEMENT</span>
                </li>
                <li class="submenu">
                  <a href="#"
                    ><i class="fas fa-file-invoice-dollar"></i>
                    <span> ACCOUNTS (लेखा प्रबंधन)</span> <span class="menu-arrow"></span
                  ></a>
                  <ul>
                    <li><a href="fee-collection.php">FEE COLLECTION (शुल्क संग्रह)</a></li>
                    <li><a href="add-expense.php">ADD EXPENSES</a></li>
                    <li><a href="view-expense.php">VIEW EXPENSES</a></li>
                  </ul>
                </li>
          
                <li>
                  <a href="fee_mgmt.php"><i class="fas fa-comment-dollar"></i> <span>CHANGE FEE (शुल्क परिवर्तन)</span></a
                  >
                </li>
                
              </ul>
            </div>
          </div>
      </div>