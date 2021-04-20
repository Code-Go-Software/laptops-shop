@extends('user.layouts.layout')

@section('title', 'الصفحة الرئيسية')

@section('content')
    
  <!--Carousel Start-->
  <section id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="../assets/images/banner1.jpg" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="../assets/images/banner2.jpg" alt="Second slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </section>
  <!--Carousel End-->

  <!--Product Section Start-->
  <section id="new-products" class="py-3 px-2">
    <h1>الأجهزة الجديدة</h1>
    <p class="text-secondary">تصفح أحدث الأجهزة الجديدة لدينا</p>
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
              <a href="/laptop" class="text-dark font-weight-bold">Asus AMD3 99887 nivedia</a>
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
        <a href="/laptops" class="btn btn-primary rounded-pill">تصفح جميع الحواسيب الجديدة</a>
      </div>
    </div>
  </section>
  <!--Product Section End-->

@endsection

  