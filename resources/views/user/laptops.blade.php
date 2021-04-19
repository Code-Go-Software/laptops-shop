@extends('user.layouts.layout')

@section('title', 'تصفح جميع اللابتوبات')

@section('content')

  <!--Products Section Start-->
  <section id="products" class="py-3 px-2">
    <h1 class="mb-5">الأجهزة المتوفرة</h1>
    <div class="container-fluid">
      <div class="row">
        <div class="col-12 mb-5">
          <div class="shadow px-2 py-3 row">
            <div class="col-12 col-md-auto">
              <select id="category" class="form-control form-control-sm d-inline-block w-auto mr-1 border-dark rounded-pill mb-3">
                <option value="">حواسيب جديدة</option>
                <option value="">حواسيب مستعملة</option>
              </select>
              <select id="price" class="form-control form-control-sm d-inline-block w-auto mr-1 border-dark rounded-pill mb-3">
                <option value="">الأعلى أولا</option>
                <option value="">الأقل أولا</option>
              </select>
              <select id="price" class="form-control form-control-sm d-inline-block w-auto mr-1 border-dark rounded-pill mb-3">
                <option value="">الأحدث أولا</option>
                <option value="">الأقدم أولا</option>
              </select>
            </div>
            <div class="col-auto">
              <input type="text" placeholder="المواصفات المطلوبة" class="form-control form-control-sm d-inline-block w-auto border-dark rounded-pill mb-3">
              <select id="price" class="form-control form-control-sm d-inline-block w-auto mr-1 border-dark rounded-pill mb-3">
                <option value="">المعالج</option>
                <option value="">الرامات</option>
              </select>
            </div>
            <div class="col-auto">
              <button type="submit" class="btn btn-info btn-sm rounded-pill"><i class="lni lni-search"></i> بحث</button>
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

      <!--Pagination Start-->
      <div class="mt-5">
        <ul class="pagination justify-content-center">
          <li class="page-item">
            <a class="page-link" href="#">Previous</a>
          </li>
          <li class="page-item active"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item">
            <a class="page-link" href="#">Next</a>
          </li>
        </ul>
      </div>
      <!--Pagination End-->

    </div>
  </section>
  <!--Product Section End-->

@endsection