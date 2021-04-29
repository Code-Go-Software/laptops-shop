@extends('admin.layouts.layout')

@section('title', 'إدارة الطلبات')

@section('content')

  <div class="col-12">
    <h2>إدارة الطلبات</h2>
  </div>
  <div class="col-12 row justify-content-center text-center my-3">
    <div class="col-md-3 col-12 mb-2">
      <div class="card text-white bg-primary h-100">
        <div class="card-header">الطلبات</div>
        <div class="card-body">
          <h5 class="card-title"><i class="lni lni-clipboard"></i> {{ $completed_orders->count() + $uncompleted_orders->count() }}</h5>
          <small class="card-text">عدد الطلبات الكلي (المنجزة وغير المنجزة)</small>
        </div>
      </div>
    </div>
    <div class="col-md-3 col-12 mb-2">
      <div class="card text-white bg-success h-100">
        <div class="card-header">الطلبات المنجزة</div>
        <div class="card-body">
          <h5 class="card-title"><i class="lni lni-checkmark-circle"></i> {{ $completed_orders->count() }}</h5>
          <small class="card-text">عدد الطلبات التي تم إنجازها</small>
        </div>
      </div>
    </div>
    <div class="col-md-3 col-12 mb-2">
      <div class="card text-dark bg-warning h-100">
        <div class="card-header">الطلبات الغير منجزة</div>
        <div class="card-body">
          <h5 class="card-title"><i class="lni lni-close"></i> {{ $uncompleted_orders->count() }}</h5>
          <small class="card-text">عدد الطلبات التي لا زالت قيد المتابعة</small>
        </div>
      </div>
    </div>
    <div class="col-md-3 col-12 mb-2">
      <div class="card text-white bg-danger h-100">
        <div class="card-header">قيمة الطلبات المنجزة</div>
        <div class="card-body">
          <h5 class="card-title"><bdi>s.p</bdi> {{ $completed_orders->sum('total_price') }}</h5>
          <small class="card-text">القيمة المالية لجميع الطلبات التي تم إنجازها</small>
        </div>
      </div>
    </div>
  </div>

  <div class="col-12 mt-3">
    <h4 class="mb-4">الطلبات غير المنجزة <span>({{ $uncompleted_orders->count() }})</span></h4>
    <div class="table-responsive-sm bg-light">
      <table class="table table-sm">
        <thead class="bg-danger text-light">
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
        <tbody class="small">
          
          @forelse ($uncompleted_orders as $order)
            <tr>
              <th scope="row">{{ $loop->index + 1 }}</th>
              <td>
                <img src="{{ asset('images/' . $order->user->image) }}" class="rounded-circle mr-2" width="30px" height="30px">
                <span>{{ $order->user->fullname }}</span>
                <a href="admin/users/{{ $order->user->id }}"><i class="lni lni-arrow-right-circle"></i></a>
              </td>
              <td>

                @php
                    $laptops = $order->laptops;
                @endphp

                @foreach ($laptops as $laptop)
                  <img src="{{ asset('images/' . $laptop->image) }}" class="mr-2" width="30px" height="30px">
                  <span class="mr-1">{{ $laptop->name }}</span>
                  <a href="admin/laptops/{{ $laptop->id }}"><i class="lni lni-arrow-right-circle"></i></a>
                  <br>
                @endforeach

                
              </td>
              <td>
                {{ $order->contact_number }}
              </td>
              <td>
                <span class="text-danger font-weight-bold">
                  <bdi>s.p</bdi> {{ $order->total_price }}
                </span>
              </td>
              <td>{{ $order->created_at }}</td>
              <td>
                <a class="font-weight-bold text-info mr-2" href="/admin/orders/{{ $order->id }}"><i class="lni lni-menu"></i></a>
              </td>
              <td>
                <form action="/admin/orders/{{ $order->id }}" method="post">
                  @csrf
                  @method('put')

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
            <tr>
              <td colspan="8" class="text-secondary">
                لا يوجد طلبات غير منجزة
              </td>
            </tr>
          @endforelse

        </tbody>
      </table>
    </div>
  </div>

  <div class="col-12 mt-3">
    <h4 class="mb-4">الطلبات المنجزة <span>({{ $completed_orders->count() }})</span></h4>
    <!--
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
    -->
    <div class="table-responsive-sm bg-light">
      <table class="table table-sm">
        <thead class="bg-success text-light">
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
        <tbody class="small">
          
          @forelse ($completed_orders as $order)
            <tr>
              <th scope="row">{{ $loop->index + 1 }}</th>
              <td>
                <img src="{{ asset('images/' . $order->user->image) }}" class="rounded-circle mr-2" width="30px" height="30px">
                <span>{{ $order->user->fullname }}</span>
                <a href="admin/users/{{ $order->user->id }}"><i class="lni lni-arrow-right-circle"></i></a>
              </td>
              <td>

                @php
                    $laptops = $order->laptops;
                @endphp

                @foreach ($laptops as $laptop)
                  <img src="{{ asset('images/' . $laptop->image) }}" class="mr-2" width="30px" height="30px">
                  <span class="mr-1">{{ $laptop->name }}</span>
                  <a href="admin/laptops/{{ $laptop->id }}"><i class="lni lni-arrow-right-circle"></i></a>
                  <br>
                @endforeach

                
              </td>
              <td>
                {{ $order->contact_number }}
              </td>
              <td>
                <span class="text-danger font-weight-bold">
                  <bdi>s.p</bdi> {{ $order->total_price }}
                </span>
              </td>
              <td>{{ $order->created_at }}</td>
              <td>
                <a class="font-weight-bold text-info mr-2" href="/admin/orders/{{ $order->id }}"><i class="lni lni-menu"></i></a>
              </td>
              <td>
                <form action="/admin/orders/{{ $order->id }}" method="post">
                  @csrf
                  @method('put')

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
            <tr>
              <td colspan="8" class="text-secondary">
                لا يوجد أي طلبات منجزة حاليا
              </td>
            </tr>
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