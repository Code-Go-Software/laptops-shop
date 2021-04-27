@extends('admin.layouts.layout')

@section('title', 'إضافة فئة جديدة')

@section('content')

  <div class="col-12">
    <h2>إدارة الفئات > إضافة فئة جديدة</h2>
  </div>
  <div class="col-12 row justify-content-center">
    <div class="col-12 col-md-8 col-lg-6">
      <form action="/admin/categories" method="post" class="mt-3">
        @csrf

        <div class="form-group">
          <label for="name">اسم الفئة</label>
          <input type="text" name="name" id="name" class="form-control rounded-pill border-dark" placeholder="مثل: حواسيب للألعاب" value="{{ old('name') }}">
          @error('name')
                <small class="text-danger">{{ $message }}</small>
          @enderror
        </div>

        <div class="form-group">
          <label for="description">وصف الفئة</label>
          <textarea id="description" name="description"
          class="form-control rounded border-dark"
          cols="30" rows="10"
          placeholder="وصف للحواسيب ضمن هذه الفئة">{{ old('description') }}</textarea>
          
          @error('description')
                <small class="text-danger">{{ $message }}</small>
          @enderror
        </div>

        <div class="form-group">
          <button type="submit" class="btn btn-success btn-block rounded-pill"><i class="lni lni-plus"></i> إضافة الفئة</button>
        </div>

      </form>
    </div>
  </div>

@endsection