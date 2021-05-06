@extends('user.layouts.layout')

@section('title', 'اسم الشركة لتجارة جميع أنواع اللابتوبات | تسجيل الدخول')
@section('description', 'سجل الدخول إلى حسابك لدينا وتحكم بكامل معلوماتك في متجر اسم الشركة الإلكتروني ما الذي تنتظره سجل دخولك الآن أو أنشأ حسابك لدينا وتمتع بجيمع خدماتنا مجانا')

@section('content')

<style>
  #services{
    display: none;
  }
</style>

<section id="login-form" class="py-3 px-2 my-5">
  <h1 class="text-center">تسجيل الدخول</h1>
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-10 col-md-6 col-lg-4">
        <form action="{{ route('login') }}" method="POST">
          @csrf
          <div class="form-group">
            <label for="email"><i class="lni lni-envelope"></i> البريد الإلكتروني</label>
            <input type="text" name="email" id="email" class="form-control border-secondary" placeholder="user@email.com" value="{{ old('email') }}">

            @error('email')
                <small class="text-danger">{{ $message }}</small>
            @enderror

          </div>
          <div class="form-group">
            <label for="password"><i class="lni lni-eye"></i> كلمة السر</label>
            <input type="password" name="password" id="password" class="form-control border-secondary" placeholder="********"  value="{{ old('password') }}">

            @error('password')
                <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>
          <div class="form-group">
            <button class="btn bg-primary text-light" type="submit">
            تسجيل الدخول
            </button>
          </div>
          <div class="form-group">
            ليس لديك حساب؟ <a href="/register">أنشئ حسابك الآن</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

@endsection
