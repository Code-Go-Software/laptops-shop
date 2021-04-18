@extends('admin.layouts.layout')

@section('title', 'إدارة الفئات')

@section('content')

  <div class="col-12">
    <h2>إدارة الفئات</h2>
  </div>
  <div class="col-12">
    <form action="" class="row mt-4 mb-4" method="get">
      <div class="form-group mr-3">
        <label for="sort">ترتيب حسب الزمن</label>
        <select class="form-control rounded-pill d-inline-block w-auto border-dark ml-2">
          <option value="0">الأحدث أولا</option>
          <option value="1">الأقدم أولا</option>
        </select>
      </div>
      <div class="form-group mr-3">
        <label for="sort">ترتيب حسب المشاهدات</label>
        <select class="form-control rounded-pill d-inline-block w-auto border-dark ml-2">
          <option value="0">الأعلى مشاهدة أولا</option>
          <option value="1">الأقل مشاهدة أولا</option>
        </select>
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary rounded-pill">تطبيق</button>
      </div>
    </form>
  </div>
  <div class="col-12">
    <h4 class="text-secondary mb-4">الفئات <span>(25)</span></h4>
    <div class="table-responsive-sm">
      <table class="table table-striped mt-2 table-sm table-hover">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">اسم الفئة</th>
            <th scope="col">الوصف</th>
            <th scope="col">عدد الحواسيب</th>
            <th scope="col">عدد المشاهدات</th>
            <th scope="col">ناريخ الإنشاء</th>
            <th scope="col"></th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>
              حواسيب ألعاب
            </td>
            <td>
              حواسيب ذات مواصفات عالية لجميع الألعاب الحديثة
            </td>
            <td class="text-center">
              <b><i class="lni lni-display-alt"></i> 150</b>
            </td>
            <td class="text-center">
              <b><i class="lni lni-eye"></i> 2500</b>
            </td>
            <td>21-2-2021 18:45</td>
            <td>
              <form action="" method="post">
                <button type="submit" class="btn p-0"><i class="lni lni-trash text-danger"></i></button>
              </form>
            </td>
            <td>
              <a href="edit.html"><i class="lni lni-pencil btn text-primary p-0"></i></a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

@endsection