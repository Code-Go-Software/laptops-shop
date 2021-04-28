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
      /*font-family: 'tahoma';*/
      font-family: 'Almarai', sans-serif;
      text-align: right;
    }
  </style>
</head>

<body dir="rtl">

  <div class="modal fade" id="notification" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="notification-title">تأكيد العملية</h5>
            </div>
            <div class="modal-body" id="notification-body">
                هل أنت متأكد؟
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">إغلاق</button>
                <button type="button" id="confirm-delete-btn" class="btn btn-success btn-sm">نعم</button>
            </div>
        </div>
    </div>
  </div>

  <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #262626;">
    <a class="navbar-brand" href="/admin">اسم الشركة | لوحة التحكم</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <b class="ml-2 text-light">مدير الموقع</b>
          <img src="{{ asset('images/' . auth()->user()->image) }}" class="img-fluid rounded-circle" width="50px" height="50px">
        </li>
      </ul>
    </div>
  </nav>

  <section class="container-fluid">
    <div class="row">
      <!--Side Bar Start-->
      <div class="col-2 d-flex flex-column" style="background-color: #262626;">
        <div class="h-100">
          <div class="px-3 py-2">
            <a href="/admin" class="text-light h6">
              <i class="lni lni-dashboard ml-2"></i>
              لوحة التحكم
            </a>
          </div>
          <div class="px-3 py-2">
            <a href="/admin/users" class="text-light h6">
              <i class="lni lni-user ml-2"></i>
              إدارة المستخدمين
            </a>
          </div>
          <div class="px-3 py-2">
            <a href="/admin/laptops" class="text-light h6">
              <i class="lni lni-display-alt ml-2"></i>
              إدارة الحواسيب
            </a>
          </div>
          <div class="px-3 py-2">
            <a href="/admin/categories" class="text-light h6">
              <i class="lni lni-tag ml-2"></i>
              إدارة الفئات
            </a>
          </div>
          <div class="px-3 py-2">
            <a href="/admin/orders" class="text-light h6">
              <i class="lni lni-clipboard ml-2"></i>
              إدارة الطلبات
            </a>
          </div>
          <div class="px-3 py-2">
            <a href="/admin/content" class="text-light h6">
              <i class="lni lni-files ml-2"></i>
              إدارة المحتوى
            </a>
          </div>
          <div class="px-3 py-2">
            <a href="/admin/currency" class="text-light h6">
              <i class="lni lni-dollar ml-2"></i>
              سعر الصرف
            </a>
          </div>
          <div class="px-3 py-2">
            <a href="/admin/help" class="text-light h6">
              <i class="lni lni-question-circle ml-2"></i>
              مركز المساعدة 
            </a>
          </div>
          <div class="px-3 py-2">
            <a href="/" class="text-light h6">
              <i class="lni lni-home ml-2"></i>
               عودة للمتجر 
            </a>
          </div>
          <form action="/logout" method="POST" class="px-3 py-2 flex-grow-1">
            @csrf
            <button type="submit" class="btn text-danger h6 pr-0">
              <i class="lni lni-exit ml-2"></i>
              تسجيل خروج 
            </button>
          </form>
        </div>
      </div>
      <!--Side Bar End-->
      <div class="col-10 p-0">
        @if (Session::has('success'))
          <section class="alert bg-success mb-0 rounded-0 text-light">
            <i class="lni lni-checkmark-circle ml-1"></i>
            {{ Session::get('success') }}
          </section>
        @endif

        @if (Session::has('fail'))
          <section class="alert bg-danger mb-0 rounded-0 text-light">
            <i class="lni lni-close ml-1"></i>
            {{ Session::get('fail') }}
          </section>
        @endif

        <div class="h-100 py-3 px-4">
          <div class="container-fluid">
  
            <div class="row">
  
              <!--Content Goes Here-->
              @yield('content')
  
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('assets/js/functions.js') }}"></script>
</body>

</html>