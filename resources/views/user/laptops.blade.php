@extends('user.layouts.layout')

@section('title', 'اسم الشركة لتجارة جميع أنواع اللابتوبات | تصفح جميع اللابتوبات')
@section('description', 'تسوق الآن في أفضل المتاجر الإلكترونية لبيع جميع أنواع اللابتوبات بمختلف المواصفات لتلبية جميع احتياجات المستخدمين وبأفضل الأسعار مع خدمات الشحن والتوصيل المجاني ما الذي تنتظره اطلب حاسوبك الآن زدعنا نتولى بقية التفاصيل')

@section('content')

  <!--Products Section Start-->
  <section id="products" class="py-3 px-2">
    <h1 class="mb-5">الأجهزة المتوفرة</h1>
    <div class="container">
      <div class="row">
        <div class="col-12 mb-5">
          <form action="" method="GET" class="shadow px-2 py-3 row">
            <div class="col-12 col-md-auto pr-0 pl-0">
              <select id="category" name="cid"
              class="form-control form-control-sm d-inline-block w-auto mr-1 border-secondary mb-3">
                <option value="">الكل</option>  

                @forelse ($categories as $category)
                  <option value="{{ $category->id }}" {{ ($category->id == request('cid')) ? 'selected' : ''}}>{{ $category->name }}</option>    
                @empty

                @endforelse

              </select>
              <select id="price" name="p"
              class="form-control form-control-sm d-inline-block w-auto mr-1 border-secondary mb-3">
                <option value="high" {{ (request('p') == 'high') ? 'selected' : ''}}>الأعلى أولا</option>
                <option value="low" {{ (request('p') == 'low' || request('p') == '') ? 'selected' : ''}}>الأقل أولا</option>
              </select>
              <select id="time" name="t"
              class="form-control form-control-sm d-inline-block w-auto mr-1 border-secondary mb-3">
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
            <div class="col-auto pl-0 pr-2">
              <button type="submit" class="btn bg-primary text-light btn-sm"><i class="lni lni-control-panel"></i> تطبيق</button>
            </div>
          </form>
        </div>

        @forelse ($laptops as $laptop)

          <x-laptop-card :laptop="$laptop" role='user'/>

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