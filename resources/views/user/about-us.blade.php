@extends('user.layouts.layout')

@section('title', 'حول الشركة')

@section('content')
    
  <section id="about-us" class="py-3 px-2 mt-3">
    <h1 class="mb-4">حول الشركة</h1>
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-12 col-md-8 col-lg-6 my-5">
          <p class="h4">{{ $content->where('key', 'about_us')->first()->value }}</p>
          <br><br>
        </div>
      </div>
    </div>
  </section>

@endsection
