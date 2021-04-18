@extends('admin.layouts.layout')

@section('title', 'تعديل بيانات الحاسوب')

@section('content')

  <div class="col-12">
    <h2>إدارة الحواسيب > تعديل الحاسوب</h2>
  </div>
  <form action="" method="post" class="col-12 row mt-3">
    <div class="col-4">
      <div class="form-group text-center">
        <img src="../../assets/images/laptop1.jpg" class="img-fluid rounded">
        <div class="btn btn-primary btn-block rounded-pill"><i class="lni lni-image"></i> اختيار صورة</div>
      </div>
      <div class="form-group">
        <label for="name">اسم الحاسوب</label>
        <input type="text" id="name" class="form-control rounded-pill border-dark" placeholder="Asus 10.255 LS850">
      </div>
      <div class="form-group">
        <label for="main-price">السعر قبل الحسم</label>
        <input type="text" id="main-price" class="form-control rounded-pill border-dark" placeholder="بالدولار الأمريكي">
      </div>
      <div class="form-group">
        <label for="discount-price">السعر بعد الحسم</label>
        <input type="text" id="discount-price" class="form-control rounded-pill border-dark" placeholder="بالدولار الأمريكي">
      </div>
      <div class="form-group">
        <label for="company">الشركة المصنعة</label>
        <input type="text" id="company" class="form-control rounded-pill border-dark" placeholder="Asus">
      </div>
    </div>
    <div class="col-4">
      <div class="form-group">
        <label for="cpu">المعالج</label>
        <input type="text" id="cpu" class="form-control rounded-pill border-dark" placeholder="Corei5-7848 2.4 GHZ">
      </div>
      <div class="form-group">
        <label for="ram">ذاكرة الوصول العشوائية</label>
        <input type="text" id="ram" class="form-control rounded-pill border-dark" placeholder="8 GB DDR4">
      </div>
      <div class="form-group">
        <label for="hard-drive">سعة التخزين</label>
        <input type="text" id="hard-drive" class="form-control rounded-pill border-dark" placeholder="1 TB HDD">
      </div>
      <div class="form-group">
        <label for="screen-card">كرت الشاشة</label>
        <input type="text" id="screen-card" class="form-control rounded-pill border-dark" placeholder="AMD RTX-4500 2GB">
      </div>
      <div class="form-group">
        <label for="screen-card-type">نوع كرت الشاشة</label>
        <select class="form-control rounded-pill border-dark" id="screen-card-type">
          <option value="0">مدمج</option>
          <option value="0">منفصل</option>
        </select>
      </div>
      <div class="form-group">
        <label for="screen-size">قياس الشاشة</label>
        <input type="text" id="screen-size" class="form-control rounded-pill border-dark" placeholder="15.6 INCH">
      </div>
      <div class="form-group">
        <label for="cd-rom">قارئة الأقراص</label>
        <input type="text" id="cd-rom" class="form-control rounded-pill border-dark" placeholder="CD/ROM قراءة وكتابة">
      </div>
      <div class="form-group">
        <label for="battery">البطارية</label>
        <input type="text" id="battery" class="form-control rounded-pill border-dark" placeholder="تعمل ل 4 ساعات متواصل">
      </div>
      <div class="form-group">
        <label for="ports">المداخل</label>
        <input type="text" id="ports" class="form-control rounded-pill border-dark" placeholder="USB 3 + HDMI">
      </div>
    </div>
    <div class="col-4">
      <div class="form-group">
        <label for="category">فئة الحاسوب</label>
        <select class="form-control rounded-pill border-dark" id="category">
          <option value="0">حواسيب جديدة</option>
          <option value="0">حواسيب ألعاب</option>
        </select>
      </div>
      <div class="form-group">
        <label for="visible">هل المنتج متوفر للبيع</label>
        <select class="form-control rounded-pill border-dark" id="visible">
          <option value="0">متوفر</option>
          <option value="0">غير متوفر</option>
        </select>
      </div>
      <div class="form-group">
        <label for="status">حالة المنتج</label>
        <select class="form-control rounded-pill border-dark" id="status">
          <option value="0">New</option>
          <option value="0">open Box</option>
        </select>
      </div>
      <div class="form-group">
        <label for="description">ملاحظات</label>
        <textarea id="description" class="form-control rounded border-dark" cols="30" rows="10" placeholder="هل يوجد أي ملاحظات أخرى حول الحاسوب؟"></textarea>
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-info btn-block rounded-pill"><i class="lni lni-save"></i> تعديل البيانات</button>
      </div>
    </div>
  </form>
  <div class="col-12">
    <h2>الصور الفرعية</h2>
    <div class="row">

      <form action="" method="post" class="col-3 text-center mb-3">
        <img src="../../assets/images/laptop1.jpg" class="img-fluid rounded">
        <button class="btn btn-block btn-danger rounded-pill mt-2"><i class="lni lni-trash"></i> حذف</button>
      </form>
      <form action="" method="post" class="col-3 text-center mb-3">
        <img src="../../assets/images/laptop1.jpg" class="img-fluid rounded">
        <button class="btn btn-block btn-danger rounded-pill mt-2"><i class="lni lni-trash"></i> حذف</button>
      </form>
      <form action="" method="post" class="col-3 text-center mb-3">
        <img src="../../assets/images/laptop1.jpg" class="img-fluid rounded">
        <button class="btn btn-block btn-danger rounded-pill mt-2"><i class="lni lni-trash"></i> حذف</button>
      </form>
      <form action="" method="post" class="col-3 text-center mb-3">
        <img src="../../assets/images/laptop1.jpg" class="img-fluid rounded">
        <button class="btn btn-block btn-danger rounded-pill mt-2"><i class="lni lni-trash"></i> حذف</button>
      </form>
      <form action="" method="post" class="col-3 text-center mb-3">
        <img src="../../assets/images/default-user.png" class="img-fluid rounded">
        <br>
        <button class="btn btn-primary rounded-pill mt-2"><i class="lni lni-image"></i> اختيار صورة</button>
        <button class="btn btn-info rounded-pill mt-2"><i class="lni lni-save"></i> إضافة</button>
      </form>
    </div>
  </div>

@endsection
