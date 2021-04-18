@extends('admin.layouts.layout')

@section('title', 'إدارة الطلبات')

@section('content')

  <div class="col-12">
    <h2>إدارة الطلبات</h2>
  </div>
  <div class="col-12 row justify-content-center text-center my-3">
    <div class="col-3">
      <h1>250</h1>
      <p><i class="lni lni-clipboard"></i> الطلبات</p>
    </div>
    <div class="col-3">
      <h1>100</h1>
      <p><i class="lni lni-checkmark-circle"></i> الطلبات المنجزة</p>
    </div>
    <div class="col-3">
      <h1>3</h1>
      <p><i class="lni lni-close"></i> الطلبات غير المنجزة</p>
    </div>
    <div class="col-3">
      <h1><bdi>s.p</bdi> 125000</h1>
      <p><i class="lni lni-dollar"></i> قيمة الطلبات</p>
    </div>
  </div>

  <div class="col-9 mt-4">
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
              <img src="../../assets/images/default-user.png" class="rounded-circle mr-2" width="30px" height="30px">
              <small>طارق الحلبي</small>
              <a href="users/show.html"><small><i class="lni lni-arrow-right-circle"></i></small></a>
            </td>
            <td>
              <img src="../../assets/images/laptop1.jpg" class="mr-2" width="30px" height="30px">
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
              <img src="../../assets/images/default-user.png" class="rounded-circle mr-2" width="30px" height="30px">
              <small>طارق الحلبي</small>
              <a href="users/show.html"><small><i class="lni lni-arrow-right-circle"></i></small></a>
            </td>
            <td>
              <img src="../../assets/images/laptop1.jpg" class="mr-2" width="30px" height="30px">
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

  <div class="col-9 mt-4">
    <h4 class="text-secondary mb-4">الطلبات المنجزة <span>(25)</span></h4>
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
          <tr>
            <th scope="row">1</th>
            <td>
              <img src="../../assets/images/default-user.png" class="rounded-circle mr-2" width="30px" height="30px">
              <small>طارق الحلبي</small>
              <a href="users/show.html"><small><i class="lni lni-arrow-right-circle"></i></small></a>
            </td>
            <td>
              <img src="../../assets/images/laptop1.jpg" class="mr-2" width="30px" height="30px">
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
          </tr>
          <tr>
            <th scope="row">1</th>
            <td>
              <img src="../../assets/images/default-user.png" class="rounded-circle mr-2" width="30px" height="30px">
              <small>طارق الحلبي</small>
              <a href="users/show.html"><small><i class="lni lni-arrow-right-circle"></i></small></a>
            </td>
            <td>
              <img src="../../assets/images/laptop1.jpg" class="mr-2" width="30px" height="30px">
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
          </tr>
        </tbody>
      </table>
    </div>
  </div>

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

@endsection