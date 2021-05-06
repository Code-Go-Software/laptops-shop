<!DOCTYPE html>
<html lang="en">

<head>
  <title>@yield('title')</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/font-css/LineIcons.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@300;400;700;800&display=swap" rel="stylesheet">
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
                <button type="button" class="btn bg-danger text-light btn-sm" data-dismiss="modal">إغلاق</button>
                <button type="button" id="confirm-delete-btn" class="btn bg-success text-light btn-sm">نعم</button>
            </div>
        </div>
    </div>
  </div>

  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand text-warning m-0" href="/admin"><i class="lni lni-menu ml-2 text-light" id="admin-sidebar-toggle"></i> لوحة التحكم</a>
  
    <ul class="navbar-nav mr-auto align-items-center">
      <li class="nav-item ml-3 d-none d-md-block">
        <a href="#" class="text-info">
          <small>(2)</small>
          <i class="lni lni-bullhorn"></i>
        </a>
      </li>
      <li class="nav-item">
        <a href="/profile" class="text-warning small">
          <b class="ml-2">مدير الموقع</b>
          <img src="{{ asset('images/' . auth()->user()->image) }}" class="rounded-circle" width="30px" height="30px">
        </a>
      </li>
    </ul>
  </nav>

  <section class="container-fluid">
    <div class="row">
      <!--Side Bar Start-->
      <div class="col-md-2 col-12 d-flex flex-column small p-0 m-0">
        <div class="bg-primary show" id="admin-sidebar">
          <div>
            <a href="/admin" class="text-light p-3 link d-block">
              <i class="lni lni-dashboard ml-2"></i>
              لوحة التحكم
            </a>
          </div>
          <div>
            <a href="/admin/users" class="text-light p-3 link d-block">
              <i class="lni lni-user ml-2"></i>
              إدارة المستخدمين
            </a>
          </div>
          <div>
            <a href="/admin/laptops" class="text-light p-3 link d-block">
              <i class="lni lni-display-alt ml-2"></i>
              إدارة الحواسيب
            </a>
          </div>
          <div>
            <a href="/admin/categories" class="text-light p-3 link d-block">
              <i class="lni lni-tag ml-2"></i>
              إدارة الفئات
            </a>
          </div>
          <div>
            <a href="/admin/orders" class="text-light p-3 link d-block">
              <i class="lni lni-clipboard ml-2"></i>
              إدارة الطلبات
            </a>
          </div>
          <div>
            <a href="/admin/content" class="text-light p-3 link d-block">
              <i class="lni lni-files ml-2"></i>
              إدارة المحتوى
            </a>
          </div>
          <div>
            <a href="/admin/price" class="text-light p-3 link d-block">
              <i class="lni lni-calculator ml-2"></i>
              إدارة الأسعار
            </a>
          </div>
          <!--
          <div class="p-3">
            <a href="/admin/help" class="text-light">
              <i class="lni lni-question-circle ml-2"></i>
              مركز المساعدة 
            </a>
          </div>
          -->
          <div>
            <a href="/" class="text-light p-3 link d-block">
              <i class="lni lni-home ml-2"></i>
               عودة للمتجر 
            </a>
          </div>
          <form action="/logout" method="POST" class="px-3 py-2 flex-grow-1">
            @csrf
            <button type="submit" class="btn text-danger pr-0">
              <i class="lni lni-exit ml-2"></i>
              تسجيل خروج 
            </button>
          </form>
        </div>
      </div>
      <!--Side Bar End-->
      <div class="col-md-10 col-12 p-0">
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

        <div class="py-3 px-4">
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