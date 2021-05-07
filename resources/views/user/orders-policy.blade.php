@extends('user.layouts.layout')

@section('title', 'اسم الشركة لتجارة جميع أنواع اللابتوبات | سياسة التعامل مع الطلبات')
@section('description', 'شركة رائدة في تجارة جميع أنواع الحواسيب المحمولة الجديدة والمستعملة بأفضل الأسعار كما تقدم الشركة خدمات التسوق والطلب الإلكتروني بالإضافة إلى الشحن والتوصيل المجاني ما الذي تنتظره اجلب حاسوبك الآن')

@section('content')
    
  <section id="about-us" class="py-3 px-2 mt-3">
    <h1 class="mb-4 text-primary">سياسة التعامل مع الطلبات</h1>
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-12 col-md-8 col-lg-6 my-5">
          <p class="h4">{{ $content->where('key', 'orders_policy')->first()->value }}</p>
          <br><br>
        </div>
      </div>
    </div>
  </section>

@endsection
