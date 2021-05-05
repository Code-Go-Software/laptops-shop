@extends('admin.layouts.layout')

@section('title', 'إدارة المستخدمين')

@section('content')

  <div class="col-12 mb-3">
    <h2>إدارة المستخدمين</h2>
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
  -->
  <div class="col-12 my-5">
    <h4 class="text-primary"><i class="lni lni-user ml-3"></i> المستخدمون المسجلون <span>({{ $users->count() }})</span></h4>
    <p class="small text-secondary">
      قائمة بجميع المستخدمين الذين يملكون حسابات في المتجر مع معلوماتهم الأساسية
    </p>
    <div class="table-responsive-sm bg-light mt-4">
      <table class="table table-sm">
        <thead class="bg-warning text-dark">
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
        <tbody class="text-primary">
          
          @forelse ($users as $user)
            <tr>
              <th scope="row">{{ $loop->index + 1 }}</th>
              <td>
                <img src="{{ asset('images/' . $user->image) }}" class="rounded-circle mr-2" width="30px" height="30px">
              </td>
              <td>
                <span>{{ $user->fullname }}</span>
                <a href="/admin/users/{{ $user->id }}"><small><i class="lni lni-arrow-right-circle"></i></small></a>
              </td>
              <td>
                {{ $user->email }}
              </td>
              <td>{{ $user->phone }}</td>
              <td>{{ $user->address }}</td>
              <td>{{ $user->created_at }}</td>
              <td class="text-center"><b><i class="lni lni-clipboard"></i> {{ $user->orders->count() }}</b></td>
              <td>
                <form action="/admin/user/{{ $user->id }}" method="post">
                  @csrf
                  @method('delete')
                  <button type="submit" class="btn p-0 delete-btn">
                    <i class="lni lni-trash text-danger"></i>
                  </button>
                </form>
              </td>
              <td>
                <a href="/admin/users/{{ $user->id }}"><i class="lni lni-menu btn p-0 text-primary"></i></a>
              </td>
            </tr>
          @empty
            <tr>
              <td colspan="10" class="text-secondary">
                لا يوجد أي مستخدمين مسجلين حاليا
              </td>
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