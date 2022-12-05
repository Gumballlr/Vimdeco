<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Dashboard</title>
  <!-- loader-->
  <link href="assets/css/pace.min.css" rel="stylesheet" />
  <script src="assets/js/pace.min.js"></script>
  <!--favicon-->
  <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon" />
  <!-- simplebar CSS-->
  <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
  <!-- Bootstrap core CSS-->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
  <!--Data Tables -->
  <link href="assets/plugins/bootstrap-datatable/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
  <link href="assets/plugins/bootstrap-datatable/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
  <!-- animate CSS-->
  <link href="assets/css/animate.css" rel="stylesheet" type="text/css" />
  <!-- Icons CSS-->
  <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
  <!-- Metismenu CSS-->
  <link href="assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
  <!-- Custom Style-->
  <link href="assets/css/app-style.css" rel="stylesheet" />
</head>

<body class="bg-theme bg-theme">
  <!-- Start wrapper-->
  <div id="wrapper">
    <!--Start sidebar-wrapper-->
    @include('layout.sidebar')
    <!--End sidebar-wrapper-->

    <!--Start topbar header-->
    @include('layout.topbar')
    <!--End topbar header-->

    <div class="clearfix"></div>

    <div class="content-wrapper">
      <div class="container-fluid">
        <!-- Breadcrumb-->
        <div class="row pt-2 pb-2">
          <div class="col-sm-9">
            <h4 class="page-title"></h4>

          </div>
          <div class="col-sm-3">
            <div class="btn-group float-sm-right">

            </div>
          </div>
        </div>
        <!-- End Breadcrumb-->
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header">
                <div class="row pt-2 pb-2">
                  <div class="col-sm-4">
                    <a href="{{url('/user')}}">
                      <h4 class="page-title" style="color: #A6A6A6">
                        Quản lý tài khoản người dùng
                      </h4>
                    </a>
                  </div>
                  <div class="col-sm-4">
                    <a href="">
                      <h4 class="page-title">
                        Quản lý quyền sử dụng
                      </h4>

                    </a>

                  </div>
                  <div class="col-sm-3">
                    <div class="btn-group float-sm-right">
                      <button style="background-color: #009D2C; width:120px" type="button"
                        class="btn btn-light waves-effect waves-light" data-toggle="modal"
                        data-target=".bd-example-modal-lg">
                        ADD
                      </button>
                    </div>

                    <!---- Modal --->

                    <div class=" modal fade bd-example-modal-lg" id="myModal" tabindex="-1" role="dialog"
                      aria-labelledby="myLargeModalLabel" aria-hidden="true" style="padding: 20px 20px">
                      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                        <div class="modal-content">

                          <!----     Check errors  -->

                          <form action="" method="POST" class="form" autocomplete="off">
                            @csrf
                            <div class="modal-header">

                              <h5 style="font-size: 18px" class="modal-title" id="exampleModalLongTitle">THÊM QUYỀN SỬ
                                DỤNG
                              </h5>

                              <button type="button" class="close" style="color:black" data-dismiss="modal"
                                aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>

                            <div class="modal-body">

                              <div class="col-md-4 mb-4">
                                <div class="form-group">
                                  <label for="inputPasswordOld">
                                    <h6 style="color:black">Chức vụ</h6>
                                  </label>
                                  <input type="password" class="form-control" id="inputPasswordOld"
                                    name="current_password" required="">
                                </div>
                              </div>

                              <div class="container">
                                <div class="row align-items-start">

                                  <table style="color:black" class="table table-bordered">
                                    <thead>
                                      <tr>
                                        <th scope="col">Chức năng sử dụng</th>
                                        <th scope="col">Action</th>


                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>

                                        <td>Chức năng người dùng cơ bản: Xem thông tin, Chỉnh sửa bảng CLARANCE,
                                          ..</td>
                                        <td>
                                          <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1"
                                              checked>
                                            <label class="custom-control-label" for="customCheck1">1</label>
                                          </div>
                                        </td>

                                      </tr>
                                      <tr>

                                        <td>Chức năng 2</td>

                                        <td>
                                          <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck2">
                                            <label class="custom-control-label" for="customCheck2">2</label>
                                          </div>
                                        </td>
                                      </tr>
                                      <tr>

                                        <td>Chức năng 3</td>
                                        <td>
                                          <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck3">
                                            <label class="custom-control-label" for="customCheck3">3</label>
                                          </div>
                                        </td>

                                      </tr>
                                      <tr>

                                        <td>Chức năng 4</td>
                                        <td>
                                          <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck4">
                                            <label class="custom-control-label" for="customCheck4">4</label>
                                          </div>
                                        </td>

                                      </tr>
                                      <tr>

                                        <td>Chức năng 5</td>
                                        <td>
                                          <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck6">
                                            <label class="custom-control-label" for="customCheck6">3</label>
                                          </div>
                                        </td>

                                      </tr>
                                    </tbody>
                                  </table>

                                </div>
                              </div>



                              <!---button -->
                              <div class="container">
                                <div class="row">
                                  <div class="col align-self-end">
                                    <button type="submit" class="btn btn-primary btn-block text-center">Save</button>
                                  </div>

                                  <div class="col align-self-end">
                                    <button type="button" class="btn btn-danger btn-block text-center"
                                      data-dismiss="modal" aria-label="Close">Close</button>
                                  </div>


                                </div>
                              </div>

                              <!-- <div class="modal-footer">
                                <button type="submit" class="btn btn-secondary" data-dismiss="modal">Save</button>
                                <button type="reset" class="btn btn-primary" data-dismiss="modal">Close </button>
                              </div> -->
                          </form>
                        </div>
                      </div>
                    </div>

                    <!--- end modal -->
                  </div>
                </div>


              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table id="default-datatable" class="table table-striped">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Tên</th>
                        <th>Tài khoản</th>
                        <th>Vị trí</th>
                        <th>Chức vụ</th>

                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($users as $key => $user)
                      <tr>
                        <td>{{++$key}}</td>
                        <td>{{$user['name']}}</td>
                        <td>{{$user['name_user']}}</td>
                        <td>{{$user['position']}}</td>
                        <td>{{$user['position']}}</td>

                      </tr>
                      @endforeach

                    </tbody>

                    <!-- <tfoot>
                      <tr>
                        <th>#</th>
                        <th>Tên</th>
                        <th>Tài khoản</th>
                        <th>Email</th>
                        <th>Vị trí</th>

                      </tr>
                    </tfoot> -->
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End Row-->

        <!-- End Row-->
        <!--start overlay-->
        <div class="overlay"></div>
        <!--end overlay-->
      </div>
      <!-- End container-fluid-->
    </div>
    <!--End content-wrapper-->
    <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i>
    </a>
    <!--End Back To Top Button-->

    <!--Start footer-->
    <footer class="footer">
      <div class="container">
        <div class="text-center">Vimadeco</div>
      </div>
    </footer>
    <!--End footer-->

    <!--start color switcher-->
    <div class="right-sidebar">
      <div class="switcher-icon">
        <i class="zmdi zmdi-settings zmdi-hc-spin"></i>
      </div>
      <div class="right-sidebar-content">
        <p class="mb-0">Gaussion Texture</p>
        <hr />

        <ul class="switcher">
          <li id="theme1"></li>
          <li id="theme2"></li>
          <li id="theme3"></li>
          <li id="theme4"></li>
          <li id="theme5"></li>
          <li id="theme6"></li>
        </ul>

        <p class="mb-0">Gradient Background</p>
        <hr />

        <ul class="switcher">
          <li id="theme7"></li>
          <li id="theme8"></li>
          <li id="theme9"></li>
          <li id="theme10"></li>
          <li id="theme11"></li>
          <li id="theme12"></li>
          <li id="theme13"></li>
          <li id="theme14"></li>
          <li id="theme15"></li>
        </ul>
      </div>
    </div>
    <!--end color switcher-->
  </div>
  <!--End wrapper-->

  <!-- Bootstrap core JavaScript-->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>

  <!-- simplebar js -->
  <script src="assets/plugins/simplebar/js/simplebar.js"></script>
  <!-- Metismenu js -->
  <script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>

  <!-- Custom scripts -->
  <script src="assets/js/app-script.js"></script>

  <!--Data Tables js-->
  <script src="assets/plugins/bootstrap-datatable/js/jquery.dataTables.min.js"></script>
  <script src="assets/plugins/bootstrap-datatable/js/dataTables.bootstrap4.min.js"></script>
  <script src="assets/plugins/bootstrap-datatable/js/dataTables.buttons.min.js"></script>
  <script src="assets/plugins/bootstrap-datatable/js/buttons.bootstrap4.min.js"></script>
  <script src="assets/plugins/bootstrap-datatable/js/jszip.min.js"></script>
  <script src="assets/plugins/bootstrap-datatable/js/pdfmake.min.js"></script>
  <script src="assets/plugins/bootstrap-datatable/js/vfs_fonts.js"></script>
  <script src="assets/plugins/bootstrap-datatable/js/buttons.html5.min.js"></script>
  <script src="assets/plugins/bootstrap-datatable/js/buttons.print.min.js"></script>
  <script src="assets/plugins/bootstrap-datatable/js/buttons.colVis.min.js"></script>

  <script>
  $(document).ready(function() {
    //Default data table
    $("#default-datatable").DataTable();

    var table = $("#example").DataTable({
      lengthChange: false,
      buttons: ["copy", "excel", "pdf", "print", "colvis"],
    });

    table
      .buttons()
      .container()
      .appendTo("#example_wrapper .col-md-6:eq(0)");
  });
  </script>
</body>

<!-- Mirrored from codervent.com/dashtremev3/table-data-tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 Jul 2020 09:41:55 GMT -->

</html>