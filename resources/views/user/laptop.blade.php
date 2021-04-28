@extends('user.layouts.layout')

@section('title', $laptop->name)

@section('content')
  
<section id="product" class="py-3 px-2 mt-3">
  <div class="container-fluid">
    <div class="text-center">
      <img src="{{ asset('images/' . $laptop->image) }}" class="img-fluid" id="main-image">
    </div>
    <div class="thumbs d-flex justify-content-center align-items-center">

      @forelse ($laptop->subImages as $image)
        <div class="col text-center">
          <img src="{{ asset('images/' . $image->image) }}" onclick="swapImage(this, '#main-image')" class="img-fluid rounded-circle shadow" style="max-width: 150px;">
        </div>
      @empty
          <div class="col-12 text-center">
            لا يوجد أي صور فرعية لهذا الحاسوب
          </div>
      @endforelse
      
    </div>
    <div class="text-center mt-3">
      <h1 class="text-primary">{{ $laptop->name }}</h1>
      <h2 class="mb-3">
        <span class="text-danger font-weight-bold"><bdi>s.p</bdi> {{ $laptop->afterDiscountPrice() }}</span>
        <strike class="text-secondary h4"><small><bdi>s.p</bdi> {{ $laptop->beforeDiscountPrice() }}</small></strike>
      </h2>
      <form action="/cart" method="post" class="d-inline">
        @csrf
        <input type="hidden" name="laptop_id" value="{{ $laptop->id }}">
        <button class="btn rounded-pill btn-success" type="submit">
          <i class="lni lni-cart"></i> 
          إضافة إلى السلة
        </button>
      </form>
      <form action="/favourites" method="post" class="d-inline">
        @csrf
        <input type="hidden" name="laptop_id" value="{{ $laptop->id }}">
        <button class="btn rounded-pill btn-outline-danger">
          <i class="lni lni-heart"></i> 
          إضافة إلى المفضلة
        </button>
      </form>
    </div>
    <div class="text-center mt-3">
      <span class="badge badge-primary rounded-pill">
        <i class="lni lni-tag"></i> {{ $laptop->category->name }}
      </span>
      <span class="badge badge-warning rounded-pill">
        <i class="lni lni-eye"></i> {{ $laptop->views }}
      </span>
    </div>
    <div class="row justify-content-center mt-3">
      <div class="col-6 col-md-4 col-lg-3">
        <div><b>اسم المنتج</b></div>
        <span class="text-secondary">{{ $laptop->name }}</span>
        <div><b>الشركة المصنعة</b></div>
        <span class="text-secondary">{{ $laptop->company }}</span>
        <div><b>المعالج</b></div>
        <span class="text-secondary">{{ $laptop->cpu }}</span>
        <div><b>الرامات</b></div>
        <span class="text-secondary">{{ $laptop->ram }}</span>
        <div><b>كرت الشاشة</b></div>
        <span class="text-secondary">{{ $laptop->screen_card }}</span>
        <div><b>نوع كرت الشاشة</b></div>
        <span class="text-secondary">{{ $laptop->screen_card_type }}</span>
      </div>
      <div class="col-6 col-md-4 col-lg-3">
        <div><b>قياس الشاشة</b></div>
        <span class="text-secondary">{{ $laptop->screen_size }}</span>
        <div><b>السواقة</b></div>
        <span class="text-secondary">{{ $laptop->cd_driver }}</span>
        <div><b>البطارية</b></div>
        <span class="text-secondary">{{ $laptop->battery }}</span>
        <div><b>المداخل</b></div>
        <span class="text-secondary">{{ $laptop->ports }}</span>
        <div><b>الهارد</b></div>
        <span class="text-secondary">{{ $laptop->hard }}</span>
        <div><b>تفاصيل</b></div>
        <span class="text-secondary">{{ $laptop->description }}</span>
      </div>
    </div>
  </div>
</section>

  <!--Related Products Start-->
  <section id="products" class="py-3 px-2">
    <h1 class="mb-5">الأجهزة المشابهة</h1>
    <div class="container-fluid">
      <div class="row">

        @forelse ($related_laptops as $laptop)

          <x-laptop-card :laptop="$laptop" role='user'/>

        @empty
            <div class="alert alert-secondary text-center">عذرا لا يوجد أي حواسيب مشابهة</div>
        @endforelse

      </div>
      <div class="text-center mt-3">
        <a href="/laptops" class="btn btn-primary rounded-pill">عرض جميع الحواسيب</a>
      </div>
    </div>
  </section>
  <!--Related Products End-->

@endsection