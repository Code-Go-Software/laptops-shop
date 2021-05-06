@extends('user.layouts.layout')

@section('title', 'اسم الشركة لتجارة جميع أنواع اللابتوبات | تسوق الآن')
@section('description', 'تسوق الآن في أفضل المتاجر الإلكترونية لبيع جميع أنواع اللابتوبات بمختلف المواصفات لتلبية جميع احتياجات المستخدمين وبأفضل الأسعار مع خدمات الشحن والتوصيل المجاني')

@section('content')

  <!--Carousel Start-->
  <section id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="{{ asset('images/' . $content->where('key', 'slide1')->first()->value) }}" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="{{ asset('images/' . $content->where('key', 'slide2')->first()->value) }}" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="{{ asset('images/' . $content->where('key', 'slide3')->first()->value) }}" alt="Third slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <button class="btn bg-light text-dark">
        <i class="lni lni-chevron-left" aria-hidden="true"></i>
        <span class="sr-only">Previous</span>
      </button>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <button class="btn bg-light text-dark">
        <i class="lni lni-chevron-right" aria-hidden="true"></i>
        <span class="sr-only">Next</span>
      </button>
    </a>
  </section>
  <!--Carousel End-->

  <div class="scrollmenu list-unstyled text-center">
    @forelse ($all_categories as $category)
      <a class="text-primary" href="/laptops?cid={{ $category->id }}">{{ $category->name }}</a>
    @empty
        
    @endforelse
    <a class="text-primary" href="/laptops">جميع الفئات</a>
  </div>

  @forelse ($categories as $category)
      
    <section id="new-products" class="py-3 px-2">
      <h1 class="text-primary" style="font-size: 45px;">{{ $category->name }}</h1>
      <p class="text-info h5 mb-5">{{ $category->description }}</p>
      <div class="container">
        <div class="row">

          @php
              $laptops = $category->laptops->where('is_available', true);
          @endphp
            
          @foreach ($laptops as $laptop)

            <x-laptop-card :laptop="$laptop" role='user'/>
              
          @endforeach

          <div class="col-12 text-center mt-3">
            <a href="/laptops?cid={{ $category->id }}" class="btn bg-primary text-light">عرض المزيد</a>
          </div>
        </div>
      </div>
    </section>
  @empty
      <div class="alert alert-secondary text-center">عذرا لا يتوفر أي حواسيب حاليا</div>
  @endforelse

@endsection

  