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
          @foreach ($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
          @endforeach
        </select>
      </div>
      <div class="form-group mr-3">
        <input type="text" class="form-control form-control-sm rounded-pill border-dark" placeholder="بحث">
      </div>
      <div class="form-group mr-3">
        <button type="submit" class="btn btn-sm btn-primary rounded-pill">تطبيق</button>
      </div>
      <div class="form-group mr-2">
        <a href="/admin/laptops/create" class="btn btn-sm btn-success rounded-pill"><i class="lni lni-plus"></i> إضافة</a>
      </div>
    </form>
  </div>
  <div class="col-12 row">

    @forelse ($laptops as $laptop)
      <div class="col-6 col-md-4 col-lg-3 px-1 mb-2">
        <div class="product text-center shadow h-100">
          <div class="header text-left">
            <small class="d-inline-block bg-danger text-light p-1"><i class="lni lni-eye"></i> {{ $laptop->views }}</small>
          </div>
          <div class="image">
            <img src="{{ asset('assets/images/laptop1.jpg') }}" class="img-fluid rounded">
          </div>
          <div class="data px-2 pb-1">
            <a href="/admin/laptops/{{ $laptop->id }}/{{ $laptop->name }}" class="text-dark font-weight-bold">{{ $laptop->name }}</a>
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
                  <button class="btn" type="submit">
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
      </div>
    @empty
        <div class="col-12 alert alert-secondary">
          لا يوجد أي حواسيب متوفرة حاليا
        </div>
    @endforelse

  </div>

  <!--Pagination Start-->
  <div class="mt-5">
    {{ $laptops->links() }}
  </div>
  <!--Pagination End-->
  
  <div class="col-12">
    <h4 class="text-secondary mb-4 mt-4">المنتجات المنتجات الغير متوفرة <span>({{ $un_available_laptops->count() }})</span></h4>
  </div>
  <div class="col-12 row">
    
    @forelse ($un_available_laptops as $laptop)
      <div class="col-6 col-md-4 col-lg-3 px-1 mb-2">
        <div class="product text-center shadow h-100">
          <div class="header text-left">
            <small class="d-inline-block bg-danger text-light p-1"><i class="lni lni-eye"></i> {{ $laptop->views }}</small>
          </div>
          <div class="image">
            <img src="{{ asset('assets/images/laptop1.jpg') }}" class="img-fluid rounded">
          </div>
          <div class="data px-2 pb-1">
            <a href="laptops/{{ $laptop->id }}/{{ $laptop->name }}" class="text-dark font-weight-bold">{{ $laptop->name }}</a>
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
                  <button class="btn" type="submit">
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
      </div>
    @empty
        <div class="col-12 alert alert-secondary">
          لا يوجد أي حواسيب غير متوفرة حاليا
        </div>
    @endforelse

  </div>

@endsection