@extends('admin.layouts.layout')

@section('title', 'إدارة الفئات')

@section('content')

  <div class="col-12">
    <h2>إدارة الفئات</h2>
  </div>
  <!--
  <div class="col-12">
    <form action="" class="row mt-4 mb-4" method="get">
      <div class="form-group mr-3">
        <label for="sort">ترتيب حسب الزمن</label>
        <select class="form-control rounded-pill d-inline-block w-auto border-dark ml-2">
          <option value="0">الأحدث أولا</option>
          <option value="1">الأقدم أولا</option>
        </select>
      </div>
      <div class="form-group mr-3">
        <label for="sort">ترتيب حسب المشاهدات</label>
        <select class="form-control rounded-pill d-inline-block w-auto border-dark ml-2">
          <option value="0">الأعلى مشاهدة أولا</option>
          <option value="1">الأقل مشاهدة أولا</option>
        </select>
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary rounded-pill">تطبيق</button>
      </div>
    </form>
  </div>
  -->
  <div class="col-12 my-5">
    <h4 class="mt-3"><i class="lni lni-tag ml-3"></i> الفئات <span>({{ $categories->count() }})</span></h4>
    <p class="small text-secondary">قائمة بجميع فئات أو أقسام الحواسيب الموجودة في المتجر مع معلوماتها الأساسية</p>
    <div class="table-responsive-sm mt-3 bg-light">
      <table class="table table-sm">
        <thead class="bg-primary text-light">
          <tr>
            <th scope="col">#</th>
            <th scope="col">اسم الفئة</th>
            <th scope="col">الوصف</th>
            <th scope="col">عدد الحواسيب</th>
            <th scope="col">عدد المشاهدات</th>
            <th scope="col">ناريخ الإنشاء</th>
            <th scope="col"></th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody class="text-primary">
          
          @forelse ($categories as $category)
            <tr>
              <th scope="row">{{ $loop->index + 1 }}</th>
              <td>
                {{ $category->name }}
              </td>
              <td>
                {{ $category->description }}
              </td>
              <td>
                <b><i class="lni lni-display-alt"></i> {{ $category->laptops->count() }}</b>
              </td>
              <td>
                <b><i class="lni lni-eye"></i> {{ $category->laptops->sum('views') }}</b>
              </td>
              <td>{{ $category->created_at }}</td>
              <td>
                <form action="/admin/categories/{{ $category->id }}" method="post">
                  @csrf
                  @method('delete')
                  <button type="submit" class="btn p-0 delete-btn"><i class="lni lni-trash text-danger"></i></button>
                </form>
              </td>
              <td>
                <a href="/admin/categories/{{ $category->id }}/edit"><i class="lni lni-pencil btn text-primary p-0"></i></a>
              </td>
            </tr>
          @empty
            <tr>
              <td colspan="8" class="text-secondary">
                لا يوجد أي فئات حواسيب حاليا
              </td>
            </tr>
          @endforelse

        </tbody>
      </table>
      <br>
      <a href="/admin/categories/create" class="btn bg-success text-light"><i class="lni lni-plus"></i> إضافة فئة جديدة</a>
    </div>
  </div>

@endsection