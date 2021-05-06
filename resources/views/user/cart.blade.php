@extends('user.layouts.layout')

@section('title', 'اسم الشركة لتجارة جميع أنواع اللابتوبات | سلة المشتريات')
@section('description', 'أنشأ حسابك الآن مجانا في متجر اسم الشركة الإلكتروني وتحكم بسلة مشترياتك كما تريد اطلب حاسوبك الآن ودعنا نتولى بقية التفاصيل')

@section('content')
    
  <section id="orders" class="py-3 px-2 mt-3">
    <h1 class="mb-4">سلة المشتريات ({{ $cart_items->count() }})</h1>
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-12 col-md-8 col-lg-6 my-5">

          @php
              $total_price = 0;
          @endphp

          @forelse ($cart_items as $item)

            @php
                $laptop = $item->laptop;
                $total_price += $laptop->afterDiscountPrice();
            @endphp

            <div class="item row align-items-center shadow py-2 px-1 mb-2">
              <div class="col-3">
                <img src="{{ asset('images/' . $laptop->image) }}" class="img-fluid">
              </div>
              <div class="col-7">
                <p class="font-weight-bold mb-1">
                  <a href="/laptops/{{ $laptop->id }}/{{ $laptop->name }}" class="text-primary">{{ $laptop->name }}</a>
                </p>
                <span class="text-success font-weight-bold"><bdi>s.p</bdi> {{ $laptop->afterDiscountPrice() }}</span>
                <strike class="text-secondary"><small><bdi>s.p</bdi> {{ $laptop->beforeDiscountPrice() }}</small></strike>
              </div>
              <div class="col-2 text-right">
                <form action="/cart/{{ $item->id }}" method="post">
                  @csrf
                  @method('delete')
                  <button type="submit" class="btn delete-btn"><i class="lni lni-reply text-danger" role="button"></i></button>
                </form>
              </div>
            </div>
          @empty

            @auth
              <div class="alert alert-secondary">إن سلة مشترياتك فارغة</div>
            @endauth

            @guest
              <div class="alert alert-secondary mt-5 mb-5">
                أنشئ حسابك الإن وامتلك سلتك الخاصة
                  <a href="/register">إنشاء حساب</a>
              </div>
            @endguest
              
          @endforelse

        </div>
      </div>
    </div>

    @auth
      <div class="text-center mt-5 mb-5">
        <h3>قيمة الطلب النهائية</h3>
        <h1 class="text-danger"><bdi>s.p</bdi> {{ $total_price }}</h1>
      </div>
      <div class="container-fluid">
        <div class="row justify-content-center">
          <form action="/orders" method="POST" class="col-12 col-md-4 col-lg-3">
            @csrf
            <input type="hidden" name="total_price" value="{{ $total_price }}">
            <div class="form-group">

              <input type="text" name="contact_number"
              class="form-control form-control-lg border-secondary text-center"
              placeholder="رقم التواصل: 0946918650"
              value="{{ auth()->user()->phone }}">

              @error('contact_number')
                <small class="text-danger">{{ $message }}</small>
              @enderror
              
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-lg btn-block bg-success text-light">
                <i class="lni lni-checkmark-circle"></i>
                تأكيد الطلب
              </button>
            </div>
          </form>
        </div>
      </div>
    @endauth

  </section>

@endsection
