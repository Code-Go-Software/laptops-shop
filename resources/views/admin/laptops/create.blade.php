@extends('admin.layouts.layout')

@section('title', 'إضافة حاسوب جديد')

@section('content')

  <div class="col-12">
    <h2>إدارة الحواسيب > إضافة حاسوب جديد</h2>
  </div>

  @if ($categories->count() == 0)
    <div class="alert col-12 bg-warning mb-0 rounded-0">
      <i class="lni lni-warning ml-1"></i>
      لم تقم بإنشاء أي فئة للحواسيب حتى الآن, قم بإنشاء فئة جديدة لتتمكن من إضافة أي حاسوب جديد
    </div>
  @endif

  <div class="row justify-content-center col-12 mt-3">
    <form action="/admin/laptops" method="post" class="col-md-8 col-12" enctype="multipart/form-data">
      @csrf
  
      <div class="form-group text-center">
        <img src="{{ asset('assets/images/laptop-placeholder.png') }}" class="img-fluid rounded d-inline-block" id="preview-image">
        @error('image')
          <p class="text-danger"><small>{{ $message }}</small></p>
        @enderror
        <input type="file" name="image" id="image-file" class="d-none" onchange="previewImage(this, '#preview-image')">
        <br>
        <div class="btn btn-success rounded-pill mt-2" onclick="openFileInput('#image-file')">
          <i class="lni lni-image"></i> اختيار صورة
        </div>
      </div>
  
      <div class="form-group">
        <label for="name">اسم الحاسوب</label>
        <input type="text" name="name" id="name" class="form-control rounded-pill border-secondary" placeholder="Asus 10.255 LS850" value="{{ old('name') }}">
        @error('name')
          <small class="text-danger">{{ $message }}</small>
        @enderror
      </div>
  
      <div class="form-group">
        <label for="main-price">السعر قبل الحسم</label>
        <input type="text" name="before_discount_price" id="main-price"
        class="form-control rounded-pill border-secondary" placeholder="سعر الحاسوب قبل الحسم" value="{{ old('before_discount_price') }}">
        @error('before_discount_price')
          <small class="text-danger">{{ $message }}</small>
        @enderror
      </div>
  
      <div class="form-group">
        <label for="discount-price">السعر بعد الحسم</label>
        <input type="text" name="after_discount_price" id="discount-price"
        class="form-control rounded-pill border-secondary" placeholder="سعر الحاسوب بعد الحسم" value="{{ old('after_discount_price') }}">
        @error('after_discount_price')
            <small class="text-danger">{{ $message }}</small>
        @enderror
      </div>
  
      <div class="form-group">
        <label for="company">الشركة المصنعة</label>
        <input type="text" name="company" id="company" class="form-control rounded-pill border-secondary" placeholder="Asus" value="{{ old('company') }}">
        @error('company')
            <small class="text-danger">{{ $message }}</small>
        @enderror
      </div>
      
  
      <div class="form-group">
        <label for="cpu">المعالج</label>
        <input type="text" name="cpu" id="cpu" class="form-control rounded-pill border-secondary" placeholder="Corei5-7848 2.4 GHZ" value="{{ old('cpu') }}">
        @error('cpu')
            <small class="text-danger">{{ $message }}</small>
        @enderror
      </div>
  
      <div class="form-group">
        <label for="ram">ذاكرة الوصول العشوائية</label>
        <input type="text" name="ram" id="ram" class="form-control rounded-pill border-secondary" placeholder="8 GB DDR4" value="{{ old('ram') }}">
        @error('ram')
            <small class="text-danger">{{ $message }}</small>
        @enderror
      </div>
  
      <div class="form-group">
        <label for="hard-drive">سعة التخزين</label>
        <input type="text" name="hard" id="hard-drive" class="form-control rounded-pill border-secondary" placeholder="1 TB HDD" value="{{ old('hard') }}">
        @error('hard')
            <small class="text-danger">{{ $message }}</small>
        @enderror
      </div>
  
      <div class="form-group">
        <label for="screen-card">كرت الشاشة</label>
        <input type="text" name="screen_card" id="screen-card" class="form-control rounded-pill border-secondary" placeholder="AMD RTX-4500 2GB" value="{{ old('screen_card') }}">
        @error('screen_card')
            <small class="text-danger">{{ $message }}</small>
        @enderror
      </div>
  
      <div class="form-group">
        <label for="screen-card-type">نوع كرت الشاشة</label>
        <select class="form-control rounded-pill border-secondary" name="screen_card_type" id="screen-card-type">
          <option value="منفصل">مدمج</option>
          <option value="مدمج">منفصل</option>
        </select>
        @error('screen_card_type')
            <small class="text-danger">{{ $message }}</small>
        @enderror
      </div>
  
      <div class="form-group">
        <label for="screen-size">قياس الشاشة</label>
        <input type="text" name="screen_size" id="screen-size" class="form-control rounded-pill border-secondary" placeholder="15.6 INCH" value="{{ old('screen_size') }}">
        @error('screen_size')
            <small class="text-danger">{{ $message }}</small>
        @enderror
      </div>
  
      <div class="form-group">
        <label for="cd-rom">قارئة الأقراص</label>
        <input type="text" name="cd_driver" id="cd-rom" class="form-control rounded-pill border-secondary" placeholder="CD/ROM قراءة وكتابة" value="{{ old('cd_driver') }}">
        @error('cd_driver')
            <small class="text-danger">{{ $message }}</small>
        @enderror
      </div>
  
      <div class="form-group">
        <label for="battery">البطارية</label>
        <input type="text" name="battery" id="battery" class="form-control rounded-pill border-secondary" placeholder="تعمل ل 4 ساعات متواصل" value="{{ old('battery') }}">
        @error('battery')
            <small class="text-danger">{{ $message }}</small>
        @enderror
      </div>
  
      <div class="form-group">
        <label for="ports">المداخل</label>
        <input type="text" name="ports" id="ports" class="form-control rounded-pill border-secondary" placeholder="USB 3 + HDMI"  value="{{ old('ports') }}">
        @error('ports')
            <small class="text-danger">{{ $message }}</small>
        @enderror
      </div>
  
      <div class="form-group">
        <label for="category">فئة الحاسوب</label>
        <select class="form-control rounded-pill border-secondary" name="category_id" id="category">
          @foreach ($categories as $category)
              <option value="{{ $category->id }}">{{ $category->name }}</option>
          @endforeach
        </select>
        @error('category_id')
            <small class="text-danger">{{ $message }}</small>
        @enderror
      </div>
  
      <div class="form-group">
        <label for="is-available">هل المنتج متوفر للبيع</label>
        <select class="form-control rounded-pill border-secondary" name="is_available" id="is-available">
          <option value="1">متوفر</option>
          <option value="0">غير متوفر</option>
        </select>
        @error('is_available')
            <small class="text-danger">{{ $message }}</small>
        @enderror
      </div>
  
      <div class="form-group">
        <label for="type">حالة المنتج</label>
        <select class="form-control rounded-pill border-secondary" name="type" id="type">
          <option value="جديد">New</option>
          <option value="Open Box">open Box</option>
        </select>
        @error('type')
            <small class="text-danger">{{ $message }}</small>
        @enderror
      </div>
  
      <div class="form-group">
        <label for="description">ملاحظات</label>
        <textarea id="description" name="description" class="form-control rounded border-secondary" cols="30" rows="10" placeholder="هل يوجد أي ملاحظات أخرى حول الحاسوب؟">{{ old('description') }}</textarea>
        @error('description')
            <small class="text-danger">{{ $message }}</small>
        @enderror
      </div>
  
      <div class="form-group">
        <button type="submit" class="btn btn-success btn-block rounded-pill"><i class="lni lni-plus"></i> إضافة الحاسوب</button>
      </div>
  
      <div class="form-group">
        <div class="alert alert-warning">
          <i class="lni lni-question-circle"></i>
          يمكنك إضافة صور فرعية للحاسوب بعد الانتهاء من إضافة الحاسوب هنا
        </div>
      </div>
  
    </form>
  </div>

@endsection