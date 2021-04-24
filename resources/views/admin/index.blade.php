@extends('admin.layouts.layout')

@section('title', 'الصفحة الرئيسية')

@section('content')
    
  <div class="col-12">
    <h2>لوحة التحكم</h2>
  </div>
  <div class="col-12 row justify-content-center text-center my-3">
    <div class="col-3">
      <h1>{{ $all_laptops }}</h1>
      <p><i class="lni lni-display-alt h1"></i> الأجهزة المتوفرة</p>
    </div>
    <div class="col-3">
      <h1>{{ $all_users }}</h1>
      <p><i class="lni lni-user"></i> المستخدمون</p>
    </div>
    <div class="col-3">
      <h1>{{ $all_views }}</h1>
      <p><i class="lni lni-eye"></i> المشاهدات الكلية</p>
    </div>
    <div class="col-3">
      <h1>{{ $all_orders }}</h1>
      <p><i class="lni lni-clipboard"></i> الطلبات الكلية</p>
    </div>
  </div>

  <div class="col-9">
    <h4 class="text-secondary mb-4">الطلبات غير المنجزة <span>({{ $uncompleted_orders_count }})</span></h4>
    <div class="table-responsive-sm">
      <table class="table table-striped mt-2 table-sm table-hover table-secondary">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">المستخدم</th>
            <th scope="col">المنتجات المطلوبة</th>
            <th scope="col">رقم التواصل</th>
            <th scope="col">قيمة الطلب</th>
            <th scope="col">تاريخ الطلب</th>
            <th scope="col"></th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
          
          @forelse ($uncompleted_orders as $order)
            <tr>
              <th scope="row">{{ $loop->index + 1 }}</th>
              <td>
                <img src="{{ asset('images/' . $order->user->image) }}" class="rounded-circle mr-2" width="30px" height="30px">
                <small>{{ $order->user->fullname }}</small>
                <a href="admin/users/{{ $order->user->id }}"><small><i class="lni lni-arrow-right-circle"></i></small></a>
              </td>
              <td>

                @php
                    $laptops = $order->laptops;
                @endphp

                @foreach ($laptops as $laptop)
                  <img src="{{ asset('images/' . $laptop->image) }}" class="mr-2" width="30px" height="30px">
                  <small class="mr-1">{{ $laptop->name }}</small>
                  <a href="admin/laptops/{{ $laptop->id }}"><small><i class="lni lni-arrow-right-circle"></i></small></a>
                  <br>
                @endforeach

                
              </td>
              <td>
                <small>{{ $order->contact_number }}</small>
              </td>
              <td>
                <small class="text-danger font-weight-bold">
                  <bdi>s.p</bdi> {{ $order->total_price }}
                </small>
              </td>
              <td><small>{{ $order->created_at }}</small></td>
              <td>
                <a class="font-weight-bold text-info mr-2" href="admin/orders/{{ $order->id }}"><i class="lni lni-menu"></i></a>
              </td>
              <td>
                <form action="/orders" method="post">
                  @csrf
                  @method('put')
                  <input type="hidden" name="order_id" value="{{ $order->id }}">

                  @if ($order->status)
                    <button type="submit" class="btn p-0 text-danger">
                      <i class="lni lni-close"></i>
                    </button>
                  @else
                    <button type="submit" class="btn p-0 text-success">
                      <i class="lni lni-checkmark-circle"></i>
                    </button>
                  @endif

                </form>
              </td>
            </tr>
          @empty
            <div class="alert bg-secondary text-light">
              لا يوجد طلبات غير منجزة
            </div>
          @endforelse

        </tbody>
      </table>
    </div>
  </div>

  <div class="col-3">
    <h4 class="text-secondary mb-4">تقرير الطلبات</h4>
    <div class="table-responsive-sm">
      <table class="table table-hover table-sm">
        <tbody>
          <tr>
            <td><small class="font-weight-bold">الطلبات المنجزة</small></td>
            <td><b class="text-success">{{ $completed_orders_count }}</b></td>
          </tr>
          <tr>
            <td><small class="font-weight-bold">الطلبات غير المنجزة</small></td>
            <td><b class="text-danger">{{ $uncompleted_orders_count }}</b></td>
          </tr>
          <tr>
            <td><small class="font-weight-bold">قيمة الطلبات</small></td>
            <td><b class="text-primary"><b><bdi>s.p</bdi> {{ $orders_value }}</b></b></td>
          </tr>
          <!--
          <tr>
            <td><small class="font-weight-bold">تاريخ إخر طلب</small></td>
            <td><b class="text-secondary">21-2-2021 11:56</b></td>
          </tr>
          -->
        </tbody>
      </table>
    </div>
  </div>

  <div class="col-6">
    <h4 class="text-secondary mb-4">تقرير الفئات</h4>
    <div class="table-responsive-sm">
      <table class="table table-striped mt-2 table-sm table-hover">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">الفئة</th>
            <th scope="col">عدد المنتجات</th>
            <th scope="col">عدد الزيارات</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
          
          @forelse ($categories as $category)
            <tr>
              <th scope="row">{{ $loop->index + 1 }}</th>
              <td>
                <span>{{ $category->name }}</span>
              </td>
              <td>
                <b><i class="lni lni-display-alt"></i> {{ $category->laptops->count() }}</b>
              </td>
              <td>
                <b><i class="lni lni-eye"></i> {{ $category->laptops->sum('views') }}</b>
              </td>
              <td>
                <a class="font-weight-bold text-info mr-2" href="/admin/categories"><i class="lni lni-menu"></i></a>
              </td>
            </tr>
          @empty
            <div class="alert bg-secondary text-light">
              لا يوجد أي فئات حاليا
            </div>
          @endforelse

        </tbody>
      </table>
    </div>
  </div>

  <div class="col-6">
    <h4 class="text-secondary mb-4">تقرير المفضلة</h4>
    <div class="table-responsive-sm">
      <table class="table table-striped mt-2 table-sm table-hover">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">المستخدم</th>
            <th scope="col">المنتج</th>
            <th scope="col">تاريخ الإضاقة</th>
          </tr>
        </thead>
        <tbody>
          
          @forelse ($favourites as $favourite)
            <tr>
              <th scope="row">{{ $loop->index + 1 }}</th>
              <td>
                <img src="{{ asset('images/' . $favourite->user->image) }}" class="rounded-circle mr-2" width="30px" height="30px">
                <small>{{ $favourite->user->fullname }}</small>
                <a href="admin/users/{{ $favourite->user->id }}"><small><i class="lni lni-arrow-right-circle"></i></small></a>
              </td>
              <td>
                <img src="{{ asset('images/' . $favourite->laptop->image) }}" class="mr-2" width="30px" height="30px">
                <small class="mr-1">{{ $favourite->laptop->name }}</small>
                <a href="admin/laptops/{{ $favourite->laptop->id }}"><small><i class="lni lni-arrow-right-circle"></i></small></a>
              </td>
              <td>
                <b><small>{{ $favourite->created_at }}</small></b>
              </td>
            </tr>
          @empty
            <div class="alert bg-secondary text-light">
              لا يوجد أي حواسيب مفضلة حاليا
            </div>
          @endforelse

        </tbody>
      </table>
    </div>
  </div>
            
@endsection