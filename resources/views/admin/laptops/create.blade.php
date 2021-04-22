@extends('admin.layouts.layout')

@section('title', 'إضافة حاسوب جديد')

@section('content')

  <div class="col-12">
    <h2>إدارة الحواسيب > إضافة حاسوب جديد</h2>
  </div>
  <form action="/admin/laptops" method="post" class="col-12 row mt-3">
    @csrf
    <div class="col-4">
      <div class="form-group text-center">
        <img src="{{ asset('assets/images/laptop1.jpg') }}" class="img-fluid rounded">
        <div class="btn btn-primary btn-block rounded-pill"><i class="lni lni-image"></i> اختيار صورة</div>
      </div>
      <div class="form-group">
        <label for="name">اسم الحاسوب</label>
        <input type="text" name="name" id="name" class="form-control rounded-pill border-dark" placeholder="Asus 10.255 LS850">
      </div>
      <div class="form-group">
        <label for="main-price">السعر قبل الحسم</label>
        <input type="text" name="before_discount_price" id="main-price" class="form-control rounded-pill border-dark" placeholder="بالدولار الأمريكي">
      </div>
      <div class="form-group">
        <label for="discount-price">السعر بعد الحسم</label>
        <input type="text" name="after_discount_price" id="discount-price" class="form-control rounded-pill border-dark" placeholder="بالدولار الأمريكي">
      </div>
      <div class="form-group">
        <label for="company">الشركة المصنعة</label>
        <input type="text" name="company" id="company" class="form-control rounded-pill border-dark" placeholder="Asus">
      </div>
    </div>
    <div class="col-4">
      <div class="form-group">
        <label for="cpu">المعالج</label>
        <input type="text" name="cpu" id="cpu" class="form-control rounded-pill border-dark" placeholder="Corei5-7848 2.4 GHZ">
      </div>
      <div class="form-group">
        <label for="ram">ذاكرة الوصول العشوائية</label>
        <input type="text" name="ram" id="ram" class="form-control rounded-pill border-dark" placeholder="8 GB DDR4">
      </div>
      <div class="form-group">
        <label for="hard-drive">سعة التخزين</label>
        <input type="text" name="hard" id="hard-drive" class="form-control rounded-pill border-dark" placeholder="1 TB HDD">
      </div>
      <div class="form-group">
        <label for="screen-card">كرت الشاشة</label>
        <input type="text" name="screen_card" id="screen-card" class="form-control rounded-pill border-dark" placeholder="AMD RTX-4500 2GB">
      </div>
      <div class="form-group">
        <label for="screen-card-type">نوع كرت الشاشة</label>
        <select class="form-control rounded-pill border-dark" name="screen_card_type" id="screen-card-type">
          <option value="منفصل">مدمج</option>
          <option value="مدمج">منفصل</option>
        </select>
      </div>
      <div class="form-group">
        <label for="screen-size">قياس الشاشة</label>
        <input type="text" name="screen_size" id="screen-size" class="form-control rounded-pill border-dark" placeholder="15.6 INCH">
      </div>
      <div class="form-group">
        <label for="cd-rom">قارئة الأقراص</label>
        <input type="text" name="cd_driver" id="cd-rom" class="form-control rounded-pill border-dark" placeholder="CD/ROM قراءة وكتابة">
      </div>
      <div class="form-group">
        <label for="battery">البطارية</label>
        <input type="text" name="battery" id="battery" class="form-control rounded-pill border-dark" placeholder="تعمل ل 4 ساعات متواصل">
      </div>
      <div class="form-group">
        <label for="ports">المداخل</label>
        <input type="text" name="ports" id="ports" class="form-control rounded-pill border-dark" placeholder="USB 3 + HDMI">
      </div>
    </div>
    <div class="col-4">
      <div class="form-group">
        <label for="category">فئة الحاسوب</label>
        <select class="form-control rounded-pill border-dark" name="category_id" id="category">
          @foreach ($categories as $category)
              <option value="{{ $category->id }}">{{ $category->name }}</option>
          @endforeach
        </select>
      </div>
      <div class="form-group">
        <label for="is-available">هل المنتج متوفر للبيع</label>
        <select class="form-control rounded-pill border-dark" name="is_available" id="is-available">
          <option value="1">متوفر</option>
          <option value="0">غير متوفر</option>
        </select>
      </div>
      <div class="form-group">
        <label for="type">حالة المنتج</label>
        <select class="form-control rounded-pill border-dark" name="type" id="type">
          <option value="جديد">New</option>
          <option value="Open Box">open Box</option>
        </select>
      </div>
      <div class="form-group">
        <label for="description">ملاحظات</label>
        <textarea id="description" name="description" class="form-control rounded border-dark" cols="30" rows="10" placeholder="هل يوجد أي ملاحظات أخرى حول الحاسوب؟"></textarea>
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-success btn-block rounded-pill"><i class="lni lni-plus"></i> إضافة الحاسوب</button>
      </div>
      <div class="form-group">
        <div class="alert alert-secondary">
          <i class="lni lni-question-circle"></i>
          يمكنك إضافة صور فرعية للحاسوب بعد الانتهاء من إضافة الحاسوب هنا
        </div>
      </div>
    </div>
  </form>

@endsection