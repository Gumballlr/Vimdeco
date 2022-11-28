<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Vimdeco</title>
  <base href="{{asset('')}}" />
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

  <!-- Styles -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
  </script>
  <!------ CSS -->
  <link rel="stylesheet" href="assets/csss/style.css">

</head>

<body class="background_image">
  <!-- <img class="background_home" src="image/home/home1.png" alt=""> -->


  <div class="container">
    <div class="row">
      <div class="col-sm-4 col-md-4 col-lg-4 align-self-center">
        <!-- <div class="form_image"> -->
        <img class="logo_image" src="image/home/Logo_vimadeco.png" alt="">
        <!-- </div> -->
      </div>

      <div class="col-sm-9 col-md-6 col-lg-6">
        <div class="card border-0 shadow-lg p-3 rounded-3 my-5">
          <div class="card-body p-5 p-sm-4">
            <h5 class="card-title text-center mb-4 fw-light fs-7">Đăng nhập</h5>
            <form action="{{url('/')}}" method="POST">
              @csrf
              <div class="form-floating mb-3">
                <label for="floatingInput">Tên đăng nhập</label>
                <input type="text" class="form-control" name="name" id="floatingInput" placeholder="Nhập tên đăng nhập">

              </div>
              <div class="form-floating mb-3">
                <label for="floatingPassword">Mật khẩu</label>
                <input type="password" name="password" class="form-control" id="floatingPassword"
                  placeholder="Nhập mật khẩu">
                <!--  check pass word-->
                <!-- <div class="invalid-feedback">
                 Please provide a valid zip.
                 </div> -->

              </div>


              <div class="d-grid">
                <button class="btn btn-primary active btn-lg btn-login fw-boldl btn-block" type="submit">Đăng
                  nhập</button>
                &nbsp;
                <div class="form-check mb-1">
                  <center>
                    <input class="form-check-input" type="checkbox" value="" id="rememberPasswordCheck">
                    <label class="form-check-label" for="rememberPasswordCheck">
                      Nhớ mật khẩu
                    </label>
                  </center>

                </div>
              </div>



            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>

</html>