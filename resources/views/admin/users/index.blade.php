@extends('admin.layouts.layout')

@section('title', 'إدارة المستخدمين')

@section('content')

  <div class="col-12">
    <h2>إدارة المستخدمين</h2>
  </div>
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
        <label for="sort">ترتيب حسب الطلبات</label>
        <select class="form-control rounded-pill d-inline-block w-auto border-dark ml-2">
          <option value="0">الأعلى طلبا أولا</option>
          <option value="1">الأقل طلبا أولا</option>
        </select>
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary rounded-pill">تطبيق</button>
      </div>
    </form>
  </div>
  <div class="col-12">
    <h4 class="text-secondary mb-4">المستخدمون المسجلون <span>({{ $users->count() }})</span></h4>
    <div class="table-responsive-sm">
      <table class="table table-striped mt-2 table-sm table-hover">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">الصورة الشخصية</th>
            <th scope="col">الاسم الكامل</th>
            <th scope="col">البريد الإلكتروني</th>
            <th scope="col">رقم الهاتف</th>
            <th scope="col">العنوان</th>
            <th scope="col">تاريخ الإنضمام</th>
            <th scope="col">عدد الطلبات</th>
            <th scope="col"></th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
          
          @forelse ($users as $user)
            <tr>
              <th scope="row">{{ $loop->index + 1 }}</th>
              <td>
                <img src="{{ asset('assets/images/default-user.png') }}" class="rounded-circle mr-2" width="30px" height="30px">
              </td>
              <td>
                <small>{{ $user->fullname }}</small>
                <a href="/admin/users/{{ $user->id }}"><small><i class="lni lni-arrow-right-circle"></i></small></a>
              </td>
              <td>
                <small>{{ $user->email }}</small>
              </td>
              <td><small>{{ $user->phone }}</small></td>
              <td><small>{{ $user->address }}</small></td>
              <td><small>{{ $user->created_at }}</small></td>
              <td class="text-center"><b><i class="lni lni-clipboard"></i> {{ $user->orders->count() }}</b></td>
              <td>
                <form action="/admin/user/{{ $user->id }}" method="post">
                  @csrf
                  @method('delete')
                  <button type="submit" class="btn p-0">
                    <i class="lni lni-trash text-danger"></i>
                  </button>
                </form>
              </td>
              <td>
                <a href="/admin/users/{{ $user->id }}"><i class="lni lni-menu btn p-0 text-primary"></i></a>
              </td>
            </tr>
          @empty
          <tr class="text-center">
            لا يوجد أي مستخدمين مسجلين حاليا
          </tr>
          @endforelse

        </tbody>
      </table>
    </div>
  </div>

  <!--Pagination Start-->
  <div class="col-12 text-center mt-5">
    {{ $users->links() }}
  </div>
  <!--Pagination End-->

@endsection