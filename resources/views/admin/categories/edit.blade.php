@extends('admin.layouts.layout')

@section('title', 'تعديل بيانات الفئة')

@section('content')

  <div class="col-12">
    <h2>إدارة الفئات > تعديل بيانات الفئة</h2>
  </div>
  <div class="col-12 row justify-content-center">
    <div class="col-12 col-md-8 col-lg-6">
      <form action="" method="post" class="mt-3">
        <div class="form-group">
          <label for="name">اسم الفئة</label>
          <input type="text" id="name" class="form-control rounded-pill border-dark" placeholder="حواسيب تصميم">
        </div>
        <div class="form-group">
          <label for="description">وصف الفئة</label>
          <textarea id="description" class="form-control rounded border-dark" cols="30" rows="10" placeholder="وصف الحواسيب ضمن هذه الفئة"></textarea>
        </div>
        <div class="form-group">
          <span>تاريخ إضافة الفئة:</span>
          <span>12-2-2021 15:55</span>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-info btn-block rounded-pill"><i class="lni lni-save"></i> حفظ التعديلات</button>
        </div>
      </form>
    </div>
  </div>

@endsection