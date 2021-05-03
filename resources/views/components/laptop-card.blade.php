
<div class="col-6 col-md-4 col-lg-3 px-1 mb-2">
  <div class="card h-100 shadow">
    <div class="view zoom overlay">
      <img class="img-fluid w-100" src="{{ asset('images/' . $laptop->image) }}">
      <p class="mb-0"><span class="badge bg-warning text-dark badge-news views"><i class="lni lni-eye"></i> {{ $laptop->views }}</span></p>
    </div>
    @if ($role == 'user')
      <div class="card-body text-center">
        <h5><a class="text-primary font-weight-bold" href="/laptops/{{ $laptop->id }}/{{ $laptop->name }}">{{ $laptop->name }}</a></h5>
        <p class="small text-uppercase mb-2"><i class="lni lni-tag"></i> {{ $laptop->category->name }}</p>
        <h6 class="mb-3">
          <span class="text-danger d-block font-weight-bold h5 mb-0"><bdi>s.p</bdi>  {{ $laptop->afterDiscountPrice() }}</span>
          <strike class="text-secondary"><small><bdi>s.p</bdi>  {{ $laptop->beforeDiscountPrice() }}</small></strike>
        </h6>
        <form action="/cart" class="d-inline" method="POST">
          @csrf
          <input type="hidden" name="laptop_id" value="{{ $laptop->id }}">
          <button type="submit" class="btn bg-success text-light btn-sm mr-1 mb-2">
            <i class="lni lni-cart pl-2"></i>إضافة للسلة
          </button>
        </form>
        <form action="/favourites" class="d-inline" method="POST">
          @csrf
          <input type="hidden" name="laptop_id" value="{{ $laptop->id }}">
          <button type="submit" class="btn bg-danger text-light btn-sm px-3 mb-2 material-tooltip-main"
          data-toggle="tooltip" data-placement="top"
          title="إضافة للمفضلة">
            <i class="lni lni-heart-filled"></i>
          </button>
        </form>
      </div>
    @else
      <div class="card-body text-center">
        <h5><a class="text-dark" href="/admin/laptops/{{ $laptop->id }}">{{ $laptop->name }}</a></h5>
        <p class="small text-muted text-uppercase mb-2">{{ $laptop->type }}</p>
        <h6 class="mb-3">
          <span class="text-danger d-block mr-1 font-weight-bold h5 mb-0"><bdi>s.p</bdi>  {{ $laptop->afterDiscountPrice() }}</span>
          <strike class="text-secondary"><small><bdi>s.p</bdi>  {{ $laptop->beforeDiscountPrice() }}</small></strike>
        </h6>
        <a href="/admin/laptops/{{ $laptop->id }}/edit" class="btn bg-info text-light btn-sm mr-1 mb-2">
          <i class="lni lni-pencil pl-2"></i>تعديل
        </a>
        <form action="/admin/laptops/{{ $laptop->id }}" class="d-inline" method="POST">
          @csrf
          @method('delete')
          <button type="submit" class="btn bg-danger text-light btn-sm px-3 mb-2 material-tooltip-main delete-btn">
            <i class="lni lni-trash pl-2"></i>حذف
          </button>
        </form>
      </div>
    @endif
  </div>
</div>
