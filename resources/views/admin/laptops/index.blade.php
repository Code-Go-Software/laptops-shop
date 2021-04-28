@extends('admin.layouts.layout')

@section('title', 'إدارة المنتجات')

@section('content')

  <div class="col-12">
    <h2>إدارة المنتجات</h2>
  </div>
  <div class="col-12 row justify-content-center text-center my-3">
    <div class="col-4">
      <h1>{{ $laptops->count() }}</h1>
      <p><i class="lni lni-display-alt h1"></i> عدد الحواسيب الكلي</p>
    </div>
    <div class="col-4">
      <h1>{{ $un_available_laptops->count() }}</h1>
      <p><i class="lni lni-close"></i> عدد الحواسيب الغير متوفرة</p>
    </div>
    <div class="col-4">
      <h1>{{ $laptops->count() }}</h1>
      <p><i class="lni lni-checkmark-circle"></i> عدد الحواسيب المتوفرة</p>
    </div>
  </div>

  <div class="col-12">
    <h4 class="text-secondary mb-4">المنتجات المتوفرة <span>({{ $laptops->count() }})</span></h4>
  </div>
  <div class="col-12">
    <form action="" class="row" method="get">
      <div class="form-group mr-3">
        <label for="sort"><small>ترتيب حسب الزمن</small></label>
        <select name="t" class="form-control form-control-sm rounded-pill d-inline-block w-auto border-dark ml-2">
          <option value="new" {{ (request('t') == 'new' || request('t') == '') ? 'selected' : ''}}>الأحدث أولا</option>
          <option value="old" {{ (request('t') == 'old') ? 'selected' : ''}}>الأقدم أولا</option>
        </select>
      </div>
      <div class="form-group mr-3">
        <label for="sort"><small>ترتيب حسب السعر</small></label>
        <select name="p" class="form-control form-control-sm rounded-pill d-inline-block w-auto border-dark ml-2">
          <option value="high" {{ (request('p') == 'high') ? 'selected' : ''}}>الأعلى سعرا أولا</option>
          <option value="low" {{ (request('p') == 'low' || request('p') == '') ? 'selected' : ''}}>الأقل سعرا أولا</option>
        </select>
      </div>
      <div class="form-group mr-3">
        <label for="sort"><small>الفئة</small></label>
        <select name="cid" class="form-control form-control-sm rounded-pill d-inline-block w-auto border-dark ml-2">
          <option value="" selected>الكل</option>
          @foreach ($categories as $category)
            <option value="{{ $category->id }}" {{ (request('cid') == $category->id) ? 'selected' : '' }}>{{ $category->name }}</option>
          @endforeach
        </select>
      </div>
      <div class="form-group mr-3">
        <input type="text" name="q" class="form-control form-control-sm rounded-pill border-dark" placeholder="بحث" value="{{ request('q') }}">
      </div>
      <div class="form-group mr-3">
        <button type="submit" class="btn btn-sm btn-primary rounded-pill">تطبيق</button>
      </div>
      <div class="form-group mr-2">
        <a href="/admin/laptops/create" class="btn btn-sm btn-success rounded-pill"><i class="lni lni-plus"></i> إضافة حاسوب</a>
      </div>
    </form>
  </div>
  <div class="col-12 row">

    @forelse ($laptops as $laptop)
      <!--
      <div class="col-6 col-md-4 col-lg-3 px-1 mb-2">
        <div class="product text-center shadow h-100">
          <div class="header text-left">
            <small class="d-inline-block bg-danger text-light p-1"><i class="lni lni-eye"></i> {{ $laptop->views }}</small>
          </div>
          <div class="image">
            <img src="{{ asset('images/' . $laptop->image) }}" class="img-fluid rounded">
          </div>
          <div class="data px-2 pb-1">
            <a href="/admin/laptops/{{ $laptop->id }}" class="text-dark font-weight-bold">{{ $laptop->name }}</a>
            <div class="d-flex w-100">
              <div class="flex-grow-1">
                <a class="btn" href="/admin/laptops/{{ $laptop->id }}/edit">
                  <i class="lni lni-pencil"></i> <small>تعديل</small>
                </a>
              </div>
              <div class="flex-grow-1">
                <form action="/admin/laptops/{{ $laptop->id }}" method="POST">
                  @csrf
                  @method('delete')
                  <button class="btn delete-btn" type="submit">
                    <i class="lni lni-trash text-danger"></i> <small>حذف</small>
                  </button>
                </form>
              </div>
            </div>
            <span class="text-success font-weight-bold"><bdi>s.p</bdi> {{ $laptop->afterDiscountPrice() }}</span>
            <br>
            <strike class="text-secondary"><small><bdi>s.p</bdi> {{ $laptop->beforeDiscountPrice() }}</small></strike>
          </div>
        </div>
      </div>-->

      <div class="col-6 col-md-4 col-lg-3 px-1 mb-2">
        <div class="card">
          <div class="view zoom overlay">
            <img class="img-fluid w-100" src="{{ asset('images/' . $laptop->image) }}">
            <p class="mb-0"><span class="badge badge-secondary badge-pill badge-news"><i class="lni lni-eye"></i> {{ $laptop->views }}</span></p>
          </div>
          <div class="card-body text-center">
            <h5><a class="text-dark" href="/laptops/{{ $laptop->id }}/{{ $laptop->name }}">{{ $laptop->name }}</a></h5>
            <p class="small text-muted text-uppercase mb-2">{{ $laptop->type }}</p>
            <h6 class="mb-3">
              <span class="text-success mr-1"><bdi>s.p</bdi>  {{ $laptop->afterDiscountPrice() }}</span>
              <strike class="text-secondary"><small><bdi>s.p</bdi>  {{ $laptop->beforeDiscountPrice() }}</small></strike>
            </h6>
            <a href="/admin/laptops/{{ $laptop->id }}/edit" class="btn btn-primary btn-sm mr-1 mb-2">
              <i class="lni lni-pencil pl-2"></i>تعديل
            </a>
            <form action="/admin/laptops/{{ $laptop->id }}" class="d-inline" method="POST">
              @csrf
              @method('delete')
              <button type="submit" class="btn btn-danger btn-sm px-3 mb-2 material-tooltip-main delete-btn">
                <i class="lni lni-trash pl-2"></i>حذف
              </button>
            </form>
          </div>
        </div>
      </div>

    @empty
        <div class="col-12 alert bg-secondary text-light">
          لا يوجد أي حواسيب متوفرة حاليا
        </div>
    @endforelse

  </div>

  <!--Pagination Start-->
  <div class="mt-5 text-center">
    {{ $laptops->links() }}
  </div>
  <!--Pagination End-->
  
  <div class="col-12">
    <h4 class="text-secondary mb-4 mt-4">المنتجات المنتجات الغير متوفرة <span>({{ $un_available_laptops->count() }})</span></h4>
  </div>
  <div class="col-12 row">
    
    @forelse ($un_available_laptops as $laptop)

      <div class="col-6 col-md-4 col-lg-3 px-1 mb-2">
        <div class="card">
          <div class="view zoom overlay">
            <img class="img-fluid w-100" src="{{ asset('images/' . $laptop->image) }}">
            <p class="mb-0"><span class="badge badge-secondary badge-pill badge-news"><i class="lni lni-eye"></i> {{ $laptop->views }}</span></p>
          </div>
          <div class="card-body text-center">
            <h5><a class="text-dark" href="/laptops/{{ $laptop->id }}/{{ $laptop->name }}">{{ $laptop->name }}</a></h5>
            <p class="small text-muted text-uppercase mb-2">{{ $laptop->type }}</p>
            <h6 class="mb-3">
              <span class="text-success mr-1"><bdi>s.p</bdi>  {{ $laptop->afterDiscountPrice() }}</span>
              <strike class="text-secondary"><small><bdi>s.p</bdi>  {{ $laptop->beforeDiscountPrice() }}</small></strike>
            </h6>
            <a href="/admin/laptops/{{ $laptop->id }}/edit" class="btn btn-primary btn-sm mr-1 mb-2">
              <i class="lni lni-pencil pl-2"></i>تعديل
            </a>
            <form action="/admin/laptops/{{ $laptop->id }}" class="d-inline" method="POST">
              @csrf
              @method('delete')
              <button type="submit" class="btn btn-danger btn-sm px-3 mb-2 material-tooltip-main delete-btn">
                <i class="lni lni-trash pl-2"></i>حذف
              </button>
            </form>
          </div>
        </div>
      </div>

    @empty
        <div class="col-12 alert bg-secondary text-light">
          لا يوجد أي حواسيب غير متوفرة حاليا
        </div>
    @endforelse

  </div>

@endsection