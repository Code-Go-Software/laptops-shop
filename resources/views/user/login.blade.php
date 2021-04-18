@extends('user.layouts.layout')

@section('title', 'تسجيل الدخول')

@section('content')

  <section id="login-form" class="py-3 px-2 mt-3">
    <h1 class="text-center">تسجيل الدخول</h1>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6">
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="email"><i class="lni lni-envelope"></i> البريد الإلكتروني</label>
                        <input type="text" id="email" class="form-control border border-dark rounded-pill" placeholder="user@email.com">
                    </div>
                    <div class="form-group">
                        <label for="password"><i class="lni lni-eye"></i> كلمة السر</label>
                        <input type="password" id="password" class="form-control border border-dark rounded-pill" placeholder="********">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary rounded-pill" type="submit">
                            تسجيل الدخول
                        </button>
                    </div>
                    <div class="form-group">
                        ليس لديك حساب؟ <a href="register.html">أنشئ حسابك الآن</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
  </section>

@endsection