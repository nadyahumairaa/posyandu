<!DOCTYPE html>
<html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Posyandu</title>
        <!-- plugins:css -->
        <link rel="stylesheet" href="/assets/assets/vendors/mdi/css/materialdesignicons.min.css">
        <link rel="stylesheet" href="/assets/assets/vendors/css/vendor.bundle.base.css">
        <!-- endinject -->
        <!-- Plugin css for this page -->
        <!-- End plugin css for this page -->
        <!-- inject:css -->
        <!-- endinject -->
        <!-- Layout styles -->
        <link rel="stylesheet" href="/assets/assets/css/style.css">
        <!-- End layout styles -->
        <link rel="shortcut icon" href="/assets/assets/images/favicon.png" />
      </head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth">
        <div class="row w-100">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left p-5">
              <div class="brand-logo">
                <center><img src="{{url('assets/assets/images/dashboard/pos2.png')}}" alt="logo" /></center>
                
    <div class="container">
      <div class="section-title text-center">
        <br>
        <h3>Halaman Login</h3>
        <p class="separator">Silahkan</p>
      </div>
    </div>
    <div class="container"> 
      <div class="row justify-content-center">
          <div class="form">
            @if(\Session::has('alert'))
            <div class="alert alert-danger">
                <div>{{Session::get('alert')}}</div>
            </div>
            @endif
            @if(\Session::has('alert-success'))
            <div class="alert alert-success">
                <div>{{Session::get('alert-success')}}</div>
            </div>
            @endif
            <form method="POST" action="{{url('loginpost')}}">
              @csrf   
              <div class="form-group">
                <input type="text" name="email" class="form-control" id="name" placeholder="Username" required="">
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Your password" data-rule="email" data-msg="Please enter a valid password" required="">
                <div class="validation"></div>
              </div>
              <center><button class="btn btn-gradient-primary"name="btnlogin" value="LOGIN">Login</button></div></center>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  
</body>
</html>