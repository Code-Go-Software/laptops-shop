@extends('admin.layouts.layout')

@section('title', 'إدارة سعر الصرف')

@section('content')

  <div class="col-12">
    <h2>إدارة سعر الصرف</h2>
  </div>
  <div class="col-12 row justify-content-center">
    <div class="col-4">
      <div class="text-center mb-4">
        <h1 class="text-success"><bdi>s.p</bdi> {{ $content->where('key', 'currency')->first()->value }}</h1>
        <h3>سعر الصرف الحالي</h3>
      </div>
      <form action="/admin/content/{{ $content->where('key', 'currency')->first()->id }}" method="post" class="mt-4">
        @csrf
        @method('put')
        <div class="form-group">
          <label for="currency">سعر الصرف الجديد</label>
          <input type="text" name="value" class="form-control border-dark rounded-pill" placeholder="{{ $content->where('key', 'currency')->first()->value }}">
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary rounded-pill">تعديل سعر الصرف</button>
        </div>
      </form>
      <div class="alert alert-warning">
        <i class="lni lni-warning"></i> ادخل سعر الصرف بالعملة السورية
      </div>
    </div>
  </div>

@endsection