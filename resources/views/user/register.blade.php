@extends('user.layouts.layout')

@section('title', 'إنشاء حساب جديد')

@section('content')

  <section id="login-form" class="py-3 px-2 mt-3">
    <h1 class="text-center">إنشاء حساب جديد</h1>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6">
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="username"><i class="lni lni-user"></i> الاسم الكامل</label>
                        <input type="text" id="username" class="form-control border border-dark rounded-pill" placeholder="الاسم والكنية">
                    </div>
                    <div class="form-group">
                        <label for="email"><i class="lni lni-envelope"></i> البريد الإلكتروني</label>
                        <input type="email" id="email" class="form-control border border-dark rounded-pill" placeholder="user@email.com">
                    </div>
                    <div class="form-group">
                        <label for="phone"><i class="lni lni-phone"></i> رقم الهاتف</label>
                        <input type="text" id="phone" class="form-control border border-dark rounded-pill" placeholder="946-918-650 (963)">
                    </div>
                    <div class="form-group">
                        <label for="address"><i class="lni lni-map"></i> العنوان</label>
                        <input type="text" id="address" class="form-control border border-dark rounded-pill" placeholder="دمشق - الحمرا">
                    </div>
                    <div class="form-group">
                        <label for="password"><i class="lni lni-eye"></i> كلمة السر</label>
                        <input type="password" id="password" class="form-control border border-dark rounded-pill" placeholder="********">
                    </div>
                    <div class="form-group">
                        <label for="password-confirm"><i class="lni lni-eye"></i> تاكيد كلمة السر</label>
                        <input type="password" id="password-confirm" class="form-control border border-dark rounded-pill" placeholder="********">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary rounded-pill" type="submit">
                            إنشاء الحساب
                        </button>
                    </div>
                    <div class="form-group">
                        لديك حساب مسبقا؟ <a href="login.html">تسجيل الدخول إلى حسابك</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
  </section>

@endsection