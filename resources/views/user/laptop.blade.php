@extends('user.layouts.layout')

@section('title', 'عرض معلومات اللابتوب')

@section('content')

  <section id="product" class="py-3 px-2 mt-3">
    <div class="container-fluid">
      <div class="text-center">
        <img src="../assets/images/laptop1.jpg" class="img-fluid">
      </div>
      <div class="thumbs d-flex justify-content-center align-items-center">
        <div class="col">
          <img src="../assets/images/laptop1.jpg" class="img-fluid rounded-circle shadow">
        </div>
        <div class="col">
          <img src="../assets/images/laptop1.jpg" class="img-fluid rounded-circle shadow">
        </div>
        <div class="col">
          <img src="../assets/images/laptop1.jpg" class="img-fluid rounded-circle shadow">
        </div>
        <div class="col">
          <img src="../assets/images/laptop1.jpg" class="img-fluid rounded-circle shadow">
        </div>
      </div>
      <div class="text-center mt-3">
        <h1>Asus AMD3 99887 nivedia</h1>
        <h2 class="mb-3">
          <span class="text-success font-weight-bold"><bdi>s.p</bdi> 125000</span>
          <strike class="text-secondary"><small><bdi>s.p</bdi> 150000</small></strike>
        </h2>
        <form action="" method="post" class="d-inline">
          <button class="btn rounded-pill btn-dark btn-sm" type="submit">
            <i class="lni lni-cart"></i> 
            إضافة إلى السلة
          </button>
        </form>
        <form action="" method="post" class="d-inline">
          <button class="btn rounded-pill btn-danger btn-sm">
            <i class="lni lni-heart"></i> 
            إضافة إلى المفضلة
          </button>
        </form>
      </div>
      <div class="text-center mt-3">
        <span class="badge badge-primary rounded-pill">
          <i class="lni lni-tag"></i> حواسيب جديدة
        </span>
        <span class="badge badge-secondary rounded-pill">
          <i class="lni lni-eye"></i> 250
        </span>
      </div>
      <div class="row justify-content-center mt-3">
        <div class="col-6 col-md-4 col-lg-3">
          <div><b>اسم المنتج</b></div>
          <span class="text-secondary">Asus AMD3 99887 nivedia</span>
          <div><b>الشركة المصنعة</b></div>
          <span class="text-secondary">Asus</span>
          <div><b>المعالج</b></div>
          <span class="text-secondary">Core i3-10 2700 UQ</span>
          <div><b>الرامات</b></div>
          <span class="text-secondary">4 GB</span>
          <div><b>كرت الشاشة</b></div>
          <span class="text-secondary">RTX-250 99887 nivedia</span>
          <div><b>نوع كرت الشاشة</b></div>
          <span class="text-secondary">مدمج</span>
        </div>
        <div class="col-6 col-md-4 col-lg-3">
          <div><b>قياس الشاشة</b></div>
          <span class="text-secondary">15.6 INH</span>
          <div><b>السواقة</b></div>
          <span class="text-secondary">CD/ROM قراءة وكتابة</span>
          <div><b>البطارية</b></div>
          <span class="text-secondary">جيدة جيدا لمدة 3 ساعات</span>
          <div><b>المداخل</b></div>
          <span class="text-secondary">USB 3 + HDMI</span>
          <div><b>الهارد</b></div>
          <span class="text-secondary">512 SSD</span>
          <div><b>تفاصيل</b></div>
          <span class="text-secondary">كفالة + بطاقة بيع لمدة 6 شهور</span>
        </div>
      </div>
    </div>
  </section>

  <!--Related Products Start-->
  <section id="products" class="py-3 px-2">
    <h1 class="mb-5">الأجهزة المشابهة</h1>
    <div class="container-fluid">
      <div class="row">
        <div class="col-6 col-md-4 col-lg-3 px-1 mb-2">
          <div class="product text-center shadow h-100">
            <div class="header text-left">
              <small class="d-inline-block bg-danger text-light p-1"><i class="lni lni-eye"></i> 250</small>
            </div>
            <div class="image">
              <img src="../assets/images/laptop1.jpg" class="img-fluid rounded">
            </div>
            <div class="data px-2 pb-1">
              <a href="laptop.html" class="text-dark font-weight-bold">Asus AMD3 99887 nivedia</a>
              <div class="d-flex w-100">
                <div class="flex-grow-1">
                  <form action="" method="POST">
                    <button class="btn" type="submit">
                      <i class="lni lni-cart"></i> <small class="d-none d-md-inline">إضافة للسلة</small>
                    </button>
                  </form>
                </div>
                <div class="flex-grow-1">
                  <form action="" method="POST">
                    <button class="btn" type="submit">
                      <i class="lni lni-heart text-danger"></i> <small class="d-none d-md-inline">إضافة للمفضلة</small>
                    </button>
                  </form>
                </div>
              </div>
              <span class="text-success font-weight-bold"><bdi>s.p</bdi> 125000</span>
              <br>
              <strike class="text-secondary"><small><bdi>s.p</bdi> 150000</small></strike>
            </div>
          </div>
        </div>
        <div class="col-6 col-md-4 col-lg-3 px-1 mb-2">
          <div class="product text-center shadow h-100">
            <div class="header text-left">
              <small class="d-inline-block bg-danger text-light p-1"><i class="lni lni-eye"></i> 250</small>
            </div>
            <div class="image">
              <img src="../assets/images/laptop1.jpg" class="img-fluid rounded">
            </div>
            <div class="data px-2 pb-1">
              <a href="laptop.html" class="text-dark font-weight-bold">Asus AMD3 99887 nivedia</a>
              <div class="d-flex w-100">
                <div class="flex-grow-1">
                  <form action="" method="POST">
                    <button class="btn" type="submit">
                      <i class="lni lni-cart"></i> <small class="d-none d-md-inline">إضافة للسلة</small>
                    </button>
                  </form>
                </div>
                <div class="flex-grow-1">
                  <form action="" method="POST">
                    <button class="btn" type="submit">
                      <i class="lni lni-heart text-danger"></i> <small class="d-none d-md-inline">إضافة للمفضلة</small>
                    </button>
                  </form>
                </div>
              </div>
              <span class="text-success font-weight-bold"><bdi>s.p</bdi> 125000</span>
              <br>
              <strike class="text-secondary"><small><bdi>s.p</bdi> 150000</small></strike>
            </div>
          </div>
        </div>
        <div class="col-6 col-md-4 col-lg-3 px-1 mb-2">
          <div class="product text-center shadow h-100">
            <div class="header text-left">
              <small class="d-inline-block bg-danger text-light p-1"><i class="lni lni-eye"></i> 250</small>
            </div>
            <div class="image">
              <img src="../assets/images/laptop1.jpg" class="img-fluid rounded">
            </div>
            <div class="data px-2 pb-1">
              <a href="laptop.html" class="text-dark font-weight-bold">Asus AMD3 99887 nivedia</a>
              <div class="d-flex w-100">
                <div class="flex-grow-1">
                  <form action="" method="POST">
                    <button class="btn" type="submit">
                      <i class="lni lni-cart"></i> <small class="d-none d-md-inline">إضافة للسلة</small>
                    </button>
                  </form>
                </div>
                <div class="flex-grow-1">
                  <form action="" method="POST">
                    <button class="btn" type="submit">
                      <i class="lni lni-heart text-danger"></i> <small class="d-none d-md-inline">إضافة للمفضلة</small>
                    </button>
                  </form>
                </div>
              </div>
              <span class="text-success font-weight-bold"><bdi>s.p</bdi> 125000</span>
              <br>
              <strike class="text-secondary"><small><bdi>s.p</bdi> 150000</small></strike>
            </div>
          </div>
        </div>
      </div>
      <div class="text-center mt-3">
        <a href="laptops.html" class="btn btn-primary rounded-pill">عرض المزيد</a>
      </div>
    </div>
  </section>
  <!--Related Products End-->

@endsection