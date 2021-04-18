@extends('admin.layouts.layout')

@section('title', 'عرض تفاصيل الطلب')

@section('content')

  <div class="col-12">
    <h2>إدارة الطلبات > عرض تفاصيل الطلب</h2>
  </div>

  <div class="col-12 mt-4">
    <div class="row justify-content-center">
      
      <div class="col-12 col-md-8">
        <div class="item row align-items-center shadow py-2 px-1 mb-2">
          <div class="col-12 text-center">
            <img src="../../assets/images/default-user.png" class="img-fluid rounded-circle">
            <p class="mt-2 mb-4">
              <span class="h4">طارق الحلبي</span>
              <a href="users/show.html"><i class="lni lni-arrow-right-circle"></i></a>
            </p>
          </div>
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
    </div>
  </div>

@endsection