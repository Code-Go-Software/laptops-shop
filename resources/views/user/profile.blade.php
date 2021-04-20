@extends('user.layouts.layout')

@section('title', 'الملف الشخصي')

@section('content')

  <section id="login-form" class="py-3 px-2 mt-3">
    <h1 class="mb-4">الملف الشخصي</h1>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6">
                <form action="/profile" method="POST">
                    @csrf
                    <div class="form-group text-center">
                        <img src="../assets/images/default-user.png" class="img-fluid rounded-circle">
                        <div class="mt-2">
                            <button class="btn btn-success"><i class="lni lni-image"></i> اختيار صورة</button>
                            <button class="btn btn-primary"><i class="lni lni-save"></i>  حفظ</button>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="username"><i class="lni lni-user"></i> الاسم الكامل</label>
                        <input type="text" id="username" class="form-control border border-dark rounded-pill" placeholder="الاسم والكنية">
                    </div>
                    <div class="form-group">
                        <label for="phone"><i class="lni lni-phone"></i> رقم الهاتف</label>
                        <input type="text" id="phone" class="form-control border border-dark rounded-pill" placeholder="946-918-650 (963)">
                    </div>
                    <div class="form-group">
                        <label for="address"><i class="lni lni-map"></i> العنوان</label>
                        <input type="text" id="address" class="form-control border border-dark rounded-pill" placeholder="دمشق - الحمرا">
                    </div>
                    <div class="form-group text-secondary">
                        <p>
                            <i class="lni lni-envelope"></i> البريد الالكتروني: test@web.com
                        </p>
                        <!--
                        <p>
                            <a href="#">إعادة تعيين كلمة السر؟</a>
                        </p>
                        -->
                    </div>
                    <div class="form-group text-center">
                        <button class="btn btn-primary rounded-pill">
                            <i class="lni lni-save"></i> 
                            حفظ التغييرات
                        </button>
                    </div>
                </form>
                <form action="/logout" class="mt-3 d-inline" method="post">
                    @csrf
                    <a href="/orders" class="btn btn-success rounded-pill"><i class="lni lni-clipboard"></i> طلباتي</a>
                    <button type="submit" class="btn btn-dark rounded-pill"><i class="lni lni-exit"></i> تسجيل الخروج</button>
                </form>
                <form action="/profile" class="d-inline" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger rounded-pill"><i class="lni lni-trash"></i> حذف الحساب</button>
                </form>
            </div>
        </div>
    </div>
  </section>

@endsection