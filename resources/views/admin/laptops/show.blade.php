@extends('admin.layouts.layout')

@section('title', 'عرض بيانات الحاسوب')

@section('content')

  <div class="col-12">
    <h2>إدارة الحواسيب > عرض بيانات الحاسوب</h2>
  </div>
  <section id="product" class="py-3 px-2 mt-3 col-12">
    <div class="container-fluid">
      <div class="text-center">
        <img src="../../assets/images/laptop1.jpg" class="img-fluid">
      </div>
      <div class="thumbs d-flex justify-content-center align-items-center">
        <div class="col">
          <img src="../../assets/images/laptop1.jpg" class="img-fluid rounded-circle shadow">
        </div>
        <div class="col">
          <img src="../../assets/images/laptop1.jpg" class="img-fluid rounded-circle shadow">
        </div>
        <div class="col">
          <img src="../../assets/images/laptop1.jpg" class="img-fluid rounded-circle shadow">
        </div>
        <div class="col">
          <img src="../../assets/images/laptop1.jpg" class="img-fluid rounded-circle shadow">
        </div>
      </div>
      <div class="text-center mt-3">
        <h1>Asus AMD3 99887 nivedia</h1>
        <h2 class="mb-3">
          <span class="text-success font-weight-bold"><bdi>s.p</bdi> 125000</span>
          <strike class="text-secondary"><small><bdi>s.p</bdi> 150000</small></strike>
        </h2>
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
          <div><b>السعر قبل التخفيض</b></div>
          <span class="text-secondary"><bdi>USD</bdi> 125</span>
          <div><b>السعر بعد التخفيض (سعر المبيع)</b></div>
          <span class="text-secondary"><bdi>USD</bdi> 120</span>
          <div><b>الشركة المصنعة</b></div>
          <span class="text-secondary">Asus</span>
          <div><b>المعالج</b></div>
          <span class="text-secondary">Core i3-10 2700 UQ</span>
          <div><b>الرامات</b></div>
          <span class="text-secondary">4 GB</span>
          <div><b>كرت الشاشة</b></div>
          <span class="text-secondary">RTX-250 99887 nivedia</span>
        </div>
        <div class="col-6 col-md-4 col-lg-3">
          <div><b>نوع كرت الشاشة</b></div>
          <span class="text-secondary">مدمج</span>
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
        <div class="col-12 text-center mt-4">
          <a href="edit.html" class="btn btn-primary rounded-pill"><i class="lni lni-pencil"></i> تعديل البيانات</a>
          <form action="" method="post" class="d-inline">
            <button type="submit" class="btn btn-danger rounded-pill"><i class="lni lni-trash"></i> حذف الحاسوب</button>
          </form>
        </div>
      </div>
    </div>
  </section>

@endsection