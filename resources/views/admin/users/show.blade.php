@extends('admin.layouts.layout')

@section('title', 'عرض بيانات المستخدم')

@section('content')

  <div class="col-12">
    <h2>إدارة المستخدمين > عرض بيانات المستخدم</h2>
  </div>
  <div class="col-12 text-center mt-3 mb-3">
    <img src="../../assets/images/default-user.png" class="rounded-circle mr-2" width="120px" height="120px">
  </div>
  <div class="col-6">
    <h4><i class="lni lni-postcard mr-2 mb-2"></i> بيانات المستخدم</h4>
    <p><i class="lni lni-user mr-2"></i> الاسم الكامل</p>
    <p class="text-secondary">طارق الحلبي</p>
    <p><i class="lni lni-envelope mr-2"></i> البريد الإلكترني</p>
    <p class="text-secondary">tarekalhalaby@gmail.com</p>
    <p><i class="lni lni-phone mr-2"></i> رقم الهاتف</p>
    <p class="text-secondary">0946918650</p>
    <p><i class="lni lni-map mr-2"></i> العنوان</p>
    <p class="text-secondary">دمشق - شارع الحمر</p>
    <h4><i class="lni lni-star-filled mr-2 mb-2"></i> القائمة المفضلة</h4>
    <div class="pr-4">
      <div class="item row align-items-center shadow py-2 px-1 mb-2">
        <div class="col-3">
          <img src="../../assets/images/laptop1.jpg" class="img-fluid">
        </div>
        <div class="col-7">
          <p class="font-weight-bold mb-1">
            <a href="laptop.html" class="text-dark">Asus AMD3 99887 nivedia</a>
          </p>
          <div>
            <span class="badge badge-secondary rounded-pill">
              <i class="lni lni-calendar"></i> 
              <span>22-2-2021 12:57</span>
            </span>
          </div>
          <span class="text-success font-weight-bold"><bdi>s.p</bdi> 125000</span>
          <strike class="text-secondary"><small><bdi>s.p</bdi> 150000</small></strike>
        </div>
      </div>
    </div>
  </div>
  <div class="col-6">
    <h4><i class="lni lni-clipboard mr-2 mb-2"></i> طلبات المستخدم <span>(5)</span></h4>
    <div class="item row align-items-center shadow py-2 px-1 mb-2">
      <div class="col-12">
        <span class="badge badge-secondary rounded-pill">
          <i class="lni lni-calendar"></i> 
          <span>22-2-2021 12:57</span>
        </span>
        <span class="badge badge-success rounded-pill float-left">
          <i class="lni lni-checkmark-circle"></i> 
          <span>منجز</span>
        </span>
      </div>
      <div class="col-12 mt-2">
        <p>المنتجات المطلوبة</p>
        <div class="products row mb-3">
          <div class="col-12 row mb-3">
            <div class="col-3">
              <img src="../../assets/images/laptop1.jpg" class="img-fluid">
            </div>
            <div class="col-9">
              <p class="font-weight-bold mb-1">
                <a href="laptop.html" class="text-dark">Asus AMD3 99887 nivedia</a>
              </p>
              <small>السعر عند الطلب</small>
              <span class="text-success font-weight-bold"><bdi>s.p</bdi> 125000</span>
            </div>
          </div>
        </div>
        <b>قيمة الطلب</b>
        <h3 class="d-inline-block text-danger"><bdi>s.p</bdi> 125000</h3>
      </div>
    </div>
    <div class="item row align-items-center shadow py-2 px-1 mb-2">
      <div class="col-12">
        <span class="badge badge-secondary rounded-pill">
          <i class="lni lni-calendar"></i> 
          <span>22-2-2021 12:57</span>
        </span>
        <span class="badge badge-success rounded-pill float-left">
          <i class="lni lni-checkmark-circle"></i> 
          <span>منجز</span>
        </span>
      </div>
      <div class="col-12 mt-2">
        <p>المنتجات المطلوبة</p>
        <div class="products row mb-3">
          <div class="col-12 row mb-3">
            <div class="col-3">
              <img src="../../assets/images/laptop1.jpg" class="img-fluid">
            </div>
            <div class="col-9">
              <p class="font-weight-bold mb-1">
                <a href="laptop.html" class="text-dark">Asus AMD3 99887 nivedia</a>
              </p>
              <small>السعر عند الطلب</small>
              <span class="text-success font-weight-bold"><bdi>s.p</bdi> 125000</span>
            </div>
          </div>
        </div>
        <b>قيمة الطلب</b>
        <h3 class="d-inline-block text-danger"><bdi>s.p</bdi> 125000</h3>
      </div>
    </div>
  </div>

@endsection