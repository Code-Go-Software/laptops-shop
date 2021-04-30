@extends('admin.layouts.layout')

@section('title', 'إدارة سعر الصرف')

@section('content')

  <div class="col-12 mb-3">
    <h2>إدارة سعر الصرف</h2>
  </div>
  <div class="col-12 row justify-content-center">
    <div class="col-md-4 col-12">
      <div class="text-center mb-4">
        <h1 class="text-success"><bdi>s.p</bdi> {{ $content->where('key', 'currency')->first()->value }}</h1>
        <h3>قيمة معامل السعر الحالية</h3>
      </div>
      <form action="/admin/content/{{ $content->where('key', 'currency')->first()->id }}" method="post" class="mt-4">
        @csrf
        @method('put')
        <div class="form-group">
          <label for="currency">قيمة معامل السعر الجديدة</label>
          <input type="text" name="value" class="form-control border-secondary" placeholder="{{ $content->where('key', 'currency')->first()->value }}">
          @error('value')
            <small class="text-danger">{{ $message }}</small>
          @enderror
        </div>
        <div class="form-group">
          <button type="submit" class="btn bg-success text-light">تعديل القيمة</button>
        </div>
      </form>
    </div>
  </div>

@endsection