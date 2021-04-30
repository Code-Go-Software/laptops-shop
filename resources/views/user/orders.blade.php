@extends('user.layouts.layout')

@section('title', 'الطلبات')

@section('content')

  <section id="favourites" class="py-3 px-2 mt-3">
    <h1 class="mb-4">قائمة الطلبات</h1>
    <div class="container-fluid">
  
      <div class="row justify-content-center">
        <div class="col-12 col-md-8 col-lg-6">

          @forelse ($orders as $order)
              
            <div class="item row align-items-center shadow py-2 px-1 mb-2">
              <div class="col-12">
                <span class="badge bg-secondary text-light rounded-pill">
                  <i class="lni lni-calendar"></i> 
                  <span>{{ $order->created_at }}</span>
                </span>

                @if ($order->status)
                  <span class="badge bg-success text-light rounded-pill float-left">
                    <i class="lni lni-checkmark-circle"></i> 
                    <span>منجز</span>
                  </span>
                @else
                  <span class="badge bg-danger text-light rounded-pill float-left">
                    <i class="lni lni-close"></i> 
                    <span>قيد المتابعة</span>
                  </span>
                @endif

              </div>
              <div class="col-12 mt-2">
                <p>المنتجات المطلوبة</p>
                <div class="products row mb-3">

                  @php
                      $laptops = $order->laptops;
                  @endphp

                  @foreach ($laptops as $laptop)
                    <div class="col-12 row mb-3">
                      <div class="col-3">
                        <img src="{{ asset('images/' . $laptop->image) }}" class="img-fluid">
                      </div>
                      <div class="col-9">
                        <p class="font-weight-bold mb-1">
                          <a href="laptops/{{ $laptop->id }}/{{ $laptop->name }}" class="text-dark">{{ $laptop->name }}</a>
                        </p>
                        <small>السعر عند الطلب</small>
                        <span class="text-success font-weight-bold"><bdi>s.p</bdi> {{ $laptop->pivot->price }}</span>
                      </div>
                    </div>
                  @endforeach

                </div>
                <b>قيمة الطلب</b>
                <h3 class="d-inline-block text-danger"><bdi>s.p</bdi> {{ $order->total_price }}</h3>
              </div>
            </div>

          @empty

            @auth
              <div class="alert alert-secondary">لم تقم بطلب أي شيء حتى الآن</div>
            @endauth

            @guest
              <div class="alert alert-secondary mt-5 mb-5">
                قم بإنشاء حسابك لدينا واطلب من متجرنا كما تريد
                <a href="/register">إنشاء حساب</a>
              </div>
            @endguest
              
          @endforelse

        </div>
      </div>

    </div>
  </section>

@endsection