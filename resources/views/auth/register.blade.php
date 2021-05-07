@extends('user.layouts.layout')

@section('title', 'اسم الشركة | إنشاء حساب جديد')
@section('description', 'أنشأ حسابك في متجر اسم الشركة الإلكتروني مجانا وتمتع بتجربة تسوق للحواسيب المحمولة فريدة من نوعها ما الذي تنتظره أنشأ حسابك  واطلب حاسوبك ودعنا نتولى بقية التفاصيل')

@section('content')

<style>
  #services{
    display: none;
  }
</style>

  <section id="login-form" class="py-3 px-2 mt-5 mb-5">
    <h1 class="text-center mb-4">إنشاء حساب جديد</h1>
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-12 col-md-8 col-lg-6">
          <form action="{{ route('register') }}" method="POST">
            @csrf
            <div class="form-group">
              <label for="username"><i class="lni lni-user"></i> الاسم الكامل</label>
              <input type="text" name="fullname" id="username" class="form-control border-secondary" placeholder="الاسم والكنية" value="{{ old('fullname') }}">
              
              @error('fullname')
                <small class="text-danger">{{ $message }}</small>
              @enderror

            </div>
            <div class="form-group">
              <label for="email"><i class="lni lni-envelope"></i> البريد الإلكتروني</label>
              <input type="email" name="email" id="email" class="form-control border-secondary" placeholder="user@email.com" value="{{ old('email') }}">

              @error('email')
                <small class="text-danger">{{ $message }}</small>
              @enderror

            </div>
            <div class="form-group">
              <label for="phone"><i class="lni lni-phone"></i> رقم الهاتف</label>
              <input type="text" name="phone" id="phone" class="form-control border-secondary" placeholder="946-918-650 (963)" value="{{ old('phone') }}">

              @error('phone')
                <small class="text-danger">{{ $message }}</small>
              @enderror

            </div>
            <div class="form-group">
              <label for="address"><i class="lni lni-map"></i> العنوان</label>
              <input type="text" name="address" id="address" class="form-control border-secondary" placeholder="دمشق - الحمرا" value="{{ old('address') }}">

              @error('address')
                <small class="text-danger">{{ $message }}</small>
              @enderror

            </div>
            <div class="form-group">
              <label for="password"><i class="lni lni-eye"></i> كلمة السر</label>
              <input type="password" name="password" id="password" class="form-control border-secondary" placeholder="********" value="{{ old('password') }}">

              @error('password')
                <small class="text-danger">{{ $message }}</small>
              @enderror

            </div>
            <div class="form-group">
              <label for="password-confirm"><i class="lni lni-eye"></i> تاكيد كلمة السر</label>
              <input type="password" name="password_confirmation" id="password-confirm" class="form-control border-secondary" placeholder="********" value="{{ old('password_confirmation') }}">

              @error('password_confirmation')
                <small class="text-danger">{{ $message }}</small>
              @enderror

            </div>
            <div class="form-group">
              <button class="btn btn-primary" type="submit">
                  إنشاء الحساب
              </button>
            </div>
            <div class="form-group">
              لديك حساب مسبقا؟ <a href="/login" class="text-info">تسجيل الدخول إلى حسابك</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

@endsection
