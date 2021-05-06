@extends('admin.layouts.layout')

@section('title', 'عرض تفاصيل الطلب')

@section('content')

  <div class="col-12">
    <h2>إدارة الطلبات > عرض تفاصيل الطلب</h2>
  </div>

  <div class="col-12 my-5">
    <div class="row justify-content-center">
      
      <div class="col-12 col-md-8">
        <div class="item row align-items-center shadow py-2 px-1 mb-2 bg-light">
          <div class="col-12 text-center">
            <img src="{{ asset('images/' . $order->user->image) }}" class="img-fluid rounded-circle" width="150px" height="150px">
            <p class="mt-2 mb-4">
              <span class="h4">{{ $order->user->fullname }}</span>
              <a href="/admin/users/{{ $order->user->id }}"><i class="lni lni-arrow-right-circle"></i></a>
            </p>
          </div>

          <div class="col-12 text-center mb-5">
            <form action="/admin/orders/{{ $order->id }}" method="post">
              @csrf
              @method('put')

              @if ($order->status)
                <button type="submit" class="btn bg-danger text-light">
                  <i class="lni lni-close ml-2"></i> 
                  تعيين الطلب كغير منجز
                </button>
              @else
                <button type="submit" class="btn bg-success text-light">
                  <i class="lni lni-checkmark-circle ml-2"></i> 
                  إنجاز الطلب
                </button>
              @endif

            </form>
          </div>

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
                      <a href="/admin/laptops/{{ $laptop->id }}" class="text-dark">{{ $laptop->name }}</a>
                    </p>
                    <small>السعر عند الطلب</small>
                    <span class="text-success font-weight-bold"><bdi>s.p</bdi> {{ $laptop->pivot->price }}</span>
                  </div>
                </div>
              @endforeach

            </div>
            <p class="mb-1 text-secondary">تاريخ إنجاز الطلب: {{ $order->updated_at }}</p>
            <b>قيمة الطلب</b>
            <h3 class="d-inline-block text-danger"><bdi>s.p</bdi> {{ $order->total_price }}</h3>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection