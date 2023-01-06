<?php include 'auth.php';?>
<!DOCTYPE html>
<html lang="en">
  <!--index-->
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0" />
    <title>MMITI Admin Dashboard</title>
    <link rel="shortcut icon" href="assets/img/favicon.png" />

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
            <div class="col-xl-3 col-sm-6 col-12">
              <div class="card">
                <div class="card-body">
                  <div class="dash-widget-header">
                    <span class="dash-widget-icon bg-1">
                      <i class="fas fa-dollar-sign"></i>
                    </span>
                    <div class="dash-count">
                      <div class="dash-title">Amount Due</div>
                      <div class="dash-counts">
                        <p>1,642</p>
                      </div>
                    </div>
                  </div>
                  <div class="progress progress-sm mt-3">
                    <div class="progress-bar bg-5" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <p class="text-muted mt-3 mb-0">
                    <span class="text-danger me-1"><i class="fas fa-arrow-down me-1"></i>1.15%</span> since last week
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12">
              <div class="card">
                <div class="card-body">
                  <div class="dash-widget-header">
                    <span class="dash-widget-icon bg-2">
                      <i class="fas fa-users"></i>
                    </span>
                    <div class="dash-count">
                      <div class="dash-title">Customers</div>
                      <div class="dash-counts">
                        <p>3,642</p>
                      </div>
                    </div>
                  </div>
                  <div class="progress progress-sm mt-3">
                    <div class="progress-bar bg-6" role="progressbar" style="width: 65%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <p class="text-muted mt-3 mb-0">
                    <span class="text-success me-1"><i class="fas fa-arrow-up me-1"></i>2.37%</span> since last week
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12">
              <div class="card">
                <div class="card-body">
                  <div class="dash-widget-header">
                    <span class="dash-widget-icon bg-3">
                      <i class="fas fa-file-alt"></i>
                    </span>
                    <div class="dash-count">
                      <div class="dash-title">Invoices</div>
                      <div class="dash-counts">
                        <p>1,041</p>
                      </div>
                    </div>
                  </div>
                  <div class="progress progress-sm mt-3">
                    <div class="progress-bar bg-7" role="progressbar" style="width: 85%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <p class="text-muted mt-3 mb-0">
                    <span class="text-success me-1"><i class="fas fa-arrow-up me-1"></i>3.77%</span> since last week
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12">
              <div class="card">
                <div class="card-body">
                  <div class="dash-widget-header">
                    <span class="dash-widget-icon bg-4">
                      <i class="far fa-file"></i>
                    </span>
                    <div class="dash-count">
                      <div class="dash-title">Estimates</div>
                      <div class="dash-counts">
                        <p>2,150</p>
                      </div>
                    </div>
                  </div>
                  <div class="progress progress-sm mt-3">
                    <div class="progress-bar bg-8" role="progressbar" style="width: 45%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <p class="text-muted mt-3 mb-0">
                    <span class="text-danger me-1"><i class="fas fa-arrow-down me-1"></i>8.68%</span> since last week
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xl-7 d-flex">
              <div class="card flex-fill">
                <div class="card-header">
                  <div class="d-flex justify-content-between align-items-center">
                    <h5 class="card-title">Sales Analytics</h5>
                    <div class="dropdown">
                      <button class="btn btn-white btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                        Monthly
                      </button>
                      <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <li>
                          <a href="javascript:void(0);" class="dropdown-item">Weekly</a>
                        </li>
                        <li>
                          <a href="javascript:void(0);" class="dropdown-item">Monthly</a>
                        </li>
                        <li>
                          <a href="javascript:void(0);" class="dropdown-item">Yearly</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="d-flex align-items-center justify-content-between flex-wrap flex-md-nowrap">
                    <div class="w-md-100 d-flex align-items-center mb-3 flex-wrap flex-md-nowrap">
                      <div>
                        <span>Total Sales</span>
                        <p class="h3 text-primary me-5">$1000</p>
                      </div>
                      <div>
                        <span>Receipts</span>
                        <p class="h3 text-success me-5">$1000</p>
                      </div>
                      <div>
                        <span>Expenses</span>
                        <p class="h3 text-danger me-5">$300</p>
                      </div>
                      <div>
                        <span>Earnings</span>
                        <p class="h3 text-dark me-5">$700</p>
                      </div>
                    </div>
                  </div>
                  <div id="sales_chart"></div>
                </div>
              </div>
            </div>
            <div class="col-xl-5 d-flex">
              <div class="card flex-fill">
                <div class="card-header">
                  <div class="d-flex justify-content-between align-items-center">
                    <h5 class="card-title">Invoice Analytics</h5>
                    <div class="dropdown">
                      <button class="btn btn-white btn-sm dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        Monthly
                      </button>
                      <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li>
                          <a href="javascript:void(0);" class="dropdown-item">Weekly</a>
                        </li>
                        <li>
                          <a href="javascript:void(0);" class="dropdown-item">Monthly</a>
                        </li>
                        <li>
                          <a href="javascript:void(0);" class="dropdown-item">Yearly</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div id="invoice_chart"></div>
                  <div class="text-center text-muted">
                    <div class="row">
                      <div class="col-4">
                        <div class="mt-4">
                          <p class="mb-2 text-truncate"><i class="fas fa-circle text-primary me-1"></i> Invoiced</p>
                          <h5>$2,132</h5>
                        </div>
                      </div>
                      <div class="col-4">
                        <div class="mt-4">
                          <p class="mb-2 text-truncate"><i class="fas fa-circle text-success me-1"></i> Received</p>
                          <h5>$1,763</h5>
                        </div>
                      </div>
                      <div class="col-4">
                        <div class="mt-4">
                          <p class="mb-2 text-truncate"><i class="fas fa-circle text-danger me-1"></i> Pending</p>
                          <h5>$973</h5>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 col-sm-6">
              <div class="card">
                <div class="card-header">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title">Recent Invoices</h5>
                    </div>
                    <div class="col-auto">
                      <a href="invoices.html" class="btn-right btn btn-sm btn-outline-primary">
                        View All
                      </a>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="mb-3">
                    <div class="progress progress-md rounded-pill mb-3">
                      <div class="progress-bar bg-success" role="progressbar" style="width: 47%;" aria-valuenow="47" aria-valuemin="0" aria-valuemax="100"></div>
                      <div class="progress-bar bg-warning" role="progressbar" style="width: 28%;" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
                      <div class="progress-bar bg-danger" role="progressbar" style="width: 15%;" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                      <div class="progress-bar bg-info" role="progressbar" style="width: 10%;" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="row">
                      <div class="col-auto"><i class="fas fa-circle text-success me-1"></i> Paid</div>
                      <div class="col-auto"><i class="fas fa-circle text-warning me-1"></i> Unpaid</div>
                      <div class="col-auto"><i class="fas fa-circle text-danger me-1"></i> Overdue</div>
                      <div class="col-auto"><i class="fas fa-circle text-info me-1"></i> Draft</div>
                    </div>
                  </div>
                  <div class="table-responsive">
                    <table class="table table-stripped table-hover">
                      <thead class="thead-light">
                        <tr>
                          <th>Customer</th>
                          <th>Amount</th>
                          <th>Due Date</th>
                          <th>Status</th>
                          <th class="text-right">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            <h2 class="table-avatar">
                              <a href="profile.html"><img class="avatar avatar-sm me-2 avatar-img rounded-circle" src="assets/img/profiles/avatar-04.jpg" alt="User Image" />Barbara Moore</a>
                            </h2>
                          </td>
                          <td>$118</td>
                          <td>23 Nov 2020</td>
                          <td><span class="badge bg-success-light">Paid</span></td>
                          <td class="text-right">
                            <div class="dropdown dropdown-action">
                              <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-h"></i></a>
                              <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="edit-invoice.html"><i class="far fa-edit me-2"></i>Edit</a>
                                <a class="dropdown-item" href="view-invoice.html"><i class="far fa-eye me-2"></i>View</a>
                                <a class="dropdown-item" href="javascript:void(0);"><i class="far fa-trash-alt me-2"></i>Delete</a>
                                <a class="dropdown-item" href="javascript:void(0);"><i class="far fa-check-circle me-2"></i>Mark as sent</a>
                                <a class="dropdown-item" href="javascript:void(0);"><i class="far fa-paper-plane me-2"></i>Send Invoice</a>
                                <a class="dropdown-item" href="javascript:void(0);"><i class="far fa-copy me-2"></i>Clone Invoice</a>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <h2 class="table-avatar">
                              <a href="profile.html"><img class="avatar avatar-sm me-2 avatar-img rounded-circle" src="assets/img/profiles/avatar-06.jpg" alt="User Image" />Karlene Chaidez</a>
                            </h2>
                          </td>
                          <td>$222</td>
                          <td>18 Nov 2020</td>
                          <td><span class="badge bg-info-light">Sent</span></td>
                          <td class="text-right">
                            <div class="dropdown dropdown-action">
                              <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-h"></i></a>
                              <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="edit-invoice.html"><i class="far fa-edit me-2"></i>Edit</a>
                                <a class="dropdown-item" href="view-invoice.html"><i class="far fa-eye me-2"></i>View</a>
                                <a class="dropdown-item" href="javascript:void(0);"><i class="far fa-trash-alt me-2"></i>Delete</a>
                                <a class="dropdown-item" href="javascript:void(0);"><i class="far fa-check-circle me-2"></i>Mark as sent</a>
                                <a class="dropdown-item" href="javascript:void(0);"><i class="far fa-paper-plane me-2"></i>Send Invoice</a>
                                <a class="dropdown-item" href="javascript:void(0);"><i class="far fa-copy me-2"></i>Clone Invoice</a>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <h2 class="table-avatar">
                              <a href="profile.html"><img class="avatar avatar-sm me-2 avatar-img rounded-circle" src="assets/img/profiles/avatar-08.jpg" alt="User Image" />Russell Copeland</a>
                            </h2>
                          </td>
                          <td>$347</td>
                          <td>10 Nov 2020</td>
                          <td><span class="badge bg-warning-light">Partially Paid</span></td>
                          <td class="text-right">
                            <div class="dropdown dropdown-action">
                              <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-h"></i></a>
                              <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="edit-invoice.html"><i class="far fa-edit me-2"></i>Edit</a>
                                <a class="dropdown-item" href="view-invoice.html"><i class="far fa-eye me-2"></i>View</a>
                                <a class="dropdown-item" href="javascript:void(0);"><i class="far fa-trash-alt me-2"></i>Delete</a>
                                <a class="dropdown-item" href="javascript:void(0);"><i class="far fa-check-circle me-2"></i>Mark as sent</a>
                                <a class="dropdown-item" href="javascript:void(0);"><i class="far fa-paper-plane me-2"></i>Send Invoice</a>
                                <a class="dropdown-item" href="javascript:void(0);"><i class="far fa-copy me-2"></i>Clone Invoice</a>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <h2 class="table-avatar">
                              <a href="profile.html"><img class="avatar avatar-sm me-2 avatar-img rounded-circle" src="assets/img/profiles/avatar-10.jpg" alt="User Image" />Joseph Collins</a>
                            </h2>
                          </td>
                          <td>$826</td>
                          <td>25 Sep 2020</td>
                          <td><span class="badge bg-danger-light">Overdue</span></td>
                          <td class="text-right">
                            <div class="dropdown dropdown-action">
                              <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-h"></i></a>
                              <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="edit-invoice.html"><i class="far fa-edit me-2"></i>Edit</a>
                                <a class="dropdown-item" href="view-invoice.html"><i class="far fa-eye me-2"></i>View</a>
                                <a class="dropdown-item" href="javascript:void(0);"><i class="far fa-trash-alt me-2"></i>Delete</a>
                                <a class="dropdown-item" href="javascript:void(0);"><i class="far fa-check-circle me-2"></i>Mark as sent</a>
                                <a class="dropdown-item" href="javascript:void(0);"><i class="far fa-paper-plane me-2"></i>Send Invoice</a>
                                <a class="dropdown-item" href="javascript:void(0);"><i class="far fa-copy me-2"></i>Clone Invoice</a>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <h2 class="table-avatar">
                              <a href="profile.html"><img class="avatar avatar-sm me-2 avatar-img rounded-circle" src="assets/img/profiles/avatar-11.jpg" alt="User Image" />Jennifer Floyd</a>
                            </h2>
                          </td>
                          <td>$519</td>
                          <td>18 Sep 2020</td>
                          <td><span class="badge bg-success-light">Paid</span></td>
                          <td class="text-right">
                            <div class="dropdown dropdown-action">
                              <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-h"></i></a>
                              <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="edit-invoice.html"><i class="far fa-edit me-2"></i>Edit</a>
                                <a class="dropdown-item" href="view-invoice.html"><i class="far fa-eye me-2"></i>View</a>
                                <a class="dropdown-item" href="javascript:void(0);"><i class="far fa-trash-alt me-2"></i>Delete</a>
                                <a class="dropdown-item" href="javascript:void(0);"><i class="far fa-check-circle me-2"></i>Mark as sent</a>
                                <a class="dropdown-item" href="javascript:void(0);"><i class="far fa-paper-plane me-2"></i>Send Invoice</a>
                                <a class="dropdown-item" href="javascript:void(0);"><i class="far fa-copy me-2"></i>Clone Invoice</a>
                              </div>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-sm-6">
              <div class="card">
                <div class="card-header">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title">Recent Estimates</h5>
                    </div>
                    <div class="col-auto">
                      <a href="estimates.html" class="btn-right btn btn-sm btn-outline-primary">
                        View All
                      </a>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="mb-3">
                    <div class="progress progress-md rounded-pill mb-3">
                      <div class="progress-bar bg-success" role="progressbar" style="width: 39%;" aria-valuenow="39" aria-valuemin="0" aria-valuemax="100"></div>
                      <div class="progress-bar bg-danger" role="progressbar" style="width: 35%;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                      <div class="progress-bar bg-warning" role="progressbar" style="width: 26%;" aria-valuenow="26" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="row">
                      <div class="col-auto"><i class="fas fa-circle text-success me-1"></i> Sent</div>
                      <div class="col-auto"><i class="fas fa-circle text-warning me-1"></i> Draft</div>
                      <div class="col-auto"><i class="fas fa-circle text-danger me-1"></i> Expired</div>
                    </div>
                  </div>
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead class="thead-light">
                        <tr>
                          <th>Customer</th>
                          <th>Expiry Date</th>
                          <th>Amount</th>
                          <th>Status</th>
                          <th class="text-right">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            <h2 class="table-avatar">
                              <a href="profile.html"><img class="avatar avatar-sm me-2 avatar-img rounded-circle" src="assets/img/profiles/avatar-05.jpg" alt="User Image" /> Greg Lynch</a>
                            </h2>
                          </td>
                          <td>5 Nov 2020</td>
                          <td>$175</td>
                          <td><span class="badge bg-info-light">Sent</span></td>
                          <td class="text-right">
                            <div class="dropdown dropdown-action">
                              <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-h"></i></a>
                              <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="edit-invoice.html"><i class="far fa-edit me-2"></i>Edit</a>
                                <a class="dropdown-item" href="javascript:void(0);"><i class="far fa-trash-alt me-2"></i>Delete</a>
                                <a class="dropdown-item" href="view-estimate.html"><i class="far fa-eye me-2"></i>View</a>
                                <a class="dropdown-item" href="javascript:void(0);"><i class="far fa-file-alt me-2"></i>Convert to Invoice</a>
                                <a class="dropdown-item" href="javascript:void(0);"><i class="far fa-check-circle me-2"></i>Mark as sent</a>
                                <a class="dropdown-item" href="javascript:void(0);"><i class="far fa-paper-plane me-2"></i>Send Estimate</a>
                                <a class="dropdown-item" href="javascript:void(0);"><i class="far fa-check-circle me-2"></i>Mark as Accepted</a>
                                <a class="dropdown-item" href="javascript:void(0);"><i class="far fa-times-circle me-2"></i>Mark as Rejected</a>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <h2 class="table-avatar">
                              <a href="profile.html"><img class="avatar avatar-sm me-2 avatar-img rounded-circle" src="assets/img/profiles/avatar-06.jpg" alt="User Image" /> Karlene Chaidez</a>
                            </h2>
                          </td>
                          <td>28 Oct 2020</td>
                          <td>$1500</td>
                          <td><span class="badge bg-warning-light">Expired</span></td>
                          <td class="text-right">
                            <div class="dropdown dropdown-action">
                              <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-h"></i></a>
                              <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="edit-invoice.html"><i class="far fa-edit me-2"></i>Edit</a>
                                <a class="dropdown-item" href="javascript:void(0);"><i class="far fa-trash-alt me-2"></i>Delete</a>
                                <a class="dropdown-item" href="view-estimate.html"><i class="far fa-eye me-2"></i>View</a>
                                <a class="dropdown-item" href="javascript:void(0);"><i class="far fa-file-alt me-2"></i>Convert to Invoice</a>
                                <a class="dropdown-item" href="javascript:void(0);"><i class="far fa-check-circle me-2"></i>Mark as sent</a>
                                <a class="dropdown-item" href="javascript:void(0);"><i class="far fa-paper-plane me-2"></i>Send Estimate</a>
                                <a class="dropdown-item" href="javascript:void(0);"><i class="far fa-check-circle me-2"></i>Mark as Accepted</a>
                                <a class="dropdown-item" href="javascript:void(0);"><i class="far fa-times-circle me-2"></i>Mark as Rejected</a>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <h2 class="table-avatar">
                              <a href="profile.html"><img class="avatar avatar-sm me-2 avatar-img rounded-circle" src="assets/img/profiles/avatar-07.jpg" alt="User Image" /> John Blair</a>
                            </h2>
                          </td>
                          <td>17 Oct 2020</td>
                          <td>$2350</td>
                          <td><span class="badge bg-success-light">Accepted</span></td>
                          <td class="text-right">
                            <div class="dropdown dropdown-action">
                              <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-h"></i></a>
                              <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="edit-invoice.html"><i class="far fa-edit me-2"></i>Edit</a>
                                <a class="dropdown-item" href="javascript:void(0);"><i class="far fa-trash-alt me-2"></i>Delete</a>
                                <a class="dropdown-item" href="view-estimate.html"><i class="far fa-eye me-2"></i>View</a>
                                <a class="dropdown-item" href="javascript:void(0);"><i class="far fa-file-alt me-2"></i>Convert to Invoice</a>
                                <a class="dropdown-item" href="javascript:void(0);"><i class="far fa-check-circle me-2"></i>Mark as sent</a>
                                <a class="dropdown-item" href="javascript:void(0);"><i class="far fa-paper-plane me-2"></i>Send Estimate</a>
                                <a class="dropdown-item" href="javascript:void(0);"><i class="far fa-check-circle me-2"></i>Mark as Accepted</a>
                                <a class="dropdown-item" href="javascript:void(0);"><i class="far fa-times-circle me-2"></i>Mark as Rejected</a>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <h2 class="table-avatar">
                              <a href="profile.html"><img class="avatar avatar-sm me-2 avatar-img rounded-circle" src="assets/img/profiles/avatar-08.jpg" alt="User Image" /> Russell Copeland</a>
                            </h2>
                          </td>
                          <td>8 Oct 2020</td>
                          <td>$1890</td>
                          <td><span class="badge bg-success-light">Accepted</span></td>
                          <td class="text-right">
                            <div class="dropdown dropdown-action">
                              <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-h"></i></a>
                              <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="edit-invoice.html"><i class="far fa-edit me-2"></i>Edit</a>
                                <a class="dropdown-item" href="javascript:void(0);"><i class="far fa-trash-alt me-2"></i>Delete</a>
                                <a class="dropdown-item" href="view-estimate.html"><i class="far fa-eye me-2"></i>View</a>
                                <a class="dropdown-item" href="javascript:void(0);"><i class="far fa-file-alt me-2"></i>Convert to Invoice</a>
                                <a class="dropdown-item" href="javascript:void(0);"><i class="far fa-check-circle me-2"></i>Mark as sent</a>
                                <a class="dropdown-item" href="javascript:void(0);"><i class="far fa-paper-plane me-2"></i>Send Estimate</a>
                                <a class="dropdown-item" href="javascript:void(0);"><i class="far fa-check-circle me-2"></i>Mark as Accepted</a>
                                <a class="dropdown-item" href="javascript:void(0);"><i class="far fa-times-circle me-2"></i>Mark as Rejected</a>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <h2 class="table-avatar">
                              <a href="profile.html"><img class="avatar avatar-sm me-2 avatar-img rounded-circle" src="assets/img/profiles/avatar-09.jpg" alt="User Image" /> Leatha Bailey</a>
                            </h2>
                          </td>
                          <td>30 Sep 2020</td>
                          <td>$785</td>
                          <td><span class="badge bg-success-light">Accepted</span></td>
                          <td class="text-right">
                            <div class="dropdown dropdown-action">
                              <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-h"></i></a>
                              <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="edit-invoice.html"><i class="far fa-edit me-2"></i>Edit</a>
                                <a class="dropdown-item" href="javascript:void(0);"><i class="far fa-trash-alt me-2"></i>Delete</a>
                                <a class="dropdown-item" href="view-estimate.html"><i class="far fa-eye me-2"></i>View</a>
                                <a class="dropdown-item" href="javascript:void(0);"><i class="far fa-file-alt me-2"></i>Convert to Invoice</a>
                                <a class="dropdown-item" href="javascript:void(0);"><i class="far fa-check-circle me-2"></i>Mark as sent</a>
                                <a class="dropdown-item" href="javascript:void(0);"><i class="far fa-paper-plane me-2"></i>Send Estimate</a>
                                <a class="dropdown-item" href="javascript:void(0);"><i class="far fa-check-circle me-2"></i>Mark as Accepted</a>
                                <a class="dropdown-item" href="javascript:void(0);"><i class="far fa-times-circle me-2"></i>Mark as Rejected</a>
                              </div>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
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

    <script src="assets/plugins/apexchart/apexcharts.min.js"></script>
    <script src="assets/plugins/apexchart/chart-data.js"></script>

    <script src="assets/js/script.js"></script>
  </body>

  <!--index-->
</html>
