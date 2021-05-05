@extends('admin.layouts.layout')

@section('title', 'الصفحة الرئيسية')

@section('content')
    
  <div class="col-12">
    <h2>لوحة التحكم</h2>
  </div>
  <div class="col-12 row justify-content-center text-center my-3">
    <div class="col-md-3 col-12 mb-2">
      <div class="card text-white bg-primary h-100">
        <div class="card-header">الحواسيب المعروضة</div>
        <div class="card-body">
          <h5 class="card-title"><i class="lni lni-display-alt"></i> {{ $all_laptops }}</h5>
          <small class="card-text">عدد الحواسيب المعروضة للبيع على المتجر</small>
        </div>
      </div>
    </div>
    <div class="col-md-3 col-12 mb-2">
      <div class="card text-white bg-success h-100">
        <div class="card-header">المستخدمون</div>
        <div class="card-body">
          <h5 class="card-title"><i class="lni lni-user"></i> {{ $all_users }}</h5>
          <small class="card-text">عدد المستخدمين المسجلين في المتجر</small>
        </div>
      </div>
    </div>
    <div class="col-md-3 col-12 mb-2">
      <div class="card text-dark bg-warning h-100">
        <div class="card-header">المشاهدات الكلية</div>
        <div class="card-body">
          <h5 class="card-title"><i class="lni lni-eye"></i> {{ $all_views }}</h5>
          <small class="card-text">عدد المشاهدات الكلية لجميع الحواسيب</small>
        </div>
      </div>
    </div>
    <div class="col-md-3 col-12 mb-2">
      <div class="card text-white bg-danger h-100">
        <div class="card-header">الطلبات</div>
        <div class="card-body">
          <h5 class="card-title"><i class="lni lni-clipboard"></i> {{ $all_orders }}</h5>
          <small class="card-text">عدد الطلبات المنجزة ضمن المتجر</small>
        </div>
      </div>
    </div>
  </div>

  <div class="col-12 my-5">
    <h4>الطلبات غير المنجزة <span>({{ $uncompleted_orders_count }})</span></h4>
    <p class="text-secondary small">قائمة بالطلبات التي سجلها المستخدمون وتحتاج إلى متابعة من مدير الموقع</p>
    <div class="table-responsive-sm bg-light mt-4">
      <table class="table table-sm rounded">
        <thead class="bg-primary text-light rounded">
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
        <tbody class="text-primary">
          
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
      <a href="/admin/orders" class="small">عرض جميع الطلبات</a>
    </div>
  </div>

  <div class="col-12 col-md-6 my-5">
    <h4>تقرير الطلبات</h4>
    <p class="text-secondary small">تقرير مبسط عن إحصائيات الكلبات</p>
    <div class="table-responsive-sm bg-light mt-4">
      <table class="table table-sm bg-warning">
        <tbody class="text-primary font-weight-bold">
          <tr>
            <td>الطلبات المنجزة</td>
            <td><b class="text-success">{{ $completed_orders_count }}</b></td>
          </tr>
          <tr>
            <td>الطلبات غير المنجزة</td>
            <td><b class="text-danger">{{ $uncompleted_orders_count }}</b></td>
          </tr>
          <tr>
            <td>قيمة الطلبات</td>
            <td><b class="text-primary"><bdi>s.p</bdi> {{ $orders_value }}</b></td>
          </tr>
          <!--
          <tr>
            <td><small class="font-weight-bold">تاريخ إخر طلب</small></td>
            <td><b class="text-secondary">21-2-2021 11:56</b></td>
          </tr>
          -->
        </tbody>
      </table>
      <a href="/admin/orders" class="small">عرض تقرير كامل عن الطلبات</a>
    </div>
  </div>

  <div class="col-12 col-md-6 my-5">
    <h4>تقرير المفضلة</h4>
    <p class="text-secondary small">قائمة خاصة بجميع الحواسيب التي وضعها المستخدمون ضمن قائمتهم المفضلة</p>
    <div class="table-responsive-sm bg-light mt-4">
      <table class="table table-sm">
        <thead class="bg-danger text-light">
          <tr>
            <th scope="col">#</th>
            <th scope="col">المستخدم</th>
            <th scope="col">المنتج</th>
            <th scope="col">تاريخ الإضاقة</th>
          </tr>
        </thead>
        <tbody class="text-primary">
          
          @forelse ($favourites as $favourite)
            <tr>
              <th scope="row">{{ $loop->index + 1 }}</th>
              <td>
                <img src="{{ asset('images/' . $favourite->user->image) }}" class="rounded-circle mr-2" width="30px" height="30px">
                <span>{{ $favourite->user->fullname }}</span>
                <a href="admin/users/{{ $favourite->user->id }}"><i class="lni lni-arrow-right-circle"></i></a>
              </td>
              <td>
                <img src="{{ asset('images/' . $favourite->laptop->image) }}" class="mr-2" width="30px" height="30px">
                <span class="mr-1">{{ $favourite->laptop->name }}</span>
                <a href="admin/laptops/{{ $favourite->laptop->id }}"><i class="lni lni-arrow-right-circle"></i></a>
              </td>
              <td>
                {{ $favourite->created_at }}
              </td>
            </tr>
          @empty
            <tr>
              <td colspan="4" class="text-secondary">
                لا يوجد أي حواسيب مفضلة حاليا
              </td>
            </tr>
          @endforelse

        </tbody>
      </table>
    </div>
  </div>

  <div class="col-12 my-5">
    <h4>تقرير الفئات</h4>
    <p class="text-secondary small">تقرير فئات أو أقسام الحواسيب الموجودة في المتجر</p>
    <div class="table-responsive-sm bg-light mt-4">
      <table class="table table-sm">
        <thead class="bg-success text-light">
          <tr>
            <th scope="col">#</th>
            <th scope="col">الفئة</th>
            <th scope="col">عدد المنتجات</th>
            <th scope="col">عدد الزيارات</th>
            <th scope="col"></th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody class="text-primary">
          
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
                <form action="/admin/categories/{{ $category->id }}" method="post">
                  @csrf
                  @method('delete')
                  <button type="submit" class="btn p-0 delete-btn"><i class="lni lni-trash text-danger"></i></button>
                </form>
              </td>
              <td>
                <a href="/admin/categories/{{ $category->id }}/edit"><i class="lni lni-pencil btn text-primary p-0"></i></a>
              </td>
            </tr>
          @empty
            <tr>
              <td colspan="5" class="text-secondary">
                لا يوجد أي فئات حاليا
              </td>
            </tr>
          @endforelse

        </tbody>
      </table>
      <a href="/admin/categories" class="small">عرض جميع الفئات</a>
    </div>
  </div>
            
@endsection