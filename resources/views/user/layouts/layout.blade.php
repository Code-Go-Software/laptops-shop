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
  <!--Navbar Start-->
  <nav class="d-flex justify-content-center align-items-center py-2 px-2">
    <div>
      <a href="/register" class="text-dark">
        <i class="lni lni-user" style="font-size:18px;"></i>
        <small class="d-none d-md-inline ml-2">إنشاء حساب</small>
      </a>
    </div>
    <div class="ml-3">
      <a href="/favourites" class="text-dark">
        <i class="lni lni-heart text-danger" style="font-size:18px;"></i>
        <small class="d-none d-md-inline ml-2">القائمة المفضلة</small>
      </a>
    </div>
    <div class="flex-grow-1 text-center">
      <h3>اسم الشركة</h3>
    </div>
    <div class="mr-3">
      <a href="/cart" class="text-dark">
        <i class="lni lni-cart" style="font-size:18px;"></i>
        <small class="d-none d-md-inline ml-2">سلة المشتريات</small>
      </a>
    </div>
    <div>
      <a href="/laptops" class="text-dark">
        <i class="lni lni-display-alt" style="font-size:18px;"></i>
        <small class="d-none d-md-inline ml-2">المنتجات</small>
      </a>
    </div>
  </nav>
  <section id="search-bar">
    <form action="laptops.html" method="GET"  class="d-flex align-items-stretch mb-1">
      <div>
        <button type="submit" class="btn btn-dark rounded-pill"><i class="lni lni-search d-none d-md-inline"></i> بحث</button>
      </div>
      <div class="flex-grow-1 px-1">
        <input type="text" placeholder="ما الذي تبحث عنه" class="form-control rounded-pill">
      </div>
      <div class="d-none d-md-block">
        <a href="laptops.html" class="btn btn-primary rounded-pill"><i class="lni lni-control-panel d-none d-md-inline"></i> بحث
          متقدم</a>
      </div>
    </form>
  </section>
  <!--Navbar End-->

  @yield('content')

  <!--Footer Start-->
  <footer class="py-3 px-2 mt-3">
    <div class="container-fluid">
      <div class="row">
        <div class="col-5 col-md-4">
          <h5>أقسام الموقع</h5>
          <ul class="list-unstyled py-2 pl-2">
            <li class="py-1 px-1"><a href="#" class="text-dark">الصفحة الأولى</a></li>
            <li class="py-1 px-1"><a href="#" class="text-dark">الصفحة الثانية</a></li>
            <li class="py-1 px-1"><a href="#" class="text-dark">الصفحة الثالثة</a></li>
            <li class="py-1 px-1"><a href="#" class="text-dark">الصفحة الرابعة</a></li>
          </ul>
        </div>
        <div class="col-7 col-md-5">
          <h5>معلومات التواصل</h5>
          <ul class="list-unstyled py-2 pl-2">
            <li class="py-1 px-1"><i class="lni lni-phone"></i> 0946918650</li>
            <li class="py-1 px-1"><i class="lni lni-phone-set"></i> 011-211-75</li>
            <li class="py-1 px-1"><i class="lni lni-envelope"></i> test@web.com</li>
            <li class="py-1 px-1"><i class="lni lni-map"></i> دمشق - الحمرا</li>
            <li class="py-1 px-1"><i class="lni lni-car"></i> التوصيل مجاني</li>
          </ul>
          <div class="d-flex mt-2">
            <div class="px-2 py-1">
              <i class="lni lni-whatsapp" style="font-size: 22px;"></i>
            </div>
            <div class="px-2 py-1">
              <i class="lni lni-telegram" style="font-size: 22px;"></i>
            </div>
            <div class="px-2 py-1">
              <i class="lni lni-youtube" style="font-size: 22px;"></i>
            </div>
            <div class="px-2 py-1">
              <i class="lni lni-facebook" style="font-size: 22px;"></i>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-3">
          <div class="text-center mt-2">
            <img src="../assets/images/logo.png" class="img-fluid">
          </div>
        </div>
      </div>
    </div>
  </footer>
  <div>
    <div class="bg-dark text-secondary text-center py-1 px-2">
      جميع الحقوق محفوظة @
    </div>
  </div>
  <!--Footer End-->

  <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
</body>

</html>