@extends('user.layouts.layout')

@section('title', 'المفضلة')

@section('content')

  <section id="favourites" class="py-3 px-2 mt-3">
    <h1 class="mb-4">القائمة المفضلة</h1>
    <div class="container-fluid">
      <div class="row justify-content-center">

        <div class="col-12 col-md-8 col-lg-6">

          @forelse ($favourites as $favourite)

            @php
                $laptop = $favourite->laptop;
            @endphp

            <div class="item row align-items-center shadow py-2 px-1 mb-2">
              <div class="col-3">
                <img src="../assets/images/laptop1.jpg" class="img-fluid">
              </div>
              <div class="col-7">
                <p class="font-weight-bold mb-1">
                  <a href="/laptops/{{ $laptop->id }}/{{ $laptop->name }}" class="text-dark">{{ $laptop->name }}</a>
                </p>
                <span class="text-success font-weight-bold"><bdi>s.p</bdi> $laptop->afterDiscountPrice()</span>
                <strike class="text-secondary"><small><bdi>s.p</bdi> $laptop->beforeDiscountPrice()</small></strike>
              </div>
              <div class="col-2 text-right">
                <form action="/favourites/{{ $favourite->id }}" method="post">
                  @csrf
                  @method('delete')
                  <button class="btn"><i class="lni lni-trash text-danger" role="button"></i></button>
                </form>
              </div>
            </div>

          @empty
              @auth
                <div class="alert alert-secondary">إن قائمتك المفضلة فارغة</div>
              @endauth

              @guest
                <div class="alert alert-secondary mt-5 mb-5">
                  قم بإنشاء حسابك لدينا وتحكم بقائمتك المفضلة كما تريد
                   <a href="/register">إنشاء حساب</a>
                </div>
              @endguest
          @endforelse

        </div>
      </div>
    </div>
  </section>

@endsection
