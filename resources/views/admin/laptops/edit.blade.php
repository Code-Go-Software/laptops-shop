@extends('admin.layouts.layout')

@section('title', 'تعديل بيانات الحاسوب')

@section('content')

  <div class="col-12">
    <h2>إدارة الحواسيب > تعديل الحاسوب</h2>
  </div>
  <div class="col-12 row justify-content-center mt-3">
    <form action="/admin/laptops/image/{{ $laptop->id }}" method="post" class="col-12 col-md-8" enctype="multipart/form-data">
      @csrf
      @method('put')
      <div class="form-group text-center">
        <input type="file" name="image" id="main-image-file" class="d-none" onchange="previewImage(this, '#main-image-preview')">
        <img src="{{ asset('images/' . $laptop->image) }}" class="img-fluid rounded" id="main-image-preview">
        @error('image')
            <p class="text-danger"><small>{{ $message }}</small></p>
        @enderror
        <br>
        <div class="btn bg-primary text-light mt-2 mb-2" onclick="openFileInput('#main-image-file')">
          <i class="lni lni-image"></i> اختيار صورة
        </div>
        <button type="submit" class="btn bg-success text-light"><i class="lni lni-save"></i> حفظ الصورة</button>
      </div>
    </form>
  </div>


  <div class="row justify-content-center col-12">
    <form action="/admin/laptops/{{ $laptop->id }}" method="post" class="col-12 col-md-8 mt-3">
      @csrf
      @method('put')
  
      <div class="form-group">
        <label for="name">اسم الحاسوب</label>
        <input type="text" name="name" id="name"
        class="form-control border-secondary"
        placeholder="Asus 10.255 LS850" value="{{ $laptop->name }}">
        @error('name')
            <small class="text-danger">{{ $message }}</small>
        @enderror
      </div>
  
      <div class="form-group">
        <label for="before-discount-price">السعر قبل الحسم</label>
        <input type="text" name="before_discount_price" id="before-discount-price"
        class="form-control border-secondary" placeholder="سعر الحاسوب قبل الحسم" value="{{ $laptop->before_discount_price }}">
        @error('before_discount_price')
            <small class="text-danger">{{ $message }}</small>
        @enderror
      </div>
  
      <div class="form-group">
        <label for="after-discount-price">السعر بعد الحسم</label>
        <input type="text" name="after_discount_price" id="after-discount-price"
        class="form-control rounded-pill border-secondary" placeholder="سعر الحاسوب بعد الحسم" value="{{ $laptop->after_discount_price }}">
        @error('after_discount_price')
            <small class="text-danger">{{ $message }}</small>
        @enderror
      </div>
  
      <div class="form-group">
        <label for="company">الشركة المصنعة</label>
        <input type="text" name="company" id="company"
        class="form-control border-secondary" placeholder="Asus" value="{{ $laptop->company }}">
        @error('company')
            <small class="text-danger">{{ $message }}</small>
        @enderror
      </div>
  
  
      <div class="form-group">
        <label for="cpu">المعالج</label>
        <input type="text" name="cpu" id="cpu"
        class="form-control rounded-pill border-secondary" placeholder="Corei5-7848 2.4 GHZ" value="{{ $laptop->cpu }}">
        @error('cpu')
            <small class="text-danger">{{ $message }}</small>
        @enderror
      </div>
  
      <div class="form-group">
        <label for="ram">ذاكرة الوصول العشوائية</label>
        <input type="text" name="ram" id="ram"
        class="form-control border-secondary" placeholder="8 GB DDR4" value="{{ $laptop->ram }}">
        @error('ram')
            <small class="text-danger">{{ $message }}</small>
        @enderror
      </div>
  
      <div class="form-group">
        <label for="hard-drive">سعة التخزين</label>
        <input type="text" name="hard" id="hard-drive"
        class="form-control border-secondary" placeholder="1 TB HDD" value="{{ $laptop->hard }}">
        @error('hard')
            <small class="text-danger">{{ $message }}</small>
        @enderror
      </div>
  
      <div class="form-group">
        <label for="screen-card">كرت الشاشة</label>
        <input type="text" name="screen_card" id="screen-card"
        class="form-control border-secondary" placeholder="AMD RTX-4500 2GB" value="{{ $laptop->screen_card }}">
        @error('screen_card')
            <small class="text-danger">{{ $message }}</small>
        @enderror
      </div>
  
      <div class="form-group">
        <label for="screen-card-type">نوع كرت الشاشة</label>
        <select class="form-control border-secondary" name="screen_card_type" id="screen-card-type">
          <option {{ ($laptop->screen_card_type == "مدمج") ? 'selected' : '' }} value="مدمج">مدمج</option>
          <option {{ ($laptop->screen_card_type == "منفصل") ? 'selected' : '' }} value="منفصل">منفصل</option>
        </select>
        @error('screen_card_type')
            <small class="text-danger">{{ $message }}</small>
        @enderror
      </div>
  
      <div class="form-group">
        <label for="screen-size">قياس الشاشة</label>
        <input type="text" name="screen_size" id="screen-size"
        class="form-control border-secondary" placeholder="15.6 INCH" value="{{ $laptop->screen_size }}">
        @error('screen_size')
            <small class="text-danger">{{ $message }}</small>
        @enderror
      </div>
  
      <div class="form-group">
        <label for="cd-rom">قارئة الأقراص</label>
        <input type="text" name="cd_driver" id="cd-rom"
        class="form-control border-secondary" placeholder="CD/ROM قراءة وكتابة" value="{{ $laptop->cd_driver }}">
        @error('cd_driver')
            <small class="text-danger">{{ $message }}</small>
        @enderror
      </div>
  
      <div class="form-group">
        <label for="battery">البطارية</label>
        <input type="text" name="battery" id="battery"
        class="form-control border-secondary" placeholder="تعمل ل 4 ساعات متواصل" value="{{ $laptop->battery }}">
        @error('battery')
            <small class="text-danger">{{ $message }}</small>
        @enderror
      </div>
  
      <div class="form-group">
        <label for="ports">المداخل</label>
        <input type="text" name="ports" id="ports"
        class="form-control border-secondary" placeholder="USB 3 + HDMI" value="{{ $laptop->ports }}">
        @error('ports')
            <small class="text-danger">{{ $message }}</small>
        @enderror
      </div>
  
      <div class="form-group">
        <label for="category">فئة الحاسوب</label>
        <select name="category_id" class="form-control border-secondary" id="category">
          @foreach ($categories as $category)
            <option value="{{ $category->id }}" {{ ($category->id == $laptop->category_id) ? 'selected' : '' }}>{{ $category->name }}</option>
          @endforeach
        </select>
        @error('category_id')
            <small class="text-danger">{{ $message }}</small>
        @enderror
      </div>
      <div class="form-group">
        <label for="is-available">هل المنتج متوفر للبيع</label>
        <select name="is_available" class="form-control border-secondary" id="is-available">
          <option {{ ($laptop->is_available) ? 'selected' : '' }} value="1">متوفر</option>
          <option {{ (!$laptop->is_available) ? 'selected' : '' }} value="0">غير متوفر</option>
        </select>
        @error('is_available')
            <small class="text-danger">{{ $message }}</small>
        @enderror
      </div>
      <div class="form-group">
        <label for="type">حالة المنتج</label>
        <select name="type" class="form-control border-secondary" id="type">
          <option {{ ($laptop->type == 'New') ? 'selected' : '' }} value="New">New</option>
          <option {{ ($laptop->type == 'Open Box') ? 'selected' : '' }} value="Open Box">Open Box</option>
        </select>
        @error('status')
            <small class="text-danger">{{ $message }}</small>
        @enderror
      </div>
      <div class="form-group">
        <label for="description">ملاحظات</label>
        <textarea id="description" name="description"
        class="form-control rounded border-secondary" cols="30" rows="10"
        placeholder="هل يوجد أي ملاحظات أخرى حول الحاسوب؟">{{ $laptop->description }}</textarea>
        @error('description')
            <small class="text-danger">{{ $message }}</small>
        @enderror
      </div>
      <div class="form-group">
        <button type="submit" class="btn bg-success text-light btn-block"><i class="lni lni-save"></i> تعديل البيانات</button>
      </div>
    </form>
  </div>
  

  <div class="col-12 mt-3">
    <h2>الصور الفرعية ({{ $laptop->subImages->count() }})</h2>
    <div class="row">

      @forelse ($laptop->subImages as $subImage)
        <form action="/admin/laptops/subimages/{{ $subImage->id }}" method="post" class="col-3 text-center mb-3">
          @csrf
          @method('delete')
          <img src="{{ asset('images/' . $subImage->image) }}" class="img-fluid rounded">
          <button type="submit" class="btn btn-block bg-danger text-light mt-2 delete-btn"><i class="lni lni-trash"></i> حذف</button>
        </form>
      @empty
          
      @endforelse
      
      <form action="/admin/laptops/subimages" method="post" class="col-4 text-center mb-3" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="laptop_id" value="{{ $laptop->id }}">
        <img src="{{ asset('assets/images/laptop-placeholder.png') }}" class="img-fluid rounded" id="preview-image">
        <input type="file" name="sub_image" id="image-file" class="d-none" onchange="previewImage(this, '#preview-image')">
        @error('sub_image')
            <small class="text-danger">{{ $message }}</small>
        @enderror
        <br>
        <div class="btn bg-primary text-light mt-2" onclick="openFileInput('#image-file')"><i class="lni lni-image"></i> اختيار صورة</div>
        <button class="btn bg-success text-light mt-2"><i class="lni lni-save"></i> حفظ الصورة</button>
      </form>
    </div>
  </div>

@endsection
