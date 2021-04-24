@extends('admin.layouts.layout')

@section('title', 'إدارة المحتوى')

@section('content')

  <div class="col-12">
    <h2>إدارة المحتوى</h2>
  </div>
  <div class="col-12">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" id="main-info-tab" data-toggle="tab" href="#main-info" role="tab" aria-controls="main-info" aria-selected="true">المعلومات الأساسية</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="sliders-tab" data-toggle="tab" href="#sliders" role="tab" aria-controls="sliders" aria-selected="false">الصور الإعلانية</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="about-us-tab" data-toggle="tab" href="#about-us" role="tab" aria-controls="about-us" aria-selected="false">حولنا</a>
      </li>
    </ul>
    <div class="tab-content" id="myTabContent">
      <div class="tab-pane fade show active" id="main-info" role="tabpanel" aria-labelledby="main-info-tab">
        <div class="row mt-4">

          <div class="col-lg-6">
            <form action="/admin/content/{{ $content->where('key', 'address')->first()->id }}" method="post">
              @csrf
              @method('put')
              <input type="hidden" name="is_image" value="0">
              <div class="form-group">
                <label for="address">عنوان الشركة</label>
                <input type="text" name="value" id="address" class="form-control rounded-pill border-dark" placeholder="دمشق - البحصة - جانب جامع الورد" value="{{ $content->where('key', 'address')->first()->value }}">
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary rounded-pill"><i class="lni lni-save"></i> حفظ التعديلات</button>
              </div>
            </form>
          </div>

          <div class="col-lg-6">
            <form action="/admin/content/{{ $content->where('key', 'phone')->first()->id }}" method="post">
              @csrf
              @method('put')
              <input type="hidden" name="is_image" value="0">
              <div class="form-group">
                <label for="phone">رقم الهاتف</label>
                <input type="text" name="value" id="phone" class="form-control rounded-pill border-dark" placeholder="0946918650" value="{{ $content->where('key', 'phone')->first()->value }}">
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary rounded-pill"><i class="lni lni-save"></i> حفظ التعديلات</button>
              </div>
            </form>
          </div>

          <div class="col-lg-6">
            <form action="/admin/content/{{ $content->where('key', 'fixed_phone')->first()->id }}" method="post">
              @csrf
              @method('put')
              <input type="hidden" name="is_image" value="0">
              <div class="form-group">
                <label for="fixed-phone">رقم الهاتف الثابت</label>
                <input type="text" name="value" id="fixed-phone" class="form-control rounded-pill border-dark" placeholder="211-115-12" value="{{ $content->where('key', 'fixed_phone')->first()->value }}">
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary rounded-pill"><i class="lni lni-save"></i> حفظ التعديلات</button>
              </div>
            </form>
          </div>

          <div class="col-lg-6">
            <form action="/admin/content/{{ $content->where('key', 'help_email')->first()->id }}" method="post">
              @csrf
              @method('put')
              <input type="hidden" name="is_image" value="0">
              <div class="form-group">
                <label for="help-email">بريد المساعدة</label>
                <input type="text" name="value" id="help-email" class="form-control rounded-pill border-dark" placeholder="info@company.com" value="{{ $content->where('key', 'help_email')->first()->value }}">
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary rounded-pill"><i class="lni lni-save"></i> حفظ التعديلات</button>
              </div>
            </form>
          </div>

          <div class="col-lg-6">
            <form action="/admin/content/{{ $content->where('key', 'facebook_link')->first()->id }}" method="post">
              @csrf
              @method('put')
              <input type="hidden" name="is_image" value="0">
              <div class="form-group">
                <label for="facebook-link">رابط صفحة الفيسبوك</label>
                <input type="text" name="value" id="facebook-link" class="form-control rounded-pill border-dark" placeholder="https://www.facebook.com"  value="{{ $content->where('key', 'facebook_link')->first()->value }}">
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary rounded-pill"><i class="lni lni-save"></i> حفظ التعديلات</button>
              </div>
            </form>
          </div>

          <div class="col-lg-6">
            <form action="/admin/content/{{ $content->where('key', 'telegram_link')->first()->id }}" method="post">
              @csrf
              @method('put')
              <input type="hidden" name="is_image" value="0">
              <div class="form-group">
                <label for="telegram-link">رابط قناة التلغرام</label>
                <input type="text" name="value" id="telegram-link" class="form-control rounded-pill border-dark" placeholder="https://www.telegram.com" value="{{ $content->where('key', 'telegram_link')->first()->value }}">
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary rounded-pill"><i class="lni lni-save"></i> حفظ التعديلات</button>
              </div>
            </form>
          </div>

          <div class="col-lg-6">
            <form action="/admin/content/{{ $content->where('key', 'instagram_link')->first()->id }}" method="post">
              @csrf
              @method('put')
              <input type="hidden" name="is_image" value="0">
              <div class="form-group">
                <label for="instagram-link">رابط حساب الانستغرام</label>
                <input type="text" name="value" id="instagram-link" class="form-control rounded-pill border-dark" placeholder="https://www.instagram.com" value="{{ $content->where('key', 'instagram_link')->first()->value }}">
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary rounded-pill"><i class="lni lni-save"></i> حفظ التعديلات</button>
              </div>
            </form>
          </div>

          <div class="col-lg-6">
            <form action="/admin/content/{{ $content->where('key', 'whatsapp_number')->first()->id }}" method="post">
              @csrf
              @method('put')
              <input type="hidden" name="is_image" value="0">
              <div class="form-group">
                <label for="whatsapp-number">رقم التواصل واتساب</label>
                <input type="text" name="value" id="whatsapp-number" class="form-control rounded-pill border-dark" placeholder="0946918650"  value="{{ $content->where('key', 'whatsapp_number')->first()->value }}">
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary rounded-pill"><i class="lni lni-save"></i> حفظ التعديلات</button>
              </div>
            </form>
          </div>

        </div>
      </div>

      <div class="tab-pane fade show" id="sliders" role="tabpanel" aria-labelledby="sliders-tab">
        <div class="row justify-content-center">
          <div class="col-lg-9">
            <form action="/admin/content/{{ $content->where('key', 'slide1')->first()->id }}" method="post" enctype="multipart/form-data">
              @csrf
              @method('put')
              <input type="hidden" name="is_image" value="1">
              <div class="form-group mt-4">
                <h4>الصورة الأولى</h4>
              </div>
              <div class="form-group text-center">
                <img src="{{ asset('assets/images/' . $content->where('key', 'slide1')->first()->value) }}" id="slide1-image" class="img-fluid rounded">
              </div>
              <div class="form-group text-center">
                <input type="file" class="d-none" name="value" id="slide1" onchange="previewImage(this, '#slide1-image')">
                <div id="select-slide1" class="btn btn-primary rounded-pill mt-2" onclick="openFileInput('#slide1')"><i class="lni lni-image"></i> اختيار صورة جديدة</div>
                <button type="submit" class="btn btn-info rounded-pill mt-2"><i class="lni lni-save"></i> حفظ</button>
              </div>
            </form>
          </div>

          <div class="col-lg-9 mt-4">
            <form action="/admin/content/{{ $content->where('key', 'slide2')->first()->id }}" method="post" enctype="multipart/form-data">
              @csrf
              @method('put')
              <input type="hidden" name="is_image" value="1">
              <div class="form-group mt-4">
                <h4>الصورة الثانية</h4>
              </div>
              <div class="form-group text-center">
                <img src="{{ asset('assets/images/' . $content->where('key', 'slide2')->first()->value) }}" id="slide2-image" class="img-fluid rounded">
              </div>
              <div class="form-group text-center">
                <input type="file" class="d-none" name="value" id="slide2" onchange="previewImage(this, '#slide2-image')">
                <div id="select-slider2" class="btn btn-primary rounded-pill mt-2" onclick="openFileInput('#slide2')"><i class="lni lni-image"></i> اختيار صورة جديدة</div>
                <button type="submit" class="btn btn-info rounded-pill mt-2"><i class="lni lni-save"></i> حفظ</button>
              </div>
            </form>
          </div>

          <div class="col-lg-9 mt-4">
            <form action="/admin/content/{{ $content->where('key', 'slide3')->first()->id }}" method="post" enctype="multipart/form-data">
              @csrf
              @method('put')
              <input type="hidden" name="is_image" value="1">
              <div class="form-group mt-4">
                <h4>الصورة الثالثة</h4>
              </div>
              <div class="form-group text-center">
                <img src="{{ asset('assets/images/' . $content->where('key', 'slide3')->first()->value) }}" id="slide3-image" class="img-fluid rounded">
              </div>
              <div class="form-group text-center">
                <input type="file" class="d-none" name="value" id="slide3" onchange="previewImage(this, '#slide3-image')">
                <div id="select-slider3" class="btn btn-primary rounded-pill mt-2" onclick="openFileInput('#slide3')"><i class="lni lni-image"></i> اختيار صورة جديدة</div>
                <button type="submit" class="btn btn-info rounded-pill mt-2"><i class="lni lni-save"></i> حفظ</button>
              </div>
            </form>
          </div>
        </div>
      </div>

      <div class="tab-pane fade" id="about-us" role="tabpanel" aria-labelledby="about-us-tab">
        <div class="py-3 px-4">
          <p>
            {{ $content->where('key', 'about_us')->first()->value }}
          </p>
          <form action="/admin/content/{{ $content->where('key', 'about_us')->first()->id }}" method="post">
            @csrf
            @method('put')
            <input type="hidden" name="is_image" value="0">
            <div class="form-group">
              <label for="about-us"><b>تعديل المقال</b></label>
              <textarea id="about-us" name="value" class="form-control rounded border-dark" cols="30" rows="10" placeholder="مقال تعريفي عن الشركة">{{ $content->where('key', 'about_us')->first()->value }}</textarea>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary rounded-pill"><i class="lni lni-save"></i> حفظ التعديلات</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

@endsection