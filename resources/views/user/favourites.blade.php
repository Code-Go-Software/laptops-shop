@extends('user.layouts.layout')

@section('title', 'المفضلة')

@section('content')

  <section id="favourites" class="py-3 px-2 mt-3">
    <h1 class="mb-4">القائمة المفضلة</h1>
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
                <button class="btn"><i class="lni lni-trash text-danger" role="button"></i></button>
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
                <button class="btn"><i class="lni lni-trash text-danger" role="button"></i></button>
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
                <button class="btn"><i class="lni lni-trash text-danger" role="button"></i></button>
              </form>
            </div>
          </div>

        </div>

      </div>
    </div>
  </section>

@endsection
