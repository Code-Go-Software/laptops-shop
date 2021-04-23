@extends('admin.layouts.layout')

@section('title', 'إدارة الطلبات')

@section('content')

  <div class="col-12">
    <h2>إدارة الطلبات</h2>
  </div>
  <div class="col-12 row justify-content-center text-center my-3">
    <div class="col-3">
      <h1>{{ $completed_orders->count() + $uncompleted_orders->count() }}</h1>
      <p><i class="lni lni-clipboard"></i> الطلبات</p>
    </div>
    <div class="col-3">
      <h1>{{ $completed_orders->count() }}</h1>
      <p><i class="lni lni-checkmark-circle"></i> الطلبات المنجزة</p>
    </div>
    <div class="col-3">
      <h1>{{ $uncompleted_orders->count() }}</h1>
      <p><i class="lni lni-close"></i> الطلبات غير المنجزة</p>
    </div>
    <div class="col-3">
      <h1><bdi>s.p</bdi> {{ $completed_orders->sum('total_price') }}</h1>
      <p><i class="lni lni-dollar"></i> قيمة الطلبات المنجزة</p>
    </div>
  </div>

  <div class="col-9 mt-4">
    <h4 class="text-secondary mb-4">الطلبات غير المنجزة <span>({{ $uncompleted_orders->count() }})</span></h4>
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
                <img src="{{ asset('assets/images/default-user.png') }}" class="rounded-circle mr-2" width="30px" height="30px">
                <small>{{ $order->user->fullname }}</small>
                <a href="/admin/users/{{ $order->user->id }}"><small><i class="lni lni-arrow-right-circle"></i></small></a>
              </td>
              <td>

                @php
                    $laptops = $order->laptops;
                @endphp

                @foreach ($laptops as $laptop)
                  <img src="{{ asset('assets/images/laptop1.jpg') }}" class="mr-2" width="30px" height="30px">
                  <small class="mr-1">{{ $laptop->name }}</small>
                  <a href="/admin/laptops/{{ $laptop->id }}"><small><i class="lni lni-arrow-right-circle"></i></small></a>
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
                <a class="font-weight-bold text-info mr-2" href="/admin/orders/{{ $order->id }}"><i class="lni lni-menu"></i></a>
              </td>
              <td>
                <form action="/admin/orders/{{ $order->id }}" method="post">
                  @csrf
                  @method('put')
                  <button type="submit" class="btn p-0 font-weight-bold text-success">
                    <i class="lni lni-checkmark-circle"></i>
                  </button>
                </form>
              </td>
            </tr>
          @empty
              <div class="alert bg-secondary text-light">
                لا يوجد أي طلبات غير منجزة حاليا
              </div>
          @endforelse

        </tbody>
      </table>
    </div>
  </div>

  <div class="col-9 mt-4">
    <h4 class="text-secondary mb-4">الطلبات المنجزة <span>({{ $completed_orders->count() }})</span></h4>
    <form action="" class="row" method="get">
      <div class="form-group mr-3">
        <label for="sort">ترتيب حسب الزمن</label>
        <select class="form-control rounded-pill d-inline-block w-auto border-dark ml-2">
          <option value="0">الأحدث أولا</option>
          <option value="1">الأقدم أولا</option>
        </select>
      </div>
      <div class="form-group mr-3">
        <label for="sort">ترتيب حسب القيمة</label>
        <select class="form-control rounded-pill d-inline-block w-auto border-dark ml-2">
          <option value="0">الأعلى قيمة أولا</option>
          <option value="1">الأقل قيمة أولا</option>
        </select>
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary rounded-pill">تطبيق</button>
      </div>
    </form>
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
          </tr>
        </thead>
        <tbody>
          
          @forelse ($completed_orders as $order)
            <tr>
              <th scope="row">{{ $loop->index + 1 }}</th>
              <td>
                <img src="{{ asset('assets/images/default-user.png') }}" class="rounded-circle mr-2" width="30px" height="30px">
                <small>{{ $order->user->fullname }}</small>
                <a href="/admin/users/{{ $order->user->id }}"><small><i class="lni lni-arrow-right-circle"></i></small></a>
              </td>
              <td>

                @php
                    $laptops = $order->laptops;
                @endphp

                @foreach ($laptops as $laptop)
                  <img src="{{ asset('assets/images/laptop1.jpg') }}" class="mr-2" width="30px" height="30px">
                  <small class="mr-1">{{ $laptop->name }}</small>
                  <a href="/admin/laptops/{{ $laptop->id }}"><small><i class="lni lni-arrow-right-circle"></i></small></a>
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
                <a class="font-weight-bold text-info mr-2" href="/admin/orders/{{ $order->id }}"><i class="lni lni-menu"></i></a>
              </td>
              <td>
                <form action="/admin/orders/{{ $order->id }}" method="post">
                  @csrf
                  @method('put')
                  <button type="submit" class="btn p-0 font-weight-bold text-success">
                    <i class="lni lni-checkmark-circle"></i>
                  </button>
                </form>
              </td>
            </tr>
          @empty
              <div class="alert alert-danger">
                لا يوجد أي طلبات منجزة حاليا
              </div>
          @endforelse

        </tbody>
      </table>
    </div>
  </div>

  <!--
  <div class="col-9 mt-4">
    <h4 class="text-secondary mb-4">التقرير السنوي</h4>
    <form action="" class="row" method="get">
      <div class="form-group mr-3">
        <label for="sort">السنة</label>
        <select class="form-control rounded-pill d-inline-block w-auto border-dark ml-2">
          <option value="0">2020</option>
          <option value="1">2021</option>
        </select>
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary rounded-pill">تطبيق</button>
      </div>
    </form>
    <div class="table-responsive-sm" style="max-height: 200px;overflow-y: scroll;">
      <table class="table table-hover table-sm table-secondary">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th class="text-center" scope="col">الشهر</th>
            <th class="text-center" scope="col">عدد الطلبات</th>
            <th class="text-center" scope="col">قيمة الطلبات</th>
          </tr>
        </thead>
        <tbody class="text-center">
          <tr>
            <th scope="row">1</th>
            <td>1</td>
            <td>21</td>
            <td><b class="text-success"><bdi>s.p</bdi> 125000</b></td>
          </tr>
          <tr>
            <th scope="row">1</th>
            <td>1</td>
            <td>21</td>
            <td><b class="text-success"><bdi>s.p</bdi> 125000</b></td>
          </tr>
          <tr>
            <th scope="row">1</th>
            <td>1</td>
            <td>21</td>
            <td><b class="text-success"><bdi>s.p</bdi> 125000</b></td>
          </tr>
          <tr>
            <th scope="row">1</th>
            <td>1</td>
            <td>21</td>
            <td><b class="text-success"><bdi>s.p</bdi> 125000</b></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  -->

@endsection