<?php include 'auth.php';?>
<!DOCTYPE html>
<html lang="en">
  <!--index-->
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0" />
    <title>Add Student</title>
    <link rel="shortcut icon" href="assets/img/favicon.png" />
    <link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />

    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css" />
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css" />

    <link rel="stylesheet" href="assets/css/style.css" />
    
  </head>
  <body class="nk-body bg-lighter npc-default has-sidebar no-touch nk-nio-theme">
    <div class="main-wrapper">
      <div class="header header-one">
              <div class="header-left header-left-one">
                <a href="index.html" class="logo">
                  <img src="assets/img/logo.png" alt="Logo" />
                </a>
                <a href="index.html" class="white-logo">
                  <img src="assets/img/logo-white.png" alt="Logo" />
                </a>
                <a href="index.html" class="logo logo-small">
                  <img src="assets/img/logo-small.png" alt="Logo" width="30" height="30" />
                </a>
              </div>

              <a href="javascript:void(0);" id="toggle_btn">
                <i class="fas fa-bars"></i>
              </a>

              <a class="mobile_btn" id="mobile_btn">
                <i class="fas fa-bars"></i>
              </a>

              <ul class="nav nav-tabs user-menu">

                <li class="nav-item dropdown">
                  <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown"> <i data-feather="bell"></i> <span class="badge rounded-pill">5</span> </a>
                  <div class="dropdown-menu notifications">
                    <div class="topnav-dropdown-header">
                      <span class="notification-title">Notifications</span>
                      <a href="javascript:void(0)" class="clear-noti"> Clear All</a>
                    </div>
                    <div class="noti-content">
                      <ul class="notification-list">
                        <li class="notification-message">
                          <a href="activities.html">
                            <div class="media d-flex">
                              <span class="avatar avatar-sm">
                                <img class="avatar-img rounded-circle" alt="" src="assets/img/profiles/avatar-02.jpg" />
                              </span>
                              <div class="media-body">
                                <p class="noti-details"><span class="noti-title">Brian Johnson</span> paid the invoice <span class="noti-title">#DF65485</span></p>
                                <p class="noti-time"><span class="notification-time">4 mins ago</span></p>
                              </div>
                            </div>
                          </a>
                        </li>
                        <li class="notification-message">
                          <a href="activities.html">
                            <div class="media d-flex">
                              <span class="avatar avatar-sm">
                                <img class="avatar-img rounded-circle" alt="" src="assets/img/profiles/avatar-03.jpg" />
                              </span>
                              <div class="media-body">
                                <p class="noti-details"><span class="noti-title">Marie Canales</span> has accepted your estimate <span class="noti-title">#GTR458789</span></p>
                                <p class="noti-time"><span class="notification-time">6 mins ago</span></p>
                              </div>
                            </div>
                          </a>
                        </li>
                        <li class="notification-message">
                          <a href="activities.html">
                            <div class="media d-flex">
                              <div class="avatar avatar-sm">
                                <span class="avatar-title rounded-circle bg-primary-light"><i class="far fa-user"></i></span>
                              </div>
                              <div class="media-body">
                                <p class="noti-details"><span class="noti-title">New user registered</span></p>
                                <p class="noti-time"><span class="notification-time">8 mins ago</span></p>
                              </div>
                            </div>
                          </a>
                        </li>
                        <li class="notification-message">
                          <a href="activities.html">
                            <div class="media d-flex">
                              <span class="avatar avatar-sm">
                                <img class="avatar-img rounded-circle" alt="" src="assets/img/profiles/avatar-04.jpg" />
                              </span>
                              <div class="media-body">
                                <p class="noti-details"><span class="noti-title">Barbara Moore</span> declined the invoice <span class="noti-title">#RDW026896</span></p>
                                <p class="noti-time"><span class="notification-time">12 mins ago</span></p>
                              </div>
                            </div>
                          </a>
                        </li>
                        <li class="notification-message">
                          <a href="activities.html">
                            <div class="media d-flex">
                              <div class="avatar avatar-sm">
                                <span class="avatar-title rounded-circle bg-info-light"><i class="far fa-comment"></i></span>
                              </div>
                              <div class="media-body">
                                <p class="noti-details"><span class="noti-title">You have received a new message</span></p>
                                <p class="noti-time"><span class="notification-time">2 days ago</span></p>
                              </div>
                            </div>
                          </a>
                        </li>
                      </ul>
                    </div>
                    <div class="topnav-dropdown-footer">
                      <a href="activities.html">View all Notifications</a>
                    </div>
                  </div>
                </li>

                <li class="nav-item dropdown has-arrow main-drop">
                  <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                    <span class="user-img">
                      <img src="assets/img/profiles/avatar-01.jpg" alt="" />
                      <span class="status online"></span>
                    </span>
                    <span>Admin</span>
                  </a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="profile.php"><i data-feather="user" class="me-1"></i> Profile</a>
                    <a class="dropdown-item" href="settings.php"><i data-feather="settings" class="me-1"></i> Settings</a>
                    <a class="dropdown-item" href="logout.php"><i data-feather="log-out" class="me-1"></i> Logout</a>
                  </div>
                </li>
              </ul>
            </div>

      <?php include 'sidebar.php'; ?>
      <div class="page-wrapper">
      <div class="content container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="card-title">Student</h5>
              </div>
              <div class="card-body">
                <form action="#">
                  <h5 class="card-title">Personal Information</h5>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" />
                      </div>
                      <div class="form-group">
                        <label>Gender</label>
                        <select class="select">
                          <option>Select</option>
                          <option value="1">Male</option>
                          <option value="2">Female</option>
                          <option value="3">Other</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label>Mobile Number</label>
                        <input type="text" class="form-control" />
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" />
                      </div>
                      <div class="form-group">
                        <label>Date of Birth</label>
                        <input type="date" class="form-control" />
                      </div>
                    </div>
                  </div>

                  <h5 class="card-title">Postal Address</h5>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Address Link 1</label>
                        <input type="text" class="form-control" />
                      </div>
                      <div class="form-group">
                        <label>State</label>
                        <input type="text" class="form-control" />
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Address Line 2</label>
                        <input type="text" class="form-control" />
                      </div>
                      <div class="form-group">
                        <label>Pin Code</label>
                        <input type="text" class="form-control" />
                      </div>
                    </div>
                  </div>

                  <h5 class="card-title">Center Details</h5>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Affiliate Center Name</label>
                        <input type="text" class="form-control" />
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Center Code</label>
                        <input type="text" class="form-control" />
                      </div>
                    </div>
                  </div>

                  <h5 class="card-title">Other Details</h5>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Photo</label>
                        <input type="text" class="form-control" />
                      </div>
                      <div class="form-group">
                        <label>Course</label>
                        <input type="text" class="form-control" />
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Educational Qualification</label>
                        <input type="text" class="form-control" />
                      </div>
                      <div class="form-group">
                        <label>Amount</label>
                        <input type="text" class="form-control" />
                      </div>
                    </div>
                  </div>

                  <h5 class="card-title">Authentication Details</h5>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" />
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" />
                      </div>
                    </div>
                  </div>
                  <div class="text-end">
                    <button type="submit" class="btn btn-primary">
                      Submit
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
      </div>
    </div>

    <script src="assets/js/jquery-3.6.0.min.js"></script>

    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/feather.min.js"></script>

    <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="assets/plugins/select2/js/select2.min.js"></script>

    <script src="assets/js/script.js"></script>
  </body>

  <!--index-->
</html>
