@extends('user.layouts.layout')

@section('title', 'اسم الشركة لتجارة جميع أنواع اللابتوبات | ملفي الشخصي')

@section('content')

  <section id="login-form" class="py-3 px-2 mt-3">
    <h1 class="mb-4">الملف الشخصي</h1>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <form action="/profile/image" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-group text-center">
                        <img src="{{ asset('images/' . $user->image) }}" class="img-fluid rounded-circle" id="image-preview" style="max-width: 250px">
                        <div class="mt-2">
                            <input type="file" name="image" id="image-input" class="d-none" onchange="previewImage(this, '#image-preview');">
                            <div class="btn bg-success text-light" onclick="openFileInput('#image-input');"><i class="lni lni-image"></i> اختيار صورة</div>
                            @error('image')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                            <button type="submit" class="btn bg-warning text-dark"><i class="lni lni-save"></i>  حفظ</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-12 col-md-8 col-lg-6">
                <form action="/profile" method="POST">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="username"><i class="lni lni-user"></i> الاسم الكامل</label>
                        <input type="text" name="fullname" id="username" value="{{ $user->fullname }}" class="form-control border border-secondary" placeholder="الاسم والكنية">
                        @error('fullname')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="phone"><i class="lni lni-phone"></i> رقم الهاتف</label>
                        <input type="text" name="phone" id="phone" value="{{ $user->phone }}" class="form-control border border-secondary" placeholder="946-918-650 (963)">
                        @error('phone')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="address"><i class="lni lni-map"></i> العنوان</label>
                        <input type="text" name="address" id="address" value="{{ $user->address }}" class="form-control border border-secondary" placeholder="دمشق - الحمرا">
                        @error('address')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group text-secondary">
                        <p>
                            <i class="lni lni-envelope"></i> البريد الالكتروني: {{ $user->email }}
                        </p>
                        <!--
                        <p>
                            <a href="#">إعادة تعيين كلمة السر؟</a>
                        </p>
                        -->
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn bg-success text-light">
                            <i class="lni lni-save"></i> 
                            حفظ التغييرات
                        </button>
                    </div>
                </form>
                @if (!auth()->user()->isAdmin())
                    
                    <form action="/logout" class="mt-3 d-inline" method="post">
                        @csrf
                        <a href="/orders" class="btn bg-primary text-light"><i class="lni lni-clipboard"></i> طلباتي</a>
                        <button type="submit" class="btn bg-info text-light"><i class="lni lni-exit"></i> تسجيل الخروج</button>
                    </form>
                    <form action="/profile" class="d-inline" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn bg-danger text-light delete-btn"><i class="lni lni-trash"></i> حذف الحساب</button>
                    </form>
                
                @else  

                    <form action="/logout" class="mt-3 d-inline" method="post">
                        @csrf
                        <button type="submit" class="btn bg-info text-light"><i class="lni lni-exit"></i> تسجيل الخروج</button>
                    </form>

                @endif
            </div>
        </div>
    </div>
  </section>

@endsection