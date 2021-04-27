@extends('user.layouts.layout')

@section('title', 'تصفح جميع اللابتوبات')

@section('content')

  <!--Products Section Start-->
  <section id="products" class="py-3 px-2">
    <h1 class="mb-5">الأجهزة المتوفرة</h1>
    <div class="container-fluid">
      <div class="row">
        <div class="col-12 mb-5">
          <form action="" method="GET" class="shadow px-2 py-3 row">
            <div class="col-12 col-md-auto">
              <select id="category" name="cid"
              class="form-control form-control-sm d-inline-block w-auto mr-1 border-dark rounded-pill mb-3">
                <option value="">الكل</option>  

                @forelse ($categories as $category)
                  <option value="{{ $category->id }}" {{ ($category->id == request('cid')) ? 'selected' : ''}}>{{ $category->name }}</option>    
                @empty

                @endforelse

              </select>
              <select id="price" name="p"
              class="form-control form-control-sm d-inline-block w-auto mr-1 border-dark rounded-pill mb-3">
                <option value="high" {{ (request('p') == 'high') ? 'selected' : ''}}>الأعلى أولا</option>
                <option value="low" {{ (request('p') == 'low' || request('p') == '') ? 'selected' : ''}}>الأقل أولا</option>
              </select>
              <select id="time" name="t"
              class="form-control form-control-sm d-inline-block w-auto mr-1 border-dark rounded-pill mb-3">
                <option value="new" {{ (request('t') == 'new' || request('t') == '') ? 'selected' : ''}}>الأحدث أولا</option>
                <option value="old" {{ (request('t') == 'old') ? 'selected' : ''}}>الأقدم أولا</option>
              </select>
            </div>
            <!--
            <div class="col-auto">
              <input type="text" name="value" placeholder="المواصفات المطلوبة"
              class="form-control form-control-sm d-inline-block w-auto border-dark rounded-pill mb-3">
              <select id="attr" class="form-control form-control-sm d-inline-block w-auto mr-1 border-dark rounded-pill mb-3">
                <option value="cpu">المعالج</option>
                <option value="ram">الرامات</option>
                <option value="company">الشركة المصنعة</option>
                <option value="hard">مساحة التخزين</option>
              </select>
            </div>
            -->
            <div class="col-auto">
              <button type="submit" class="btn btn-info btn-sm rounded-pill"><i class="lni lni-search"></i> بحث</button>
            </div>
          </form>
        </div>

        @forelse ($laptops as $laptop)

          <x-laptop-card :laptop="$laptop" />

        @empty
          <div class="col-12 alert alert-secondary">
            لا يوجد أي حواسيب متوفرة حاليا
          </div>
        @endforelse
           
      </div>

      <!--Pagination Start-->
      <div class="mt-5 text-center">
        {{ $laptops->links() }}
      </div>
      <!--Pagination End-->

    </div>
  </section>
  <!--Product Section End-->

@endsection