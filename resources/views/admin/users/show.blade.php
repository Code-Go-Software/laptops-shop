@extends('admin.layouts.layout')

@section('title', 'عرض بيانات المستخدم')

@section('content')

  <div class="col-12 mb-3">
    <h2>إدارة المستخدمين > عرض بيانات المستخدم</h2>
  </div>
  <div class="col-md-6 col-12">
    <h4><i class="lni lni-postcard mr-2 mb-2"></i> بيانات المستخدم</h4>
    <img src="{{ asset('images/' . $user->image) }}" class="rounded-circle mr-2" width="100px" height="100px">
    <p><i class="lni lni-user mr-2"></i> الاسم الكامل</p>
    <p class="text-secondary">{{ $user->fullname }}</p>
    <p><i class="lni lni-envelope mr-2"></i> البريد الإلكترني</p>
    <p class="text-secondary">{{ $user->email }}</p>
    <p><i class="lni lni-phone mr-2"></i> رقم الهاتف</p>
    <p class="text-secondary">{{ $user->phone }}</p>
    <p><i class="lni lni-map mr-2"></i> العنوان</p>
    <p class="text-secondary">{{ $user->address }}</p>
    <h4><i class="lni lni-star-filled mr-2 mb-3 mt-3"></i> القائمة المفضلة</h4>
    <div class="pr-4">
      
      @forelse ($user->favourites as $favourite)

        @php
            $laptop = $favourite->laptop;
        @endphp

        <div class="item row align-items-center shadow py-2 px-1 mb-2">
          <div class="col-3">
            <img src="{{ asset('images/' . $laptop->image) }}" class="img-fluid">
          </div>
          <div class="col-7">
            <p class="font-weight-bold mb-1">
              <a href="/admin/laptops/{{ $laptop->id }}" class="text-dark">{{ $laptop->name }}</a>
            </p>
            <div>
              <span class="badge badge-secondary rounded-pill">
                <i class="lni lni-calendar"></i> 
                <span>{{ $favourite->created_at }}</span>
              </span>
            </div>
            <span class="text-success font-weight-bold"><bdi>s.p</bdi> {{ $laptop->afterDiscountPrice() }}</span>
            <strike class="text-secondary"><small><bdi>s.p</bdi> {{ $laptop->beforeDiscountPrice() }}</small></strike>
          </div>
        </div>
      @empty
          
      @endforelse

    </div>
  </div>
  <div class="col-md-6 col-12">

    @php
        $orders = $user->orders;
    @endphp

    <h4><i class="lni lni-clipboard mr-2 mb-3"></i> طلبات المستخدم <span>({{ $orders->count() }})</span></h4>
    
    @forelse ($orders as $order)
      <div class="item row align-items-center shadow py-2 px-1 mb-2 bg-light">
        <div class="col-12">
          <span class="badge badge-secondary rounded-pill">
            <i class="lni lni-calendar"></i> 
            <span>{{ $order->created_at }}</span>
          </span>

          @if ($order->status)
            <span class="badge badge-success rounded-pill float-left">
              <i class="lni lni-checkmark-circle"></i> 
              <span>منجز</span>
            </span>
          @else
            <span class="badge badge-danger rounded-pill float-left">
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
                  <span class="text-success font-weight-bold"><bdi>s.p</bdi> </span>
                </div>
              </div>
            @endforeach

          </div>
          <b>قيمة الطلب</b>
          <h3 class="d-inline-block text-danger"><bdi>s.p</bdi> {{ $order->total_price }}</h3>
        </div>
      </div>
    @empty
        <div class="alert bg-secondary text-light">
          لا يوجد أي طلبات حتى الآن
        </div>
    @endforelse

  </div>

@endsection