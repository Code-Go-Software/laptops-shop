@extends('admin.layouts.layout')

@section('title', 'الصفحة الرئيسية')

@section('content')
    
  <div class="col-12">
    <h2>لوحة التحكم</h2>
  </div>
  <div class="col-12 row justify-content-center text-center my-3">
    <div class="col-3">
      <h1>250</h1>
      <p><i class="lni lni-display-alt h1"></i> الأجهزة المتوفرة</p>
    </div>
    <div class="col-3">
      <h1>100</h1>
      <p><i class="lni lni-user"></i> المستخدمون</p>
    </div>
    <div class="col-3">
      <h1>1500</h1>
      <p><i class="lni lni-eye"></i> المشاهدات الكلية</p>
    </div>
    <div class="col-3">
      <h1>15</h1>
      <p><i class="lni lni-clipboard"></i> الطلبات الكلية</p>
    </div>
  </div>

  <div class="col-9">
    <h4 class="text-secondary mb-4">الطلبات غير المنجزة <span>(5)</span></h4>
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
          <tr>
            <th scope="row">1</th>
            <td>
              <img src="../assets/images/default-user.png" class="rounded-circle mr-2" width="30px" height="30px">
              <small>طارق الحلبي</small>
              <a href="users/show.html"><small><i class="lni lni-arrow-right-circle"></i></small></a>
            </td>
            <td>
              <img src="../assets/images/laptop1.jpg" class="mr-2" width="30px" height="30px">
              <small class="mr-1">Asus Corei4-250 LS454332</small>
              <a href="laptops/show.html"><small><i class="lni lni-arrow-right-circle"></i></small></a>
              <br>
            </td>
            <td>
              <small>0946918650</small>
            </td>
            <td>
              <small class="text-danger font-weight-bold">
                <bdi>s.p</bdi> 125000
              </small>
            </td>
            <td><small>16-3-2021 12:59</small></td>
            <td>
              <a class="font-weight-bold text-info mr-2" href="orders/show.html"><i class="lni lni-menu"></i></a>
            </td>
            <td>
              <a class="font-weight-bold text-success" href="orders/show.html"><i class="lni lni-checkmark-circle"></i></a>
            </td>
          </tr>
          <tr>
            <th scope="row">1</th>
            <td>
              <img src="../assets/images/default-user.png" class="rounded-circle mr-2" width="30px" height="30px">
              <small>طارق الحلبي</small>
              <a href="users/show.html"><small><i class="lni lni-arrow-right-circle"></i></small></a>
            </td>
            <td>
              <img src="../assets/images/laptop1.jpg" class="mr-2" width="30px" height="30px">
              <small class="mr-1">Asus Corei4-250 LS454332</small>
              <a href="laptops/show.html"><small><i class="lni lni-arrow-right-circle"></i></small></a>
              <br>
            </td>
            <td>
              <small>0946918650</small>
            </td>
            <td>
              <small class="text-danger font-weight-bold">
                <bdi>s.p</bdi> 125000
              </small>
            </td>
            <td><small>16-3-2021 12:59</small></td>
            <td>
              <a class="font-weight-bold text-info" href="orders/show.html"><i class="lni lni-menu"></i></a>
            </td>
            <td>
              <a class="font-weight-bold text-success" href="orders/show.html"><i class="lni lni-checkmark-circle"></i></a>
            </td>
          </tr>
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
            <td><b class="text-success">25</b></td>
          </tr>
          <tr>
            <td><small class="font-weight-bold">الطلبات غير المنجزة</small></td>
            <td><b class="text-danger">2</b></td>
          </tr>
          <tr>
            <td><small class="font-weight-bold">قيمة الطلبات</small></td>
            <td><b class="text-primary"><b><bdi>s.p</bdi> 125000</b></b></td>
          </tr>
          <tr>
            <td><small class="font-weight-bold">تاريخ إخر طلب</small></td>
            <td><b class="text-secondary">21-2-2021 11:56</b></td>
          </tr>
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
          <tr>
            <th scope="row">1</th>
            <td>
              <span>طارق الحلبي</span>
            </td>
            <td>
              <b><i class="lni lni-display-alt"></i> 25</b>
            </td>
            <td>
              <b><i class="lni lni-eye"></i> 105</b>
            </td>
            <td>
              <a class="font-weight-bold text-info mr-2" href="orders/show.html"><i class="lni lni-menu"></i></a>
            </td>
          </tr>
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
          <tr>
            <th scope="row">1</th>
            <td>
              <img src="../assets/images/default-user.png" class="rounded-circle mr-2" width="30px" height="30px">
              <small>طارق الحلبي</small>
              <a href="users/show.html"><small><i class="lni lni-arrow-right-circle"></i></small></a>
            </td>
            <td>
              <img src="../assets/images/laptop1.jpg" class="mr-2" width="30px" height="30px">
              <small class="mr-1">Asus Corei4-250 LS454332</small>
              <a href="laptops/show.html"><small><i class="lni lni-arrow-right-circle"></i></small></a>
            </td>
            <td>
              <b><small>16-3-2021 12:59</small></b>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
            
@endsection