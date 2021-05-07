<!DOCTYPE html>
<html lang="en">

<head>
  <title>@yield('title')</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="@yield('description')">
  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/font-css/LineIcons.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@300;400;700;800&display=swap" rel="stylesheet">
</head>

<body dir="rtl">

  <nav id="info-bar" class="d-flex align-items-center py-2 px-2 bg-secondary text-light small">
    <div class="ml-3 flex-grow-1 d-flex align-items-center">
      <i class="lni lni-car ml-2"></i>
      <span>خدمة التوصيل مجانية</span>
    </div>
    <div class="ml-3 d-flex align-items-center">
      <i class="lni lni-envelope ml-2"></i>
      <span>{{ $content->where('key', 'help_email')->first()->value }}</span>
    </div>
    <div class="d-flex align-items-center">
      <i class="lni lni-phone ml-2"></i>
      <span>{{ $content->where('key', 'phone')->first()->value }}</span>
    </div>
  </nav>

  <!--Navbar Start-->
  <nav id="navbar" class="d-flex align-items-center py-2 px-2 bg-primary">
    <div class="ml-3">
      <a href="/favourites" class="text-light d-flex align-items-center">
        <i class="lni lni-heart-filled text-danger" style="font-size:18px;"></i>
        <small class="d-none d-md-inline mr-2">القائمة المفضلة</small>
        <small>({{ (Auth::check()) ? auth()->user()->favourites->count() : '0' }})</small>
      </a>
    </div>
    <div class="flex-grow-1 text-light d-flex align-items-center" style="order:-1;">
      <h3 class=""><a href="/" class="text-light">اسم الشركة</a></h3>
    </div>
    <div class="ml-3">
      <a href="/cart" class="text-light d-flex align-items-center">
        <i class="lni lni-cart" style="font-size:18px;"></i>
        <small class="d-none d-md-inline mr-2">سلة المشتريات</small>
        <small>({{ (Auth::check()) ? auth()->user()->carts->count() : '0' }})</small>
      </a>
    </div>
    <div class="ml-3">
      <a href="/laptops" class="text-light d-flex align-items-center">
        <i class="lni lni-display-alt" style="font-size:18px;"></i>
        <small class="d-none d-md-inline mr-2">الحواسيب</small>
      </a>
    </div>
    <div class="">
      @auth
        <a href="/profile" class="text-light d-flex align-items-center">
          <img src="{{ asset('images/' . auth()->user()->image) }}" class="img-fluid rounded-circle" width="30px" height="30px">
          <small class="d-none d-md-inline mr-1">{{ auth()->user()->fullname }}</small>
        </a>
      @endauth
      
      @guest
        <a href="/login" class="text-light d-flex align-items-center">
          <i class="lni lni-user" style="font-size:18px;"></i>
          <small class="d-none d-md-inline mr-2">تسجيل دخول</small>
        </a>
      @endguest
    </div>
  </nav>
  <section id="search-bar" class="px-2 py-2 bg-primary">
    <form action="/laptops" method="GET"  class="d-flex align-items-center">
      <div class="pl-2">
        <button type="submit" class="btn btn-warning"><i class="lni lni-search d-none d-md-inline"></i> بحث</button>
      </div>
      <div class="flex-grow-1 pl-2">
        <input type="text" name="q" placeholder="ما الذي تبحث عنه" class="form-control shadow font-italic" value="{{ request('q') }}">
      </div>
      <div class="">
        <a href="/orders-policy" class="text-info">
          <small>كيف نتعامل مع الطلبات؟</small>
        </a>
      </div>
    </form>
  </section>
  <!--Navbar End-->

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

  @yield('content')

  <div class="container" id="services">
    <div class="row py-4 px-2 text-center text-info my-5">
      <div class="col-12">
        <h1 class="font-weight-bold text-secondary">
          ما الذي يميزنا؟
        </h1>
      </div>
      <div class="col-6 col-md-3">
        <div class="p-5">
          <img src="{{ asset('assets/images/delivery.svg') }}" height="80px">
        </div>
        <p class="mb-1 font-weight-bold">شحن لكافة المحافظات</p>
        <p class="text-secondary service-desc">
          لا تقلق بشأن المسافة مهما كنت بعيدا سنحرص على شحن حاسوبك إلى أقرب نقطة إليك
        </p>
      </div>
      <div class="col-6 col-md-3">
        <div class="p-5">
          <img src="{{ asset('assets/images/cash-payment.svg') }}" height="80px">
        </div>
        <p class="mb-1 font-weight-bold">ادفع نقدا عند الاستلام</p>
        <p class="text-secondary service-desc">
          يمكنك التسديد نقدا أو بأي طريقة ترغب بها بعد أن تستلم حاسوبك
        </p>
      </div>
      <div class="col-6 col-md-3">
        <div class="p-5">
          <img src="{{ asset('assets/images/package-quality.svg') }}" height="80px">
        </div>
        <p class="mb-1 font-weight-bold">شحن بعناية فائقة</p>
        <p class="text-secondary service-desc">
          رغم بعد المسافة أو صعوبات الشحن نحن نحرص أن يصل حاسوبك بأفضل جودة كما تنتظره تماما
        </p>
      </div>
      <div class="col-6 col-md-3">
        <div class="p-5">
          <img src="{{ asset('assets/images/customer-service.svg') }}" height="80px">
        </div>
        <p class="mb-1 font-weight-bold">خدمة زبائن على مدار الساعة</p>
        <p class="text-secondary service-desc">
          هل لديك أي استفسار؟ لا تتردد بالاتصال بنا لدينا فريق متكامل جاهز لمساعدتك بأي وقت
        </p>
      </div>
    </div>
  </div>

  <!--Footer Start-->
  <footer class="py-3 px-2 mt-3 bg-primary text-light">
    <div class="container-fluid">
      <div class="row">
        <div class="col-5 col-md-4">
          <h5 class="text-warning">أقسام الموقع</h5>
          <ul class="list-unstyled py-2 pl-2 small">
            <li class="py-1 px-1"><a href="/" class="text-light">الصفحة الرئيسية</a></li>
            <li class="py-1 px-1"><a href="/laptops" class="text-light">تصفح الحواسيب المحمولة</a></li>
            <li class="py-1 px-1"><a href="/register" class="text-light">إنشاء حساب</a></li>
            <li class="py-1 px-1"><a href="/orders-policy" class="text-light">سياسة الطلبات</a></li>
            <li class="py-1 px-1"><a href="/about-us" class="text-light">عن الشركة</a></li>
            @auth
                @if(auth()->user()->is_admin)
                  <li class="py-1 px-1"><a href="/admin" class="text-light">إدارة الموقع</a></li>
                @endif
            @endauth
          </ul>
        </div>
        <div class="col-7 col-md-5">
          <h5 class="text-warning">معلومات التواصل</h5>
          <ul class="list-unstyled py-2 pl-2 small">
            <li class="py-1 px-1"><i class="lni lni-phone ml-1"></i> {{ $content->where('key', 'phone')->first()->value }}</li>
            <li class="py-1 px-1"><i class="lni lni-phone-set ml-1"></i> {{ $content->where('key', 'fixed_phone')->first()->value }}</li>
            <li class="py-1 px-1"><i class="lni lni-envelope ml-1"></i> {{ $content->where('key', 'help_email')->first()->value }}</li>
            <li class="py-1 px-1"><i class="lni lni-map ml-1"></i> {{ $content->where('key', 'address')->first()->value }}</li>
            <li class="py-1 px-1"><i class="lni lni-car ml-1"></i> التوصيل مجاني</li>
          </ul>
          <div class="d-flex mt-2">
            <div class="px-2 py-1">
              <a class="text-light" href="{{ $content->where('key', 'whatsapp_number')->first()->value }}">
                <i class="lni lni-whatsapp" style="font-size: 22px;"></i>
              </a>
            </div>
            <div class="px-2 py-1">
              <a class="text-light" href="{{ $content->where('key', 'telegram_link')->first()->value }}">
                <i class="lni lni-telegram" style="font-size: 22px;"></i>
              </a>
            </div>
            <div class="px-2 py-1">
              <a class="text-light" href="{{ $content->where('key', 'instagram_link')->first()->value }}">
                <i class="lni lni-instagram" style="font-size: 22px;"></i>
              </a>
            </div>
            <div class="px-2 py-1">
              <a class="text-light" href="{{ $content->where('key', 'facebook_link')->first()->value }}">
                <i class="lni lni-facebook" style="font-size: 22px;"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-3">
          <h1 class="mb-4"><a href="/" class="text-warning">اسم الشركة</a></h1>
          <p class="text-light">تجارة كافة أنواع الحواسيب المحمولة الجديدة والمستعملة</p>
        </div>
      </div>
    </div>
  </footer>
  <div>
    <div class="text-light text-center py-1 px-2 bg-secondary small">
      جميع الحقوق محفوظة لصالح شركة اسم الشركة
    </div>
  </div>
  <!--Footer End-->

  <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('assets/js/functions.js') }}"></script>
</body>

</html>