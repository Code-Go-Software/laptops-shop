@extends('user.layouts.layout')

@section('title', 'الطلبات')

@section('content')

  <section id="favourites" class="py-3 px-2 mt-3">
    <h1 class="mb-4">قائمة الطلبات</h1>
    <div class="container-fluid">
  
      <div class="row justify-content-center">
        <div class="col-12 col-md-8 col-lg-6">
          <!--Start Order Item-->
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
                    <img src="../assets/images/laptop1.jpg" class="img-fluid">
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
          <!--End Order Item-->
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
                    <img src="../assets/images/laptop1.jpg" class="img-fluid">
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
  </section>

@endsection