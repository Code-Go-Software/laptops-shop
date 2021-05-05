@extends('admin.layouts.layout')

@section('title', 'إدارة المنتجات')

@section('content')

  <div class="col-12">
    <h2>إدارة الحواسيب</h2>
  </div>

  <div class="col-12 row justify-content-center text-center my-3">
    <div class="col-md-4 col-12 mb-2">
      <div class="card text-white bg-primary h-100">
        <div class="card-header">عدد الحواسيب الكلي</div>
        <div class="card-body">
          <h5 class="card-title"><i class="lni lni-display-alt"></i> {{ $laptops->count() + $un_available_laptops->count() }}</h5>
          <small class="card-text">عدد الحواسيب الكلية الموجودة في المتجر</small>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-12 mb-2">
      <div class="card text-white bg-danger h-100">
        <div class="card-header">عدد الحواسيب الغير متوفرة</div>
        <div class="card-body">
          <h5 class="card-title"><i class="lni lni-close"></i> {{ $un_available_laptops->count() }}</h5>
          <small class="card-text">عدد الحواسيب الموجودة في المتجر وغير معروضة للبيع</small>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-12 mb-2">
      <div class="card text-white bg-success h-100">
        <div class="card-header">عدد الحواسيب المعروضة</div>
        <div class="card-body">
          <h5 class="card-title"><i class="lni lni-checkmark-circle"></i> {{ $laptops->count() }}</h5>
          <small class="card-text">عدد الحواسيب الموجودة في المتجر والمعروضة للبيع</small>
        </div>
      </div>
    </div>
  </div>

  <div class="col-12 my-5">
    <h4 class="text-primary">الحواسيب المتوفرة <span>({{ $laptops->count() }})</span></h4>
    <p class="small text-secondary">قائمة بالحواسيب الموجودة في المتجر والمعروضة للبيع أي يمكن للزبائن مشاهدتها وطلبها</p>
  </div>
  <div class="col-12">
    <form action="" class="row" method="get">
      <div class="form-group mr-3">
        <label for="sort">ترتيب حسب الزمن</label>
        <select name="t" class="form-control form-control-sm d-inline-block w-auto border-secondary ml-2">
          <option value="new" {{ (request('t') == 'new' || request('t') == '') ? 'selected' : ''}}>الأحدث أولا</option>
          <option value="old" {{ (request('t') == 'old') ? 'selected' : ''}}>الأقدم أولا</option>
        </select>
      </div>
      <div class="form-group mr-3">
        <label for="sort">ترتيب حسب السعر</label>
        <select name="p" class="form-control form-control-sm d-inline-block w-auto border-secondary ml-2">
          <option value="high" {{ (request('p') == 'high') ? 'selected' : ''}}>الأعلى سعرا أولا</option>
          <option value="low" {{ (request('p') == 'low' || request('p') == '') ? 'selected' : ''}}>الأقل سعرا أولا</option>
        </select>
      </div>
      <div class="form-group mr-3">
        <label for="sort">الفئة</label>
        <select name="cid" class="form-control form-control-sm d-inline-block w-auto border-secondary ml-2">
          <option value="" selected>الكل</option>
          @foreach ($categories as $category)
            <option value="{{ $category->id }}" {{ (request('cid') == $category->id) ? 'selected' : '' }}>{{ $category->name }}</option>
          @endforeach
        </select>
      </div>
      <div class="form-group mr-3">
        <input type="text" name="q" class="form-control form-control-sm border-secondary" placeholder="بحث" value="{{ request('q') }}">
      </div>
      <div class="form-group mr-3">
        <button type="submit" class="btn btn-sm bg-primary text-light">تطبيق</button>
      </div>
      <div class="form-group mr-2">
        <a href="/admin/laptops/create" class="btn btn-sm bg-success text-light"><i class="lni lni-plus"></i> إضافة حاسوب</a>
      </div>
    </form>
  </div>
  <div class="col-12 row my-5">

    @forelse ($laptops as $laptop)

      <x-laptop-card :laptop="$laptop" role='admin'/>

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
  
  <div class="col-12 my-5">
    <h4 class="text-primary">الحواسيب الغير متوفرة <span>({{ $un_available_laptops->count() }})</span></h4>
    <p class="small text-secondary">قائمة بالحواسيب الموجودة في المتجر ولكنها غير معروضة للبيع أي لا يمكن للزبائن مشاهدتها أو طلبها</p>
  </div>
  <div class="col-12 row">
    
    @forelse ($un_available_laptops as $laptop)

      <x-laptop-card :laptop="$laptop" role='admin'/>

    @empty
      <div class="col-12 alert bg-secondary text-light">
        لا يوجد أي حواسيب غير متوفرة حاليا
      </div>
    @endforelse

  </div>

@endsection