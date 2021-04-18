@extends('admin.layouts.layout')

@section('title', 'إدارة المنتجات')

@section('content')

  <div class="col-12">
    <h2>إدارة المنتجات</h2>
  </div>
  <div class="col-12 row justify-content-center text-center my-3">
    <div class="col-4">
      <h1>250</h1>
      <p><i class="lni lni-display-alt h1"></i> عدد الحواسيب الكلي</p>
    </div>
    <div class="col-4">
      <h1>100</h1>
      <p><i class="lni lni-close"></i> عدد الحواسيب الغير متوفرة</p>
    </div>
    <div class="col-4">
      <h1>1500</h1>
      <p><i class="lni lni-checkmark-circle"></i> عدد الحواسيب المتوفرة</p>
    </div>
  </div>

  <div class="col-12">
    <h4 class="text-secondary mb-4">المنتجات المتوفرة <span>(25)</span></h4>
  </div>
  <div class="col-12">
    <form action="" class="row" method="get">
      <div class="form-group mr-3">
        <label for="sort"><small>ترتيب حسب الزمن</small></label>
        <select class="form-control form-control-sm rounded-pill d-inline-block w-auto border-dark ml-2">
          <option value="0">الأحدث أولا</option>
          <option value="1">الأقدم أولا</option>
        </select>
      </div>
      <div class="form-group mr-3">
        <label for="sort"><small>ترتيب حسب السعر</small></label>
        <select class="form-control form-control-sm rounded-pill d-inline-block w-auto border-dark ml-2">
          <option value="0">الأعلى سعرا أولا</option>
          <option value="1">الأقل سعرا أولا</option>
        </select>
      </div>
      <div class="form-group mr-3">
        <label for="sort"><small>الفئة</small></label>
        <select class="form-control form-control-sm rounded-pill d-inline-block w-auto border-dark ml-2">
          <option value="0">الكل</option>
          <option value="0">الحواسيب الجديدة</option>
          <option value="1">الحواسيب المستعملة</option>
        </select>
      </div>
      <div class="form-group mr-3">
        <input type="text" class="form-control form-control-sm rounded-pill border-dark" placeholder="بحث">
      </div>
      <div class="form-group mr-3">
        <button type="submit" class="btn btn-sm btn-primary rounded-pill">تطبيق</button>
      </div>
      <div class="form-group">
        <a href="create.html" class="btn btn-sm btn-success rounded-pill"><i class="lni lni-plus"></i> إضافة</a>
      </div>
    </form>
  </div>
  <div class="col-12 row">
    <div class="col-6 col-md-4 col-lg-3 px-1 mb-2">
      <div class="product text-center shadow h-100">
        <div class="header text-left">
          <small class="d-inline-block bg-danger text-light p-1"><i class="lni lni-eye"></i> 250</small>
        </div>
        <div class="image">
          <img src="../../assets/images/laptop1.jpg" class="img-fluid rounded">
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
  <div class="mt-5 col-12">
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
  
  <div class="col-12">
    <h4 class="text-secondary mb-4 mt-4">المنتجات المنتجات الغير متوفرة <span>(3)</span></h4>
  </div>
  <div class="col-12 row">
    <div class="col-6 col-md-4 col-lg-3 px-1 mb-2">
      <div class="product text-center shadow h-100">
        <div class="header text-left">
          <small class="d-inline-block bg-danger text-light p-1"><i class="lni lni-eye"></i> 250</small>
        </div>
        <div class="image">
          <img src="../../assets/images/laptop1.jpg" class="img-fluid rounded">
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
  <div class="mt-5 col-12">
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

@endsection