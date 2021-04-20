<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="endless admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, endless admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="../assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="../assets/images/favicon.png" type="image/x-icon">
    <title>Endless - Premium Admin Template</title>
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="../assets/css/fontawesome.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="../assets/css/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="../assets/css/themify.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="../assets/css/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="../assets/css/feather-icon.css">
    <!-- Plugins css start-->
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <link id="color" rel="stylesheet" href="../assets/css/light-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/responsive.css">
  </head>
  <body>
    <!-- Loader starts-->
    <div class="loader-wrapper">
      <div class="loader bg-white">
        <div class="whirly-loader"> </div>
      </div>
    </div>
    <!-- Loader ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper box-layout">
      <!-- Page Header Start-->
      <div class="page-main-header">
        <div class="main-header-right row">
          <div class="main-header-left d-lg-none">
            <div class="logo-wrapper"><a href="index.html"><img src="../assets/images/endless-logo.png" alt=""></a></div>
          </div>
          <div class="mobile-sidebar d-block">
            <div class="media-body text-right switch-sm">
              <label class="switch"><a href="#"><i id="sidebar-toggle" data-feather="align-left"></i></a></label>
            </div>
          </div>
          <div class="nav-right col p-0">
            <ul class="nav-menus">
              <li><a href="#"></a></li>
              <form action="/logout" method="get">
                <div class="form-group form-row mt-3 mb-0">
                    <button type="submit" class="btn btn-dark">Log_Out</button>
                </div>
              </form>
            </ul>
            <div class="d-lg-none mobile-toggle pull-right"><i data-feather="more-horizontal"></i></div>
          </div>
          <script id="result-template" type="text/x-handlebars-template">
            <div class="ProfileCard u-cf">
            <div class="ProfileCard-avatar"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay m-0"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg></div>
            <div class="ProfileCard-details">

            </div>
            </div>
          </script>
          <script id="empty-template" type="text/x-handlebars-template">
            <div class="EmptyMessage">Your search turned up 0 results. This most likely means the backend is down, yikes!</div>

          </script>
        </div>
      </div>
      <!-- Page Header Ends                              -->
      <!-- Page Body Start-->
      <div class="page-body-wrapper">
        <!-- Page Sidebar Start-->
        <div class="page-sidebar">
          <div class="main-header-left d-none d-lg-block">
            <div class="logo-wrapper"><a href="index.html"><img src="../assets/images/endless-logo.png" alt=""></a></div>
          </div>
          <div class="sidebar custom-scrollbar">
            <div class="sidebar-user text-center">
              <div><img class="img-60 rounded-circle" src="../assets/images/user/1.jpg" alt="#">
                <div class="profile-edit"><a href="edit-profile.html" target="_blank"><i data-feather="edit"></i></a></div>
              </div>
              <h6 class="mt-3 f-14">ELANA</h6>
              <p>general manager.</p>
            </div>
            <ul class="sidebar-menu">
              <li><a class="sidebar-header" href="/add"><i data-feather="airplay"></i><span>Add Member</span><i class="fa fa-angle-right pull-right"></i></a></li>
              <li><a class="sidebar-header" href="/admin_list"><i data-feather="airplay"></i><span>Admin</span><i class="fa fa-angle-right pull-right"></i></a></li>
              <li><a class="sidebar-header" href="/reseller"><i data-feather="airplay"></i><span>Reseller</span><i class="fa fa-angle-right pull-right"></i></a></li>
              <li><a class="sidebar-header" href="/commision_rate"><i data-feather="airplay"></i><span>Commision Rate</span><i class="fa fa-angle-right pull-right"></i></a></li>
              <li><a class="sidebar-header" href="/restaurant_list"><i data-feather="airplay"></i><span>Restaurant List</span><i class="fa fa-angle-right pull-right"></i></a></li>
              <li><a class="sidebar-header" href="/reseller_commision"><i data-feather="airplay"></i><span>Reseller Commision</span><i class="fa fa-angle-right pull-right"></i></a></li>



            </ul>
          </div>
        </div>

        <div class="page-body">
          <div class="container-fluid">
            <div class="page-header">
              <div class="row">


              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-12">
                <div class="card">
                  <div class="card-header">
                    <h5>Member List</h5>
                  </div>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Status</th>
                            <th scope="col">Mobile</th>
                            <th scope="col">Email</th>
                            <th scope="col">Address</th>
                            <th scope="col">Postal Code</th>
                            <th scope="col">City</th>
                            <th scope="col">Avatar</th>
                            <th scope="col">Update</th>
                            <th scope="col">Delete</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($data as $add_ad)
                        <tr>
                            <td>{{$add_ad->id}}</td>
                            <td>{{$add_ad->name}}</td>
                            <td>{{$add_ad->Status}}</td>
                            <td>{{$add_ad->mobile}}</td>
                            <td>{{$add_ad->email}}</td>
                            <td>{{$add_ad->address}}</td>
                            <td>{{$add_ad->postal_code}}</td>
                            <td>{{$add_ad->city}}</td>
                            <td>{{$add_ad->avatar}}</td>
                            <td>
                            <a href="/update/{{$add_ad->id}}" >
                            <button type="button" class="btn btn-outline-warning">Update</button>
                            </a>
                            </td>
                            <td>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                Delete
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Confirm</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        ...
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <a href="/delete/{{$add_ad->id}}" >
                                        <button type="button" class="btn btn-primary">Delete</button>
                                        </a>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>







            </div>
          </div>
          <!-- Container-fluid Ends-->
        </div>
        <!-- footer start-->

      </div>
    </div>
    <!-- latest jquery-->
    <script src="../assets/js/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap js-->
    <script src="../assets/js/bootstrap/popper.min.js"></script>
    <script src="../assets/js/bootstrap/bootstrap.js"></script>
    <!-- feather icon js-->
    <script src="../assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="../assets/js/icons/feather-icon/feather-icon.js"></script>
    <!-- Sidebar jquery-->
    <script src="../assets/js/sidebar-menu.js"></script>
    <script src="../assets/js/config.js"></script>
    <!-- Plugins JS start-->
    <script src="../assets/js/typeahead/handlebars.js"></script>
    <script src="../assets/js/typeahead/typeahead.bundle.js"></script>
    <script src="../assets/js/typeahead/typeahead.custom.js"></script>
    <script src="../assets/js/chat-menu.js"></script>
    <script src="../assets/js/tooltip-init.js"></script>
    <script src="../assets/js/typeahead-search/handlebars.js"></script>
    <script src="../assets/js/typeahead-search/typeahead-custom.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="../assets/js/script.js"></script>
    <script src="../assets/js/theme-customizer/customizer.js"></script>
    <!-- Plugin used-->
  </body>
</html>

