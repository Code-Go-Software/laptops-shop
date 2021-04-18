<!DOCTYPE html>
<html lang="en">

<head>
  <title>@yield('title')</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/font-css/LineIcons.css') }}">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@300;400;700;800&display=swap" rel="stylesheet">
  <style>
    body{
      font-family: 'Almarai', sans-serif;
      text-align: right;
    }
  </style>
</head>

<body dir="rtl">

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">اسم الشركة | لوحة التحكم</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <b class="mr-2 text-light">مدير الموقع</b>
          <img src="../assets/images/default-user.png" class="img-fluid rounded-circle" width="50px" height="50px">
        </li>
      </ul>
    </div>
  </nav>

  <section class="container-fluid">
    <div class="row">
      <!--Side Bar Start-->
      <div class="col-2 d-flex flex-column bg-dark">
        <div class="h-100">
          <div class="px-3 py-2">
            <a href="index.html" class="text-light h6">
              <i class="lni lni-dashboard mr-3"></i>
              لوحة التحكم
            </a>
          </div>
          <div class="px-3 py-2">
            <a href="users/index.html" class="text-light h6">
              <i class="lni lni-user mr-3"></i>
              إدارة المستخدمين
            </a>
          </div>
          <div class="px-3 py-2">
            <a href="products/index.html" class="text-light h6">
              <i class="lni lni-package mr-3"></i>
              إدارة المنتجات
            </a>
          </div>
          <div class="px-3 py-2">
            <a href="categories/index.html" class="text-light h6">
              <i class="lni lni-tag mr-3"></i>
              إدارة الفئات
            </a>
          </div>
          <div class="px-3 py-2">
            <a href="orders/index.html" class="text-light h6">
              <i class="lni lni-clipboard mr-3"></i>
              إدارة الطلبات
            </a>
          </div>
          <div class="px-3 py-2">
            <a href="content/index.html" class="text-light h6">
              <i class="lni lni-files mr-3"></i>
              إدارة المحتوى
            </a>
          </div>
          <div class="px-3 py-2">
            <a href="currency.html" class="text-light h6">
              <i class="lni lni-dollar mr-3"></i>
              سعر الصرف
            </a>
          </div>
          <div class="px-3 py-2">
            <a href="help-center.html" class="text-light h6">
              <i class="lni lni-question-circle mr-3"></i>
              مركز المساعدة 
            </a>
          </div>
          <div class="px-3 py-2 flex-grow-1">
            <a href="logout.html" class="text-danger h6">
              <i class="lni lni-exit mr-3"></i>
              تسجيل خروج 
            </a>
          </div>
        </div>
      </div>
      <!--Side Bar End-->

      <div class="col-10 h-100 py-3 px-4">
        <div class="container-fluid">
          <div class="row">

            <!--Content Goes Here-->
            @yield('content')

          </div>
        </div>
      </div>

    </div>
  </section>

  <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
</body>

</html>