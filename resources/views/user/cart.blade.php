@extends('user.layouts.layout')

@section('title', 'سلة المشتريات')

@section('content')
    
  <section id="orders" class="py-3 px-2 mt-3">
    <h1 class="mb-4">سلة المشتريات (2)</h1>
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-12 col-md-8 col-lg-6">

          <div class="item row align-items-center shadow py-2 px-1 mb-2">
            <div class="col-3">
              <img src="../assets/images/laptop1.jpg" class="img-fluid">
            </div>
            <div class="col-7">
              <p class="font-weight-bold mb-1">
                <a href="laptop.html" class="text-dark">Asus AMD3 99887 nivedia</a>
              </p>
              <span class="text-success font-weight-bold"><bdi>s.p</bdi> 125000</span>
              <strike class="text-secondary"><small><bdi>s.p</bdi> 150000</small></strike>
            </div>
            <div class="col-2 text-right">
              <form action="laptops.html" method="post">
                <button class="btn"><i class="lni lni-reply text-danger" role="button"></i></button>
              </form>
            </div>
          </div>

          <div class="item row align-items-center shadow py-2 px-1 mb-2">
            <div class="col-3">
              <img src="../assets/images/laptop1.jpg" class="img-fluid">
            </div>
            <div class="col-7">
              <p class="font-weight-bold mb-1">
                <a href="laptop.html" class="text-dark">Asus AMD3 99887 nivedia</a>
              </p>
              <span class="text-success font-weight-bold"><bdi>s.p</bdi> 125000</span>
              <strike class="text-secondary"><small><bdi>s.p</bdi> 150000</small></strike>
            </div>
            <div class="col-2 text-right">
              <form action="laptops.html" method="post">
                <button class="btn"><i class="lni lni-reply text-danger" role="button"></i></button>
              </form>
            </div>
          </div>

        </div>
      </div>
    </div>
    <div class="text-center mt-5 mb-5">
      <h3>قيمة الطلب النهائية</h3>
      <h1 class="text-danger"><bdi>s.p</bdi> 125000</h1>
    </div>
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-12 col-md-4 col-lg-3">
          <div class="form-group">
            <input type="text" class="form-control rounded-pill border-dark text-center" placeholder="رقم التواصل: 0946918650">
          </div>
          <div class="form-group">
            <button class="btn btn-lg btn-block rounded-pill btn-success">
              <i class="lni lni-checkmark-circle"></i>
              تأكيد الطلب
            </button>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection
